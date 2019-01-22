<?php

	/**
	 * Register sidebars
	 */

	add_action('widgets_init', function()
	{
		register_sidebar(array
		(
			"before_title"  => "<h2 class=\"widget-title\">",
			"after_title"   => "</h2>",
			"before_widget" => '<div id="%1$s" class="widget %2$s">',
			"after_widget"  => "</div>",
			"description"   => "Footer sidebar 1.",
			"id"            => "footer-sidebar-one",
			"name"          => "Footer Sidebar 1"
		));

		register_sidebar(array
		(
			"before_title"  => "<h2 class=\"widget-title\">",
			"after_title"   => "</h2>",
			"before_widget" => '<div id="%1$s" class="widget %2$s">',
			"after_widget"  => "</div>",
			"description"   => "Footer sidebar 2.",
			"id"            => "footer-sidebar-two",
			"name"          => "Footer Sidebar 2"
		));
	});