<a class="p-works__card"  href="<?php echo esc_url(get_permalink())?>">
    <div class="p-works__card__image--portfolio">
    <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
    <?php echo '<div style="background-image: url('. $url.')"></div>'; ?>    
    <span class="c-works__card__role">Design&amp;Coding</span>
    </div>
    <?php the_title('<h3 class="p-works__card__caption">','</h3>'); ?>
</a>