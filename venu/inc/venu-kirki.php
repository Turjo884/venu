<?php

// panel name
new \Kirki\Panel(
	'venu_panel_id',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'Venu Options', 'kirki' ),
		'description' => esc_html__( 'My Panel Description.', 'kirki' ),
	]
);

// header image section
function header_logo_kirki(){

	new \Kirki\Section(
		'header_logo_section',
		[
			'title'       => esc_html__( 'Header Logo', 'kirki' ),
			'description' => esc_html__( 'My Section Description.', 'kirki' ),
			'panel'       => 'venu_panel_id',
			'priority'    => 160,
		]
	);
	
	// Image Widget
	new \Kirki\Field\Image(
		[
			'settings'    => 'header_logo',
			'label'       => esc_html__( 'Header Logo', 'kirki' ),
			'description' => esc_html__( 'Upload your logo here', 'kirki' ),
			'section'     => 'header_logo_section',
			'default'     => get_template_directory_uri().'/assets/img/logo.png',
		]
	);
	
}

header_logo_kirki();


// footer image section
function footer_section_kirki(){

	new \Kirki\Section(
		'footer_section',
		[
			'title'       => esc_html__( 'Footer', 'kirki' ),
			'description' => esc_html__( 'My Section Description.', 'kirki' ),
			'panel'       => 'venu_panel_id',
			'priority'    => 160,
		]
	);
	
	// Image Widget
	new \Kirki\Field\Image(
		[
			'settings'    => 'footer_logo',
			'label'       => esc_html__( 'Footer Logo', 'kirki' ),
			'description' => esc_html__( 'Upload your logo here', 'kirki' ),
			'section'     => 'footer_section',
			'default'     => get_template_directory_uri().'/assets/img/footer_logo.png',
		]
	);

	// Under Footer Text
	new \Kirki\Field\Textarea(
		[
			'settings'    => 'footer_text',
			'label'       => esc_html__( 'Textarea Control', 'kirki' ),
			'section'     => 'footer_section',
			'default'     => esc_html__( 'Submit Your Text', 'kirki' ),
		]
	);
	
}

footer_section_kirki();


// footer social section
function footer_social_kirki(){
	new \Kirki\Section(
		'footer_social_info',
		[
			'title'       => esc_html__( 'Footer Social', 'kirki' ),
			'description' => esc_html__( 'My Section Description.', 'kirki' ),
			'panel'       => 'venu_panel_id',
			'priority'    => 160,
		]
	);
	
	// My code follow us tittle
	new \Kirki\Field\Text(
		[
			'settings' => 'follow_us_tittle',
			'label'    => esc_html__( 'Follow Us Tittle', 'kirki' ),
			'section'  => 'footer_social_info',
			'default'  => esc_html__( 'Follow Us', 'kirki' ),
			'priority' => 10,
		]
	);
	
	new \Kirki\Field\Text(
		[
			'settings' => 'social_fb',
			'label'    => esc_html__( 'Facebook URL', 'kirki' ),
			'section'  => 'footer_social_info',
			'default'  => esc_html__( '#', 'kirki' ),
			'priority' => 10,
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'social_tw',
			'label'    => esc_html__( 'Twitter URL', 'kirki' ),
			'section'  => 'footer_social_info',
			'default'  => esc_html__( '#', 'kirki' ),
			'priority' => 10,
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'social_in',
			'label'    => esc_html__( 'LinkedIn URL', 'kirki' ),
			'section'  => 'footer_social_info',
			'default'  => esc_html__( '#', 'kirki' ),
			'priority' => 10,
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'social_insta',
			'label'    => esc_html__( 'Instagram URL', 'kirki' ),
			'section'  => 'footer_social_info',
			'default'  => esc_html__( '#', 'kirki' ),
			'priority' => 10,
		]
	);
}
footer_social_kirki();
