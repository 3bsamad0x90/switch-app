<?php

namespace App\Http\Controllers\api;

use App\Business;
use App\Creative;
use App\Http\Controllers\Controller;
use App\Http\Resources\BusinessResource;
use App\Http\Resources\CreativeResource;
use App\Http\Resources\MusicResource;
use App\Http\Resources\SocialMediaResource;
use App\Music;
use App\SocialMedia;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AppsController extends Controller
{
    public function social(Request $request){
        $lang = $request->header('lang');
        if($lang == ''){
            $resArr = [
                'status' => 'failed',
                'message' => trans('api.pleaseSendLangCode'),
                'data' => []
            ];
            return response()->json($resArr);
        }
        $social = SocialMedia::get();
        if(!$social){
            return response()->json(['status' => 'No Data', Response::HTTP_NOT_FOUND]);
        }
        return response()->json(['status'=> 'Success', 'social'=>SocialMediaResource::collection($social)], Response::HTTP_OK);
    }

    public function music(Request $request){
        $lang = $request->header('lang');
        if($lang == ''){
            $resArr = [
                'status' => 'failed',
                'message' => trans('api.pleaseSendLangCode'),
                'data' => []
            ];
            return response()->json($resArr);
        }

        $music = Music::get();
        $business = Business::get();
        if(!$music){
            return response()->json(['status' => 'No Data', Response::HTTP_NOT_FOUND]);
        }
        return response()->json(['status'=> 'Success', 'music'=>MusicResource::collection($music)], Response::HTTP_OK);

    }
    public function creative(Request $request){
        $lang = $request->header('lang');
        if($lang == ''){
            $resArr = [
                'status' => 'failed',
                'message' => trans('api.pleaseSendLangCode'),
                'data' => []
            ];
            return response()->json($resArr);
        }
        $creative = Creative::get();
        if(!$creative){
            return response()->json(['status' => 'No Data', Response::HTTP_NOT_FOUND]);
        }
        return response()->json(['status'=> 'Success', 'creative'=>CreativeResource::collection($creative)], Response::HTTP_OK);

    }
    public function business(Request $request){
        $lang = $request->header('lang');
        if($lang == ''){
            $resArr = [
                'status' => 'failed',
                'message' => trans('api.pleaseSendLangCode'),
                'data' => []
            ];
            return response()->json($resArr);
        }

        $business = Business::get();
        if(!$business){
            return response()->json(['status' => 'No Data', Response::HTTP_NOT_FOUND]);
        }
        return response()->json(['status'=> 'Success', 'business'=>BusinessResource::collection($business)], Response::HTTP_OK);

    }
}
