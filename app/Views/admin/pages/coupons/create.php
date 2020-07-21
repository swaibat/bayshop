<form action="<?= base_url('admin/coupons/create') ?>" enctype="multipart/form-data" novalidate="">
    <div class="modal-header border-0">
        <h6 class="modal-title position-absolute bg-primary text-white" id="mymodalLabel"><?= $page_title ?></h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body p-4">
        <div class="form-row btn-group-toggle w-100" data-toggle="buttons">
            <label class="btn btn-light btn-coupons flex-fill active">
                <input type="radio" name="type" id="sale" value="sale" checked>
                <ion-icon src="<?= base_url('assets/images/sale.svg')?>"></ion-icon>
                Sale Price
            </label>
            <label class="btn btn-light btn-coupons flex-fill">
                <input type="radio" name="type" id="discount" value="discount">
                <ion-icon src="<?= base_url('assets/images/discount.svg')?>"></ion-icon>
                discount
            </label>
            <label class="btn btn-light btn-coupons flex-fill ">
                <input type="radio" name="type" id="free_shipping" value="free_shipping">
                <ion-icon src="<?= base_url('assets/images/free.svg')?>"></ion-icon>
                Free shipping
            </label>
            <label class="btn btn-light btn-coupons flex-fill">
                <input type="radio" name="type" id="buy_x_get_y" value="buy_x_get_y">
                <ion-icon src="<?= base_url('assets/images/box.svg')?>"></ion-icon>
                Buy X get Y
            </label>

        </div>
        <hr>
        <div class="coupon-form form-row mt-3">
            <div class="form-group col-md-6">
                <label for="name">Coupon Name *</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="enter name" minlength="3" required>
            </div>
            <div class="form-group col-md-6">
                <label for="code">Coupon code *</label>
                <input type="text" class="form-control" name="code" id="code" minlength="3" placeholder="enter code" required>
            </div>
            <div class="form-group col-md-8">
                <label>coupon valid From - To</label>
                <div class="input-group mb-3">
                    <input type="date" name="valid-from" id="valid-from" class="form-control">
                    <input type="date" name="valid-to" id="valid-to" class="form-control" disabled>
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
                    <input type="text" name="offer" class="form-control" placeholder="enter your" min="1">
                    <div class="input-group-prepend d-none" id="discount-group">
                        <span class="input-group-text">%</span>
                    </div>
                </div>
                <div id="buy-x" class="input-group d-none">
                    <div class="input-group-prepend" id="price-adon">
                        <span class="input-group-text" >Buy</span>
                    </div>
                    <input type="number" name="buy_x_get_y[]" class="form-control" placeholder="2">
                    <div class="input-group-prepend">
                        <span class="input-group-text" >Get</span>
                    </div>
                    <input type="number" name="buy_x_get_y[]" class="form-control" placeholder="1">
                </div>
            </div>
            <div class="form-group col-md-4">
                <label for="apply_to">Apply coupon to *</label>
                <select name="apply_to" id="apply_to" class="form-group select2">
                    <option value=""></option>
                    <option value="all_products">All products</option>
                    <option value="specific_collection">Specific Collection</option>
                    <option value="specific_products">Specific products</option>
                </select>
            </div>
            <div id="collection_option" class="form-group col-md-4 d-none">
                <label for="apply_to_collection">Apply to specific collection</label>
                <select name="apply_to_collection[]" id="apply_to_collection" class="form-control select2" multiple>
                        <?php foreach ($collection as $collection):?>
                        <option value="<?= $collection['id'] ?>"><?= $collection['name'] ?></option>
                        <?php endforeach ?>
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
    $("#valid-from").val(new Date().toISOString().split('T')[0]);
    $("#valid-from,#valid-to").attr('min', new Date().toISOString().split('T')[0]);
    $('#coupon-expiry').change(({
        target
    }) => {
        target.checked ? $("#valid-to").attr('disabled', true) : $("#valid-to").attr('disabled', false)
    });

    $("#apply_on").change(({target})=>{
        const collName = $(`#collection_option`)
        target.value === 'specific_collection' ? collName.removeClass('d-none'):collName.addClass('d-none');
    })
});


$(".select2").select2({
    tags: true,
    tokenSeparators: [',', ' '],
    placeholder:'Select ...'

});

$('[name="type"]').change(() => {
    const selected = $("[name='type']:checked").val();
    selected === 'free_shipping' ? $("#offer-container").addClass('d-none') : $("#offer-container").removeClass('d-none');
    selected === 'buy_x_get_y' ? ($("#offer-container").removeClass('d-none'),$(".offer-container").addClass('d-none'), $("#buy-x").removeClass('d-none')): '';
    selected === 'discount' && ($(".offer-container").removeClass('d-none'),$("#buy-x").addClass('d-none'),$('#price-adon').addClass('d-none'),$('#discount-group').removeClass('d-none'));
    selected === 'sale' &&($(".offer-container").removeClass('d-none'),$("#buy-x").addClass('d-none'),$('#discount-group').addClass('d-none'),$('#price-adon').removeClass('d-none'));
})

// ajax post
$("form").submit(function(event) {
    event.preventDefault();
    console.log('hello')
    $(".form-text").remove();
    validate($(this).serializeArray(), errors => {
    if (!errors.length) {
      $.post($(this).attr("action"),$(this).serializeArray())
      .done(function (res) {
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
      }).fail(function (err) {
        Toastify({
          text: "Error operation failed",
          backgroundColor: "#FFA500",
        }).showToast();
      });
    }
  })
});   


</script>
