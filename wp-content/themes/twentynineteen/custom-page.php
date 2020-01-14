<?php
/* Template Name: Custom page template */

$args = array(
  'post_type' => 'post',
  'posts_per_page' => 10,
   'meta_key' => '_wporg_meta_key',
   'orderby' =>  'meta_value',
    'order' => 'ASC'
);
$the_query = new WP_Query($args);

if($the_query->have_posts()){
    while ($the_query->have_posts()){
        $the_query->the_post(); ?>
        <h2><?php the_title();?></h2>
<?php    }
}

wp_reset_postdata();