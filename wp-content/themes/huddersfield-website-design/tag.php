<?php
/**
 * The template for displaying Tag Archive pages.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */

get_header(); ?>
    <div class="container">
        <h1 class="page-title">
			<?php printf( __( 'Tag Archives: %s', 'starkers' ), '' . single_tag_title( '', false ) . '' );
			?>
        </h1>
        <div class="row">
            <div class="col-sm-8">
				<?php get_template_part( 'loop', 'tag' ); ?>
            </div>
            <div class="col-sm-4">
				<?php get_sidebar(); ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>