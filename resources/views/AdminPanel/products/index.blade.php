@extends('AdminPanel.layouts.master')
@section('content')


    <!-- Bordered table start -->
    <div class="row" id="table-bordered">
        <div class="col-12">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="text-bold">
                        @foreach ($errors->all() as $error)
                            <li class="mb-1 text-bold">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{$title}}</h4>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered mb-2">
                        <thead>
                            <tr>
                                <th>إسم المنتج</th>
                                <th class="text-center">الصورة</th>
                                <th class="text-center">السعر</th>
                                <th class="text-center">عدد عمليات الشراء</th>
                                <th class="text-center">الإجرارات</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @forelse($products as $product)
                            <tr id="row_{{ $product->id }}">
                                <td>
                                    {{$product['productName_ar']}}<br>
                                    {{$product['productName_en']}}
                                </td>
                                <td>
                                    <img class="round border" src="{{$product->photoLink()}}" alt="avatar" width="80px" height="80px">
                                </td>
                                <td >
                                    {{$product->price}}
                                </td>
                                <td>
                                    {{$product->purchases}}
                                </td>
                                <td>
                                    <a href="javascript:;" data-bs-target="#editproduct{{$product->id}}" data-bs-toggle="modal" class="btn btn-icon btn-info" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="{{trans('common.edit')}}">
                                        <i data-feather='edit'></i>
                                    </a>
                                    <?php $delete = route('admin.products.delete',['id'=>$product->id]); ?>
                                    <button type="button" class="btn btn-icon btn-danger" onclick="confirmDelete('{{$delete}}','{{$product->id}}')" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="{{trans('common.delete')}}">
                                        <i data-feather='trash-2'></i>
                                    </button>
                                </td>
                            </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="p-3 text-center ">
                                        <h2>{{trans('common.nothingToView')}}</h2>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                @foreach($products as $product)
                    <div class="modal fade text-md-start" id="editproduct{{$product->id}}" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
                            <div class="modal-content">
                                <div class="modal-header bg-transparent">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body pb-5 px-sm-5 pt-50">
                                    <div class="text-center mb-2">
                                        <h1 class="mb-1">{{trans('common.edit')}}</h1>
                                    </div>
                                    {{Form::open(['url'=>route('admin.products.update',['id'=>$product->id]), 'id'=>'editproductForm', 'class'=>'row gy-1 pt-75','files'=>'true'])}}
                                        <div class="col-12 col-md-6">
                                            <label class="form-label" for="productName_ar">إسم المنتج بالعربية</label>
                                            {{Form::text('productName_ar',$product->productName_ar,['id'=>'productName_ar', 'class'=>'form-control'])}}
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label class="form-label" for="productName_en">إسم المنتج بالإنجليزية</label>
                                            {{Form::text('productName_en',$product->productName_en,['id'=>'productName_en', 'class'=>'form-control'])}}
                                        </div>
                                        <div class="col-12 col-md-12">
                                            <label class="form-label" for="price">السعر</label>
                                            {{Form::number('price',$product->price,['id'=>'price', 'class'=>'form-control'])}}
                                        </div>
                                        <div class="col-12 col-md-12">
                                            <label class="form-label" for="image">الصورة</label>
                                            {{Form::file('image',['id'=>'image', 'class'=>'form-control'])}}
                                        </div>

                                        <div class="col-12 text-center mt-2 pt-50">
                                            <button type="submit" class="btn btn-primary me-1">حفظ التغييرات</button>
                                            <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">
                                                إلغاء
                                            </button>
                                        </div>
                                    {{Form::close()}}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


                {{ $products->links('vendor.pagination.default') }}


            </div>
        </div>
    </div>
    <!-- Bordered table end -->



@stop

@section('page_buttons')
    <a href="javascript:;" data-bs-target="#createproduct" data-bs-toggle="modal" class="btn btn-primary">
        إضافة منتج جديد
    </a>

    <div class="modal fade text-md-start" id="createproduct" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
            <div class="modal-content">
                <div class="modal-header bg-transparent">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pb-5 px-sm-5 pt-50">
                    <div class="text-center mb-2">
                        <h1 class="mb-1">إضافة منتج جديد</h1>
                    </div>
                    {{Form::open(['url'=>route('admin.products.store'), 'id'=>'createproductForm', 'class'=>'row gy-1 pt-75', 'files'=>'true'])}}
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="productName_ar">إسم المنتج بالعربية</label>
                            {{Form::text('productName_ar','',['id'=>'productName_ar', 'class'=>'form-control'])}}
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="productName_en">إسم المنتج بالإنجليزية</label>
                            {{Form::text('productName_en','',['id'=>'productName_en', 'class'=>'form-control'])}}
                        </div>
                        <div class="col-12 col-md-12">
                            <label class="form-label" for="price">السعر</label>
                            {{Form::number('price','',['id'=>'price', 'class'=>'form-control'])}}
                        </div>

                        <div class="col-12 col-md-12">
                            <label class="form-label" for="image">الصورة</label>
                            {{Form::file('image',['id'=>'image', 'class'=>'form-control'])}}
                        </div>
                        <div class="col-12 text-center mt-2 pt-50">
                            <button type="submit" class="btn btn-primary me-1">{{trans('common.Save changes')}}</button>
                            <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">
                                {{trans('common.Cancel')}}
                            </button>
                        </div>
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
@stop
