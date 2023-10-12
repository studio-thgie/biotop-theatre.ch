<?php

    /*

    Template Name: Tickets
    
    */

    get_header();

?>

        <?php

            $event = get_post($_GET['id']);

            $p = get_field('production', $event->ID);
            $v = get_field('venue', $event->ID);
            $pid = $p->ID;

        ?>

        <div class="block-title">
			<div class="shell">
				<h2>
                    <a href="<?= get_permalink( $pid ); ?>">
                        <?= get_the_title( $pid ); ?>
                    </a>
                </h2>
			</div><!-- /.shell -->
		</div><!-- /.block-title -->

		<section class="section-tickets">
            <?php if ( has_post_thumbnail( $pid ) ) : ?>
                <div class="section__image">
                    <?= get_the_post_thumbnail( $pid ); ?>
                </div><!-- /.section__image -->
            <?php endif; ?>

			<div class="section__container">
				<div class="section__entry section__entry--border">
					<div class="shell">
                        <?php if(get_field('subtitle', $pid)): ?>
                            <div class="section__title">
                                <h3><?php the_field('subtitle', $pid); ?></h3>
                            </div><!-- /.section__title -->
                        <?php endif; ?>
					
						<div class="section__info">
                            <?php get_template_part('parts/production-meta', null, ['pid' => $pid, 'eid' => $event->ID]); ?>
						</div><!-- /.section__info -->
					</div><!-- /.shell -->
				</div><!-- /.section__entry -->
				
                <div class="section__list">
					<div class="shell">
                        <script>
                
                            var reservation_event = '<?php echo get_the_title( $p->ID ) . ', ' . date_i18n('d. F Y', $date) . ' - ' . date_i18n('H:i', $date); ?>';
                        
                        </script>
                        <?php if(get_field('ticketpark', $event->ID)): ?>
                            <script type="text/javascript">
                                    var _tp_language = "<?php echo ICL_LANGUAGE_CODE; ?>";
                            </script>
                            <script src="https://user.ticketpark.ch/embed/js/ticketing/event/<?php the_field('ticketpark', $event->ID); ?>" type="text/javascript"></script>

                        <?php else: ?>
                            <?php the_content(); ?>
                        <?php endif; ?>
					</div><!-- /.shell -->
				</div><!-- /.section__list -->
				
			</div><!-- /.section__container -->
		</section><!-- /.section-tickets -->

<?php get_footer(); ?>