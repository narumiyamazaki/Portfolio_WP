<?php

function portfolio_script(){
    $locale = get_locale();
    $locale = apply_filters('theme_locale',$locale,'prtfolio');
    wp_enqueue_style('GoogleFonts','https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@400;600;700&family=Roboto&display=swap');
    wp_enqueue_style('style',get_theme_file_uri('/style.css'),array(),'1.0.0');
    wp_enqueue_script('jQuery','https://code.jquery.com/jquery-3.6.0.min.js','','3.6.0',true);
    wp_enqueue_script('font-awesome','https://kit.fontawesome.com/b8a7fea4d4.js',array('jQuery'),'6.2.0',true);
    wp_enqueue_script('fade-in-out',get_theme_file_uri('/js/fade-in-out.js'),array('jQuery'),'1.0.0',true);
    wp_enqueue_script('index',get_theme_file_uri('/js/index.js'),array('jQuery'),'1.0.0',true);
    wp_enqueue_script('nav-height',get_theme_file_uri('/js/nav-height.js'),array('jQuery'),'1.0.0',true);
    wp_enqueue_script('on.click',get_theme_file_uri('/js/on.click.js'),array('jQuery'),'1.0.0',true);  
}

//アクションフック(porfolio_scripts)への登録
add_action('wp_enqueue_scripts', 'portfolio_script');

//テーマサポート
function custom_theme_support(){
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
    //タイトルタグを管理画面から登録可能に
    add_theme_support('title-tag');
    //カスタムメニューの有効化
    add_theme_support('menus');
    register_nav_menus(array(
        'footer_nav' => esc_html__('footer navigation','footer-nav'),
    ));
}