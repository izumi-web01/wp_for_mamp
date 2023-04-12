<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  
  <meta name="format-detection" content="telephone=no">
  <title>its-create| わたしのWEBサイト</title>
  <?php wp_head(); ?>
  <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=yes,maximum-scale=2" />
  
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&family=Noto+Sans+JP:wght@400;600&family=Noto+Serif+Display:wght@600&display=swap" rel="stylesheet">
 

  <link rel="canonical" href="#">
  <link rel="shortcut icon" type="image/vnd.microsoft.icon" href="<?php echo esc_url( home_url( '/' ) ); ?>favicon.ico">
  <link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo esc_url( home_url( '/' ) ); ?>favicon.ico">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">

 
  
 
        <style>
           
           <?php if(is_page_template('index.php')): ?>
            .mainvisual{
              background:#000;
            }
            <?php endif; ?>

        </style>
          
  
</head>

<body <?php body_class(); ?>>
 

<!-- sp時ハンバーガーメニュー -->
  <header class="site-header sp ">
    <div class="header--flex fix container">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">its-create</a>
      <div class ="menuBtn grand">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    <div class="nav-sp container">
      <div class="is-nav">
        <div class="header--flex container">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">its-create</a>
          <div class ="menuBtn grand">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
        <div class="is-menu"> 
          <nav class="gnav"><?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
          </nav>
        </div>
        <div class="search__wrap">
          <form class="search__box" role="search" method="get"  action="<?php echo esc_url( home_url( '/' ) ); ?>">
            <label>
              <input class="search__field roboto-nomal" type="search"  placeholder="キーワードを検索" name="s" id="s2" value="<?php the_search_query(); ?>" title="検索:">
            </label>
            <input class="search__btn" type="image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-search.png" alt="検索ボタン">
          </form>
        </div>
      </div>
    </div>
    </header>
    <header class="site-header pc container">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">its-create</a>
      <nav class="gnav">
          <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
      </nav>
      <div class="search__icon">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-search.png" alt="">
      </div>
      <div class="search__child">
        <form class="search__box" role="search" method="get"  action="<?php echo esc_url( home_url( '/' ) ); ?>">
          <label>
          <input class="search__field roboto-nomal" type="search"  placeholder="キーワードを検索" name="s" id="s2" value="<?php the_search_query(); ?>" title="検索:">
          </label>
          <input class="search__btn" type="image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-search.png" alt="検索ボタン">
        </form>
        <div class="menuBtn__wrapper">
          <div class ="menuBtn search active">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </div>
    </header> 
 
