//instantiate a TimelineLite    
var tl_m = new TimelineLite();

// one
tl_m.from("img.oval, img.logo", 0.7, {width:200,delay:.5, opacity:0});

// two
//tl_m.from("img.logo", 0.7, {scale:.5, delay:.5, opacity:0}, "-=1.2");
//tl_m.to("img.logo", 0.7, {y: -75});

// three
tl_m.from("div.tagline, h3.tagline", 0.7, {opacity:0, scale: 0}, "-=0.33");

// four
tl_m.from("div.coming_soon h2", 0.7, {left:-300,scale:.5, opacity:0}, "-=0.33");

// six
tl_m.staggerFrom("div.coming_soon div.social-icons a", 0.7, {scale:.5, opacity:0}, "-=0.33");

// seven
tl_m.from("div.container h1", 0.7, {scale:.66, opacity:0}, "-=0.66");

// eight
tl_m.from("div.container.top p, form.search", 0.7, {y: 100, opacity:0}, "-=0.66");


TweenMax.from("div.container.post span.entry-date", .75, {css:{y: -100, opacity:0}, delay:1.2});

TweenMax.from("div.container.search h2", .75, {css:{y: 50, opacity:0}, delay:1.6});

TweenMax.from("a.flag img", .75, {css:{rotation: 45, opacity:0}, delay:1.6});

//instantiate a TimelineLite    
var tl = new TimelineLite();

// one
tl.from("img.leaf:nth-of-type(1)", 0.7, {delay:0.8,left:100, opacity:0});

// two
tl.from("img.leaf:nth-of-type(2)", 0.7, {left:-200, opacity:0, rotation: -30}, "-=0.5");

// seven
tl.from("img.leaf:nth-of-type(7)", 0.7, {opacity:0, rotation: -100, top:-250}, "-=0.5");

// three
tl.from("img.leaf:nth-of-type(3)", 0.7, {left:-300,scale:.5, opacity:0}, "-=1");

//four
tl.from("img.leaf:nth-of-type(4)", 0.7, {left:-100, opacity:0}, "-=1.3");

// five
tl.from("img.leaf:nth-of-type(5)", 0.7, {opacity:0, rotation: -100, top:-360}, "-=1.4");

//four
tl.from("img.leaf:nth-of-type(6)", 0.7, {opacity:0, top: -150}, "-=1.33");


var tl_r = new TimelineLite();

// eight
tl_r.from("img.leaf:nth-of-type(8)", 0.7, {delay:0.75,opacity:0 });

// nine
tl_r.from("img.leaf:nth-of-type(9)", 0.7, {opacity:0, rotation:50 }, "-=0.66");

// eleven
tl_r.from("img.leaf:nth-of-type(11)", 0.7, {opacity:0 }, "-=0.8");

// twelve
tl_r.from("img.leaf:nth-of-type(12)", 0.7, {opacity:0, rotation:160 }, "-=1.15");

// ten
tl_r.from("img.leaf:nth-of-type(10)", 1.2, {opacity:0, rotation:40, right:-100 }, "-=1.2");

// thirteen
tl_r.from("body.home img.leaf:nth-of-type(13)", 0.7, {opacity:0, rotation:80, right: -100 }, "-=1.5");

// thirteen (not home)
tl_r.from("body:not(.home) img.leaf:nth-of-type(13)", 0.7, {opacity:0, top: -100 }, "-=1");

// fourteen
tl_r.from("img.leaf:nth-of-type(14)", 0.7, {opacity:0, rotation:80, right: -100 }, "-=1.5");



var tl_menu = new TimelineLite();

$(".burger:not(.open)").click(function(){
	tl_menu.staggerFrom('nav.main-menu ul li', .5, { 
		y: 10,
		opacity: 0,	
		delay:.25,
		ease: Power1.easeInOut
	}, 0.1 );
	tl_menu.from("nav.main-menu ul li:nth-last-child(2)::before", .75, {
		css: {
			opacity:0,
			ease: Power1.easeInOut
		}, delay:0
	});
});

$(".burger.open").click(function(){
	tl.restart().restart(!0)
});

