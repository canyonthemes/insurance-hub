<?php 

/**
		 * Color Option
		 *
		 * @since 1.0.0
		 */
		$wp_customize->add_panel(
	        'insurance_hub_color_info',
	        	array(
	        		'priority'       => 7,
	            	'capability'     => 'edit_theme_options',
	            	'theme_supports' => '',
	            	'title'          => esc_html__( 'Theme Color Option', 'insurance-hub' ),
	            ) 
	    );

	  /*-------------------------------------------------------------------------------------------*/
		/**
		 * Top Header Color Option
		 *
		 * @since 1.0.0
		 */
		$wp_customize->add_section(
	        'insurance_hub_top_header_color_option',
		        array(
		            'title'		=> esc_html__( 'Top Header Color Option', 'insurance-hub' ),
		            'panel'     => 'insurance_hub_color_info',
		            'priority'  => 6,
		        )
	    );  
    
        $wp_customize->add_setting(
	        'insurance_hub_top_header_fontawesome_color',
	            array(
	               'default' => $default['insurance_hub_top_header_fontawesome_color'],
	               'sanitize_callback' => 'sanitize_hex_color',
	             
		       	)
	    );
	    

	  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'insurance_hub_top_header_fontawesome_color', array(
				'label'     => esc_html__( 'Font Awesome Color', 'insurance-hub' ),
				'section'   => 'insurance_hub_top_header_color_option',
				 'priority' => 9,
				
			) ) );  

        $wp_customize->add_setting(
	        'insurance_hub_top_header_banner_color',
	            array(
	                'default'           => $default['insurance_hub_top_header_banner_color'],
	                'sanitize_callback' => 'sanitize_hex_color',
	               
		       	)
	    );
	   	        
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'insurance_hub_top_header_banner_color', array(
				'label'     => esc_html__( 'Top Banner Color', 'insurance-hub' ),
				'section'   => 'insurance_hub_top_header_color_option',
				 'priority' => 7,
				
			) ) );  

         $wp_customize->add_setting(
	        'insurance_hub_top_header_phone_no_text_color',
	            array(
	                'default'           => $default['insurance_hub_top_header_phone_no_text_color'] ,
	                'sanitize_callback' => 'sanitize_hex_color',
	               
		       	)
	    );
	    
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'insurance_hub_top_header_phone_no_text_color', array(
				'label' => esc_html__( 'Top Header Contact Info', 'insurance-hub' ),
				'section' => 'insurance_hub_top_header_color_option',
				 'priority' => 8,
				
			) ) );  


/*----------------------------------------------------------------------------------------------*/

/**
		 * Top Scroll Color Option
		 *
		 * @since 1.0.0
		 */
		$wp_customize->add_section(
	        'insurance_hub_top_scroll_color_option',
		        array(
		            'title'		=> esc_html__( 'Top Scroll Color Option', 'insurance-hub' ),
		            'panel'     => 'insurance_hub_color_info',
		            'priority'  => 6,
		        )
	    );  
    
         // Overlay Color Picker setting.
    $wp_customize->add_setting(
        'insurance_hub_top_scroll_bg_color',
        array(
           'default'           =>  $default['insurance_hub_top_scroll_bg_color'],
           'type'              => 'theme_mod',
           'capability'        => 'edit_theme_options',
           'sanitize_callback' => 'sanitize_hex_color',
          

        )
    );


    // Overlay Color Picker control.
    $wp_customize->add_control(
        new Insurance_Hub_Customize_Overlay_Color_Control(
            $wp_customize,
            'insurance_hub_top_scroll_bg_color',
            array(
               'label'      => esc_html__( 'Top Scroll Background Color', 'insurance-hub' ),
				'section'   => 'insurance_hub_top_scroll_color_option',
				 'priority' => 9,
                
            )
        )
    );


	
/* 
-----------------------------------------------------------------------------*/

/**
		 * Footer Section  Color Option
		 *
		 * @since 1.0.0
		 */
		$wp_customize->add_section(
	        'insurance_hub_footer_section_color_option',
		        array(
		            'title'		=> esc_html__( 'Footer Section Color Option', 'insurance-hub' ),
		            'panel'     => 'insurance_hub_color_info',
		            'priority'  => 6,
		        )
	    );  

	  $wp_customize->add_setting(
	        'insurance_hub_footer_section_color',
	            array(
	                'default'           => $default['insurance_hub_footer_section_color'],
	                'sanitize_callback' => 'sanitize_hex_color',
	               
		       	)
	    );
	
	  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'insurance_hub_footer_section_color', array(
				'label'     => esc_html__( 'Footer Section Color Option', 'insurance-hub' ),
				'section'   => 'insurance_hub_footer_section_color_option',
				'priority' => 9,
				
			) ) );  

/*-------------------------------------------------------------------------------
  Footer Section Border Top  Color Option.
*/	
	 $wp_customize->add_setting(
	        'insurance_hub_footer_section_border_top_color',
	            array(
	                'default'           => $default['insurance_hub_footer_section_border_top_color'],
	                'sanitize_callback' => 'sanitize_hex_color',
	               
		       	)
	    );
	
	  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'insurance_hub_footer_section_border_top_color', array(
				'label'     => esc_html__( 'Footer Section Border Top Color Option', 'insurance-hub' ),
				'section'   => 'insurance_hub_footer_section_color_option',
				 'priority' => 9,
				
			) ) );    


/*-------------------------------------------------------------------------------
  Footer Section Copy Right text Color Option.
*/	  

   $wp_customize->add_setting(
	        'insurance_hub_footer_copyright_color',
	            array(
	                'default'           => $default['insurance_hub_footer_copyright_color'],
	                'sanitize_callback' => 'sanitize_hex_color',
	               
		       	)
	    );
	
	  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'insurance_hub_footer_copyright_color', array(
				'label'     => esc_html__( 'Copyright Text Color Option', 'insurance-hub' ),
				'section'   => 'insurance_hub_footer_section_color_option',
				 'priority' => 9,
				
			) ) );


/* 
-----------------------------------------------------------------------------*/

