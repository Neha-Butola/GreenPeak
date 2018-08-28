<?php
/* Template Name: Career */

get_header(); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/stellar.js/0.6.2/jquery.stellar.min.js">
</script>

<div class="inner-banner" style="background-image: url('<?php the_field('banner_image'); ?>');">
    <div class="heading-block" >
        <h1 class="small"><?php the_field('banner_heading'); ?></h1>
    </div>
</div>
<div class="container">
    <div class="row plain-txt-row">
        <div class="col-sm-12">
            <p class="black"> <?php the_field('content'); ?></p>
        </div>

    </div>
</div>
    <!-- <div class="row">
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
<!--
        </div>

    </div>
</div> --> -->
<!-- <div class="row">
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

<!-- </div> --> -->

<div class="testimonial-container">
    <div class="dk-container">
        <div class="cd-testimonials-wrapper cd-container" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/GPHome_How.jpg'    );">

            <ul class="cd-testimonials">
                <li>
                    <div class="testimonial-content">
                        <p>“In my previous operational roles I realized that often the right management team is the difference between success and failure. Learning how to identify who these people are, helping them be successful, and supporting an organization to thrive is what Green Peak does best. I get to learn from the best in the field, and work with extremely talented clients to solve their most emergent talent and leadership issues.”</p>
                        <div class="cd-author">
                                <div class="cd-author-info">ALPHA MENGITSU</div>
                                <img src="http://placehold.it/350x350/222222/222222" alt="Author image">
                        </div>
                    </div>
                </li>
                <li>
                    <div class="testimonial-content">
                        <p>“In my previous operational roles I realized that often the right management team is the difference between success and failure. Learning how to identify who these people are, helping them be successful, and supporting an organization to thrive is what Green Peak does best. I get to learn from the best in the field, and work with extremely talented clients to solve their most emergent talent and leadership issues.”</p>
                        <div class="cd-author">

                                <div class="cd-author-info">ALPHA MENGITSU</div>
                                    <img src="http://placehold.it/350x350/222222/222222" alt="Author image">
                        </div>
                    </div>
                </li>
                <li>
                    <div class="testimonial-content">
                        <p>“In my previous operational roles I realized that often the right management team is the difference between success and failure. Learning how to identify who these people are, helping them be successful, and supporting an organization to thrive is what Green Peak does best. I get to learn from the best in the field, and work with extremely talented clients to solve their most emergent talent and leadership issues.”</p>
                        <div class="cd-author">

                            <div class="cd-author-info">ALPHA MENGITSU</div>
                                <img src="http://placehold.it/350x350/222222/222222" alt="Author image">
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <!-- cd-testimonials -->
    </div>
</div>
<!-- contact form section starts here -->
<section class="contact-form-wrapper"
         style="background-image: url(http://greenpeak.local/wp-content/uploads/2018/08/GPHome_BlurredClientBG.jpg);  background-size: cover;">
    <div class="container">
      <div class="row  contact-desc">
          <div class="col-12">
              <p>Green Peak is seeking professionals with an unusually high blend of EQ and IQ, a deep curiosity about people, and a passion for leadership and organizational development. You must be prepared to fasten your seat belt, take your own game to the next level and have a blast doing it. If you are interested in learning more about our unique team, contact us below.</p>
          </div>
      </div>
        <div class="row">
            <div class="col-12">
                <h4>EXPLORE EXCEPTIONAL</h4>
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

