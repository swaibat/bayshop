<form id="form" action="<?= base_url('admin/users/create') ?>" enctype="multipart/form-data" method="post" accept-charset="utf-8" novalidate="">
	<div class="modal-header border-0">
		<h6 class="modal-title position-absolute bg-primary text-white" id="mymodalLabel"><?= $page_title ?></h6>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
	<div class="form-row modal-body p-4">
		<div class="col-md-6">
			<div class="cv-form-group input-group mb-3 mt-4 px-3">
				<div class="input-group-prepend"><span class="input-group-text bg-white rounded-0 cv-chev left">
						<ion-icon name="person-outline" role="img" class="md hydrated" aria-label="person outline"></ion-icon>
					</span></div><input name="name" type="text" class="form-control custom-input" autocomplete="new-password" value=""><span class="bar"></span><label class="cv-label left text-capitalize">fullnames</label>
			</div>
		</div>
		<div class="col-md-6">
			<div class="cv-form-group input-group mb-3 mt-4 px-3">
				<div class="input-group-prepend"><span class="input-group-text bg-white rounded-0 cv-chev left">
						<ion-icon name="person-outline" role="img" class="md hydrated" aria-label="person outline"></ion-icon>
					</span></div><input name="username" type="text" class="form-control custom-input" autocomplete="new-password" value=""><span class="bar"></span><label class="cv-label left text-capitalize">username</label>
			</div>
		</div>
		<div class="col-md-9">
			<div class="cv-form-group input-group mb-3 mt-4 px-3">
				<div class="input-group-prepend"><span class="input-group-text bg-white rounded-0 cv-chev left">
						<ion-icon name="mail-outline" role="img" class="md hydrated" aria-label="mail outline"></ion-icon>
					</span></div><input name="email" type="email" class="form-control custom-input" autocomplete="new-password" value=""><span class="bar"></span><label class="cv-label left text-capitalize">email address</label>
			</div>
		</div>
		<div class="col-md-3">
			<div class="cv-form-group form-group mt-4 px-3">
				<select name='role' class="form-control js-select2">
					<?php foreach ($roles as $role) { ?>
						<option value='<?= $role['id']; ?>'><?= $role['name']; ?></option>
					<?php } ?>
				</select>
				<span class="bar"></span><label class="cv-label left text-capitalize">Select user role</label>
			</div>
		</div>
		<div class="col-md-7">
			<div class="cv-form-group input-group mb-3 mt-4 px-3">
				<div class="input-group-prepend"><span class="input-group-text bg-white rounded-0 cv-chev left">
						<ion-icon name="locate-outline" role="img" class="md hydrated" aria-label="locate outline"></ion-icon>
					</span></div><input name="address" type="text" class="form-control custom-input" autocomplete="new-password" value=""><span class="bar"></span><label class="cv-label left text-capitalize">physical address</label>
			</div>
		</div>
		<div class="col-md-5">
			<div class="cv-form-group input-group mb-3 mt-4 px-3">
				<div class="input-group-prepend"><span class="input-group-text bg-white rounded-0 cv-chev left">
						<ion-icon name="call-outline" role="img" class="md hydrated" aria-label="call outline"></ion-icon>
					</span></div><input name="phone" type="number" class="form-control custom-input" autocomplete="new-password" value=""><span class="bar"></span><label class="cv-label left text-capitalize">Telephone number</label>
			</div>
		</div>
		<div class="col-md-6">
			<div class="cv-form-group input-group mb-3 mt-4 px-3">
				<div class="input-group-prepend"><span class="input-group-text bg-white rounded-0 cv-chev left">
						<ion-icon name="briefcase-outline" role="img" class="md hydrated" aria-label="briefcase outline"></ion-icon>
					</span></div><input name="company" type="text" class="form-control custom-input" autocomplete="new-password" value=""><span class="bar"></span><label class="cv-label left text-capitalize">company</label>
			</div>
		</div>
		<div class="col-md-6">
			<div class="cv-form-group input-group mb-3 mt-4 px-3">
				<div class="input-group-prepend"><span class="input-group-text bg-white rounded-0 cv-chev left">
						<ion-icon name="lock-closed-outline" role="img" class="md hydrated" aria-label="lock closed outline"></ion-icon>
					</span></div><input name="password" type="password" class="form-control custom-input" autocomplete="new-password" value="">
				<div class="input-group-prepend"><span type="button" class="input-group-text bg-white rounded-0 cv-chev right">
						<ion-icon name="eye-outline" role="img" class="md hydrated" aria-label="eye outline"></ion-icon>
					</span></div><span class="bar"></span><label class="cv-label left text-capitalize">password</label>
			</div>
		</div>
	</div>
	<div class="modal-footer">
		<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
		<button type="submit" class="btn btn-primary btn-sm">submit</button>
	</div>
</form>

<script>
	$("#form").submit(function(event) {
		event.preventDefault();
		var post_url = $(this).attr("action");
		var request_method = $(this).attr("method");
		var form_data = $(this).serialize();
		$.ajax({
			url: post_url,
			type: request_method,
			data: form_data
		}).done(function(response) {
			Toastify({
				text: response.message,
				duration: 3000,
				gravity: "top",
				position: 'right',
				backgroundColor: "#228B22",
				stopOnFocus: true,
			}).showToast();
			setTimeout(() => {
				location.reload()
				$("#mymodal").modal("toggle");
			}, 1500);

		}).fail(function(err) {
			Toastify({
				text: 'Error operation failed',
				duration: 3000,
				gravity: "top",
				position: 'right',
				backgroundColor: '#FFA500',
				stopOnFocus: true,
			}).showToast();
		});
	});
</script>
