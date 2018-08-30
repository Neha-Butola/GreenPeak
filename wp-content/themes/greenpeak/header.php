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
</head>

<body <?php body_class(); ?>>
<header class="main-header">
    <div class="container">

        <img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="logo"/>
        <div class="hamburger-menu">
            <input type="checkbox" class="openSidebarMenu" id="openSidebarMenu">
            <label for="openSidebarMenu" class="sidebarIconToggle">
                <div class="spinner diagonal part-1"></div>
                <div class="spinner horizontal"></div>
                <div class="spinner diagonal part-2"></div>
            </label>
            <div id="sidebarMenu">
                <ul class="sidebarMenuInner">
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/services">Services</a></li>
                    <li><a href="/careers">Careers</a></li>
                    <li><a href="/media">Media</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </div>
        </div>


        <ul class="menu">
            <li><a href="/">home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/services">services</a></li>
        </ul>
        <img id="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="logo"/>
        <ul class="menu">
            <li><a href="/careers">Careers</a></li>
            <li><a href="/media">media</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
    </div>
</header>
<!-- </div> -->
</body>
