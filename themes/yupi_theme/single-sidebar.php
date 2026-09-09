<script src="<?php bloginfo('template_url'); ?>/script/jquery.mousewheel.js"></script>
<script src="<?php bloginfo('template_url'); ?>/script/perfect-scrollbar.js"></script>
<?php
global $post;
$post_id = $post->ID;
?>
<script>
	jQuery(document).ready(function($) {
		"use strict";
		$('#Default').perfectScrollbar();
	});
	jQuery(document).ready(function($) {
		$(".contentHolder").css("height", $(window).height() - 100);
	});
	$(window).resize(function() {
		jQuery(document).ready(function($) {
			$(".contentHolder").css("height", $(window).height() - 100);
		});
	});
	$(document).ready(function() {
		$('.abonare_close').hover(
			function() {
				$(".abonare-right").css({
					"background-color": "#fafafa"
				});
			},
			function() {
				$(".abonare-right").css({
					"background-color": "white"
				});
			}
		);

	});
</script>
<script>
	$("#closer").click(function() {
		$(".abonare-after-restore").hide();
	});
</script>
<style>
	.contentHolder {
		position: relative;
		margin: 0px auto;
		padding: 0px;
		width: 325px;
		height: 400px;
		overflow: hidden;
	}

	.spacer {
		text-align: center
	}
</style>

<div id="sidebar" class="single-sidebar">
	<div class="sidebar-shadow"></div>

	<!--		
<div id='div-gpt-ad-1398978669235-0' style='width:300px; height:300px; margin-bottom:10px; float:left;'>
<script type='text/javascript'>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1398978669235-0'); });
</script>
</div>
-->

	<div id="sidebar-saver">

		<div class="sidebar-fixed">
			<div class="abonare-sidebar abonare-right">
				<h5>Cele mai bune articole în căsuța ta de e-mail</h5>
				<form action="http://yupi.md/wp-content/plugins/newsletter/do/subscribe.php" method="post" onsubmit="return newsletter_check(this)"><input type="hidden" name="nr" value="page" />
					<input type="email" size="20" name="ne" class="newsletter-email" value="Adresa de e-mail" onclick="if (this.defaultValue==this.value) this.value=''" onblur="if (this.value=='') this.value=this.defaultValue" />
					<input class="newsletter-submit" type="submit" value="Abonează-mă" />
				</form>
			</div>
			<div style="padding: 20px 15px;">
				<a href="https://akora.ro/collections/set-cutite-profesionale" target="blank">Set cutite profesionale</a>
			</div>



			<div class="sidebar-shadow"></div>
			<div id="Default" class="contentHolder">
				<div class="content">
					<ul class="sidebar-posts">
						<?php add_filter('posts_where', 'filter_where');
						$count = 0; ?>
						<?php query_posts('meta_key=post_views_count&orderby=meta_value_num&order=DESC&posts_per_page=20');
						while (have_posts()) : the_post(); ?>
							<li>
								<a href="<?php the_permalink(); ?>">
									<div class="img_box">
										<?php the_post_thumbnail('side-thumb'); ?>
									</div>
									<h6><?php the_title(); ?></h6>
								</a>
							</li>
						<?php endwhile; ?>

					</ul>



				</div>
			</div>
		</div>
	</div>

</div>

</div>

<script>
	jQuery(document).ready(function() {
		jQuery(document).on('scroll', function() {
			if (jQuery('.sidebar-fixed')[0].offsetTop < $(document).scrollTop()) {
				jQuery(".sidebar-fixed").css({
					position: "fixed",
					top: 0
				});
			}
			if (jQuery(document).scrollTop() < $("#sidebar-saver")[0].offsetTop) {
				$(".sidebar-fixed").css({
					position: "static",
					top: 0
				});
			}
		});
	});
</script>


<a href="#top" class="to_top"></a>