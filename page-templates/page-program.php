<?php

    /*

    Template Name: Program
    
    */

    get_header();

?>

        <div class="block-title">
			<div class="shell">
				<h2><?php the_title(); ?></h2>
			</div><!-- /.shell -->
		</div><!-- /.block-title -->


        <section class="section-list">
            
            <?php

                if(ICL_LANGUAGE_CODE == 'de'){
                    $field_key = "field_5d5d84522b866";
                } else {
                    $field_key = "field_5d5d84e72cb5b";
                }

                $field = get_field_object($field_key);

                if($field):

            ?>

			<div class="section__filters">
				<div class="shell">
					<ul class="list-filters">
                        <?php if(isset($_GET['category'])) : ?>
                            <li>
                                <a href="?">&nbsp;X&nbsp;</a>
                            </li>
                        <?php endif; ?>
                        <?php foreach( $field['choices'] as $k => $v ): ?>
                            <li <?= $k == 'incubo' ? 'class="list__item-blue"' : '' ?> <?= $k == 'hors-saison' ? 'class="list__item-black"' : '' ?>>
                                <a href="?category=<?= $k ?>"><?= $v ?></a>
                            </li>
                        <?php endforeach; ?>
						
						<li>
							<a href="?school"><?php _e( 'school', 'biotop' ); ?></a>
						</li>
					</ul><!-- /.list-filters -->
				</div><!-- /.shell -->
			</div><!-- /.section__filters -->

            <?php endif; ?>

            <?php

                $query = array(
                    'post_type' => 'Events',
                    'posts_per_page' => -1,
                    'meta_query' 		=> array(
                        array(
                            'key'			=> 'date_and_time',
                            'compare'		=> '>=',
                            'value'			=> date('Y-m-d H:i:s'),
                            'type'			=> 'DATETIME'
                        ),
                    ),
                    'order'				=> 'ASC',
                    'orderby'			=> 'meta_value',
                    'meta_key'			=> 'date_and_time',
                    'meta_type'			=> 'DATETIME'
                );

                $loop = new WP_Query( $query );

            ?>

            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

            <?php

                $p = get_field('production');
                $v = get_field('venue');

                // todo: hack to work with test data
                if(is_string($p)) {
                    continue;
                }

                if(isset($_GET['category'])){
                    if($_GET['category'] != 'school'){
                        $_cat = get_field_object('event_category', $p->ID);
                        if($_cat['value']['value'] !== $_GET['category'] && $_GET['category'] != 'all'){
                            continue;
                        }
                    }
                    if($_GET['category'] == 'school'){
                        if(!get_field('for_school')) {
                            continue;
                        }
                    }
                }

            ?>

                <div class="section__entry <?= get_field('event_category', $p->ID)['value'] == 'incubo' ? 'section__entry--blue' : '' ?> <?= get_field('event_category', $p->ID)['value'] == 'hors-saison' ? 'section__entry--white' : '' ?>">
				<div class="shell">
					<div class="card-event">
						<div class="card__tags">
							<ul>
                                <?php if(get_field('event_category', $p->ID)): ?>
                                    <li><?= get_field('event_category', $p->ID)['label']; ?></li>
                                <?php endif; ?>
                                <?php if(get_field('premiere')): ?>
                                    <li><?= _e('premiere', 'biotop'); ?></li>
                                <?php endif; ?>
								
							</ul>
						</div><!-- /.card__tags -->

                        <?php 
                            $date = strtotime(get_field('date_and_time'));
                            $from = strtotime(get_field('time_start'));
                            $until = strtotime(get_field('time_end'));
                        ?>

						<div class="card__time">
							<p>
                                <?php echo date_i18n('d.m.Y', $date); ?>
                            </p>
							<p>
                                <?php if(get_field('time_start')): ?>
                                    <?php echo date_i18n('H:i', $from); ?> 
                                    <?php if(get_field('time_end')): ?>
                                        - <?php echo date_i18n('H:i', $until); ?> 
                                    <?php endif; ?>
                                    <?php if(ICL_LANGUAGE_CODE == 'de'): ?>
                                        Uhr
                                    <?php endif; ?>
                                <?php else: ?>
                                    <?php echo date_i18n('H:i', $date); ?>
                                    <?php if(ICL_LANGUAGE_CODE == 'de'): ?>
                                        Uhr
                                    <?php endif; ?>
                                <?php endif; ?>
                            </p>
						</div><!-- /.card__time -->

						<div class="card__wrapper">
							<div class="card__title">
								<h2>
                                    <a href="<?= get_permalink( $p->ID ); ?>">
                                        <?php if(get_field('override_title')): ?>
                                            <?= get_field('override_title'); ?>
                                        <?php else: ?>
                                            <?= get_the_title( $p->ID ); ?>
                                        <?php endif; ?>
                                    </a>
                                </h2>
							</div><!-- /.card__title -->

                            <?php if ( get_field('language', $p->ID) ) : ?>

                                <?php

                                    if(get_field('override_language')) {
                                        $langs = get_field('override_language');
                                    } else {
                                        $langs = get_field('language', $p->ID);
                                    }

                                ?>

                                <div class="card__lang">
                                    <div class="list-lang">
                                        <div class="list-lang__inner">
                                        <?php foreach ($langs as $key => $lang): ?>
                                            <span><?= $lang ?></span>
                                        <?php endforeach; ?>
                                        </div><!-- /.list-lang__inner -->
                                    </div>
                                </div><!-- /.card__lang -->
                            
                            <?php endif; ?>
						</div><!-- /.card__wrapper -->
							
						<div class="card__content">
							<p>
                                <?php if(get_field('override_subtitle')): ?>
                                    <?php the_field('override_subtitle'); ?>
                                <?php else: ?>
                                    <?php the_field('subtitle', $p->ID); ?>
                                <?php endif; ?>
                            </p>
						</div>

						<div class="card__entry">
							<div class="card__list">
								<ul>
									<li><?= get_the_title( $v->ID ); ?></li>
									<li><?php the_field('city', $v->ID ); ?></li>
								</ul>
							</div><!-- /.card__list -->
							
							<div class="card__info">
								<ul>
                                    <?php if(get_field('premiere')): ?>
                                        <li>
                                            <img src="<?= get_template_directory_uri() ?>/assets/images/svg/Premiere.svg" alt="" style="height: 30px">
                                        </li>
                                    <?php endif; ?>
									<li>
										<div class="age-icon">
											<p><?php the_field('age', $p->ID); ?>+</p>
										</div><!-- /.age-icon -->
									</li>
									
									<li>
										<div class="duration-icon">
											<img src="<?= get_template_directory_uri() ?>/assets/images/svg/duration-icon.svg" alt="">
											<p><?php the_field('duration', $p->ID); ?></p>
										</div><!-- /.duration-icon -->
									</li>

                                    <?php if(get_field('brunch')): ?>
                                        <i class="ico-superscript">
											Plus
											<sup>Brunch</sup>
										</i>
                                    <?php endif; ?>

                                    <?php if(get_field('apero')): ?>
                                        <li>
                                            <img src="<?= get_template_directory_uri() ?>/assets/images/svg/Apero.svg" alt="" style="height: 30px">
                                        </li>
                                    <?php endif; ?>

                                    <?php if(get_field('transport')): ?>
                                        <li>
                                            <img src="<?= get_template_directory_uri() ?>/assets/images/svg/bus-icon.svg" alt="">
                                        </li>
                                    <?php endif; ?>

                                    <?php if(get_field('for_school')): ?>
                                        <li>
                                            <img src="<?= get_template_directory_uri() ?>/assets/images/svg/school-icon.svg" alt="">
                                        </li>
                                    <?php endif; ?>

                                    <?php if(get_field('atelier')): ?>
                                        
                                        <li>
                                            <img src="<?= get_template_directory_uri() ?>/assets/images/svg/Atelier.svg" alt="" style="height: 30px">
                                        </li>
                                    <?php endif; ?>

                                    <?php if(get_field('backstage')): ?>
                                        
                                        <li>
                                            <img src="<?= get_template_directory_uri() ?>/assets/images/svg/Backstage.svg" alt="" style="height: 30px">
                                        </li>
                                    <?php endif; ?>
								</ul>
							</div><!-- /.card__info -->
						</div><!-- /.card__entry -->

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
                            <div class="card__actions">
                                <a href="<?php echo $link; ?>" target="<?php echo $target; ?>" class="btn btn--block">Tickets</a>
                            </div><!-- /.card__actions -->
                        <?php endif; ?>

                        <?php if(get_field('canceled')): ?>
                            <div class="card__badge card__badge--red-back <?= !in_array(get_field('event_category', $p->ID)['value'], ['incubo', 'hors-saison']) ? 'card__badge--yellow-font' : '' ?>">
							<span>
                                <?php _e('canceled', 'biotop') ?>
							</span>
						</div><!-- /.card__badge -->
                        <?php endif; ?>

                        <?php if(get_field('postponed')): ?>
                            <div class="card__badge card__badge--red-back <?= !in_array(get_field('event_category', $p->ID)['value'], ['incubo', 'hors-saison']) ? 'card__badge--yellow-font' : '' ?>">
							<span>
                                <?php _e('postponed', 'biotop') ?>
							</span>
						</div><!-- /.card__badge -->
                        <?php endif; ?>

                        <?php if(get_field('sold')): ?>
                            <div class="card__badge <?= get_field('event_category', $p->ID)['value'] == 'incubo' ? 'card__badge--blue-back' : '' ?> <?= !in_array(get_field('event_category', $p->ID)['value'], ['incubo', 'hors-saison']) ? 'card__badge--yellow-font' : '' ?>">
							<span <?= get_field('event_category', $p->ID)['value'] == 'incubo' ? 'style="border: 1px solid white;"' : '' ?>>
                                <?php _e('sold', 'biotop') ?>
							</span>
						</div><!-- /.card__badge -->
                        <?php endif; ?>

					</div><!-- /.card-event -->
				</div><!-- /.shell -->
			</div><!-- /.section__entry -->

            <?php endwhile; wp_reset_query(); ?>

		</section><!-- /.section-list -->

<?php get_footer(); ?>