/**
		 * Basic Colors Options 
		 *
		 * @since 1.0.0
		 */
		$wp_customize->add_section(
	        'insurance_hub_basic_color_option',
		        array(
		            'title'		=> esc_html__( 'Basic Colors Options ', 'insurance-hub' ),
		            'panel'     => 'insurance_hub_color_info',
		            'priority'  => 4,
		        )
	    );  

	  
	
	$wp_customize->add_setting(
	        'insurance_hub_primary_color_option',
	            array(
	                'default'           => $default['insurance_hub_primary_color_option'],
	                'sanitize_callback' => 'sanitize_hex_color',
	             
		       	)
	    );
	
	  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'insurance_hub_primary_color_option', array(
				'label'     => esc_html__( 'Primary Color', 'insurance-hub' ),
				'section'   => 'insurance_hub_basic_color_option',
				 'priority' => 14,
				
			) ) ); 


      $wp_customize->add_setting(
	        'insurance_hub_link_color_option',
	            array(
	                   'default'           => $default['insurance_hub_link_color_option'],
	                   'sanitize_callback' => 'sanitize_hex_color',
	                
		         	 )
	    );
	
	  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'insurance_hub_link_color_option', array(
				'label'     => esc_html__( 'Link Color', 'insurance-hub' ),
				'section'   => 'insurance_hub_basic_color_option',
				 'priority' => 14,
				
			) ) ); 	 

   
     $wp_customize->add_setting(
	        'insurance_hub_link_hover_color_option',
	            array(
	                   'default'           =>  $default['insurance_hub_link_hover_color_option'],
	                   'sanitize_callback' => 'sanitize_hex_color',
	                 )
	    );
	
	  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'insurance_hub_link_hover_color_option', array(
				'label'     => esc_html__( 'Link Hover Color', 'insurance-hub' ),
				'section'   => 'insurance_hub_basic_color_option',
				 'priority' => 14,
				
			) ) ); 	 			 



/*-------------------------------------------------------------------------------------------------*/

 /**
		 * HomePage Settings Panel on customizer
		 *
		 * @since 1.0.0
		 */
		$wp_customize->add_panel(
	        'insurance_hub_homepage_settings_panel',
	        	array(
	        		'priority'       => 5,
	            	'capability'     => 'edit_theme_options',
	            	'theme_supports' => '',
	            	'title'          => esc_html__( 'HomePage Settings', 'insurance-hub' ),
	            ) 
	    );


/*********************** Home page content show/Hide **********************/

/**
		 * Hide Home Page Conent
		 *
		 * @since 1.0.0
		 */
		$wp_customize->add_section(
	        'insurance_hub_hide_home_content_section',
		        array(
		            'title'		=> esc_html__( 'Hide Front Page Content', 'insurance-hub' ),
		            'panel'     => 'insurance_hub_homepage_settings_panel',
		            'priority'  => 6,
		        )
	    );

	    /**
	     * Switch option to Hide Home Page Conent
	     *
	     * @since 1.0.0
	     */

        $wp_customize->add_setting(
	        'insurance_hub_homepage_hide_front_page_option',
		        array(
		            'default'           => $default['insurance_hub_homepage_hide_front_page_option'] ,
		            'sanitize_callback' => 'insurance_hub_sanitize_select',
		        )
	    );

	    $choices = insurance_hub_homepage_hide_front_page_option();
	    $wp_customize->add_control(
	        'insurance_hub_homepage_hide_front_page_option',
	            array(
		            'type'          => 'radio',
		            'label'         => esc_html__( 'Hide Front Page Content', 'insurance-hub' ),
		            'description' 	=> esc_html__( 'You may want to hide front page content and want to show only Feature section. Check this to hide front page content.', 'insurance-hub' ),
		            'section'       => 'insurance_hub_hide_home_content_section',
		            'choices'       => $choices,
		            'priority'      => 5
	            )
	    );



/*-------------------------------------------------------------------------------------------------*/
		/**
		 * Slider Section
		 *
		 * @since 1.0.0
		 */
		$wp_customize->add_section(
	        'insurance_hub_slider_section',
		        array(
		            'title'		=> esc_html__( 'Slider Section', 'insurance-hub' ),
		            'panel'     => 'insurance_hub_homepage_settings_panel',
		            'priority'  => 6,
		        )
	    );

	    /**
	     * Switch option for Homepage Slider Section
	     *
	     * @since 1.0.0
	     */

 $wp_customize->add_setting(
	        'insurance_hub_homepage_slider_option',
		        array(
		            'default'           => $default['insurance_hub_homepage_slider_option'] ,
		            'sanitize_callback' => 'insurance_hub_sanitize_select',
		        )
	    );
  $choices = insurance_hub_homepage_slider_option();
	    $wp_customize->add_control(
	        'insurance_hub_homepage_slider_option',
	            array(
		            'type'          => 'radio',
		            'label'         => esc_html__( 'Slider Option', 'insurance-hub' ),
		            'description' 	=> esc_html__( 'Show/hide option for homepage Slider Section.', 'insurance-hub' ),
		            'section'       => 'insurance_hub_slider_section',
		            'choices'       => $choices,
		            'priority'      => 5
	            )
	    );
     

     /**
	     * Field for Section Id
	     *
	     * @since 1.0.0
	     */
	    $wp_customize->add_setting(
	        'insurance_hub_slider_section_id',
	            array(
	                'default'           =>  $default['insurance_hub_slider_section_id'],
	                'sanitize_callback' => 'sanitize_text_field',
	                
		       	)
	    );
	    $wp_customize->add_control(
	        'insurance_hub_slider_section_id',
	            array(
		            'type'     => 'text',
		            'label'    => esc_html__( 'Home Section Id', 'insurance-hub' ),
		            'section'  => 'insurance_hub_slider_section',
		            'priority' => 6
	            )
	    );

  /**
	     * Dropdown available category for homepage slider
	     *
	     * @since 1.0.0
	     */
	    $wp_customize->add_setting(
	        'insurance_hub_slider_cat_id',
		        array(
		            'default'           =>  $default['insurance_hub_slider_cat_id'],
		            'capability'        => 'edit_theme_options',
		            'sanitize_callback' => 'absint'
		        )
	    );

	   $wp_customize->add_control( new Insurance_Hub_Customize_Category_Control(
	        $wp_customize,
	        'insurance_hub_slider_cat_id',
		        array(
		            'label'       => esc_html__( 'Slider Category', 'insurance-hub' ),
		            'description' => esc_html__( 'Select cateogry for Homepage Slider Section', 'insurance-hub' ),
		            'section'     => 'insurance_hub_slider_section',
		            'priority'    => 8
		        )
		    )
	    );


    

    /**
	     * Field for Read More button text
	     *
	     * @since 1.0.0
	     */
	    $wp_customize->add_setting(
	        'insurance_hub_slider_get_started_txt',
	            array(
	                'default'           =>  $default['insurance_hub_slider_get_started_txt'],
	                'sanitize_callback' => 'sanitize_text_field',
	               
		       	)
	    );

	    $wp_customize->add_control(
	        'insurance_hub_slider_get_started_txt',
	            array(
		            'type'     => 'text',
		            'label'    => esc_html__( 'Get Started Button', 'insurance-hub' ),
		            'section'  => 'insurance_hub_slider_section',
		            'priority' => 15
	            )
	    );



