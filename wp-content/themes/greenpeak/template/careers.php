<?php
/* Template Name: Career */

get_header(); ?>

<div class="inner-banner" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/ContactBridge.jpg');">
    <div class="heading-block" >
        <h1 class="small">PURSUE EXCEPTIONAl</h1>
    </div>
</div>
<div class="container">
    <div class="row plain-txt-row">
        <div class="col-sm-12">
            <p class="black">Are you passionate about making a difference by influencing a CEO’s or company’s leadership? Do you care more about boosting an organization’s teamwork and culture than doing lengthy research and PowerPoint decks? Are you the person friends and colleagues routinely seek out for personal and professional advice? If so, we invite you to explore joining the premier leadership acceleration firm for private equity companies, Boards, and C-suite leaders. Come meet what several clients have called the “Navy Seal Team” in this hot and growing industry. Accelerate your career and elevate your life by learning from the top executive coaches and organizational health experts in the country.<a> Meet our team of exceptional consultants.</a></p>
        </div>

    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="mySlides">

                <video width="100%" height="auto" controls>
                    <source src="<?php echo get_template_directory_uri(); ?>/assets/videos/Green-Peak-Summer-Retreat-2018.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>

            <div class="mySlides">

                <video width="100%" height="auto" controls>
                    <source src="<?php echo get_template_directory_uri(); ?>/assets/videos/Green-Peak-Summer-Retreat-2018.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>

            <div class="mySlides">

                <video width="100%" height="auto" controls>
                    <source src="<?php echo get_template_directory_uri(); ?>/assets/videos/Green-Peak-Summer-Retreat-2018.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>


            <div class="mySlides">

                <video width="100%" height="auto" controls>
                    <source src="<?php echo get_template_directory_uri(); ?>/assets/videos/Green-Peak-Summer-Retreat-2018.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>


            <!-- Image text -->
            <!-- <div class="caption-container">
              <p id="caption"></p>
            </div> -->

        </div>

    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="column">
            <img class=" cursor" src="<?php echo get_template_directory_uri(); ?>/assets/videos/Green-Peak-Summer-Retreat-2018.mp4" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
        </div>
        <div class="column">
            <img class="demo cursor" src="<?php echo get_template_directory_uri(); ?>/assets/images/GPHome_How.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
        </div>
        <div class="column">
            <img class="demo cursor" src="<?php echo get_template_directory_uri(); ?>/assets/images/ContactBridge.jpg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
        </div>
    </div>
    <!-- <div class="column">
      <img class="demo cursor" src="../images/ContactBridge.jpg" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
    </div> -->

</div>

<div class="testimonial-container">
    <div class="dk-container">
        <div class="cd-testimonials-wrapper cd-container" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/GPHome_How.jpg'    );">
            <h2>Testimonials</h2>
            <ul class="cd-testimonials">
                <li>
                    <div class="testimonial-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
                        <div class="cd-author">
                            <img src="http://placehold.it/350x350/222222/222222" alt="Author image">
                            <ul class="cd-author-info">
                                <li>Lorem<strong>Ipsum</strong><br><span>@twitterhandle</span></li>
                                <li></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="testimonial-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Cras mattis consectetur purus sit amet fermentum.</p>
                        <div class="cd-author">
                            <img src="http://placehold.it/350x350/222222/222222" alt="Author image">
                            <ul class="cd-author-info">
                                <li>Lorem<strong>Ipsum</strong><br><span>@twitterhandle</span></li>
                                <li></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="testimonial-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Cras mattis consectetur purus sit amet fermentum.</p>
                        <div class="cd-author">
                            <img src="http://placehold.it/350x350/222222/222222" alt="Author image">
                            <ul class="cd-author-info">
                                <li>Lorem<strong>Ipsum</strong><br><span>@twitterhandle</span></li>
                                <li></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <!-- cd-testimonials -->
    </div>
</div>


<script type="text/javascript">
    var slideIndex = 1;
    showSlides(slideIndex);


    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        var captionText = document.getElementById("caption");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        captionText.innerHTML = dots[slideIndex-1].alt;
    }

</script>

<script>
    jQuery(document).ready(function($) {
//create the slider
        $('.cd-testimonials-wrapper').flexslider({
            selector: ".cd-testimonials > li",
            animation: "slide",
            controlNav: true,
            slideshow: false,
            smoothHeight: true,
            start: function() {
                $('.cd-testimonials').children('li').css({
                    'opacity': 1,
                    'position': 'relative'
                });
            }
        });
    });
</script>

<?php get_footer();
