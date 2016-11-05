<?php
function danny_sanitize_default( $value ) {
	return $value;
}

/** Danny - Customizer - Add Settings */
function danny_register_theme_customizer( $wp_customize )
{
	/** Add Sections -----------------------------------------------------------------------------------------------------------*/
    $wp_customize->add_section( 'danny_new_section_blog_layout', array(
   		'title'        => 'Blog Layout',
   		'description'  => null
	) );
    $wp_customize->add_section( 'danny_new_section_promobox', array(
   		'title'        => 'Promo Box',
   		'description'  => null
	) );
    $wp_customize->add_section( 'danny_new_section_header', array(
   		'title'        => 'Logo upload',
   		'description'  => null
	) );
    $wp_customize->add_section( 'danny_new_section_featured' , array(
		'title'       => 'Featured Area Settings',
		'description' => ''
	) );
    $wp_customize->add_section( 'danny_new_section_social_media', array(
   		'title'        => 'Social Media Settings',
   		'description'  => 'Enter your social media usernames. Icons will not show if left blank.'
	) );
    $wp_customize->add_section( 'danny_new_section_footer', array(
   		'title'        => 'Footer Settings',
   		'description'  => ''
	) );
    $wp_customize->add_section( 'danny_new_section_color_accent', array(
   		'title'        => 'Colors: Accent',
   		'description'  => ''
	) );
    $wp_customize->add_section( 'danny_new_section_custom_css', array(
   		'title'        => 'Custom CSS',
   		'description'  => 'Add your custom CSS which will overwrite the theme CSS'
	) );

    /** Add Settings ------------------------------------------------------------------------------------------------------------*/
    
    /** Blog layout settings */
    $wp_customize->add_setting( 'danny_blog_layout', array(
        'default' => 'standard',
        'sanitize_callback' => 'danny_sanitize_default'
    ) );
    
    $wp_customize->add_setting( 'danny_archive_layout', array(
        'default' => 'standard',
        'sanitize_callback' => 'danny_sanitize_default'
    ) );
    
    $wp_customize->add_setting( 'danny_hompage_disable_sidebar', array(
        'default' => '',
        'sanitize_callback' => 'danny_sanitize_default'
    ) );
    
    $wp_customize->add_setting( 'danny_archive_disable_sidebar', array(
        'default' => '',
        'sanitize_callback' => 'danny_sanitize_default'
    ) );
    
    $wp_customize->add_setting( 'danny_single_post_disable_sidebar', array(
        'default' => '',
        'sanitize_callback' => 'danny_sanitize_default'
    ) );
    
    $wp_customize->add_setting( 'danny_homepage_limit_posts', array(
        'default' => '10',
        'sanitize_callback' => 'danny_sanitize_default'
    ) );
    
    $wp_customize->add_setting( 'danny_archive_limit_posts', array(
        'default' => '10',
        'sanitize_callback' => 'danny_sanitize_default'
    ) );
    
    /** PromoBox */
    $wp_customize->add_setting( 'danny_promobox_show', array(
        'default' => '',
        'sanitize_callback' => 'danny_sanitize_default'
    ) );
    
    $wp_customize->add_setting( 'danny_promobox_one_title', array(
        'default' => '',
        'sanitize_callback' => 'danny_sanitize_default'
    ) );
    
    $wp_customize->add_setting( 'danny_promobox_one_link', array(
        'default' => '',
        'sanitize_callback' => 'danny_sanitize_default'
    ) );
    
    $wp_customize->add_setting( 'danny_promobox_one_image', array(
        'default' => '',
        'sanitize_callback' => 'danny_sanitize_default'
    ) );
    
    $wp_customize->add_setting( 'danny_promobox_two_title', array(
        'default' => '',
        'sanitize_callback' => 'danny_sanitize_default'
    ) );
    
    $wp_customize->add_setting( 'danny_promobox_two_link', array(
        'default' => '',
        'sanitize_callback' => 'danny_sanitize_default'
    ) );
    
    $wp_customize->add_setting( 'danny_promobox_two_image', array(
        'default' => '',
        'sanitize_callback' => 'danny_sanitize_default'
    ) );
    
    $wp_customize->add_setting( 'danny_promobox_three_title', array(
        'default' => '',
        'sanitize_callback' => 'danny_sanitize_default'
    ) );
    
    $wp_customize->add_setting( 'danny_promobox_three_link', array(
        'default' => '',
        'sanitize_callback' => 'danny_sanitize_default'
    ) );
    
    $wp_customize->add_setting( 'danny_promobox_three_image', array(
        'default' => '',
        'sanitize_callback' => 'danny_sanitize_default'
    ) );
    
    // Featured area
	$wp_customize->add_setting( 'danny_featured_slider', array(
        'default' => false,
        'sanitize_callback' => 'danny_sanitize_default'
    ) );
	$wp_customize->add_setting( 'danny_featured_cat', array(
        'default' => '',
        'sanitize_callback' => 'danny_sanitize_default'
    ) );
	$wp_customize->add_setting( 'danny_featured_id', array(
        'default' => '',
        'sanitize_callback' => 'danny_sanitize_default'
    ) );
	$wp_customize->add_setting( 'danny_featured_slider_slides', array(
        'default' => '5',
        'sanitize_callback' => 'danny_sanitize_default'
    ) );
    // Header and Logo
    $wp_customize->add_setting( 'danny_logo', array(
        'default'           => '',
        'sanitize_callback' => 'danny_sanitize_default'
    ) );
    $wp_customize->add_setting( 'danny_logo_footer', array(
        'default'           => '',
        'sanitize_callback' => 'danny_sanitize_default'
    ) );
    // Social media settings
    $wp_customize->add_setting( 'danny_facebook', array(
        'default'           => '',
        'sanitize_callback' => 'danny_sanitize_default'
    ) );
    $wp_customize->add_setting( 'danny_twitter', array(
        'default'           => '',
        'sanitize_callback' => 'danny_sanitize_default'
    ) );
    $wp_customize->add_setting( 'danny_instagram', array(
        'default'           => '',
        'sanitize_callback' => 'danny_sanitize_default'
    ) );
    $wp_customize->add_setting( 'danny_pinterest', array(
        'default'           => '',
        'sanitize_callback' => 'danny_sanitize_default'
    ) );
    $wp_customize->add_setting( 'danny_tumblr', array(
        'default'           => '',
        'sanitize_callback' => 'danny_sanitize_default'
    ) );
    $wp_customize->add_setting( 'danny_bloglovin', array(
        'default'           => '',
        'sanitize_callback' => 'danny_sanitize_default'
    ) );
    $wp_customize->add_setting( 'danny_tumblr', array(
        'default'           => '',
        'sanitize_callback' => 'danny_sanitize_default'
    ) );
    $wp_customize->add_setting( 'danny_google', array(
        'default'           => '',
        'sanitize_callback' => 'danny_sanitize_default'
    ) );
    $wp_customize->add_setting( 'danny_youtube', array(
        'default'           => '',
        'sanitize_callback' => 'danny_sanitize_default'
    ) );
    $wp_customize->add_setting( 'danny_dribbble', array(
        'default'           => '',
        'sanitize_callback' => 'danny_sanitize_default'
    ) );
    $wp_customize->add_setting( 'danny_soundcloud', array(
        'default'           => '',
        'sanitize_callback' => 'danny_sanitize_default'
    ) );    
    $wp_customize->add_setting( 'danny_vimeo', array(
        'default'           => '',
        'sanitize_callback' => 'danny_sanitize_default'
    ) );
    $wp_customize->add_setting( 'danny_linkedin', array(
        'default'           => '',
        'sanitize_callback' => 'danny_sanitize_default'
    ) );
    // Accent
    $wp_customize->add_setting( 'danny_accent_color', array(
        'default'           => '#f37e7e',
        'sanitize_callback' => 'danny_sanitize_default'
    ) );    
    // Footer
    $wp_customize->add_setting( 'danny_footer_disable_social', array(
        'default'           => '',
        'sanitize_callback' => 'danny_sanitize_default'
    ) );
    $wp_customize->add_setting( 'danny_footer_copyright', array(
        'default'           => '',
        'sanitize_callback' => 'danny_sanitize_default'
    ) );
    $wp_customize->add_setting( 'danny_logo_footer', array(
        'default'           => '',
        'sanitize_callback' => 'danny_sanitize_default'
    ) );
    // Custom CSS
	$wp_customize->add_setting( 'danny_custom_css', array(
        'default'           => '',
        'sanitize_callback' => 'danny_sanitize_default'
    ) );
    
    /** Add Constrol ------------------------------------------------------------------------------------------------------------*/
    // Logo
    $wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'upload_logo',
			array(
				'label'      => 'Upload logo top',
				'section'    => 'danny_new_section_header',
				'settings'   => 'danny_logo',
				'priority'	 => 1
			)
		)
	);
    
    /** PromoBox */
    $wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'danny_promobox_show',
			array(
				'label'      => 'Show Promobox',
				'section'    => 'danny_new_section_promobox',
				'settings'   => 'danny_promobox_show',
				'type'		 => 'checkbox'
			)
		)
	);
    
    $wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'danny_promobox_one_title',
			array(
				'label'      => 'Box 1 # Title',
				'section'    => 'danny_new_section_promobox',
				'settings'   => 'danny_promobox_one_title',
				'type'		 => 'text'
			)
		)
	);
    
    $wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'danny_promobox_one_link',
			array(
				'label'      => 'Box 1 # URL',
				'section'    => 'danny_new_section_promobox',
				'settings'   => 'danny_promobox_one_link',
				'type'		 => 'text'
			)
		)
	);
    
    $wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'danny_promobox_one_image',
			array(
				'label'      => 'Box 1 # Image',
				'section'    => 'danny_new_section_promobox',
				'settings'   => 'danny_promobox_one_image'
			)
		)
	);
    
    $wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'danny_promobox_two_title',
			array(
				'label'      => 'Box 2 # Title',
				'section'    => 'danny_new_section_promobox',
				'settings'   => 'danny_promobox_two_title',
				'type'		 => 'text'
			)
		)
	);
    
    $wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'danny_promobox_two_link',
			array(
				'label'      => 'Box 2 # URL',
				'section'    => 'danny_new_section_promobox',
				'settings'   => 'danny_promobox_two_link',
				'type'		 => 'text'
			)
		)
	);
    
    $wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'danny_promobox_two_image',
			array(
				'label'      => 'Box 2 # Image',
				'section'    => 'danny_new_section_promobox',
				'settings'   => 'danny_promobox_two_image'
			)
		)
	);
    
    $wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'danny_promobox_three_title',
			array(
				'label'      => 'Box 3 # Title',
				'section'    => 'danny_new_section_promobox',
				'settings'   => 'danny_promobox_three_title',
				'type'		 => 'text'
			)
		)
	);
    
    $wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'danny_promobox_three_link',
			array(
				'label'      => 'Box 3 # URL',
				'section'    => 'danny_new_section_promobox',
				'settings'   => 'danny_promobox_three_link',
				'type'		 => 'text'
			)
		)
	);
    
    $wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'danny_promobox_three_image',
			array(
				'label'      => 'Box 3 # Image',
				'section'    => 'danny_new_section_promobox',
				'settings'   => 'danny_promobox_three_image'
			)
		)
	);
    
    // Blog layout
    $wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'danny_blog_layout',
			array(
				'label'          => 'Homepage Layout',
				'section'        => 'danny_new_section_blog_layout',
				'settings'       => 'danny_blog_layout',
				'type'           => 'radio',
				'choices'        => array(
					'standard' => 'Standard Blog Layout',
					'grid' => 'Grid Blog Layout'
				)
			)
		)
	);
    
    $wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'danny_archive_layout',
			array(
				'label'          => 'Archive Layout',
				'section'        => 'danny_new_section_blog_layout',
				'settings'       => 'danny_archive_layout',
				'type'           => 'radio',
				'choices'        => array(
					'standard' => 'Standard Blog Layout',
					'grid' => 'Grid Blog Layout'
				)
			)
		)
	);
    
    $wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'danny_hompage_disable_sidebar',
			array(
				'label'      => 'Hide sidebar on HOMEPAGE',
				'section'    => 'danny_new_section_blog_layout',
				'settings'   => 'danny_hompage_disable_sidebar',
				'type'		 => 'checkbox'
			)
		)
	);
    
    $wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'danny_archive_disable_sidebar',
			array(
				'label'      => 'Hide sidebar on ARCHIVE',
				'section'    => 'danny_new_section_blog_layout',
				'settings'   => 'danny_archive_disable_sidebar',
				'type'		 => 'checkbox'
			)
		)
	);
    
    $wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'danny_single_post_disable_sidebar',
			array(
				'label'      => 'Hide sidebar on SINGLE POST',
				'section'    => 'danny_new_section_blog_layout',
				'settings'   => 'danny_single_post_disable_sidebar',
				'type'		 => 'checkbox'
			)
		)
	);
    
    $wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'danny_homepage_limit_posts',
			array(
				'label'      => 'Homepage #Posts per page',
				'section'    => 'danny_new_section_blog_layout',
				'settings'   => 'danny_homepage_limit_posts',
				'type'		 => 'text'
			)
		)
	);
    
    $wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'danny_archive_limit_posts',
			array(
				'label'      => 'Archive #Posts per page',
				'section'    => 'danny_new_section_blog_layout',
				'settings'   => 'danny_archive_limit_posts',
				'type'		 => 'text'
			)
		)
	);
    
    // Featured area
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'featured_slider',
			array(
				'label'      => 'Enable Featured Slider',
				'section'    => 'danny_new_section_featured',
				'settings'   => 'danny_featured_slider',
				'type'		 => 'checkbox',
				'priority'	 => 2
			)
		)
	);
    
	$wp_customize->add_control(
		new WP_Customize_Category_Control(
			$wp_customize,
			'featured_cat',
			array(
				'label'    => 'Select Featured Category',
				'settings' => 'danny_featured_cat',
				'section'  => 'danny_new_section_featured',
				'priority'	 => 3
			)
		)
	);	
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'featured_id',
			array(
				'label'      => 'Select featured post/page IDs',
				'section'    => 'danny_new_section_featured',
				'settings'   => 'danny_featured_id',
				'type'		 => 'text',
				'priority'	 => 4
			)
		)
	);
	
	$wp_customize->add_control(
		new Customize_Number_Control(
			$wp_customize,
			'featured_slider_slides',
			array(
				'label'      => 'Amount of Slides',
				'section'    => 'danny_new_section_featured',
				'settings'   => 'danny_featured_slider_slides',
				'type'		 => 'number',
				'priority'	 => 5
			)
		)
	);
    // Social Media
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'facebook',
			array(
				'label'      => 'Facebook',
				'section'    => 'danny_new_section_social_media',
				'settings'   => 'danny_facebook',
				'type'		 => 'text',
				'priority'	 => 1
			)
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'twitter',
			array(
				'label'      => 'Twitter',
				'section'    => 'danny_new_section_social_media',
				'settings'   => 'danny_twitter',
				'type'		 => 'text',
				'priority'	 => 2
			)
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'instagram',
			array(
				'label'      => 'Instagram',
				'section'    => 'danny_new_section_social_media',
				'settings'   => 'danny_instagram',
				'type'		 => 'text',
				'priority'	 => 3
			)
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'pinterest',
			array(
				'label'      => 'Pinterest',
				'section'    => 'danny_new_section_social_media',
				'settings'   => 'danny_pinterest',
				'type'		 => 'text',
				'priority'	 => 4
			)
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'bloglovin',
			array(
				'label'      => 'Bloglovin',
				'section'    => 'danny_new_section_social_media',
				'settings'   => 'danny_bloglovin',
				'type'		 => 'text',
				'priority'	 => 5
			)
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'google',
			array(
				'label'      => 'Google Plus',
				'section'    => 'danny_new_section_social_media',
				'settings'   => 'danny_google',
				'type'		 => 'text',
				'priority'	 => 6
			)
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'tumblr',
			array(
				'label'      => 'Tumblr',
				'section'    => 'danny_new_section_social_media',
				'settings'   => 'danny_tumblr',
				'type'		 => 'text',
				'priority'	 => 7
			)
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'youtube',
			array(
				'label'      => 'Youtube',
				'section'    => 'danny_new_section_social_media',
				'settings'   => 'danny_youtube',
				'type'		 => 'text',
				'priority'	 => 8
			)
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'dribbble',
			array(
				'label'      => 'Dribbble',
				'section'    => 'danny_new_section_social_media',
				'settings'   => 'danny_dribbble',
				'type'		 => 'text',
				'priority'	 => 9
			)
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'soundcloud',
			array(
				'label'      => 'Soundcloud',
				'section'    => 'danny_new_section_social_media',
				'settings'   => 'danny_soundcloud',
				'type'		 => 'text',
				'priority'	 => 10
			)
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'vimeo',
			array(
				'label'      => 'Vimeo',
				'section'    => 'danny_new_section_social_media',
				'settings'   => 'danny_vimeo',
				'type'		 => 'text',
				'priority'	 => 11
			)
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'linkedin',
			array(
				'label'      => 'Linkedin (Use full URL to your Linkedin profile)',
				'section'    => 'danny_new_section_social_media',
				'settings'   => 'danny_linkedin',
				'type'		 => 'text',
				'priority'	 => 12
			)
		)
	);
	// Accent
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'accent_color',
			array(
				'label'      => 'Accent Color',
				'section'    => 'danny_new_section_color_accent',
				'settings'   => 'danny_accent_color',
				'priority'	 => 1
			)
		)
	);
    // Footer
    $wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'footer_copyright',
			array(
				'label'      => 'Footer copyright text',
				'section'    => 'danny_new_section_footer',
				'settings'   => 'danny_footer_copyright',
				'type'		 => 'text',
				'priority'	 => 2
			)
		)
	);
    // Custom CSS
	$wp_customize->add_control(
		new Customize_CustomCss_Control(
			$wp_customize,
			'custom_css',
			array(
				'label'      => 'Custom CSS',
				'section'    => 'danny_new_section_custom_css',
				'settings'   => 'danny_custom_css',
				'type'		 => 'custom_css',
				'priority'	 => 1
			)
		)
	);
}
add_action( 'customize_register', 'danny_register_theme_customizer' );