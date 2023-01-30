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
            'status' => true,
            'data' => $list
        ];
        return response()->json($resArr);
    }

    public function landingPage(Request $request){
        $lang = $request->header('lang');
        if ($lang == '') {
            $resArr = [
                'status' => false,
                'message' => trans('api.pleaseSendLangCode'),
            ];
            return response()->json($resArr);
        }
        $list = [
            'mainPage' => [
                'title' => getSettingValue('mainPageTitle_'.$lang),
                'description' => getSettingValue('mainPageDesc_'.$lang),
                'image' => getSettingImageLink('mainPageImage'),
            ],
            'why' => [
                'title' => getSettingValue('whyTitle_'.$lang),
                'dscription' => getSettingValue('whyDesc_'.$lang),

                'Boxes' => [
                    'box1' => [
                        'icon1' => getSettingValue('why1icon'),
                        'title1' => getSettingValue('why1title_'.$lang),
                        'description1'  => getSettingValue('why1des_'.$lang)
                    ],
                    'box2' => [
                        'icon2' => getSettingValue('why2icon'),
                        'title2' => getSettingValue('why2title_'.$lang),
                        'description2'  => getSettingValue('why2des_'.$lang)
                    ],
                    'box3' => [
                        'icon3' => getSettingValue('why3icon'),
                        'title3' => getSettingValue('why3title_'.$lang),
                        'description3'  => getSettingValue('why3des_'.$lang)
                    ],
                    'box4' => [
                        'icon4' => getSettingValue('why4icon'),
                        'title4' => getSettingValue('why4title_'.$lang),
                        'description4'  => getSettingValue('why4des_'.$lang)
                    ],
                ]
                ],
                'download' => [
                    'title' => getSettingValue('downloadTitle_'.$lang),
                    'description' => getSettingValue('downloadDesc_'.$lang),
                    'image' => getSettingImageLink('downloadImage'),
                    'link' =>[
                        'google' => getSettingValue('googlePlayLink'),
                        'apple' => getSettingValue('appStoreLink'),
                    ]
                ],
                'footer' => [
                    'contact' => [
                        'phone' => getSettingValue('phone'),
                        'email' => getSettingValue('email'),
                    ],
                    'socail' => [
                        'facebook' => getSettingValue('facebook'),
                        'twitter' => getSettingValue('twitter'),
                        'linkedin' => getSettingValue('linkedin'),
                        'gmail' => getSettingValue('gmail'),
                    ],
                    'siteDescription' => getSettingValue('siteDescription'),
                    'logo' => getSettingImageLink('logo'),
                ]
        ];
        $resArr = [
            'status' => true,
            'data' => $list
        ];
        return response()->json($resArr);
    }

}
