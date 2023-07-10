<?php

if ( class_exists("Kirki")){

	Kirki::add_config('theme_config_id', array(
		'capability'   =>  'edit_theme_options',
		'option_type'  =>  'theme_mod',
	));

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cafe_elementor_enable_logo_text',
		'section'     => 'title_tagline',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Site Title and Tagline', 'cafe-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'cafe_elementor_display_header_title',
		'label'       => esc_html__( 'Site Title Enable / Disable Button', 'cafe-elementor' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'cafe-elementor' ),
			'off' => esc_html__( 'Disable', 'cafe-elementor' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'cafe_elementor_display_header_text',
		'label'       => esc_html__( 'Tagline Enable / Disable Button', 'cafe-elementor' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'cafe-elementor' ),
			'off' => esc_html__( 'Disable', 'cafe-elementor' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cafe_elementor_site_tittle_font_heading',
		'section'     => 'title_tagline',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Site Title Font Size', 'cafe-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'cafe_elementor_site_tittle_font_size',
		'type'        => 'number',
		'section'     => 'title_tagline',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array('.logo a'),
				'property' => 'font-size',
				'suffix' => 'px'
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cafe_elementor_site_tagline_font_heading',
		'section'     => 'title_tagline',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Site Tagline Font Size', 'cafe-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'cafe_elementor_site_tagline_font_size',
		'type'        => 'number',
		'section'     => 'title_tagline',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array('.logo span'),
				'property' => 'font-size',
				'suffix' => 'px'
			),
		),
	) );

	// HEADER SECTION

	Kirki::add_section( 'cafe_elementor_section_header', array(
	    'title'          => esc_html__( 'Header Settings', 'cafe-elementor' ),
	    'description'    => esc_html__( 'Here you can add header information.', 'cafe-elementor' ),
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cafe_elementor_menu_size_heading',
		'section'     => 'cafe_elementor_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Menu Font Size(px)', 'cafe-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'cafe_elementor_menu_size',
		'label'       => __( 'Enter a value in pixels. Example:20px', 'cafe-elementor' ),
		'type'        => 'text',
		'section'     => 'cafe_elementor_section_header',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array( '#main-menu a', '#main-menu ul li a', '#main-menu li a'),
				'property' => 'font-size',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cafe_elementor_menu_text_transform_heading',
		'section'     => 'cafe_elementor_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Menu Text Transform', 'cafe-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'settings'    => 'cafe_elementor_menu_text_transform',
		'section'     => 'cafe_elementor_section_header',
		'default'     => 'uppercase',
		'choices'     => [
			'none' => esc_html__( 'Normal', 'cafe-elementor' ),
			'uppercase' => esc_html__( 'Uppercase', 'cafe-elementor' ),
			'lowercase' => esc_html__( 'Lowercase', 'cafe-elementor' ),
			'capitalize' => esc_html__( 'Capitalize', 'cafe-elementor' ),
		],
		'output' => array(
			array(
				'element'  => array( '#main-menu a', '#main-menu ul li a', '#main-menu li a'),
				'property' => ' text-transform',
			),
		),
	 ) );

	 Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'cafe_elementor_menu_color',
		'label'       => __( 'Menu Color', 'cafe-elementor' ),
		'type'        => 'color',
		'section'     => 'cafe_elementor_section_header',
		'transport' => 'auto',
		'default'     => '#121212',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => array( '#main-menu a', '#main-menu ul li a', '#main-menu li a'),
				'property' => 'color',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'cafe_elementor_menu_hover_color',
		'label'       => __( 'Menu Hover Color', 'cafe-elementor' ),
		'type'        => 'color',
		'default'     => '#A06F48',
		'section'     => 'cafe_elementor_section_header',
		'transport' => 'auto',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => array( '#main-menu a:hover', '#main-menu ul li a:hover', '#main-menu li:hover > a','#main-menu a:focus','#main-menu li.focus > a','#main-menu ul li.current-menu-item > a','#main-menu ul li.current_page_item > a','#main-menu ul li.current-menu-parent > a','#main-menu ul li.current_page_ancestor > a','#main-menu ul li.current-menu-ancestor > a'),
				'property' => 'color',
			),

		),
	) );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'cafe_elementor_submenu_color',
		'label'       => __( 'Submenu Color', 'cafe-elementor' ),
		'type'        => 'color',
		'section'     => 'cafe_elementor_section_header',
		'transport' => 'auto',
		'default'     => '#121212',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => array( '#main-menu ul.children li a', '#main-menu ul.sub-menu li a'),
				'property' => 'color',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'cafe_elementor_submenu_hover_color',
		'label'       => __( 'Submenu Hover Color', 'cafe-elementor' ),
		'type'        => 'color',
		'section'     => 'cafe_elementor_section_header',
		'transport' => 'auto',
		'default'     => '#fff',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => array( '#main-menu ul.children li a:hover', '#main-menu ul.sub-menu li a:hover'),
				'property' => 'color',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'cafe_elementor_submenu_hover_background_color',
		'label'       => __( 'Submenu Hover Background Color', 'cafe-elementor' ),
		'type'        => 'color',
		'section'     => 'cafe_elementor_section_header',
		'transport' => 'auto',
		'default'     => '#A06F48',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => array( '#main-menu ul.children li a:hover', '#main-menu ul.sub-menu li a:hover'),
				'property' => 'background',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cafe_elementor_header_phone_number_heading',
		'section'     => 'cafe_elementor_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Add Phone Number', 'cafe-elementor' ) . '</h3>',
	] );

	
	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'cafe_elementor_header_phone_number',
		'section'  => 'cafe_elementor_section_header',
		'default'  => '',
		'sanitize_callback' => 'cafe_elementor_sanitize_phone_number',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cafe_elementor_enable_email_heading',
		'section'     => 'cafe_elementor_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Add Email Address', 'cafe-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'cafe_elementor_header_email',
		'section'  => 'cafe_elementor_section_header',
		'default'  => '',
		'sanitize_callback' => 'sanitize_email',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cafe_elementor_enable_location_heading',
		'section'     => 'cafe_elementor_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Add Address', 'cafe-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'cafe_elementor_header_location',
		'section'  => 'cafe_elementor_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cafe_elementor_enable_button_heading',
		'section'     => 'cafe_elementor_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Get Started Button', 'cafe-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'url',
		'label'    =>  esc_html__( 'Button Link', 'cafe-elementor' ),
		'settings' => 'cafe_elementor_header_button_url',
		'section'  => 'cafe_elementor_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'    => esc_html__( 'Button Text', 'cafe-elementor' ),
		'settings' => 'cafe_elementor_header_button_text',
		'section'  => 'cafe_elementor_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'cafe_elementor_cart_box_enable',
		'label'       => esc_html__( 'Enable/Disable Shopping Cart', 'cafe-elementor' ),
		'section'     => 'cafe_elementor_section_header',
		'default'     => 'on',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'cafe-elementor' ),
			'off' => esc_html__( 'Disable', 'cafe-elementor' ),
		],
	] );


	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cafe_elementor_enable_socail_link',
		'section'     => 'cafe_elementor_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Social Media Link', 'cafe-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'repeater',
		'section'     => 'cafe_elementor_section_header',
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Social Icon', 'cafe-elementor' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__('Add New Social Icon', 'cafe-elementor' ),
		'settings'     => 'cafe_elementor_social_links_settings',
		'default'      => '',
		'fields' 	   => [
			'link_text' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon', 'cafe-elementor' ),
				'description' => esc_html__( 'Add the fontawesome class ex: "fab fa-facebook-f".', 'cafe-elementor' ),
				'default'     => '',
			],
			'link_url' => [
				'type'        => 'url',
				'label'       => esc_html__( 'Social Link', 'cafe-elementor' ),
				'description' => esc_html__( 'Add the social icon url here.', 'cafe-elementor' ),
				'default'     => '',
			],
		],
		'choices' => [
			'limit' => 20
		],
	] );

	// TYPOGRAPHY SETTINGS
	Kirki::add_panel( 'cafe_elementor_typography_panel', array(
		'priority' => 10,
		'title'    => __( 'Typography', 'cafe-elementor' ),
	) );

	//Heading 1 Section

	Kirki::add_section( 'cafe_elementor_h1_typography_setting', array(
		'title'    => __( 'Heading 1', 'cafe-elementor' ),
		'panel'    => 'cafe_elementor_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cafe_elementor_h1_typography_heading',
		'section'     => 'cafe_elementor_h1_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 1 Typography', 'cafe-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'cafe_elementor_h1_typography_font',
		'section'   =>  'cafe_elementor_h1_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Jost',
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h1',
				'suffix' => '!important'
			],
		],
	) );


	//Heading 2 Section

	Kirki::add_section( 'cafe_elementor_h2_typography_setting', array(
		'title'    => __( 'Heading 2', 'cafe-elementor' ),
		'panel'    => 'cafe_elementor_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cafe_elementor_h2_typography_heading',
		'section'     => 'cafe_elementor_h2_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 2 Typography', 'cafe-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'cafe_elementor_h2_typography_font',
		'section'   =>  'cafe_elementor_h2_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Jost',
			'font-size'       => '',
			'variant'       =>  '700',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h2',
				'suffix' => '!important'
			],
		],
	) );

	//Heading 3 Section

	Kirki::add_section( 'cafe_elementor_h3_typography_setting', array(
		'title'    => __( 'Heading 3', 'cafe-elementor' ),
		'panel'    => 'cafe_elementor_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cafe_elementor_h3_typography_heading',
		'section'     => 'cafe_elementor_h3_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 3 Typography', 'cafe-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'cafe_elementor_h3_typography_font',
		'section'   =>  'cafe_elementor_h3_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Jost',
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h3',
				'suffix' => '!important'
			],
		],
	) );

	//Heading 4 Section

	Kirki::add_section( 'cafe_elementor_h4_typography_setting', array(
		'title'    => __( 'Heading 4', 'cafe-elementor' ),
		'panel'    => 'cafe_elementor_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cafe_elementor_h4_typography_heading',
		'section'     => 'cafe_elementor_h4_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 4 Typography', 'cafe-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'cafe_elementor_h4_typography_font',
		'section'   =>  'cafe_elementor_h4_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Jost',
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h4',
				'suffix' => '!important'
			],
		],
	) );

	//Heading 5 Section

	Kirki::add_section( 'cafe_elementor_h5_typography_setting', array(
		'title'    => __( 'Heading 5', 'cafe-elementor' ),
		'panel'    => 'cafe_elementor_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cafe_elementor_h5_typography_heading',
		'section'     => 'cafe_elementor_h5_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 5 Typography', 'cafe-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'cafe_elementor_h5_typography_font',
		'section'   =>  'cafe_elementor_h5_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Jost',
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h5',
				'suffix' => '!important'
			],
		],
	) );

	//Heading 6 Section

	Kirki::add_section( 'cafe_elementor_h6_typography_setting', array(
		'title'    => __( 'Heading 6', 'cafe-elementor' ),
		'panel'    => 'cafe_elementor_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cafe_elementor_h6_typography_heading',
		'section'     => 'cafe_elementor_h6_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 6 Typography', 'cafe-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'cafe_elementor_h6_typography_font',
		'section'   =>  'cafe_elementor_h6_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Jost',
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h6',
				'suffix' => '!important'
			],
		],
	) );

	//body Typography

	Kirki::add_section( 'cafe_elementor_body_typography_setting', array(
		'title'    => __( 'Content Typography', 'cafe-elementor' ),
		'panel'    => 'cafe_elementor_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cafe_elementor_body_typography_heading',
		'section'     => 'cafe_elementor_body_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Content  Typography', 'cafe-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'cafe_elementor_body_typography_font',
		'section'   =>  'cafe_elementor_body_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Jost',
			'variant'       =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   => 'body',
				'suffix' => '!important'
			],
		],
	) );

	//ADDITIONAL SETTINGS

	Kirki::add_section( 'cafe_elementor_additional_setting', array(
		'title'          => esc_html__( 'Additional Settings', 'cafe-elementor' ),
		'description'    => esc_html__( 'Additional Settings of themes', 'cafe-elementor' ),
		'priority'       => 10,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'cafe_elementor_preloader_hide',
		'label'       => esc_html__( 'Here you can enable or disable your preloader.', 'cafe-elementor' ),
		'section'     => 'cafe_elementor_additional_setting',
		'default'     => '0',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'cafe_elementor_scroll_enable_setting',
		'label'       => esc_html__( 'Here you can enable or disable your scroller.', 'cafe-elementor' ),
		'section'     => 'cafe_elementor_additional_setting',
		'default'     => '0',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cafe_elementor_header_background_attachment_heading',
		'section'     => 'cafe_elementor_additional_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Header Image Attachment', 'cafe-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'settings'    => 'cafe_elementor_header_background_attachment',
		'section'     => 'cafe_elementor_additional_setting',
		'default'     => 'scroll',
		'choices'     => [
			'scroll' => esc_html__( 'Scroll', 'cafe-elementor' ),
			'fixed' => esc_html__( 'Fixed', 'cafe-elementor' ),
		],
		'output' => array(
			array(
				'element'  => '.header-image-box',
				'property' => 'background-attachment',
			),
		),
	 ) );

	// POST SECTION

	Kirki::add_section( 'cafe_elementor_blog_post', array(
		'title'          => esc_html__( 'Post Settings', 'cafe-elementor' ),
		'description'    => esc_html__( 'Here you can add post information.', 'cafe-elementor' ),
		'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'cafe_elementor_date_hide',
		'label'       => esc_html__( 'Enable / Disable Post Date', 'cafe-elementor' ),
		'section'     => 'cafe_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'cafe_elementor_author_hide',
		'label'       => esc_html__( 'Enable / Disable Post Author', 'cafe-elementor' ),
		'section'     => 'cafe_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'cafe_elementor_comment_hide',
		'label'       => esc_html__( 'Enable / Disable Post Comment', 'cafe-elementor' ),
		'section'     => 'cafe_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'cafe_elementor_blog_post_featured_image',
		'label'       => esc_html__( 'Enable / Disable Post Image', 'cafe-elementor' ),
		'section'     => 'cafe_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cafe_elementor_length_setting_heading',
		'section'     => 'cafe_elementor_blog_post',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Blog Post Content Limit', 'cafe-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'cafe_elementor_length_setting',
		'section'     => 'cafe_elementor_blog_post',
		'default'     => '15',
		'priority'    => 10,
		'choices'  => [
					'min'  => -10,
					'max'  => 40,
						'step' => 1,
				],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'label'       => esc_html__( 'Enable / Disable Single Post Tag', 'cafe-elementor' ),
		'settings'    => 'cafe_elementor_single_post_tag',
		'section'     => 'cafe_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'label'       => esc_html__( 'Enable / Disable Single Post Category', 'cafe-elementor' ),
		'settings'    => 'cafe_elementor_single_post_category',
		'section'     => 'cafe_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'cafe_elementor_single_post_featured_image',
		'label'       => esc_html__( 'Enable / Disable Single Post Image', 'cafe-elementor' ),
		'section'     => 'cafe_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cafe_elementor_single_post_radius',
		'section'     => 'cafe_elementor_blog_post',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Single Post Image Border Radius(px)', 'cafe-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'cafe_elementor_single_post_border_radius',
		'label'       => __( 'Enter a value in pixels. Example:15px', 'cafe-elementor' ),
		'type'        => 'text',
		'section'     => 'cafe_elementor_blog_post',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array('.post-img img'),
				'property' => 'border-radius',
			),
		),
	) );
	
	// FOOTER SECTION

	Kirki::add_section( 'cafe_elementor_footer_section', array(
        'title'          => esc_html__( 'Footer Settings', 'cafe-elementor' ),
        'description'    => esc_html__( 'Here you can change copyright text', 'cafe-elementor' ),
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cafe_elementor_footer_text_heading',
		'section'     => 'cafe_elementor_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Text', 'cafe-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'cafe_elementor_footer_text',
		'section'  => 'cafe_elementor_footer_section',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cafe_elementor_footer_enable_heading',
		'section'     => 'cafe_elementor_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Footer Link', 'cafe-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'cafe_elementor_copyright_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'cafe-elementor' ),
		'section'     => 'cafe_elementor_footer_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'cafe-elementor' ),
			'off' => esc_html__( 'Disable', 'cafe-elementor' ),
		],
	] );
}
