<?php
/*
 * Template Name: Media
 */
get_header(); ?>

    <div class="banner" style="background-image: url('<?php the_field('banner_image'); ?>');">
        <div class="banner-content">
            <h1 data-aos="fade-in" data-aos-delay="400"><span><?php the_field('banner_heading'); ?></span></h1>
            <div class="animating-line"></div>
        </div>
    </div>

    <!-- * =============== Logos Section =============== * -->
    <section class="logos-section container">
        <?php the_field('content_section_one'); ?>
        <?php $logos = get_field('logos');
        if (!empty($logos)): ?>
            <div class="row align-items-center">
                <?php foreach ($logos as $logo): ?>
                    <div class="col-md-4 text-center">
                        <img src="<?php echo $logo['image']; ?>" alt="logos" class="img-fluid">
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        <?php the_field('content_section_two'); ?>
    </section>
    <!-- * =============== /Logos Section =============== * -->

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
    <!-- * =============== Media Video Section =============== * -->
    <section class="media-video">
        <div class="container" id="videos">
            <h2 class="text-center text-md-left left-animating">
                <span><?php the_field('video_section_heading'); ?></span></h2>
            <?php while ($videos->have_posts()): $videos->the_post(); ?>
                <div class="embed-responsive embed-responsive-21by9">
                    <iframe class="embed-responsive-item lozad" src="<?php the_field('video_url'); ?>" width="640"
                            height="360"
                            frameborder="0" allowfullscreen="allowfullscreen"></iframe>
                </div>
            <?php endwhile; ?>
        </div>
        <div class="nav-links text-center">
            <a href="#" class="video-load-more" page="2" data-type="video"
               total-pages="<?php echo $total_pages; ?>" <?php if ($total_pages <= 1) { ?> style="display: none" <?php } ?>>Load
                Videos</a>
        </div>
    </section>
    <!-- * =============== /Media Video Section =============== * -->
<?php endif;
wp_reset_query();

$parameters = array(
    'post-type' => 'posts',
    'posts_per_page' => '3',
    'paged' => $paged
);
$articles = new WP_Query($parameters);
$total_pages = $articles->max_num_pages;
if ($articles->have_posts()): ?>
    <!-- * =============== Articles Section =============== * -->
    <section>
        <div class="container">
            <h2 class="text-center text-md-left left-animating">
                <span><?php the_field('articles_section_heading') ?></span></h2>
        </div>
        <div class="articles-sec" id="articles">
            <?php while ($articles->have_posts()):
                $articles->the_post(); ?>
                <div data-background-image="<?php echo get_the_post_thumbnail_url(); ?>" class="lozad fixed-bg">
                    <div class="container">
                        <div class="text-center article-block">
                            <div class="position-relative">
                                <h3><?php the_title(); ?></h3>
                                <?php $content = get_the_content();
                                $content = wp_trim_words($content, '50');
                                ?>
                                <p><?php echo $content; ?></p>
                                <div class="share">
                                    <!-- Sharingbutton LinkedIn -->
                                    <a class="resp-sharing-button__link"
                                       href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?php the_permalink(); ?>"
                                       target="_blank" aria-label="">
                                        <div class="resp-sharing-button resp-sharing-button--linkedin resp-sharing-button--small">
                                            <div aria-hidden="true"
                                                 class="resp-sharing-button__icon resp-sharing-button__icon--normal">
                                                <i class="fab fa-linkedin-in"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <!-- Sharingbutton Twitter -->
                                    <a class="resp-sharing-button__link"
                                       href="https://twitter.com/intent/tweet/?url=<?php the_permalink(); ?>"
                                       target="_blank"
                                       aria-label="">
                                        <div class="resp-sharing-button resp-sharing-button--twitter resp-sharing-button--small">
                                            <div aria-hidden="true"
                                                 class="resp-sharing-button__icon resp-sharing-button__icon--normal">
                                                <i class="fab fa-twitter"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <small>share on</small>
                                </div>

                                <a href="<?php the_permalink(); ?>" target="_blank" class="read">read article <span
                                            class="line"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
            <div class="nav-links text-center">
                <a href="#" class="articles-load-more" page="2" data-type="articles"
                   total-pages="<?php echo $total_pages; ?>" <?php if ($total_pages <= 1) { ?> style="display: none" <?php } ?>>Load
                    Articles</a>
            </div>
        </div>
    </section>
    <!-- * =============== /Articles Section =============== * -->
<?php endif;
get_footer();
