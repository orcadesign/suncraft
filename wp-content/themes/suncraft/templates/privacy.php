<?php

	/**
	 * Template Name: Page - Privacy
	 */

get_header(); ?>
<div class="container top find">
	<h1><?php the_field("page_title"); ?></h1>
</div>
</main>
	<div class="site" id="privacy">
		<section class="default">
			<center class="wrapper">
				<article class="formatting">
					<?php the_field('privacy_content'); ?>
					<?php the_content();?>
				</article>
			</center>
		</section>
		<!-- ./default  -->

<?php get_footer(); ?>