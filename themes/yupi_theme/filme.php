<?php get_header();
/*
	Template Name: Filme
*/	
	
get_header();
$pageNumber = (get_query_var('paged')) ? get_query_var('paged') : 1;
$cat_id = 41;
$top_cat_id = 42;
?>


   <div id="content">
	<!--	<div class="under_head_ad under_head_ad_single">
			<div style="margin-left:150px;">
		Under_head 
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Publicitate 
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-9984908628803867"
     data-ad-slot="6543631837"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
	</div> -->
	<div class="left_index_content" style="padding-top:20px;">
	
<?php

global $post;
$args = array( 'numberposts' => 16, 'offset'=> $pageNumber*16-16, 'category' => $cat_id, 'category__not_in' => array($top_cat_id));
$top_args = array( 'numberposts' => 4, 'offset'=> $pageNumber*4-4, 'category' => $top_cat_id);
$myposts = get_posts( $args );
$top_myposts = get_posts( $top_args );

$count =0;
$top_count = 0;
foreach ( $myposts as $post ) : setup_postdata($post); 
$count++;
$class = 'post-small';
if($count==1 || $count==5 || $count==13 || $count==18) {
	if($top_myposts[$top_count]){
		$post_top=$top_myposts[$top_count];
		$top_count++;
		?>
		
		<div id="post-<?php echo $post_top->ID; ?>" class="post post-big" >
	<a href="<?php echo get_permalink( $post_top->ID ); ?>">
		
			<?php echo get_the_post_thumbnail($post_top->ID, 'big-thumb' ); ?> 
	</a>
	
	<h1 class="title">
		<a href="<?php echo get_permalink( $post_top->ID ); ?>"  rel="bookmark"><?php echo $post_top->post_title; ?></a> 
	</h1>
		<div class="description">
			<p><?php echo $post_top->post_excerpt; ?></p>
		</div>
</div>
		
		
		<?php
	}
}
?>

<div id="post-<?php the_ID(); ?>" class="post <?php echo $class; ?>" >
	<a href="<?php the_permalink(); ?>">
		<?php if($class == 'post-big') {
			the_post_thumbnail('big-thumb'); 
		} else  {
			the_post_thumbnail('small-thumb'); 
		}
		?>
	</a>
	
	<h1 class="title">
		<a href="<?php the_permalink(); ?>"  rel="bookmark"><?php the_title(); ?></a> 
	</h1>
	<?php if($class == 'post-big') { ?>
		<div class="description">
			<p><?php echo $post->post_excerpt; ?></p>
		</div>
	<?php } ?>
</div>

<?php 

endforeach; 
wp_reset_postdata();
if( empty( $myposts ) )
{
     echo "Ne pare rău, nu mai avem articole pentru aceasta categorie";
} else if($count==16) {
?>
         <a href="http://yupi.md/filme/page/<?php echo $pageNumber+1;?>" class="index_more_posts">Mai multe articole >></a>
<?php } ?>
	  </div>
      
<?php get_sidebar(); ?>  
<?php get_footer(); ?>      
</div>
