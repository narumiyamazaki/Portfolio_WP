
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS -->
        <link rel="stylesheet" href="https://unpkg.com/destyle.css@1.0.5/destyle.css">
    <!--Googlefont-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <!--jQuery-->
        
    <!-- Font Awesome -->
    <?php wp_head(); ?>
    </head>
	<body>
    <?php wp_body_open(); ?>
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