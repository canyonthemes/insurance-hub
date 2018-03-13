<?php
/**
 * The template for displaying all pages.
 *
 *
 * @package Insurance Hub
 */

get_header();

$section_option = insurance_hub_get_option('insurance_hub_homepage_hide_front_page_option');

if ( !is_home() ) {
	
    do_action('insurance_hub_home_page_section');
}

if ( 'posts' == get_option( 'show_on_front' ) ) {

    include( get_home_template() );

} 
else {

    if ('hide' != $section_option) {

        include( get_page_template() );
    }
}

get_footer();
