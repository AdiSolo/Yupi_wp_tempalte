<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="post post-small">
		<a href="<?php the_permalink(); ?>"> <?php yupi_post_thumbnail(array(300, 300), array('title' => '')); ?></a>
		<h1 class="title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
		<div class="post_meta">
			<?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' în urmă '; ?>
		</div>
	</div>
<?php endwhile;
else : ?>
	<p>Nu sunt articole pentru această arhivă.</p>
<?php endif; ?>