/*----------------------------------------------------------------------------------------------*/
		/**
		 * Quote Section
		 *
		 * @since 1.0.0
		 */
		$wp_customize->add_section(
	        'insurance_hub_quote_section',
		        array(
		            'title'		=> esc_html__( 'Quote Section', 'insurance-hub' ),
		            'panel'     => 'insurance_hub_homepage_settings_panel',
		            'priority'  => 9,
		        )
	    );

	    /**
	     * Switch option for Homepage Quote Section
	     *
	     * @since 1.0.0
	     */
	    $wp_customize->add_setting(
	        'insurance_hub_homepage_quote_option',
		        array(
		            'default'           =>  $default['insurance_hub_homepage_quote_option'],
		            'sanitize_callback' => 'insurance_hub_sanitize_select',
		        )
	    );
  $choices = insurance_hub_homepage_quote_option();
 $wp_customize->add_control(
	        'insurance_hub_homepage_quote_option',
	            array(
		            'type'          => 'radio',
		            'label'         => esc_html__( ' Quote Section Option', 'insurance-hub' ),
		            'description' 	=> esc_html__( 'Show/hide option for Homepage Quote Section.', 'insurance-hub' ),
		            'section'       => 'insurance_hub_quote_section',
		            'choices'       => $choices,
		            'priority'      => 5
	            )
	    );


	    /**
	     * Field for quote title
	     *
	     * @since 1.0.0
	     */
	    $wp_customize->add_setting(
	        'insurance_hub_quote_section_title',
	            array(
	                'default'           => $default['insurance_hub_quote_section_title'],
	                'sanitize_callback' => 'sanitize_text_field',
	                 )
	    );
	    $wp_customize->add_control(
	        'insurance_hub_quote_section_title',
	            array(
		            'type'     => 'text',
		            'label'    => esc_html__( 'Quote Title', 'insurance-hub' ),
		            'section'  => 'insurance_hub_quote_section',
		            'priority' => 14
	            )
	    );

	    	    
     /**
	     * Field for Get In Touch button text
	     *
	     * @since 1.0.0
	     */
	    $wp_customize->add_setting(
	        'insurance_hub_quote_get_a_quate_txt',
	            array(
	                'default'           => $default['insurance_hub_quote_get_a_quate_txt'],
	                'sanitize_callback' => 'sanitize_text_field',
	                'transport'         => 'refresh'
		       	)
	    );
	    $wp_customize->add_control(
	        'insurance_hub_quote_get_a_quate_txt',
	            array(
		            'type'     => 'text',
		            'label'    => esc_html__( 'Get a quote Button', 'insurance-hub' ),
		            'section'  => 'insurance_hub_quote_section',
		            'priority' => 15
	            )
	    );

   /**
	     * Field for Get In Touch button text Link
	     *
	     * @since 1.0.0
	     */
	    $wp_customize->add_setting(
	        'insurance_hub_quote_get_a_quate_link',
	            array(
	                'default'           =>  $default['insurance_hub_quote_get_a_quate_link'],
	                'sanitize_callback' => 'esc_url_raw',
	               
		       	)
	    );

	    $wp_customize->add_control(
	        'insurance_hub_quote_get_a_quate_link',
	            array(
		            'type'     => 'url',
		            'label'    => esc_html__( 'Get a quote Button Link', 'insurance-hub' ),
		            'section'  => 'insurance_hub_quote_section',
		            'priority' => 15
	            )
	    );


/*----------------------------------------------------------------------------------------------*/
		/**
		 * About Section
		 *
		 * @since 1.0.0
		 */
		$wp_customize->add_section(
	        'insurance_hub_about_section',
		        array(
		            'title'		=> esc_html__( 'About Section', 'insurance-hub' ),
		            'panel'     => 'insurance_hub_homepage_settings_panel',
		            'priority'  => 9,
		        )
	    );

	    /**
	     * Switch option for Homepage About Section
	     *
	     * @since 1.0.0
	     */
	    $wp_customize->add_setting(
	        'insurance_hub_homepage_about_option',
		        array(
		            'default'           => $default['insurance_hub_homepage_about_option'],
		            'sanitize_callback' => 'insurance_hub_sanitize_select',
		        )
	    );
   
        $choices = insurance_hub_homepage_about_option();
        $wp_customize->add_control(
	        'insurance_hub_homepage_about_option',
	            array(
		            'type'          => 'radio',
		            'label'         => esc_html__( 'About Section Option', 'insurance-hub' ),
		            'description' 	=> esc_html__( 'Show/hide option for Homepage About Section.', 'insurance-hub' ),
		            'section'       => 'insurance_hub_about_section',
		            'choices'       =>  $choices,
		            'priority'      => 5
	            )
	    );

       /**
	     * Field for section Id
	     *
	     * @since 1.0.0
	     */
	    $wp_customize->add_setting(
	        'insurance_hub_about_section_id',
	            array(
	                'default'           => $default['insurance_hub_about_section_id'],
	                'sanitize_callback' => 'sanitize_text_field',
	               
		       	)
	    );
	    $wp_customize->add_control(
	        'insurance_hub_about_section_id',
	            array(
		            'type'     => 'text',
		            'label'    => esc_html__( 'About Us Section Id', 'insurance-hub' ),
		            'section'  => 'insurance_hub_about_section',
		            'priority' => 11
	            )
	    );

	    /**
	     * Field for section title
	     *
	     * @since 1.0.0
	     */
	    $wp_customize->add_setting(
	        'insurance_hub_about_section_title',
	            array(
	                'default'           =>  $default['insurance_hub_about_section_title'],
	                'sanitize_callback' => 'sanitize_text_field',
	                
		       	)
	    );
	    $wp_customize->add_control(
	        'insurance_hub_about_section_title',
	            array(
		            'type'     => 'text',
		            'label'    => esc_html__( 'Section Title', 'insurance-hub' ),
		            'section'  => 'insurance_hub_about_section',
		            'priority' => 11
	            )
	    );

	    /**
	     * Field for section sub title
	     *
	     * @since 1.0.0
	     */
	    $wp_customize->add_setting(
	        'insurance_hub_about_section_sub_title',
	            array(
	                'default'           =>  $default['insurance_hub_about_section_sub_title'],
	                'sanitize_callback' => 'sanitize_text_field',
	               
		       	)
	    );
	    $wp_customize->add_control(
	        'insurance_hub_about_section_sub_title',
	            array(
		            'type'     => 'text',
		            'label'    => esc_html__( 'Section Sub Title', 'insurance-hub' ),
		            'section'  => 'insurance_hub_about_section',
		            'priority' => 12
	            )
	    );

	    /**
	     * Dropdown available pages for homepage about section
	     *
	     * @since 1.0.0
	     */
	    $wp_customize->add_setting(
	        'insurance_hub_about_page_id',
		        array(
		            'default'           => $default['insurance_hub_about_page_id'],
		            'capability'        => 'edit_theme_options',
		            'sanitize_callback' => 'insurance_hub_sanitize_dropdown_pages'
		        )
	    );
	    $wp_customize->add_control(
	        'insurance_hub_about_page_id',
		        array(
		        	'type'        => 'dropdown-pages',
		            'label'       => esc_html__( 'About us Page', 'insurance-hub' ),
		            'description' => esc_html__( 'Select page for Homepage About Section', 'insurance-hub' ),
		            'section'     => 'insurance_hub_about_section',
		            'priority'    => 13
		        )
	    );

	    
     /**
	     * Field for Read More button text
	     *
	     * @since 1.0.0
	     */
	    $wp_customize->add_setting(
	        'insurance_hub_about_read_more_txt',
	            array(
	                'default'           => $default['insurance_hub_about_read_more_txt'],
	                'sanitize_callback' => 'sanitize_text_field',
	                'transport'         => 'refresh'
		       	)
	    );

	    $wp_customize->add_control(
	        'insurance_hub_about_read_more_txt',
	            array(
		            'type'     => 'text',
		            'label'    => esc_html__( 'Read More Button', 'insurance-hub' ),
		            'section'  => 'insurance_hub_about_section',
		            'priority' => 15
	            )
	    );
	    
	    
	    /**
	     * Field for No of Words
	     *
	     * @since 1.0.0
	     */
	    $wp_customize->add_setting(
	        'insurance_hub_about_character_limit',
	            array(
	                'default'           => $default['insurance_hub_about_character_limit'],
	                'sanitize_callback' => 'absint',
	               	)
	    );

	    $wp_customize->add_control(
	        'insurance_hub_about_character_limit',
	            array(
		            'type'     => 'number',
		            'label'    => esc_html__( 'Show No of Words', 'insurance-hub' ),
		            'section'  => 'insurance_hub_about_section',
		            'priority' => 15
	            )
	    );



