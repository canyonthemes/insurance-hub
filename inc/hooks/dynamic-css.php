<?php
/**
 * Dynamic css
 *
 * @since Insurance Hub 1.0.0
 *
 * @param null
 * @return null
 *
 */

if (!function_exists('insurance_hub_dynamic_css')):
    function insurance_hub_dynamic_css()
    {

        $emailcolor         = esc_attr(insurance_hub_get_option('insurance_hub_top_header_phone_no_text_color'));

        $fontawesome_color  = esc_attr(insurance_hub_get_option('insurance_hub_top_header_fontawesome_color'));

        $topbanner          = esc_attr(insurance_hub_get_option('insurance_hub_top_header_banner_color'));

        $topscrollbgcolor   = esc_attr(insurance_hub_get_option('insurance_hub_top_scroll_bg_color'));


        /*=============== Comman Part Section =====================*/

        $topscrollhovercolor = esc_attr(insurance_hub_get_option('insurance_hub_top_scroll_hover_color'));

        $topscrolliconcolor  = esc_attr(insurance_hub_get_option('insurance_hub_top_scroll_icon_color'));

        $link_color          = esc_attr(insurance_hub_get_option('insurance_hub_link_color_option'));

        $link_hover_color    = esc_attr(insurance_hub_get_option('insurance_hub_link_hover_color_option'));

        $preloader_bg_color  = esc_attr(insurance_hub_get_option('insurance_hub_loader_bg_color'));

        $primary_color       = esc_attr(insurance_hub_get_option('insurance_hub_primary_color_option'));


        /*=============== End of Comman Part Section =====================*/


        /*====================Footer Heading Color Section =====================*/

        $footer_section_color             = esc_attr(insurance_hub_get_option('insurance_hub_footer_section_color'));

        $footer_section_top_border_color  = esc_attr(insurance_hub_get_option('insurance_hub_footer_section_border_top_color'));

        $footer_section_copyright_color   = esc_attr(insurance_hub_get_option('insurance_hub_footer_copyright_color'));

        $footer_heading_color             = esc_attr(insurance_hub_get_option('insurance_hub_footer_heading_color_option'));


        /*==================== End of Footer Heading Color Section =====================*/


        $custom_css = '';


        /* Link  color*/
        $custom_css .= " a,
    .news-block .date{
            color:" . $link_color . ";
        }
    ";
        /* Link  color Hover*/
        $custom_css .= " a:hover,
    .news-block .date:hover{
            color:" . $link_hover_color . ";
        }
    ";
        /*Preloader background color*/
        $custom_css .= " .preloader{
            background-color:" . $preloader_bg_color . ";
        }
    ";

        $custom_css .= "
        .section-header h1::before,
        .services-section .item .fa, 
        .what-we-section .item ul li .fa,
        #testimonial .item blockquote img,
        .contact-detail li p i,
        .footer-section .section-header h1::before{
            border-color:" . $primary_color . ";
        }
    ";
        $custom_css .= "
        .btn-theme,
        .process,
        .team-section .item .content-wrap,
          .btn-theme, 
        button, 
        input[type=\"button\"], 
        input[type=\"reset\"], 
        input[type=\"submit\"], 
        .nav-links .nav-previous, 
        .nav-links .nav-next, 
        .cat-links a

        {
            background: " . $primary_color . ";
        }
    ";
        /*==================== // Primary Color End ========================*/
        /*background*/
        $custom_css .= ".contact-detail2 li a {
         color: " . $emailcolor . ";
        }
    ";
        $custom_css .= ".top-header {
         background:" . $topbanner . ";
       }
    ";
        $custom_css .= ".contact-detail2 i{ 
            color: " . $fontawesome_color . ";

        }
    ";
        $custom_css .= ".top-header .social-links  ul li a:before{
            color: " . $fontawesome_color . ";
        }
    ";

        /*=============================================================================================*/

        /* Top Scroll Background Color */
        $custom_css .= "a.scroll-top {
            background:" . $topscrollbgcolor . ";
            color: " . $topscrolliconcolor . ";
        }
    ";

        /* Top Scroll Hover Color*/
        $custom_css .= "a.scroll-top:hover {
        background:" . $topscrollhovercolor . ";
        color: " . $topscrolliconcolor . ";

       }
    ";

        /* Footer Section  Color Option*/
        $custom_css .= ".footer-section .footer-bottom {
            background:" . $footer_section_color . ";
            border-top: 1px solid " . $footer_section_top_border_color . ";
        }
    ";


        /* Footer Section Heading Color*/
        $custom_css .= ".footer-section .foot-widget .widget h1.widget-title {
          
            color:" . $footer_heading_color . ";
        }
    ";


        /* Footer Section  Copyright Color Option*/
        $custom_css .= ".footer-bottom .copyright {
            color: " . $footer_section_copyright_color . ";
        }
    ";


        /*==================== Primary Color ========================*/
        $custom_css .= " a,
        .news-block .date,
        .services-section .item .fa,
        .what-we-section .item ul li .fa,
        #testimonial .item blockquote small,
        .date a,
        .name a,
        comments a,
        .woocommerce-review__author,
        .single-section .entry-meta span, .single-section .entry-meta span a ,
       
        {
            color:" . $primary_color . ";
        }
    ";

        /*------------------------------------------------------------------------------------------------- */


        /*custom css*/

        wp_add_inline_style('insurance-hub-style', $custom_css);

    }
endif;
add_action('wp_enqueue_scripts', 'insurance_hub_dynamic_css', 99);