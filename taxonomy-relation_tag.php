<?php get_header(); ?>

<?php
$type = get_query_var( 'relation_tag'); //指定したいタクソノミーを指定
$args = array(
'post_type' => array('blog' ), /* 投稿タイプを指定 */
'tax_query' => array(
'relation' => 'OR',
array(
'taxonomy' =>'relation_tag', /* 指定したい投稿タイプが持つタクソノミーを指定 */
'field' => 'slug',
'terms' => $type/* 上記で指定した変数を指定 */
),
),

'posts_per_page' => '16' /* 16件を取得 */
);
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ): ?>
<?php while ($the_query->have_posts()): $the_query->the_post(); ?>

<?php the_title();?>
<?php the_content();?>
<?php
if ($terms = get_the_terms($post->ID, 'blog_cat')) {
  foreach ( $terms as $term ) {
    echo ('<p>');
    echo esc_html($term->name);
    echo ('</p>');
    echo ('<p>');
    echo esc_html($term->slug);
    echo ('</p>');
  }
}
?>
<!-- <?php
if ($terms = get_the_terms($post->ID, 'blog_cat')) {
  foreach ( $terms as $term ) {
    echo ('<p>');
    echo esc_html($term->slug);
    echo ('</p>');
  }
}
?> -->

<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
<?php else : ?>
事例がありません。
<?php endif; ?>
これはtaxonomy-relation_tag.phpです
<?php get_footer(); ?>