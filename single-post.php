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
<!-- //テスト -->
    <?php 
        $points = array(
    '特徴1' => array(
        'title01' => '楽しい',
        'detail01' => '私とお話しするときっと楽しいです。',
        'title02' => '親しみやすい',
        'detail02' => 'わりと気取らない性格です。',
        'title03' => '頑張り屋',
        'detail03' => 'けっこう頑張る性格です',
        'icon' =>'logo.png',
        'mv' =>'kanda-gawa.jpg',
      ),
      '特徴2' => array(
        'title01' => 'かわいい',
        'detail01' => '顔がかわいい',
        'title02' => 'せがちょうどいい',
        'detail02' => 'ちょいどいいサイズ感です',
        'title03' => '太ってない',
        'detail03' => 'ダイエットしたからね。',
        'icon' =>'logo.png',
        'mv' =>'ethiopia.jpg',
      ),
      '特徴3' => array(
        'title01' => '高学歴',
        'detail01' => 'こう見えて早稲田卒です',
        'title02' => '歌がうまい',
        'detail02' => '実は昔歌手でした！',
        'title03' => '子供がいない',
        'detail03' => 'ひとりで身軽です',
        'icon' =>'logo.png',
        'mv' =>'lemon-paintings.jpg',
      ), 
    );
    foreach( $points as $name => $arr ) :?>

    
        <div class="feature">
            <figure>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/<?php $mv = $arr['mv']; echo $mv; ?>" alt="Find! Ochanomizu">

            </figure>
            <div class="feature__contents">
                <ul>
                    <li>
                        <div class="eyecatch">
                            <div class="logo">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/<?php $icon = $arr['icon']; echo $icon; ?>" alt="Find! Ochanomizu">
                            </div>
                            <p class="title"><?php $unit = $arr['title01']; echo $unit; ?></p>
                        </div>
                        <p class="detail"><?php $price = $arr['detail01']; echo $price; ?></p>
                    </li>
                
                </ul>
            </div>
            <div class="feature__contents">
                <ul>
                    <li>
                        <div class="eyecatch">
                            <div class="logo">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/<?php $icon = $arr['icon']; echo $icon; ?>" alt="Find! Ochanomizu">
                            </div>
                            <p class="title"><?php $unit = $arr['title02']; echo $unit; ?></p>
                        </div>
                        <p class="detail"><?php $price = $arr['detail02']; echo $price; ?></p>
                    </li>
                
                </ul>
            </div>
            <div class="feature__contents">
                <ul>
                    <li>
                        <div class="eyecatch">
                            <div class="logo">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/<?php $icon = $arr['icon']; echo $icon; ?>" alt="Find! Ochanomizu">
                            </div>
                            <p class="title"><?php $unit = $arr['title03']; echo $unit; ?></p>
                        </div>
                        <p class="detail"><?php $price = $arr['detail03']; echo $price; ?></p>
                    </li>
                
                </ul>
            </div>
            
        </div>
    <?php endforeach; ?>
   
  </main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>