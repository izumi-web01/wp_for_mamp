<?php get_header(); ?>
<style>
  /* WPループの検証用：一時的なCSS定義 */
  article{
    border: 1px dashed #ccc;
    margin-bottom: 1rem;
    padding: 1rem;
  }
  section{
    padding: 0;
  }
  h2{
    font-size: 1.5rem;
    margin-bottom: 1rem;
  }
</style>
  <main role="main">
    <div class="mainvisual slide"></div>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article>
      <h2><?php the_title(); ?></h2>
      <section class="content"><?php the_content(); ?></section>
      <p>これはindex.phpです</p>
    </article>
    <?php endwhile; else : ?>
      <p>まだ記事がありません</p>
      <p>これはindex.phpです</p>
    <?php endif; ?>
  </main>
  <?php get_sidebar(); ?>
 <?php get_footer(); ?>