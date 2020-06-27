<div class="card dool-card">
    <div class="card-header">
        <h6>Address Info</h6>
        <small>Add your address info so that customers can find you</small>
    </div>
    <div class="card-body">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="contact_email">Contact Email</label>
                <input type="email" name="contact_email" class="form-control" id="contact_email"
                    value="<?= get_config('contact_email')?>" placeholder="">
            </div>
            <div class="form-group col-md-6">
                <label for="contact_phone">Contact Phone</label>
                <div class="input-phone"></div>
                <input type="text" name="contact_phone" class="form-control" id="contact_phone"
                    value="<?= get_config('contact_phone')?>" placeholder="example@example.com">
            </div>
        </div>
    </div>
</div>
<!-- basic info -->
<div class="card dool-card">
    <div class="card-header">
        <h6>Basic info</h6>
        <small>Add your address info so that customers can find you</small>
    </div>
    <div class="card-body form-row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="site_name">website name</label>
                <input type="text" class="form-control" id="site_name" value="<?= get_config('site_name')?>"
                    placeholder="enter your website name">
            </div>
            <label>Logo</labe>
                <div class="d-flex pt-2">
                    <div class="avatar-upload">
                        <div class="avatar-edit">
                            <input type='file' id="logo" accept=".png, .jpg, .jpeg" />
                            <label for="logo"></label>
                        </div>
                        <div class="avatar-preview">
                            <div id="logo-img"
                                style="background-size: contain;background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMjYuODc1IiBoZWlnaHQ9Ijg0Ljg3NSIgdmlld0JveD0iMCAwIDEyNi44NzUgODQuODc1Ij4KICA8ZyBpZD0iR3JvdXBfOCIgZGF0YS1uYW1lPSJHcm91cCA4IiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtODgyIC01MjIpIj4KICAgIDxnIGlkPSJHcm91cF83IiBkYXRhLW5hbWU9Ikdyb3VwIDciPgogICAgICA8ZyBpZD0iR3JvdXBfNiIgZGF0YS1uYW1lPSJHcm91cCA2Ij4KICAgICAgICA8ZyBpZD0iR3JvdXBfNSIgZGF0YS1uYW1lPSJHcm91cCA1Ij4KICAgICAgICAgIDxnIGlkPSJHcm91cF80IiBkYXRhLW5hbWU9Ikdyb3VwIDQiPgogICAgICAgICAgICA8ZyBpZD0iUmVjdGFuZ2xlXzMiIGRhdGEtbmFtZT0iUmVjdGFuZ2xlIDMiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDg4MiA1MzcpIiBmaWxsPSJub25lIiBzdHJva2U9IiNlM2UzZTMiIHN0cm9rZS13aWR0aD0iMSIgc3Ryb2tlLWRhc2hhcnJheT0iMSAyIj4KICAgICAgICAgICAgICA8cmVjdCB3aWR0aD0iODYiIGhlaWdodD0iNjAiIHN0cm9rZT0ibm9uZSIvPgogICAgICAgICAgICAgIDxyZWN0IHg9IjAuNSIgeT0iMC41IiB3aWR0aD0iODUiIGhlaWdodD0iNTkiIGZpbGw9Im5vbmUiLz4KICAgICAgICAgICAgPC9nPgogICAgICAgICAgICA8cmVjdCBpZD0iUmVjdGFuZ2xlXzEiIGRhdGEtbmFtZT0iUmVjdGFuZ2xlIDEiIHdpZHRoPSI5NyIgaGVpZ2h0PSI2MiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoODk0IDUyMikiIGZpbGw9IiNmN2Y3ZjciLz4KICAgICAgICAgICAgPGVsbGlwc2UgaWQ9IkVsbGlwc2VfMSIgZGF0YS1uYW1lPSJFbGxpcHNlIDEiIGN4PSIxMi41IiBjeT0iMTIiIHJ4PSIxMi41IiByeT0iMTIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDkxOCA1MjcpIiBmaWxsPSIjZTNlM2UzIi8+CiAgICAgICAgICAgIDxyZWN0IGlkPSJSZWN0YW5nbGVfMiIgZGF0YS1uYW1lPSJSZWN0YW5nbGUgMiIgd2lkdGg9IjI1IiBoZWlnaHQ9IjI5IiB0cmFuc2Zvcm09Im1hdHJpeCgxLCAtMC4wMTcsIDAuMDE3LCAxLCA5MjkuNzQ5LCA1NDAuMjI5KSIgZmlsbD0iI2ZmZiIvPgogICAgICAgICAgICA8cGF0aCBpZD0iUG9seWdvbl8xIiBkYXRhLW5hbWU9IlBvbHlnb24gMSIgZD0iTTExLDAsMjIsMTZIMFoiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDk0NiA1NTMpIiBmaWxsPSIjZTNlM2UzIi8+CiAgICAgICAgICAgIDxwYXRoIGlkPSJJY29uX2F3ZXNvbWUtYXJyb3ctY2lyY2xlLXVwIiBkYXRhLW5hbWU9Ikljb24gYXdlc29tZS1hcnJvdy1jaXJjbGUtdXAiIGQ9Ik0uNTYzLDE4QTE3LjQzOCwxNy40MzgsMCwxLDEsMTgsMzUuNDM4LDE3LjQzNCwxNy40MzQsMCwwLDEsLjU2MywxOFptMTAuMSwyLjAzMiw1LjA5MS01LjMwOVYyNy41NjNhMS42ODMsMS42ODMsMCwwLDAsMS42ODgsMS42ODhoMS4xMjVhMS42ODMsMS42ODMsMCwwLDAsMS42ODgtMS42ODdWMTQuNzIzbDUuMDkxLDUuMzA5YTEuNjg5LDEuNjg5LDAsMCwwLDIuNDEyLjAyOGwuNzY2LS43NzNhMS42ODEsMS42ODEsMCwwLDAsMC0yLjM4NEwxOS4yLDcuNTczYTEuNjgxLDEuNjgxLDAsMCwwLTIuMzg0LDBMNy40NzQsMTYuOWExLjY4MSwxLjY4MSwwLDAsMCwwLDIuMzg0bC43NjYuNzczQTEuNywxLjcsMCwwLDAsMTAuNjU5LDIwLjAzMloiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDk3My40MzggNTcxLjQzOCkiIGZpbGw9IiNlM2UzZTMiLz4KICAgICAgICAgICAgPGcgaWQ9Ikdyb3VwXzMiIGRhdGEtbmFtZT0iR3JvdXAgMyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTAuMDA5KSI+CiAgICAgICAgICAgICAgPGcgaWQ9Ikdyb3VwXzIiIGRhdGEtbmFtZT0iR3JvdXAgMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoOTA1LjUgNTc0LjUpIj4KICAgICAgICAgICAgICAgIDxnIGlkPSJHcm91cF8xIiBkYXRhLW5hbWU9Ikdyb3VwIDEiPgogICAgICAgICAgICAgICAgICA8bGluZSBpZD0iTGluZV8xIiBkYXRhLW5hbWU9IkxpbmUgMSIgeDI9IjU1IiBmaWxsPSJub25lIiBzdHJva2U9IiNlM2UzZTMiIHN0cm9rZS13aWR0aD0iMSIvPgogICAgICAgICAgICAgICAgICA8bGluZSBpZD0iTGluZV8zIiBkYXRhLW5hbWU9IkxpbmUgMyIgeDI9IjEyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg1OC4wMDkpIiBmaWxsPSJub25lIiBzdHJva2U9IiNlM2UzZTMiIHN0cm9rZS13aWR0aD0iMSIvPgogICAgICAgICAgICAgICAgICA8bGluZSBpZD0iTGluZV80IiBkYXRhLW5hbWU9IkxpbmUgNCIgeDI9IjQ0IiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgwIDMpIiBmaWxsPSJub25lIiBzdHJva2U9IiNlM2UzZTMiIHN0cm9rZS13aWR0aD0iMSIvPgogICAgICAgICAgICAgICAgICA8bGluZSBpZD0iTGluZV81IiBkYXRhLW5hbWU9IkxpbmUgNSIgeDI9IjE3IiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg0OS4wMDkgNCkiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2UzZTNlMyIgc3Ryb2tlLXdpZHRoPSIxIi8+CiAgICAgICAgICAgICAgICA8L2c+CiAgICAgICAgICAgICAgPC9nPgogICAgICAgICAgICA8L2c+CiAgICAgICAgICA8L2c+CiAgICAgICAgPC9nPgogICAgICA8L2c+CiAgICA8L2c+CiAgPC9nPgo8L3N2Zz4K)">
                            </div>
                        </div>

                    </div>
                    <!-- <span class='px-3'>
                        <p>upload high resolution image</p>
                        <button class="btn btn-outline-primary">
                            add logo
                        </button>
                        <p class='mt-3'>or create a free logo here</p>
                    </span> -->
                </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="site_description">site short description (150 words or less)</label>
                <textarea name="site_description" class="form-control" id="site_description"
                    row='5'><?= get_config('site_description')?></textarea>
            </div>
            <div class="form-group">
                <label for="business_type">business type</label>
                <input type="text" name="business_type" class="form-control" id="business_type"
                    value="<?= get_config('business_type')?>" placeholder="eg. housing and property shop">
            </div>
            <div class="form-group">
                <label for="business_subcategory">Business subcategory</label>
                <input type="text" class="form-control" id="business_subcategory"
                    value="<?= get_config('business_subcategory')?>" placeholder="eg, property">
            </div>
        </div>
    </div>
