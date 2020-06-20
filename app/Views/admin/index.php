<?php include 'includes/header.php'; ?>
<div class="main-content">
    <section class="section mt-n3">
        <nav id='action-nav' class="d-flex justify-content-between align-items-center  p-0 m-0 ">
            <h5 class='text-white my-3'><?= $page_title ?></h5>
            <!-- <ol class="breadcrumb bg-transparent p-2 m-0">
			<li class="breadcrumb-item"><a class='text-white' href="#">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">Library</li>
		</ol> -->
            <div class="d-flex ml-4">
                <button class="btn btn-light">
                    Cancel
                </button>
                <button class="btn btn-light ml-3">
                    save
                </button>
            </div>
        </nav>
        <div class="section-body">
            <?php include 'pages/'. $folder_name . '/'. $page_name . '.php'; ?>
        </div>
    </section>
</div>
<script>
$(window).scroll(function() {
    var scroll = $(window).scrollTop();
    scroll >= 60 ?
        $("#action-nav").addClass("action-nav") :
        $("#action-nav").removeClass("action-nav");
});
</script>
<?php include 'includes/script.php'; ?>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API = Tawk_API || {},
    Tawk_LoadStart = new Date();
(function() {
    var s1 = document.createElement("script"),
        s0 = document.getElementsByTagName("script")[0];
    s1.async = true;
    s1.src = 'https://embed.tawk.to/5b2cad21eba8cd3125e3149b/default';
    s1.charset = 'UTF-8';
    s1.setAttribute('crossorigin', '*');
    s0.parentNode.insertBefore(s1, s0);
})();
</script>
<!--End of Tawk.to Script-->