/*--------------------------------------------------------------------------------------------------------------*/
		/**
		 * Our Services Section
		 *
		 * @since 1.0.0
		 */
		$wp_customize->add_section(
	        'insurance_hub_services_section',
		        array(
		            'title'		=> esc_html__( 'Our Services Section', 'insurance-hub' ),
		            'panel'     => 'insurance_hub_homepage_settings_panel',
		            'priority'  => 20,
		        )
	    );

	    /**
	     * Switch option for Homepage Service Section
	     *
	     * @since 1.0.0
	     */
    $wp_customize->add_setting(
	        'insurance_hub_homepage_service_option',
		        array(
		            'default'           => $default['insurance_hub_homepage_service_option'],
		            'sanitize_callback' => 'insurance_hub_sanitize_select',
		        )
	    );
	   
    $choices = insurance_hub_homepage_service_option();

    $wp_customize->add_control(
	        'insurance_hub_homepage_service_option',
	            array(
		            'type'          => 'radio',
		            'label'         => esc_html__( 'Services Section Option', 'insurance-hub' ),
		            'description' 	=> esc_html__( 'Show/hide option for Homepage Our Services  Section.', 'insurance-hub' ),
		            'section'       => 'insurance_hub_services_section',
		            'choices'       => $choices,
		            'priority'      => 5
	            )
	    );

/**
	     * Field for section Id
	     *
	     * @since 1.0.0
	     */
	    $wp_customize->add_setting(
	        'insurance_hub_services_section_id',
	            array(
	                'default'           => $default['insurance_hub_services_section_id'],
	                'sanitize_callback' => 'sanitize_text_field',
	               
		       	)
	    );
	    $wp_customize->add_control(
	        'insurance_hub_services_section_id',
	            array(
		            'type'     => 'text',
		            'label'    => esc_html__( 'Services Section Id', 'insurance-hub' ),
		            'section'  => 'insurance_hub_services_section',
		            'priority' => 6
	            )
	    );


	    /**
	     * Field for section title
	     *
	     * @since 1.0.0
	     */
	    $wp_customize->add_setting(
	        'insurance_hub_services_section_title',
	            array(
	                'default'           => $default['insurance_hub_services_section_title'],
	                'sanitize_callback' => 'sanitize_text_field',
	               
		       	)
	    );
	    $wp_customize->add_control(
	        'insurance_hub_services_section_title',
	            array(
		            'type'     => 'text',
		            'label'    => esc_html__( 'Section Title', 'insurance-hub' ),
		            'section'  => 'insurance_hub_services_section',
		            'priority' => 10
	            )
	    );

	    /**
	     * Field for section sub title
	     *
	     * @since 1.0.0
	     */
	    $wp_customize->add_setting(
	        'insurance_hub_services_section_sub_title',
	            array(
	                'default'           => $default['insurance_hub_services_section_sub_title'],
	                'sanitize_callback' => 'sanitize_text_field',
	              
		       	)
	    );
	    $wp_customize->add_control(
	        'insurance_hub_services_section_sub_title',
	            array(
		            'type'     => 'text',
		            'label'    => esc_html__( 'Section Sub Title', 'insurance-hub' ),
		            'section'  => 'insurance_hub_services_section',
		            'priority' => 15
	            )
	    );


   /**
	     * Field for No of Words
	     *
	     * @since 1.0.0
	     */
	    $wp_customize->add_setting(
	        'insurance_hub_services_character_limit',
	            array(
	                'default'           => $default['insurance_hub_services_character_limit'],
	                'sanitize_callback' => 'absint',
	               	)
	    );
	    $wp_customize->add_control(
	        'insurance_hub_services_character_limit',
	            array(
		            'type'     => 'number',
		            'label'    => esc_html__( 'Show No of Words', 'insurance-hub' ),
		            'section'  => 'insurance_hub_services_section',
		            'priority' => 15
	            )
	    );

   /**
		 *   Show Link
	  */
        $wp_customize->add_setting(
	        'insurance_hub_services_show_link_option',
	            array(
	                  'default'           => $default['insurance_hub_services_show_link_option'],
	                  'sanitize_callback' => 'insurance_hub_sanitize_checkbox',
	               	)
	    );
	    $wp_customize->add_control('insurance_hub_services_show_link_option',
            array(
            'label'     => esc_html__('Show Link','insurance-hub'),
            'section'   => 'insurance_hub_services_section',
            'type'	  	=> 'checkbox',
            'priority'  => 17
         )
    );     


	   
	   
	$service_priority = 30;
	 $insurance_hub_default_service_icon = array( 'fa-desktop', 'fa-print', 'fa-paint-brush', 'fa-mobile','fa-flash','fa-support' );
    $insurance_hub_separator_label = array( 'First', 'Second', 'Third', 'Forth', 'Fifth', 'Sixth' );
    
    foreach ( $insurance_hub_separator_label as $icon_key => $icon_value ) {
		
	     /**
	     * Section separator
	     *
	     * @since 1.0.0
	     */
	    $wp_customize->add_setting(
	        'insurance_hub_service_icon_sec_separator_'.$icon_key,
		        array(
		            'default'           => '',
		            'sanitize_callback' => 'sanitize_text_field',
		        )
	    );
	    $wp_customize->add_control(new Insurance_Hub_Customize_Section_Separator(
	        $wp_customize, 
	            'insurance_hub_service_icon_sec_separator_'.$icon_key,
	            array(
	                'type' 		=> 'insurance_hub_separator',
	                'label' 	=> sprintf(esc_html__( '%s Service', 'insurance-hub' ), $insurance_hub_separator_label[$icon_key] ),
	                'section' 	=> 'insurance_hub_services_section',
	                'priority'  => $service_priority,
	            )	            	
	        )
	    );

	    /**
	     * Icon list for service tab
	     *
	     * @since 1.0.0
	     */
	    $wp_customize->add_setting(
	        'insurance_hub_service_icon_'.$icon_key,
		        array(
		            'default'           => $insurance_hub_default_service_icon[$icon_key],
		            'sanitize_callback' => 'sanitize_text_field',
		        )
	    );

	    $wp_customize->add_control( new Insurance_Hub_Customize_Icons_Control(
	        $wp_customize, 
	        'insurance_hub_service_icon_'.$icon_key,
	            array(
	                'type' 		    => 'insurance_hub_icons',
	                'label' 	    => sprintf(esc_html__( '%s Service Icon','insurance-hub' ), $insurance_hub_separator_label[$icon_key] ),
	                'description' 	=> esc_html__( 'Choose the icon from lists.', 'insurance-hub' ),
	                'section' 	    => 'insurance_hub_services_section',
	                'priority'      => $service_priority,
	            )	            	
	        )
	    );

	 $service_priority = $service_priority+5;
	    	  
	    /**
	     * Dropdown available pages for homepage service section
	     *
	     * @since 1.0.0
	     */
	    $wp_customize->add_setting(
	        'insurance_hub_service_page_id_'.$icon_key,
		        array(
		            'default'           => '0',
		            'capability'        => 'edit_theme_options',
		            'sanitize_callback' => 'insurance_hub_sanitize_dropdown_pages'
		        )
	    );

	    $wp_customize->add_control(
	        'insurance_hub_service_page_id_'.$icon_key,
		        array(
		        	'type'        => 'dropdown-pages',
		            'label'       => sprintf(esc_html__( '%s Service Page', 'insurance-hub' ), $insurance_hub_separator_label[$icon_key] ),

		            'description' => esc_html__( 'Select page for Homepage Service Section', 'insurance-hub' ),
		            'section'     => 'insurance_hub_services_section',
		            'priority'    => $service_priority
		        )
	    );
	    $service_priority = $service_priority+5;
	}


