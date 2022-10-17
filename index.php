<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>narumiのPortfolio</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS -->
        <link rel="stylesheet" href="https://unpkg.com/destyle.css@1.0.5/destyle.css">
        <link href="./css/style.css" rel="stylesheet">
    <!--Googlefont-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@400;600;700&family=Roboto&display=swap" rel="stylesheet"> 
    <!--jQuery-->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Font Awesome -->
        <script src="https://kit.fontawesome.com/b8a7fea4d4.js"></script>
    </head>
	<body>
        <header class="l-header">
            <div class="p-header--link">
                <p class="p-nav--btn">
                    <a href="javascript:void(0)"><span>メニューを開く</span></a>
                </p>
                <!--PC・TB用のnavメニュー-->
                <nav class="p-header__nav">
                    <ul class="p-header__nav__main-menu">
                        <li class="p-header__nav__main-menu__item"><a class="p-header__nav__main-menu__item--profile" href="#">Profile</a></li>
                        <li class="p-header__nav__main-menu__item"><a class="p-header__nav__main-menu__item--skill" href="#">Skill</a></li>
                        <li class="p-header__nav__main-menu__item"><a class="p-header__nav__main-menu__item--works" href="#">Works</a></li>
                        <li class="p-header__nav__main-menu__item--other"><a class="p-header__nav__main-menu__item--contact" href="#">Contact</a></li>
                    </ul>
                </nav>
                <!--SP用のnavメニュー-->
                <nav class="p-header__nav--sp">
                    <ul class="p-header__nav__main-menu--sp">
                        <li class="p-header__nav__main-menu__item"><a class="p-header__nav__main-menu__item--profile" href="#">Top</a></li>
                        <li class="p-header__nav__main-menu__item"><a class="p-header__nav__main-menu__item--profile" href="#">Profile</a></li>
                        <li class="p-header__nav__main-menu__item"><a class="p-header__nav__main-menu__item--skill" href="#">Skill</a></li>
                        <li class="p-header__nav__main-menu__item"><a class="p-header__nav__main-menu__item--works" href="#">Works</a></li>
                        <li class="p-header__nav__main-menu__item--other"><a class="p-header__nav__main-menu__item--contact" href="#">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <main class="l-main">
            <!--MV TB・PC-->
            <h1 class="p-heading1">
                <img class="p-main-visual" src="img/MV.png" alt="ご覧いただきましてありがとうございます。コーダーをしています。詳しいプロフィールはこの下にあります。お仕事についてはヘッダーのContactからお願いいたします。">
                <!--SP用の画像-->
                <img class="p-main-visual--sp" src="img/MV_sp.png" alt="ご覧いただきましてありがとうございます。コーダーをしています。詳しいプロフィールはこの下にあります。お仕事についてはヘッダーのContactからお願いいたします。">
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
                            <dd class="p-profile__name">narumi</dd>
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
                                <a class="p-profile__link">詳しいプロフィールを見る<span class="p-profile__link__arrow"></span></a>
                            </div>
                        </dl>
                    </div>
                    <!--写真のwrapper-->
                    <img class="p-profile__image" src="img/profile__image.png" alt="サイト製作者30代男性笑顔の写真">
                    <a class="p-profile__link--sp">詳しいプロフィールを見る<span class="p-profile__link__arrow"></span></a>
                </div>
                <!--両サイドの装飾-->
                <div class="p-top-page__side--left"><span class="c-side__text">profile</span></div>
                <div class="p-top-page__side--right"><span class="c-side__text">profile</span></div>
            </article>
            <!--section区切りのボーダー-->
            <div class="u-margin__section-border"><span class="c-section-border"></span></div>
            <!--スキル-->
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
                        <article class="p-works__card__wrapper">
                            <a class="p-works__card" href="#">
                                <div class="p-works__card__image--portfolio"><span class="c-works__card__role">Design&amp;Coding</span></div>
                                <h3 class="p-works__card__caption">ポートフォリオサイト</h3>
                            </a>
                        </article>
                        <article class="p-works__card__wrapper">
                            <a class="p-works__card" href="https://raisetech-hamburger.com/">
                                <div class="p-works__card__image--hamburger"><span class="c-works__card__role">Coding</span></div>
                                <h3 class="p-works__card__caption">スクール課題<br>ハンバーガーショップサイト</h3>
                            </a>
                        </article>
                        <article class="p-works__card__wrapper">
                            <a class="p-works__card" href="https://narumiyamazaki.github.io/Portfolio__demo-web-production-company_open/">
                                <div class="p-works__card__image--web-production-company"><span class="c-works__card__role">Coding</span></div>
                                <h3 class="p-works__card__caption">デモサイト<br>Web制作会社コーポレートサイト</h3>
                            </a>
                        </article>
                    </div>
                    <div class="p-works__card__container--2nd">
                        <article class="p-works__card__wrapper">
                            <a class="p-works__card" href="">
                                <div class="p-works__card__image--RaiseTech-web-banner"><span class="c-works__card__role">Design</span></div>
                                <h3 class="p-works__card__caption">スクール課題<br>RaiseTech&nbsp;Web出稿バナー</h3>
                            </a>
                        </article>
                        <article class="p-works__card__wrapper">
                            <a class="p-works__card" href="">
                                <div class="p-works__card__image--RaiseTech-sns-banner"><span class="c-works__card__role">Design</span></div>
                                <h3 class="p-works__card__caption">スクール課題<br>RaiseTech&nbsp;インスタ出稿バナー</h3>
                            </a>
                        </article>
                        <article class="p-works__card__wrapper">
                            <a class="p-works__card" href="">
                                <div class="p-works__card__image--miraini-logo"><span class="c-works__card__role">Design</span></div>
                                <h3 class="p-works__card__caption">スクール課題<br>調剤薬局ロゴ</h3>
                            </a>
                        </article>
                    </div>
                </div>
                <div class="p-top-page__side--left"><span class="c-side__text">profile</span></div>
                <div class="p-top-page__side--right"><span class="c-side__text">profile</span></div>
            </article>
        </main>
        <footer class="l-footer">
            <div class="p-footer__container">
                <!--左側のテキスト-->
                <div class="p-footer__text__wrapper">
                    <h2 class="p-footer__heading2--English">Contact<span class="p-footer__heading2--Japanese">お問い合わせ</span></h2>
                    <p class="p-footer__text">お仕事のご依頼やご相談は<br>こちらのフォームからお願いいたします。</p>
                    <p class="p-footer__text"><span class="c-asterisk">&lowast;</span>のついている枠は回答必須項目です。</p>
                </div>
                <!--右側のフォーム-->
                <form class="p-footer__form" action="" method="get" >
                    <!--お名前-->
                    <div class="p-footer__form__item__wrapper">
                        <span class="c-asterisk">&lowast;</span><label class="p-footer__form__label" for="name">お名前</label>
                    </div>
                    <input class="p-footer__form__input--name" type="text" name="name">
                    <!--会社名(団体名)-->
                    <label class="p-footer__form__label" for="company">会社名&lpar;団体名&rpar;</label>
                    <input class="p-footer__form__input--company" type="text" name="company">
                    <!--メールアドレス-->
                    <div class="p-footer__form__item__wrapper">
                        <span class="c-asterisk">&lowast;</span><label class="p-footer__form__label" for="email">メールアドレス</label>
                    </div>
                    <input class="p-footer__form__input--email" type="email" name="email">
                    <!--お問い合わせ内容-->
                    <div class="p-footer__form__item__wrapper">
                        <span class="c-asterisk">&lowast;</span><label class="p-footer__form__label" for="textarea">お問い合わせ内容</label>
                    </div>
                    <textarea class="p-footer__form__textarea" name="textarea"></textarea>
                    <button class="p-footer__form__button" type="submit">送信</button>
                </form>
            </div>
            <div class="p-footer__copyright">
                <p class="p-footer__copyright__text">copyright&nbsp;&copy;narumi,All&nbsp;rights&nbsp;reserved.</p>
            </div>
        </footer>
    <script src="js/on.click.js"></script>
    <script src="js/width.js"></script>
    <script src="js/nav-height.js"></script>
	</body>
</html>
