<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Offcanvas template for Bootstrap</title>
    <?= link_tag('assets/admin/css/style.css'); ?>
    <?= script_tag(['src' => 'https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.esm.js', 'type'  => 'module']); ?>
    <?= script_tag('assets/shared/jquery/jquery-3.5.1.min.js'); ?>
    <?= script_tag("/assets/plugins/bgswitcher/jquery.bgswitcher.js"); ?>
    <?= script_tag('assets/plugins/toastify-js/toastify-js.js'); ?>
    <?= script_tag('assets/plugins/caliculator/jautocalc.min.js'); ?>
</head>

<body class='d-flex flex-column'>
    <header class='w-100 fixed-top bg-white shadow-xs'>
        <nav class="navbar navbar-expand-md navbar-light align-items-center container border-bottom">
            <a class="navbar-brand" href="/">bayshop</a>
            <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse offcanvas-collapse d-none" id="navbarsExampleDefault">
                <form class="d-flex flex-fill align-items-center mx-md-5 my-2 my-lg-0">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <select class='form-control js-select'>
                                <option>products</option>
                                <option>Suppliers</option>
                            </select>
                        </div>
                        <input type="text" class="form-control">
                    </div>
                    <button class="btn btn-primary shadow-sm m-2 my-sm-0" type="submit">Search</button>
                </form>
                <ul id='left-nav' class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link d-flex flex-column" href="<?=base_url('shopping/cart')?>">
                            <ion-icon class='header-icon mx-auto' name="cart-outline"></ion-icon>
                            <!-- <span id='cart-counter' class='badge total-count badge-primary'></span> -->
                            <small>Cart</small>
                        </a>
                    </li>
                    <li class="nav-item ml-3">
                        <a class="nav-link d-flex flex-column text-center" href="#">
                            <ion-icon class='header-icon mx-auto' name="mail-outline"></ion-icon>
                            <small>messages</small>
                        </a>
                    </li>
                    <li class="nav-item ml-3">
                        <a class="nav-link d-flex flex-column text-center" href="#">
                            <ion-icon class='header-icon mx-auto' name="archive-outline"></ion-icon>
                            <small>Orders</small>
                        </a>
                    </li>
                    <li class='dropdown ml-2 d-flex flex-row align-items-center font-weight-light'>
                        <a class="nav-link dropdown-toggle d-flex flex-column" href="http://example.com" id="dropdown01"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <ion-icon class='header-icon mx-auto' name="person-outline"></ion-icon>
                            <small>Account</small>
                        </a>
                        <ul class='dropdown-menu shadow notification-pane font-weight-light'
                            aria-labelledby='dropdownMenuButton'>
                            <li class='dropdown-item rounded'>
                                <a class='py-3 d-flex' href="<?= base_url('admin/profile') ?>">
                                    <span class='dropdown-icon'>
                                        <ion-icon name="person-outline"></ion-icon>
                                    </span>
                                    <span class='d-flex flex-column ml-2'>
                                        <h6 class='text-primary-dark-30'>Settings</h6>
                                        <small class=''>set up your profile</small>
                                    </span>
                                </a>
                            </li>
                            <li class='dropdown-item rounded'>
                                <a class='py-3 d-flex' href="<?= base_url('auth/logout') ?>" onClick={this.logout}>
                                    <span class='dropdown-icon'>
                                        <ion-icon name="settings-outline"></ion-icon>
                                    </span>
                                    <span class='d-flex flex-column ml-2'>
                                        <h6 class='text-primary-dark-30'>Logout</h6>
                                        <small class=''>To keep your account secure</small>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <nav id='nav' class='nav container nav-underline text-capitalize  cv-category-nav' id='navAccordion'>
            <li class='nav-item'>
                <a href='/' class='nav-link cv-nav selected'>
                    <ion-icon name='list'></ion-icon>
                    categories
                </a>
            </li>
            <li class='nav-item'>
                <a href='/products' class='nav-link cv-nav'>
                    <ion-icon name='home'></ion-icon>
                    Products
                </a>
            </li>
            <li class='nav-item'>
                <a href='/contact' activeClass='selected' class='nav-link nav-link-collapse cv-nav'>
                    <ion-icon
                        src="data:image/svg+xml,%3Csvg height='512pt' viewBox='0 0 512 512' width='512pt' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='m162.296875 505.039062c-33.746094-35.136718-37.246094-82.339843-37.390625-98.476562l-90.582031 38.539062c-20.847657 8.871094-34.32031275 29.242188-34.324219 51.898438v14.992188l169.601562.003906c-2.523437-2.207032-4.964843-4.519532-7.304687-6.957032zm0 0'/%3E%3Cpath d='m477.675781 445.101562-90.582031-38.539062c-.144531 16.140625-3.636719 63.332031-37.390625 98.472656-2.339844 2.441406-4.78125 4.757813-7.308594 6.960938l169.605469.003906v-15.003906c-.003906-22.652344-13.476562-43.023438-34.324219-51.894532zm0 0'/%3E%3Cpath d='m357.070312 384.25c-26.355468 25.527344-62.230468 39.582031-101.070312 39.582031s-74.714844-14.054687-101.070312-39.582031v19.222656c-.136719 4.878906-.550782 50.011719 29.003906 80.78125 17.679687 18.410156 41.929687 27.742188 72.066406 27.742188 30.140625 0 54.386719-9.332032 72.066406-27.742188 29.554688-30.769531 29.144532-75.902344 29.003906-80.78125zm0 0'/%3E%3Cpath d='m113.953125 286.832031v-107.09375c0-10.589843 1.023437-20.984375 3.03125-31.085937h-13.03125c-24.8125 0-45 20.1875-45 45v64.507812c0 24.816406 20.1875 45.003906 45 45.003906h10.957031c-.628906-5.375-.957031-10.824218-.957031-16.332031zm0 0'/%3E%3Cpath d='m408.046875 148.652344h-13.429687c2.273437 10.738281 3.429687 21.804687 3.429687 33.128906v105.050781c0 5.507813-.328125 10.957031-.957031 16.328125h10.957031c24.8125 0 45-20.183594 45-45v-64.507812c0-24.8125-20.1875-45-45-45zm0 0'/%3E%3Cpath d='m256 0c-89.503906 0-142.570312 40.855469-155.402344 118.734375 1.113282-.046875 2.230469-.082031 3.355469-.082031h22.285156c6.488281-15.324219 14.554688-27.023438 24.515625-35.570313 12.164063-10.4375 26.570313-15.726562 42.820313-15.726562 17.351562 0 33.328125 6.203125 46.164062 11.1875 5.300781 2.0625 13.265625 5.152343 16.253907 5.441406 2.914062-.292969 10.640624-3.363281 15.78125-5.40625 12.589843-5 28.257812-11.226563 45.503906-11.226563 37 0 57.167968 27.59375 67.664062 51.296876h23.105469c1.125 0 2.242187.039062 3.355469.085937-12.832032-77.878906-65.898438-118.734375-155.402344-118.734375zm0 0'/%3E%3Cpath d='m341.15625 324.121094c-14.007812 9.34375-30.316406 14.28125-47.15625 14.28125h-23c-8.28125 0-15-6.714844-15-15s6.71875-15 15-15h23c10.894531 0 21.449219-3.195313 30.511719-9.238282l43.535156-29.03125v-88.351562c0-17.171875-3.296875-34.226562-10.097656-49.996094-28.109375-65.1875-73.5625-17.789062-101.949219-17.789062-29.25 0-79.058594-50.335938-105.121094 24.074218-4.6875 13.378907-6.925781 27.492188-6.925781 41.667969v107.089844c0 59.097656 46.988281 107.003906 112.046875 107.003906 57.269531 0 100.527344-37.125 110.066406-86.324219zm0 0'/%3E%3C/svg%3E">
                    </ion-icon>
                    Suppliers
                </a>
            </li>
            <li class='nav-item ml-auto'>
                <a href='/faq' class='nav-link cv-nav'>
                    <ion-icon
                        src="data:image/svg+xml,%3C%3Fxml version='1.0'%3F%3E%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 96 96' width='512' height='512'%3E%3Cg id='_21-information' data-name='21-information'%3E%3Cg id='Glyph'%3E%3Cpath d='M60,20c1.437,0,2.856.072,4.255.206A37.724,37.724,0,0,0,36,8C16.149,8,0,22.355,0,40A29.734,29.734,0,0,0,8.5,60.666c-1.992,3.986-4.184,6.7-6.29,7.756A4,4,0,0,0,4,76a43.452,43.452,0,0,0,19.915-4.477A32.849,32.849,0,0,1,20,56C20,36.149,37.944,20,60,20Z'/%3E%3Cpath d='M93.789,84.422c-2.106-1.053-4.3-3.77-6.29-7.756A29.734,29.734,0,0,0,96,56c0-17.645-16.149-32-36-32S24,38.355,24,56,40.149,88,60,88a40.175,40.175,0,0,0,10.413-1.358A42.8,42.8,0,0,0,92,92a4,4,0,0,0,1.789-7.578ZM64,72H56V56h8ZM60,52a4,4,0,1,1,4-4A4,4,0,0,1,60,52Z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E%0A">
                    </ion-icon>
                    faq
                </a>
            </li>
            <li class='nav-item'>
                <a href='/faq' class='nav-link cv-nav'>
                    Uganda - Ugx
                </a>
            </li>
        </nav>
    </header>
    <nav aria-label="breadcrumb" class='container mt-5 d-flex py-0 justify-content-between align-items-center'>
    <h5 class='pb-0'><?=$page_title?></h5>
  <ol class="breadcrumb bg-transparent pt-3 pb-1">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="/products">Products</a></li>
    <li class="breadcrumb-item active" aria-current="page"><?=$page_title?></li>
  </ol>
