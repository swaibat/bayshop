<!-- start of dashboard -->

<div class="row w-100 mt-2">
    <!-- Orders -->
    <?= stat_card([
            'name'      => "Orders",
            "data"      => $total_users,
            "last_7"    => 49,
            "footer1"  => '546 Complete',
            "footer2"  => '20  Pending',
            'icon'      => "data:image/svg+xml,%3Csvg aria-hidden='true' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 384 512'%3E%3Cg%3E%3Cpath fill='%23a5a8a9' d='M336 64h-80a64 64 0 0 1 64 64H64a64 64 0 0 1 64-64H48a48 48 0 0 0-48 48v352a48 48 0 0 0 48 48h288a48 48 0 0 0 48-48V112a48 48 0 0 0-48-48zM96 424a24 24 0 1 1 24-24 23.94 23.94 0 0 1-24 24zm0-96a24 24 0 1 1 24-24 23.94 23.94 0 0 1-24 24zm0-96a24 24 0 1 1 24-24 23.94 23.94 0 0 1-24 24zm224 176a8 8 0 0 1-8 8H168a8 8 0 0 1-8-8v-16a8 8 0 0 1 8-8h144a8 8 0 0 1 8 8zm0-96a8 8 0 0 1-8 8H168a8 8 0 0 1-8-8v-16a8 8 0 0 1 8-8h144a8 8 0 0 1 8 8zm0-96a8 8 0 0 1-8 8H168a8 8 0 0 1-8-8v-16a8 8 0 0 1 8-8h144a8 8 0 0 1 8 8z'%3E%3C/path%3E%3Cpath d='M96 376a24 24 0 1 0 24 24 23.94 23.94 0 0 0-24-24zm0-96a24 24 0 1 0 24 24 23.94 23.94 0 0 0-24-24zm0-96a24 24 0 1 0 24 24 23.94 23.94 0 0 0-24-24zM256 64a64 64 0 0 0-128 0 64 64 0 0 0-64 64h256a64 64 0 0 0-64-64zm-64 24a24 24 0 1 1 24-24 23.94 23.94 0 0 1-24 24z'%3E%3C/path%3E%3C/g%3E%3C/svg%3E%0A",
          ]) ?>
    <!-- users -->
    <?= stat_card([
            'name'      => "Users",
            "data"      => $total_users,
            "last_7"    => 12,
            "footer1"  => '546 Online',
            "footer2"  => '20  Offline',
            'icon'     => "data:image/svg+xml,%3Csvg aria-hidden='true' focusable='false' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 640 512'%3E%3Cg %3E%3Cpath d='M96 224a64 64 0 1 0-64-64 64.06 64.06 0 0 0 64 64zm480 32h-64a63.81 63.81 0 0 0-45.1 18.6A146.27 146.27 0 0 1 542 384h66a32 32 0 0 0 32-32v-32a64.06 64.06 0 0 0-64-64zm-512 0a64.06 64.06 0 0 0-64 64v32a32 32 0 0 0 32 32h65.9a146.64 146.64 0 0 1 75.2-109.4A63.81 63.81 0 0 0 128 256zm480-32a64 64 0 1 0-64-64 64.06 64.06 0 0 0 64 64z'%3E%3C/path%3E%3Cpath fill='%23a5a8a9' d='M396.8 288h-8.3a157.53 157.53 0 0 1-68.5 16c-24.6 0-47.6-6-68.5-16h-8.3A115.23 115.23 0 0 0 128 403.2V432a48 48 0 0 0 48 48h288a48 48 0 0 0 48-48v-28.8A115.23 115.23 0 0 0 396.8 288zM320 256a112 112 0 1 0-112-112 111.94 111.94 0 0 0 112 112z' %3E%3C/path%3E%3C/g%3E%3C/svg%3E%0A",
          ]) ?>

    <!-- Products -->
    <?= stat_card([
            'name'      => "Products",
            "data"      => $total_products,
            "last_7"    => 64,
            "footer1"  => '534 Active',
            "footer2"  => '20 Pending',
            'icon'     => "data:image/svg+xml,%3Csvg aria-hidden='true' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 576 512'%3E%3Cg%3E%3Cpath fill='%23a5a8a9' d='M552 64H159.21l52.36 256h293.15a24 24 0 0 0 23.4-18.68l47.27-208a24 24 0 0 0-18.08-28.72A23.69 23.69 0 0 0 552 64zM444.42 196.48l-67.83 72a12.27 12.27 0 0 1-17.18 0l-67.83-72c-7.65-7.55-2.23-20.48 8.59-20.48h43.54v-52a12.07 12.07 0 0 1 12.14-12h24.29a12.07 12.07 0 0 1 12.15 12v52h43.54c10.82 0 16.24 12.93 8.59 20.48z' class='secondary'%3E%3C/path%3E%3Cpath d='M504.42 405.6l5.52-24.28a24 24 0 0 0-23.4-29.32H218.12L150 19.19A24 24 0 0 0 126.53 0H24A24 24 0 0 0 0 24v16a24 24 0 0 0 24 24h69.88l70.25 343.43a56 56 0 1 0 67.05 8.57h209.64a56 56 0 1 0 63.6-10.4zm-145-137.12a12.27 12.27 0 0 0 17.18 0l67.83-72c7.65-7.55 2.23-20.48-8.59-20.48h-43.55v-52a12.07 12.07 0 0 0-12.15-12h-24.29a12.07 12.07 0 0 0-12.14 12v52h-43.54c-10.82 0-16.24 12.93-8.59 20.48z' class='primary'%3E%3C/path%3E%3C/g%3E%3C/svg%3E%0A",
          ]) ?>

    <!-- Messages -->
    <?= stat_card([
            'name'      => "Messages",
            "data"      => $total_products,
            "last_7"    => 343,
            "footer1"  => '534 sent',
            "footer2"  => '20 received',
            'icon'     => "data:image/svg+xml,%3Csvg aria-hidden='true' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512' %3E%3Cg%3E%3Cpath fill='%23a5a8a9' d='M64,257.6,227.9,376a47.72,47.72,0,0,0,56.2,0L448,257.6V96a32,32,0,0,0-32-32H96A32,32,0,0,0,64,96ZM160,160a16,16,0,0,1,16-16H336a16,16,0,0,1,16,16v16a16,16,0,0,1-16,16H176a16,16,0,0,1-16-16Zm0,80a16,16,0,0,1,16-16H336a16,16,0,0,1,16,16v16a16,16,0,0,1-16,16H176a16,16,0,0,1-16-16Z' class='secondary'%3E%3C/path%3E%3Cpath d='M352,160a16,16,0,0,0-16-16H176a16,16,0,0,0-16,16v16a16,16,0,0,0,16,16H336a16,16,0,0,0,16-16Zm-16,64H176a16,16,0,0,0-16,16v16a16,16,0,0,0,16,16H336a16,16,0,0,0,16-16V240A16,16,0,0,0,336,224ZM329.4,41.4C312.6,29.2,279.2-.3,256,0c-23.2-.3-56.6,29.2-73.4,41.4L152,64H360ZM64,129c-23.9,17.7-42.7,31.6-45.6,34A48,48,0,0,0,0,200.7v10.7l64,46.2Zm429.6,34c-2.9-2.3-21.7-16.3-45.6-33.9V257.6l64-46.2V200.7A48,48,0,0,0,493.6,163ZM256,417.1a80,80,0,0,1-46.9-15.2L0,250.9V464a48,48,0,0,0,48,48H464a48,48,0,0,0,48-48V250.9l-209.1,151A80,80,0,0,1,256,417.1Z' class='primary'%3E%3C/path%3E%3C/g%3E%3C/svg%3E%0A",
          ]) ?>
