<?php $pageNumber = (get_query_var('paged')) ? get_query_var('paged') : 1;   ?>
<div id="fb-root"></div>
<script>(function(e,t,n){var r,i=e.getElementsByTagName(t)[0];if(e.getElementById(n))return;r=e.createElement(t);r.id=n;r.src="//connect.facebook.net/en_US/all.js#xfbml=1&appId=334238173276462";i.parentNode.insertBefore(r,i)})(document,"script","facebook-jssdk")</script>
<div id="left-post-box">
<?php
$pagename = get_query_var('pagename');
global $post;

$args = array( 'numberposts' => 3, 'offset'=> $pageNumber*3-3, 'category' => "1"   );
$myposts = get_posts( $args );
foreach( $myposts as $post ) :	setup_postdata($post); ?>

<div id="post-<?php the_ID(); ?>" class="post">
<a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail(array('size' => 560,600), array('title' => '')); ?></a>
<h1 class="title"><a href="<?php the_permalink(); ?>"  rel="bookmark"><?php the_title(); ?> </a> </h1>
<div class="description"><?php the_excerpt(); ?> </div>
<div class="post_meta">
<div style="float:left; ">
<div class="fb-like" data-href="<?php the_permalink(); ?>" data-send="false" data-width="50" layout="button_count" data-show-faces="false"></div>
</div>
<div style="float:left; margin-left:10px;">
<a target="_blank" class="mrc__plugin_uber_like_button" href="http://connect.mail.ru/share?url=<?php the_permalink(); ?>" data-mrc-config="{'cm' : '1', 'ck' : '1', 'sz' : '20', 'st' : '1', 'tp' : 'ok'}">Îmi place</a>
<script src="http://cdn.connect.mail.ru/js/loader.js" type="text/javascript" charset="UTF-8"></script></div>
<a href="<?php the_permalink(); ?>/#com" class="meta_comment">Comentează</a></span>
</div>

</div>
<?php endforeach; ?>
</div>

<div id="right-box">   
<div class="right-box-posts">
<?php
global $post;
$args = array( 'numberposts' => 2, 'offset'=> $pageNumber*7-7, 'category' =>"2 , 4 , 6 , 7 , 9 ,10,11");
$myposts = get_posts( $args );
$count =0;
foreach( $myposts as $post ) :	setup_postdata($post); ?>

<div id="post-<?php the_ID(); ?>"  class="post">
<a href="<?php the_permalink(); ?>" title="">  <?php the_post_thumbnail(array('size' => 300,300), array('title' => '')); ?></a>
<h1 class="title"><a href="<?php the_permalink(); ?>"  rel="bookmark"><?php the_title(); ?></a> </h1>
<div class="post_meta"><?php /* edit_post_link(); */?><?php /* if ( is_user_logged_in() ) { echo getPostViews(get_the_ID()); }; */?>
<span><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' în urmă '; ?>
<a href="<?php the_permalink(); ?>/#com" class="meta_comment">Comentează</a></span>
</div>
</div>
<?php endforeach; ?>
</div>
</div>




