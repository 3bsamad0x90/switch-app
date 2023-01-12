@extends('PublisherPanel.layouts.master')

@section('content')
    <div class="row">
        <div class="col-12">
            
            @include('PublisherPanel.loggedinUser.menu')

            <!-- profile -->
            <div class="card">
                <div class="card-header border-bottom">
                    <h4 class="card-title">{{trans('common.Account')}}</h4>
                </div>
                <div class="card-body my-25">
                    {{Form::open(['files'=>'true','class'=>'validate-form'])}}


                        <!-- form -->
                        <div class="row pt-1">
                            <div class="col-12 col-sm-6">
                                <label class="form-label" for="password">{{trans('common.password')}}</label>
                                {{Form::password('password',['id'=>'password','class'=>'form-control','required'])}}
                                @if($errors->has('password'))
                                    <span class="text-danger" role="alert">
                                        <b>{{ $errors->first('password') }}</b>
                                    </span>
                                @endif
                            </div>
                            <div class="col-12 col-sm-6">
                                <label class="form-label" for="passwordConfirmation">{{trans('common.passwordConfirmation')}}</label>
                                {{Form::password('password_confirmation',['id'=>'passwordConfirmation','class'=>'form-control','required'])}}
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary mt-1 me-1">{{trans('common.Save changes')}}</button>
                            </div>
                        </div>
                        <!--/ form -->
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
@stop