<?php
/**
 * The template for displaying 404 pages.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */

get_header(); ?>
    <div class="container">

        <h1 class="page-title"><?php _e( 'Not Found', 'starkers' ); ?></h1>
        <p><?php _e( 'Apologies, but the page you requested could not be found. Perhaps searching will help.', 'starkers' ); ?></p>
		<?php get_search_form(); ?>

        <script type="text/javascript">
            // focus on search field after it has loaded
            document.getElementById('s') && document.getElementById('s').focus();
        </script>
    </div>

<?php get_footer(); ?>