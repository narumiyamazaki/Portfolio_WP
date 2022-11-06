<?php get_header('lower-page') ?>
<!--ヘッダー-->
<main class="p-main--lower-page">
    <div class="p-works__container--lower-page">
        <!--中央部分のwrapper-->
        <article class="p-works__wrapper--lower-page">
            <h2 class="p-works__heading2__English--lower-page">Works<span class="p-works__heading2__Japanese--lower-page">制作実績</span></h2>
            <div class="p-works__heading3__lower-page__wrapper--web-site">
                <h3 class="p-works__heading3--lower-page">
                    <?php the_title_attribute(); ?>
                </h3>
                <span class="c-works__role"><?php if(has_tag('Design')){echo 'Design';}elseif(has_tag('Coding')){echo 'Coding';}else{echo 'Coding&amp;Design';}?></span>
            </div>
            <!--タグにWeb-siteがある時かどうかでクラス名を変える-->
            <a class= "<?php if (has_tag('Web-site')){echo "p-link__work--web-site"; } else { echo "p-link__work--design"; } ;?>" href="<?php echo esc_url(post_custom('URL')); ?>">Webサイトへ移動する&gt;</a>
            <?php
            $image_top = wp_get_attachment_image_src(get_post_meta($post->ID,'File Upload Top',true),'full');
            ?>
            <img class="p-works__thumbnail--web-site" src="<?php echo esc_url($image_top[0]); ?>" alt="ポートフォリオサイトビジュアル部分">
            <?php
            ?>
            <div class="p-works__thumbnail__box"></div>
            <div class="p-works__content__text__wrapper">
                <?php 
                    //本文記事の取得
                    $content_string = get_the_content();
                    $content_string = str_replace('<p>','<p class="p-works__content__text"><span class="u-margin-16px"></span>',$content_string); 
                    echo $content_string;
                ?>
            </div>
        </article>
        <!--両サイドの装飾-->
        <div class="p-lower-page__side--left"></div>
        <div class="p-lower-page__side--right"></div>
    </div>
    <div class="p-works__design__container">
        <div class="p-works__desing__wrapper">
            <div class="p-works__design__inner">
                <?php
                $image_all = wp_get_attachment_image_src(get_post_meta($post->ID,'File Upload All',true),'full');
                ?>
                <img class="p-works__design--portfolio" src="<?php echo esc_url($image_all[0]); ?>" alt="ポートフォリオサイトデザイン全体" loading="lazy">
            </div>
            <!--疑似的なpaddingのためのbox-->
            <div class="p-works__desing__box"></div>
        </div>
        <div class="p-lower-page__side--left"></div>
        <div class="p-lower-page__side--right"></div>
    </div>
</main>
<?php get_footer('lower-page'); ?>

