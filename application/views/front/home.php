<section class="main-slider" style="margin-top: 50px;">
	<iframe class="embed-responsive-item" src="<?php echo base_url() ?>assets/gis/index.php?urls=<?php echo urlencode(base_url()) ?>" style="width: 100%;border: 0px;height: 700px;"></iframe>
</section>
<section class="welcome_one">
	<div class="container">
		<div class="row">
			<div class="col-xl-6">
				<div class="welcome_one_left">
					<div class="welcome_one_left_image">
						<img src="<?= base_url('assets/sub');  ?>/images/resources/1.jpg" alt="">
						<ul class="counter_one list-unstyled">
							<li class="counter_one_single">
								<h2 class="counter"><?php echo $count_tambang ?></h2>
								<p>Tambang</p>
							</li>
							<li class="counter_one_single">
								<h2 class="counter"><?php echo $count_perusahaan ?></h2>
								<p>Perusahaan</p>
							</li>
							<li class="counter_one_single">
								<h2 class="counter"><?php echo $count_kab_kota ?></h2>
								<p>Kab / Kota</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-xl-6">
				<div class="welcome_one_right_content">
					<div class="block-title text-left">
						<h2>TAMBANG LIAR</h2>
					</div>

					<p class="welcome_one_right_first_text">Tambang liar harus diatur agar fungsi pengendalian dapat bekerja secara maksimal, dan segala macam dampak negatif dapat dimitigasi untuk menghasilkan penanganan yang lebih komprehensif. Dari sinilah lahir ide untuk membuat proyek perubahan dengan yang unik. Si Tali Merah (Relokasi Pertambangan Liar ke Wilayah Pertambangan Rakyat).</p>


					<ul class="list-unstyled">
						<li>
							<i class="fa fa-check"></i>Undang Undang Nomor 23 Tahun 2014 Tentang Pemerintahan Daerah.
						</li>
						<li>
							<i class="fa fa-check"></i>Undang Undang Nomor 3 Tahun 2020 Tentang Pertambangan Mineral dan Batubara.
						</li>
						<li>
							<i class="fa fa-check"></i>Peraturan Pemerintah Republik Indonesia Nomor 22 Tahun 2010 Tentang Wilayah Pertambangan.
						</li>
						<li>
							<i class="fa fa-check"></i>Peraturan Daerah Sulawesi Utara Nomor 3 Tahun 2019 Tentang Pertambangan Mineral.
						</li>
					</ul>
					<div class="welcome_one_signature_box">
						
						<h3>Olly Dondokambey</h3>
						<p>Gubernur Sulawesi Utara</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Our Services One Start -->
<section class="our_services_one">
	<div class="container">
		<div class="block-title text-center">
			<h2 style="color: red;">Blog</h2>
		</div>
		<div class="row">
			<?php if ($new_blog != null){ ?>
				<?php foreach ($new_blog as $nb){ ?>
					
					<div class="col-xl-4 col-lg-4">
						<!-- Our Services One Single -->
						<div class="our_services_one_single wow fadeInUp">
							<div class="our_services_one_content" style="border-top: 2px solid #e4e4e4;">
								<h3 style="margin-bottom: 0px;"><?php echo $nb->Judul ?></h3><span style="font-size: 10px;"><i class="fa fa-user"></i> admin</span>,<span style="font-size: 10px;"><?php echo $nb->Kategori ?>,<?php echo date('d/m/Y H:i:s', strtotime($nb->RegDate)); ?></span>
								<!-- <p style="margin-top: 20px;">Aliq is notm hendr erit a augue insu image pellen simply freede text ipsum.</p> -->
								<a class="services_one_arrow_icon" href="<?= site_url($nb->Slug.'/blog') ?>" title="Baca Selengkapnya">
									<span class="flaticon-right-arrow"></span>
								</a>
							</div>
						</div>
					</div>
				<?php } ?>
				<div class="col-xl-12">
					<center>
						<a href="<?php echo site_url('blog') ?>" class="btn thm-btn" title="">Semua Blog</a>
					</center>
				</div>
			<?php }else{ ?>
				<div class="col-xl-12">
					<center>
						<span style="color: red;">Tidak Ada Data</span>
					</center>
				</div>
			<?php } ?>
		</div>
	</div>
</section>
