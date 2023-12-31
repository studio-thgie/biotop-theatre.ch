<?php

    /*

    Template Name: Home
    
    */

    get_header();

?>

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

<?php get_footer(); ?>
