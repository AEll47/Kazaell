<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?= $judul_halaman ?></title>
	<!-- base:css -->
	<link rel="stylesheet" href="<?= base_url('assets/celestial')?>/template/vendors/typicons.font/font/typicons.css">
	<link rel="stylesheet" href="<?= base_url('assets/celestial')?>/template/vendors/css/vendor.bundle.base.css">
	<!-- endinject -->
	<!-- plugin css for this page -->
	<!-- End plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="<?= base_url('assets/celestial')?>/template/css/vertical-layout-light/style.css">
	<!-- endinject -->
	<link rel="shortcut icon" href="<?= base_url('assets/celestial')?>/template/images/favicon.png" />
	<script src="https://cdn.tiny.cloud/1/y2dw3ym7myodc0uechqiw8z1wt205ya1nrq0f82t57n60msf/tinymce/6/tinymce.min.js"
		referrerpolicy="origin"></script>
</head>

<body>
	<div class="row" id="proBanner">
		<div class="col-12">s
		</div>
	</div>
	<div class="container-scroller">
		<!-- partial:partials/_navbar.html -->
		<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
			<div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
				<a class="navbar-brand" href="<?= base_url();?>">#<?= $this->session->userdata('level') ?></a>
				<a class="navbar-brand" href="<?= base_url();?>"><img
						src="<?= base_url('assets/celestial') ?>/template/images/putih.jpg 	" alt="logo" /></a>
				<button class="navbar-toggler navbar-toggler align-self-center d-none d-lg-flex" type="button"
					data-toggle="minimize">
					<span class="typcn typcn-th-menu"></span>
				</button>
			</div>
			<div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
				<ul class="navbar-nav navbar-nav-right">
                <div class="nav-item d-flex align-item-left">
						<?= $judul_halaman ?>
				</div>
					<li class="nav-item nav-profile dropdown">
						<a class="nav-link dropdown-toggle  pl-0 pr-0" href="#" data-toggle="dropdown"
							id="profileDropdown">
							<i class="typcn typcn-user-outline mr-0"></i>
							<?= $this->session->userdata('nama') ?>
						</a>
						<div class="dropdown-menu dropdown-menu-right navbar-dropdown"
							aria-labelledby="profileDropdown">
							<a class="dropdown-item">
								<i class="typcn typcn-cog text-primary"></i>
								Password
							</a>
							<a class="dropdown-item" href="<?= base_url('auth/logout') ?>">
								<i class="typcn typcn-power text-primary"></i>
								Logout
							</a>
						</div>
					</li>
				</ul>
				<button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
					data-toggle="offcanvas">
					<span class="typcn typcn-th-menu"></span>
				</button>
			</div>
		</nav>
		<!-- partial -->
		<div class="container-fluid page-body-wrapper">
			<!-- partial:partials/_sidebar.html -->
			<nav class="sidebar sidebar-offcanvas " id="sidebar">
				<ul class="nav">
					<li class="nav-item">
						<div class="d-flex sidebar-profile">
							<div class="sidebar-profile-image">
								<img src="<?= base_url('assets/celestial') ?>/template/images/faces/jkk.jpeg"
									alt="image">
								<span class="sidebar-status-indicator"></span>
							</div>
							<div class="sidebar-profile-name">
								<p class="sidebar-name">
								<?= $this->session->userdata('nama') ?>
								</p>
							</div>
						</div>
						
						<p class="sidebar-menu-title">Menu</p>
					</li>
					<?php $menu =  $this->uri->segment(2);?>
					<li class="nav-item <?php if($menu=='home'){ echo "active"; } ?>">
						<a class="nav-link" href="<?= site_url('admin/home') ?>">
							<i class="typcn typcn-device-desktop menu-icon"></i>
							<span class="menu-title">Dashboard </span>
						</a>
					</li>
					<li class="nav-item <?php if($menu=='caraousel'){ echo "active"; } ?>">
						<a class="nav-link" href="<?= site_url('admin/caraousel') ?>" aria-expanded="false"
							aria-controls="ui-basic">
							<i class="fa-solid fa-snowflake menu-icon"></i>
							<span class="menu-title">Caraousel</span>
						</a>
					</li>
                    <li class="nav-item <?php if($menu=='kategori'){ echo "active"; } ?>">
						<a class="nav-link" href="<?= site_url('admin/kategori') ?>" aria-expanded="false"
							aria-controls="ui-basic">
							<i class="fa-solid fa-table-cells menu-icon"></i>
							<span class="menu-title">Kategori konten</span>
						</a>
					</li>
                    <li class="nav-item <?php if($menu=='konten'){ echo "active"; } ?>">
						<a class="nav-link" href="<?= site_url('admin/konten') ?>" aria-expanded="false"
							aria-controls="ui-basic">
							<i class="typcn typcn-briefcase menu-icon"></i>
							<span class="menu-title">Konten</span>
						</a>
					</li>
					<?php if($this->session->userdata('level')=='Admin'){ ?>
                    <li class="nav-item <?php if($menu=='user'){ echo "active"; } ?>">
						<a class="nav-link" href="<?= site_url('admin/user') ?>" aria-expanded="false"
							aria-controls="ui-basic">
							<i class="fa fa-user menu-icon"></i> 
							<span class="menu-title"> User</span>
						</a>
					</li>
                    <li class="nav-item <?php if($menu=='konfigurasi'){ echo "active"; } ?>">
						<a class="nav-link" href="<?= site_url('admin/konfigurasi') ?>" aria-expanded="false"
							aria-controls="ui-basic">
							<i class="fa-solid fa-pen menu-icon"></i>
							<span class="menu-title">Konfigurasi</span>
						</a>
					</li>
					<?php } ?>
				</ul>
			</nav>
			<!-- partial -->
			<div class="main-panel">
				<div class="content-wrapper">
					<div class="container-xxl flex-grow-1 container-p-y">
                    <?= $contents; ?>
					</div>
				</div>
				<!-- content-wrapper ends -->
				<!-- partial:partials/_footer.html -->
				<!-- partial -->
			</div>
			<!-- main-panel ends -->
		</div>
		<!-- page-body-wrapper ends -->
	</div>
	<!-- container-scroller -->
	<!-- base:js -->
	<script src="https://kit.fontawesome.com/5fb0e8bb74.js" crossorigin="anonymous"></script>
	<script src="<?= base_url('assets/celestial') ?>/template/vendors/js/vendor.bundle.base.js"></script>
	<!-- endinject -->
	<!-- Plugin js for this page-->
	<!-- End plugin js for this page-->
	<!-- inject:js -->
	<script src="<?= base_url('assets/celestial') ?>/template/js/off-canvas.js"></script>
	<script src="<?= base_url('assets/celestial') ?>/template/js/hoverable-collapse.js"></script>
	<script src="<?= base_url('assets/celestial') ?>/template/js/template.js"></script>
	<script src="<?= base_url('assets/celestial') ?>/template/js/settings.js"></script>
	<script src="<?= base_url('assets/celestial') ?>/template/js/todolist.js"></script>
	<!-- endinject -->
	<!-- plugin js for this page -->
	<script src="<?= base_url('assets/celestial') ?>/template/vendors/progressbar.js/progressbar.min.js"></script>
	<script src="<?= base_url('assets/celestial') ?>/template/vendors/chart.js/Chart.min.js"></script>
	<!-- End plugin js for this page -->
	<!-- Custom js for this page-->
	<script src="<?= base_url('assets/celestial') ?>/template/js/dashboard.js"></script>
	<!-- End custom js for this page-->
	<script>
        $('#hilang').delay('slow').slideDown('slow').delay(4000).slideUp(600);
    </script>
	<script>
  tinymce.init({
    selector: 'textarea',
    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
	});
</script>
</body>


</html>
