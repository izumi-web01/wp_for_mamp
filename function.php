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
