<div class="card dool-card">
    <div class="card-header">
        <h6>Twilio SMS service</h6>
        <small>Twilio service enables your send Sms to phones</small>
    </div>

    <div class="card-body">
        <div class="form-group ">
            <label for="twilio_accout_sid">Account Sid</label>
            <input name="twilio_accout_sid" value="<?= get_config('twilio_accout_sid')?>" type="text"
                class="form-control">
        </div>
        <div class="form-group">
            <label for="twilio_auth_token">Auth Token</label>
            <input name="twilio_auth_token" value="<?= get_config('twilio_auth_token')?>" type="text"
                class="form-control">
        </div>
        <div class="form-group">
            <label for="twilio_service_id">Service Id</label>
            <input name="twilio_service_id" value="<?= get_config('twilio_service_id')?>" type="text"
                class="form-control">
        </div>
    </div>
</div>

<div class="card dool-card">
    <div class="card-header">
        <h6>Other Intergrations</h6>
        <small>other integrations like google apis and Fixer api</small>
    </div>
    <div class="card-body">
        <div class="form-group">
            <label for="google_api_keys">Google Analytics API Keys</label>
            <input name="google_api_keys" type="text" class="form-control" value="<?= get_config('google_api_keys')?>">
        </div>
        <div class="form-group">
            <label for="fixer_api_keys">Fixer Api Keys</label>
            <input name="fixer_api_keys" type="text" class="form-control" value="<?= get_config('fixer_api_keys')?>">
        </div>
    </div>
</div>
