@extends('PublisherPanel.layouts.master')

@section('content')
    <div class="row">
        <div class="col-12">
            @include('PublisherPanel.loggedinUser.menu')

            <!-- profile -->
            
            <div class="card">
                <div class="card-header border-bottom">
                    <h4 class="card-title">{{trans('common.payment_history')}}</h4>
                </div>
               
               
                <div class="table-responsive">
                    <table class="table table-bordered mb-2">
                        <thead>
                            <tr>
                                <th>{{trans('common.payment_method_id')}}</th>
                                <th>{{trans('common.account_holder_name')}}</th>
                                <th>{{trans('common.account_number')}}</th>
                                <th>{{trans('common.account_iban')}}</th>
                                <th>{{trans('common.account_swift')}}</th>
                                <th>{{trans('common.amount')}}</th>
                                <th>{{trans('common.transaction_id')}}</th>
                                <th>{{trans('common.from_details')}}</th>
                                {{-- <th class="text-center">{{trans('common.actions')}}</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                        @forelse ($payment_histories as $payment_history)
                            
                        
                            <tr >
                                <td class="text-wrap">
                                    {{$payment_history->payment_method_id}}<br>
                                    
                                </td>
                                <td>
                                    {{$payment_history->account_holder_name}}
                                </td>
                                <td>
                                    {{$payment_history->account_number}}
                                </td>
                                <td>
                                    {{$payment_history->account_iban}}
                                </td>

                                <td>
                                    {{$payment_history->account_swift_code}}
                                </td>
                                <td>
                                    {{$payment_history->amount}}
                                </td>
                                <td>
                                    {{$payment_history->transaction_id}}
                                </td>
                                <td>
                                    {{$payment_history->from_details}}
                                </td>
                              
                            </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="p-3 text-center ">
                                        <h2>{{trans('common.nothingToView')}}</h2>
                                    </td>
                                </tr>
                                @endforelse
                        </tbody>
                 
                    </table>

                </div>
          
            </div>
        </div>
    </div>
@stop