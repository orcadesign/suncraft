<?php

	/**
	 * Recursively search the modules directory for extension files and include them
	 */
/*
	foreach(array('functions', 'modules') as $dir)
	{
		$objects = new RecursiveIteratorIterator(new RecursiveDirectoryIterator(__DIR__ . '/' . $dir), RecursiveIteratorIterator::SELF_FIRST);
		
		foreach($objects as $name => $object)
		{
			if(preg_match("/\.php$/i", $name))
			{
				require_once $name;
			}
		}
	}

*/


add_filter('show_admin_bar', '__return_false');

///.. post name change
// Function to change "posts" to " " in the admin side menu
function change_post_menu_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Blog Posts';
    $submenu['edit.php'][5][0] = 'Blog Posts';
    $submenu['edit.php'][10][0] = 'Add Blog Post';
    $submenu['edit.php'][16][0] = 'Tags';
    echo '';
}
add_action( 'admin_menu', 'change_post_menu_label' );
// Function to change post object labels to " "
function change_post_object_label() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'Blog Posts';
    $labels->singular_name = 'Blog Post';
    $labels->add_new = 'Add Blog Post';
    $labels->add_new_item = 'Add Blog Post';
    $labels->edit_item = 'Edit Blog Post';
    $labels->new_item = '  Blog Post';
    $labels->view_item = 'View Blog Post';
    $labels->search_items = 'Search Blog Posts';
    $labels->not_found = 'No Blog Posts found';
    $labels->not_found_in_trash = 'No Blog Posts found in Trash';
    $labels->rewrite = array( 'slug' => 'blog' );
}
add_action( 'init', 'change_post_object_label' );




/*
function create_post_type() {
  register_post_type( 'menu',
    array(
      'labels' => array(
        'name' => __( 'Menu Items' ),
        'singular_name' => __( 'Menu' ),
		  'menu_name'           => __( 'Menu' ),
        'parent_item_colon'   => __( 'Parent Menu Item:' ),
        'all_items'           => __( 'All Menu Items' ),
        'view_item'           => __( 'View Menu Item' ),
        'add_new_item'        => __( 'Add New Menu Item' ),
        'add_new'             => __( 'Add New Menu Item' ),
        'edit_item'           => __( 'Edit Menu Item' ),
        'update_item'         => __( 'Update Menu Item' ),
        'search_items'        => __( 'Search Menu Item' ),
        'not_found'           => __( 'No Menu Items found' ),
        'not_found_in_trash'  => __( 'Not found in Trash' ),
      ),
      'public' => true,
      'has_archive' => true,
		'rewrite' => array('slug' => 'fast-healthy-vegan'),
		'menu_icon' => 'dashicons-carrot',
    )
  );
}
add_action( 'init', 'create_post_type' );

*/


function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

add_action('wp_enqueue_scripts', function()
	{
		$theme = get_template_directory_uri();

		wp_enqueue_style('theme',       $theme . '/assets/css/style.css');
		wp_enqueue_style('mq',       $theme . '/assets/css/mq.css');
		wp_enqueue_style('slick css',       $theme . '/slick/slick.css');

		wp_enqueue_script('vendor',     $theme . '/assets/js/gsap-dist.js');
		wp_enqueue_script('slick js',     $theme . '/slick/slick.min.js');
		//wp_enqueue_script('framework',  $theme . '/assets/js/index-dist.js');

		wp_localize_script('framework', 'wp', array
		(
			"ajax_url" => admin_url('admin-ajax.php')
		));
	});



// custom menus
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Main Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );