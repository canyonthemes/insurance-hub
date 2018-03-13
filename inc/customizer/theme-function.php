<?php 
/**
 * Sidebar layout options
 *
 * @since Insurance Hub 1.0.0
 *
 * @param null
 * @return array $insurance_hub_sidebar_layout
 *
 */
if ( !function_exists('insurance_hub_sidebar_layout') ) :
    function insurance_hub_sidebar_layout() {
        $insurance_hub_sidebar_layout =  array(
            'right-sidebar' => esc_html__( 'Right Sidebar', 'insurance-hub'),
            'left-sidebar'  => esc_html__( 'Left Sidebar' , 'insurance-hub'),
            'no-sidebar'    => esc_html__( 'No Sidebar'   , 'insurance-hub')
        );
        return apply_filters( 'insurance_hub_sidebar_layout', $insurance_hub_sidebar_layout );
    }
endif;


/**
 * Show/Hide Show Author Info
 *
 * @since Insurance Hub 1.0.0
 *
 * @param null
 * @return array $insurance_hub_show_author_info_option
 *
 */
if ( !function_exists('insurance_hub_show_author_info_option') ) :
    function insurance_hub_show_author_info_option() {
        $insurance_hub_show_author_info_option =  array(
                                        'show'   => esc_html__( 'Show', 'insurance-hub' ),
                                         'hide'  => esc_html__( 'Hide', 'insurance-hub' )
                                      );
        return apply_filters( 'insurance_hub_show_author_info_option', $insurance_hub_show_author_info_option );
    }
endif;

/**
 * Show/Hide Feature Image For Single Page
 *
 * @since Insurance Hub 1.0.0
 *
 * @param null
 * @return array $insurance_hub_show_feature_image_single_option
 *
 */
if ( !function_exists('insurance_hub_show_feature_image_single_option') ) :
    function insurance_hub_show_feature_image_single_option() {
        $insurance_hub_show_feature_image_single_option =  array(
                                        'show'   => esc_html__( 'Show', 'insurance-hub' ),
                                         'hide'  => esc_html__( 'Hide', 'insurance-hub' )
                                      );
        return apply_filters( 'insurance_hub_show_feature_image_single_option', $insurance_hub_show_feature_image_single_option );
    }
endif;


/**
 * Top Header Info Option
 *
 * @since Insurance Hub 1.0.0
 *
 * @param null
 * @return array $insurance_hub_top_header_section
 *
 */
if ( !function_exists('insurance_hub_top_header_section') ) :
    function insurance_hub_top_header_section() {
        $insurance_hub_top_header_section =  array(
                                         'show'  => esc_html__( 'Show', 'insurance-hub' ),
                                         'hide'  => esc_html__( 'Hide', 'insurance-hub' )
                                      );
        return apply_filters( 'insurance_hub_top_header_section', $insurance_hub_top_header_section );
    }
endif;


/**
 * Breadcrumb Options
 *
 * @since Insurance Hub 1.0.0
 *
 * @param null
 * @return array $insurance_hub_breadcrump_option
 *
 */
if ( !function_exists('insurance_hub_breadcrump_option') ) :
    function insurance_hub_breadcrump_option() {
        $insurance_hub_breadcrump_option =  array(
                                            'simple'     => esc_html__( 'Default', 'insurance-hub' ),
                                             'disable'   => esc_html__( 'Disable', 'insurance-hub' )
                                      );
        return apply_filters( 'insurance_hub_breadcrump_option', $insurance_hub_breadcrump_option );
    }
endif;

/**
 * Hide Front Page Content
 *
 * @since Insurance Hub 1.0.0
 *
 * @param null
 * @return array $insurance_hub_homepage_hide_front_page_option
 *
 */
if ( !function_exists('insurance_hub_homepage_hide_front_page_option') ) :
    function insurance_hub_homepage_hide_front_page_option() {
        $insurance_hub_homepage_hide_front_page_option =  array(
                                             'show'     => esc_html__( 'Show', 'insurance-hub' ),
                                            'hide'  => esc_html__( 'Hide', 'insurance-hub' )
                                              );
        return apply_filters( 'insurance_hub_homepage_hide_front_page_option', $insurance_hub_homepage_hide_front_page_option );
    }
endif;



/**
 * Slider Option
 *
 * @since Insurance Hub 1.0.0
 *
 * @param null
 * @return array $insurance_hub_homepage_slider_option
 *
 */
if ( !function_exists('insurance_hub_homepage_slider_option') ) :
    function insurance_hub_homepage_slider_option() {
        $insurance_hub_homepage_slider_option =  array(
                                             'show'  => esc_html__( 'Show', 'insurance-hub' ),
                                             'hide'  => esc_html__( 'Hide', 'insurance-hub' )
                                              );
        return apply_filters( 'insurance_hub_homepage_slider_option', $insurance_hub_homepage_slider_option );
    }
endif;


/**
 * Show/hide option for Homepage Quote Section
 *
 * @since Insurance Hub 1.0.0
 *
 * @param null
 * @return array $insurance_hub_homepage_quote_option
 *
 */
if ( !function_exists('insurance_hub_homepage_quote_option') ) :
    function insurance_hub_homepage_quote_option() {
        $insurance_hub_homepage_quote_option =  array(
                                             'show'  => esc_html__( 'Show', 'insurance-hub' ),
                                             'hide'  => esc_html__( 'Hide', 'insurance-hub' )
                                              );
        return apply_filters( 'insurance_hub_homepage_quote_option', $insurance_hub_homepage_quote_option );
    }
endif;


/**
 * About Section Option
 *
 * @since Insurance Hub 1.0.0
 *
 * @param null
 * @return array $insurance_hub_homepage_about_option
 *
 */
if ( !function_exists('insurance_hub_homepage_about_option') ) :
    function insurance_hub_homepage_about_option() {
        $insurance_hub_homepage_about_option =  array(
                                             'show'  => esc_html__( 'Show', 'insurance-hub' ),
                                             'hide'  => esc_html__( 'Hide', 'insurance-hub' )
                                              );
        return apply_filters( 'insurance_hub_homepage_about_option', $insurance_hub_homepage_about_option );
    }
endif;

/**
 * Services Section Option
 *
 * @since Insurance Hub 1.0.0
 *
 * @param null
 * @return array $insurance_hub_homepage_service_option
 *
 */
if ( !function_exists('insurance_hub_homepage_service_option') ) :
    function insurance_hub_homepage_service_option() {
        $insurance_hub_homepage_service_option =  array(
                                             'show'  => esc_html__( 'Show', 'insurance-hub' ),
                                             'hide'  => esc_html__( 'Hide', 'insurance-hub' )
                                              );
        return apply_filters( 'insurance_hub_homepage_service_option', $insurance_hub_homepage_service_option );
    }
endif;


/**
 * Satisfied Clients Section Option
 *
 * @since Insurance Hub 1.0.0
 *
 * @param null
 * @return array $insurance_hub_homepage_satisfied_clients_option
 *
 */
if ( !function_exists('insurance_hub_homepage_satisfied_clients_option') ) :
    function insurance_hub_homepage_satisfied_clients_option() {
        $insurance_hub_homepage_satisfied_clients_option =  array(
                                             'show'  => esc_html__( 'Show', 'insurance-hub' ),
                                             'hide'  => esc_html__( 'Hide', 'insurance-hub' )
                                              );
        return apply_filters( 'insurance_hub_homepage_satisfied_clients_option', $insurance_hub_homepage_satisfied_clients_option );
    }
endif;



/**
 * Meet Our Insurance Agent Section Option
 * @since Insurance Hub 1.0.0
 *
 * @param null
 * @return array $insurance_hub_homepage_our_team_option
 *
 */
if ( !function_exists('insurance_hub_homepage_our_team_option') ) :
    function insurance_hub_homepage_our_team_option() {
        $insurance_hub_homepage_our_team_option =  array(
                                             'show'  => esc_html__( 'Show', 'insurance-hub' ),
                                             'hide'  => esc_html__( 'Hide', 'insurance-hub' )
                                              );
        return apply_filters( 'insurance_hub_homepage_our_team_option', $insurance_hub_homepage_our_team_option);
    }
endif;


/**
 * Testimonials Section Option
 * @since Insurance Hub 1.0.0
 *
 * @param null
 * @return array $insurance_hub_homepage_testimonials_option
 *
 */
if ( !function_exists('insurance_hub_homepage_testimonials_option') ) :
    function insurance_hub_homepage_testimonials_option() {
        $insurance_hub_homepage_testimonials_option =  array(
                                             'show'  => esc_html__( 'Show', 'insurance-hub' ),
                                             'hide'  => esc_html__( 'Hide', 'insurance-hub' )
                                              );
        return apply_filters( 'insurance_hub_homepage_testimonials_option', $insurance_hub_homepage_testimonials_option);
    }
endif;


/**
 * Recent News Section Option
 * @since Insurance Hub 1.0.0
 *
 * @param null
 * @return array $insurance_hub_homepage_blog_option
 *
 */
if ( !function_exists('insurance_hub_homepage_blog_option') ) :
    function insurance_hub_homepage_blog_option() {
        $insurance_hub_homepage_blog_option =  array(
                                             'show'  => esc_html__( 'Show', 'insurance-hub' ),
                                             'hide'  => esc_html__( 'Hide', 'insurance-hub' )
                                              );
        return apply_filters( 'insurance_hub_homepage_blog_option', $insurance_hub_homepage_blog_option);
    }
endif;


/**
 * Contact Us Section Option
 * @since Insurance Hub 1.0.0
 *
 * @param null
 * @return array $insurance_hub_homepage_contact_option
 *
 */
