<div class="card border-0 shadow-xs p-3">
	<div class="row">
		<div class="col-sm-12 mt-n3">
			<button data-toggle="modal" data-target="#mymodal" data-modal='modal-lg' data-id="<?= base_url('admin/coupon/create'); ?>" id="menu" class="btn btn-sm btn-primary mb-n5">
				Add Coupon
			</button>
			<?php $count = 1;
			$table = new \CodeIgniter\View\Table();
			$table->setHeading(array('code', 'name', 'type', 'expiry data', 'status', 'Action'));
			foreach ($coupons as $coupon) {
				$table->addRow([
					$count++, $coupon['name'], $coupon['type'],
					date("d-m-Y, H:i:s", strtotime($coupon['expiry_date'])),
					$coupon['status'],
					edit_delete('coupons', $coupon, ['type' => 'modal'])
				]);
			}
			$table->setTemplate(['table_open' => '<table id="example" class="table table-striped" style="width:100%">', 'row_start' => '<tr id="row_' . $coupon['id'] . '">',]);
			echo $table->generate(); ?>
		</div>
	</div>
</div>