// ScrollMagic
// build scene


// HOME (MENU) SECTION
var scale_tween = TweenMax.from('section.menu h2', .75, {
	opacity: '0',
	left: -500,
	//ease: Linear.easeNone
});
var bg_tween = TweenMax.from('div.social-icons a', .75, {
	opacity:0,
	y:50,
	//ease: Linear.easeNone
});
var menu_main_img = TweenMax.from('section.menu img.featured', .75, {
	opacity:0,
	y:100,
	//ease: Linear.easeNone
});
var menu_stripe_img = TweenMax.from('section.menu .formatting > img.absolute:nth-of-type(1), section.menu .formatting > img.absolute:nth-of-type(2)', .75, {
	opacity:0,
	x:100,
	//ease: Linear.easeNone
});
var home_menu_leaf_tween = TweenMax.from('section.menu div.bottom_container img.absolute:nth-of-type(2), section.menu div.bottom_container img.absolute:nth-of-type(1)', .5, {
	x: 150,
	y: -50,
	opacity: 0,
	ease: Cubic.easeOut
});
var home_menu_leaf_tween_two = TweenMax.from('section.menu div.bottom_container img.absolute:nth-of-type(3), section.menu div.bottom_container img.absolute:nth-of-type(4)', .75, {
	x: -150,
	y: 50,
	opacity: 0,
	ease: Cubic.easeOut
});
var home_menu_intro_text = TweenMax.from('section.menu div.box', .75, {
	x: 300,
	opacity: 0,
	ease: Cubic.easeOut
});
var default_button = TweenMax.from('section.menu button.default', .75, {
	y: 75,
	opacity: 0,
	//ease: Cubic.easeOut
});


// HOME (GROW) SECTION
var default_button_grow = TweenMax.from('section.grow button.default', .75, {
	y: 75,
	opacity: 0,
	//ease: Cubic.easeOut
});
var home_grow_img = TweenMax.from('section.grow div.left img.featured_grow', .5, {
	x: -300,
	opacity: 0,
	ease: Cubic.easeOut
});
var home_grow_leaf_left = TweenMax.from('section.grow > img.absolute.grow, section.grow div.left img.absolute.grow:nth-of-type(2)', 1.2, {
	x: 100,
	y: 100,
	opacity: 0,
	transform: 'scale(0)',
	ease: Cubic.easeOut
});
var home_grow_leaf_right = TweenMax.from('section.grow div.left img.absolute.grow:nth-of-type(3), section.grow div.left img.absolute.grow:nth-of-type(4)', 1.2, {
	x: -100,
	y: -150,
	opacity: 0,
	transform: 'scale(0)',
	ease: Cubic.easeOut
});
var home_grow_leaf_bottom = TweenMax.from('section.grow div.left img.absolute.grow:nth-of-type(1)', 1.2, {
	x: -100,
	y: 150,
	opacity: 0,
	transform: 'scale(0)',
	ease: Cubic.easeOut
});
var grow_title = TweenMax.from('section.grow div.right', .75, {
	opacity: '0',
	x: 300,
	//ease: Linear.easeNone
});

// HOME (DOB) SECTION
var default_button_dob = TweenMax.from('section.dob button.default', .75, {
	y: 75,
	opacity: 0,
	//ease: Cubic.easeOut
});
var dob_title = TweenMax.from('section.dob div.left', .75, {
	opacity: '0',
	x: -300,
	//ease: Linear.easeNone
});
var dob_main_img = TweenMax.from('section.dob img.featured_dob', .75, {
	opacity: '0',
	x: 300,
});
var dob_content = TweenMax.from('section.dob div.box', .75, {
	opacity: '0',
	y: 100,
});
var dob_img_left_left = TweenMax.from('section.dob img.absolute:nth-of-type(2)', .75, {
	opacity: '0',
	y: -100,
	x: -200,
});
var dob_img_left_right = TweenMax.from('section.dob img.absolute:nth-of-type(1), section.dob img.absolute:nth-of-type(3)', .75, {
	opacity: '0',
	y: 100,
	x: 200,
});

