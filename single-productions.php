<?php

    /*

    Post Type: Productions
    
    */

    get_header();

?>

        <div class="block-title">
            <div class="shell">
                <h2><?php the_title(); ?></h2>
            </div><!-- /.shell -->
        </div><!-- /.block-title -->

        <section class="section-tickets">
            <?php if ( has_post_thumbnail() ) : ?>
                <div class="section__image section__image--large">
                    <?php the_post_thumbnail(); ?>
                </div><!-- /.section__image -->
            <?php endif; ?>

			<div class="section__container">
				<div class="section__entry">
					<div class="shell">
                        <?php if(get_field('subtitle')): ?>
                            <div class="section__title">
                                <h3><?php the_field('subtitle'); ?></h3>
                            </div><!-- /.section__title -->
                        <?php endif; ?>
					
						<div class="section__info">
                            <?php get_template_part('parts/production-meta', ['pid' => get_the_ID()]); ?>

                            <?php
					
                                $reservation = true;
                                $link = get_field('tickets_page', 'option') . '?id=' . get_the_ID();
                                $target = '_self';
                            
                                if(!is_null(get_field('reservation_activated'))){
                                    $reservation = get_field('reservation_activated');
                                }
                            
                                if(get_field('reservation_extern') != ''){
                                    $link = get_field('reservation_extern');
                                    $target = '_blank';
                                }
                            
                            ?>

                            <?php if($reservation): ?>
                                <div class="section__actions">
                                    <a href="<?= $link; ?>" target="<?= $target; ?>" class="btn btn--block">Tickets</a>
                                </div>
                            <?php endif; ?>
						</div><!-- /.section__info -->
					</div><!-- /.shell -->
				</div><!-- /.section__entry -->
			</div><!-- /.section__container -->
		</section><!-- /.section-tickets -->

        <?php get_template_part('parts/content'); ?>

        <?php if(get_field('header_slideshow')): ?>
            <section class="section-gallery">
                <div class="section__slider">
                    <div class="slider-gallery js-slider-gallery">
                        <div class="slider__clip swiper">
                            <div class="slider__slides swiper-wrapper">
                                <?php foreach(get_field('header_slideshow') as $key => $image): ?>
                                    <div class="slider__slide swiper-slide">
                                        <a href="<?= wp_get_attachment_image_url( $image, 'full' ) ?>?download" target="_blank">
                                            <div class="slider__image">
                                                <img src="<?= wp_get_attachment_image_url( $image, 'header-slideshow' ) ?>" alt="">
                                            </div><!-- /.slider__image -->

                                            <div class="slider__icon">
                                                <img src="<?= get_template_directory_uri() ?>/assets/images/svg/arrow-download.svg" alt="">
                                            </div>
                                        </a>
                                    </div><!-- /.slider__slide -->
                                <?php endforeach; ?>
                            </div><!-- /.slider__slides -->

                            <div class="slider__navigation">
                                <div class="slider__arrow slider__arrow--prev">
                                    <img src="<?= get_template_directory_uri() ?>/assets/images/svg/arrow-right-white.svg" alt="">
                                </div><!-- /.slider__arrow -->
                                
                                <div class="slider__arrow slider__arrow--next">
                                    <img src="<?= get_template_directory_uri() ?>/assets/images/svg/arrow-right-white.svg" alt="">
                                </div><!-- /.slider__arrow -->
                            </div><!-- /.slider__navigation -->

                            <div class="slider__paging"></div><!-- /.slider__paging -->
                        </div><!-- /.slider__clip -->
                    </div><!-- /.slider js-slider -->
                </div><!-- /.section__slider -->
            </section><!-- /.section-gallery -->
        <?php endif; ?>

        <?php if( have_rows('content_block') ): ?>
		    <section class="section-details">
                <?php while ( have_rows('content_block') ) : the_row(); ?>
                    <div class="section__entry">
                        <div class="shell">
                            <div class="section__content">
                                <?php if(get_sub_field('title')): ?>
                                    <h3><?php the_sub_field('title'); ?></h3>
                                <?php endif; ?>
                                <?php the_sub_field('content'); ?>
                            </div><!-- /.section__content -->
                        </div><!-- /.shell -->
                    </div><!-- /.section__entry -->
                <?php endwhile; ?>
            </section><!-- /.section-details -->
        <?php endif; ?>

<?php get_footer(); ?>