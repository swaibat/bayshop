<?php function menu($page_name, $value, $type)
{
	if ($type == 'child') {
		echo (preg_match("/$value/i", $page_name)) ? 'on-outline' : 'off';
	} else {
		echo (preg_match("/$value/i", $page_name)) ? $type : '';
	}
}
?>
<ul class="navbar-nav mr-auto sidenav bg-white -light vh-100" id="navAccordion">
	<li class="nav-item shadow-sm p-2 m-0 h-3 d-flex justify-content-center">
		<a class="navbar-brand p-0" href="/"><img height="40" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' width='1521' height='455.43' viewBox='0 0 1521 455.43'%3E%3Cdefs%3E%3Cstyle%3E.a%7Bfill:%23b5b3b3;%7D.b%7Bfill:%23e8e8e8;%7D.c%7Bstroke:%23fff;%7D.d%7Bfont-size:336px;font-family:SimplyRounded, Simply Rounded;%7D.e%7Bfilter:url(%23a);%7D%3C/style%3E%3Cfilter id='a' x='96.5' y='68.101' width='287.788' height='319.45' filterUnits='userSpaceOnUse'%3E%3CfeOffset dy='3' input='SourceAlpha'/%3E%3CfeGaussianBlur stdDeviation='3' result='b'/%3E%3CfeFlood flood-opacity='0.161'/%3E%3CfeComposite operator='in' in2='b'/%3E%3CfeComposite in='SourceGraphic'/%3E%3C/filter%3E%3C/defs%3E%3Cg transform='translate(-0.301 0)'%3E%3Cpath class='a' d='M405.493,412.764c-69.689,56.889-287.289,56.889-355.556,0-69.689-56.889-62.578-300.089,0-364.089s292.978-64,355.556,0S475.182,355.876,405.493,412.764Z'/%3E%3Cpath class='b' d='M229.138,313.209c-62.578,49.778-132.267,75.378-197.689,76.8C-16.907,307.52-6.951,106.987,49.938,48.676,101.138-3.946,261.849-13.9,354.294,18.809,377.049,112.676,330.116,232.142,229.138,313.209Z'/%3E%3Cg class='e' transform='matrix(1, 0, 0, 1, 0.3, 0)'%3E%3Cpath class='c' d='M288.294,407.437H140.96V106.987H272.367c23.893,0,41.812,1.767,59.731,7.07,15.928,5.3,29.865,10.6,37.829,19.44,15.928,15.906,21.9,33.58,21.9,53.021,0,22.976-7.964,40.649-25.883,53.021-5.973,3.534-9.955,7.07-11.946,7.07q-2.986,2.651-11.946,5.3c21.9,3.534,37.829,12.372,49.776,24.743s17.919,28.278,17.919,47.719c0,21.209-7.964,38.882-23.893,54.788C367.935,398.6,334.089,407.437,288.294,407.437Zm-71.676-178.5h35.838c21.9,0,35.838-1.767,45.793-5.3s15.928-12.372,15.928-26.51-3.981-22.976-13.938-26.51-25.883-7.07-47.784-7.07H216.618v65.392Zm0,121.947h51.767c21.9,0,37.829-1.767,47.784-7.07S332.1,329.673,332.1,315.534s-5.973-22.976-17.919-28.278-29.865-7.07-55.748-7.07h-43.8V350.88h1.991Z' transform='translate(-34.96 -32.39)'/%3E%3C/g%3E%3Ctext class='d' transform='translate(469.301 315)'%3E%3Ctspan x='0' y='0'%3Eayshop%3C/tspan%3E%3C/text%3E%3C/g%3E%3C/svg%3E" alt="logo"></a>
	</li>
	<li class="nav-item h-7 d-flex justify-content-between">
		<div class="nav-link m-auto d-flex flex-column text-center" href="#"><img class="nav-avatar img-thumbnail" src="<?= base_url('assets/shared/images/user.svg'); ?>" alt="user"><span class="text-secondary">Admin</span></div>
	</li>
	<ul class="shadow-sm-top pl-0 h-90" data-mcs-theme="dark-2">
		<div class="d-flex justify-content-between -light px-2 pt-2">
			<svg aria-hidden="true" height='15' focusable="false" data-prefix="fas" data-icon="minus-circle" class="svg-inline--fa fa-minus-circle fa-w-16 rotate-90" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
				<path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zM124 296c-6.6 0-12-5.4-12-12v-56c0-6.6 5.4-12 12-12h264c6.6 0 12 5.4 12 12v56c0 6.6-5.4 12-12 12H124z"></path>
			</svg>
			<svg aria-hidden="true" height='15' focusable="false" data-prefix="fas" data-icon="minus-circle" class="svg-inline--fa fa-minus-circle fa-w-16 rotate-20" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
				<path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zM124 296c-6.6 0-12-5.4-12-12v-56c0-6.6 5.4-12 12-12h264c6.6 0 12 5.4 12 12v56c0 6.6-5.4 12-12 12H124z"></path>
			</svg>
		</div>
		<li class="nav-item pt-2 px-2">
			<div class="input-group mt-2 mb-3">
				<input type="text" class="form-control form-control-sm" placeholder="" aria-label="Recipient's username" aria-describedby="basic-addon2">
				<div class="input-group-append"><span class="input-group-text bg-white rounded-sm-right -light" id="basic-addon2"></span></div>
			</div>
		</li>
		<!-- Dashboard -->
		<li class="nav-item">
			<a class="nav-link  nav-link -collapse cv-sidenav pl-3 <?= ($folder_name == 'dashboard') ? 'selected' : ''; ?>" href="<?= base_url('admin/dashboard'); ?>">
				<ion-icon src="data:image/svg+xml,%3Csvg height='511pt' viewBox='0 1 511 511.999' width='511pt' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='m498.699219 222.695312c-.015625-.011718-.027344-.027343-.039063-.039062l-208.855468-208.847656c-8.902344-8.90625-20.738282-13.808594-33.328126-13.808594-12.589843 0-24.425781 4.902344-33.332031 13.808594l-208.746093 208.742187c-.070313.070313-.144532.144531-.210938.214844-18.28125 18.386719-18.25 48.21875.089844 66.558594 8.378906 8.382812 19.441406 13.234375 31.273437 13.746093.484375.046876.96875.070313 1.457031.070313h8.320313v153.695313c0 30.417968 24.75 55.164062 55.167969 55.164062h81.710937c8.285157 0 15-6.71875 15-15v-120.5c0-13.878906 11.292969-25.167969 25.171875-25.167969h48.195313c13.878906 0 25.167969 11.289063 25.167969 25.167969v120.5c0 8.28125 6.714843 15 15 15h81.710937c30.421875 0 55.167969-24.746094 55.167969-55.164062v-153.695313h7.71875c12.585937 0 24.421875-4.902344 33.332031-13.8125 18.359375-18.367187 18.367187-48.253906.027344-66.632813zm-21.242188 45.421876c-3.238281 3.238281-7.542969 5.023437-12.117187 5.023437h-22.71875c-8.285156 0-15 6.714844-15 15v168.695313c0 13.875-11.289063 25.164062-25.167969 25.164062h-66.710937v-105.5c0-30.417969-24.746094-55.167969-55.167969-55.167969h-48.195313c-30.421875 0-55.171875 24.75-55.171875 55.167969v105.5h-66.710937c-13.875 0-25.167969-11.289062-25.167969-25.164062v-168.695313c0-8.285156-6.714844-15-15-15h-22.328125c-.234375-.015625-.464844-.027344-.703125-.03125-4.46875-.078125-8.660156-1.851563-11.800781-4.996094-6.679688-6.679687-6.679688-17.550781 0-24.234375.003906 0 .003906-.003906.007812-.007812l.011719-.011719 208.847656-208.839844c3.234375-3.238281 7.535157-5.019531 12.113281-5.019531 4.574219 0 8.875 1.78125 12.113282 5.019531l208.800781 208.796875c.03125.03125.066406.0625.097656.09375 6.644531 6.691406 6.632813 17.539063-.03125 24.207032zm0 0'/%3E%3C/svg%3E" role="img" class="md hydrated"></ion-icon><span class="nav-item-text">Dashboard</span>
			</a>
		</li>

		<!-- Products -->
		<li class="nav-item">
			<a class="nav-link  nav-link -collapse cv-sidenav pl-3 <?= ($folder_name == 'products') ? 'selected show' : ''; ?>" id="hasSubItems" data-toggle="collapse" data-target="#Products" aria-expanded="false" href="/admin/products">
				<ion-icon name="basket-outline"></ion-icon><span class="nav-item-text">Products</span>
			</a>
			<ul class="nav-second-level cv-collapse collapse <?= ($folder_name == 'products') ? 'show' : ''; ?>" id="Products" data-parent="#navAccordion">
				<li class="nav-item">
					<a class="nav-link pl-2" href="<?= base_url('/admin/products/') ?>"><span class="nav-link -text p-0 ml-n3">
							<ion-icon name="radio-button-<?php menu($page_name, '(products|create|update)', 'child') ?>"></ion-icon>All Products
						</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link  pl-2" href="<?= base_url() . '/admin/types' ?>">
						<span class="nav-link -text p-0 ml-n3">
							<ion-icon name="radio-button-<?php menu($page_name, 'types', 'child'); ?>"></ion-icon>types
						</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link  pl-2" href="<?= base_url() . '/admin/categories' ?>">
						<span class="nav-link -text p-0 ml-n3">
							<ion-icon name="radio-button-<?php menu($page_name, 'categories', 'child'); ?>"></ion-icon>Categories
						</span>
					</a>
				</li>
			</ul>
		</li>

		<!-- Pages -->
		<li class="nav-item">
			<a class="nav-link  nav-link -collapse cv-sidenav pl-3 <?= ($folder_name == 'pages') ? 'selected' : ''; ?>" href="<?= base_url() . "/admin/pages"; ?>">
				<ion-icon name="documents-outline"></ion-icon><span class="nav-item-text">Pages</span>
			</a>
		</li>

		<!-- Posts -->
		<li class="nav-item">
			<a class="nav-link  nav-link -collapse cv-sidenav pl-3 <?= ($folder_name == 'posts') ? 'selected show' : ''; ?>" id="hasSubItems" data-toggle="collapse" data-target="#posts" aria-expanded="false" href="#">
				<ion-icon name="documents-outline"></ion-icon><span class="nav-item-text">Posts</span>
			</a>
			<ul class="nav-second-level cv-collapse collapse <?= ($folder_name == 'posts') ? 'show' : ''; ?>" id="posts" data-parent="#navAccordion">
				<li class="nav-item">
					<a class="nav-link pl-2" href="<?= base_url() . '/admin/posts/' ?>"><span class="nav-link -text p-0 ml-n3">
							<ion-icon name="radio-button-<?php menu($page_name, 'post', 'child') ?>"></ion-icon>All Posts
						</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link  pl-2" href="<?= base_url('admin/posts/categories/') ?>">
						<span class="nav-link -text p-0 ml-n3">
							<ion-icon name="radio-button-<?php menu($page_name, '(post|categories)', 'child'); ?>"></ion-icon>Post Categories
						</span>
					</a>
				</li>
			</ul>
		</li>

		<!-- Users -->
		<li class="nav-item">
			<a class="nav-link  nav-link -collapse cv-sidenav pl-3 <?= ($folder_name == 'users') ? 'selected' : ''; ?>" href="<?= base_url() . '/admin/messages/' ?>">
				<ion-icon name="people-outline" role="img" class="md hydrated" aria-label="people outline"></ion-icon><span class="nav-item-text">Messages</span>
			</a>
		</li>


		<!-- Slider -->
		<li class="nav-item">
			<a class="nav-link  nav-link -collapse cv-sidenav pl-3 <?= ($folder_name == 'sliders') ? 'selected' : ''; ?>" id="hasSubItems" data-toggle="collapse" data-target="#slider" aria-expanded="false" href="/admin/pages">
				<ion-icon name="documents-outline"></ion-icon><span class="nav-item-text">sliders</span>
			</a>
			<ul class="nav-second-level cv-collapse collapse <?= ($folder_name == 'sliders') ? 'show' : ''; ?>" id="slider" data-parent="#navAccordion">
				<li class="nav-item">
					<a class="nav-link pl-2" href="<?= base_url('admin/sliders') ?>"><span class="nav-link -text p-0 ml-n3">
							<ion-icon name="radio-button-<?= ($folder_name == 'sliders') ? 'on-outline' : 'off'; ?>"></ion-icon>Image slider
						</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link  pl-2" href="<?= base_url('admin/sliders/settings') ?>">
						<span class="nav-link -text p-0 ml-n3">
							<ion-icon name="radio-button-<?php menu($page_name, '(sliders|setting)', 'child') ?>"></ion-icon>Slider settings
						</span>
					</a>
				</li>
			</ul>
		</li>

		<!-- Users -->
		<li class="nav-item">
			<a class="nav-link  nav-link -collapse cv-sidenav pl-3 <?= ($folder_name == 'users') ? 'selected' : ''; ?>" href="<?= base_url() . '/admin/users/' ?>">
				<ion-icon name="people-outline" role="img" class="md hydrated" aria-label="people outline"></ion-icon><span class="nav-item-text">Users</span>
			</a>
		</li>

		<!-- Countries -->
		<li class="nav-item">
			<a class="nav-link  nav-link -collapse cv-sidenav pl-3 <?= ($folder_name == 'countries') ? 'selected' : ''; ?>" href="<?= base_url() . "/admin/countries"; ?>">
				<ion-icon name="basket-outline"></ion-icon><span class="nav-item-text">Countries</span>
			</a>
		</li>

		<!-- comments -->
		<li class="nav-item">
			<a class="nav-link  nav-link -collapse cv-sidenav pl-3 <?= ($folder_name == 'comments') ? 'selected' : ''; ?>" id="hasSubItems" data-toggle="collapse" data-target="#comments" aria-expanded="false" href="/admin/pages">
				<ion-icon name="documents-outline"></ion-icon><span class="nav-item-text">Comments</span>
			</a>
			<ul class="nav-second-level cv-collapse collapse <?= ($folder_name == 'comments') ? 'show' : ''; ?>" id="comments" data-parent="#navAccordion">
				<li class="nav-item">
					<a class="nav-link pl-2" href="<?= base_url() . '/admin/comments/' ?>"><span class="nav-link -text p-0 ml-n3">
							<ion-icon name="radio-button-<?php menu($page_name, 'comments_manage', 'child') ?>"></ion-icon>Products comments
						</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link  pl-2" href="<?= base_url() . '/admin/comments_setting/' ?>">
						<span class="nav-link -text p-0 ml-n3">
							<ion-icon name="radio-button-<?php menu($page_name, 'comments_setting', 'child') ?>"></ion-icon>comments settings
						</span>
					</a>
				</li>
			</ul>
		</li>
		<!-- Settings -->
		<li class="nav-item">
			<a  class="nav-link  nav-link -collapse cv-sidenav pl-3 <?= ($folder_name == 'settings') ? 'selected' : ''; ?>"  href="/admin/settings">
				<ion-icon name="cog" role="img" class="md hydrated" aria-label="cog"></ion-icon><span class="nav-item-text">Settings</span>
			</a>
		</li>
		<!-- Backup -->
		<li class="nav-item">
			<a class="nav-link  nav-link -collapse cv-sidenav pl-3 <?= ($folder_name == 'backup') ? 'selected' : ''; ?>" href="<?= base_url() . '/admin/backup_restore' ?>">
				<ion-icon name="server-outline"></ion-icon><span class="nav-item-text">Backup</span>
			</a>
		</li>
	</ul>
</ul>
<div class="header-bg"></div>
<script>
	(function($) {
		$(window).on("load", function() {
			$(".scroll-nav").mCustomScrollbar({
				theme: "dark-2"
			})
		});
	})(jQuery);
</script>
