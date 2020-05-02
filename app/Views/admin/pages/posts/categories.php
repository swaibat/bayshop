<div class="card p-3">
	<div class="row">
		<div class="col-sm-12 mt-n3">
			<button data-toggle="modal" data-target="#mymodal" data-modal="" data-id="<?= base_url('admin/posts/categories/create') ?>" id="menu" class="btn btn-sm btn-primary mb-n5">
				Create Post Category
			</button>
			<?php $count = 1;
			$table = new \CodeIgniter\View\Table();
			$table->setHeading(array('No.', 'Category', 'created at', 'status', 'Action'));
			foreach ($post_categories as $category) {
				$table->addRow([
					$count++, $category['name'],
					date("d-m-Y, H:i:s", strtotime($category['created_at'])),
					get_status($category),
					edit_delete('post_categories', $category)
				]);
			}
			$table->setTemplate(['table_open' => '<table id="example" class="table table-striped" style="width:100%">', 'row_start' => '<tr id="row_' . $category['id'] . '">',]);
			echo $table->generate(); ?>
		</div>
	</div>
</div>
