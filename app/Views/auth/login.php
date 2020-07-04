<div class="container">
    <div class="form-signin">
        <div class="alert alert-warning w-100 d-none text-center"></div>
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
        <div class="position-relative w-100 mt-4">
            <hr><span class="login-text">OR</span>
        </div>
        <?= form_open(base_url('auth/login'), ['method' => 'post', 'id' => 'form', 'novalidate' => '',]); ?>
        <div class="form-group">
            <label for="username">Email address</label>
            <input type="text" class="form-control" name="username" id="username" placeholder="Enter username">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
        </div>
        <button type="submit" id="submit" class="btn btn-sm btn-primary btn-block">Login</button>
        <?= form_close() ?>
        <div class="d-flex justify-content-between mt-3 text-center w-100">
            <a href="/auth/password_reset">Fogort password</a>
            <a href="/auth/register">Have no account Register</a>
        </div>
    </div>
</div>

<script>
$('#form').submit(function(event) {
    event.preventDefault();
    $('#submit').text('loging in . . .');
    $(".helper-text-danger").remove();
    $.post($(this).attr("action"), $('form').serialize(), function(res) {
        res?$('#submit').text('Login'):'';
        res.status === 400 ? $('.alert').removeClass('d-none').text(res.message):location.reload();;
    })
});
</script>
