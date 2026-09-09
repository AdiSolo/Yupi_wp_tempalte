<?php get_header(); ?>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/custom.css" />

<div id="content">
<div class="left_index_content">
	<h2 class="page_name"><span class="page_name_root">Yupi</span> / <span><?php echo $post->post_name; ?></span></h2>
		<div class="left_index_content">
			
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<?php the_content();?>
			<?php endwhile; ?>
		</div>		
		<?php get_sidebar(); ?>
		<?php get_footer(); ?>
</div>
</div>