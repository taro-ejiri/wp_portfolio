<?php get_header(); ?>
<!-- [archive-works .p]  -->
<div id="mainArea">
  	<section class="work-list">
		<h2>WORKS</h2>
		<h3>実績</h3>
		<ul class="filter-button">
			<li id="all" class="is-checked">ALL</li>
			<li id="corporate">corporate</li>
			<li id="campaign">campaign</li>
			<li id="wordpress">wordpress</li>				
			<li id="landing">Landing Page</li>
			<li id="game">Game content</li>
			<li id="other">OTHER</li>
			<li id="responsive">RESPONSIVE</li>
		</ul>
		<div class="contents">
			<div class="grid">
				<?php if (have_posts()) : ?>
					<?php
						$args = array(/* 配列に複数の引数を追加 */
						'post_type' => 'works',/* 投稿タイプを指定 */
						'order' => 'DESC',
						'posts_per_page' => '-1' //表示件数。-1なら全件表示
						);
						$the_query = new WP_Query( $args );
					?>
					<?php query_posts( $args ); //上で指定したクエリ（問い合わせ内容）の指定 ?>
					<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?><!-- ループ開始処理 -->
						<div class="
							<?php // サイトの種類名をclassとして追加
								$colors = get_field('siteType');
								if ($colors): 
							?>
							<?php foreach ($colors as $color) : ?>
							<?php echo $color; ?>
							<?php endforeach; ?>
							<?php endif; ?> itembox">
							<a href="<?php the_permalink(); ?>">
								<figure>
									<?php //写真設定
									$image = get_field('archiveIMG');
									$alt = $image['alt'];
									$url = $image['sizes']['large'];
									?>
									<img src="<?php echo $url ?>" alt="<?php echo $alt ?>">
									<figcaption>
										<div class="title"><?php echo get_the_title(); ?><br><span class="small"><?php the_field('client'); ?></span></div>
										<?php 
											$checked = get_field('newMark');
											if ($checked){ //管理画面で「NEW」のチェックボックスを入れていたら
											echo '<span class="new">NEW</span>'; //アイコンを表示
											}
										?>
									</figcaption>
								</figure>								
								<span class="client"><?php the_field('sitename'); ?></span>
							</a>
						</div>
					<?php endwhile; // end of the loop. ?>
					<?php wp_reset_query(); ?><!-- リセット -->
				<?php endif; ?>
			</div>
		</div>
	</section>	
</div>
<!-- [//archive-works .p]  -->
<?php get_footer(); ?>