</div>
<style>
.dool-card ion-icon {
    font-size: 1.25rem;

}

</style>
<!-- main stats Chart -->
<div class="col-md-8 mt-4">
    <div class="row">
        <div class="card col-md-6 border-0 dool-card">
            <div class="card-header">
                <h6>website setup</h6>
            </div>
            <div class="card-body">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-create-account-tab" data-toggle="pill"
                        href="#v-pills-create-account" role="tab" aria-controls="v-pills-create-account"
                        aria-selected="true">
                        <ion-icon class="text-success" name="checkmark-circle"></ion-icon>
                        Create your Account
                    </a>
                    <a class="nav-link" id="v-pills-store-name-tab" data-toggle="pill" href="#v-pills-store-name"
                        role="tab" aria-controls="v-pills-store-name" aria-selected="false">
                        <ion-icon class="text-secondary" name="remove-circle-outline"></ion-icon>
                        Add store Name
                    </a>
                    <a class="nav-link" id="v-pills-personal-details-tab" data-toggle="pill"
                        href="#v-pills-personal-details" role="tab" aria-controls="v-pills-personal-details"
                        aria-selected="false">
                        <ion-icon class="text-secondary" name="remove-circle-outline"></ion-icon>
                        Add your personal details
                    </a>
                    <a class="nav-link" id="v-pills-store-media-tab" data-toggle="pill" href="#v-pills-store-media"
                        role="tab" aria-controls="v-pills-store-media" aria-selected="false">
                        <ion-icon class="text-secondary" name="remove-circle-outline"></ion-icon>
                        Add store Media
                    </a>
                    <a class="nav-link" id="v-pills-payments-tab" data-toggle="pill" href="#v-pills-payments" role="tab"
                        aria-controls="v-pills-payments" aria-selected="false">
                        <ion-icon class="text-secondary" name="remove-circle-outline"></ion-icon>
                        Add Payment method
                    </a>
                    <a class="nav-link" id="v-pills-add-product-tab" data-toggle="pill" href="#v-pills-add-product"
                        role="tab" aria-controls="v-pills-add-product" aria-selected="false">
                        <ion-icon class="text-secondary" name="remove-circle-outline"></ion-icon>
                        Add your first product
                    </a>
                    <a class="nav-link" id="v-pills-store-address-tab" data-toggle="pill" href="#v-pills-store-address"
                        role="tab" aria-controls="v-pills-store-address" aria-selected="false">
                        <ion-icon class="text-secondary" name="remove-circle-outline"></ion-icon>
                        Add store address
                    </a>
                </div>
            </div>
            <!-- online users table -->
            
        </div>
        <div class="card col-md-6 dool-card border-left">
            <div class="card-header">
                <h5>Next Step</h5>
            </div>
            <div class="card-body text-center">
                <img class="mb-2" height="120" width="150" src="<?= base_url('assets/images/invoice.svg') ?>" alt=""
                    srcset="">
                <h5>setup payment methods</h5>
                <p>setup payment methods so that customers can pay your store for the purchases made</p>
                <a href="" class="btn btn-primary btn-sm">Setup Now</a>
                <a class="d-block mt-2" href="">Skip</a>
            </div>

        </div>
    </div>
    <div class="row bg-white p-3 shadow-xs rounded">
                <h6>Online Users</h6>
                <table id="table"></table>
            </div>
</div>
<!-- online users table -->
<div class="col-md-4 mt-4">
    <div class="card dool-card">
        <div class="card-header">
            <h6>Site Timeline</h6>
        </div>
        <div class="card-body ">
            <ul class="list-group main-timeline" style="border-left: solid .3rem;">
                <li class="list-group-item border-0">
                    <div class="icon"><span></span></div>
                    <small>12:20pm</small>
                    <b class='d-block'>comment</b>
                    joseph sent you a chat message
                </li>
                <li class="list-group-item border-0">
                    <div class="icon"><span></span></div>
                    <small>12:20pm</small>
                    <b class='d-block'>comment</b>
                    joseph sent you a chat message
                </li>
                <li class="list-group-item border-0">
                    <div class="icon"><span></span></div>
                    <small>12:20pm</small>
                    <b class='d-block'>comment</b>
                    joseph sent you a chat message
                </li>
                <li class="list-group-item border-0">
                    <div class="icon"><span></span></div>
                    <small>12:20pm</small>
                    <b class='d-block'>comment</b>
                    joseph sent you a chat message
                </li>
            </ul>
        </div>
    </div>

    <table id="table"></table>
</div>
<!-- end of starts -->


<?= script_tag('assets/admin/js/dashboard.js'); ?>
