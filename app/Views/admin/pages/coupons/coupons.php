<div class="w-100">
    <div class="row">
        <div class="col-sm-12 mt-n5">
            <div id="tableID" class="table-list-container">
                <div class="d-flex justify-content-end align-items-start mb-3">
                <button data-toggle="modal" data-target="#mymodal" data-modal='modal-lg'
                        data-id="<?= base_url('admin/coupons/create'); ?>" id="menu"
                        class="btn btn-sm btn-primary">
                        <i class="fas fa-plus"></i>
                    </button>
                    <div class="table-search ml-3">
                        <input class="search form-control form-control-sm" placeholder="Search">
                    </div>
                    <div class="btn-group btn-group-sm ml-3">
                        <button type="button" class="btn btn-outline-secondary jPaginateBack">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <ul class="btn mb-0 pagination"></ul>
                        <button type="button" class="btn btn-outline-secondary jPaginateNext">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>
                </div>
                <div class="card dool-card p-3">
                    <table class="table table-list w-100 table-hover mt-2 category p-3 bg-white" data-currentpage="1">
                        <thead>
                            <th>Type</th>
                            <th>Name</th>
                            <th>Code</th>
                            <th>valid from</th>
                            <th>valid to</th>
                            <th class="text-right">Operations</th>
                        </thead>

                        <!-- IMPORTANT, class="list" must be on tbody -->
                        <tbody class="list">
                            <?php foreach ($coupons as $coupon) {?>
                            <tr id="row_<?= $coupon['id'] ?>">
                                <td class="jSortName">
                                    <span class="cat-icon text-center">
                                        <ion-icon src="<?= base_url('assets/images/'.$coupon['type'].'.svg');?> "></ion-icon>
                                    </span><?= $coupon['type'] ?>
                                </td>
                                <td class="jSortName">
                                    <?= $coupon['name'] ?>
                                </td>
                                <td class="jSortName">
                                    <b class="text-uppercase"><?= $coupon['code'] ?></b>
                                </td>
                                <td class="jSortName">
                                    <?= $coupon['valid_from'] ?>
                                </td>
                                <td class="jSortName">
                                    <?= $coupon['valid_to']?$coupon['valid_to']:'No Expiry' ?>
                                </td>
                                <td class="text-right">
                                    <div class="btn-group btn-group-sm">
                                        <button class="btn" data-toggle="modal" data-target="#mymodal" data-modal="modal-lg"
                                            data-id="<?= base_url() . '/admin/coupons/' . $coupon['id'] . '/update'?>"
                                            id="menu">
                                            <i class="fas fa-edit ml-2"></i>
                                        </button>
                                        <button data-toggle="modal" data-target="#delmodal" name="coupons"
                                            id="<?= $coupon['id'] ?>" class="btn delete"
                                            data-toggle="modal" data-target="#exampleModal">
                                            <i class="fas fa-trash ml-2"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            <!-- <tr height="0">
                                <td class="p-0" colspan="3">
                                    <div id="accordion-<?= $coupon['id'] ?>" class="collapse bg-light p-2">
                                        <div class="form-group bg-white p-2 rounded">
                                            <form action="<?= base_url('admin/categories/create'); ?>" class="d-flex"
                                                id="add-sub">
                                                <input type="hidden" name="parentid" value="<?= $coupon['id'] ?>">
                                                <input type="text" name="name" id="name" class="form-control"
                                                    placeholder="add a new subcategory to <?= $coupon['name'] ?> ">
                                                <button class="btn" type="submit"><i class="fas fa-plus"></i></button>
                                            </form>
                                        </div>

                                        <div class="p-3 bg-white rounded">
                                            <?php if ($coupon['sub']){ ?>
                                            <ul class="list-group list-group-flush" id="<?= $coupon['id'] ?>">
                                                <?php foreach ($coupon['sub'] as $key => $value){?>
                                                <li class="list-group-item px-0 d-flex justify-content-between"
                                                    id="<?=$value['name']?>">
                                                    <span id="input-<?=$value['id']?>"
                                                        class="jSortName"><?=$value['name']?></span>
                                                    <div class="btn-group btn-group-sm ml-2">
                                                        <button class="btn" data-toggle="modal" data-target="#mymodal"
                                                            data-modal=""
                                                            data-id="<?= base_url() . '/admin/categories/' . $value['id'] . '/update'?>"
                                                            id="menu">
                                                            <i id="edit-sub-<?=$value['id']?>"
                                                                class="fas fa-edit edit-sub"></i>
                                                        </button>
                                                        <button data-toggle="modal" data-target="#delmodal"
                                                            name="categories" id="<?=$value['id']?>" class="btn delete"
                                                            data-toggle="modal" data-target="#exampleModal">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <?php } ?>
                                            </ul>
                                            <?php }else{ ?>
                                            <div class="d-flex justify-content-around">
                                                <div class="text-center">
                                                    <img width="100" height="100"
                                                        src="<?= base_url('assets/icons/svg/021-delivery box.svg')?>"
                                                        alt="">
                                                    <h4>Ooops Not Found</h4>
                                                    <p>No subcategories for this category, add One</p>
                                                </div>
                                            </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </td>
                            </tr> -->
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?= script_tag('https://cdnjs.cloudflare.com/ajax/libs/list.js/1.5.0/list.min.js'); ?>
<script>
// $(".edit-sub").click((e)=>{
//     const input = $(`#input-${e.currentTarget.id.split('-')[2]}`);
//     $(e.currentTarget).toggleClass('fa-edit').toggleClass('fa-check');
//     input.attr('disabled')?input.attr('disabled', false):input.attr('disabled', true);
// })
/* List.js is required to make this table work. */

var options = {
    valueNames: [{
        data: ['timestamp']
    }, {
        data: ['status']
    }, 'jSortNumber', 'jSortName', 'jSortTotal'],
    page: 6,
    pagination: {
        innerWindow: 1,
        left: 0,
        right: 0,
        paginationClass: "pagination",
    }
};

var tableList = new List('tableID', options);

$('.jPaginateNext').on('click', function() {
    var list = $('.pagination').find('li');
    $.each(list, function(position, element) {
        if ($(element).is('.active')) {
            $(list[position + 1]).trigger('click');
        }
    })
});


$('.jPaginateBack').on('click', function() {
    var list = $('.pagination').find('li');
    $.each(list, function(position, element) {
        if ($(element).is('.active')) {
            $(list[position - 1]).trigger('click');
        }
    })
});



$("#add-sub,#form").submit(function(event) {
    event.preventDefault();
    $(".form-text").remove();
    validate($(this).serializeArray(), errors => {
        if (!errors.length) {
            $.post($(this).attr("action"), $(this).serializeArray())
                .done(function(res) {
                    $('input').val('');
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
                    $('.list-group-item:first').clone().attr('id', res.data.name).text(res.data
                        .name).appendTo('ul')
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
