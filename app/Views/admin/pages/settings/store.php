<div class="card dool-card">
    <div class="card-header">
        <h6>Orders</h6>
        <small>Provide purchase evidence to your customers by creating invoices</small>
    </div>
    <div class="card-body">
        <div class="custom-control custom-switch justify-content-start">
            <input type="checkbox" class="custom-control-input" name="create_order_invoices" id="create_order_invoices"
                <?= get_config('create_order_invoices')==1?"checked":""?>>
            <label class="custom-control-label" for="create_order_invoices">Automatically create an invoice for every
                order
                created online</label>
        </div>
    </div>
</div>

<div class="card dool-card">
    <div class="card-header">
        <h6>Product</h6>
        <small>If not Active you will have to approve proucts from all vendors manually</small>
    </div>
    <div class="card-body">
        <div class="custom-control custom-switch justify-content-start">
            <input type="checkbox" class="custom-control-input" name="auto_product_approval" id="auto_product_approval"
                <?= get_config('auto_product_approval')==1?"checked":""?>>
            <label class="custom-control-label" for="auto_product_approval">Automatically approve products posted by
                vendors</label>
        </div>
    </div>
</div>
<div class="card dool-card">
    <div class="card-header">
        <h6>Order Email Notifivations</h6>
        <small>Send emails to customers to keep them updated on their Orders</small>
    </div>
    <div class="card-body">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <h6>ORDER CONFIRMATION</h6>
                <small>to confirm that you recieved customers Order</small>
                <hr>
                <div class="custom-control custom-switch justify-content-start mb-2">
                    <input type="checkbox" class="custom-control-input" name="order_confirmation_email"
                        id="order_confirmation_email" <?= get_config('order_confirmation_email')==1?"checked":""?>>
                    <label class="custom-control-label" for="order_confirmation_email">Send emails
                        Automatically</label>
                </div>
                <div class="d-flex my-2">
                    <button id="orders" class="btn btn-sm btn-outline-primary" data-toggle="modal"
                        data-target="#exampleModalCenter">
                        Edit Template
                    </button>
                    <button class="btn btn-sm ml-5">
                        Preview
                    </button>

                </div>
            </li>
            <li class="list-group-item">
                <h6>SHIPPING CONFIRMATION</h6>
                <small>Confirm that the order is on the way to your customer</small>
                <hr>
                <div class="custom-control custom-switch justify-content-start mb-2">
                    <input type="checkbox" class="custom-control-input" name="shipping_confirmation_email"
                        id="shipping_confirmation_email" <?= get_config('ready_for_pickup_email')==1?"checked":""?>>
                    <label class="custom-control-label" for="shipping_confirmation_email">Send emails Automatically when
                        shippings starts</label>
                </div>
                <div class="d-flex my-2">
                    <button id='me' class="btn btn-sm btn-outline-primary">
                        Edit Template
                    </button>
                    <button class="btn btn-sm ml-5">
                        Preview
                    </button>

                </div>
            </li>
            <li id='not' class="list-group-item">
                <h6>SEND DOWNLOAD LINKS</h6>
                <small>send download links for digital products via customers emails</small>
                <hr>
                <div class="custom-control custom-switch justify-content-start mb-2">
                    <input type="checkbox" class="custom-control-input" name="digital_download_link_email"
                        id="digital_download_link_email"
                        <?= get_config('digital_download_link_email')==1?"checked":""?>>
                    <label class="custom-control-label" for="digital_download_link_email">Send emails Automatically as
                        soon as
                        customer purchases a digital product</label>
                </div>
                <div class="d-flex my-2">
                    <button class="btn btn-sm btn-outline-primary">
                        Edit Template
                    </button>
                    <button class="btn btn-sm ml-5">
                        Preview
                    </button>

                </div>
            </li>
            <li class="list-group-item">
                <h6>READY FOR PICKUP</h6>
                <small>Email notifys cutomers on products ready for pickup</small>
                <hr>
                <div class="custom-control custom-switch justify-content-start mb-2">
                    <input type="checkbox" class="custom-control-input" name='ready_for_pickup_email'
                        id="ready_for_pickup_email" <?= get_config('ready_for_pickup_email')==1?"checked":""?>>
                    <label class="custom-control-label" for="ready_for_pickup_email">Send emails Automatically for
                        goods
                        ready for pickup</label>
                </div>
                <div class="d-flex my-2">
                    <button class="btn btn-sm btn-outline-primary">
                        Edit Template
                    </button>
                    <button class="btn btn-sm ml-5">
                        Preview
                    </button>
                </div>
            </li>
        </ul>
    </div>
</div>
<div class="card dool-card">
    <div class="card-header">
        <h6>Store Policies</h6>
        <small>Edit policies according to your company needs</small>
    </div>
    <div class="card-body d-flex flex-column">
        <div class="custom-control custom-switch justify-content-start my-3">
            <input type="checkbox" name="active_terms_conditions" class="custom-control-input" id="terms_conditions"
                onchange="policies()" <?= get_config('active_terms_conditions')==1?"checked":""?>>
            <label class="custom-control-label" for="terms_conditions">Terms & Conditions</label>
        </div>
        <div class="collapse terms_conditions <?= get_config('active_terms_conditions') ==1?"show":""?>">
            <textarea class="summernote-simple form-control rounded"
                name="terms_conditions"><?= get_config('terms_conditions')?></textarea>
        </div>
        <div class="custom-control custom-switch justify-content-start my-3">
            <input type="checkbox" name="active_return_policy" class="custom-control-input" id="return_policy"
                onchange="policies()" <?= get_config('active_return_policy') ==1?"checked":""?>>
            <label class="custom-control-label" for="return_policy">Return Policy</label>
        </div>
        <div class="collapse return_policy <?= get_config('active_return_policy')==1?"show":""?>">
            <textarea class="summernote-simple form-control rounded"
                name="return_policy"><?= get_config('return_policy')?></textarea>
        </div>
        <div class="custom-control custom-switch justify-content-start my-3">
            <input type="checkbox" name="active_privacy_policy" class="custom-control-input" id="privacy_policy"
                onchange="policies()" <?= get_config('active_privacy_policy')==1?"checked":""?>>
            <label class="custom-control-label" for="privacy_policy">Privacy Policy </label>
        </div>
        <div class="collapse privacy_policy <?= get_config('active_privacy_policy')==1?"show":""?>">
            <textarea class="summernote-simple form-control rounded"
                name="privacy_policy"><?= get_config('privacy_policy')?></textarea>
        </div>
        <div class="custom-control custom-switch justify-content-start my-3">
            <input type="checkbox" name="active_contact_us" class="custom-control-input" id="contact_us"
                onchange="policies()" <?= get_config('active_contact_us')==1?"checked":""?>>
            <label class="custom-control-label" for="contact_us">Contact Us</label>
        </div>
        <div class="collapse contact_us <?= get_config('active_contact_us')==1?"show":"non"?>">
            <textarea class="summernote-simple form-control rounded"
                name="contact_us"><?= get_config('contact_us')?></textarea>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden=1>
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden=1>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

