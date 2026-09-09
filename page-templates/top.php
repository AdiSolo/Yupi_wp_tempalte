<?php
/*
Template Name: Top
*/
?>
   <?php get_header(); ?>



<?php  query_posts('meta_key=post_views_count&orderby=meta_value_num&order=DESC&posts_per_page=50');
while ( have_posts() ) : the_post(); ?>
<li>
<a href="<?php the_permalink(); ?>"><div class="recommand_image"><?php yupi_post_thumbnail('slide_thumb', array('title' => ''));?></div><div style="height:60px;"><?php the_title(); ?></div></a>
</li> 
  <?php endwhile; ?>
  
  </ul>