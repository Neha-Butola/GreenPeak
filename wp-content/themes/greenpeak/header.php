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

        <img class="logo" src="<?php the_field('header_logo','options'); ?>" alt="logo"/>
        <div class="hamburger-menu">
            <input type="checkbox" class="openSidebarMenu" id="openSidebarMenu">
            <label for="openSidebarMenu" class="sidebarIconToggle">
                <div class="spinner diagonal part-1"></div>
                <div class="spinner horizontal"></div>
                <div class="spinner diagonal part-2"></div>
            </label>
            <div id="sidebarMenu">
                <?php wp_nav_menu(['menu' => 'main-menu-1', 'container' => '', 'menu_class' => 'sidebarMenuInner']); ?>
                <?php wp_nav_menu(['menu' => 'main-menu-2', 'container' => '', 'menu_class' => 'sidebarMenuInner']); ?>
            </div>
        </div>

        <?php wp_nav_menu(['menu' => 'main-menu-1', 'container' => '', 'menu_class' => 'menu']); ?>
        <img id="logo" src="<?php the_field('header_logo','options'); ?>" alt="logo"/>
        <?php wp_nav_menu(['menu' => 'main-menu-2', 'container' => '', 'menu_class' => 'menu']); ?>
    </div>
</header>
<!-- </div> -->
</body>
