<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>LOGIN</title>
	<!-- base:css -->
	<link rel="stylesheet" href="<?= base_url('assets/celestial') ?>/template/vendors/typicons.font/font/typicons.css">
	<link rel="stylesheet" href="<?= base_url('assets/celestial') ?>/template/vendors/css/vendor.bundle.base.css">
	<!-- endinject -->
	<!-- plugin css for this page -->
	<!-- End plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="<?= base_url('assets/celestial') ?>/template/css/vertical-layout-light/style.css">
	<!-- endinject -->
	<link rel="shortcut icon" href="<?= base_url('assets/celestial') ?>/template/images/favicon.png" />
</head>

<body>
	<div class="container-scroller">
		<div class="container-fluid page-body-wrapper full-page-wrapper">
			<div class="content-wrapper d-flex align-items-center auth px-0">
				<div class="row w-100 mx-0">
					<div class="col-lg-4 mx-auto">
						<div class="auth-form-light text-left py-5 px-4 px-sm-5">
							<h4>Welcome to CMS </h4>
							<form class="mb-3" action="<?= base_url('auth/login')?>" method="POST">
								<div class="form-group">
									<input type="text" class="form-control" name="username" placeholder="Username">
								</div>
								<div class="form-group">
									<input type="password" class="form-control" name="password" placeholder="Password">
								</div>
								<div class="mb-3">
									<button class="btn btn-primary d-grid w-100" type="submit">LOGIN</button>
								</div>
							</form>
							<div id="hilang">
								<?= $this->session->flashdata('alert'); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- content-wrapper ends -->
	</div>
	<!-- page-body-wrapper ends -->
	</div>
	<!-- container-scroller -->
	<!-- base:js -->
	<script src="<?= base_url('assets/celestial') ?>/template/vendors/js/vendor.bundle.base.js"></script>
	<!-- endinject -->
	<!-- inject:js -->
	<script src="<?= base_url('assets/celestial') ?>/template/js/off-canvas.js"></script>
	<script src="<?= base_url('assets/celestial') ?>/template/js/hoverable-collapse.js"></script>
	<script src="<?= base_url('assets/celestial') ?>/template/js/template.js"></script>
	<script src="<?= base_url('assets/celestial') ?>/template/js/settings.js"></script>
	<script src="<?= base_url('assets/celestial') ?>/template/js/todolist.js"></script>
	<!-- endinject -->
</body>

</html>
