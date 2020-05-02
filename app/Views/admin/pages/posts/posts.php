<div class="card p-3">
	<div class="row">
		<div class="col-sm-12 mt-n3">
			<a href="<?= base_url() . '/admin/posts/create'; ?>" class="btn btn-sm btn-primary mb-n5">
				Add Post
			</a>
			<?php $count = 1;
			$table = new \CodeIgniter\View\Table();
			$table->setHeading(array('No.', 'Title', 'Author', 'post category', 'created at', 'status', 'Action'));
			foreach ($posts as $post) {
				$table->addRow([
					$count++, $post['title'], $post['user_id'],  $post['category_id'],
					date("d-m-Y, H:i:s", strtotime($post['created_at'])),
					get_status($post),
					edit_delete('posts', $post)
				]);
			}
			$table->setTemplate(['table_open' => '<table id="example" class="table table-striped" style="width:100%">', 'row_start' => '<tr id="row_' . $post['id'] . '">',]);
			echo $table->generate(); ?>
		</div>
	</div>
</div>
