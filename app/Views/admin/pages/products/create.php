<div class="card border-0 shadow-xs">
	<div class="row">
		<div class="col-sm-12">
			<form id='form' method="post" action="<?= base_url('/admin/products/create/') ?>">
				<div class="form-row p-4">
					<div class="col-md-9">
						<div id='form-title' class="cv-form-group input-group mb-3 mt-4 px-3">
							<div class="input-group-prepend">
								<span class="input-group-text bg-white rounded-0 cv-chev left">
									<ion-icon name="trail-sign-outline"></ion-icon>
								</span>
							</div>
							<input id='title' name="title" type="text" class="form-control custom-input" required><span class="bar"></span><label class="cv-label left text-capitalize">title</label>
						</div>
					</div>
					<div class="col-md-3">
						<div class="cv-form-group form-group mt-4 px-3">
							<select id='product_type' name='category_id[]' class="form-control js-select2">
								<?php foreach ($categories as $category) { ?>
									<script>
										<?= $category['category_id']; ?>
									</script>
									<option value='<?= $category['category_id']; ?>'><?= $category['name']; ?></option>
								<?php } ?>
							</select>
						</div>
					</div>
					<div class="col-md-12 pt-3">
						<div class="form-group px-3">
							<textarea class="wysihtml5 form-control rounded" name="description" id="description" rows="20"></textarea>
						</div>
					</div>
					<div class="col-md-3">
						<div class="cv-form-group input-group mb-3 mt-4 px-3">
							<div class="input-group-prepend"><span class="input-group-text bg-white rounded-0 cv-chev left">
									<ion-icon name="trail-sign-outline"></ion-icon>
								</span></div><input id="price" name="price" type="number" class="form-control custom-input" required=""><span class="bar"></span><label class="cv-label left text-capitalize">Price</label>
						</div>
					</div>
					<div class="col-md-3">
						<div class="cv-form-group input-group mb-3 mt-4 px-3">
							<div class="input-group-prepend"><span class="input-group-text bg-white rounded-0 cv-chev left">
									<ion-icon name="trail-sign-outline"></ion-icon>
								</span></div><input name="compare_price" type="number" class="form-control custom-input" required=""><span class="bar"></span><label class="cv-label left text-capitalize">Compare to price</label>
						</div>
					</div>
					<div class="col-md-3">
						<div class="cv-form-group input-group mb-3 mt-4 px-3">
							<div class="input-group-prepend"><span class="input-group-text bg-white rounded-0 cv-chev left">
									<ion-icon name="trail-sign-outline"></ion-icon>
								</span></div><input name="available_quantity" type="number" class="form-control custom-input" required=""><span class="bar"></span><label class="cv-label left text-capitalize">available quantity</label>
						</div>
					</div>
					<div class="col-md-3">
						<div class="cv-form-group input-group mb-3 mt-4 px-3">
							<div class="input-group-prepend"><span class="input-group-text bg-white rounded-0 cv-chev left">
									<ion-icon name="trail-sign-outline"></ion-icon>
								</span></div><input name="sku" type="text" class="form-control custom-input" required=""><span class="bar"></span><label class="cv-label left text-capitalize">SKU (Stock Keeping Unit)</label>
						</div>
					</div>
					<div class="col-md-3">
						<div class="cv-form-group form-group mt-4 px-3">
							<select id='category' name='category' class="form-control js-select2">
								<?php foreach ($categories as $category) { ?>
									<option value='<?= $category['category_id']; ?>' <?= ($product['category'] === $category['category_id']) ? 'selected' : '' ?>><?= $category['name']; ?></option>
								<?php } ?>
							</select>
						</div>
					</div>
					<div class="col-md-3">
						<div class="cv-form-group form-group mt-4 px-3">
							<select id='country' name='country' class="form-control js-select2">
								<?php foreach ($countries as $country) { ?>
									<option value='<?= $country['name']; ?>' <?= ($product['country'] === $country['name']) ? 'selected' : '' ?>><?= $country['name']; ?></option>
								<?php } ?>
							</select>
						</div>
					</div>
					<div class="col-md-3">
						<div class="cv-form-group form-group mt-4 px-3">
							<select id='vendor' name='vendor' class="form-control js-select2">
								<?php foreach ($product_types as $type) { ?>
									<option value='<?= $type['id']; ?>'><?= $type['name']; ?></option>
								<?php } ?>
							</select>
						</div>
					</div>
					<div class="col-md-3">
						<div class="input-group mb-3 mt-4 px-3 d-flex align-items-center">
							<span class="mt-2">Publish the product :</span>
							<span class="button b2 mt-0 ml-3 mt-2" id="button-10"><input id='status' value='1' type="checkbox" name="status" class="checkbox">
								<div class="knobs"><span>YES</span></div>
								<div class="layer"></div>
							</span>
						</div>
					</div>
					<div class="col-md-12 px-3">
						<div class="input-group mb-3 mt-4 py-3 d-flex align-items-center border-dashed d-flex justify-content-center">
							<div class="p-2 d-flex flex-column text">
								<img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='126.875' height='84.875' viewBox='0 0 126.875 84.875'%3E%3Cg id='Group_8' data-name='Group 8' transform='translate(-882 -522)'%3E%3Cg id='Group_7' data-name='Group 7'%3E%3Cg id='Group_6' data-name='Group 6'%3E%3Cg id='Group_5' data-name='Group 5'%3E%3Cg id='Group_4' data-name='Group 4'%3E%3Cg id='Rectangle_3' data-name='Rectangle 3' transform='translate(882 537)' fill='none' stroke='%23e3e3e3' stroke-width='1' stroke-dasharray='1 2'%3E%3Crect width='86' height='60' stroke='none'/%3E%3Crect x='0.5' y='0.5' width='85' height='59' fill='none'/%3E%3C/g%3E%3Crect id='Rectangle_1' data-name='Rectangle 1' width='97' height='62' transform='translate(894 522)' fill='%23f7f7f7'/%3E%3Cellipse id='Ellipse_1' data-name='Ellipse 1' cx='12.5' cy='12' rx='12.5' ry='12' transform='translate(918 527)' fill='%23e3e3e3'/%3E%3Crect id='Rectangle_2' data-name='Rectangle 2' width='25' height='29' transform='matrix(1, -0.017, 0.017, 1, 929.749, 540.229)' fill='%23fff'/%3E%3Cpath id='Polygon_1' data-name='Polygon 1' d='M11,0,22,16H0Z' transform='translate(946 553)' fill='%23e3e3e3'/%3E%3Cpath id='Icon_awesome-arrow-circle-up' data-name='Icon awesome-arrow-circle-up' d='M.563,18A17.438,17.438,0,1,1,18,35.438,17.434,17.434,0,0,1,.563,18Zm10.1,2.032,5.091-5.309V27.563a1.683,1.683,0,0,0,1.688,1.688h1.125a1.683,1.683,0,0,0,1.688-1.687V14.723l5.091,5.309a1.689,1.689,0,0,0,2.412.028l.766-.773a1.681,1.681,0,0,0,0-2.384L19.2,7.573a1.681,1.681,0,0,0-2.384,0L7.474,16.9a1.681,1.681,0,0,0,0,2.384l.766.773A1.7,1.7,0,0,0,10.659,20.032Z' transform='translate(973.438 571.438)' fill='%23e3e3e3'/%3E%3Cg id='Group_3' data-name='Group 3' transform='translate(-0.009)'%3E%3Cg id='Group_2' data-name='Group 2' transform='translate(905.5 574.5)'%3E%3Cg id='Group_1' data-name='Group 1'%3E%3Cline id='Line_1' data-name='Line 1' x2='55' fill='none' stroke='%23e3e3e3' stroke-width='1'/%3E%3Cline id='Line_3' data-name='Line 3' x2='12' transform='translate(58.009)' fill='none' stroke='%23e3e3e3' stroke-width='1'/%3E%3Cline id='Line_4' data-name='Line 4' x2='44' transform='translate(0 3)' fill='none' stroke='%23e3e3e3' stroke-width='1'/%3E%3Cline id='Line_5' data-name='Line 5' x2='17' transform='translate(49.009 4)' fill='none' stroke='%23e3e3e3' stroke-width='1'/%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/svg%3E%0A" alt="" srcset="">
								<span>
									<label htmlFor='photo-upload' className='btn btn-sm btn-outline-primary'>
										Upload Images
									</label>
									<input type='file' id="thumbnail_file" name="thumbnail" id='photo-upload' className='d-none' accept='image/*' multiple style="display: none;" />
								</span>
							</div>
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
								</span></div><input name="focus_keyword" type="text" class="form-control custom-input" required="" autocomplete="new-password" value=""><span class="bar"></span><label class="cv-label left text-capitalize">focus keywords separated by commas</label>
						</div>
					</div>
					<div class="col-md-12">
						<div class="input-group mb-3 mt-4 px-3">
							<textarea name="meta_description" class="form-control custom-input px-0"></textarea>
							<span class="bar"></span>
							<label class="cv-label left text-capitalize position-absolute mt-n4">description</label>
						</div>
					</div>
				</div>
				<div class="card-footer bg-white d-flex justify-content-between">
					<button type="button" class="btn btn-secondary btn-sm">back</button>
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
		console.log(form_data);
		$.ajax({
			url: post_url,
			type: request_method,
			data: form_data,
		}).done(function(response) {
			console.log(response)
			Toastify({
				text: response.message,
				duration: 3000,
				gravity: "top",
				position: 'right',
				backgroundColor: "#228B22",
				stopOnFocus: true,
			}).showToast();

		}).fail(function(err) {
			console.log(err.message)
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
