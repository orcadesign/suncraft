<?php

	global $current_user;

	$lang   = get_language_attributes();
	$theme  = get_template_directory_uri();

?><!DOCTYPE html>
<!--[if IEMobile 7]><html <?=$lang?> class="no-js ie iem7"><![endif]-->
<!--[if lt IE 7]><html <?=$lang?> class="no-js ie ie6"><![endif]-->
<!--[if IE 7]><html <?=$lang?> class="no-js ie ie7"><![endif]-->
<!--[if IE 8]><html <?=$lang?> class="no-js ie ie8"><![endif]-->
<!--[if gte IE 9]><html <?=$lang?> class="no-js ie ie9"><![endif]-->
<!--[if !IE]><!--><html <?=$lang?> class="no-js"><!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo('charset'); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title><?php wp_title(); ?></title>
		<meta name="description" content="<?php bloginfo('description'); ?>" />
		<meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?>" />
		<meta name="apple-mobile-web-app-capable" content="yes" />

		<!-- css -->
		<link rel="shortcut icon" href="<?=$theme?>/assets/images/favicon.png" />
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		
		<!--build:css css/styles.min.css-->
		<link rel="stylesheet" href="<?=$theme?>/assets/css/style.css" >
		<link rel="stylesheet" href="<?=$theme?>/assets/css/mq.css" >
		<link rel="stylesheet" type="text/css" href="<?=$theme?>/slick/slick-dist.css"/>
		<!--endbuild-->
		
		<link rel="stylesheet" href="https://use.typekit.net/sau8hxg.css">
		<link rel="shortcut icon" type="image/x-icon" href="<?=$theme?>/assets/images/logos/suncraft-fav.png" />
		
		<!-- js -->
		<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
		<script src="<?=$theme?>/assets/js/index-dist.js"></script>
		
		
		<meta name="google-site-verification" content="SIvKzSkN0PrnN_whb0f8kwVeXqCd30u6d5uujYlg2yQ" />

		<?php wp_head(); ?>
		
		<style type="text/css" media="screen">
			html { margin-top: 0 !important; }
			* html body { margin-top: 0 !important; }
			@media screen and ( max-width: 782px ) {
				html { margin-top: 0 !important; }
				* html body { margin-top: 0 !important; }
			}
		</style>

	</head>
	<body id="top" <?php body_class(); ?>>
		
		<div class="nav_button">
		<button class="burger init"></button>
		</div>
		<!-- ./nav button-->
		
		<header class="site-header">
			<center class="wrapper">
				<!--<a href="<?=site_url('/')?>" class="site-title"><?php bloginfo('name'); ?></a>-->
				<nav class="main-menu"><?php
				wp_nav_menu(array
				(
					"link_before"    => "<font>",
					"link_after"     => "</font>",
					"container"      => false,
					"theme_location" => "main-menu"
				)); ?>
					
					<div class="social-icons">
						<a target="_blank" href="https://twitter.com/SuncraftBristol"><i class="fab fa-twitter"></i></a>
						<a target="_blank" href="https://www.facebook.com/SuncraftBristol/"><i class="fab fa-facebook-f"></i></a>
						<a target="_blank" href="https://www.instagram.com/suncraftbristol/"><i class="fab fa-instagram"></i></a>
					</div>

				</nav>
			</center>
		</header>
		<main>
			<!--<img class="leaf" src="<?=$theme?>/assets/images/leaf/1.png" />-->
			<img alt="Header leaf image" class="leaf" src="<?=$theme?>/assets/images/leaf/leaf4_new.png" />
			<!--<img class="leaf" src="<?=$theme?>/assets/images/leaf/2.png" />-->
			<img alt="Header leaf image" class="leaf" src="<?=$theme?>/assets/images/leaf/leaf3_new.png" />
			<img alt="Header leaf image" class="leaf" src="<?=$theme?>/assets/images/leaf/3.png" />
			<img alt="Header leaf image" class="leaf" src="<?=$theme?>/assets/images/leaf/4.png" />
			<img alt="Header leaf image" class="leaf" src="<?=$theme?>/assets/images/leaf/5.png" />
			<img alt="Header leaf image" class="leaf" src="<?=$theme?>/assets/images/leaf/6.png" />
			<img alt="Header leaf image" class="leaf" src="<?=$theme?>/assets/images/leaf/7.png" />
			<img alt="Header leaf image" class="leaf" src="<?=$theme?>/assets/images/leaf/3.png" />
			<img alt="Header leaf image" class="leaf" src="<?=$theme?>/assets/images/leaf/8.png" />
			<img alt="Header leaf image" class="leaf" src="<?=$theme?>/assets/images/leaf/9.png" />
			<!--<img class="leaf" src="<?=$theme?>/assets/images/leaf/10.png" />-->
			<img alt="Header leaf image" class="leaf" src="<?=$theme?>/assets/images/leaf/leaf2_new.png" />
			<img alt="Header leaf image" class="leaf" src="<?=$theme?>/assets/images/leaf/11.png" />
			<img alt="Header leaf image" class="leaf" src="<?=$theme?>/assets/images/leaf/12.png" />
			<img alt="Header leaf image" class="leaf" src="<?=$theme?>/assets/images/leaf/14.png" />

			<a href="/"><img alt="Suncraft Logo" class="logo" src="<?=$theme?>/assets/images/Logo1-Suncraft.png"/></a>
			<img  alt="Sun Oval" class="oval" src="<?=$theme?>/assets/images/oval.png"/>

			
		