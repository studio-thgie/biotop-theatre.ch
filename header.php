<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title><?php the_title(); ?> - <?php bloginfo('name'); ?></title>
	<link rel="shortcut icon" type="image/x-icon" href="<?= get_template_directory_uri() ?>/assets/images/favicon.ico" />

    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/style.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-161843300-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-161843300-1');
    </script>

    <?php wp_head(); ?>
</head>
<body>
	<div class="wrapper">
		<header class="header">
			<div class="header__wrapper">
				<div class="shell header__shell">
					<div class="header__toggle">
						<a href="#" class="menu-toggle js-menu-toggle">
							<span></span>
							
							<span></span>
							
							<span></span>
						</a><!-- /.menu-toggle -->
					</div><!-- /.header__toggle -->
				
					<div class="header__logo">
						<a href="/<?= apply_filters( 'wpml_current_language', NULL ) == 'fr' ? 'fr/' : '' ?>" class="logo">
							<p>Biotop</p>
						</a>
					</div><!-- /.header__logo -->
				
					<div class="header__lang">
						<ul class="lang-switcher">
							<?php foreach(icl_get_languages() as $lang): ?>
								<li class="<?= $lang['active'] ? 'current-item' : '' ?>">
									<a href="<?= $lang['url'] ?><?= $_SERVER['QUERY_STRING'] != '' ? '?'.$_SERVER['QUERY_STRING'] : '' ?>">
										<?= $lang['language_code'] ?>
									</a>
								</li>
							<?php endforeach; ?>
						</ul>
					</div><!-- /.header__lang -->
				</div><!-- /.shell -->
			</div><!-- /.header__wrapper -->
		
			<div class="header__menu js-menu">
				<div class="shell">
					<nav class="nav">
						<?php wp_nav_menu([
								'theme_location' => 'main_'.explode('-', get_bloginfo('language'))[0],
								'container' => '',
								'fallback_cb' => false
							]);
						?>
					</nav>
				</div><!-- /.shell -->
			</div><!-- /.header__menu -->
		
			<div class="header__arrow js-scroll-to-top">
				<a href="#">
					<img src="<?= get_template_directory_uri() ?>/assets/images/svg/scroll-to-top.svg" alt="">
				</a>
			</div><!-- /.header__arrow -->
		</header><!-- /.header -->