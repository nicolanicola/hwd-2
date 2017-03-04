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
    <meta charset="<?php bloginfo( 'charset' ); ?>"/>
    <title><?php

        global $page, $paged;
        wp_title( '|', true, 'right' );
        bloginfo( 'name' );
        $site_description = get_bloginfo( 'description', 'display' );
        if ( $site_description && ( is_home() || is_front_page() ) ) {
            echo " | $site_description";
        }
        ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11"/>
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>"/>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"/>
    <script src="<?php bloginfo( 'template_directory' ); ?>/js/modernizr-1.6.min.js"></script>

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

<header class="site-header">
    <div class="container">

        <div class="row">
            <div class="col-6  offset-3  offset-sm-0  col-sm-4">
                <a href="" class="site-header__logo  block">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/huddersfield-web-design-logo.svg"
                         alt="huddersfield webiste design logo">
                </a>
            </div>
                <?php
                $menu = wp_get_nav_menu_items( 'main' );
                if ( $menu ):?>
                    <div class="mobile-menu  hidden-md-up">
                        <button class="mobile-menu__toggle  js-toggle-mobile-menu">
                            <i class="fa fa-bars  mobile-menu__hamburger" aria-hidden="true"></i>
                        </button>
                        <ul class="js-mobile-menu  mobile-menu__links  <?php if(!is_front_page()) echo 'u-border-bottom-black';?>">
                            <?php
                            foreach ( $menu as $item ) : ?>
                                <li class="mobile-menu__list-item">
                                    <a class="mobile-menu__link" href="<?php echo $item->guid; ?> ">
                                        <?php echo $item->title; ?>
                                    </a>
                                </li>
                                <?php
                            endforeach; ?>
                        </ul>
                    </div>

                    <div class="desktop-menu  hidden-sm-down  col-sm-8">
                        <ul class="desktop-menu__links  clearfix">
                            <?php
                            foreach ( $menu as $item ) : ?>
                                <li class="desktop-menu__list-item">
                                    <a class="desktop-menu__link" href="<?php echo $item->guid; ?> ">
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