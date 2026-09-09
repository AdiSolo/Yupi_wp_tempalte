<?php
/*
Template Name: Author
*/

get_header(); ?>


			<div id="content">

<div id="profile_page">
<div id="profile_other">
<?php $id = isset($_GET['id']) ? $_GET['id'] : ''; ?>
	 <div class='anonym'></div>
     <p id="anonym_datails"><span><?php echo isset($_GET['n']) ? esc_html($_GET['n']) : ''; ?></span>a commentat ca vizitator si nu are cont pe www.Yupi.md</p>
     <?php $link = isset($_GET['link']) ? $_GET['link'] : '';
	if (!empty($link)) {
   echo "<p>Pagina web : <a href='" . esc_url($link) . "' target='_blank'>" . esc_html($link) . "</a></p>";
}
	 ?>
     <?php if ( !is_user_logged_in() ) {
		 echo "<a href='" . esc_url(site_url()) . "/wp-login.php?action=register' style='float:right; margin-top:80px;'>Crează un cont</a>";
		  } ?>
     <div class="clear"></div>
     </div></div>
     
	
		</div>

<?php get_sidebar(); ?>

</div>
<div class="clear"></div>
<?php get_footer(); ?>
