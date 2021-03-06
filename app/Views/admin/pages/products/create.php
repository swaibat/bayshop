<form id="form" class="" method="post" action="<?= base_url('admin/products/create'); ?>" novalidate="">
    <nav id='action-nav' class="d-flex justify-content-between align-items-center mb-2 mt-n5 ">
        <div class="d-flex ml-auto mb-1 ">
            <button class="btn btn-light">
                Cancel
            </button>
            <button id="submit" type="submit" class="btn btn-light ml-3 px-4">
                save
            </button> 
        </div>
    </nav>
    <div class="row">
        <div class="col-md-8">
            <!-- media upload card -->
            <div class="card dool-card">
                <div class="card-header">
                    media upload
                </div>
                <div class="card-body">
                    <div id="display-btns" class="row">
                        <div class="col-6">
                            <label id='img-upload-label' class='btn bg-light d-flex justify-content-around' for="pro-image">
                                <span class="mr-2">
                                    <svg class="bi bi-image" width="4em" height="4em" viewBox="0 0 16 16"
                                        fill="rgb(174, 174, 248)" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M14.002 2h-12a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1zm-12-1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12z" />
                                        <path
                                            d="M10.648 7.646a.5.5 0 0 1 .577-.093L15.002 9.5V14h-14v-2l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71z" />
                                        <path fill-rule="evenodd" d="M4.502 7a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                    </svg>
                                    <h4 class="font-weight-light">Add Images</h4>
                                </span>
                            </label>
                            <input type="file" maxlength="10" id="pro-image" name="images[]" style="display: none;"
                                multiple>
                        </div>
                        <div class="col-6">
                            <label id='video-upload-label' class='btn bg-light d-flex justify-content-around' for="pro-image">
                                <span class="mr-2">
                                    <svg class="bi bi-camera-video" width="4em" height="4em" viewBox="0 0 16 16"
                                        fill="rgb(174, 174, 248)" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M2.667 3.5c-.645 0-1.167.522-1.167 1.167v6.666c0 .645.522 1.167 1.167 1.167h6.666c.645 0 1.167-.522 1.167-1.167V4.667c0-.645-.522-1.167-1.167-1.167H2.667zM.5 4.667C.5 3.47 1.47 2.5 2.667 2.5h6.666c1.197 0 2.167.97 2.167 2.167v6.666c0 1.197-.97 2.167-2.167 2.167H2.667A2.167 2.167 0 0 1 .5 11.333V4.667z" />
                                        <path fill-rule="evenodd"
                                            d="M11.25 5.65l2.768-1.605a.318.318 0 0 1 .482.263v7.384c0 .228-.26.393-.482.264l-2.767-1.605-.502.865 2.767 1.605c.859.498 1.984-.095 1.984-1.129V4.308c0-1.033-1.125-1.626-1.984-1.128L10.75 4.785l.502.865z" />
                                    </svg>
                                    <h4 class="font-weight-light">Add Video</h4>
                                </span>
                            </label>
                        </div>
                    </div>
                    <div id="img-preview" class="preview-images-zone col-12 d-none rounded">
                        <label id="add-btn" class="btn p-2 btn-add-img bg-light" for="pro-image">
                            <div class="add-btn image-zone p-2 w-100 h-100">
                                <svg class="bi bi-plus" width="3em" height="3em" viewBox="0 0 16 16"
                                    fill="rgb(174, 174, 248)" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z" />
                                    <path fill-rule="evenodd"
                                        d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z" />
                                </svg>
                            </div>
                        </label>
                    </div>
                </div>
            </div>
            <!-- Basic info -->
            <div class="card dool-card">
                <div class="card-header">
                    Basic Info
                </div>
                <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label for="title">title *</label>
                                <input type="text" class="form-control" name="title" id="title" placeholder="add product title" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="ribbon">Ribbon</label>
                                <input type="text" class="form-control" name="ribbon" id="ribbon" placeholder="eg. new arrival" minlength="3">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="price">Price *</label>
                                <div id="price" class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">USD</span>
                                    </div>
                                    <input type="text" name="price" class="form-control" placeholder="100" min="3" required>
                                </div>
                            </div>
                            <div class="form-group col-md-5">
                                <label for="inputPassword4">Discount</label>
                                <div id="discount" class="input-group ">
                                    <input type="text" name="discount" class="form-control"
                                        placeholder="enter discount">
                                    <div class="input-group-append">
                                        <div class="dool-group-text input-group-text d-fex">
                                            <div class="btn-group btn-group-sm btn-group-toggle" data-toggle="buttons">
                                                <label class="btn active">
                                                    <input type="radio" name="discount_type" id="option1" value="percentage" checked> %
                                                </label>
                                                <label class="btn">
                                                    <input type="radio" name="discount_type" id="option2" value='price' min="1" >
                                                    USD
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-12">
                                <label for="inputPassword4">Description</label>
                                <textarea class="summernote-simple form-control rounded" name="description"></textarea>
                            </div>
                        </div>
                </div>
            </div>
            <!-- product variables -->
            <div class="card dool-card">
                <div class="card-header">
                    <h6>Product Options/Variables</h6>
                    <div class="custom-control custom-switch justify-content-start">
                        <input type="checkbox" class="custom-control-input" id="enable-variable">
                        <label class="custom-control-label" for="enable-variable" data-toggle="collapse" href="#collapseVariables" role="button" aria-expanded="false" aria-controls="collapseVariables">This product has variables like <b>Material, colors, materials</b></label>
                    </div>
                </div>
                <div class="collapse" id="collapseVariables">
                <div class="card-body d-flex flex-column">
                    <div class="custom-control custom-switch justify-content-start my-3">
                        <input type="checkbox" class="custom-control-input" id="size">
                        <label class="custom-control-label" for="size" data-toggle="collapse" href="#size" role="button" aria-expanded="false" aria-controls="size">Sizes</label>
                    </div>
                    <div id="size" class="collapse">
                        <select class="form-control select2" name="sizes[]" multiple="multiple">
                            <option>S</option>
                            <option>M</option>
                            <option>L</option>
                            <option>XL</option>
                            <option>XXL</option>
                            <option>3XL</option>
                        </select>
                    </div>
                    <div class="custom-control custom-switch justify-content-start my-3">
                        <input type="checkbox" class="custom-control-input"
                            id="material">
                        <label class="custom-control-label" for="material"  data-toggle="collapse" href="#material" role="button" aria-expanded="false" aria-controls="material">Material</label>
                    </div>
                    <div id="material" class="collapse material">
                        <select class="form-control select2" name="materials[]" multiple="multiple">
                            <option>silk</option>
                            <option>leather</option>
                        </select>
                    </div>
                    <div class="custom-control custom-switch justify-content-start my-3">
                        <input type="checkbox" class="custom-control-input" id="color">
                        <label class="custom-control-label" for="color"  data-toggle="collapse" href="#color" role="button" aria-expanded="false" aria-controls="color">colors </label>
                    </div>
                    <div id="color"  class="collapse color">
                        <div class="form-group mt-3">
                            <select class="form-control select2" name="colors[]" multiple="multiple">
                                <option>orange</option>
                                <option>white</option>
                                <option>purple</option>
                                <option>greeb</option>
                                <option>yellow</option>
                                <option >red</option>
                            </select>
                        </div>

                    </div>
                    </div>
                </div>
            </div>
            <div class="card dool-card">
                <div class="card-header">
                    <h6>Tracking</h6>
                    <div class="custom-control custom-switch justify-content-start">
                        <input type="checkbox" class="custom-control-input" id="enable-tracking">
                        <label class="custom-control-label" for="enable-tracking" data-toggle="collapse" href="#collapse-tracking" role="button" aria-expanded="false" aria-controls="collapse-tracking">Enable product Tracking</label>
                    </div>
                </div>
                <div class="collapse" id="collapse-tracking">
                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="name">Status</label>
                            <select name="status" id="status" class="custom-select form-control">
                                <option value="In stock">In stock</option>
                                <option value="Out of stock">Out of stock</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="SKU">SKU</label>
                                <input type="text" name="sku" id='sku' class="form-control" placeholder="enter SKU">     
                        </div>
                        <div class="form-group col-md-4">
                            <label for="weight">Weight</label>
                            <div class="input-group" id="weight">
                                <input type="text" class="form-control" name="weight" placeholder="0.0">
                                <div class="input-group-append">
                                    <span class="input-group-text" id="basic-addon2">kg</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card dool-card ">
                <div class="card-header">
                    <h6>
                        Category
                    </h6>
                </div>
                <div class=" card-body form-group">
                    <div class="form-group">
                        <label for="category_id">Select Category *</label>
                        <select name="category_id" id="category_id" class="custom-select" required>
                        <option value="">Select . . . </option>
                            <?php foreach ($categories as $category):?>
                            <?php if ($category['sub']):?>
                            <optgroup label="<?=$category['name']?>">
                                <?php foreach ($category['sub'] as $key => $value):?>
                                <option value="<?=$value['id']?>"><?=$value['name']?></option>
                                <?php endforeach; ?>
                            </optgroup>
                            <?php else: ?>
                            <option value="<?=$category['id']?>"><?=$category['name']?></option>
                            <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
            </div>

            <div class="card dool-card">
                <div class="card-header">
                    <h6>Collection</h6>
                </div>
                <ul class="card-body" id="collection">
                    <?php foreach ($collection as $collection):?>
                    <li  class="py-2 collection-prev">
                        <div class="custom-control custom-checkbox d-flex align-items-center">
                            <input name="collection_id[]" type="checkbox" class="collection custom-control-input"
                                value="<?=$collection['id']?>" id="<?=$collection['id']?>">
                            <label class="custom-control-label"
                                for="<?=$collection['id']?>"><?=$collection['name']?></label>
                        </div>
                    </li>
                    <?php endforeach ?>
                    <li class="pt-3 add-collection-field d-none">
                        <div id="discount" class="input-group ">
                            <input type="text" id="collection_name" class="form-control rounded" placeholder="enter collection name">
                            <div class="input-group-append">
                                <div class="input-group-text d-fex justify-content-between bg-white border-0 p-0">
                                    <span class="btn btn-sm btn-primary mx-3"  onclick="saveCollection()"><ion-icon name="checkmark-outline"></ion-icon> </span>
                                    <span id="discard-collection" class="btn btn-sm btn-outline-primary"><ion-icon name="close-outline"></ion-icon></span>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="card-footer">
                    <button class=' btn btn-sm btn-outline-primary' id='add-collection'>Add new Collection</button>
                </div>
            </div>

            <div class="card dool-card ">
                <div class="card-header">
                    <h6>
                        Others
                    </h6>
                </div>
                <ul class="card-body list-group px-0 pt-0">
                    <li class="list-group-item border-0 cursor-pointer">
                        <span class="icon-lg mr-2">
                            <ion-icon name="gift-outline"></ion-icon>
                        </span>

                        <span data-toggle="modal" data-target="#mymodal" data-modal='modal-lg' class='cursor-pointer'
                            data-id="<?= base_url('admin/coupon/create'); ?>" id="menu">
                            Create Coupon
                        </span>
                    </li>
                    <li class="list-group-item border-0 cursor-pointer">
                        <svg class="bi bi-reply-all mr-2" width="1.5em" height="1.5em" viewBox="0 0 16 16"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M8.002 5.013a.144.144 0 0 0-.202.134V6.3a.5.5 0 0 1-.5.5c-.667 0-2.013.005-3.3.822-.984.624-1.99 1.76-2.595 3.876C2.425 10.515 3.59 9.982 4.61 9.7a8.741 8.741 0 0 1 1.921-.306 7.403 7.403 0 0 1 .798.008h.013l.005.001h.001L7.3 9.9l.05-.498a.5.5 0 0 1 .45.498v1.153c0 .108.11.176.202.134l3.984-2.933a.494.494 0 0 1 .042-.028.147.147 0 0 0 0-.252.494.494 0 0 1-.042-.028L8.002 5.013zM6.8 10.386a7.745 7.745 0 0 0-1.923.277c-1.326.368-2.896 1.201-3.94 3.08a.5.5 0 0 1-.933-.305c.464-3.71 1.886-5.662 3.46-6.66 1.245-.79 2.527-.942 3.336-.971v-.66a1.144 1.144 0 0 1 1.767-.96l3.994 2.94a1.147 1.147 0 0 1 0 1.946l-3.994 2.94a1.144 1.144 0 0 1-1.767-.96v-.667z" />
                            <path fill-rule="evenodd"
                                d="M10.868 4.293a.5.5 0 0 1 .7-.106l3.993 2.94a1.147 1.147 0 0 1 0 1.946l-3.994 2.94a.5.5 0 0 1-.593-.805l4.012-2.954a.493.493 0 0 1 .042-.028.147.147 0 0 0 0-.252.496.496 0 0 1-.042-.028l-4.012-2.954a.5.5 0 0 1-.106-.699z" />
                        </svg>
                        Share Product
                    </li>
                    <li class="list-group-item border-0 cursor-pointer" id="edit-seo">
                        <svg class="bi bi-graph-up mr-2" width="1.5em" height="1.5em" viewBox="0 0 16 16"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 0h1v16H0V0zm1 15h15v1H1v-1z" />
                            <path fill-rule="evenodd"
                                d="M14.39 4.312L10.041 9.75 7 6.707l-3.646 3.647-.708-.708L7 5.293 9.959 8.25l3.65-4.563.781.624z" />
                            <path fill-rule="evenodd"
                                d="M10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4h-3.5a.5.5 0 0 1-.5-.5z" />
                        </svg>
                        Edit SEO Setting
                    </li>
                </ul>
            </div>

        </div>
    </div>
    <?php include 'SEO.php'; ?>
