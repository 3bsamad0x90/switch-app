@extends('Layouts.master')

@section('title')
    لوحة التحكم | تعديل القسم
@endsection


@section('content')
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <!-- BreadCrumb -->
            <div class="content-header row">
                @include('Layouts.breadcrumb')
            </div>

            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="card">
                    <div class="card-body">
                        {{Form::open(['url'=>route('categories.update', $category->id),'class'=>'form-validate','files'=>'true'])}}
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-1">
                                        <label class="form-label" for="name_ar">إسم القسم بالعربية</label>
                                        <input type="text" class="form-control" placeholder="الإسم" value="{{ $category->name_ar }}"  name="name_ar" id="name_ar" />
                                        @error('name_ar')
                                            <strong class="alert alert-danger" role="alert">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-1">
                                        <label class="form-label" for="name_en">إسم القسم بالإنجليزية</label>
                                        <input type="text" class="form-control" placeholder="الإسم" value="{{ $category->name_en }}"  name="name_en" id="name_en" />
                                        @error('name_en')
                                            <strong class="alert alert-danger" role="alert">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="customFile">صورة</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile" name="photo" />
                                            <label class="custom-file-label" for="customFile">اختر الصورة</label>
                                        </div>
                                        <small>اختر صورة بإمتداد jpg, gif, png وبحجم أقصى 500 ك.ب</small>
                                    </div>
                                    @if($category->photo != '')
                                        <div class="text-center">
                                            {!! $category->photoHtml(['height'=>'150']) !!}
                                            <a href="{{route('deleteFile',['type'=>'Category','id'=>$category->id,'file'=>'photo'])}}" class="btn btn-sm btn-block btn-danger mt-1">
                                                حذف الصورة الحالية
                                            </a>
                                        </div>
                                    @endif
                                </div>

                                <div class="col-md-2 mt-2">
                                    <button type="submit" class="btn btn-primary mb-1 mb-sm-0 me-0 me-sm-1">حفظ</button>
                                </div>
                            </div>
                        {{Form::close()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
.
