<form action="<?= base_url('admin/coupons/create') ?>" enctype="multipart/form-data" novalidate="">
    <div class="modal-header border-0">
        <h6 class="modal-title position-absolute bg-primary text-white" id="mymodalLabel"><?= $page_title ?></h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body p-4">
        <div class="form-row btn-group-toggle w-100" data-toggle="buttons">
            <label class="btn btn-light btn-coupons flex-fill <?=$coupon['type']=='sale'?'active':''?>">
                <input type="radio" name="type" id="sale" value="sale" <?=$coupon['type']=='sale'?'checked':''?>>
                <ion-icon src="<?= base_url('assets/images/sale.svg')?>"></ion-icon>
                Sale Price
            </label>
            <label class="btn btn-light btn-coupons flex-fill <?=$coupon['type']=='discount'?'active':''?>">
                <input type="radio" name="type" id="discount" value="discount" <?=$coupon['type']=='discount'?:'checked'?>>
                <ion-icon src="<?= base_url('assets/images/discount.svg')?>"></ion-icon>
                discount
            </label>
            <label class="btn btn-light btn-coupons flex-fill <?=$coupon['type']=='free_shipping'?'active':''?> ">
                <input type="radio" name="type" id="free_shipping" value="free_shipping" <?=$coupon['type']=='free_shipping'?'checked':''?>>
                <ion-icon src="<?= base_url('assets/images/free.svg')?>"></ion-icon>
                Free shipping
            </label>
            <label class="btn btn-light btn-coupons flex-fill <?=$coupon['type']=='sale'?'buy_x_get_y':''?>">
                <input type="radio" name="type" id="buy_x_get_y" value="buy_x_get_y" <?=$coupon['type']=='buy_x_get_y'?'checked':''?>>
                <ion-icon src="<?= base_url('assets/images/box.svg')?>"></ion-icon>
                Buy X get Y
            </label>

        </div>
        <hr>
        <div class="coupon-form form-row mt-3">
            <div class="form-group col-md-6">
                <label for="name">Coupon Name *</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="enter name" minlength="3" value="<?=$coupon['name'] ?>"
                    required>
            </div>
            <div class="form-group col-md-6">
                <label for="code">Coupon code *</label>
                <input type="text" class="form-control" name="code" id="code" minlength="3" placeholder="enter code" value="<?=$coupon['code'] ?>"
                    required>
            </div>
            <div class="form-group col-md-8">
                <label>coupon valid From - To</label>
                <div class="input-group mb-3">
                    <input type="date" name="valid_from" id="valid_from" class="form-control" value="<?=$coupon['valid_from'] ?>">
                    <input type="date" name="valid_to" id="valid_to" class="form-control" value="<?= $coupon['valid_to'] ?'':'disabled' ?>" >
                </div>
            </div>
            <div class="form-group col-md-4 d-flex align-items-center">
                <div class="custom-control custom-checkbox ml-3 mt-3">
                    <input type="checkbox" class="custom-control-input" id="coupon-expiry" checked>
                    <label class="custom-control-label" for="coupon-expiry">No expiry date</label>
                </div>
            </div>
            <div id="offer-container" class="form-group col-md-4">

                <label for="offer">Offer *</label>
                <div class="offer-container input-group" id="offer">
                    <div class="input-group-prepend" id="price-adon">
                        <span class="input-group-text">USD</span>
                    </div>
                    <input type="text" name="offer" class="form-control" placeholder="enter your" min="1" value="<?= $coupon['offer']?>">
                    <div class="input-group-prepend d-none" id="discount-group">
                        <span class="input-group-text">%</span>
                    </div>
                </div>
                <div id="buy-x" class="input-group d-none">
                    <div class="input-group-prepend" id="price-adon">
                        <span class="input-group-text">Buy</span>
                    </div>
                    <input type="number" name="buy_x_get_y[]" class="form-control" placeholder="2">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Get</span>
                    </div>
                    <input type="number" name="buy_x_get_y[]" class="form-control" placeholder="1">
                </div>
            </div>
            <div class="form-group col-md-4">
                <label for="apply_to">Apply coupon to *</label>
                <select name="apply_to" id="apply_to" class="custom-select">
                    <option value=""></option>
                    <option value="all_products" <?=$coupon['apply_to']=='all_products'?'selected':''?>>All products</option>
                    <option value="specific_collection" <?=$coupon['apply_to']=='specific_collection'?'selected':''?>>Specific Collection</option>
                    <option value="specific_products" <?=$coupon['apply_to']=='specific_products'?'selected':''?>>Specific products</option>
                </select>
            </div>
            <div id="collection_option" class="form-group col-md-4 d-none">
                <label for="apply_to_collection">Apply to specific collection</label>
                <select name="apply_value[]" id="apply_to_collection" class="form-control select2" multiple>
                    <?php foreach ($collection as $collection):?>
                    <option value="<?= $collection['id'] ?>"><?= $collection['name'] ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div id="products_option" class="form-group col-md-12 d-none">
                <label for="apply_to_products">Apply to specific products</label>
                <select name="apply_value[]" id="apply_to_products" class="form-control js-data-ajax" multiple>
                    <option></option>
                </select>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary btn-sm">submit</button>
    </div>
