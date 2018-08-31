<?php
/* Template Name: Career */

get_header(); ?>
<div class="inner-banner" style="background-image: url('<?php the_field('banner_image'); ?>');">
    <div class="heading-block">
        <h1 class="small"><?php the_field('banner_heading'); ?></h1>
    </div>

      <div class="line-ani-right"></div>

</div>

    <div class="container">
        <div class="row plain-txt-row">
            <div class="col-sm-12">
                <p class="black"> <?php the_field('content', false, false); ?></p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row plain-txt-row">
            <div class="col-sm-12">
                <?php echo do_shortcode('[wonderplugin_gallery id="1"]'); ?>
            </div>
        </div>
    </div>


<?php $testimonials = get_field('testimonials');
if (!empty($testimonials)): ?>
    <div class="testimonial-container">
        <div class="dk-container">
            <div class="cd-testimonials-wrapper cd-container"
                 style="background-image: url('<?php the_field('background_image'); ?>'    );">

                <ul class="cd-testimonials">
                    <?php foreach ($testimonials as $testimonial): ?>
                        <li>
                            <div class="testimonial-content">
                                “<?php echo $testimonial['testimony']; ?>”
                                <div class="cd-author">
                                    <div class="cd-author-info"><?php echo $testimonial['reviewer_name']; ?></div>
                                    <img src="<?php echo $testimonial['reviewer_image']; ?>"
                                         alt="Author image">
                                </div>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <!-- cd-testimonials -->
        </div>
    </div>
<?php endif; ?>


<?php $values = get_field('green_peak_values');
if (!empty($values)):
    ?>
    <section id="infinite-section" style="position: relative;overflow: hidden;">
        <div class="whats-on__bg-images">
            <?php foreach ($values as $value): ?>
                <div class="bg-images__image" data-stellar-ratio="0.5"
                     style="background-image: url('<?php echo $value['background_image_one']; ?>');"></div>
                <div class="bg-images__image" data-stellar-ratio="0.5"
                     style="background-image: url('<?php echo $value['background_image_two']; ?>');"></div>
            <?php endforeach; ?>
          </div>

            <!-- infinite scroll section starts here -->
            <div class="infinite-sec">
                <div class="container">
                    <div class="single-head">
                        <h2><?php the_field('main_heading'); ?></h2>
                    </div>
                    <?php $count = 0;
                    foreach ($values as $value): ?>
                        <div class="whats-on__sec whats-on__sec--small-left container-fluid">
                            <div class="row">
                                <?php if ($value['option'] == 'Image'):
                                    if ($count % 2 == 0): ?>
                                        <div class="col-md-5">
                                            <div class="whats-on__block whats-on__block--intro">
                                                <h2 class="from-left"><?php echo $value['heading']; ?></h2>
                                                <p class="black"><?php echo $value['sub_heading']; ?></p>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="whats-on__block whats-on__block--news">
                                                <div class="teaser teaser--image"
                                                     style="background-image: url('<?php echo $value['main_image']; ?>');">

                                                </div>
                                            </div>
                                        </div>
                                    <?php $count++; else: ?>
                                        <div class="col-md-8">
                                            <div class="whats-on__block whats-on__block--news">
                                                <div class="teaser teaser--image"
                                                     style="background-image: url('<?php echo $value['main_image']; ?>');">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="whats-on__block whats-on__block--intro">
                                                <h2 class="from-ryt"><?php echo $value['heading']; ?></h2>
                                                <p class="black"><?php echo $value['sub_heading']; ?></p>
                                            </div>
                                        </div>
                                    <?php $count++; endif;
                                elseif ($value['option'] == 'Video'): ?>
                                    <div class="single-head">
                                        <h2><?php echo $value['heading']; ?></h2>
                                        <p><?php echo $value['sub_heading']; ?></p>
                                    </div>

                                    <div class="whats-on__sec container-fluid">
                                        <div class="row">
                                            <div class="col-sm-12 video-tag">
                                                <video src="<?php echo $value['video']; ?>"
                                                       width="100%" height="auto">
                                                </video>

                                            </div>

                                        </div>

                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php endforeach; ?>
                </div>
            </div>
    </section>
<?php endif; ?>
    <!-- infinite scroll section ends here -->

    <!-- contact form section starts here -->
    <section class="contact-form-wrapper"
             style="background-image: url('<?php the_field('background_image'); ?>');  background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4><?php the_field('contact_heading'); ?></h4>
                    <?php echo do_shortcode('[contact-form-7 id="138" title="Contact form 1"]'); ?>
                </div>
            </div>
        </div>
    </section>
    <!-- contact form section ends here -->

<?php get_footer();
