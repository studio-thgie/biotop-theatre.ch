<?php get_header(); ?>

        <?php
 
            if( have_rows('content') ):
            
                while ( have_rows('content') ) : the_row();
            
                    if( get_row_layout() == 'header' ): ?>
                        <div class="block-title">
                            <div class="shell">
                                <h2><?= get_sub_field('text'); ?></h2>
                            </div><!-- /.shell -->
                        </div><!-- /.block-title -->
                    <?php endif;
                            
                    if( get_row_layout() == 'ticker' ): ?>
                        <section class="section-image-content">
                            <div class="block-marquee js-marquee">
                                <div class="block__text">
                                    <h3><?= get_sub_field('text'); ?></h3>
                                </div><!-- /.block__text js-marquee -->
                            </div><!-- /.block-marquee -->
                        </section><!-- /.section-image-content -->
                    <?php endif;
                
                    if( get_row_layout() == 'productions_slideshow' ): ?>
                        <?php 
                            $productions = get_sub_field('productions');
                            if( $productions ): ?>
                                <section class="section-image-content">
                                    <div class="slider-hero js-slider-hero">
                                        <div class="slider__clip swiper">
                                            <div class="slider__slides swiper-wrapper">
                                            <?php foreach( $productions as $production ):
                                                $pid = url_to_postid( $production ); ?>
                                                <div class="slider__slide swiper-slide">
                                                    <a href="<?= esc_url( $production ); ?>">
                                                        <div class="shell">
                                                            <?php if ( has_post_thumbnail( $pid ) ) : ?>
                                                                <div class="slider__back">
                                                                <img src="<?= get_the_post_thumbnail_url( $pid ); ?>" alt="">
                                                                </div><!-- /.slider__back -->
                                                            <?php endif; ?>
                                                        
                                                            <div class="slider__title" data-swiper-parallax="-50%">
                                                                <h1><?= get_the_title( $pid ) ?></h1>
                                                            </div><!-- /.slider__title -->
                                                        </div><!-- /.shell -->
                                                    </a>
                                                </div><!-- /.slider__slide -->
                                            <?php endforeach; ?>
                                        </div><!-- /.slider__slides -->
                                    </div><!-- /.slider__clip -->
                                </div><!-- /.slider js-slider -->
                            </section><!-- /.section-image-content -->
                        <?php endif; ?>
                    <?php endif;
            
                    if( get_row_layout() == 'text' ): ?>
                        <section class="section-content">
                            <div class="shell">
                                <div class="section__content">
                                    <?= get_sub_field('text'); ?>
                                </div><!-- /.section__content -->
                            </div><!-- /.shell -->
                        </section><!-- /.section-image-content -->
                    <?php endif;
            
                    if( get_row_layout() == 'image' ): ?>
                        <section class="section-image-content">
                            <div class="section__image">
                                <?php 
                                    $image = get_sub_field('image');
                                    $size = 'full';
                                    if( $image ) {
                                        echo wp_get_attachment_image( $image, $size );
                                    }
                                ?>
                            </div><!-- /.section__image -->
                        </section><!-- /.section-image-content -->
                    <?php endif;
                    
                    if( get_row_layout() == 'gallery' ): ?>
                        <section class="section-gallery">
                            <div class="section__slider">
                                <div class="slider-gallery js-slider-gallery">
                                    <div class="slider__clip swiper">
                                        <div class="slider__slides swiper-wrapper">
                                            <?php foreach (get_sub_field('images') as $key => $image): ?>
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
                    <?php endif;
            
                    if( get_row_layout() == 'page_links' ): ?>
                        <section class="section-image-content">
                            <section class="section-nav">
                            <?php 
                                $pages = get_sub_field('pages');
                                if( $pages ): ?>
                                    <?php foreach( $pages as $page ): ?>
                                        <li>
                                            <?php
                                                $link_colors = ['yellow', 'pink', 'purple'];
                                                $link_color = $link_colors[array_rand($link_colors)];
                                            ?>
                                            <div class="section__menu section__menu--<?= $link_color; ?>">
                                                <div class="section__item">
                                                    <div class="shell">
                                                        <a href="<?= esc_url( $page ) ?>">
                                                            <h2><?= get_the_title( url_to_postid( $page ) ) ?></h2>
                                                
                                                            <img src="<?= get_template_directory_uri() ?>/assets/images/svg/arrow-right.svg" alt="">
                                                        </a>
                                                    </div><!-- /.shell -->
                                                </div><!-- /.section__item -->
                                            </div><!-- /.section__menu -->
                                        </li>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </section><!-- /.section-nav -->
                        </section><!-- /.section-image-content -->
                    <?php endif;
            
                    if( get_row_layout() == 'page_previews' ): ?>
                        <div class="section-events">
                        <?php 
                            $pages = get_sub_field('pages');
                            if( $pages ): ?>
                                <?php foreach( $pages as $page ):
                                    $pid = url_to_postid( $page ) ?>
                                    <div class="section__event">
                                        <?php if ( has_post_thumbnail( $pid ) ) : ?>
                                            <div class="section__image section__image--large">
                                                <img src="<?= get_the_post_thumbnail_url( $pid ); ?>" alt="">
                                            </div><!-- /.section__image -->
                                        <?php endif; ?>
                                        
                                        <?php
                                            $link_colors = [''];

                                            if(get_sub_field('colored')) {
                                                $link_colors = ['', 'section__wrapper--yellow', 'section__wrapper--pink', 'section__wrapper--purple'];
                                            }

                                            $link_color = $link_colors[array_rand($link_colors)];
                                        ?>
                                        <div class="section__wrapper <?= $link_color; ?>">
                                            <div class="shell">
                                                <a href="<?= esc_url( $page ) ?>">
                                                    <h2><?= get_the_title( $pid ) ?></h2>
                                                    
                                                    <img src="<?= get_template_directory_uri() ?>/assets/images/svg/arrow-right.svg" alt="">
                                                </a>
                                            </div><!-- /.shell -->
                                        </div><!-- /.section__wrapper -->
                                    </div><!-- /.section__event -->
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div><!-- /.section-events -->
                    <?php endif;
            
                endwhile;
            
            else :
                print('Nothing to show here.');
            endif;

        ?>

<?php get_footer(); ?>