<?php get_header(); ?>

			<div id="content" class="category-page" >
             <?php if(in_category (26)) { ?>
            	<?php if (have_posts()) : ?>
<?php while ( have_posts() ) : the_post(); ?>
            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="float:left; width:330px; height:210px; margin:0 8px;">
            <a href="<?php the_permalink(); ?>" class="post-thumbnail"> <?php yupi_post_thumbnail(array(330, 330), array('title' => '')); ?></a>

<div class="clear"></div>
</div>
     
<?php endwhile;?>

<?php endif;  ?>
            
            
            <?php } else { ?>
         

				<h1 class="page-title"><?php
					printf( __( 'Categoria : %s', '' ), '<span>' . single_cat_title( '', false ) . '</span>' );
				?></h1>
				<?php if (have_posts()) : ?>
<?php while ( have_posts() ) : the_post(); ?>

            
           
        
			<div id="post-<?php the_ID(); ?>" class="post post-small">
<a href="<?php the_permalink(); ?>" class="post-thumbnail"> <?php yupi_post_thumbnail(array(300, 200), array('title' => '')); ?></a>
<h1 class="title"><a href="<?php the_permalink(); ?>"  rel="bookmark"><?php the_title(); ?></a> </h1>
<div class="post_meta">

<span><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' în urmă '; ?> | <a href="<?php the_permalink(); ?>/#com" class="meta_comment"> Comentarii </a></span>
</div>

<div class="clear"></div>
</div>
     
<?php endwhile;?>

<?php endif;  ?>
    <?php } ?>   

			  <?php paginate();?>
			   
			</div>

<?php get_sidebar(); ?>

</div>
<?php get_footer(); ?>