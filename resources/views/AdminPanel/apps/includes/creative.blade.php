<!-- form -->
<div class="row">
    <div class="col-12 col-md-3">
        <div class="form-check mb-2">
            <label class="form-check-label" for="behance">Behance</label>
            <input type="checkbox" name="creative[]" value="behance" id="behance" class="form-check-input" {{ getAppValue('creative','behance') == 'behance'? 'checked' : '' }}>
        </div>
    </div>
    <div class="col-12 col-md-3">
        <div class="form-check mb-2">
            <label class="form-check-label" for="dribble">Dribble</label>
            <input type="checkbox" name="creative[]" value="dribble" id="dribble" class="form-check-input" {{ getAppValue('creative','dribble') == 'dribble'? 'checked' : '' }}>
        </div>
    </div>
    <div class="col-12 col-md-3">
        <div class="form-check mb-2">
            <label class="form-check-label" for="pintrest">Pintrest</label>
            <input type="checkbox" name="creative[]" value="pintrest" id="pintrest" class="form-check-input" {{ getAppValue('creative','pintrest') == 'pintrest'? 'checked' : '' }}>
        </div>
    </div>

</div>
