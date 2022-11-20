<?php get_header('lower-page') ?>
<!--ヘッダー-->
<main class="p-main--lower-page">
    <div class="p-works__container--lower-page">
        <!--中央部分のwrapper-->
        <article class="p-works__wrapper--lower-page">
            <h2 class="p-works__heading2__English--lower-page">Works<span class="p-works__heading2__Japanese--lower-page">制作実績</span></h2>
            <div class="<?php if (has_tag('web-site')){ echo "p-works__heading3__lower-page__wrapper--web-site"; }else{echo "p-works__heading3__lower-page__wrapper--design"; } ?>">
                <h3 class="p-works__heading3--lower-page">
                    <!--スマホとそれ以外とで表示を変える-->
                    <?php if(is_mobile()): ?>
                        <?php the_title(); ?>
                    <?php else: ?>
                        <?php the_title_attribute(); ?>
                    <?php endif; ?>
                </h3>
                <span class="c-works__role"><?php if(has_tag('Design')){echo 'Design';}elseif(has_tag('Coding')){echo 'Coding';}else{echo 'Coding&amp;Design';}?></span>
            </div>
             <!--タグにWeb-siteがある時かどうかでクラス名を変える-->
             <a class= "<?php if (has_tag('Web-site')){echo "p-link__work--web-site"; } else { echo "p-link__work--design"; } ;?>" href="<?php echo esc_url(post_custom('URL')); ?>">Webサイトへ移動する&gt;</a>
            <?php
            //カスタムフィールドの変数File Upload Topのオブジェクトを取得
            $image_top = wp_get_attachment_image_src(get_post_meta($post->ID,'File Upload Top',true),'full');
            //カスタムフィールドの変数Image Top Altを取得
            //$image_alt = wp_get_attachment_image_src(get_post_meta($post->ID,'File Upload Top',true),'full');
            ?>
            <!--タグによってクラス名を分岐 $image[0]に入っている画像のURLを表示 -->
            <img class="<?php if(has_tag('web-site')){echo "p-works__thumbnail--web-site";
            }elseif(has_tag('Design') && has_tag('rectangle')){
                echo "p-works__thumbnail--rectangle-design";
            }elseif(has_tag('Design') && has_tag('square')){
                echo "p-works__thumbnail--square-design";
            }elseif(has_tag('logo')){
                echo "p-works__thumbnail--logo";
            }?>"
            src="<?php echo esc_url($image_top[0]); ?>" alt="<?php echo post_custom('Top Image Alt'); ?>">
            <?php 
                //タグによって出力の分岐 has_tag(['Design','rectangle'])
                if(has_tag('Web-site')){
                    echo '<div class="p-works__thumbnail__box--web-site"></div>';
                }elseif(has_tag('Design') && has_tag('rectangle')){
                    echo '<div class="p-works__thumbnail__box--rectangle-banner"></div>';
                }elseif(has_tag('Design') && has_tag('square')){
                    echo '<div class="p-works__thumbnail__box--square-banner"></div>';
                }
            ?>
            <div class="p-works__content__text__wrapper">
                <?php 
                    //本文記事の取得
                    $content_string = get_the_content();
                    //置き換え対象の指定
                    $target = array('<p>',
                                    'wp-block-quote',
                                    '・水色・青・黄緑、自然で清潔なイメージ<br>・誠実、やさしさ、ホスピタリティ、すっきりとしたデザイン<br>・よくある「太めの丸ゴシック」にはしたくない。',
                                    //'・水色・青・黄緑、自然で清潔なイメージ<br>・誠実、やさしさ、ホスピタリティ、すっきりとしたデザイン<br>・よくある「太めの丸ゴシック」にはしたくない。<br><br>',
                                    '<p class="p-works__content__text">ミライニは、「明るい未来に向けて薬局としての役割を果たす」という「未来に」を、読みやすさとすっきりとした文字のカタカナで表現。</p>',
                                    '<p class="p-works__content__text">病院の先生とは違う、薬の専門家として「薬のことを相談しやすい」「気軽に質問できる」ホスピタリティを目指す。</p>');
                    //置き換え後の文字
                    $replace = array('<p class="p-works__content__text"><span class="u-margin-16px"></span>',
                                    'p-quote__wrapper',
                                    '<ul class="p-quote__list__wrapper"><li class="p-quote__list">・水色・青・黄緑、自然で清潔なイメージ</li><li class="p-quote__list">・誠実、やさしさ、ホスピタリティ、すっきりとしたデザイン</li><li class="p-quote__list">・よくある&#12300;太めの丸ゴシック&#12301;にはしたくない。</li></ul>',
                                    //'<ul class="p-quote__list__wrapper"><li class="p-quote__list">・水色・青・黄緑、自然で清潔なイメージ</li><li class="p-quote__list">・誠実、やさしさ、ホスピタリティ、すっきりとしたデザイン</li><li class="p-quote__list">・よくある&#12300;太めの丸ゴシック&#12301;にはしたくない。</li></ul>',
                                    '<p class="p-quote__text"><span class="u-margin-16px"></span>ミライニは、&#12300;明るい未来に向けて薬局としての役割を果たす&#12301;という&#12300;未来に&#12301;を、読みやすさとすっきりとした文字のカタカナで表現。</p>',
                                    '<p class="p-quote__text--last">病院の先生とは違う、薬の専門家として&#12300;薬のことを相談しやすい&#12301;&#12300;気軽に質問できる&#12301;ホスピタリティを目指す。</p>');
                    $content_string = str_replace($target,$replace,$content_string); 
                    echo esc_html($content_string);
                ?>
            </div>
        </article>
        <!--両サイドの装飾-->
        <div class="p-lower-page__side--left"></div>
        <div class="p-lower-page__side--right"></div>
    </div>
    <div class="<?php if(has_tag(('web-site'))){ echo "p-works__design__container"; }else{ echo "p-works__design__container--none"; }?>">
        <div class="p-works__desing__wrapper">
            <div class="p-works__design__inner">
                <?php
                $image_all = wp_get_attachment_image_src(get_post_meta($post->ID,'File Upload All',true),'full');
                ?>
                <img class="p-works__design--portfolio" src="<?php echo esc_url($image_all[0]); ?>" alt="<?php echo post_custom('All Image Alt'); ?>" loading="lazy">
            </div>
            <!--疑似的なpaddingのためのbox-->
            <div class="p-works__desing__box"></div>
        </div>
        <div class="p-lower-page__side--left"></div>
        <div class="p-lower-page__side--right"></div>
    </div>
</main>
<?php get_footer('lower-page'); ?>

