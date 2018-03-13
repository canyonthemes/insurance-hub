<?php
/**
		 * Layout/Design Option
		 *
		 * @since 1.0.0
		 */
		$wp_customize->add_panel(
	        'insurance_hub_design_layout_options', 
	        	array(
	        		'priority'       => 7,
	            	'capability'     => 'edit_theme_options',
	            	'theme_supports' => '',
	            	'title'          => esc_html__( ' Layout/Design Option', 'insurance-hub' ),
	            ) 
	    );

	  /*-------------------------------------------------------------------------------------------*/
		/**
		 * Sidebar Option
		 *
		 * @since 1.0.0
		 */
		$wp_customize->add_section(
	        'insurance_hub_default_sidbar_layout_option',
		        array(
		            'title'		=> esc_html__( 'Default Sidebar Layout Option', 'insurance-hub' ),
		            'panel'     => 'insurance_hub_design_layout_options',
		            'priority'  => 6,
		        )
	    );  
    
      /**
		 * Sidebar Option
	  */
        $wp_customize->add_setting(
	        'insurance_hub_sidebar_layout_option', 
	            array(
	                'default'           => $default['insurance_hub_sidebar_layout_option'] ,
	                'sanitize_callback' => 'insurance_hub_sanitize_select',
	                'transport'         => 'refresh'
		       	)
	    );
	    
		
     $layout = insurance_hub_sidebar_layout();
     $wp_customize->add_control('insurance_hub_sidebar_layout_option',
            array(
           'label'         => esc_html__('Default Sidebar Layout','insurance-hub'),
	        'description'  => esc_html__('Home/front page does not have sidebar. Inner Pages like blog, archive single page/post Sidebar Layout. However single page/post sidebar can be overridden.', 'insurance-hub'),
	        'section'     => 'insurance_hub_default_sidbar_layout_option',
            'type'	  	  => 'select',
             'choices'    => $layout,
            'priority'    => 10
         )
    ); 
    
               		
/**
		 * Blog/Archive Layout Image display options
		 *
		 * @since 1.0.0
		 */
		$wp_customize->add_section(
	        'insurance_hub_blog_layout_option',
		        array(
		            'title'		=> esc_html__( 'Blog/Archive Layout Option', 'insurance-hub' ),
		            'panel'     => 'insurance_hub_design_layout_options',
		            'priority'  => 6,
		        )
	    );  
    
               		 
