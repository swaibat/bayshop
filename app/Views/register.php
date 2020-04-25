<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?= link_tag('assets/admin/css/style.css'); ?>
    <?= script_tag(['src' => 'https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.esm.js', 'type'  => 'module']); ?>
    <?= script_tag('assets/shared/jquery/jquery-3.4.1.min.js'); ?>
    <?= script_tag('assets/plugins/toastify-js/toastify-js.js'); ?>
    <?= script_tag('server/node_modules/socket.io-client/dist/socket.io.dev.js'); ?>
    <script>
        const socket = io('http://localhost:1000/');
    </script>
    <title><?= $page_title ?></title>
</head>

<body class="bg-white d-flex align-items-center">
    <div class="container">
        <?= form_open('auth/register', ['class' => 'form-signin', 'method' => 'post', 'id' => 'form', 'novalidate' => '',]); ?>
        <div class="form-row p-4">
            <div class="col-md-12">
                <?= custom_inputs([
                    'name'        => 'username',
                    'id'          => 'username',
                    'type'        => 'text',
                    'class'       => 'form-control custom-input',
                ], ['group-class' => 'mt-5', 'icon-name' => 'person-outline']) ?>
                <?= custom_inputs([
                    'name'        => 'email',
                    'id'          => 'email',
                    'type'        => 'email',
                    'class'       => 'form-control custom-input',
                ], ['group-class' => 'mt-5', 'icon-name' => 'mail-outline']) ?>
                <?= custom_inputs([
                    'name'        => 'password',
                    'id'          => 'password',
                    'type'        => 'password',
                    'class'       => 'form-control custom-input',
                ], ['group-class' => 'mt-5', 'icon-name' => 'lock-closed-outline']) ?>
                <?= form_submit([
                    'name'        => 'password',
                    'id'          => 'password',
                    'type'        => 'submit',
                    'class'       => 'btn btn-primary mt-5 btn-block',
                    'value'       => 'Submit'
                ]) ?>
            </div>
        </div>
        <?= form_close() ?>
    </div>
</body>
<script>
    $('#form').submit(function(event) {
        event.preventDefault();
        var data = new FormData($('#form')[0]);
        $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: $(this).attr("action"),
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 800000,
        }).done(function(re) {
            console.log(re, <?= $_SESSION['user'] ?>)
            Toastify({
                text: '<?= $_SESSION['message'] ?>',
                duration: 3000,
                gravity: "top",
                position: 'right',
                backgroundColor: "#228B22",
                stopOnFocus: true,
            }).showToast();

        }).fail(function(err) {
            console.log(err);
            Toastify({
                text: 'Error operation failed',
                duration: 3000,
                gravity: "top",
                position: 'right',
                backgroundColor: '#FFA500',
                stopOnFocus: true,
            }).showToast();
        });;

    });
</script>

</html>
