<?php
/**
 * greenpeak functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package greenpeak
 */

if ( ! function_exists( 'greenpeak_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function greenpeak_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on greenpeak, use a find and replace
		 * to change 'greenpeak' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'greenpeak', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'greenpeak' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'greenpeak_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'greenpeak_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function greenpeak_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'greenpeak_content_width', 640 );
}
add_action( 'after_setup_theme', 'greenpeak_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function greenpeak_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'greenpeak' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'greenpeak' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'greenpeak_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function greenpeak_scripts() {
	wp_enqueue_style( 'bootstrap-css','//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css','','4.0.0');

	wp_enqueue_style( 'font-awesome','//use.fontawesome.com/releases/v5.2.0/css/all.css','','5.2.0');

	wp_enqueue_style( 'greenpeak-style', get_stylesheet_uri() );

	wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', array(), '3.3.1', true );

	wp_enqueue_script( 'bootstrap-js', '//maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', array('jquery'), '4.1.3', true );

	wp_enqueue_script( 'flexslider', '//cdnjs.cloudflare.com/ajax/libs/flexslider/2.6.1/jquery.flexslider.min.js', array('jquery'), '2.6.1', true );

	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0', true );

}
add_action( 'wp_enqueue_scripts', 'greenpeak_scripts' );

/*
Add filter to add class in li tag of nav-menu
*/
add_filter ( 'nav_menu_css_class', function ( $classes, $item, $args, $depth ){
    $classes[] = 'nav-item';
    return $classes;
}, 10, 4 );


/*
Add filter to add class in a tag of nav-menu
*/
add_filter( 'nav_menu_link_attributes', function ( $atts, $item, $args ) {
    $class = 'nav-link';
    $atts['class'] = $class;
    return $atts;
}, 10, 3 );


/*
 * Option Page
 */
if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title' 	=> 'Theme General Settings',
        'menu_title'	=> 'Theme Settings',
        'menu_slug' 	=> 'theme-general-settings',
        'capability'	=> 'edit_posts',
        'redirect'		=> false
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Theme Footer Settings',
        'menu_title'	=> 'Footer',
        'parent_slug'	=> 'theme-general-settings',
    ));

}