// HOME FAMILY
var home_family_main_img = TweenMax.from('section.family img.featured_famly', .75, {
	opacity: '0',
	y: 100,
});
var home_family_leaf_left = TweenMax.from('section.family img.absolute.family:nth-of-type(2)', .75, {
	opacity: '0',
	x: 300,
});
var home_family_leaf_right = TweenMax.from('section.family img.absolute.family:nth-of-type(3), section.family img.absolute.family:nth-of-type(4)', .75, {
	opacity: '0',
	x: -300,
});
var home_family_title = TweenMax.from('section.family h2', .75, {
	opacity: '0',
	y: 100,
});
var home_family_button = TweenMax.from('section.family button.default', .75, {
	opacity: '0',
	y: 100,
});

// HOME PRE FOOTER
var home_pre_footer_logo = TweenMax.from('section.pre_footer.home img.logo', .75, {
	opacity: '0',
});
var home_pre_footer_title = TweenMax.from('section.pre_footer h2', .75, {
	opacity: '0',
	y: 100,
});
var home_pre_footer_address = TweenMax.from('section.pre_footer p', .75, {
	opacity: '0',
	y: 100,
});
/*var home_pre_footer_map = TweenMax.from('section.pre_footer div.map', .75, {
	opacity: '0',
});*/

// HOME FOOTER
var home_footer_leaf_one = TweenMax.from('.home footer img.leaf.footer:nth-of-type(1)', .75, {
	opacity: '0',
});

var home_footer_leaf_two = TweenMax.from('.home footer img.leaf.footer:nth-of-type(3)', .75, {
	opacity: '0',
});

var home_footer_leaf_three = TweenMax.from('.home footer img.leaf.footer:nth-of-type(5)', .75, {
	opacity: '0',
});

var home_footer_leaf_four = TweenMax.from('.home footer img.leaf.footer:nth-of-type(8)', .75, {
	opacity: '0',
});

var home_footer_leaf_five = TweenMax.from('.home footer img.leaf.footer:nth-of-type(9)', .75, {
	opacity: '0',
});

var home_footer_leaf_six = TweenMax.from('.home footer img.leaf.footer:nth-of-type(10)', .75, {
	opacity: '0',
});

	

// DOING OUR BIT 
// First secton
var dob_page_main_img = TweenMax.from('#dob section.default:nth-of-type(1) div.wrapper:nth-of-type(1) img.featured', .75, {
	opacity: '0',
	y: 100,
});
var dob_top_leaf = TweenMax.from('#dob section.default:nth-of-type(1) div.wrapper:nth-of-type(1) > img.absolute:nth-of-type(1)', .75, {
	opacity: '0',
	y: 100,
	x: 100
});
var dob_right_leaf = TweenMax.from('#dob section.default:nth-of-type(1) div.wrapper:nth-of-type(1) > img.absolute:nth-of-type(2)', .75, {
	opacity: '0',
	y: 100,
	x: -100
});
var dob_content_box = TweenMax.from('#dob section.default:nth-of-type(1) div.wrapper:nth-of-type(1) div.box', .75, {
	opacity: '0',
	y: 100,
});
var dob_secondary_img = TweenMax.from('#dob section.default:nth-of-type(1) img.secondary', .75, {
	opacity: '0',
	y: 100,
	x: -300,
});
var dob_stripe_and_circle = TweenMax.from('#dob section.default:nth-of-type(1) div.wrapper:nth-of-type(1) > img.absolute:nth-of-type(4), #dob section.default:nth-of-type(1) div.wrapper:nth-of-type(1) > img.absolute:nth-of-type(3), #dob section.default:nth-of-type(1) div.wrapper:nth-of-type(1) > img.absolute:nth-of-type(5)', .75, {
	opacity: '0',
	x: -300,
});
var dob_bottom_leaf = TweenMax.from('#dob section.default:nth-of-type(1) div.wrapper:nth-of-type(1) > img.absolute:nth-of-type(6)', .75, {
	opacity: '0',
	y: -100,
	x: -150,
});

