<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?= link_tag('assets/admin/css/style.css'); ?>
    <?= script_tag(['src' => 'https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.esm.js', 'type'  => 'module']); ?>
    <?= script_tag('assets/shared/jquery/jquery-3.5.1.min.js'); ?>
    <?= script_tag('assets/plugins/toastify-js/toastify-js.js'); ?>
    <?= script_tag('server/node_modules/socket.io-client/dist/socket.io.dev.js'); ?>
    <script>
    const socket = io('http://localhost:1000/');
    </script>
    <title><?= $page_title ?></title>
</head>

<body class="bg-white d-flex align-items-center">
    <?php include $page_name . '.php'; ?>
</body>

<script>
$('.social').click((event) => {
    const provider = event.target.textContent.trim()
    var authWindow = window.open('http://localhost/hauth/callback?provider=' + provider, 'authWindow',
        'width=600,height=400,scrollbars=yes');
    return false;
})
$('#form').submit(function(event) {
    event.preventDefault();
    $(".helper-text-danger").remove();
    // var data = new FormData($('form'));
    $.post($(this).attr("action"), $('form').serialize(), function(res) {
        console.log(res);
        if (res.errors) {
            Object.entries(res.errors).map(error => {
                $(`#${error[0]}`).after(
                `<small class="helper-text-danger">${error[1]}</small>`);
            })
        }
    })
});
</script>

</html>
