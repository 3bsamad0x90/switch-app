<!-- form -->
<div class="row">
    <div class="divider">
        <div class="divider-text">لماذا نحن</div>
    </div>
    <div class="col-12 col-md-6">
        <label class="form-label" for="whyTitle_ar">العنوان بالعربية</label>
        {{Form::text('whyTitle_ar',getSettingValue('whyTitle_ar'),['id'=>'whyTitle_ar','class'=>'form-control'])}}
    </div>
    <div class="col-12 col-md-6">
        <label class="form-label" for="whyTitle_en">العنوان بالإنجليزية</label>
        {{Form::text('whyTitle_en',getSettingValue('whyTitle_en'),['id'=>'whyTitle_en','class'=>'form-control'])}}
    </div>
    <div class="col-12 col-md-12">
        <label class="form-label" for="whyDesc_ar">الوصف بالعربية</label>
        {{Form::textarea('whyDesc_ar',getSettingValue('whyDesc_ar'),['rows'=>'3','id'=>'whyDesc_ar','class'=>'form-control'])}}
    </div>
    <div class="col-12 col-md-12">
        <label class="form-label" for="whyDesc_en">الوصف بالإنجليزية</label>
        {{Form::textarea('whyDesc_en',getSettingValue('whyDesc_en'),['rows'=>'3','id'=>'whyDesc_en','class'=>'form-control'])}}
    </div>
    <div class="divider">
        <div class="divider-text">التفاصيل</div>
    </div>
    @for($i=1; $i<=4; $i++)
    <div class="row pt-2 pb-4">
        <h3>العنصر #{{$i}}</h3>
        <div class="col-md-6 text-center">
            <label class="d-flex form-label text-black justify-content-start" for="why{{$i}}icon"> الأيقونة #{{$i}}</label>
            {!! getSettingImageValue('why'.$i.'icon') !!}
            <div class="file-loading">
                <input class="files" name="why{{$i}}icon" type="file" id="why{{$i}}icon">
            </div>
        </div>
        <div class="col-md-12"></div>
        <div class="col-12 col-md-6">
            <label class="form-label" for="why{{$i}}title_ar">العنوان بالعربية</label>
            {{Form::text('why'.$i.'title_ar',getSettingValue('why'.$i.'title_ar'),['id'=>'why'.$i.'title_ar','class'=>'form-control'])}}
        </div>
        <div class="col-12 col-md-6">
            <label class="form-label" for="why{{$i}}title_en">العنوان بالإنجليزية</label>
            {{Form::text('why'.$i.'title_en',getSettingValue('why'.$i.'title_en'),['id'=>'why'.$i.'title_en','class'=>'form-control'])}}
        </div>

        <div class="col-md-12"></div>
        <div class="col-12 col-md-6">
            <label class="form-label" for="why{{$i}}des_ar">الوصف بالعربية</label>
            {{Form::textarea('why'.$i.'des_ar',getSettingValue('why'.$i.'des_ar'),['id'=>'why'.$i.'des_ar','class'=>'form-control','rows'=>'3'])}}
        </div>
        <div class="col-12 col-md-6">
            <label class="form-label" for="why{{$i}}des_en">الوصف بالإنجليزية</label>
            {{Form::textarea('why'.$i.'des_en',getSettingValue('why'.$i.'des_en'),['id'=>'why'.$i.'des_en','class'=>'form-control','rows'=>'3'])}}
        </div>
    </div>
    @endfor


</div>
<!--/ form -->