// Second secton
var dob_title_two = TweenMax.from('#dob section.default:nth-of-type(1) div.wrapper.two h2', .75, {
	opacity: '0',
	x: -300,
});
var dob_image_right = TweenMax.from('#dob section.default:nth-of-type(1) div.wrapper.two img.featured', .75, {
	opacity: '0',
	x: 300
});
var dob_quote_left = TweenMax.from('#dob section.default:nth-of-type(1) div.half-col:nth-of-type(1) div.box', .75, {
	opacity: '0',
	x: -300,
});
var dob_quote_right = TweenMax.from('#dob section.default:nth-of-type(1) div.half-col:nth-of-type(2) div.box', .75, {
	opacity: '0',
	x: 300,
});
var dob_second_leaf = TweenMax.from('#dob section.default:nth-of-type(1) div.wrapper.two img.absolute', .75, {
	opacity: '0',
	y: 200,
});

// Third secton
var dob_title_three = TweenMax.from('#dob section.default.blue_trap h2', .75, {
	opacity: '0',
	x: -300,
});
var dob_slider_left = TweenMax.from('#dob section.default.blue_trap .half-col:nth-of-type(1)', .75, {
	opacity: '0',
	x: -300,
});
var dob_slider_right = TweenMax.from('#dob section.default.blue_trap .half-col:nth-of-type(2), #dob section.default.blue_trap center.wrapper > img.absolute:nth-of-type(1)', .75, {
	opacity: '0',
	x: 300,
});
var dob_comm_title = TweenMax.from('div.partner-list h4', .75, {
	opacity: '0',
	x: -300,
});
var dob_comm_first = TweenMax.from('div.cards', .75, {
	opacity: '0',
	y: 100,
});

// pre footer
var dob_pre_footer_logo = TweenMax.from('#dob section.pre_footer center.wrapper img', .75, {
	opacity: '0',
	y: 100,
});

// SINGLE BLOG
var single_blog_main_img = TweenMax.from('article[id^="post"] > img', .75, {
	opacity: '0',
	y: 100,
});
var single_blog_stripe_top = TweenMax.from('article[id^="post"] div.content_area:nth-of-type(1) img.absolute.stripe', .75, {
	opacity: '0',
	x: -300,
});
var single_blog_content = TweenMax.from('article[id^="post"] div.content_area', .75, {
	opacity: '0',
	y: 200,
});
var single_blog_img_left = TweenMax.from('article[id^="post"] div.content_area img.img_left', .75, {
	opacity: '0',
	x: -200,
});
var single_blog_leaf_stripe = TweenMax.from('article[id^="post"] div.content_area img.absolute.stripe.first, article[id^="post"] div.content_area:nth-of-type(2) img.absolute.blog', .75, {
	opacity: '0',
	x: 300,
});
var single_blog_right_stripe = TweenMax.from('article[id^="post"] div.content_area img.absolute.stripe.second', .75, {
	opacity: '0',
	x: -300,
});
var single_blog_img_right = TweenMax.from('article[id^="post"] div.content_area img.img_right', .75, {
	opacity: '0',
	x: 300,
});
var single_blog_right_shape = TweenMax.from('article[id^="post"] div.content_area:nth-of-type(3) img.absolute.blog', .75, {
	opacity: '0',
	x: -200,
});
var single_blog_right_shape_two = TweenMax.from('article[id^="post"] div.content_area:nth-of-type(3) img.absolute.two', .75, {
	opacity: '0',
	x: -200,
});
var single_blog_share_buttons = TweenMax.from('.addthis_inline_share_toolbox_1qml', .75, {
	opacity: '0',
	y: 200,
});
var single_blog_prev_button = TweenMax.from('div.bottom_navigation div.col-50:nth-of-type(1)', .75, {
	opacity: '0',
	x: -300,
});
var single_blog_next_button = TweenMax.from('div.bottom_navigation div.col-50:nth-of-type(2)', .75, {
	opacity: '0',
	x: 300,
});



//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//



//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//




// init ScrollMagic Controller
var controller = new ScrollMagic.Controller();








