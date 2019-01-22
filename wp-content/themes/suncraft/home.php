<?php

	/**
	 * Template Name: Page - Home
	 */
	
	$page = get_page_by_template(__FILE__);
	
	if($page)
	{
		/*global $current_user;

		if(!$current_user->ID)
		{
			header('Location: ' . site_url('/login') . '?return=' . urlencode(get_permalink($page)));

			exit;
		}*/

		get_header();
 ?>

		<main>
			<img class="logo" src="/wp-content/themes/fryshuset/assets/images/logo.png"/>
			<div class="text_contain">
				<?php the_field("tagline");?>
			</div>
		</main>

		



<?php

		get_footer();
	}
	else
	{
		include get_template_directory() . '/404.php';
	}
