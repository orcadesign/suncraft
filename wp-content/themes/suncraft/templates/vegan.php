<?php

	/**
	 * Template Name: Page - Vegan
	 */
	$theme  = get_template_directory_uri();
	get_header(); ?>

<div class="container top">
	<h1><?php the_field("page_title"); ?></h1>
	<h3 class="tagline"><?php the_field("tagline"); ?></h3>
	
	<a class="flag" href="#onTheGo">
		<img src="<?=$theme?>/assets/images/take-out.png" />
	</a>
</div>

</main>
		<div class="site">
			
		<?php if( have_rows('menu_items') ):
							// loop through the rows of data
							while ( have_rows('menu_items') ) : the_row(); ?>

				<section id="menu" class="default" >
					<center class="wrapper">
						<article class="formatting">
							<div class="col-text transition">
								
								<h2><?php the_sub_field("title");?></h2>
							
								<?php if( have_rows('information') ):
									// loop through the rows of data
									while ( have_rows('information') ) : the_row(); ?>
								

									<div class="info-box">
										<p><?php the_sub_field("description");?></p>
										
										
										<div class="col-33">
											<div class="spice <?php the_sub_field("spice_level");?>">
												
												<img class="low" src="<?=$theme?>/assets/images/icons/low.svg" />
												<img class="medium" src="<?=$theme?>/assets/images/icons/medium.svg" />
												<img class="hot" src="<?=$theme?>/assets/images/icons/medium.svg" />
												<img class="madness" src="<?=$theme?>/assets/images/icons/madness.svg" />

												<span><?php the_sub_field("spice_level");?></span>
											</div>
										</div>
										
										
										<div class="col-33">
											<?php if( get_sub_field('gluten_free') ): ?>
												<img src="<?=$theme?>/assets/images/icons/gluten.svg" />
												<span>Gluten</span>
											<?php endif; ?>	
										</div>
										
										<div class="col-33">
											<?php if( get_sub_field('contains_nuts') ): ?>
											<img src="<?=$theme?>/assets/images/icons/nuts.svg" />
												<span>Contains</span>
											<?php endif; ?>
										</div>
										
										<span class="price"><span>£</span><?php the_sub_field("price");?></span>
									</div>
									<!-- ./slider-item -->

									<?php endwhile;
									else :
										// no rows found
								endif;
								?>
							</div>
							<!-- .col-50 -->
							
							<div class="col-img transition">
								<?php
								$main_image = get_sub_field('main_image'); ?>
								
								<div class="img-container">
									<img src="<?php echo $main_image['url']; ?>" alt="<?php echo $main_image['alt'] ?>" />

									<div class="meal-background <?php the_sub_field("image_background");?>">
										<img class="mushroom left" src="<?=$theme?>/assets/images/backgrounds/mushroom-bg-left.svg" />
										<img class="mushroom right" src="<?=$theme?>/assets/images/backgrounds/mushroom-bg-right.svg" />
										
										<img class="chilli left" src="<?=$theme?>/assets/images/backgrounds/chilli-bg-left.svg" />
										<img class="chilli right" src="<?=$theme?>/assets/images/backgrounds/chilli-bg-right.svg" />
										
										<img class="mango left" src="<?=$theme?>/assets/images/backgrounds/mango-bg-left.svg" />
										<img class="mango right" src="<?=$theme?>/assets/images/backgrounds/mango-bg-right.svg" />
									</div>
									<img class="chopstick right transition" src="<?=$theme?>/assets/images/backgrounds/chopstick_right.svg" />
									<img class="chopstick left transition" src="<?=$theme?>/assets/images/backgrounds/chopstick_left.svg" />
								</div>
								
								
							</div>
							<!-- .col-50 -->

						</article>
					</center>
				</section>
			
							<?php endwhile;
						endif;
						?>
		<!-- ./default  -->
		
		<section class="download">
				<center class="wrapper">
					<article class="formatting">
						<button class="default">
							<a target="_blank" href="<?php the_field("menu_file_food");?>"><?php the_field("menu_download_text_food");?></a>
						</button>
						<button class="default">
							<a target="_blank" href="<?php the_field("menu_file_drinks");?>"><?php the_field("menu_download_text_drinks");?></a>
						</button>
					</article>
				</center>
			</section>
			<!-- ./ download menu button -->
			
			<section class="pre_footer">
				<center class="wrapper">
					<article class="formatting" >

						<h2><?php the_field('featured_title');?></h2>

						<div class="on-the-go">
						<?php if( have_rows('featured_items_other') ):
							// loop through the rows of data
							while ( have_rows('featured_items_other') ) : the_row(); ?>


							<div>
								<h3><?php the_sub_field('item_title');?></h3>

								<?php $image_slider = get_sub_field('item_image');?>
								<img src="<?php echo $image_slider['url']; ?>" alt="<?php echo $image_slider['alt'] ?>" />
							</div>
							<!-- ./slider-item -->

							<?php endwhile;
						endif;
						?>
						</div>
						<!-- ./slick -->



					</article>
				</center>
			</section>
			<!-- ./pre_footer -->
			<section class="footer" id="onTheGo">
				<center class="wrapper">
					<article class="formatting">	
						<div class="inner">
							<div class="col-33">
								<?php $otg_image = get_field('otg_image');?>
								<img src="<?php echo $otg_image['url']; ?>" alt="<?php echo $otg_image['alt'] ?>" />
							</div>
							<div class="col-66">
								<h4><?php the_field("otg_title");?></h4>
								<p><?php the_field("otg_description");?></p>
							</div>
						</div>
					</article>
				</center>
			</section>
		<!-- ./pre_footer -->	
			


<?php get_footer(); ?>
			
			