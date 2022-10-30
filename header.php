
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS 
        <link rel="stylesheet" href="https://unpkg.com/destyle.css@1.0.5/destyle.css">
    -->
    <!--Googlefont
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    -->
    <?php wp_head(); ?>
    </head>
	<body>
    <?php wp_body_open(); ?>
        <header class="l-header">
            <div class="p-header--link">
                <p class="p-nav--btn">
                    <a href="javascript:void(0)"><span>メニューを開く</span></a>
                </p>
                <?php 
                    wp_nav_menu( array(
                        'theme_location' => 'header_nav',
                        'container' => 'nav',
                        'container_class' => 'p-header__nav',
                        'menu_class' => 'p-header__nav__main-menu',
                        'add_li_class' => 'p-header__nav__main-menu__item',
                    ));
                ?>
                  <?php 
                    wp_nav_menu( array(
                        'theme_location' => 'header_nav_sp',
                        'container' => 'nav',
                        'container_class' => 'p-header__nav--sp',
                        'menu_class' => 'p-header__nav__main-menu--sp',
                        'add_li_class' => 'p-header__nav__main-menu__item',
                    ));
                ?>
                <!--SP用のnavメニュー
                <nav class="p-header__nav--sp">
                    <ul class="p-header__nav__main-menu--sp">
                        <li class="p-header__nav__main-menu__item"><a class="p-header__nav__main-menu__item--profile" href="#">Top</a></li>
                        <li class="p-header__nav__main-menu__item"><a class="p-header__nav__main-menu__item--profile" href="#">Profile</a></li>
                        <li class="p-header__nav__main-menu__item"><a class="p-header__nav__main-menu__item--skill" href="#">Skill</a></li>
                        <li class="p-header__nav__main-menu__item"><a class="p-header__nav__main-menu__item--works" href="#">Works</a></li>
                        <li class="p-header__nav__main-menu__item--other"><a class="p-header__nav__main-menu__item--contact" href="#">Contact</a></li>
                    </ul>
                </nav>
                -->
            </div>
        </header>