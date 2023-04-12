ダイアリー<?php get_header(); ?>
  <main role="main">
    <div class="mainvisual slide">
      <div class="copy">
        <h1><?php single_term_title(); ?></h1>
      </div>
    </div>
    これはtaxonomy.phpです
    <section class="recommended">
      <h2>御茶ノ水を「<?php single_term_title(); ?>」</h2>
      <div class="article-wrap">
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <a href="<?php the_permalink(); ?>">
          <article class="animated">
            <h3><?php the_title(); ?></h3>
            <p class="category"><?php $cats = get_the_category(); echo $cats[0]->cat_name ;?></p>
            <p class="image"><?php the_post_thumbnail('thumbnail'); ?></p>
          </article>
        </a>
       <?php endwhile;else: ?>
        <p>まだ投稿がありません</p>
        <?php endif; ?>
      </div>
    </section>

    <div class="next-posts-link"><?php next_posts_link(); ?></div>
    <div class="prev-posts-link"><?php previous_posts_link(); ?></div>
    
  </main>
  <?php get_sidebar(); ?>
  <?php get_footer(); ?>