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
            'url' => 'required|url',
            'type_id' => 'required',
            'user_id' => 'required',
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
        $accounts = Accounts::all();
        if(!$accounts){
            $resArr = [
                'status' => 'failed',
                'message' => trans('api.yourDataHasBeenSentFailed'),
                'data' => []
            ];
            return response()->json($resArr);
        }else{
            return response()->json(showAccountResource::collection($accounts));
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
            return response()->json(new UserResource($user));
        }
    }

    public function updateAccount(updateAccountRequest $request, User $user){
        $lang = $request->header('lang');
        if($lang == ''){
            $resArr = [
                'status' => 'failed',
                'message' => trans('api.pleaseSendLangCode'),
                'data' => []
            ];
            return response()->json($resArr);
        }


    }
}
