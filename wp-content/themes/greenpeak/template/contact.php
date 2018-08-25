<?php
/* Template Name: Contact */

get_header(); ?>


    <div class="inner-banner"
         style="background-image: url('<?php the_field('banner_image'); ?>');">
        <div class="heading-block">
            <h1 class="small"><?php the_field('banner_heading'); ?></h1>
        </div>

        <div class="line-div-ani">
        </div>

    </div>

<?php $content = get_field('content');
if (!empty($content)): ?>
    <!-- contact detail section starts here  -->
    <section class="contact-detail-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p><?php echo $content; ?></p>
                </div>
                <div class="col-md-6 phone-number">
                    <a href="tel:<?php the_field('phone_number'); ?>"><i
                                class="fas fa-phone"></i><?php the_field('phone_number'); ?></a>
                </div>
                <div class="col-md-6 email-info">
                    <a href="mailto:<?php the_field('email_address'); ?>"><i
                                class="far fa-envelope"></i><?php the_field('email_address'); ?></a>
                </div>
            </div>
        </div>
    </section>
    <!-- contact detail section ends here  -->
<?php endif; ?>

    <!-- contact form section starts here -->
    <section class="contact-form-wrapper"
             style="background-image: url('<?php the_field('background_image'); ?>');  background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4><?php the_field('contact_heading'); ?></h4>
                    <form class="contact-form">
                        <div class="form-group">
                            <input type="text" class="form-control" id="exampleInpuName" aria-describedby="namelHelp"
                                   placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="exampleInpuEmail" aria-describedby="emailHelp"
                                   placeholder="Email Address">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                      placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary submit-btn">SEND</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- contact form section ends here -->

<?php get_footer();
