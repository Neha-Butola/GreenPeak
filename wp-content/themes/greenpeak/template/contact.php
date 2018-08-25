<?php
/* Template Name: Contact */

get_header(); ?>


  <div class="inner-banner"
         style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/ContactBridge.jpg');">
        <div class="heading-block">
            <h1 class="small">CONTACT</h1>
        </div>

        <div class="line-div-ani">
        </div>

    </div>


    <!-- contact detail section starts here  -->
        <section class="contact-detail-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p>We serve clients across the U.S. with offices in Boston, 
                        Charlotte, Chicago, Cleveland, Dallas, Denver, and New York. If you are an investor, 
                        CEO, or Board member, we welcome you to reach out for additional information regarding 
                        how our team can help you achieve superior returns through optimizing your human capital.</p>
                    </div>
                    <div class="col-md-6 phone-number">
                        <a href="tel:303-362-1131"><i class="fas fa-phone"></i> 303-362-1131</a>
                    </div>
                    <div class="col-md-6 email-info">
                         <a href="mailto:info@greenpeak.com"><i class="far fa-envelope"></i> info@greenpeak.com</a>
                    </div>
                </div>
            </div>
        </section>
    <!-- contact detail section ends here  -->

    <!-- contact form section starts here -->
        <section class="contact-form-wrapper" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/GPHome_BlurredClientBG.jpg');  background-size: cover;">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h4>CONTACT GREEN PEAK</h3>
                        <form class="contact-form">
                            <div class="form-group">
                               <input type="text" class="form-control" id="exampleInpuName" aria-describedby="namelHelp" placeholder="Name">
                            </div>
                            <div class="form-group">
                               <input type="email" class="form-control" id="exampleInpuEmail" aria-describedby="emailHelp" placeholder="Email Address">
                            </div>
                            <div class="form-group">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Message"></textarea>
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
