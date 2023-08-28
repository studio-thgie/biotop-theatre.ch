<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title><?php the_title(); ?> - <?php bloginfo('name'); ?></title>
	<link rel="shortcut icon" type="image/x-icon" href="./assets/images/favicon.ico" />

    <script type="module" crossorigin src="<?= get_template_directory_uri() ?>/assets/app23.js"></script>
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/style.css">

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
						<a href="/" class="logo">
							<p>Biotop</p>
						</a>
					</div><!-- /.header__logo -->
				
					<div class="header__lang">
						<ul class="lang-switcher">
							<li class="current-item">
								<a href="#">Fr</a>
							</li>
							
							<li>
								<a href="#">De</a>
							</li>
						</ul>
					</div><!-- /.header__lang -->
				</div><!-- /.shell -->
			</div><!-- /.header__wrapper -->
		
			<div class="header__menu js-menu">
				<div class="shell">
					<nav class="nav">
						<ul>
							<li class="menu-item-has-children">
								<a href="programm.html">Programme</a>
		
								<ul>
									<li>
										<a href="#">Saison 2022-2023</a>
									</li>
									
									<li>
										<a href="#">Saison 2021-2022</a>
									</li>
									
									<li>
										<a href="#">Saison 2020-2021</a>
									</li>
									
									<li>
										<a href="#">Saison 2019-2020</a>
									</li>
								</ul>
							</li>
		
							<li>
								<a href="biotop.html">Biotop</a>
							</li>
		
							<li class="menu-item-has-children">
								<a href="la-grenouille.html">La Grenouille</a>
		
								<ul>
									<li>
										<a href="la-grenouille-productions.html">Productions</a>
									</li>
									
									<li>
										<a href="la-grenouille-schools.html">Ecoles</a>
									</li>
									
									<li>
										<a href="la-grenouille-participate.html">Participer</a>
									</li>
									
									<li>
										<a href="la-grenouille-team.html">Team</a>
									</li>
									
									<li>
										<a href="la-grenouille-about.html">A Propos</a>
									</li>
								</ul>
							</li>
		
							<li>
								<a href="incubo.html">Incubo</a>
							</li>
		
							<li class="menu-item-has-children">
								<a href="practical-infos.html">Infos Pratiques</a>
		
								<ul>
									<li>
										<a href="#">Contact</a>
									</li>
									
									<li>
										<a href="#">Acces</a>
									</li>
									
									<li>
										<a href="#">Billeterie</a>
									</li>
								</ul>
							</li>
		
							<li class="menu-item-has-children">
								<a href="pros.html">Pros</a>
		
								<ul>
									<li>
										<a href="#">Fiche Technique</a>
									</li>
									
									<li>
										<a href="#">Logos</a>
									</li>
									
									<li>
										<a href="annual-reports.html">Rapports Annuels</a>
									</li>
									
									<li>
										<a href="#">Revue de Presse et Communiqués</a>
									</li>
									
									<li>
										<a href="#">Kulturfabrik Gurzelen Location</a>
									</li>
									
									<li>
										<a href="rent-biotop.html">Biotop Location</a>
									</li>
									
									<li>
										<a href="mediatheque-play-sample.html">Médiathque</a>
									</li>
								</ul>
							</li>
						</ul>
					</nav><!-- /.nav -->
				</div><!-- /.shell -->
			</div><!-- /.header__menu -->
		
			<div class="header__arrow js-scroll-to-top">
				<a href="#">
					<img src="assets/images/svg/scroll-to-top.svg" alt="">
				</a>
			</div><!-- /.header__arrow -->
		</header><!-- /.header -->