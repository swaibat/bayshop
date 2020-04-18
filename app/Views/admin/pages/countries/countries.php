<div class="card p-3">
	<div class="row">
		<div class="col-sm-12 mt-n3">
			<a href="<?= base_url() . '/admin/countries/create'; ?>" class="btn btn-sm btn-primary mb-n5">
				Add Country
			</a>
			<table id="example" class="table table-striped table-bordered" style="width:100%">
				<thead>
					<tr>
						<th>s/n</th>
						<th>flag</th>
						<th>name</th>
						<th>dial-code</th>
						<th>currencies</th>
						<th>c-symbol</th>
                        <th>time zones</th>
                        <th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php $sn = 1;
					foreach ($countries as $country) { ?>
						<tr id='row_<?= $sn ?>'>
							<td><?= $sn++; ?></td>
							<td><img class="border rounded" height="35" width="50"  src="<?= $country['flag']; ?>" alt="<?= $country['name']; ?>" srcset=""></td>
							<td><?= $country['name']; ?></td>
                            <td><?= $country['calling_codes']; ?></td>
                            <td><?= $country['currencies_code']; ?></td>  
                            <td><?= $country['currencies_symbol']; ?></td>
                            <td><?= $country['time_zones']; ?></td>
							<td class="text-center">
								<div class="btn-group btn-group-sm">
									<button data-toggle="modal" data-target="#mymodal" data-modal='' data-id="<?= base_url() ?>/admin/posts/<?= $country['name'] ?>/update" id="menu" class="btn btn-outline-primary">
										<ion-icon src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 576 512'%3E%3Cpath d='M402.6 83.2l90.2 90.2c3.8 3.8 3.8 10 0 13.8L274.4 405.6l-92.8 10.3c-12.4 1.4-22.9-9.1-21.5-21.5l10.3-92.8L388.8 83.2c3.8-3.8 10-3.8 13.8 0zm162-22.9l-48.8-48.8c-15.2-15.2-39.9-15.2-55.2 0l-35.4 35.4c-3.8 3.8-3.8 10 0 13.8l90.2 90.2c3.8 3.8 10 3.8 13.8 0l35.4-35.4c15.2-15.3 15.2-40 0-55.2zM384 346.2V448H64V128h229.8c3.2 0 6.2-1.3 8.5-3.5l40-40c7.6-7.6 2.2-20.5-8.5-20.5H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V306.2c0-10.7-12.9-16-20.5-8.5l-40 40c-2.2 2.3-3.5 5.3-3.5 8.5z'/%3E%3C/svg%3E"></ion-icon>
									</button>
									<button data-toggle="modal" data-target="#delmodal" name='posts' id='<?= $country['name']; ?>' class='btn btn-primary delete' data-toggle="modal" data-target="#exampleModal">
										<ion-icon name="trash-bin"></ion-icon>
									</button>
								</div>
							</td>
						</tr>
					<?php } ?>
				</tbody>
				</tfoot>
			</table>
		</div>
	</div>
</div>
