<?php
/*
 * Template Name: Homepage
 */

get_header(); ?>

    <!-- * =============== Banner section =============== * -->
    <div class="banner" style="background-image: url('<?php the_field('banner_image'); ?>');">
        <div class="banner-content">
            <div class="site-brand mb-2" data-aos="fade-in"><?php the_field('banner_heading'); ?></div>
            <div class="animating-line"></div>
            <h1 data-aos="fade-in" data-aos-delay="400"><span><?php the_field('banner_sub_heading'); ?></span></h1>
        </div>
    </div>
    <!-- * =============== /Banner section =============== * -->

    <!-- * =============== triangle section =============== * -->
    <canvas id="animating-triangle" style="background-image:url('<?php the_field('background_image'); ?>');"
            class="d-none d-md-block"></canvas>
    <img src="<?php the_field('background_image'); ?>" alt="" class="img-fluid d-block d-md-none">
    <!-- * =============== /triangle section =============== * -->

<?php $content = get_field('content');
if (!empty($content)): ?>
    <!-- * =============== parallax section =============== * -->
    <div class="parallax-secs">
        <?php $count = 0;
        foreach ($content as $section): ?>
            <section class="lozad"
                     data-background-image="<?php echo $section['background_image']; ?>">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 <?php echo ($count % 2 != 0) ? 'offset-md-6 text-md-right' : ''; ?>"
                             data-aos="fade-in" data-aos-delay="700">
                            <?php echo $section['description']; ?>
                        </div>
                        <div class="col-md-6 <?php echo ($count % 2 != 0) ? 'text-md-right' : 'offset-md-6'; ?>"
                             data-aos="fade-in" data-aos-delay="100">
                            <h2>
                                <a href="<?php echo $section['main_heading_link']; ?>">"<?php echo $section['main_heading']; ?>
                                    "</a>
                            </h2>
                            <h3><?php echo $section['sub_heading']; ?></h3>
                        </div>
                    </div>
                </div>
            </section>
            <?php $count++; endforeach; ?>
    </div>
    <!-- * =============== /parallax section =============== * -->
<?php endif; ?>

<?php get_footer();
