<section class="blog_detail" style="margin-top: 50px;">
	<div class="container">
		<div class="row">
			<div class="col-xl-8 col-lg-7">
				<div class="blog_detail_left">
					
					<div class="blog-detail__content">
						<ul class="list-unstyled blog-detail__meta">
							
						</ul>
						<div class="blog_detail_title">
							<h3><?= $bd->Judul ?></h3>
							<p style="font-size: 12px;"><i class="far fa-user-circle"></i> Admin, <?php echo date('d/m/Y H:i:s',strtotime($bd->RegDate)) ?></p>
						</div>
						<div class="blog_detail_text">
							<?php echo wordwrap($bd->Isi); ?>
						</div>
					</div>
					
				</div>
			</div>
			<div class="col-xl-4 col-lg-5">
				<div class="sidebar" style="margin-top: 40px;margin-bottom: 40px;">
					
					<div class="sidebar__single sidebar__post">
						<h3 class="sidebar__title">Latest Posts</h3>
						<ul class="sidebar__post-list list-unstyled">
							<?php if ($new_blog != null){ ?>
								<?php foreach ($new_blog as $nb){ ?>
									<li>
										<div class="sidebar__post-content">
											<h3>
												<a href="#" onclick="return false;" class="sidebar__post-content_meta"><i class="far fa-user-circle"></i>by Admin <?= date('d/m/Y H:i:s',strtotime($nb->RegDate)) ?></a>
												<a href="<?= site_url($nb->Slug.'/blog') ?>"><?php echo $nb->Judul ?></a>
											</h3>
										</div>
									</li>
								<?php } ?>
							<?php } ?>

						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>