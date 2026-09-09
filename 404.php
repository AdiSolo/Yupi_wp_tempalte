<?php get_header(); ?>

<div id="content">
	<div class="left_index_content" style="padding-top:20px; text-align:center;">
		<img src="<?php bloginfo('template_url'); ?>/img/404.png" alt="Pagina nu a fost găsită" style="max-width:100%; height:auto; margin:20px auto;">
		<h1 class="title" style="text-align:center;">Ne pare rău, pagina căutată nu există</h1>
		<p style="text-align:center; margin:15px 0 30px;">S-ar putea să fi fost mutată sau ștearsă. Încearcă să cauți din nou sau <a href="<?php echo esc_url(home_url('/')); ?>">întoarce-te la pagina principală</a>.</p>
	</div>
	<?php get_sidebar(); ?>
</div>
</div>
<?php get_footer(); ?>
