<?php

	global $current_user;

	$lang   = get_language_attributes();
	$theme  = get_template_directory_uri();

?>

		</div>
		
		<!-- cookie popup notice -->
		<input type="checkbox" id="cookie_bar_toggle" onchange="d=new Date();d.setTime(d.getTime()+(90*24*60*60*1000));document.cookie='ckb0614bb986a63dc11fa6b9d4fecaaa7c8=true; expires='+(d.toUTCString())+'; path=/;'" />
		<div class="cookie-bar">
			<div class="cookie-bar-inner">
				<div class="cookie-bar-close" for="cookie_bar_toggle"><i class="fas fa-times"></i></div>
				<div class="cookie-bar-text"><p>This website uses cookies to improve your experience. We will assume you are ok with this, but you can opt-out if you wish.</p></div>
				<a href="/privacy-policy/" class="cookie-bar-link">Read More</a> &nbsp;&nbsp;|&nbsp;&nbsp; <p id="accept-close" href="" class="cookie-bar-link">Accept</p>
			</div>
		</div>
		<!-- ./cookie popup notice -->

		<footer>
			<div class="site-copyright">
				<center class="wrapper">
					<div class="columns">
						<div class="column full"><a href="/privacy-policy/">Privacy Policy</a></div>
						<div class="column full">26-28 Gloucester Rd, Bristol BS7 8AL</div>
						<div class="column third">&copy; Suncraft 2018<?=((date("Y") > 2018) ? date(" - Y") : "")?></div>
						<div class="column third">
							<div class="social-icons">
								<a target="_blank" href="https://twitter.com/SuncraftBristol"><i class="fab fa-twitter"></i>Twitter</a>
								<a target="_blank" href="https://www.facebook.com/SuncraftBristol/"><i class="fab fa-facebook-f"></i>Facebook</a>
								<a target="_blank" href="https://www.instagram.com/suncraftbristol/"><i class="fab fa-instagram"></i>Instagram</a>
							</div>
						</div>
						<div class="column third">Site by <a href="http://onlyorca.com/?ref=fryshuset" target="_blank">ORCA</a></div>
					</div>
				</center>
			</div>
		
			<img alt="Footer leaf image" class="leaf footer" src="<?=$theme?>/assets/images/leaf/leaf4_new.png" />
			<!--<img class="leaf footer" src="<?=$theme?>/assets/images/leaf/leaf3_new.png" />-->
			<img alt="Footer leaf image" class="leaf footer" src="<?=$theme?>/assets/images/leaf/leaf2.png" />
			<img alt="Footer leaf image" class="leaf footer" src="<?=$theme?>/assets/images/leaf/3.png" />
			<img alt="Footer leaf image" class="leaf footer" src="<?=$theme?>/assets/images/leaf/4.png" />
			<!--<img class="leaf footer" src="<?=$theme?>/assets/images/leaf/5.png" />-->
			<img alt="Footer leaf image" class="leaf footer" src="<?=$theme?>/assets/images/leaf/leaf.png" />
			<img alt="Footer leaf image" class="leaf footer" src="<?=$theme?>/assets/images/leaf/6.png" />
			<img alt="Footer leaf image" class="leaf footer" src="<?=$theme?>/assets/images/leaf/7.png" />
			<img alt="Footer leaf image" class="leaf footer" src="<?=$theme?>/assets/images/leaf/3.png" />
			<img alt="Footer leaf image" class="leaf footer" src="<?=$theme?>/assets/images/leaf/8.png" />
			<img alt="Footer leaf image" class="leaf footer" src="<?=$theme?>/assets/images/leaf/9.png" />
			<img alt="Footer leaf image" class="leaf footer" src="<?=$theme?>/assets/images/leaf/leaf2_new.png" />
			<img alt="Footer leaf image" class="leaf footer" src="<?=$theme?>/assets/images/leaf/11.png" />
			<img alt="Footer leaf image" class="leaf footer" src="<?=$theme?>/assets/images/leaf/12.png" />
			<img alt="Footer leaf image" class="leaf footer" src="<?=$theme?>/assets/images/leaf/14.png" />
			<img alt="Footer leaf image" class="leaf footer" src="<?=$theme?>/assets/images/leaf/footer_leaf.png" />
			<img alt="Footer leaf image" class="leaf footer" src="<?=$theme?>/assets/images/leaf/leaf4_new.png" />
			<img alt="Footer leaf image" class="leaf footer" src="<?=$theme?>/assets/images/leaf/leaf4_new.png" />
			
			<a id="backtotop" href="#top"><div class="nav_button"><i class="fas fa-chevron-up"></i></div></a>
		</footer>
		<? wp_footer(); ?>

		<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
				

		<!-- GSAP & ScrollMagic -->
		<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js'></script>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.1/plugins/animation.gsap.js'></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.1/ScrollMagic.js'></script>

		<!--build:js assets/js/main.min.js -->
		<script src="<?=$theme?>/assets/js/gsap-dist.js"></script>
		<script type="text/javascript" src="<?=$theme?>/slick/slick.min.js"></script>
		<!-- endbuild -->

		<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5bdc643aa3775197"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-129350826-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-129350826-1');
</script>
<script type="text/javascript">
	  
	// Cookie Popup code 
	$(document).ready(function() {
		if(localStorage.getItem('popState') != 'shown'){
			$(".cookie-bar").delay(2000).fadeIn(400);
		}
		$('.cookie-bar i.fas.fa-times').click(function() {
			$('.cookie-bar').fadeOut(400);
		});
		$('.cookie-bar #accept-close').click(function(e) {
			localStorage.setItem('popState','shown')
			e.preventDefault();
			$('.cookie-bar').fadeOut(400);
		});
	});
	
	TweenLite.defaultEase = Linear.easeNone;
var ctrl = new ScrollMagic.Controller();

	
</script>
	</body>
</html>
