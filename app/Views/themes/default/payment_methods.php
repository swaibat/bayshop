<div class="container">
    <div class="row">
        <div class="col-md-8 pl-0">
            <ul class="list-group list-group-flush">
                <li class="list-group-item mb-3 rounded shadow-xs text-center">
                    <h5 class='text-center'>Adress Details</h5>
                    <hr>
                    <div class='pt-2'>
                        <h6>Rumbiiha Swaibu</h6>
                        <p class='m-0'>Kampala,Wakiso - Uganda</P>
                        <p class='m-0'>+257896638230<p>

                    </div>
                </li>
                <li class="list-group-item rounded shadow-xs">
                    <div class="m-auto sadow-xs px-3 pb-4 w-100">
                        <h5 class='text-center'>Select payment Method</h5>
                        <hr>
                        <form class="d-flex btn-group-toggle m-auto" action='/payments/paypal/create'
                            data-toggle="buttons">
                            <div class="form-group">
                                <div class="col-sm-offset-5 col-sm-7">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="paymentMethod" id="paypalRadio" value="paypal"
                                                checked>
                                            <img src="https://fpdbs.paypal.com/dynamicimageweb?cmd=_dynamic-image&amp;buttontype=ecmark&amp;locale=en_US"
                                                alt="Acceptance Mark" class="v-middle">
                                            <a href="https://www.paypal.com/us/cgi-bin/webscr?cmd=xpt/Marketing/popup/OLCWhatIsPayPal-outside"
                                                onclick="javascript:window.open('https://www.paypal.com/us/cgi-bin/webscr?cmd=xpt/Marketing/popup/OLCWhatIsPayPal-outside','olcwhatispaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, ,left=0, top=0, width=400, height=350'); return false;">What
                                                is PayPal?</a>
                                        </label>
                                    </div>
                                    <div class="radio disabled">
                                        <label>
                                            <input type="radio" name="paymentMethod" id="cardRadio" value="card"
                                                disabled>
                                            Card
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-5 col-sm-7">
                                    <!-- Container for PayPal Mark Checkout -->
                                    <div id="paypalCheckoutContainer"></div>
                                </div>
                            </div>
                        </form>
                    </div>

                </li>
            </ul>
        </div>
        <div class="col-md-4 p-0">
            <div class="bg-white shadow-xs rounded p-3">
                <h6 class="text-center">
                    Order Summary
                </h6>
                <hr>
                <?php if(isset($_SESSION['cart'])):?>
                <ul class="list-group list-group-flush mt-2 p-2">
                    <?php foreach ($_SESSION['cart'] as $key => $value):?>
                    <li class="list-group-item d-flex">
                        <img height='50' width='50' class='rounded shadow-xs mr-2' src="<?= $value['url']?>" alt="">
                        <span class='d-flex flex-column w-75'>
                            <small class='mb-2 text-truncate'><?= $value['title']?></small>
                            <div class="d-flex">
                                <span class='ml-2'>Color : <?= $value['color']?></span>
                                <span class='ml-2'>Size : <?= $value['size']?></span>
                            </div>
                        </span>
                    </li>
                    <?php endforeach ?>
                </ul>
                <?php endif ?>
            </div>
        </div>

    </div>
</div>
<script>
$('input').change(function(e) {
    e.preventDefault()
    console.log($('input:checked').val())
    $('form').attr('action', `/payments/${$('input:checked').val()}/create`);
});
// $('form').submit((e) => {
//     e.preventDefault()
//     $.post('/shopping/payments', {
//         method: $('input:checked').val()
//     }, function(data, status){
//     alert("Data: " + data + "\nStatus: " + status);
//   });
//     console.log($('input:checked').val())
// })
</script>
<script src="https://www.paypal.com/sdk/js?client-id=sb"></script>
<script>
function showDom(id) {
    let arr;
    if (!Array.isArray(id)) {
        arr = [id];
    } else {
        arr = id;
    }
    arr.forEach(function(domId) {
        document.getElementById(domId).style.display = 'block';
    });
}

function hideDom(id) {
    let arr;
    if (!Array.isArray(id)) {
        arr = [id];
    } else {
        arr = id;
    }
    arr.forEach(function(domId) {
        document.getElementById(domId).style.display = 'none';
    });
}

function getUrlParams(prop) {
    let params = {},
        search = decodeURIComponent(window.location.href.slice(window.location.href.indexOf('?') + 1)),
        definitions = search.split('&');

    definitions.forEach(function(val) {
        let parts = val.split('=', 2);
        params[parts[0]] = parts[1];
    });

    return (prop && prop in params) ? params[prop] : params;
}
</script>

<!-- PayPal In-Context Checkout script -->
<script type="text/javascript">
paypal.Buttons({

    // Set your environment
    env: 'sandbox',

    // Set style of button
    style: {
        layout: 'horizontal', // horizontal | vertical
        size: 'responsive', // medium | large | responsive
        shape: 'rect', // pill | rect
        color: 'blue' // gold | blue | silver | black
    },

    // Execute payment on authorize
    commit: true,

    // Wait for the PayPal button to be clicked
    createOrder: function() {
        let postData = new FormData();
        return fetch(
            '/payments/paypal/create', {
                method: 'POST',
                body: postData
            }
        ).then(function(response) {
            return response.json();
        }).then(function(resJson) {

            return resJson.data.id;
        });
    },

    // Wait for the payment to be authorized by the customer
    onApprove: function(data, actions) {
        // Capture Order
        let postData = new FormData();
        $.post('/payments/paypal/capture', {
            name: ''
        }, function(res) {
            console.log(res);
        })
    }

}).render('#paypalCheckoutContainer');
</script>
