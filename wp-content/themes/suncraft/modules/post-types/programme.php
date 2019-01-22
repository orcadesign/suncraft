<?php

	/**
	 * Register the 'Project' post type
	 */

	add_action('init', function()
	{
		register_post_type('Programme', array
		(
			'has_archive'   => true,
			'labels'        => array
			(
				'name'               => 'Projects',
				'singular_name'      => 'Project',
				'menu_name'          => 'Projects',
				'name_admin_bar'     => 'Project',
				'add_new'            => 'Add Project',
				'add_new_item'       => 'Add New Project',
				'new_item'           => 'New Project',
				'edit_item'          => 'Edit Project',
				'view_item'          => 'View Project',
				'view_items'         => 'View Projects',
				'all_items'          => 'All Projects',
				'search_items'       => 'Search Projects',
				'parent_item_colon'  => 'Parent Projects:',
				'not_found'          => 'No Projects Found.',
				'not_found_in_trash' => 'No Projects Found in Trash.'
			),
			'menu_icon'     => 'dashicons-list-view',
			'public'        => true,
			'rewrite'       => array
			(
				'slug' => 'programmes'
			),
			'supports'      => array
			(
				'title', 
				'author'
			)
		));
	});
