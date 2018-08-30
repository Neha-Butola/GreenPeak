<?php
/* Template Name: About */

get_header(); ?>

    <div class="inner-banner" style="background-image: url('<?php the_field('banner_image'); ?>');">
        <div class="heading-block">
            <h1 class="small"><?php the_field('banner_heading'); ?></h1>
        </div>

        <div class="line-div-ani">
        </div>

    </div>

    <div class="container">
        <div class="row plain-txt-row">
            <div class="col-sm-12">
                <p class="black"><?php the_field('content_section_one', false, false); ?></p>
            </div>

        </div>
    </div>

    <!--  background-content row  -->

    <div class="container-fluid">
        <div class="row bg-text-row" style="background-image: url('<?php the_field('background_image'); ?>');">
            <div class="col-sm-12 content">
                <p><?php the_field('content_section_two', false, false); ?></p>
            </div>
        </div>
    </div>
    <!-- unit row -->

    <div class=""
         style="background-image: url('<?php the_field('background_image'); ?>'); background-size: cover;">
        <div id='chart-container' class="row">

            <div class="col-sm-4">
                <div class="chart">
                </div>
                <p><?php the_field('chart_one_text'); ?></p>
            </div>
            <div class="col-sm-4">
                <div class="chart">
                </div>
                <p><?php the_field('chart_two_text'); ?></p>
            </div>
            <div class="col-sm-4">
                <div class="chart">
                </div>
                <p><?php the_field('chart_three_text'); ?></p>
            </div>
        </div>
    </div>


    <!-- about testimonial -->
<?php $testimonials = get_field('testimonials');
if (!empty($testimonials)):?>
    <div class="testimonial-container">
        <div class="cd-testimonials-wrapper "
             style="background-image: url('<?php the_field('testimonials_background_image'); ?>');">
            <ul class="testimonials-about">
                <?php foreach ($testimonials as $testimonial): ?>
                    <li>
                        <div class="testi-content">
                            <?php echo $testimonial['testimony']; ?>
                            <ul class="testi-descrip">
                                <li class="testi-name"><?php echo $testimonial['reviewer']; ?></li>
                                <li class="testi-desig"><?php echo $testimonial['reviewer_designation']; ?></li>
                            </ul>
                            <div class="testi-img">
                                <img src="<?php echo $testimonial['reviewer_image']; ?>" alt="Author image">
                            </div>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
<?php endif; ?>
    <!-- team section -->
<?php $consultants = get_field('consultants');
if (!empty($consultants)):?>
    <div class="team-section grey-bg">
        <div class="container">
            <h2><?php the_field('consultants_heading'); ?></h2>
            <div class="row team-row-content">
                <?php $count = 1;
                foreach ($consultants as $consultant): ?>
                    <div class="column" id="column-<?php echo $count; ?>">
                        <div class="main-box">
                            <img src="<?php echo $consultant['consultant_image']; ?>" alt="Jane"
                                 style="width:100%">
                            <div class="descrip-box" style="display: block;">
                                <p class="name"><?php echo $consultant['consultant_name']; ?>
                                <p>
                                <p class="title"><?php echo $consultant['consultant_designation']; ?></p>
                                <p class="location"><?php echo $consultant['consultant_location']; ?></p>
                            </div>
                        </div>
                        <div class="hide-box" style="display: none;">
                            <div class="hide-child">
                                <?php echo $consultant['consultant_description']; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

    </div>
<?php endif; ?>
<?php $operations = get_field('operations');
if (!empty($operations)):?>
    <div class="team-section white-bg">
        <div class="container">
            <h2><?php the_field('operations_heading'); ?></h2>
            <div class="row team-row-content">
                <?php foreach ($operations as $operation): ?>
                    <div class="column">
                        <img src="<?php echo $operation['operations_image']; ?>" alt="Jane"
                             style="width:100%">
                        <div class="descrip-box">
                            <p class="name"><?php echo $operation['operations_name']; ?>
                            <p>
                            <p class="title"><?php echo $operation['operations_designation']; ?></p>
                            <p class="location"><?php echo $operation['operations_location']; ?></p>
                        </div>
                        <div class="hide-box" style="display: none;">
                            <div class="hide-child">
                                <?php echo $operation['operations_description']; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php get_footer();
