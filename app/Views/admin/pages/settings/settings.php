<div class="row">
  <div class="col-md-2">
    <div class="bg-white p-3 shadow-xs rounded">
      <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <a class="nav-link shadow-xs active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">System</a>
        <a class="nav-link" id="v-pills-themes-tab" data-toggle="pill" href="#v-pills-themes" role="tab" aria-controls="v-pills-themes" aria-selected="false">Themes</a>
        <a class="nav-link" id="v-pills-menu-tab" data-toggle="pill" href="#v-pills-menu" role="tab" aria-controls="v-pills-menu" aria-selected="false">Menu</a>
        <a class="nav-link" id="v-pills-menu-tab" data-toggle="pill" href="#v-pills-Users" role="tab" aria-controls="v-pills-Users" aria-selected="false">Users</a>
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
  <div class="col-md-10 bg-white rounded">
    <div class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane fade " id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
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
      <!-- theme settings -->
      <div class="tab-pane fade" id="v-pills-themes" role="tabpanel" aria-labelledby="v-pills-themes-tab">...</div>
      <!-- notifications settings -->
      <div class="tab-pane fade" id="v-pills-notifications" role="tabpanel" aria-labelledby="v-pills-notifications-tab">...</div>
      <!-- emails settings -->
      <div class="tab-pane fade" id="v-pills-menu" role="tabpanel" aria-labelledby="v-pills-menu-tab">...</div>
      <!-- emails settings -->
      <div class="tab-pane fade" id="v-pills-emails" role="tabpanel" aria-labelledby="v-pills-emails-tab">...</div>
      <!-- seo settings -->
      <div class="tab-pane fade show active" id="v-pills-SEO" role="tabpanel" aria-labelledby="v-pills-SEO-tab">
        <div class="row">
          <div class="col-md-6">
            <div class="modal-header border-0">
              <h6 class="modal-title position-absolute bg-primary text-white" id="mymodalLabel">Website SEO</h6>
            </div>
            <div class="form-row modal-body p-4">
              <div class="col-md-12">
                <div class="cv-form-group input-group mb-3 mt-4 px-2">
                  <div class="input-group-prepend"><span class="input-group-text bg-white rounded-0 cv-chev left">
                      <ion-icon name="person-outline" role="img" class="md hydrated" aria-label="person outline"></ion-icon>
                    </span></div><input name="name" type="text" class="form-control custom-input" autocomplete="new-password" value=""><span class="bar"></span><label class="cv-label left text-capitalize">SEO Title</label>
                </div>
              </div>
              <div class="col-md-12">
                <div class="cv-form-group input-group mb-3 mt-4 px-2">
                  <div class="input-group-prepend"><span class="input-group-text bg-white rounded-0 cv-chev left">
                      <ion-icon name="person-outline" role="img" class="md hydrated" aria-label="person outline"></ion-icon>
                    </span></div><input name="name" type="text" class="form-control custom-input" autocomplete="new-password" value=""><span class="bar"></span><label class="cv-label left text-capitalize">SEO Keywords</label>
                </div>
              </div>
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
              <div class="col-md-12">
                <div class="cv-form-group input-group mb-3 mt-4 px-2">
                  <div class="input-group-prepend"><span class="input-group-text bg-white rounded-0 cv-chev left">
                      <ion-icon name="person-outline" role="img" class="md hydrated" aria-label="person outline"></ion-icon>
                    </span></div><input name="name" type="text" class="form-control custom-input" autocomplete="new-password" value=""><span class="bar"></span><label class="cv-label left text-capitalize">SEO Title</label>
                </div>
              </div>
              <div class="col-md-12">
                <div class="cv-form-group input-group mb-3 mt-4 px-2">
                  <div class="input-group-prepend"><span class="input-group-text bg-white rounded-0 cv-chev left">
                      <ion-icon name="person-outline" role="img" class="md hydrated" aria-label="person outline"></ion-icon>
                    </span></div><input name="name" type="text" class="form-control custom-input" autocomplete="new-password" value=""><span class="bar"></span><label class="cv-label left text-capitalize">SEO Keywords</label>
                </div>
              </div>
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
              <div class="col-md-12">
                <div class="cv-form-group input-group mt-4 px-2">
                  <div class="input-group-prepend"><span class="input-group-text bg-white rounded-0 cv-chev left">
                      <ion-icon name="person-outline" role="img" class="md hydrated" aria-label="person outline"></ion-icon>
                    </span></div><input name="name" type="text" class="form-control custom-input" autocomplete="new-password" value="UA-00000"><span class="bar"></span><label class="cv-label left text-capitalize">SEO Title</label>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="modal-header border-0">
              <h6 class="modal-title position-absolute bg-primary text-white" id="mymodalLabel">Google analytics Tracking ID</h6>
            </div>
            <div class="form-row modal-body p-4">
              <div class="col-md-6">
                <div class="cv-form-group input-group mb-3 mt-4 px-2">
                  <div class="input-group-prepend"><span class="input-group-text bg-white rounded-0 cv-chev left">
                      <ion-icon name="person-outline" role="img" class="md hydrated" aria-label="person outline"></ion-icon>
                    </span></div><input name="name" type="text" class="form-control custom-input" autocomplete="new-password" value=""><span class="bar"></span><label class="cv-label left text-capitalize">Facebook Url</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="cv-form-group input-group mb-3 mt-4 px-2">
                  <div class="input-group-prepend"><span class="input-group-text bg-white rounded-0 cv-chev left">
                      <ion-icon name="person-outline" role="img" class="md hydrated" aria-label="person outline"></ion-icon>
                    </span></div><input name="name" type="text" class="form-control custom-input" autocomplete="new-password" value=""><span class="bar"></span><label class="cv-label left text-capitalize">Instagram Url</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="cv-form-group input-group mb-3 mt-4 px-2">
                  <div class="input-group-prepend"><span class="input-group-text bg-white rounded-0 cv-chev left">
                      <ion-icon name="person-outline" role="img" class="md hydrated" aria-label="person outline"></ion-icon>
                    </span></div><input name="name" type="text" class="form-control custom-input" autocomplete="new-password" value=""><span class="bar"></span><label class="cv-label left text-capitalize">Twitter Url</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="cv-form-group input-group mb-3 mt-4 px-2">
                  <div class="input-group-prepend"><span class="input-group-text bg-white rounded-0 cv-chev left">
                      <ion-icon name="person-outline" role="img" class="md hydrated" aria-label="person outline"></ion-icon>
                    </span></div><input name="name" type="text" class="form-control custom-input" autocomplete="new-password" value=""><span class="bar"></span><label class="cv-label left text-capitalize">Linkedin Url</label>
                </div>
              </div>
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
      <!-- social settings -->
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
                    <span class="button b2 mt-0 ml-3 mt-2" id="button-10"><input id='status' checked type="checkbox" name="status" class="checkbox">
                      <div class="knobs"><span>NO</span></div>
                      <div class="layer"></div>
                    </span>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="cv-form-group input-group mb-3 mt-4 px-3">
                    <div class="input-group-prepend"><span class="input-group-text bg-white rounded-0 cv-chev left">
                        <ion-icon name="person-outline" role="img" class="md hydrated" aria-label="person outline"></ion-icon>
                      </span></div><input name="name" type="text" class="form-control custom-input" autocomplete="new-password" value=""><span class="bar"></span><label class="cv-label left text-capitalize">Facebook App Id</label>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="cv-form-group input-group mb-3 mt-4 px-3">
                    <div class="input-group-prepend"><span class="input-group-text bg-white rounded-0 cv-chev left">
                        <ion-icon name="person-outline" role="img" class="md hydrated" aria-label="person outline"></ion-icon>
                      </span></div><input name="username" type="text" class="form-control custom-input" autocomplete="new-password" value=""><span class="bar"></span><label class="cv-label left text-capitalize">Facebook App Secrete</label>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="cv-form-group input-group mb-3 mt-4 px-3">
                    <div class="input-group-prepend"><span class="input-group-text bg-white rounded-0 cv-chev left">
                        <ion-icon name="mail-outline" role="img" class="md hydrated" aria-label="mail outline"></ion-icon>
                      </span></div><input name="email" type="email" class="form-control custom-input" autocomplete="new-password" value=""><span class="bar"></span><label class="cv-label left text-capitalize">Facebook Graph Version</label>
                  </div>
                </div>
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
                <div class="col-md-12">
                  <div class="cv-form-group input-group mb-3 mt-4 px-3">
                    <div class="input-group-prepend"><span class="input-group-text bg-white rounded-0 cv-chev left">
                        <ion-icon name="person-outline" role="img" class="md hydrated" aria-label="person outline"></ion-icon>
                      </span></div><input name="name" type="text" class="form-control custom-input" autocomplete="new-password" value=""><span class="bar"></span><label class="cv-label left text-capitalize">Application Name</label>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="cv-form-group input-group mb-3 mt-4 px-3">
                    <div class="input-group-prepend"><span class="input-group-text bg-white rounded-0 cv-chev left">
                        <ion-icon name="person-outline" role="img" class="md hydrated" aria-label="person outline"></ion-icon>
                      </span></div><input name="username" type="text" class="form-control custom-input" autocomplete="new-password" value=""><span class="bar"></span><label class="cv-label left text-capitalize">Client Id</label>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="cv-form-group input-group mb-3 mt-4 px-3">
                    <div class="input-group-prepend"><span class="input-group-text bg-white rounded-0 cv-chev left">
                        <ion-icon name="mail-outline" role="img" class="md hydrated" aria-label="mail outline"></ion-icon>
                      </span></div><input name="email" type="email" class="form-control custom-input" autocomplete="new-password" value=""><span class="bar"></span><label class="cv-label left text-capitalize">Client Secrete</label>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="cv-form-group input-group mb-3 mt-4 px-3">
                    <div class="input-group-prepend"><span class="input-group-text bg-white rounded-0 cv-chev left">
                        <ion-icon name="mail-outline" role="img" class="md hydrated" aria-label="mail outline"></ion-icon>
                      </span></div><input name="email" type="email" class="form-control custom-input" autocomplete="new-password" value=""><span class="bar"></span><label class="cv-label left text-capitalize">Google redirect Uri</label>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary btn-sm">submit</button>
          </div>
        </form>
      </div>
      <!-- social settings -->
      <div class="tab-pane fade" id="v-pills-Users" role="tabpanel" aria-labelledby="v-pills-Users-tab">...</div>
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
  </div>
</div>
