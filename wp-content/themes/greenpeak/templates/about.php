<?php
/*
  * Template Name: About
  */

get_header() ?>

    <div class="banner" style="background-image: url('<?php the_field('banner_image'); ?>');">
        <div class="banner-content">
            <h1 data-aos="fade-in" data-aos-delay="400"><span><?php the_field('banner_heading'); ?></span></h1>
            <div class="animating-line right-line"></div>
        </div>
    </div>

<?php if (get_field('content_section_one')): ?>
    <!-- * =============== Content Section =============== * -->
    <section class="container section-divider">
        <?php the_field('content_section_one'); ?>
    </section>
    <!-- * =============== /Content Section =============== * -->
<?php endif;

if (get_field('content_section_two')): ?>
    <!-- * =============== Content Section 2=============== * -->
    <section class="fixed-bg lozad triangle-bg" data-background-image="<?php the_field('background_image'); ?>">
        <div class="container section-divider text-white">
            <?php the_field('content_section_two'); ?>
        </div>
    </section>
    <!-- * =============== /Content Section 2=============== * -->
<?php endif; ?>

    <!-- * =============== Filling-triangle Section =============== * -->
    <section class="green-bg">
        <div class="row">
            <div class="col-sm-4">
                <canvas id="sample"></canvas>
            </div>
            <div class="col-sm-4">
                <canvas id="sample1"></canvas>
            </div>
            <div class="col-sm-4">
                <canvas id="sample2"></canvas>
            </div>
        </div>
    </section>
    <!-- * ===============  /Filling-triangle Section =============== * -->

<?php $testimonials = get_field('testimonials');
if (!empty($testimonials)):?>
    <!-- * =============== Testimonial Section =============== * -->
    <section class="lozad section-divider text-center testimonial fixed-bg"
             data-background-image="<?php the_field('testimonials_background_image'); ?>" id="about-testimonial">
        <div class="container">
            <div class="owl-carousel owl-theme">
                <?php foreach ($testimonials as $testimonial): ?>
                    <div class="item text-white">
                        <?php echo $testimonial['testimony']; ?>
                        <div class="testimonial-img">
                            <h2><span><?php echo $testimonial['reviewer']; ?></span></h2>
                            <img src="<?php echo $testimonial['reviewer_image']; ?>" class="mx-auto mt-5"
                                 alt="profile-img">
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- * =============== /Testimonial Section =============== * -->
<?php endif;

$consultants = get_field('consultants');
if (!empty($consultants)):?>
    <!-- * =============== Consultants Section =============== * -->
    <section class="bg-light">
        <div class="container pt-5">
            <h2 data-aos="fade-right" class="aos-init aos-animate left-animating">
                <span><?php the_field('consultants_heading'); ?></span></h2>
            <div id="accordion" class="consultants">
                <div class="row">
                    <?php $count = 1;
                    foreach ($consultants as $consultant): ?>
                        <div data-toggle="collapse" data-target="#consultant<?php echo $count; ?>" aria-expanded="true"
                             aria-controls="consultant<?php echo $count; ?>"
                             class="col-sm-4 position-static toggle-div">
                            <figure class="figure" data-toggle="collapse" href="#collapseExample">
                                <img src="<?php echo $consultant['consultant_image']; ?>" class="figure-img img-fluid"
                                     alt="consultant-profile">
                                <figcaption class="figure-caption">
                                    <h3><span><?php echo $consultant['consultant_name']; ?></span></h3>
                                    <p><?php echo $consultant['consultant_designation']; ?></p>
                                    <p><?php echo $consultant['consultant_location']; ?></p>
                                </figcaption>
                            </figure>
                            <div id="consultant<?php echo $count; ?>" class="collapse intro-desc position-absolute"
                                 aria-labelledby="heading<?php echo $count; ?>"
                                 data-parent="#accordion">
                                <div class="card-body p-0">
                                    <?php echo $consultant['consultant_description']; ?>
                                </div>
                            </div>
                        </div><!--col-sm-4-->
                        <?php $count++; endforeach; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- * =============== /Consultants Section =============== * -->
<?php
endif;

$operations = get_field('operations');
if (!empty($operations)):?>
    <!-- * =============== Opertaions Section =============== * -->
    <section class="bg-light">
        <div class="container pt-5">
            <h2 data-aos="fade-right" class="aos-init aos-animate left-animating">
                <span><?php the_field('operations_heading'); ?></span></h2>
            <div id="accordion" class="consultants">
                <div class="row">
                    <?php $count = 1;
                    foreach ($operations as $operation): ?>
                        <div data-toggle="collapse" data-target="#operation<?php echo $count; ?>" aria-expanded="true"
                             aria-controls="operation<?php echo $count; ?>"
                             class="col-sm-4 position-static toggle-div">
                            <figure class="figure" data-toggle="collapse" href="#collapseExample">
                                <img src="<?php echo $operation['operations_image']; ?>" class="figure-img img-fluid"
                                     alt="operation-profile">
                                <figcaption class="figure-caption">
                                    <h3><span><?php echo $operation['operations_name']; ?></span></h3>
                                    <p><?php echo $operation['operations_designation']; ?></p>
                                    <p><?php echo $operation['operations_location']; ?></p>
                                </figcaption>
                            </figure>
                            <div id="operation<?php echo $count; ?>" class="collapse intro-desc position-absolute"
                                 aria-labelledby="heading<?php echo $count; ?>"
                                 data-parent="#accordion">
                                <div class="card-body p-0">
                                    <?php echo $operation['operations_description']; ?>
                                </div>
                            </div>
                        </div><!--col-sm-4-->
                        <?php $count++; endforeach; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- * =============== /Opertations Section =============== * -->
<?php endif;

get_footer();
