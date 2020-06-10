
<main role="main" class="container">
    <div class="d-flex flex-wrap">
        <div class='col-md-9'>
            <div class='row bg-white py-3 shadow-xs rounded'>
                <div class='col-md-5 pt-2'>
                    <div class="show w-100" href="1.jpg">
                        <img class='w-100' src="<?=$product['url'] ?>" id="show-img">
                    </div>

                    <!-- Secondary carousel image thumbnail gallery -->

                    <div class="small-img">
                        <span class="icon-left" id="prev-img">
                            <ion-icon name="chevron-forward-outline"></ion-icon>
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
                            <ion-icon name="chevron-forward-outline"></ion-icon>
                        </span>
                    </div>

                </div>
                <div class='col-md-7 rounded'>
                    <div class='d-flex'>
                        <h5><?=$product['title'] ?></h5>
                        <div class='ml-auto btn-group'>
                            <button class='btn '>
                                <ion-icon name="share-outline"></ion-icon>
                            </button>
                            <button class='btn '>
                                <ion-icon name="share-social-outline"></ion-icon>
                            </button>
                        </div>
                    </div>
                    <div class="d-flex my-3">
                        <ion-icon class='text-warning mx-1'
                            src='data:image/svg+xml;base64,PHN2ZyBhcmlhLWhpZGRlbj0idHJ1ZSIgZm9jdXNhYmxlPSJmYWxzZSIgZGF0YS1wcmVmaXg9ImZhcyIgZGF0YS1pY29uPSJzdGFyIiBjbGFzcz0ic3ZnLWlubGluZS0tZmEgZmEtc3RhciBmYS13LTE4IiByb2xlPSJpbWciIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmlld0JveD0iMCAwIDU3NiA1MTIiPjxwYXRoIGZpbGw9ImN1cnJlbnRDb2xvciIgZD0iTTI1OS4zIDE3LjhMMTk0IDE1MC4yIDQ3LjkgMTcxLjVjLTI2LjIgMy44LTM2LjcgMzYuMS0xNy43IDU0LjZsMTA1LjcgMTAzLTI1IDE0NS41Yy00LjUgMjYuMyAyMy4yIDQ2IDQ2LjQgMzMuN0wyODggNDM5LjZsMTMwLjcgNjguN2MyMy4yIDEyLjIgNTAuOS03LjQgNDYuNC0zMy43bC0yNS0xNDUuNSAxMDUuNy0xMDNjMTktMTguNSA4LjUtNTAuOC0xNy43LTU0LjZMMzgyIDE1MC4yIDMxNi43IDE3LjhjLTExLjctMjMuNi00NS42LTIzLjktNTcuNCAweiI+PC9wYXRoPjwvc3ZnPg=='>
                        </ion-icon>
                        <ion-icon class='text-warning mx-1'
                            src='data:image/svg+xml;base64,PHN2ZyBhcmlhLWhpZGRlbj0idHJ1ZSIgZm9jdXNhYmxlPSJmYWxzZSIgZGF0YS1wcmVmaXg9ImZhcyIgZGF0YS1pY29uPSJzdGFyIiBjbGFzcz0ic3ZnLWlubGluZS0tZmEgZmEtc3RhciBmYS13LTE4IiByb2xlPSJpbWciIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmlld0JveD0iMCAwIDU3NiA1MTIiPjxwYXRoIGZpbGw9ImN1cnJlbnRDb2xvciIgZD0iTTI1OS4zIDE3LjhMMTk0IDE1MC4yIDQ3LjkgMTcxLjVjLTI2LjIgMy44LTM2LjcgMzYuMS0xNy43IDU0LjZsMTA1LjcgMTAzLTI1IDE0NS41Yy00LjUgMjYuMyAyMy4yIDQ2IDQ2LjQgMzMuN0wyODggNDM5LjZsMTMwLjcgNjguN2MyMy4yIDEyLjIgNTAuOS03LjQgNDYuNC0zMy43bC0yNS0xNDUuNSAxMDUuNy0xMDNjMTktMTguNSA4LjUtNTAuOC0xNy43LTU0LjZMMzgyIDE1MC4yIDMxNi43IDE3LjhjLTExLjctMjMuNi00NS42LTIzLjktNTcuNCAweiI+PC9wYXRoPjwvc3ZnPg=='>
                        </ion-icon>
                        <ion-icon class='text-warning mx-2'
                            src='data:image/svg+xml;base64,PHN2ZyBhcmlhLWhpZGRlbj0idHJ1ZSIgZm9jdXNhYmxlPSJmYWxzZSIgZGF0YS1wcmVmaXg9ImZhcyIgZGF0YS1pY29uPSJzdGFyIiBjbGFzcz0ic3ZnLWlubGluZS0tZmEgZmEtc3RhciBmYS13LTE4IiByb2xlPSJpbWciIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmlld0JveD0iMCAwIDU3NiA1MTIiPjxwYXRoIGZpbGw9ImN1cnJlbnRDb2xvciIgZD0iTTI1OS4zIDE3LjhMMTk0IDE1MC4yIDQ3LjkgMTcxLjVjLTI2LjIgMy44LTM2LjcgMzYuMS0xNy43IDU0LjZsMTA1LjcgMTAzLTI1IDE0NS41Yy00LjUgMjYuMyAyMy4yIDQ2IDQ2LjQgMzMuN0wyODggNDM5LjZsMTMwLjcgNjguN2MyMy4yIDEyLjIgNTAuOS03LjQgNDYuNC0zMy43bC0yNS0xNDUuNSAxMDUuNy0xMDNjMTktMTguNSA4LjUtNTAuOC0xNy43LTU0LjZMMzgyIDE1MC4yIDMxNi43IDE3LjhjLTExLjctMjMuNi00NS42LTIzLjktNTcuNCAweiI+PC9wYXRoPjwvc3ZnPg=='>
                        </ion-icon>
                        <ion-icon class='text-warning mx-2'
                            src='data:image/svg+xml;base64,PHN2ZyBhcmlhLWhpZGRlbj0idHJ1ZSIgZm9jdXNhYmxlPSJmYWxzZSIgZGF0YS1wcmVmaXg9ImZhcyIgZGF0YS1pY29uPSJzdGFyIiBjbGFzcz0ic3ZnLWlubGluZS0tZmEgZmEtc3RhciBmYS13LTE4IiByb2xlPSJpbWciIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmlld0JveD0iMCAwIDU3NiA1MTIiPjxwYXRoIGZpbGw9ImN1cnJlbnRDb2xvciIgZD0iTTI1OS4zIDE3LjhMMTk0IDE1MC4yIDQ3LjkgMTcxLjVjLTI2LjIgMy44LTM2LjcgMzYuMS0xNy43IDU0LjZsMTA1LjcgMTAzLTI1IDE0NS41Yy00LjUgMjYuMyAyMy4yIDQ2IDQ2LjQgMzMuN0wyODggNDM5LjZsMTMwLjcgNjguN2MyMy4yIDEyLjIgNTAuOS03LjQgNDYuNC0zMy43bC0yNS0xNDUuNSAxMDUuNy0xMDNjMTktMTguNSA4LjUtNTAuOC0xNy43LTU0LjZMMzgyIDE1MC4yIDMxNi43IDE3LjhjLTExLjctMjMuNi00NS42LTIzLjktNTcuNCAweiI+PC9wYXRoPjwvc3ZnPg=='>
                        </ion-icon>
                        <ion-icon class='mx-1'
                            src='data:image/svg+xml;base64,PHN2ZyBhcmlhLWhpZGRlbj0idHJ1ZSIgZm9jdXNhYmxlPSJmYWxzZSIgZGF0YS1wcmVmaXg9ImZhcyIgZGF0YS1pY29uPSJzdGFyIiBjbGFzcz0ic3ZnLWlubGluZS0tZmEgZmEtc3RhciBmYS13LTE4IiByb2xlPSJpbWciIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmlld0JveD0iMCAwIDU3NiA1MTIiPjxwYXRoIGZpbGw9ImN1cnJlbnRDb2xvciIgZD0iTTI1OS4zIDE3LjhMMTk0IDE1MC4yIDQ3LjkgMTcxLjVjLTI2LjIgMy44LTM2LjcgMzYuMS0xNy43IDU0LjZsMTA1LjcgMTAzLTI1IDE0NS41Yy00LjUgMjYuMyAyMy4yIDQ2IDQ2LjQgMzMuN0wyODggNDM5LjZsMTMwLjcgNjguN2MyMy4yIDEyLjIgNTAuOS03LjQgNDYuNC0zMy43bC0yNS0xNDUuNSAxMDUuNy0xMDNjMTktMTguNSA4LjUtNTAuOC0xNy43LTU0LjZMMzgyIDE1MC4yIDMxNi43IDE3LjhjLTExLjctMjMuNi00NS42LTIzLjktNTcuNCAweiI+PC9wYXRoPjwvc3ZnPg=='>
                        </ion-icon>

                        <p class='mx-3'>4.9</p>
                        <p class='mx-3'>123 reviewers</p>

                    </div>
                    <div class='d-flex align-items-center'>
                        <h5 class='mb-0'>US $6.19 - 12.26</h5>
                        <p class='mb-0 ml-3'>US $13.18 - 26.08</p>
                        <span class='badge text-primary bg-primary-light rounded-0 ml-3'>-53%</span>
                    </div>

                    <div class="d-flex">
                        <div id="color" class="wrapper my-3">
                            <p class="mb-1">Color</p>
                            <div class="d-flex">
                                <div>
                                    <input type="radio" value='green' name="radio" id="radio1" class="radio" checked=''>
                                    <label for="radio1">&nbsp;</label>
                                </div>
                                <div>
                                    <input type="radio" value='green' name="radio" id="radio2" class="radio">
                                    <label for="radio2">&nbsp;</label>
                                </div>
                                <div>
                                    <input type="radio"  value='blue' name="radio" id="radio3" class="radio">
                                    <label for="radio3">&nbsp;</label>
                                </div>
                                <div>
                                    <input type="radio" value='black' name="radio" id="radio4" class="radio">
                                    <label for="radio4">&nbsp;</label>
                                </div>
                                <div>
                                    <input type="radio"  value='gray' name="radio" id="radio5" class="radio">
                                    <label for="radio5">&nbsp;</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex">
                    <div class='my-3'>
                            <label for='size' class='mb-1'>avaible sizes</label>
                            <select id='size' class="form-control form-control-sm js-select2">
                                <option value='S'>S</option>
                                <option value='M'>M</option>
                                <option value='L'>L</option>
                                <option value='XL'>XL</option>
                                <option value='XXL'>XXL</option>
                                <option value='3XL'>3XL</option>
                            </select>
                        </div>
                        <div class='ml-5 my-3'>
                            <p class='mb-1'>avaible sizes</p>

                            <div class='input-group input-group-sm mb-3 quantity-input'>
                                <div class='input-group-prepend'>
                                    <button class='btn btn-outline-secondary minus' id='minus' type='button'>
                                        -
                                    </button>
                                </div>
                                <input id='quantity' type='text' min='1' value='1' class='form-control quantity-input'
                                    placeholder='' aria-label='' aria-describedby='basic-addon1' />
                                <div class='input-group-append'>
                                    <button class='btn btn-outline-secondary plus' id='plus' type='button'>
                                        +
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex my-3">
                        <span>
                            <p class='mb-1'>Estimated arrival date</p>
                            <p>20th july - 25th oct </p>
                        </span>
                        <span class='ml-auto'>
                            <p class=' mb-1'>Shipping From</p>
                            <p class=''>China</p>
                        </span>
                    </div>
                    <div class=' d-flex'>
                        <button class='btn btn-primary btn-sm'>Buy now</button>
                        <button  id='add-to-cart' class='add-to-cart btn btn-warning  ml-2 btn-sm'>Add to cart</button>
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
