<?php
/*
Template Name: Author
*/

get_header(); ?>


			<div id="content">

<div id="profile_page">
<div id="profile_other">
<?php $id = $_GET["id"]; ?>
	 <div class='anonym'></div>
     <p id="anonym_datails"><span><?php echo $_GET["n"];?></span>a commentat ca vizitator si nu are cont pe www.Yupi.md</p>
     <?php $link = $_GET['link'] ;
	if (!empty($link)) {
   echo "<p>Pagina web : <a href='$link' target='_blank'>" . $link . "<p></a>";
}
	 ?>
     <?php if ( !is_user_logged_in() ) {
		 echo "<?php echo site_url(); ?>/wp-login.php?action=register' style='float:right; margin-top:80px;'>Crează un cont</a>";
		  } ?> 
     <div class="clear"></div>
     </div></div>
     
	
		</div>

<?php get_sidebar(); ?>

</div>
<div class="clear"></div>
<?php get_footer(); ?>
