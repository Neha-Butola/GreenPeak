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
            'main-menu' => esc_html__('Primary', 'greenpeak'),
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
    wp_enqueue_style('greenpeak-css', get_template_directory_uri() . '/dist/css/app.css', '', '1.0');

    wp_enqueue_script('jQuery-2', 'https://code.jquery.com/jquery-2.2.4.min.js', array(), '1.0', true);

    wp_enqueue_script('steller-js', 'https://cdn.jsdelivr.net/npm/jquery.stellar@0.6.2/jquery.stellar.min.js?ver=0.6.2', ['jquery'], '0.6.2', true);

    wp_enqueue_script('greenpeak-js', get_template_directory_uri() . '/dist/js/app.js', ['jquery'], '1.0', true);

    wp_enqueue_script('pagination', get_template_directory_uri() . '/js/pagination.js', ['jquery'], '1.0', true);

    wp_localize_script('pagination', 'ajaxpagination', array(
        'ajaxurl' => admin_url('admin-ajax.php')
    ));
}

add_action('wp_enqueue_scripts', 'greenpeak_scripts');

/*
 * Load More pagination for videos and articles section
 */

add_action('wp_ajax_nopriv_ajax_pagination', 'ajax_pagination');
add_action('wp_ajax_ajax_pagination', 'ajax_pagination');

function ajax_pagination()
{
    $data_type = $_POST['data_type'];
    $page = $_POST['page'];
    if ($data_type == 'video') {
        $offset = ($page - 1) * 6;
        $parameters = array(
            'post_type' => 'videos',
            'offset' => $offset,
            'posts_per_page' => 6,

        );
        $videos = new WP_Query($parameters);
        if ($videos->have_posts()) { ?>
            <?php while ($videos->have_posts()): $videos->the_post(); ?>
                <a class="position-relative thevideo w-100" href="https://vimeo.com/45830194">
                    <video class="thevideo popup-vimeo embed-responsive embed-responsive-21by9"
                           href="<?php the_field('video_url'); ?>"
                           loop="" preload="none" muted="" poster="<?php the_field('video_thumbnail'); ?>">
                        <source src="<?php the_field('video_file'); ?>"
                                type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <div class="play-btn">
                        <i class="fas fa-play"></i>
                    </div>
                </a>
            <?php endwhile;
            wp_reset_query();
            ?>
        <?php }
    } elseif ($data_type == 'articles') {
        $offset = ($page - 1) * 6;
        $parameters = array(
            'post_type' => 'post',
            'offset' => $offset,
            'posts_per_page' => 6,

        );
        $articles = new WP_Query($parameters);
        if ($articles->have_posts()):
            while ($articles->have_posts()):
                $articles->the_post(); ?>
                <div background-image="<?php the_field('articles_image'); ?>" class="fixed-bg" data-loaded="true" style="background-image: url(<?php the_field('articles_image'); ?>">
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
            <?php endwhile; endif;
    }
    die();
}

/*
* Option Page
*/
if (function_exists('acf_add_options_page')) {

    acf_add_options_page(array(
        'page_title' => 'Option Page',
        'menu_title' => 'Option Page',
        'menu_slug' => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect' => false
    ));

}

/*
 * Videos custom post type function
 */
function create_posttype()
{

    register_post_type('videos',
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

/*
 * Hooking up our function to theme setup
 */
add_action('init', 'create_posttype');

//code to validate textarea
function custom_textarea_validation_filter($result, $tag)
{
    $type = $tag['type'];
    $name = $tag['name'];
    //here textarea type name is 'message'
    if ($name == 'your-message') {
        $value = $_POST[$name];
        if (preg_match('/[\'^£$%&*()}{@#~><>|=_+¬]/', $value)) {
            $result->invalidate($tag, "Invalid characters.");
        }
    }
    return $result;
}

add_filter('wpcf7_validate_textarea', 'custom_textarea_validation_filter', 10, 2);
add_filter('wpcf7_validate_textarea*', 'custom_textarea_validation_filter', 10, 2);

//code to validate textbox
function custom_text_validation_filter($result, $tag)
{
    $type = $tag['type'];
    $name = $tag['name'];
    //here textbox type name is 'subject'
    if ($name == 'your-name' || $name == 'your-email') {
        $value = $_POST[$name];
        if (preg_match('/[\'^£$%&*()}{@#~><>|=_+¬]/', $value)) {
            $result->invalidate($tag, "Invalid characters.");
        }
    }
    return $result;
}

add_filter('wpcf7_validate_text', 'custom_text_validation_filter', 10, 2);
add_filter('wpcf7_validate_text*', 'custom_text_validation_filter', 10, 2);