// Scale Scene
var scale_scene = new ScrollMagic.Scene({
	triggerElement: 'section.menu',
	offset: 150
})
.setTween(scale_tween);

// menu main img
var menu_main_img_scene = new ScrollMagic.Scene({
	triggerElement: 'section.menu',
	offset: 150
})
.setTween(menu_main_img);

// menu main img
var menu_stripe_img_scene = new ScrollMagic.Scene({
	triggerElement: 'section.menu',
	offset: 200
})
.setTween(menu_stripe_img);

// Background Scene
var bg_scene = new  ScrollMagic.Scene({
	triggerElement: 'section.default'
})
.setTween(bg_tween);

// Leaf menu home left Scene
var home_menu_leaf_scene = new  ScrollMagic.Scene({
	triggerElement: 'section.menu div.bottom_container img.absolute:nth-of-type(1)',
	offset:0
})
.setTween(home_menu_leaf_tween);

// Leaf menu home right Scene
var home_menu_leaf_scene_two = new  ScrollMagic.Scene({
	triggerElement: 'section.menu div.bottom_container img.absolute:nth-of-type(3)',
	offset:0
})
.setTween(home_menu_leaf_tween_two);

// home menu intro box
var home_menu_intro_text_scene = new  ScrollMagic.Scene({
	triggerElement: 'section.menu div.box',
	offset:0
})
.setTween(home_menu_intro_text);

// default button (home menu)
var default_button_scene = new  ScrollMagic.Scene({
	triggerElement: 'section.menu button.default',
	offset:-350
})
.setTween(default_button);

// default button (home grow)
var default_button_scene_grow = new  ScrollMagic.Scene({
	triggerElement: 'section.grow',
	triggerHook: 'onLeave',
	offset:-75
})
.setTween(default_button_grow);

// Grow main img
var home_grow_img_scene = new  ScrollMagic.Scene({
	triggerElement: 'section.grow',
	triggerHook: 'onLeave',
	offset:-150
})
.setTween(home_grow_img);

// Grow left leaves
var home_grow_leaf_left_scene = new  ScrollMagic.Scene({
	triggerElement: 'section.grow',
	triggerHook: 'onLeave',
	offset:-75
})
.setTween(home_grow_leaf_left);

// Grow right leaves
var home_grow_leaf_right_scene = new  ScrollMagic.Scene({
	triggerElement: 'section.grow',
	triggerHook: 'onLeave',
	offset:-75
})
.setTween(home_grow_leaf_right);

// Grow bottom leaf
var home_grow_leaf_bottom_scene = new  ScrollMagic.Scene({
	triggerElement: 'section.grow',
	triggerHook: 'onLeave',
	offset:-75
})
.setTween(home_grow_leaf_bottom);

// grow home title
var grow_title_scene = new ScrollMagic.Scene({
	triggerElement: 'section.grow h2',
	offset:350,
	triggerHook: 'onEnter',
})
.setTween(grow_title);

// dob home button
var default_button_dob_scene = new ScrollMagic.Scene({
	triggerElement: 'section.dob',
	offset:-500,
	triggerHook: 'onLeave',
})
.setTween(default_button_dob);

// dob home title
var dob_title_scene = new ScrollMagic.Scene({
	triggerElement: 'section.dob',
	offset:350,
	triggerHook: 'onEnter',
})
.setTween(dob_title);

// dob home img
var dob_main_img_scene = new ScrollMagic.Scene({
	triggerElement: 'section.dob img.featured_dob',
	offset:150,
	triggerHook: 'onEnter',
})
.setTween(dob_main_img);

// dob home content
var dob_content_scene = new ScrollMagic.Scene({
	triggerElement: 'section.dob div.box',
	offset:300,
	triggerHook: 'onEnter',
})
.setTween(dob_content);

// dob home left leaf
var dob_img_left_left_scene = new ScrollMagic.Scene({
	triggerElement: 'section.dob img.featured_dob',
	offset:275,
	triggerHook: 'onEnter',
})
.setTween(dob_img_left_left);

