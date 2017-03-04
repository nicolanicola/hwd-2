<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);



function prefix_add_my_stylesheet() {

	wp_register_style( 'css', get_stylesheet_directory_uri().'/css/style.css' );
	wp_enqueue_style( 'css' );

	wp_register_style( 'lato', 'https://fonts.googleapis.com/css?family=Lato:300,400,700' );
	wp_enqueue_style( 'lato' );


}

function my_scripts_method() {

	wp_register_script( 'myscript', get_stylesheet_directory_uri().'/javascript/script.js',  array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'myscript' );

}


add_action('wp_enqueue_scripts', 'my_scripts_method');
add_action( 'wp_enqueue_scripts', 'prefix_add_my_stylesheet' );
add_image_size('home-partner-logo', 160,120);
add_image_size('team-member', 146,146);



function sluggify($url)
{
	# Prep string with some basic normalization
	$url = strtolower($url);
	$url = strip_tags($url);
	$url = stripslashes($url);
	$url = html_entity_decode($url);

	# Remove quotes (can't, etc.)
	$url = str_replace('\'', '', $url);

	# Replace non-alpha numeric with hyphens
	$match = '/[^a-z0-9]+/';
	$replace = '-';
	$url = preg_replace($match, $replace, $url);

	$url = trim($url, '-');

	return $url;
}
// Enable font size & font family selects in the editor
if ( ! function_exists( 'wpex_mce_buttons' ) ) {
	function wpex_mce_buttons( $buttons ) {
		array_unshift( $buttons, 'fontselect' ); // Add Font Select
		array_unshift( $buttons, 'fontsizeselect' ); // Add Font Size Select
		return $buttons;
	}
}
add_filter( 'mce_buttons_2', 'wpex_mce_buttons' );

// Customize mce editor font sizes
if ( ! function_exists( 'wpex_mce_text_sizes' ) ) {
	function wpex_mce_text_sizes( $initArray ){
		$initArray['fontsize_formats'] = "9px 10px 12px 13px 14px 16px 18px 21px 24px 28px 32px 36px";
		return $initArray;
	}
}
add_filter( 'tiny_mce_before_init', 'wpex_mce_text_sizes' );

//--------------- ---------------------------CUSTOM EXCERPTS ------------------------------------------------

/**
 * Pagination for archive, taxonomy, category, tag and search results pages
 *
 * @global $wp_query http://codex.wordpress.org/Class_Reference/WP_Query
 * @return Prints the HTML for the pagination if a template is $paged
 */
function base_pagination() {
	global $wp_query;

	$big = 999999999; // This needs to be an unlikely integer

	// For more options and info view the docs for paginate_links()
	// http://codex.wordpress.org/Function_Reference/paginate_links
	$paginate_links = paginate_links( array(
		'base' => str_replace( $big, '%#%', get_pagenum_link($big) ),
		'current' => max( 1, get_query_var('paged') ),
		'total' => $wp_query->max_num_pages,
		'mid_size' => 5
	) );

	// Display the pagination if more than one page is found
	if ( $paginate_links ) {
		echo '<div id="blog-pagination">';
		echo $paginate_links;
		echo '</div><!--// end .pagination -->';
	}
}

function wpe_excerptlength_blog( $length ) {

	return 50;
}

function wpe_excerptcta( $more ) {

	return ' <span class="read-more">Read more... </span>';
}

function wpe_excerptcta_green( $more ) {

	return '...<span class="fr cta-btn-green">Read more  <i class="icon-circle-arrow-right"></i></span>';
}

function removeEscpaedQuotes($string){
	$newString= str_replace(' /"', '', $string);
	return $newString;
}


function wpe_excerpt( $length_callback = '', $more_callback = '' ) {

	if ( function_exists( $length_callback ) )
		add_filter( 'excerpt_length', $length_callback );

	if ( function_exists( $more_callback ) )
		add_filter( 'excerpt_more', $more_callback );

	$output = get_the_excerpt();
	$output = apply_filters( 'wptexturize', $output );
	$output = apply_filters( 'convert_chars', $output );
	$output = '<p>' . $output . '</p>'; // maybe wpautop( $foo, $br )
	echo $output;
}

if(function_exists("register_options_page"))
{


}
