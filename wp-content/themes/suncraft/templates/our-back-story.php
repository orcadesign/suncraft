<?php

	/**
	 * Template Name: Page - Our back story
	 */
		
 get_header(); ?>
<?php

	global $current_user;

	$lang   = get_language_attributes();
	$theme  = get_template_directory_uri();

?>
		<div class="container top post">
			<h1 class="title"><?php the_title(); ?></h1>
			<h3 class="tagline"><?php the_field("post_tagline"); ?></h3>
		</div>
	</main>
<div class="site">
	

	
<section class="banner default posts">
	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php $image = get_field('top_image');?>
		<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
		
		<div class="content_area">
			<img alt="Image stripe" class="absolute stripe" src="<?=$theme?>/assets/images/blog/blog_4.png" />
			<img alt="Image stripe" class="absolute stripe" src="<?=$theme?>/assets/images/blog/blog_5.png" />
			<div class="inner">
				<?php if( have_rows('paragraph') ):
					// loop through the rows of data
					while ( have_rows('paragraph') ) : the_row();
						// display a sub field value
				?>

				<?php the_sub_field('paragraph');?>
			</div>
		</div>
		<div class="content_area">
			<?php $image_left = get_sub_field('image_left');?>
			<img class="img_left" src="<?php echo $image_left['url']; ?>" alt="<?php echo $image_left['alt'] ?>" />
			<img alt="Image stripe" class="absolute stripe first" src="<?=$theme?>/assets/images/blog/blog_4.png" />
			<img alt="Image stripe" class="absolute stripe second" src="<?=$theme?>/assets/images/blog/blog_5.png" />
			<img alt="Image leaf" class="absolute blog" src="<?=$theme?>/assets/images/blog/blog_3.png" />
			<div class="inner">
				<div class="text_right">
					<p><?php the_sub_field('text_right');?></p>
				</div>
				<div class="extra_para">
					<?php the_sub_field('paragraph_extra');?>
				</div>
			</div>
		</div>
		<div class="content_area">
			<img alt="Image leaf" class="absolute blog" src="<?=$theme?>/assets/images/blog/blog_2.png" />
			<img alt="Image leaf" class="absolute two" src="<?=$theme?>/assets/images/blog/blog_1.png" />
			<?php $image_right = get_sub_field('image_right');?>
			<img class="img_right" src="<?php echo $image_right['url']; ?>" alt="<?php echo $image_right['alt'] ?>" />
			<div class="inner">
				<div class="text_left">
					<p><?php the_sub_field('text_left');?></p>
					
					
				</div>

				<?php 

					endwhile;
				else :
					// no rows found
				endif;
				?>
			
			</div>
		</div>

	</article>
	<!-- /article -->
</section>
<!-- /section -->
	
	
<section class="pre_footer">
	<center class="wrapper">
		<article class="formatting">
			<h2>Articles</h2>
			<div class="list">
				<?php //query_posts(array('post_type' => 'post', 'orderby' => 'date','posts_per_page' => '-1')); 

				 $args = array( 'post_type' => 'post', 'posts_per_page' => 3, 'order' => 'random');
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
			<a class="back" href="/blog/">To the blog</a>
		</article>
	</center>
</section>
	<!-- /section -->


<?php get_footer(); ?>
