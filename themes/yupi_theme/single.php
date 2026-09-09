<?php get_header(); ?>

<div id="content">

	<h1 class="singletitle"><?php the_title(); ?></h1>

	<div class="single">
		<?php if (have_posts()) while (have_posts()) : the_post(); ?>

			<ul class="post-meta">
				<?php
				date_default_timezone_set('Europe/Kiev');
				$date = the_date('M.j.Y.G.i', '', '', FALSE);
				$date = explode(".", $date);
				$mounth = $date[0];
				$luna = array(
					"Jan" => "Ian",
					"Feb" => "Feb",
					"Mar" => "Mar",
					"Apr" => "Apr",
					"May" => "Mai",
					"Jun" => "Iun",
					"Jul" => "Iul",
					"Aug" => "Aug",
					"Sep" => "Sep",
					"Oct" => "Oct",
					"Nov" => "Noi",
					"Dec" => "Dec",
				);
				?>

				<li class="single_author_avatar"><?php //userphoto_the_author_thumbnail() 
													?></li>
				<li class="single_author_name"><?php echo get_the_author() ?>, </li>

				<li class="time-meta">

					<?php
					if (date('Yz') == get_the_time('Yz')) {
						echo 'Astăzi, ' . $date[3] . ":" . $date[4];
					} else if (date('Y') == get_the_time('Y') && date('z') == get_the_time('z') + 1) {
						echo "Ieri, " . $date[3] . ":" . $date[4];
					} else {
						echo $date[1] . " " . $luna[$mounth] . ", " . $date[2];
					};

					?>

				</li>
			</ul>

			<div class="single-featured-img">
				<?php
				if (class_exists('kdMultipleFeaturedImages')) {
					kd_mfi_the_featured_image('featured-image-2', 'post', 'intro-image');
				}
				echo get_the_post_thumbnail($post_id, 'full');

				?>
			</div>

			<div class="single-border-content">



				<div class="post_content">
					<?php the_content(); ?>
				</div>


				<div id="single-social-bar">
					<span class="social-red"></span>
					<ul>
						<li>
							<div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="standard" data-action="like" data-show-faces="false" data-share="false"></div>
						</li>

						<li>
							<a href="https://twitter.com/share" class="twitter-share-button" data-via="YupiMD" data-lang="ro" data-count="none">Tweet</a>
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

						<li class="plusone ">
							<script type="text/javascript" src="https://apis.google.com/js/platform.js">
								{
									lang: 'ro'
								}
							</script>

							<div class="g-plusone" data-size="medium" data-annotation="none"></div>
						</li>


					</ul>
				</div>

				<?php if (in_category(49)) { ?>

					<div id="single_follow_under">
						<span>
							<img src="<?php bloginfo('template_url'); ?>/img/like.png" alt="Yupi!" height="100" width="100">
							<h4>Hai să fim prieteni</h4>
							<p>Cu fiecare like noi devenim mai buni</p>

							<div class="fb-like" data-href="https://facebook.com/yupi.md" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
							</li>

						</span>
						<div class="under_newsletter">
							<h4>Abonează-te!</h4>
							<p>Lasă-ne adresa ta de e-mail, iar noi vom avea grijă să primești cele mai bune articole de pe Yupi.md</p>
							<div class="abonare-sidebar">
								<form action="http://yupi.md/wp-content/plugins/newsletter/do/subscribe.php" method="post" onsubmit="return newsletter_check(this)"><input type="hidden" name="nr" value="page" />
									<input type="email" size="21" name="ne" class="newsletter-input" value="Adresa de e-mail" onclick="if (this.defaultValue==this.value) this.value=''" onblur="if (this.value=='') this.value=this.defaultValue" />
									<input class="newsletter-submit" type="submit" value="Abonează-mă" />
								</form>
							</div>
						</div>
					</div>
				<?php } ?>

				<?php if (!is_single(112341)) { ?>

					<ul class="recommend-posts">
						<ol>
							<h4>Articole recomandate</h4>
						</ol>
						<?php
						$args = array('posts_per_page' => 6, 'category' => 31, 'orderby' => 'rand', 'order'    => 'ASC');
						$myposts = get_posts($args);
						foreach ($myposts as $post) : setup_postdata($post); ?>
							<li class="related-large">
								<a href="<?php the_permalink() ?>">
									<div class="img_box">
										<?php the_post_thumbnail(array('size' => 300, 200), array('title' => '')); ?>
									</div>
									<h3><?php the_title(); ?></h3>
								</a>
							</li>
						<?php endforeach;
						wp_reset_postdata(); ?>

					</ul>

				<?php } ?>

				<?php setPostViews(get_the_ID()); ?>



				<div id="comment-box">
					<a name="coment-anchor"></a>
					<div class="fb-comments" data-href="<?php the_permalink(); ?>" data-num-posts="15" data-colorscheme="light" data-width="730" style="margin-top:10px"></div>
					<div class="comment_old">
						<?php
						$ro_seo = get_post_meta(get_the_ID(), 'romania_seo', true);

						if ($ro_seo == 1) {
							comments_template();
						}

						?>
					</div>
				</div>


				<ul class="next-pre-posts">

					<?php
					$p = get_adjacent_post(false, '', true);


					if (!empty($p)) echo '<li><a href="' . get_permalink($p->ID) . '" title="' . $p->post_title . '"><span></span><div>
   <p>Precedent</p><h4>' . $p->post_title . '</h4></div></a>';

					if (empty($p)) echo '<li class="no_previous"><a href="javascript:;"><span></span><div>
   <p>Precedent</p><h4></h4></div></a>';


					$n = get_adjacent_post(false, '', false);
					if (!empty($n)) echo '<li><a href="' . get_permalink($n->ID) . '" title="' . $n->post_title . '"><span></span><div>
   <p>Următor</p><h4>' . $n->post_title . '</h4></div></a>';

					if (empty($n)) echo '<li class="no_next"><a href="javascript:;"><span></span><div>
   <p>Următor</p><h4></h4></div></a>';


					?>


				</ul>



				<a href="http://www.yupi.md">
					<!-- <div id="yupi"></div> -->
				</a>
			<?php endwhile; ?>
			</div>
	</div>

	<?php locate_template(array('single-sidebar.php'), true) ?>
</div>

<style>
	.under-header-add {
		border-bottom: solid 1px #d3d3d3;
	}
</style>

<?php get_footer(); ?>