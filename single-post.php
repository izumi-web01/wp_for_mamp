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
        <?php the_excerpt(); ?>
        </section>
    <?php endwhile;else: ?>
        <p>記事がありません</p>
    <?php endif; ?>
  <?php $posts = get_field('relation');if($posts):?>
    
    <?php foreach($posts as $post):?>
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

    <table id="cats">
  <tr>
   
      <td>
        4歳
      </td>
   
  </tr>
  <tr>
  
      <td>
        4歳
      </td>
    
  </tr>
</table>

<!-- テスト -->
<p>3つの特徴</p>
<?php 
$args = array(
   '特徴1'=>array(
        'big-title'=>'機能' ,
        'big-img'=>'nicholai-do.jpg' ,
        'title01'=>'機能の特徴1' ,
        'detail01'=>'あああああああああああああ' ,
        'img01'=>'logo-favicon.png',
        'title02'=>'機能の特徴2' ,
        'detail02'=>'いいいいいいいいいいいいい' ,
        'img02'=>'logo-favicon.png',
        'title03'=>'機能の特徴2' ,
        'detail03'=>'ううううううううううううう' ,
        'img03'=>'logo-favicon.png',),
   '特徴2'=>array(
        'big-title'=>'価格',
        'big-img'=>'otoko-zaka.jpg' ,
        'title01'=>'価格の特徴1' ,
        'detail01'=>'おおおおおおおおおおおおおおおお' ,
        'img01'=>'logo-favicon.png',
        'title02'=>'価格の特徴2' ,
        'detail02'=>'かかかかかかっかかかかっかかかｋ' ,
        'img02'=>'logo-favicon.png',
        'title03'=>'価格の特徴3' ,
        'detail03'=>'' ,
        'img03'=>'logo-favicon.png',),
   '特徴3'=>array(
    'big-title' =>'使いやすさ',
        'big-img'=>'ethiopia.jpg' ,
        'title01'=>'使いやすさの特徴1' ,
        'detail01'=>'くくくくくくくくくくくくうっく' ,
        'img01'=>'logo-favicon.png',
        'title02'=>'使いやすさの特徴1' ,
        'detail02'=>'けけけけけけけけけけけけけけｋ' ,
        'img02'=>'logo-favicon.png',
        'title03'=>'使いやすさの特徴1' ,
        'detail03'=>'こここここここここここここお' ,
        'img03'=>'logo-favicon.png',)
    
   );
   foreach($args as $arg =>$arr):?>


    <div class="feature">
        <div class="feature__contents">
            <p class="feature__contents__title">
                <?php $bigTitle = $arr['big-title']; echo $bigTitle; ?>
            </p>
            <figure class>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/<?php $bigImg = $arr['big-img']; echo $bigImg;?>" >
            </figure>
            <div class="eyecatch">
                <div class="logo">
                    <img src="<?php echo get_stylesheet_directory_uri();?>/img/<?php $img01 = $arr['img01']; echo $img01;?>" >

                </div>
                <p class="feature__title">
                    <?php $title01 = $arr['title01'];echo $title01; ?>
                </p>
            </div>
            <p class="feature__detail">
                    <?php $detail01 = $arr['detail01'];echo $detail01; ?> 
            </p>
           
            <div class="eyecatch">
                <div class="logo">
                    <img src="<?php echo get_stylesheet_directory_uri();?>/img/<?php $img02 = $arr['img02']; echo $img02;?>" >
                </div>
                <p class="feature__title">
                    <?php $title02 = $arr['title02'];echo $title02; ?>
                </p>
            </div>
            <p class="feature__detail">
                    <?php $detail02 = $arr['detail02'];echo $detail02; ?> 
            </p>
           
            <div class="eyecatch">
            <div class="logo">
                    <img src="<?php echo get_stylesheet_directory_uri();?>/img/<?php $img03 = $arr['img03']; echo $img03;?>" >

                </div>
                <p class="feature__title">
                    <?php $title03 = $arr['title03'];echo $title03; ?>
                </p>
            </div>
            <p class="feature__detail">
                    <?php $detail03 = $arr['detail03'];echo $detail03; ?> 
            </p>
        </div>
    </div>
    <?php endforeach; ?></main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>