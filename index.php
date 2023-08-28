<?php

    /*

    Template Name: Home
    
    */

    get_header();

?>


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
						<a href="home.html" class="logo">
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
					<img src="<?= get_template_directory_uri() ?>/assets/images/svg/scroll-to-top.svg" alt="">
				</a>
			</div><!-- /.header__arrow -->
		</header><!-- /.header -->

		<div class="block-marquee js-marquee">
			<div class="block__text">
				<h3>Coming Next</h3>
			</div><!-- /.block__text js-marquee -->
		</div><!-- /.block-marquee -->

		<div class="slider-hero js-slider-hero">
			<div class="slider__clip swiper">
				<div class="slider__slides swiper-wrapper">
					<div class="slider__slide swiper-slide">
						<a href="#">
							<div class="shell">
								<div class="slider__back">
									<img src="<?= get_template_directory_uri() ?>/assets/images/temp/hero-back.jpg" alt="">
								</div><!-- /.slider__back -->
							
								<div class="slider__title" data-swiper-parallax="-50%">
									<h1>Les Poules Mouillées Volontaires</h1>
								</div><!-- /.slider__title -->
							</div><!-- /.shell -->
						</a>
					</div><!-- /.slider__slide -->

					<div class="slider__slide swiper-slide">
						<a href="#">
							<div class="shell">
								<div class="slider__back">
									<img src="<?= get_template_directory_uri() ?>/assets/images/temp/hero-back2.jpg" alt="">
								</div><!-- /.slider__back -->
							
								<div class="slider__title" data-swiper-parallax="-50%">
									<h1>Master of Desaster</h1>
								</div><!-- /.slider__title -->
							</div><!-- /.shell -->
						</a>
					</div><!-- /.slider__slide -->

					<div class="slider__slide swiper-slide">
						<a href="#">
							<div class="shell">
								<div class="slider__back">
									<img src="<?= get_template_directory_uri() ?>/assets/images/temp/hero-back3.jpg" alt="">
								</div><!-- /.slider__back -->
							
								<div class="slider__title" data-swiper-parallax="-50%">
									<h1>Harpapier</h1>
								</div><!-- /.slider__title -->
							</div><!-- /.shell -->
						</a>
					</div><!-- /.slider__slide -->

					<div class="slider__slide swiper-slide">
						<a href="#">
							<div class="shell">
								<div class="slider__back">
									<img src="<?= get_template_directory_uri() ?>/assets/images/temp/hero-back4.jpg" alt="">
								</div><!-- /.slider__back -->
							
								<div class="slider__title" data-swiper-parallax="-50%">
									<h1>Kinderclub Glücksfabrik</h1>
								</div><!-- /.slider__title -->
							</div><!-- /.shell -->
						</a>
					</div><!-- /.slider__slide -->

					<div class="slider__slide swiper-slide">
						<a href="#">
							<div class="shell">
								<div class="slider__back">
									<img src="<?= get_template_directory_uri() ?>/assets/images/temp/hero-back5.jpg" alt="">
								</div><!-- /.slider__back -->
							
								<div class="slider__title" data-swiper-parallax="-50%">
									<h1>L’histoire du petit oncle</h1>
								</div><!-- /.slider__title -->
							</div><!-- /.shell -->
						</a>
					</div><!-- /.slider__slide -->
				</div><!-- /.slider__slides -->
			</div><!-- /.slider__clip -->
		</div><!-- /.slider js-slider -->

		<section class="section-nav">
			<div class="section__menu section__menu--yellow">
				<div class="section__item">
					<div class="shell">
						<a href="la-grenouille.html">
							<h2>La Grenouille</h2>
					
							<img src="<?= get_template_directory_uri() ?>/assets/images/svg/arrow-right.svg" alt="">
						</a>
					</div><!-- /.shell -->
				</div><!-- /.section__item -->
			</div><!-- /.section__menu -->
			
			<div class="section__menu section__menu--blue">
				<div class="section__item">
					<div class="shell">
						<a href="incubo.html">
							<h2>Incubo</h2>
					
							<img src="<?= get_template_directory_uri() ?>/assets/images/svg/arrow-right.svg" alt="">
						</a>
					</div><!-- /.shell -->
				</div><!-- /.section__item -->
			</div><!-- /.section__menu -->
			
			<div class="section__menu">
				<div class="section__item">
					<div class="shell">
						<a href="biotop.html">
							<h2>Biotop</h2>
					
							<img src="<?= get_template_directory_uri() ?>/assets/images/svg/arrow-right.svg" alt="">
						</a>
					</div><!-- /.shell -->
				</div><!-- /.section__item -->
			</div><!-- /.section__menu -->
			
			<div class="section__menu">
				<div class="section__item">
					<div class="shell">
						<a href="programm.html">
							<h2>Programme</h2>
					
							<img src="<?= get_template_directory_uri() ?>/assets/images/svg/arrow-right.svg" alt="">
						</a>
					</div><!-- /.shell -->
				</div><!-- /.section__item -->
			</div><!-- /.section__menu -->
			
			<div class="section__menu">
				<div class="section__item">
					<div class="shell">
						<a href="#">
							<h2>News</h2>
					
							<img src="<?= get_template_directory_uri() ?>/assets/images/svg/arrow-right.svg" alt="">
						</a>
					</div><!-- /.shell -->
				</div><!-- /.section__item -->
			</div><!-- /.section__menu -->
			
			<div class="section__menu section__menu--image">
				<img src="<?= get_template_directory_uri() ?>/assets/images/temp/section-image.jpg" alt="">
			</div><!-- /.section__menu -->
			
			<div class="section__menu">
				<div class="section__item">
					<div class="shell">
						<a href="#">
							<h2>Cadeaux et +</h2>
							
							<img src="<?= get_template_directory_uri() ?>/assets/images/svg/arrow-right.svg" alt="">
						</a>
					</div><!-- /.shell -->
				</div><!-- /.section__item -->
			</div><!-- /.section__menu -->
			
			<div class="section__menu section__menu--image-alt section__menu--no-border">
				<img src="<?= get_template_directory_uri() ?>/assets/images/temp/placeholder-green.png" alt="">
			</div><!-- /.section__menu -->
		</section><!-- /.section-nav -->

		<footer class="footer">
			<div class="shell footer__shell">
				<div class="footer__locations">
					<div class="footer__location">
						<p>La Grenouille</p>
						
						<a href="tel:41323415586">Tel. +41 32 341 55 86</a>
						
						<a href="mailto:info@lagrenouille.ch">info@lagrenouille.ch</a>
						
						<ul>
							<li>
								<a href="#">
									<img src="<?= get_template_directory_uri() ?>/assets/images/svg/instagram-icon.svg" alt="">
								</a>
							</li>
							
							<li>
								<a href="#">
									<img src="<?= get_template_directory_uri() ?>/assets/images/svg/facebook-icon.svg" alt="">
								</a>
							</li>
						</ul>
					</div><!-- /.footer__location -->
					
					<div class="footer__location">
						<p>Incubo</p>
						
						<a href="tel:41323333333">Tel. +41 32 333 33 33</a>
						
						<a href="mailto:info@incubo.ch">info@incubo.ch</a>
						
						<ul>
							<li>
								<a href="#">
									<img src="<?= get_template_directory_uri() ?>/assets/images/svg/instagram-icon.svg" alt="">
								</a>
							</li>
							
							<li>
								<a href="#">
									<img src="<?= get_template_directory_uri() ?>/assets/images/svg/facebook-icon.svg" alt="">
								</a>
							</li>
						</ul>
					</div><!-- /.footer__location -->
				</div><!-- /.footer__locations -->
		
				<div class="footer__nav">
					<nav class="nav-footer">
						<ul>
							<li>
								<a href="#">Impressum</a>
							</li>
		
							<li>
								<a href="#">Datenschutz</a>
							</li>
							
							<li>
								<a href="#">AGB</a>
							</li>
						</ul>
					</nav><!-- /.nav-footer -->
				</div><!-- /.footer__nav -->
				
				<div class="footer__newsletter">
					<p>Abonnieren Sie unseren</p>
					
					<a href="newsletter-subscription.html">
						<h2>Newsletter</h2>
					</a>
				</div><!-- /.footer__newsletter -->
			</div><!-- /.shell -->
		</footer><!-- /.footer -->
	</div><!-- /.wrapper -->

<?php get_footer(); ?>