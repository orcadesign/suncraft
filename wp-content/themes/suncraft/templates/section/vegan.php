<?php $args = array( 'post_type' => 'menu', 'posts_per_page' => -1 );
			$loop = new WP_Query( $args );
			
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<section class="default">
					<center class="wrapper">
						<article class="formatting">
							<div class="col-50">
								<h2><?php the_field("title");?></h2>
								
							
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
										
										<span class="price">£<?php the_sub_field("price");?></span>
									</div>
									<!-- ./slider-item -->

									<?php endwhile;
									else :
										// no rows found
								endif;
								?>
							</div>
							<!-- .col-50 -->
							
							<div class="col-50">
								<?php
								$main_image = get_field('main_image'); ?>
								
								<div class="img-container">
									<img src="<?php echo $main_image['url']; ?>" alt="<?php echo $main_image['alt'] ?>" />

									<div class="meal-background <?php the_field("image_background");?>">
										<img class="mushroom left" src="<?=$theme?>/assets/images/backgrounds/mushroom-bg-left.svg" />
										<img class="mushroom right" src="<?=$theme?>/assets/images/backgrounds/mushroom-bg-right.svg" />
										
										<img class="chilli left" src="<?=$theme?>/assets/images/backgrounds/chilli-bg-left.svg" />
										<img class="chilli right" src="<?=$theme?>/assets/images/backgrounds/chilli-bg-right.svg" />
										
										<img class="mango left" src="<?=$theme?>/assets/images/backgrounds/mango-bg-left.svg" />
										<img class="mango right" src="<?=$theme?>/assets/images/backgrounds/mango-bg-right.svg" />
									</div>
									<img class="chopstick right" src="<?=$theme?>/assets/images/backgrounds/chopstick_right.svg" />
									<img class="chopstick left" src="<?=$theme?>/assets/images/backgrounds/chopstick_left.svg" />
								</div>
								
								
							</div>
							<!-- .col-50 -->

						</article>
					</center>
				</section>
			<?php endwhile; ?>
		<!-- ./default  -->