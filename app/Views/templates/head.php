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
