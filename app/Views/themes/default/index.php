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
        <?= script_tag('assets/shared/jquery/jquery-3.4.1.min.js'); ?>
        <?= script_tag('assets/plugins/toastify-js/toastify-js.js'); ?>
    </head>

    <body class='pt-4 d-flex flex-column'>
        <header class='w-100 fixed-top bg-white shadow-xs'>
            <nav class="navbar navbar-expand-md navbar-light container">
                <a class="navbar-brand" href="#">bayshop</a>
                <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-collapse offcanvas-collapse d-none" id="navbarsExampleDefault">
                    <form class="d-flex flex-fill mx-md-5 my-2 my-lg-0">
                        <input class="form-control form-control-sm search-form mr-sm-2" type="text" placeholder="Search"
                            aria-label="Search">
                        <button class="btn btn-primary btn-sm shadow-sm my-2 my-sm-0" type="submit">Search</button>
                    </form>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Switch account</a>
                        </li>
                        <li class='dropdown ml-2 d-flex flex-row align-items-center font-weight-light'>
                            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Admin</a>
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
        </header>
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
											<ion-icon src="data:image/svg+xml,%3C%3Fxml version='1.0' encoding='iso-8859-1'%3F%3E%3C!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0) --%3E%3Csvg version='1.1' id='Layer_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px' viewBox='0 0 504 504' style='enable-background:new 0 0 504 504;' xml:space='preserve'%3E%3Cg%3E%3Cg%3E%3Cpath d='M377.6,0H126C56.8,0,0,56.8,0,126.4V378c0,69.2,56.8,126,126,126h251.6c69.6,0,126.4-56.8,126.4-126.4V126.4 C504,56.8,447.2,0,377.6,0z M324,409.2c-11.2,0-72.8-1.6-88.8-1.6c-15.6,0-98-25.2-98-114.8c0-16,0-32,0-48 c0-14.8-0.4-29.6-0.4-44.4c0-4.4,0-8.4,0-12.8c0-22.4-2-48,5.2-69.6c5.6-16.4,18.8-22.4,35.2-22.4c39.6,0,42,40.4,42.4,80.4H276 h58c18,0,31.6,18.4,31.6,46c0,27.6-29.2,34-44.4,34H218.4c-0.4,16-1.2,30.8-1.2,39.2c0,17.6,6.8,36.8,50.4,36.8h61.2 c15.2,0,38,10.8,38,42.8C367.2,406.8,335.2,409.2,324,409.2z'/%3E%3C/g%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3C/svg%3E%0A" />
										</a>
										<a href='/' class='btn p-1'>
											<ion-icon src="data:image/svg+xml,%3C%3Fxml version='1.0' encoding='iso-8859-1'%3F%3E%3C!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0) --%3E%3Csvg version='1.1' id='Layer_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px' viewBox='0 0 504 504' style='enable-background:new 0 0 504 504;' xml:space='preserve'%3E%3Cg%3E%3Cg%3E%3Cpolygon points='219.6,202.4 219.6,294.4 304.4,248.8 '/%3E%3C/g%3E%3C/g%3E%3Cg%3E%3Cg%3E%3Cpath d='M377.6,0H126C56.8,0,0,56.8,0,126.4V378c0,69.2,56.8,126,126,126h251.6c69.6,0,126.4-56.8,126.4-126.4V126.4 C504,56.8,447.2,0,377.6,0z M408,264.4c0,26.4-2.4,53.2-2.4,53.2s-2.8,22.4-12,32.4c-12,13.2-25.2,13.2-31.2,14 c-44,3.2-110,3.6-110,3.6s-82-1.2-107.2-3.6c-6.8-1.2-22.8-0.8-34.8-14c-9.6-10-12-32.4-12-32.4S96,290.8,96,264.4v-24.8 c0-26.4,2.4-53.2,2.4-53.2s2.8-22.4,12-32.4c12-13.2,25.2-13.6,31.2-14.4C186,136.4,252,136,252,136s66,0.4,110,3.6 c6,0.8,19.6,1.2,31.6,14c9.6,10,12,32.8,12,32.8s2.4,26.8,2.4,53.2V264.4z'/%3E%3C/g%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3C/svg%3E%0A" />
										</a>
										<a href='/' class='btn p-1'>
											<ion-icon src="data:image/svg+xml,%3C%3Fxml version='1.0' encoding='iso-8859-1'%3F%3E%3C!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0) --%3E%3Csvg version='1.1' id='Layer_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px' viewBox='0 0 504 504' style='enable-background:new 0 0 504 504;' xml:space='preserve'%3E%3Cg%3E%3Cg%3E%3Cpolygon points='219.6,202.4 219.6,294.4 304.4,248.8 '/%3E%3C/g%3E%3C/g%3E%3Cg%3E%3Cg%3E%3Cpath d='M377.6,0H126C56.8,0,0,56.8,0,126.4V378c0,69.2,56.8,126,126,126h251.6c69.6,0,126.4-56.8,126.4-126.4V126.4 C504,56.8,447.2,0,377.6,0z M408,264.4c0,26.4-2.4,53.2-2.4,53.2s-2.8,22.4-12,32.4c-12,13.2-25.2,13.2-31.2,14 c-44,3.2-110,3.6-110,3.6s-82-1.2-107.2-3.6c-6.8-1.2-22.8-0.8-34.8-14c-9.6-10-12-32.4-12-32.4S96,290.8,96,264.4v-24.8 c0-26.4,2.4-53.2,2.4-53.2s2.8-22.4,12-32.4c12-13.2,25.2-13.6,31.2-14.4C186,136.4,252,136,252,136s66,0.4,110,3.6 c6,0.8,19.6,1.2,31.6,14c9.6,10,12,32.8,12,32.8s2.4,26.8,2.4,53.2V264.4z'/%3E%3C/g%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3C/svg%3E%0A" />
										</a>
										<a href='/' class='btn p-1'>
											<ion-icon src="data:image/svg+xml,%3C%3Fxml version='1.0' encoding='iso-8859-1'%3F%3E%3C!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0) --%3E%3Csvg version='1.1' id='Layer_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px' viewBox='0 0 504 504' style='enable-background:new 0 0 504 504;' xml:space='preserve'%3E%3Cg%3E%3Cg%3E%3Cpath d='M377.6,0H126C56.8,0,0,56.8,0,126.4V378c0,69.2,56.8,126,126,126h251.6c69.6,0,126.4-56.8,126.4-126.4V126.4 C504,56.8,447.2,0,377.6,0z M319.6,252H272v156h-60V252h-32v-64h28v-27.2c0-25.6,12.8-66,66.8-66H324V148h-34.8 c-5.6,0-13.2,3.6-13.2,16v24h49.2L319.6,252z'/%3E%3C/g%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3C/svg%3E%0A" />
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
        <?= script_tag('assets/shared/jquery/jquery-3.4.1.min.js'); ?>
        <?= script_tag('assets/admin/js/watch.js'); ?>
        <?= script_tag('assets/plugins/toastify-js/toastify-js.js'); ?>
        <?= script_tag('assets/plugins/jquery-multifile/jquery-multifile.js'); ?>
        <?= script_tag('assets/shared/bootstrap-4.4.1/js/bootstrap.bundle.min.js'); ?>
        <?= script_tag('assets/plugins/select2/dist/js/select2.min.js'); ?>
        <?= script_tag('assets/plugins/dataTables/datatables.min.js'); ?>
        <?= script_tag('assets/plugins/summernote/summernote-bs4.min.js'); ?>
        <?= script_tag("assets/shared/jquery/jquery-ui.js"); ?>
        <?= script_tag('/assets/admin/js/script.js'); ?>
        <script>
        $('.dropdown').mouseover(() => {
            console.log('easy');
        })
        </script>
    </body>

</html>
