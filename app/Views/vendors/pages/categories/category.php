<div class="card border-0 shadow-xs p-3">
	<div class="row">
		<div class="col-sm-12 mt-n3">
			<button data-toggle="modal" data-target="#mymodal" data-modal='' data-id="<?= base_url('admin/categories/create'); ?>" id="menu" class="btn btn-sm btn-primary mb-n5">
				Add Category
			</button>
			<?php $count = 1;
			$table = new \CodeIgniter\View\Table();
			$table->setHeading(array('No.', 'Category', 'type', 'created at', 'status', 'Action'));
			foreach ($categories as $category) {
				$table->addRow([
					$count++, $category['name'], get_name_by_id($category['type'], $types),
					date("d-m-Y, H:i:s", strtotime($category['created_at'])),
					get_status($category),
					edit_delete('categories', $category, ['type' => 'modal'])
				]);
			}
			$table->setTemplate(['table_open' => '<table id="example" class="table table-striped" style="width:100%">', 'row_start' => '<tr id="row_' . $category['id'] . '">',]);
			echo $table->generate(); ?>
		</div>
	</div>
</div>
