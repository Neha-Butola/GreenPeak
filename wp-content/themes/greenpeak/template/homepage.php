<?php
/* Template Name: Homepage */

get_header(); ?>

    <div class="inner-banner"
         style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/ContactBridge.jpg');">
        <div class="heading-block">
            <h1 class="small">PURSUE EXCEPTIONAl</h1>
        </div>

        <div class="line-div-ani">
        </div>

    </div>

    <figure class="scroller-triangle" data-bottom-top="width:50%;" data-90-top="width:100%;"
            style="background: url('<?php echo get_template_directory_uri(); ?>/assets/images/ExpandedClientSection.jpg') center center;">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ExpandedClientSection.jpg" alt="logo section">
    </figure>


    <div class="home-Parallax">
        <div class="container">
            <section class="first-Parallax-row">
                <div class="image" data-speed="2"
                     style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/GPHome_Why.jpg');"></div>
                <div class="stuff row" data-type="content">
                    <div class="col-md-6 col-12  content-block">
                        <p class="p-white">Most humans lack the desire and courage to tap into their full potential and
                            they settle for being average. Similarly, most teams and companies have become complacent
                            and lack the hunger and sense of urgency that winning companies require. Even
                            though we all know talent and leadership matter, typical HR has fallen far short of making a
                            meaningful difference. In response, we created Green Peak, the nation’s top leadership
                            acceleration firm, to eradicate this complacency and averageness
                            from leaders, teams, and organizations. </p>
                    </div>
                    <div class="col-md-6 col-12 align-self-end justify-content-end">
                        <h2 class="large">“THE WHY”</h2>
                        <h3>ABOUT</h3>
                    </div>
                </div>
            </section>

            <section class="sec-Parallax-row">
                <div class="image" data-speed="2"
                     style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/GPHome_How.jpg');"></div>
                <div class="stuff row" data-type="content">
                    <div class="col-md-6 col-12 align-self-end justify-content-start">
                        <h2 class="large">“THE HOW”</h2>
                        <h3 class="text-right">SERVICES</h3>
                    </div>
                    <div class="col-md-6 col-12 content-block">
                        <p>Green Peak helps investors and CEOs maximize their financial results and valuations. We do
                            this throughout the deal cycle by providing the highest leverage human capital expertise in
                            the country.</p>
                    </div>
                </div>
            </section>

            <section class="third-Parallax-row">
                <div class="image" data-speed="2"
                     style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/GPHome_Who.jpg');"></div>
                <div class="stuff row" data-type="content">
                    <div class="col-md-6 col-12  content-block ">
                        <p>Green Peak’s coaches are the very best industrial psychologists and former strategy
                            consultants in the field. They are passionate about maximizing leadership, talent, teams,
                            and cultures to generate top-decile returns for investors. </p>
                    </div>
                    <div class="col-md-6 col-12  align-self-end text-left">
                        <h2 class="large">“THE WHO”</h2>
                        <h3>CAREERS</h3>
                    </div>
                </div>
            </section>
        </div>
    </div>


<?php get_footer();
