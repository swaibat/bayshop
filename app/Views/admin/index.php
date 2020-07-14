<?php include 'includes/header.php'; ?>

<body>
    <div class="navbar-bg"></div>
    <div class="page-wrapper chiller-theme toggled">
        <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
            <i class="fas fa-bars"></i>
        </a>
        <nav id="sidebar" class="sidebar-wrapper">
            <div class="sidebar-content">
                <div class="sidebar-brand">
                    <a href="#">pro sidebar</a>
                    <div id="close-sidebar">
                        <i class="fas fa-times"></i>
                    </div>
                </div>
                <div class="sidebar-header">
                    <div class="user-pic">
                        <img class="img-responsive img-rounded"
                            src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg"
                            alt="User picture">
                    </div>
                    <div class="user-info">
                        <span class="user-name">
                            <strong class="text-capitalize"><?= $_SESSION['user']['username']?></strong>
                        </span>
                        <span class="user-role">Administrator</span>
                        <span class="user-status">
                            <i class="fa fa-circle"></i>
                            <span>Online</span>
                        </span>
                    </div>
                </div>
                <!-- sidebar-header  -->
                <div class="sidebar-search">
                    <div>
                        <div class="input-group">
                            <input type="text" class="form-control search-menu border-0" placeholder="Search...">
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- sidebar-search  -->
                <div class="sidebar-menu">
                    <ul>
                        <li class="header-menu">
                            <span>General</span>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-tachometer-alt"></i>
                                <span>Dashboard</span>
                                <span class="badge badge-pill badge-warning">New</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="<?= base_url('admin/dashboard')?>">Dashboard
                                            <span class="badge badge-pill badge-success">Pro</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('admin/monitoring')?>">Mornitoring</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('admin/analytics')?>">Analytics</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-shopping-cart"></i>
                                <span>Products</span>
                                <span class="badge badge-pill badge-danger">3</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="<?= base_url('admin/products')?>">Products

                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('admin/categories')?>">Categories</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('admin/collection')?>">Collection</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('admin/orders')?>">Orders</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fas fa-user"></i>
                                <span>Users</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="<?= base_url('admin/users')?>">Customers</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('admin/vendors')?>">Vendors</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-chart-line"></i>
                                <span>Gifts & Offers</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="<?= base_url('admin/coupons')?>">Coupons</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-globe"></i>
                                <span>Messages</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="<?= base_url('admin/inbox')?>">inbox</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('admin/messages')?>">chat</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="header-menu">
                            <span>Extra</span>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-book"></i>
                                <span>Documentation</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- sidebar-menu  -->
            </div>
            <!-- sidebar-content  -->
            <div class="sidebar-footer">
                <a href="#">
                    <i class="fa fa-bell"></i>
                    <span class="badge badge-pill badge-warning notification">3</span>
                </a>
                <a href="#">
                    <i class="fa fa-envelope"></i>
                    <span class="badge badge-pill badge-success notification">7</span>
                </a>
                <a href="<?= base_url('admin/settings')?>">
                    <i class="fa fa-cog"></i>
                    <span class="badge-sonar"></span>
                </a>
                <a href="<?= base_url('auth/logout')?>">
                    <i class="fa fa-power-off"></i>
                </a>
            </div>
        </nav>
        <!-- sidebar-wrapper  -->
        <main class="page-content">
            <div class="main row">
                <div class="d-flex flex-column w-100">
                    <h3 class='text-light d-block'><?= $page_title ?></h3>
                    <nav class="d-block" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?= $page_title ?></li>
                        </ol>
                    </nav>
                </div>
                <?php include 'pages/'. $folder_name . '/'. $page_name . '.php'; ?>
            </div>
        </main>
        <!-- page-content" -->
    </div>
</body>

</html>
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
<!-- page-wrapper -->
