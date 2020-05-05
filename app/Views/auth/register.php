<div class="container">
    <?= form_open('auth/register', ['class' => 'form-signin ', 'method' => 'post', 'id' => 'form', 'novalidate' => '',]); ?>
    <div class="w-100 d-flex justify-content-center">
        <?= img(['src' => '/assets/shared/images/bayshop.svg', 'height' => "40", 'alt' => 'bayshop']); ?>
    </div>
    <div class="form-row p-4">
        <div class="col-md-12">
            <?= custom_inputs([
                'name'        => 'username',
                'id'          => 'username',
                'label'       => 'username',
                'type'        => 'text',
                'class'       => 'form-control custom-input',
            ], ['group-class' => 'mt-5', 'icon-name' => 'person-outline']) ?>
            <?= custom_inputs([
                'name'        => 'email',
                'id'          => 'email',
                'label'       => 'email address',
                'type'        => 'email',
                'class'       => 'form-control custom-input',
            ], ['group-class' => 'mt-5', 'icon-name' => 'mail-outline']) ?>
            <?= custom_inputs([
                'name'        => 'password',
                'id'          => 'password',
                'label'       =>'password',
                'type'        => 'password',
                'class'       => 'form-control custom-input',
            ], ['group-class' => 'mt-5', 'icon-name' => 'lock-closed-outline']) ?>
            <?= form_submit([
                'class'       => 'btn btn-primary mt-5 btn-block',
                'value'       => 'Submit'
            ]) ?>
            <div class="d-flex justify-content-between mt-3 text-center w-100">
                <a href="/auth/password_reset">Fogort password</a>
                <a href="/auth/login">Have account Login</a>
            </div>
        </div>
    </div>
    <?= form_close() ?>
</div>
