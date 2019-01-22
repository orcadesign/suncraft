<?php

	/**
	 * Add options to the theme customiser
	 */

	add_action('customize_register', function($wp_customize)
	{
		$wp_customize->remove_control('site_icon');
		
		$wp_customize->add_setting('accent_color', array
		(
			'capability'        => 'edit_theme_options',
			'default'           => '#CCCCCC',
			'sanitize_callback' => 'sanitize_hex_color',
			'type'              => 'option'
		));

		$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'accent_color', array
		(
			'label'    => 'Accent Colour',
			'section'  => 'title_tagline',
			'settings' => 'accent_color'
		)));
	});
