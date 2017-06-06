<?php $text = isset( $text ) ? $text : ''; ?>
<div class="container">

    <h2 class="u-text-center">Previous Work</h2>
    <div class="row">
        <?php $args  = array(
                'posts_per_page' => 3,
                'post_type'      => 'website',
                'category'       => 99
        );
        $posts = get_posts( $args );

        foreach ( $posts as $post ): setup_postdata( $post ); ?>
            <div class="col-md-4  website-thumbnail__item">
                <a class="website-thumbnail__link" href="<?php the_permalink(); ?>">
                    <?php $image = get_field( 'thumbnail' ); ?>
                    <img class="img-fluid" src="<?php echo $image['url']; ?>"
                         alt="<?php echo $image['alt']; ?>">
                    <h4 class="website-thumbnail__title  website-thumbnail__title--border"><?php the_title(); ?></h4>
                    <h5 class="website-thumbnail__subtitle">
                        <?php the_field('business_type_and_location'); ?>
                    </h5>
                </a>
            </div>
        <?php endforeach;
        wp_reset_postdata(); ?>

        <div class="u-text-center  block">
            <?php echo $text; ?>
            <a href="<?php the_permalink( 7 ); ?>" class="button  button--primary"> See All Websites</a>
        </div>
    </div>
</div>
