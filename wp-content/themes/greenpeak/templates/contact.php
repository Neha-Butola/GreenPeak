<?php
/*
  * Template Name: Contact
  */

get_header(); ?>

    <div class="banner" style="background-image: url('<?php the_field('banner_image'); ?>');">
        <div class="banner-content">
            <h1 data-aos="fade-in" data-aos-delay="400"><span>PURSUE EXCEPTIONAL</span></h1>
            <div class="animating-line right-line"></div>
        </div>
    </div>
    <!-- * =============== Form Section =============== * -->
    <section class="contact-bg lozad" data-background-image="<?php the_field('background_image'); ?>">
        <div class="container text-white">
            <p>Green Peak is seeking professionals with an unusually high blend of EQ and IQ, a deep curiosity about
                people, and a
                passion for leadership and organizational develop- ment. You must be prepared to fasten your seat belt,
                take your own
                game to the next level and have a blast doing it. If you are interested in learning more about our
                unique
                team,
                contact us below.</p>
            <h3 class="text-uppercase">explore EXCEPTIONAL</h3>
            <?php echo do_shortcode('[contact-form-7 id="113" title="Contact Form"]'); ?>
        </div>
    </section>
    <!-- * =============== /Form Section =============== * -->

<?php get_footer();
