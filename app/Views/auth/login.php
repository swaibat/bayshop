<div class="container">
    <div class="form-signin">
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
        <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        <?= form_close() ?>
        <div class="d-flex justify-content-between mt-3 text-center w-100">
            <a href="/auth/password_reset">Fogort password</a>
            <a href="/auth/register">Have no account Register</a>
        </div>
        <button id="showToast" class="btn btn-primary btn-lg w-25 mx-auto">Show Toast</button>
    </div>
</div>
<div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="2000"
    style="position: absolute; top: 1rem; right: 1rem;">
    <div class="toast-header">

        <strong class="mr-auto">Bootstrap</strong>
        <small>11 mins ago</small>
        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="toast-body">
        Hello, world! This is a toast message.
    </div>
</div>
<script>
$('#form').submit(function(event) {
    event.preventDefault();
    $(".helper-text-danger").remove();
    $.post($(this).attr("action"), $('form').serialize(), function(res) {
        if (res.errors) {
            Object.entries(res.errors).map(error => {
                $(`#${error[0]}`).after(
                    `<small class="helper-text-danger">${error[1]}</small>`);
            })
        }
    })
});
</script>