</form>
<script>
$(document).ready(() => {
    $("#valid_from").val(new Date().toISOString().split('T')[0]);
    $("#valid_from,#valid_to").attr('min', new Date().toISOString().split('T')[0]);
    $('#coupon-expiry').change(({
        target
    }) => {
        target.checked ? $("#valid_to").attr('disabled', true) : $("#valid_to").attr('disabled', false)
    });

    $(".js-data-ajax").select2({
        ajax: {
            url: "http://localhost/products/search",
            dataType: "json",
            width: 'element',
            delay: 250,
            data: function(params) {
                // console.log(params)
                return {
                    term: params.term, // search term
                };
            },
            processResults: function(res, params) {
                return {
                    results: res.data
                };
            },
            cache: true
        },
        placeholder: "Search for a products to add",
        minimumInputLength: 1,
        templateResult: formatRepo,
        templateSelection: formatRepoSelection
    });

    function formatRepo(product) {
        if (product.loading) {
            return product.text;
        }

        var $container = $(
            `<li class="list-group-item border-bottom">
                <img width="40" height="40" class='rounded' src='${product.filepath} '>
                ${product.title}
            </li>`
        );

        return $container;
    }

    function formatRepoSelection(product) {
        return product.title;
    }

    $("#apply_to").change(({
        target
    }) => {
        const collName = $(`#collection_option`)
        const prodName = $(`#products_option`)
        target.value === 'specific_collection' ? collName.removeClass('d-none') : collName.addClass(
            'd-none');
        target.value === 'specific_products' ? prodName.removeClass('d-none') : prodName.addClass(
            'd-none');
    })
});


$(".select2").select2({
    tags: true,
    tokenSeparators: [',', ' '],
    placeholder: 'Select ...'

});

    const selected = $("[name='type']:checked").val();
    selected === 'free_shipping' ? $("#offer-container").addClass('d-none') : $("#offer-container").removeClass(
        'd-none');
    selected === 'buy_x_get_y' ? ($("#offer-container").removeClass('d-none'), $(".offer-container").addClass(
        'd-none'), $("#buy-x").removeClass('d-none')) : '';
    selected === 'discount' && ($(".offer-container").removeClass('d-none'), $("#buy-x").addClass('d-none'), $(
        '#price-adon').addClass('d-none'), $('#discount-group').removeClass('d-none'));
    selected === 'sale' && ($(".offer-container").removeClass('d-none'), $("#buy-x").addClass('d-none'), $(
        '#discount-group').addClass('d-none'), $('#price-adon').removeClass('d-none'));
$('[name="type"]').change(() => {
    const selected = $("[name='type']:checked").val();
    selected === 'free_shipping' ? $("#offer-container").addClass('d-none') : $("#offer-container").removeClass(
        'd-none');
    selected === 'buy_x_get_y' ? ($("#offer-container").removeClass('d-none'), $(".offer-container").addClass(
        'd-none'), $("#buy-x").removeClass('d-none')) : '';
    selected === 'discount' && ($(".offer-container").removeClass('d-none'), $("#buy-x").addClass('d-none'), $(
        '#price-adon').addClass('d-none'), $('#discount-group').removeClass('d-none'));
    selected === 'sale' && ($(".offer-container").removeClass('d-none'), $("#buy-x").addClass('d-none'), $(
        '#discount-group').addClass('d-none'), $('#price-adon').removeClass('d-none'));
})

// ajax post
$("form").submit(function(event) {
    event.preventDefault();
    console.log($(this).serializeArray())
    $(".form-text").remove();
    validate($(this).serializeArray(), errors => {
        if (!errors.length) {
            $.post($(this).attr("action"), $(this).serializeArray())
                .done(function(res) {
                    console.log(res)
                    res.errors ?
                        Object.entries(res.errors).map((error) => {
                            $(`#${error[0]}`).after(
                                `<small class="helper-text-danger">${error[1]}</small>`
                            )
                        }) :
                        Toastify({
                            text: res.message,
                            backgroundColor: "#228B22",
                        }).showToast();
                }).fail(function(err) {
                    Toastify({
                        text: "Error operation failed",
                        backgroundColor: "#FFA500",
                    }).showToast();
                });
        }
    })
});

</script>
