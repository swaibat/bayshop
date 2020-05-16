<main role="main" class="container mt-6">
    <div class="d-flex align-items-center p-3 mb-4 text-white-50 bg-purple rounded shadow-xs bg-primary">
        <img class="mr-3" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-outline.svg" alt="" width="48"
            height="48">
        <div class="lh-100">
            <h6 class="mb-0 text-white lh-100">Bootstrap</h6>
            <small>Since 2011</small>
        </div>
    </div>
    <div class="card">
        <div class="card-header">your shopping cart</div>
        <div class="card-body">
            <?php if(isset($_SESSION['cart'])):?>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th width="40%">Product Name</th>
                        <th width="10%">Quantity</th>
                        <th width="20%">Price</th>
                        <th width="15%">Total</th>
                        <th width="8%">Action</th>
                    </tr>

                    <?php foreach ($cart_products as $key => $value):?>
                    <tr>
                        <td>Mobile Lite</td>
                        <td>2</td>
                        <td align="right">$ 125.00</td>
                        <td align="right">$ 250.00</td>
                        <td><button name="delete" class="btn btn-danger btn-sm delete" id="3">Remove</button></td>
                    </tr>
                    <?php endforeach ?>

                    <tr>
                        <td colspan="3" align="right">Total</td>
                        <td align="right">$ 335.00</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <?php else : ?>
            <div class="text-center">
                <h5>No Items in the shopping cart</h5>
                <p>add some items.</p>
            </div>
            <?php endif ?>
        </div>
    </div>
</main>
