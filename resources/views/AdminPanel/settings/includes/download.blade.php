<!-- form -->
<div class="row">
    <div class="divider">
        <div class="divider-text">التنزيلات</div>
    </div>
    <div class="col-12 col-md-6">
        <label class="form-label" for="downloadTitle_ar">العنوان بالعربية</label>
        {{Form::text('downloadTitle_ar',getSettingValue('downloadTitle_ar'),['id'=>'downloadTitle_ar','class'=>'form-control'])}}
    </div>
    <div class="col-12 col-md-6">
        <label class="form-label" for="downloadTitle_en">العنوان بالإنجليزية</label>
        {{Form::text('downloadTitle_en',getSettingValue('downloadTitle_en'),['id'=>'downloadTitle_en','class'=>'form-control'])}}
    </div>
    <div class="col-12 col-md-12">
        <label class="form-label" for="downloadDesc_ar">الوصف بالعربية</label>
        {{Form::textarea('downloadDesc_ar',getSettingValue('downloadDesc_ar'),['rows'=>'3','id'=>'downloadDesc_ar','class'=>'form-control'])}}
    </div>
    <div class="col-12 col-md-12">
        <label class="form-label" for="downloadDesc_en">الوصف بالإنجليزية</label>
        {{Form::textarea('downloadDesc_en',getSettingValue('downloadDesc_en'),['rows'=>'3','id'=>'downloadDesc_en','class'=>'form-control'])}}
    </div>
    <div class="col-12 col-md-6">
        <label class="form-label" for="googlePlayLink">Google App link</label>
        {{Form::text('googlePlayLink',getSettingValue('googlePlayLink'),['id'=>'googlePlayLink','class'=>'form-control'])}}
    </div>
    <div class="col-12 col-md-6">
        <label class="form-label" for="appStoreLink">App Store Link</label>
        {{Form::text('appStoreLink',getSettingValue('appStoreLink'),['id'=>'appStoreLink','class'=>'form-control'])}}
    </div>
    <div class="col-12 col-md-12">
        <label class="form-label" for="downloadImage">الصورة</label>
        {{Form::file('downloadImage',['id'=>'downloadImage','class'=>'form-control'])}}
    </div>


</div>
<!--/ form -->