</div>
<!-- favicon -->
<div class="card dool-card">
    <div class="card-header">
        <h6>Favicon</h6>
        <small>A small text next to your Page title</small>
    </div>
    <div class="card-body form-row">
        <div class="col-md-6">
            <p>Upload your website favicon</p>
            <span class="d-flex">
                <div class="avatar-upload">
                    <div class="avatar-edit">
                        <input type='file' id="favicon" accept=".png, .jpg, .jpeg" />
                        <label for="favicon"></label>
                    </div>
                    <div class="avatar-preview">
                        <div id="favicon-img"
                            style="background-size: contain;background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMjYuODc1IiBoZWlnaHQ9Ijg0Ljg3NSIgdmlld0JveD0iMCAwIDEyNi44NzUgODQuODc1Ij4KICA8ZyBpZD0iR3JvdXBfOCIgZGF0YS1uYW1lPSJHcm91cCA4IiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtODgyIC01MjIpIj4KICAgIDxnIGlkPSJHcm91cF83IiBkYXRhLW5hbWU9Ikdyb3VwIDciPgogICAgICA8ZyBpZD0iR3JvdXBfNiIgZGF0YS1uYW1lPSJHcm91cCA2Ij4KICAgICAgICA8ZyBpZD0iR3JvdXBfNSIgZGF0YS1uYW1lPSJHcm91cCA1Ij4KICAgICAgICAgIDxnIGlkPSJHcm91cF80IiBkYXRhLW5hbWU9Ikdyb3VwIDQiPgogICAgICAgICAgICA8ZyBpZD0iUmVjdGFuZ2xlXzMiIGRhdGEtbmFtZT0iUmVjdGFuZ2xlIDMiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDg4MiA1MzcpIiBmaWxsPSJub25lIiBzdHJva2U9IiNlM2UzZTMiIHN0cm9rZS13aWR0aD0iMSIgc3Ryb2tlLWRhc2hhcnJheT0iMSAyIj4KICAgICAgICAgICAgICA8cmVjdCB3aWR0aD0iODYiIGhlaWdodD0iNjAiIHN0cm9rZT0ibm9uZSIvPgogICAgICAgICAgICAgIDxyZWN0IHg9IjAuNSIgeT0iMC41IiB3aWR0aD0iODUiIGhlaWdodD0iNTkiIGZpbGw9Im5vbmUiLz4KICAgICAgICAgICAgPC9nPgogICAgICAgICAgICA8cmVjdCBpZD0iUmVjdGFuZ2xlXzEiIGRhdGEtbmFtZT0iUmVjdGFuZ2xlIDEiIHdpZHRoPSI5NyIgaGVpZ2h0PSI2MiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoODk0IDUyMikiIGZpbGw9IiNmN2Y3ZjciLz4KICAgICAgICAgICAgPGVsbGlwc2UgaWQ9IkVsbGlwc2VfMSIgZGF0YS1uYW1lPSJFbGxpcHNlIDEiIGN4PSIxMi41IiBjeT0iMTIiIHJ4PSIxMi41IiByeT0iMTIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDkxOCA1MjcpIiBmaWxsPSIjZTNlM2UzIi8+CiAgICAgICAgICAgIDxyZWN0IGlkPSJSZWN0YW5nbGVfMiIgZGF0YS1uYW1lPSJSZWN0YW5nbGUgMiIgd2lkdGg9IjI1IiBoZWlnaHQ9IjI5IiB0cmFuc2Zvcm09Im1hdHJpeCgxLCAtMC4wMTcsIDAuMDE3LCAxLCA5MjkuNzQ5LCA1NDAuMjI5KSIgZmlsbD0iI2ZmZiIvPgogICAgICAgICAgICA8cGF0aCBpZD0iUG9seWdvbl8xIiBkYXRhLW5hbWU9IlBvbHlnb24gMSIgZD0iTTExLDAsMjIsMTZIMFoiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDk0NiA1NTMpIiBmaWxsPSIjZTNlM2UzIi8+CiAgICAgICAgICAgIDxwYXRoIGlkPSJJY29uX2F3ZXNvbWUtYXJyb3ctY2lyY2xlLXVwIiBkYXRhLW5hbWU9Ikljb24gYXdlc29tZS1hcnJvdy1jaXJjbGUtdXAiIGQ9Ik0uNTYzLDE4QTE3LjQzOCwxNy40MzgsMCwxLDEsMTgsMzUuNDM4LDE3LjQzNCwxNy40MzQsMCwwLDEsLjU2MywxOFptMTAuMSwyLjAzMiw1LjA5MS01LjMwOVYyNy41NjNhMS42ODMsMS42ODMsMCwwLDAsMS42ODgsMS42ODhoMS4xMjVhMS42ODMsMS42ODMsMCwwLDAsMS42ODgtMS42ODdWMTQuNzIzbDUuMDkxLDUuMzA5YTEuNjg5LDEuNjg5LDAsMCwwLDIuNDEyLjAyOGwuNzY2LS43NzNhMS42ODEsMS42ODEsMCwwLDAsMC0yLjM4NEwxOS4yLDcuNTczYTEuNjgxLDEuNjgxLDAsMCwwLTIuMzg0LDBMNy40NzQsMTYuOWExLjY4MSwxLjY4MSwwLDAsMCwwLDIuMzg0bC43NjYuNzczQTEuNywxLjcsMCwwLDAsMTAuNjU5LDIwLjAzMloiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDk3My40MzggNTcxLjQzOCkiIGZpbGw9IiNlM2UzZTMiLz4KICAgICAgICAgICAgPGcgaWQ9Ikdyb3VwXzMiIGRhdGEtbmFtZT0iR3JvdXAgMyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTAuMDA5KSI+CiAgICAgICAgICAgICAgPGcgaWQ9Ikdyb3VwXzIiIGRhdGEtbmFtZT0iR3JvdXAgMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoOTA1LjUgNTc0LjUpIj4KICAgICAgICAgICAgICAgIDxnIGlkPSJHcm91cF8xIiBkYXRhLW5hbWU9Ikdyb3VwIDEiPgogICAgICAgICAgICAgICAgICA8bGluZSBpZD0iTGluZV8xIiBkYXRhLW5hbWU9IkxpbmUgMSIgeDI9IjU1IiBmaWxsPSJub25lIiBzdHJva2U9IiNlM2UzZTMiIHN0cm9rZS13aWR0aD0iMSIvPgogICAgICAgICAgICAgICAgICA8bGluZSBpZD0iTGluZV8zIiBkYXRhLW5hbWU9IkxpbmUgMyIgeDI9IjEyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg1OC4wMDkpIiBmaWxsPSJub25lIiBzdHJva2U9IiNlM2UzZTMiIHN0cm9rZS13aWR0aD0iMSIvPgogICAgICAgICAgICAgICAgICA8bGluZSBpZD0iTGluZV80IiBkYXRhLW5hbWU9IkxpbmUgNCIgeDI9IjQ0IiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgwIDMpIiBmaWxsPSJub25lIiBzdHJva2U9IiNlM2UzZTMiIHN0cm9rZS13aWR0aD0iMSIvPgogICAgICAgICAgICAgICAgICA8bGluZSBpZD0iTGluZV81IiBkYXRhLW5hbWU9IkxpbmUgNSIgeDI9IjE3IiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg0OS4wMDkgNCkiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2UzZTNlMyIgc3Ryb2tlLXdpZHRoPSIxIi8+CiAgICAgICAgICAgICAgICA8L2c+CiAgICAgICAgICAgICAgPC9nPgogICAgICAgICAgICA8L2c+CiAgICAgICAgICA8L2c+CiAgICAgICAgPC9nPgogICAgICA8L2c+CiAgICA8L2c+CiAgPC9nPgo8L3N2Zz4K)">
                        </div>
                    </div>

                </div>
                <p class="ml-4">Your current default favicon is by default a Doolbay favicon</p>
            </span>
        </div>
        <div class="col-md-6">
            <p>A Favicon example on a browser</p>
            <img class="img-thumbnail w-100" src="<?=base_url('assets/images/favicon-example.svg')?>" alt="">
        </div>
    </div>
