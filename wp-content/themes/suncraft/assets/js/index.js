$(document).ready(function(){
	var ww = $(window).width();
	var limit = 415;

	function refresh() {
	   ww = $(window).width();
	   var w =  ww<limit ? (location.reload(true)) :  ( ww>limit ? (location.reload(true)) : ww=limit );
	}
	var tOut;
	$(window).resize(function() {
		var resW = $(window).width();
		clearTimeout(tOut);
		if ( (ww>limit && resW<limit) || (ww<limit && resW>limit) ) {        
			tOut = setTimeout(refresh, 100);
		}
	});
	
	$('.burger').click(function () {
		$(this).toggleClass('open');
		$("nav.main-menu").toggleClass("open");
		$("body, html").toggleClass("noScroll");
	});
	$(function () {
		$("section.blog-listings .list .cards").slice(0, 6).show();
		$("#loadMore").on('click', function (e) {
			e.preventDefault();
			$("div:hidden").slice(0, 6).slideDown();
			if ($("div:hidden").length === 0) {
				$("#load").fadeOut('slow');
			}
			$('html,body').animate({
				scrollTop: $(this).offset().top
			}, 1500);
		});
	});
	
	
	/* slick slider */
	$('.partners-slider').slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: true,
	});	
	$('.on-the-go').slick({
		slidesToShow: 2,
		infinite: true,
		slidesToScroll: 1,
		dots: true,
		 responsive: [
			{
			  breakpoint: 641,
			  settings: {
				slidesToShow: 1
			  }
			}
		]
	});
	
	// Select all links with hashes
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });
	
	
	
	function isScrolledIntoView(elem) {
		var docViewTop = $(window).scrollTop();
		var docViewBottom = docViewTop + $(window).height();

		var elemTop = $(elem).offset().top;
		var elemBottom = elemTop + $(elem).height();

		return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
	}

	$(window).scroll(function () {
		$('section.default#menu article .transition').each(function () {
			if (isScrolledIntoView(this) === true) {
				$(this).addClass('visible');
			}
			
		});

	});
	
});



