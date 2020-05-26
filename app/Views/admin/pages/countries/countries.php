<div class="card p-3">
	<div class="row">
		<div class="col-sm-12">
			<table id="example" class="table table-striped" style="width:100%">
				<thead>
					<tr>
						<th>s/n</th>
						<th>flag</th>
						<th>name</th>
						<th>dial-code</th>
						<th>currency</th>
						<th>c-symbol</th>
						<th>c-symbol</th>
					</tr>
				</thead>
				<tbody>
					<?php $sn = 1;
					foreach ($countries as $country) { ?>
						<tr id='row_<?= $sn ?>'>
							<td><?= $sn++; ?></td>
							<td><img class="border rounded" height="35" width="50" src="<?=base_url('assets/flags').'/'. $country['flag']; ?>" alt="<?= $country['name']; ?>" srcset=""></td>
							<td><?= $country['name']; ?></td>
							<td><?= $country['callingCodes']; ?></td>
							<td><?= $country['currency_name']; ?></td>
							<td><?= $country['currency_code']; ?></td>
							<td><?= $country['currency_symbol']; ?></td>
						</tr>
					<?php } ?>
				</tbody>
				</tfoot>
			</table>
		</div>
	</div>
</div>
