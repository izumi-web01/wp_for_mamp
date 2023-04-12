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

<?php 
$category = array(
  '勤怠給与', '人事管理', 'コミュニケーション',
);
$args = array(
array(
  'cat'=>'勤怠給与',
  array(
    array(
    'title'=>'A',
    'text'=>'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
   array(
    'title'=>'B',
   'text'=>'bbbbbbbbbbbbbbbbbbbbbbbb') ,
   array('title'=>'C',
   'text'=>'cccccccccccccccccccccc') ,)
  
),



array(
  'cat'=>'人事管理',
  array(
    'title'=>'B',
  'text'=>'vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv')
  ,
  array(
    'title'=>'C',
  'text'=>'cccccccccccccccccccccccccccccccccccccccccccccccccccc')
  ,
  array(
    'title'=>'d',
  'text'=>'dddddddddddddddddddddddddddddddddddddddddddddddddddddd')
  ,),




array(
  'cat'=>'コミュニケーション',
 array(
   'title'=>'F',
  'text'=>'ffffff',),
 ),
);
?>


<ul class="service-all__lists">
<?php foreach($args as $arg) :?>
  <li class="service-all__list">
    <p>
      <?php  $cat = $arg['cat'];echo $cat;?>
     </p>
    <ul class="service__lists">
    <?php foreach($arg as $lists => $arr) :?>
      <li class="service__lists">
        <p>
        <?php $title = $arr['title']; echo $title;?>
        </p>
        <p>
        <?php $text = $arr['text']; echo $text;?> 
        </p>
      </li>
    <?php endforeach; ?>
    </ul>
  </li>
<?php endforeach; ?>
</ul>

<table>
  <tr>
    <th>ぷーちゃん
      <td>
        4歳
      </td>
    </th>
  </tr>
  <tr>
    <th>みーちゃん
      <td>
        4歳
      </td>
    </th>
  </tr>
</table>

  </main>
  <?php get_sidebar(); ?>
 <?php get_footer(); ?>