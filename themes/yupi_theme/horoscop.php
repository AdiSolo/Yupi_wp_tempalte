<?php
$id_title = get_the_ID();
$page_title = get_the_title( $post_id ); 
 get_header(); 
/*
Template Name: Horoscop
*/

define('DONOTCACHEPAGE', true);
 ?>
<div id="content">
<div class="left_index_content" style="width:auto;">
<?php setlocale(LC_TIME, array('ro.utf-8', 'ro_RO.UTF-8', 'ro_RO.utf-8', 'ro', 'ro_RO', 'ro_RO.ISO8859-2'));    ?>
<?php if($page_title=="Horoscop"): ?>

<div class="horoscope-content">
<?php $zodii= array("Berbec","Taur","Gemeni","Rac","Leu","Fecioara","Balanta","Scorpion","Sagetator","Capricorn","Varsator","Pesti");?>
<h3>Horoscopul de astăzi – <?php echo strftime("%e %B %Y"); ?></h3>
<ul class="other-horoscope" id="horoscope-index-ul">
<?php for($i=0;$i<12;$i++) { ?>
	<li><a href="http://www.yupi.md/horoscop/<?php echo $zodii[$i] ?>" style="background: url(<?php bloginfo('template_url'); ?>/img/horoscope/<?php echo $zodii[$i]?>1.png)"></a><p><?php echo $zodii[$i]?></p></li>
<?php }; ?>

</ul>
</div>
<?php else: ?>

<div class="horoscope-content" id="horoscope-content-single">
<?php
$date= array(
"Berbec" => "21 martie - 20 aprilie",
"Taur"=> "21 aprilie - 20 mai",
"Gemeni"=> "21 mai - 21 iunie",
"Rac"=> "22 iunie - 22 iulie",
"Leu" =>"23 iulie - 22 august",
"Fecioara" =>"23 august - 22 septembrie",
"Balanta"=>"23 septembrie - 22 octombrie",
"Scorpion"=>"23 octombrie - 21 noiembrie",
"Sagetator" =>"22 noiembrie - 20 decembrie",
"Capricorn" =>"21 decembrie - 19 ianuarie",
"Varsator"=> "20 ianuarie - 18 februarie",
"Pesti"=> "19 februarie - 20 martie",
)
 ?>
<h2><?php echo $page_title;?> ( <?php echo $date[$page_title]; ?>)</h2>
<p class="img"><img src="<?php bloginfo('template_url'); ?>/img/horoscope/<?php echo $page_title;?>.jpg" width="400" height="250" /></p>
<h3>Horoscopul de astăzi – <?php echo strftime("%e %B %Y"); ?></h3>
<?php
include_once 'simple_html_dom.php';
$page_title = strtolower($page_title);
$url = "http://www.acvaria.com/partener-acvaria.php?z=".$page_title."";
$html = file_get_html($url);

$count=0;


    $text= $html;
	

?>
<p style="margin-bottom:10px" class="horoscop-text">
<?php echo $text;?>
</p>

<h6>Sursa: <a href="http://www.acvaria.com" target="_blank">www.avaria.com</a></h6>
</div>
<?php $zodii= array("Berbec","Taur","Gemeni","Rac","Leu","Fecioara","Balanta","Scorpion","Sagetator","Capricorn","Varsator","Pesti");?>
<ul class="other-horoscope">
<?php for($i=0;$i<12;$i++) { ?>
	<li><a href="http://www.yupi.md/horoscop/<?php echo $zodii[$i] ?>" style="background: url(<?php bloginfo('template_url'); ?>/img/horoscope/<?php echo $zodii[$i]?>1.png)"></a><p><?php echo $zodii[$i]?></p></li>
<?php }; ?>

</ul>

<?php endif ?>
</div>

<?php get_footer(); ?>