// dob home right leaf
var dob_img_left_right_scene = new ScrollMagic.Scene({
	triggerElement: 'section.dob img.featured_dob',
	offset:0,
	triggerHook: 'onEnter',
})
.setTween(dob_img_left_right);

//FAMIY HOME
// family home main img
var home_family_main_img_scene = new ScrollMagic.Scene({
	triggerElement: 'section.family img.featured_famly',
	offset:300,
	triggerHook: 'onEnter',
})
.setTween(home_family_main_img);

// family home leaf left
var home_family_leaf_left_scene = new ScrollMagic.Scene({
	triggerElement: 'section.family img.absolute.family:nth-of-type(2)',
	offset:300,
	triggerHook: 'onEnter',
})
.setTween(home_family_leaf_left);

// family home leaf right
var home_family_leaf_right_scene = new ScrollMagic.Scene({
	triggerElement: 'section.family img.absolute.family:nth-of-type(3), section.family img.absolute.family:nth-of-type(4)',
	offset:400,
	triggerHook: 'onEnter',
})
.setTween(home_family_leaf_right);

// family home title
var home_family_title_scene = new ScrollMagic.Scene({
	triggerElement: 'section.family h2',
	offset:150,
	triggerHook: 'onEnter',
})
.setTween(home_family_title);

// family home button
var home_family_button_scene = new ScrollMagic.Scene({
	triggerElement: 'section.family button.default',
	offset:150,
	triggerHook: 'onEnter',
})
.setTween(home_family_button);


// HOME PRE FOOTER
// home pre-footer logo
var home_pre_footer_logo_scene = new ScrollMagic.Scene({
	triggerElement: 'section.pre_footer.home img.logo',
	offset:0,
	triggerHook: 'onEnter',
})
.setTween(home_pre_footer_logo);

// home pre-footer title
var home_pre_footer_title_scene = new ScrollMagic.Scene({
	triggerElement: 'section.pre_footer h2',
	offset:0,
	triggerHook: 'onEnter',
})
.setTween(home_pre_footer_title);

// home pre-footer address
var home_pre_footer_address_scene = new ScrollMagic.Scene({
	triggerElement: 'section.pre_footer p',
	offset:0,
	triggerHook: 'onEnter',
})
.setTween(home_pre_footer_address);



// DOB TOP SECTION


// First section

// main image
var dob_page_main_img_scene = new ScrollMagic.Scene({
	triggerElement: '#dob section.default:nth-of-type(1) div.wrapper:nth-of-type(1) img.feature',
	offset:0,
	triggerHook: 'onEnter',
})
.setTween(dob_page_main_img);

// top leaf
var dob_top_leaf_scene = new ScrollMagic.Scene({
	triggerElement: '#dob section.default:nth-of-type(1) div.wrapper:nth-of-type(1) > img.absolute:nth-of-type(1)',
	offset:400,
	triggerHook: 'onEnter',
})
.setTween(dob_top_leaf);

// right leaf
var dob_right_leaf_scene = new ScrollMagic.Scene({
	triggerElement: '#dob section.default:nth-of-type(1) div.wrapper:nth-of-type(1) > img.absolute:nth-of-type(2)',
	offset:350,
	triggerHook: 'onEnter',
})
.setTween(dob_right_leaf);

// content box
var dob_content_box_scene = new ScrollMagic.Scene({
	triggerElement: '#dob section.default:nth-of-type(1) div.wrapper:nth-of-type(1) div.box',
	offset:350,
	triggerHook: 'onEnter',
})
.setTween(dob_content_box);

// second image
var dob_secondary_img_scene = new ScrollMagic.Scene({
	triggerElement: '#dob section.default:nth-of-type(1) img.secondary',
	offset:150,
	triggerHook: 'onEnter',
})
.setTween(dob_secondary_img);

// second image
var dob_stripe_and_circle_scene = new ScrollMagic.Scene({
	triggerElement: '#dob section.default:nth-of-type(1) div.wrapper:nth-of-type(1) > img.absolute:nth-of-type(4)',
	offset:300,
	triggerHook: 'onEnter',
})
.setTween(dob_stripe_and_circle);

