<?php
/**
		 * Theme Option
		 *
		 * @since 1.0.0
		 */
		$wp_customize->add_panel(
	        'insurance_hub_theme_options', 
	        	array(
	        		'priority'       => 7,
	            	'capability'     => 'edit_theme_options',
	            	'theme_supports' => '',
	            	'title'          => esc_html__( ' Theme Option', 'insurance-hub' ),
	            ) 
	    );


/*----------------------------------------------------------------------------------------------*/

    /**
		 * Header Info Section
		 *
		 * @since 1.0.0
		 */
		$wp_customize->add_section(
	        'insurance_hub_top_header_info_section', 
	        	array(
	        		'priority'  => 6,
	               	'title'     => esc_html__( 'Top Header Info', 'insurance-hub' ),
	               	'panel'     => 'insurance_hub_theme_options',
	            ) 
	    );


        $wp_customize->add_setting(
	        'insurance_hub_top_header_section',
		        array(
		            'default'           => $default['insurance_hub_top_header_section'],
		            'sanitize_callback' => 'insurance_hub_sanitize_select',
		        )
	    );
 $choices=insurance_hub_top_header_section();
$wp_customize->add_control(
    'insurance_hub_top_header_section',
        array(
            'type'          => 'radio',
            'label'         => esc_html__( 'Top Header Info Option', 'insurance-hub' ),
            'description' 	=> esc_html__( 'Show/hide option for Top Header Info Section.', 'insurance-hub' ),
            'section' => 'insurance_hub_top_header_info_section',
            'choices'   => $choices,
            'priority' =>5
        )
);


        /**
	     * Field for Fonsome Icon
	     *
	     * @since 1.0.0
	     */
         $wp_customize->add_setting(
	        'insurance_hub_phone_number_icon', 
	            array(
	                'default'           => $default['insurance_hub_phone_number_icon'],
	                'sanitize_callback' => 'sanitize_text_field',
	               	)
	      );

         $wp_customize->add_control(
	        'insurance_hub_phone_number_icon',
	            array(
		            'type'          => 'text',
		            'description' 	=> esc_html__( 'Insert Fontawesome Class Name', 'insurance-hub' ),
		            'section'       => 'insurance_hub_top_header_info_section',
		            'priority'      => 6
	            )
	    );

    /**
	     * Field for Top Header Phone Number
	     *
	     * @since 1.0.0
	     */
	    $wp_customize->add_setting(
	        'insurance_hub_top_header_phone_no', 
	            array(
	                'default' => $default['insurance_hub_top_header_phone_no'], 
	                'sanitize_callback' => 'sanitize_text_field',
	               
		       	)
	    );
	    $wp_customize->add_control(
	        'insurance_hub_top_header_phone_no',
	            array(
		            'type'     => 'text',
		            'label'    => esc_html__( 'Phone Number', 'insurance-hub' ),
		            'section'  => 'insurance_hub_top_header_info_section',
		            'priority' => 8
	            )
	    );	

