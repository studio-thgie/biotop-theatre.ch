<?php get_header(); ?>

        <div class="block-title">
			<div class="shell">
				<h2><?php the_title(); ?></h2>
			</div><!-- /.shell -->
		</div><!-- /.block-title -->

		<section class="section-image-content">

        <?php
 
            if( have_rows('content') ):
            
                while ( have_rows('content') ) : the_row();
            
                    if( get_row_layout() == 'text' ): ?>
                        <div class="section__wrapper">
                            <div class="shell">
                                <div class="section__content">
                                    <?= get_sub_field('text'); ?>
                                </div><!-- /.section__content -->
                            </div><!-- /.shell -->
                        </div><!-- /.section__wrapper -->
                    <?php endif;
            
                    if( get_row_layout() == 'image' ): ?>
                        <div class="section__image">
                            <?php 
                                $image = get_sub_field('image');
                                $size = 'full';
                                if( $image ) {
                                    echo wp_get_attachment_image( $image, $size );
                                }
                            ?>
                        </div><!-- /.section__image -->
                    <?php endif;
            
                    if( get_row_layout() == 'gallery' ): ?>
                        
                    <?php endif;
            
                    if( get_row_layout() == 'links' ): ?>
                        <section class="section-nav">
                        <?php 
                            $links = get_sub_field('links');
                            if( $links ): ?>
                                <?php foreach( $links as $link ): ?>
                                    <li>
                                        <?php
                                            $link_colors = ['yellow', 'pink', 'purple'];
                                            $link_color = $link_colors[array_rand($link_colors)];
                                        ?>
                                        <div class="section__menu section__menu--<?= $link_color; ?>">
                                            <div class="section__item">
                                                <div class="shell">
                                                    <a href="<?= $link['link'] ?>">
                                                        <h2><?= get_the_title( url_to_postid( $link['link'] ) ) ?></h2>
                                            
                                                        <img src="<?= get_template_directory_uri() ?>/assets/images/svg/arrow-right.svg" alt="">
                                                    </a>
                                                </div><!-- /.shell -->
                                            </div><!-- /.section__item -->
                                        </div><!-- /.section__menu -->
                                    </li>
                                <?php endforeach; ?>
                        <?php endif; ?>
                        </section><!-- /.section-nav -->
                    <?php endif;
            
                endwhile;
            
            else :
                print('Nothing to show here.');
            endif;

        ?>
			
		</section><!-- /.section-image-content -->

<?php get_footer(); ?>