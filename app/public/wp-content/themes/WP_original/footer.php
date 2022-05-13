</div><!-- /.wrapper -->

<!-- Back to top button -->
<!-- <div id="app-pagetop" v-cloak>
	<transition>
		<div class="pagetop" v-show="scY > 200" @click="toTop" v-transition>
			<i class="fa fa-chevron-up"></i>
		</div>
	</transition>
</div> -->

<footer>
	<div class="f_share_btn">
		<ul>
			<li><a href="https://twitter.com/sept11_1976"><img src="<?php bloginfo('template_url'); ?>/img/sns/twitter_out.png" alt="twitter" width="50"></a></li>
			<li><a href="https://www.facebook.com/sept.eleven.jpn"><img src="<?php bloginfo('template_url'); ?>/img/sns/fb_out.png" alt="facebook" width="50"></a></li>
			<li><a href="https://github.com/taro-ejiri/portfolio.local"><img src="<?php bloginfo('template_url'); ?>/img/sns/github_out.png" alt="github" width="50"></a></li>
			<li><a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/img/sns/line_out.png" alt="LINE" width="50"></a></li>
			<!--li><a href="<?php bloginfo('url'); ?>" ><img src="<?php bloginfo('template_url'); ?>/img/sns/instagram_out.png" alt="instagram" width="50"></a></li-->
		</ul>
	</div>
	<div class="cp_right">©2017-2022 ET WEB DESIGN</div>
</footer>

<!-- jquery -->
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
<!-- slick -->
<!-- <script src="<?php bloginfo('template_url'); ?>/js/slick/jquery-2.2.0.min.js" type="text/javascript" charset="utf-8"></script> -->
<script src="<?php bloginfo('template_url'); ?>/js/slick/slick.min.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
	// text-slider
	$('.text-slides').slick({
		arrows: false,
		autoplay: true,
		autoplaySpeed:4500,
		fade: true,
	});
	// front-slider
	$('.front-slick').slick({
		arrows: true,
		autoplay:true,
		autoplaySpeed:3000,
		dots:true
	});
	// works-slider
	$('.works-slider').slick({
		arrows: false,
		dots:true
	});
</script>
<!-- works並び替え --><!-- 投稿タイプが「works」のアーカイブページで行う処理を書く-->
<?php if ( is_post_type_archive('works') ) : ?>
	<!-- <script src="<?php bloginfo('template_url'); ?>/js/works/jquery-2.1.4.min.js"></script> -->
	<script src="<?php bloginfo('template_url'); ?>/js/works/masonry.pkgd.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/works/extention.js"></script>
<?php endif; ?>
<!-- シェアボタン js -->
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.easy-rollover.min.js"></script>
<script type="text/javascript">
	$(function () {
		//シェアボタン　マウスオーバー挙動
		$('img').easyRollover();
	});
</script>
<!-- ページ移動の際の表示設定 -->
<script type="text/javascript">
	$(window).on('load', function () {
		$('body').removeClass('fadeout');
	});
	$(function () {
		// ハッシュリンク(#)と別ウィンドウでページを開く場合はスルー
		$('a:not([href^="#"]):not([target])').on('click', function (e) {
			e.preventDefault(); // ナビゲートをキャンセル
			url = $(this).attr('href'); // 遷移先のURLを取得
			if (url !== '') {
				$('body').addClass('fadeout'); // bodyに class="fadeout"を挿入
				setTimeout(function () {
					window.location = url; // 0.8秒後に取得したURLに遷移
				}, 800);
			}
			return false;
		});
	});
</script>
<?php wp_footer(); ?>
</body>
</html>