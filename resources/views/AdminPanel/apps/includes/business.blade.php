<!-- form -->
<div class="row">
    <div class="col-12 col-md-3">
        <div class="form-check mb-2">
            <label class="form-check-label" for="microsoftTeams">Microsoft Teams</label>
            <input type="checkbox" name="business[]" value="microsoftTeams" id="microsoftTeams" class="form-check-input" {{ getAppValue('business','microsoftTeams') == 'microsoftTeams'? 'checked' : '' }}>
        </div>
    </div>
    <div class="col-12 col-md-3">
        <div class="form-check mb-2">
            <label class="form-check-label" for="slack">Slack</label>
            <input type="checkbox" name="business[]" value="slack" id="slack" class="form-check-input" {{ getAppValue('business','slack') == 'slack'? 'checked' : '' }}>
        </div>
    </div>
    <div class="col-12 col-md-3">
        <div class="form-check mb-2">
            <label class="form-check-label" for="waBusiness">wa business</label>
            <input type="checkbox" name="business[]" value="waBusiness" id="waBusiness" class="form-check-input" {{ getAppValue('business','waBusiness') == 'waBusiness'? 'checked' : '' }}>
        </div>
    </div>
    <div class="col-12 col-md-3">
        <div class="form-check mb-2">
            <label class="form-check-label" for="notion">Notion</label>
            <input type="checkbox" name="business[]" value="notion" id="notion" class="form-check-input" {{ getAppValue('business','notion') == 'notion'? 'checked' : '' }}>
        </div>
    </div>
    <div class="col-12 col-md-3">
        <div class="form-check mb-2">
            <label class="form-check-label" for="googleMeet">Google meet</label>
            <input type="checkbox" name="business[]" value="googleMeet" id="googleMeet" class="form-check-input" {{ getAppValue('business','googleMeet') == 'googleMeet'? 'checked' : '' }}>
        </div>
    </div>
    <div class="col-12 col-md-3">
        <div class="form-check mb-2">
            <label class="form-check-label" for="appStore">App Store</label>
            <input type="checkbox" name="business[]" value="appStore" id="appStore" class="form-check-input" {{ getAppValue('business','appStore') == 'appStore'? 'checked' : '' }}>
        </div>
    </div>
    <div class="col-12 col-md-3">
        <div class="form-check mb-2">
            <label class="form-check-label" for="googlePlay">Google play</label>
            <input type="checkbox" name="business[]" value="googlePlay" id="googlePlay" class="form-check-input" {{ getAppValue('business','googlePlay') == 'googlePlay'? 'checked' : '' }}>
        </div>
    </div>

</div>