/*--------------------------------------------------------------------------------------------------------------*/

/**
		 * Satisfied Clients
		 *
		 * @since 1.0.0
		 */
		$wp_customize->add_section(
	        'insurance_hub_satisfied_clients_section',
		        array(
		            'title'		=> esc_html__( 'Satisfied Clients Section', 'insurance-hub' ),
		            'panel'     => 'insurance_hub_homepage_settings_panel',
		            'priority'  => 30,
		        )
	    );

	    /**
	     * Switch option for Homepage Satisfied Clients Section
	     *
	     * @since 1.0.0
	     */
	    $wp_customize->add_setting(
	        'insurance_hub_homepage_satisfied_clients_option',
		        array(
		            'default'           => $default['insurance_hub_homepage_satisfied_clients_option'],
		            'transport'         => 'refresh',
		            'sanitize_callback' => 'insurance_hub_sanitize_select',
		        )
	    );

       $choices= insurance_hub_homepage_satisfied_clients_option();
        $wp_customize->add_control(
	        'insurance_hub_homepage_satisfied_clients_option',
	            array(
		            'type'          => 'radio',
		            'label'         => esc_html__( 'Satisfied Clients Section Option', 'insurance-hub' ),
		            'description' 	=> esc_html__( 'Show/hide option for Homepage Satisfied Clients Section.', 'insurance-hub' ),
		            'section'       => 'insurance_hub_satisfied_clients_section',
		            'choices'       =>  $choices,
		            'priority'      => 5
	            )
	    );


	    /**
	     * Field for Satisfied Clients section title
	     *
	     * @since 1.0.0
	     */
	    $wp_customize->add_setting(
	        'insurance_hub_satisfied_clients_section_title',
	            array(
	                'default'           =>  $default['insurance_hub_satisfied_clients_section_title'],
	                'sanitize_callback' => 'sanitize_text_field',
	                  )
	    );
	    $wp_customize->add_control(
	        'insurance_hub_satisfied_clients_section_title',
	            array(
		            'type'     => 'text',
		            'label'    => esc_html__( 'Section Title', 'insurance-hub' ),
		            'section'  => 'insurance_hub_satisfied_clients_section',
		            'priority' => 11
	            )
	    );

	     
      
       /**
	     * Field for section description
	     *
	     * @since 1.0.0
	     */
	    $wp_customize->add_setting(
	        'insurance_hub_satisfied_clients_section_description',
	            array(
	                'default'           => $default['insurance_hub_satisfied_clients_section_description'],
	                'sanitize_callback' => 'wp_kses_post',
	                
		       	)
	    );    
	    $wp_customize->add_control(
	        'insurance_hub_satisfied_clients_section_description',
	            array(
		            'type'     => 'textarea',
		            'label'    => esc_html__( 'Section Description', 'insurance-hub' ),
		            'section'  => 'insurance_hub_satisfied_clients_section',
		            'priority' => 16
	            )
	    );


	    /**
	     * Dropdown available categories for homepage Satisfied Clients section
	     *
	     * @since 1.0.0
	     */
	    $wp_customize->add_setting(
	        'insurance_hub_satisfied_clients_section_cat_id',
		        array(
		            'default'           => $default['insurance_hub_satisfied_clients_section_cat_id'],
		            'capability'        => 'edit_theme_options',
		            'sanitize_callback' => 'absint'
		        )
	    );
	   
