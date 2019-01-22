<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<h1><?php echo sprintf( __( '%s Search Results forr ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>
			<h1 class="search-title">
<?php echo $wp_query->found_posts; ?> <?php _e( 'Search Results Found For', 'suncraft' ); ?>: "<?php the_search_query(); ?>"
</h1>

		</section>
		<!-- /section -->
	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
