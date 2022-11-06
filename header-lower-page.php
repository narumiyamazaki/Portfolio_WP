<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    </head>
	<body>
    <?php wp_body_open(); ?>
    <!--条件分岐させる-->
        <header class="l-header">
            <div class="p-header--link">
                <p class="p-nav--btn">
                    <a href="javascript:void(0)"><span>メニューを開く</span></a>
                </p>
                <?php 
                    wp_nav_menu( array(
                        'theme_location' => 'header_nav_lower-page',
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
            </div>
        </header>
        <?php custom_breadcrumb(); ?>
	