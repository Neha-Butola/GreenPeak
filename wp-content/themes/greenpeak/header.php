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
<!-- <div> -->
    <!-- <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <a class="navbar-brand" href="/">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- <?php $menu_args = array(
            // 'menu' => 'main-menu',
            // 'container_class' => 'collapse main-menu',
            // 'container_id' => 'navbarNav',
            // 'menu_class' => 'navbar-nav text-uppercase w-100 justify-content-center', -->
        );
        // wp_nav_menu($menu_args); ?>
    </nav> -->

<header class="main-header">
  <div class="container">

  <img id="logo" class="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="logo" />
<div class="hamburger-menu">
    <input type="checkbox" class="openSidebarMenu" id="openSidebarMenu">
    <label for="openSidebarMenu" class="sidebarIconToggle">
      <div class="spinner diagonal part-1"></div>
      <div class="spinner horizontal"></div>
      <div class="spinner diagonal part-2"></div>
    </label>
    <div id="sidebarMenu">
      <ul class="sidebarMenuInner">

        <li><a href="">Company</a></li>
        <li><a href="">Instagram</a></li>
        <li><a href="">Twitter</a></li>
        <li><a href="">YouTube</a></li>
        <li><a href="">Linkedin</a></li>
      </ul>
    </div>
  </div>


  <ul class="menu">
    <li><a href="/">home</a></li>
    <li><a href="/about">About</a></li>
      <li><a href="/services">services</a></li>
      <li> <img id="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="logo" /></li>
    <li><a href="/careers">Careers</a></li>
      <li><a href="/media">media</a></li>
    <li><a href="/contact">Contact</a></li>
  </ul>

</div>
</header>
<!-- </div> -->
</body>
