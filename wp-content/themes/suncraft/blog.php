<?php
/* 
Template Name: Blog 
*/
?>

<?php get_header(); ?>

<div class="container top">
<h1><?php the_field("blog_title"); ?></h1>
<h3 class="tagline"><?php the_field("blog_tagline"); ?></h3>
<p><?php the_field("blog_intro_text"); ?></p>
<?php //get_search_form(); ?>
<!-- search -->
<form class="search" method="get" action="<?php echo home_url(); ?>" role="search">
	<input class="search-input" type="search" name="s" placeholder="<?php _e( 'Keyword', 'suncraft' ); ?>">
	<button class="search-submit" type="submit" role="button"><?php _e( '', 'suncraft' ); ?><i class="fas fa-search"></i></button>
</form>
<!-- /search -->

</div>

</main>
<div class="site">
<section class="banner default blog-listings">
	<center class="wrapper">
		<article class="formatting">
		
	 <div class="list">
        <?php //query_posts(array('post_type' => 'post', 'orderby' => 'date','posts_per_page' => '-1')); 
		 
		 $args = array( 'post_type' => 'post', 'posts_per_page' => -1 );
	     $loop = new WP_Query( $args );
		 
             // if(have_posts()) : while(have_posts()) : the_post(); 
              if(have_posts()) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
		
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
		
       <?php endwhile; ?>
       <?php else : ?>

            <p>sorry no results</p>
		
	</div>
       <?php endif; wp_reset_query(); ?>
		
		<!------- --------->
			
		</article>
		<a href="#" class="load_more" id="loadMore">Load More</a>
	</center>
</section>



<?php get_footer(); ?>