// bottom leaf
var dob_bottom_leaf_scene = new ScrollMagic.Scene({
	triggerElement: '#dob section.default:nth-of-type(1) div.wrapper:nth-of-type(1) > img.absolute:nth-of-type(6)',
	offset:300,
	triggerHook: 'onEnter',
})
.setTween(dob_bottom_leaf);


// Second section

// main image
var dob_title_two_scene = new ScrollMagic.Scene({
	triggerElement: '#dob section.default:nth-of-type(1) div.wrapper.two h2',
	offset:300,
	triggerHook: 'onEnter',
})
.setTween(dob_title_two);

var dob_image_right_scene = new ScrollMagic.Scene({
	triggerElement: '#dob section.default:nth-of-type(1) div.wrapper.two img.featured',
	offset:300,
	triggerHook: 'onEnter',
})
.setTween(dob_image_right);

var dob_quote_left_scene = new ScrollMagic.Scene({
	triggerElement: '#dob section.default:nth-of-type(1) div.half-col:nth-of-type(1) div.box',
	offset:300,
	triggerHook: 'onEnter',
})
.setTween(dob_quote_left);

var dob_quote_right_scene = new ScrollMagic.Scene({
	triggerElement: '#dob section.default:nth-of-type(1) div.half-col:nth-of-type(2) div.box',
	offset:300,
	triggerHook: 'onEnter',
})
.setTween(dob_quote_right);

var dob_second_leaf_scene = new ScrollMagic.Scene({
	triggerElement: '#dob section.default:nth-of-type(1) div.half-col:nth-of-type(2) div.box',
	offset:450,
	triggerHook: 'onEnter',
})
.setTween(dob_second_leaf);


// Third section

// title
var dob_title_three_scene = new ScrollMagic.Scene({
	triggerElement: '#dob section.default.blue_trap h2',
	offset:450,
	triggerHook: 'onEnter',
})
.setTween(dob_title_three);

var dob_slider_left_scene = new ScrollMagic.Scene({
	triggerElement: '.partners-slider',
	offset:450,
	triggerHook: 'onEnter',
})
.setTween(dob_slider_left);

var dob_slider_right_scene = new ScrollMagic.Scene({
	triggerElement: '.partners-slider',
	offset:450,
	triggerHook: 'onEnter',
})
.setTween(dob_slider_right);

var dob_comm_title_scene = new ScrollMagic.Scene({
	triggerElement: 'div.partner-list h4',
	offset:300,
	triggerHook: 'onEnter',
})
.setTween(dob_comm_title);

var dob_comm_first_scene = new ScrollMagic.Scene({
	triggerElement: 'div.cards:nth-of-type(-n+3)',
	offset:275,
	triggerHook: 'onEnter',
})
.setTween(dob_comm_first);

var dob_pre_footer_logo_scene = new ScrollMagic.Scene({
	triggerElement: '#dob section.pre_footer center.wrapper img',
	offset:400,
	triggerHook: 'onEnter',
})
.setTween(dob_pre_footer_logo);

// SINGLE BLOG
var single_blog_main_img_scene = new ScrollMagic.Scene({
	triggerElement: 'article[id^="post"] > img',
	offset:100,
	triggerHook: 'onEnter',
})
.setTween(single_blog_main_img);

var single_blog_stripe_top_scene = new ScrollMagic.Scene({
	triggerElement: 'article[id^="post"] div.content_area img.absolute.stripe:nth-of-type(1)',
	offset:400,
	triggerHook: 'onEnter',
})
.setTween(single_blog_stripe_top);

var single_blog_content_scene = new ScrollMagic.Scene({
	triggerElement: 'article[id^="post"] div.content_area:nth-of-type(1)',
	offset:250,
	triggerHook: 'onEnter',
})
.setTween(single_blog_content);

var single_blog_img_left_scene = new ScrollMagic.Scene({
	triggerElement: 'article[id^="post"] div.content_area img.img_left',
	offset:400,
	triggerHook: 'onEnter',
})
.setTween(single_blog_img_left);

