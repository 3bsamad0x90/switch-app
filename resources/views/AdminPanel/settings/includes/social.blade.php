<!-- form -->
<div class="row">
    <div class="col-12 col-md-6">
        <label class="form-label" for="facebook">فيس بوك</label>
        {{Form::text('facebook',getSettingValue('facebook'),['id'=>'facebook','class'=>'form-control'])}}
    </div>
    <div class="col-12 col-md-6">
        <label class="form-label" for="instagram">انستجرام</label>
        {{Form::text('instagram',getSettingValue('instagram'),['id'=>'instagram','class'=>'form-control'])}}
    </div>
    <div class="col-12 col-md-6">
        <label class="form-label" for="linkedin">لينكدأن</label>
        {{Form::text('linkedin',getSettingValue('linkedin'),['id'=>'linkedin','class'=>'form-control'])}}
    </div>
    <div class="col-12 col-md-6">
        <label class="form-label" for="tiktok">تيك توك</label>
        {{Form::text('tiktok',getSettingValue('tiktok'),['id'=>'tiktok','class'=>'form-control'])}}
    </div>
</div>
