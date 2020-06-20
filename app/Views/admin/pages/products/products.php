<div class="card p-3">
    <div class="row">
        <div class="col-sm-12 mt-n3">
            <button class="btn btn-sm btn-primary mb-n5 dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <span class="btn-label"><i class="fa fa-plus"></i></span>
                Add Product
            </button>
            <div class="dropdown-menu dropdown-product p-4" aria-labelledby="dropdownMenuButton">
                    <div class="row">
						<div class="col-md-6">
                        <a class='btn bg-light d-flex flex-column' href="">
							<span>
								<svg class="bi bi-cloud-download" width="4em" height="4em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									<path d="M4.887 5.2l-.964-.165A2.5 2.5 0 1 0 3.5 10H6v1H3.5a3.5 3.5 0 1 1 .59-6.95 5.002 5.002 0 1 1 9.804 1.98A2.501 2.501 0 0 1 13.5 11H10v-1h3.5a1.5 1.5 0 0 0 .237-2.981L12.7 6.854l.216-1.028a4 4 0 1 0-7.843-1.587l-.185.96z"/>
									<path fill-rule="evenodd" d="M5 12.5a.5.5 0 0 1 .707 0L8 14.793l2.293-2.293a.5.5 0 1 1 .707.707l-2.646 2.646a.5.5 0 0 1-.708 0L5 13.207a.5.5 0 0 1 0-.707z"/>
									<path fill-rule="evenodd" d="M8 6a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-1 0v-8A.5.5 0 0 1 8 6z"/>
								</svg>
							</span>
							Digital
						</a>
						</div>
						<div class="col-md-6">
						<a class='btn bg-light d-flex flex-column' href="<?= base_url('admin/products/create'); ?>">
							<span>
								<svg class="bi bi-archive" width="4em" height="4em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" d="M2 5v7.5c0 .864.642 1.5 1.357 1.5h9.286c.715 0 1.357-.636 1.357-1.5V5h1v7.5c0 1.345-1.021 2.5-2.357 2.5H3.357C2.021 15 1 13.845 1 12.5V5h1z"/>
									<path fill-rule="evenodd" d="M5.5 7.5A.5.5 0 0 1 6 7h4a.5.5 0 0 1 0 1H6a.5.5 0 0 1-.5-.5zM15 2H1v2h14V2zM1 1a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H1z"/>
								</svg>
							</span>
							Physical
						</a>
						</div>
                    </div>
            </div>
            <?php $count = 1;
			$table = new \CodeIgniter\View\Table();
			$table->setHeading(array('No.', 'Img', 'name', 'type', 'created at', 'status', 'Action'));
			foreach ($products as $product) {
				$table->addRow([
					$count++, "<img height='35' class='rounded border' src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMjAiIGhlaWdodD0iMTIwIiB2aWV3Qm94PSIwIDAgMTIwIDEyMCI+PGRlZnM+PHN0eWxlPi5he2ZpbGw6I2ZmZjt9LmIsLmUsLmd7ZmlsbDpub25lO30uYiwuZXtzdHJva2U6I2UzZTNlMzt9LmJ7c3Ryb2tlLWRhc2hhcnJheToxIDI7fS5je2ZpbGw6I2Y3ZjdmNzt9LmR7ZmlsbDojZTNlM2UzO30uZntzdHJva2U6bm9uZTt9PC9zdHlsZT48L2RlZnM+PGcgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTg4NiAtNjI0KSI+PHJlY3QgY2xhc3M9ImEiIHdpZHRoPSIxMjAiIGhlaWdodD0iMTIwIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg4ODYgNjI0KSIvPjxnIHRyYW5zZm9ybT0idHJhbnNsYXRlKDIzIDEyMy4zMykiPjxnIHRyYW5zZm9ybT0idHJhbnNsYXRlKDg4MiA1MjIpIj48ZyBjbGFzcz0iYiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMCAxNi42NykiPjxyZWN0IGNsYXNzPSJmIiB3aWR0aD0iNjciIGhlaWdodD0iNTUiLz48cmVjdCBjbGFzcz0iZyIgeD0iMC41IiB5PSIwLjUiIHdpZHRoPSI2NiIgaGVpZ2h0PSI1NCIvPjwvZz48cmVjdCBjbGFzcz0iYyIgd2lkdGg9IjY0IiBoZWlnaHQ9IjYzIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxNiAtMC4zMykiLz48ZWxsaXBzZSBjbGFzcz0iZCIgY3g9IjExIiBjeT0iMTAuNSIgcng9IjExIiByeT0iMTAuNSIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMjEgOS42NykiLz48cmVjdCBjbGFzcz0iYSIgd2lkdGg9IjI1IiBoZWlnaHQ9IjIzIiB0cmFuc2Zvcm09Im1hdHJpeCgxLCAtMC4wMTcsIDAuMDE3LCAxLCAzMS4wMTQsIDIzLjIpIi8+PHBhdGggY2xhc3M9ImQiIGQ9Ik0xMSwwLDIyLDE2SDBaIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg0OCAzMC42NykiLz48bGluZSBjbGFzcz0iZSIgeDI9IjM4LjEwOCIgeTI9IjAuMjEyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgyMS41IDUwLjE3KSIvPjxsaW5lIGNsYXNzPSJlIiB4Mj0iMTIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDY0LjY1NyA1MC4zODIpIi8+PGxpbmUgY2xhc3M9ImUiIHgyPSIyNyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMjEuNSA1NC4xNykiLz48bGluZSBjbGFzcz0iZSIgeDI9IjE3IiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg1NS42NTcgNTQuMzgyKSIvPjwvZz48L2c+PC9nPjwvc3ZnPg=='>", $product['title'], $product['type'],
					date("d-m-Y, H:i:s", strtotime($product['created_at'])),
					get_status($product),
					edit_delete('products', $product, [])
				]);
			}
			$table->setTemplate(['table_open' => '<table id="example" class="table table-striped" style="width:100%">', 'row_start' => '<tr id="row_' . $product['id'] . '">',]);
			echo $table->generate(); ?>
        </div>
    </div>
</div>
