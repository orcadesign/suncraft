<?php

	/**
	 * Limit admin access to Admins and Editors
	 */
	
	add_action('init', function()
	{
		if(is_admin() and !current_user_can('administrator') and !current_user_can('editor') and !current_user_can('author'))
		{
			wp_redirect(site_url('/wp-admin'));
			
			exit;
		}
	});
