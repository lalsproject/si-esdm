<section class="blog_one two blog-page" style="padding-top: 50px;">
	<div class="container">
		<div class="row">
			<div class="block-title text-center col-md-12" style="margin-top: 0px;">
				<h3 style="color: red;"><strong>Semua Blog</strong></h3>
				<hr>
			</div>
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
			<?php }else{ ?>
				<h3 style="color: red;">
					<center>Tidak Ada Blog</center>
				</h3>
			<?php } ?>
		</div>
	</div>
</section>