<?php

	/**
	 * Remove theme header junk
	 */

	add_action('init', function()
	{
		remove_action('admin_print_scripts', 'print_emoji_detection_script');
		remove_action('admin_print_styles', 'print_emoji_styles');
		remove_action('wp_head', 'adjacent_posts_rel_link');
		remove_action('wp_head', 'feed_links');
		remove_action('wp_head', 'feed_links_extra');
		remove_action('wp_head', 'index_rel_link');
		remove_action('wp_head', 'print_emoji_detection_script', 7);
		remove_action('wp_head', 'rest_output_link_wp_head');
		remove_action('wp_head', 'rsd_link');
		remove_action('wp_head', 'start_post_rel_link');
		remove_action('wp_head', 'wlwmanifest_link');
		remove_action('wp_head', 'wp_generator');
		remove_action('wp_head', 'wp_oembed_add_discovery_links');
		remove_action('wp_head', 'wp_oembed_add_host_js');
		remove_action('wp_print_styles', 'print_emoji_styles');
		
		remove_filter('comment_text_rss', 'wp_staticize_emoji');
		remove_filter('the_content_feed', 'wp_staticize_emoji');
		remove_filter('wp_mail', 'wp_staticize_emoji_for_email');

		add_filter('emoji_svg_url', '__return_false');
	});