<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Products;
use Illuminate\Http\Request;
use File;
use Response;
class ProductsController extends Controller
{
    public function index()
    {
        $products = Products::paginate(15);
        return view('Adminpanel.products.index',[
            'active' => 'products',
            'title' => 'المنتجات',
            'breadcrumbs' => [
                [
                    'url' => '',
                    'text' => 'المنتجات'
                ]
            ]
        ],compact('products'));
    }

    public function store(Request $request){
        $request->validate([
            'productName_ar' => 'required|string',
            'productName_en' => 'required|string',
            'price' => 'required|numeric|integer',
            'image' => 'image|mimes:jpeg,png,jpg,gif',
        ]);
        $data = $request->except(['_token', 'image']);

        $product = Products::create($data);
        if($request->hasFile('image')){
            $data['image'] = upload_image_without_resize('products/'.$product->id , $request->image );
            $product->update($data);
        }
        if ($product) {
            return redirect()->route('admin.products')
                            ->with('success','تمت الاضافة بنجاح');
        } else {
            return redirect()->back()
                            ->with('failed','لم نستطع حفظ البيانات');
        }
    }
    public function update(Request $request, $id)
    {
        $product = Products::findOrFail($id);
        $data = $request->except(['_token', 'image']);
        if($request->hasFile('image')){
            if($product->image != '' || file_exists(public_path('uploads/products/'.$product->id .'/'. $product->image))){
                unlink(public_path('uploads/products/'.$product->id .'/'. $product->image));
            }
            $data['image'] = upload_image_without_resize('products/'.$product->id , $request->image );
        }
        $product->update($data);
        if ($product) {
            return redirect()->route('admin.products')
                            ->with('success','تم تعديل البيانات بنجاح');
        } else {
            return redirect()->back()
                            ->with('failed','لم نستطع تعديل البيانات');
        }
    }

    public function delete($id)
    {
        $product = Products::find($id);
        if($product->image != '' && file_exists(public_path('uploads/products/'.$product->id .'/'. $product->image))){
            File::deleteDirectory(public_path('uploads/products/'.$product->id),);
        }
        if ($product->delete()) {
            return Response::json($id);
        }
        return Response::json("false");
    }

}
