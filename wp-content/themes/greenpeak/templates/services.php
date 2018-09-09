<?php
/*
 * Template Name: Services
 */
get_header(); ?>

    <img src="<?php the_field('background_image'); ?>" alt="" class="bg-image">
    <div class="service-container">
        <div class="service-container2">
            <div class="service-page">
                <div class="service-wrap">
                    <div class="service-col timeline_active">
                        <div class="content-below">
                            <h4 class="">
                                <?php the_field('content'); ?>
                            </h4>
                        </div><!--/service-col-->
                    </div>
                    <?php $services = get_field('services');
                    if (!empty($services)):
                        $count = 0;
                        foreach ($services as $service):
                            if ($count % 2 == 0):?>
                                <div class="service-col content-below timeline_active">
                                    <div class="timeline-inner">
                                        <div class="dot">
                                            <div>
                                                <div class="dot-in"></div>
                                            </div>
                                        </div>
                                    </div> <!--/timeline-inner-->
                                    <div class="col-above">
                                        <h4 class="title"><?php echo $service['main_heading']; ?></h4>
                                        <?php echo $service['description']; ?>
                                    </div>
                                    <div class="col-below">
                                        <img src="<?php echo $service['image']; ?>" alt="">
                                    </div>
                                </div><!--/service-col-->
                            <?php else: ?>
                                <div class="service-col timeline_active">
                                    <div class="timeline-inner">
                                        <div class="dot">
                                            <div>
                                                <div class="dot-in"></div>
                                            </div>
                                        </div>
                                    </div> <!--/timeline-inner-->
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
