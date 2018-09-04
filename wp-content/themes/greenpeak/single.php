<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package greenpeak
 */

get_header();
?>

<?php if (have_posts()):
    while (have_posts()): the_post(); ?>
        <div class="inner-banner" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
            <div class="heading-block">
                <h1 class="small"><?php the_title(); ?></h1>
            </div>
            <div class="line-ani-left"></div>
        </div>

        <section class="article-wrapper">
            <div class="container">
                <?php the_content(); ?>
            </div>
        </section>
    <?php endwhile; endif; ?>
<?php
get_footer();
