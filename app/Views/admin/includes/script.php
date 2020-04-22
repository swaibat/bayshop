<footer></footer>
<div class="modal fade" id="mymodal" tabindex="-1" role="dialog" aria-labelledby="mymodalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div id="dynamic-content"></div>
		</div>
	</div>
</div>
<!-- delete modal -->
<div class="modal fade" id="delmodal" tabindex="-1" role="dialog" aria-labelledby="mymodalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">

			<div class="modal-header border-0">
				<h6 class="modal-title position-absolute bg-primary text-white" id="mymodalLabel">Delete</h6>
				<button type="button" class="close " data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body text-center p-4">
				<h6 class="d-block">Are you sure</h6>
				<p class="d-block">operation will parmanently deleted</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
				<button id='del-confirm' type="button" class="btn btn-primary btn-sm">Delete</button>
			</div>
		</div>
	</div>
</div>
<script src="<?= base_url('/assets/shared/jquery/jquery-3.4.1.min.js'); ?>"></script>
<script src="<?= base_url('assets/plugins/toastify-js/toastify-js.js'); ?>"></script>
<script src="<?= base_url('/assets/plugins/jquery-multifile/jquery-multifile.js'); ?>"></script>
<script src="https://malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="<?= base_url('/assets/shared/bootstrap-4.4.1/js/bootstrap.bundle.js'); ?>"></script>
<script src="<?= base_url('/assets/plugins/select2/dist/js/select2.min.js'); ?>"></script>
<script src="<?= base_url('/assets/plugins/dataTables/datatables.min.js'); ?>"></script>
<script src="<?= base_url('/assets/plugins/summernote/summernote-bs4.min.js'); ?>"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
	$(document).ready(function() {
		$(".MultiFile-list").sortable();
		$(".MultiFile-list").disableSelection();
		$('#photo-upload').change(() => {
			$('#olden').removeClass('d-flex').addClass('d-none');
			$('#img-holder').removeClass('d-flex justify-content-center align-items-center');
			$('.upload-btn').addClass('mt-1').removeClass('d-none');
			$(".MultiFile-preview").removeAttr("style")
			$('.MultiFile-list').find(">").addClass("first");
		})
		$('#form').submit(function(event) {
			event.preventDefault();
			var data = new FormData($('#form')[0]);
			$.ajax({
				type: "POST",
				enctype: 'multipart/form-data',
				url: "/admin/products/create",
				data: data,
				processData: false,
				contentType: false,
				cache: false,
				timeout: 800000,
			}).done(function(response) {
				Toastify({
					text: response.message,
					duration: 3000,
					gravity: "top",
					position: 'right',
					backgroundColor: "#228B22",
					stopOnFocus: true,
				}).showToast();

			}).fail(function(err) {
				Toastify({
					text: 'Error operation failed',
					duration: 3000,
					gravity: "top",
					position: 'right',
					backgroundColor: '#FFA500',
					stopOnFocus: true,
				}).showToast();
			});;

		});

	});
</script>
<script src="<?= base_url('/assets/admin/js/script.js'); ?>"></script>
