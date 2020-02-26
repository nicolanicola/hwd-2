<?php
/**
 * The template for displaying Archive pages.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */

get_header(); ?>
<div class="container">


    <?php
    if (have_posts()) {
        the_post();
    }
    ?>

    <h1 class="pt-5">
        <?php if (is_day()) : ?>
            <?php printf(__('Daily Archives: %s', 'starkers'), get_the_date()); ?>
        <?php elseif (is_month()) : ?>
            <?php printf(__('Monthly Archives: %s', 'starkers'), get_the_date('F Y')); ?>
        <?php elseif (is_year()) : ?>
            <?php printf(__('Yearly Archives: %s', 'starkers'), get_the_date('Y')); ?>
        <?php else : ?>
            <?php _e('Blog Archives', 'starkers'); ?>
        <?php endif; ?>
    </h1>
    <div class="row">


        <div class="col-sm-8">

            <?php
            rewind_posts();

            get_template_part('loop', 'archive');
            ?>
        </div>
        <div class="col-sm-4">

            <?php get_sidebar(); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>
