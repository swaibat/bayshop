<nav class="navbar navbar-dark bg-transparent align-items-center w-100 h-3">
	<li class="nav-item js-hamburger mt-n4 d-flex flex-row-reverse align-items-center">
		<button class="hamburger-toggle  "><span class="bar-top"></span><span class="bar-mid"></span><span class="bar-bot"></span></button>
		<h6 class="text-white ml-4 mb-0 text-capitalize"><?php echo $page_title; ?></h6>
	</li>
	<ul class="d-flex">
		<li class="nav-item mx-3">
			<a class="nav-link text-white" href="#" data-toggle="tooltip" data-placement="bottom" title="visit website">
				<span class="admin-nav-icons">
					<ion-icon name="earth"></ion-icon>
				</span>
			</a>
		</li>
		<li class="nav-item mx-3">
			<a class="nav-link text-white" href="#" data-toggle="tooltip" data-placement="bottom" title="Notifications">
				<span class="admin-nav-icons">
					<ion-icon name="notifications"></ion-icon>
				</span>
				<span class="badge badge-light position-absolute notify-badge">5</span>
			</a>
		</li>
		<li class='dropdown mx-2 d-flex flex-row align-items-center font-weight-light'>
			<button class='btn nav-link dropdown-toggle text-white' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>
				<span class="admin-nav-icons">
					<ion-icon name="person-circle-outline"></ion-icon>
				</span>
			</button>
			<ul class='dropdown-menu shadow notification-pane font-weight-light' aria-labelledby='dropdownMenuButton'>
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
</nav>
