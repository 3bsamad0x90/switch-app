<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\FAQs;
use App\Settings;
use App\Currencies;
use App\Countries;
use App\Pages;
use Response;

class StaticPagesController extends Controller
{

    public function faqs(Request $request)
    {
        $lang = $request->header('lang');
        if ($lang == '') {
            $resArr = [
                'status' => false,
                'message' => trans('api.pleaseSendLangCode'),
                'data' => []
            ];
            return response()->json($resArr);
        }

        $faqs = FAQs::all();
        $list = [];
        foreach ($faqs as $key => $value) {
            $list[] = [
                'question' => $value['question_'.$lang],
                'answer' => $value['answer_'.$lang]
            ];
        }
        $resArr = [
            'status' => true,
            'data' => $list
        ];
        return response()->json($resArr);

    }
    public function media(Request $request)
    {
        $lang = $request->header('lang');
        if ($lang == '') {
            $resArr = [
                'status' => false,
                'message' => trans('api.pleaseSendLangCode'),
            ];
            return response()->json($resArr);
        }

        $list = [
            'SEO' => [
                'title' => getSettingValue('siteTitle_'.$lang),
            ],
            'social' => [
                'facebook' => getSettingValue('facebook'),
                'twitter' => getSettingValue('twitter'),
                'linkedin' => getSettingValue('linkedin'),
                'gmail' => getSettingValue('gmail')
            ],
            'images' => [
                'logo' => getSettingImageLink('logo'),
            ],
            'contact_data' => [
                'phone' => getSettingValue('phone'),
                'email' => getSettingValue('email'),
            ],
        ];
        $resArr = [
            'status' => 'success',
            'message' => '',
            'data' => $list
        ];
        return response()->json($resArr);
    }


}
