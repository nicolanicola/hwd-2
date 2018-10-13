<?php
/**
 * The template for displaying attachments.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */
 
get_header(); ?>
	<div class="container">
		<h1 class="page-title"><?php the_title(); ?> </h1>
    <?php get_template_part( 'loop', 'attachment' ); ?>
	</div>
 
<?php get_footer(); ?>