<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Installation</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sticky-footer-navbar/">

    <!-- Bootstrap core CSS -->
    <?= link_tag('assets/admin/css/style.css'); ?>

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/4.5/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/4.5/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/4.5/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
    <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon.ico">

    <meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#563d7c">


    <style>
    body {
        background: white;
    }

    .main-install-icon {
        font-size: 3rem;

    }

    .install-btn {
        background: #ddf0ff;
    }

    </style>
</head>

<body class="d-flex vh-100 vw-100 align-items-center">

    <!-- Begin page content -->
    <main role="main" class='container'>
        <div class="row">
            <div class="col-md-6">
                <div class="shadow-sm p-4 rounded">
                </div>
            </div>
            <div class="col-md-6">
                <div class="shadow-sm p-4 rounded">
                    <form id="db-form" action="/setup?installation" >
                    <h4 class="mb-4">Database Details</h4>
                    <div class="form-group">
                            <label for="host">Database Host</label>
                            <input type="text" name="hostname" class="form-control" id="host"  value="localhost" reuired>
                        </div>
                    <div class="form-group">
                            <label for="databse">Database name</label>
                            <input type="text" name="database" class="form-control" id="database" placeholder="Enter database name" required>
                        </div>
                        <div class="form-group">
                            <label for="db-username">Db username</label>
                            <input type="text" name="username" class="form-control" id="db-username" placeholder="Enter database username" required>
                        </div>
                        <div class="form-group">
                            <label for="db-password">Db password</label>
                            <input type="password" name="password" class="form-control" id="db-password" placeholder="Enter database Password">
                        </div>
                        <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                    </form>
                </div>
            </div>
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
      $.post($(this).attr("action"),$(this).serializeArray())
      .done(function (res) {
        res.errors ?
          Object.entries(res.errors).map((error) => {
            $(`#${error[0]}`).after(
              `<small class="helper-text-danger">${error[1]}</small>`
            )
          }) : location.replace('/setup?site');
      }).fail(function (err) {
        Toastify({
          text: "Error operation failed",
          backgroundColor: "#FFA500",
        }).showToast();
      });
    }
  })
}); 
</script>