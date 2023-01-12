@extends('AdminPanel.layouts.master')

@section('content')
    <div class="row">
        <div class="col-12">

            <!-- profile -->
            <div class="card">
                <div class="card-body py-2 my-25">
                    {{Form::open(['files'=>'true','class'=>'validate-form'])}}
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-4 text-center">
                                
                                <label class="form-label" for="photo">{{trans('common.logo')}}</label>
                                <div class="col-12 pb-2"></div>
                                <span class="avatar mb-2">
                                    <img class="round" src="{{$user->photoLink()}}" alt="avatar" height="150" width="150">
                                </span>
                                <div class="file-loading"> 
                                    <input class="files" name="photo" type="file">
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                                
                                <label class="form-label" for="licensePhoto">{{trans('common.licensePhoto')}}</label>
                                <div class="col-12 pb-2"></div>
                                <span>
                                    <img src="{{$user->licensePhotoLink()}}" alt="avatar" height="150" width="150">
                                </span>
                                <div class="col-12 pb-2"></div>
                                <div class="file-loading"> 
                                    <input class="files" name="licensePhoto" type="file">
                                </div>
                            </div>
                        </div>

                        <!-- form -->
                        <div class="row pt-3">
                            <div class="col-12 col-sm-3 mb-1">
                                <label class="form-label" for="name">{{trans('common.name')}} <span class="text-danger">*</span></label>
                                {{Form::text('name',$user->name,['id'=>'name','class'=>'form-control','required'])}}
                            </div>
                            <div class="col-12 col-sm-3 mb-1">
                                <label class="form-label" for="responsible">{{trans('common.responsible')}}</label>
                                {{Form::text('responsible',$user->responsible,['id'=>'responsible','class'=>'form-control','required'])}}
                            </div>
                            <div class="col-12 col-sm-3 mb-1">
                                <label class="form-label" for="userName">{{trans('common.username')}}</label>
                                {{Form::text('userName',$user->userName,['id'=>'userName','class'=>'form-control'])}}
                            </div>
                            <div class="col-12 col-sm-3 mb-1">
                                <label class="form-label" for="commission">{{trans('common.commission')}}</label>
                                {{Form::text('commission',$user->commission,['id'=>'commission','class'=>'form-control'])}}
                            </div>
                            <div class="col-12 col-sm-3 mb-1">
                                <label class="form-label" for="email">{{trans('common.email')}} <span class="text-danger">*</span></label>
                                {{Form::text('email',$user->email,['id'=>'email','class'=>'form-control','required'])}}
                            </div>
                            <div class="col-12 col-sm-3 mb-1">
                                <label class="form-label" for="email">{{trans('common.password')}}</label>
                                {{Form::password('password',['id'=>'password','class'=>'form-control','autoComplete'=>'new-password'])}}
                            </div>
                            <div class="col-12 col-sm-3 mb-1">
                                <label class="form-label" for="website">{{trans('common.website')}}</label>
                                {{Form::text('website',$user->website,['id'=>'website','class'=>'form-control'])}}
                            </div>

                            <div class="col-12 col-sm-3 mb-1">
                                <label for="language" class="form-label">{{trans('common.language')}}</label>
                                {{Form::select('language',[
                                                            'ar' => trans('common.lang1Name'),
                                                            'en' => trans('common.lang2Name'),
                                                            'fr' => trans('common.lang3Name')
                                                            ],$user->language,['id'=>'language','class'=>'form-control selectpicker'])}}
                            </div>
                            <div class="col-12 col-sm-3 mb-1">
                                <label class="form-label" for="country">{{trans('common.country')}} <span class="text-danger">*</span></label>
                                {{Form::select('country',getCountriesList(session()->get('Lang'),'iso'),$user->country,['id'=>'country','class'=>'form-control selectpicker','data-live-search'=>'true','onchange'=>'getCitiesFromApi()','required'])}}
                            </div>
                            <div class="col-12 col-sm-3 mb-1">
                                <label for="governorate" class="form-label">{{trans('common.governorate')}} <span class="text-danger">*</span></label>
                                {{Form::select('governorate',aramexCities(getUserCountryData()['countryCode']),$user->governorate,['id'=>'governorate','class'=>'form-control selectpicker','data-live-search'=>'true','required'])}}
                            </div>
                            <div class="col-12 col-sm-3 mb-1">
                                <label class="form-label" for="phone">{{trans('common.phone')}} <span class="text-danger">*</span></label>
                                {{Form::text('phone',$user->phone,['id'=>'phone','class'=>'form-control'])}}
                            </div>
                            <div class="col-12 col-sm-3 mb-1">
                                <label class="form-label" for="mobile">{{trans('common.mobile')}}</label>
                                {{Form::text('mobile',$user->mobile,['id'=>'mobile','class'=>'form-control'])}}
                            </div>
                            <div class="col-12 col-sm-4 mb-1">
                                <label class="form-label" for="licenseId">{{trans('common.licenseId')}}</label>
                                {{Form::text('licenseId',$user->licenseId,['id'=>'licenseId','class'=>'form-control'])}}
                            </div>

                            <div class="col-12 col-sm-12 mb-1">
                                <label class="form-label" for="address">{{trans('common.address')}}</label>
                                {{Form::text('address',$user->address,['id'=>'address','class'=>'form-control'])}}
                            </div>
                            <div class="col-12 col-sm-3 mb-1">
                                <label for="active" class="form-label">{{trans('common.status')}}</label>
                                {{Form::select('active',[
                                                            '1' => trans('common.active'),
                                                            '0' => trans('common.inactive')
                                                            ],$user->active,['id'=>'active','class'=>'form-control selectpicker'])}}
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