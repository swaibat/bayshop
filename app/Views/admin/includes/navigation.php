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
		<a class="navbar-brand p-0" href="/">
			<img height="40" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' width='1521' height='455.43' viewBox='0 0 1521 455.43'%3E%3Cdefs%3E%3Cstyle%3E.a%7Bfill:%23b5b3b3;%7D.b%7Bfill:%23e8e8e8;%7D.c%7Bstroke:%23fff;%7D.d%7Bfont-size:336px;font-family:SimplyRounded, Simply Rounded;%7D.e%7Bfilter:url(%23a);%7D%3C/style%3E%3Cfilter id='a' x='96.5' y='68.101' width='287.788' height='319.45' filterUnits='userSpaceOnUse'%3E%3CfeOffset dy='3' input='SourceAlpha'/%3E%3CfeGaussianBlur stdDeviation='3' result='b'/%3E%3CfeFlood flood-opacity='0.161'/%3E%3CfeComposite operator='in' in2='b'/%3E%3CfeComposite in='SourceGraphic'/%3E%3C/filter%3E%3C/defs%3E%3Cg transform='translate(-0.301 0)'%3E%3Cpath class='a' d='M405.493,412.764c-69.689,56.889-287.289,56.889-355.556,0-69.689-56.889-62.578-300.089,0-364.089s292.978-64,355.556,0S475.182,355.876,405.493,412.764Z'/%3E%3Cpath class='b' d='M229.138,313.209c-62.578,49.778-132.267,75.378-197.689,76.8C-16.907,307.52-6.951,106.987,49.938,48.676,101.138-3.946,261.849-13.9,354.294,18.809,377.049,112.676,330.116,232.142,229.138,313.209Z'/%3E%3Cg class='e' transform='matrix(1, 0, 0, 1, 0.3, 0)'%3E%3Cpath class='c' d='M288.294,407.437H140.96V106.987H272.367c23.893,0,41.812,1.767,59.731,7.07,15.928,5.3,29.865,10.6,37.829,19.44,15.928,15.906,21.9,33.58,21.9,53.021,0,22.976-7.964,40.649-25.883,53.021-5.973,3.534-9.955,7.07-11.946,7.07q-2.986,2.651-11.946,5.3c21.9,3.534,37.829,12.372,49.776,24.743s17.919,28.278,17.919,47.719c0,21.209-7.964,38.882-23.893,54.788C367.935,398.6,334.089,407.437,288.294,407.437Zm-71.676-178.5h35.838c21.9,0,35.838-1.767,45.793-5.3s15.928-12.372,15.928-26.51-3.981-22.976-13.938-26.51-25.883-7.07-47.784-7.07H216.618v65.392Zm0,121.947h51.767c21.9,0,37.829-1.767,47.784-7.07S332.1,329.673,332.1,315.534s-5.973-22.976-17.919-28.278-29.865-7.07-55.748-7.07h-43.8V350.88h1.991Z' transform='translate(-34.96 -32.39)'/%3E%3C/g%3E%3Ctext class='d' transform='translate(469.301 315)'%3E%3Ctspan x='0' y='0'%3Eayshop%3C/tspan%3E%3C/text%3E%3C/g%3E%3C/svg%3E" alt="logo"></a>
	</li>
	<li class="nav-item h-7 d-flex justify-content-between">
		<div class="nav-link m-auto d-flex flex-column text-center" href="#">
			<div class="fill">
				<div class="clock
              hour-style-pill
              hour-text-style-large
              hour-display-style-all
              minute-style-line
              minute-display-style-fine-2
              minute-text-style-outside
              hand-style-hollow
              " id="utility-clock">
					<div class="centre">
						<div class="dynamic"></div>
						<div class="expand round circle-1"></div>
						<div class="anchor hour">
							<div class="element thin-hand"></div>
							<div class="element fat-hand"></div>
						</div>
						<div class="anchor minute">
							<div class="element thin-hand"></div>
							<div class="element fat-hand minute-hand"></div>
						</div>
						<div class="anchor second">
							<div class="element second-hand second-hand-front"></div>
							<div class="element second-hand second-hand-back"></div>
						</div>
						<div class="expand round circle-2"></div>
					</div>
				</div>
			</div>
			<span class="text-secondary mt-n2">Admin</span>
		</div>
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
				<ion-icon src="data:image/svg+xml;base64,PHN2ZyByb2xlPSJpbWciIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmlld0JveD0iMCAwIDU3NiA1MTIiPjxnPjxwYXRoIGZpbGw9IiNhM2E1YTciIGQ9Ik0zNTIgNDk2VjM2OGExNiAxNiAwIDAgMC0xNi0xNmgtOTZhMTYgMTYgMCAwIDAtMTYgMTZ2MTI4YTE2IDE2IDAgMCAxLTE2IDE2SDgwYTE2IDE2IDAgMCAxLTE2LTE2VjMxMS4wN2MxLjc4LTEuMjEgMy44NS0xLjg5IDUuNDctMy4zNUwyODggMTE1bDIxOC43NCAxOTIuOWMxLjU0IDEuMzggMy41NiAyIDUuMjYgMy4yVjQ5NmExNiAxNiAwIDAgMS0xNiAxNkgzNjhhMTYgMTYgMCAwIDEtMTYtMTZ6IiBjbGFzcz0ic2Vjb25kYXJ5Ij48L3BhdGg+PHBhdGggZmlsbD0iY3VycmVudENvbG9yIiBkPSJNNTI3LjkyIDI4My45MUwyOTguNiA4MS42NGExNiAxNiAwIDAgMC0yMS4xNyAwTDQ4LjExIDI4My45MmExNiAxNiAwIDAgMS0yMi41OS0xLjIxTDQuMSAyNTguODlhMTYgMTYgMCAwIDEgMS4yMS0yMi41OWwyNTYtMjI2YTM5Ljg1IDM5Ljg1IDAgMCAxIDUzLjQ1IDBsMjU1Ljk0IDIyNmExNiAxNiAwIDAgMSAxLjIyIDIyLjU5bC0yMS40IDIzLjgyYTE2IDE2IDAgMCAxLTIyLjYgMS4yeiIgY2xhc3M9InByaW1hcnkiPjwvcGF0aD48L2c+PC9zdmc+Cg=="></ion-icon><span class="nav-item-text">Dashboard</span>
			</a>
		</li>

		<!-- Products -->
		<li class="nav-item">
			<a class="nav-link  nav-link -collapse cv-sidenav pl-3 <?= ($folder_name == 'products') ? 'selected show' : ''; ?>" id="hasSubItems" data-toggle="collapse" data-target="#Products" aria-expanded="false" href="/admin/products">
				<ion-icon src="data:image/svg+xml;base64,PHN2ZyBhcmlhLWhpZGRlbj0idHJ1ZSIgcm9sZT0iaW1nIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA1NzYgNTEyIj48Zz48cGF0aCBmaWxsPSIjYTVhOGE5IiBkPSJNNTUyIDY0SDE1OS4yMWw1Mi4zNiAyNTZoMjkzLjE1YTI0IDI0IDAgMCAwIDIzLjQtMTguNjhsNDcuMjctMjA4YTI0IDI0IDAgMCAwLTE4LjA4LTI4LjcyQTIzLjY5IDIzLjY5IDAgMCAwIDU1MiA2NHpNNDQ0LjQyIDE5Ni40OGwtNjcuODMgNzJhMTIuMjcgMTIuMjcgMCAwIDEtMTcuMTggMGwtNjcuODMtNzJjLTcuNjUtNy41NS0yLjIzLTIwLjQ4IDguNTktMjAuNDhoNDMuNTR2LTUyYTEyLjA3IDEyLjA3IDAgMCAxIDEyLjE0LTEyaDI0LjI5YTEyLjA3IDEyLjA3IDAgMCAxIDEyLjE1IDEydjUyaDQzLjU0YzEwLjgyIDAgMTYuMjQgMTIuOTMgOC41OSAyMC40OHoiIGNsYXNzPSJzZWNvbmRhcnkiPjwvcGF0aD48cGF0aCBkPSJNNTA0LjQyIDQwNS42bDUuNTItMjQuMjhhMjQgMjQgMCAwIDAtMjMuNC0yOS4zMkgyMTguMTJMMTUwIDE5LjE5QTI0IDI0IDAgMCAwIDEyNi41MyAwSDI0QTI0IDI0IDAgMCAwIDAgMjR2MTZhMjQgMjQgMCAwIDAgMjQgMjRoNjkuODhsNzAuMjUgMzQzLjQzYTU2IDU2IDAgMSAwIDY3LjA1IDguNTdoMjA5LjY0YTU2IDU2IDAgMSAwIDYzLjYtMTAuNHptLTE0NS0xMzcuMTJhMTIuMjcgMTIuMjcgMCAwIDAgMTcuMTggMGw2Ny44My03MmM3LjY1LTcuNTUgMi4yMy0yMC40OC04LjU5LTIwLjQ4aC00My41NXYtNTJhMTIuMDcgMTIuMDcgMCAwIDAtMTIuMTUtMTJoLTI0LjI5YTEyLjA3IDEyLjA3IDAgMCAwLTEyLjE0IDEydjUyaC00My41NGMtMTAuODIgMC0xNi4yNCAxMi45My04LjU5IDIwLjQ4eiIgY2xhc3M9InByaW1hcnkiPjwvcGF0aD48L2c+PC9zdmc+Cg=="></ion-icon><span class="nav-item-text">Products</span>
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
				<ion-icon src="data:image/svg+xml;base64,PHN2ZyAgcm9sZT0iaW1nIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAzODQgNTEyIj48Zz48cGF0aCBmaWxsPSIjYTVhN2E5IiBkPSJNMzg0IDEyOEgyNzJhMTYgMTYgMCAwIDEtMTYtMTZWMEgyNEEyMy45NCAyMy45NCAwIDAgMCAwIDIzLjg4VjQ4OGEyMy45NCAyMy45NCAwIDAgMCAyMy44OCAyNEgzNjBhMjMuOTQgMjMuOTQgMCAwIDAgMjQtMjMuODhWMTI4em0tOTYgMjQ0YTEyIDEyIDAgMCAxLTEyIDEySDEwOGExMiAxMiAwIDAgMS0xMi0xMnYtOGExMiAxMiAwIDAgMSAxMi0xMmgxNjhhMTIgMTIgMCAwIDEgMTIgMTJ6bTAtNjRhMTIgMTIgMCAwIDEtMTIgMTJIMTA4YTEyIDEyIDAgMCAxLTEyLTEydi04YTEyIDEyIDAgMCAxIDEyLTEyaDE2OGExMiAxMiAwIDAgMSAxMiAxMnptMC02NGExMiAxMiAwIDAgMS0xMiAxMkgxMDhhMTIgMTIgMCAwIDEtMTItMTJ2LThhMTIgMTIgMCAwIDEgMTItMTJoMTY4YTEyIDEyIDAgMCAxIDEyIDEyeiIgY2xhc3M9InNlY29uZGFyeSI+PC9wYXRoPjxwYXRoIGZpbGw9ImN1cnJlbnRDb2xvciIgZD0iTTM3NyAxMDVMMjc5LjEgN2EyNCAyNCAwIDAgMC0xNy03SDI1NnYxMTJhMTYgMTYgMCAwIDAgMTYgMTZoMTEydi02LjFhMjMuOSAyMy45IDAgMCAwLTctMTYuOXpNMjc2IDM1MkgxMDhhMTIgMTIgMCAwIDAtMTIgMTJ2OGExMiAxMiAwIDAgMCAxMiAxMmgxNjhhMTIgMTIgMCAwIDAgMTItMTJ2LThhMTIgMTIgMCAwIDAtMTItMTJ6bTAtNjRIMTA4YTEyIDEyIDAgMCAwLTEyIDEydjhhMTIgMTIgMCAwIDAgMTIgMTJoMTY4YTEyIDEyIDAgMCAwIDEyLTEydi04YTEyIDEyIDAgMCAwLTEyLTEyem0wLTY0SDEwOGExMiAxMiAwIDAgMC0xMiAxMnY4YTEyIDEyIDAgMCAwIDEyIDEyaDE2OGExMiAxMiAwIDAgMCAxMi0xMnYtOGExMiAxMiAwIDAgMC0xMi0xMnoiIGNsYXNzPSJwcmltYXJ5Ij48L3BhdGg+PC9nPjwvc3ZnPgo="></ion-icon><span class="nav-item-text">Pages</span>
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
			<a class="nav-link  nav-link -collapse cv-sidenav pl-3 <?= ($folder_name == 'messages') ? 'selected' : ''; ?>" href="<?= base_url() . '/admin/messages/' ?>">
				<ion-icon src="data:image/svg+xml;base64,PHN2ZyBhcmlhLWhpZGRlbj0idHJ1ZSIgcm9sZT0iaW1nIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA1MTIgNTEyIiA+PGc+PHBhdGggZmlsbD0iI2E1YThhOSIgZD0iTTY0LDI1Ny42LDIyNy45LDM3NmE0Ny43Miw0Ny43MiwwLDAsMCw1Ni4yLDBMNDQ4LDI1Ny42Vjk2YTMyLDMyLDAsMCwwLTMyLTMySDk2QTMyLDMyLDAsMCwwLDY0LDk2Wk0xNjAsMTYwYTE2LDE2LDAsMCwxLDE2LTE2SDMzNmExNiwxNiwwLDAsMSwxNiwxNnYxNmExNiwxNiwwLDAsMS0xNiwxNkgxNzZhMTYsMTYsMCwwLDEtMTYtMTZabTAsODBhMTYsMTYsMCwwLDEsMTYtMTZIMzM2YTE2LDE2LDAsMCwxLDE2LDE2djE2YTE2LDE2LDAsMCwxLTE2LDE2SDE3NmExNiwxNiwwLDAsMS0xNi0xNloiIGNsYXNzPSJzZWNvbmRhcnkiPjwvcGF0aD48cGF0aCBkPSJNMzUyLDE2MGExNiwxNiwwLDAsMC0xNi0xNkgxNzZhMTYsMTYsMCwwLDAtMTYsMTZ2MTZhMTYsMTYsMCwwLDAsMTYsMTZIMzM2YTE2LDE2LDAsMCwwLDE2LTE2Wm0tMTYsNjRIMTc2YTE2LDE2LDAsMCwwLTE2LDE2djE2YTE2LDE2LDAsMCwwLDE2LDE2SDMzNmExNiwxNiwwLDAsMCwxNi0xNlYyNDBBMTYsMTYsMCwwLDAsMzM2LDIyNFpNMzI5LjQsNDEuNEMzMTIuNiwyOS4yLDI3OS4yLS4zLDI1NiwwYy0yMy4yLS4zLTU2LjYsMjkuMi03My40LDQxLjRMMTUyLDY0SDM2MFpNNjQsMTI5Yy0yMy45LDE3LjctNDIuNywzMS42LTQ1LjYsMzRBNDgsNDgsMCwwLDAsMCwyMDAuN3YxMC43bDY0LDQ2LjJabTQyOS42LDM0Yy0yLjktMi4zLTIxLjctMTYuMy00NS42LTMzLjlWMjU3LjZsNjQtNDYuMlYyMDAuN0E0OCw0OCwwLDAsMCw0OTMuNiwxNjNaTTI1Niw0MTcuMWE4MCw4MCwwLDAsMS00Ni45LTE1LjJMMCwyNTAuOVY0NjRhNDgsNDgsMCwwLDAsNDgsNDhINDY0YTQ4LDQ4LDAsMCwwLDQ4LTQ4VjI1MC45bC0yMDkuMSwxNTFBODAsODAsMCwwLDEsMjU2LDQxNy4xWiIgY2xhc3M9InByaW1hcnkiPjwvcGF0aD48L2c+PC9zdmc+Cg=="></ion-icon><span class="nav-item-text">Messages</span>
			</a>
		</li>


		<!-- Slider -->
		<li class="nav-item">
			<a class="nav-link  nav-link -collapse cv-sidenav pl-3 <?= ($folder_name == 'sliders') ? 'selected' : ''; ?>" id="hasSubItems" data-toggle="collapse" data-target="#slider" aria-expanded="false" href="/admin/pages">
				<ion-icon src="data:image/svg+xml;base64,PHN2ZyByb2xlPSJpbWciIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmlld0JveD0iMCAwIDUxMiA1MTIiID48ZyBjbGFzcz0iZmEtZ3JvdXAiPjxwYXRoIGZpbGw9IiNhNWE3YTkiIGQ9Ik02NCwyNTZoNjRWMTkySDY0Wm0zNzAuNjYtODguMjloMEwzNDQuNSw3Ny4zNmEzMS44MywzMS44MywwLDAsMC00NS0uMDdoMGwtLjA3LjA3TDIyNCwxNTIuODhWNDI0TDQzNC42NiwyMTIuOUEzMiwzMiwwLDAsMCw0MzQuNjYsMTY3LjcxWk02NCwxMjhoNjRWNjRINjRaTTQ4MCwzMjBIMzczLjA5TDE4Ni42OCw1MDYuNTFjLTIuMDYsMi4wNy00LjUsMy41OC02LjY4LDUuNDlINDgwYTMyLDMyLDAsMCwwLDMyLTMyVjM1MkEzMiwzMiwwLDAsMCw0ODAsMzIwWiIgY2xhc3M9InNlY29uZGFyeSI+PC9wYXRoPjxwYXRoIGZpbGw9ImN1cnJlbnRDb2xvciIgZD0iTTE2MCwwSDMyQTMyLDMyLDAsMCwwLDAsMzJWNDE2YTk2LDk2LDAsMCwwLDE5MiwwVjMyQTMyLDMyLDAsMCwwLDE2MCwwWk05Niw0NDBhMjQsMjQsMCwxLDEsMjQtMjRBMjQsMjQsMCwwLDEsOTYsNDQwWm0zMi0xODRINjRWMTkyaDY0Wm0wLTEyOEg2NFY2NGg2NFoiIGNsYXNzPSJwcmltYXJ5Ij48L3BhdGg+PC9nPjwvc3ZnPgog"></ion-icon><span class="nav-item-text">sliders</span>
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
				<ion-icon src="data:image/svg+xml;base64,PHN2ZyBhcmlhLWhpZGRlbj0idHJ1ZSIgZm9jdXNhYmxlPSJmYWxzZSIgcm9sZT0iaW1nIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NDAgNTEyIj48ZyA+PHBhdGggIGQ9Ik05NiAyMjRhNjQgNjQgMCAxIDAtNjQtNjQgNjQuMDYgNjQuMDYgMCAwIDAgNjQgNjR6bTQ4MCAzMmgtNjRhNjMuODEgNjMuODEgMCAwIDAtNDUuMSAxOC42QTE0Ni4yNyAxNDYuMjcgMCAwIDEgNTQyIDM4NGg2NmEzMiAzMiAwIDAgMCAzMi0zMnYtMzJhNjQuMDYgNjQuMDYgMCAwIDAtNjQtNjR6bS01MTIgMGE2NC4wNiA2NC4wNiAwIDAgMC02NCA2NHYzMmEzMiAzMiAwIDAgMCAzMiAzMmg2NS45YTE0Ni42NCAxNDYuNjQgMCAwIDEgNzUuMi0xMDkuNEE2My44MSA2My44MSAwIDAgMCAxMjggMjU2em00ODAtMzJhNjQgNjQgMCAxIDAtNjQtNjQgNjQuMDYgNjQuMDYgMCAwIDAgNjQgNjR6Ij48L3BhdGg+PHBhdGggZmlsbD0iI2E1YThhOSIgZD0iTTM5Ni44IDI4OGgtOC4zYTE1Ny41MyAxNTcuNTMgMCAwIDEtNjguNSAxNmMtMjQuNiAwLTQ3LjYtNi02OC41LTE2aC04LjNBMTE1LjIzIDExNS4yMyAwIDAgMCAxMjggNDAzLjJWNDMyYTQ4IDQ4IDAgMCAwIDQ4IDQ4aDI4OGE0OCA0OCAwIDAgMCA0OC00OHYtMjguOEExMTUuMjMgMTE1LjIzIDAgMCAwIDM5Ni44IDI4OHpNMzIwIDI1NmExMTIgMTEyIDAgMSAwLTExMi0xMTIgMTExLjk0IDExMS45NCAwIDAgMCAxMTIgMTEyeiIgPjwvcGF0aD48L2c+PC9zdmc+Cg=="></ion-icon><span class="nav-item-text">Users</span>
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
			<a class="nav-link  nav-link -collapse cv-sidenav pl-3 <?= ($folder_name == 'settings') ? 'selected' : ''; ?>" href="/admin/settings">
				<ion-icon src="data:image/svg+xml;base64,PHN2ZyBhcmlhLWhpZGRlbj0idHJ1ZSIgZm9jdXNhYmxlPSJmYWxzZSIgZGF0YS1pY29uPSJjb2ciIHJvbGU9ImltZyIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgPjxnPjxwYXRoIGZpbGw9IiNhNWE3YTkiIGQ9Ik00ODcuNzUgMzE1LjZsLTQyLjYtMjQuNmExOTIuNjIgMTkyLjYyIDAgMCAwIDAtNzAuMmw0Mi42LTI0LjZhMTIuMTEgMTIuMTEgMCAwIDAgNS41LTE0IDI0OS4yIDI0OS4yIDAgMCAwLTU0LjctOTQuNiAxMiAxMiAwIDAgMC0xNC44LTIuM2wtNDIuNiAyNC42YTE4OC44MyAxODguODMgMCAwIDAtNjAuOC0zNS4xVjI1LjdBMTIgMTIgMCAwIDAgMzExIDE0YTI1MS40MyAyNTEuNDMgMCAwIDAtMTA5LjIgMCAxMiAxMiAwIDAgMC05LjQgMTEuN3Y0OS4yYTE5NC41OSAxOTQuNTkgMCAwIDAtNjAuOCAzNS4xTDg5LjA1IDg1LjRhMTEuODggMTEuODggMCAwIDAtMTQuOCAyLjMgMjQ3LjY2IDI0Ny42NiAwIDAgMC01NC43IDk0LjYgMTIgMTIgMCAwIDAgNS41IDE0bDQyLjYgMjQuNmExOTIuNjIgMTkyLjYyIDAgMCAwIDAgNzAuMmwtNDIuNiAyNC42YTEyLjA4IDEyLjA4IDAgMCAwLTUuNSAxNCAyNDkgMjQ5IDAgMCAwIDU0LjcgOTQuNiAxMiAxMiAwIDAgMCAxNC44IDIuM2w0Mi42LTI0LjZhMTg4LjU0IDE4OC41NCAwIDAgMCA2MC44IDM1LjF2NDkuMmExMiAxMiAwIDAgMCA5LjQgMTEuNyAyNTEuNDMgMjUxLjQzIDAgMCAwIDEwOS4yIDAgMTIgMTIgMCAwIDAgOS40LTExLjd2LTQ5LjJhMTk0LjcgMTk0LjcgMCAwIDAgNjAuOC0zNS4xbDQyLjYgMjQuNmExMS44OSAxMS44OSAwIDAgMCAxNC44LTIuMyAyNDcuNTIgMjQ3LjUyIDAgMCAwIDU0LjctOTQuNiAxMi4zNiAxMi4zNiAwIDAgMC01LjYtMTQuMXptLTIzMS40IDM2LjJhOTUuOSA5NS45IDAgMSAxIDk1LjktOTUuOSA5NS44OSA5NS44OSAwIDAgMS05NS45IDk1Ljl6IiBjbGFzcz0ic2Vjb25kYXJ5Ij48L3BhdGg+PHBhdGggZmlsbD0iY3VycmVudENvbG9yIiBkPSJNMjU2LjM1IDMxOS44YTYzLjkgNjMuOSAwIDEgMSA2My45LTYzLjkgNjMuOSA2My45IDAgMCAxLTYzLjkgNjMuOXoiIGNsYXNzPSJwcmltYXJ5Ij48L3BhdGg+PC9nPjwvc3ZnPgo="></ion-icon><span class="nav-item-text">Settings</span>
			</a>
		</li>
		<!-- Backup -->
		<li class="nav-item">
			<a class="nav-link  nav-link -collapse cv-sidenav pl-3 <?= ($folder_name == 'backup') ? 'selected' : ''; ?>" href="<?= base_url() . '/admin/backup_restore' ?>">
				<ion-icon src="data:image/svg+xml;base64,PHN2ZyBhcmlhLWhpZGRlbj0idHJ1ZSIgZm9jdXNhYmxlPSJmYWxzZSIgZGF0YS1pY29uPSJkYXRhYmFzZSIgcm9sZT0iaW1nIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA0NDggNTEyIiA+PGc+PHBhdGggZmlsbD0iI2E1YTdhOSIgZD0iTTQ0NyA3My4xNHY0NS43MkM0NDcgMTU5LjE0IDM0Ni42NyAxOTIgMjIzIDE5MlMtMSAxNTkuMTQtMSAxMTguODZWNzMuMTRDLTEgMzIuODYgOTkuMzMgMCAyMjMgMHMyMjQgMzIuODYgMjI0IDczLjE0eiIgY2xhc3M9InRleHQtc2Vjb25kYXJ5Ij48L3BhdGg+PHBhdGggZmlsbD0iY3VycmVudENvbG9yIiBkPSJNLTEgMzM2djEwMi44NkMtMSA0NzkuMTQgOTkuMzMgNTEyIDIyMyA1MTJzMjI0LTMyLjg2IDIyNC03My4xNFYzMzZjLTQ4LjEzIDMzLjE0LTEzNi4yMSA0OC41Ny0yMjQgNDguNTdTNDcuMTIgMzY5LjE0LTEgMzM2em0yMjQtMTExLjQzYy04Ny43OSAwLTE3NS44OC0xNS40My0yMjQtNDguNTd2MTAyLjg2Qy0xIDMxOS4xNCA5OS4zMyAzNTIgMjIzIDM1MnMyMjQtMzIuODYgMjI0LTczLjE0VjE3NmMtNDguMTMgMzMuMTQtMTM2LjIxIDQ4LjU3LTIyNCA0OC41N3oiIGNsYXNzPSJ0ZXh0LXByaW1hcnkiPjwvcGF0aD48L2c+PC9zdmc+Cg=="></ion-icon>
				<span class="nav-item-text">Backup</span>
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
