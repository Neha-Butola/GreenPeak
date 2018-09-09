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

    <!-- * =============== Content Section =============== * -->
    <section class="container section-divider">
        <?php the_field('content_section_one'); ?>
    </section>
    <!-- * =============== /Content Section =============== * -->

    <!-- * =============== Content Section 2=============== * -->
    <section class="fixed-bg lozad triangle-bg" data-background-image="<?php the_field('background_image'); ?>">
        <div class="container section-divider text-white">
            <?php the_field('content_section_two'); ?>
        </div>
    </section>
    <!-- * =============== /Content Section 2=============== * -->

    <!-- * =============== Filling-triangle Section =============== * -->
    <section data-background-image="images/GPHome_BlurredClientBG.jpg" class="lozad fixed-bg">
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
                        <div class="intro">
                            <img src="<?php echo $testimonial['reviewer_image']; ?>" alt="profile-img">
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
            <div id="accordion-1" class="consultants">
                <div class="row">
                    <?php $count = 1;
                    foreach ($consultants as $consultant): ?>
                        <div data-toggle="collapse" data-target="#consultant<?php echo $count; ?>" aria-expanded="true"
                             aria-controls="consultant<?php echo $count; ?>"
                             class="col-sm-4" close-div="<?php echo $count ?>">
                            <figure class="figure" data-toggle="collapse" href="#collapseExample">
                                <img src="<?php echo $consultant['consultant_image']; ?>" class="figure-img img-fluid"
                                     alt="A generic square placeholder image with rounded corners in a figure.">
                                <figcaption class="figure-caption">
                                    <h3><span><?php echo $consultant['consultant_name']; ?></span></h3>
                                    <p><?php echo $consultant['consultant_designation']; ?></p>
                                    <p><?php echo $consultant['consultant_location']; ?></p>
                                </figcaption>
                            </figure>
                        </div>
                        <?php
                        if($count!=0 && $count%3==0){ ?>
                </div>
                <div class="row">
                    <?php
                    }
                        $count++; endforeach;
                        ?>
                    <div class="col-12">
                        <?php
                        $count = 1;
                        foreach ($consultants as $consultant): ?>
                            <div id="consultant<?php echo $count; ?>" class="collapse intro-desc"
                                 aria-labelledby="heading<?php echo $count; ?>" data-parent="#accordion">
                                <div class="card-body p-0">
                                    <?php echo $consultant['consultant_description']; ?>
                                </div>
                            </div>
                            <?php
                            if($count!=0 && $count%3==0){ ?>
                    </div>
                    <div class="col-12">
                        <?php
                        }
                            $count++;
                        endforeach;
                        ?>
                    </div>
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
    <section class="container pt-5">
        <h2 data-aos="fade-right" class="aos-init aos-animate left-animating">
            <span><?php the_field('operations_heading'); ?></span></h2>
        <div id="accordion" class="consultants">
            <div class="row">
                <?php $count = 1;
                foreach ($operations as $operation): ?>
                    <div data-toggle="collapse" data-target="#collapse<?php echo $count; ?>" aria-expanded="true"
                         aria-controls="collapse<?php echo $count; ?>"
                         class="col-sm-4 ">
                        <figure class="figure" data-toggle="collapse" href="#collapseExample">
                            <img src="<?php echo $operation['operations_image']; ?>" class="figure-img img-fluid"
                                 alt="A generic square placeholder image with rounded corners in a figure.">
                            <figcaption class="figure-caption">
                                <h3><span><?php echo $operation['operations_name']; ?></span></h3>
                                <p><?php echo $operation['operations_designation']; ?></p>
                                <p><?php echo $operation['operations_location']; ?></p>
                            </figcaption>
                        </figure>
                    </div>
                    <?php $count++; endforeach;
                $count = 1;
                foreach ($operations

                as $operation): ?>
                <div class="col-12">
                    <div id="collapse<?php echo $count; ?>" class="collapse intro-desc"
                         aria-labelledby="heading<?php echo $count; ?>" data-parent="#accordion">
                        <div class="card-body p-0">
                            <?php echo $consultant['consultant_description']; ?>
                        </div>
                    </div>
                    <?php $count++;
                    endforeach; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- * =============== /Opertations Section =============== * -->
<?php endif;

get_footer();
