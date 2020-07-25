<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title><?=$page_title?> &mdash; Doolbay</title>

    <!-- General CSS Files -->
    <?= link_tag('assets/admin/css/style.css'); ?>
    <?= script_tag(['src' => 'https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.esm.js', 'type'  => 'module']); ?>
    <?= script_tag('assets/shared/jquery/jquery-3.5.1.min.js'); ?>
    <?= script_tag('assets/plugins/toastify-js/toastify-js.js'); ?>
    <?= script_tag('assets/plugins/jquery-multifile/jquery-multifile.js'); ?>
    <?= script_tag('server/node_modules/socket.io-client/dist/socket.io.dev.js'); ?>
    <?= script_tag('assets/plugins/listJs/list.min.js'); ?>
    <script>
    const socket = io('http://localhost:1000/');
    $(document).ready(function() {
        const user = <?= json_encode($_SESSION['user']) ?> ;
        socket.emit('online', user);
    })
    </script>

    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?=base_url('assets/admin/assets/css/style.css')?>">
    <link rel="stylesheet" href="../assets/admin/assets/css/components.css">
</head>
