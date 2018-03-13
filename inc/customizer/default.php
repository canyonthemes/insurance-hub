<?php
/**
 * Insurance Hub default theme options.
 *
 * @package Canyon Themes
 * @subpackage Insurance Hub
 */

if ( !function_exists('insurance_hub_get_default_theme_options' ) ) :

    /**
     * Get default theme options.
     *
     * @since 1.0.0
     *
     * @return array Default theme options.
     */
    function insurance_hub_get_default_theme_options()
    {

        $default = array();
 
        // Top Header Section [Added]
        $default['insurance_hub_top_header_section']               = 'show';
        $default['insurance_hub_phone_number_icon']                = 'fa-phone';
        $default['insurance_hub_top_header_phone_no']              = '';
        $default['insurance_hub_email_icon']                       = 'fa-envelope-o';
        $default['insurance_hub_top_header_email']                 = '';
        $default['insurance_hub_top_header_fontawesome_color']     = '#ffffff';
        $default['insurance_hub_top_header_banner_color']          = '#112134';
        $default['insurance_hub_top_header_fontawesome_color']     = '#ffffff';
        $default['insurance_hub_top_header_phone_no_text_color']   = '#ffffff';

        $default['insurance_hub_breadcrump_option']                = 'simple';
        $default['insurance_hub_post_search_placeholder_option']   = esc_html__('Search', 'insurance-hub');
        $default['insurance_hub_loader_bg_color']                  = '#FFFFFF';
         $default['insurance_hub_footer_section_border_top_color'] = '#FFFFFF';
        $default['insurance_hub_loder_enable']                     = 1;
        $default['insurance_hub_about_character_limit']            = 100;
        $default['insurance_hub_services_character_limit']         = 7;
        $default['insurance_hub_services_show_link_option']        = 0;
      
        // footer copyright. [Added]
        $default['insurance_hub_copyright_text_option']            = esc_html__('Copyright &copy; Insurance Hub 2017. All rights reserved.','insurance-hub');
       
        $default['insurance_hub_hide_footer_social_icon']          = 0;
        $default['insurance_hub_footer_section_color']             = '#000000';
        $default['insurance_hub_footer_section_color_option']      = '#233346';
        $default['insurance_hub_footer_copyright_color']           = '#a1b1bc';

        
        // Home Page Top header Info.[added]
        $default['insurance_hub_homepage_hide_front_page_option']  = 'show';
        $default['insurance_hub_homepage_slider_option']           = 'show';
        $default['insurance_hub_slider_section_id']                = esc_html__('home', 'insurance-hub');
        $default['insurance_hub_slider_cat_id']                    = 0;
        $default['insurance_hub_slider_get_started_txt']           = esc_html__('Get Started','insurance-hub');
        $default['insurance_hub_homepage_quote_option']            = 'hide';
        $default['insurance_hub_quote_section_title']              = esc_html__('Buy Our Premium Theme','insurance-hub');
        $default['insurance_hub_quote_get_a_quate_txt']            = esc_html__('Get a quote','insurance-hub');
      
        $default['insurance_hub_quote_get_a_quate_link']           = '#';
        $default['insurance_hub_homepage_about_option']            = 'hide';
        $default['insurance_hub_about_section_id']                 = esc_html__('about-us','insurance-hub');
        $default['insurance_hub_about_section_title']              = esc_html__('About','insurance-hub');
        $default['insurance_hub_about_section_sub_title']          = esc_html__('Who We Are','insurance-hub');
        $default['insurance_hub_about_page_id']                    = 0;

        $default['insurance_hub_about_read_more_txt']              = esc_html__('Read More', 'insurance-hub');
       
        $default['insurance_hub_homepage_service_option']          = 'hide';
 
        $default['insurance_hub_services_section_id']              = esc_html__( 'services', 'insurance-hub' );
        $default['insurance_hub_services_section_title']           = esc_html__('Our Services','insurance-hub');
        $default['insurance_hub_services_section_sub_title']       = esc_html__('Our Works','insurance-hub');
      

        $default['insurance_hub_homepage_satisfied_clients_option']      = 'hide';
        $default['insurance_hub_satisfied_clients_section_title']        = esc_html__( 'ALL AROUND THE WORLD', 'insurance-hub' );
        $default['insurance_hub_satisfied_clients_section_description']  = esc_html__('Our description','insurance-hub');
        $default['insurance_hub_satisfied_clients_section_cat_id']       = 0;
        $default['insurance_hub_homepage_our_team_option']               = 'hide';
        $default['insurance_hub_our_team_section_id']                    = esc_html__( 'team', 'insurance-hub' );
        $default['insurance_hub_our_team_section_title']                 = esc_html__('Our Insurance Agent','insurance-hub');
        $default['insurance_hub_our_team_section_sub_title']             = esc_html__( 'MEET OUR DEDICATED AWESOME AGENT', 'insurance-hub' );
        $default['insurance_hub_our_team_cat_id']                        = 0;
        $default['insurance_hub_homepage_testimonials_option']           = 'hide';
        $default['insurance_hub_testimonial_section_id']                 = esc_html__( 'testimonial', 'insurance-hub' );
        $default['insurance_hub_testimonials_cat_id']                    = 0;
      
         
         // Font Awesome Icon list for service 
        $default['insurance_hub_service_icon_0'] = 'fa-desktop';
        $default['insurance_hub_service_icon_1'] = 'fa-mobile';
        $default['insurance_hub_service_icon_2'] = 'fa-print';
        $default['insurance_hub_service_icon_3'] = 'fa-flash';
        $default['insurance_hub_service_icon_4'] = 'fa-music';
        $default['insurance_hub_service_icon_5'] = 'fa-support';



       // Recent News.
        $default['insurance_hub_homepage_blog_option']            = 'hide';
        $default['insurance_hub_blog_section_id']                 = esc_html__( 'blog', 'insurance-hub' );
        $default['insurance_hub_blog_section_title']              = esc_html__( 'Recent News', 'insurance-hub' );
        $default['insurance_hub_blog_section_sub_title']          = esc_html__( 'Recent News Short Description', 'insurance-hub' );
        
        $default['insurance_hub_blog_categories_id']              = 0;
        $default['insurance_hub_sidebar_layout_option']           = 'right-sidebar';
        $default['insurance_hub_blog_title_option']               = esc_html__('Latest Blog', 'insurance-hub');
        $default['insurance_hub_blog_excerpt_option']             = 'excerpt';
        $default['insurance_hub_description_lenght_option']       = 40;
        $default['insurance_hub_exclude_cat_blog_archive_option'] = '';
        $default['insurance_hub_blog_show_date_option']           = 1;
        $default['insurance_hub_blog_show_author_option']         = 1;
        $default['insurance_hub_blog_show_cats_option']           = 1;
        $default['insurance_hub_blog_show_tags_option']           = 1;
        $default['insurance_hub_blog_show_comments_option']       = 1;
          
         // Single Post option
        $default['insurance_hub_show_image_option']               = 1;
       
        //Author Info Options
        $default['insurance_hub_show_author_info_option']         = 'hide';
        $default['insurance_hub_hide_comment_option']             = 1;

        // Details page.
        $default['insurance_hub_show_feature_image_single_option'] = 'show';

        // Basic Color Option.
        $default['insurance_hub_primary_color_option']           = '#54BE73';
        $default['insurance_hub_top_header_background_color']    = '#ffffff';
        $default['insurance_hub_top_footer_background_color']    = '#1A1E21';
        $default['insurance_hub_bottom_footer_background_color'] = '#111315';
        $default['insurance_hub_heading_color_option']           = '#54BE73';
        $default['insurance_hub_link_color_option']              = '#000000';
        $default['insurance_hub_link_hover_color_option']        = '#54BE73';
        $default['insurance_hub_top_scroll_bg_color']            = '#54BE73';
        
       

        // Theme Options[added]
        $default['insurance_hub_post_pagination_option']      = 'default';
        $default['insurance_hub_reset_value_option']          = 'do-not-reset';

        //Contact us Default Value[added]
          $default['insurance_hub_homepage_contact_option']      = 'hide';
          $default['insurance_hub_contact_section_id']           = esc_html__( 'contact-us', 'insurance-hub' );
          $default['insurance_hub_contact_section_title']        = esc_html__( 'NICE TO HEAR FROM YOU', 'insurance-hub' );
          $default['insurance_hub_contact_section_sub_title']    = esc_html__( 'SEND A MESSAGE USING THE FORM BELOW!', 'insurance-hub' );
          $default['insurance_hub_purchase_section']             = esc_html__('Hero Section', 'insurance-hub' );
          $default['insurance_hub_homepage_hero_option']         = 'hide';
          $default['insurance_hub_hero_section_title']           = esc_html__('Hero', 'insurance-hub' );
          $default['insurance_hub_hero_purchase_txt']            = esc_html__('Purchase', 'insurance-hub' );
          $default['insurance_hub_hero_purchase_link']           = esc_html__('#', 'insurance-hub' );
          
        // Pass through filter.
        $default = apply_filters( 'insurance_hub_get_default_theme_options', $default );
        return $default;
    }
endif;
