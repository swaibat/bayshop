<!DOCTYPE html>
<html>
<?php include 'includes/head.php'; ?>

<body id="body">
<?php include 'includes/navigation.php'; ?>
	<main class="content-wrapper d-flex flex-column align-items-center min-h-display mb-5">
	<?php include 'includes/header.php'; ?>
	<?php include 'includes/bread_crumb.php'; ?>
		<div class="container-fluid mt-4">
			<?php include 'pages/'. $folder_name . '/'. $page_name . '.php'; ?>
		</div>
	</main>
</body>
<?php include 'includes/script.php'; ?>

</html>
