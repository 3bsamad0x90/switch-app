<?php

namespace App\Http\Controllers\api;

use App\Books;
use App\Http\Controllers\Controller;
use App\OrderItems;
use App\Orders;
use App\User;
use App\UserAddress;
use App\UserPaymentMethods;
use Illuminate\Http\Request;
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
            'price' => 'required',
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
        $order = new Orders();
        $order->user_id = $user_id;
        $order->product_id = $request->product_id;
        $order->status = 'pending';
        $order->save();
        $order->products()->attach($request->product_id);
        return response()->json([
            'status' => 'success',
            'message' => trans('api.yourDataHasBeenSentSuccessfully')
        ]);
    }

    public function createOrder(Request $request)
    {

        $lang = $request->header('lang');
        $user_id = $request->header('user');

        if (checkUserForApi($lang, $user_id) !== true) {
            return checkUserForApi($lang, $user_id);
        }
        $user = User::find($user_id);

        $rules = [
            'payment_method_id' => 'required'
        ];
        $validator=Validator::make($request->all(),$rules);
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
        $paymentMethod = UserPaymentMethods::where('id',$request->payment_method_id)->where('user_id',$user_id)->first();
        if ($paymentMethod == '') {
            return response()->json([
                'status' => 'faild',
                'message' => trans('api.noPaymentMethodWithThisID'),
                'data' => ''
            ]);
        }

        if (isset(payForOrder($paymentMethod,$user)['status'])) {
            if (payForOrder($paymentMethod,$user)['status'] == 'succeeded') {
                $order = Orders::find($user->cart()['id']);
                $order->update([
                    'payment_method' => 'stripe',
                    'payment_method_id' => $request['payment_method_id'],
                    'shipping_total' => $request['shipping_total'],
                    'status' => 'done'
                ]);
                return response()->json([
                    'status' => 'success',
                    'message' => '',
                    'data' => ''
                ]);
            } else {
                return response()->json([
                    'status' => 'faild',
                    'message' => payForOrder($paymentMethod,$user)['data'],
                    'data' => payForOrder($paymentMethod,$user)['data']
                ]);
            }
        } else {
            return response()->json([
                'status' => 'faild',
                'message' => '',
                'data' => ''
            ]);
        }


        return response()->json([
            'status' => 'faild',
            'message' => '',
            'data' => $user->cart()
        ]);
    }
    public function myOrdersList(Request $request)
    {
        $lang = $request->header('lang');
        $user_id = $request->header('user');

        if (checkUserForApi($lang, $user_id) !== true) {
            return checkUserForApi($lang, $user_id);
        }

        $list = Orders::where('user_id',$user_id)->orderBy('id','desc')->get();
        $orders = [];
        foreach ($list as $key => $value) {
            $orders[] = $value->apiData($lang);
        }
        $resArr = [
            'status' => 'success',
            'message' => '',
            'data' => $orders
        ];
        return response()->json($resArr);

    }
    public function OrderDetails(Request $request, $id)
    {
        $lang = $request->header('lang');
        $user_id = $request->header('user');

        if (checkUserForApi($lang, $user_id) !== true) {
            return checkUserForApi($lang, $user_id);
        }
        $order = Orders::find($id);
        if ($order != '') {
            $resArr = [
                'status' => 'success',
                'message' => '',
                'data' => $order->apiData($lang)
            ];
        } else {
            $resArr = [
                'status' => 'faild',
                'message' => trans('api.someThingWentWrong'),
                'data' => []
            ];
        }
        return response()->json($resArr);

    }
    public function getShippingRate(Request $request)
    {
        $lang = $request->header('lang');
        $user_id = $request->header('user');
        $currency = $request->header('currency');
        $shippingMethod = $request->header('shippingMethod');
        if ($shippingMethod == 'exprese') {
            $shippingMethod = 'aramex';
        }

        if (checkUserForApi($lang, $user_id) !== true) {
            return checkUserForApi($lang, $user_id);
        }

        $shipping_id = $request['shipping_id'];
        $resArr = [
            'status' => 'success',
            'message' => '',
            'data' => shippingCalculator($user_id,$shipping_id,$shippingMethod,$currency)
        ];
        return response()->json($resArr);

    }
    public function addToCart(Request $request)
    {
        $lang = $request->header('lang');
        $user_id = $request->header('user');

        if (checkUserForApi($lang, $user_id) !== true) {
            return checkUserForApi($lang, $user_id);
        }
        $user = User::find($user_id);
        $items = [];
        foreach ($request['cart'] as $key => $value) {
            $theBook = Books::find($value['book_id']);
            $prices = $theBook->getThePrice(null,$value['book_type']);
            $items[] = [
                'book_id' => $value['book_id'],
                'price' => $prices['offer'] != 0 ? $prices['offer'] : $prices['original'],
                'book_type' => $value['book_type'],
                'quntity' => $value['quntity']
            ];
        }
        addToCart($user_id,$items);
        $resArr = [
            'status' => 'success',
            'message' => '',
            'data' => $user->myCart($lang)
        ];
        return response()->json($resArr);

    }
    public function myCart(Request $request)
    {
        $lang = $request->header('lang');
        $user_id = $request->header('user');
        $currency = $request->header('currency');

        if (checkUserForApi($lang, $user_id) !== true) {
            return checkUserForApi($lang, $user_id);
        }
        $user = User::find($user_id);
        $resArr = [
            'status' => 'success',
            'message' => '',
            'data' => $user->myCart($lang,$currency) != '' ? $user->myCart($lang,$currency) : ['id'=>'']
        ];
        return response()->json($resArr);

    }
    public function removeItem(Request $request, $id)
    {
        $lang = $request->header('lang');
        $user_id = $request->header('user');

        if (checkUserForApi($lang, $user_id) !== true) {
            return checkUserForApi($lang, $user_id);
        }
        $user = User::find($user_id);
        $item = OrderItems::find($id);
        if ($item != '') {
            $order = $item->subOrder;
            $item->delete();
            if ($order != '') {
                if ($order->items()->count() == 0) {
                    $order->delete();
                }
            }
        }
        $resArr = [
            'status' => 'success',
            'message' => '',
            'data' => $user->myCart($lang)
        ];
        return response()->json($resArr);

    }
    public function editItem(Request $request, $id)
    {
        $lang = $request->header('lang');
        $user_id = $request->header('user');

        if (checkUserForApi($lang, $user_id) !== true) {
            return checkUserForApi($lang, $user_id);
        }
        $user = User::find($user_id);
        $item = OrderItems::find($id);
        if ($item != '') {
            $quantity = $item->quantity;
            if ($request->action == 'increase') {
                $quantity += 1;
            } else {
                if ($quantity > 1) {
                    $quantity -= 1;
                }
            }
            $item->update(['quantity'=>$quantity,'total'=>$quantity*$item->price]);
        }
        $resArr = [
            'status' => 'success',
            'message' => '',
            'data' => $user->myCart($lang)
        ];
        return response()->json($resArr);

    }
    public function addCoupon(Request $request)
    {
        $lang = $request->header('lang');
        $user_id = $request->header('user');

        if (checkUserForApi($lang, $user_id) !== true) {
            return checkUserForApi($lang, $user_id);
        }
        $user = User::find($user_id);
        if ($user->cart() != '') {
            if (checkForCoupon($user->cart()['id'],$request->coupon) != '') {
                $resArr = [
                    'status' => 'success',
                    'message' => trans('common.yourCouponAddedSuccessfully'),
                    'data' => $user->myCart($lang)
                ];
            } else {
                $resArr = [
                    'status' => 'faild',
                    'message' => trans('common.canNotUseThisCoupon'),
                    'data' => $user->myCart($lang)
                ];
            }
        } else {
            $resArr = [
                'status' => 'faild',
                'message' => trans('api.someThingWentWrong'),
                'data' => $user->myCart($lang)
            ];
        }
        return response()->json($resArr);

    }
    public function removeCoupon(Request $request)
    {
        $lang = $request->header('lang');
        $user_id = $request->header('user');

        if (checkUserForApi($lang, $user_id) !== true) {
            return checkUserForApi($lang, $user_id);
        }
        $user = User::find($user_id);
        if ($user->cart() != '') {
            $order = Orders::find($user->cart()['id'])->update([
                'coupun_id' => '',
                'coupun_code' => ''
            ]);
            $resArr = [
                'status' => 'success',
                'message' => trans('common.yourCouponRemovedSuccessfully'),
                'data' => $user->myCart($lang)
            ];
        } else {
            $resArr = [
                'status' => 'faild',
                'message' => trans('api.someThingWentWrong'),
                'data' => $user->myCart($lang)
            ];
        }
        return response()->json($resArr);

    }
}
