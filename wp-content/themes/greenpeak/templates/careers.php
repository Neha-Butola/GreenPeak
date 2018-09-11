<?php
/*
 * Template Name: Careers
 */
get_header(); ?>

<div class="banner fixed-bg position-relative" style="background-image: url('<?php the_field('banner_image'); ?>');">
    <div class="banner-content">

        <h1 data-aos="fade-in" data-aos-delay="400"><span><?php the_field('banner_heading'); ?></span></h1>
        <div class="animating-line right-line"></div>
    </div>
</div>

<?php if (get_field('content')): ?>
    <!-- * =============== Content Section =============== * -->
    <section class="container section-divider content-sec">
        <?php the_field('content'); ?>
    </section>
    <!-- * =============== /Content Section =============== * -->
<?php endif; ?>

<!-- * =============== Video Section =============== * -->
<section class="container">
    <?php echo do_shortcode('[wonderplugin_gallery id="1"]'); ?>
</section>
<!-- * =============== /Video Section =============== * -->

<?php $testimonials = get_field('testimonials');
if (!empty($testimonials)): ?>
    <!-- * =============== Testimonial Section =============== * -->
    <section class="lozad section-divider text-center testimonial fixed-bg"
             data-background-image="<?php the_field('background_image'); ?>" id="career-testimonial">
        <div class="container">
            <div class="owl-carousel owl-theme">
                <?php foreach ($testimonials as $testimonial): ?>
                    <div class="item text-white">
                        <?php echo $testimonial['testimony']; ?>
                        <div class="intro d-sm-flex">
                            <div class="text-sm-left mr-sm-5">
                                <h2><?php echo $testimonial['reviewer_name']; ?></h2>
                                <h5><?php echo $testimonial['reviewer_designation']; ?></h5>
                            </div>
                            <img src="<?php echo $testimonial['reviewer_image']; ?>" alt="profile-img">
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- * =============== /Testimonial Section =============== * -->
<?php endif; ?>

<?php $values = get_field('green_peak_values');
if (!empty($values)):
    $count = 0; ?>
    <!-- * =============== Values Section =============== * -->
    <section class="value-sec">
        <div class="text-center position-relative values-title">
            <h2 data-aos="fade-left"><span><?php the_field('main_heading'); ?></span></h2>
            <div class="animating-line right-line" data-aos="slide-left" data-aos-delay="250"></div>
        </div>
        <div class="container">
            <div class="row">
                <?php foreach ($values as $value): ?>
                    <?php if ($value['option'] == 'Image'):
                        if ($count % 2 == 0): ?>
                            <div class="col-md-5 pt-5">
                                <h2 class="left-animating text-center text-md-left" data-aos="fade-right">
                                    <span><?php echo $value['heading']; ?></span></h2>
                                <h4 class="pt-5"><?php echo $value['sub_heading']; ?>
                                    <div class="lozad parallax-bg" data-stellar-ratio="0.5"
                                         data-background-image="<?php echo $value['background_image_one']; ?>"></div>
                                </h4>
                            </div>
                            <div class="col-md-7 text-right text-md-right">
                                <div class="lozad parallax-bg" data-stellar-ratio="0.5"
                                     data-background-image="<?php echo $value['background_image_two']; ?>"></div>
                                <img src="<?php echo $value['main_image']; ?>" alt="">
                            </div>
                            <?php $count++; else: ?>
                            <div class="col-md-7">
                                <div class="lozad parallax-bg" data-stellar-ratio="0.5"
                                     data-background-image="<?php echo $value['background_image_one']; ?>"></div>
                                <img src="<?php echo $value['main_image']; ?>" alt="">
                            </div>
                            <div class="col-md-5 pt-md-5 text-right">
                                <h2 class="left-animating right-animating text-center text-md-right"
                                    data-aos="fade-left">
                                    <span><?php echo $value['heading']; ?></span></h2>
                                <h4 class="pt-md-5"><?php echo $value['sub_heading']; ?>
                                </h4>
                                <div class="lozad parallax-bg" data-stellar-ratio="0.5"
                                     data-background-image="<?php echo $value['background_image_two']; ?>"></div>
                            </div>
                            <?php $count++; endif;
                    else: ?>
                        <div class="col-12 text-center video-play">
                            <h2><?php echo $value['heading']; ?></h2>
                            <h4><?php echo $value['sub_heading']; ?></h4>
                            <div class="position-relative">
                                <div class="lozad parallax-bg" data-stellar-ratio="0.5"
                                     data-background-image="<?php echo $value['background_image_one']; ?>"></div>
                                <div class="lozad parallax-bg" data-stellar-vertical-offset="150"
                                     data-stellar-ratio="0.5"
                                     data-background-image="<?php echo $value['background_image_two']; ?>"></div>
                                <video class="thevideo popup-vimeo" href="<?php echo $value['video_url']; ?>" loop=""
                                       preload="none"
                                       muted=""
                                       poster="<?php echo $value['video_thumbnail']; ?>">
                                    <source src="<?php echo $value['video_file']; ?>"
                                            type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <div class="play-btn">
                                    <i class="fas fa-play"></i>
                                </div>
                            </div>
                        </div>
                    <?php endif; endforeach; ?>
            </div>
        </div>
    </section>
    <!-- * =============== /Values Section =============== * -->
<?php endif;

if (get_field('form_code')): ?>
    <!-- * =============== Form Section =============== * -->
    <section class="contact-bg lozad fixed-bg position-relative"
             data-background-image="<?php the_field('form_background_image'); ?>">
        <div class="container section-divider text-white">
            <?php the_field('form_content'); ?>
            <h3 class="mt-5"><?php the_field('form_heading'); ?></h3>
            <?php $form_code = get_field('form_code');
            echo do_shortcode($form_code); ?>
        </div>
    </section>
    <!-- * =============== /Form Section =============== * -->
<?php endif;
get_footer(); ?>
