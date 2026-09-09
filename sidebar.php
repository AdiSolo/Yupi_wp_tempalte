<?php if (is_single()) : ?>

	<script src="<?php bloginfo('template_url'); ?>/js/jquery.mousewheel.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/perfect-scrollbar.js"></script>
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

		<div id="sidebar-saver">

			<div class="sidebar-fixed">
				<div class="abonare-sidebar abonare-right">
					<h5>Cele mai bune articole în căsuța ta de e-mail</h5>
					<form action="https://yupi.md/wp-content/plugins/newsletter/do/subscribe.php" method="post" onsubmit="return newsletter_check(this)"><input type="hidden" name="nr" value="page" />
						<input type="email" size="20" name="ne" class="newsletter-email" value="Adresa de e-mail" onclick="if (this.defaultValue==this.value) this.value=''" onblur="if (this.value=='') this.value=this.defaultValue" />
						<input class="newsletter-submit" type="submit" value="Abonează-mă" />
					</form>
				</div>
				<div style="padding: 20px 15px;">
					<a href="https://akora.ro/collections/set-cutite-profesionale" target="blank">Set cutite profesionale</a>
				</div>
				<div style="padding: 20px 15px;">

					<a href="https://autoco.ro/masini-coreene" target="blank">Import automobile din Coreea în Romania și UE</a>
				</div>



				<div class="sidebar-shadow"></div>
				<div id="Default" class="contentHolder">
					<div class="content">
						<ul class="sidebar-posts">
							<?php
							add_filter('posts_where', 'filter_where');
							query_posts('meta_key=post_views_count&orderby=meta_value_num&order=DESC&posts_per_page=20');
							while (have_posts()) : the_post(); ?>
								<li>
									<a href="<?php the_permalink(); ?>">
										<div class="img_box">
											<?php yupi_post_thumbnail('side-thumb'); ?>
										</div>
										<h6><?php the_title(); ?></h6>
									</a>
								</li>
							<?php endwhile;
							wp_reset_query(); ?>

						</ul>



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

<?php else : ?>

	<div id="sidebar">

		<h2 class="horoscope-title">Horoscop</h2>
		<ul class="horoscope">
			<li><a href="https://www.yupi.md/horoscop/Berbec" style="color:#2d58aa;padding-left:4px;">Berbec</a></li>
			<li><a href="https://www.yupi.md/horoscop/Taur" style="color:#51912a">Taur</a></li>
			<li><a href="https://www.yupi.md/horoscop/Gemeni" style="color:#6d21b4">Gemeni</a></li>
			<li><a href="https://www.yupi.md/horoscop/Rac" style="color:#9b2b19">Rac</a></li>
			<li><a href="https://www.yupi.md/horoscop/Leu" style="color:#d07805">Leu</a></li>
			<li><a href="https://www.yupi.md/horoscop/Fecioara" style="color:#7522b9">Fecioara</a></li>
			<li><a href="https://www.yupi.md/horoscop/Balanta" style="color:#066474; padding-left:4px;">Balanta</a></li>
			<li><a href="https://www.yupi.md/horoscop/Scorpion" style="color:#832b0c">Scorpion</a></li>
			<li><a href="https://www.yupi.md/horoscop/Sagetator" style="color:#2491d2">Sagetator</a></li>
			<li><a href="https://www.yupi.md/horoscop/Capricorn" style="color:#d27700">Capricorn</a></li>
			<li><a href="https://www.yupi.md/horoscop/Varsator" style="color:#844530">Varsator</a></li>
			<li><a href="https://www.yupi.md/horoscop/Pesti" style="color:#5d9d2f">Pesti</a></li>
		</ul>

		<div id="sidebar-saver" class="home_side_saver">

			<div class="sidebar-fixed">

				<div class="abonare-sidebar abonare-right abonare-home">

				</div>

				<ul class="social_side_home">
					<li class="social_side_home_1"><a href="https://www.facebook.com/Yupi.md" target="_blank"></a></li>
					<li class="social_side_home_2"><a href="https://twitter.com/YupiMD" target="_blank"></a></li>
					<li class="social_side_home_3"><a href="http://google.com/+YupiMd" target="_blank"></a></li>
					<li class="social_side_home_4"><a href="http://vk.com/public69745946" target="_blank"></a></li>
					<li class="social_side_home_5"><a href="https://www.youtube.com/channel/UCxMroZyDEeHaug3sFr0WBTw" target="_blank"></a></li>
					<li class="social_side_home_6"><a href="https://yupi.md/feed/" target="_blank"></a></li>
				</ul>
				<a href="https://akora.ro/collections/set-cutite-profesionale" target="blank">Set cutite profesionale</a> </br>
				<a href="https://autoco.ro/masini-coreene" target="blank">Import automobile din Coreea în Romania și UE</a>


			</div>



		</div>

	</div>

<?php endif; ?>
</div>
