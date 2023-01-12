@extends('AdminPanel.layouts.master')

@section('content')
    <div class="row">
        <div class="col-12">
            <!-- profile -->
            <div class="card">
                <div class="card-body py-2 my-25">
                    {{Form::open(['files'=>'true','class'=>'validate-form'])}}
                        <input autocomplete="false" name="hidden" type="text" style="display:none;">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-3 text-center">
                                <div class="file-loading"> 
                                    <input class="files" name="photo" type="file">
                                </div>
                            </div>
                        </div>

                        <!-- form -->
                        <div class="row pt-3">
                            <div class="col-12 col-sm-3 mb-1">
                                <label class="form-label" for="name">{{trans('common.name')}} <span class="text-danger">*</span></label>
                                {{Form::text('name','',['id'=>'name','class'=>'form-control','required'])}}
                                @if($errors->has('name'))
                                    <span class="text-danger" role="alert">
                                        <b>{{ $errors->first('name') }}</b>
                                    </span>
                                @endif
                            </div>
                            <div class="col-12 col-sm-3 mb-1">
                                <label class="form-label" for="responsible">{{trans('common.responsible')}} <span class="text-danger">*</span></label>
                                {{Form::text('responsible','',['id'=>'responsible','class'=>'form-control','required'])}}
                            </div>
                            <div class="col-12 col-sm-3 mb-1">
                                <label class="form-label" for="userName">{{trans('common.username')}}</label>
                                {{Form::text('userName','',['id'=>'userName','class'=>'form-control'])}}
                                @if($errors->has('userName'))
                                    <span class="text-danger" role="alert">
                                        <b>{{ $errors->first('userName') }}</b>
                                    </span>
                                @endif
                            </div>
                            <div class="col-12 col-sm-3 mb-1">
                                <label class="form-label" for="commission">{{trans('common.commission')}}</label>
                                {{Form::text('commission','',['id'=>'commission','class'=>'form-control'])}}
                                @if($errors->has('commission'))
                                    <span class="text-danger" role="alert">
                                        <b>{{ $errors->first('commission') }}</b>
                                    </span>
                                @endif
                            </div>
                            <div class="col-12 col-sm-3 mb-1">
                                <label class="form-label" for="email">{{trans('common.email')}} <span class="text-danger">*</span></label>
                                {{Form::email('email','',['id'=>'email','class'=>'form-control','required'])}}
                                @if($errors->has('email'))
                                    <span class="text-danger" role="alert">
                                        <b>{{ $errors->first('email') }}</b>
                                    </span>
                                @endif
                            </div>
                            <div class="col-12 col-sm-3 mb-1">
                                <label class="form-label" for="phone">{{trans('common.phone')}} <span class="text-danger">*</span></label>
                                {{Form::text('phone','',['id'=>'phone','class'=>'form-control'])}}
                                @if($errors->has('phone'))
                                    <span class="text-danger" role="alert">
                                        <b>{{ $errors->first('phone') }}</b>
                                    </span>
                                @endif
                            </div>
                            <div class="col-12 col-sm-3 mb-1">
                                <label class="form-label" for="mobile">{{trans('common.mobile')}}</label>
                                {{Form::text('mobile','',['id'=>'mobile','class'=>'form-control'])}}
                            </div>
                            <div class="col-12 col-sm-3 mb-1">
                                <label class="form-label" for="website">{{trans('common.website')}}</label>
                                {{Form::text('website','',['id'=>'website','class'=>'form-control'])}}
                            </div>
                            <div class="col-12 col-sm-4 mb-1">
                                <label class="form-label" for="licenseId">{{trans('common.licenseId')}}</label>
                                {{Form::text('licenseId','',['id'=>'licenseId','class'=>'form-control'])}}
                            </div>
                            <div class="col-12 col-sm-3 mb-1">
                                <label class="form-label" for="phone">{{trans('common.password')}} <span class="text-danger">*</span></label>
                                {{Form::password('password',['id'=>'phone','class'=>'form-control','autoComplete'=>'new-password','required'])}}
                                @if($errors->has('password'))
                                    <span class="text-danger" role="alert">
                                        <b>{{ $errors->first('password') }}</b>
                                    </span>
                                @endif
                            </div>

                            <div class="col-12 col-sm-3 mb-1">
                                <label for="language" class="form-label">{{trans('common.language')}}</label>
                                {{Form::select('language',[
                                                            'ar' => trans('common.lang1Name'),
                                                            'en' => trans('common.lang2Name'),
                                                            'fr' => trans('common.lang3Name')
                                                            ],'',['id'=>'language','class'=>'form-control selectpicker'])}}
                                @if($errors->has('language'))
                                    <span class="text-danger" role="alert">
                                        <b>{{ $errors->first('language') }}</b>
                                    </span>
                                @endif
                            </div>
                            <div class="col-12 col-sm-3 mb-1">
                                <label class="form-label" for="country">{{trans('common.country')}} <span class="text-danger">*</span></label>
                                {{Form::select('country',getCountriesList(session()->get('Lang'),'iso'),'',['id'=>'country','class'=>'form-control selectpicker','data-live-search'=>'true','onchange'=>'getCitiesFromApi()','required'])}}
                            </div>
                            <div class="col-12 col-sm-3 mb-1">
                                <label for="governorate" class="form-label">{{trans('common.governorate')}} <span class="text-danger">*</span></label>
                                {{Form::select('governorate',aramexCities(getUserCountryData()['countryCode']),'',['id'=>'governorate','class'=>'form-control selectpicker','data-live-search'=>'true','required'])}}
                            </div>

                            <div class="col-12 col-sm-12 mb-1">
                                <label class="form-label" for="address">{{trans('common.address')}}</label>
                                {{Form::text('address','',['id'=>'address','class'=>'form-control'])}}
                                @if($errors->has('address'))
                                    <span class="text-danger" role="alert">
                                        <b>{{ $errors->first('address') }}</b>
                                    </span>
                                @endif
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
@section('scripts')
<script>
    
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
@stop