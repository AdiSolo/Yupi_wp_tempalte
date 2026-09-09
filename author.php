<?php get_header(); ?>
<div id="content" class="author-content">
<?php		
	$thisauthor = get_userdata(intval($author)); 
	$user = get_userdata($post->post_author);
	$author_url=get_author_posts_url($post->post_author,$user_info); 
	$authorid= $user->ID;
?>


<?php
    $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
    ?>
<div id="author-info-box">
<div class='author-avatar'><?php userphoto($wp_query->get_queried_object()) ?></div>
<h1 class='author-name'><?php echo  $user->first_name . " " . $user->last_name ?></h1>
<p class="author-bio"><?php  echo  $user->user_description ?></p>
<ul class="author-contact">
<?php if ($user->facebook||$user->user_url) { ?> <li><?php echo  $user->first_name . " " . $user->last_name ?> pe</li> <?php } ?>
<?php $rest = substr("$user->user_url", 7); ?>
<?php if ($user->user_url) { ?> <li class="author-url-icon"><?php echo "<a href='$user->user_url' target='_blank'>$rest</a>" ?> </li> <?php } ?>
<?php if ($user->facebook) { ?><li class="author-url-fb"><a href="<?php echo $user->facebook ?>" target='_blank'>Facebook</a></li></ul><?php } ?>
</div>
<div class="clear"></div>
<div class="author-posts-list">

<?php if (have_posts()) : ?>
<?php query_posts($query_string . '&category_name=Blog'); ?>
<?php while ( have_posts() ) : the_post(); ?>

			<div class="blog_post">
			<div class="post_content">
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<?php the_content(); ?>
<div class="blog_meta"><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' în urmă'; ?> | <a href="<?php the_permalink(); ?>/#com" class="meta_comment"> Comentarii </a> <a href="<?php the_permalink(); ?>" class="blog_more">citeşte >></a> </div>
</div></div>
            
<?php endwhile;?>

<?php endif;  ?>
      <?php paginate();?>
</div>
</div>


<?php get_sidebar(); ?>
</div> <!-- End of content-->
<?php get_footer(); ?>