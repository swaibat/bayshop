<footer></footer>

<div class="accordion chat-modal d-none" id="chatModel">
	<div class="card border-0 chat-card shadow-sm">
		<div class="card-header cursor-pointer p-2 chat-modal-header" id="headingThree" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
			<div class="d-flex align-items-center"><img height="40" width="40" class="mr-2" src="<?= base_url('assets/shared/images/user.svg'); ?>" alt="agent">
				<div class="d-flex flex-fill justify-content-between">
					<div>
						<p class="mb-0 p-0">admin ug</p><small class="mt-n1">customer support</small>
					</div>
					<div><span class="badge badge-success">online</span></div>
				</div>
			</div>
		</div>
		<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#chatModel">
			<div>
				<div class="card-body py-1">
					<div class="p-0 mb-auto chat-window w-100 overflow-y-auto chat-container" id="chat">

					</div>
				</div>
				<div class="card-footer  px-2 py-1 bg-white border-0"><small>shau is typing . . .</small>
					<form id="chat-input" class="input-group d-flex align-items-end py-2">
						<input type="text" id="chat-text" class="form-control rounded-left" min="1" required="" value="">
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

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
<script src="<?= base_url('/assets/shared/bootstrap-4.4.1/js/bootstrap.min.js'); ?>"></script>
<script src="<?= base_url('/assets/plugins/select2/dist/js/select2.min.js'); ?>"></script>
<script src="<?= base_url('/assets/plugins/dataTables/datatables.min.js'); ?>"></script>
<script src="<?= base_url('/assets/plugins/summernote/summernote-bs4.min.js'); ?>"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<style>
</style>
<script>
	$(function() {
		$('[data-toggle="tooltip"]').tooltip()
	})
	$(document).ready(function() {
		const user = <?= $_SESSION['user'] ?>;
		socket.emit('online', {
			...user,
			pageTitle: document.title,
			pageLink: location.href,
		});
		$('#chat-text').keyup((evt) => {
			if (evt.target.value.length) {
				socket.emit('typing', 'swaibu is typing')
			} else {
				socket.emit('typing', null)
			};
		})
		$('#chat-input').submit((e) => {
			e.preventDefault()
			const msg = $('#chat-text').val()
			socket.emit('sendMessage', msg)
			$('#chat').append($('<p>').text(msg));
			$('#chat-text').val('')
		})
	})
</script>
<script>
	$(document).ready(function() {
		$(".MultiFile-list").sortable({
			placeholder: "upload-btn"
		});
		$(".MultiFile-list").disableSelection();
		$('#photo-upload').change(() => {
			$('#olden').removeClass('d-flex').addClass('d-none');
			$('#img-holder').removeClass('d-flex justify-content-center align-items-center');
			$('.upload-btn').addClass('mt-1').removeClass('d-none');
			$(".MultiFile-preview").removeAttr("style")
			$('.MultiFile-list').find(">").addClass("first");
		})
	});
</script>

<script src="<?= base_url('/assets/admin/js/script.js'); ?>"></script>
