@extends('AdminPanel.layouts.master')
@section('content')


    <!-- Bordered table start -->

    <div class="row" id="table-bordered">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{ $title }}</h4>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered mb-2">
                        <thead>
                            <tr class="text-center">
                                <th>#</th>
                                <th>إسم المنتج</th>
                                <th>الحالة</th>
                                <th>السعر</th>
                                <th>إسم المستخدم</th>
                                <th>الإجراءات</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @php
                                $id = 0;
                            @endphp
                            @forelse($orders as $order)
                                <tr id="row_{{$order->id}}">
                                    <td>{{++$id}}</td>
                                    <td>
                                        @foreach ($order->products as $product)
                                            {{$product->productName_ar}}<br/>
                                            {{$product->productName_en}}
                                    </td>
                                    <td>
                                        @if($order->status == 'pending')
                                            <b class="text-warning">{{$order->status}}</b>
                                        @elseif($order->status == 'done')
                                            <b class="text-success">{{$order->status}}</b>
                                        @elseif($order->status == 'review')
                                            <b class="text-danger">{{$order->status}}</b>
                                        @endif
                                    </td>
                                    <td>
                                            {{$product->price}}
                                        @endforeach
                                    </td>
                                    <td>
                                     {{ $order->user->name }}
                                    </td>
                                    <td>
                                        <a href="javascript:;" data-bs-target="#editstatus{{$order->id}}" data-bs-toggle="modal" class="btn btn-icon btn-primary btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="{{trans('common.edit')}}">
                                            <i class="bi bi-list"></i>
                                            حالة الطلب
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="22" class="p-3 text-center ">
                                        <h2>{{ trans('common.nothingToView') }}</h2>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                @foreach($orders as $order)
                <div class="modal fade text-md-start" id="editstatus{{$order->id}}" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
                        <div class="modal-content">
                            <div class="modal-header bg-transparent">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body pb-5 px-sm-5 pt-50">
                                <div class="text-center mb-2">
                                    <h1 class="mb-1">{{trans('common.edit')}}</h1>
                                </div>
                                {{Form::open(['url'=>route('admin.orders.statusUpdate',['id'=>$order->id]), 'id'=>'editstatusForm', 'class'=>'row gy-1 pt-75','files'=>'true'])}}
                                    <div class="col-12 text-center">
                                        <label class="form-label" for="status">حالة الطلب</label>
                                        {{ Form::select('status', [
                                            'pending' => 'Pending',
                                            'done' => 'Done',
                                            'review' => 'Review',
                                        ],$order->status, ['id'=>'status', 'class'=>'form-control  text-center']) }}
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

                {{$orders->links('vendor.pagination.default') }}


            </div>
        </div>
    </div>
    <!-- Bordered table end -->



@stop

@section('page_buttons')
    <a href="javascript:;" data-bs-target="#searchOrders" data-bs-toggle="modal" class="btn btn-primary">
        {{trans('common.search')}}
    </a>

    <div class="modal fade text-md-start" id="searchOrders" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
            <div class="modal-content">
                <div class="modal-header bg-transparent">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pb-5 px-sm-5 pt-50">
                    <div class="text-center mb-2">
                        <h1 class="mb-1">{{trans('common.search')}}</h1>
                    </div>
                    {{Form::open(['url'=>route('admin.orders'), 'id'=>'searchOrdersForm', 'class'=>'row gy-1 pt-75','method'=>'GET'])}}

                        <div class="col-12 col-md-4">
                            <label class="form-label" for="status">حالة الطلب</label>
                            {{ Form::select('status', [
                                '' => 'All',
                                'pending' => 'Pending',
                                'done' => 'Done',
                                'review' => 'Review',
                            ],isset($_GET['status']) ? $_GET['status'] : '', ['id'=>'status', 'class'=>'form-control']) }}
                        </div>
                        <div class="col-12 col-md-4">
                            <label class="form-label" for="from_date">{{trans('common.from_date')}}</label>
                            {{Form::date('from_date',isset($_GET['from_date']) ? $_GET['from_date'] : '',['id'=>'from_date', 'class'=>'form-control'])}}
                        </div>
                        <div class="col-12 col-md-4">
                            <label class="form-label" for="to_date">{{trans('common.to_date')}}</label>
                            {{Form::date('to_date',isset($_GET['to_date']) ? $_GET['to_date'] : '',['id'=>'to_date', 'class'=>'form-control'])}}
                        </div>
                        <div class="col-12 text-center mt-2 pt-50">
                            <button type="submit" class="btn btn-primary me-1">{{trans('common.search')}}</button>
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
