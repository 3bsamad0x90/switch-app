<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\SocialMedia;
use Illuminate\Http\Request;
use Response;

class socialMediaController extends Controller
{
    public function index()
    {
        $apps = SocialMedia::paginate(10);
        return view('AdminPanel.SocialMedia.index',[
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

    public function store(Request $request){
        $request->validate([
            'appName_ar' => 'required',
            'appName_en' => 'required',
            'icon' => 'required|image|mimes:png|max:2048',
        ],[
            'appName_ar.required' => 'يجب ادخال اسم التطبيق بالعربية',
            'appName_en.required' => 'يجب ادخال اسم التطبيق بالانجليزية',
            'icon.required' => 'يجب ادخال الايقونة',
            'icon.image' => 'يجب ان تكون الايقونة صورة',
            'icon.mimes' => 'يجب ان تكون الايقونة بصيغة png',
            'icon.max' => 'يجب ان لا تزيد الايقونة عن 2 ميجا',
        ]);

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
    public function update(Request $request, $id){
        $request->validate([
            'appName_ar' => 'required',
            'appName_en' => 'required',
            'icon' => 'image|mimes:png|max:2048',
        ],
        [
            'appName_ar.required' => 'يجب ادخال اسم التطبيق بالعربية',
            'appName_en.required' => 'يجب ادخال اسم التطبيق بالانجليزية',
            'icon.image' => 'يجب ان تكون الايقونة صورة',
            'icon.mimes' => 'يجب ان تكون الايقونة بصيغة png',
            'icon.max' => 'يجب ان لا تزيد الايقونة عن 2 ميجا',
        ]);
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
