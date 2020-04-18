<form id='form' action="<?= base_url('admin/products/types/create') ?>" method="post" enctype="multipart/form-data" accept-charset="utf-8" novalidate="">
  <div class="modal-header border-0">
    <h6 class="modal-title position-absolute bg-primary text-white" id="mymodalLabel"><?= $page_title ?></h6>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="form-row modal-body p-4">
    <div class="col-md-12">
      <div class="cv-form-group input-group mb-3 mt-2 px-3">
        <div class="input-group-prepend"><span class="input-group-text bg-white rounded-0 cv-chev left">
            <ion-icon name="person-outline" role="img" class="md hydrated" aria-label="person outline"></ion-icon>
          </span></div><input name="name" type="text" class="form-control custom-input" required="" value=""><span class="bar"></span><label class="cv-label left text-capitalize">Category Name</label>
      </div>
    </div>
    <div class="col-md-12">
      <div class="cv-form-group form-group mt-3 px-3">
        <select id='location' name='location' class="form-control js-select2">
          <option value='1'>primary menu</option>
          <option value='2'>footer menu</option>
        </select>
      </div>
    </div>
    <div class="col-md-12">
      <div class="input-group mb-3 mt-2 px-3 d-flex align-items-center">
        <span class="mt-2">Publish the product :</span>
        <span class="button b2 mt-0 ml-3 mt-2" id="button-10"><input id='status' value='1' type="checkbox" name="status" class="checkbox">
          <div class="knobs"><span>YES</span></div>
          <div class="layer"></div>
        </span>
      </div>
    </div>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-primary btn-sm">submit</button>
  </div>
</form>

<script>
  $("#location").select2({
    placeholder: "Select type location",
  });
  $("#form").submit(function(event) {
    event.preventDefault();
    var post_url = $(this).attr("action");
    var request_method = $(this).attr("method");
    var form_data = $(this).serialize();
    $.ajax({
      url: post_url,
      type: request_method,
      data: form_data,
    }).done(function(response) {
      Toastify({
        text: response.message || 'Operation successful',
        duration: 3000,
        gravity: "top",
        position: 'right',
        backgroundColor: "#228B22",
        stopOnFocus: true,
      }).showToast();
      $("#mymodal").modal("toggle");

    }).fail(function(error) {
      Toastify({
        text: 'Error operation failed',
        duration: 3000,
        gravity: "top",
        position: 'right',
        backgroundColor: '#FFA500',
        stopOnFocus: true,
      }).showToast();
    });
    $("#status").on("change", (e) => {
      const target = e.target;
      target.checked ? $("#status").val("1") : $("#status").val("0");
    });
  });
</script>
