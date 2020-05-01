<div class="card p-3">
	<div class="row">
		<div class="col-sm-12 mt-n3">
			<a href="<?= base_url('admin/products/create'); ?>" class="btn btn-sm btn-primary mb-n5"><span class="btn-label"><i class="fa fa-plus"></i></span>
				Add Product
			</a>
			<?php $count = 1;
			$table = new \CodeIgniter\View\Table();
			$table->setHeading(array('No.', 'Img', 'name', 'type', 'created at', 'status', 'Action'));
			foreach ($products as $product) {
				$table->addRow([
					$count++, "<img height='35' class='rounded border' src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMjAiIGhlaWdodD0iMTIwIiB2aWV3Qm94PSIwIDAgMTIwIDEyMCI+PGRlZnM+PHN0eWxlPi5he2ZpbGw6I2ZmZjt9LmIsLmUsLmd7ZmlsbDpub25lO30uYiwuZXtzdHJva2U6I2UzZTNlMzt9LmJ7c3Ryb2tlLWRhc2hhcnJheToxIDI7fS5je2ZpbGw6I2Y3ZjdmNzt9LmR7ZmlsbDojZTNlM2UzO30uZntzdHJva2U6bm9uZTt9PC9zdHlsZT48L2RlZnM+PGcgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTg4NiAtNjI0KSI+PHJlY3QgY2xhc3M9ImEiIHdpZHRoPSIxMjAiIGhlaWdodD0iMTIwIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg4ODYgNjI0KSIvPjxnIHRyYW5zZm9ybT0idHJhbnNsYXRlKDIzIDEyMy4zMykiPjxnIHRyYW5zZm9ybT0idHJhbnNsYXRlKDg4MiA1MjIpIj48ZyBjbGFzcz0iYiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMCAxNi42NykiPjxyZWN0IGNsYXNzPSJmIiB3aWR0aD0iNjciIGhlaWdodD0iNTUiLz48cmVjdCBjbGFzcz0iZyIgeD0iMC41IiB5PSIwLjUiIHdpZHRoPSI2NiIgaGVpZ2h0PSI1NCIvPjwvZz48cmVjdCBjbGFzcz0iYyIgd2lkdGg9IjY0IiBoZWlnaHQ9IjYzIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxNiAtMC4zMykiLz48ZWxsaXBzZSBjbGFzcz0iZCIgY3g9IjExIiBjeT0iMTAuNSIgcng9IjExIiByeT0iMTAuNSIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMjEgOS42NykiLz48cmVjdCBjbGFzcz0iYSIgd2lkdGg9IjI1IiBoZWlnaHQ9IjIzIiB0cmFuc2Zvcm09Im1hdHJpeCgxLCAtMC4wMTcsIDAuMDE3LCAxLCAzMS4wMTQsIDIzLjIpIi8+PHBhdGggY2xhc3M9ImQiIGQ9Ik0xMSwwLDIyLDE2SDBaIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg0OCAzMC42NykiLz48bGluZSBjbGFzcz0iZSIgeDI9IjM4LjEwOCIgeTI9IjAuMjEyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgyMS41IDUwLjE3KSIvPjxsaW5lIGNsYXNzPSJlIiB4Mj0iMTIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDY0LjY1NyA1MC4zODIpIi8+PGxpbmUgY2xhc3M9ImUiIHgyPSIyNyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMjEuNSA1NC4xNykiLz48bGluZSBjbGFzcz0iZSIgeDI9IjE3IiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg1NS42NTcgNTQuMzgyKSIvPjwvZz48L2c+PC9nPjwvc3ZnPg=='>", $product['title'], $product['type'],
					date("d-m-Y, H:i:s", strtotime($product['created_at'])),
					get_status($product),
					edit_delete('products', $product)
				]);
			}
			$table->setTemplate(['table_open' => '<table id="example" class="table table-striped table-bordered" style="width:100%">', 'row_start' => '<tr id="row_' . $product['id'] . '">',]);
			echo $table->generate(); ?>
		</div>
	</div>
</div>
