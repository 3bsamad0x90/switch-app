<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\SerialNumbers;
use Illuminate\Http\Request;

class SerialNumberController extends Controller
{
    public function serialNumber(Request $request){
        $lang = $request->header('lang');
        if($lang == ''){
            $resArr = [
                'status' => false,
                'message' => trans('api.pleaseSendLangCode'),
                'data' => []
            ];
            return response()->json($resArr);
        }
        $serialNumber = $request->serialNumber;
        $data = SerialNumbers::where('serial_number', $serialNumber)->first();
        if(!$data){
            $resArr = [
                'status' => false,
                'message' => trans('api.ThisSerialNumberIsNotValid'),
                'data' => []
            ];
            return response()->json($resArr);
        }

        if($data->status == 1){
            $resArr = [
                'status' => false,
                'message' => trans('api.ThisSerialNumberHasBeenUsed'),
                'data' => []
            ];
            return response()->json($resArr);
        }else{
            $data->status = 1;
            $data->update();
            $resArr = [
                'status' => true,
                'message' => trans('api.yourDataHasBeenSentSuccessfully'),
                'data' => []
            ];
            return response()->json($resArr);
        }

    }
}