if ( !function_exists('insurance_hub_homepage_contact_option') ) :
    function insurance_hub_homepage_contact_option() {
        $insurance_hub_homepage_contact_option =  array(
                                             'show'  => esc_html__( 'Show', 'insurance-hub' ),
                                             'hide'  => esc_html__( 'Hide', 'insurance-hub' )
                                              );
        return apply_filters( 'insurance_hub_homepage_contact_option', $insurance_hub_homepage_contact_option);
    }
endif;

/**
 * Hero Section Option
 * @since Insurance Hub 1.0.0
 *
 * @param null
 * @return array $insurance_hub_homepage_hero_option
 *
 */
if ( !function_exists('insurance_hub_homepage_hero_option') ) :
    function insurance_hub_homepage_hero_option() {
        $insurance_hub_homepage_hero_option =  array(
                                             'show'  => esc_html__( 'Show', 'insurance-hub' ),
                                             'hide'  => esc_html__( 'Hide', 'insurance-hub' )
                                              );
        return apply_filters( 'insurance_hub_homepage_hero_option', $insurance_hub_homepage_hero_option);
    }
endif;

/**
 * Reset Option Option
 *
 * @since Insurance Hub 1.0.0
 *
 * @param null
 * @return array $insurance_hub_reset_option
 *
 */
if ( !function_exists('insurance_hub_reset_option') ) :
    function insurance_hub_reset_option() {
        $insurance_hub_reset_option =  array(
            'do-not-reset' => esc_html__( 'Do Not Reset', 'insurance-hub'),
            'reset-all'    => esc_html__( 'Reset All', 'insurance-hub'),
           
        );
        return apply_filters( 'insurance_hub_reset_option', $insurance_hub_reset_option );
    }
endif;


/**
 * Image display options
 *
 * @since Insurance Hub 1.0.0
 *
 * @param null
 * 
 *
 */
if ( !function_exists('insurance_hub_image_display_option') ) :
    function insurance_hub_image_display_option() {
        $insurance_hub_image_display_option =  array(
            'thumbnail'  =>   esc_html__( 'Thumbnail (150x150)' , 'insurance-hub'),
            'medium'            => esc_html__( 'Medium (640x426)' , 'insurance-hub'),
            'large'             => esc_html__( 'Large (1024x1024)', 'insurance-hub'),
            'full'              => esc_html__( 'Full (original)', 'insurance-hub'),
            'post-thumbnail'    => esc_html__( 'Post Thumbnail (340x240)', 'insurance-hub')
        );
        return apply_filters( 'insurance_hub_image_display_option', $insurance_hub_image_display_option );
    }
endif;


/**
 * Functions for get_theme_mod()
 *
 * @package Canyon Themes
 * @subpackage Insurance Hub
 */

if (!function_exists('insurance_hub_get_option')) :

    /**
     * Get theme option.
     *
     * @since 1.0.0
     *
     * @param string $key Option key.
     * @return mixed Option value.
     */
    function insurance_hub_get_option($key = '')
    {
        if (empty($key))
        {
            return ;
        }
        $insurance_hub_default_options = insurance_hub_get_default_theme_options();

        $default = (isset($insurance_hub_default_options[$key])) ? $insurance_hub_default_options[$key] : '';

        $theme_option = get_theme_mod($key, $default);

        return $theme_option;

    }

endif;



//=============================================================
// Color reset
//=============================================================
if ( ! function_exists( 'insurance_hub_reset_colors' ) ) :

    function insurance_hub_reset_colors($data) {

         set_theme_mod('top_header_phone_no_text_color','#ffffff');
         set_theme_mod('top_header_fontawesome_color','#ffffff');
         set_theme_mod('top_header_banner_color','#112134');
         set_theme_mod('top_scroll_bg_color','rgba(0, 0, 0, 0.7)');
         set_theme_mod('top_scroll_icon_color','#ffffff');
         set_theme_mod('top_scroll_hover_color','rgba(0, 0, 0, 0.4)');
         set_theme_mod('insurance_hub_link_color_option','#00A8EF');
         set_theme_mod('insurance_hub_link_hover_color_option','#00A8EF');

         set_theme_mod('insurance_hub_loader_bg_color','#ffffff');
         set_theme_mod('insurance_hub_primary_color_option','#00A8EF');
        
         set_theme_mod('insurance_hub_h1_footer_before_border_color_option','#00A8EF');
         set_theme_mod('insurance_hub_contact_section_border_color_option','#0591b1');
         set_theme_mod('insurance_hub_contact_section_font_color_option','#0591b1');
         set_theme_mod('insurance_hub_heading_color_option','#000000');
         set_theme_mod('footer_section_color','#112134');

         set_theme_mod('footer_section_border_top_color','#233346');
         set_theme_mod('footer_copyright_color','#a1b1bc');
         set_theme_mod('insurance_hub_footer_text_color_option','#a1b1bc');
         
       
         set_theme_mod('insurance_hub_reset_value_option','do-not-reset');
    }

endif;
 add_action( 'insurance_hub_colors_reset', 'insurance_hub_reset_colors', 10 );
