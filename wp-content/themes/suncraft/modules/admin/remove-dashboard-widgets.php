<?php

	/**
	 * Removes the standard dashboard widgets
	 */

	add_action('wp_dashboard_setup', function()
	{
		global $wp_meta_boxes;

		if(isset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']))
		{
			unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']);
		}

		if(isset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']))
		{
			unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
		}

		if(isset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']))
		{
			unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
		}

		if(isset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']))
		{
			unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
		}

		if(isset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']))
		{
			unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
		}

		if(isset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']))
		{
			unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
		}

		if(isset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']))
		{
			unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
		}

		if(isset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']))
		{
			unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']);
		}

		if(isset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']))
		{
			unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
		}
	});
