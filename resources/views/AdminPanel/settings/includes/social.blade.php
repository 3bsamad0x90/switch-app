<!-- form -->
<div class="row">
    <div class="col-12 col-md-6">
        <label class="form-label" for="facebook">فيس بوك</label>
        {{Form::text('facebook',getSettingValue('facebook'),['id'=>'facebook','class'=>'form-control'])}}
    </div>
    <div class="col-12 col-md-6">
        <label class="form-label" for="twitter">تويتر</label>
        {{Form::text('twitter',getSettingValue('twitter'),['id'=>'twitter','class'=>'form-control'])}}
    </div>
    <div class="col-12 col-md-6">
        <label class="form-label" for="linkedin">لينكدأن</label>
        {{Form::text('linkedin',getSettingValue('linkedin'),['id'=>'linkedin','class'=>'form-control'])}}
    </div>
    <div class="col-12 col-md-6">
        <label class="form-label" for="gmail">جوجل</label>
        {{Form::text('gmail',getSettingValue('gmail'),['id'=>'gmail','class'=>'form-control'])}}
    </div>
</div>
