<div class="row">
  <div class="col-md-2">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link shadow-xs active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">System</a>
      <a class="nav-link bg-white mt-3 shadow-xs" id="v-pills-themes-tab" data-toggle="pill" href="#v-pills-themes" role="tab" aria-controls="v-pills-themes" aria-selected="false">Themes</a>
      <a class="nav-link bg-white mt-3 shadow-xs" id="v-pills-notifications-tab" data-toggle="pill" href="#v-pills-notifications" role="tab" aria-controls="v-pills-notifications" aria-selected="false">Notifications</a>
      <a class="nav-link bg-white mt-3 shadow-xs" id="v-pills-emails-tab" data-toggle="pill" href="#v-pills-emails" role="tab" aria-controls="v-pills-emails" aria-selected="false">Emails</a>
      <a class="nav-link bg-white mt-3 shadow-xs" id="v-pills-SEO-tab" data-toggle="pill" href="#v-pills-SEO" role="tab" aria-controls="v-pill-SEO" aria-selected="false">SEO</a>
      <a class="nav-link bg-white mt-3 shadow-xs" id="v-pills-Intergrations-tab" data-toggle="pill" href="#v-pills-Intergrations" role="tab" aria-controls="v-pills-Intergrations" aria-selected="false">Intergrations</a>
      <a class="nav-link bg-white mt-3 shadow-xs" id="v-pills-Products-tab" data-toggle="pill" href="#v-pills-Products" role="tab" aria-controls="v-pills-Products" aria-selected="false">Products</a>
      <a class="nav-link bg-white mt-3 shadow-xs" id="v-pills-Social-tab" data-toggle="pill" href="#v-pills-Social" role="tab" aria-controls="v-pills-Social" aria-selected="false">Social login</a>
    </div>
  </div>
  <div class="col-md-10 bg-white rounded">
    <div class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
        <form id="form" action="<?= base_url('admin/settings') ?>" enctype="multipart/form-data" method="post" accept-charset="utf-8" novalidate="">
          <div class="modal-header border-0">
            <h6 class="modal-title position-absolute bg-primary text-white" id="mymodalLabel">System Settings</h6>
          </div>
          <div class="form-row modal-body p-4">
            <div class="col-md-12">
              <div class="cv-form-group input-group mb-3 mt-4 px-3">
                <div class="input-group-prepend"><span class="input-group-text bg-white rounded-0 cv-chev left">
                    <ion-icon name="person-outline" role="img" class="md hydrated" aria-label="person outline"></ion-icon>
                  </span></div><input name="name" type="text" class="form-control custom-input" autocomplete="new-password" value=""><span class="bar"></span><label class="cv-label left text-capitalize">site name</label>
              </div>
            </div>
            <div class="col-md-12 pt-3">
              <div class="form-group px-3">
                <textarea class="wysihtml5 form-control rounded" name="content" id="content" rows="20"></textarea>
              </div>
            </div>
            <div class="col-md-12">
              <div class="cv-form-group input-group mb-3 mt-4 px-3">
                <div class="input-group-prepend"><span class="input-group-text bg-white rounded-0 cv-chev left">
                    <ion-icon name="person-outline" role="img" class="md hydrated" aria-label="person outline"></ion-icon>
                  </span></div><input name="username" type="text" class="form-control custom-input" autocomplete="new-password" value=""><span class="bar"></span><label class="cv-label left text-capitalize">business address</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="cv-form-group input-group mb-3 mt-4 px-3">
                <div class="input-group-prepend"><span class="input-group-text bg-white rounded-0 cv-chev left">
                    <ion-icon name="mail-outline" role="img" class="md hydrated" aria-label="mail outline"></ion-icon>
                  </span></div><input name="email" type="email" class="form-control custom-input" autocomplete="new-password" value=""><span class="bar"></span><label class="cv-label left text-capitalize">Business phone</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="cv-form-group input-group mb-3 mt-4 px-3">
                <div class="input-group-prepend"><span class="input-group-text bg-white rounded-0 cv-chev left">
                    <ion-icon name="mail-outline" role="img" class="md hydrated" aria-label="mail outline"></ion-icon>
                  </span></div><input name="email" type="email" class="form-control custom-input" autocomplete="new-password" value=""><span class="bar"></span><label class="cv-label left text-capitalize">Business Email</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="cv-form-group input-group mb-3 mt-4 px-3">
                <div class="input-group-prepend"><span class="input-group-text bg-white rounded-0 cv-chev left">
                    <ion-icon name="mail-outline" role="img" class="md hydrated" aria-label="mail outline"></ion-icon>
                  </span></div><input name="email" type="email" class="form-control custom-input" autocomplete="new-password" value=""><span class="bar"></span><label class="cv-label left text-capitalize">info Email</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="cv-form-group input-group mb-3 mt-4 px-3">
                <div class="input-group-prepend"><span class="input-group-text bg-white rounded-0 cv-chev left">
                    <ion-icon name="call-outline" role="img" class="md hydrated" aria-label="call outline"></ion-icon>
                  </span></div><input name="phone" type="number" class="form-control custom-input" autocomplete="new-password" value=""><span class="bar"></span><label class="cv-label left text-capitalize">Business telephone</label>
              </div>
            </div>
            <div class="col-md-12">
              <div class="cv-form-group input-group mb-3 mt-4 px-3">
                <div class="input-group-prepend"><span class="input-group-text bg-white rounded-0 cv-chev left">
                    <ion-icon name="briefcase-outline" role="img" class="md hydrated" aria-label="briefcase outline"></ion-icon>
                  </span></div><input name="company" type="text" class="form-control custom-input" autocomplete="new-password" value=""><span class="bar"></span><label class="cv-label left text-capitalize">company name</label>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary btn-sm">submit</button>
          </div>
        </form>
      </div>
      <!-- end of system settings -->
      <div class="tab-pane fade" id="v-pills-themes" role="tabpanel" aria-labelledby="v-pills-themes-tab">...</div>
      <!-- end of system settings -->
      <div class="tab-pane fade" id="v-pills-notifications" role="tabpanel" aria-labelledby="v-pills-notifications-tab">...</div>
      <!-- end of system emails -->
      <div class="tab-pane fade" id="v-pills-emails" role="tabpanel" aria-labelledby="v-pills-emails-tab">...</div>
      <!-- end of system settings -->
      <div class="tab-pane fade" id="v-pills-SEO" role="tabpanel" aria-labelledby="v-pills-SEO-tab">...</div>
      <!-- end of system settings -->
      <div class="tab-pane fade" id="v-pills-Intergrations" role="tabpanel" aria-labelledby="v-pills-Intergrations-tab">...</div>
      <!-- end of system Products -->
      <div class="tab-pane fade" id="v-pills-Products" role="tabpanel" aria-labelledby="v-pills-Products-tab">...</div>
      <!-- end of system settings -->
      <div class="tab-pane fade" id="v-pills-Social" role="tabpanel" aria-labelledby="v-pills-Social-tab">...</div>
    </div>
  </div>
</div>
