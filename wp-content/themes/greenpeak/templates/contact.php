<?php
/*
  * Template Name: Contact
  */

get_header(); ?>

    <div class="banner" style="background-image: url('<?php the_field('banner_image'); ?>');">
        <div class="banner-content">
            <h1 data-aos="fade-in" data-aos-delay="400"><span><?php the_field('banner_heading'); ?></span></h1>
            <div class="animating-line"></div>
        </div>
    </div>

<?php if (get_field('content')): ?>
    <!-- * =============== Content Section =============== * -->
    <section class="container section-divider">
        <?php the_field('content'); ?>
        <div class="row contact">
            <div class="col-sm-6"><a href="tel:<?php the_field('phone_number'); ?>"><i
                            class="fas fa-phone"></i><?php the_field('phone_number'); ?></a></div>
            <div class="col-sm-6">
                <a href="mailto:<?php the_field('email_address'); ?>"><i
                            class="fas fa-envelope"></i><?php the_field('email_address'); ?></a>
            </div>
        </div>
    </section>
    <!-- * =============== /Content Section =============== * -->
<?php endif;

if (get_field('form_shortcode')):
    ?>
    <!-- * =============== Form Section =============== * -->
    <section class="contact-bg lozad fixed-bg" data-background-image="<?php the_field('background_image'); ?>">
        <div class="container section-divider text-white">
            <h2><?php the_field('contact_heading'); ?></h2>
            <?php $form_code = get_field('form_shortcode');
            echo do_shortcode($form_code); ?>
        </div>
    </section>
    <!-- * =============== /Form Section =============== * -->
<?php endif;
get_footer();
