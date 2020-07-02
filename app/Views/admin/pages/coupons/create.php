<form id="form" action="<?= base_url('admin/users/create') ?>" enctype="multipart/form-data" novalidate="">
    <div class="modal-header border-0">
        <h6 class="modal-title position-absolute bg-primary text-white" id="mymodalLabel"><?= $page_title ?></h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body p-4">
        <div class="form-row btn-group-toggle w-100" data-toggle="buttons">
            <label class="btn btn-light btn-coupons flex-fill active">
                <input type="radio" name="sale" id="sale" checked>
                <ion-icon src="<?= base_url('assets/images/sale.svg')?>"></ion-icon>
                Sale Price
            </label>
            <label class="btn btn-light btn-coupons flex-fill active">
                <input type="radio" name="discount" id="discount">
                <ion-icon src="<?= base_url('assets/images/discount.svg')?>"></ion-icon>
                discount
            </label>
            <label class="btn btn-light btn-coupons flex-fill active">
                <input type="radio" name="free-shipping" id="free-shipping">
                <ion-icon src="<?= base_url('assets/images/free.svg')?>"></ion-icon>
                Free shipping
            </label>
            <label class="btn btn-light btn-coupons flex-fill active">
                <input type="radio" name="buy-x-get-y" id="buy-x-get-y">
                <ion-icon src="<?= base_url('assets/images/box.svg')?>"></ion-icon>
                Buy X get Y
            </label>
        </div>
        <div class="form-row mt-3">
            <div class="form-group col-md-6">
                <label for="name">Coupon Name</label>
                <input type="text" class="form-control" id="name" placeholder="enter name">
            </div>
            <div class="form-group col-md-6">
                <label for="code">Coupon code</label>
                <input type="text" class="form-control" id="code" placeholder="enter code">
            </div>
            <div class="form-group col-md-12">
                <label>coupon valid From - To</label>
                <div class="input-group mb-3">
                    <input type="date" class="form-control">
                    <input type="date" class="form-control">
                </div>
            </div>
            <div class="form-group col-md-8">
                <label for="code">Apply coupon on</label>
                <select name="" id="" class="custom-select">
                    <option value="all-products">All products</option>
                    <optgroup label="Collection">
                    <!-- < ?php foreach ($collection as $collection):?> {
                        <option value="< ?= $collection['id'] ?>">< ?= $collection['name'] ?></option>
                    < ?php endforeach ?> -->
                    </optgroup>
                </select>
            </div>
        </div>
    </div>
</form>
