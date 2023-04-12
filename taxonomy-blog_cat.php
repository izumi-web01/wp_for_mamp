<?php get_header(); ?>
<?php
$type = get_query_var( 'blog_cat'); //指定したいタクソノミーを指定
$args = array(
'post_type' => array('blog' ), /* 投稿タイプを指定 */
'tax_query' => array(
'relation' => 'OR',
array(
'taxonomy' =>'blog_cat', /* 指定したい投稿タイプが持つタクソノミーを指定 */
'field' => 'slug',
'terms' => $type, /* 上記で指定した変数を指定 */
),
),
'paged' => $paged,
'posts_per_page' => '16' /* 16件を取得 */
);

if ($terms = get_the_terms($post->ID, 'blog_cat')) {
  foreach ( $terms as $term ) {
    echo ('<p>');
    echo esc_html($term->name);
    echo ('</p>');
  }
}

$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ): ?>
<?php while ($the_query->have_posts()): $the_query->the_post(); ?>

<?php the_title();?>

<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
<?php else : ?>
事例がありません。
<?php endif; ?>
<?php get_footer(); ?>