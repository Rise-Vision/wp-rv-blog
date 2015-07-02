<?php
/****************************************************************
    clean wp_head() - http://wpengineer.com/1438/wordpress-header/
****************************************************************/
function headstart_head_cleanup() {
	/* Display the links to the extra feeds such as category feeds. */
	remove_action( 'wp_head', 'feed_links_extra', 3 );
	/* Display the links to the general feeds: Post and Comment Feed. */
	remove_action( 'wp_head', 'feed_links', 2 );
	/* Display the link to the Really Simple Discovery service endpoint, EditURI link. */ 
	remove_action( 'wp_head', 'rsd_link' );        
	/* Display the link to the Windows Live Writer manifest file. */
	remove_action( 'wp_head', 'wlwmanifest_link' );
	/* index link */
	remove_action( 'wp_head', 'index_rel_link' );             
	/* prev link */
	remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
	/* start link */
	remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );           
	/* Display relational links for the posts adjacent to the current post. */
	remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
	/* Display the XHTML generator that is generated on the wp_head hook, WP version. */
	remove_action( 'wp_head', 'wp_generator' );
}
/* launching operation cleanup */
add_action('init', 'headstart_head_cleanup');

/**************************************************************** 
remove jquery migrate
****************************************************************/
add_filter( 'wp_default_scripts', 'remove_jquery_migrate' );
function remove_jquery_migrate( &$scripts)
{
    if(!is_admin())
    {
        $scripts->remove( 'jquery');
        $scripts->add( 'jquery', false, array( 'jquery-core' ), '1.11.3' );
    }
}

/**************************************************************** 
load jquery from google
****************************************************************/
function jquery_cdn() {
   if (!is_admin()) {
      wp_deregister_script('jquery'); 
      wp_register_script('jquery', ("http".($_SERVER['SERVER_PORT'] == 443 ? "s" : "")."://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"), false, '1.11.0');
      wp_enqueue_script('jquery');
   }
}
add_action('init', 'jquery_cdn');

/**************************************************************** 
remove script and css ?ver
****************************************************************/
function remove_cssjs_ver( $src ) {
    if( strpos( $src, '?ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'remove_cssjs_ver', 10, 2 );
add_filter( 'script_loader_src', 'remove_cssjs_ver', 10, 2 );

/****************************************************************
    remove WP version from RSS
****************************************************************/
function headstart_rss_version() { return ''; }
add_filter('the_generator', 'headstart_rss_version');

/****************************************************************
    loading jquery reply elements on single pages automatically
****************************************************************/   
function headstart_queue_js(){ 
    if (!is_admin()){ 
        if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) wp_enqueue_script( 'comment-reply' ); 
    }
}
add_action('wp_print_scripts', 'headstart_queue_js');

/****************************************************************
    Adding WP 3+ Functions & Theme Support
****************************************************************/
function headstart_theme_support() {
	add_theme_support('post-thumbnails');      // wp thumbnails 
	add_theme_support('automatic-feed-links'); // rss thingy
}
add_action('after_setup_theme','headstart_theme_support');


/****************************************************************
    Filters wp_title to print a neat <title> tag based on what is being viewed.
****************************************************************/
function headstart_wp_title( $title, $sep ) {
	global $page, $paged;

	if ( is_feed() )
		return $title;

	// Add the blog name
	$title .= get_bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title .= " $sep $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		$title .= " $sep " . sprintf( __( 'Page %s', 'underscore-ground-up' ), max( $paged, $page ) );

	return $title;
}
add_filter( 'wp_title', 'headstart_wp_title', 10, 2 );

/****************************************************************
    the_excerpt()
****************************************************************/
function new_excerpt_more( $more ) {
	return '... <a href="' . get_permalink( get_the_ID() ) . '">' . __( 'Read more', 'your-text-domain' ) . '</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

/****************************************************************
    time
****************************************************************/
// Relative date & time
function wpse_relative_date() {
  return human_time_diff( get_the_time('U'), current_time( 'timestamp' ) ) . '';
}
add_filter( 'get_the_date', 'wpse_relative_date' ); // for posts and pages
// add_filter( 'get_comment_date', 'wpse_relative_date' ); // for comments

/****************************************************************
    display category
****************************************************************/
function display_category() {
	global $post;

	$categories = get_the_category();
	$separator = ', ';
	$output = '';
	if($categories){
		foreach($categories as $category) {
			$output .= $category->cat_name . $separator;
		}
		echo '<h3 class="article-label">'. trim($output, $separator) .'</h3>';
	}
}

/****************************************************************
    display tag
****************************************************************/
function display_tags() {
	global $post;

	$posttags = get_the_tags();
	if ($posttags) {
		echo '<div class="metadata">';
			echo '<ul class="tags hide-sm list-unstyled">';
			  	foreach($posttags as $tag) {
			    	echo '<li><a href="'. get_tag_link($tag->term_id) .'">'. $tag->name .'</a></li>';
			  	}
			echo '</ul>';
		echo '</div><!--metadata-->';
	}
}

/****************************************************************
    get first image
****************************************************************/
function catch_that_image() {
  	global $post, $posts;
	$first_img = '';
	ob_start();
	ob_end_clean();
	$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
	$first_img = $matches[1][0];

	return $first_img;
}
