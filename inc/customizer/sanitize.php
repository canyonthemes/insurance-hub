<?php
/**
 * Define sanitize functions for customizer fields
 *
 * @package Canyon Themes
 * @subpackage Insurance Hub
 * @since 1.0.0
 */

/**
 * Sanitize number field
 *
 * @since 1.0.0
 */
function insurance_hub_sanitize_number( $input ) {
    $output = intval($input);
     return $output;
}

/**
 * Sanitize checkbox field
 *
 * @since 1.0.0
 */
if ( !function_exists('insurance_hub_sanitize_checkbox') ) :
        function insurance_hub_sanitize_checkbox( $checked )
        {
            // Boolean check.
            return ( ( isset( $checked ) && true == $checked ) ? true : false );
        }
    endif;


/**
 * Sanitizing the select callback example
 *
 * @since Insurance Hub 1.0.0
 *
 * @param $input
 * @param $setting
 * @return sanitized output
 *
 */
if ( !function_exists('insurance_hub_sanitize_select') ) :
    function insurance_hub_sanitize_select( $input, $setting ) {

        // Ensure input is a slug.
        $input = sanitize_key( $input );

        // Get list of choices from the control associated with the setting.
        $choices = $setting->manager->get_control( $setting->id )->choices;

        // If the input is a valid key, return it; otherwise, return the default.
        return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
    }
endif;