var single_blog_leaf_stripe_scene = new ScrollMagic.Scene({
	triggerElement: 'article[id^="post"] div.content_area img.absolute.stripe.first',
	offset:600,
	triggerHook: 'onEnter',
})
.setTween(single_blog_leaf_stripe);

var single_blog_right_stripe_scene = new ScrollMagic.Scene({
	triggerElement: 'article[id^="post"] div.content_area img.absolute.stripe.second',
	offset:400,
	triggerHook: 'onEnter',
})
.setTween(single_blog_right_stripe);

var single_blog_img_right_scene = new ScrollMagic.Scene({
	triggerElement: 'article[id^="post"] div.content_area img.img_right',
	offset:400,
	triggerHook: 'onEnter',
})
.setTween(single_blog_img_right);

var single_blog_right_shape_scene = new ScrollMagic.Scene({
	triggerElement: 'article[id^="post"] div.content_area:nth-of-type(3) img.absolute.blog',
	offset:400,
	triggerHook: 'onEnter',
})
.setTween(single_blog_right_shape);

var single_blog_right_shape_two_scene = new ScrollMagic.Scene({
	triggerElement: 'article[id^="post"] div.content_area:nth-of-type(3) > img.absolute.two',
	offset:250,
	triggerHook: 'onEnter',
})
.setTween(single_blog_right_shape_two);

var single_blog_share_buttons_scene = new ScrollMagic.Scene({
	triggerElement: '.addthis_inline_share_toolbox_1qml',
	offset:75,
	triggerHook: 'onEnter',
})
.setTween(single_blog_share_buttons);

var single_blog_prev_button_scene = new ScrollMagic.Scene({
	triggerElement: 'div.bottom_navigation',
	offset:150,
	triggerHook: 'onEnter',
})
.setTween(single_blog_prev_button);

var single_blog_next_button_scene = new ScrollMagic.Scene({
	triggerElement: 'div.bottom_navigation',
	offset:150,
	triggerHook: 'onEnter',
})
.setTween(single_blog_next_button);

controller.addScene([
	scale_scene,
	menu_main_img_scene,
	menu_stripe_img_scene,
	bg_scene,
	home_menu_leaf_scene,
	home_menu_leaf_scene_two,
	home_menu_intro_text_scene,
	default_button_scene,
	
	default_button_scene_grow,
	home_grow_img_scene,
	home_grow_leaf_left_scene,
	home_grow_leaf_right_scene,
	home_grow_leaf_bottom_scene,
	grow_title_scene, 
	
	default_button_dob_scene, 
	dob_title_scene, 
	dob_main_img_scene, 
	dob_content_scene, 
	dob_img_left_left_scene, 
	dob_img_left_right_scene,
	
	home_family_main_img_scene, 
	home_family_leaf_left_scene, 
	home_family_leaf_right_scene, 
	home_family_title_scene, 
	home_family_button_scene,
	
	home_pre_footer_logo_scene, 
	home_pre_footer_title_scene, 
	home_pre_footer_address_scene, 
	
	dob_page_main_img_scene,
	dob_top_leaf_scene,
	dob_right_leaf_scene,
	dob_content_box_scene,
	dob_secondary_img_scene,
	dob_stripe_and_circle_scene,
	dob_bottom_leaf_scene,
	
	dob_title_two_scene,
	dob_image_right_scene,
	dob_quote_left_scene,
	dob_quote_right_scene,
	dob_second_leaf_scene,
	
	dob_title_three_scene, 
	dob_slider_left_scene,
	dob_slider_right_scene,
	dob_comm_title_scene,
	dob_comm_first_scene,
	dob_pre_footer_logo_scene,
	
	single_blog_main_img_scene,
	single_blog_stripe_top_scene,
	single_blog_content_scene,
	single_blog_img_left_scene,
	single_blog_leaf_stripe_scene,
	single_blog_right_stripe_scene,
	single_blog_img_right_scene,
	single_blog_right_shape_scene,
	single_blog_right_shape_two_scene,
	single_blog_share_buttons_scene,
	single_blog_prev_button_scene,
	single_blog_next_button_scene
]);

		