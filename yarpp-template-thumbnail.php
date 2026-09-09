<?php if (have_posts()):?>
<ul class="recommend-posts">
<ol><h4>Articole recomandate</h4></ol>
	<?php while (have_posts()) : the_post(); ?>
		<li class="related-large">
		<a href="<?php the_permalink() ?>">
		<?php yupi_post_thumbnail(array(220, 100), array('title' => '')); ?>
		<h3><?php the_title(); ?></h3>
		</a>
		</li>
	<?php endwhile; ?>
</ul>

<?php else: ?>

<?php endif; ?>
