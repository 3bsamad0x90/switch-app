<?php

namespace App\Http\Controllers\api;

use App\Apps;
use App\Http\Controllers\Controller;
use App\Http\Resources\AppsResource;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AppsController extends Controller
{
    public function index(Request $request){
        $lang = $request->header('lang');
        if($lang == ''){
            $resArr = [
                'status' => 'failed',
                'message' => trans('api.pleaseSendLangCode'),
                'data' => []
            ];
            return response()->json($resArr);
        }
        $apps = Apps::get();
        if(!$apps){
            return response()->json(['status' => 'No Data', Response::HTTP_NOT_FOUND]);
        }
        return response()->json(['status'=> 'Success', 'data'=>AppsResource::collection($apps)], Response::HTTP_OK);
    }
}
