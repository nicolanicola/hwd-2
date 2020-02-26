<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */

get_header(); ?>



        <?php if (get_the_time('Y') < '2020') {
            get_template_part( 'loop', 'website' );

        } else {
            require 'jamm.php';
        } ?>


<?php get_footer(); ?>