<div class="card">
	<div class="row">
		<div class="col-sm-12">
			<form id='form' action="<?= base_url('/admin/posts/' . $post['id'] . '/update') ?>" method="post" enctype="multipart/form-data" accept-charset="utf-8" novalidate="">
				<div class="form-row modal-body p-4">
					<div class="col-md-12">
						<div class="cv-form-group input-group mb-3 mt-4 px-3">
							<div class="input-group-prepend"><span class="input-group-text bg-white rounded-0 cv-chev left">
									<ion-icon name="trail-sign-outline"></ion-icon>
								</span></div><input id='title' name="title" value="<?= $post['title'] ?>" type="text" class="form-control custom-input"><span class="bar"></span><label class="cv-label left text-capitalize">title</label>
						</div>
					</div>
					<div class="col-md-12 pt-3">
						<div class="form-group px-3">
							<textarea class="wysihtml5 form-control rounded" value="<?= $post['content'] ?>" name="content" id="content" rows="20"></textarea>
						</div>
					</div>
					<div class="col-md-4">
						<div class="cv-form-group form-group mt-4 px-3">
							<select id='category' name='category_id' class="form-control js-select2">
								<?php foreach ($post_categories as $category) { ?>
									<option value='<?= $category['id']; ?>' <?= ($post['category_id'] == $category['id']) ? 'selected' : '' ?>><?= $category['name']; ?></option>
								<?php } ?>
							</select>
						</div>
					</div>
					<div class="col-md-4">
						<div class="cv-form-group form-group mt-4 px-3">
							<select id='user_id' name='user_id' class="form-control js-select2">
								<?php foreach ($users as $user) { ?>
									<option value='<?= $user['id']; ?>' <?= ($post['user_id'] == $user['id']) ? 'selected' : '' ?>><?= $user['username']; ?></option>
								<?php } ?>
							</select>
						</div>
					</div>
					<div class="col-md-4">
						<div class="input-group mb-3 mt-4 px-3 d-flex align-items-center">
							<span class="mt-2">Publish the post :</span>
							<span class="button b2 mt-0 ml-3 mt-2" id="button-10"><input id='status' <?= ($post['satus'] == '1') ? 'checked' : '' ?> type="checkbox" name="status" class="checkbox">
								<div class="knobs"><span>NO</span></div>
								<div class="layer"></div>
							</span>
						</div>
					</div>
					<div class="col-md-12 px-3 mt-4">
						<h6>search engine listing preview</h6>
						<hr>
					</div>
					<div class="col-md-12">
						<div class="cv-form-group input-group mb-3 mt-4 px-3">
							<div class="input-group-prepend"><span class="input-group-text bg-white rounded-0 cv-chev left">
									<ion-icon name="briefcase-outline"></ion-icon>
								</span></div><input name="focus_keyword" value="<?= $post['focus_keyword'] ?>" type="text" class="form-control custom-input"><span class="bar"></span><label class="cv-label left text-capitalize">focus keywords separated by commas</label>
						</div>
					</div>
					<div class="col-md-12">
						<div class="input-group mb-3 mt-4 px-3">
							<textarea name="meta_description" value="<?= $post['meta_description'] ?>" class="form-control custom-input px-0"></textarea>
							<span class="bar"></span>
							<label class="cv-label left text-capitalize position-absolute mt-n4">description</label>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary btn-sm">submit</button>
				</div>
			</form>
		</div>
	</div>
</div>
<script>
	$("#status").on("change", (e) => {
		const target = e.target;
		target.checked ? $("#status").val("1") : $("#status").val("0");
	});
	$("#form").submit(function(event) {
		event.preventDefault();
		var post_url = $(this).attr("action");
		var request_method = $(this).attr("method");
		var form_data = $(this).serialize();
		$.ajax({
			url: post_url,
			type: request_method,
			data: form_data,
		}).done(function(response) {
			Toastify({
				text: response.message,
				duration: 3000,
				gravity: "top",
				position: 'right',
				backgroundColor: "#228B22",
				stopOnFocus: true,
			}).showToast();

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
