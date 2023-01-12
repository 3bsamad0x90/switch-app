@extends('PublisherPanel.layouts.master')

@section('content')
    <section id="statistics-card">
        <!-- Miscellaneous Charts -->
        <div class="row match-height">
            <div class="col-lg-9 col-12">
                <div class="card card-statistics">
                    <div class="card-header">
                        <h4 class="card-title">{{trans('common.Statistics')}}</h4>
                        <div class="d-flex align-items-center">
                            <p class="card-text me-25 mb-0">{{trans('common.TillNow')}}</p>
                        </div>
                    </div>
                    <div class="card-body statistics-body">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 col-12 mb-2 mb-md-0">
                                <div class="d-flex flex-row">
                                    <div class="avatar bg-light-primary me-1">
                                        <div class="avatar-content">
                                            <i data-feather="trending-up" class="avatar-icon"></i>
                                        </div>
                                    </div>
                                    <div class="my-auto">
                                        <a href="{{route('publisher.orders')}}">
                                            <h4 class="fw-bolder mb-0">{{auth()->user()->mySales()->count()}}</h4>
                                            <p class="card-text font-small-3 mb-0">{{trans('common.salesCount')}}</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="d-flex flex-row">
                                    <div class="avatar bg-light-success me-1">
                                        <div class="avatar-content">
                                            <i data-feather="dollar-sign" class="avatar-icon"></i>
                                        </div>
                                    </div>
                                    <div class="my-auto">
                                        <a href="{{route('publisher.orders')}}">
                                            <h4 class="fw-bolder mb-0">{{auth()->user()->mySales()->sum('total')}}</h4>
                                            <p class="card-text font-small-3 mb-0">{{trans('common.salesValue')}}</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-12 mb-2 mb-md-0">
                                <div class="d-flex flex-row">
                                    <div class="avatar bg-light-info me-1">
                                        <div class="avatar-content">
                                            <i data-feather="user" class="avatar-icon"></i>
                                        </div>
                                    </div>
                                    <div class="my-auto">
                                        <a href="{{route('publisher.clients')}}">
                                            <h4 class="fw-bolder mb-0">{{auth()->user()->publisherClients()->count()}}</h4>
                                            <p class="card-text font-small-3 mb-0">{{trans('common.Clients')}}</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-12 mb-2 mb-sm-0">
                                <div class="d-flex flex-row">
                                    <div class="avatar bg-light-danger me-1">
                                        <div class="avatar-content">
                                            <i data-feather="book-open" class="avatar-icon"></i>
                                        </div>
                                    </div>
                                    <div class="my-auto">
                                        <a href="{{route('publisher.books')}}">
                                            <h4 class="fw-bolder mb-0">{{auth()->user()->publisherBooks()->count()}}</h4>
                                            <p class="card-text font-small-3 mb-0">{{trans('common.books')}}</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Goal Overview Card -->
            <div class="col-lg-3 col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="card-title">{{trans('common.CurrentBalance')}}</h4>
                        <a href="javascript:;" data-bs-target="#policy" data-bs-toggle="modal">
                            <i data-feather="help-circle" class="font-medium-3 text-muted cursor-pointer"></i>
                        </a>
                    </div>
                    <div class="card-body p-0">
                        <div id="goal-overview-chart"></div>
                        <div class="row border-top text-center mx-0">
                            <div class="col-6 border-end py-1">
                                <small class="card-text text-muted mb-0">{{trans('common.MinimumForTransfeerMoney')}}</small>
                                <h3 class="fw-bolder mb-0">{{getSettingValue('MinimumForTransfeerMoney')}}</h3>
                            </div>
                            <div class="col-6 py-1">
                                <small class="card-text text-muted mb-0">{{trans('common.CurrentBalance')}}</small>
                                <h3 class="fw-bolder mb-0">{{auth()->user()->currentBalance()['balance']}}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Goal Overview Card -->
        </div>
        <!--/ Miscellaneous Charts -->
    </section>

    <div class="modal fade text-md-start" id="policy" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
            <div class="modal-content">
                <div class="modal-header bg-transparent">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pb-5 px-sm-5 pt-50">
                    <div class="text-center mb-2">
                        <h1 class="mb-1">{{trans('common.privacy policy & terms')}}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop

@section('new_style')
    <link rel="stylesheet" type="text/css" href="{{asset('AdminAssets/app-assets/vendors/css/charts/apexcharts.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('AdminAssets/app-assets/css-rtl/plugins/charts/chart-apex.css')}}">
@stop

@section('scripts')
    <!-- BEGIN: Page JS-->
    <?php /*<script src="{{asset('AdminAssets/app-assets/js/scripts/cards/card-analytics.js')}}"></script>*/?>
    <!-- END: Page JS-->
    <script src="{{asset('AdminAssets/app-assets/vendors/js/charts/apexcharts.min.js')}}"></script>
    <script>
        $(window).on('load', function () {
            var $textHeadingColor = '#5e5873';
            var $strokeColor = '#ebe9f1';
            var $goalStrokeColor2 = '#51e5a8';
            var goalChartOptions;
            var goalChart;
            var $goalOverviewChart = document.querySelector('#goal-overview-chart');
            // Goal Overview  Chart
            // -----------------------------
            goalChartOptions = {
                chart: {
                    height: 245,
                    type: 'radialBar',
                    sparkline: {
                        enabled: true
                    },
                    dropShadow: {
                        enabled: true,
                        blur: 3,
                        left: 1,
                        top: 1,
                        opacity: 0.1
                    }
                },
                colors: [$goalStrokeColor2],
                plotOptions: {
                    radialBar: {
                        offsetY: -10,
                        startAngle: -150,
                        endAngle: 150,
                        hollow: {
                            size: '77%'
                        },
                        track: {
                            background: $strokeColor,
                            strokeWidth: '50%'
                        },
                        dataLabels: {
                            name: {
                                show: false
                            },
                            value: {
                                color: $textHeadingColor,
                                fontSize: '2.86rem',
                                fontWeight: '600'
                            }
                        }
                    }
                },
                fill: {
                    type: 'gradient',
                    gradient: {
                        shade: 'dark',
                        type: 'horizontal',
                        shadeIntensity: 0.5,
                        gradientToColors: [window.colors.solid.success],
                        inverseColors: true,
                        opacityFrom: 1,
                        opacityTo: 1,
                        stops: [0, 100]
                    }
                },
                series: ['{{round(auth()->user()->currentBalance()["balanceRate"],2)}}'],
                stroke: {
                    lineCap: 'round'
                },
                grid: {
                    padding: {
                        bottom: 30
                    }
                }
            };
            goalChart = new ApexCharts($goalOverviewChart, goalChartOptions);
            goalChart.render();

        });
    </script>
@stop
