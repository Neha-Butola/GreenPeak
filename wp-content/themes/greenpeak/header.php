<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package greenpeak
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
    <style>
    @media (max-width: 1428px){
.banner video {
   float: none;
   height: 100vh;
   width: 100%;
   object-fit: cover;
}}
@media (max-width: 1428px){
.banner video {
   float: none;
   height: 100vh;
   width: 100%;
   object-fit: cover;
}
.parallax-secs section h2 {
   font-size: 5.25rem;
}

.mail-link {
   font-size: 1.2rem;
   line-height: 1;
}
.media-list>div.fixed-bg:nth-of-type(2n) .read:hover{
color: #000;
}

.media-list>div.fixed-bg:nth-of-type(2n) .read:hover{
color: #8cd1a5;
}
}
</style>
</head>

<body <?php body_class(); ?>>
<div class="app">
    <?php echo (is_page('services')) ? '<div class="service-page">' : ''; ?>
    <!-- * =============== Header =============== * -->
    <header class="main-head fixed-top">
        <nav class="container">
            <a href="/" class="logo"><img src="<?php the_field('header_logo', 'options'); ?>"
                                          alt="greenpeak-logo"></a>

            <?php wp_nav_menu([
                'container' => '',
                'menu_class' => 'list-unstyled mb-0',
            ]); ?>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04"
                    aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </nav>
    </header>
    <main>