<div class="container">
    <div class="row bg-white text-center rounded">
        <div class="col-md-6 m-auto">
            <div id="loadingAlert" class="card" style="display: none;">
                <div class="card-body">
                    <div class="alert alert-info block" role="alert">
                        Loading....
                    </div>
                </div>
            </div>
            <form id="orderView" class="form-horizontal">
                <svg class="bi bi-check-circle-fill text-success p-4" width="7rem" height="7rem" viewBox="0 0 16 16"
                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                </svg>
                <h5 class='text-success'>Your payment is complete</h3>
                    <h6>
                        <span id="viewFirstName">rumbiiha</span>
                        <span id="viewLastName">swaibu</span>,
                        Thank you for your Order
                    </h6>
                    <hr>
                    <div class="form-group">
                        <div class="form-group row text-left">
                            <label class="col-sm-5 m-0">Shipping Details</label>
                            <div class="col-sm-7">
                                <p id="viewRecipientName">rumbiiha swaibu</p>
                                <p id="viewAddressLine1">55 East 52nd Street</p>
                                <p id="viewAddressLine2">21st Floor</p>
                                <p>
                                    <span id="viewCity">New York</span>,
                                    <span id="viewState">NY</span> - <span id="viewPostalCode">10022</span>
                                </p>
                                <p id="confirmCountry"></p>
                            </div>
                        </div>
                        <div class="form-group row text-left">
                            <label class="col-sm-5 m-0">Transaction Details</label>
                            <div class="col-sm-7">
                                <p>Transaction ID: <span id="viewTransactionID">6P7842166E1069148</span></p>
                                <p>Payment Total Amount: <span id="viewFinalAmount">320.00</span> </p>
                                <p>Currency Code: <span id="viewCurrency">USD</span></p>
                                <p>Payment Status: <span id="viewPaymentState">APPROVED</span></p>
                                <p id="transactionType" style="display: block;">Payment Type: <span
                                        id="viewTransactionType">CAPTURE</span> </p>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h5> Click <a href="../index.php">here </a> to view your orders</h5>
            </form>
        </div>
    </div>
</div>
