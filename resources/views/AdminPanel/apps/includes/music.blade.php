<!-- form -->
<div class="row">
    <div class="col-12 col-md-3">
        <div class="form-check mb-2">
            <label class="form-check-label" for="spotify">سبوتيفي</label>
            <input type="checkbox" name="music[]" value="spotify" id="spotify" class="form-check-input" {{ getAppValue('music','spotify') == 'spotify'? 'checked' : '' }}>
        </div>
    </div>
    <div class="col-12 col-md-3">
        <div class="form-check mb-2">
            <label class="form-check-label" for="anghami">أنغامي</label>
            <input type="checkbox" name="music[]" value="anghami" id="anghami" class="form-check-input" {{ getAppValue('music','anghami') == 'anghami'? 'checked' : '' }}>
        </div>
    </div>
    <div class="col-12 col-md-3">
        <div class="form-check mb-2">
            <label class="form-check-label" for="youtube">يوتيوب</label>
            <input type="checkbox" name="music[]" value="youtube" id="youtube" class="form-check-input" {{ getAppValue('music','youtube') == 'youtube'? 'checked' : '' }}>
        </div>
    </div>

</div>
