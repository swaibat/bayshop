<main role="main" class="container mt-5">
    <div class="d-flex align-items-center p-3 mb-4 text-white-50 bg-purple rounded shadow-xs bg-primary">
        <img class="mr-3" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-outline.svg" alt="" width="48"
            height="48">
        <div class="lh-100">
            <h6 class="mb-0 text-white lh-100"><?=$product->title ?></h6>
            <small>Since 2011</small>
        </div>
    </div>
    <div class="d-flex flex-wrap">
        <div class='col-md-9'>
            <div class='row bg-white py-3 shadow-xs rounded'>
                <div class='col-md-5 pt-2'>
                    
                    <div class="show w-100" href="1.jpg">
       <img class='w-100' src="<?=$product->url ?>" id="show-img">
     </div>

     <!-- Secondary carousel image thumbnail gallery -->

     <div class="small-img">
      <span class="icon-left"    id="prev-img">
<ion-icon  name="chevron-forward-outline"></ion-icon>
</span>
       <div class="small-container">
        <div id="small-img-roll">
          <img src="images/1.png" class="show-small-img" alt="">
          <img src="images/2.png" class="show-small-img" alt="">
          <img src="images/3.png" class="show-small-img" alt="">
          <img src="images/4.png" class="show-small-img" alt="">
          <img src="images/2.png" class="show-small-img" alt="">
          <img src="images/3.png" class="show-small-img" alt="">
          <img src="images/4.png" class="show-small-img" alt="">
        </div>
       </div>
