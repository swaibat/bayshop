<div class="card">
	<div class="row">
		<div class="col-sm-12 mt-n3">
			<a href="<?= base_url() . 'admin/product_create'; ?>" class="btn btn-sm btn-primary mb-n5 ml-3"><span class="btn-label"><i class="fa fa-plus"></i></span>
				Add Product
			</a>
			<table id="example" class="table table-striped table-bordered" style="width:100%">
				<thead>
					<tr>
						<th>s/n</th>
						<th>thumnail</th>
						<th>name</th>
						<th>type</th>
						<th>created at</th>
						<th>status</th>
						<th>Actions</th>
					</tr>
				</thead>
				
				</tfoot>
			</table>
		</div>
	</div>
</div>

<script type="text/javascript" src="<?= base_url() ?>assets/plugins/parsleyjs/dist/parsley.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('#example').DataTable({
			dom: "<'top'f>" + "<'bottom't>" +
				"<'row'<'col-sm-3'i><'col-sm-3'l><'col-sm-6'p>>"
		});
	});

	$(document).ready(function() {
		$('form').parsley();
	});
</script>

<!-- select2-->
<script src="<?= base_url() ?>assets/plugins/bootstrap-select/dist/js/bootstrap-select.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>assets/plugins/select2/select2.min.js" type="text/javascript"></script>
<!-- select2-->
