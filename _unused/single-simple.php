<script>
$(document).ready(function(){
$(".close-source").click(function () {
    $(".visitor-source").css("display", "none");
    });  });
</script>
<?php
$social=like; 
if(in_category( 'recomand' )) {
	$social=recommend;
}

?>

<h1 class="title"><?php the_title(); ?></h1>
<ul id="single_meta">
<li>
<li><?php incomplete_cat_list(', ') ?></li>
<li style="margin-top:4px;">Publicat cu <?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' în urmă '; ?></li><?php edit_post_link(); ?><?php if ( is_user_logged_in() ) { echo getPostViews(get_the_ID()); };?>
<li class="float_right"><a href="#coment-anchor" class="meta_comment"><span>Comentează</span></a></li>



</ul>
<div class="post_content">
 <div style="float:left"><iframe src="//www.facebook.com/plugins/like.php?href=<?php the_permalink(); ?>&amp;send=false&amp;layout=standard&amp;width=450&amp;show_faces=false&amp;action=<?php echo $social; ?>&amp;colorscheme=light&amp;font&amp;height=24" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:24px;" allowTransparency="true"></iframe></div>
<div style="float:right; width:30px;"><a target="_blank" class="mrc__plugin_uber_like_button" href="http://connect.mail.ru/share" data-mrc-config="{'nc' : '1', 'nt' : '1', 'cm' : '3', 'ck' : '1', 'sz' : '20', 'st' : '1', 'tp' : 'ok'}">Kls!</a>
<script src="http://cdn.connect.mail.ru/js/loader.js" type="text/javascript" charset="UTF-8"></script></div>
<div class="clear"></div>
<!--mfunc echo 'real time = '.date('H i s',time()); echo "" -->
<?php 

$referral = $_SERVER['HTTP_REFERER'];
$referral = strtolower($referral);
preg_match("/^(http:\/\/)?([^\/]+)/i", $referral, $result);
$referral = $result[2]; 
if ($referral=="torrentsaaamd.com") {
echo "<div class='visitor-source'>Ai ajuns aici de pe <span class='tmd'></span>. Daca esti nou pe acest site, îți recomandăm să ne urmărești pe Facebook pentru a fi la curent cu tot ce'i mai bun pe net => <span class='like-vised'><div class='fb-like' data-href='http://www.facebook.com/yupi.md' data-send='false' data-width='50' layout='button_count' data-show-faces='false'></div></span><span class='close-source'></span></div>";
} else if (strpos($referral, 'goaaaaaogle')) {
echo "<div class='visitor-source'>Ai ajuns aici căutând ceva pe Google? Daca esti nou pe acest site, îți recomandăm să ne urmărești pe Facebook pentru a fi la curent cu tot ce'i mai bun pe net => <span class='like-vised'><div class='fb-like' data-href='http://www.facebook.com/yupi.md' data-send='false' data-width='50' layout='button_count' data-show-faces='false'></div></span><span class='close-source'></span></div>";
} else {};
 ?>
 
<script type="text/javascript">
<!--
var source = document.referrer;
var message = "";
var str = source.match(/torrentsmd.com/g)
if(str == "torrentsmd.com") {
	message = "<div class='visitor-source'>Ai ajuns aici de pe <span class='tmd'></span>. Daca esti nou pe acest site, îți recomandăm să ne urmărești pe Facebook pentru a fi la curent cu tot ce'i mai bun pe net => <span class='like-vised'><div class='fb-like' data-href='http://www.facebook.com/yupi.md' data-send='false' data-width='50' layout='button_count' data-show-faces='false'></div></span><span class='close-source'></span></div>";
};
var str = source.match(/google/g)
if(str == "google") {
	message = "<div class='visitor-source'>Ai ajuns aici căutând ceva pe Google? Daca esti nou pe acest site, îți recomandăm să ne urmărești pe Facebook pentru a fi la curent cu tot ce'i mai bun pe net => <span class='like-vised'><div class='fb-like' data-href='http://www.facebook.com/yupi.md' data-send='false' data-width='50' layout='button_count' data-show-faces='false'></div></span><span class='close-source'></span></div>";
};
document.write (message);
</script>

<?php the_content();?>
</div>

  <div id="facebook_like">
   <div class="recommend_buttons">
   <iframe src="//www.facebook.com/plugins/like.php?href=<?php the_permalink(); ?>&amp;send=false&amp;layout=box_count&amp;width=100&amp;show_faces=false&amp;action=<?php echo $social; ?>&amp;colorscheme=light&amp;font&amp;height=85" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100px; height:65px; float:left;" allowTransparency="true"></iframe>
    <div class="odno-like" style="width:70px;">
     <a target="_blank" class="mrc__plugin_uber_like_button" href="<?php the_permalink(); ?>" data-mrc-config="{'cm' : '1', 'ck' : '1', 'sz' : '20', 'st' : '1', 'tp' : 'ok', 'vt' : '1'}">Нравится</a>
<script src="http://cdn.connect.mail.ru/js/loader.js" type="text/javascript" charset="UTF-8"></script>
    </div></div>



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
<!--
<div class="facebook-single-like-box">
<strong>Urmărește-ne: <div class="fb-like" data-layout="button_count"  data-href="https://www.facebook.com/Yupi.md" data-send="false" data-width="50" data-show-faces="false"></div></strong>
<p>și fii primul care află tot ce'i mai bun pe net</p>
</div>
-->
<?php related_posts(array ('exclude' => array ('category' => 30))); ?>
<p id="alex"></p>
<a name="coment-anchor"></a>
<div class="fb-comments" data-href="<?php the_permalink(); ?>" data-num-posts="7" data-width="640"></div>
<?php comments_template( '', true );  ?>
<script> jQuery("#author").DefaultValue("Numele tau"); </script>


