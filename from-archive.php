<?php $pageNumber = (get_query_var('paged')) ? get_query_var('paged') : 1;   ?>
<div class="page2">
<div class="post-box-header">
<div class="wrapp">
<h2>Tot ce'i mai bun pe net</h2>
<h2 style=" margin-left:480px;">Din arhivă</h2>
<div class="post-header-fb" style="margin-right:0px;">
<div class="fb-like"  data-href="http://www.facebook.com/yupi.md" data-send="false" data-width="320" data-show-faces="false"></div>
</div>
</div></div>
<div class="wrapp">
<div id="content">
<div class="page2-new">
<?php
global $post;
$count =0;
$args = array( 'numberposts' => 14, 'offset'=> ($pageNumber*14-14), 'category' => "-9"   );
$myposts = get_posts( $args );
foreach( $myposts as $post ) :	setup_postdata($post); ?>

<div class="post">
<a href="<?php the_permalink(); ?>"><div style="height:150px; overflow:hidden"> <?php the_post_thumbnail(array('size' => 300,300), array('title' => '')); ?></div></a>
<h1 class="title"><a href="<?php the_permalink(); ?>"  rel="bookmark"><?php the_title(); ?> </a> </h1>
<div class="post_meta">
<?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' în urmă '; ?></div>
</div>
<?php endforeach; ?>
</div>
<div class="page2-old">
<?php
global $post;
$args = array( 'numberposts' => 9, 'offset'=> 0, 'category' => "31" , 'orderby' => 'rand'  );
$myposts = get_posts( $args );
foreach( $myposts as $post ) :	setup_postdata($post); ?>
<div class="post">
<a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail(array('size' => 255,255), array('title' => '')); ?></a>
<h1 class="title"><a href="<?php the_permalink(); ?>"  rel="bookmark"><?php the_title(); ?> </a> </h1>
</div>
<?php endforeach; ?>
</div>
<a href='https://yupi.md/page/<?php echo $pageNumber+1 ?>' class='older'>Mai multe articole</a>