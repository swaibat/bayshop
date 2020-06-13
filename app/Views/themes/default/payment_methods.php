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
                        <form class="d-flex btn-group-toggle m-auto">
                            <div class="col-md-8 m-auto">
                                <label>
                                    <input type="radio" name="payment-option" value="paypal" checked>
                                    <img src="/demo/checkout/static/img/paypal-mark.jpg" alt="Pay with PayPal">
                                </label>

                                <label>
                                    <input type="radio" name="payment-option" value="card">
                                    <img src="/demo/checkout/static/img/card-mark.png"
                                        alt="Accepting Visa, Mastercard, Discover and American Express">
                                </label>
                                <div id="paypal-button-container"></div>
                                <div id="card-button-container" class="hidden"><button>Continue</button></div>
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
<!-- PayPal In-Context Checkout script -->
<script src="https://www.paypal.com/sdk/js?client-id=sb&currency=USD"></script>

<script>
// Helper functions

function getElements(el) {
    return Array.prototype.slice.call(document.querySelectorAll(el));
}

function hideElement(el) {
    document.body.querySelector(el).style.display = 'none';
}

function showElement(el) {
    document.body.querySelector(el).style.display = 'block';
}

// Listen for changes to the radio fields
getElements('input[name=payment-option]').forEach(function(el) {
    el.addEventListener('change', function(event) {
        // If PayPal is selected, show the PayPal button
        if (event.target.value === 'paypal') {
            hideElement('#card-button-container');
            showElement('#paypal-button-container');
        }

        // If Card is selected, show the standard continue button
        if (event.target.value === 'card') {
            showElement('#card-button-container');
            hideElement('#paypal-button-container');
        }
    });
});

// Hide non-PayPal button by default
hideElement('#card-button-container');
paypal.Buttons({
    env: 'sandbox',
    // Set up the transaction
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

    // Finalize the transaction
    onApprove: function(data, actions) {
        // Capture Order
        let postData = new FormData();
        $.post('/payments/paypal/capture', {
            name: ''
        }, function(res) {
            location.replace('/payments/success');
        })
    }


}).render('#paypal-button-container');
</script>
