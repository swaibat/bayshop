<!-- <div class="modal-header border-0">
    <h6 class="modal-title position-absolute bg-primary text-white" id="mymodalLabel">System Settings
    </h6>
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
</div> -->
<div class="bg-white shadow-xs rounded p-4">
    <div class="form-row">
        <div class="form-group col-md-8">
            <label for="email_host_name">Email Host Name</label>
            <input type="text" name='email_host_name' class="form-control" id="email_host_name" placeholder="enter email hostname">
        </div>
        <div class="form-group col-md-4">
            <label for="email_host_name">Email Port</label>
            <input type="text" name='email_host_name' class="form-control" id="email_host_name" placeholder="enter email hostname">
        </div>
        <div class="form-group col-md-6">
            <label for="sender_email">Sender Email</label>
            <input type="text" name='sender_email' class="form-control" id="sender_email" placeholder="enter sender email">
        </div>
        <div class="form-group col-md-6">
            <label for="sender_display_name">Sender Display Name</label>
            <input type="text" name='sender_display_name' class="form-control" id="sender_display_name" placeholder="enter sender display name">
        </div>
        <div class="form-group col-md-6">
            <label for="auth_email">Authentication Email</label>
            <input type="text" name='auth_email' class="form-control" id="auth_email" placeholder="enter auth email">
        </div>
        <div class="form-group col-md-6">
            <label for="">authentication Password</label>
            <input type="text" name='auth_password' class="form-control" id="auth_password" placeholder="enter auth password">
        </div>
    </div>
</div>
