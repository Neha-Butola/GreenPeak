<?php
/* Template Name: Services */

get_header(); ?>

<?php $services = get_field('services');
$count = 1;
$flag = 0;
if (!empty($services)): ?>
    <div id="service-container">
        <div id="service-container2">
            <div class="box" style="background-image: url('<?php the_field('background_image'); ?>')">
                <div>
                    <div class="col-main">
                        <div class="col-6 para-div">
                            <p><?php the_field('content', false, false); ?></p>
                            <svg id="more-arrows">
                                <polygon class="arrow-top" points="37.6,27.9 1.8,1.3 3.3,0 37.6,25.3 71.9,0 73.7,1.3 "/>
                                <polygon class="arrow-middle"
                                         points="37.6,45.8 0.8,18.7 4.4,16.4 37.6,41.2 71.2,16.4 74.5,18.7 "/>
                                <polygon class="arrow-bottom"
                                         points="37.6,64 0,36.1 5.1,32.8 37.6,56.8 70.4,32.8 75.5,36.1 "/>
                            </svg>
                        </div>
                        <div class="row">
                            <?php foreach ($services

                            as $service):
                            if ($count % 2 != 0) {
                                ?>
                                <div class="col-6 img-up">
                                    <?php if ($service['image']) { ?>
                                        <img src="<?php echo $service['image']; ?>"
                                             alt="DiligenceSupportGraphic">
                                    <?php } ?>
                                    <div class="content">
                                        <?php if ($service['main_heading']) { ?>
                                            <h5><?php echo $service['main_heading']; ?></h5>
                                        <?php } ?>
                                        <?php echo $service['description']; ?>
                                    </div>
                                </div>
                            <?php } else {
                                ?>
                                <div class="col-6 img-down">
                                    <div class="content">
                                        <?php if ($service['main_heading']) { ?>
                                            <h5><?php echo $service['main_heading']; ?></h5>
                                        <?php } ?>
                                        <?php echo $service['description']; ?>
                                    </div>
                                    <?php if ($service['image']) { ?>
                                        <img src="<?php echo $service['image']; ?>"
                                             alt="DiligenceSupportGraphic">
                                    <?php } ?>
                                </div>
                                <?php
                            } ?>
                            <?php
                            if ($count % 2 == 0){
                            ?>
                        </div>
                    </div>
                    <div class="col-main">
                        <div class="row">
                            <?php }
                            $count++;
                            endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php get_footer();
