<!DOCTYPE html>
<html class="loading semi-dark-layout" lang="en" data-layout="semi-dark-layout" data-textdirection="rtl">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content=".">
    <meta name="keywords" content="">
    <meta name="author" content="TechnoMasr Co.">
    <title>{{$title}}</title>
    <link rel="apple-touch-icon" href="{{asset('AdminAssets/app-assets/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('AdminAssets/app-assets/images/ico/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('AdminAssets/app-assets/vendors/css/vendors-rtl.min.css')}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('AdminAssets/app-assets/css-rtl/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('AdminAssets/app-assets/css-rtl/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('AdminAssets/app-assets/css-rtl/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('AdminAssets/app-assets/css-rtl/components.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('AdminAssets/app-assets/css-rtl/themes/dark-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('AdminAssets/app-assets/css-rtl/themes/bordered-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('AdminAssets/app-assets/css-rtl/themes/semi-dark-layout.css')}}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('AdminAssets/app-assets/css-rtl/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('AdminAssets/app-assets/css-rtl/plugins/forms/form-validation.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('AdminAssets/app-assets/css-rtl/pages/authentication.css')}}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('AdminAssets/app-assets/css-rtl/custom-rtl.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('AdminAssets/assets/css/style-rtl.css')}}">
    <!-- END: Custom CSS-->
    <link rel="stylesheet" href="{{asset('AdminAssets/app-assets/'.getCssFolder().'/plugins/bootstrap-select-1.14.0-beta/dist/css/bootstrap-select.css')}}">
    <!-- default icons used in the plugin are from Bootstrap 5.x icon library (which can be enabled by loading CSS below) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.min.css" crossorigin="anonymous">

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="blank-page">
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="auth-wrapper auth-basic px-2">
                    <div class="auth-inner my-2">
                        <!-- Register basic -->
                        <div class="card mb-0">
                            <div class="card-body">
                                <a href="https://ilawfair.com" class="brand-logo">
                                    <img src="{{asset('/AdminAssets/app-assets/images/logo/logo.png')}}" width="90%" />
                                </a>

                                <h4 class="card-title mb-1 text-center">{{trans('common.register')}}</h4>
                               @if(Session::get('success'))
                                    <div class="alert alert-success" role="alert">
                                        <div class="alert-body">
                                            {{Session::get('success')}}
                                        </div>
                                    </div>
                                @else
                                    {{Form::open(['files'=>'true','class'=>'auth-register-form mt-2','method'=>'POST'])}}
                                        <div class="mb-1">
                                            <label for="name" class="form-label">{{trans('common.name')}}</label>
                                            {{Form::text('name','',['class'=>'form-control'])}}
                                            @if($errors->has('name'))
                                                <span class="text-danger" role="alert">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="mb-1">
                                            <label for="responsible" class="form-label">{{trans('common.responsible')}}</label>
                                            <input type="text" class="form-control" id="responsible" name="responsible" value="{{old('responsible')}}" aria-describedby="responsible"  />
                                            @if($errors->has('responsible'))
                                                <span class="text-danger" role="alert">
                                                    <strong>{{ $errors->first('responsible') }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-1">
                                            <label for="userName" class="form-label">{{trans('common.username')}}</label>
                                            <input type="text" class="form-control" id="userName" name="userName" value="{{old('userName')}}" aria-describedby="userName"  />
                                            @if($errors->has('userName'))
                                                <span class="text-danger" role="alert">
                                                    <strong>{{ $errors->first('userName') }}</strong>
                                                </span>
                                            @enderror

                                        </div>
                                        <div class="mb-1">
                                            <label for="email" class="form-label">{{trans('common.email')}}</label>
                                            <input type="text" class="form-control" id="email" name="email" value="{{old('email')}}" placeholder="john@example.com" aria-describedby="email"  />
                                            @if($errors->has('email'))
                                                <span class="text-danger" role="alert">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="mb-1">
                                            <label for="password" class="form-label">{{trans('common.password')}}</label>
                                            <div class="input-group input-group-merge form-password-toggle">
                                                <input type="password" class="form-control form-control-merge" id="password" name="password" value="{{old('password')}}" aria-describedby="password"   />
                                                <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                            </div>
                                        </div>

                                        <div class="mb-1">
                                            <label for="website" class="form-label">{{trans('common.website')}}</label>
                                            <input type="text" class="form-control" id="website" name="website" value="{{old('website')}}" aria-describedby="website"  />
                                            @if($errors->has('website'))
                                                <span class="text-danger" role="alert">
                                                    <strong>{{ $errors->first('website') }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-1">
                                            <label for="country" class="form-label">{{trans('common.country')}}</label>
                                            {{Form::select('country',getCountriesList(session()->get('Lang'),'iso'),getUserCountryData()['countryCode'],['onchange'=>'getCitiesFromApi()','id'=>'country','class'=>'form-control selectpicker','data-live-search'=>'true'])}}
                                            @if($errors->has('country'))
                                                <span class="text-danger" role="alert">
                                                    <strong>{{ $errors->first('country') }}</strong>
                                                </span>
                                            @enderror

                                        </div>
                                        <div class="mb-1">
                                            <label for="governorate" class="form-label">{{trans('common.governorate')}}</label>
                                            {{Form::select('governorate',aramexCities(getUserCountryData()['countryCode']),'',['id'=>'governorate','class'=>'form-control selectpicker','data-live-search'=>'true'])}}
                                            @if($errors->has('governorate'))
                                                <span class="text-danger" role="alert">
                                                    <strong>{{ $errors->first('governorate') }}</strong>
                                                </span>
                                            @enderror

                                        </div>
                                        <div class="mb-1">
                                            <label for="phone" class="form-label">{{trans('common.landLine')}}</label>
                                            <input type="number" class="form-control" id="phone" name="phone" value="{{old('phone')}}" aria-describedby="phone"  />
                                            @if($errors->has('phone'))
                                                <span class="text-danger" role="alert">
                                                    <strong>{{ $errors->first('phone') }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="mb-1">
                                            <label for="mobile" class="form-label">{{trans('common.mobile')}}</label>
                                            <input type="number" class="form-control" id="mobile" name="mobile" value="{{old('mobile')}}" aria-describedby="mobile"  />
                                            @if($errors->has('mobile'))
                                                <span class="text-danger" role="alert">
                                                    <strong>{{ $errors->first('mobile') }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="mb-1">
                                            <label for="address" class="form-label">{{trans('common.address')}}</label>
                                            <input type="text" class="form-control" id="address" name="address" value="{{old('address')}}" aria-describedby="address"  />
                                            @if($errors->has('address'))
                                                <span class="text-danger" role="alert">
                                                    <strong>{{ $errors->first('address') }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-1">
                                            <label for="licenseId" class="form-label">{{trans('common.licenseId')}}</label>
                                            <input type="text" class="form-control" id="licenseId" name="licenseId" value="{{old('licenseId')}}" aria-describedby="licenseId" />
                                            @if($errors->has('licenseId'))
                                                <span class="text-danger" role="alert">
                                                    <strong>{{ $errors->first('licenseId') }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="mb-1">
                                            <label for="licensePhoto" class="form-label">{{trans('common.licensePhoto')}}</label>
                                            <div class="file-loading"> 
                                                <input class="files" name="licensePhoto" type="file">
                                            </div>
                                            @if($errors->has('licensePhoto'))
                                                <span class="text-danger" role="alert">
                                                    <strong>{{ $errors->first('licensePhoto') }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="mb-1">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="register-privacy-policy"  />
                                                <label class="form-check-label" for="register-privacy-policy">
                                                    {{trans('common.I agree to')}}
                                                    <a href="javascript:;" data-bs-target="#policyReview" data-bs-toggle="modal">
                                                        {{trans('common.privacy policy & terms')}}
                                                    </a>
                                                </label>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary w-100" >{{trans('common.Sign up')}}</button>
                                    {{Form::close()}}
                                @endif

                                <p class="text-center mt-2">
                                    <a href="https://ilawfair.com">
                                        <span>{{trans('common.PanelHome')}}</span>
                                    </a>
                                    |
                                    <a href="{{route('publisher.login')}}">
                                        <span>{{trans('common.Sign in')}}</span>
                                    </a>
                                </p>

                            </div>
                        </div>
                        <!-- /Register basic -->
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="modal fade text-md-start" id="policyReview" " aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
            <div class="modal-content">
                <div class="modal-header bg-transparent">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pb-5 px-sm-5 pt-50">
                    <div class="text-center mb-2">
                        <h1 class="mb-1">{{trans('common.privacy policy & terms')}}</h1>
                    </div>
                    {!!getSettingValue('privacyPolicy_'.session()->get('Lang'))!!}
                </div>
            </div>
        </div>
    </div>

    <!-- BEGIN: Vendor JS-->
    <script src="{{asset('AdminAssets/app-assets/vendors/js/vendors.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('AdminAssets/app-assets/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{asset('AdminAssets/app-assets/js/core/app-menu.js')}}"></script>
    <script src="{{asset('AdminAssets/app-assets/js/core/app.js')}}"></script>
    <!-- END: Theme JS-->

    <!-- purify.min.js is only needed if you wish to purify HTML content in your preview for HTML files.
     This must be loaded before fileinput.min.js -->
     <script src="{{ asset('/AdminAssets/app-assets/js/scripts/bootstrap_fileinput/js/plugins/purify.min.js')}}"
            type="text/javascript"></script>
    <!-- the main fileinput plugin file -->
    <script src="{{ asset('/AdminAssets/app-assets/js/scripts/bootstrap_fileinput/js/fileinput.js')}}"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="{{asset('AdminAssets/app-assets/'.getCssFolder().'/plugins/bootstrap-select-1.14.0-beta/dist/js/bootstrap-select.js')}}"></script>

    <!-- (Optional) Latest compiled and minified JavaScript translation files -->
    <script src="{{asset('AdminAssets/app-assets/'.getCssFolder().'/plugins/bootstrap-select-1.14.0-beta/dist/js/i18n/defaults-ar_AR.js')}}"></script>


    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
            $('.selectpicker').selectpicker();
        })

        function getCitiesFromApi() {
            var country = document.getElementById("country").value;
            $.ajax({    //create an ajax request to display.php
                type: "GET",
                url: "<?php echo url('/getAramexCountryCities?country="+country+"'); ?>",             
                dataType: "html",   //expect html to be returned                
                success: function(data){ 
                    var CitiesList = $.parseJSON(data);
                    //populate CitiesList options
                    var CitiesListOption = '';
                    for (var i=0;i<CitiesList.length;i++){
                        CitiesListOption += '<option value="'+CitiesList[i]['id']+'">'+CitiesList[i]['name']+'</option>';
                    }
                    console.log(CitiesListOption);
                    $('select#governorate').find('option').remove().end().append(CitiesListOption).selectpicker('refresh');
                }
            });
        }

    </script>

</body>
<!-- END: Body-->

</html>