/**
		 * Description Length In Words
	  */
        $wp_customize->add_setting(
	        'insurance_hub_description_lenght_option', 
	            array(
	                'default'           =>  $default['insurance_hub_description_lenght_option'],
	                'sanitize_callback' => 'absint',
	                'transport'         => 'refresh'
		       	)
	    );
	    $wp_customize->add_control('insurance_hub_description_lenght_option',
            array(
            'label'        => esc_html__('Description Length In Words','insurance-hub'),
             'description' => esc_html__('Please enter -1 to show full content or 0 to show none.', 'insurance-hub'),
	        'section'      => 'insurance_hub_blog_layout_option',
            'type'	  	   => 'number',
            'priority'     => 10
         )
    ); 

	/**
		 * Exclude Categories In Blog/Archive Pages
	  */
        $wp_customize->add_setting(
	        'insurance_hub_exclude_cat_blog_archive_option', 
	            array(
		                'default'           => $default['insurance_hub_exclude_cat_blog_archive_option'],
		                'sanitize_callback' => 'sanitize_text_field',
	                )
	    );
	    $wp_customize->add_control('insurance_hub_exclude_cat_blog_archive_option',
            array(
            'label'       => esc_html__('Exclude Categories In Blog/Archive Pages','insurance-hub'),
            'description' => esc_html__('Enter categories ids with comma separated eg: 2,7,14,47. For including all categories left blank', 'insurance-hub'),
            'section'     => 'insurance_hub_blog_layout_option',
            'type'	  	  => 'text',
            'priority'    => 10
         )
    ); 
    
 	/**
		 *   Show Date
	  */
        $wp_customize->add_setting(
	        'insurance_hub_blog_show_date_option', 
	            array(
	                  'default'           => $default['insurance_hub_blog_show_date_option'],
	                  'sanitize_callback' => 'insurance_hub_sanitize_checkbox',
	               	)
	    );
	    $wp_customize->add_control('insurance_hub_blog_show_date_option',
            array(
            'label'     => esc_html__('Show Date','insurance-hub'),
            'section'   => 'insurance_hub_blog_layout_option',
            'type'	  	=> 'checkbox',
            'priority'  => 10
         )
    );     

  /**
		 *   Show Author
	  */
        $wp_customize->add_setting(
	        'insurance_hub_blog_show_author_option', 
	            array(
		                'default'           =>  $default['insurance_hub_blog_show_author_option'],
		                'sanitize_callback' => 'insurance_hub_sanitize_checkbox',
	             
		       	     )
	    );
	    $wp_customize->add_control('insurance_hub_blog_show_author_option',
            array(
            'label'     => esc_html__('Show Author','insurance-hub'),
            'section'   => 'insurance_hub_blog_layout_option',
            'type'	  	=> 'checkbox',
            'priority'  => 10
         )
    );   

  /**
		 *   Show Cats
	  */
        $wp_customize->add_setting(
	        'insurance_hub_blog_show_cats_option', 
	            array(
	                'default'           => $default['insurance_hub_blog_show_cats_option'],
	                'sanitize_callback' => 'insurance_hub_sanitize_checkbox',
	               
		       	)
	    );
	    $wp_customize->add_control('insurance_hub_blog_show_cats_option',
            array(
            'label'     => esc_html__('Show Cats','insurance-hub'),
            'section'   => 'insurance_hub_blog_layout_option',
            'type'	  	=> 'checkbox',
            'priority'  => 10
         )
    ); 

   /**
		 *   Show Tags
	  */
        $wp_customize->add_setting(
	        'insurance_hub_blog_show_tags_option', 
	            array(
	                'default'           =>$default['insurance_hub_blog_show_tags_option'],
	                'sanitize_callback' => 'insurance_hub_sanitize_checkbox',
	               
		        	)
	    );
	    $wp_customize->add_control('insurance_hub_blog_show_tags_option',
            array(
            'label'     => esc_html__('Show Tags','insurance-hub'),
            'section'   => 'insurance_hub_blog_layout_option',
            'type'	  	=> 'checkbox',
            'priority'  => 10
         )
    ); 

	/**
		 *   Show Comments
	  */
        $wp_customize->add_setting(
	        'insurance_hub_blog_show_comments_option', 
	            array(
	                'default'           => $default['insurance_hub_blog_show_comments_option'],
	                'sanitize_callback' => 'insurance_hub_sanitize_checkbox',
	               
		       	)
	    );
	    $wp_customize->add_control('insurance_hub_blog_show_comments_option',
            array(
            'label'     => esc_html__('Show Comments','insurance-hub'),
            'section'   => 'insurance_hub_blog_layout_option',
            'type'	  	=> 'checkbox',
            'priority'  => 10
         )
    ); 

 /*-------------------------------------------------------------------------------------------*/
		/**
		 * Author Info Options
		 *
		 * @since 1.0.0
		 */
		$wp_customize->add_section(
	        'insurance_hub_author_info_option',
		        array(
		            'title'		=> esc_html__( 'Author Info Options', 'insurance-hub' ),
		            'panel'     => 'insurance_hub_design_layout_options',
		            'priority'  => 6,
		        )
	    );  
    
      /**
		 * Show Author Info
	  */
        $wp_customize->add_setting(
	        'insurance_hub_show_author_info_option', 
	            array(
	                'default'           =>  $default['insurance_hub_show_author_info_option'],
	                'sanitize_callback' => 'insurance_hub_sanitize_select',
	                'transport'         => 'refresh'
		       	)
	    );
	    
		$choices=insurance_hub_show_author_info_option();
   
        $wp_customize->add_control(
	        'insurance_hub_show_author_info_option',
	            array(
		            'type'     => 'radio',
		            'label'    => esc_html__( 'Show/Hide Show Author Info', 'insurance-hub' ),
		            'section'  => 'insurance_hub_author_info_option',
		            'choices'  => $choices,
		            'priority' => 5
	            )
	    );

     /*-------------------------------------------------------------------------------------------*/
		/**
		 * Feature Image Option
		 *
		 * @since 1.0.0
		 */
		$wp_customize->add_section(
	        'insurance_hub_feature_image_info_option',
		        array(
		            'title'		=> esc_html__( 'Feature Image Option For Single Page', 'insurance-hub' ),
		            'panel'     => 'insurance_hub_design_layout_options',
		            'priority'  => 6,
		        )
	    );  
    
     
    /**
		 * Feature Image Option Single page
	  */
        $wp_customize->add_setting(
	        'insurance_hub_show_feature_image_single_option', 
	            array(
	                   'default'           =>   $default['insurance_hub_show_feature_image_single_option'],
	                   'sanitize_callback' => 'insurance_hub_sanitize_select',
	                 )
	    );
	    
		$choices=insurance_hub_show_feature_image_single_option();
      $wp_customize->add_control(
	        'insurance_hub_show_feature_image_single_option',
	            array(
		            'type'     => 'radio',
		            'label'    => esc_html__( 'Show/Hide Feature Image For Single Page', 'insurance-hub' ),
		            'section'  => 'insurance_hub_feature_image_info_option',
		            'choices'  =>$choices,
		            'priority' =>5
	            )
	    );



  /*-------------------------------------------------------------------------------------------*/
		


 