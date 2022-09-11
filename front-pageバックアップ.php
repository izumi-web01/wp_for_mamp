<?php get_header(); ?>
  <main role="main">
    <div class="mainvisual slide">
      <div class="copy">
        <h1>御茶ノ水を楽しみたいひとへ</h1>
        <p>御茶ノ水をより楽しむ人に送る 「御茶ノ水」を丸ごと知るサイトです。</p>
        <p>4つのカテゴリーから選んで、お楽しみください。</p>
      </div>
    </div>
    <div class="col2-wrap">
    <section class="latest-article">
        <h2>最新の記事</h2>
<?php
$args= array(
'post_type' => 'news',
'posts_per_page' =>1,

);
$the_query= new WP_Query( $args);
if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();?>
        <a href="<?php the_permalink(); ?>">
          <article class="animated">
            <h3><?php the_title(); ?></h3>
            <p class="category"><?php $cats = get_the_category(); echo $cats[0]->cat_name; ?></p>
            <p class="image"><?php the_post_thumbnail( 'thumbnail' ); ?></p>
          </article>
        </a>
<?php endwhile; endif; ?>
<?php wp_reset_postdata(); ?>
      </section>
      <section class="news">
        <h2>お知らせ</h2>
        <ul class="animated">
        <?php
            $args= array(
            'post_type' => 'news',
            'posts_per_page' => 5,
            );
            $the_query= new WP_Query( $args);
            if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();?>
          <li>
            <span class="date"><?php the_time('y.m.d'); ?></span>
            <a href="<?php the_permalink(); ?>">
              <span class="title"><?php the_title(); ?></span>
            </a>
          </li>
          <?php endwhile; endif; ?>
<?php wp_reset_postdata(); ?>
        </ul>
      </section>
    </div>
    <section class="recommended">
      <h2>カテゴリー別おすすめ</h2>
      <div class="article-wrap">

      <?php $categories = get_terms('category');
      foreach($categories as $mycategory): ?>
        <?php 
              $args= array(
              'post_type' => 'post',
              'category_name' => $mycategory->slug,
              'tag' => 'recommended',
              'posts_per_page' => 1,
              );
              $the_query= new WP_Query( $args);
              if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();?>
                <a href="<?php the_permalink(); ?>">
                  <article class="animated">
                    <h3><?php the_title(); ?></h3>
                    <p class="category"><?php $cats = get_the_category(); echo $cats[0]->cat_name;?></p>
                    <p class="image"><?php the_post_thumbnail('thumbnail'); ?></p>
                  </article>
                </a>
        <?php endwhile; endif; ?>
        <?php wp_reset_postdata(); ?>
      <?php endforeach; ?>

      </div>
    </section>
   
  </main>
 <?php get_sidebar(); ?>
 <?php get_footer(); ?>