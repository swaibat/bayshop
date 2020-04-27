<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/admin/css/style.css">
	<script type="module" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.esm.js"></script>
	<script src="<?= base_url('/assets/shared/jquery/jquery-3.4.1.min.js'); ?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/plugins/toastify-js/toastify-js.js'); ?>"></script>
	<script src="https://malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
	<script src="/server/node_modules/socket.io-client/dist/socket.io.dev.js"></script>
	<script>

	</script>
</head>
<div class="container">

    <div class="starter-template">
        <h1>PayPal Payment</h1>
        <p class="lead">Pay Now</p>
    </div>

    <div class="contact-form">
        <form id="form" method="post" class="form-horizontal" role="form" action="<?= base_url('/payments/paypal/create') ?>">
            <fieldset>
                <input title="item_name" name="item_name" type="hidden" value="ahmed fakhr">
                <input title="item_number" name="item_number" type="hidden" value="12345">
                <input title="item_description" name="item_description" type="hidden" value="to buy samsung smart tv">
                <input title="item_tax" name="item_tax" type="hidden" value="1">
                <input title="item_price" name="item_price" type="hidden" value="7">
                <input title="details_tax" name="details_tax" type="hidden" value="7">
                <input title="details_subtotal" name="details_subtotal" type="hidden" value="7">

                <div class="form-group">
                    <div class="col-sm-offset-5">
                        <button type="submit" class="btn btn-success">Pay Now</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div><!-- /.container -->
<script src="<?= base_url('/assets/shared/jquery/jquery-3.4.1.min.js'); ?>"></script>
<script src="<?= base_url('assets/plugins/toastify-js/toastify-js.js'); ?>"></script>
<script src="<?= base_url('/assets/plugins/jquery-multifile/jquery-multifile.js'); ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.3/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="<?= base_url('/assets/shared/bootstrap-4.4.1/js/bootstrap.min.js'); ?>"></script>
<script src="<?= base_url('/assets/plugins/select2/dist/js/select2.min.js'); ?>"></script>
<script src="<?= base_url('/assets/plugins/dataTables/datatables.min.js'); ?>"></script>
<script src="<?= base_url('/assets/plugins/summernote/summernote-bs4.min.js'); ?>"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    $("#form").submit(function(event) {
        event.preventDefault();
        var post_url = $(this).attr("action");
        var request_method = $(this).attr("method");
        var form_data = $(this).serialize();
        console.log(form_data);
        $.ajax({
            url: post_url,
            type: request_method,
            data: form_data,
        }).done(function(response) {
            console.log(response)
            Toastify({
                text: response.message,
                duration: 3000,
                gravity: "top",
                position: 'right',
                backgroundColor: "#228B22",
                stopOnFocus: true,
            }).showToast();

        }).fail(function(err) {
            console.log(err)
            Toastify({
                text: 'Error operation failed',
                duration: 3000,
                gravity: "top",
                position: 'right',
                backgroundColor: '#FFA500',
                stopOnFocus: true,
            }).showToast();
        });
    });
</script>
