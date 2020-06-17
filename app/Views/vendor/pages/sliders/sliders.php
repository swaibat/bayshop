<div class="card p-3">
	<div class="row">
		<div class="col-sm-12 mt-n3">
			<a href="<?= base_url() . '/admin/sliders/create'; ?>" class="btn btn-sm btn-primary mb-n5">
				Add Slider
			</a>
			<?php $count = 1;
			$table = new \CodeIgniter\View\Table();
			$table->setHeading(array('No.', 'Title', 'description', 'product_link', 'created at', 'status', 'Action'));
			foreach ($sliders as $slider) {
				$table->addRow([
					$count++, $slider['title'], $slider['description'],  $slider['product_link'],
					date("d-m-Y, H:i:s", strtotime($slider['created_at'])),
					get_status($slider),
					edit_delete('sliders', $slider, [])
				]);
			}
			$table->setTemplate(['table_open' => '<table id="example" class="table table-striped" style="width:100%">', 'row_start' => '<tr id="row_' . $slider['id'] . '">',]);
			echo $table->generate(); ?>
		</div>
	</div>
</div>
