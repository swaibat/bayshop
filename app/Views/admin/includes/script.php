<footer></footer>

<div class="modal fade" id="mymodal" tabindex="-1" role="dialog" aria-labelledby="mymodalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
		<div class="modal-content">
			<div id="dynamic-content"></div>
		</div>
	</div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="<?= base_url('/assets/shared/bootstrap-4.4.1/js/bootstrap.bundle.js'); ?>"></script>
<script src="<?= base_url('/assets/plugins/select2/dist/js/select2.min.js'); ?>"></script>
<script src="<?= base_url('/assets/plugins/dataTables/datatables.min.js'); ?>"></script>
<script src="<?= base_url('/assets/plugins/summernote/summernote-bs4.min.js'); ?>"></script>
<script>
	$(document).ready(function() {
		$('#example').DataTable({
			dom: "<'top'f>" + "<'bottom't>" +
				"<'row'<'col-sm-3'i><'col-sm-3'l><'col-sm-6'p>>"
		});
		$("#status").on('change', (e) => {
			const {
				target
			} = e
			target.checked === true ? target.value = '0' : target.value = '1';
			console.log(e.target.value);
		})
		$('#content').summernote({
			height: 200, // set editor height
			minHeight: null, // set minimum height of editor
			maxHeight: null, // set maximum height of editor
			focus: false // set focus to editable area after initializing summernote
		});
		$('#description').summernote({
			height: 200, // set editor height
			minHeight: null, // set minimum height of editor
			maxHeight: null, // set maximum height of editor
			focus: false // set focus to editable area after initializing summernote
		});
		$('#country').select2({
			placeholder: 'Select Country'
		});
		$('#category').select2({
			placeholder: 'Select category'
		});
		$('#product_type').select2({
			placeholder: 'Select product Type'
		});
		$('#vendor').select2({
			placeholder: 'Select product Type'
		});
	});
</script>
