<?php get_header(); ?>
<!-- [single-works .p]  -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div id="post-<?php the_ID(); ?>">
	<div class="worksTitle">
		<p class="header_cat"><a href="/works/">WORKS</a></p>
		<h2><?php the_field('sitename'); ?></h2>
		<p class="clientName">BY <?php the_field('client'); ?></p>
		<?php // PCサイズしかないサイトの場合 
		$cci = get_post_meta($post->ID, 'siteURL', true);?>
		<?php if(empty($cci)):?>
		<p class="heading-sub-en">※INTRA SITE</p>
		<?php else: ?>
		<p class="heading-sub-en"><a href="<?php the_field('siteURL'); ?>" target="blank"><?php the_field('siteURL'); ?></a> <i class="fa fa-external-link" aria-hidden="true"></i></p>
		<?php endif; ?>
	</div>
	<div class="Works-content">
		<!-- data-ride="carousel"を入れると自動的にスライドが開始される -->
		<!-- data-interval="3000"を入れると切り替わるタイミングが変わる（3000で3秒） -->
		<div id="carousel" class="carousel slide" data-ride="carousel" data-interval="10000">
			<?php // PCサイズしかないサイトの場合 
				$ctm = get_post_meta($post->ID, 'slideImage_1', true);?>
				<!-- $ctm = get_post_meta($post->ID, 'slideImage_pc', true);?> -->
			<?php if(empty($ctm)):?>
				<div class="carousel-inner">
					<?php 
					$image = get_field('pc_Only');
					$alt = $image['alt'];
					$url = $image['sizes']['large'];
					?>
				</div>
				<?php //上記でURLを未入力（※INTRA SITE）だった場合
				if(empty($cci)):?>
					<div class="intra">
						<img src="<?php echo $url ?>" alt="<?php echo $alt ?>" class="img-responsive"/>
						<div class="text">イントラサイトの為、閲覧不可</div>
					</div>
				<?php else: ?>
					<img src="<?php echo $url ?>" alt="<?php echo $alt ?>" class="img-responsive"/>
				<?php endif; ?>
			<?php else: // 通常 ?>
				<ul class="slider works-slider">
					<?php if(get_field('slideImage_1')): ?>
					<li>
						<?php //写真設定
							$image = get_field('slideImage_1');
							$alt = $image['alt'];
							$url = $image['sizes']['large'];
						?>
						<img src="<?php echo $url ?>" alt="<?php echo $alt ?>" class="img-responsive"/>
						<div class="sitename"><a href="<?php the_field('siteURL_1'); ?>" target="blank"><?php the_field('siteName_1'); ?> <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
					</li>
					<?php endif; ?>
					<?php if(get_field('slideImage_2')): ?>
					<li>
						<?php //写真設定
							$image = get_field('slideImage_2');
							$alt = $image['alt'];
							$url = $image['sizes']['large'];
						?>
						<img src="<?php echo $url ?>" alt="<?php echo $alt ?>" class="img-responsive"/>
						<div class="sitename"><a href="<?php the_field('siteURL_2'); ?>" target="blank"><?php the_field('siteName_2'); ?> <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
					</li>
					<?php endif; ?>
					<?php if(get_field('slideImage_3')): ?>
					<li>
						<?php //写真設定
							$image = get_field('slideImage_3');
							$alt = $image['alt'];
							$url = $image['sizes']['large'];
						?>
						<img src="<?php echo $url ?>" alt="<?php echo $alt ?>" class="img-responsive"/>
						<div class="sitename"><a href="<?php the_field('siteURL_3'); ?>" target="blank"><?php the_field('siteName_3'); ?> <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
					</li>
					<?php endif; ?>
					<?php if(get_field('slideImage_4')): ?>
					<li>
						<?php //写真設定
							$image = get_field('slideImage_4');
							$alt = $image['alt'];
							$url = $image['sizes']['large'];
						?>
						<img src="<?php echo $url ?>" alt="<?php echo $alt ?>" class="img-responsive"/>
						<div class="sitename"><a href="<?php the_field('siteURL_4'); ?>" target="blank"><?php the_field('siteName_4'); ?> <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
					</li>
					<?php endif; ?>
					<?php if(get_field('slideImage_5')): ?>
					<li>
						<?php //写真設定
							$image = get_field('slideImage_5');
							$alt = $image['alt'];
							$url = $image['sizes']['large'];
						?>
						<img src="<?php echo $url ?>" alt="<?php echo $alt ?>" class="img-responsive"/>
						<div class="sitename"><a href="<?php the_field('siteURL_5'); ?>" target="blank"><?php the_field('siteName_5'); ?> <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
					</li>
					<?php endif; ?>
					<?php if(get_field('slideImage_6')): ?>
					<li>
						<?php //写真設定
							$image = get_field('slideImage_6');
							$alt = $image['alt'];
							$url = $image['sizes']['large'];
						?>
						<img src="<?php echo $url ?>" alt="<?php echo $alt ?>" class="img-responsive"/>
						<div class="sitename"><a href="<?php the_field('siteURL_6'); ?>" target="blank"><?php the_field('siteName_6'); ?> <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
					</li>
					<?php endif; ?>
				</ul>
			<?php endif; ?>
		</div>		
	</div>
	<div class="Works-comment">
		<div class="comment">
			<p><?php the_field('column'); ?></p>
		</div>
		<dl class="dl-center">
			<dt>LANG / TOOL:</dt>
			<dd><?php the_field('tool'); ?></dd>
			<dt>SCOPE:</dt>
			<dd><?php the_field('scope'); ?></dd>
			<dt>CLIENT:</dt>
			<dd><?php the_field('client_jpn'); ?>様</dd>
			<!-- <dt>SITE:</dt>
			<dd><a href="<?php the_field('siteURL'); ?>" target="blank"><?php the_field('siteURL'); ?> <i class="fa fa-external-link" aria-hidden="true"></i></a></dd> -->
		</dl>
	</div>
<?php endwhile; ?>
</div><!-- /.post　-->
<?php endif; ?>
<!-- [//single-works.p] -->
<?php get_footer(); ?>