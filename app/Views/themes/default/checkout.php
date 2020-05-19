<div class="container mt-6">
<nav aria-label="breadcrumb shadow-xs bg-transparent">
  <ol class="breadcrumb bg-transparent">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="/products">Products</a></li>
    <li class="breadcrumb-item active" aria-current="page">Cart</li>
  </ol>
</nav>
    <div class="row">
        <div class="col-md-8 pl-0">
            <div class="bg-white shadow-xs rounded">
                <div class="modal-header border-0">
                    <h6 class="modal-title position-absolute bg-primary text-white" id="mymodalLabel">
                        <?= $page_title ?></h6>
                </div>
                <?= form_open('auth/register', ['class' => 'p-4', 'method' => 'post', 'id' => 'form', 'novalidate' => '',]); ?>
                <div class="form-row pt-2">
                    <?= custom_inputs([
                'name'        => 'firstname',
                'label'       => 'firstname',
                'type'        => 'text',
                'class'       => 'form-control custom-input',
            ], ['group-class' => 'mt-5 px-2 col-md-6', 'icon-name' => 'person-outline']) ?>
                    <?= custom_inputs([
                'name'        => 'lastname',
                'label'       => 'lastname',
                'type'        => 'text',
                'class'       => 'form-control custom-input',
            ], ['group-class' => 'mt-5 col-md-6', 'icon-name' => 'mail-outline']) ?>
                    <?= custom_inputs([
                'name'        => 'email',
                'label'       =>'email address',
                'type'        => 'email',
                'class'       => 'form-control custom-input',
            ], ['group-class' => 'mt-5 col-md-6', 'icon-name' => 'lock-closed-outline']) ?>
                    <?= custom_inputs([
                'name'        => 'telepnone',
                'label'       => 'telephone',
                'type'        => 'text',
                'class'       => 'form-control custom-input',
            ], ['group-class' => 'mt-5 col-md-6', 'icon-name' => 'lock-closed-outline']) ?>

                    <div class="modal-header border-0 mb-3">
                        <h6 class="modal-title position-absolute bg-primary text-white" id="mymodalLabel">
                            <?= $page_title ?></h6>
                    </div>
                    <?= custom_inputs([
                'name'        => 'address',
                'label'       => 'full address',
                'type'        => 'text',
                'class'       => 'form-control custom-input',
            ], ['group-class' => 'mt-5 pt-3 px-2 col-md-12', 'icon-name' => 'person-outline']) ?>
                    <?= custom_inputs([
                'name'        => 'address_1',
                'label'       => 'address 1',
                'type'        => 'text',
                'class'       => 'form-control custom-input',
            ], ['group-class' => 'mt-5 col-md-6', 'icon-name' => 'mail-outline']) ?>
                    <?= custom_inputs([
                'name'        => 'address_2',
                'label'       =>'address 2',
                'type'        => 'password',
                'class'       => 'form-control custom-input',
            ], ['group-class' => 'mt-5 col-md-6', 'icon-name' => 'lock-closed-outline']) ?>
                    <?= custom_inputs([
                'name'        => 'city',
                'label'       =>'city',
                'type'        => 'text',
                'class'       => 'form-control custom-input',
            ], ['group-class' => 'mt-5 col-md-4', 'icon-name' => 'lock-closed-outline']) ?>
                    <?= custom_inputs([
                'name'        => 'postal code',
                'label'       => 'postal code',
                'type'        => 'email',
                'class'       => 'form-control custom-input',
            ], ['group-class' => 'mt-5 col-md-4', 'icon-name' => 'mail-outline']) ?>
                    <?= custom_inputs([
                'name'        => 'zip_code',
                'label'       =>'zip code',
                'type'        => 'text',
                'class'       => 'form-control custom-input',
            ], ['group-class' => 'mt-5 col-md-4', 'icon-name' => 'lock-closed-outline']) ?>
                    <?= custom_inputs([
                'name'        => 'country',
                'label'       =>'country',
                'type'        => 'text',
                'class'       => 'form-control custom-input',
            ], ['group-class' => 'mt-5 col-md-12', 'icon-name' => 'lock-closed-outline']) ?>

                    <div class="d-flex justify-content-between mt-3 text-center w-100">
                        <a class='btn btn-sm btn-outline-primary' href="/auth/password_reset">back to cart</a>
                        <?= form_submit([
                'class'       => 'btn btn-sm btn-primary',
                'value'       => 'Submit'
            ]) ?>
                    </div>
                </div>
                <?= form_close() ?>
            </div>
        </div>
        <div class="col-md-4 p-0">
            <div class="bg-white shadow-xs p-2 ">
                <div class="modal-header border-0">
                    <h6 class="modal-title w-75 position-absolute bg-primary text-white" id="mymodalLabel">
                        Order Summary</h6>
                </div>
                <?php if(isset($_SESSION['cart'])):?>
                <ul class="list-group list-group-flush mt-4 p-2">
                <?php foreach ($_SESSION['cart'] as $key => $value):?>
                    <li class="list-group-item d-flex">
                            <img height='50' width='50' class='rounded shadow-xs mr-2' src="<?= $value['image']?>" alt="">
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
