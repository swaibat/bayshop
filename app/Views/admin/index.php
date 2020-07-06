<?php include 'includes/header.php'; ?>
<div class="main-content">
    <section class="section mt-n3">
        <div class="section-body">
            <?php include 'pages/'. $folder_name . '/'. $page_name . '.php'; ?>
        </div>
    </section>
</div>
<script>
    // $('.custom-control-input').change((e) => {
    //     e.target.checked ? $('.custom-control-input').val('1') : $('.custom-control-input').val('0');
    // })
    const policies = () => {
        const {
            id,
            checked
        } = this.event.target;
        if (checked) {
            $(`.${id}`).addClass("show");
        } else {
            $(`.${id}`).removeClass("show");
        }
    }
</script>
<script>
$(window).scroll(function() {
    var scroll = $(window).scrollTop();
    scroll >= 60 ?
        $("#action-nav").addClass("action-nav") :
        $("#action-nav").removeClass("action-nav");
});
</script>
<?php include 'includes/script.php'; ?>
<script>
$(document).ready(function() {
    $("#showToast").click(function() {
        $('.toast').toast('show');
    });
});
</script>

<!--Start of Tawk.to Script-->
<!-- <script type="text/javascript">
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
</script> -->
<!--End of Tawk.to Script-->
