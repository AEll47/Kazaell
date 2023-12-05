<!doctype html>
<html class="no-js" lang="zxx">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title><?= $judul; ?></title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- <link rel="manifest" href="site.webmanifest"> -->
	<link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/front/'); ?>img/favicon.png">
	<!-- Place favicon.ico in the root directory -->

	<!-- CSS here -->
	<link rel="stylesheet" href="<?= base_url('assets/front/'); ?>css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/front/'); ?>css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/front/'); ?>css/magnific-popup.css">
	<link rel="stylesheet" href="<?= base_url('assets/front/'); ?>css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/front/'); ?>css/themify-icons.css">
	<link rel="stylesheet" href="<?= base_url('assets/front/'); ?>css/nice-select.css">
	<link rel="stylesheet" href="<?= base_url('assets/front/'); ?>css/flaticon.css">
	<link rel="stylesheet" href="<?= base_url('assets/front/'); ?>css/animate.css">
	<link rel="stylesheet" href="<?= base_url('assets/front/'); ?>css/slicknav.css">
	<link rel="stylesheet" href="<?= base_url('assets/front/'); ?>css/style.css">
	<!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
	<!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

	<!-- bradcam_area_start -->
	<!-- <div class="bradcam_area breadcam_bg"> -->
	<!-- <h3>WELCOME</h3> -->
	<!-- </div> -->
	<!-- bradcam_area_end -->
	<!-- header-start -->
	<header>

		<div class="header-area ">
			<div id="sticky-header" class="main-header-area">
				<div class="container-fluid p-0">
					<div class="row align-items-center no-gutters">
						<div class="col-xl-5 col-lg-5">
							<div class="main-menu  d-none d-lg-block">
								<nav>
									<ul id="navigation" style="color:gold;">
										<li><a href="<?= base_url() ?>" class="text-warning">home</a></li>
										<li><a href="#" class="text-warning">konten <i class="ti-angle-down"></i></a>
											<ul class="submenu">
												<?php foreach ($kategori as $kate){ ?>
												<li><a href="<?= base_url('home/kategori/'.$kate['id_kategori'])?>"
														class="text-warning">
														<?= $kate['nama_kategori'] ?>
													</a></li>
												<?php } ?>
											</ul>
										</li>
									</ul>
								</nav>
							</div>
						</div>
						<div class="col-xl-5 col-lg-5 d-none d-lg-block">
							<div class="book_room">
								<div class="book_btn d-none d-xl-block">
									<a class="#" href="<?= base_url('auth') ?>">LOGIN</a>
								</div>
							</div>
						</div>
						<div class="col-xl-1 col-lg-1">
							<div class="logo-img">
								<a href="#">
									<img src="<?= base_url('assets/front/'); ?>img/Logo-smk.png"
										style="width: 60px; height: 60px; object-fit: cover; " alt="">
								</a>
							</div>
						</div>

						<div class="col-12">
							<div class="mobile_menu d-block d-lg-none"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- header-end -->
	<!--================Blog Area =================-->
	<section class="blog_area section-padding ">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-10 mb-10 ">
					<div class="blog_left_sidebar ">
						<article class="blog_item">
							<div class="blog_item_img">
								<img class="card-img rounded-0" src="img/blog/single_blog_1.png" alt="">
								<div class="row justify-content-center">
									<div class="col-4">
										<div href="" class="blog_item_date col ">
											<h3>WELCOME TO EL</h3>
										</div>
									</div>
								</div>
							</div>
							<div class="blog_details">
								<div class="col-9 ">
									<a class="d-inline-block" href="">
										<h2 class=" text-center d-flex justify-content-center"
											style="margin-left:300px;"><?= $nama_kategori; ?></h2>
									</a>
								</div>
							</div>
						</article>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================Blog Area =================-->

	<!-- footer_start  -->
	<div class="container">
		<div class="row">
			<?php foreach ($konten as $uu){ ?>
			<div class="col-xl-4 col-md-6 col-lg-4">
				<img class="card-img-top mb-2" src="<?= base_url('assets/upload/konten/'.$uu['foto']) ?>">
				<div class="footer_widget text-center">
					<h3 class=""><?= $uu['judul']?></h3>
					<div class="d-flex justify-content-center mb-3">
						<small class="mr-3"><i class="fa fa-user text-primary"></i> <?= $uu['nama'] ?></small>
						<small class="mr-3"><i class="fa fa-folder text-primary"></i>
							<?= $uu['nama_kategori'] ?></small>
					</div>
					<a href="<?= base_url('home/artikel/'.$uu['slug'])?>" class="btn btn-primary px-4 mx-auto my-2"
						href="">Baca Selengkapnya</a>
				</div>
			</div>
			<?php } ?>
		</div>
		<nav class="blog-pagination justify-content-center d-flex">
			<ul class="pagination">
				<li class="page-item">
					<a href="#" class="page-link" aria-label="Previous">
						<i class="ti-angle-left"></i>
					</a>
				</li>
				<li class="page-item">
					<a href="#" class="page-link">1</a>
				</li>
				<li class="page-item active">
					<a href="#" class="page-link">2</a>
				</li>
				<li class="page-item">
					<a href="#" class="page-link" aria-label="Next">
						<i class="ti-angle-right"></i>
					</a>
				</li>
			</ul>
		</nav>
	</div>

	<footer class="footer">
		<div class="footer_top">
			<div class="container">
				<div class="row">
					<div class="col-xl-4 col-md-6 col-lg-4">
						<div class="footer_widget text-left ">
							<h3 class="footer_title pos_margin">
								<?= $konfig->judul_website; ?>
							</h3>
							<p><?= $konfig->profil_website; ?></p>

						</div>
					</div>
					<div class="col-xl-4 col-md-6 col-lg-4">
						<div class="footer_widget text-left ">
							<h3 class="footer_title pos_margin">Contac Us</h3>
							<div class="d-flex">
								<h4 class="fa fa-thumb-tack text-primary"></h4>
								<div class="pl-3">
									<h5 class="text-black">Alamat</h5>
									<p> <?= $konfig->alamat; ?> </p>
								</div>
							</div>
							<div class="d-flex">
								<h4 class="fa fa-envelope text-primary"></h4>
								<div class="pl-3">
									<h5 class="text-black">Email</h5>
									<p> <?= $konfig->email; ?> </p>
								</div>
							</div>
							<div class="d-flex">
								<h4 class="ti-tablet text-primary"></h4>
								<div class="pl-3">
									<h5 class="text-black">Phone</h5>
									<p>+<?= $konfig->no_wa; ?> </p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-md-6 col-lg-4">
						<div class="footer_widget text-left ">
							<h3 class="footer_title pos_margin">Quick Links</h3>
							<div class="d-flex flex-column justify-content-start">
								<a class="text-black mb-2" href="<?= base_url() ?>"><i
										class="fa fa-angle-right mr-2"></i>Home</a>
								<?php foreach ($kategori as $kate){ ?>
								<a class="text-black mb-2"
									href="<?= base_url('home/kategori/'.$kate['id_kategori'])?>"><i
										class="fa fa-angle-right mr-2"></i><?= $kate['nama_kategori'] ?></a>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-4">
						<div class="socail_links text-center">
							<ul>
								<li>
									<a href="<?= $konfig->instagram;?>">
										<i class="ti-instagram"></i>
									</a>
								</li>
								<li>
									<a href="<?= $konfig->facebook;?>">
										<i class="ti-facebook"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="copy-right_text">
			<div class="container">
				<div class="footer_border"></div>
				<div class="row">
					<div class="col-xl-12">
						<p class="copy_right text-center">
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							Copyright ©<script>
								document.write(new Date().getFullYear());

							</script>2023 All rights reserved | This template is made with <i class="fa fa-heart-o"
								aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- footer_end -->


	<!-- JS here -->
	<script src="<?= base_url('assets/front/'); ?>js/vendor/modernizr-3.5.0.min.js"></script>
	<script src="<?= base_url('assets/front/'); ?>js/vendor/jquery-1.12.4.min.js"></script>
	<script src="<?= base_url('assets/front/'); ?>js/popper.min.js"></script>
	<script src="<?= base_url('assets/front/'); ?>js/bootstrap.min.js"></script>
	<script src="<?= base_url('assets/front/'); ?>js/owl.carousel.min.js"></script>
	<script src="<?= base_url('assets/front/'); ?>js/isotope.pkgd.min.js"></script>
	<script src="<?= base_url('assets/front/'); ?>js/ajax-form.js"></script>
	<script src="<?= base_url('assets/front/'); ?>js/waypoints.min.js"></script>
	<script src="<?= base_url('assets/front/'); ?>js/jquery.counterup.min.js"></script>
	<script src="<?= base_url('assets/front/'); ?>js/imagesloaded.pkgd.min.js"></script>
	<script src="<?= base_url('assets/front/'); ?>js/scrollIt.js"></script>
	<script src="<?= base_url('assets/front/'); ?>js/jquery.scrollUp.min.js"></script>
	<script src="<?= base_url('assets/front/'); ?>js/wow.min.js"></script>
	<script src="<?= base_url('assets/front/'); ?>js/nice-select.min.js"></script>
	<script src="<?= base_url('assets/front/'); ?>js/jquery.slicknav.min.js"></script>
	<script src="<?= base_url('assets/front/'); ?>js/jquery.magnific-popup.min.js"></script>
	<script src="<?= base_url('assets/front/'); ?>js/plugins.js"></script>

	<!--contact js-->
	<script src="<?= base_url('assets/front/'); ?>js/contact.js"></script>
	<script src="<?= base_url('assets/front/'); ?>js/jquery.ajaxchimp.min.js"></script>
	<script src="<?= base_url('assets/front/'); ?>js/jquery.form.js"></script>
	<script src="<?= base_url('assets/front/'); ?>js/jquery.validate.min.js"></script>
	<script src="<?= base_url('assets/front/'); ?>js/mail-script.js"></script>

	<script src="<?= base_url('assets/front/'); ?>js/main.js"></script>

</body>
