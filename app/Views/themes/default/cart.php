<main role="main" class="container mt-6">
<nav aria-label="breadcrumb shadow-xs bg-transparent">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="/products">Products</a></li>
    <li class="breadcrumb-item active" aria-current="page">Cart</li>
  </ol>
</nav>
    <div class="rounded bg-white p-3 shadow-xs w-100">
        <h6>Shopping Cart</h6>
        <?php if(isset($_SESSION['cart'])):?>
    <form name="cart">
            <table name="cart" class="table table-striped table-bordered rounded">
                <tr>
                    <th width="10%"></th>
                        <th width="40%">Item</th>
                        <th width="20%">Qty</th>
                        <th width="15%">Price</th>
                        <th>&nbsp;</th>
                        <th width="15%" >Item Total</th>
                </tr>
                <?php foreach ($cart_products as $key => $value):?>
                <tr name="line_items">
                    <td><button name="remove" class="btn btn-outline-danger btn-sm ">Remove</button></td>
                    <td>Stuff</td>
                    <td><input type="number" min='1' class='form-control' name="qty" value="1"></td>
                    <td><input type="text" class='form-control' readonly name="price" value="9.99"></td>
                    <td>&nbsp;</td>
                    <td><input type="text" class='form-control' name="item_total" value="" jAutoCalc="{qty} * {price}"></td>
                </tr>
                <?php endforeach ?>
                <tr>
                    <td colspan="3">&nbsp;</td>
                    <td>Subtotal</td>
                    <td>&nbsp;</td>
                    <td><input type="text" class='form-control' name="sub_total" value="" jAutoCalc="SUM({item_total})"></td>
                </tr>
                <tr>
                    <td colspan="3">&nbsp;</td>
                    <td>
                        Tax:
                        <select name="tax">
                            <option value=".06">CT Tax</option>
                            <option selected value=".00">Tax Free</option>
                        </select>
                    </td>
                    <td>&nbsp;</td>
                    <td><input type="text" class='form-control' name="tax_total" value="" jAutoCalc="{sub_total} * {tax}"></td>
                </tr>
                <tr>
                    <td colspan="3">&nbsp;</td>
                    <td>Total</td>
                    <td>&nbsp;</td>
                    <td><input type="text" class='form-control' name="grand_total" value="" jAutoCalc="{sub_total} + {tax_total}"></td>
                </tr>
            </table>
            <div class="w-100 d-flex justify-content-end">
            <div class='btn-group btn-group-sm ml-auto'>
                    <td colspan="99"><button   class="btn btn-primary btn-sm">Continue Shopping</button></td>
                    <td colspan="99"><button   class="btn btn-success btn-sm">Process Order</button></td>

                </div>
                </div>
</form>
<?php else : ?>
            <div class="text-center">
                <h5>No Items in the shopping cart</h5>
                <p>add some items.</p>
            </div>
            <?php endif ?>
    </div>
</main>

<script>

</script>
<script type="text/javascript">
            $(document).ready(function() {
                function autoCalcSetup() {
                    $('form[name=cart]').jAutoCalc('destroy');
                    $('form[name=cart] tr[name=line_items]').jAutoCalc({keyEventsFire: true, decimalPlaces: 2, emptyAsZero: true});
                    $('form[name=cart]').jAutoCalc({decimalPlaces: 2});
                }
                autoCalcSetup();


                $('button[name=remove]').click(function(e) {
                    e.preventDefault();

                    var form = $(this).parents('form')
                    $(this).parents('tr').remove();
                    autoCalcSetup();

                });

                $('button[name=add]').click(function(e) {
                    e.preventDefault();

                    var $table = $(this).parents('table');
                    var $top = $table.find('tr[name=line_items]').first();
                    var $new = $top.clone(true);

                    $new.jAutoCalc('destroy');
                    $new.insertBefore($top);
                    $new.find('input[type=text]').val('');
                    autoCalcSetup();

                });

            });
        
        </script>