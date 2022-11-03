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

/*
 * カスタムフィールド


function add_custom_fields(){
  add_meta_box(
      'custom_setting', //編集画面セクションのHTML ID
      'カスタム情報', //編集画面セクションのタイトル、画面上に表示される
      'insert_custom_fields', //編集画面セクションにHTML出力する関数
      'works', //投稿タイプ名
      'normal' //編集画面セクションが表示される部分
  );
}
add_action('admin_menu', 'add_custom_fields');

function custom_metabox_edit_form_tag(){
echo ' enctype="multipart/form-data"';
}
//画像をアップする場合は、multipart/form-dataの設定が必要なので、post_edit_form_tagをフックしてformタグに追加
add_action('post_edit_form_tag', 'custom_metabox_edit_form_tag');

// カスタムフィールドの入力エリア
function insert_custom_fields(){
  global $post;
  //get_post_meta関数を使ってpostmeta情報を取得
  $works_name = get_post_meta(
                   $post->ID, //投稿ID
                   'works_name', //キー名
                   true //戻り値を文字列にする場合true(falseの場合は配列)
               );
  $works_thumbnail = get_post_meta($post->ID,'works_thumbnail',true);
  echo '名前： <input type="text" name="works_name" value="'.$works_name.'" /><br>';
  echo '画像： <input type="file" name="works_thumbnail" accept="image/*" /><br>';
  if(isset($works_thumbnail) && strlen($works_thumbnail) > 0){
      //works_thumbnailキーのpostmeta情報がある場合は、画像を表示
      //$works_thumbnailには、後述するattach_idが格納されているので、wp_get_attachment_url関数にそのattach_idを渡して画像のURLを取得する
      echo '<img style="width: 200px;display: block;margin: 1em;" src="'.wp_get_attachment_url($works_thumbnail).'">';
  }
}
function save_custom_fields( $post_id ) {
  if(isset($_POST['works_name'])){
      //works_nameキーで、$_POST['works_name']を保存
      update_post_meta($post_id, 'works_name', $_POST['works_name']);
  }else{
      //works_nameキーの情報を削除
      delete_post_meta($post_id, 'works_name');
  }

  if(isset($_FILES['works_thumbnail']) && $_FILES["works_thumbnail"]["size"] !== 0){
      $file_name = basename($_FILES['works_thumbnail']['name']);
      $file_name = trim($file_name);
      $file_name = str_replace(" ", "-", $file_name);

      $wp_upload_dir = wp_upload_dir(); //現在のuploadディクレトリのパスとURLを入れた配列
      $upload_file = $_FILES['works_thumbnail']['tmp_name'];
      $upload_path = $wp_upload_dir['path'].'/'.$file_name; //uploadsディレクトリ以下などに配置する場合は$wp_upload_dir['basedir']を利用する
      //画像ファイルをuploadディクレトリに移動させる
      move_uploaded_file($upload_file,$upload_path);

      $file_type = $_FILES['works_thumbnail']['type'];
      //正規表現で拡張子なしのスラッグ名を生成
      $slug_name = preg_replace('/\.[^.]+$/', '', basename($upload_path));

      if(file_exists($upload_path)){
          //保存に成功してファイルが存在する場合は、wp_postsテーブルなどに情報を追加
          $attachment = array(
              'guid'           => $wp_upload_dir['url'].'/'.basename($file_name), 
              'post_mime_type' => $file_type, 
              'post_title' => $slug_name, 
              'post_content' => '', 
              'post_status' => 'inherit'
          );
          //添付ファイルを追加
          $attach_id = wp_insert_attachment($attachment,$upload_path,$post_id);
          if(!function_exists('wp_generate_attachment_metadata')){
              require_once(ABSPATH . "wp-admin" . '/includes/image.php');
          }
          //添付ファイルのメタデータを生成し、wp_postsテーブルに情報を保存
          $attach_data = wp_generate_attachment_metadata($attach_id,$upload_path);
          wp_update_attachment_metadata($attach_id,$attach_data);
          //wp_postmetaテーブルに画像のattachment_id(wp_postsテーブルのレコードのID)を保存
          update_post_meta($post_id, 'works_thumbnail',$attach_id);
      }else{
          //保存失敗
          echo '画像保存に失敗しました';
          exit;
      }
  }
}
add_action('save_post', 'save_custom_fields');
 */