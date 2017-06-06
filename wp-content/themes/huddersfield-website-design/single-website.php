<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */

get_header(); ?>

    <div class="container">


        <?php get_template_part( 'loop', 'website' ); ?>
    </div>

<?php get_footer(); ?>