</nav>
    <?php include $page_name . '.php'; ?>
    <footer class="mt-4 bg-white">
        <div class='mx-auto container py-3'>
            <div class='row py-2'>
                <div class='col-md-3 col-6'>
                    <p class='cv-title'>Contact</p>
                    <ul class='nav flex-column '>
                        <li class='nav-item'>
                            <a class='nav-link p-1' href='/'>
                                +(256)-758-307272
                            </a>
                        </li>
                        <li class='nav-item'>
                            <a class='nav-link p-1' href='/'>
                                admin@biz.ug
                            </a>
                        </li>
                        <li class='nav-item'>
                            <a class='nav-link p-1' href='/'>
                                zainab aziz emporium
                            </a>
                        </li>
                        <li class='footer-social-icons'>
                            <a class='btn p-1' href='/'>
                                <ion-icon
                                    src="data:image/svg+xml,%3C%3Fxml version='1.0' encoding='iso-8859-1'%3F%3E%3C!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0) --%3E%3Csvg version='1.1' id='Layer_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px' viewBox='0 0 504 504' style='enable-background:new 0 0 504 504;' xml:space='preserve'%3E%3Cg%3E%3Cg%3E%3Cpath d='M377.6,0H126C56.8,0,0,56.8,0,126.4V378c0,69.2,56.8,126,126,126h251.6c69.6,0,126.4-56.8,126.4-126.4V126.4 C504,56.8,447.2,0,377.6,0z M324,409.2c-11.2,0-72.8-1.6-88.8-1.6c-15.6,0-98-25.2-98-114.8c0-16,0-32,0-48 c0-14.8-0.4-29.6-0.4-44.4c0-4.4,0-8.4,0-12.8c0-22.4-2-48,5.2-69.6c5.6-16.4,18.8-22.4,35.2-22.4c39.6,0,42,40.4,42.4,80.4H276 h58c18,0,31.6,18.4,31.6,46c0,27.6-29.2,34-44.4,34H218.4c-0.4,16-1.2,30.8-1.2,39.2c0,17.6,6.8,36.8,50.4,36.8h61.2 c15.2,0,38,10.8,38,42.8C367.2,406.8,335.2,409.2,324,409.2z'/%3E%3C/g%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3C/svg%3E%0A" />
                            </a>
                            <a href='/' class='btn p-1'>
                                <ion-icon
                                    src="data:image/svg+xml,%3C%3Fxml version='1.0' encoding='iso-8859-1'%3F%3E%3C!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0) --%3E%3Csvg version='1.1' id='Layer_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px' viewBox='0 0 504 504' style='enable-background:new 0 0 504 504;' xml:space='preserve'%3E%3Cg%3E%3Cg%3E%3Cpolygon points='219.6,202.4 219.6,294.4 304.4,248.8 '/%3E%3C/g%3E%3C/g%3E%3Cg%3E%3Cg%3E%3Cpath d='M377.6,0H126C56.8,0,0,56.8,0,126.4V378c0,69.2,56.8,126,126,126h251.6c69.6,0,126.4-56.8,126.4-126.4V126.4 C504,56.8,447.2,0,377.6,0z M408,264.4c0,26.4-2.4,53.2-2.4,53.2s-2.8,22.4-12,32.4c-12,13.2-25.2,13.2-31.2,14 c-44,3.2-110,3.6-110,3.6s-82-1.2-107.2-3.6c-6.8-1.2-22.8-0.8-34.8-14c-9.6-10-12-32.4-12-32.4S96,290.8,96,264.4v-24.8 c0-26.4,2.4-53.2,2.4-53.2s2.8-22.4,12-32.4c12-13.2,25.2-13.6,31.2-14.4C186,136.4,252,136,252,136s66,0.4,110,3.6 c6,0.8,19.6,1.2,31.6,14c9.6,10,12,32.8,12,32.8s2.4,26.8,2.4,53.2V264.4z'/%3E%3C/g%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3C/svg%3E%0A" />
                            </a>
                            <a href='/' class='btn p-1'>
                                <ion-icon
                                    src="data:image/svg+xml,%3C%3Fxml version='1.0' encoding='iso-8859-1'%3F%3E%3C!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0) --%3E%3Csvg version='1.1' id='Layer_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px' viewBox='0 0 504 504' style='enable-background:new 0 0 504 504;' xml:space='preserve'%3E%3Cg%3E%3Cg%3E%3Cpolygon points='219.6,202.4 219.6,294.4 304.4,248.8 '/%3E%3C/g%3E%3C/g%3E%3Cg%3E%3Cg%3E%3Cpath d='M377.6,0H126C56.8,0,0,56.8,0,126.4V378c0,69.2,56.8,126,126,126h251.6c69.6,0,126.4-56.8,126.4-126.4V126.4 C504,56.8,447.2,0,377.6,0z M408,264.4c0,26.4-2.4,53.2-2.4,53.2s-2.8,22.4-12,32.4c-12,13.2-25.2,13.2-31.2,14 c-44,3.2-110,3.6-110,3.6s-82-1.2-107.2-3.6c-6.8-1.2-22.8-0.8-34.8-14c-9.6-10-12-32.4-12-32.4S96,290.8,96,264.4v-24.8 c0-26.4,2.4-53.2,2.4-53.2s2.8-22.4,12-32.4c12-13.2,25.2-13.6,31.2-14.4C186,136.4,252,136,252,136s66,0.4,110,3.6 c6,0.8,19.6,1.2,31.6,14c9.6,10,12,32.8,12,32.8s2.4,26.8,2.4,53.2V264.4z'/%3E%3C/g%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3C/svg%3E%0A" />
                            </a>
                            <a href='/' class='btn p-1'>
                                <ion-icon
                                    src="data:image/svg+xml,%3C%3Fxml version='1.0' encoding='iso-8859-1'%3F%3E%3C!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0) --%3E%3Csvg version='1.1' id='Layer_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px' viewBox='0 0 504 504' style='enable-background:new 0 0 504 504;' xml:space='preserve'%3E%3Cg%3E%3Cg%3E%3Cpath d='M377.6,0H126C56.8,0,0,56.8,0,126.4V378c0,69.2,56.8,126,126,126h251.6c69.6,0,126.4-56.8,126.4-126.4V126.4 C504,56.8,447.2,0,377.6,0z M319.6,252H272v156h-60V252h-32v-64h28v-27.2c0-25.6,12.8-66,66.8-66H324V148h-34.8 c-5.6,0-13.2,3.6-13.2,16v24h49.2L319.6,252z'/%3E%3C/g%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3C/svg%3E%0A" />
                            </a>
                        </li>
                    </ul>
                </div>
                <div class='col-md-3 col-6'>
                    <p class='cv-title'>policies & info</p>
                    <ul class='nav flex-column'>
                        <li class='nav-item'>
                            <a class='nav-link p-1' href='/'>
                                Terms Conditions
                            </a>
                        </li>
                        <li class='nav-item '>
                            <a class='nav-link p-1' href='/'>
                                Policy for Sellers
                            </a>
                        </li>
                        <li class='nav-item'>
                            <a class='nav-link p-1' href='/'>
                                Policy for buyers
                            </a>
                        </li>
                        <li class='nav-item'>
                            <a class='nav-link p-1' href='/'>
                                Wholesale Policy
                            </a>
                        </li>
                    </ul>
                </div>
                <div class='col-md-3  col-6'>
                    <p class='cv-title'>policies & info</p>
                    <ul class='nav flex-column'>
                        <li class='nav-item'>
                            <a class='nav-link p-1' href='/'>
                                Seller Login
                            </a>
                        </li>
                        <li class='nav-item'>
                            <a class='nav-link p-1' href='/'>
                                Seller Sign up
                            </a>
                        </li>
                        <li class='nav-item'>
                            <a class='nav-link p-1' href='/'>
                                Seller Handbook
                            </a>
                        </li>
                        <li class='nav-item'>
                            <a class='nav-link p-1' href='/'>
                                Panel Seller FAQs
                            </a>
                        </li>
                    </ul>
                </div>
                <div class='col-md-3  col-6'>
                    <p class='cv-title'>subscribe</p>
                    <ul class='nav flex-column'>
                        <li class='nav-item'>
                            <a class='nav-link p-1' href='/'>
                                subscribe to our newsletter for the latest updates
                            </a>
                        </li>
                        <li class='nav-item'>
                            <input type='text' class='form-control' />
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class='cv-copyright text-center p-2 px-3 d-flex justify-content-between align-items-center'>
            <span class=" container text-center">
                Copyright © 2020 <a href='/'>biz.ug</a>
            </span>
        </div>
    </footer>

    <?= script_tag('assets/admin/js/watch.js'); ?>
    <?= script_tag('assets/plugins/toastify-js/toastify-js.js'); ?>
    <?= script_tag('assets/plugins/jquery-multifile/jquery-multifile.js'); ?>
    <?= script_tag('assets/shared/bootstrap-4.4.1/js/bootstrap.bundle.min.js'); ?>
    <?= script_tag('assets/plugins/select2/dist/js/select2.min.js'); ?>
    <?= script_tag('assets/plugins/dataTables/datatables.min.js'); ?>
    <?= script_tag('assets/plugins/summernote/summernote-bs4.min.js'); ?>
    <?= script_tag("assets/shared/jquery/jquery-ui.js"); ?>
    <?= script_tag('/assets/admin/js/script.js'); ?>
    <?= script_tag('/assets/plugins/toJson/formToJson.min.js'); ?>
    <script>
    $(".js-select").select2();
    $('#minus').click(()=>{
        JSON.parse($('#quantity').val() > 0)?$('#quantity').val(JSON.parse($('#quantity').val())-1):'';
    });
    $('#plus').click(()=>{
        return $('#quantity').val(JSON.parse($('#quantity').val()) + 1)
    });
    $("#add-to-cart").click(function() {
        const session = <?=json_encode($_SESSION['cart'])?> || [] ;
        const body = {
            id: '<?= $product['id']?>',
            qty: $('#quantity').val(),
            size: $('#size').val(),
            color: $(".radio:checked").val(),
            slug: '<?=$product['slug']?>'
        }
        if (!session.find(e => e.id == '<?= $product['id']?>') || session.length < 1 ) {
            $.post("/home/add_to_cart", body, function(data, status) {
            session.push(body)
            alert("Data: " + data + "\nStatus: " + status);
        });
        }  
    });
    </script>
    <script>
    window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById("nav");
var leftNavbar = document.getElementById("left-nav");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("d-none");
    leftNavbar.classList.add("d-none");
  } else {
    navbar.classList.remove("d-none");
    leftNavbar.classList.remove("d-none");
  }
}
</script>
</body>

</html>