<span class="icon-right" id="next-img">
<ion-icon  name="chevron-forward-outline"></ion-icon>
</span>
     </div>
                    
                </div>
                <div class='col-md-7 rounded'>
                    <div class='d-flex'>
                        <div class='ml-auto'>
                            <button class='btn '>
                                <FontAwesomeIcon icon={faShareSquare} />
                            </button>
                            <button class='btn '>
                                <FontAwesomeIcon icon={faHeart} />
                            </button>
                        </div>
                    </div>
                    <div class='row align-items-center'>
                        <h5 class='mb-0'>US $6.19 - 12.26</h5>
                        <p class='mb-0 ml-3'>US $13.18 - 26.08</p>
                        <span class='badge text-primary bg-primary-light rounded-0 ml-3'>-53%</span>
                    </div>

                    <div class='my-3'>
                        <p class='mb-1'>avaible sizes</p>
                        <div class='btn-group btn-group-sm'>
                            <button class='btn btn-outline-secondary'>S</button>
                            <button class='btn btn-outline-secondary'>M</button>
                            <button class='btn btn-outline-secondary'>L</button>
                            <button class='btn btn-outline-secondary'>XL</button>
                            <button class='btn btn-outline-secondary'>XXL</button>
                            <button class='btn btn-outline-secondary'>XXXL</button>
                            <button class='btn btn-outline-secondary'>4XL</button>
                            <button class='btn btn-outline-secondary'>5XL</button>
                        </div>
                    </div>
                    <div class='my-3'>
                        <p class='mb-1'>avaible sizes</p>
                        <div class='btn-group color-selector mb-2'>
                            <div class='custom-control custom-radio custom-control-inline'>
                                <input type='radio' id='customRadioInline1' name='customRadioInline1'
                                    class='custom-control-input' />
                                <label class='custom-control-label Ared' for='customRadioInline1' />
                            </div>
                            <div class='custom-control custom-radio custom-control-inline ml-4'>
                                <input type='radio' id='customRadioInline2' name='customRadioInline1'
                                    class='custom-control-input' />
                                <label class='custom-control-label orange' for='customRadioInline2' />
                            </div>
                            <div class='custom-control custom-radio custom-control-inline ml-4'>
                                <input type='radio' id='customRadioInline3' name='customRadioInline1'
                                    class='custom-control-input' />
                                <label class='custom-control-label grey' for='customRadioInline3' />
                            </div>
                        </div>
                    </div>
                    <p class='mb-1'>Quantity</p>

                    <div class='input-group mb-3 quantity-input'>
                        <div class='input-group-prepend'>
                            <button class='btn btn-outline-secondary' type='button'>
                                -
                            </button>
                        </div>
                        <input type='text' class='form-control' placeholder='' aria-label=''
                            aria-describedby='basic-addon1' />
                        <div class='input-group-append'>
                            <button class='btn btn-outline-secondary' type='button'>
                                +
                            </button>
                        </div>
                    </div>
                    <div class='d-flex'>
                        <button class='btn btn-primary btn-sm'>Buy now</button>
                        <button class='btn btn-warning ml-2 btn-sm'>Add to cart</button>
                        <button class='btn btn-secondary ml-2 btn-sm'>Add to Favourite</button>
                    </div>
                    <div class='d-flex justify-content-between'>
                        <p>kampala,Ug</p>
                        <small>
                            <strong>published:</strong> 4 hours ago
                        </small>
                    </div>
                </div>
            </div>
            <div class='row bg-white p-3 rounded mt-4'>
                <ul class='nav nav-pills mb-3 bg-white border-bottom w-100' id='pills-tab' role='tablist'>
                    <li class='nav-item'>
                        <a class='nav-link cv-prdct-nav active pb-0' id='pills-home-tab' data-toggle='pill'
                            href='#pills-home' role='tab' aria-controls='pills-home' aria-selected='true'>
                            <ion-icon name='reader' />
                            Details
                        </a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link pb-0 cv-prdct-nav' id='pills-profile-tab' data-toggle='pill'
                            href='#pills-profile' role='tab' aria-controls='pills-profile' aria-selected='false'>
                            <ion-icon name='reader' />
                            Reviews
                        </a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link pb-0 cv-prdct-nav' id='pills-contact-tab' data-toggle='pill'
                            href='#pills-contact' role='tab' aria-controls='pills-contact' aria-selected='false'>
                            Specifications
                        </a>
                    </li>
                </ul>
                <div class='tab-content' id='pills-tabContent'>
                    <div class='tab-pane fade show active' id='pills-home' role='tabpanel'
                        aria-labelledby='pills-home-tab'>
                        ...
                    </div>
                    <div class='tab-pane fade' id='pills-profile' role='tabpanel' aria-labelledby='pills-profile-tab'>
                        ...
                    </div>
                    <div class='tab-pane fade' id='pills-contact' role='tabpanel' aria-labelledby='pills-contact-tab'>
                        ...
                    </div>
                </div>
            </div>
        </div>
        <div class='col-md-3 mr-0 pr-0'>
            <div class='shadow-xs bg-white h-auto w-100 overflow-hidden mb-3 p-3 rounded'>
                <h6>MEHASHA Store</h6>
                <p>235 followers</p>
                <div class='d-flex justify-content-between'>
                    <button class='btn btn-sm btn-outline-primary'>follow</button>
                    <button class='btn btn-sm btn-primary'>visit store</button>
                </div>
            </div>
            <div class="bg-white p-3 rounded shadow-xs">
            <h6 class='cv-title mb-4'>Related products</h6>
            <div class='card border-0 shadow-xs mb-3'>
                <div class='card-body p-2'>
                    <img height='174' class='w-100' src={Img} alt='img' />
                </div>
                <div class='card-body px-2 py-1'>
                    <h6>USD 200</h6>
                </div>
            </div>
            <div class='card border-0 shadow-xs mb-3'>
                <div class='card-body p-2'>
                    <img height='174' class='w-100' src={Img} alt='img' />
                </div>
                <div class='card-body px-2 py-1'>
                    <h6>USD 200</h6>
                </div>
            </div>
            <div class='card border-0 shadow-xs mb-3'>
                <div class='card-body p-2'>
                    <img height='174' class='w-100' src={Img} alt='img' />
                </div>
                <div class='card-body px-2 py-1'>
                    <h6>USD 200</h6>
                </div>
            </div>
            </div>
        </div>
    </div>
</main>
