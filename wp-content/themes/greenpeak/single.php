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

        <div class="banner detail-banner fixed-bg" style="background-image: url('<?php the_field('articles_image'); ?>');">
            <div class="banner-content">
                <h1><span><?php the_title(); ?></span></h1>
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
