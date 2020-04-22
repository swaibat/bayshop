<div class="card p-3">
	<div class="row">
		<div class="col-sm-12">
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
					</tr>
				</thead>
				<tbody>
					<?php $sn = 1;
					foreach ($countries as $country) { ?>
						<tr id='row_<?= $sn ?>'>
							<td><?= $sn++; ?></td>
							<td><img class="border rounded" height="35" width="50" src="<?= $country['flag']; ?>" alt="<?= $country['name']; ?>" srcset=""></td>
							<td><?= $country['name']; ?></td>
							<td><?= $country['calling_codes']; ?></td>
							<td><?= $country['currencies_code']; ?></td>
							<td><?= $country['currencies_symbol']; ?></td>
							<td><?= $country['time_zones']; ?></td>
						</tr>
					<?php } ?>
				</tbody>
				</tfoot>
			</table>
		</div>
	</div>
</div>
