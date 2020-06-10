<main role="main" class="container">
    <div class="rounded bg-white p-3 shadow-xs w-100">
        <h6>Shopping Cart</h6>
        <?php 
         if(isset($_SESSION['cart'])):?>
    <form name="cart" action='<?=base_url('shopping/login')?>' method='POST'>
            <table name="cart" class="cart-table table table-striped table-bordered rounded">
                <tr>
                        <th width="50%">Item</th>
                        <th width="10%">Qty</th>
                        <th width="10%">Price</th>
                        <th width="10%" >Item Total</th>
                </tr>
                <?php foreach ($cart_products as $key => $value):?>
                <tr id='<?= $value['id']?>' class='item-row' name="line_items">
                    <td>
                        <span class='d-flex'>
                        <img height='50' width='50' class='rounded shadow-xs mr-3' src="<?= $value['url']?>" alt="">
                        <span class='d-flex flex-column w-100'>
                        <small class='mb-2'><?= $value['title']?></small>
                        <div id='specs'class="d-flex">
                            <span class='ml-2'>Color : <?= $value['color']?></span>
                            <span class='ml-2'>Size : <?= $value['size']?></span>
                            <button name='remove' id='<?=$key?>' type="button" class="btn btn-xs btn-outline-danger ml-auto">remove</button>
                        </div>
                        </span>
                        
                        </span>
                    </td>
                    <td><input type="number" min='1' class='form-control' name="qty" value="<?= $value['qty']?>"></td>
                    <td><input type="text" class='form-control' readonly name="price" value="<?= $value['price']?>"></td>
                    <td><input type="text" class='form-control' name="item_total" value="" jAutoCalc="{qty} * {price}"></td>
                </tr>
                <?php endforeach ?>
                <tr>
                    <td colspan="2">&nbsp;</td>
                    <td>Subtotal</td>
                    <td><input type="text" class='form-control' id='sub_total' name="sub_total" value="" jAutoCalc="SUM({item_total})"></td>
                </tr>
                <tr>
                    <td colspan="2">&nbsp;</td>
                    <td>
                        Tax:
                        <select name="tax">
                            <option value=".06">CT Tax</option>
                            <option selected value=".00">Tax Free</option>
                        </select>
                    </td>
                    <td><input type="text" class='form-control' name="tax_total" value="" jAutoCalc="{sub_total} * {tax}"></td>
                </tr>
                <tr>
                    <td colspan="2">&nbsp;</td>
                    <td>Total</td>
                    <td><input type="text" class='form-control' id='total' name="grand_total" value="" jAutoCalc="{sub_total} + {tax_total}"></td>
                </tr>
            </table>
            <div class="w-100 d-flex justify-content-end">
            <div class='btn-group btn-group-sm ml-auto'>
                    <td colspan="99"><button  class="btn btn-primary btn-sm">Continue Shopping</button></td>
                    <td colspan="99"><button type='submit' class="btn btn-success btn-sm">Process Order</a></td>

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
$('form').submit((e) => {
    const cartItems = <?= json_encode($_SESSION['cart']) ?>;
    $('.item-row').each(function(index, tr) {
        cartItems.find(e=>{
            if (e.id == $(this).attr('id')) {
                e.qty = $(this).find('[name=qty]').val()
            }
        }); 
    });

    $.post("/home/add_to_cart",
  {
    cart_items:JSON.stringify(cartItems)
  },
  function(data, status){
    alert("Data: " + data + "\nStatus: " + status);
  });
});

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
                    $.get(`/home/remove_from_cart/${e.target.id}`);
                    var form = $(this).parents('form');
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