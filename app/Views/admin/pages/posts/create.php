<div class="card">
	<div class="row">
		<div class="col-sm-12">
			<form id='form' action="<?= base_url() . 'admin/posts/create/' ?>" method="post">
				<div class="form-row modal-body p-4">
					<div class="col-md-12">
						<div class="cv-form-group input-group mb-3 mt-4 px-3">
							<div class="input-group-prepend"><span class="input-group-text bg-white rounded-0 cv-chev left">
									<ion-icon name="trail-sign-outline"></ion-icon>
								</span></div><input id='title' name="post_title" type="text" class="form-control custom-input" required=""><span class="bar"></span><label class="cv-label left text-capitalize">title</label>
						</div>
					</div>
					<div class="col-md-6 d-none">
						<div class="cv-form-group input-group mb-3 mt-4 px-3">
							<div class="input-group-prepend"><span class="input-group-text bg-white rounded-0 cv-chev left">
									<ion-icon name="person-outline"></ion-icon>
								</span></div><input id="slug" name="slug" type="text" class="form-control custom-input" required="" autocomplete="new-password" value=""><span class="bar"></span><label class="cv-label left text-capitalize">slug</label>
						</div>
					</div>
					<div class="col-md-12 pt-3">
						<div class="form-group px-3">
							<textarea class="wysihtml5 form-control rounded" name="content" id="content" rows="20"></textarea>
						</div>
					</div>

					<div class="col-md-5">
						<div class="input-group mb-3 mt-4 px-3 d-flex align-items-center">
							<span class="mt-2">Publish the post :</span>
							<span class="button b2 mt-0 ml-3 mt-2" id="button-10"><input id='status' value='1' type="checkbox" name="status" class="checkbox">
								<div class="knobs"><span>YES</span></div>
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
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary btn-sm">submit</button>
				</div>
			</form>
