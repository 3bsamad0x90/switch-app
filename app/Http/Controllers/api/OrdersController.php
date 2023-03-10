<?php

namespace App\Http\Controllers\api;

use App\Books;
use App\Http\Controllers\Controller;
use App\Http\Resources\orderResource;
use App\OrderItems;
use App\Orders;
use App\User;
use App\UserAddress;
use App\UserPaymentMethods;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Stripe\Order;

class OrdersController extends Controller
{
    public function index(Request $request){
        $lang = $request->header('lang');
        $user_id = $request->header('user');

        if (checkUserForApi($lang, $user_id) !== true) {
            return checkUserForApi($lang, $user_id);
        }
        $user = User::find($user_id);
        // return $user;
        $rules = [
            'product_id' => 'required',
        ];
        $validator = Validator::make($request->all(),$rules);
        if($validator->fails())
        {
            foreach ((array)$validator->errors() as $error) {
                return response()->json([
                    'status' => 'faild',
                    'message' => trans('api.pleaseRecheckYourDetails'),
                    'data' => $error
                ]);
            }
        }
        $dateTime = date('Y-m-d H:i:s');
        $order = new Orders();
        $order->user_id = $user_id;
        $order->product_id = $request->product_id;
        $order->status = 'pending';
        $order->date_time = $dateTime;
        $order->date_time_str = strtotime($dateTime);
        $order->save();
        $order->products()->attach($request->product_id);
        return response()->json([
            'status' => 'success',
            'message' => trans('api.yourDataHasBeenSentSuccessfully')
        ]);
    }
    public function orders(Request $request){

        $lang = $request->header('lang');
        if ($lang == '') {
            $resArr = [
                'status' => 'faild',
                'message' => trans('api.pleaseSendLangCode'),
                'data' => []
            ];
            return response()->json($resArr);
        }
        $orders = Orders::where('user_id',auth()->user()->id)->get();

        if(!$orders){
            return response()->json(['status' => 'No Data', Response::HTTP_NOT_FOUND]);
        }
        return response()->json(['status'=> 'Success', 'data'=>orderResource::collection($orders)], Response::HTTP_OK);
    }
}
