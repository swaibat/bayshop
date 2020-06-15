<div class="container">
    <?= form_open(base_url('auth/login'), ['class' => 'form-signin', 'method' => 'post', 'id' => 'form', 'novalidate' => '',]); ?>
    <div class="w-100 d-flex justify-content-center">
        <?= img(['src' => '/assets/shared/images/bayshop.svg', 'height' => "40", 'alt' => 'bayshop']); ?>
    </div>
    <div class="form-row p-4">
        <div class="w-100 btn-group">
            <?php foreach ($hybridauth->getProviders() as $name) : ?>
                <?php if (!isset($adapters[$name])) : ?>
                    <?= form_button([
                        'class'       => 'social btn ' . $name . ' border flex-fill',
                        'content' =>  "<ion-icon name='logo-$name'></ion-icon> $name"
                    ]) ?>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
        <div class="position-relative w-100 mt-3">
            <hr><span class="login-text">or login with</span></div>
        <div class="col-md-12">
            <?= custom_inputs([
                'name'        => 'username',
                'id'          => 'username',
                'label'       => 'username',
                'type'        => 'text',
                'required'    => true,
                'class'       => 'form-control custom-input',
            ], ['group-class' => 'mt-4', 'icon-name' => 'person-outline']) ?>
            <?= custom_inputs([
                'name'        => 'password',
                'id'          => 'password',
                'label'       => 'password',
                'type'        => 'password',
                'required'    => true,
                'class'       => 'form-control custom-input',
            ], ['group-class' => 'mt-5', 'icon-name' => 'lock-closed-outline']) ?>
            <?= form_submit([
                'class'       => 'btn btn-primary mt-5 btn-block',
                'value'       => 'Submit'
            ]) ?>
            <div class="d-flex justify-content-between mt-3 text-center w-100">
                <a href="/auth/password_reset">Fogort password</a>
                <a href="/auth/register">Have no account Register</a>
            </div>
        </div>
    </div>
    <?= form_close() ?>
</div>
