<?php
/* Template Name: Homepage */

get_header(); ?>

    <div class="inner-banner"
         style="background-image: url('<?php the_field('banner_image'); ?>');">
        <div class="heading-block">
            <h1 class="small green-text"><?php the_field('banner_heading'); ?></h1>
        </div>

        <div class="line-ani-left"></div>
        <h1 class="small"><?php the_field('banner_sub_heading'); ?></h1>

    </div>

    <figure class="scroller-triangle" data-bottom-top="width:50%;" data-90-top="width:100%;"
            style="background: url('<?php the_field('background_image'); ?>') center center;">
    </figure>

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
                        <div class="stuff row" data-type="content">
                            <div class="col-md-6 col-12  content-block">
                                <p class="p-white"><?php echo $section['description']; ?></p>
                            </div>
                            <div class="col-md-6 col-12 align-self-end head-block">
                                <h2 class="large"><a href="">“<?php echo $section['main_heading']; ?>”</a></h2>
                                <h3><?php echo $section['sub_heading']; ?></h3>
                            </div>
                        </div>
                    <?php else: ?>
                        <div class="stuff row" data-type="content">
                            <div class="col-md-6 col-12 align-self-end head-block">
                                <h2 class="large">“<?php echo $section['main_heading']; ?>”</h2>
                                <h3><?php echo $section['sub_heading']; ?></h3>
                            </div>
                            <div class="col-md-6 col-12 content-block">
                                <p><?php echo $section['description']; ?></p>
                            </div>
                        </div>
                    <?php endif; ?>
                </section>
                <?php $count++; endforeach; ?>
        </div>
    </div>
<?php endif; ?>
<svg id="mySVG">
<path fill="none" stroke="red" stroke-width="3" id="triangle" d="M0,0.5h4035" />
Sorry, your browser does not support inline SVG.
</svg>
<?php get_footer();
// <!-- Generator: Adobe Illustrator 22.1.0, SVG Export Plug-In  -->
// <svg version="1.1"
// 	 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
// 	 x="0px" y="0px" width="4035px" height="1px" viewBox="0 0 4035 1" style="enable-background:new 0 0 4035 1;"
// 	 xml:space="preserve">
// <style type="text/css">
// 	.st0{fill:none;stroke:#FFFFFF;stroke-miterlimit:10;}
// </style>
// <defs>
// </defs>
// <path class="st0" d="M0,0.5h4035"/>
// </svg>
//  
