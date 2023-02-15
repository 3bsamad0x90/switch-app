<?php

namespace App\Http\Controllers\api;

use App\Accounts;
use App\Http\Controllers\Controller;
use App\Http\Requests\users\updateAccountRequest;
use App\Http\Resources\showAccountResource;
use App\Http\Resources\UserResource;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class AccountsController extends Controller
{
    public function addAccount(Request $request)
    {
        $lang = $request->header('lang');
        $user = auth()->user();
        if (checkUserForApi($lang, $user->id) !== true) {
            return checkUserForApi($lang, $user->id);
        }
        $rules = [
            'page_title' => 'required|string',
            'url' => 'required|unique:accounts,url', 'regex:/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i',
            'type_id' => 'required',
            'category_name' => 'required',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            foreach ((array)$validator->errors() as $error) {
                return response()->json([
                    'status' => false,
                    'message' => trans('api.pleaseRecheckYourDetails'),
                    'data' => $error
                ]);
            }
        }
        $accounts = Accounts::get();
        $account = $accounts->last();
        $position = $account->id + 1;
        $data = $request->except(['_token']);
        $data['position'] = $position;
        $data['user_id'] = $user->id;
        $account = Accounts::create($data);
        if ($account->save()) {
            $resArr = [
                'status' => true,
                'message' => trans('api.yourDataHasBeenSentSuccessfully'),
                'data' => $account
            ];
        } else {
            $resArr = [
                'status' => false,
                'message' => trans('api.yourDataHasBeenSentFailed'),
            ];
        }
        return response()->json($resArr);
    }
    //Reposition Accounts
    public function reposition(Request $request)
    {
        $lang = $request->header('lang');
        $user = auth()->user();
        if (checkUserForApi($lang, $user->id) !== true) {
            return checkUserForApi($lang, $user->id);
        }
        $rules = [
            'accountId' => 'required',
            'position' => 'required',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            foreach ((array)$validator->errors() as $error) {
                return response()->json([
                    'status' => false,
                    'message' => trans('api.pleaseRecheckYourDetails'),
                    'data' => $error
                ]);
            }
        }
        $account = Accounts::find($request->accountId);
        $account['position'] = $request->position;
        $account->update();
        $accounts = Accounts::where('user_id', $user->id)->where('position', '>' , $request->position)->get();
        $i = $request->position + 1;
        foreach($accounts as $account) {
            $account['position'] = $request->position + $i++;
            $account->update();
        }
        $Allaccounts = Accounts::where('user_id', $user->id)->orderBy('position', 'asc')->get();
        if ($accounts) {
            $resArr = [
                'status' => true,
                'message' => trans('api.yourDataHasBeenSentSuccessfully'),
                'accounts' => $Allaccounts
            ];
        } else {
            $resArr = [
                'status' => false,
                'message' => trans('api.yourDataHasBeenSentFailed'),
            ];
        }
        return response()->json($resArr);
    }
    // Update Account
    public function updateAcc(Request $request, Accounts $account)
    {
        $lang = $request->header('lang');
        $user = auth()->user();
        if ($lang == '') {
            $resArr = [
                'status' => false,
                'message' => trans('api.pleaseSendLangCode'),
                'data' => []
            ];
            return response()->json($resArr);
        }

        if ($account->user_id != $user->id) {
            $resArr = [
                'status' => false,
                'message' => trans('api.YouDoNotHaveAPermissionToThisAccount'),
            ];
            return response()->json($resArr);
        }
        $rules = [
            'page_title' => 'required|string',
            'url' => 'required', 'regex:/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i|unique:accounts,url,' . $account->id,
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            foreach ((array)$validator->errors() as $error) {
                return response()->json([
                    'status' => false,
                    'message' => trans('api.pleaseRecheckYourDetails'),
                    'data' => $error
                ]);
            }
        }
        $data = $request->except(['_token']);
        if ($account) {
            $account->update($data);
            $resArr = [
                'status' => true,
                'message' => trans('api.yourDataHasBeenSentSuccessfully'),
                'data' => $account
            ];
        } else {
            $resArr = [
                'status' => false,
                'message' => trans('api.yourDataHasBeenSentFailed'),
            ];
        }
        return response()->json($resArr);
    }
    //Delete Account
    public function deleteAcc(Request $request, Accounts $account)
    {
        $lang = $request->header('lang');
        $user = auth()->user();
        if ($lang == '') {
            $resArr = [
                'status' => false,
                'message' => trans('api.pleaseSendLangCode'),
                'data' => []
            ];
            return response()->json($resArr);
        }
        if ($account->user_id != $user->id) {
            $resArr = [
                'status' => false,
                'message' => trans('api.YouDoNotHaveAPermissionToThisAccount'),
            ];
            return response()->json($resArr);
        } else {
            $account->delete();
            $resArr = [
                'status' => true,
                'message' => trans('api.AccountDeletedSuccessfully'),
            ];
            return response()->json($resArr);
        }
    }

    public function showAccount(Request $request)
    {
        $lang = $request->header('lang');
        if ($lang == '') {
            $resArr = [
                'status' => false,
                'message' => trans('api.pleaseSendLangCode'),
            ];
            return response()->json($resArr);
        }
        $user = User::find(auth()->user()->id);
        $accounts = Accounts::where('user_id', $user->id)->orderBy('position', 'asc')->get();
        if ($accounts == '[]') {
            $resArr = [
                'status' => true,
                'message' => trans('api.youDontHaveAnyAccount'),
            ];
            return response()->json($resArr);
        } else {
            return response()->json(['accounts' => showAccountResource::collection($accounts)]);
        }
    }
    public function editAccount(Request $request, User $user)
    {
        $lang = $request->header('lang');
        if ($lang == '') {
            $resArr = [
                'status' => false,
                'message' => trans('api.pleaseSendLangCode'),
                'data' => []
            ];
            return response()->json($resArr);
        }
        if (!$user) {
            return $user;
            $resArr = [
                'status' => false,
                'message' => trans('api.yourDataHasBeenSentFailed'),
                'data' => []
            ];
            return response()->json($resArr);
        } else {
            return response()->json([
                'user' => new UserResource($user),
                'qrcode' => asset('uploads/qrcodes/user-' . $user->id . '.png')
            ]);
        }
    }
    //Change Status
    public function changeStatus(Request $request, Accounts $account)
    {
        $lang = $request->header('lang');
        $user = auth()->user();
        if ($lang == '') {
            $resArr = [
                'status' => false,
                'message' => trans('api.pleaseSendLangCode'),
                'data' => []
            ];
            return response()->json($resArr);
        }
        if ($account->user_id != $user->id) {
            $resArr = [
                'status' => false,
                'message' => trans('api.YouDoNotHaveAPermissionToThisAccount'),
            ];
            return response()->json($resArr);
        }
        $account->status = $request->status;
        if ($account->update()) {
            $resArr = [
                'status' => true,
                'message' => trans('api.yourDataHasBeenSentSuccessfully'),
                'data' => $account
            ];
        } else {
            $resArr = [
                'status' => false,
                'message' => trans('api.yourDataHasBeenSentFailed'),
            ];
        }
        return response()->json($resArr);
    }
    // update User Account
    public function updateAccount(Request $request)
    {
        $lang = $request->header('lang');
        $user = User::find(auth()->user()->id);
        if (checkUserForApi($lang, $user->id) !== true) {
            return checkUserForApi($lang, $user->id);
        }
        $rules = [
            'name' => 'nullable',
            'familyName' => 'nullable',
            'email' => 'nullable|email|unique:users,email,' . $user->id,
            'phone' => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|unique:users,phone,' . $user->id,
            'job_title' => 'nullable|string|max:255',
            'password' => 'nullable',
            'bio' => 'nullable|string|max:255',
            'image' => 'nullable|image',
            'background_image' => 'nullable|image'
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            foreach ((array)$validator->errors() as $error) {
                return response()->json([
                    'status' => false,
                    'message' => trans('api.pleaseRecheckYourDetails'),
                    'data' => $error
                ]);
            }
        }
        $data = $request->except(['_token', 'password', 'image', 'background_image']);
        if ($request['password'] != '') {
            $data['password'] = bcrypt($request['password']);
        }
        $user = User::find($user->id);
        if ($request->image != '') {
            if ($user->image != '') {
                delete_image('users/' . $user->id, $user->image);
            }
            $data['image'] = upload_image_without_resize('users/' . $user->id, $request->image);
        }
        if ($request->background_image != '') {
            if ($user->background_image != '') {
                delete_image('users/' . $user->id, $user->background_image);
            }
            $data['background_image'] = upload_image_without_resize('users/' . $user->id, $request->background_image);
        }

        if ($user->update($data)) {
            $resArr = [
                'status' => true,
                'message' => trans('api.yourDataHasBeenSavedSuccessfully'),
                'data' => $user->apiData($lang)
            ];
        } else {
            $resArr = [
                'status' => false,
                'message' => trans('api.someThingWentWrong'),
                'data' => []
            ];
        }
        return response()->json($resArr);
    }
}
