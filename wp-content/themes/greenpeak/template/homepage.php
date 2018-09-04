<?php
/* Template Name: Homepage */

get_header(); ?>

    <div class="inner-banner"
         style="background-image: url('<?php the_field('banner_image'); ?>');">
        <div class="heading-block">
            <h1 class="small green-text"><?php the_field('banner_heading'); ?></h1>
        </div>

        <div class="line-ani-left"></div>
        <h1 class="small sec-heading"><?php the_field('banner_sub_heading'); ?></h1>

    </div>
  <!-- <figure class="scroller-triangle" data-bottom-top="width:50%;" data-90-top="width:100%;"
          style="background: url('<?php the_field('background_image'); ?>') center center;">
  </figure> -->

<div id="drawing">
  <img src="https://lanbelle.com/wp-content/themes/lanbelle/images/sub/origin/origin-full-image-02.jpg" alt="" style="width: 100%">
</div>


<?php $content = get_field('content');
$count = 1;
if (!empty($content)): ?>
    <div class="home-Parallax">
        <div class="container">
            <?php foreach ($content as $section): ?>
                <section class="Parallax-row">
                    <div class="image" data-speed="2"
                         style="background-image: url('<?php echo $section['background_image']; ?>');"></div>
                    <?php if ($count % 2 != 0): ?>
                        <div class="stuff row " data-type="content">
                            <div class="col-md-6 col-12 aos-init content-block"  data-aos="fade-in" data-aos-delay=900>
                                <p class="p-white"><?php echo $section['description']; ?></p>
                            </div>
                            <div class="col-md-6 col-12 align-self-end head-block aos-init" data-aos="fade-in" data-aos-delay=100>
                                <h2 class="large"><a href="">“<?php echo $section['main_heading']; ?>”</a></h2>
                                <h3><?php echo $section['sub_heading']; ?></h3>
                            </div>
                        </div>
                    <?php else: ?>
                        <div class="stuff row" data-type="content">
                            <div class="col-md-6 col-12 align-self-end head-block aos-init" data-aos="fade-in" data-aos-delay=100>
                                <h2 class="large">“<?php echo $section['main_heading']; ?>”</h2>
                                <h3 class="text-right"><?php echo $section['sub_heading']; ?></h3>
                            </div>
                            <div class="col-md-6 col-12 content-block aos-init" data-aos="fade-in" data-aos-delay=900>
                                <p><?php echo $section['description']; ?></p>
                            </div>
                        </div>
                    <?php endif; ?>
                </section>
                <?php $count++; endforeach; ?>
        </div>
    </div>
<?php endif; ?>
<!-- <svg id="mySVG">
<path fill="none" stroke="red" stroke-width="3" id="triangle" d="M0,0.5h4035" />
Sorry, your browser does not support inline SVG.
</svg> -->
<?php get_footer();