/**
	     * Field for Fonsome Icon
	     *
	     * @since 1.0.0
	     */
         $wp_customize->add_setting(
	        'insurance_hub_email_icon', 
	            array(
	                'default'           => $default['insurance_hub_email_icon'],
	                'sanitize_callback' => 'sanitize_text_field',
	                
		       	)
	      );

         $wp_customize->add_control(
	        'insurance_hub_email_icon',
	            array(
		            'type'          => 'text',
		            'description' 	=> esc_html__( 'Insert Fontawesome Class Name', 'insurance-hub' ),
		            'section'       => 'insurance_hub_top_header_info_section',
		            'priority'      => 8
	            )
	    );

      /**
	     * Field for Top Header Email Address
	     *
	     * @since 1.0.0
	     */
	    $wp_customize->add_setting(
	        'insurance_hub_top_header_email', 
	            array(
	                'default'           =>  $default['insurance_hub_top_header_email'],
	                'sanitize_callback' => 'sanitize_email',
	              
		       	)
	    );
	    $wp_customize->add_control(
	        'insurance_hub_top_header_email',
	            array(
		            'type'     => 'email',
		            'label'    => esc_html__( 'Email Address', 'insurance-hub' ),
		            'section'  => 'insurance_hub_top_header_info_section',
		            'priority' => 8
	            )
	    );	

	  /*-------------------------------------------------------------------------------------------*/
		/**
		 * Breadcrumb Options
		 *
		 * @since 1.0.0
		 */
		$wp_customize->add_section(
	        'insurance_hub_breadcrump_option',
		        array(
		            'title'		=> esc_html__( 'Breadcrumb Options', 'insurance-hub' ),
		            'panel'     => 'insurance_hub_theme_options',
		            'priority'  => 6,
		        )
	    );  
    
      /**
		 * Breadcrumb Option
	  */
        $wp_customize->add_setting(
	        'insurance_hub_breadcrump_option', 
	            array(
	                'default'           =>  $default['insurance_hub_breadcrump_option'],
	                'sanitize_callback' => 'insurance_hub_sanitize_select',
	               
		       	)
	    );
	   
	 $choices=insurance_hub_breadcrump_option();   
     $wp_customize->add_control('insurance_hub_breadcrump_option',
            array(
            'label'      => esc_html__('Breadcrumb Options','insurance-hub'),
	        'section'   => 'insurance_hub_breadcrump_option',
	         'choices'   => $choices,
            'type'	  	=> 'select',
            'priority'  => 10
         )
    ); 
    
               		 
 /*-------------------------------------------------------------------------------------------*/
		/**
		 * Pagination Options
		 *
		 * @since 1.0.0
		 */
		$wp_customize->add_section(
	        'insurance_hub_pagination_option',
		        array(
		            'title'		=> esc_html__( 'Pagination Options', 'insurance-hub' ),
		           'panel'     => 'insurance_hub_theme_options',
		            'priority'  => 12,
		        )
	    );  
    
      


/*-------------------------------------------------------------------------------------------*/
		/**
		 * Search Placeholder
		 *
		 * @since 1.0.0
		 */
		$wp_customize->add_section(
	        'insurance_hub_search_option',
		        array(
		            'title'		=> esc_html__( 'Search', 'insurance-hub' ),
		            'panel'     => 'insurance_hub_theme_options',
		            'priority'  => 12,
		        )
	    );  
    
      /**
		 *Search Placeholder
	  */
        $wp_customize->add_setting(
	        'insurance_hub_post_search_placeholder_option', 
	            array(
	                'default'           => $default['insurance_hub_post_search_placeholder_option'],
	                'sanitize_callback' => 'sanitize_text_field',
	               
		          	)
	       );
	    
	   $wp_customize->add_control('insurance_hub_post_search_placeholder_option',
            array(
            'label'      => __('Search Placeholder','insurance-hub'),
           'section'   => 'insurance_hub_search_option',
            'type'	  	=> 'text',
            'priority'  => 10
         )
    );   
	
/*-------------------------------------------------------------------------------------------*/
		/**
		 * Intro Loader Options
		 *
		 * @since 1.0.0
		 */
		$wp_customize->add_section(
	        'insurance_hub_intro_loader_option',
		        array(
		            'title'		   => esc_html__( 'Preloader Options', 'insurance-hub' ),
		            'description'  => esc_html__( 'If you do not select any intro image, default intro will display.', 'insurance-hub' ),
		            'panel'        => 'insurance_hub_theme_options',
		            'priority'     => 6,
		        )
	    );  
    
     
       /**
	     * Upload image control for section
	     *
	     * @since 1.0.0
	     */
	    $wp_customize->add_setting(
	        'insurance_hub_loader_image',
		        array(
		           'capability'        => 'edit_theme_options',
		            'sanitize_callback' => 'esc_url_raw'
		        )
	    );

	    $wp_customize->add_control( new WP_Customize_Image_Control(
	        $wp_customize,
	        'insurance_hub_loader_image',
	        	array(
	            	'label'      => esc_html__( 'Preloader Image', 'insurance-hub' ),
	               	'section'    => 'insurance_hub_intro_loader_option',
	               	'priority' => 9
	           	)
	       	)
	   	);