$wp_customize->add_control( new insurance_hub_Customize_Category_Control(
	        $wp_customize,
	        'insurance_hub_satisfied_clients_section_cat_id',
		        array(
		            'label'       => esc_html__( 'Satisfied Clients Category', 'insurance-hub' ),
		            'description' => esc_html__( 'Select Category for Homepage Satisfied Clients Section', 'insurance-hub' ),
		            'section'     => 'insurance_hub_satisfied_clients_section',
		            'priority'    => 20
		        )
		    )
	    );



	    /**
	     * Upload image control for Satisfied Clients section
	     *
	     * @since 1.0.0
	     */
	    $wp_customize->add_setting(
	        'insurance_hub_satisfied_clients_bg_image',
		        array(
		            'capability'        => 'edit_theme_options',
		            'sanitize_callback' => 'insurance_hub_sanitize_image'
		        )
	    );

	    $wp_customize->add_control( new WP_Customize_Image_Control(
	        $wp_customize,
	        'insurance_hub_satisfied_clients_bg_image',
	        	array(
	            	'label'      => esc_html__( 'Section Background Image', 'insurance-hub' ),
	               	'section'    => 'insurance_hub_satisfied_clients_section',
	               	'priority'   => 25
	           	)
	       	)
	   	);

	


/*---------------------------------------------------------------------------------------*/
		/**
		 * Meet Our Insurance agent*
		 * @since 1.0.0
		 */
		$wp_customize->add_section(
	        'insurance_hub_our_team_section',
		        array(
		            'title'		=> esc_html__( 'Insurance agent', 'insurance-hub' ),
		            'panel'     => 'insurance_hub_homepage_settings_panel',
		            'priority'  => 20,
		        )  
	    );

	    /**
	     * Switch option for Meet Our Team Section
	     *
	     * @since 1.0.0
	     */
	    $wp_customize->add_setting(
	        'insurance_hub_homepage_our_team_option',
		        array(
		            'default'           => $default['insurance_hub_homepage_our_team_option'],
		            'transport'         => 'refresh',
		            'sanitize_callback' => 'insurance_hub_sanitize_select',
		        )
	    );
     $choices= insurance_hub_homepage_our_team_option();
    $wp_customize->add_control(
	        'insurance_hub_homepage_our_team_option',
	            array(
		            'type'          => 'radio',
		            'label'         => esc_html__( 'Meet Our Insurance agent Option', 'insurance-hub' ),
		            'description' 	=> esc_html__( 'Show/hide option for Homepage Meet Our Insurance agent Section.', 'insurance-hub' ),
		            'section'       => 'insurance_hub_our_team_section',
		            'choices'       => $choices,
		            'priority'      => 5
	            )
	    );

/**
	     * Field for section ID
	     *
	     * @since 1.0.0
	     */
	    $wp_customize->add_setting(
	        'insurance_hub_our_team_section_id',
	            array(
	                'default'           => $default['insurance_hub_our_team_section_id'],
	                'sanitize_callback' => 'sanitize_text_field',
	                
		       	)
	    );
	    $wp_customize->add_control(
	        'insurance_hub_our_team_section_id',
	            array(
		            'type'     => 'text',
		            'label'    => esc_html__( 'Team Section Id', 'insurance-hub' ),
		            'section'  => 'insurance_hub_our_team_section',
		            'priority' => 6
	            )
	    );


	    /**
	     * Field for section title
	     *
	     * @since 1.0.0
	     */
	    $wp_customize->add_setting(
	        'insurance_hub_our_team_section_title',
	            array(
	                'default'           =>  $default['insurance_hub_our_team_section_title'],
	                'sanitize_callback' => 'sanitize_text_field',
	              	)
	    );
	    $wp_customize->add_control(
	        'insurance_hub_our_team_section_title',
	            array(
		            'type'     => 'text',
		            'label'    => esc_html__( 'Section Title', 'insurance-hub' ),
		            'section'  => 'insurance_hub_our_team_section',
		            'priority' => 11
	            )
	    );

	    /**
	     * Field for section sub title
	     *
	     * @since 1.0.0
	     */
	    $wp_customize->add_setting(
	        'insurance_hub_our_team_section_sub_title',
	            array(
	                'default'           =>  $default['insurance_hub_our_team_section_sub_title'],
	                'sanitize_callback' => 'sanitize_text_field',
	               
		       	)
	    );
	    $wp_customize->add_control(
	        'insurance_hub_our_team_section_sub_title',
	            array(
		            'type'     => 'text',
		            'label'    => esc_html__( 'Section Sub Title', 'insurance-hub' ),
		            'section'  => 'insurance_hub_our_team_section',
		            'priority' => 12
	            )
	    );

     
	    
	    /**
	     * Dropdown available category for homepage our team
	     *
	     * @since 1.0.0
	     */
	    $wp_customize->add_setting(
	        'insurance_hub_our_team_cat_id',
		        array(
		            'default'           =>  $default['insurance_hub_our_team_cat_id'],
		            'capability'        => 'edit_theme_options',
		            'sanitize_callback' => 'absint'
		        )
	    );
	    $wp_customize->add_control( new insurance_hub_Customize_Category_Control(
	        $wp_customize,
	        'insurance_hub_our_team_cat_id',
		        array(
		            'label'       => esc_html__( 'Section Category', 'insurance-hub' ),
		            'description' => esc_html__( 'Select cateogry for Homepage Our Team Section', 'insurance-hub' ),
		            'section'     => 'insurance_hub_our_team_section',
		            'priority'    => 25
		        )
		    )
	    );

 
/*---------------------------------------------------------------------------------------*/
		/**
		 *  Testimonials*
		 * @since 1.0.0
		 */
		$wp_customize->add_section(
	        'insurance_hub_testimonials_section',
		        array(
		            'title'		=> esc_html__( 'Testimonials', 'insurance-hub' ),
		            'panel'     => 'insurance_hub_homepage_settings_panel',
		            'priority'  => 27,
		        )  
	    );

	    /**
	     * Switch option for Testimonials Section
	     *
	     * @since 1.0.0
	     */
	    $wp_customize->add_setting(
	        'insurance_hub_homepage_testimonials_option',
		        array(
		            'default'           =>  $default['insurance_hub_homepage_testimonials_option'] ,
		            'sanitize_callback' => 'insurance_hub_sanitize_select',
		        )
	    );
