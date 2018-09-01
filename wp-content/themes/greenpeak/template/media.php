<?php
/* Template Name: Media */

get_header(); ?>


    <div class="inner-banner" style="background-image: url('<?php the_field('banner_image'); ?>');">
        <div class="heading-block">
            <h1 class="small"><?php the_field('banner_heading'); ?></h1>
        </div>
        <div class="line-ani-left"></div>
    </div>

<?php $logos = get_field('logos');
if (!empty($logos)):?>
    <!-- Media logo section starts here -->
    <section class="media-logo-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <?php the_field('content_section_one'); ?>
                </div>
                <?php foreach ($logos as $logo): ?>
                    <div class="col-4 logo-block">
                        <figure>
                            <img src="<?php echo $logo['image']; ?>" alt="logos"
                                 class="img-fluid">
                        </figure>
                    </div>
                <?php endforeach; ?>
                <div class="col-12">
                    <?php the_field('content_section_two'); ?>
                </div>
            </div>

        </div>
    </section>
    <!-- Media logo section ends here -->
<?php endif; ?>

<?php

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$parameters = array(
    'post_type' => 'videos',
    'posts_per_page' => 3,
    'paged' => $paged
);
$videos = new WP_Query($parameters);
$total_pages = $videos->max_num_pages;
if ($videos->have_posts()): ?>
    <!-- Video section starts here  -->
    <section class="video-warpper">
        <div class="container">
            <h2><?php the_field('video_section_heading'); ?></h2>
            <div class="row" id="videos">
                <?php while ($videos->have_posts()): $videos->the_post(); ?>
                    <div class="col-12 video-block">
                        <video width="100%" height="auto" controls>
                            <source src="<?php the_field('video'); ?>"
                                    type="video/mp4">
                        </video>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
    <!-- Video section ends here  -->
<?php endif; ?>


    <!-- Article section starts here -->
    <section class="video-warpper">
    <div class="container">
    <h2>Articles</h2>
    </div>
    </section>
<?php $parameters = array(
    'post-type' => 'posts',
    'posts_per_page' => '6',
);
$articles = new WP_Query($parameters);
$total_pages = $articles->max_num_pages;
if ($articles->have_posts()):
    while ($articles->have_posts()):
        $articles->the_post(); ?>
        <section class="article-wrapper"
                 style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center inner-row">
                        <h3 class=""><?php the_title(); ?></h3>
                        <?php $content = get_the_content();
                        $content = wp_trim_words($content, '50');
                        ?>
                        <p><?php echo $content; ?></p>


                        <a href="<?php echo get_the_permalink(); ?>">read article  <div class="button"></div></a>

                    </div>

                    <div class="borders top"></div>
                    <div class="borders right"></div>
                    <div class="borders left"></div>
                    <i class="fab fa-linkedin-in"></i>
                    <i class="fab fa-twitter"></i>
                    <p class="share">share on</p>
                </div>

            </div>
        </section>
    <?php endwhile; endif; ?>
    <!-- Article section ends here -->

<?php get_footer();