/*Loder Bg Color*/
$wp_customize->add_setting( 'insurance_hub_loader_bg_color', array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $default['insurance_hub_loader_bg_color'],
    'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( 'insurance_hub_loader_bg_color', array(
    'label'		=> esc_html__( 'Background Color', 'insurance-hub' ),
    'section'   => 'insurance_hub_intro_loader_option',
    'type'	  	=> 'color',
    'priority'  => 20
) );

/*Loder Enable Intro Loader*/
$wp_customize->add_setting( 'insurance_hub_loder_enable', array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $default['insurance_hub_loder_enable'],
    'sanitize_callback' => 'insurance_hub_sanitize_checkbox'
) );

$wp_customize->add_control( 'insurance_hub_loder_enable', array(
    'label'		=> __( 'Enable Preloader', 'insurance-hub' ),
    'section'   => 'insurance_hub_intro_loader_option',
    'type'	  	=> 'checkbox',
    'priority'  => 20
) );

/*-------------------------------------------------------------------------------------------*/
		/**
		 * Copyright Text
		 *
		 * @since 1.0.0
		 */
		$wp_customize->add_section(
	        'insurance_hub_footer_text_option',
		        array(
		            'title'		=> esc_html__( 'Footer Option', 'insurance-hub' ),
		           'panel'      => 'insurance_hub_theme_options',
		            'priority'  => 12,
		        )
	    );  
    
      /**
		 *CopyRight Text
	  */
        $wp_customize->add_setting(
	        'insurance_hub_copyright_text_option', 
	            array(
	                'default'           =>  $default['insurance_hub_copyright_text_option'],
	                'sanitize_callback' => 'wp_kses_post',
	               
		       	)
	    );
	    
	   $wp_customize->add_control('insurance_hub_copyright_text_option',
            array(
            'label'     => esc_html__('Copyright','insurance-hub'),
           'section'    => 'insurance_hub_footer_text_option',
            'type'	  	=> 'text',
            'priority'  => 10
         )
    );   

 

/*Enable Social Icon on Footer Text*/

	$wp_customize->add_setting( 'insurance_hub_hide_footer_social_icon', array(
	    'capability'		=> 'edit_theme_options',
	    'default'			=> $default['insurance_hub_hide_footer_social_icon'], 
	    'sanitize_callback' => 'insurance_hub_sanitize_checkbox'
	) );

	$wp_customize->add_control( 'insurance_hub_hide_footer_social_icon', array(
	    'label'		=> __( 'Enable/Disable Footer Social Icon', 'insurance-hub' ),
	    'section'   => 'insurance_hub_footer_text_option',
	    'type'	  	=> 'checkbox',
	    'priority'  => 20
	) );


/*-------------------------------------------------------------------------------------------*/
		/**
		 * Reset Options
		 *
		 * @since 1.0.0
		 */
		$wp_customize->add_section(
	        'insurance_hub_reset_option',
		        array(
		            'title'		=> esc_html__( 'Reset Options', 'insurance-hub' ),
		           'panel'      => 'insurance_hub_theme_options',
		            'priority'  => 12,
		        )
	    );  
    
      /**
		 *Reset Options
	  */
        $wp_customize->add_setting(
	        'insurance_hub_reset_value_option', 
	            array(
	                'default'           =>'do-not-reset',
	                'sanitize_callback' => 'insurance_hub_sanitize_select',
	            	)
	    );
	    $reset_option = insurance_hub_reset_option();
	   $wp_customize->add_control('insurance_hub_reset_value_option',
            array(
            'label'      => esc_html__('Reset Options','insurance-hub'),
            'description'=> sprintf( __( 'Caution: Reset theme settings will reset theme color and font only. Refresh the page after saving to view the effects', 'insurance-hub' )),
            'section'   => 'insurance_hub_reset_option',
            'type'	  	=> 'select',
            'choices'   => $reset_option,
            'priority'  => 10
         )
    );   
