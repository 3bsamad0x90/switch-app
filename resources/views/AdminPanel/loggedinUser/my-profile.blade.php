@extends('AdminPanel.layouts.master')

@section('content')
    <div class="row">
        <div class="col-12">
            <ul class="nav nav-pills mb-2">
                <!-- account -->
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('admin.myProfile')}}">
                        <i data-feather="user" class="font-medium-3 me-50"></i>
                        <span class="fw-bold">{{trans('common.Account')}}</span>
                    </a>
                </li>
                <!-- security -->
                <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.myPassword')}}">
                        <i data-feather="lock" class="font-medium-3 me-50"></i>
                        <span class="fw-bold">{{trans('common.Security')}}</span>
                    </a>
                </li>
                <!-- notification -->
                <?php /*
                <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.notificationsSettings')}}">
                        <i data-feather="bell" class="font-medium-3 me-50"></i>
                        <span class="fw-bold">{{trans('common.Notifications')}}</span>
                    </a>
                </li>
                */ ?>
            </ul>

            <!-- profile -->
            <div class="card">
                <div class="card-header border-bottom">
                    <h4 class="card-title">{{trans('common.Account')}}</h4>
                </div>
                <div class="card-body py-2 my-25">
                    {{Form::open(['files'=>'true','class'=>'validate-form'])}}
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-3 text-center">
                                <span class="avatar mb-2">
                                    <img class="round" src="{{auth()->user()->photoLink()}}" alt="avatar" height="150" width="150">
                                </span>
                                <div class="file-loading">
                                    <input class="files" name="image" type="file">
                                </div>
                            </div>
                        </div>

                        <!-- form -->
                        <div class="row pt-3">
                            <div class="col-12 col-sm-6 mb-1">
                                <label class="form-label" for="name">الإسـم</label>
                                {{Form::text('name',auth()->user()->name,['id'=>'name','class'=>'form-control','required'])}}
                            </div>
                            <div class="col-12 col-sm-6 mb-1">
                                <label class="form-label" for="familyName">إسم العائلة</label>
                                {{Form::text('familyName',auth()->user()->familyName,['id'=>'familyName','class'=>'form-control'])}}
                            </div>
                            <div class="col-12 col-sm-6 mb-1">
                                <label class="form-label" for="userName">إسم المستخدم</label>
                                {{Form::text('userName',auth()->user()->userName,['id'=>'userName','class'=>'form-control'])}}
                            </div>
                            <div class="col-12 col-sm-3 mb-1">
                                <label class="form-label" for="email">{{trans('common.email')}}</label>
                                {{Form::text('email',auth()->user()->email,['id'=>'email','class'=>'form-control','required'])}}
                            </div>

                            <div class="col-12 col-sm-3 mb-1">
                                <label class="form-label" for="phone">{{trans('common.phone')}}</label>
                                {{Form::text('phone',auth()->user()->phone,['id'=>'phone','class'=>'form-control'])}}
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-primary mt-1 me-1">حفظ التغييرات</button>
                            </div>
                        </div>
                        <!--/ form -->
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
@stop
