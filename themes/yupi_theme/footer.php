<div id="footer">
	<div class="wrapp">

		<div class="footer_left">
			<img src="<?php bloginfo('template_url'); ?>/img/logo2.png" class="footer_logo" />
			<p>© 2020 Drepturi de autor Yupi.md</p>
		</div>



		<div class="abonare_footer">
			<ul class="footer_links">
				<li><a href="https://psihologiadeazi.ro/categoria/psihologie/psihologia-relatiilor/" target="blank">Psihologia relațiilor</a></li>
				<li><a href="https://estiminunata.ro/relatii/" target="blank">Relații</a></li>
				<li><a href="https://radioulsufletului.ro/pentru-suflet/" target="_blank">Articole pentru suflet</a></li>
				<li> <a href="https://www.soundstil.ro/instrumente-muzicale" target="blank">Instrumente muzicale</a> </li>
				<li> <a href="https://fokusaqua.ro/collections/osmoza-inversa" target="blank">Filtre osmoza inversa</a> </li>
				<li><a href="https://webtribe.ro/services/creare-magazin-online-shopify/" target="blank">Creare magazin shopify</a></li>
				<li> <a href="https://autoco.ro/masini-coreene" target="blank">Masini rulate import</a> </li>
			</ul>
		</div>




		<div class="footer_right">
			<div class="footer_social">
				<li class="footer_social_fb">Like pe Facebook
					<div class="fb-like" data-href="https://facebook.com/yupi.md" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false" style="margin-right:40px;"></div>
				</li>

				<li class="footer_social_twitter">Urmărește-ne pe Twitter
					<a href="https://twitter.com/YupiMD" class="twitter-follow-button" data-show-count="false">@YupiMD</a>
					<script>
						! function(d, s, id) {
							var js, fjs = d.getElementsByTagName(s)[0],
								p = /^http:/.test(d.location) ? 'http' : 'https';
							if (!d.getElementById(id)) {
								js = d.createElement(s);
								js.id = id;
								js.src = p + '://platform.twitter.com/widgets.js';
								fjs.parentNode.insertBefore(js, fjs);
							}
						}(document, 'script', 'twitter-wjs');
					</script>
				</li>
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
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/script/scripts.js"></script>
<a href="#top" class="to_top"></a>
</body>

</html>
<?php wp_footer(); ?>