<?php
/**
 * The loop that displays a single post.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.2
 */
?>

<?php if (have_posts()) {
    while (have_posts()) : the_post(); ?>

        <?php $mobileImage = get_field('mobile_image'); ?>
        <?php $hasMobileImage = get_field('mobile_image'); ?>
        <?php $imageSize = get_image_size(); ?>

        <div class="website-page-header  light-grey-bg  text-center">
            <h1 class="website-page-header__title">
                WEBSITE DESIGN
            </h1>
            <h1 class="website-page-header__subtitle">
                <?php the_title(); ?>
            </h1>
            <?php $url = get_field('website_url'); ?>
            <?php if ($url): ?>
                <a title="Visit <?php echo $url;?> " href="//<?php the_field('website_url') ?>" target="_blank" class="website-page-header__link">
                    <i class="fas fa fa-laptop"></i>
                    <?php the_field('website_url') ?>
                </a>
            <?php endif; ?>
        </div>
        <div class="container">

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <?php $class = $mobileImage ? 'col-sm-6' : 'col-sm-12'; ?>


                <div class="page-content">

                    <div class="row">
                        <?php $full_image = get_field('single_image');
                        if ($full_image):?>

                            <?php $img = $imageSize == 'mobile' ? $full_image['sizes']['mobile'] : $full_image['url']; ?>

                            <div class="<?php echo $class; ?>  u-text-center">
                                <?php $image = get_field('desktop_image'); ?>
                                <img class="img-fluid  u-max-height-500"
                                     src="<?php echo $img; ?>"
                                     title="<?php echo $full_image['title']; ?>" alt="<?php echo $full_image['alt']; ?>"/>
                            </div>
                            <hgroup class="website-header">
                                <h1 class="page-title  page-title--no-m-bottom "><?php the_title(); ?></h1>
                                <h2 class="page-subtitle">
                                    <?php the_field('business_type_and_location'); ?>
                                </h2>
                            </hgroup>
                        <?php else: ?>
                            <div class="<?php echo $class; ?>  u-text-center">
                                <?php $image = get_field('desktop_image'); ?>
                                <img class="img-fluid  u-max-height-500" src="<?php echo $image['sizes'][$imageSize]; ?>"
                                     title="<?php echo $image['title']; ?>" alt="<?php echo $image['alt']; ?>"/>
                            </div>
                        <div class="<?php echo $class; ?>">
                            <?php if ($mobileImage): ?>
                                <div class="u-text-center">
                                    <?php $image = get_field('mobile_image'); ?>
                                    <img class="img-fluid  u-max-height-500"
                                         src="<?php echo $image['sizes'][$imageSize]; ?>"
                                         title="<?php echo $image['title']; ?>" alt="<?php echo $image['alt']; ?>"/>
                                </div>
                            <?php else: ?>
                                <hgroup class="website-header">
                                    <h1 class="page-title  page-title--no-m-bottom "><?php the_title(); ?></h1>
                                    <h2 class="page-subtitle">
                                        <?php the_field('business_type_and_location'); ?>
                                    </h2>
                                </hgroup>
                                <div class="the-content">
                                    <?php the_content(); ?>
                                </div>

                                </div>
                            <?php endif; ?>


                            <div class=" row">
                                <div class="col-12">
                                    <?php if ($mobileImage): ?>
                                        <div class="the-content">
                                            <?php the_content(); ?>
                                        </div>

                                    <?php endif; ?>
                                </div>

                            </div>
                        <?php endif; ?>

                    </div>


                    <div class="single-website-footer">
                        <div class="single-website-footer__categories">
                            <?php if (count(get_the_category())) : ?>
                                <p class="tags-cats">
                                    <?php printf(__('Posted in %2$s', 'starkers'), 'entry-utility-prep entry-utility-prep-cat-links', get_the_category_list(', ')); ?>
                                </p>
                            <?php endif; ?>
                            <?php
                            $tags_list = get_the_tag_list('', ', ');
                            if ($tags_list):
                                ?><p itemprop="keywords" class="tags-cats">
                                <?php printf(__('Tagged %2$s', 'starkers'), 'entry-utility-prep entry-utility-prep-tag-links', $tags_list); ?>
                                </p>

                            <?php endif; ?>
                        </div>
                        <div class="u-text-center">
                            <a class="button button--secondary" href="<?php the_permalink(7); ?>">More
                                Websites</a>
                        </div>
                    </div>


            </article>
        </div>


    <?php endwhile;
} // end of the loop. ?>

