<?php

    /*

    Template Name: Team
    
    */

    get_header();

?>

        <div class="block-title">
			<div class="shell">
				<h2><?php the_title(); ?></h2>
			</div><!-- /.shell -->
		</div><!-- /.block-title -->

		<section class="section-team">
            <?php if ( has_post_thumbnail() ) : ?>
                <div class="section__image">
                    <img src="<?= get_the_post_thumbnail_url(); ?>" alt="">
                </div><!-- /.section__image -->
            <?php endif; ?>

            <?php
            
                global $sitepress;
                $loop = new WP_Query( array(
                    'post_type' => 'Member',
                    'posts_per_page' => -1,
                    'order'          => 'ASC',
                    'orderby'        => 'menu_order'
                ) );

            ?>

			<div class="section__cards">
				<div class="cards-team">
					<div class="cards__items">

                        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                            <div class="cards__item">
                                <div class="card-team">
                                    <?php if( has_post_thumbnail() ): ?>
                                        <div class="card__image">
                                            <?php the_post_thumbnail( 'team-member' ); ?>
                                        </div><!-- /.card__image -->
                                    <?php endif; ?>

                                    <div class="card__container">
                                        <div class="card__title">
                                            <h3><?php the_title(); ?></h3>
                                        </div><!-- /.card__title -->
                                        
                                        <div class="card__wrapper">
                                            <?php if(get_field('function')): ?>
                                                <h3><?php the_field('function'); ?></h3>
                                            <?php endif; ?>
                                            <?php if(get_field('title')): ?><span class="g-team-member__meta-title">
                                                <p><?php the_field('title'); ?></p>
                                            </span><?php endif; ?>
                                            <?php if(get_field('email')): ?><span class="g-team-member__meta-email">
                                                <a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a>
                                            </span><?php endif; ?>
                                            <?php if(get_field('phone')): ?><span class="g-team-member__meta-phone">
                                                <a href="tel:<?php the_field('phone'); ?>"><?php the_field('phone'); ?></a>
                                            </span><?php endif; ?>
                                        </div><!-- /.card__wrapper -->

                                        <?php if(get_field('biopgraphy')): ?>
                                        <div class="card__content js-content">
                                            <?php get_field('biography'); ?>
                                        </div><!-- /.card__content -->

                                        <div class="card__actions js-expand">
                                            <a href="#" class="btn btn--red btn--small"><?php _e( 'more', 'biotop' ); ?></a>
                                        </div><!-- /.card__actions -->
                                        <?php endif; ?>
                                    </div><!-- /.card__container -->
                                </div><!-- /.card-team -->
                            </div><!-- /.cards__item -->
                        <?php endwhile; ?>
					</div><!-- /.cards__items -->
				</div><!-- /.cards-team -->
			</div><!-- /.section__cards -->
		</section><!-- /.section-team -->

<?php get_footer(); ?>