@extends('AdminPanel.layouts.master')
@section('content')


    <!-- Bordered table start -->
    <div class="row" id="table-bordered">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{$title}}</h4>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered mb-2">
                        <thead>
                            <tr>
                                <th>{{trans('common.date')}}</th>
                                <th class="text-center">{{trans('common.publisher')}}</th>
                                <th class="text-center">{{trans('common.amount')}}</th>
                                <th class="text-center">{{trans('common.transaction_id')}}</th>
                                <th class="text-center">{{trans('common.actions')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($publisherspayments as $payment)
                            <tr id="row_{{$payment->id}}">
                                <td class="text-center">
                                    {{ $payment->created_at }}
                                </td>
                                <td>
                                    {{$payment->publisher->name ?? ''}}
                                </td>
                                <td class="text-center">
                                    {{ $payment->amount }}
                                </td>
                                <td class="text-center">
                                    {{ $payment->transaction_id }}
                                </td>
                                <td class="text-center">
                                    <a href="javascript:;" data-bs-target="#editsection{{$payment->id}}" data-bs-toggle="modal" class="btn btn-icon btn-info">
                                        <i data-feather='edit' data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="{{trans('common.edit')}}"></i>
                                    </a>
                                    <?php $delete = route('admin.sections.delete',['id'=>$payment->id]); ?>
                                    <button type="button" class="btn btn-icon btn-danger" onclick="confirmDelete('{{$delete}}','{{$payment->id}}')" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="{{trans('common.delete')}}">
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

                @foreach($publisherspayments as $payment)
                    <div class="modal fade text-md-start" id="editsection{{$payment->id}}" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
                            <div class="modal-content">
                                <div class="modal-header bg-transparent">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body pb-5 px-sm-5 pt-50">
                                    <div class="text-center mb-2">
                                        <h1 class="mb-1">{{trans('common.edit')}}</h1>
                                    </div>
                                    {{Form::open(['files'=>'true','url'=>route('admin.publisherspayments.update',['id'=>$payment->id]), 'id'=>'editsectionForm', 'class'=>'row gy-1 pt-75'])}}
                                        <div class="col-12 col-sm-3 mb-1">
                                            <label class="form-label" for="publisher">{{trans('common.publisher')}}</label>
                                            {{Form::select('user_id',getPublishersList(),$payment->user_id,['id'=>'publisher','class'=>'form-control selectpicker','data-live-search'=>'true'])}}
                                        </div>

                                        <div class="col-12 col-md-4">
                                            <label class="form-label" for="amount">{{trans('common.amount')}}</label>
                                            {{Form::text('amount',$payment->amount,['id'=>'amount', 'class'=>'form-control'])}}
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <label class="form-label" for="transaction_id">{{trans('common.transaction_id')}}</label>
                                            {{Form::text('transaction_id',$payment->transaction_id,['id'=>'transaction_id', 'class'=>'form-control'])}}
                                        </div>
                                        <div class="col-12 col-md-12">
                                            <label class="form-label" for="from_details">{{trans('common.from_details')}}</label>
                                            {{Form::textarea('from_details',$payment->from_details,['id'=>'from_details', 'class'=>'form-control','rows'=>'3'])}}
                                        </div>
                                        
                                        <div class="row d-flex justify-content-center pt-2">
                                            <div class="col-md-6 text-center">
                                                <label class="form-label" for="from_details">
                                                    {{trans('common.attachment')}}
                                                </label>
                                                @if($payment->attachment != '')
                                                    <span class="avatar mb-2">
                                                        <img class="round" src="{{$payment->attachmentLink()}}" alt="avatar" height="150" width="150">
                                                    </span>
                                                @endif
                                                <div class="file-loading"> 
                                                    <input class="files" name="attachment" type="file">
                                                </div>
                                            </div>
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
                @endforeach


                {{ $publisherspayments->links('vendor.pagination.default') }}


            </div>
        </div>
    </div>
    <!-- Bordered table end -->



@stop

@section('page_buttons')
    <a href="javascript:;" data-bs-target="#createsection" data-bs-toggle="modal" class="btn btn-primary">
        {{trans('common.CreateNew')}}
    </a>

    <div class="modal fade text-md-start" id="createsection" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
            <div class="modal-content">
                <div class="modal-header bg-transparent">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pb-5 px-sm-5 pt-50">
                    <div class="text-center mb-2">
                        <h1 class="mb-1">{{trans('common.CreateNew')}}</h1>
                    </div>
                    {{Form::open(['files'=>'true','url'=>route('admin.publisherspayments.store'), 'id'=>'createsectionForm', 'class'=>'row gy-1 pt-75'])}}
                        <div class="col-12 col-sm-3 mb-1">
                            <label class="form-label" for="publisher">{{trans('common.publisher')}}</label>
                            {{Form::select('user_id',getPublishersList(),'',['id'=>'publisher','class'=>'form-control selectpicker','data-live-search'=>'true'])}}
                        </div>

                        <div class="col-12 col-md-4">
                            <label class="form-label" for="amount">{{trans('common.amount')}}</label>
                            {{Form::text('amount','',['id'=>'amount', 'class'=>'form-control'])}}
                        </div>
                        <div class="col-12 col-md-4">
                            <label class="form-label" for="transaction_id">{{trans('common.transaction_id')}}</label>
                            {{Form::text('transaction_id','',['id'=>'transaction_id', 'class'=>'form-control'])}}
                        </div>
                        <div class="col-12 col-md-12">
                            <label class="form-label" for="from_details">{{trans('common.from_details')}}</label>
                            {{Form::textarea('from_details','',['id'=>'from_details', 'class'=>'form-control','rows'=>'3'])}}
                        </div>
                        <div class="row d-flex justify-content-center pt-2">
                            <div class="col-md-6 text-center">
                                <label class="form-label" for="from_details">
                                    {{trans('common.attachment')}}
                                </label>
                                <div class="file-loading"> 
                                    <input class="files" name="attachment" type="file">
                                </div>
                            </div>
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