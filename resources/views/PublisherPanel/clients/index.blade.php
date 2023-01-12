@extends('PublisherPanel.layouts.master')
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
                            <tr>
                                <th>#</th>
                                <th>{{ trans('common.client') }}</th>
                                <th>{{ trans('common.address') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($clients as $client)
                                <tr id="row_{{$client->id}}">
                                    <td>{{$client->id}}</td>
                                    <td>
                                        <a href="{{route('publisher.orders',['client_id'=>$client->id,'order_id'=>'','from_date'=>'','to_date'=>''])}}">
                                            {{$client->name}}
                                        </a>
                                    </td>
                                    <td>
                                        {{$client->countryData()['name'] ?? '-'}}
                                        <br>{{$client->cityData()['name'] ?? '-'}}
                                        <br>{{$client->address ?? '-'}}
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

                {{-- {{$clients->links('vendor.pagination.default') }} --}}


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
                    {{Form::open(['url'=>route('publisher.orders'), 'id'=>'searchOrdersForm', 'class'=>'row gy-1 pt-75','method'=>'GET'])}}
                        <div class="col-12 col-md-3">
                            <label class="form-label" for="client_id">{{trans('common.client')}}</label>
                            {{Form::select('client_id',
                                                    [''=>trans('common.allClients')]
                                                    + auth()->user()->publisherClients()->pluck('users.name','users.id')->all(),
                                                    isset($_GET['client_id']) ? $_GET['client_id'] : '',['id'=>'client_id', 'class'=>'form-control selectpicker','data-live-search'=>'true'])}}
                        </div>
                        <div class="col-12 col-md-3">
                            <label class="form-label" for="order_id">{{trans('common.order_id')}}</label>
                            {{Form::text('order_id',isset($_GET['order_id']) ? $_GET['order_id'] : '',['id'=>'order_id', 'class'=>'form-control'])}}
                        </div>
                        <div class="col-12 col-md-3">
                            <label class="form-label" for="from_date">{{trans('common.from_date')}}</label>
                            {{Form::date('from_date',isset($_GET['from_date']) ? $_GET['from_date'] : '',['id'=>'from_date', 'class'=>'form-control'])}}
                        </div>
                        <div class="col-12 col-md-3">
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