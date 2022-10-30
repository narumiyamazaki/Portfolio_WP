<?php

 //デフォルトのjQueryを読み込まない
 wp_deregister_script('jQuery');
add_filter( 'wp_default_scripts', 'dequeue_jquery_migrate' );
function dequeue_jquery_migrate( $scripts){
	if(!is_admin()){
		$scripts->remove( 'jquery');
	}
}

function portfolio_script(){
    $locale = get_locale();
    $locale = apply_filters('theme_locale',$locale,'prtfolio');
    wp_enqueue_style('GoogleFonts','https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@400;600;700&family=Roboto&display=swap');
    wp_enqueue_style('style',get_theme_file_uri('/style.css'),array(),'1.0.0');
    wp_enqueue_script('jQuery','https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js','','3.6.1',true);
    wp_enqueue_script('font-awesome','https://kit.fontawesome.com/b8a7fea4d4.js',array('jquery'),'6.2.0',true);
    wp_enqueue_script('fade-in-out',get_theme_file_uri('/js/fade-in-out.js'),array('jQuery'),'1.0.0',true);
    //wp_enqueue_script('index',get_theme_file_uri('/js/index.js'),array('jQuery'),'1.0.0',true);
    //wp_enqueue_script('nav-height',get_theme_file_uri('/js/nav-height.js'),array('jQuery'),'1.0.0',true);
    wp_enqueue_script('on.click',get_theme_file_uri('/js/on.click.js'),array('jQuery'),'1.0.0',true);  
}

//アクションフック(porfolio_scripts)への登録
add_action('wp_enqueue_scripts', 'portfolio_script');

//テーマサポート
function custom_theme_support(){
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
    //アイキャッチ機能の有効化
    add_theme_support('post-thumbnails');
    //タイトルタグを管理画面から登録可能に
    add_theme_support('title-tag');
    //カスタムメニューの有効化
    add_theme_support('menus');
    register_nav_menus(array(
        'footer_nav' => esc_html__('footer navigation','footer-nav'),
        'header_nav' => esc_html__('header navigation','header-nav'),
        'header_nav_sp' => esc_html__('header navigation sp','header-nav-sp'),
    ));
    //ブロックエディターの有効化
    add_theme_support('editor-style');
    //ブロックエディターで読み込むCSSのパス
    add_editor_style();
}
add_action('after_setup_theme','custom_theme_support');

function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

add_filter('walker_nav_menu_start_el', 'add_class_on_link', 10, 4);
 function add_class_on_link($item_output, $item){
 return preg_replace('/(<a.*?)/', '$1' . " class='p-header__nav__main-menu__item-link'", $item_output);
}

/* ---------- カスタム投稿の追加 ---------- */
function create_post_type() {
  register_post_type( // カスタム投稿タイプの追加関数
    'works', //カスタム投稿タイプ名（半角英数字の小文字）
    array( //オプション（以下）
      'label' => 'works', // 管理画面上の表示（日本語でもOK）
      'public' => true, // 管理画面に表示するかどうかの指定
      'has_archive' => true, // 投稿した記事の一覧ページを作成する
      'menu_position' => 5, // 管理画面メニューの表示位置（投稿の下に追加）
      'show_in_rest' => true, // Gutenbergの有効化
      'supports' => array( // サポートする機能（以下）
        'title',  // タイトル
        'editor', // エディター
        'thumbnail', // アイキャッチ画像
        'revisions' // リビジョンの保存
      ),
    )
  );
    // 「works」のカスタム投稿にカテゴリーを追加
    register_taxonomy(
        'works-cat',
        'works', // カテゴリーを追加したいカスタム投稿タイプ名
        array(
          'label' => 'カテゴリー',
          'hierarchical' => true,
          'public' => true,
          'show_in_rest' => true,
        )
      );
}
add_action( 'init', 'create_post_type' );

//the_post_thumbnailのwidth heightの指定を消す
function custom_attribute( $html ){
    // width height を削除する
    $html = preg_replace('/(width|height)="\d*"\s/', '', $html);
    return $html;
}
add_filter( 'post_thumbnail_html', 'custom_attribute' );