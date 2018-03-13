<?php
/**
 * Insurance Hub functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Insurance Hub
 */

if (!function_exists('insurance_hub_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function insurance_hub_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on Insurance Hub, use a find and replace
         * to change 'insurance-hub' to the name of your theme in all the template files.
         */
        load_theme_textdomain('insurance-hub');

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
            'primary' => esc_html__('Primary', 'insurance-hub'),
            'social-menu' => esc_html__('Social Links Menu', 'insurance-hub'),
        ));

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('insurance_hub_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));

        /**
         * Set up woocommerce 
         */
        add_theme_support('woocommerce');
        add_theme_support('wc-product-gallery-zoom');
        add_theme_support('wc-product-gallery-lightbox');  

    }
endif;
add_action('after_setup_theme', 'insurance_hub_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function insurance_hub_content_width()
{
    $GLOBALS['content_width'] = apply_filters('insurance_hub_content_width', 640);
}

add_action('after_setup_theme', 'insurance_hub_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function insurance_hub_widgets_init()
{
    register_sidebar(array(
        'name'          => esc_html__('Sidebar', 'insurance-hub'),
        'id'            => 'sidebar-1',
        'description'   => esc_html__('Add widgets here.', 'insurance-hub'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>',
    ));

    register_sidebar(array(
        'name'          => esc_html__('Footer 1', 'insurance-hub'),
        'id'            => 'about_us',
        'description'   => esc_html__('Add widgets here.', 'insurance-hub'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>',
    ));

    register_sidebar(array(
        'name'          => esc_html__('Footer 2', 'insurance-hub'),
        'id'            => 'lates_tweets',
        'description'   => esc_html__('Add widgets here.', 'insurance-hub'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>',
    ));

    register_sidebar(array(
        'name'          => esc_html__('Footer 3', 'insurance-hub'),
        'id'            => 'newsletter',
        'description'   => esc_html__('Add widgets here.', 'insurance-hub'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>',
    ));

}
add_action('widgets_init', 'insurance_hub_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function insurance_hub_scripts()
{
    /*google font  */
    wp_enqueue_style('insurance-hub-fonts', 'https://fonts.googleapis.com/css?family=Heebo:300,400,500,700,800,900');


    /*Bootstrap*/
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '4.5.0');

    /*Bootstrap Select*/
    wp_enqueue_style('bootstrap-select', get_template_directory_uri() . '/assets/css/bootstrap-select.min.css', array(), '4.5.0');

    /*font-awesome*/
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '4.5.0');

    /*pe-icon-7-stroke*/
    wp_enqueue_style('pe-icon-7-stroke', get_template_directory_uri() . '/assets/css/pe-icon-7-stroke.css', array(), '4.5.0');

    /*hover*/
    wp_enqueue_style('hover', get_template_directory_uri() . '/assets/css/hover.css', array(), '4.5.0');

    /*owl.carousel*/
    wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.css', array(), '4.5.0');

    /*owl.theme*/
    wp_enqueue_style('owl-theme', get_template_directory_uri() . '/assets/css/owl.theme.default.css', array(), '4.5.0');

    /*Animate*/
    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.min.css', array(), '4.5.0');

       /*Global*/
    wp_enqueue_style('insurance-hub-global', get_template_directory_uri() . '/assets/css/global.css', array(), '4.5.0');

    wp_enqueue_style('insurance-hub-style', get_stylesheet_uri());

     /*Responsive*/
    wp_enqueue_style('insurance-hub-responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), '4.5.0');

     /*Bootstrap js*/
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '20151215', true);

      /* Bootstrap Select js*/
    wp_enqueue_script('bootstrap-select', get_template_directory_uri() . '/assets/js/bootstrap-select.min.js', array('jquery'), '20151215', true);

      /* Smooth Scroll js*/
    wp_enqueue_script('smooth-scroll', get_template_directory_uri() . '/assets/js/smooth-scroll.js', array('jquery'), '20151215', true);

     /* Plugin js*/
    wp_enqueue_script('plugin-js', get_template_directory_uri() . '/assets/js/jquery.plugin.min.js', array('jquery'), '20151215', true);

     /* Owl Carousel js*/
    wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '20151215', true);

     /* Owl Min js*/
    wp_enqueue_script('wow-min', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'), '20151215', true);

     /* Navigation js*/
    wp_enqueue_script('navigation', get_template_directory_uri() . '/assets/js/navigation.js', array('jquery'), '20151215', true);
    
      /* Skip Link Focus-fix js*/
    wp_enqueue_script('skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array('jquery'), '20151215', true);

     /* Script Main  js*/
    wp_enqueue_script('insurance-hub-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '20151215', true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'insurance_hub_scripts');

/**
 * Implement Metabox File .
 */
require get_template_directory() . '/inc/metabox/metabox-defaults.php';

/**
 * Implement Theme Function File .
 */
require get_template_directory() . '/inc/customizer/theme-function.php';
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Implement the default Function.
 */
require get_template_directory() . '/inc/customizer/default.php';

/**
 * Implement Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Implement Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Theme function.
 */
require get_template_directory() . '/inc/theme-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';


/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Customizer Home layout.
 */
require get_template_directory() . '/layouts/homepage-layout/home-layout.php';


/**
 * Dynamic css.
 */

$dynamic_css_options = insurance_hub_get_option('insurance_hub_reset_value_option');

if ($dynamic_css_options == "do-not-reset" || $dynamic_css_options == "") 
{
    include get_template_directory() . '/inc/hooks/dynamic-css.php';

} 
elseif ($dynamic_css_options == "reset-all") 
{
    do_action('insurance_hub_colors_reset');
}


/**
 * Custom Logo.
 */
function insurance_hub_logo_setup()
{
    add_theme_support('custom-logo', array(
        'height' => 45,
        'width' => 170,
        'flex-height' => true,
        'flex-width' => true
    ));
}

add_action('after_setup_theme', 'insurance_hub_logo_setup');


/**
 * Exclude category in blog page
 *
 * @since Insurance Hub 1.0.0
 *
 * @param null
 * @return int
 */
if (!function_exists('insurance_hub_exclude_category_in_blog_page')) :
    function insurance_hub_exclude_category_in_blog_page($query)
    {

        if ($query->is_home && $query->is_main_query()) {
            $catid = insurance_hub_get_option('insurance_hub_exclude_cat_blog_archive_option');
            $exclude_categories = $catid;
            if (!empty($exclude_categories)) {
                $cats = explode(',', $exclude_categories);
                $cats = array_filter($cats, 'is_numeric');
                $string_exclude = '';
                echo $string_exclude;
                if (!empty($cats)) {
                    $string_exclude = '-' . implode(',-', $cats);
                    $query->set('cat', $string_exclude);
                }
            }
        }
        return $query;
    }
endif;
add_filter('pre_get_posts', 'insurance_hub_exclude_category_in_blog_page');


/**
 * Load breadcrumb_trail File
 */
if (!function_exists(' breadcrumb_trail')) {
    require get_template_directory() . '/inc/library/breadcrumbs/breadcrumbs.php';
}

/**
 * Post Class Filter
 */
add_filter('post_class', 'insurance_hub_prefix_post_class', 21);
function insurance_hub_prefix_post_class($classes)
{
    if ('product' == get_post_type()) {
        $classes = array_diff($classes, array('first', 'last'));
    }
    return $classes;
}