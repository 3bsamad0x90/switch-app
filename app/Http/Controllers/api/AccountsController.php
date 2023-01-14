<?php

namespace App\Http\Controllers\api;

use App\Accounts;
use App\Http\Controllers\Controller;
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
            'type' => 'required',
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
}
