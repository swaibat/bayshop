<div class="w-100">
    <div class="row">
        <div class="col-md-12 mt-n5">
            <div id="tableID" class="table-list-container">
                <div class="d-flex justify-content-end align-items-start mb-3">
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
                    <div class="row">
                        <div class="col-md-6">
                            <form id='short-form' action="<?= base_url('admin/collection/create') ?>" method="post"
                                enctype="multipart/form-data" accept-charset="utf-8" novalidate="">
                                <div class="card-header">
                                    <h6 class="card-title text-capitalize">Add New Collection</h6>
                                </div>
                                <div class="form-row modal-body p-4">
                                    <div class="form-group col-md-12">
                                        <label for="name">Collection Name</label>
                                        <input type="text" class="form-control" name="name" id="name"
                                            placeholder="eg. new arrival" minlength="3">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="products">Add products to collection</label>
                                        <select name="products" class="form-control js-example-data-ajax" multiple>
                                            <option></option>
                                        </select>
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <label id="img-label" for="image"
                                            class="input-group img-label mb-3 mt-3 py-3 d-flex align-items-center border-dashed d-flex justify-content-center">
                                            <div class="p-2 d-flex flex-column text">
                                                <img height="45" alt=""
                                                    src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMjYuODc1IiBoZWlnaHQ9Ijg0Ljg3NSIgdmlld0JveD0iMCAwIDEyNi44NzUgODQuODc1Ij4KICA8ZyBpZD0iR3JvdXBfOCIgZGF0YS1uYW1lPSJHcm91cCA4IiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtODgyIC01MjIpIj4KICAgIDxnIGlkPSJHcm91cF83IiBkYXRhLW5hbWU9Ikdyb3VwIDciPgogICAgICA8ZyBpZD0iR3JvdXBfNiIgZGF0YS1uYW1lPSJHcm91cCA2Ij4KICAgICAgICA8ZyBpZD0iR3JvdXBfNSIgZGF0YS1uYW1lPSJHcm91cCA1Ij4KICAgICAgICAgIDxnIGlkPSJHcm91cF80IiBkYXRhLW5hbWU9Ikdyb3VwIDQiPgogICAgICAgICAgICA8ZyBpZD0iUmVjdGFuZ2xlXzMiIGRhdGEtbmFtZT0iUmVjdGFuZ2xlIDMiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDg4MiA1MzcpIiBmaWxsPSJub25lIiBzdHJva2U9IiNlM2UzZTMiIHN0cm9rZS13aWR0aD0iMSIgc3Ryb2tlLWRhc2hhcnJheT0iMSAyIj4KICAgICAgICAgICAgICA8cmVjdCB3aWR0aD0iODYiIGhlaWdodD0iNjAiIHN0cm9rZT0ibm9uZSIvPgogICAgICAgICAgICAgIDxyZWN0IHg9IjAuNSIgeT0iMC41IiB3aWR0aD0iODUiIGhlaWdodD0iNTkiIGZpbGw9Im5vbmUiLz4KICAgICAgICAgICAgPC9nPgogICAgICAgICAgICA8cmVjdCBpZD0iUmVjdGFuZ2xlXzEiIGRhdGEtbmFtZT0iUmVjdGFuZ2xlIDEiIHdpZHRoPSI5NyIgaGVpZ2h0PSI2MiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoODk0IDUyMikiIGZpbGw9IiNmN2Y3ZjciLz4KICAgICAgICAgICAgPGVsbGlwc2UgaWQ9IkVsbGlwc2VfMSIgZGF0YS1uYW1lPSJFbGxpcHNlIDEiIGN4PSIxMi41IiBjeT0iMTIiIHJ4PSIxMi41IiByeT0iMTIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDkxOCA1MjcpIiBmaWxsPSIjZTNlM2UzIi8+CiAgICAgICAgICAgIDxyZWN0IGlkPSJSZWN0YW5nbGVfMiIgZGF0YS1uYW1lPSJSZWN0YW5nbGUgMiIgd2lkdGg9IjI1IiBoZWlnaHQ9IjI5IiB0cmFuc2Zvcm09Im1hdHJpeCgxLCAtMC4wMTcsIDAuMDE3LCAxLCA5MjkuNzQ5LCA1NDAuMjI5KSIgZmlsbD0iI2ZmZiIvPgogICAgICAgICAgICA8cGF0aCBpZD0iUG9seWdvbl8xIiBkYXRhLW5hbWU9IlBvbHlnb24gMSIgZD0iTTExLDAsMjIsMTZIMFoiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDk0NiA1NTMpIiBmaWxsPSIjZTNlM2UzIi8+CiAgICAgICAgICAgIDxwYXRoIGlkPSJJY29uX2F3ZXNvbWUtYXJyb3ctY2lyY2xlLXVwIiBkYXRhLW5hbWU9Ikljb24gYXdlc29tZS1hcnJvdy1jaXJjbGUtdXAiIGQ9Ik0uNTYzLDE4QTE3LjQzOCwxNy40MzgsMCwxLDEsMTgsMzUuNDM4LDE3LjQzNCwxNy40MzQsMCwwLDEsLjU2MywxOFptMTAuMSwyLjAzMiw1LjA5MS01LjMwOVYyNy41NjNhMS42ODMsMS42ODMsMCwwLDAsMS42ODgsMS42ODhoMS4xMjVhMS42ODMsMS42ODMsMCwwLDAsMS42ODgtMS42ODdWMTQuNzIzbDUuMDkxLDUuMzA5YTEuNjg5LDEuNjg5LDAsMCwwLDIuNDEyLjAyOGwuNzY2LS43NzNhMS42ODEsMS42ODEsMCwwLDAsMC0yLjM4NEwxOS4yLDcuNTczYTEuNjgxLDEuNjgxLDAsMCwwLTIuMzg0LDBMNy40NzQsMTYuOWExLjY4MSwxLjY4MSwwLDAsMCwwLDIuMzg0bC43NjYuNzczQTEuNywxLjcsMCwwLDAsMTAuNjU5LDIwLjAzMloiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDk3My40MzggNTcxLjQzOCkiIGZpbGw9IiNlM2UzZTMiLz4KICAgICAgICAgICAgPGcgaWQ9Ikdyb3VwXzMiIGRhdGEtbmFtZT0iR3JvdXAgMyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTAuMDA5KSI+CiAgICAgICAgICAgICAgPGcgaWQ9Ikdyb3VwXzIiIGRhdGEtbmFtZT0iR3JvdXAgMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoOTA1LjUgNTc0LjUpIj4KICAgICAgICAgICAgICAgIDxnIGlkPSJHcm91cF8xIiBkYXRhLW5hbWU9Ikdyb3VwIDEiPgogICAgICAgICAgICAgICAgICA8bGluZSBpZD0iTGluZV8xIiBkYXRhLW5hbWU9IkxpbmUgMSIgeDI9IjU1IiBmaWxsPSJub25lIiBzdHJva2U9IiNlM2UzZTMiIHN0cm9rZS13aWR0aD0iMSIvPgogICAgICAgICAgICAgICAgICA8bGluZSBpZD0iTGluZV8zIiBkYXRhLW5hbWU9IkxpbmUgMyIgeDI9IjEyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg1OC4wMDkpIiBmaWxsPSJub25lIiBzdHJva2U9IiNlM2UzZTMiIHN0cm9rZS13aWR0aD0iMSIvPgogICAgICAgICAgICAgICAgICA8bGluZSBpZD0iTGluZV80IiBkYXRhLW5hbWU9IkxpbmUgNCIgeDI9IjQ0IiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgwIDMpIiBmaWxsPSJub25lIiBzdHJva2U9IiNlM2UzZTMiIHN0cm9rZS13aWR0aD0iMSIvPgogICAgICAgICAgICAgICAgICA8bGluZSBpZD0iTGluZV81IiBkYXRhLW5hbWU9IkxpbmUgNSIgeDI9IjE3IiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg0OS4wMDkgNCkiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2UzZTNlMyIgc3Ryb2tlLXdpZHRoPSIxIi8+CiAgICAgICAgICAgICAgICA8L2c+CiAgICAgICAgICAgICAgPC9nPgogICAgICAgICAgICA8L2c+CiAgICAgICAgICA8L2c+CiAgICAgICAgPC9nPgogICAgICA8L2c+CiAgICA8L2c+CiAgPC9nPgo8L3N2Zz4K" />
                                                <span>
                                                    <span for="image" className="btn btn-sm btn-outline-primary">
                                                        Upload category Icon
                                                    </span>
                                                    <input type="file" name="image" id="image" class="d-none"
                                                        accept="image/*" />
                                                </span>
                                            </div>
                                        </label>

                                        <div class="rounded d-none" id="image-holder">
                                            <span class="btn position-absolute">H</span>
                                        </div>

                                    </div>

                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary btn-sm">Save</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header"><?= $page_title ?></div>
                                <div class="card-body">
                                    <table class="table table-list w-100 table-hover" data-currentpage="1"
                                        style="height:268px;">
                                        <thead>
                                            <th>collection Name</th>
                                            <th>Products In</th>
                                            <th class="text-right">Operations</th>
                                        </thead>

                                        <!-- IMPORTANT, class="list" must be on tbody -->
                                        <tbody class="list">
                                            <?php foreach ($collection as $collection) {?>
                                            <tr>
                                                <td class="jSortName">
                                                    <span class="cat-icon text-center">
                                                        <ion-icon name="car-sport"></ion-icon>
                                                    </span>
                                                    <?= $collection['name']?>
                                                </td>
                                                <td>
                                                    <span class="badge badge-pill border">3</span>
                                                </td>
                                                <td class="text-right">
                                                    <div class="btn-group btn-group-sm">
                                                        <button class="btn" data-toggle="modal" data-target="#mymodal"
                                                            data-modal=""
                                                            data-id="<?= base_url() . '/admin/collection/' . $collection['id'] . '/update'?>"
                                                            id="menu">
                                                            <i class="fas fa-edit ml-2"></i>
                                                        </button>
                                                        <button data-toggle="modal" data-target="#delmodal"
                                                            name="collection" id="<?= $collection['id'] ?>"
                                                            class="btn border-left delete" data-toggle="modal"
                                                            data-target="#exampleModal">
                                                            <i class="fas fa-trash ml-2"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.12/js/select2.min.js'></script>
<?= script_tag('assets/admin/plugins/listJs/list.min.js'); ?>
<script>
$(document).ready(function() {
    $(".js-example-data-ajax").select2({
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
                // parse the results into the format expected by Select2
                // since we are using custom formatting functions we do not need to
                // alter the remote JSON res, except to indicate that infinite
                // scrolling can be used
                // console.log(res);
                return {
                    results: res.data,
                };
            },
            cache: true
        },
        placeholder: "Search for a products",
        minimumInputLength: 1,
        templateResult: formatRepo,
        templateSelection: formatRepoSelection
    });

    function formatRepo(product) {
        console.log(product);
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
});

$("#short-form").submit(function(event) {
    event.preventDefault();
    const formData = new FormData($(this)[0]);
    $(".form-text").remove();
    validate($(this).serializeArray(), errors => {
        if (!errors.length) {
            $.ajax({
                    type: "POST",
                    enctype: "multipart/form-data",
                    url: $(this).attr("action"),
                    data: formData,
                    processData: false,
                    contentType: false,
                })
                .done(function(res) {
                    $('input').val('');
                    res.errors ?
                        Object.entries(res.errors).map((error) => {
                            $(`#${error[0]}`).after(
                                `<small class="helper-text-danger">${error[1]}</small>`
                            )
                        }) :
                        $(addToTable('colection', res.data)).appendTo('.list');
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
