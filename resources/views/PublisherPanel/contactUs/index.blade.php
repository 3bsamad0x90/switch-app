@extends('PublisherPanel.layouts.master')
@section('content')


    <!-- Bordered table start -->
    <div class="row">
        <div class="col-12">

            <!-- contact us -->
            <section class="faq-contact">
                <div class="row pt-1">
                    <div class="col-12 text-center">
                        <h2>{{trans('common.You still have a question?')}}</h2>
                        <p class="mb-3">
                            {{trans('common.If you cannot find a question in our FAQ, you can always contact us. We will answer to you shortly!')}}
                        </p>
                    </div>
                    <div class="col-sm-9">
                        <div class="card p-2">
                            {{Form::open()}}
                                <div class="row">
                                    <div class="col-sm-3">
                                        <label class="form-label" for="subject">{{trans('common.subject')}}</label>
                                        {{Form::select('subject',messageSubjectsList(session()->get('Lang')),'',['id'=>'subject','class'=>'form-control','required'])}}
                                        @if($errors->has('subject'))
                                            <span class="text-danger" role="alert">
                                                <b>{{ $errors->first('subject') }}</b>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="col-sm-9">
                                        <label class="form-label" for="title">{{trans('common.title')}}</label>
                                        {{Form::text('title','',['id'=>'title','class'=>'form-control','required'])}}
                                        @if($errors->has('title'))
                                            <span class="text-danger" role="alert">
                                                <b>{{ $errors->first('title') }}</b>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="content">{{trans('common.content')}}</label>
                                        {{Form::textarea('content','',['id'=>'content','class'=>'form-control','required'])}}
                                        @if($errors->has('content'))
                                            <span class="text-danger" role="alert">
                                                <b>{{ $errors->first('content') }}</b>
                                            </span>
                                        @endif
                                    </div>
                                    
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary mt-1 me-1">{{trans('common.send')}}</button>
                                    </div>
                                </div>
                            {{Form::close()}}
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card text-center faq-contact-card shadow-none py-1">
                            <div class="accordion-body">
                                <div class="avatar avatar-tag bg-light-primary mb-2 mx-auto">
                                    <i data-feather="phone-call" class="font-medium-3"></i>
                                </div>
                                <h4>{{getSettingValue('mobile')}}</h4>
                            </div>
                        </div>
                        <div class="card text-center faq-contact-card shadow-none py-1">
                            <div class="accordion-body">
                                <div class="avatar avatar-tag bg-light-primary mb-2 mx-auto">
                                    <i data-feather="mail" class="font-medium-3"></i>
                                </div>
                                <h4>{{getSettingValue('email')}}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--/ contact us -->

        </div>
    </div>
    <!-- Bordered table end -->



@stop