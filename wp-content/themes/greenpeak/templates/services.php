<?php
/*
 * Template Name: Services
 */
get_header(); ?>

    <img src="<?php the_field('background_image'); ?>" alt="services-background-image" class="bg-image">
    <div class="service-container dragscroll">
        <div class="service-container2">
            <div class="service-section" id="mydiv">
                <div class="service-wrap">
                    <div class="service-col">
                        <h4>
                            <?php the_field('content'); ?>
                        </h4>
                        <svg class="arrows_svg">
                            <polygon class="arrow-top" points="37.6,27.9 1.8,1.3 3.3,0 37.6,25.3 71.9,0 73.7,1.3 "></polygon>
                            <polygon class="arrow-middle" points="37.6,45.8 0.8,18.7 4.4,16.4 37.6,41.2 71.2,16.4 74.5,18.7 "></polygon>
                            <polygon class="arrow-bottom" points="37.6,64 0,36.1 5.1,32.8 37.6,56.8 70.4,32.8 75.5,36.1 "></polygon>
                        </svg>
                    </div>
                    <?php $services = get_field('services');
                    if (!empty($services)):
                        $count = 0;
                        foreach ($services as $service):
                            if ($count % 2 == 0):?>
                                <div class="service-col">
                                    <div class="timeline">
                                        <div class="dot">
                                            <div>
                                                <div class="dot-in"></div>
                                            </div>
                                        </div>
                                    </div> <!--/timeline-->
                                    <div class="col-above">
                                        <h4 class="title"><?php echo $service['main_heading']; ?></h4>
                                        <?php echo $service['description']; ?>
                                    </div>
                                    <div class="col-below">
                                        <img src="<?php echo $service['image']; ?>" alt="">
                                    </div>
                                </div><!--/service-col-->
                            <?php else: ?>
                                <div class="service-col">
                                    <div class="timeline">
                                        <div class="dot">
                                            <div>
                                                <div class="dot-in"></div>
                                            </div>
                                        </div>
                                    </div> <!--/timeline-->
                                    <div class="col-above">
                                        <img src="<?php echo $service['image']; ?>" alt="" class="">
                                    </div><!--/col-above-->
                                    <div class="col-below">
                                        <h4 class="title"><?php echo $service['main_heading']; ?></h4>
                                        <?php echo $service['description']; ?>
                                    </div> <!--/col-below-->
                                </div><!--/service-col-->
                            <?php endif;
                            $count++; endforeach; endif; ?>
                </div><!--/service-wrap-->
            </div>
        </div><!--/service-container2-->
    </div>

<?php get_footer();
