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
                            <p><?php the_field('content',false,false); ?></p>
                        </div>
                        <div class="row">
                            <?php foreach ($services as $service):
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
