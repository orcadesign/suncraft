<?php

	/**
	 * Customize the default WordPress login screen
	 */

	add_action('login_enqueue_scripts', function()
	{
		$wp_styles = wp_styles();

		wp_dequeue_style('login');

		wp_enqueue_script('jquery');
		wp_enqueue_style('admin-login', get_template_directory_uri() . '/assets/css/compiled/admin-login.css');
	});

	add_filter('login_headerurl', function()
	{
		return wp_login_url();
	});

	add_filter('login_form_defaults', function($args = array())
	{
		$args['label_username'] = 'Email Address';

		return $args;
	});

	add_filter('login_headertitle', function()
	{ ?>

		<input type="checkbox" id="mobile_menu" />
		<header class="site-header">
			<label for="mobile_menu" class="header-mobile-menu">
				<span class="mobile-menu-button">
					<span class="spoke-top"></span>
					<span class="spoke-bottom"></span>
				</span>
			</label>
			<center class="wrapper">
				<a href="<?=site_url('/')?>" class="site-title"><? bloginfo('name'); ?></a>
				<nav class="main-menu"><?
		wp_nav_menu(array
		(
			"link_before"    => "<font>",
			"link_after"     => "</font>",
			"container"      => false,
			"theme_location" => "main-menu"
		)); ?>

				</nav>
			</center>
		</header>
		<main class="site">
			<section class="banner account login">
				<center class="wrapper"><?
	});

	add_action('login_footer', function()
	{ ?>

				</center>
			</section><?

		include get_template_directory() . '/footer.php'; ?>

		<script type="text/javascript">jQuery(function($)
		{
			var form = $('#login form');

			form.find('label .input').each(function()
			{
				var input = $(this),
					label = input.closest('label');

				label
					.find('br')
					.remove();
				
				label
					.addClass('input')
					.contents()
					.filter(function(){ return !!$(this).text().trim() })
					.wrap('<font></font>');

				input
					.removeClass('input')
					.appendTo(label);

				if(label.attr('for') == 'user_login')
				{
					label
						.find('font')
						.html('Email Address');
				}
			});

			form.find('.forgetmenot label').each(function()
			{
				var label = $(this).unwrap(),
					input = label.find('input');

				label
					.addClass('checkbox')
					.contents()
					.filter(function(){ return !!$(this).text().trim() })
					.wrap('<font>');

				input
					.prependTo(label);
			});
		})</script><?
	});
