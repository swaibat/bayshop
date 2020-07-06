<form id="form" action="<?= base_url('admin/collection/create') ?>" enctype="multipart/form-data" novalidate="">
    <div class="modal-header border-0">
        <h6 class="modal-title position-absolute bg-primary text-white" id="mymodalLabel"><?= $page_title ?></h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body p-4">
        <div class="form-group">
            <label for="name">Collection Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="enter name">
        </div>

        <div class="d-flex flex-column">
        <label>upload collection image </label>
            <label for="image" id="add-btn" class="btn p-2 btn-add-img bg-light shadow-xs">
                <div class="add-btn image-zone p-2 w-100 h-100">
                    <svg class="bi bi-plus" width="3em" height="3em" viewBox="0 0 16 16" fill="rgb(174, 174, 248)"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z" />
                        <path fill-rule="evenodd"
                            d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z" />
                    </svg>
                </div>
            </label>
            <input type="file" name="image" id="image" class="d-none">
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary btn-sm">submit</button>
    </div>
</form>
