<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="format-detection" content="telephone=no"><!-- 電話番号の自動リンク機能を無効化する -->
<meta http-equiv="Content-Script-Type" content="text/javascript">
<!-- SEO -->
<!--
<?php
if(is_front_page()): ?>
  <title><?php wp_title( '|', true, 'right' ); ?></title>
<?php endif; ?>
-->
<meta name="keywords" content="web制作,webデザイナー,コーダー,東京,板橋区,">
<meta name="description" content="taro ejiriのポートフォリオサイトです。これまで制作してきたWEBサイトについて、また制作する際の概要についてご紹介いたします。">
<meta name="author" content="taro ejiri">
<link rel="canonical" href="http://portfolio.sept11.work/">
<!-- OGP -->
<meta property="og:site_name" content="ET ウェブデザイン portfolio">
<meta property="og:title" content=""><!-- ogpのタイトル. <title>と文章も文字数も同じにする。 -->
<meta property="og:description" content="ejiriのポートフォリオサイトです。これまで制作してきたWEBサイトについて、また制作する際の概要についてご紹介いたします。"><!-- ogpの本文。<meta name='description'>と同じにする。 -->
<meta property="og:type" content="website">
<meta property="og:url" content="http://portfolio.sept11.work/"><!-- サイトのURL貼る -->
<meta property="og:image" content=""><!-- ogpのURL貼る -->
<meta property="fb:app_id" content="" /><!-- App-ID（15文字の半角数字） -->
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="http://portfolio.sept11.work/"><!-- サイトのURL貼る -->
<meta name="twitter:image" content=""><!-- ogpのURL貼る -->
<!-- favicon -->
<link rel="icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/img/favicon.ico">

<!-- CSS -->
<!-- font-awesome -->
<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
<!-- style.css-->
<link href="<?php bloginfo('template_url'); ?>/css/style.css" rel="stylesheet" type="text/css">
<!-- <link href="<?php bloginfo('template_url'); ?>/css/style.min.css" rel="stylesheet" type="text/css"> -->



<!-- test start -->

<!-- slick -->
<?php if(is_front_page()): ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/js/slick/slick.css" >
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/js/slick/slick-theme.css">
<?php endif; ?>
<!-- slick -->



<!-- test end -->


<?php // front_page css
if(is_front_page()): ?>

<!-- <link href="<?php bloginfo('template_url'); ?>/css/flexslider.css" rel="stylesheet"> -->

<!-- カルーセルスライダーslick　css-->

<!-- <link href="<?php bloginfo('template_url'); ?>/js/slick/slick.css" rel="stylesheet" type="text/css" media="screen">
<link href="<?php bloginfo('template_url'); ?>/js/slick/slick-theme.css" rel="stylesheet" type="text/css" media="screen"> -->

<?php endif; ?>

<!-- Bootstrap CSS -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

<!--[if lt IE 9]>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5shiv.min.js"></script>
<![endif]-->
<!--[if lt IE 9]>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5shiv-printshiv.min.js"></script>
<![endif]-->

<!-- Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-96611275-1"></script>
<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());
	gtag('config', 'UA-96611275-1');
</script>

<!-- JSON-LD -->
<script type="application/ld+json">
  {
	"@context": "http://schema.org",
	"@type": "Organization",
	"name": "TARO EJIRI",
	"url": "http://portfolio.sept11.work/",
	"logo": "http://portfolio.sept11.work/img/ogp_top.png"
  }
</script>
<?php wp_head(); ?><!--システム・プラグイン用-->
</head>

<body <?php body_class(); ?> class="fadeout">
	<header id="header">
		<div class="header-content">
			<div class="logo_pc"><h1><a href="<?php bloginfo('url'); ?>/" ><img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="<?php bloginfo('name'); ?>"></a></h1></div>
			<div class="logo_sm"><h1><a href="<?php bloginfo('url'); ?>/" ><img src="<?php bloginfo('template_url'); ?>/img/miniLogo.png" alt="<?php bloginfo('name'); ?>"></a></h1></div>
			<nav class="navigation" role="navigation">
				<ul class="primary-nav">
					<li><a href="/about/">About</a></li>
					<li><a href="/works/">Works</a></li>
					<li><a href="/contact/">Contact</a></li>
					<li>
						<ul class="h_share_btn">
							<li><a href="https://twitter.com/sept11_1976"><img src="<?php bloginfo('template_url'); ?>/img/sns/twitter_out.png" alt="twitter" width="50"></a></li>
							<li><a href="https://www.facebook.com/sept.eleven.jpn" ><img src="<?php bloginfo('template_url'); ?>/img/sns/fb_out.png" alt="facebook" width="50"></a></li>
							<li><a href="https://github.com/taro-ejiri/portfolio.local" ><img src="<?php bloginfo('template_url'); ?>/img/sns/github_out.png" alt="github" width="50"></a></li>
							<li><a href="<?php bloginfo('url'); ?>" ><img src="<?php bloginfo('template_url'); ?>/img/sns/line_out.png" alt="LINE" width="50"></a></li>
							<!--li><a href="<?php bloginfo('url'); ?>" ><img src="<?php bloginfo('template_url'); ?>/img/sns/instagram_out.png" alt="instagram" width="50"></a></li-->
						</ul>
					</li>
				</ul>
			</nav>
			<a href="#" class="nav-toggle">Menu<span></span></a>
		</div>
	</header>

	<div class="wrapper">
