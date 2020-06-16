<div class="card">
    <div class="row">
        <div class="col-sm-12">
            <form id='form' action="<?= base_url('admin/pages/create') ?>" method="post" enctype="multipart/form-data"
                accept-charset="utf-8" novalidate="">
                <div class="form-row modal-body p-4">
                    <div class="col-md-12">
                        <div class="cv-form-group input-group mb-3 mt-4 px-3">
                            <div class="input-group-prepend"><span
                                    class="input-group-text bg-white rounded-0 cv-chev left">
                                    <ion-icon name="trail-sign-outline"></ion-icon>
                                </span></div><input id='title' name="title" type="text"
                                class="form-control custom-input"><span class="bar"></span><label
                                class="cv-label left text-capitalize">title</label>
                        </div>
                    </div>
                    <div class="col-md-12 pt-3">
                        <div class="form-group px-3">
                            <textarea class="wysihtml5 form-control rounded" name="content" id="content"
                                rows="20"></textarea>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="cv-form-group form-group mt-4 px-3">
                            <select name='location_nav' class="form-control js-select2">
                                <option value='1'>Header nav</option>
                                <option value='2'>Footer nav</option>
                            </select>
                            <span class="bar"></span><label class="cv-label left text-capitalize">Select Page location
                                nav</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="input-group mb-3 mt-4 px-3 d-flex align-items-center">
                            <span class="mt-2">Publish the page :</span>
                            <span class="button b2 mt-0 ml-3 mt-2" id="button-10"><input id='status' value='1'
                                    type="checkbox" name="status" class="checkbox">
                                <div class="knobs"><span>NO</span></div>
                                <div class="layer"></div>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-12 px-3 mt-4">
                        <h6>search engine listing preview</h6>
                        <hr>
                    </div>
                    <div class="col-md-12">
                        <div class="cv-form-group input-group mb-3 mt-4 px-3">
                            <div class="input-group-prepend"><span
                                    class="input-group-text bg-white rounded-0 cv-chev left">
                                    <ion-icon name="briefcase-outline"></ion-icon>
                                </span></div><input name="focus_keyword" type="text"
                                class="form-control custom-input"><span class="bar"></span><label
                                class="cv-label left text-capitalize">focus keywords separated by commas</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="input-group mb-3 mt-4 px-3">
                            <textarea name="meta_description" class="form-control custom-input px-0"></textarea>
                            <span class="bar"></span>
                            <label class="cv-label left text-capitalize position-absolute mt-n4">description</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary btn-sm">submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
$("#status").on("change", (e) => {
    const target = e.target;
    target.checked ? $("#status").val("1") : $("#status").val("0");
});
$("#form").submit(function(event) {
    event.preventDefault();
    var post_url = $(this).attr("action");
    var request_method = $(this).attr("method");
    var form_data = $(this).serialize();
    console.log(form_data);
    $.ajax({
        url: post_url,
        type: request_method,
        data: form_data,
    }).done(function(response) {
        console.log(response)
        Toastify({
            text: response.message,
            duration: 3000,
            gravity: "top",
            position: 'right',
            backgroundColor: "#228B22",
            stopOnFocus: true,
        }).showToast();

    }).fail(function(err) {
        console.log(err)
        Toastify({
            text: 'Error operation failed',
            duration: 3000,
            gravity: "top",
            position: 'right',
            backgroundColor: '#FFA500',
            stopOnFocus: true,
        }).showToast();
    });
});
</script>