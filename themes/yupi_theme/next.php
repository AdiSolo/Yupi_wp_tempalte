<?php
define('DONOTCACHEDB', true);
global $post;
$args = array( 'numberposts' => 1,  'category' => '31', 'orderby' => 'rand' );
$myposts = get_posts( $args );
foreach( $myposts as $post ) :	setup_postdata($post); ?>
<div id="slidebox">
 <span class="close"></span>
    <a href="<?php the_permalink(); ?>">
    <div class="next-post-thumb">
   <?php the_post_thumbnail(array('size' => 120,120), array('title' => ''));?>
    </div>
    <p><?php the_title(); ?>
    </a>
</div>
<?php endforeach; ?>


