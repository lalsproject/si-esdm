<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php echo $title ?></title>
	<link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('assets/sub');  ?>/images/favicons/icon-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('assets/sub');  ?>/images/favicons/icon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/sub');  ?>/images/favicons/icon-16x16.png">
	<link rel="manifest" href="<?= base_url('assets/sub');  ?>/images/favicons/site.webmanifest">
	<!-- Fonts-->
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

	<!-- Css-->
	<link rel="stylesheet" href="<?= base_url('assets/sub');  ?>/css/animate.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/sub');  ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/sub');  ?>/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/sub');  ?>/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/sub');  ?>/css/magnific-popup.css">
	<link rel="stylesheet" href="<?= base_url('assets/sub');  ?>/css/fontawesome-all.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/sub');  ?>/css/swiper.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/sub');  ?>/css/bootstrap-select.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/sub');  ?>/css/jarallax.css">

	<link rel="stylesheet" href="<?= base_url('assets/sub');  ?>/css/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/sub');  ?>/css/bootstrap-datepicker.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/sub');  ?>/css/vegas.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/sub');  ?>/css/nouislider.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/sub');  ?>/css/nouislider.pips.css">
	<link rel="stylesheet" href="<?= base_url('assets/sub');  ?>/css/ziston-icon.css">
	<link rel="stylesheet" href="<?= base_url('assets/sub');  ?>/css/flaticon.css">
	<!-- Template styles -->
	<link rel="stylesheet" href="<?= base_url('assets/sub');  ?>/css/style.css">
	<link rel="stylesheet" href="<?= base_url('assets/sub');  ?>/css/responsive.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css"/>

	<style type="text/css" media="screen">
		.fancybox__content
		{
			padding: 5px;
		}
	</style>
</head>

