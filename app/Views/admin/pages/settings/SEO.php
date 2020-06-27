<div class="card dool-card">
    <div class="card-header">
        <h6>google Analytics</h6>
        <small>get found easily on google using your tracking code</small>
    </div>
    <div class="card-body form-row">
        <div class="form-group col-md-8">
            <label for="google_tracking_code">Enter google tracking Code</label>
            <input type="text" name='google_tracking_code' value="<?= get_config('google_tracking_code')?>"
                class="form-control" id="google_tracking_code" placeholder="enter your code">
        </div>
    </div>
</div>

<div class="card dool-card">
    <div class="card-header">
        <h6>Site Social media Handles</h6>
        <small>drive traffic to your site from social media</small>
    </div>
    <div class="card-body form-row">
        <div class="form-group col-md-6">
            <label for="facebook_link">Facebook link</label>
            <input type="text" name='facebook_link' value="<?= get_config('facebook_link')?>" class="form-control"
                id="facebook_link" placeholder="enter facebook link">
        </div>
        <div class="form-group col-md-6">
            <label for="instagram_link">Instagram Link</label>
            <input type="text" name='instagram_link' value="<?= get_config('instagram_link')?>" class="form-control"
                id="instagram_link" placeholder="enter instagram link">
        </div>
        <div class="form-group col-md-6">
            <label for="twitter_link">Twitter Link</label>
            <input type="text" name='twitter_link' value="<?= get_config('twitter_link')?>" class="form-control"
                id="twitter_link" placeholder="enter twitter Link">
        </div>
        <div class="form-group col-md-6">
            <label for="linkedin_link">Linkedin</label>
            <input type="text" name='linkedin_link' value="<?= get_config('linkedin_link')?>" class="form-control"
                id="linkedin_link" placeholder="enter linkedin page link">
        </div>
    </div>
</div>
