<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductsResource;
use App\Products;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class ProductsController extends Controller
{
    public function index(Request $request){
        $lang = $request->header('lang');
        if ($lang == '') {
            $resArr = [
                'status' => 'faild',
                'message' => trans('api.pleaseSendLangCode'),
                'data' => []
            ];
            return response()->json($resArr);
        }
        $products = Products::get();
        if(!$products){
            return response()->json(['status' => 'No Data', Response::HTTP_NOT_FOUND]);
        }
        return response()->json(['status'=> 'Success', 'data'=>ProductsResource::collection($products)], Response::HTTP_OK);
    }
}
