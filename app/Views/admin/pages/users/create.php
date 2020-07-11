<form id="form" action="<?= base_url('admin/users/create') ?>" enctype="multipart/form-data" method="post"
    accept-charset="utf-8" novalidate="">
    <div class="modal-header border-0">
        <h6 class="modal-title position-absolute bg-primary text-white" id="mymodalLabel"><?= $page_title ?></h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="form-row modal-body p-4">
        <div class="form-group col-md-6">
            <label class="text-capitalize">fullnames *</label>
            <div class="input-group" id="name">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-white ">
                        <ion-icon name="person-outline"></ion-icon>
                    </span>
                </div>
                <input name="name" type="text" placeholder="john Doe" class="form-control" required>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label class="text-capitalize">username *</label>
            <div class="input-group" id="username">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-white ">
                        <ion-icon name="person-outline"></ion-icon>
                    </span>
                </div>
                <input name="username" type="text" placeholder='john' class="form-control" required>
            </div>
        </div>
        <div class="form-group col-md-9">
            <label class="text-capitalize">email *</label>
            <div class="input-group" id="email">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-white ">
                        <ion-icon name="mail-outline"></ion-icon>
                    </span>
                </div>
                <input name="email" type="email" placeholder="jane@example.com" class="form-control" required>
            </div>
        </div>
        <div class="form-group col-md-7">
            <label class="text-capitalize">physical address *</label>
            <div class="input-group" id="address">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-white ">
                        <ion-icon name="locate-outline"></ion-icon>
                    </span>
                </div>
                <input name="address" type="text" placeholder="search or enter your location" class="form-control" required>
            </div>
        </div>
        <div class="form-group col-md-5">
            <label class="text-capitalize">Telephone number</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-white ">
                        <ion-icon name="call-outline"></ion-icon>
                    </span>
                </div>
                <input name="phone" type="number" placeholder="(801) 73764334" class="form-control">
            </div>
        </div>
        <div class="form-group col-md-6">
            <label class="text-capitalize">company</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-white ">
                        <ion-icon name="briefcase-outline"></ion-icon>
                    </span>
                </div>
                <input name="company" placeholder="enter company name" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group col-md-6">
		<label class="text-capitalize">password *</label>
            <div class="input-group" id="password">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-white ">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                    </span>
                </div>
                <input name="password" type="password" class="form-control" required>
                <div class="input-group-prepend">
                    <span type="button" class="input-group-text bg-white rounded-0 cv-chev right">
                        <ion-icon name="eye-outline"></ion-icon>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary btn-sm">submit</button>
    </div>
</form>

<script>
$("form").submit(function(event) {
    event.preventDefault();
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
          setTimeout(() => {
            location.reload()
            $("#mymodal").modal("toggle");
        }, 1500);
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
