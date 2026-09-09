<?php
$page_title="Horoscop";
 get_header(); 
/*
Template Name: Horoscopesa - Index
*/

 ?>

<?php setlocale(LC_TIME, array('ro.utf-8', 'ro_RO.UTF-8', 'ro_RO.utf-8', 'ro', 'ro_RO', 'ro_RO.ISO8859-2'));    ?>
</div>

<div class="horoscope-content">
<?php $zodii= array("Berbec","Taur","Gemeni","Rac","Leu","Fecioara","Balanta","Scorpion","Sagetator","Capricorn","Varsator","Pesti");?>
<h3>Horoscopul de astazi – <?php echo strftime("%e %B %Y"); ?></h3>
<ul class="other-horoscope" id="horoscope-index-ul">
<?php for($i=0;$i<12;$i++) { ?>
	<li><a href="http://www.yupi.md/horoscop/<?php echo $zodii[$i] ?>" style="background: url(<?php bloginfo('template_url'); ?>/img/horoscope/<?php echo $zodii[$i]?>1.png)"></a><p><?php echo $zodii[$i]?></p></li>
<?php }; ?>

</ul>
</div>





<?php get_sidebar(); ?>
<?php get_footer(); ?>