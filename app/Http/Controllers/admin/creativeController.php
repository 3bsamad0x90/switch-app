<?php

namespace App\Http\Controllers\admin;

use App\Creative;
use App\Http\Controllers\Controller;
use App\Http\Requests\appStoreRequest;
use App\Http\Requests\appUpdateRequest;
use Illuminate\Http\Request;
use Response;
class creativeController extends Controller
{
    public function index()
    {
        $apps = Creative::paginate(10);
        return view('AdminPanel.Apps.creative.index',[
            'active' => 'creative',
            'title' => 'تطبيقات كرييتف',
            'apps' => $apps,
            'breadcrumbs' => [
                [
                    'url' => '',
                    'text' => 'تطبيقات كرييتف'
                ]
            ]
        ]);
    }

    public function store(appStoreRequest $request){

        $imageName = time().'.'.$request->icon->extension();
        $request->icon->move(public_path('uploads/apps/creative'), $imageName);

        $app = new Creative();
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

        $app = Creative::findOrFail($id);
        $app->appName_ar = trim($request->appName_ar);
        $app->appName_en = trim($request->appName_en);
        if($request->hasFile('icon')){
            if($app->icon != '' || file_exists(public_path('uploads/apps/creative/'. $app->icon))){
                unlink(public_path('uploads/apps/creative/'. $app->icon));
            }
            $app['icon'] = upload_image_without_resize('apps/creative', $request->icon );
        }
        $data = $app->update();
        if ($data) {
            return redirect()->route('admin.creative')
                            ->with('success','تم تعديل البيانات بنجاح');
        } else {
            return redirect()->back()
                            ->with('failed','لم نستطع تعديل البيانات');
        }
    }
    public function delete($id)
    {
        $app = Creative::find($id);
        if($app->icon != '' || file_exists(public_path('uploads/apps/creative/'. $app->icon))){
            unlink(public_path('uploads/apps/creative/'. $app->icon));
        }
        if ($app->delete()) {
            return Response::json($id);
        }
        return Response::json("false");
    }
}
