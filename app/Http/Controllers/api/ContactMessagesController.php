<?php

namespace App\Http\Controllers\api;

use App\ContactMessages;
use App\Http\Controllers\Controller;
use App\Notifications\UsersNotifications;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
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
        $user = User::find($user_id);
        $device_token = $user->device_token;

        $message = ContactMessages::create($data);
        if ($message) {
            // $user->notify(new UsersNotifications($message));
            $url = 'https://fcm.googleapis.com/fcm/send';

            $FcmToken = $device_token;

            $serverKey = 'AAAAMNkmgKM:APA91bGelrnWDzVXh2vi5CaKVN_8mXB8PDvisKl7S885kPrXAVZ8koGJ0JiUEIC-kYEH_Sm7-1m4xzH3oT8k9HNmFM30B51ZJn--mQla63cm6nRwLCPlmbrHadqgcNt8fN3T1yVHWakN'; // ADD SERVER KEY HERE PROVIDED BY FCM

            $data = [
                "registration_ids" => $FcmToken,
                "notification" => [
                    "title" => $request->title,
                    "body" => $request->content,
                ]
            ];
            $encodedData = json_encode($data);

            $headers = [
                'Authorization:key=' . $serverKey,
                'Content-Type: application/json',
            ];

            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
            // Disabling SSL Certificate support temporarly
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $encodedData);
            // Execute post
            $result = curl_exec($ch);
            if ($result === FALSE) {
                die('Curl failed: ' . curl_error($ch));
            }
            // Close connection
            curl_close($ch);


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

    public function exchange(Request $request){
        $lang = $request->header('lang');
        $user_id = $request->header('user');
        if (checkUserForApi($lang, $user_id) !== true) {
            return checkUserForApi($lang, $user_id);
        }

        $messages = ContactMessages::where('user_id',$user_id)->where('status', 0)->get();
        if ($messages) {
            $resArr = [
                'status' => true,
                'message' => trans('api.yourDataHasBeenSentSuccessfully'),
                'data' => $messages
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
    public function exchangeStatus(Request $request, $id){
        $lang = $request->header('lang');
        $user_id = $request->header('user');
        if (checkUserForApi($lang, $user_id) !== true) {
            return checkUserForApi($lang, $user_id);
        }
        $message = ContactMessages::find($id);
        $message->status = $request->status;
        $message->save();
        if ($message->status == 1){
            $resArr = [
                'status' => true,
                'message' => trans('api.exchangeTrue'),
                'data' => []
            ];
        }elseif($message->status == 0){
            $resArr = [
                'status' => true,
                'message' => trans('api.exchangeFalse'),
                'data' => []
            ];
        }else{
            $resArr = [
                'status' => false,
                'message' => trans('api.someThingWentWrong'),
                'data' => []
            ];

        }

        return response()->json($resArr);
    }
    public function userconnection(Request $request){
        $lang = $request->header('lang');
        $user_id = $request->header('user');
        if (checkUserForApi($lang, $user_id) !== true) {
            return checkUserForApi($lang, $user_id);
        }
        $messages = ContactMessages::where('status', 1)->where('user_id',$user_id)->get();
        if ($messages) {
            $resArr = [
                'status' => true,
                'message' => trans('api.yourDataHasBeenSentSuccessfully'),
                'data' => $messages
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

    public function favorite(Request $request, $id){
        $lang = $request->header('lang');
        $user_id = $request->header('user');
        if (checkUserForApi($lang, $user_id) !== true) {
            return checkUserForApi($lang, $user_id);
        }
        $message = ContactMessages::find($id);
        $message->fav = $request->fav;
        $message->save();
        if ($message->fav == 1){
            $resArr = [
                'status' => true,
                'message' => trans('api.favoriteTrue'),
                'data' => []
            ];
        }elseif($message->fav == 0){
            $resArr = [
                'status' => true,
                'message' => trans('api.favoriteFalse'),
                'data' => []
            ];
        }else{
            $resArr = [
                'status' => false,
                'message' => trans('api.someThingWentWrong'),
                'data' => []
            ];

        }
        return response()->json($resArr);
    }
    public function favoriteShow(Request $request){
        $lang = $request->header('lang');
        $user_id = $request->header('user');
        if (checkUserForApi($lang, $user_id) !== true) {
            return checkUserForApi($lang, $user_id);
        }
        $messages = ContactMessages::where('fav', 1)->where('user_id',$user_id)->get();
        if ($messages) {
            $resArr = [
                'status' => true,
                'data' => $messages
            ];
        } else {
            $resArr = [
                'status' => false,
                'data' => []
            ];
        }
        return response()->json($resArr);
    }
    public function DeleteUserConnection(Request $request, ContactMessages $contact){
        $lang = $request->header('lang');
        if($lang == ''){
            $resArr = [
                'status' => 'failed',
                'message' => trans('api.pleaseSendLangCode'),
                'data' => []
            ];
            return response()->json($resArr);
        }
        if($contact){
            $contact->delete();
            $resArr = [
                'status' => true,
                'message' => trans('api.AccountDeletedSuccessfully')
            ];
        }else{
            $resArr = [
                'status' => false,
                'message' => trans('api.someThingWentWrong')
            ];
        }
        return response()->json($resArr);
    }
}
