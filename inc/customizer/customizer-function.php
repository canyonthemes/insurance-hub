<?php
/**
 * Define some custom classes for Insurance Hub.
 *
 * https://codex.wordpress.org/Class_Reference/WP_Customize_Control
 *
 * @package Canyon Themes
 * @subpackage Insurance Hub
 * @since 1.0.0
 */

if ( class_exists( 'WP_Customize_Control' ) ) {


    /**
     * A class to create a dropdown for all categories in your wordpress site
     *
     * @since 1.0.0
     * @Insurance Hub public
     */
    class Insurance_Hub_Customize_Category_Control extends WP_Customize_Control
    {

        /**
         * Render the control's content.
         *
         * @return HTML
         * @since 1.0.0
         */
        public function render_content()
        {
            $dropdown = wp_dropdown_categories(
                array(
                    'name'              => '_customize-dropdown-categories-' . $this->id,
                    'echo'              => 0,
                    'show_option_none'  => esc_html__('&mdash; Select Category &mdash;', 'insurance-hub'),
                    'option_none_value' => '0',
                    'selected'          => $this->value(),
                )
            );

            // Hackily add in the data link parameter.
            $dropdown = str_replace('<select', '<select ' . $this->get_link(), $dropdown);

            printf(
                '<label class="customize-control-select"><span class="customize-control-title">%s</span><span class="description customize-control-description">%s</span> %s </label>',
                $this->label,
                $this->description,
                $dropdown
            );
        }
    }


    /**
     * A class to create a dropdown for all categories in your wordpress site
     *
     * @since 1.0.0
     * @Insurance Hub public
     */
    class Insurance_Hub_Customize_Post_Category_Control extends WP_Customize_Control
    {

        /**
         * Render the control's content.
         *
         * @return HTML
         * @since 1.0.0
         */
        public function render_content()
        {
            $dropdown = wp_dropdown_categories(
                array(
                    'name'              => '_customize-dropdown-categories-' . $this->id,
                    'echo'              => 0,
                    'show_option_none'  => esc_html__('&mdash; Latest Post &mdash;', 'insurance-hub'),
                    'option_none_value' => '0',
                    'selected'          => $this->value(),
                )
            );

            // Hackily add in the data link parameter.
            $dropdown = str_replace('<select', '<select ' . $this->get_link(), $dropdown);

            printf(
                '<label class="customize-control-select"><span class="customize-control-title">%s</span><span class="description customize-control-description">%s</span> %s </label>',
                $this->label,
                $this->description,
                $dropdown
            );
        }
    }


    /**
     * Class to create a custom editor field in customizer section
     *
     * @Insurance Hub public
     * @since 1.0.0
     */
    class Insurance_Hub_Text_Editor_Custom_Control extends WP_Customize_Control
    {
        /**
         * The type of customize control being rendered.
         *
         * @since  1.0.0
         * @Insurance Hub public
         * @var    string
         */
        public $type = 'insurance-hub-editor';

        /**
         * Displays the control content.
         *
         * @since  1.0.0
         * @Insurance Hub public
         * @return void
         */
        public function render_content()
        { ?>

            <label>
				<span class="customize-control-title">
					<?php echo esc_attr($this->label); ?>
				</span>
                <input type="hidden" <?php $this->link(); ?> value="<?php echo esc_textarea($this->value()); ?>">
            </label>

            <?php
            $settings = array(
                
                'textarea_name' => $this->id,
                'teeny'         => true,
            );
            wp_editor(esc_textarea($this->value()), $this->id, $settings);

            do_action('admin_print_footer_scripts');
        }
    }


    /**
     * Overlay Color Picker Customizer Control
     *
     * This control adds a second slider for opacity to the stock WordPress color picker,
     * and it includes logic to seamlessly convert between RGBa and Hex color values as
     * opacity is added to or removed from a color.
     *
     * /**
     * Official control name.
     */
    class Insurance_Hub_Customize_Overlay_Color_Control extends WP_Customize_Control
    {
        public $type = 'alpha-color';
        /**
         * Add support for palettes to be passed in.
         *
         * Supported palette values are true, false, or an array of RGBa and Hex colors.
         */
        public $palette;
        /**
         * Add support for showing the opacity value on the slider handle.
         */
        public $show_opacity;


        /**
         * Render the control.
         */
        public function render_content()
        {
            // Process the palette
            if (is_array($this->palette)) {
                $palette = implode('|', $this->palette);
            } else {
                // Default to true.
                $palette = (false === $this->palette || 'false' === $this->palette) ? 'false' : 'true';
            }
            // Support passing show_opacity as string or boolean. Default to true.
            $show_opacity = (false === $this->show_opacity || 'false' === $this->show_opacity) ? 'false' : 'true';
            // Begin the output. ?>
            <label>
                <?php // Output the label and description if they were passed in.
                if (isset($this->label) && '' !== $this->label) {
                    echo '<span class="customize-control-title">' . sanitize_text_field($this->label) . '</span>';
                }
                if (isset($this->description) && '' !== $this->description) {
                    echo '<span class="description customize-control-description">' . sanitize_text_field($this->description) . '</span>';
                } ?>
                <input class="alpha-color-control" type="text" data-show-opacity="<?php echo $show_opacity; ?>"
                       data-palette="<?php echo esc_attr($palette); ?>"
                       data-default-color="<?php echo esc_attr($this->settings['default']->default); ?>" <?php $this->link(); ?> />
            </label>
            <?php
        }
    }


    /**
     * A class to create a list of icons in customizer field
     *
     * @since 1.0.0
     * @Insurance Hub
     */
    class Insurance_Hub_Customize_Icons_Control extends WP_Customize_Control
    {

        /**
         * The type of customize control being rendered.
         *
         * @since  1.0.0
         * @access public
         * @var    string
         */
        public $type = 'insurance_hub_icons';

        /**
         * Displays the control content.
         *
         * @since  1.0.0
         * @access public
         * @return void
         */
        public function render_content()
        {

            $saved_icon_value = $this->value();
            ?>
            <label>
			    <span class="insurance-hub-customize-control-title"><h3><?php echo esc_html($this->label); ?></h3>

			    </span>
                <span class="description customize-control-description"><?php echo esc_html($this->description); ?></span>
                <div class="insurance-hub-customize-icons">
                    <div class="selected-icon-preview"><?php if (!empty($saved_icon_value)) {
                            echo '<i class="fa ' . esc_attr($saved_icon_value) . '"></i>';
                        } ?>

                    </div>
                    <ul class="insurance-hub-icons-list-wrapper">
                        <?php
                        $insurance_hub_icons_list = insurance_hub_fontsome_icons_array();

                        foreach ($insurance_hub_icons_list as $key => $icon_value) {
                            if ($saved_icon_value == $icon_value) {
                                echo '<li class="selected"><i class="fa ' . esc_attr($icon_value) . '"></i></li>';
                            } else {
                                echo '<li><i class="fa ' . esc_attr($icon_value) . '"></i></li>';
                            }
                        }
                        ?>

                    </ul>
                    <input type="hidden" class="insurance-hub-icon-value" value="" <?php $this->link(); ?>>
                </div>

            </label>
            <?php
        }
    }

    /**
     * A class to create a option separator in customizer section
     *
     * @since 1.0.0
     */
    class Insurance_Hub_Customize_Section_Separator extends WP_Customize_Control
    {
        /**
         * The type of customize control being rendered.
         *
         * @since  1.0.0
         * @access public
         * @var    string
         */
        public $type = 'insurance_hub_separator';

        /**
         * Displays the control content.
         *
         * @since  1.0.0
         * @access public
         * @return void
         */
        public function render_content()
        {
            ?>
            <div class="insurance-hub-customize-section-wrap">
                <label>
                    <span class="insurance-hub-customize-control-title"><?php echo esc_html($this->label); ?></span>
                </label>
            </div>
            <?php
        }
    }
}