<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Codeigniter Stripe Payment Gateway Integration - Tutsmake.com</title>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <style>
    .container {
        padding: 0.5%;
    }

    </style>
</head>

<body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://js.stripe.com/v3"></script>
<button id="checkout-button">Pay</button>
    
    <script src="https://checkout.stripe.com/checkout.js"></script>

    <script type="text/javascript">
    var stripe = Stripe('pk_test_TYooMQauvdEDq54NiTphI7jx');

    var checkoutButton = document.querySelector('#checkout-button');
    checkoutButton.addEventListener('click', function() {
        stripe.redirectToCheckout({
            lineItems: [{
                // Define the product and price in the Dashboard first, and use the price
                // ID in your client-side code.
                price: 2000,
                quantity: 1
            }],
            mode: 'payment',
            successUrl: 'https://www.example.com/success',
            cancelUrl: 'https://www.example.com/cancel'
        });
    });
    </script>
</body>

</html>
