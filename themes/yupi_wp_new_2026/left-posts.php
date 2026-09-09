<?php $pageNumber = (get_query_var('paged')) ? get_query_var('paged') : 1;   ?>
<?php
global $post;
$args = array( 'numberposts' => 7, 'offset'=> $pageNumber*7-7, 'category' => "1"   );
$myposts = get_posts( $args );
$count =0;
foreach( $myposts as $post ) :	setup_postdata($post); ?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail(array('size' => 560,600), array('title' => '')); ?></a>
<h1 class="title"><a href="<?php the_permalink(); ?>"  rel="bookmark"><?php the_title(); ?> </a> </h1>
<div class="description"><?php the_excerpt(); ?> </div>
<div class="post_meta">


<?php  edit_post_link(); ?><?php  if ( is_user_logged_in() ) { echo getPostViews(get_the_ID()); }; ?>
<div class="index-like">
<div class="place">
<a class="socialite facebook-like"  style="float:left" href="https://www.facebook.com/sharer.php?u=https://www.socialitejs.com&t=Socialite.js" rel="nofollow" target="_blank" data-href="<?php the_permalink() ?>" data-send="false" data-layout="standart" data-width="450" data-show-faces="false"><span class="vhidden">Îmi place!</span></a>
</div>
<a href="<?php the_permalink(); ?>/#com" class="meta_comment">Comentează</a></span>
</div>
</div>

</div>
<?php endforeach; ?>