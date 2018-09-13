<?php
/*
  * Template Name: About
  */

get_header() ?>

    <div class="banner fixed-bg position-relative"
         style="background-image: url('<?php the_field('banner_image'); ?>');">
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
    <section class="traingle-sction lozad fixed-bg"
             data-background-image="<?php the_field('chart_background_image'); ?>">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 my-3">
                    <canvas id="sample"></canvas>
                    <h4 class="title"><?php the_field('chart_one_text'); ?>
                    </h4>
                </div>
                <div class="col-md-4 my-3">
                    <canvas id="sample1"></canvas>
                    <h4 class="title"><?php the_field('chart_two_text'); ?>
                    </h4>
                </div>
                <div class="col-md-4 my-3">
                    <canvas id="sample2"></canvas>
                    <h4 class="title"><?php the_field('chart_three_text'); ?>
                    </h4>
                </div>
            </div>
        </div>
    </section>
    <!-- * ===============  /Filling-triangle Section =============== * -->

<?php $testimonials = get_field('testimonials');
if (!empty($testimonials)):?>
    <!-- * =============== Testimonial Section =============== * -->
    <section class="lozad section-divider text-center testimonial fixed-bg"
             data-background-image="<?php the_field('background_image'); ?>" id="about-testimonial">
        <div class="container">
            <div class="owl-carousel owl-theme">
                <?php foreach ($testimonials as $testimonial): ?>
                    <div class="item text-white">
                        <?php echo $testimonial['testimony']; ?>
                        <div class="testimonial-img">
                            <h2 class="sal"><span class="info"><span class="person_name"><?php echo $testimonial['reviewer']; ?></span>
                            <span class="designation"><?php echo $testimonial['reviewer_designation']; ?></span></span>
                        </h2>
                            <img src="<?php echo $testimonial['company_logo']; ?>" class="mx-auto mt-5"
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
    <section class="bg-light team-section" id="team-members">
        <div class="container pt-5">
            <h2 data-aos="fade-right" class="aos-init aos-animate left-animating">
                <span><?php the_field('consultants_heading'); ?></span></h2>
            <?php $chunked_consultant = array_chunk($consultants, 3);
            $count = 1;
            foreach ($chunked_consultant as $consultant_array):
                $flag = 0; ?>
                <div class="team-wrap">
                    <ul class="nav nav-tabs responsive row" role="tablist">
                        <?php foreach ($consultant_array as $consultant): ?>
                            <li class="col-md-4 team-col">
                                <a href="#consultant<?php echo $count; ?>" data-toggle="tab">
                                    <figure class="figure">
                                        <img src="<?php echo $consultant['consultant_image']; ?>"
                                             class="figure-img img-fluid"
                                             alt="consultant-profile">
                                        <figcaption class="figure-caption">
                                            <h3><span><?php echo $consultant['consultant_name']; ?></span></h3>
                                            <h6 class="desigantion">
                                                <div><?php echo $consultant['consultant_designation']; ?>,</div>
                                                <div><?php echo $consultant['consultant_location']; ?></div>
                                            </h6>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <?php $count++;
                            $flag++; endforeach; ?>
                    </ul><!-- Tab panes -->
                    <div class="tab-content responsive">
                        <?php $count = $count - $flag;
                        foreach ($consultant_array as $consultant): ?>
                            <div class="tab-pane" id="consultant<?php echo $count; ?>">
                                <div class="intro-desc" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body p-0">
                                        <?php echo $consultant['consultant_description']; ?>
                                    </div>
                                </div>
                            </div>
                            <?php $count++; endforeach; ?>
                    </div>
                </div> <!--/team-wrap-->
            <?php endforeach; ?>
        </div>
    </section>
    <!-- * =============== /Consultants Section =============== * -->
<?php
endif;

$operations = get_field('operations');
if (!empty($operations)):?>
    <!-- * =============== Opertaions Section =============== * -->
    <section class="bg-light team-section">
        <div class="container pt-5">
            <h2 data-aos="fade-right" class="aos-init aos-animate left-animating">
                <span><?php the_field('operations_heading'); ?></span></h2>
            <?php $chunked_operation = array_chunk($operations, 3);
            $count = 1;
            foreach ($chunked_operation as $operation_array):
                $flag = 0; ?>
                <div class="team-wrap">
                    <ul class="nav nav-tabs responsive row" role="tablist">
                        <?php foreach ($operation_array as $operation): ?>
                            <li class="col-md-4 team-col">
                                <a href="#operation<?php echo $count; ?>" data-toggle="tab">
                                    <figure class="figure">
                                        <img src="<?php echo $operation['operations_image']; ?>"
                                             class="figure-img img-fluid"
                                             alt="operations-profile">
                                        <figcaption class="figure-caption">
                                            <h3><span><?php echo $operation['operations_name']; ?></span></h3>
                                            <h6 class="desigantion">
                                                <div><?php echo $operation['operations_designation']; ?>,</div>
                                                <div><?php echo $operation['operations_location']; ?></div>
                                            </h6>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <?php $count++;
                            $flag++; endforeach; ?>
                    </ul><!-- Tab panes -->
                    <div class="tab-content responsive">
                        <?php $count = $count - $flag;
                        foreach ($operation_array as $operation): ?>
                            <div class="tab-pane" id="operation<?php echo $count; ?>">
                                <div class="intro-desc" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body p-0">
                                        <?php echo $operation['operations_description']; ?>
                                    </div>
                                </div>
                            </div>
                            <?php $count++; endforeach; ?>
                    </div>
                </div> <!--/team-wrap-->
            <?php endforeach; ?>
        </div>
    </section>
    <!-- * =============== /Opertations Section =============== * -->
<?php endif;

get_footer();
