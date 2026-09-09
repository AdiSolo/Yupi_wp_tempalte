<?php get_header(); ?>
<?php $pageNumber = (get_query_var('paged')) ? get_query_var('paged') : 1;
$cat_id = 47;
$top_cat_id = 48;
?>


    <div id="content">
	
	
	<div class="left_index_content" style="padding-top:20px;">
	
<?php

global $post;
$args = array( 'numberposts' => 16, 'offset'=> $pageNumber*16-16, 'category' => '47,11,1', 'category__not_in' => array($top_cat_id));
$top_args = array( 'numberposts' => 3, 'offset'=> $pageNumber*3-3, 'category' => $top_cat_id);
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
		 the_post_thumbnail(array(300, 200), array('title' => ''));
		} else  {
			the_post_thumbnail(array(300, 200), array('title' => ''));

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

if($pageNumber>1) { ?>
		 
		 <a href="https://yupi.md/page/<?php echo $pageNumber-1;?>" class="index_more_posts" style="float:left;"><< Înapoi</a>
		 
		 <?php } 

if( empty( $myposts ) )
{
     echo "Ne pare rău, nu mai avem articole pentru aceasta categorie";
} else if($count==16) {
?>
		
         <a href="https://yupi.md/page/<?php echo $pageNumber+1;?>" class="index_more_posts">Mai multe articole >></a>
		 
		 
		 
		 
<?php } ?>
	  </div>
	  
<?php get_sidebar(); ?>
</div>
</div>
<?php get_footer(); ?>

<?php /*
	if (is_user_logged_in() ) { ?>
	
	<div class="footer_like_box">
		<p>Cu un simplu "Like" ne faci sa fim mai buni! </p>
	</div>
	
<?php } */ ?>