<?php
/*
Template Name: widget
*/
?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js" ></script>
<link href="http://yupi.md/wp-content/themes/Yupi_2/css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css" />


<style>
*{
	margin:0px;
	padding:0px;
	}
	
#widget-sport a {
	text-decoration:none;
}
	
#widget-sport {
	width: 280px;
	border-bottom:solid 1px #cc0000;
}
	
#widget-sport h1{
	width:100%;
	font-size:17px;
	font-weight:100;
	color:#fff;
	position:absolute;
	bottom:0;
	background: rgba(231, 70, 40, 0.8)!important;
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
	z-index:20;
	padding:4px;
	
	
}

.widget-image {
	height:160px;
	overflow:hidden;
	position:relative;
	z-index:10;
	margin-bottom:5px;
}

.widget-middle a {
font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;

display:block;
width:100%;
	background-color:#cc0000;
	height:30px;
	background-image:url(http://yupi.md/wp-content/themes/Yupi_2/img/logo.png);
	background-repeat:no-repeat;
	background-size:90px 30px;
	background-position:center; 
}

.content{margin:0px; width:279px; height:218px; padding:0px; overflow:auto; border-left:solid 1px #cc0000;}


#widget-sport .content img {
	float:left;
	margin-right:4px;
}

#widget-sport .content a h3{
	font-size:12px;
	font-weight:100;
	font-family:arial;
	color:#333;
}

#widget-sport .content li {
	list-style-type:none;
	padding:2px 0;
	clear:both;
}

</style>
<script>
    (function($){
        $(window).load(function(){
            $(".content").mCustomScrollbar({
			scrollInertia:1000,
			callbacks:{
			onTotalScrollOffset: 400
}
					
			 });
        });
    })(jQuery);
	
</script>


<?php $args = array( 'posts_per_page' => 11, 'category' => '35');
$myposts = get_posts( $args );
shuffle($myposts);

?>

<div id="widget-sport">
	<div class="widget-top">
		<a href="http://Yupi.md/<?php echo $myposts[0]->post_name ?>?utm_campaign=<?php echo $myposts[0]->post_title?>&utm_source=Sport1&utm_medium=Top" target="_blank"  >
		<div class="widget-image">
		<?php echo yupi_get_the_post_thumbnail($myposts[0]->ID,array(300,300)); ?>
		<h1><?php echo $myposts[0]->post_title ?></h1></a>
		</div>
		
	</div>
	
	<div class="widget-middle">
	<a href="http://Yupi.md" target="_blank"></a>
	</div>
	
			<div class="content">
			
			<?php for($i=1;$i<11;$i++){?>
					<li class="slide_1"><a href="http://Yupi.md/<?php echo $myposts[$i]->post_name ?>?utm_campaign=<?php echo $myposts[0]->post_title?>&utm_source=Sport1&utm_medium=Bottom" target="_blank">
					<?php echo yupi_get_the_post_thumbnail($myposts[$i]->ID,array(80,80)); ?>
					<h3><?php echo $myposts[$i]->post_title ?></h3>
					</a><li>
					<?php } ?>
			</div>
</div>





<script src="http://yupi.md/wp-content/themes/Yupi_2/script/jquery.mCustomScrollbar.min.js"></script>