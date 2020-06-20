<div class="row bg-white rounded shadow-xs pt-3">
    <div class="col-md-6 p-4">
        <h6 class="px-3">Facebook Login details</h6>
        <hr>
        <div class="form-row px-3">
            <div class="col-md-12">
                <div class="form-group col-12 mb-3 d-flex align-items-center">
                    <span class="mt-2">Enable facebook login :</span>
                    <span class="button b2 mt-0 ml-3 mt-2" id="button-10"><input id='' checked type="checkbox"
                            name="fabook_login" class="checkbox">
                        <div class="knobs"><span>NO</span></div>
                        <div class="layer"></div>
                    </span>
                </div>
            </div>
            <div class="form-group col-12">
                <label class="text-capitalize" for="facebook_app_id">Facebook App Id</label>
                <input name="facebook_app_id" value="<?= get_config('facebook_app_id')?>" type="text" class="form-control">
            </div>
            <div class="form-group col-12">
                <label class="text-capitalize" for="facebook_app_secrete">Facebook App Secrete</label>
                <input name="facebook_app_secrete" value="<?= get_config('facebook_app_secrete')?>" type="text" class="form-control">
            </div>
            <div class="form-group col-12">
                <label class="text-capitalize" for="facebook_graph_version">Facebook Graph Version</label>
                <input name="facebook_graph_version" value="<?php get_config('facebook_graph_version')?>" type="text"
                    class="form-control" placeholder='v7.4'>
            </div>
        </div>
    </div>







    <div class="col-md-6 p-4">
        <h6>Google Login Details</h6>
        <hr>
        <div class="form-row">
            <div class="col-md-12">
                <div class="form-group col-12 mb-3 d-flex align-items-center">
                    <span class="mt-2">Enable Google login :</span>
                    <span class="button b2 mt-0 ml-3 mt-2" id="button-10"><input id='status' checked type="checkbox"
                            name="status" class="checkbox">
                        <div class="knobs"><span>NO</span></div>
                        <div class="layer"></div>
                    </span>
                </div>
            </div>
            <div class="form-group col-12">
                <label class="text-capitalize" for="google_app_name">Application Name</label>
                <input name="google_app_name" value="<?= get_config('google_app_name')?>" type="text" class="form-control">
            </div>
            <div class="form-group col-12">
                <label class="text-capitalize" for="google_client_id">Client Id</label>
                <input name="google_client_id" value="<?= get_config('google_client_id')?>" type="text" class="form-control">
            </div>
            <div class="form-group col-12">
                <label class="text-capitalize" for="google_client_secrete">Client Secrete</label>
                <input name="google_client_secrete" value="<?= get_config('google_client_secrete')?>" type="password" class="form-control">
            </div>
        </div>
    </div>
</div>
