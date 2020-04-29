<?php
if (!isset($_SESSION['user'])) {
	header("Location:" . base_url() . "/auth/login");
	exit();
}
$cache = \Config\Services::cache();
?>

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
		const socket = io('http://localhost:1000/', <?= $_SESSION['user'] ?>);
	</script>
	<title><?= $page_title ?></title>
</head>
