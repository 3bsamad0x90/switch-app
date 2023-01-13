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
                        <thead class="text-center">
                            <tr>
                                <th>إسم التطبيق</th>
                                <th>الأيقونة</th>
                                <th>الإجرارات</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @forelse($apps as $app)
                            <tr id="row_{{ $app->id }}">
                                <td>
                                    {{$app['appName_ar']}} - {{$app['appName_en']}}
                                </td>
                                <td>
                                    <img class="round border" src="{{$app->photoLink()}}" alt="avatar" width="50px" height="50px">
                                </td>
                                <td>
                                    <a href="javascript:;" data-bs-target="#editapp{{$app->id}}" data-bs-toggle="modal" class="btn btn-icon btn-info" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="{{trans('common.edit')}}">
                                        <i data-feather='edit'></i>
                                    </a>
                                    <?php $delete = route('admin.creative.delete',['id'=>$app->id]); ?>
                                    <button type="button" class="btn btn-icon btn-danger" onclick="confirmDelete('{{$delete}}','{{$app->id}}')" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="{{trans('common.delete')}}">
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

                @foreach($apps as $app)
                    <div class="modal fade text-md-start" id="editapp{{$app->id}}" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
                            <div class="modal-content">
                                <div class="modal-header bg-transparent">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body pb-5 px-sm-5 pt-50">
                                    <div class="text-center mb-2">
                                        <h1 class="mb-1">تعديل</h1>
                                    </div>
                                    {{Form::open(['url'=>route('admin.creative.update',['id'=>$app->id]), 'id'=>'editappForm', 'class'=>'row gy-1 pt-75','files'=>'true'])}}
                                        <div class="col-12 col-md-6">
                                            <label class="form-label" for="appName_ar">إسم التطبيق بالعربية</label>
                                            {{Form::text('appName_ar',$app->appName_ar,['id'=>'appName_ar', 'class'=>'form-control'])}}
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label class="form-label" for="appName_en">إسم التطبيق بالإنجليزية</label>
                                            {{Form::text('appName_en',$app->appName_en,['id'=>'appName_en', 'class'=>'form-control'])}}
                                        </div>

                                        <div class="col-12 col-md-12">
                                            <label class="form-label" for="icon">الصورة</label>
                                            {{Form::file('icon',['id'=>'icon', 'class'=>'form-control'])}}
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


                {{ $apps->links('vendor.pagination.default') }}


            </div>
        </div>
    </div>
    <!-- Bordered table end -->



@stop

@section('page_buttons')
    <a href="javascript:;" data-bs-target="#createapp" data-bs-toggle="modal" class="btn btn-primary">
        إضافة جديد
    </a>

    <div class="modal fade text-md-start" id="createapp" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
            <div class="modal-content">
                <div class="modal-header bg-transparent">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pb-5 px-sm-5 pt-50">
                    <div class="text-center mb-2">
                        <h1 class="mb-1">إضافة جديد</h1>
                    </div>
                    {{Form::open(['url'=>route('admin.creative.store'), 'id'=>'createappForm', 'class'=>'row gy-1 pt-75', 'files'=>'true'])}}
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="appName_ar">إسم التطبيق بالعربية</label>
                            {{Form::text('appName_ar','',['id'=>'appName_ar', 'class'=>'form-control'])}}
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="appName_en">إسم التطبيق بالإنجليزية</label>
                            {{Form::text('appName_en','',['id'=>'appName_en', 'class'=>'form-control'])}}
                        </div>
                        <div class="col-12 col-md-12">
                            <label class="form-label" for="icon">الأيقونة</label>
                            {{Form::file('icon',['id'=>'icon', 'class'=>'form-control'])}}
                        </div>
                        <div class="col-12 text-center mt-2 pt-50">
                            <button type="submit" class="btn btn-primary me-1">حفظ التغييرات</button>
                            <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">
                                إالغاء
                            </button>
                        </div>
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
@stop
