<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\appStoreRequest;
use App\Http\Requests\appUpdateRequest;
use App\SocialMedia;
use Illuminate\Http\Request;
use Response;

class socialMediaController extends Controller
{
    public function index()
    {
        $apps = SocialMedia::paginate(10);
        return view('AdminPanel.Apps.SocialMedia.index',[
            'active' => 'SocialMedia',
            'title' => 'تطبيقات السوشيال ميديا',
            'apps' => $apps,
            'breadcrumbs' => [
                [
                    'url' => '',
                    'text' => 'تطبيقات السوشيال ميديا'
                ]
            ]
        ]);
    }

    public function store(appStoreRequest $request){

        $imageName = time().'.'.$request->icon->extension();
        $request->icon->move(public_path('uploads/apps/social'), $imageName);

        $app = new SocialMedia();
        $app->appName_ar = $request->appName_ar;
        $app->appName_en = $request->appName_en;
        $app->icon = $imageName;
        $data = $app->save();
        if($data){
            return redirect()->back()->with('success','تمت الاضافة بنجاح');
        }else{
            return redirect()->back()->with('faild','لم نستطع حفظ البيانات');
        }
    }
    public function update(appUpdateRequest $request, $id){

        $app = SocialMedia::findOrFail($id);
        $data = $request->except(['_token', 'icon']);
        if($request->hasFile('icon')){
            if($app->icon != '' || file_exists(public_path('uploads/apps/social/'. $app->icon))){
                unlink(public_path('uploads/apps/social/'. $app->icon));
            }
            $data['icon'] = upload_image_without_resize('apps/social', $request->icon );
        }
        $app->update($data);
        if ($app) {
            return redirect()->route('admin.socialMedia')
                            ->with('success','تم تعديل البيانات بنجاح');
        } else {
            return redirect()->back()
                            ->with('failed','لم نستطع تعديل البيانات');
        }
    }
    public function delete($id)
    {
        $app = SocialMedia::find($id);
        if($app->icon != '' || file_exists(public_path('uploads/apps/social/'. $app->icon))){
            unlink(public_path('uploads/apps/social/'. $app->icon));
        }
        if ($app->delete()) {
            return Response::json($id);
        }
        return Response::json("false");
    }
}
