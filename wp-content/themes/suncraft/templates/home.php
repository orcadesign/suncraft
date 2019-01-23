<?php

	/**
	 * Template Name: Page - Home
	 */
$theme  = get_template_directory_uri();

		get_header(); ?>
</main>
		<div class="site">
		<div class="tagline">
			<h1>Forward thinking, health conscious plant-based food &amp; drink on Gloucester Road</h1>
			<img alt="Title stroke" src="<?=$theme?>/assets/images/stroke.png" />
		</div>
<h3 class="tagline"><?php the_field("introduction_text"); ?></h3>
		<section class="default menu" id="menu">
			<center class="wrapper">
				<article class="formatting">
					<?php $image = get_field('featured_image_menu'); ?>
					<h2><?php the_field("menu_title"); ?></h2>
					<div class="social-icons">
						<a target="_blank" href="https://twitter.com/SuncraftBristol"><i class="fab fa-twitter"></i>Twitter</a>
						<a target="_blank" href="https://www.facebook.com/SuncraftBristol/"><i class="fab fa-facebook-f"></i>Facebook</a>
						<a target="_blank" href="https://www.instagram.com/suncraftbristol/"><i class="fab fa-instagram"></i>Instagram</a>
					</div>
					<!-- ./col -->
					<img alt="Image line" class="absolute line" src="<?=$theme?>/assets/images/home/menu_home_5.png" />
					<img alt="Image line" class="absolute line" src="<?=$theme?>/assets/images/home/menu_home_5.png" />
					<img class="featured" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
					
					<div class="bottom_container">
						<button class="default">
							<a href="<?php the_field("button_link_menu");?>"><?php the_field("button_text_menu");?></a>
						</button>
						
						<img alt="Image shape" class="absolute" src="<?=$theme?>/assets/images/home/menu_home_1.png" />
						<img class="absolute" src="<?=$theme?>/assets/images/home/menu_home_2.png" />
						<div class="box"><p><?php the_field("introduction_text_menu");?></p></div>
						<img alt="Image leaf" class="absolute" src="<?=$theme?>/assets/images/home/menu_home_3.png" />
						<img alt="Image circle" class="absolute" src="<?=$theme?>/assets/images/home/menu_home_4.png" />
					</div>
					<!-- ./bottom container -->
							
				</article>
			</center>
		</section>
		<!-- ./default  -->

		<section class="default blue_trap grow">
			<img class="absolute grow" src="<?=$theme?>/assets/images/home/grow_3.png" />
			<center class="wrapper">
				<article class="formatting">
					<?php $image_grow = get_field('featured_image_grow'); ?>
					<div class="left">
						<img alt="Image leaf" class="absolute grow" src="<?=$theme?>/assets/images/home/grow_1.png" />
						<img alt="Image leaf" class="absolute grow" src="<?=$theme?>/assets/images/home/grow_2.png" />
						<img alt="Image stripe" class="absolute grow" src="<?=$theme?>/assets/images/home/grow_5.png" />
						<img alt="Image stripe" class="absolute grow" src="<?=$theme?>/assets/images/home/grow_4.png" />
						<img class="featured_grow" src="<?php echo $image_grow['url']; ?>" alt="<?php echo $image_grow['alt'] ?>" />
						<button class="default">
							<a href="<?php the_field("button_link_grow");?>"><?php the_field("button_text_grow");?></a>
						</button>
					</div>
					<!-- ./ left -->
					
					<div class="right">
						<h2><?php the_field("grow_title"); ?></h2>
						<p><?php the_field("introduction_text_grow");?></p>
					</div>
					<!-- ./ right -->

				</article>
			</center>
		</section>
		<!-- ./default blue_trap -->

		<section class="default orange_trap dob">
			<center class="wrapper">
				<article class="formatting">
					<?php $image_dob = get_field('featured_image_dob'); ?>
					<div class="left">
						<h2><?php the_field("doing_title"); ?></h2>
						<button class="default">
							<a href="<?php the_field("button_link_dob");?>"><?php the_field("button_text_dob");?></a>
						</button>
					</div>
					<!-- ./ left -->
					
					<div class="right">
						<img alt="Image leaf" class="absolute grow" src="<?=$theme?>/assets/images/home/dob_1.png" />
						<img alt="Image leaf" class="absolute grow" src="<?=$theme?>/assets/images/home/dob_2.png" />
						<img alt="Image stripe" class="absolute grow" src="<?=$theme?>/assets/images/home/dob_3.png" />
						<img class="featured_dob" src="<?php echo $image_dob['url']; ?>" alt="<?php echo $image_dob['alt'] ?>" />
						<div class="box">
							<h3><?php the_field("dob_subtitle"); ?></h3>
							<p><?php the_field("introduction_text_dob");?></p>
							<button class="alt_btn">
								<a href="<?php the_field("read_more_dob");?>"><i class="fas fa-chevron-right"></i>Read More</a>
							</button>
						</div>
					</div>
					<!-- ./ right -->

				</article>
			</center>
		</section>
		<!-- ./default orange_trap -->

		<section class="default yellow_trap family">
			<center class="wrapper">
				<article class="formatting">
					<?php $image_family = get_field('featured_image_family'); ?>
					
					<img class="featured_famly" src="<?php echo $image_family['url']; ?>" alt="<?php echo $image_family['alt'] ?>" />
					<img alt="Image stripe" class="absolute family" src="<?=$theme?>/assets/images/home/family_1.png" />
					<img alt="Image stripe" class="absolute family" src="<?=$theme?>/assets/images/home/family_2.png" />
					<img alt="Image leaf" class="absolute family" src="<?=$theme?>/assets/images/home/family_3.png" />
					<h2><?php the_field("title_family"); ?></h2>
					<button class="default">
						<a href="<?php the_field("button_link_family");?>"><?php the_field("button_text_family");?></a>
					</button>

				</article>
			</center>
		</section>
		<!-- ./default yellow_trap -->

		<section class="pre_footer home">
			<center class="wrapper">
				<article class="formatting">
					<img alt="Suncraft Logo S" class="logo" src="<?=$theme?>/assets/images/Logo1-Suncraft.png"/>
					<h2><?php the_field("pre_footer_title"); ?></h2>
					<div><?php the_field("pre_footer_tagline");?></div>
					<?php //$image_map = get_field('map-image'); ?>
					<!--<img class="featured_map" src="<?php // echo $image_map['url']; ?>" alt="<?php //echo $image_map['alt'] ?>" />-->
					<div class="map">
						<?php the_field('map-image'); ?>
					</div>
				</article>
			</center>
		</section>
		<!-- ./pre_footer -->



<?php get_footer(); ?>