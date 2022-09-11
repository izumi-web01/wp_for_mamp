<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Find! Ochanomizu | 御茶ノ水を楽しみたいひとへ</title>
  <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=yes,maximum-scale=2" />
<?php wp_head(); ?>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/earlyaccess/roundedmplus1c.css" rel="stylesheet" />
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/animate.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
  <link rel="shortcut icon" type="image/vnd.microsoft.icon" href="/favicon.ico">
  <link rel="icon" type="image/vnd.microsoft.icon" href="favicon.ico">

  <style>

    .mainvisual{
      <?php if(is_single()): ?>
          background-image:url(<?php the_post_thumbnail_url( 'full' ); ?>);
          height:100vh;
          
	    <?php elseif(is_category()): 
        
          $myterm = get_queried_object();//ターム名を取得
          $myimage = get_field('category-thumb', $myterm); ?>
          background-image: url(<?php echo $myimage['url']; ?>);
          height: 100vh;
     
      <?php endif; ?>

    }
    




  </style>
</head>

<body <?php body_class(); ?>>
  <header class="site-header">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="Find! Ochanomizu"></a>
    <nav class="gnav">
    <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
    </nav>
    <form role="search" method="get" class="search-box" action="/">
      <label>
          <input type="search" class="search-field roboto-nomal" placeholder="" name="s" id="s" value="" title="検索:">
        </label>
      <input class="btn-search" type="image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-search.png" alt="検索ボタン">
    </form>
  </header>