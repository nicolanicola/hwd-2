<?php ?>

<div class="website-page-header  light-grey-bg  text-center">
    <h1 class="website-page-header__title">
        WEBSITE DESIGN
    </h1>
    <h1 class="website-page-header__subtitle">
        <?php the_title(); ?>
    </h1>
    <a title="Visit <?php the_field('website_url') ?>" href="http://<?php the_field('website_url') ?>" target="_blank" class="website-page-header__link">
        <i class="fas fa fa-laptop"></i>
        <?php the_field('website_url') ?>
    </a>
</div>

<div class="container">
    <div class="website-page__services-required py-3">
        <div class="row py-4">
            <div class="col-md-6">
                <h3 class="website-page__services-required__title text-center-sm  content-header">
                    Services Required
                </h3>

                <?php $services = get_the_terms($post->ID, 'website_tag');
                if ($services):?>
                    <div class="website-page__services-list row">
                        <?php foreach ($services as $service): ?>
                            <div class="website-page__service col-6 ">
                                <div class="website-page__services__link  no-underline" href="<?php echo $service->slug; ?> ">
                                    <i class="<?php echo $service->description; ?> website-page__services__icon"></i>
                                    <?php echo $service->name; ?>
                                </div>
                            </div>

                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="col-md-6 mt-5 mt-md-0">
                <div class="website-page__brief">
                    <h3 class="content-header text-center-sm ">Brief</h3>
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
        <h3 class="content-header text-center-sm  result__title"">The Result</h3>

        <div class="row">
            <div class="col-md-5 order-2 order-md-1">
                <div class="website-page__result py-3">
                    <?php the_field('result'); ?>
                </div>
                <?php $testimonial = get_field('testimonial'); ?>
                <?php if ($testimonial): ?>

                    <div class="website-page__result py-3">
                        <h3 class="content-header text-center-sm""><?php the_title(); ?> says:</h3>
                        <div class="testimonial">
                            <?php the_field('testimonial'); ?> </div>
                    </div>
                <?php endif; ?>

                <div class="text-center py-3 mb-5">
                    <a href="/get-a-website-quote" class="btn--green btn">
                        GET A FREE QUOTE
                    </a>
                </div>
            </div>
            <div class="col-md-6 offset-md-1 order-1 order-md-2">
                <?php $image = get_field('logo_design'); ?>
                <?php if ($image): ?>
                    <figure class="text-center pt-3 logo-design__image__container">
                        <img class="logo-design__image"
                             src="<?php echo $image['url']; ?>"
                             alt="<?php the_title(); ?> logo design"
                             title="<?php the_title(); ?> logo design"
                        >
                        <figcaption class="text">Logo Design</figcaption>
                    </figure>
                <?php endif; ?>
                <?php $image = get_field('flyer'); ?>
                <?php if ($image): ?>
                    <figure class="text-center pt-3">
                        <img
                                src="<?php echo $image['url']; ?>"
                                alt="<?php the_title(); ?> logo design"
                                title="<?php the_title(); ?> logo design"
                        >
                        <figcaption class="text">Flyer Design</figcaption>
                    </figure>
                <?php endif; ?>


                <figure class="text-center pt-4">
                    <?php $image = get_field('website_screenshot'); ?>
                    <img class="box-shadow"
                         src="<?php echo $image['url']; ?>"
                         alt="screenshot of<?php the_title(); ?> website design"
                         title="screenshot of <?php the_title(); ?> website design"
                    >
                    <figcaption class="text">Website Design</figcaption>
                </figure>

            </div>
        </div>


    </div>

</div>