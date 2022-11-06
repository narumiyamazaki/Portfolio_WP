<a class="p-works__card"  href="<?php echo esc_url(get_post_permalink())?>">
    <div class="p-works__card__image__wrapper">
        <?php $url = wp_get_attachment_url( get_post_thumbnail_id($my_query->ID) ); ?>
        <?php echo ('<div class="p-works__card__image" style="background-image: url('. $url.')"></div>'); ?>    
        <span class="c-works__card__role"><?php if(has_tag('Design')){echo 'Design';}elseif(has_tag('Coding')){echo 'Coding';}else{echo 'Coding&amp;Design';}?></span>
    </div>
    <?php the_title('<h3 class="p-works__card__caption">','</h3>'); ?>
</a>