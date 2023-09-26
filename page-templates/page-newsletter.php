<?php

    /*

    Template Name: Newsletter
    
    */

    get_header();

?>

        <div class="block-title">
			<div class="shell">
				<h2><?php the_title(); ?></h2>
			</div><!-- /.shell -->
		</div><!-- /.block-title -->

		<section class="section-newsletter">
			<div class="section__image">
				<img src="<?= get_template_directory_uri() ?>/assets/images/temp/newsletter-gif.gif" alt="">
			</div><!-- /.section__image -->
			
			<div class="section__wrapper">
				<div class="shell">
					<div class="section__content">
						<p><?= _e('newsletter-description', 'biotop') ?></p>
					</div><!-- /.section__content -->
				</div><!-- /.shell -->
			</div><!-- /.section__wrapper -->

			<div class="section__form">
				<div class="shell">
					<div class="form form--small">
                        <?php the_content(); ?>
					</div><!-- /.form -->
				</div><!-- /.shell -->
			</div><!-- /.section__form -->
		</section><!-- /.section-newsletter -->
        
<?php get_footer(); ?>