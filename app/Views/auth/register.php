<div class="container">
    <?= form_open('auth/register', ['class' => 'form-signin ', 'method' => 'post', 'id' => 'form', 'novalidate' => '',]); ?>
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
            <hr><span class="login-text">or Register with</span></div>
        <div class="col-md-12">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username" id="username" placeholder="Enter username">
        </div>
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="text" class="form-control" name="email" id="email" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
        </div>
            <?= form_submit([
                'class'       => 'btn btn-primary mt-4 btn-block',
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
