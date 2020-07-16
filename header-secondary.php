<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">

    <?php wp_head(); ?>

    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
    <!-- <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri(); ?>/assets/css/app.css" /> -->

	<script type="text/javascript" src="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
	<script src="https://player.vimeo.com/api/player.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-121683443-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-121683443-1');
	</script>
<!-- End Google Analytics -->

<!-- Bugherd Start -->
	<script type='text/javascript'>
	(function (d, t) {
	  var bh = d.createElement(t), s = d.getElementsByTagName(t)[0];
	  bh.type = 'text/javascript';
	  bh.src = 'https://www.bugherd.com/sidebarv2.js?apikey=gjzhspbugkbzuoxh7edk5q';
	  s.parentNode.insertBefore(bh, s);
	  })(document, 'script');
	</script>
<!-- Bugherd End -->
  </head>
  <body <?php body_class(); ?>>
<div class="pc_global-container">
	<div class="secondary-hero-menu">
		<div class="sticky-menu-container">
			<section class="header-top flex text-green bran-med">
				<!-- Top Left Nav -->
					<?php

						wp_nav_menu( array(
							'menu'              => "top-left-menu",
							'menu_class'        => "header-top__menu-left menu align-left uppercase",
							'container'         => false,
							'after'             => '<li class="separator flex align-center">|</li>',
							'depth'             => "1",
						) );

					?>

				<!-- top right nav -->

					<?php

					  wp_nav_menu( array(
					    'menu'              => "top-right-menu",
					    'menu_class'        => "header-top__menu-right menu align-right",
					    'container'         => false,
					    'after'             => '<li class="separator flex align-center">|</li>',
					    'depth'             => "1",
					  ) );

					?>
			</section>
			<div class="hero-menu__container flex">
				<a href="/" class="home-link">
					<img src="<?php the_field('school_logo_green', 'options'); ?>" alt="logo green" class="pc-logo-green">
				</a>
				<div class="mobile-menu-icon" id="mobile_menu_icon">
					<div class="ham-container" id="home_ham_container">
						<div class="ham-icon bar-1"></div>
						<div class="ham-icon bar-2"></div>
						<div class="ham-icon bar-3"></div>
					</div>
				</div>
				<?php
					wp_nav_menu( array(
						'menu'              => "main-pages-menu",
						'menu_class'        => "hero-menu menu uppercase bran-bold",
						'container'         => false,
					));
				 ?>
			</div>
		</div>
	</div>