<!-- form -->
<div class="row">
    <div class="divider">
        <div class="divider-text">الصفحةالرئيسية</div>
    </div>
    <div class="col-12 col-md-6">
        <label class="form-label" for="mainPageTitle_ar">العنوان بالعربية</label>
        {{Form::text('mainPageTitle_ar',getSettingValue('mainPageTitle_ar'),['id'=>'mainPageTitle_ar','class'=>'form-control'])}}
    </div>
    <div class="col-12 col-md-6">
        <label class="form-label" for="mainPageTitle_en">العنوان بالإنجليزية</label>
        {{Form::text('mainPageTitle_en',getSettingValue('mainPageTitle_en'),['id'=>'mainPageTitle_en','class'=>'form-control'])}}
    </div>
    <div class="col-12 col-md-12">
        <label class="form-label" for="mainPageDesc_ar">الوصف بالعربية</label>
        {{Form::textarea('mainPageDesc_ar',getSettingValue('mainPageDesc_ar'),['rows'=>'3','id'=>'mainPageDesc_ar','class'=>'form-control'])}}
    </div>
    <div class="col-12 col-md-12">
        <label class="form-label" for="mainPageDesc_en">الوصف بالإنجليزية</label>
        {{Form::textarea('mainPageDesc_en',getSettingValue('mainPageDesc_en'),['rows'=>'3','id'=>'mainPageDesc_en','class'=>'form-control'])}}
    </div>
    <div class="col-12 col-md-12">
        <label class="form-label" for="mainPageImage">الصورة</label>
        {{Form::file('mainPageImage',['id'=>'mainPageImage','class'=>'form-control'])}}
    </div>


</div>
<!--/ form -->
