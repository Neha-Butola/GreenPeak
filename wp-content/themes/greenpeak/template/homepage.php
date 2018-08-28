<?php
/* Template Name: Homepage */

get_header(); ?>

    <div class="inner-banner"
         style="background-image: url('<?php the_field('banner_image'); ?>');">
        <div class="heading-block">
            <h1 class="small"><?php the_field('banner_heading'); ?></h1>
        </div>

        <div class="line-div-ani">
        </div>

    </div>

    <figure class="scroller-triangle" data-bottom-top="width:50%;" data-90-top="width:100%;"
            style="background: url('<?php echo get_template_directory_uri(); ?>/assets/images/ExpandedClientSection.jpg') center center;">
        <img src="<?php the_field('background_image'); ?>"
             alt="logo section">
    </figure>

<?php $content = get_field('content');
if (!empty($content)): ?>
    <div class="home-Parallax">
        <div class="container">
            <?php foreach ($content as $section): ?>
                <section class="first-Parallax-row">
                    <div class="image" data-speed="2"
                         style="background-image: url('<?php echo $section['background_image']; ?>');"></div>
                    <div class="stuff row" data-type="content">
                        <div class="col-md-6 col-12  content-block">
                            <p class="p-white"><?php echo $section['description']; ?></p>
                        </div>
                        <div class="col-md-6 col-12 align-self-end justify-content-end">
                            <h2 class="large">“<?php echo $section['main_heading']; ?>”</h2>
                            <h3><?php echo $section['sub_heading']; ?></h3>
                        </div>
                    </div>
                </section>
            <?php endforeach; ?>
        </div>
    </div>
<?php endif; ?>

<?php get_footer();
