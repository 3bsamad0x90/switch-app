@extends('Layouts.master')

@section('title')
    لوحة التحكم | إنشاء قسم جديد
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
                        {{Form::open(['url'=>route('coupons.store'),'class'=>'form-validate'])}}
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-1">
                                        <label class="form-label" for="coupon">كود القسيمة الشرائية</label>
                                        {{Form::text('coupon','',['class'=>'form-control','required'])}}
                                        @error('coupon')
                                            <strong class="alert alert-danger" role="alert">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-1">
                                        <label class="form-label" for="affiliate_id">مسؤل التسويق المختص</label>
                                        {{Form::select('affiliate_id',[
                                                                    '0' => 'بدون مسوق إلكتروني'
                                                                ] + getAvailableAffiliatesList(),'',['class'=>'selectpicker form-control','data-live-search'=>'true','required'])}}
                                        @error('affiliate_id')
                                            <strong class="alert alert-danger" role="alert">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-1">
                                        <label class="form-label" for="percentage">الخصم (بالنسبة)</label>
                                        {{Form::number('percentage','',['class'=>'form-control'])}}
                                        @error('percentage')
                                            <strong class="alert alert-danger" role="alert">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-1">
                                        <label class="form-label" for="amount">الخصم (رقم ثابت)</label>
                                        {{Form::number('amount','',['class'=>'form-control'])}}
                                        @error('amount')
                                            <strong class="alert alert-danger" role="alert">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-1">
                                        <label class="form-label" for="affiliate_commision_rate">نسبة العمولة (بالنسبة)</label>
                                        {{Form::number('affiliate_commision_rate','',['class'=>'form-control'])}}
                                        @error('affiliate_commision_rate')
                                            <strong class="alert alert-danger" role="alert">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-1">
                                        <label class="form-label" for="affiliate_commision_amount">نسبة العمولة (رقم ثابت)</label>
                                        {{Form::number('affiliate_commision_amount','',['class'=>'form-control'])}}
                                        @error('affiliate_commision_amount')
                                            <strong class="alert alert-danger" role="alert">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-1">
                                        <label class="form-label" for="max_date">تاريخ انتهاء القسيمة</label>
                                        {{Form::date('max_date','',['class'=>'form-control','required'])}}
                                        @error('max_date')
                                            <strong class="alert alert-danger" role="alert">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-1">
                                        <label class="form-label" for="max_clients">أقصى عدد من العملاء (صفر يعني غير محدود)</label>
                                        {{Form::number('max_clients','0',['class'=>'form-control'])}}
                                        @error('max_clients')
                                            <strong class="alert alert-danger" role="alert">{{ $message }}</strong>
                                        @enderror
                                    </div>
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
