<!-- form -->
<div class="row">
    <div class="col-12 col-md-6">
        <label class="form-label" for="phone">{{trans('common.phone')}}</label>
        {{Form::text('phone',getSettingValue('phone'),['id'=>'phone','class'=>'form-control'])}}
    </div>

    <div class="col-12 col-md-6">
        <label class="form-label" for="email">{{trans('common.email')}}</label>
        {{Form::text('email',getSettingValue('email'),['id'=>'email','class'=>'form-control'])}}
    </div>

</div>
<!--/ form -->
