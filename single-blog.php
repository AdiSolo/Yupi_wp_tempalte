
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/script/jquery.smooth-scroll.min.js"></script>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/lightbox.css" type="text/css" media="screen" />
<h1 class="title"><?php the_title(); ?></h1>
<ul id="single_meta">
<li>
<li><?php incomplete_cat_list(', ') ?></li>
<li style="margin-top:4px;"><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' în urmă '; ?></li><?php edit_post_link(); ?><?php if ( is_user_logged_in() ) { echo getPostViews(get_the_ID()); };?>
<li class="float_right"><a href="#coment-anchor" class="meta_comment">Comentarii  |<span>Comentează</span></a></li>
</ul>
<div class="post_content">
 <div style="float:left"><iframe src="//www.facebook.com/plugins/like.php?href=<?php the_permalink(); ?>&amp;send=false&amp;layout=standard&amp;width=450&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=24" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:24px;" allowTransparency="true"></iframe></div>
<div style="float:right; width:30px;"><a target="_blank" class="mrc__plugin_uber_like_button" href="http://connect.mail.ru/share" data-mrc-config="{'nc' : '1', 'nt' : '1', 'cm' : '3', 'ck' : '1', 'sz' : '20', 'st' : '1', 'tp' : 'ok'}">Kls!</a>
<script src="http://cdn.connect.mail.ru/js/loader.js" type="text/javascript" charset="UTF-8"></script></div>
<div class="clear"></div>

<?php the_content();?>
</div>

               
<div id="facebook_like">
   <div class="recommend_buttons">
   <iframe src="//www.facebook.com/plugins/like.php?href=<?php the_permalink(); ?>&amp;send=false&amp;layout=box_count&amp;width=100&amp;show_faces=false&amp;action=<?php echo $social; ?>&amp;colorscheme=light&amp;font&amp;height=85" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100px; height:65px; float:left;" allowTransparency="true"></iframe>
    <div class="odno-like" style="width:70px;">
     <a target="_blank" class="mrc__plugin_uber_like_button" href="<?php the_permalink(); ?>" data-mrc-config="{'cm' : '1', 'ck' : '1', 'sz' : '20', 'st' : '1', 'tp' : 'ok', 'vt' : '1'}">Нравится</a>
<script src="http://cdn.connect.mail.ru/js/loader.js" type="text/javascript" charset="UTF-8"></script>
    </div></div>

<div id="last"></div>
<div class="follow_fb">
<div class="follow_fb_text">
<h4>Urmărește-ne!</h4>
<p>Fii primul care află tot ce'i mai bun pe net</p>
<div class="corner"><div class="first"></div><div class="second"></div></div>
</div>
<iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.facebook.com%2Fyupi.md&amp;send=false&amp;layout=button_count&amp;width=110&amp;show_faces=true&amp;action=like&amp;colorscheme=light&amp;font&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:110px; height:35px;" allowTransparency="true"></iframe>
</div>
</div>

    

<?php setPostViews(get_the_ID()); ?>
<p id="tags"><?php the_tags(); ?></p>
<div class="clear"></div>


<?php		
	$thisauthor = get_userdata(intval($author)); 
	$user = get_userdata($post->post_author);
	$author_url=get_author_posts_url($post->post_author,$user_info); 
	$authorid= $user->ID;
	 $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
?>


<div id="author-info-box">
<div class='author-avatar'><?php userphoto_the_author_photo() ?></div>
<h1 class='author-name'><?php echo  $user->first_name . " " . $user->last_name ?></h1>
<p class="author-bio"><?php  echo  $user->user_description ?></p>
<ul class="author-contact">
<?php if ($user->Facebook||$user->user_url) { ?> <li><?php echo  $user->first_name . " " . $user->last_name ?> pe</li> <?php } ?>
<?php $rest = substr("$user->user_url", 7); ?>
<?php if ($user->user_url) { ?> <li class="author-url-icon"><?php echo "<a href='$user->user_url'>$rest</a>" ?> </li> <?php } ?>
<?php if ($user->Facebook) { ?><li class="author-url-fb"><a href="<?php echo $user->Facebook ?>">Facebook</a></li></ul><?php } ?>
</div> 
<?php /*
<div id="author-other-posts">
<p>Alte articole de <?php echo  $user->first_name . " " . $user->last_name ?></p>
<ul>
<?php if (have_posts()) : ?>
<?php query_posts($query_string . '&category_name=Blog'); ?>
<?php while ( have_posts() ) : the_post(); ?>

			<div class="blog_post">
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
</div>
            
<?php endwhile; endif; ?>
</ul>
</div>
*/ ?>

<p id="alex"></p>

<a name="coment-anchor"></a>
<div class="fb-comments" data-href="<?php the_permalink(); ?>" data-num-posts="7" data-width="640"></div>
<?php comments_template( '', true );  ?>
<script> jQuery("#author").DefaultValue("Numele tau"); </script>
