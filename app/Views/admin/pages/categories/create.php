<form id='form' action="<?= base_url('admin/categories/create') ?>" method="post" enctype="multipart/form-data" accept-charset="utf-8" novalidate="">
	<div class="modal-header border-0">
		<h6 class="modal-title position-absolute bg-primary text-white" id="mymodalLabel"><?= $page_title ?></h6>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
	<div class="form-row modal-body p-4">
		<?= custom_inputs([
			'name'        	=> 'name',
			'id'          	=> 'name',
			'type'        	=> 'text',
			'label'      	=> 'category name',
			'class'       	=> 'form-control custom-input',
		], ['group-class' 	=> 'mt-2 mx-3', 'icon-name' => 'person-outline']) ?>
		<?= form_dropdown('shirts', get_pairs($types), 'large', 'class="form-control" id="type"'); ?>
		<?= image_uploader(['name'=>'icon'])?>
		<?= custom_chekbox(['name' => 'status', 'id' => 'status', 'label' => 'Publish the product']) ?>
	</div>
	<div class="modal-footer">
		<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
		<button type="submit" class="btn btn-primary btn-sm">submit</button>
	</div>
</form>
