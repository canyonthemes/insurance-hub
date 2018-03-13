<?php
/**
 * Insurance Hub Theme Customizer.
 *
 * @package Insurance Hub
 */


/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function insurance_hub_customize_register($wp_customize)
{
    $wp_customize->get_setting('blogname')->transport         = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport  = 'postMessage';
    $wp_customize->get_setting('header_textcolor')->transport = 'postMessage';
    $default = insurance_hub_get_default_theme_options();
    /**
     * Customizer setting
     */
    require get_template_directory() . '/inc/customizer/customizer-function.php';
    require get_template_directory() . '/inc/customizer/sanitize.php';
    require get_template_directory() . '/inc/customizer/customizer.php';
    require get_template_directory() . '/inc/customizer/layout-design-options.php';
    require get_template_directory() . '/inc/customizer/theme-options.php';
}

add_action('customize_register', 'insurance_hub_customize_register');

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function insurance_hub_customize_preview_js()
{
    wp_enqueue_script('insurance-hub-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array('customize-preview'), '20151215', true);
}

add_action('customize_preview_init', 'insurance_hub_customize_preview_js');
/**
 * Binds JS handlers for Admin section.
 */
function insurance_hub_customize_backend_scripts()
{
    
    wp_enqueue_style('insurance-hub-alpha-color-picker', get_template_directory_uri() . '/inc/customizer/css/alpha-color-picker.css', array(), '4.1.0');

    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '7.1.0');

    wp_enqueue_script('insurance-hub-admin-scripts', get_template_directory_uri() . '/inc/customizer/js/admin-scripts.js', array('jquery', 'customize-controls'), '20160714', true);

    wp_enqueue_script('insurance-hub-alpha-color-picker', get_template_directory_uri() . '/inc/customizer/js/alpha-color-picker.js', array(), '201751215', true);
}

add_action('customize_controls_enqueue_scripts', 'insurance_hub_customize_backend_scripts', 10);

/**
 * dropdown pages
 */
function insurance_hub_sanitize_dropdown_pages($page_id, $setting)
{
    $page_id = absint($page_id);
    // If $page_id is an ID of a published page, return it; otherwise, return the default.
    return ('publish' == get_post_status($page_id) ? $page_id : $setting->default);
}


/**
 * Image sanitization callback example.
 *
 * Checks the image's file extension and mime type against a whitelist. If they're allowed,
 * send back the filename, otherwise, return the setting default.
 *
 * - Sanitization: image file extension
 * - Control: text, WP_Customize_Image_Control
 * 
 * @see wp_check_filetype() https://developer.wordpress.org/reference/functions/wp_check_filetype/
 *
 * @param string               $image   Image filename.
 * @param WP_Customize_Setting $setting Setting instance.
 * @return string The image filename if the extension is allowed; otherwise, the setting default.
 */
function insurance_hub_sanitize_image( $image, $setting ) {
    /*
     * Array of valid image file types.
     *
     * The array includes image mime types that are included in wp_get_mime_types()
     */
    $mimes = array(
        'jpg|jpeg|jpe' => 'image/jpeg',
        'gif'          => 'image/gif',
        'png'          => 'image/png',
        'bmp'          => 'image/bmp',
        'tif|tiff'     => 'image/tiff',
        'ico'          => 'image/x-icon'
    );
    // Return an array with file extension and mime_type.
    $file = wp_check_filetype( $image, $mimes );
    // If $image has a valid mime_type, return it; otherwise, return the default.
    return ( $file['ext'] ? $image : $setting->default );
}