@extends('AdminPanel.layouts.master')
@section('content')


    <!-- Bordered table start -->
    <div class="row" id="table-bordered">
        <div class="col-12">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {{Form::open(['url'=>route('admin.apps.update'), 'files'=>'true'])}}
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="social-tab" data-bs-toggle="tab" href="#social" aria-controls="home" role="tab" aria-selected="true">
                                <i data-feather="aperture"></i>  تطبيقات السوشيال ميديا
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="music-tab" data-bs-toggle="tab" href="#music" aria-controls="music" role="tab" aria-selected="false">
                                <i data-feather="headphones"></i> تطبيقات الأغاني
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="business-tab" data-bs-toggle="tab" href="#business" aria-controls="business" role="tab" aria-selected="false">
                                <i data-feather="briefcase"></i> تطبيقات تجارية
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="creative-tab" data-bs-toggle="tab" href="#creative" aria-controls="creative" role="tab" aria-selected="false">
                                <i data-feather="book-open"></i>تطبيقات كرييتف
                            </a>
                        </li>

                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="social" aria-labelledby="social-tab" role="tabpanel">
                            @include('AdminPanel.apps.includes.social')
                        </div>
                        <div class="tab-pane" id="music" aria-labelledby="music-tab" role="tabpanel">
                            @include('AdminPanel.apps.includes.music')
                        </div>
                        <div class="tab-pane" id="business" aria-labelledby="business-tab" role="tabpanel">
                            @include('AdminPanel.apps.includes.business')
                        </div>
                        <div class="tab-pane" id="creative" aria-labelledby="creative-tab" role="tabpanel">
                            @include('AdminPanel.apps.includes.creative')
                        </div>

                    </div>
                </div>
                <div class="card-footer">
                    <input type="submit" value="{{trans('common.Save changes')}}" class="btn btn-primary">
                </div>
            </div>
            {{Form::close()}}
        </div>
    </div>
    <!-- Bordered table end -->
@stop