<!--  -->
<section style="position: relative;overflow: hidden;">
<div class="whats-on__bg-images">
					<div class="bg-images__image" data-stellar-ratio="0.5" style="background-image: url('https://www.wellingtoncollege.org.uk/wp-content/uploads/2018/08/Students-on-Turf-650x433.jpg');"></div>
						<div class="bg-images__image" data-stellar-ratio="0.5" style="background-image: url('https://www.wellingtoncollege.org.uk/wp-content/uploads/2018/08/Students-on-Turf-650x433.jpg');"></div>
            <div class="bg-images__image" data-stellar-ratio="0.5" style="background-image: url('https://www.wellingtoncollege.org.uk/wp-content/uploads/2018/08/Students-on-Turf-650x433.jpg');"></div>
              <div class="bg-images__image" data-stellar-ratio="0.5" style="background-image: url('https://www.wellingtoncollege.org.uk/wp-content/uploads/2018/08/Students-on-Turf-650x433.jpg');"></div>
              <div class="bg-images__image" data-stellar-ratio="0.5" style="background-image: url('https://www.wellingtoncollege.org.uk/wp-content/uploads/2018/08/Students-on-Turf-650x433.jpg');"></div>
                <div class="bg-images__image" data-stellar-ratio="0.5" style="background-image: url('https://www.wellingtoncollege.org.uk/wp-content/uploads/2018/08/Students-on-Turf-650x433.jpg');"></div>

			</div>
      <!--  -->
<!-- infinite scroll section starts here -->
<div class="infinite-sec">
  <div class="container">
    <div class="single-head">
      <h2>Green Peak Values</h2>
    </div>
    <div class="whats-on__sec whats-on__sec--small-left container-fluid">
		<div class="row">
      <div class="col-md-5">
  				<div class="whats-on__block whats-on__block--intro">
      			<h2 class="from-left">Engage Courageously</h2>
      			<p class="black">A chronology of <span> all that’s happening</span></p>
  			  </div>
			</div>
			<div class="col-md-7">
        <div class="whats-on__block whats-on__block--news">
          <div class="teaser teaser--image" style="background-image: url('https://www.wellingtoncollege.org.uk/wp-content/uploads/2018/08/Students-on-Turf-650x433.jpg');">

          </div>
        </div>
        </div>
			</div>
</div>


<div class="whats-on__sec whats-on__sec--small-left container-fluid">
<div class="row">

  <div class="col-md-7">
    <div class="whats-on__block whats-on__block--news">
      <div class="teaser teaser--image" style="background-image: url('https://www.wellingtoncollege.org.uk/wp-content/uploads/2018/08/Students-on-Turf-650x433.jpg');">

      </div>
    </div>
    </div>
    <div class="col-md-5">
        <div class="whats-on__block whats-on__block--intro">
          <h2 class="from-ryt">Engage Courageously</h2>
          <p class="black">A chronology of <span> all that’s happening</span></p>
        </div>
    </div>
  </div>
</div>

<div class="single-head">
  <h2>Green Peak Values</h2>
  <p>Reach out often. Meet each other more than half way.</p>
</div>

<div class="whats-on__sec container-fluid">
  <div class="row">
    <div class="col-sm-12 video-tag">
      <video src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/WhatCarCanYouGetForAGrand.mp4" width="100%" height="auto">
      </video>

    </div>

  </div>

</div>

<div class="whats-on__sec whats-on__sec--small-left container-fluid">
<div class="row">
  <div class="col-md-5">
      <div class="whats-on__block whats-on__block--intro">
        <h2 class="from-left">Engage Courageously</h2>
        <p class="black">A chronology of <span> all that’s happening</span></p>
      </div>
  </div>
  <div class="col-md-7">
    <div class="whats-on__block whats-on__block--news">
      <div class="teaser teaser--image" style="background-image: url('https://www.wellingtoncollege.org.uk/wp-content/uploads/2018/08/Students-on-Turf-650x433.jpg');">

      </div>
    </div>
    </div>
  </div>
</div>


<div class="whats-on__sec whats-on__sec--small-left container-fluid">
<div class="row">

<div class="col-md-7">
<div class="whats-on__block whats-on__block--news">
  <div class="teaser teaser--image" style="background-image: url('https://www.wellingtoncollege.org.uk/wp-content/uploads/2018/08/Students-on-Turf-650x433.jpg');">

  </div>
</div>
</div>
<div class="col-md-5">
    <div class="whats-on__block whats-on__block--intro">
      <h2 class="from-ryt">Engage Courageously</h2>
      <p class="black">A chronology of <span> all that’s happening</span></p>
    </div>
</div>
</div>
</div>

  </div>
</div>
</section>

<!-- infinite scroll section ends here -->

<?php get_footer();
