<div class="card border-0 shadow-xs p-3 w-100">
    <div class="row">
        <div class="col-sm-12 mt-n3">
            <button data-toggle="modal" data-target="#mymodal" data-modal=''
                data-id="<?= base_url('admin/categories/create'); ?>" id="menu" class="btn btn-sm btn-primary mb-n5">
                Add Category
            </button>
            <table id="example" class="table table-hover mt-5">
                <thead>
                    <th></th>
                    <th></th>
                    <th></th>
                </thead>

                <tbody>
                    <?php foreach ($categories as $category) {?>
                    <tr>
                        <td>
                            <?= $category['name'] ?>
                        </td>
                        <td><span
                                class="badge badge-pill border"><?= $category['sub'] ? count($category['sub']) : '0' ?></span>
                        </td>
                        <td class="text-right">
                            <div class="btn-group btn-group-sm">
                                <button class="btn" data-toggle="collapse"
                                    data-target="#accordion-<?=$category['id']?>">
                                    Sub <span
                                        class="badge badge-pill border"><?= $category['sub'] ? count($category['sub']) : '0' ?></span>
                                    <i class="fas fa-chevron-circle-down ml-2"></i>
                                </button>
                                <button class="btn" data-toggle="modal" data-target="#mymodal" data-modal=""
                                    data-id="<?= base_url() . '/admin/categories/' . $category['id'] . '/update'?>"
                                    id="menu">
                                    Edit <i class="fas fa-edit ml-2"></i>
                                </button>

                                <!-- <button class="btn">
                                    Delete <i class="fas fa-trash ml-2"></i>
                                </button> -->
                                <button data-toggle="modal" data-target="#delmodal" name="categories"
                                    id="<?= $category['id'] ?>" class="btn btn-primary delete" data-toggle="modal"
                                    data-target="#exampleModal">
                                    Delete <i class="fas fa-trash ml-2"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="p-0" colspan="3">
                            <div id="accordion-<?= $category['id'] ?>" class="collapse bg-light p-2">
                                <div class="form-group bg-white p-2 rounded">
                                    <form action="<?= base_url('admin/categories/create'); ?>" class="d-flex" id="add-sub">
                                        <input type="hidden" name="parentid" value="<?= $category['id'] ?>">
                                        <input type="text" name="name" id="name" class="form-control">
                                        <button class="btn" type="submit"><i class="fas fa-plus"></i></button>
                                    </form>
                                </div>

                                <div class="p-3 bg-white rounded">
                                <?php if ($category['sub']){ ?>
                                    <ul class="list-group list-group-flush" id="<?= $category['id'] ?>">
                                        <?php foreach ($category['sub'] as $key => $value){?>
                                        <li class="list-group-item px-0 d-flex justify-content-between"
                                            id="<?=$value['name']?>">
                                            <span id="input-<?=$value['id']?>" ><?=$value['name']?></span>
                                            <div class="btn-group btn-group-sm ml-2">
                                                <button class="btn" data-toggle="modal" data-target="#mymodal"
                                                    data-modal=""
                                                    data-id="<?= base_url() . '/admin/categories/' . $value['id'] . '/update'?>"
                                                    id="menu">
                                                    <i id="edit-sub-<?=$value['id']?>" class="fas fa-edit edit-sub"></i>
                                                </button>
                                                <button data-toggle="modal" data-target="#delmodal" name="categories"
                                                    id="<?=$value['id']?>" class="btn delete" data-toggle="modal"
                                                    data-target="#exampleModal">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </div>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                    <?php } ?>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
// $(".edit-sub").click((e)=>{
//     const input = $(`#input-${e.currentTarget.id.split('-')[2]}`);
//     $(e.currentTarget).toggleClass('fa-edit').toggleClass('fa-check');
//     input.attr('disabled')?input.attr('disabled', false):input.attr('disabled', true);
// })
$("#add-sub,#form").submit(function(event) {
    event.preventDefault();
    $(".form-text").remove();
    validate($(this).serializeArray(), errors => {
    if (!errors.length) {
      $.post($(this).attr("action"),$(this).serializeArray())
      .done(function (res) {
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
          $('.list-group-item:first').clone().attr('id', res.data.name).text(res.data.name).appendTo('ul')
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
