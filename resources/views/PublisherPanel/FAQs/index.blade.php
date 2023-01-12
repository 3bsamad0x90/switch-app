@extends('PublisherPanel.layouts.master')
@section('content')


    <!-- Bordered table start -->
    <div class="row" id="table-bordered">
        <div class="col-12">

            <!-- frequently asked questions tabs pills -->
            <section id="faq-tabs">
                <!-- vertical tab pill -->
                <div class="row">

                    <div class="col-lg-12 col-md-8 col-sm-12">
                        <!-- pill tabs tab content -->
                        <div class="tab-content">
                            <!-- payment panel -->
                            <div role="tabpanel" class="tab-pane active" id="faq-one" aria-labelledby="one" aria-expanded="true">

                                <!-- frequent answer and question  collapse  -->
                                <div class="accordion accordion-margin mt-2" id="faq-payment-qna">
                                    @forelse($faqs as $faq)
                                        <div class="card accordion-item">
                                            <h2 class="accordion-header" id="faq{{$faq['id']}}">
                                                <button class="accordion-button collapsed" data-bs-toggle="collapse" role="button" data-bs-target="#faq-{{$faq['id']}}" aria-expanded="false" aria-controls="faq-{{$faq['id']}}">
                                                    {{$faq['question_'.session()->get('Lang')]}}
                                                </button>
                                            </h2>

                                            <div id="faq-{{$faq['id']}}" class="collapse accordion-collapse" aria-labelledby="faq{{$faq['id']}}" data-bs-parent="#faq-{{$faq['id']}}">
                                                <div class="accordion-body">
                                                    {!!$faq['answer_'.session()->get('Lang')]!!}
                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                        <h2>{{trans('common.nothingToView')}}</h2>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- / frequently asked questions tabs pills -->

        </div>
    </div>
    <!-- Bordered table end -->



@stop