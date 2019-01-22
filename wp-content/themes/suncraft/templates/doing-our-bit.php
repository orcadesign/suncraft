<?php

	/**
	 * Template Name: Page - Doing Our Bit
	 */
	$theme  = get_template_directory_uri();
	get_header(); ?>
<div class="container top">
<h1><?php the_field("page_title"); ?></h1>
<h3 class="tagline"><?php the_field("introduction_text"); ?></h3>

</div>
</main>
<div class="site" id="dob">
	<section class="default">
		<center class="wrapper">
			<article class="formatting">
				<div class="wrapper">
					<img class="absolute" src="<?=$theme?>/assets/images/home/menu_home_1.png" />
					<img class="absolute" src="<?=$theme?>/assets/images/blog/blog_2.png" />
					<img class="absolute" src="<?=$theme?>/assets/images/blog/blog_4.png" />
					<img class="absolute" src="<?=$theme?>/assets/images/blog/blog_5.png" />
					<img class="absolute" src="<?=$theme?>/assets/images/home/menu_home_4.png" />					
					<img class="absolute" src="<?=$theme?>/assets/images/home/family_1.png" />

					<?php $image = get_field('featured_image'); ?>
					<?php $secondary_image = get_field('secondary_image'); ?>

					<img class="featured" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
					<img class="secondary" src="<?php echo $secondary_image['url']; ?>" alt="<?php echo $secondary_image['alt'] ?>" />
					<div class="box"><?php the_field("intro_content_area");?></div>
					<!-- ./ first section-->
				</div>
				<!-- ./ wrapper -->
				<div class="clear"></div>
				<?php $third_image = get_field('third_image'); ?>
				
				<div class="wrapper two">
					<div class="half-col">
						<h2><?php the_field("subtitle"); ?></h2>
						<div class="clear"></div>
						<?php if( have_rows('first_quote') ):
								while( have_rows('first_quote') ) : the_row(); 
							?>
								<div class="box">
									<p><?php the_sub_field('quote_text'); ?></p>
									<h5><?php the_sub_field('name'); ?></h5>
									<span><?php the_sub_field('job_title'); ?></span>
								</div>
							<?php
						endwhile;

						endif;
						?>
					</div>

					<div class="half-col">
						<img class="featured" src="<?php echo $third_image['url']; ?>" alt="<?php echo $third_image['alt'] ?>" />
						<?php if( have_rows('second_quote') ):
								while( have_rows('second_quote') ) : the_row(); 
							?>
								<div class="box">
									<p><?php the_sub_field('quote_text_second'); ?></p>
									<h5><?php the_sub_field('name_second'); ?></h5>
									<span><?php the_sub_field('job_title_second'); ?></span>
								</div>
							<?php
						endwhile;

						endif;

						?>
					</div>
					<!-- ./ second section-->	
					<img class="absolute" src="<?=$theme?>/assets/images/home/family_1.png" />
					<img class="absolute" src="<?=$theme?>/assets/images/home/grow_3.png" />
					<img class="absolute" src="<?=$theme?>/assets/images/leaf/doing-our-bit.png" />
				</div>
				<!-- ./ wrapper -->
				
			
			</article>
		</center>
	</section>
	<!-- ./default -->
	
	<section class="default blue_trap">
		<center class="wrapper">
			<img class="absolute" src="<?=$theme?>/assets/images/blog/blog_3.png" />
			<article class="formatting">
				<div class="wrapper">
					<h2><?php the_field("partners_subtitle");?></h2>
						<div class="clear"></div>
					<div class="partners-slider">
						<?php if( have_rows('partners_slide') ):
								while( have_rows('partners_slide') ) : the_row(); 
							?>
								<div>
									<div class="half-col">
										<h4>Featuring:<br/><?php the_sub_field('slide_title'); ?></h4>
										<p><?php the_sub_field('content_area'); ?></p>
									</div>
									<!-- ./half-col -->

									<div class="half-col">
										
										<img class="absolute" src="<?=$theme?>/assets/images/home/grow_5.png" />
										<img class="absolute" src="<?=$theme?>/assets/images/home/grow_1.png" />
										<?php $slide_image = get_sub_field('slide_image'); ?>
										<img class="slide_image" src="<?php echo $slide_image['url']; ?>" alt="<?php echo $slide_image['alt'] ?>" />
									</div>
									<!-- ./half-col -->

								</div>
								<!-- ./slider -->
							<?php
						endwhile;

						endif;

						?>

					</div>

				</div>
				<!-- ./partners-slider -->
				
					<div class="partner-list">
						<h4><?php the_field("community_title"); ?></h4>
						<?php if( have_rows('partners_worked_with') ):
								while( have_rows('partners_worked_with') ) : the_row(); 
							?>
								<div class="cards">
									<div class="contain">
										<?php $partner_image = get_sub_field('partner_image');?>
										<img src="<?php echo $partner_image['url']; ?>" alt="<?php echo $partner_image['alt'] ?>" />
										<div class="orange_bg">
											<h3 class="title"><?php the_sub_field("partner_title"); ?></h3>
											<p><?php the_sub_field("partner_text"); ?></p>
										</div>
									</div>
								</div>
								<!-- ./ cards -->
							<?php
						endwhile;

						endif;

						?>
					</div>
					<!-- partners worked with -->
					<div class="clear"></div>	
			</article>
		</center>
	</section>
	<!-- ./default / partners  -->


	<section class="pre_footer">
		<center class="wrapper">
			<article class="formatting">
				<img src="<?=$theme?>/assets/images/logos/logo_small.png">
				<h2><?php the_field("pre_footer_title"); ?></h2>
				<div><?php the_field("tagline"); ?></div>
			</article>
		</center>
	</section>
	<!-- ./pre_footer -->


<?php get_footer(); ?>