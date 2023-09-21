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

                <?php if(get_field('new', $pid)): ?>
                    <span>Neu Nouveau</span>
                <?php endif; ?>
            </a>
        </div><!-- /.shell -->
    </div><!-- /.section__wrapper -->
</div><!-- /.section__event -->