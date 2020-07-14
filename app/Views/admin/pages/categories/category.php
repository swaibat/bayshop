<div class="card border-0 shadow-xs p-3 w-100">
	<div class="row">
		<div class="col-sm-12 mt-n3">
			<button data-toggle="modal" data-target="#mymodal" data-modal='' data-id="<?= base_url('admin/categories/create'); ?>" id="menu" class="btn btn-sm btn-primary mb-n5">
				Add Category
			</button>
			<?php $count = 1;
			$table = new \CodeIgniter\View\Table();
			$table->setHeading(array('No.', 'Category', 'created at','Action'));
			foreach ($categories as $category) {
				$table->addRow([
					$count++, $category['name'],
					date("d-m-Y, H:i:s", strtotime($category['created_at'])),
					'<span class="btn btn-sm btn-outline-primary"><i class="fa fa-plus"></i> add sub category</span>'.
					edit_delete('categories', $category, ['type' => 'modal'])
				]);
			}
			$table->setTemplate(['table_open' => '<table id="example" class="table table-striped" style="width:100%">', 'row_start' => '<tr id="row_' . $category['id'] . '">',]);
			echo $table->generate(); ?>
		</div>
	</div>
</div>
