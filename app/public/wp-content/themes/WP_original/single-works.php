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
				$ctm = get_post_meta($post->ID, 'slideImage_pc', true);?>
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
						<div class="carousel-caption">イントラサイトの為<br>閲覧不可</div>
					</div>
				<?php else: ?>
					<img src="<?php echo $url ?>" alt="<?php echo $alt ?>" class="img-responsive"/>
				<?php endif; ?>
			<?php else: // 通常 ?> 
				<ul class="slider works-slider">
					<li>
						<?php //写真設定
							$image = get_field('slideImage_pc');
							$alt = $image['alt'];
							$url = $image['sizes']['large'];
						?>
						<img src="<?php echo $url ?>" alt="<?php echo $alt ?>" class="img-responsive"/>
						<div class="size">PCサイズ</div>
					</li>
					<li>
						<?php //写真設定
							$image = get_field('slideImage_tab');
							$alt = $image['alt'];
							$url = $image['sizes']['large'];
						?>
						<img src="<?php echo $url ?>" alt="<?php echo $alt ?>" class="img-responsive"/>
						<div class="size">タブレットサイズ</div>
					</li>
					<li>
						<?php //写真設定
							$image = get_field('slideImage_sp');
							$alt = $image['alt'];
							$url = $image['sizes']['large'];
						?>
						<img src="<?php echo $url ?>" alt="<?php echo $alt ?>" class="img-responsive"/>
						<div class="size">スマートフォンサイズ</div>
					</li>
				</ul>
			<?php endif; ?>
		</div>		
	</div>
	<div class="Works-comment">
		<div class="comment">
			<!-- 概要欄 -->
			<p><?php the_field('column'); ?></p>
		</div>
		<dl class="dl-center">
			<!-- 使用ツール -->
			<dt>TOOL:</dt>
			<dd><?php the_field('tool'); ?></dd>
			<!-- 作業範囲 -->
			<dt>SCOPE:</dt>
			<dd><?php the_field('scope'); ?></dd>
			<!-- クライアント名（日本語）-->
			<dt>CLIENT:</dt>
			<dd><?php the_field('client_jpn'); ?>様</dd>
			<!-- サイトURL -->
			<!--dt>SITE:</dt>
			<dd><a href="<?php the_field('siteURL'); ?>" target="blank"><?php the_field('siteURL'); ?></a></dd-->
		</dl>
	</div>
<?php endwhile; ?>
</div><!-- /.post　-->
<?php endif; ?>
<!-- [//single-works.p] -->
<?php get_footer(); ?>