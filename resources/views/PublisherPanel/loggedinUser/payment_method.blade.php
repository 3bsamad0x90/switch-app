@extends('PublisherPanel.layouts.master')

@section('content')
    <div class="row">
        <div class="col-12">
            @include('PublisherPanel.loggedinUser.menu')


            <!-- profile -->

            <!-- payment methods -->
            <div class="card">
                <div class="card-header border-bottom">
                    <h4 class="card-title">{{ trans('common.payment_method') }}</h4>
                </div>
                <div class="card-body my-1 py-25">
                    <div class="row gx-4">
                        <div class="col-lg-6">
                            {{ Form::open(['url' => route('publisher.payment_methods.store'), 'id' => 'creditCardForm', 'class' => 'row gy-1 pt-75']) }}

                            <div class="col-12 mt-0">
                                <label class="form-label" for="addCardNumber">{{ trans('common.bank_name') }}</label>
                                <div class="input-group input-group-merge">
                                    {{ Form::text('name', '', ['id' => 'name', 'class' => 'form-control']) }}

                                </div>
                            </div>

                            <div class="col-12 mt-0">
                                <label class="form-label"
                                    for="addCardNumber">{{ trans('common.account_holder_name') }}</label>
                                <div class="input-group input-group-merge">
                                    {{ Form::text('account_holder_name', '', ['id' => 'account_holder_name', 'class' => 'form-control']) }}

                                </div>
                            </div>
                            <div class="col-12 mt-0">
                                <label class="form-label" for="addCardNumber">{{ trans('common.account_number') }}</label>
                                <div class="input-group input-group-merge">
                                    {{ Form::text('account_number', '', ['id' => 'account_number', 'class' => 'form-control']) }}

                                </div>
                            </div>



                            <div class="col-6 col-md-6">
                                <label class="form-label" for="addCardNumber">{{ trans('common.account_iban') }}</label>
                                <div class="input-group input-group-merge">
                                    {{ Form::text('account_iban', '', ['id' => 'account_iban', 'class' => 'form-control']) }}

                                </div>
                            </div>

                            <div class="col-6 col-md-6">
                                <label class="form-label" for="addCardNumber">{{ trans('common.account_swift') }}</label>
                                <div class="input-group input-group-merge">
                                    {{ Form::text('account_swift_code', '', ['id' => 'account_swift_code', 'class' => 'form-control']) }}

                                </div>
                            </div>

                            <div class="col-12">
                                <div class="d-flex align-items-center">
                                   
                                    <div class="form-check form-check-success form-switch">
                                        {{ Form::checkbox('primary', '1', true, ['id' => 'primary', 'class' => 'form-check-input']) }}
                                        <label class="form-check-label" for="primary">{{trans('common.default')}}</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mt-2 pt-1">
                                <button type="submit" class="btn btn-primary me-1">{{ trans('common.Save Changes') }}</button>
                                <button type="reset" class="btn btn-outline-secondary">{{ trans('common.Cancel') }}</button>
                            </div>
                            <div></div>
                            <input type="hidden" />
                            {{ Form::close() }}
                        </div>
                        <div class="col-lg-6 mt-2 mt-lg-0">
                            <h6 class="fw-bolder mb-2">{{ trans('common.My_card') }}</h6>
                            <div class="added-cards">
                                @foreach($payment_methods as $payment_method)
                                    <div class="cardMaster rounded border p-2 mb-1" id="row_{{$payment_method->id}}">
                                        <div class="d-flex justify-content-between flex-sm-row flex-column">
                                            <div class="card-information">
                                                <div class="d-flex align-items-center mb-50">
                                                    <b>{{$payment_method->name}}</b>
                                                    @if($payment_method->primary == '1')
                                                        <span class="badge badge-light-success">{{trans('common.default')}}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column text-start text-lg-end">
                                                <div class="d-flex order-sm-0 order-1 mt-1 mt-sm-0">
                                                    <a href="javascript:;" data-bs-target="#editMethod{{$payment_method->id}}" data-bs-toggle="modal" class="btn btn-outline-primary me-75 waves-effect">
                                                        <i data-feather='edit' data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="{{trans('common.edit')}}"></i>
                                                    </a>
                                                    <?php $delete = route('publisher.payment_methods.delete',['id'=>$payment_method->id]); ?>

                                                    <button type="button" class="btn btn-outline-danger waves-effect" onclick="confirmDelete('{{$delete}}','{{$payment_method->id}}')">
                                                        <i data-feather='trash-2'></i>
                                                    </button> 

                                                 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                          

                    </div>
                </div>
            </div>
            <!-- / payment methods -->
        </div>

    </div>

    <!-- edit card modal  -->
    @foreach($payment_methods as $payment_method)
    <div class="modal fade" id="editMethod{{$payment_method->id}}" tabindex="-1" aria-labelledby="editCardTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-transparent">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body px-sm-5 mx-50 pb-5">
                    <h1 class="text-center mb-1" id="editCardTitle">{{ trans('common.Edit Card') }}</h1>

                    <!-- form -->
                    {{ Form::open(['url' => route('publisher.payment_methods.update',['id'=>$payment_method->id]), 'id' => 'editMethodForm', 'class' => 'row gy-1 pt-75']) }}
                        <div class="col-12">
                            <label class="form-label" for="addCardNumber">{{ trans('common.bank_name') }}</label>
                            {{Form::text('name',$payment_method->name,['id'=>'name', 'class'=>'form-control'])}}
                        </div>

                        <div class="col-12">
                            <label class="form-label" for="addCardNumber">{{ trans('common.account_holder_name') }}</label>                            
                            {{Form::text('account_holder_name',$payment_method->account_holder_name,['id'=>'account_holder_name', 'class'=>'form-control'])}}
                        </div>

                        <div class="col-md-12">
                            <label class="form-label" for="account_number">{{ trans('common.account_number') }}</label>                            
                            {{Form::text('account_number',$payment_method->account_number,['id'=>'account_number', 'class'=>'form-control'])}}
                        </div>

                        <div class="col-6 col-md-12">
                            <label class="form-label" for="addCardNumber">{{ trans('common.account_iban') }}</label>                            
                            {{Form::text('account_iban',$payment_method->account_iban,['id'=>'account_iban', 'class'=>'form-control'])}}
                        </div>

                        <div class="col-6 col-md-12">
                            <label class="form-label" for="addCardNumber">{{ trans('common.account_swift') }}</label>                            
                            {{Form::text('account_swift_code',$payment_method->account_swift_code,['id'=>'account_swift_code', 'class'=>'form-control'])}}
                        </div>

                        <div class="col-12">
                            <div class="d-flex align-items-center">
                                
                                <div class="form-check form-check-success form-switch">
                                    {{ Form::checkbox('primary', '1', $payment_method->primary == '1' ? true : false, ['id' => 'primary', 'class' => 'form-check-input']) }}
                                    <label class="form-check-label" for="primary">{{trans('common.default')}}</label>
                                </div>
                            </div>
                        </div>


                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-primary me-1 mt-1">{{ trans('common.Save Changes') }}</button>
                            <button type="reset" class="btn btn-outline-secondary mt-1" data-bs-dismiss="modal"
                                aria-label="Close">
                                {{ trans('common.Cancel') }}
                            </button>
                        </div>
                        {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <!--/ edit card modal  -->

@stop
