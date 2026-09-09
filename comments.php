 <script type="text/javascript">
function validateForm()
{
var x=document.forms["comment-form"]["author"].value;
if (x==null || x=="")
  {
  alert("Ups.. Ai uitat sa scrii numele tau");
  return false;
  }
}</script>

			<div id="comments">
<?php if ( post_password_required() ) : ?>
				<p class="nopassword"><?php _e( 'Comentariile sunt inchise de administratie' ); ?></p>
			</div><!-- #comments -->
<?php
		/* Stop the rest of comments.php from being processed,
		 * but don't kill the script entirely -- we still have
		 * to fully load the template.
		 */
		return;
	endif;
?>



<?php if ( have_comments() ) : ?>
			


			<ul class="commentlist">
				<?php wp_list_comments( ); ?>
			</ul>




<?php if(function_exists('wp_paginate_comments')) {
    wp_paginate_comments();
} ?>

<?php else : // or, if we don't have comments:

	/* If there are no comments and comments are closed,
	 * let's leave a little note, shall we?
	 */
	if ( ! comments_open() ) :
?>
	<p class="nocomments"><?php _e( 'Comentariile sunt inchise'); ?></p>
<?php endif; // end ! comments_open() ?>

<?php endif; // end have_comments() ?>

<?php comment_form(); ?>
<a name="add_comment"></a>
</div><!-- #comments -->
