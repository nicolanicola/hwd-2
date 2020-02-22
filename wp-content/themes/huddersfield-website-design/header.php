<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NQCPNFL');</script>
<!-- End Google Tag Manager -->
    <meta charset="<?php bloginfo( 'charset' ); ?>"/>
    <title><?php

        global $page, $paged;
        wp_title( '|', true, 'right' );
        //bloginfo( 'name' );
        //$site_description = get_bloginfo( 'description', 'display' );
//        if ( $site_description && ( is_home() || is_front_page() ) ) {
//            echo " | $site_description";
//        }
        ?></title>
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.png" />

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11"/>
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>"/>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"/>
    <script src="<?php bloginfo( 'template_directory' ); ?>/javascript/modernizr-1.6.min.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-36436441-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-36436441-1');
	gtag('config', 'AW-997084885');
</script>
	
	<!-- Event snippet for contact form conversion page
In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
<script>
function gtag_report_conversion(url) {
  var callback = function () {
    if (typeof(url) != 'undefined') {
      window.location = url;
    }
  };
  gtag('event', 'conversion', {
      'send_to': 'AW-997084885/z7kGCJKv-KoBENWdudsD',
      'event_callback': callback
  });
  return false;
}
</script>
	
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '175742287061961');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=175742287061961&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

    <?php
    /* We add some JavaScript to pages with the comment form
     * to support sites with threaded comments (when in use).
     */
    if ( is_singular() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }

    /* Always have wp_head() just before the closing </head>
     * tag of your theme, or you will break many plugins, which
     * generally use this hook to add elements to <head> such
     * as styles, scripts, and meta tags.
     */
    wp_head();
    ?>
</head>

<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NQCPNFL"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="js-is-mobile"></div>

<header class="site-header">
    <div class="container">

        <div class="row">
            <div class="col-6  offset-3  offset-sm-0  col-sm-4">
                <a href="/" class="site-header__logo  block">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/huddersfield-web-design-logo.svg"
                         alt="huddersfield webiste design logo">
                </a>
            </div>
            <?php
            $menu = wp_get_nav_menu_items( 'main' );
            if ( $menu ): ?>
                <div class="mobile-menu  hidden-lg-up">
                    <button class="mobile-menu__toggle  js-toggle-mobile-menu">
                        <i class="fa fa-bars  mobile-menu__hamburger" aria-hidden="true"></i>
                    </button>
                    <ul class="js-mobile-menu  mobile-menu__links">
                        <?php
                        foreach ( $menu as $item ) : //var_dump($item);?>
                            <li class="mobile-menu__list-item">
                                <a class="mobile-menu__link" href="<?php echo $item->url; ?>">
                                    <?php echo $item->title; ?>
                                </a>
                            </li>
                            <?php
                        endforeach; ?>
                    </ul>
                </div>

                <div class="desktop-menu  hidden-md-down  col-sm-8">
                    <ul class="desktop-menu__links  clearfix">
                        <?php
                        foreach ( $menu as $item ) :
                            $pageId = get_post_meta( $item->ID, '_menu_item_object_id', true );
                            $class = '';
                            if ( $post ) {
                                $class = $pageId == $post->ID ? "menu-item-$pageId active" : "menu-item-$pageId ";
                            }
                            ?>

                            <li class="desktop-menu__list-item  <?php echo $class; ?>">
                                <a class="desktop-menu__link" href="<?php echo $item->url; ?>">
                                    <?php echo $item->title; ?>
                                </a>
                            </li>
                            <?php
                        endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>
        </div>
    </div>
</header>

<div class="page-content">
