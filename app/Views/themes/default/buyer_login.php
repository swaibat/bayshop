<div class="container">
    <div class="row">
        <div class="col-md-8">
        <div class="form-row bg-white shadow-xs rounded">
        <div class="col-md-7">
        <?= form_open(base_url('auth/login'), ['class' => 'p-4', 'method' => 'post', 'id' => 'form', 'novalidate' => '',]); ?>
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
                'value'       => 'Login'
            ]) ?>
            <div class="d-flex justify-content-between mt-3 text-center w-100">
                <a href="/auth/password_reset">Fogort password</a>
                <a href="/auth/register">Have no account Register</a>
            </div>
    <?= form_close() ?>
    </div>
    <div class="col-md-5 d-flex align-items-center justify-content-around border-left">
    <a href='/shipping/address' class='btn btn-primary'>Continue as guest</a>
    </div>
    </div>
        </div>
        <div class="col-md-4 p-0">
            <div class="bg-white shadow-xs p-2 rounded">
                <div class="modal-header border-0">
                    <h6 class="modal-title w-75 position-absolute bg-primary text-white" id="mymodalLabel">
                        Order Summary</h6>
                </div>
                <?php if(isset($_SESSION['cart'])):?>
                <ul class="list-group list-group-flush mt-4 p-2">
                <?php foreach ($_SESSION['cart'] as $key => $value):?>
                    <li class="list-group-item d-flex">
                            <img height='50' width='50' class='rounded shadow-xs mr-2' src="<?= $value['url']?>" alt="">
                            <span class='d-flex flex-column w-75'>
                            <small class='mb-2 text-truncate'><?= $value['title']?></small>
                            <div class="d-flex">
                                <span class='ml-2'>Color : <?= $value['color']?></span>
                                <span class='ml-2'>Size : <?= $value['size']?></span>
                            </div>
                            </span>
                    </li>
                <?php endforeach ?>
                </ul>
                <?php endif ?>
            </div>
        </div>

    </div>
</div>
