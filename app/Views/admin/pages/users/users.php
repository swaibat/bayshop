
<div class="card p-3">
	<div class="row">
		<div class="col-sm-12 mt-n3">
			<button data-toggle="modal" data-target="#mymodal" data-modal="modal-lg" data-id="<?php echo base_url('admin/users/create'); ?>" id="menu" class="btn btn-sm btn-primary mb-n5">
				Add User
			</button>
			<?php $count = 1;
			$table = new \CodeIgniter\View\Table();
			$table->setHeading(array('No.', 'img', 'username', 'email', 'last_access', 'role', 'status', 'Action'));
			foreach ($users as $user) {
				$table->addRow([
					$count++, '<img height="30" src="' . base_url("assets/shared/images/user.svg") . '">', $user['username'],  $user['email'],
					date("d-m-Y, H:i:s",strtotime($user['last_login'])),$user['role'],
					get_status($user),
					edit_delete('users', $user)
				]);
			}
			$table->setTemplate(['table_open' => '<table id="example" class="table table-striped table-bordered" style="width:100%">', 'row_start' => '<tr id="row_' . $post['id'] . '">',]);
			echo $table->generate(); ?>
		</div>
	</div>
</div>
