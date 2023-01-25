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
    public function addAccount(Request $request){
        $lang = $request->header('lang');
        if($lang == ''){
            $resArr = [
                'status' => 'failed',
                'message' => trans('api.pleaseSendLangCode'),
                'data' => []
            ];
            return response()->json($resArr);
        }
        $rules = [
            'page_title' => 'required|string',
            'url' => 'required|url|unique:accounts,url',
            'type_id' => 'required',
            'user_id' => 'required|exists:users,id',
            'category_name' => 'required',
        ];
        $validator = Validator::make($request->all(), $rules);
        if($validator->fails())
        {
            foreach ((array)$validator->errors() as $error) {
                return response()->json([
                    'status' => 'failed',
                    'message' => trans('api.pleaseRecheckYourDetails'),
                    'data' => $error
                ]);
            }
        }
        $data = $request->except(['_token']);
        $account = Accounts::create($data);
        if($account){
            $resArr = [
                'status' => 'success',
                'message' => trans('api.yourDataHasBeenSentSuccessfully'),
                'data' => []
            ];
        }else{
            $resArr = [
                'status' => 'failed',
                'message' => trans('api.yourDataHasBeenSentFailed'),
                'data' => []
            ];
        }
        return response()->json($resArr);
    }

    public function showAccount(Request $request){
        $lang = $request->header('lang');
        if($lang == ''){
            $resArr = [
                'status' => 'failed',
                'message' => trans('api.pleaseSendLangCode'),
                'data' => []
            ];
            return response()->json($resArr);
        }
        $user = User::find(auth()->user()->id);
        $accounts = Accounts::where('user_id', $user->id)->get();
        if($accounts == '[]'){
            $resArr = [
                'status' => false,
                'message' => trans('api.youDontHaveAnyAccount'),
                'data' => []
            ];
            return response()->json($resArr);
        }else{
            return response()->json(['accounts'=>showAccountResource::collection($accounts)]);
        }
    }
    public function editAccount(Request $request, User $user ){
        $lang = $request->header('lang');
        if($lang == ''){
            $resArr = [
                'status' => 'failed',
                'message' => trans('api.pleaseSendLangCode'),
                'data' => []
            ];
            return response()->json($resArr);
        }
        if(!$user){
            return $user;
            $resArr = [
                'status' => 'failed',
                'message' => trans('api.yourDataHasBeenSentFailed'),
                'data' => []
            ];
            return response()->json($resArr);
        }else{
             return response()->json([
                'user' => new UserResource($user),
                'qrcode' => asset('uploads/qrcodes/user-'.$user->id.'.svg')
            ]);
        }
    }

    public function updateAccount(Request $request){
        $lang = $request->header('lang');
        $user = User::find(auth()->user()->id);
        if (checkUserForApi($lang, $user->id) !== true) {
            return checkUserForApi($lang, $user->id);
        }
        $rules = [
            'name' => 'nullable',
            'familyName' => 'nullable',
            'email' => 'nullable|email|unique:users,email,'.$user->id,
            'phone' => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|unique:users,phone,'.$user->id,
            'job_title' => 'nullable|string|max:255',
            'password' => 'nullable',
            'bio' => 'nullable|string|max:255',
            'image' => 'nullable|mimes:jpeg,jpg,png',
            'background_image' => 'nullable|image'
        ];
        $validator=Validator::make($request->all(),$rules);
        if($validator->fails())
        {
            foreach ((array)$validator->errors() as $error) {
                return response()->json([
                    'status' => 'failed',
                    'message' => trans('api.pleaseRecheckYourDetails'),
                    'data' => $error
                ]);
            }
        }
        $data = $request->except(['_token','password','image','background_image']);
        if ($request['password'] != '') {
            $data['password'] = bcrypt($request['password']);
        }
        $user = User::find($user->id);
        if ($request->image != '') {
            if ($user->image != '') {
                delete_image('users/'.$user->id , $user->image);
            }
            $data['image'] = upload_image_without_resize('users/'.$user->id , $request->image );
        }
        if ($request->background_image != '') {
            if ($user->background_image != '') {
                delete_image('users/'.$user->id , $user->background_image);
            }
            $data['background_image'] = upload_image_without_resize('users/'.$user->id , $request->background_image );
        }

        if ($user->update($data)) {
            $resArr = [
                'status' => 'success',
                'message' => trans('api.yourDataHasBeenSavedSuccessfully'),
                'data' => $user->apiData($lang)
            ];
        } else {
            $resArr = [
                'status' => 'failed',
                'message' => trans('api.someThingWentWrong'),
                'data' => []
            ];
        }
        return response()->json($resArr);

    }
}
