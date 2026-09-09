<!DOCTYPE html>
<html xmlns="https://www.w3.org/1999/xhtml" xml:lang="ro" lang="ro">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta property="fb:admins" content="100001140491605" />
	<meta name="google-site-verification" content="6tF6Yx08jr4DJ-C6T8wggiACx3sTZQbw90bKk__qOO4" />
	<link rel="shortcut icon" href="https://www.yupi.md/favi.png">
	<title> <?php wp_title(); ?></title>
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/style.css?ver=<?php echo filemtime(get_template_directory() . '/style.css'); ?>" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/styles/custom.css?ver=<?php echo filemtime(get_template_directory() . '/styles/custom.css'); ?>" />
	<link rel="image_src" href="<?php bloginfo('template_url'); ?>/img/logo.png" />

	<!-- FB / Odno -->
	<meta property="og:site_name" content="Yupi.md" />
	<meta name="medium" content="blog" />
	<?php if (is_single()) { ?>
		<meta property="og:title" content="<?php the_title(); ?>" />
		<meta property="og:type" content="article" />
		<?php
		$src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), array(200, 200), false, '');
		$og_image = $src ? $src[0] : get_template_directory_uri() . '/img/logo.png';
		?>
		<meta property="og:image" content="<?php echo esc_url($og_image); ?>" />
		<meta property="og:locale" content="ro_RO" />
		<link rel="image_src" href="<?php echo esc_url($og_image); ?>" />
		<?php
		$string = get_the_title($post->ID);
		$string = preg_replace('/\S*[^a-z0-9A-Z\s,\.]+\S*/', '', $string); ?>
		<meta name="mrc__share_title" content="<?php echo $string; ?>">
	<?php } else { ?>
		<meta property="og:title" content="Yupi.md | tot ce'i mai bun pe net" />
		<?php $og_image = get_template_directory_uri() . '/img/logo.png'; ?>
		<meta property="og:image" content="<?php echo esc_url($og_image); ?>" />
		<link rel="image_src" href="<?php echo esc_url($og_image); ?>" />
		<meta name="mrc__share_title" content="Yupi.md | tot ce'i mai bun pe net">
	<?php } ?>

	<!-- END FB / Odno -->

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/scripts.js"></script>



	<?php
	if (is_singular() && comments_open() && get_option('thread_comments'))
		wp_enqueue_script('comment-reply');
	wp_head();
	?>
	<script data-ad-client="ca-pub-9984908628803867" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-164297552-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-164297552-1');
	</script>

</head>


<body>
	<div id="fb-root"></div>
	<script>
		(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s);
			js.id = id;
			js.src = "//connect.facebook.net/ro_RO/all.js#xfbml=1&appId=130517953706177";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));

		jQuery(document).ready(function() {
			var offset = 220;
			var duration = 500;
			jQuery(window).scroll(function() {
				if (jQuery(this).scrollTop() > offset) {
					jQuery('.to_top').fadeIn(duration);
				} else {
					jQuery('.to_top').fadeOut(duration);
				}
			});

			jQuery('.to_top').click(function(event) {
				event.preventDefault();
				jQuery('html, body').animate({
					scrollTop: 0
				}, duration);
				return false;
			})

			jQuery('#mobile_menu_toggle').on('click', function() {
				var expanded = jQuery(this).attr('aria-expanded') === 'true';
				jQuery(this).attr('aria-expanded', String(!expanded));
				jQuery('#head_menu').toggleClass('is-open');
			});
		});
	</script>

	<div class="wrapp">
		<div id="all_content">
			<div id="header">

				<div class="head_meteo">
					<?php
					//global $wpdb;
					//$meteo = $wpdb->get_results( "SELECT * FROM wp_weather WHERE ID=1" );
					?>
					<!-- <img src="https://meteo.yupi.md/symb/<?php //echo $meteo[0]->img; 
																?>" width="35" height="35"/> -->
					<p><span><?php //echo $meteo[0]->temperature; 
								?>°</span>Chișinău</p>
					<h3><a href="https://meteo.yupi.md">Meteo Moldova</a></h3>
				</div>

				<div class="head_like">
					<div class="fb-like" data-href="https://facebook.com/yupi.md" data-layout="button_count" data-width="200" data-action="like" data-show-faces="false" data-share="false"></div>
				</div>

				<div class="logo_cont">
					<a href="https://Yupi.md/" id="logo">

						<img src="<?php bloginfo('template_url'); ?>/img/logo_03.png" class="logo_2" alt="Yupi.md" width="100px" height="100px">
						<img src="<?php bloginfo('template_url'); ?>/img/logo.png" class="logo_original" alt="Yupi.md" width="100px" height="100px">
					</a>

				</div>

				<ul id="head_nav">
					<li class="head_nav_scrie"><a href="<?php echo site_url(); ?>/scrie-pentru-noi/">Hai cu noi!</a> | </li>
					<li><a href="<?php echo site_url(); ?>/contact">Contact</a> | </li>
					<li><a href="<?php echo site_url(); ?>/despre-noi">Despre noi</a> | </li>
					<li><a href="<?php echo site_url(); ?>/contact">Publicitate</a> </li>
				</ul>

				<div id="head_search">
					<form action="https://www.yupi.md/cautare" role="search" method="get" id="searchform" class="search_form">
						<input size="30" title="Caută " name="q" id="sli_search_1" autocomplete="off" class="defaultText ac_input defaultTextActive" type="text">
						<script>
							jQuery("#sli_search_1").val("Caută");
						</script>
						<input value="" id="searchImage" type="submit" name="search" class="search-button">
					</form>

					<button type="button" id="mobile_menu_toggle" aria-controls="head_menu" aria-expanded="false">
						<span class="hamburger_icon"><span></span><span></span><span></span></span>
						<span class="hamburger_label">Meniu</span>
					</button>
				</div>

				<ul id="head_menu">
					<li class="head_menu_yupi"><a href="https://yupi.md">Yupi</a> </li>
					<li class="head_menu_urban"><a href="https://yupi.md/urban/">Urban</a><span></span></li>
					<li class="head_menu_arta"><a href="https://yupi.md/dragoste/">Relatii</a><span></span></li>
					<li class="head_menu_lectura"><a href="https://yupi.md/lectura/">Lectură & Dezvoltare personală</a><span></span></li>
					<li class="head_menu_filme"><a href="https://yupi.md/filme/">Filme</a><span></span></li>
					<li class="head_menu_oameni"><a href="https://yupi.md/foto/">Fotografie & Video</a><span></span></li>
					<li class="head_menu_random"><a href="https://www.yupi.md/index.php?random=1"></a></li>
				</ul>

			</div>
			<div class="under_head_ad under_head_ad_single">
				<div style="margin-left:150px;">

				</div>
			</div>