<body>

	<div class="preloader">
		<img src="<?= base_url('assets/sub');  ?>/images/loader.png" class="preloader__image" alt="">
	</div><!-- /.preloader -->

	<div class="page-wrapper">
		<div class="site-header__header-one-wrap clearfix">

			<div class="header_top_one">
				<div class="container">
					<div class="header_top_one_inner clearfix">

						<div class="header_top_one_inner_left float-left">
							<div class="header_social_1">
								<ul class="list-unstyled">
									<li><a><i class="fab fa-twitter"></i></a></li>
									<li><a><i class="fab fa-facebook-square"></i></a></li>
									<li><a><i class="fab fa-pinterest"></i></a></li>
									<li><a><i class="fab fa-instagram"></i></a></li>
								</ul>
							</div>
							<div class="header_top_one_inner_left_text">
								<p>Selamat Datang di Website Dinas ESDM Pemprov </p>
							</div>
						</div>

						<div class="header_top_one_inner_right float-right">
							<div class="header_topmenu_1">
								<ul class="list-unstyled">
									<li><a href="esdm@sulutprov.go.id"><span class="flaticon-email"></span>esdm@sulutprov.go.id</a></li>
									<li><a href="tel:+62-431-864-496"><span class="flaticon-telephone"></span>864496</a></li>
								</ul>
							</div>
						</div>

					</div>
				</div>
			</div>

			<header class="main-nav__header-one">
				<div class="container">
					<nav class="header-navigation one stricky">
						<div class="container-box clearfix">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="main-nav__left main-nav__left_one float-left">
								<div class="logo_one">
									<a class="main-nav__logo" style="background-color:white;padding: 10px;">
										<!-- <img src="<?= base_url('assets/sub');  ?>/images/resources/logo11.png" class="main-logo" alt="Awesome Image"> -->
										<h5 style="color:#ea130e;"><b>ESDM SULUT</b></h5>
									</a>
								</div>
								<a href="#" class="side-menu__toggler">
									<i class="fa fa-bars"></i>
								</a>
							</div>

							<div class="main-nav__main-navigation one float-right">
								<ul class=" main-nav__navigation-box float-left">
									<li>
										<a href="<?php echo site_url('home'); ?>">Home</a>
									</li>
									<li class="dropdown">
										<a>Data Izin Usaha Pertambangan</a>
										<ul>
											<?php $type = $this->db->get('tbl_mas_type_mineral')->result();?>
											<?php if ($type != null){ ?>
												<?php foreach ($type as $t){ ?>
													<li><a  data-fancybox data-type="iframe" href="<?= site_url(''.encrypt_url($t->IdType).'/tambang') ?>"><?php echo $t->Type ?></a></li>
												<?php } ?>
											<?php } ?>
										</ul><!-- /.sub-menu -->
									</li>
									<li>
										<a data-fancybox data-width="1024" data-padding="0" data-height="768" data-type="iframe" href="<?php echo base_url() ?>assets/gis/index.php?urls=<?php echo urlencode(base_url()) ?>">Peta</a>
									</li>
									<li>
										<a href="<?php echo site_url('blog'); ?>">Blog</a>
									</li>
									
									<?php if ($this->session->userdata('is_login') != true){ ?>
										<div class="header_btn_1">
											<li>
												<a href="<?php echo site_url('login') ?>">LOGIN</a>
											</li>
										</div>
									<?php }else{?>
										<div class="header_btn_1">
											<li>
												<a href="<?php echo site_url('dashboard') ?>">Dashboard</a>
											</li>
										</div>
									<?php }?>
								</ul>

								<div class="main-nav__main-navigation one float-right">
									<ul  class=" main-nav__navigation-box float-left">
										
									</ul>
								</div><!-- /.navbar-collapse -->



							</div>
					</nav>
				</div>
			</header>
		</div>

		<!-- lanjtan -->
		<!--Main Slider Start-->
		<?php if ($title == 'Home'){ ?>
			<section class="main-slider">
				<div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
					"effect": "fade",
					"pagination": {
						"el": "#main-slider-pagination",
						"type": "bullets",
						"clickable": true
					},
					"navigation": {
						"nextEl": ".banner-slider-button-next",
						"prevEl": ".banner-slider-button-prev",
						"clickable": true
					},
					"autoplay": {
						"delay": 10000
					}}'>

					<div class="swiper-wrapper">
						<?php $data_slider = $this->db->select('*')->from('tbl_set_slider')->where('FlagAktif = "Y"')->order_by('IdSlider', 'rand()')->get()->result();?>
						<?php if ($data_slider != null){ ?>
							<?php foreach ($data_slider as $ds){ ?>
								<div class="swiper-slide">
									<div class="image-layer" style="background-image: url(<?= base_url('assets');  ?>/sub/images/main-slider/<?= $ds->Gambar ?>);opacity: 10px;"></div>
									<div class="container">
										<div class="swiper-slide-inner">
											<div class="row">
												<div class="col-xl-12">
													<h2 style="text-shadow: 2px 2px 8px black;margin-bottom: 0px;"><?= $ds->Title ?></h2>
													<p style="color: white;text-shadow: 2px 2px 8px black;margin-bottom: 10px;"><?= $ds->Caption ?></p>
													<!-- <a data-fancybox data-type="pdf" href="YOUR_PDF_FILE.pdf">Click me</a> -->
													<a data-fancybox data-type="iframe"  href="<?= base_url('lapor');  ?>" class="thm-btn">LAPOR PETI </a>
												</div>
											</div>
										</div>
									</div>
								</div>
							<?php } ?>
						<?php }else{ ?>
							<div class="swiper-slide">
								<div class="image-layer" style="background-image: url(<?= base_url('assets');  ?>/sub/images/main-slider/slider-1-1.jpg);"></div>
								<div class="container">
									<div class="swiper-slide-inner">
										<div class="row">
											<div class="col-xl-12">
												<p style="color: white;">REKLAMASI PERTAMBANGAN LIAR KE WILAYAH PERTAMBANGAN RAKYAT DI PROVINSI SULAWESI UTARA</p>
												<h2>SI TALI MERAH</h2>
												<a href="<?= base_url('lapor');  ?>" class="thm-btn">LAPOR PETI</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						<?php } ?>
						
					</div>

					<div class="swiper-pagination" id="main-slider-pagination"></div>
					<div class="banner-slider-nav">
						<div class="banner-slider-button-prev"><span class="flaticon-right-arrow"></span></div>
						<div class="banner-slider-button-next"><span class="flaticon-right-arrow"></span> </div>
					</div>
				</div>
			</section>
		<?php } ?>

		<!-- CTA One Start -->
		<section class="cta_one">
			<div class="container">
				<div class="row">
					<div class="col-xl-12">
						<div class="cta_one_inner">
							<div class="cta_one_left_text">
								<h3>INI TEMPAT TINGGAL KITA, MAKA MENJAGANYA ADALAH KEWAJIBAN KITA BERSAMA</h3>
							</div>
							<!-- <div class="cta_one_right_btn">
								<a href="<?= base_url('assets/sub');  ?>services.html" class="thm-btn">Discover more</a>
							</div> -->
						</div>
					</div>
				</div>
			</div>
		</section>

		<?php echo $this->session->flashdata('notif'); ?>
		<?php $this->load->view($content); ?>
		<!--Site Footer Bottom Start-->
		<div class="site-footer_bottom">
			<div class="container">
				<div class="site-footer_bottom_copyright">
					<p>© Copyright <a href="https://instagram.com/pemprovsulut?igshid=MzRlODBiNWFlZA==" target="_blank"><?php echo strtoupper('dinas energi simber daya dan mineral sulawesi utara ') ?> <?php echo date('Y') ?></a></p>
				</div>
				<div class="site-footer__social">
					<a class="tw-clr"><i class="fab fa-twitter"></i></a>
					<a class="fb-clr"><i class="fab fa-facebook-square"></i></a>
					<a class="dr-clr"><i class="fab fa-dribbble"></i></a>
					<a class="ins-clr" href="https://instagram.com/pemprovsulut?igshid=MzRlODBiNWFlZA==" target="_blank"><i class="fab fa-instagram"></i></a>
				</div>
			</div>
		</div>


	</div><!-- /.page-wrapper -->

	<a data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

	<div class="mobile-nav__wrapper">
		<div class="mobile-nav__overlay side-menu__toggler mobile-nav__toggler"></div>
		<!-- /.mobile-nav__overlay -->
		<div class="mobile-nav__content">
			<span class="mobile-nav__close side-menu__toggler mobile-nav__toggler"><i class="fa fa-times"></i></span>

			<div class="logo-box">
				 <a aria-label="logo image"><img src="" width="101" alt="" /></a> 
			</div>
			<!-- /.logo-box -->
			<div class="mobile-nav__container clearfix"></div>
			<!-- /.mobile-nav__container -->
		</div>
		<!-- /.mobile-nav__content -->
	</div>

	

	<script src="<?= base_url('assets/sub');  ?>/js/jquery.min.js"></script>
	<script src="<?= base_url('assets/sub');  ?>/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url('assets/sub');  ?>/js/owl.carousel.min.js"></script>
	<script src="<?= base_url('assets/sub');  ?>/js/waypoints.min.js"></script>
	<script src="<?= base_url('assets/sub');  ?>/js/jquery.counterup.min.js"></script>
	<script src="<?= base_url('assets/sub');  ?>/js/TweenMax.min.js"></script>
	<script src="<?= base_url('assets/sub');  ?>/js/wow.js"></script>
	<script src="<?= base_url('assets/sub');  ?>/js/jquery.magnific-popup.min.js"></script>
	<script src="<?= base_url('assets/sub');  ?>/js/jquery.ajaxchimp.min.js"></script>
	<script src="<?= base_url('assets/sub');  ?>/js/swiper.min.js"></script>
	<script src="<?= base_url('assets/sub');  ?>/js/typed-2.0.11.js"></script>
	<script src="<?= base_url('assets/sub');  ?>/js/vegas.min.js"></script>
	<script src="<?= base_url('assets/sub');  ?>/js/jquery.validate.min.js"></script>
	<script src="<?= base_url('assets/sub');  ?>/js/bootstrap-select.min.js"></script>
	<script src="<?= base_url('assets/sub');  ?>/js/countdown.min.js"></script>
	<script src="<?= base_url('assets/sub');  ?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="<?= base_url('assets/sub');  ?>/js/bootstrap-datepicker.min.js"></script>
	<script src="<?= base_url('assets/sub');  ?>/js/nouislider.min.js"></script>
	<script src="<?= base_url('assets/sub');  ?>/js/isotope.js"></script>
	<script src="<?= base_url('assets/sub');  ?>/js/appear.js"></script>
	<script src="<?= base_url('assets/sub');  ?>/js/jarallax.min.js"></script>
	<script src="<?= base_url('assets/sub');  ?>/js/theme.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>

	
</body>

</html>