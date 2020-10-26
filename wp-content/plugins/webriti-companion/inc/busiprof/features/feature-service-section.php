<?php
$repeater_path = trailingslashit( WC__PLUGIN_DIR ) . '/inc/controls/customizer-repeater/functions.php';
	if ( file_exists( $repeater_path ) ) {
		require_once( $repeater_path );
	}

// customizer serive panel
function busiprof_service_customizer_service_panel( $wp_customize ) {

$selective_refresh = isset( $wp_customize->selective_refresh ) ? true : false;

	/* Services section */
	$wp_customize->add_section( 'services_section' , array(
		'title'    => esc_html__( 'Service settings', 'webriti-companion' ),
		'panel'  => 'section_settings',
		'priority'   => 2,
   	) );
	
	
	// Enable service more btn
		$wp_customize->add_setting( 'busiprof_theme_options[enable_services]' , array( 'default' => 'on' , 'type'=>'option', 'sanitize_callback' => 'busiprof_sanitize_radio' ) );
		$wp_customize->add_control(	'busiprof_theme_options[enable_services]' , array(
				'label'    => esc_html__( 'Enable Services on homepage', 'webriti-companion' ),
				'section'  => 'services_section',
				'type'     => 'radio',
				'priority'   => 1,
				'choices' => array(
					'on'=>esc_html__('ON','webriti-companion'),
					'off'=>esc_html__('OFF','webriti-companion')
				)
		));
		
		
		//Service Heading One
		$wp_customize->add_setting(
		'busiprof_theme_options[service_heading_one]',
		array(
			'default' => esc_html__('Awesome Services','webriti-companion'),
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'busiprof_input_field_sanitize_text',
			'type' => 'option',
		)	
		);
		$wp_customize->add_control(
		'busiprof_theme_options[service_heading_one]',
		array(
			'label' => esc_html__('Title','webriti-companion'),
			'section' => 'services_section',
			'type' => 'text',
			'priority'   => 2,
		)
		);
		
		//Service Tagline Description
		$wp_customize->add_setting(
		'busiprof_theme_options[service_tagline]',
		array(
			'default' => esc_html__('We are a group of passionate designers and developers who really love creating awesome WordPress themes & giving support.','webriti-companion'),
			'sanitize_callback' => 'busiprof_input_field_sanitize_text',
			'type' => 'option',
		)	
		);
		$wp_customize->add_control(
		'busiprof_theme_options[service_tagline]',
		array(
			'label' => esc_html__('Description','webriti-companion'),
			'section' => 'services_section',
			'type' => 'textarea',
			'priority'   => 3,
		)
		);	
	

	
		if ( class_exists( 'Webriti_Companion_Repeater' ) ) {
			$wp_customize->add_setting( 'busiprof_service_content', array(
				'sanitize_callback' => 'webriti_companion_repeater_sanitize',
			) );

			$wp_customize->add_control( new Webriti_Companion_Repeater( $wp_customize, 'busiprof_service_content', array(
				'label'                             => esc_html__( 'Service content', 'webriti-companion' ),
				'section'                           => 'services_section',
				'priority'                          => 4,
				'add_field_label'                   => esc_html__( 'Add new Service', 'webriti-companion' ),
				'item_name'                         => esc_html__( 'Service', 'webriti-companion' ),
				'customizer_repeater_icon_control'  => true,
				'customizer_repeater_title_control' => true,
				'customizer_repeater_text_control'  => true,
				'customizer_repeater_link_control'  => true,
				'customizer_repeater_color_control' => true,
				'customizer_repeater_image_control' => true,
				) ) );
		}
		
			
		// Services Read More Text
		$wp_customize->add_setting( 'busiprof_theme_options[service_button_value]', 
		array( 'default' => esc_html__('More Services','webriti-companion') , 'type'=>'option', 'sanitize_callback' => 'busiprof_input_field_sanitize_text' ) );
		$wp_customize->add_control(	'busiprof_theme_options[service_button_value]', 
			array(
				'label'    => esc_html__('Button Text', 'webriti-companion' ),
				'section'  => 'services_section',
				'type'     => 'text',
				'priority'   => 5,
		));
		
		// Services Read More Button URL
		$wp_customize->add_setting( 'busiprof_theme_options[service_link_btn]', array( 'default' => '#' , 'type'=>'option', 'sanitize_callback' => 'esc_url_raw' ) );
		$wp_customize->add_control(	'busiprof_theme_options[service_link_btn]', 
			array(
				'label'    => esc_html__('Button Link', 'webriti-companion' ),
				'section'  => 'services_section',
				'type'     => 'text',
				'priority'   => 6,
		));			
			
}
add_action( 'customize_register', 'busiprof_service_customizer_service_panel' );

/**
 * Add selective refresh for service title section controls.
 */
function busiprof_register_service_section_partials( $wp_customize ){

	$wp_customize->selective_refresh->add_partial( 'busiprof_theme_options[service_heading_one]', array(
		'selector'            => '.service .section-title .section-heading',
		'settings'            => 'busiprof_theme_options[service_heading_one]',
	
	) );
	
	$wp_customize->selective_refresh->add_partial( 'busiprof_theme_options[service_tagline]', array(
		'selector'            => '.service .section-title p',
		'settings'            => 'busiprof_theme_options[service_tagline]',
	
	) );
	
	
	$wp_customize->selective_refresh->add_partial( 'busiprof_theme_options[service_icon_one]', array(
		'selector'            => '.service #service_content',
		'settings'            => 'busiprof_theme_options[service_icon_one]',
	
	) );
	
	$wp_customize->selective_refresh->add_partial( 'busiprof_theme_options[service_button_value]', array(
		'selector'            => '.services_more_btn',
		'settings'            => 'busiprof_theme_options[service_button_value]',
	
	) );
}
add_action( 'customize_register', 'busiprof_register_service_section_partials' );