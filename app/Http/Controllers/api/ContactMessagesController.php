<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\ContactMessages;
use Response;

class ContactMessagesController extends Controller
{
    public function sendContactMessage(Request $request)
    {
        $lang = $request->header('lang');
        $user_id = $request->header('user');

        if (checkUserForApi($lang, $user_id) !== true) {
            return checkUserForApi($lang, $user_id);
        }

        $rules = [
                    'name' => 'required|string',
                    'email' => 'required|email',
                    'title' => 'required',
                    'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/',
                    'content' => 'required|string'
                ];
        $validator=Validator::make($request->all(),$rules);
        if($validator->fails())
        {
            foreach ((array)$validator->errors() as $error) {
                return response()->json([
                    'status' => false,
                    'message' => trans('api.pleaseRecheckYourDetails'),
                    'data' => $error
                ]);
            }
        }

        $data = $request->except(['_token']);
        $data['user_id'] = $user_id;
        $message = ContactMessages::create($data);
        if ($message) {
            $resArr = [
                'status' => true,
                'message' => trans('api.yourDataHasBeenSentSuccessfully'),
                'data' => []
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