$choices = insurance_hub_homepage_testimonials_option();
 
 $wp_customize->add_control(
	        'insurance_hub_homepage_testimonials_option',
	            array(
		            'type'        => 'radio',
		            'label'       => esc_html__( 'Testimonials Section Option', 'insurance-hub' ),
		            'description' => esc_html__( 'Show/hide option for Homepage Testimonials Section.', 'insurance-hub' ),
		            'section'     => 'insurance_hub_testimonials_section',
		            'choices'     => $choices,
		            'priority'    => 5
	            )
	    );

      	    
      /**
	     * Field for section Id
	     *
	     * @since 1.0.0
	     */
	    $wp_customize->add_setting(
	        'insurance_hub_testimonial_section_id',
	            array(
	                'default'           => $default['insurance_hub_testimonial_section_id'],
	                'sanitize_callback' => 'sanitize_text_field',
	              
		       	)
	    );

	    $wp_customize->add_control(
	        'insurance_hub_testimonial_section_id',
	            array(
		            'type'     => 'text',
		            'label'    => esc_html__( 'Testimonials Section Id', 'insurance-hub' ),
		            'section'  => 'insurance_hub_testimonials_section',
		            'priority' => 12
	            )
	    );	    


	    /**
	     * Dropdown available category for homepage Testimonials
	     *
	     * @since 1.0.0
	     */
	    $wp_customize->add_setting(
	        'insurance_hub_testimonials_cat_id',
		        array(
		            'default'           => $default['insurance_hub_testimonials_cat_id'],
		            'capability'        => 'edit_theme_options',
		            'sanitize_callback' => 'absint'
		        )
	    );
	    $wp_customize->add_control( new insurance_hub_Customize_Category_Control(
	        $wp_customize,
	        'insurance_hub_testimonials_cat_id',
		        array(
			            'label'       => esc_html__( 'Section Category', 'insurance-hub' ),
			            'description' => esc_html__( 'Select cateogry for Homepage Testimonials Section', 'insurance-hub' ),
			            'section'     => 'insurance_hub_testimonials_section',
			            'priority'    => 25
		            )
		    )
	    );
    
     /**
	     * Upload image control for section
	     *
	     * @since 1.0.0
	     */
	    $wp_customize->add_setting(
	        'insurance_hub_testimonials_section_image',
		        array(
		            'capability'        => 'edit_theme_options',
		            'sanitize_callback' => 'insurance_hub_sanitize_image'
		        )
	    );

	    $wp_customize->add_control( new WP_Customize_Image_Control(
	        $wp_customize,
	        'insurance_hub_testimonials_section_image',
	        	array(
	            	'label'      => esc_html__( 'Testimonials Background Image', 'insurance-hub' ),
	               	'section'    => 'insurance_hub_testimonials_section',
	               	'priority'   => 29
	           	)
	       	)
	   	);

    
/*---------------------------------------------------------------------------------------*/
		/**
		 * Recent News Section*
		 * @since 1.0.0
		 */
		$wp_customize->add_section(
	        'insurance_hub_blog_section',
		        array(
		            'title'		=> esc_html__( 'Recent News', 'insurance-hub' ),
		            'panel'     => 'insurance_hub_homepage_settings_panel',
		            'priority'  => 27,
		        )  
	    );

	    /**
	     * Switch option for Recent News Section
	     *
	     * @since 1.0.0
	     */
	    $wp_customize->add_setting(
	        'insurance_hub_homepage_blog_option',
		        array(
		            'default'           => $default['insurance_hub_homepage_blog_option'],
		            'sanitize_callback' => 'insurance_hub_sanitize_select',
		        )
	    );
    
    $choices = insurance_hub_homepage_blog_option();
    
    $wp_customize->add_control(
	        'insurance_hub_homepage_blog_option',
	            array(
		            'type'          => 'radio',
		            'label'         => esc_html__( 'Recent News Section Option', 'insurance-hub' ),
		            'description' 	=> esc_html__( 'Show/hide option for Homepage Recent News Section.', 'insurance-hub' ),
		            'section'       => 'insurance_hub_blog_section',
		            'choices'       => $choices,
		            'priority'      => 5
	            )
	    );

 /**
	     * Field for Recent News section Id
	     *
	     * @since 1.0.0
	     */
	    $wp_customize->add_setting(
	        'insurance_hub_blog_section_id',
	            array(
	                'default'           => $default['insurance_hub_blog_section_id'],
	                'sanitize_callback' => 'sanitize_text_field',
	              
		       	)
	    );
	    $wp_customize->add_control(
	        'insurance_hub_blog_section_id',
	            array(
		            'type'     => 'text',
		            'label'    => esc_html__( 'Recent News Section Id', 'insurance-hub' ),
		            'section'  => 'insurance_hub_blog_section',
		            'priority' => 11
	            )
	    );

 
 /**
	     * Field for section title
	     *
	     * @since 1.0.0
	     */
	    $wp_customize->add_setting(
	        'insurance_hub_blog_section_title',
	            array(
	                'default'           => $default['insurance_hub_blog_section_title'],
	                'sanitize_callback' => 'sanitize_text_field',
	                
		       	)
	    );
	    $wp_customize->add_control(
	        'insurance_hub_blog_section_title',
	            array(
		            'type'     => 'text',
		            'label'    => esc_html__( 'Section Title', 'insurance-hub' ),
		            'section'  => 'insurance_hub_blog_section',
		            'priority' => 11
	            )
	    );

	    /**
	     * Field for section sub title
	     *
	     * @since 1.0.0
	     */
	    $wp_customize->add_setting(
	        'insurance_hub_blog_section_sub_title',
	            array(
	                'default'           => $default['insurance_hub_blog_section_sub_title'],
	                'sanitize_callback' => 'sanitize_text_field',
	              
		       	)
	    );
	    $wp_customize->add_control(
	        'insurance_hub_blog_section_sub_title',
	            array(
		            'type'     => 'text',
		            'label'    => esc_html__( 'Section Sub Title', 'insurance-hub' ),
		            'section'  => 'insurance_hub_blog_section',
		            'priority' => 12
	            )
	    );

 /**
	     *  for category
	     *
	     * @since 1.0.0
	     */
	    global $insurance_hub_categories_value;
	    $wp_customize->add_setting(
	        'insurance_hub_blog_categories_id',
		        array(
		            'default'           => $default['insurance_hub_blog_categories_id'],
		            'capability'        => 'edit_theme_options',
		            'sanitize_callback' => 'absint'
		        )
	    );
	   
	     $wp_customize->add_control( new Insurance_Hub_Customize_Post_Category_Control(
	        $wp_customize,
	        'insurance_hub_blog_categories_id',
		        array(
		            'label'       => esc_html__( 'Section Category', 'insurance-hub' ),
		            'description' => esc_html__( 'Select cateogry for Homepage Blog Section, by default latest post will display', 'insurance-hub' ),
		            'section'     => 'insurance_hub_blog_section',
		            'priority'    => 20,
		            
		        )
		    )
	    );

     
