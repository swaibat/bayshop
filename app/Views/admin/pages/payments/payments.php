<div class="card p-3">
	<div class="row">
		<div class="col-sm-12">
			<?php $count = 1;
			$table = new \CodeIgniter\View\Table();
			$table->setHeading(array('Order', 'Date', 'customer', 'payments' ,'status' ,'amount','Action'));
			foreach ($payments as $payment) {
				$table->addRow([
					'#DGF467D',
					date("d-m-Y, H:i:s", strtotime($payment['created_at'])),
                    $payment['payer_email'],
                    '<span class="badge alert-success text-lowercase">'.$payment['payment_status'].'</span>',
                    '<span class="badge alert-primary text-lowercase">fulfilled</span>',
					$payment['amount'],
					'<a href="orders/'.$payment['id'].'" class="btn btn-sm btn-primary">Details</>'
				]);
			}
			$table->setTemplate(['table_open' => '<table id="example" class="table" style="width:100%">', 'row_start' => '<tr id="row_' . $payment['id'] . '">',]);
			echo $table->generate(); ?>
		</div>
	</div>
</div>
