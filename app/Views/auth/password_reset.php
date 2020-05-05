<div class="container">
    <?= form_open(base_url('auth/password_reset'), ['class' => 'form-signin', 'method' => 'post', 'id' => 'form', 'novalidate' => '',]); ?>
    <div class="w-100 d-flex justify-content-center">
        <?= img(['src' => '/assets/shared/images/bayshop.svg', 'height' => "40", 'alt' => 'bayshop']); ?>
    </div>
    <div class="form-row p-4">
        <div class="position-relative w-100 mt-3">
        <div class="col-md-12">
            <?= custom_inputs([
                'name'        => 'email',
                'id'          => 'email',
                'label'       => 'your email address',
                'type'        => 'email',
                'class'       => 'form-control custom-input',
            ], ['group-class' => 'mt-4', 'icon-name' => 'person-outline']) ?>
            <?= form_submit([
                'class'       => 'btn btn-primary mt-5 btn-block',
                'value'       => 'Reset'
            ]) ?>
            <div class="d-flex justify-content-between mt-3 text-center w-100">
                <a href="/auth/login">Back to Login</a>
                <a href="/auth/register">Have no account Register</a>
            </div>
        </div>
    </div>
    <?= form_close() ?>
</div>
