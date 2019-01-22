<?php

	/**
	 * Template Name: Page - Find us
	 */


		get_header(); ?>
<div class="container top find">
	<h1><?php the_field("page_title"); ?></h1>
	<h3 class="tagline"><?php the_field("introduction_text"); ?></h3>
</div>
</main>
		<div class="site">

		<section class="default">
			<center class="wrapper">
				<article class="formatting">
					<?php //$image = get_field('featured_image'); ?>
					<!-- <img class="featured" src="<?php // echo $image['url']; ?>" alt="<?php // echo $image['alt'] ?>" /> -->
					<div class="map">
						<?php the_field('map'); ?>
					</div>
				</article>
			</center>
		</section>
		<!-- ./default  -->

<?php get_footer(); ?>