</form>

<script>
const saveCollection = () => {
  // e.preventDefault();
  $.post("<?=base_url('/admin/collection/create')?>", { name: $('#collection_name').val() })
    .done(function (res) {
      $(`<li class="py-2 collection-prev">
              <div class="custom-control custom-checkbox d-flex align-items-center">
                  <input name="collection_id[]" type="checkbox" class="collection custom-control-input" value="${res.data.id}" id="${res.data.id}" checked>
                  <label class="custom-control-label" for="${res.data.id}">${res.data.name}</label>
              </div>
          </li>`).insertAfter($('#collection .collection-prev:last'));
      $('.add-collection-field input').val('');
    }).fail(function () {
      alert("error");
    })
}

$(document).ready(function () {
  $("#add-collection").click(() => {
    $('.add-collection-field').removeClass('d-none');
    $('#add-collection').attr('disabled', true);
  });
  $("#discard-collection").click(() => {
    $('.add-collection-field').addClass('d-none');
    $('#add-collection').removeAttr('disabled', true);
    $('.add-collection-field input').val('');
  });
});

$('#discount-check').change(function (e) {
  e.target.checked ? $('#discount').addClass('d-none') : $('#discount').removeClass('d-none');
})
var num = 0;
var productFiles = [];
$(document).ready(function (event) {
  $(".preview-images-zone").sortable();
  $(document).on('click', '.image-cancel', function () {
    let no = $(this).data('no');
    if ($('div.preview-image').length == 1) {
      $('#display-btns').removeClass("d-none");
      $('#img-preview').addClass("d-none");
    }
    $(".preview-image.preview-show-" + no).remove();
    productFiles = productFiles.filter(e => {
      return e.name != $(this).data('name')
    })
  });

  $('#pro-image').change((event) => {
    if ($('div.preview-image').length == 0) {
      $('#display-btns').addClass("d-none");
      $('#img-preview').removeClass("d-none");
    }
    var files = event.target.files; //FileList object
    var output = $(".preview-images-zone");
    for (let i = 0; i < files.length; i++) {
      var file = files[i];
      productFiles.push(file);
      var checkdiv = $('div.preview-image').length;
      // lemit line
      if (num <= 9 || checkdiv <= 9) {

        var num = checkdiv;
        // if (!file.type.match('image')) continue;

        var picReader = new FileReader();

        picReader.addEventListener('load', function (event) {
          var picFile = event.target;
          productFiles.length == 1 && $("#social-img").attr('src', picFile.result)
          var html = `<div class="preview-image border rounded preview-show-${num}">
                      <span class="image-cancel text-danger" data-name="${file.name}" data-no="${num}
                      "><ion-icon name="close-circle-outline"></ion-icon></span>
                      <div class="image-zone">
                      ${ file.type.match('image')
              ? `<img class="rounded" id="pro-img-${num}" src="${picFile.result}">`
              : `<video src="${picFile.result}"></video>`
            }
                      
                      </div>
                      </div>`;

          $(html).insertBefore("#add-btn");
          num = num + 1;
        });
      }
      picReader.readAsDataURL(file);
    }
  })

});
$('button:not(#submit)').click((e) => e.preventDefault())
$("#form").submit(function (event) {
  event.preventDefault();
  const formData = new FormData();
  $(".form-text").remove();
  productFiles.length
    ? productFiles.map(e => formData.append('filesf[]', e))
    : ($(`#img-upload-label`).removeClass('bg-light').addClass('alert-danger').after(`<small class="form-text text-danger">Upload atleat one image or Video</small>`),
      $(`#video-upload-label`).removeClass('bg-light').addClass('alert-warning').after(`<small class="form-text text-warning">product with videoclip sale 3X more</small>`))
  const reqBody = $(this).serializeArray();
  reqBody.map(({ name, value }) => formData.append(name, value));
  // const discount_type = $('input[name="discount_type"]:checked').val()
  validate(reqBody, errors => {
    if (!errors.length) {
      $.ajax({
        type: "POST",
        enctype: "multipart/form-data",
        url: $(this).attr("action"),
        data: formData,
        processData: false,
        contentType: false,
      }).done(function (res) {
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
  }
  );
});
</script>
