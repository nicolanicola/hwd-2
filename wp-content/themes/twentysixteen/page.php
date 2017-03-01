<?php get_header(); ?>

<div class="container">


        <?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class( 'the-content' ); ?>>
                <?php the_content(); ?>

            </article>

        <?php endwhile; ?>
            <!-- 404 -->

        <?php else: ?>

            <article>
                <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
            </article>

        <?php endif; ?>

        <!-- /section -->
</div>

<?php get_footer(); ?>
