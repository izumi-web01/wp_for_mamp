<?php get_header(); ?>
  <main role="main">
    <?php if(have_posts()):while(have_posts()):the_post(); ?>
        <div class="mainvisual slide">
        
        <div class="copy">
            <h1><?php the_title(); ?></h1>
        </div>
        </div>
        <section class="post">
            これはsingle-post.phpです
        <?php the_content(); ?>
        </section>
    <?php endwhile;else: ?>
        <p>記事がありません</p>
    <?php endif; ?>
   <?php $posts = get_field('article'); 
    if($posts): ?>
        <section class="recommended">
            <h2>関連記事</h2>
            <div class="article-wrap">
                <?php foreach($posts as $post): ?>
                <?php setup_postdata($post); ?>

       
            
                    <a href="<?php the_permalink(); ?>">
                        <article class="animated">
                            <h3><?php the_title(); ?></h3>
                            <p class="category"><?php $cats = get_the_category(); echo $cats[0]->cat_name;?></p>
                            <p class="image"><?php the_post_thumbnail('thumbnail'); ?></p>
                        </article>
                    </a>
                <?php endforeach; ?>
                <?php wp_reset_postdata();?>
            </div>    
        </section>
        
   
    
    <?php endif; ?>
    <?php get_template_part('module01'); ?>
   
  </main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>