<div class="card p-3">
	<div class="row">
		<div class="col-sm-12 mt-n3">
			<a href="<?= base_url('admin/product_create') ; ?>" class="btn btn-sm btn-primary mb-n5"><span class="btn-label"><i class="fa fa-plus"></i></span>
				Add Product
			</a>
			<table id="example" class="table table-striped table-bordered" style="width:100%">
				<thead>
					<tr>
						<th>s/n</th>
						<th>Img</th>
						<th>name</th>
						<th>type</th>
						<th>created at</th>
						<th>status</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($products as $product) { ?>
						<tr>
							<td><?= $product->product_id; ?></td>
							<td><img class='rounded border'src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='120' height='120' viewBox='0 0 120 120'%3E%3Cdefs%3E%3Cstyle%3E.a%7Bfill:%23fff;%7D.b,.e,.g%7Bfill:none;%7D.b,.e%7Bstroke:%23e3e3e3;%7D.b%7Bstroke-dasharray:1 2;%7D.c%7Bfill:%23f7f7f7;%7D.d%7Bfill:%23e3e3e3;%7D.f%7Bstroke:none;%7D%3C/style%3E%3C/defs%3E%3Cg transform='translate(-886 -624)'%3E%3Crect class='a' width='120' height='120' transform='translate(886 624)'/%3E%3Cg transform='translate(23 123.33)'%3E%3Cg transform='translate(882 522)'%3E%3Cg class='b' transform='translate(0 16.67)'%3E%3Crect class='f' width='67' height='55'/%3E%3Crect class='g' x='0.5' y='0.5' width='66' height='54'/%3E%3C/g%3E%3Crect class='c' width='64' height='63' transform='translate(16 -0.33)'/%3E%3Cellipse class='d' cx='11' cy='10.5' rx='11' ry='10.5' transform='translate(21 9.67)'/%3E%3Crect class='a' width='25' height='23' transform='matrix(1, -0.017, 0.017, 1, 31.014, 23.2)'/%3E%3Cpath class='d' d='M11,0,22,16H0Z' transform='translate(48 30.67)'/%3E%3Cline class='e' x2='38.108' y2='0.212' transform='translate(21.5 50.17)'/%3E%3Cline class='e' x2='12' transform='translate(64.657 50.382)'/%3E%3Cline class='e' x2='27' transform='translate(21.5 54.17)'/%3E%3Cline class='e' x2='17' transform='translate(55.657 54.382)'/%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/svg%3E" height="50"></td>
							<td><?= $product->title; ?></td>
							<td><?= $product->product_type; ?></td>
							<td><?= date("d-m-Y, H:i:s", strtotime($Product->created_at)); ?></td>
							<td class="text-center">
								<div class="custom-control custom-switch">
									<input type="checkbox" <?= $Product->status == '1' ? 'checked' : '' ?> class="custom-control-input" id="custom<?= $Product->product_id ?>">
									<label class="custom-control-label" for="custom<?= $Product->product_id; ?>"></label>
								</div>
							</td>
							<td class="text-center">
								<div class="btn-group btn-group-sm">
									<a class="btn btn-outline-primary" href="<?= base_url() . 'admin/product_update/' . $Product->product_id; ?>">
										<ion-icon src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 576 512'%3E%3Cpath d='M402.6 83.2l90.2 90.2c3.8 3.8 3.8 10 0 13.8L274.4 405.6l-92.8 10.3c-12.4 1.4-22.9-9.1-21.5-21.5l10.3-92.8L388.8 83.2c3.8-3.8 10-3.8 13.8 0zm162-22.9l-48.8-48.8c-15.2-15.2-39.9-15.2-55.2 0l-35.4 35.4c-3.8 3.8-3.8 10 0 13.8l90.2 90.2c3.8 3.8 10 3.8 13.8 0l35.4-35.4c15.2-15.3 15.2-40 0-55.2zM384 346.2V448H64V128h229.8c3.2 0 6.2-1.3 8.5-3.5l40-40c7.6-7.6 2.2-20.5-8.5-20.5H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V306.2c0-10.7-12.9-16-20.5-8.5l-40 40c-2.2 2.3-3.5 5.3-3.5 8.5z'/%3E%3C/svg%3E"></ion-icon>
									</a>
									<a href="#" name='<?= $Product->product_id; ?>' class='btn btn-primary delete' id='del_<?= $Product->product_id; ?>' data-id='<?= $Product->product_id; ?>' data-toggle="modal" data-target="#exampleModal">
										<ion-icon name="trash-bin"></ion-icon>
									</a>
								</div>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