/*-------------------------------------------------------------------------------------------------*/
		/**
		 * Contact Us Section
		 *
		 * @since 1.0.0
		 */
		$wp_customize->add_section(
	        'insurance_hub_contact_section',
		        array(
		            'title'		=> esc_html__( 'Contact Us Section', 'insurance-hub' ),
		            'panel'     => 'insurance_hub_homepage_settings_panel',
		            'priority'  => 45,
		        )
	    );

	    
	    /**
	     * Switch option for Contact Us Section
	     *
	     * @since 1.0.0
	     */
	    $wp_customize->add_setting(
	        'insurance_hub_homepage_contact_option',
		        array(
		            'default'           => $default['insurance_hub_homepage_contact_option'],
		            'sanitize_callback' => 'insurance_hub_sanitize_select',
		        )
	    );
      
      $choices = insurance_hub_homepage_contact_option();

       $wp_customize->add_control(
	        'insurance_hub_homepage_contact_option',
	            array(
		            'type'          => 'radio',
		            'label'         => esc_html__( 'Contact Us Section Option', 'insurance-hub' ),
		            'description' 	=> esc_html__( 'Show/hide option for Homepage Contact Us Section.', 'insurance-hub' ),
		            'section'       => 'insurance_hub_contact_section',
		            'choices'       => $choices,
		            'priority'      => 5
	            )
	    );


    /**
	     * Field for section Id
	     *
	     * @since 1.0.0
	     */
	    $wp_customize->add_setting(
	        'insurance_hub_contact_section_id',
	            array(
	                'default'           =>  $default['insurance_hub_contact_section_id'] ,
	                'sanitize_callback' => 'sanitize_text_field',
	            
		       	)
	    );
	    $wp_customize->add_control(
	        'insurance_hub_contact_section_id',
	            array(
		            'type'     => 'text',
		            'label'    => esc_html__( 'Contact Us Section Id', 'insurance-hub' ),
		            'section'  => 'insurance_hub_contact_section',
		            'priority' => 10
	            )
	    );



	    /**
	     * Field for section title
	     *
	     * @since 1.0.0
	     */
	    $wp_customize->add_setting(
	        'insurance_hub_contact_section_title',
	            array(
	                'default'           => $default['insurance_hub_contact_section_title'] ,
	                'sanitize_callback' => 'sanitize_text_field',
	               
		       	)
	    );
	    $wp_customize->add_control(
	        'insurance_hub_contact_section_title',
	            array(
		            'type'     => 'text',
		            'label'    => esc_html__( 'Section Title', 'insurance-hub' ),
		            'section'  => 'insurance_hub_contact_section',
		            'priority' => 10
	            )
	    );

	    /**
	     * Field for section sub-title
	     *
	     * @since 1.0.0
	     */
	    $wp_customize->add_setting(
	        'insurance_hub_contact_section_sub_title',
	            array(
	                'default'           => $default['insurance_hub_contact_section_sub_title'],
	                'sanitize_callback' => 'sanitize_text_field',
	               
		       	)
	    );
	    $wp_customize->add_control(
	        'insurance_hub_contact_section_sub_title',
	            array(
		            'type'     => 'text',
		            'label'    => esc_html__( 'Section Sub Title', 'insurance-hub' ),
		            'section'  => 'insurance_hub_contact_section',
		            'priority' => 15
	            )
	    );

	    /**
	     * Field for Text editor
	     *
	     * @since 1.0.0
	     */

		   /**
			 *Contact us Shortcode Field
			 */
			$wp_customize->add_setting(
			    'insurance_hub_contact_section_form_editor',
			    array(
			          'sanitize_callback' => 'wp_kses_post',

			    )
			);

			$wp_customize->add_control( 'insurance_hub_contact_section_form_editor',
			    array(
			        'label'       => esc_html__( 'Contac Us Shortcode From Contact Form', 'insurance-hub'),
			        'description' => sprintf( esc_html__( 'Note: Please Create Contact Form Using Contact Form 7 And Paste Shortcode Here', 'insurance-hub')),
			        'section'     => 'insurance_hub_contact_section',
			        'type'        => 'text',
			        'priority'    => 20
			    )
			);

	   

/*----------------------------------------------------------------------------------------------*/
		/**
		 * Hero Section
		 *
		 * @since 1.0.0
		 */
		$wp_customize->add_section(
	        'insurance_hub_purchase_section',
		        array(
		            'title'		=>  $default['insurance_hub_purchase_section'],
		            'panel'     => 'insurance_hub_homepage_settings_panel',
		            'priority'  => 55,
		        )
	    );

	    /**
	     * Switch option for Homepage Hero Section
	     *
	     * @since 1.0.0
	     */
	    $wp_customize->add_setting(
	        'insurance_hub_homepage_hero_option',
		        array(
		            'default'           =>  $default['insurance_hub_homepage_hero_option'],
		            'transport'         => 'refresh',
		            'sanitize_callback' => 'insurance_hub_sanitize_select',
		        )
	    );
 $choices= insurance_hub_homepage_hero_option ();
 $wp_customize->add_control(
	        'insurance_hub_homepage_hero_option',
	            array(
		            'type'          => 'radio',
		            'label'         => esc_html__( ' Hero Section Option', 'insurance-hub' ),
		            'description' 	=> esc_html__( 'Show/hide option for Homepage Hero Section.', 'insurance-hub' ),
		            'section'       => 'insurance_hub_purchase_section',
		            'choices'       => $choices,
		            'priority'      => 8
	            )
	    );


	    /**
	     * Field for quote title
	     *
	     * @since 1.0.0
	     */
	    $wp_customize->add_setting(
	        'insurance_hub_hero_section_title',
	            array(
	                'default'           =>  $default['insurance_hub_hero_section_title'],
	                'sanitize_callback' => 'sanitize_text_field',
	              
		       	)
	    );
	    $wp_customize->add_control(
	        'insurance_hub_hero_section_title',
	            array(
		            'type'     => 'text',
		            'label'    => esc_html__( 'Hero Title', 'insurance-hub' ),
		            'section'  => 'insurance_hub_purchase_section',
		            'priority' => 14
	            )
	    );

	    	    
     /**
	     * Field for Get In purchase  button text
	     *
	     * @since 1.0.0
	     */
	    $wp_customize->add_setting(
	        'insurance_hub_hero_purchase_txt',
	            array(
	                'default'           =>  $default['insurance_hub_hero_purchase_txt'],
	                'sanitize_callback' => 'sanitize_text_field',
	              
		       	)
	    );
	    $wp_customize->add_control(
	        'insurance_hub_hero_purchase_txt',
	            array(
		            'type'     => 'text',
		            'label'    => esc_html__( 'Purchase Button', 'insurance-hub' ),
		            'section'  => 'insurance_hub_purchase_section',
		            'priority' => 15
	            )
	    );

   /**
	     * Field for Get In purchase button text Link
	     *
	     * @since 1.0.0
	     */
	    $wp_customize->add_setting(
	        'insurance_hub_hero_purchase_link',
	            array(
	                'default'           =>  $default['insurance_hub_hero_purchase_link'],
	                'sanitize_callback' => 'esc_url_raw',
	                'transport'         => 'refresh'
		       	)
	    );
	    $wp_customize->add_control(
	        'insurance_hub_hero_purchase_link',
	            array(
		            'type'     => 'url',
		            'label'    => esc_html__( 'Purchase Button Link', 'insurance-hub' ),
		            'section'  => 'insurance_hub_purchase_section',
		            'priority' => 15
	            )
	    );   