<?php

function yupi_date_ro( $timestamp = null ) {
	if ( $timestamp === null ) {
		$timestamp = current_time( 'timestamp' );
	}
	$luni_ro = array(
		1 => 'ianuarie', 2 => 'februarie', 3 => 'martie', 4 => 'aprilie',
		5 => 'mai', 6 => 'iunie', 7 => 'iulie', 8 => 'august',
		9 => 'septembrie', 10 => 'octombrie', 11 => 'noiembrie', 12 => 'decembrie',
	);
	return date( 'j', $timestamp ) . ' ' . $luni_ro[ (int) date( 'n', $timestamp ) ] . ' ' . date( 'Y', $timestamp );
}

if( class_exists( 'kdMultipleFeaturedImages' ) ) {

        $args = array(
                'id' => 'featured-image-2',
                'post_type' => 'post',      // Set this to post or page
                'labels' => array(
                    'name'      => 'Featured image 2',
                    'set'       => 'Set featured image 2',
                    'remove'    => 'Remove featured image 2',
                    'use'       => 'Use as featured image 2',
                )
        );

        new kdMultipleFeaturedImages( $args );
}

function admin_css() {
   echo '<style type="text/css">
           #featured-image-2-featuredimage {
			color:red;
		   }
         </style>';
}

add_action('admin_head', 'admin_css');

add_image_size( 'intro-image', 730, 300,true );
add_image_size( 'small-thumb', 335, 200,true );
add_image_size( 'big-thumb',   700, 300,true );
add_image_size( 'side-thumb',   70, 50,true );

function yupi_placeholder_image_url() {
	return get_template_directory_uri() . '/img/no-image-placeholder.png';
}

function yupi_post_thumbnail( $size = 'post-thumbnail', $attr = '' ) {
	if ( has_post_thumbnail() ) {
		the_post_thumbnail( $size, $attr );
		return;
	}
	echo '<img src="' . esc_url( yupi_placeholder_image_url() ) . '" class="attachment-' . esc_attr( is_array( $size ) ? implode( 'x', $size ) : $size ) . ' wp-post-image placeholder-image" alt="" />';
}

function yupi_get_the_post_thumbnail( $post_id = null, $size = 'post-thumbnail', $attr = '' ) {
	if ( has_post_thumbnail( $post_id ) ) {
		return get_the_post_thumbnail( $post_id, $size, $attr );
	}
	return '<img src="' . esc_url( yupi_placeholder_image_url() ) . '" class="wp-post-image placeholder-image" alt="" />';
}


function extra_contact_info($contactmethods) {

unset($contactmethods['aim']);

unset($contactmethods['yim']);

unset($contactmethods['jabber']);

$contactmethods['facebook'] = 'Facebook';

return $contactmethods;

}

add_filter('user_contactmethods', 'extra_contact_info');


 if ( current_user_can('contributor') && !current_user_can('upload_files') )
	add_action('admin_init', 'allow_contributor_uploads');

function allow_contributor_uploads() {
	$contributor = get_role('contributor');
	$contributor->add_cap('upload_files');
}

add_theme_support( 'post-thumbnails' );




function wpb_set_post_views($postID) {
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
//To keep the count accurate, lets get rid of prefetching
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);



function wpb_get_post_views($postID){
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count.' Views';
}



function getPostViews($postID){
$count_key = 'post_views_count';
$count = get_post_meta($postID, $count_key, true);
if($count==''){
delete_post_meta($postID, $count_key);
add_post_meta($postID, $count_key, '0');
return "0 View";
}
return $count.' Views';
}
function setPostViews($postID) {
$count_key = 'post_views_count';
$count = get_post_meta($postID, $count_key, true);
if($count==''){
$count = 0;
delete_post_meta($postID, $count_key);
add_post_meta($postID, $count_key, '0');
}else{
$count++;
update_post_meta($postID, $count_key, $count);
}
}

function add_custom_field_automatically($post_ID) {
   global $wpdb;
   if(!wp_is_post_revision($post_ID)) {
      add_post_meta($post_ID, '_my_key', '0', true);
   }
}
add_action('publish_page', 'add_custom_field_automatically');
add_action('publish_post', 'add_custom_field_automatically');

function filter_where( $where = '' ) {
	$where .= " AND post_date > '" . date('Y-m-d', strtotime('-10 days')) . "'";
	return $where;
}


function paginate() {
  global $wp_query, $wp_rewrite;
  $pages = '';
  $max = $wp_query->max_num_pages;
  if (!$current = get_query_var('paged')) $current = 1;
  $a['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
  $a['total'] = $max;
  $a['current'] = $current;
 
  $total = 1; 
  $a['mid_size'] = 20; 
  $a['end_size'] = 1; 
  $a['prev_text'] = '&laquo; ';
  $a['next_text'] = '&raquo;';
 
  if ($max > 1) echo '<div class="navigation">';
  if ($total == 1 && $max > 1) 
  echo paginate_links($a);
  if ($max > 1) echo '</div>';
}



add_filter( 'img_caption_shortcode', 'my_img_caption_shortcode', 10, 3 );
function my_img_caption_shortcode( $empty, $attr, $content ){
	$attr = shortcode_atts( array(
		'id'      => '',
		'align'   => 'alignnone',
		'width'   => '',
		'caption' => ''
	), $attr );

	if ( 1 > (int) $attr['width'] || empty( $attr['caption'] ) ) {
		return '';
	}
	
	$capt=$attr['caption'];

	if ( $attr['id'] ) {
		$attr['id'] = 'id="' . esc_attr( $attr['id'] ) . '" ';
	}
	$capt=$attr['caption'];
	if(  (substr($capt ,0, 7)) == "http://"   ) {
	$capt = substr($capt , 7);
	};
	
	if(  (substr($capt ,0, 4)) == "www."   ) {
	$capt = substr($capt , 4);
	};
	
	$arr = explode("/", $capt, 2);
	$capt=$arr [0];
	return '<div ' . $attr['id']
	. 'class="wp-caption ' . esc_attr( $attr['align'] ) . '" '
	. 'style="max-width: ' . ( 10 + (int) $attr['width'] ) . 'px;">'
	. do_shortcode( $content )
	. '<p class="wp-caption-text">foto: <a href="'.$attr['caption'].'">' . $capt . '</a></p>'
	. '</div>';

}


add_action('init','random_add_rewrite');
function random_add_rewrite() {
       global $wp;
       $wp->add_query_var('random');
       add_rewrite_rule('random/?$', 'index.php?random=1', 'top');
}

add_action('template_redirect','random_template');
function random_template() {
       if (get_query_var('random') == 1) {
               $posts = get_posts('post_type=post&orderby=rand&numberposts=1&category=31');
               foreach($posts as $post) {
                       $link = get_permalink($post);
               }
               wp_redirect($link,307);
               exit;
       }
}





// function catch_that_image() {
//     global $post, $posts;
//     $first_img = '';
//     ob_start();
//     ob_end_clean();
//     $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
//     $first_img = $matches [1] [0];
  
//     if(empty($first_img) || strpos($first_img, 'sageata') == true || strpos($first_img, 'Arrow') == true){ //Defines a default image
//       $first_img = "/wp-content/uploads/2020/03/default.png";
//     }
//     return $first_img;
//   }