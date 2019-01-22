<?php get_header(); ?>

<div class="container top search">
	<h1>Search Results</h1>
<!-- /search -->
<h2><?php echo sprintf( __( 'Search Results for: ', 'suncraft' ), $wp_query->found_posts ); echo get_search_query(); ?></h2>
</div>
</main>
		<!-- section -->
		<section class="banner default blog-listings search">
			<center class="wrapper">
				<article class="formatting">
					<div class="list">

				
				<?php
				$s=get_search_query();
				$args = array(
								's' =>$s, 'post_type' => 'post', 'posts_per_page' => -1
							);
					// The Query
				$the_query = new WP_Query( $args );
				if ( $the_query->have_posts() ) {
						while ( $the_query->have_posts() ) {
						   $the_query->the_post();
								 ?>
									<div class="cards">
										<div class="contain">
											<a href="<?php the_permalink(); ?>">
												<?php $image = get_field('featured_image');?>

												<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
												<div class="orange_bg">
													<h3 class="title"><?php the_title(); ?></h3>
													<div class="default_btn">
														<span><i class="fas fa-chevron-right"></i> Read Article</span>
													</div>
												</div>
											</a>
										</div>
									</div>
								 <?php
						}
					}else{
				?>
					<h2>Nothing Found</h2>
					<div class="alert alert-info">
					  <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
					<p>Click <a href="/blog/">here</a> to go back.</p>
						
					</div>
			<?php } ?>

		</div>
		<!-- /section -->
		</article>	
	</center>
</section>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
