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
        'header_nav_lower-page' => esc_html__('header navigation lower-page','header-nav-lower-page'),
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

//カスタム投稿でタグの追加
add_action( 'init', function () {
  register_taxonomy( 'post_tag', [ 'post', 'works' ],
      [
          'hierarchical' => false,
          'query_var'    => 'tag',
          'label'        => 'Worksのタグ'
      ]
  );
});
add_action('pre_get_posts', function ($query){
  if ( is_admin() && ! $query->is_main_query() ) {
      return;
  }
  if ( $query->is_category() || $query->is_tag() ) {
      $query->set('post_type', ['post','works']);
  }
});

//the_post_thumbnailのwidth heightの指定を消す
function custom_attribute( $html ){
    // width height を削除する
    $html = preg_replace('/(width|height)="\d*"\s/', '', $html);
    return $html;
}
add_filter( 'post_thumbnail_html', 'custom_attribute' );

//パンくずリスト
if ( ! function_exists( 'custom_breadcrumb' ) ) {
  function custom_breadcrumb() {

    // トップページでは何も出力しないように
    if ( is_front_page() ) return false;

    //そのページのWPオブジェクトを取得
    $wp_obj = get_queried_object();

    //JSON-LD用のデータを保持する変数
    $json_array = array();

    echo '<div class="p-header__breadcrumb__wrapper">'.  //id名などは任意で
      '<ul class="p-header__breadcrumb__inner">'.
        '<li class="p-header__breadcrumb__item">'.
          '<a class="p-header__breadcrumb--home" href="'. esc_url( home_url() ) .'"><span>HOME</span></a>'.
        '</li>'.
        '<div class="p-header__breadcrumb--arrow">&gt;</div>';

    if ( is_attachment() ) {

      /**
       * 添付ファイルページ ( $wp_obj : WP_Post )
       * ※ 添付ファイルページでは is_single() も true になるので先に分岐
       */
      $post_title = apply_filters( 'the_title', $wp_obj->post_title );
      echo '<li><span>'. esc_html( $post_title ) .'</span></li>';

    } elseif ( is_single() ) {

      /**
       * 投稿ページ ( $wp_obj : WP_Post )
       */
      $post_id    = $wp_obj->ID;
      $post_type  = $wp_obj->post_type;
      $post_title = apply_filters( 'the_title', $wp_obj->post_title );

      // カスタム投稿タイプかどうか
      if ( $post_type !== 'post' ) {

        $the_tax = "";  //そのサイトに合わせて投稿タイプごとに分岐させて明示的に指定してもよい

        // 投稿タイプに紐づいたタクソノミーを取得 (投稿フォーマットは除く)
        $tax_array = get_object_taxonomies( $post_type, 'names');
        foreach ($tax_array as $tax_name) {
            if ( $tax_name !== 'post_format' ) {
                $the_tax = $tax_name;
                break;
            }
        }

        $post_type_link = esc_url( get_post_type_archive_link( $post_type ) );
        $post_type_label = esc_html( get_post_type_object( $post_type )->label );

        //カスタム投稿タイプ名の表示
        echo '<li>'.
              //URLは不要なので
              //'<a href="'. $post_type_link .'">'.
                '<span class="p-header__breadcrumb--category">'. $post_type_label .'</span>'.
              //'</a>'.
            '</li>'.
            '<div class="p-header__breadcrumb--arrow">&gt;</div>';

        //JSON-LDデータ
        $json_array[] = array(
          'id' => $post_type_link,
          'name' => $post_type_label
        );

        } else {

          $the_tax = 'category';  //通常の投稿の場合、カテゴリーを表示

        }

        // 投稿に紐づくタームを全て取得
        $terms = get_the_terms( $post_id, $the_tax );

        // タクソノミーが紐づいていれば表示
        if ( $terms !== false ) {

          $child_terms  = array();  // 子を持たないタームだけを集める配列
          $parents_list = array();  // 子を持つタームだけを集める配列

          //全タームの親IDを取得
          foreach ( $terms as $term ) {
            if ( $term->parent !== 0 ) {
              $parents_list[] = $term->parent;
            }
          }

          //親リストに含まれないタームのみ取得
          foreach ( $terms as $term ) {
            if ( ! in_array( $term->term_id, $parents_list,true ) ) {
              $child_terms[] = $term;
            }
          }

          // 最下層のターム配列から一つだけ取得
          $term = $child_terms[0];

          if ( $term->parent !== 0 ) {

            // 親タームのIDリストを取得
            $parent_array = array_reverse( get_ancestors( $term->term_id, $the_tax ) );

            foreach ( $parent_array as $parent_id ) {
              $parent_term = get_term( $parent_id, $the_tax );
              $parent_link = esc_url( get_term_link( $parent_id, $the_tax ) );
              $parent_name = esc_html( $parent_term->name );
              echo '<li>'.
                    '<a href="'. $parent_link .'">'.
                      '<span>'. $parent_name .'</span>'.
                    '</a>'.
                  '</li>';
              //JSON-LDデータ
              $json_array[] = array(
                'id' => $parent_link,
                'name' => $parent_name
              );
            }
          }

          $term_link = esc_url( get_term_link( $term->term_id, $the_tax ) );
          $term_name = esc_html( $term->name );
          // 最下層のタームを表示
          //echo '<li>'.
                //'<a href="'. $term_link .'">'.
                  //'<span>'. $term_name .'</span>'.
                //'</a>'.
              //'</li>';
          //JSON-LDデータ
          $json_array[] = array(
            'id' => $term_link,
            'name' => $term_name
          );
        }

        // 投稿自身の表示
        echo '<li><span class="p-header__breadcrumb--current">'. esc_html( strip_tags( $post_title ) ) .'</span></li>';

    } elseif ( is_page() || is_home() ) {

      /**
       * 固定ページ ( $wp_obj : WP_Post )
       */
      $page_id    = $wp_obj->ID;
      $page_title = apply_filters( 'the_title', $wp_obj->post_title );

      // 親ページがあれば順番に表示
      if ( $wp_obj->post_parent !== 0 ) {
        $parent_array = array_reverse( get_post_ancestors( $page_id ) );
        foreach( $parent_array as $parent_id ) {
          $parent_link = esc_url( get_permalink( $parent_id ) );
          $parent_name = esc_html( get_the_title( $parent_id ) );
          echo '<li>'.
                '<a href="'. $parent_link .'">'.
                  '<span>'. $parent_name .'</span>'.
                '</a>'.
              '</li>';
          //JSON-LDデータ
          $json_array[] = array(
            'id' => $parent_link,
            'name' => $parent_name
          );
        }
      }
      // 投稿自身の表示
      echo '<li><span class="p-header__breadcrumb--current">'. esc_html( strip_tags( $page_title ) ) .'</span></li>';

    } elseif ( is_post_type_archive() ) {

      /**
       * 投稿タイプアーカイブページ ( $wp_obj : WP_Post_Type )
       */
      echo '<li><span>'. esc_html( $wp_obj->label ) .'</span></li>';

    } elseif ( is_date() ) {

      /**
       * 日付アーカイブ ( $wp_obj : null )
       */
      $year  = get_query_var('year');
      $month = get_query_var('monthnum');
      $day   = get_query_var('day');

      if ( $day !== 0 ) {
        //日別アーカイブ
        echo '<li>'.
              '<a href="'. esc_url( get_year_link( $year ) ) .'"><span>'. esc_html( $year ) .'年</span></a>'.
            '</li>'.
            '<li>'.
              '<a href="'. esc_url( get_month_link( $year, $month ) ) . '"><span>'. esc_html( $month ) .'月</span></a>'.
            '</li>'.
            '<li>'.
              '<span>'. esc_html( $day ) .'日</span>'.
            '</li>';

      } elseif ( $month !== 0 ) {
        //月別アーカイブ
        echo '<li>'.
              '<a href="'. esc_url( get_year_link( $year ) ) .'"><span>'. esc_html( $year ) .'年</span></a>'.
            '</li>'.
            '<li>'.
              '<span>'. esc_html( $month ) .'月</span>'.
            '</li>';

      } else {
        //年別アーカイブ
        echo '<li><span>'. esc_html( $year ) .'年</span></li>';

      }

    } elseif ( is_author() ) {

      /**
       * 投稿者アーカイブ ( $wp_obj : WP_User )
       */
      echo '<li><span>'. esc_html( $wp_obj->display_name ) .' の執筆記事</span></li>';

    } elseif ( is_archive() ) {

      /**
       * タームアーカイブ ( $wp_obj : WP_Term )
       */
      $term_id   = $wp_obj->term_id;
      $term_name = $wp_obj->name;
      $tax_name  = $wp_obj->taxonomy;

      /* ここでタクソノミーに紐づくカスタム投稿タイプを出力しても良いでしょう。 */

      // 親ページがあれば順番に表示
      if ( $wp_obj->parent !== 0 ) {

        $parent_array = array_reverse( get_ancestors( $term_id, $tax_name ) );
        foreach( $parent_array as $parent_id ) {
          $parent_term = get_term( $parent_id, $tax_name );
          $parent_link = esc_url( get_term_link( $parent_id, $tax_name ) );
          $parent_name = esc_html( $parent_term->name );
          echo '<li>'.
                '<a href="'. $parent_link .'">'.
                  '<span>'. $parent_name .'</span>'.
                '</a>'.
              '</li>';
          //JSON-LDデータ
          $json_array[] = array(
            'id' => $parent_link,
            'name' => $parent_name
          );
        }
      }

      // ターム自身の表示
      echo '<li>'.
            '<span>'. esc_html( $term_name ) .'</span>'.
          '</li>';


    } elseif ( is_search() ) {

      /**
       * 検索結果ページ
       */
      echo '<li><span>「'. esc_html( get_search_query() ) .'」で検索した結果</span></li>';

    
    } elseif ( is_404() ) {

      /**
       * 404ページ
       */
      echo '<li><span>お探しの記事は見つかりませんでした。</span></li>';

    } else {

      /**
       * その他のページ（無いと思うけど一応）
       */
      echo '<li><span>'. esc_html( get_the_title() ) .'</span></li>';

    }

    echo '</ul>';
    
    //JSON-LDの出力（２階層以上であれば）
    if ( !empty( $json_array ) ) :
      $pos = 1;
      $json = '';
      foreach ( $json_array as $data ) : 
        $json .= '{
          "@type": "ListItem",
          "position": '. $pos++ .',
          "item": {
              "@id": "'. $data['id'] .'",
              "name": "'. $data['name'] .'"
          }
        },';
      endforeach;

      echo '<script type="application/ld+json">{
        "@context": "http://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": ['. rtrim( $json, ',' ) .']
      }</script>';
      endif;

    echo '</div>';  // 冒頭に合わせた閉じタグ

  }
}

remove_filter('the_content', 'wpautop');// 記事の自動整形を無効にする