<?php

	/**
	 * Enqueue theme scripts & stylesheets
	 */

	add_action('wp_enqueue_scripts', function()
	{
		$theme = get_template_directory_uri();

		wp_enqueue_style('theme',       $theme . '/style.css');

		wp_enqueue_script('vendor',     $theme . '/assets/js/gsap.js');
		wp_enqueue_script('framework',  $theme . '/assets/js/index.js');

		wp_localize_script('framework', 'wp', array
		(
			"ajax_url" => admin_url('admin-ajax.php')
		));
	});
