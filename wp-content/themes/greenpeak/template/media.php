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
            <h2 class="aos-init" data-aos="fade-in"><?php the_field('video_section_heading'); ?></h2>
            <div class="row" id="videos">
                <?php while ($videos->have_posts()): $videos->the_post(); ?>
                    <div class="col-12 video-block">
                        <?php the_field('video'); ?>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
    <div class="nav-links">
        <a href="#" class="video-load-more" page="2"
           total-pages="<?php echo $total_pages; ?>" <?php if ($total_pages < 1) { ?> style="display: none" <?php } ?>>More
            Videos</a>
    </div>
    <!-- Video section ends here  -->
<?php endif;
wp_reset_query(); ?>


    <!-- Article section starts here -->
    <section class="video-warpper">
        <div class="container">
            <h2 class="aos-init" data-aos="fade-in"><?php the_field('articles_section_heading'); ?></h2>
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
                        <h3><?php the_title(); ?></h3>
                        <?php $content = get_the_content();
                        $content = wp_trim_words($content, '50');
                        ?>
                        <p><?php echo $content; ?></p>
                        <a class="read-title" href="<?php echo get_the_permalink(); ?>">read article
                            <div class="button"></div>
                        </a>
                    </div>
                    <div class="borders top"></div>
                    <div class="borders right"></div>
                    <div class="borders left"></div>
                    <!-- Sharingbutton Twitter -->
                    <a class="resp-sharing-button__link" href="https://twitter.com/intent/tweet/?url=<?php the_permalink(); ?>" target="_blank" aria-label="">
                        <div class="resp-sharing-button resp-sharing-button--twitter resp-sharing-button--small">
                            <div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--normal">
                                <i class="fab fa-twitter"></i>
                            </div>
                        </div>
                    </a>

                    <!-- Sharingbutton LinkedIn -->
                    <a class="resp-sharing-button__link" href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?php the_permalink(); ?>" target="_blank" aria-label="">
                        <div class="resp-sharing-button resp-sharing-button--linkedin resp-sharing-button--small">
                            <div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--normal">
                                <i class="fab fa-linkedin-in"></i>
                            </div>
                        </div>
                    </a>
                    <p class="share">share on</p>
                </div>

            </div>
        </section>
    <?php endwhile; endif; ?>
    <!-- Article section ends here -->

<?php get_footer();
