<div class="section__icons">
    
    <ul>
        <?php if(get_field('genre', $args['pid'])) : ?>
            <li>
                <i class="ico-theater">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.73997 12.7702C10.8221 12.7702 12.51 11.0823 12.51 9.00022C12.51 6.91811 10.8221 5.23022 8.73997 5.23022C6.65786 5.23022 4.96997 6.91811 4.96997 9.00022C4.96997 11.0823 6.65786 12.7702 8.73997 12.7702Z" fill="currentColor"/>
                        <path d="M8.73999 15.8599V2.13989" stroke="currentColor" stroke-width="2"/>
                        <path d="M8.73998 4.02001C9.77828 4.02001 10.62 3.17831 10.62 2.14001C10.62 1.10171 9.77828 0.26001 8.73998 0.26001C7.70169 0.26001 6.85999 1.10171 6.85999 2.14001C6.85999 3.17831 7.70169 4.02001 8.73998 4.02001Z" fill="currentColor"/>
                        <path d="M8.73998 17.7402C9.77828 17.7402 10.62 16.8985 10.62 15.8602C10.62 14.8219 9.77828 13.9802 8.73998 13.9802C7.70169 13.9802 6.85999 14.8219 6.85999 15.8602C6.85999 16.8985 7.70169 17.7402 8.73998 17.7402Z" fill="currentColor"/>
                        <path d="M13.59 13.8501L3.89001 4.15015" stroke="currentColor" stroke-width="2"/>
                        <path d="M3.89001 6.02978C4.92831 6.02978 5.77001 5.18807 5.77001 4.14978C5.77001 3.11148 4.92831 2.26978 3.89001 2.26978C2.85171 2.26978 2.01001 3.11148 2.01001 4.14978C2.01001 5.18807 2.85171 6.02978 3.89001 6.02978Z" fill="currentColor"/>
                        <path d="M13.59 15.73C14.6283 15.73 15.47 14.8883 15.47 13.85C15.47 12.8117 14.6283 11.97 13.59 11.97C12.5517 11.97 11.71 12.8117 11.71 13.85C11.71 14.8883 12.5517 15.73 13.59 15.73Z" fill="currentColor"/>
                        <path d="M15.6 9.00024H1.88" stroke="currentColor" stroke-width="2"/>
                        <path d="M1.88 10.8799C2.9183 10.8799 3.76 10.0382 3.76 8.99987C3.76 7.96158 2.9183 7.11987 1.88 7.11987C0.841705 7.11987 0 7.96158 0 8.99987C0 10.0382 0.841705 10.8799 1.88 10.8799Z" fill="currentColor"/>
                        <path d="M15.6 10.8799C16.6383 10.8799 17.48 10.0382 17.48 8.99987C17.48 7.96158 16.6383 7.11987 15.6 7.11987C14.5617 7.11987 13.72 7.96158 13.72 8.99987C13.72 10.0382 14.5617 10.8799 15.6 10.8799Z" fill="currentColor"/>
                        <path d="M13.59 4.15015L3.89001 13.8501" stroke="currentColor" stroke-width="2"/>
                        <path d="M3.89001 15.73C4.92831 15.73 5.77001 14.8883 5.77001 13.85C5.77001 12.8117 4.92831 11.97 3.89001 11.97C2.85171 11.97 2.01001 12.8117 2.01001 13.85C2.01001 14.8883 2.85171 15.73 3.89001 15.73Z" fill="currentColor"/>
                        <path d="M13.59 6.02978C14.6283 6.02978 15.47 5.18807 15.47 4.14978C15.47 3.11148 14.6283 2.26978 13.59 2.26978C12.5517 2.26978 11.71 3.11148 11.71 4.14978C11.71 5.18807 12.5517 6.02978 13.59 6.02978Z" fill="currentColor"/>
                    </svg>

                    <span>
                        <?= strip_tags(apply_filters('the_content', get_post_field('post_content', get_field('genre', $args['pid'])->ID)),'<br>') ?>
                    </span>
                </i>
            </li>
        <?php endif; ?>
        
        <li>
            <div class="age-icon">
                <p><?php the_field('age', $args['pid']); ?>+</p>
            </div><!-- /.age-icon -->
        </li>
        
        <li>
            <div class="duration-icon">
                <img src="<?= get_template_directory_uri() ?>/assets/images/svg/duration-icon.svg" alt="">
                
                <p><?php the_field('duration', $args['pid']); ?></p>
            </div><!-- /.duration-icon -->
        </li>

        <?php if ( get_field('language', $args['pid']) ) : ?>

        <?php

            if(get_field('override_language', $args['pid'])) {
                $langs = get_field('override_language', $args['pid']);
            } else {
                $langs = get_field('language', $args['pid']);
            }

        ?>
        
        <li>
            <div class="list-lang">
                <div class="list-lang__inner">
                <?php foreach ($langs as $key => $lang): ?>
                    <span><?= $lang ?></span>
                <?php endforeach; ?>
                </div><!-- /.list-lang__inner -->
            </div>
        </li>
            
        <?php endif; ?>

        <?php if(get_field('for_school')): ?>
            <li>
                <img src="<?= get_template_directory_uri() ?>/assets/images/svg/school-icon.svg" alt="">
            </li>
        <?php endif; ?>
    </ul>
</div><!-- /.section__icons -->