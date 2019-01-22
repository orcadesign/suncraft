<?php

	/**
	 * Retrieve a post object based on its template file
	 * @version  0.0.2
	 * @param    string       $template  The file name of the page template
	 * @return   WP_Post|NULL            The resulting post object or NULL if not found
	 */	
	function get_page_by_template($template)
	{
		global $wpdb;

		$template = esc_sql(str_ireplace(get_template_directory() . '/', '', $template));
		$post     = $wpdb->get_row("SELECT post_id FROM {$wpdb->postmeta} WHERE meta_key = '_wp_page_template' AND meta_value = '{$template}'");

		if(!empty($post))
		{
			return get_post($post->post_id);
		}

		return NULL;
	}
