<!-- form -->
<div class="row">
    <div class="col-12 col-md-4">
        <div class="form-check mb-2 d-flex align-items-center justify-content-between">
            <div>
                <label class="form-check-label" for="facebook">فيس بوك</label>
                <input type="checkbox" name="social[]" value="facebook" id="facebook" class="form-check-input" {{ getAppValue('social','facebook') == 'facebook'? 'checked' : '' }}>
            </div>
            <div class="text-center d-flex align-items-center">
                {!! getAppsIconValue('facebookIcon') !!}
                <div class="file-loading col-8">
                    <input class="files" name="facebookIcon" type="file">
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-4">
        <div class="form-check mb-2 d-flex align-items-center justify-content-between">
            <div>
                <label class="form-check-label" for="whatsapp">واتساب</label>
                <input type="checkbox" name="social[]" value="whatsapp" id="whatsapp" class="form-check-input" {{ (getAppValue('social','whatsapp') == 'whatsapp') ? 'checked' : '' }}>
            </div>
            <div class="text-center d-flex align-items-center">
                {!! getAppsIconValue('whatsappIcon') !!}
                <div class="file-loading col-8">
                    <input class="files" name="whatsappIcon" type="file">
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-4">
        <div class="form-check mb-2  d-flex align-items-center justify-content-between">
            <div>
                <label class="form-check-label" for="linkedin">لينكدأن</label>
                <input type="checkbox" name="social[]" value="linkedin" id="linkedin" class="form-check-input" {{ (getAppValue('social','linkedin') == 'linkedin') ? 'checked' : '' }}>
            </div>
            <div class="text-center">
                {!! getAppsIconValue('logo') !!}
                <div class="file-loading">
                    <input class="files" name="logo" type="file">
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-4">
        <div class="form-check mb-2">
            <label class="form-check-label" for="instagram">إنستجرام</label>
            <input type="checkbox" name="social[]" value="instagram" id="instagram" class="form-check-input" {{ (getAppValue('social','instagram') == 'instagram') ? 'checked' : '' }}>
        </div>
    </div>
    <div class="col-12 col-md-3">
        <div class="form-check mb-2">
            <label class="form-check-label" for="youtube">يوتيوب</label>
            <input type="checkbox" name="social[]" value="youtube" id="youtube" class="form-check-input" {{ (getAppValue('social','youtube') == 'youtube') ? 'checked' : '' }}>
        </div>
    </div>
    <div class="col-12 col-md-4">
        <div class="form-check mb-2">
            <label class="form-check-label" for="twitter">تويتر</label>
            <input type="checkbox" name="social[]" value="twitter" id="twitter" class="form-check-input" {{ (getAppValue('social','twitter') == 'twitter') ? 'checked' : '' }}>
        </div>
    </div>
    <div class="col-12 col-md-4">
        <div class="form-check mb-2">
            <label class="form-check-label" for="tiktok">تيك توك</label>
            <input type="checkbox" name="social[]" value="tiktok" id="tiktok" class="form-check-input" {{ (getAppValue('social','tiktok') == 'tiktok') ? 'checked' : '' }}>
        </div>
    </div>
    <div class="col-12 col-md-4">
        <div class="form-check mb-2">
            <label class="form-check-label" for="snapchat">إسناب شات</label>
            <input type="checkbox" name="social[]" value="snapchat" id="snapchat" class="form-check-input" {{ (getAppValue('social','snapchat') == 'snapchat') ? 'checked' : '' }}>
        </div>
    </div>
    <div class="col-12 col-md-4">
        <div class="form-check mb-2">
            <label class="form-check-label" for="telegram">تليجرام</label>
            <input type="checkbox" name="social[]" value="telegram" id="telegram" class="form-check-input" {{ (getAppValue('social','telegram') == 'telegram') ? 'checked' : '' }}>
        </div>
    </div>
    <div class="col-12 col-md-4">
        <div class="form-check mb-2">
            <label class="form-check-label" for="wechat">وي شات</label>
            <input type="checkbox" name="social[]" value="wechat" id="wechat" class="form-check-input" {{ (getAppValue('social','wechat') == 'wechat') ? 'checked' : '' }}>
        </div>
    </div>

</div>
