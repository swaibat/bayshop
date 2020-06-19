<?php include 'includes/header.php'; ?>
<div class="main-content">
    <section class="section mt-n3">
	<nav class="d-flex justify-content-between align-items-center p-0 m-0">
		<h5 class='text-white my-3'><?= $page_title ?></h5>
		<ol class="breadcrumb bg-transparent p-2 m-0">
			<li class="breadcrumb-item"><a class='text-white' href="#">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">Library</li>
		</ol>
	</nav>
        <div class="section-body">
            <?php include 'pages/'. $folder_name . '/'. $page_name . '.php'; ?>
        </div>
    </section>
</div>
<?php include 'includes/script.php'; ?>
