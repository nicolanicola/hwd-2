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
        <div class="row">
            <div class="col-sm-12">
				<?php get_template_part( 'loop', 'single' ); ?>
            </div>
           
        </div>
    </div>
<?php get_footer(); ?>