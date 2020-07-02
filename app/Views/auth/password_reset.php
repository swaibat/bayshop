<div class="container">
    <?= form_open(base_url('auth/password_reset'), ['class' => 'form-signin', 'method' => 'post', 'id' => 'form', 'novalidate' => '',]); ?>
    <div class="w-100 d-flex justify-content-center">
        <?= img(['src' => '/assets/shared/images/bayshop.svg', 'height' => "40", 'alt' => 'bayshop']); ?>
    </div>
    <div class="form-row p-4">
        <div class="position-relative w-100 mt-3">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="username">Email address</label>
                    <input type="text" class="form-control" id="username" placeholder="Enter email">
                </div>
                <?= form_submit([
                'class'       => 'btn btn-primary mt-4 btn-block',
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
