<?php get_header(); ?>
        <main class="l-main">
            <!--MV TB・PC-->
            <h1 class="p-heading1">
                <img class="p-main-visual" src="<?php echo esc_url(get_theme_file_uri('img/MV.png'))?>" alt="ご覧いただきましてありがとうございます。コーダーをしています。詳しいプロフィールはこの下にあります。お仕事についてはヘッダーのContactからお願いいたします。">
                <!--SP用の画像-->
                <img class="p-main-visual--sp" src="<?php echo esc_url(get_theme_file_uri('img/MV_sp.png'))?>" alt="ご覧いただきましてありがとうございます。コーダーをしています。詳しいプロフィールはこの下にあります。お仕事についてはヘッダーのContactからお願いいたします。">
            </h1>
            <div class="p-main-visual__text__wrapper">
                <h2 class="p-main-visual__heading2--Japanese">ご覧いただきまして<br class="u-display-none--sp" >ありがとうございます</h2>
                <p class="p-main-visual__text--Japanese">コーダーをしています<br>詳しいプロフィールはこの下にあります<br>お仕事についてはヘッダーのContactからお願いします</p>
                <!--SP用の文章-->
                <p class="p-main-visual__text--Japanese--sp">コーダーをしています<br>詳しいプロフィールはこの下にあります<br>お仕事についてはContactからお願いします</p>
                <!--SP用の文章ここまで-->
                <h2 class="p-main-visual__heading2--English">Thank you for visiting</h2>
                <p class="p-main-visual__text--English">I'm a coder<br>Detailed profile and production results are below<br>For work, please contact us from the header</p>
                <!--SP用の文章-->
                <p class="p-main-visual__text--English--sp">I'm a coder<br>Detailed profile and production results are below<br>Please inquire about work from Contact</p> 
                <!--SP用の文章ここまで-->
            </div>
            <!--プロフィール-->
            <article class="p-profile">
                <!--プロフィールテキストと写真のwrapper-->
                <div class="p-profile__contents__container">
                    <!--プロフィールテキストのwrapper-->
                    <div class="p-profile__contents__wrapper">
                        <h2 class="p-profile__heading2--English">Profile<span class="p-profile__heading2--Japanese">プロフィール</span></h2>
                        <p class="p-profile__text--main">プロフィールをご覧いただき<br class="u-display-none--sp">ありがとうございます。</p>
                        <!--氏名のwrapper-->
                        <dl class="p-profile__contents__wrapper--name">
                            <div class="p-profile__item--name--wrapper">
                                <dt class="p-profile__item--name">氏名</dt>
                                <div class="p-profile__item--English-translation">name</div>
                            </div>
                            <dd class="p-profile__name">
                                <?php 
                                $author = get_userdata($post->post_author);
                                echo $author->display_name;
                                ?>
                            </dd>
                        </dl>
                        <!--経歴のwrapper-->
                        <dl class="p-profile__contents__wrapper--career">
                            <div class="p-profile__item--career--wrapper">
                                <dt class="p-profile__item--career">経歴</dt>
                                <div class="p-profile__item--English-translation">Career</div>
                            </div>
                            <div class="p-profile__career--wrapper">
                                <dd class="p-profile__career--top">2020年9月コーディング学習を開始<br>案件をこなす内に、コーダーであってもコーディングの知識だけではなく、デザインの知識を深める事の重要性を感じるようになりました。</dd>
                                <dd class="p-profile__career--bottom">2022年4月デザイン学習を開始<br>デザインの考え方、ツールの使い方<br>Webサイト作成を学びました。</dd>
                            </div>
                        </dl>
                        <?php
                        $page_profile = get_page_by_path('profile');
                        ?>
                        <a class="p-profile__link" href="<?php echo esc_url(get_permalink($page_profile -> ID)); ?>">詳しいプロフィールを見る<span class="p-profile__link__arrow"></span></a>
                    </div>
                    <!--写真のwrapper-->
                    <img class="p-profile__image" src="<?php echo esc_url(get_theme_file_uri('img/profile__image.png'))?>" alt="サイト製作者30代男性笑顔の写真">
                    <a class="p-profile__link--sp" href="<?php echo esc_url(get_permalink($page_profile -> ID)); ?>">詳しいプロフィールを見る<span class="p-profile__link__arrow"></span></a>
                </div>
                <!--両サイドの装飾-->
                <div class="p-top-page__side--left"><span class="c-side__text">profile</span></div>
                <div class="p-top-page__side--right"><span class="c-side__text">profile</span></div>
            </article>
            <!--section区切りのボーダー-->
            <div class="u-margin__section-border"><span class="c-section-border"></span></div>
            <!--スキル-->
            <!--アンカーリンクずれ対策用の要素-->
            <div id="skill" class="p-skill__anchor"></div>
            <!--アンカーリンクずれ対策用の要素-->
            <article class="p-skill">
                <!--中央部分のcontainer-->
                <div class="p-skill__container">
                    <h2 class="p-skill__heading2--English">Skill<span class="p-skill__heading2--Japanese">スキル</span></h2>
                    <!--コーディング部分左右のwrapper-->
                    <div class="p-skill__wrapper--coding">
                    <!--コーディング部分　左側-->
                        <section class="p-skill__inner--coding">
                            <h3 class="p-skill__heading3">静的ページの作成<br>WordPressオリジナルテーマ開発</h3>
                            <div class="p-skill__icon__wrapper--coding">
                                <span class="c-skill__icon__image--html"></span>
                                <span class="c-skill__icon__image--sass"></span>
                                <span class="c-skill__icon__image--WordPress"></span>
                                <span class="c-skill__icon__image--responsive"></span>
                                <span class="c-skill__icon__text">and&nbsp;more...</span>
                            </div>
                            <p class="p-skill__text--period">学習期間&lpar;実務対応期間含む&rpar;</p>
                            <p class="p-skill__text--date">1年8ヶ月</p>
                        </section>
                        <!--コーディング部分　右側-->
                        <ul class="p-skill__text__item__wrapper">
                            <li class="p-skill__text__item"><span class="c-circle"></span><span class="u-margin--8px"></span>セマンティクスなマークアップ</li>
                            <li class="p-skill__text__item"><span class="c-circle"></span><span class="u-margin--8px"></span>FLOCSSを使ったCSS設計、Sassの使用</li>
                            <li class="p-skill__text__item"><span class="c-circle"></span><span class="u-margin--8px"></span>デザインカンプからのコーディング</li>
                            <li class="p-skill__text__item"><span class="c-circle"></span><span class="u-margin--8px"></span>GitHubの基本的な使用&lpar;push・pull他&rpar;</li>
                            <li class="p-skill__text__item"><span class="c-circle"></span><span class="u-margin--8px"></span>レスポンシブ対応</li>
                            <li class="p-skill__text__item"><span class="c-circle"></span><span class="u-margin--8px"></span>静的サイトのWordPress化</li>
                            <li class="p-skill__text__item"><span class="c-circle"></span><span class="u-margin--8px"></span>JavaScriptライブラリjQueryを用いた実装</li>
                        </ul>
                        <!--SP用-->
                        <p class="p-skill__text__period--sp">学習期間&lpar;実務対応期間含む&rpar;</p>
                        <p class="p-skill__text__date--sp">1年8ヶ月</p>
                    </div>
                    <div class="u-margin__section-border--skill"><span class="c-section-border--skill"></span></div>
                    <!--デザイン部分左右のwrapper-->
                    <div class="p-skill__wrapper--design">
                        <section class="p-skill__inner--design">
                            <h3 class="p-skill__heading3">デザインツールの基本的な使用<br>Photoshop・illustrator・Figma</h3>
                            <div class="p-skill__icon__wrapper--design">
                                <span class="c-skill__icon__image--retouch"></span>
                                <span class="c-skill__icon__image--bezier-curve"></span>
                                <span class="c-skill__icon__image--Figma"></span>
                                <span class="c-skill__icon__text">and&nbsp;more...</span>
                            </div>
                            <p class="p-skill__text--period">学習期間</p>
                            <p class="p-skill__text--date">4ヶ月</p>
                        </section>
                        <ul class="p-skill__text__item__wrapper">
                            <li class="p-skill__text__item"><span class="c-circle"></span><span class="u-margin--8px"></span>画像のスライス</li>
                            <li class="p-skill__text__item"><span class="c-circle"></span><span class="u-margin--8px"></span>写真の切り抜き・補正</li>
                            <li class="p-skill__text__item"><span class="c-circle"></span><span class="u-margin--8px"></span>ペンツールを使ったベジェ曲線の描画</li>
                            <li class="p-skill__text__item"><span class="c-circle"></span><span class="u-margin--8px"></span>CCライブラリを使ったツール間の連携</li>
                            <li class="p-skill__text__item"><span class="c-circle"></span><span class="u-margin--8px"></span>Adobe&nbsp;Stockの利用及びライセンス取得化</li>
                            <li class="p-skill__text__item"><span class="c-circle"></span><span class="u-margin--8px"></span>Web・SNSバナー作成</li>
                            <li class="p-skill__text__item"><span class="c-circle"></span><span class="u-margin--8px"></span>Figmaを使ったWebデザイン</li>
                        </ul>
                        <p class="p-skill__text__period--sp">学習期間</p>
                        <p class="p-skill__text__date--sp">4ヶ月</p>
                    </div>
                </div>
                <!--両サイドの装飾-->
                <div class="p-top-page__side--left"><span class="c-side__text">profile</span></div>
                <div class="p-top-page__side--right"><span class="c-side__text">profile</span></div>
            </article>
            <!--section区切りのボーダー-->
            <div class="u-margin__section-border"><span class="c-section-border"></span></div>
            <!--ワークスセクション-->
            <article class="p-works">
                <!--中央部分のcontainer-->
                <div class="p-works__container">
                    <h2 class="p-works__heading2--English">Works<span class="p-works__heading2--Japanese">作品事例</span></h2>
                    <p class="p-works__text">今までの制作事例です</p>
                    <div class="p-works__card__container--1st">
                        <!--カスタム投稿を取得する-->
                        <?php
                        //取得する記事の条件
                        $args = array(
                            'post_type' => 'works',//取得する投稿タイプのスラッグ
                        );
                        $my_query = new WP_Query($args);
                        //テンプレート先で変数を呼び出せるようにする
                        set_query_var( 'my_query', $my_query );
                        ?>
                        <?php if($my_query->have_posts()): ?> 
                            <?php while($my_query->have_posts()): 
                                        $my_query->the_post(); 
                                        get_template_part('archive-works');                            
                                endwhile;
                                endif; ?>
                        <!--グローバル変数$postをリセット(必須)-->
                        <?php wp_reset_postdata(); ?>
                    </div>
                </div>
                <div class="p-top-page__side--left"><span class="c-side__text">works</span></div>
                <div class="p-top-page__side--right"><span class="c-side__text">works</span></div>
            </article>
        </main>
    <?php get_footer(); ?>
    <?php wp_footer(); ?>
	</body>
</html>
