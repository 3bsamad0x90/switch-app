<?php

namespace App\Http\Controllers\admin;

use App\Apps;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class appsController extends Controller
{
    public function socialMedia()
    {

        $apps = Apps::get()->keyBy('key')->all();
        return view('AdminPanel.apps.index',
            [
                'title' => 'التطبيقات',
                'active' => 'apps',
                'settings' => $apps,
                'breadcrumbs' => [
                    [
                        'url' => '',
                        'text' => 'التطبيقات'
                    ]
                ]
            ]);
    }

    public function updateApps(Request $request)
    {
        //foreach inputs which is text ant textarea
        foreach ($_POST as $key => $value) {
            if ($key != '_token') {
                $app = Apps::where('key', $key)->first();
                // return $app;
                if ($app == '') {
                    // return 'hello';
                    $app = New Apps;
                    $app->key = $key;
                    $app->save();
                }
                // return 'hi';
                $app->value = $value;
                $app->update();
            }
        }

        foreach ($_FILES as $key => $value) {
            if ($request->hasFile($key)) {
                $FileExt = $request->$key->extension();
                $countvalue = Apps::where('key', $key)->count();
                if ($countvalue > 0) {
                    $EditOldFile = Apps::where('key', $key)->first();
                    //delete old file and upload the new file

                    delete_image('apps' , $EditOldFile->value);
                    $file = upload_image_without_resize('apps' , $request->$key );

                    $EditOldFile->value = $file;
                    $EditOldFile->save();

                } else {
                    $file = upload_image_without_resize('apps' , $request->$key );
                    $NewFile = New Apps;
                    $NewFile->key = $key;
                    $NewFile->value = $file;
                    $NewFile->save();
                }
            }
        }

        session()->flash('success', trans('common.successMessageText'));
        return back();

    }



}
