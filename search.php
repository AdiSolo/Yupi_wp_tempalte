<?php get_header();
/*
Template Name: Search
*/
$search_term = isset($_GET['q']) ? sanitize_text_field(wp_unslash($_GET['q'])) : '';
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$search_query = new WP_Query(array(
	's' => $search_term,
	'paged' => $paged,
	'posts_per_page' => 10,
));
?>
<div id="content" class="search_page">
<div class="left_index_content">
	<h2 id="search-result">Rezultatele căutării<?php if ($search_term) : ?> pentru &bdquo;<?php echo esc_html($search_term); ?>&rdquo;<?php endif; ?></h2>

	<?php if ($search_query->have_posts()) : ?>
		<?php while ($search_query->have_posts()) : $search_query->the_post(); ?>
			<div id="post-<?php the_ID(); ?>" class="post post-small">
				<a href="<?php the_permalink(); ?>">
					<?php yupi_post_thumbnail(array(300, 200), array('title' => '')); ?>
				</a>
				<h1 class="title">
					<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
				</h1>
			</div>
		<?php endwhile; ?>
		<div class="clear"></div>
		<?php
		$big = 999999999;
		echo paginate_links(array(
			'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
			'format' => '?paged=%#%',
			'current' => max(1, $paged),
			'total' => $search_query->max_num_pages,
			'add_args' => array('q' => $search_term),
		));
		?>
	<?php else : ?>
		<p>Nu am găsit niciun rezultat<?php if ($search_term) : ?> pentru &bdquo;<?php echo esc_html($search_term); ?>&rdquo;<?php endif; ?>. Încearcă alți termeni.</p>
	<?php endif;
	wp_reset_postdata(); ?>

</div>

<?php get_sidebar(); ?>

</div>
</div>
<?php get_footer(); ?>
