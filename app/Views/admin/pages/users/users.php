<div class="w-100">
    <div class="row">
        <div class="col-sm-12 mt-n5">
            <div id="tableID" class="table-list-container">
                <div class="d-flex justify-content-end align-items-start mb-3">
                    <button data-toggle="modal" data-target="#mymodal" data-modal='modal-lg'
                        data-id="<?= base_url('admin/users/create'); ?>" id="menu" class="btn btn-sm btn-primary">
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
                    <table class="table table-list w-100 table-hover mt-2 category p-3 bg-white" data-currentpage="1"
                        style="height:268px;">
                        <thead>
                            <th>Username</th>
                            <th>Email</th>
                            <th>role</th>
                            <th class="text-right">Operations</th>
                        </thead>

                        <!-- IMPORTANT, class="list" must be on tbody -->
                        <tbody class="list">
                            <?php foreach ($users as $users) {?>
                            <tr>
                                <td class="jSortName">
                                    <span class="cat-icon text-center">
                                        <ion-icon name="car-sport"></ion-icon>
                                    </span><?= $users['username'] ?>
                                </td>
                                <td>
                                    </span><?= $users['email'] ?>
                                </td>
                                <td>
                                    </span><?= $users['role'] ?>
                                </td>
                                <td class="text-right">
                                    <div class="btn-group btn-group-sm">
                                        <button class="btn" data-toggle="modal" data-target="#mymodal" data-modal=""
                                            data-id="<?= base_url() . '/admin/users/' . $users['id'] . '/update'?>"
                                            id="menu">
                                            <i class="fas fa-edit ml-2"></i>
                                        </button>
                                        <button data-toggle="modal" data-target="#delmodal" name="users"
                                            id="<?= $users['id'] ?>" class="btn delete" data-toggle="modal"
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

<?= script_tag('assets/plugins/listJs/list.min.js'); ?>
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
    page: 7,
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

<script>
$(document).on("click", "#menu", function(e) {
    e.preventDefault();
    $(".modal-dialog").addClass($(this).data("modal"));
    var url = $(this).data("id"); // it will get action url
    $("#dynamic-content").html(""); // leave it blank before ajax call
    $("#modal-loader").show(); // load ajax loader
    $.ajax({
            url: url,
            type: "POST",
            dataType: "html",
        })
        .done(function(data) {
            $("#dynamic-content").html("");
            $("#dynamic-content").html(data); // load response
            $("#modal-loader").hide(); // hide ajax loader
        })
        .fail(function() {
            $("#modal-loader").hide();
        });
});
</script>
