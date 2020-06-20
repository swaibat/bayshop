<div class="">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    media upload
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <a class='btn bg-light d-flex justify-content-around'
                                href="<?= base_url('admin/products/create'); ?>">
                                <span class="mr-2">
                                    <svg class="bi bi-image" width="4em" height="4em" viewBox="0 0 16 16"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M14.002 2h-12a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1zm-12-1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12z" />
                                        <path
                                            d="M10.648 7.646a.5.5 0 0 1 .577-.093L15.002 9.5V14h-14v-2l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71z" />
                                        <path fill-rule="evenodd" d="M4.502 7a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                    </svg>
                                    <h4 class="font-weight-light">Add Images</h4>
                                </span>
                            </a>
                        </div>
                        <div class="col-6">
                            <a class='btn bg-light d-flex justify-content-around'
                                href="<?= base_url('admin/products/create'); ?>">
                                <span class="mr-2">
                                    <svg class="bi bi-camera-video" width="4em" height="4em" viewBox="0 0 16 16"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M2.667 3.5c-.645 0-1.167.522-1.167 1.167v6.666c0 .645.522 1.167 1.167 1.167h6.666c.645 0 1.167-.522 1.167-1.167V4.667c0-.645-.522-1.167-1.167-1.167H2.667zM.5 4.667C.5 3.47 1.47 2.5 2.667 2.5h6.666c1.197 0 2.167.97 2.167 2.167v6.666c0 1.197-.97 2.167-2.167 2.167H2.667A2.167 2.167 0 0 1 .5 11.333V4.667z" />
                                        <path fill-rule="evenodd"
                                            d="M11.25 5.65l2.768-1.605a.318.318 0 0 1 .482.263v7.384c0 .228-.26.393-.482.264l-2.767-1.605-.502.865 2.767 1.605c.859.498 1.984-.095 1.984-1.129V4.308c0-1.033-1.125-1.626-1.984-1.128L10.75 4.785l.502.865z" />
                                    </svg>
                                    <h4 class="font-weight-light">Add Video</h4>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Basic info -->
            <div class="card">
                <div class="card-header">
                    Basic Info
                </div>
                <div class="card-body">
                    <form action="">
                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" id="name"
                                    placeholder="add product name">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="ribbon">Ribbon</label>
                                <input type="text" class="form-control" name="ribbon" id="ribbon"
                                    placeholder="eg. new arrival">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPassword4">Price</label>
                                <input type="text" class="form-control" id="inputPassword4" placeholder="$100">
                            </div>
                            <div class="form-group col-12">
                                <textarea class="summernote-simple form-control rounded" name="description"></textarea>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
            <!-- product variables -->
            <div class="card d-flex p-3">
                <span class='col-8'>
                    <h5>Product options</h5>
                    <p> if product has variables like different colors,sizes or materials <p>
                            <div class="btn btn-primary">
                                add options
                            </div>
                </span>
            </div>
            <div class="card p-3 shadow-xs">
				<h6>Inventory & Shipping</h6>
				<p>Track Inventory</p>
                <div class="form-row">
				<div class="form-group col-md-4">
                        <label for="name">Status</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="0.0">
                        </div>
                    </div>
				<div class="form-group col-md-4">
                        <label for="name">SKU</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="0.0">
                        </div>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="name">Weight</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="0.0" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2">kg</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card ">
                <div class="card-header">
                    Others
                </div>
                <div class="card-body">
                    <p>Collection</p>
                    <span class='text-primary'>Add new Collection</span>
                </div>
			</div>
			
			<div class="card mt-3 p-3 ">
                <h6>
                    Others
                </h6>
                <ul class="list-group">
                    <li class="list-group-item border-0">
                    <span class="icon-lg mr-2"><ion-icon name="gift-outline"></ion-icon></span>
                        Create Coupon
                    </li>
                    
                    <li class="list-group-item border-0">
                    <svg class="bi bi-collection-play mr-2" width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M14.5 13.5h-13A.5.5 0 0 1 1 13V6a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5zm-13 1A1.5 1.5 0 0 1 0 13V6a1.5 1.5 0 0 1 1.5-1.5h13A1.5 1.5 0 0 1 16 6v7a1.5 1.5 0 0 1-1.5 1.5h-13zM2 3a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11A.5.5 0 0 0 2 3zm2-2a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 0-1h-7A.5.5 0 0 0 4 1z"/>
                        <path fill-rule="evenodd" d="M6.258 6.563a.5.5 0 0 1 .507.013l4 2.5a.5.5 0 0 1 0 .848l-4 2.5A.5.5 0 0 1 6 12V7a.5.5 0 0 1 .258-.437z"/>
                    </svg>
                        Create Promo Video
                    </li>
                    <li class="list-group-item border-0">
                    <svg class="bi bi-reply-all mr-2" width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8.002 5.013a.144.144 0 0 0-.202.134V6.3a.5.5 0 0 1-.5.5c-.667 0-2.013.005-3.3.822-.984.624-1.99 1.76-2.595 3.876C2.425 10.515 3.59 9.982 4.61 9.7a8.741 8.741 0 0 1 1.921-.306 7.403 7.403 0 0 1 .798.008h.013l.005.001h.001L7.3 9.9l.05-.498a.5.5 0 0 1 .45.498v1.153c0 .108.11.176.202.134l3.984-2.933a.494.494 0 0 1 .042-.028.147.147 0 0 0 0-.252.494.494 0 0 1-.042-.028L8.002 5.013zM6.8 10.386a7.745 7.745 0 0 0-1.923.277c-1.326.368-2.896 1.201-3.94 3.08a.5.5 0 0 1-.933-.305c.464-3.71 1.886-5.662 3.46-6.66 1.245-.79 2.527-.942 3.336-.971v-.66a1.144 1.144 0 0 1 1.767-.96l3.994 2.94a1.147 1.147 0 0 1 0 1.946l-3.994 2.94a1.144 1.144 0 0 1-1.767-.96v-.667z"/>
                        <path fill-rule="evenodd" d="M10.868 4.293a.5.5 0 0 1 .7-.106l3.993 2.94a1.147 1.147 0 0 1 0 1.946l-3.994 2.94a.5.5 0 0 1-.593-.805l4.012-2.954a.493.493 0 0 1 .042-.028.147.147 0 0 0 0-.252.496.496 0 0 1-.042-.028l-4.012-2.954a.5.5 0 0 1-.106-.699z"/>
                    </svg>
                        Share Product
                    </li>
                    <li class="list-group-item border-0">
                    <svg class="bi bi-graph-up mr-2" width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 0h1v16H0V0zm1 15h15v1H1v-1z"/>
                        <path fill-rule="evenodd" d="M14.39 4.312L10.041 9.75 7 6.707l-3.646 3.647-.708-.708L7 5.293 9.959 8.25l3.65-4.563.781.624z"/>
                        <path fill-rule="evenodd" d="M10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4h-3.5a.5.5 0 0 1-.5-.5z"/>
                    </svg>
                        Edit SEO Setting
                    </li>
                </ul>
            </div>

        </div>
    </div>
</div>
<script>
postForm();
</script>
