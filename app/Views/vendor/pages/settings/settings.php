<div class="row">
  <div class="col-md-2">
    <div class="bg-white p-3 shadow-xs rounded">
      <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <a class="nav-link shadow-xs active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">System</a>
        <a class="nav-link" id="v-pills-themes-tab" data-toggle="pill" href="#v-pills-themes" role="tab" aria-controls="v-pills-themes" aria-selected="false">Themes</a>
        <a class="nav-link" id="v-pills-regional-tab" data-toggle="pill" href="#v-pills-regional" role="tab" aria-controls="v-pills-Users" aria-selected="false">Regional</a>
        <a class="nav-link" id="v-pills-notifications-tab" data-toggle="pill" href="#v-pills-notifications" role="tab" aria-controls="v-pills-notifications" aria-selected="false">Notifications</a>
        <a class="nav-link" id="v-pills-emails-tab" data-toggle="pill" href="#v-pills-emails" role="tab" aria-controls="v-pills-emails" aria-selected="false">Emails</a>
        <a class="nav-link" id="v-pills-SEO-tab" data-toggle="pill" href="#v-pills-SEO" role="tab" aria-controls="v-pill-SEO" aria-selected="false">SEO</a>
        <a class="nav-link" id="v-pills-Intergrations-tab" data-toggle="pill" href="#v-pills-Intergrations" role="tab" aria-controls="v-pills-Intergrations" aria-selected="false">Intergrations</a>
        <a class="nav-link" id="v-pills-Products-tab" data-toggle="pill" href="#v-pills-Products" role="tab" aria-controls="v-pills-Products" aria-selected="false">Products</a>
        <a class="nav-link" id="v-pills-Social-tab" data-toggle="pill" href="#v-pills-Social" role="tab" aria-controls="v-pills-Social" aria-selected="false">Social login</a>
        <a class="nav-link" id="v-pills-Slider-tab" data-toggle="pill" href="#v-pills-Slider" role="tab" aria-controls="v-pills-Slider" aria-selected="false">Slider</a>
      </div>
    </div>
  </div>
  <form class='col-md-10 bg-white rounded' id="form" action="<?= base_url('admin/settings') ?>" enctype="multipart/form-data" method="post" accept-charset="utf-8" novalidate="">
    <div class="tab-content" id="v-pills-tabContent">
      <!-- 
        system settings
       -->
      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
          <div class="modal-header border-0">
            <h6 class="modal-title position-absolute bg-primary text-white" id="mymodalLabel">System Settings</h6>
          </div>
          <div class="form-row modal-body p-4">
            <?= custom_inputs([
                'name'        => 'site_name',
                'value'       => get_config('site_name'),
                'label'       => 'site name',
                'type'        => 'text',
                'required'    => true,
                'class'       => 'form-control custom-input',
            ], ['group-class' => 'mt-4 col-md-12', 'icon-name' => 'person-outline']) ?>
            
            <div class="col-md-12 pt-3">
              <div class="form-group px-3">
                <textarea class="form-control  rounded" name="site_description" rows="5"></textarea>
              </div>
            </div>
            <?= custom_inputs([
                'name'        => 'business_address',
                'value'       => get_config('business_address'),
                'label'       => 'business address',
                'type'        => 'text',
                'required'    => true,
                'class'       => 'form-control custom-input',
            ], ['group-class' => 'mt-4 col-md-12', 'icon-name' => 'person-outline']) ?>
            <?= custom_inputs([
                'name'        => 'business_phone',
                'value'       => get_config('business_phone'),
                'label'       => 'Business phone',
                'type'        => 'text',
                'required'    => true,
                'class'       => 'form-control custom-input',
            ], ['group-class' => 'mt-4 col-md-6', 'icon-name' => 'person-outline']) ?>
            <?= custom_inputs([
                'name'        => 'info_email',
                'value'       => get_config('info_email'),
                'label'       => 'info Email',
                'type'        => 'text',
                'required'    => true,
                'class'       => 'form-control custom-input',
            ], ['group-class' => 'mt-4 col-md-6', 'icon-name' => 'person-outline']) ?>
            <?= custom_inputs([
                'name'        => 'business_telephone',
                'value'       => get_config('business_telephone'),
                'label'       => 'Business telephone',
                'type'        => 'text',
                'required'    => true,
                'class'       => 'form-control custom-input',
            ], ['group-class' => 'mt-4 col-md-6', 'icon-name' => 'person-outline']) ?>
            <?= custom_inputs([
                'name'        => 'company_name',
                'value'       => get_config('company_name'),
                'label'       => 'Company name',
                'type'        => 'text',
                'required'    => true,
                'class'       => 'form-control custom-input',
            ], ['group-class' => 'mt-4 col-md-12', 'icon-name' => 'person-outline']) ?>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary btn-sm">submit</button>
          </div>
      </div>
      <!-- theme settings -->
      <div class="tab-pane fade" id="v-pills-themes" role="tabpanel" aria-labelledby="v-pills-themes-tab">...</div>
      <!-- notifications settings -->
      <div class="tab-pane fade" id="v-pills-notifications" role="tabpanel" aria-labelledby="v-pills-notifications-tab">...</div>

      <!-- emails settings -->
      <div class="tab-pane fade" id="v-pills-emails" role="tabpanel" aria-labelledby="v-pills-emails-tab">
      <div class="modal-header border-0">
            <h6 class="modal-title position-absolute bg-primary text-white" id="mymodalLabel">System Settings</h6>
          </div>
          <div class="form-row modal-body p-4">
            <?= custom_inputs([
                'name'        => 'email_host_name',
                'value'       => get_config('email_host_name'),
                'label'       => 'Host name',
                'type'        => 'text',
                'required'    => true,
                'class'       => 'form-control custom-input',
            ], ['group-class' => 'mt-4 col-md-6', 'icon-name' => 'person-outline']) ?>
            
            <?= custom_inputs([
                'name'        => 'email_port',
                'value'       => get_config('email_port'),
                'label'       => 'Port',
                'type'        => 'text',
                'required'    => true,
                'class'       => 'form-control custom-input',
            ], ['group-class' => 'mt-4 col-md-6', 'icon-name' => 'person-outline']) ?>
            <?= custom_inputs([
                'name'        => 'business_phone',
                'value'       => get_config('business_phone'),
                'label'       => 'Business phone',
                'type'        => 'text',
                'required'    => true,
                'class'       => 'form-control custom-input',
            ], ['group-class' => 'mt-4 col-md-6', 'icon-name' => 'person-outline']) ?>
            <?= custom_inputs([
                'name'        => 'sender_email',
                'value'       => get_config('sender_email'),
                'label'       => 'sender Email',
                'type'        => 'email',
                'required'    => true,
                'class'       => 'form-control custom-input',
            ], ['group-class' => 'mt-4 col-md-6', 'icon-name' => 'person-outline']) ?>
            <?= custom_inputs([
                'name'        => 'sender_dislay_name',
                'value'       => get_config('sender_dislay_name'),
                'label'       => 'sender dislay name',
                'type'        => 'text',
                'required'    => true,
                'class'       => 'form-control custom-input',
            ], ['group-class' => 'mt-4 col-md-6', 'icon-name' => 'person-outline']) ?>
            <?= custom_inputs([
                'name'        => 'auth_email',
                'value'       => get_config('auth_email'),
                'label'       => 'Authentication Email',
                'type'        => 'text',
                'required'    => true,
                'class'       => 'form-control custom-input',
            ], ['group-class' => 'mt-4 col-md-6', 'icon-name' => 'person-outline']) ?>
            <?= custom_inputs([
                'name'        => 'auth_password',
                'value'       => get_config('auth_password'),
                'label'       => 'Authentication Password',
                'type'        => 'text',
                'required'    => true,
                'class'       => 'form-control custom-input',
            ], ['group-class' => 'mt-4 col-md-6', 'icon-name' => 'person-outline']) ?>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary btn-sm">submit</button>
          </div>
      </div>
      <!-- 
        seo settings
       -->
      <div class="tab-pane fade" id="v-pills-SEO" role="tabpanel" aria-labelledby="v-pills-SEO-tab">
        <div class="row">
          <div class="col-md-6">
            <div class="modal-header border-0">
              <h6 class="modal-title position-absolute bg-primary text-white" id="mymodalLabel">Website SEO</h6>
            </div>
            <div class="form-row modal-body p-4">
              <?= custom_inputs([
                'name'        => 'site_seo_title',
                'value'       => get_config('site_seo_title'),
                'label'       => 'Site SEO Title',
                'type'        => 'text',
                'required'    => true,
                'class'       => 'form-control custom-input',
            ], ['group-class' => 'mt-4 col-md-12', 'icon-name' => 'person-outline']) ?>
              <?= custom_inputs([
                'name'        => 'site_keywords',
                'value'       => get_config('site_keywords'),
                'label'       => 'Site Keywords',
                'type'        => 'text',
                'required'    => true,
                'class'       => 'form-control custom-input',
            ], ['group-class' => 'mt-4 col-md-12', 'icon-name' => 'person-outline']) ?>
              <div class="col-md-12">
                <div class="cv-form-group input-group mb-3 mt-2 px-2">
                  <textarea class="form-control" rows="4">SEO meta description</textarea>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="modal-header border-0">
              <h6 class="modal-title position-absolute bg-primary text-white" id="mymodalLabel">Posts General SEO</h6>
            </div>
            <div class="form-row modal-body p-4">
              <?= custom_inputs([
                'name'        => 'posts_seo_title',
                'value'       => get_config('posts_seo_title'),
                'label'       => 'Posts General Keywords',
                'type'        => 'text',
                'required'    => true,
                'class'       => 'form-control custom-input',
            ], ['group-class' => 'mt-4 col-md-12', 'icon-name' => 'person-outline']) ?>
              <?= custom_inputs([
                'name'        => 'blogs_keywords',
                'value'       => get_config('blogs_keywords'),
                'label'       => 'Blog Keywords',
                'type'        => 'text',
                'required'    => true,
                'class'       => 'form-control custom-input',
            ], ['group-class' => 'mt-4 col-md-12', 'icon-name' => 'person-outline']) ?>
              <div class="col-md-12">
                <div class="cv-form-group input-group mb-3 mt-2 px-2">
                  <textarea class="form-control" rows="4">SEO meta description</textarea>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="modal-header border-0">
              <h6 class="modal-title position-absolute bg-primary text-white" id="mymodalLabel">Google analytics Tracking ID</h6>
            </div>
            <div class="form-row modal-body p-4">
            <?= custom_inputs([
                'name'        => 'google_analytics_code',
                'value'       => get_config('google_analytics_code'),
                'label'       => 'Google analytics code',
                'type'        => 'text',
                'required'    => true,
                'class'       => 'form-control custom-input',
            ], ['group-class' => 'mt-4 col-md-12', 'icon-name' => 'person-outline']) ?>
            </div>
          </div>
          <div class="col-md-12">
            <div class="modal-header border-0">
              <h6 class="modal-title position-absolute bg-primary text-white" id="mymodalLabel">Site Social Media</h6>
            </div>
            <div class="form-row modal-body p-4">
              <?= custom_inputs([
                'name'        => 'facebook_link',
                'value'       => get_config('facebook_link'),
                'label'       => 'facebook_link',
                'type'        => 'text',
                'required'    => true,
                'class'       => 'form-control custom-input',
            ], ['group-class' => 'mt-4 col-md-6', 'icon-name' => 'person-outline']) ?>
              <?= custom_inputs([
                'name'        => 'instagram_link',
                'value'       => get_config('instagram_link'),
                'label'       => 'instagram link',
                'type'        => 'text',
                'required'    => true,
                'class'       => 'form-control custom-input',
            ], ['group-class' => 'mt-4 col-md-6', 'icon-name' => 'person-outline']) ?>
            <?= custom_inputs([
                'name'        => 'twitter_link',
                'value'       => get_config('twitter_link'),
                'label'       => 'twitter link',
                'type'        => 'text',
                'required'    => true,
                'class'       => 'form-control custom-input',
            ], ['group-class' => 'mt-4 col-md-6', 'icon-name' => 'person-outline']) ?>
            <?= custom_inputs([
                'name'        => 'linkedin_link',
                'value'       => get_config('linkedin_link'),
                'label'       => 'linkedin link',
                'type'        => 'text',
                'required'    => true,
                'class'       => 'form-control custom-input',
            ], ['group-class' => 'mt-4 col-md-6', 'icon-name' => 'person-outline']) ?>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary btn-sm">submit</button>
        </div>
      </div>
      <!-- intergrations settings -->
      <div class="tab-pane fade" id="v-pills-Intergrations" role="tabpanel" aria-labelledby="v-pills-Intergrations-tab">
        <div class="row">
          <div class="col-md-6">
            <div class="modal-header border-0">
              <h6 class="modal-title position-absolute bg-primary text-white" id="mymodalLabel">Twilio SMS service</h6>
            </div>
            <div class="form-row modal-body p-4">
              <div class="col-md-12">
                <div class="cv-form-group input-group mb-3 mt-4 px-2">
                  <div class="input-group-prepend"><span class="input-group-text bg-white rounded-0 cv-chev left">
                      <ion-icon name="person-outline" role="img" class="md hydrated" aria-label="person outline"></ion-icon>
                    </span></div><input name="name" type="text" class="form-control custom-input" autocomplete="new-password" value=""><span class="bar"></span><label class="cv-label left text-capitalize">Account Sid</label>
                </div>
              </div>
              <div class="col-md-12">
                <div class="cv-form-group input-group mb-3 mt-4 px-2">
                  <div class="input-group-prepend"><span class="input-group-text bg-white rounded-0 cv-chev left">
                      <ion-icon name="person-outline" role="img" class="md hydrated" aria-label="person outline"></ion-icon>
                    </span></div><input name="name" type="text" class="form-control custom-input" autocomplete="new-password" value=""><span class="bar"></span><label class="cv-label left text-capitalize">Auth Token</label>
                </div>
              </div>
              <div class="col-md-12">
                <div class="cv-form-group input-group mb-3 mt-4 px-2">
                  <div class="input-group-prepend"><span class="input-group-text bg-white rounded-0 cv-chev left">
                      <ion-icon name="person-outline" role="img" class="md hydrated" aria-label="person outline"></ion-icon>
                    </span></div><input name="name" type="text" class="form-control custom-input" autocomplete="new-password" value=""><span class="bar"></span><label class="cv-label left text-capitalize">Service Id</label>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="modal-header border-0">
              <h6 class="modal-title position-absolute bg-primary text-white" id="mymodalLabel">Other Intergrations</h6>
            </div>
            <div class="form-row modal-body p-4">
              <div class="col-md-12">
                <div class="cv-form-group input-group mb-3 mt-4 px-2">
                  <div class="input-group-prepend"><span class="input-group-text bg-white rounded-0 cv-chev left">
                      <ion-icon name="person-outline" role="img" class="md hydrated" aria-label="person outline"></ion-icon>
                    </span></div><input name="name" type="text" class="form-control custom-input" autocomplete="new-password" value=""><span class="bar"></span><label class="cv-label left text-capitalize">
                    Google Analytics API Integration
                  </label>
                </div>
              </div>
              <div class="col-md-12">
                <div class="cv-form-group input-group mb-3 mt-4 px-2">
                  <div class="input-group-prepend"><span class="input-group-text bg-white rounded-0 cv-chev left">
                      <ion-icon name="person-outline" role="img" class="md hydrated" aria-label="person outline"></ion-icon>
                    </span></div><input name="name" type="text" class="form-control custom-input" autocomplete="new-password" value=""><span class="bar"></span><label class="cv-label left text-capitalize">
                    Fixer Api Keys
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- products settings -->
      <div class="tab-pane fade" id="v-pills-Products" role="tabpanel" aria-labelledby="v-pills-Products-tab">...</div>
      <!-- 
        social settings
       -->
      <div class="tab-pane fade" id="v-pills-Social" role="tabpanel" aria-labelledby="v-pills-Social-tab">
        <form id="form" action="<?= base_url('admin/settings') ?>" enctype="multipart/form-data" method="post" accept-charset="utf-8" novalidate="">
          <div class="row">
            <div class="col-md-6">
              <div class="modal-header border-0">
                <h6 class="modal-title position-absolute bg-primary text-white" id="mymodalLabel">Facebook Login details</h6>
              </div>
              <div class="form-row modal-body p-4">
                <div class="col-md-12">
                  <div class="input-group mb-3 mt-4 px-3 d-flex align-items-center">
                    <span class="mt-2">Enable facebook login :</span>
                    <span class="button b2 mt-0 ml-3 mt-2" id="button-10"><input id='' checked type="checkbox" name="fabook_login" class="checkbox">
                      <div class="knobs"><span>NO</span></div>
                      <div class="layer"></div>
                    </span>
                  </div>
                </div>
                <?= custom_inputs([
                'name'        => 'facebook_app_id',
                'value'       => get_config('facebook_app_id'),
                'label'       => 'Facebook App Id',
                'type'        => 'text',
                'required'    => true,
                'class'       => 'form-control custom-input',
            ], ['group-class' => 'mt-4 col-md-12', 'icon-name' => 'person-outline']) ?>
                <?= custom_inputs([
                'name'        => 'facebook_app_secrete',
                'value'       => get_config('facebook_app_secrete'),
                'label'       => 'Facebook App Secrete',
                'type'        => 'password',
                'required'    => true,
                'class'       => 'form-control custom-input',
            ], ['group-class' => 'mt-4 col-md-12', 'icon-name' => 'person-outline']) ?>
                <?= custom_inputs([
                'name'        => 'facebook_graph_version',
                'value'       => get_config('facebook_graph_version'),
                'label'       => 'Facebook Graph Version',
                'type'        => 'text',
                'required'    => true,
                'class'       => 'form-control custom-input',
            ], ['group-class' => 'mt-4 col-md-12', 'icon-name' => 'person-outline']) ?>
              </div>
            </div>
            <div class="col-md-6">
              <div class="modal-header border-0">
                <h6 class="modal-title position-absolute bg-primary text-white" id="mymodalLabel">Google Login Details</h6>
              </div>
              <div class="form-row modal-body p-4">
                <div class="col-md-12">
                  <div class="input-group mb-3 mt-4 px-3 d-flex align-items-center">
                    <span class="mt-2">Enable Google login :</span>
                    <span class="button b2 mt-0 ml-3 mt-2" id="button-10"><input id='status' checked type="checkbox" name="status" class="checkbox">
                      <div class="knobs"><span>NO</span></div>
                      <div class="layer"></div>
                    </span>
                  </div>
                </div>
                <?= custom_inputs([
                'name'        => 'google_app_name',
                'value'       => get_config('google_app_name'),
                'label'       => 'Application Name',
                'type'        => 'text',
                'required'    => true,
                'class'       => 'form-control custom-input',
            ], ['group-class' => 'mt-4 col-md-12', 'icon-name' => 'person-outline']) ?>
                <?= custom_inputs([
                'name'        => 'google_client_id',
                'value'       => get_config('google_client_id'),
                'label'       => 'Client Id',
                'type'        => 'text',
                'required'    => true,
                'class'       => 'form-control custom-input',
            ], ['group-class' => 'mt-4 col-md-12', 'icon-name' => 'person-outline']) ?>
            <?= custom_inputs([
                'name'        => 'google_client_secrete',
                'value'       => get_config('google_client_secrete'),
                'label'       => 'Client Secrete',
                'type'        => 'password',
                'required'    => true,
                'class'       => 'form-control custom-input',
            ], ['group-class' => 'mt-4 col-md-12', 'icon-name' => 'person-outline']) ?>
              <?= custom_inputs([
                'name'        => 'google_redirect_url',
                'value'       => get_config('google_redirect_url'),
                'label'       => 'Google redirect Uri',
                'type'        => 'text',
                'required'    => true,
                'class'       => 'form-control custom-input',
            ], ['group-class' => 'mt-4 col-md-12', 'icon-name' => 'person-outline']) ?>
            </div>
          </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary btn-sm">submit</button>
          </div>
        </form>
      </div>
      <!-- regional settings -->
      <div class="tab-pane fade" id="v-pills-regional" role="tabpanel" aria-labelledby="v-pills-regional-tab">
        <div class="card">
          <div class="card-header">
            <h4>Regional Settings</h4>
            <small></small>
          </div>
          <div class="card-body row">
          <?= custom_inputs([
                'name'        => 'regional_setings',
                'value'       => get_config('regional_setings'),
                'label'       => 'regional setings',
                'type'        => 'password',
                'required'    => true,
                'class'       => 'form-control custom-input',
            ], ['group-class' => 'mt-4 col-md-12', 'icon-name' => 'person-outline']) ?>
              <?= custom_inputs([
                'name'        => 'language',
                'value'       => get_config('language'),
                'label'       => 'Laguage',
                'type'        => 'text',
                'required'    => true,
                'class'       => 'form-control custom-input',
            ], ['group-class' => 'mt-4 col-md-12', 'icon-name' => 'person-outline']) ?>
            <?= custom_inputs([
                'name'        => 'currency',
                'value'       => get_config('currency'),
                'label'       => 'currency',
                'type'        => 'text',
                'required'    => true,
                'class'       => 'form-control custom-input',
            ], ['group-class' => 'mt-4 col-md-12', 'icon-name' => 'person-outline']) ?>
            <?= custom_inputs([
                'name'        => 'time_zone',
                'value'       => get_config('time_zone'),
                'label'       => 'time zone',
                'type'        => 'text',
                'required'    => true,
                'class'       => 'form-control custom-input',
            ], ['group-class' => 'mt-4 col-md-12', 'icon-name' => 'person-outline']) ?>
          </div>
        </div>
      </div>
      <!-- theme settings -->
      <div class="tab-pane fade" id="v-pills-Slider" role="tabpanel" aria-labelledby="v-pills-Slider-tab">

        <div class="modal-header border-0">
          <h6 class="modal-title position-absolute bg-primary text-white" id="mymodalLabel">Slider Settings</h6>
        </div>
        <div class="form-row modal-body p-4">
          <div class="col-md-4 mt-3">
            <div class="cv-form-group form-group mt-4 px-3">
              <select id='category' name='category_id' class="form-control js-select2">
                <option value='1'>Custom Image slider</option>
                <option value='2'>Latest Products</option>
                <option value='3'>Featured Products</option>
                <option value='4'>Popular Products</option>
                <option value='5'>Premium Products</option>
              </select>
              <span class="bar"></span><label class="cv-label left text-capitalize">Select slider type</label>
            </div>
          </div>
          <div class="col-md-4 mt-3">
            <div class="cv-form-group form-group mt-4 px-3">
              <select id='slider_layout' name='slider_layout' class="form-control js-select2">
                <option>Select slider layout</option>
                <option value='1'>boxed</option>
                <option value='2'>Full width</option>
              </select>
              <span class="bar"></span><label class="cv-label left text-capitalize">Select slider layout</label>
            </div>
          </div>
          <div class="col-md-4 mt-3">
            <div class="cv-form-group input-group mb-3 mt-4 px-3">
              <div class="input-group-prepend"><span class="input-group-text bg-white rounded-0 cv-chev left">
                  <ion-icon name="person-outline" role="img" class="md hydrated" aria-label="person outline"></ion-icon>
                </span></div><input name="name" type="number" class="form-control custom-input" autocomplete="new-password" value=""><span class="bar"></span><label class="cv-label left text-capitalize">Slider Height in (rem)</label>
            </div>
          </div>
          <div class="col-md-3 mt-3">
            <div class="cv-form-group input-group mb-3 mt-4 px-3">
              <div class="input-group-prepend"><span class="input-group-text bg-white rounded-0 cv-chev left">
                  <ion-icon name="person-outline" role="img" class="md hydrated" aria-label="person outline"></ion-icon>
                </span></div><input name="slide_interval" value='3000' type="text" class="form-control custom-input"><span class="bar"></span><label class="cv-label left text-capitalize">Slide Interval</label>
            </div>
          </div>
          <div class="col-md-3 mt-3">
            <div class="cv-form-group form-group mt-4 px-3">
              <select name='slider_Erasing' class="form-control js-select2">
                <option value='1'>Fade</option>
                <option value='2'>Blind</option>
                <option value='3'>Clip</option>
                <option value='4'>Slide</option>
                <option value='5'>Drop</option>
                <option value='6'>Hide</option>
              </select>
              <span class="bar"></span><label class="cv-label left text-capitalize">Slide Effect</label>
            </div>
          </div>
          <div class="col-md-3 mt-3">
            <div class="cv-form-group input-group mb-3 mt-4 px-3">
              <div class="input-group-prepend"><span class="input-group-text bg-white rounded-0 cv-chev left">
                  <ion-icon name="mail-outline" role="img" class="md hydrated" aria-label="mail outline"></ion-icon>
                </span></div><input name="slider_duration" value="800" type="number" class="form-control custom-input" autocomplete="new-password" value=""><span class="bar"></span><label class="cv-label left text-capitalize">Slide Duration</label>
            </div>
          </div>
          <div class="col-md-3 mt-3">
            <div class="cv-form-group form-group mt-4 px-3">
              <select name='slider_Erasing' class="form-control js-select2">
                <option value='1'>Swing</option>
                <option value='2'>Linbear</option>
              </select>
              <span class="bar"></span><label class="cv-label left text-capitalize">Select Erasing</label>
            </div>
          </div>
          <div class="col-md-4">
            <div class="input-group mb-3 mt-4 px-3 d-flex align-items-center">
              <span class="mt-2">Start Slider :</span>
              <span class="button b2 mt-0 ml-3 mt-2" id="button-10"><input id='status' checked type="checkbox" name="status" class="checkbox">
                <div class="knobs"><span>YES</span></div>
                <div class="layer"></div>
              </span>
            </div>
          </div>
          <div class="col-md-4">
            <div class="input-group mb-3 mt-4 px-3 d-flex align-items-center">
              <span class="mt-2">Start Slides :</span>
              <span class="button b2 mt-0 ml-3 mt-2" id="button-10"><input id='status' checked type="checkbox" name="status" class="checkbox">
                <div class="knobs"><span>NO</span></div>
                <div class="layer"></div>
              </span>
            </div>
          </div>
          <div class="col-md-4">
            <div class="input-group mb-3 mt-4 px-3 d-flex align-items-center">
              <span class="mt-2">shuffle slides :</span>
              <span class="button b2 mt-0 ml-3 mt-2" id="button-10"><input id='status' checked type="checkbox" name="status" class="checkbox">
                <div class="knobs"><span>NO</span></div>
                <div class="layer"></div>
              </span>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary btn-sm">submit</button>
        </div>

      </div>
    </div>
          </form>
</div>
<?= script_tag('assets/shared/jquery/jquery-3.5.1.min.js'); ?>
<script>
  $("form").submit(function(e) {
    e.preventDefault();
    const  all = [];
    const object = $(this).formToJson();
    for (const key in object) {
      if (object.hasOwnProperty(key) && object[key]) {
        all.push({name:key,value: object[key]});
      }
    }
  $.post( '/admin/settings',{data:JSON.stringify(all)}, function(data) {
    console.log(data)
  }).done(function(data) {
    console.log(data);
    alert( "second success" );
  })
  .fail(function(error) {
    console.log(error);
  })
    console.log(all);
    return false;
  });
</script>