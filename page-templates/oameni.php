<?php
/*
	Template Name: Oameni
*/

get_header();
$pageNumber = (get_query_var('paged')) ? get_query_var('paged') : 1;
$cat_id = 45;
$top_cat_id = 46;
?>


    <div id="content">
		<!--<div class="under_head_ad under_head_ad_single">
			<div style="margin-left:150px;">
		<!-- Under_head 
<script type="text/javascript"><!--
google_ad_client = "ca-pub-7720082345766102";
/* Post-image-729 */
google_ad_slot = "5666011664";
google_ad_width = 728;
google_ad_height = 90;
//
</script>
<script type="text/javascript"
src="//pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div>
	</div>-->
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
		
			<?php echo yupi_get_the_post_thumbnail($post_top->ID, 'big-thumb' ); ?> 
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
			yupi_post_thumbnail('big-thumb'); 
		} else  {
			yupi_post_thumbnail('small-thumb'); 
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
         <a href="https://yupi.md/foto/page/<?php echo $pageNumber+1;?>" class="index_more_posts">Mai multe articole >></a>
<?php } ?>
	  </div>
      
<?php get_sidebar(); ?>  
<?php get_footer(); ?>      
</div>
