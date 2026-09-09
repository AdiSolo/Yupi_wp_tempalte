<?php $pageNumber = (get_query_var('paged')) ? get_query_var('paged') : 1;   ?>


<div class="page2-new">
<?php
global $post;

$args = array( 'numberposts' => 10, 'offset'=> ($pageNumber*4-4), 'category' => "1,2"   );
$myposts = get_posts( $args );
foreach( $myposts as $post ) :	setup_postdata($post); ?>
<div class="post">
<a href="<?php the_permalink(); ?>"> <?php yupi_post_thumbnail(array(300, 300), array('title' => '')); ?></a>
<h1 class="title"><a href="<?php the_permalink(); ?>"  rel="bookmark"><?php the_title(); ?> </a> </h1>
<div class="post_meta">
<?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' în urmă '; ?></div>
</div>
<?php endforeach; ?>
</div>


<div class="page2-old">
<?php
global $post;
$args = array( 'numberposts' => 5, 'offset'=> ($pageNumber*2-2), 'category' => 31 , order=>"rand"  );
$myposts = get_posts( $args );
foreach( $myposts as $post ) :	setup_postdata($post); ?>
<div class="post">
<a href="<?php the_permalink(); ?>"> <?php yupi_post_thumbnail(array(265, 265), array('title' => '')); ?></a>
<h1 class="title"><a href="<?php the_permalink(); ?>"  rel="bookmark"><?php the_title(); ?> </a> </h1>

</div>
<?php endforeach; ?>
</div>