</div>
<!-- payments and  shipping -->
<div class="row">
    <div class="col-md-6">
        <div class="bg-white rounded shadow-xs mb-4 p-4">
            <h5>Payments</h5>
            <p>connect payment method so that customers can make payments to your store</p>
            <div class="row">
                <div class="col-md-12">
                    <button class="btn btn-sm btn-primary">Add payment method</button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="bg-white rounded shadow-xs mb-4 p-4">
            <h5>Shipping Regions</h5>
            <p>Add shipping regions so that you can sell and deliver physical products</p>
            <div class="row">
                <div class="col-md-12">
                    <button class="btn btn-sm btn-primary">Add shipping regions</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- address details -->
<div class="card dool-card">
    <div class="card-header">
        <h6>Bussiness Address</h6>
        <small>add or search for your business address</small>
    </div>
    <div class="card-body form-row">
        <div class="col-md-7">
            <div class="form-group">
                <label for="business_address">Business Adress</label>
                <input type="text" name="business_address" class="form-control" id="business_address"
                    value="<?= get_config('business_address')?>" placeholder="search or add business address">
            </div>
        </div>
        <div class="col-md-5">
            <div class="rounded" id="map"></div>
        </div>
    </div>
</div>
<!-- address details -->
<div class="card dool-card">
    <div class="card-header">
        <h6>Regional Settings</h6>
        <small>Add or search for your business address</small>
    </div>
    <div class="card-body form-row">
        <div class="form-group custom-control custom-switch mb-2 col-12">
            <input type="checkbox" class="custom-control-input" id="customSwitch1">
            <label class="custom-control-label" for="customSwitch1">Automatic detect my Region</label>
        </div>
        <div class="form-group col-md-6 d-flex flex-column ">
            <label for="regional_settings">Regional settings</label>
            <select class="form-control select2 mb-3" name="regional_settings" id="regional_settings">
                <option value="">English-USA</option>
            </select>
        </div>
        <div class="form-group col-md-6 d-flex flex-column">
            <label for="site_language">Language</label>
            <select class="form-control select2 mb-3" name="site_language" id="site_language">
                <option value="">English-USA</option>
            </select>
        </div>
        <div class="form-group col-md-6 d-flex flex-column">
            <label for="site_currency">Currency</label>
            <select class="form-control select2 mb-3" name="site_currency" id="site_currency">
                <option value="">English-USA</option>
            </select>
        </div>
        <div class="form-group col-md-6 d-flex flex-column">
            <label for="site_timezone">Time Zone</label>
            <select class="form-control select2 mb-3" name="site_timezone" id="site_timezone">
                <option value="">English-USA</option>
            </select>
        </div>
    </div>
</div>
