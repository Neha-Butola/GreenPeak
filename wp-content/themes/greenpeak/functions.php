<?php
/**
 * greenpeak functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package greenpeak
 */

if (!function_exists('greenpeak_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function greenpeak_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on greenpeak, use a find and replace
         * to change 'greenpeak' to the name of your theme in all the template files.
         */
        load_theme_textdomain('greenpeak', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'menu-1' => esc_html__('Main Menu-1', 'greenpeak'),
            'menu-2' => esc_html__('Main Menu-2', 'greenpeak'),
        ));

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('greenpeak_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support('custom-logo', array(
            'height' => 250,
            'width' => 250,
            'flex-width' => true,
            'flex-height' => true,
        ));
    }
endif;
add_action('after_setup_theme', 'greenpeak_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function greenpeak_content_width()
{
    // This variable is intended to be overruled from themes.
    // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
    // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
    $GLOBALS['content_width'] = apply_filters('greenpeak_content_width', 640);
}

add_action('after_setup_theme', 'greenpeak_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function greenpeak_widgets_init()
{
    register_sidebar(array(
        'name' => esc_html__('Sidebar', 'greenpeak'),
        'id' => 'sidebar-1',
        'description' => esc_html__('Add widgets here.', 'greenpeak'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'greenpeak_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function greenpeak_scripts()
{
    wp_enqueue_style('bootstrap-css', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', '', '4.0.0');

    wp_enqueue_style('font-awesome', '//use.fontawesome.com/releases/v5.2.0/css/all.css', '', '5.2.0');

    wp_enqueue_style('greenpeak-master-style', get_template_directory_uri() . '/css/master.css');

    wp_enqueue_style('greenpeak-style', get_stylesheet_uri());

    wp_enqueue_style('aos-css', get_template_directory_uri() . '/css/aos.css');

    wp_enqueue_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', array(), '3.3.1', true);

    wp_enqueue_script('bootstrap-js', '//maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', array('jquery'), '4.1.3', true);

    wp_enqueue_script('flexslider', '//cdnjs.cloudflare.com/ajax/libs/flexslider/2.6.1/jquery.flexslider.min.js', array('jquery'), '2.6.1', true);

    wp_enqueue_script('jquery-steller', '//cdnjs.cloudflare.com/ajax/libs/stellar.js/0.6.2/jquery.stellar.min.js', array('jquery'), '0.6.2', true);

    wp_enqueue_script('jquery-aos', get_template_directory_uri() . '/js/aos.js', array('jquery'), '1.0', true);

    // wp_enqueue_script('scroller-js', get_template_directory_uri() . '/js/skrollr.min.js', array('jquery'), '1.0', true);

    wp_enqueue_script('echarts-js', get_template_directory_uri() . '/js/echarts.js', array('jquery'), '1.0', true);

    wp_enqueue_script('echarts-liquidfill-js', get_template_directory_uri() . '/js/echarts-liquidfill.js', array('jquery'), '1.0', true);

    wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/custom.js', array('jquery'), '1.0', true);

    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0', true);

    wp_enqueue_script('pagination', get_template_directory_uri() . '/js/pagination.js', array('jquery'), '1.0', true);

    wp_localize_script('pagination', 'ajaxpagination', array(
        'ajaxurl' => admin_url('admin-ajax.php')
    ));
}

add_action('wp_enqueue_scripts', 'greenpeak_scripts');

add_action('wp_ajax_nopriv_ajax_pagination', 'ajax_pagination');
add_action('wp_ajax_ajax_pagination', 'ajax_pagination');

function ajax_pagination()
{
    $data_type = $_POST['data_type'];
    $page = $_POST['page'];
    if ($data_type == 'video') {
        $offset = ($page - 1) * 3;
        $parameters = array(
            'post_type' => 'videos',
            'offset' => $offset,
            'posts_per_page' => 3,

        );
        $videos = new WP_Query($parameters);
        if ($videos->have_posts()) { ?>
            <?php while ($videos->have_posts()): $videos->the_post(); ?>
                <div class="col-12 video-block">
                    <?php the_field('video'); ?>
                </div>
            <?php endwhile; ?>
        <?php }
    } elseif ($data_type == 'articles') {
        $offset = ($page - 1) * 3;
        $parameters = array(
            'post_type' => 'post',
            'offset' => $offset,
            'posts_per_page' => 3,

        );
        $articles = new WP_Query($parameters);
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
                                <a href="<?php echo get_the_permalink(); ?>">read article
                                    <div class="button"></div>
                                </a>
                            </div>
                            <div class="borders top"></div>
                            <div class="borders right"></div>
                            <div class="borders left"></div>
                            <!-- Sharingbutton Twitter -->
                            <a class="resp-sharing-button__link"
                               href="https://twitter.com/intent/tweet/?url=<?php the_permalink(); ?>" target="_blank"
                               aria-label="">
                                <div class="resp-sharing-button resp-sharing-button--twitter resp-sharing-button--small">
                                    <div aria-hidden="true"
                                         class="resp-sharing-button__icon resp-sharing-button__icon--normal">
                                        <i class="fab fa-twitter"></i>
                                    </div>
                                </div>
                            </a>

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
                            <p class="share">share on</p>
                        </div>

                    </div>
                </section>
            <?php endwhile; endif;
    }
    die();
}

/*
* Option Page
*/
if (function_exists('acf_add_options_page')) {

    acf_add_options_page(array(
        'page_title' => 'Theme General Settings',
        'menu_title' => 'Theme Settings',
        'menu_slug' => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect' => false
    ));

    acf_add_options_sub_page(array(
        'page_title' => 'Theme Header Settings',
        'menu_title' => 'Header',
        'parent_slug' => 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title' => 'Theme Footer Settings',
        'menu_title' => 'Footer',
        'parent_slug' => 'theme-general-settings',
    ));

}

// Videos custom post type function
function create_posttype()
{

    register_post_type('videos',
// CPT Options
        array(
            'labels' => array(
                'name' => __('Videos'),
                'singular_name' => __('Video')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'videos'),
        )
    );
}

// Hooking up our function to theme setup
add_action('init', 'create_posttype');

/*
* Add filter to remove the classes on anchor tag of nav menu
*/

add_filter('nav_menu_link_attributes', function ($attr) {
    $class = '';
    $attr['class'] = $class;
    return $attr;
}, 10, 3);

/*
* Add filter to remove p tag from editor
*/
remove_filter('the_content', 'wpautop');