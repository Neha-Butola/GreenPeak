<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package greenpeak
 */

get_header();

if (have_posts()):
    while (have_posts()): the_post()
        ?>

        <div class="banner" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
            <div class="banner-content">
                <h1 data-aos="fade-in" data-aos-delay="400"><span><?php the_title(); ?></span></h1>
                <div class="animating-line"></div>
            </div>
        </div>
        <section>
            <div class="container section-divider">
                <?php the_content(); ?>
            </div>
        </section>
    <?php
    endwhile; endif;

get_footer();
