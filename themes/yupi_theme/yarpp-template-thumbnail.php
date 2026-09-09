<?php if (have_posts()):?>
<ul class="recommend-posts">
<ol><h4>Articole recomandate</h4></ol>
	<?php while (have_posts()) : the_post(); ?>
		<?php if (has_post_thumbnail()):?>
		<li class="related-large">
		<a href="<?php the_permalink() ?>">
		<?php the_post_thumbnail(array('size' => 220,100), array('title' => '')); ?>
		<h3><?php the_title(); ?></h3>
		</a>
		</li>
		<?php endif; ?>
	<?php endwhile; ?>
</ul>

<?php else: ?>

<?php endif; ?>
