<footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2020 <div class="bullet"></div>
        </div>
        <div class="footer-right">
          1.0.0
        </div>
      </footer>
    </div>
  </div>


  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="../assets/admin/assets/js/stisla.js"></script>
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
<?= script_tag('assets/shared/jquery/jquery-3.5.1.min.js'); ?>
<?= script_tag('assets/plugins/toastify-js/toastify-js.js'); ?>
<?= script_tag('assets/plugins/jquery-multifile/jquery-multifile.js'); ?>
<?= script_tag('assets/shared/bootstrap-4.4.1/js/bootstrap.bundle.min.js'); ?>
<?= script_tag('assets/plugins/select2/dist/js/select2.min.js'); ?>
<?= script_tag('assets/plugins/dataTables/datatables.min.js'); ?>
<?= script_tag('assets/plugins/summernote/summernote-bs4.min.js'); ?>
<?= script_tag('/assets/plugins/toJson/formToJson.min.js'); ?>
<?= script_tag("assets/shared/jquery/jquery-ui.js"); ?>
<?= script_tag('/assets/admin/js/script.js'); ?>
<?= model_loader() ?>


  <!-- JS Libraies -->

  <!-- Template JS File -->
  <script src="../assets/admin/assets/js/scripts.js"></script>
  <script src="../asset/admin/assets/js/custom.js"></script>

  <!-- Page Specific JS File -->
</body>
</html>