<?php
/**
 * Insurance Hub sidebar layout options
 *
 * @since Insurance Hub  1.0.0
 *
 * @param null
 * @return array
 *
 */
if (!function_exists( 'insurance_hub_sidebar_layout_options' ) ) :
    function insurance_hub_sidebar_layout_options()
    {
        $insurance_hub_sidebar_layout_options = array(
            'default-sidebar' => array(
                'value'       => 'default-sidebar',
                'thumbnail'   => get_template_directory_uri() . '/inc/metabox/images/default-sidebar.png'
            ),
            'left-sidebar'  => array(
                'value'     => 'left-sidebar',
                'thumbnail' => get_template_directory_uri() . '/inc/metabox/images/left-sidebar.png'
            ),
            'right-sidebar' => array(
                'value'     => 'right-sidebar',
                'thumbnail' => get_template_directory_uri() . '/inc/metabox/images/right-sidebar.png'
            ),
            'no-sidebar'    => array(
                'value'     => 'no-sidebar',
                'thumbnail' => get_template_directory_uri() . '/inc/metabox/images/no-sidebar.png'
            )
        );
        return apply_filters('insurance_hub_sidebar_layout_options', $insurance_hub_sidebar_layout_options);
    }
endif;

/**
 * Custom Metabox
 *
 * @since Insurance Hub 1.0.0
 *
 * @param null
 * @return void
 *
 */
if ( !function_exists( 'insurance_hub_add_metabox' ) ):
    function insurance_hub_add_metabox()
    {
        add_meta_box(
            'insurance_hub_sidebar_layout', // $id
            __('Sidebar Layout', 'insurance-hub'), // $title
            'insurance_hub_sidebar_layout_callback', // $callback
            'post', // $page
            'normal', // $context
            'high'
        ); // $priority

        add_meta_box(
            'insurance_hub_sidebar_layout', // $id
            __('Sidebar Layout', 'insurance-hub'), // $title
            'insurance_hub_sidebar_layout_callback', // $callback
            'page', // $page
            'normal', // $context
            'high'
        ); // $priority
    }
endif;
add_action('add_meta_boxes', 'insurance_hub_add_metabox');


/**
 * Callback function for metabox
 *
 * @since Insurance Hub 1.0.0
 *
 * @param null
 * @return void
 *
 */
if ( !function_exists( 'insurance_hub_sidebar_layout_callback' ) ) :
    function insurance_hub_sidebar_layout_callback()
    {
        global $post;
        $insurance_hub_sidebar_layout_options = insurance_hub_sidebar_layout_options();
        $insurance_hub_sidebar_layout         = 'default-sidebar';
        $insurance_hub_sidebar_meta_layout    = get_post_meta($post->ID, 'insurance_hub_sidebar_layout', true);
        if ( !empty( $insurance_hub_sidebar_meta_layout ) ) {
            $insurance_hub_sidebar_layout     = $insurance_hub_sidebar_meta_layout;
        }
        wp_nonce_field(basename(__FILE__), 'insurance_hub_sidebar_layout_nonce');
        ?>
      
        <table class="form-table page-meta-box">
            <tr>
                <td colspan="4"><h4><?php _e('Choose Sidebar Template', 'insurance-hub'); ?></h4></td>
            </tr>
            <tr>
                <td>
                    <?php
                    foreach ( $insurance_hub_sidebar_layout_options as $field ) {
                        ?>
                        <div class="hide-radio radio-image-wrapper" style="float:left; margin-right:30px;">
                            <input id="<?php echo esc_attr($field['value']); ?>" type="radio"
                                   name="insurance_hub_sidebar_layout"
                                   value="<?php echo esc_attr($field['value']); ?>" <?php checked($field['value'], $insurance_hub_sidebar_layout); ?>/>
                            <label class="description" for="<?php echo esc_attr($field['value']); ?>">
                                <img src="<?php echo esc_url($field['thumbnail']); ?>" alt=""/>
                            </label>
                        </div>
                    <?php } // end foreach
                    ?>
                    <div class="clear"></div>
                </td>
            </tr>
            <tr>
                <td>
                <em class="f13"><?php _e('You can set up the sidebar content', 'insurance-hub'); ?>
                 <a href="<?php echo esc_url(admin_url('/widgets.php')); ?>" target="_blank">
                    <?php _e('here', 'insurance-hub'); ?>
                        
                </a>
               </em>
                </td>
            </tr>

        </table>

    <?php }
endif;

/**
 * save the custom metabox data
 * @hooked to save_post hook
 *
 * @since Insurance Hub 1.0.0
 *
 * @param null
 * @return void
 *
 */
if (!function_exists('insurance_hub_save_sidebar_layout')) :
    function insurance_hub_save_sidebar_layout($post_id)
    {

        /*
          * A Guide to Writing Secure Themes – Part 4: Securing Post Meta
          *https://make.wordpress.org/themes/2015/06/09/a-guide-to-writing-secure-themes-part-4-securing-post-meta/
          * */
        if (
            !isset($_POST['insurance_hub_sidebar_layout_nonce']) ||
            !wp_verify_nonce($_POST['insurance_hub_sidebar_layout_nonce'], basename(__FILE__)) || /*Protecting against unwanted requests*/
            (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) || /*Dealing with autosaves*/
            !current_user_can('edit_post', $post_id)/*Verifying access rights*/
        ) {
            return;
        }

        //Execute this saving function
        if ( isset( $_POST['insurance_hub_sidebar_layout'] ) ) {
            $old = get_post_meta($post_id, 'insurance_hub_sidebar_layout', true );
            $new = sanitize_text_field($_POST['insurance_hub_sidebar_layout'] );
            if ( $new && $new != $old ) {
                update_post_meta( $post_id, 'insurance_hub_sidebar_layout', $new );
            } elseif ('' == $new && $old ) {
                delete_post_meta( $post_id, 'insurance_hub_sidebar_layout', $old );
            }
        }
    }

endif;
add_action('save_post', 'insurance_hub_save_sidebar_layout');