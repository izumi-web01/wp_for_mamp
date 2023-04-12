<?php 
//ウィジェットの初期化
function my_widgets_init() {
	register_sidebar( array(
		'name' => 'page bottom sidebar',
		'id' => 'sidebar-pagebottom',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => ' ',
		'after_title' => ' ',
	) );
}
add_action( 'widgets_init', 'my_widgets_init' );

//ウィジェットタイトルを消す
add_filter( 'widget_title', 'remove_widget_title' );
function remove_widget_title( $widget_title ) {
  if ( substr ( $widget_title, 0, 1 ) == '!' )
    return;
  else 
    return ( $widget_title );
}

//ナビゲーションメニューの名前を登録する
function register_my_menus() {
	register_nav_menus(
		array(
			'header-menu' => __( 'ヘッダーメニュー' ),
			'footer-menu' => __( 'フッターメニュー' ),
			'sns-menu' => __( 'SNSメニュー' )
		)
	);
}
add_action( 'init', 'register_my_menus' );

//アイキャッチ画像の有効化
add_theme_support( 'post-thumbnails' );

// add_action( 'init', 'create_post_type' );
// function create_post_type() {
// register_post_type( 'news',
// array(
// 'labels' => array(
// 'name' => __( 'ニュース' ),
// 'singular_name' => __( 'ニュース' )
// ),
// 'public' => true,
// 'has_archive' => false,
// )
// );
// }

/* ---------- カスタム投稿タイプを追加 ---------- */
add_action( 'init', 'create_post_type' );

function create_post_type() {

  register_post_type(
    'blog',
    array(
		'labels' => array(
			'name' => __( 'ブログ' ),
			'singular_name' => __( 'ブログ' )
			),
      'public' => true,
      'has_archive' => true,
      'show_in_rest' => true,
      'menu_position' => 5,
      'supports' => array(
        'title',
        'editor',
        'thumbnail',
        'revisions',
      ),
    )
  );

  register_taxonomy(
    'blog_cat',
    'blog',
    array(
      'label' => 'カテゴリー',
      'hierarchical' => true,
      'public' => true,
      'show_in_rest' => true,
    )
  );

//   register_taxonomy(
//     'blog-tag',
//     'blog',
//     array(
//       'label' => 'タグ',
//       'hierarchical' => false,
//       'public' => true,
//       'show_in_rest' => true,
//       'update_count_callback' => '_update_post_term_count',
//     )
//   );

  //タグタイプの設定（カスタムタクソノミーの設定）
  register_taxonomy(
	'relation_tag', //タグ名（任意）
	'blog', //カスタム投稿名
	array(
	  'hierarchical' => false, //タグタイプの指定（階層をもたない）
	  'update_count_callback' => '_update_post_term_count',
	  //ダッシュボードに表示させる名前
	  'label' => '関連タグ', 
	  'public' => true,
	//   'show_ui' => true
	//   'label' => 'カテゴリー',
    //   'hierarchical' => true,
    //   'public' => true,
      'show_in_rest' => true
	)
  );

}

  //アクションフックの練習

  function my_campaign_text(){
    echo '<div class="my-campaign-text"><div class="container">Lightning G3 近日リリース！</div></div>';
}
add_action( 'wp_body_open', 'my_campaign_text' );


function add_header_func(){
  echo '追加するタグなど';
  }
  add_action('wp_head', 'add_header_func');


  function the_content_sample( $content ) {
    return 'ここに広告が入ります'.$content;
    }
    add_filter( 'the_content', 'the_content_sample', 10 );


    function mytheme_custom_excerpt_length( $length ) {
      $length = '3';
      return $length;
      }
      add_filter( 'excerpt_length', 'mytheme_custom_excerpt_length', 1);

  function change_title($title){
    return 'タイトルは'.$title.'だよん';
  }
  add_filter('the_title','change_title',1);

