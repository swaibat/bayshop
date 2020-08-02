<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Sticky Footer Navbar Template · Bootstrap</title>
    <!-- Bootstrap core CSS -->
    <?= link_tag('assets/admin/css/style.css'); ?>
    <?= script_tag(['src' => 'https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.esm.js', 'type'  => 'module']); ?>
    <style>
    body {
        background: white;
    }

    .main-install-icon {
        font-size: 3rem;

    }

    ion-icon {
        font-size: 6rem;
        color: #4CAF50;
        --ionicon-stroke-width: 14px;
    }

    </style>
</head>

<body class="d-flex vh-100 vw-100 align-items-center">

    <!-- Begin page content -->
    <main role="main" class='container'>
        <div class="text-center">
            <ion-icon name="checkmark-circle-outline"></ion-icon>
            <h4>insallation complete</h4>
            <p>script installation has completed successfully visit your site now</p>
            <a href="<?= base_url() ?>" class="btn btn-primary">Visit your Site</a>
        </div>

    </main>
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script>
    window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')
    </script>
    <script src="/docs/4.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous">
    </script> -->
</body>
<?= script_tag('assets/shared/jquery/jquery-3.5.1.min.js'); ?>
<?= script_tag('assets/shared/popper/popper.min.js'); ?>
<?= script_tag('assets/shared/validator/index.js'); ?>
<?= script_tag('assets/plugins/nicescroll/jquery.nicescroll.min.js'); ?>
<?= script_tag('assets/plugins/toastify-js/toastify-js.js'); ?>
<?= script_tag('assets/shared/bootstrap-4.4.1/js/bootstrap.min.js'); ?>

</html>
<script>
$("#db-form").submit(function(event) {
    event.preventDefault();
    $(".form-text").remove();
    validate($(this).serializeArray(), errors => {
        if (!errors.length) {
            $.post($(this).attr("action"), $(this).serializeArray())
                .done(function(res) {
                    console.log(res);
                    res.errors ?
                        Object.entries(res.errors).map((error) => {
                            $(`#${error[0]}`).after(
                                `<small class="helper-text-danger">${error[1]}</small>`
                            )
                        }) : location.replace('/setup?complete');
                }).fail(function(err) {
                    Toastify({
                        text: "Error operation failed",
                        backgroundColor: "#FFA500",
                    }).showToast();
                });
        }
    })
});
$('#site_url').val(location.origin);
</script>
