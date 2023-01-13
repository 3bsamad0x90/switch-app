<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\appStoreRequest;
use App\Http\Requests\appUpdateRequest;
use App\Music;
use Illuminate\Http\Request;
use Response;

class MusicController extends Controller
{
    public function index()
    {
        $apps = Music::paginate(10);
        return view('AdminPanel.Apps.Music.index',[
            'active' => 'Music',
            'title' => 'تطبيقات الأغاني',
            'apps' => $apps,
            'breadcrumbs' => [
                [
                    'url' => '',
                    'text' => 'تطبيقات الأغاني'
                ]
            ]
        ]);
    }

    public function store(appStoreRequest $request){

        if($request->hasFile('icon')){
            $imageName = time().'.'.$request->icon->extension();
            $request->icon->move(public_path('uploads/apps/music'), $imageName);
        }

        $app = new Music();
        $app->appName_ar = trim($request->appName_ar);
        $app->appName_en = trim($request->appName_en);
        $app->icon = $imageName;
        $data = $app->save();
        if($data){
            return redirect()->back()->with('success','تمت الاضافة بنجاح');
        }else{
            return redirect()->back()->with('faild','لم نستطع حفظ البيانات');
        }
    }
    public function update(appUpdateRequest $request, $id){

        $app = Music::findOrFail($id);
        $app->appName_ar = trim($request->appName_ar);
        $app->appName_en = trim($request->appName_en);
        if($request->hasFile('icon')){
            if($app->icon != '' || file_exists(public_path('uploads/apps/music/'. $app->icon))){
                unlink(public_path('uploads/apps/music/'. $app->icon));
            }
            $app['icon'] = upload_image_without_resize('apps/music', $request->icon );
        }
        $data = $app->update();
        if ($data) {
            return redirect()->route('admin.Music')
                            ->with('success','تم تعديل البيانات بنجاح');
        } else {
            return redirect()->back()
                            ->with('failed','لم نستطع تعديل البيانات');
        }
    }
    public function delete($id)
    {
        $app = Music::find($id);
        if($app->icon != '' || file_exists(public_path('uploads/apps/music/'. $app->icon))){
            unlink(public_path('uploads/apps/music/'. $app->icon));
        }
        if ($app->delete()) {
            return Response::json($id);
        }
        return Response::json("false");
    }
}
