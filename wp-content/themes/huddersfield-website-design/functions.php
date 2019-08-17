<?php
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );

require_once 'Mobile-Detect/Mobile_Detect.php';

function uglify( $string, $echo ) {
	$newString = str_replace( ' ', '-', $string );
	$newString = str_replace( '?', '', $newString );
	$newString = strtolower( $newString );
	if ( $echo ) {
		echo $newString;
		
	} else {
		
		return $newString;
	}
}


function wpe_excerptlength_small( $length ) {
	return 25;
}

function wpe_excerptlength_teaser( $length ) {
	return 45;
}

function wpe_excerptlength_index( $length ) {
	return 60;
}

function wpe_excerptcta( $more ) {
	return '...<span class="fr cta-btn-small"><span>Read more</span></span>';
}

function wpe_excerptctalink( $more ) {
	return " ... <a  href='" . get_permalink() . "' class='fr underline-link'><span>Read more</span></a>";
}

function wpe_excerptcta_widget( $more ) {
	global $post;
	
	return '...<a href="/testimonials#' . $post->post_name . '" class="button button--secondary"><span>Read more</span></a>';
}

function get_image_size() {
	$detect = new Mobile_Detect;
	
	if ( $detect->isMobile() && ! $detect->isTablet() ) {
		return 'mobile';
	}
	
	return 'large';
}

function sendContactFormToSiteAdmin() {
	try {
		if ( ! is_email( $_POST['email'] ) ) {
			throw new Exception( 'Email address not formatted correctly.' );
		}
		
		$headers = 'From: HWD Contact Form <nicola@huddersfieldwebsitedesigner.co.uk>';
		$send_to = "nicola@huddersfieldwebsitedesigner.co.uk";
		$subject = "Message from " . $_POST['name'];
		$message = "Message from " . $_POST['name'] . ": \n\n " . $_POST['message'] . " \n\n Reply to: " . $_POST['email'];
		if ( wp_mail( $send_to, $subject, $message, $headers ) ) {
			echo json_encode( array( 'status' => 'success', 'message' => 'Contact message sent.' ) );
			exit;
		} else {
			throw new Exception( 'Failed to send email. Check AJAX handler.' );
		}
	} catch ( Exception $e ) {
		echo json_encode( array( 'status' => 'error', 'message' => $e->getMessage() ) );
		exit;
	}
}

add_action( "wp_ajax_contact_send", "sendContactFormToSiteAdmin" );
add_action( "wp_ajax_nopriv_contact_send", "sendContactFormToSiteAdmin" );


function prefix_add_my_stylesheet() {
	
	wp_register_style( 'css', get_stylesheet_directory_uri() . '/css/style.css' );
	wp_enqueue_style( 'css' );
	
//	wp_register_style( 'fa', 'https://use.fontawesome.com/releases/v5.0.8/css/fontawesome.css' );
//	wp_enqueue_style( 'fa' );
	
	
	wp_register_style( 'lato', 'https://fonts.googleapis.com/css?family=Lato:300,400,700' );
	wp_enqueue_style( 'lato' );
	
	
}

function my_scripts_method() {
	wp_register_script( 'myscript', get_stylesheet_directory_uri() . '/javascript/script.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'myscript' );
}


add_action( 'wp_enqueue_scripts', 'my_scripts_method' );
add_action( 'wp_enqueue_scripts', 'prefix_add_my_stylesheet' );
add_image_size( 'mobile', 767, 9999 );
add_image_size( 'team-member', 146, 146 );


function sluggify( $url ) {
	# Prep string with some basic normalization
	$url = strtolower( $url );
	$url = strip_tags( $url );
	$url = stripslashes( $url );
	$url = html_entity_decode( $url );
	
	# Remove quotes (can't, etc.)
	$url = str_replace( '\'', '', $url );
	
	# Replace non-alpha numeric with hyphens
	$match   = '/[^a-z0-9]+/';
	$replace = '-';
	$url     = preg_replace( $match, $replace, $url );
	
	$url = trim( $url, '-' );
	
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
	function wpex_mce_text_sizes( $initArray ) {
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
		'base'     => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
		'current'  => max( 1, get_query_var( 'paged' ) ),
		'total'    => $wp_query->max_num_pages,
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


function removeEscpaedQuotes( $string ) {
	$newString = str_replace( ' /"', '', $string );
	
	return $newString;
}



function wpe_excerpt( $length_callback = '', $more_callback = '' ) {
	
	if ( function_exists( $length_callback ) ) {
		add_filter( 'excerpt_length', $length_callback );
	}
	
	if ( function_exists( $more_callback ) ) {
		add_filter( 'excerpt_more', $more_callback );
	}
	
	$output = get_the_excerpt();
	$output = apply_filters( 'wptexturize', $output );
	$output = apply_filters( 'convert_chars', $output );
	$output = '<p>' . $output . '</p>'; // maybe wpautop( $foo, $br )
	echo $output;
}

function custom_post_archive($query) {
	if ($query->is_archive)
		$query->set( 'post_type', array('website','faq','services', 'nav_menu_item', 'post') );
	remove_action( 'pre_get_posts', 'custom_post_archive' );
}
add_action('pre_get_posts', 'custom_post_archive');

if ( function_exists( "register_options_page" ) ) {


}
