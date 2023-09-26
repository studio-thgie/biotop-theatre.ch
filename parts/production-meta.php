<div class="section__icons">
    <ul>
        <?php if(get_field('genre', $pid)) : ?>
            <li>
                <!-- <img src="<?= get_template_directory_uri() ?>/assets/images/svg/theater-icon.svg" alt=""> -->
                <!-- <?= apply_filters('the_content', get_post_field('post_content', get_field('genre', $pid)->ID)); ?>-->
            </li>
        <?php endif; ?>
        
        <li>
            <div class="age-icon">
                <p><?php the_field('age', $pid); ?>+</p>
            </div><!-- /.age-icon -->
        </li>
        
        <li>
            <div class="duration-icon">
                <img src="<?= get_template_directory_uri() ?>/assets/images/svg/duration-icon.svg" alt="">
                
                <p><?php the_field('duration', $pid); ?></p>
            </div><!-- /.duration-icon -->
        </li>

        <?php if ( get_field('language', $pid) ) : ?>

        <?php

            if(get_field('override_language', $pid)) {
                $langs = get_field('override_language', $pid);
            } else {
                $langs = get_field('language', $pid);
            }

        ?>
        
        <li>
            <ul class="list-lang">
                <?php foreach ($langs as $key => $lang): ?>
                    <li><?= $lang ?></li>
                <?php endforeach; ?>
            </ul>
        </li>
            
        <?php endif; ?>

        <?php if(get_field('for_school')): ?>
            <li>
                <img src="<?= get_template_directory_uri() ?>/assets/images/svg/school-icon.svg" alt="">
            </li>
        <?php endif; ?>
    </ul>
</div><!-- /.section__icons -->