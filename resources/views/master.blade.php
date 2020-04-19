<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('style.css') }}" type="text/css" />
    <link rel="stylesheet" href="css/swiper.css" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/dark.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/font-icons.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/animate.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" type="text/css" />

	<!-- DatePicker CSS -->
	<link rel="stylesheet" href="{{ asset('css/components/datepicker.css') }}" type="text/css" />

	<link rel="stylesheet" href="{{ asset('css/responsive.css') }}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="stylesheet" href="{{ asset('css/custom.css') }}" type="text/css" />

	<!-- Document Title
	============================================= -->
	<title>Car Rental - Forms | Canvas</title>

	<style>
		.form-group > label.error {
			display: block !important;
			text-transform: none;
		}

		.form-group input.valid ~ label.error,
		.form-group input[type="text"] ~ label.error,
		.form-group input[type="email"] ~ label.error,
		.form-group input[type="number"] ~ label.error,
		.form-group select ~ label.error { display: none !important; }

		.car-list .car-image [type=radio] { margin-right: 4px; }

		.car-list .car-image div {
			background-color: #F5F5F5;
			padding: 12px;
			margin-left: 8px;
		}

		.car-list .car-image img {
			display: block;
			margin-top: 10px;
		}

	</style>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="full-header">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="index.html" class="standard-logo" data-dark-logo="{{ asset('images/logo-dark.png') }}"><img src="{{ asset('images/logo.png') }}" alt="Canvas Logo"></a>
						<a href="index.html" class="retina-logo" data-dark-logo="{{ asset('images/logo-dark@2x.png') }}"><img src="{{ asset('images/logo@2x.png') }}" alt="Canvas Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu">

						<ul style="border-right: 0px;">
                            <li><a href="#"><div>Call us - 09999999999</div></a></li>
                            {{-- 
							<li><a href="index.html"><div>Home</div></a>
								<ul>
									<li><a href="index-corporate.html"><div>Home - Corporate</div></a>
										<ul>
											<li><a href="index-corporate.html"><div>Corporate - Layout 1</div></a></li>
											<li><a href="index-corporate-2.html"><div>Corporate - Layout 2</div></a></li>
											<li><a href="index-corporate-3.html"><div>Corporate - Layout 3</div></a></li>
											<li><a href="index-corporate-4.html"><div>Corporate - Layout 4</div></a></li>
										</ul>
									</li>
									<li><a href="index-portfolio.html"><div>Home - Portfolio</div></a>
										<ul>
											<li><a href="index-portfolio.html"><div>Portfolio - Layout 1</div></a></li>
											<li><a href="index-portfolio-2.html"><div>Portfolio - Layout 2</div></a></li>
											<li><a href="index-portfolio-3.html"><div>Portfolio - Masonry</div></a></li>
											<li><a href="index-portfolio-4.html"><div>Portfolio - AJAX</div></a></li>
										</ul>
									</li>
									<li><a href="index-blog.html"><div>Home - Blog</div></a>
										<ul>
											<li><a href="index-blog.html"><div>Blog - Layout 1</div></a></li>
											<li><a href="index-blog-2.html"><div>Blog - Layout 2</div></a></li>
											<li><a href="index-blog-3.html"><div>Blog - Layout 3</div></a></li>
										</ul>
									</li>
									<li><a href="index-shop.html"><div>Home - Shop</div></a>
										<ul>
											<li><a href="index-shop.html"><div>Shop - Layout 1</div></a></li>
											<li><a href="index-shop-2.html"><div>Shop - Layout 2</div></a></li>
										</ul>
									</li>
									<li><a href="index-magazine.html"><div>Home - Magazine</div></a>
										<ul>
											<li><a href="index-magazine.html"><div>Magazine - Layout 1</div></a></li>
											<li><a href="index-magazine-2.html"><div>Magazine - Layout 2</div></a></li>
											<li><a href="index-magazine-3.html"><div>Magazine - Layout 3</div></a></li>
										</ul>
									</li>
									<li><a href="landing.html"><div>Home - Landing Page</div></a>
										<ul>
											<li><a href="landing.html"><div>Landing Page - Layout 1</div></a></li>
											<li><a href="landing-2.html"><div>Landing Page - Layout 2</div></a></li>
											<li><a href="landing-3.html"><div>Landing Page - Layout 3</div></a></li>
											<li><a href="landing-4.html"><div>Landing Page - Layout 4</div></a></li>
											<li><a href="landing-5.html"><div>Landing Page - Layout 5</div></a></li>
										</ul>
									</li>
									<li><a href="index-fullscreen-image.html"><div>Home - Full Screen</div></a>
										<ul>
											<li><a href="index-fullscreen-image.html"><div>Full Screen - Image</div></a></li>
											<li><a href="index-fullscreen-slider.html"><div>Full Screen - Slider</div></a></li>
											<li><a href="index-fullscreen-video.html"><div>Full Screen - Video</div></a></li>
										</ul>
									</li>
									<li><a href="index-onepage.html"><div>Home - One Page</div></a>
										<ul>
											<li><a href="index-onepage.html"><div>One Page - Default</div></a></li>
											<li><a href="index-onepage-2.html"><div>One Page - Submenu</div></a></li>
											<li><a href="index-onepage-3.html"><div>One Page - Dots Style</div></a></li>
										</ul>
									</li>
									<li><a href="index-wedding.html"><div>Home - Wedding</div></a></li>
									<li><a href="index-restaurant.html"><div>Home - Restaurant</div></a></li>
									<li><a href="index-events.html"><div>Home - Events</div></a></li>
									<li><a href="index-parallax.html"><div>Home - Parallax</div></a></li>
									<li><a href="index-app-showcase.html"><div>Home - App Showcase</div></a></li>
									<li><a href="index-boxed.html"><div>Home - Boxed Layout</div></a></li>
								</ul>
							</li>
							<li><a href="#"><div>Features</div></a>
								<ul>
									<li><a href="#"><div><i class="icon-stack"></i>Sliders</div></a>
										<ul>
											<li><a href="slider-revolution.html"><div>Revolution Slider</div></a>
												<ul>
													<li><a href="rs-demo-premium-concept.html"><div>Premium Templates</div></a></li>
													<li><a href="slider-revolution.html"><div>Full Screen</div></a></li>
													<li><a href="slider-revolution-fullwidth.html"><div>Full Width</div></a></li>
													<li><a href="slider-revolution-kenburns.html"><div>Kenburns Effect</div></a></li>
													<li><a href="slider-revolution-html5-videos.html"><div>HTML5 Video</div></a></li>
												</ul>
											</li>
											<li><a href="slider-canvas.html"><div>Canvas Slider</div></a>
												<ul>
													<li><a href="slider-canvas.html"><div>Full Width</div></a></li>
													<li><a href="slider-canvas-fade.html"><div>Fade Transition</div></a></li>
													<li><a href="slider-canvas-autoplay.html"><div>Autoplay Feature</div></a></li>
													<li><a href="slider-canvas-video-event.html"><div>Custom Video Event</div></a></li>
													<li><a href="slider-canvas-pagination.html"><div>Pagination Navigation</div></a></li>
													<li><a href="slider-canvas-3.html"><div>3 Columns</div></a></li>
													<li><a href="slider-canvas-4.html"><div>4 Columns</div></a></li>
													<li><a href="slider-canvas-5.html"><div>5 Columns</div></a></li>
												</ul>
											</li>
											<li><a href="slider-flex.html"><div>Flex Slider</div></a>
												<ul>
													<li><a href="slider-flex.html"><div>Default Layout</div></a></li>
													<li><a href="slider-flex-thumbs.html"><div>with Thumbs</div></a></li>
												</ul>
											</li>
											<li><a href="slider-owl.html"><div>Owl Slider</div></a>
												<ul>
													<li><a href="slider-owl-full.html"><div>Full Width</div></a></li>
													<li><a href="slider-owl.html"><div>Boxed Width</div></a></li>
													<li><a href="slider-owl-videos.html"><div>Video Slider</div></a></li>
												</ul>
											</li>
											<li><a href="static-parallax.html"><div>Static Media</div></a>
												<ul>
													<li><a href="static-parallax.html"><div>Static - Parallax</div></a></li>
													<li><a href="static-image.html"><div>Static - Image</div></a></li>
													<li><a href="static-thumbs-grid.html"><div>Static - Thumb Gallery</div></a></li>
													<li><a href="static-html5-video.html"><div>Static - HTML5 Video</div></a></li>
													<li><a href="static-embed-video.html"><div>Static - Embedded Video</div></a></li>
												</ul>
											</li>
										</ul>
									</li>
									<li><a href="widgets.html"><div><i class="icon-gift"></i>Widgets</div></a>
										<ul>
											<li><a href="widgets.html"><div>Links</div></a></li>
											<li><a href="widgets.html"><div>Flickr Photostream</div></a></li>
											<li><a href="widgets.html"><div>Dribbble Shots</div></a></li>
											<li><a href="widgets.html"><div>Instagram Feed</div></a></li>
											<li><a href="widgets.html"><div>Posts List</div></a></li>
											<li><a href="widgets.html"><div>Twitter Feed</div></a></li>
											<li><a href="widgets.html"><div>Tabbed Widgets</div></a></li>
											<li><a href="widgets.html"><div>Carousel</div></a></li>
											<li><a href="widgets.html"><div>Subscribers</div></a></li>
											<li><a href="widgets.html"><div>Social Icons</div></a></li>
											<li><a href="widgets.html"><div>Testimonials</div></a></li>
											<li><a href="widgets.html"><div>Quick Contact</div></a></li>
											<li><a href="widgets.html"><div>Tags Cloud</div></a></li>
											<li><a href="widgets.html"><div>Video Embeds</div></a></li>
											<li><a href="widgets.html"><div>Raw Text/HTML</div></a></li>
										</ul>
									</li>
									<li><a href="#"><div><i class="icon-umbrella"></i>Headers</div></a>
										<ul>
											<li><a href="header-light.html"><div>Light Version</div></a></li>
											<li><a href="header-dark.html"><div>Dark Version</div></a></li>
											<li><a href="header-transparent.html"><div>Transparent</div></a></li>
											<li><a href="header-semi-transparent.html"><div>Semi Transparent</div></a>
												<ul>
													<li><a href="header-semi-transparent.html"><div>Light Version</div></a></li>
													<li><a href="header-semi-transparent-dark.html"><div>Dark Version</div></a></li>
												</ul>
											</li>
											<li><a href="header-side-left.html"><div>Left Side Header</div></a>
												<ul>
													<li><a href="header-side-left.html"><div>Fixed Position</div></a></li>
													<li><a href="header-side-left-open.html"><div>OnClick Open</div></a></li>
													<li><a href="header-side-left-open-push.html"><div>Push Content</div></a></li>
												</ul>
											</li>
											<li><a href="header-side-right.html"><div>Right Side Header</div></a>
												<ul>
													<li><a href="header-side-right.html"><div>Fixed Position</div></a></li>
													<li><a href="header-side-right-open.html"><div>OnClick Open</div></a></li>
													<li><a href="header-side-right-open-push.html"><div>Push Content</div></a></li>
												</ul>
											</li>
											<li><a href="header-floating.html"><div>Floating Version</div></a></li>
											<li><a href="static-sticky.html"><div>Static Sticky</div></a></li>
											<li><a href="responsive-sticky.html"><div>Responsive Sticky</div></a></li>
											<li><a href="logo-changer.html"><div>Alternate Logos</div></a></li>
											<li><a href="alternate-mobile-menu.html"><div>Alternate Mobile Menu</div></a></li>
										</ul>
									</li>
									<li><a href="side-panel.html"><div><i class="icon-line-layout"></i>Side Panel</div></a>
										<ul>
											<li><a href="side-panel-left-overlay.html"><div>Left Overlay</div></a></li>
											<li><a href="side-panel-left-push.html"><div>Left Push</div></a></li>
											<li><a href="side-panel-right-overlay.html"><div>Right Overlay</div></a></li>
											<li><a href="side-panel.html"><div>Right Push</div></a></li>
											<li><a href="side-panel-light.html"><div>Light Background</div></a></li>
										</ul>
									</li>
									<li><a href="mega-menu.html"><div><i class="icon-line-columns"></i>Mega Menu</div></a></li>
									<li><a href="#"><div><i class="icon-align-justify2"></i>Menu Styles</div></a>
										<ul>
											<li><a href="header-light.html"><div>Menu - Style 1</div></a></li>
											<li><a href="menu-2.html"><div>Menu - Style 2</div></a></li>
											<li><a href="menu-3.html"><div>Menu - Style 3</div></a></li>
											<li><a href="menu-4.html"><div>Menu - Style 4</div></a></li>
											<li><a href="menu-5.html"><div>Menu - Style 5</div></a></li>
											<li><a href="menu-6.html"><div>Menu - Style 6</div></a></li>
											<li><a href="menu-7.html"><div>Menu - Style 7</div></a></li>
											<li><a href="menu-8.html"><div>Menu - Style 8</div></a></li>
											<li><a href="menu-9.html"><div>Menu - Style 9</div></a></li>
											<li><a href="menu-10.html"><div>Menu - Overlay</div></a></li>
											<li><a href="split-menu.html"><div>Menu - Split Layout</div></a></li>
										</ul>
									</li>
									<li><a href="#"><div><i class="icon-ok-sign"></i>Page Titles</div></a>
										<ul>
											<li><a href="page.html"><div>Left Align</div></a></li>
											<li><a href="page-title-right.html"><div>Right Align</div></a></li>
											<li><a href="page-title-center.html"><div>Center Align</div></a></li>
											<li><a href="page-titledark.html"><div>Dark Style</div></a></li>
											<li><a href="page-title-pattern.html"><div>Pattern Background</div></a></li>
											<li><a href="page-title-parallax.html"><div>Parallax Background</div></a>
												<ul>
													<li><a href="page-title-parallax.html"><div>Default Header</div></a></li>
													<li><a href="page-title-parallax-header.html"><div>Transparent Header</div></a></li>
												</ul>
											</li>
											<li><a href="page-title-video.html"><div>HTML5 Video</div></a></li>
											<li><a href="page-title-nobg.html"><div>No Background</div></a></li>
											<li><a href="page-title-mini.html"><div>Mini Version</div></a></li>
										</ul>
									</li>
									<li><a href="contact.html"><div><i class="icon-envelope-alt"></i>Contact Pages</div></a>
										<ul>
											<li><a href="contact.html">Contact 1</a></li>
											<li><a href="contact-2.html">Contact 2</a></li>
											<li><a href="contact-3.html">Contact 3</a></li>
											<li><a href="contact-4.html">Contact 4</a></li>
											<li><a href="contact-5.html">Contact 5</a></li>
											<li><a href="contact-6.html">Contact 6</a></li>
											<li><a href="contact-7.html">Contact 7</a></li>
										</ul>
									</li>
									<li><a href="#footer" data-scrollto="#footer"><div><i class="icon-th"></i>Footers</div></a>
										<ul>
											<li><a href="sticky-footer.html"><div>Sticky Footer</div></a></li>
											<li><a href="#footer" data-scrollto="#footer"><div>Footer - Layout 1</div></a></li>
											<li><a href="footer-2.html#footer"><div>Footer - Layout 2</div></a></li>
											<li><a href="footer-3.html#footer"><div>Footer - Layout 3</div></a></li>
											<li><a href="footer-4.html#footer"><div>Footer - Layout 4</div></a></li>
											<li><a href="footer-5.html#footer"><div>Footer - Layout 5</div></a></li>
											<li><a href="footer-6.html#footer"><div>Footer - Layout 6</div></a></li>
											<li><a href="footer-7.html#footer"><div>Footer - Layout 7</div></a></li>
										</ul>
									</li>
									<li><a href="#"><div><i class="icon-calendar3"></i>Events</div></a>
										<ul>
											<li><a href="events-calendar.html"><div>Full Width Calendar</div></a></li>
											<li><a href="events-list.html"><div>Events List</div></a>
												<ul>
													<li><a href="events-list.html"><div>Right Sidebar</div></a></li>
													<li><a href="events-list-left-sidebar.html"><div>Left Sidebar</div></a></li>
													<li><a href="events-list-both-sidebar.html"><div>Both Sidebar</div></a></li>
													<li><a href="events-list-fullwidth.html"><div>Full Width</div></a></li>
													<li><a href="events-list-parallax.html"><div>Parallax List</div></a></li>
												</ul>
											</li>
											<li><a href="event-single.html"><div>Single Event</div></a>
												<ul>
													<li><a href="event-single-right-sidebar.html"><div>Right Sidebar</div></a></li>
													<li><a href="event-single-left-sidebar.html"><div>Left Sidebar</div></a></li>
													<li><a href="event-single-both-sidebar.html"><div>Both Sidebar</div></a></li>
													<li><a href="event-single.html"><div>Full Width</div></a></li>
												</ul>
											</li>
											<li><a href="event-single-full-width-image.html"><div>Single Event - Full</div></a>
												<ul>
													<li><a href="event-single-full-width-image.html"><div>Parallax Image</div></a></li>
													<li><a href="event-single-full-width-map.html"><div>Google Map</div></a></li>
													<li><a href="event-single-full-width-slider.html"><div>Slider Gallery</div></a></li>
													<li><a href="event-single-full-width-video.html"><div>HTML5 Video</div></a></li>
												</ul>
											</li>
										</ul>
									</li>
									<li><a href="modal-onload.html"><div><i class="icon-line-expand"></i>Modal OnLoad</div></a>
										<ul>
											<li><a href="modal-onload.html"><div>Simple Layout</div></a></li>
											<li><a href="modal-onload-iframe.html"><div>Video iFrame</div></a></li>
											<li><a href="modal-onload-subscribe.html"><div>Subscription Form</div></a></li>
											<li><a href="modal-onload-common-height.html"><div>Common Height</div></a></li>
											<li><a href="modal-onload-cookie.html"><div>Cookies Enabled</div></a></li>
										</ul>
									</li>
									<li><a href="coming-soon.html"><div><i class="icon-time"></i>Coming Soon</div></a>
										<ul>
											<li><a href="coming-soon.html"><div>Simple Layout</div></a></li>
											<li><a href="coming-soon-2.html"><div>Parallax Image</div></a></li>
											<li><a href="coming-soon-3.html"><div>HTML5 Video</div></a></li>
										</ul>
									</li>
									<li><a href="profile.html"><div><i class="icon-user"></i>User Profile</div></a></li>
								</ul>
							</li>
							<li class="mega-menu"><a href="#"><div>Pages</div></a>
								<div class="mega-menu-content style-2 clearfix">
									<ul class="mega-menu-column col-lg-3">
										<li class="mega-menu-title"><a href="#"><div>Introduction</div></a>
											<ul>
												<li><a href="about.html"><div>About Us</div></a></li>
												<li><a href="about-2.html"><div>About Us - Layout 2</div></a></li>
												<li><a href="about-me.html"><div>About Me</div></a></li>
												<li><a href="team.html"><div>Team Members</div></a></li>
												<li><a href="jobs.html"><div>Careers</div></a></li>
												<li><a href="side-navigation.html"><div>Side Navigation</div></a></li>
												<li><a href="page-submenu.html"><div>Page Submenu</div></a></li>
												<li><a href="sitemap.html"><div>Sitemap</div></a></li>
											</ul>
										</li>
									</ul>
									<ul class="mega-menu-column col-lg-3">
										<li class="mega-menu-title"><a href="#"><div>Utility</div></a>
											<ul>
												<li><a href="services.html"><div>Services - Layout 1</div></a></li>
												<li><a href="services-2.html"><div>Services - Layout 2</div></a></li>
												<li><a href="services-3.html"><div>Services - Layout 3</div></a></li>
												<li><a href="faqs.html"><div>FAQs - Layout 1</div></a></li>
												<li><a href="faqs-4.html"><div>FAQs - Layout 4</div></a></li>
												<li><a href="maintenance.html"><div>Maintenance Page</div></a></li>
											</ul>
										</li>
									</ul>
									<ul class="mega-menu-column col-lg-3">
										<li class="mega-menu-title"><a href="#"><div>Layout Grids</div></a>
											<ul>
												<li><a href="full-width.html"><div>Full Width</div></a></li>
												<li><a href="full-width-wide.html"><div>Full Width - Wide</div></a></li>
												<li><a href="right-sidebar.html"><div>Right Sidebar</div></a></li>
												<li><a href="left-sidebar.html"><div>Left Sidebar</div></a></li>
												<li><a href="both-right-sidebar.html"><div>Both Right Sidebar</div></a></li>
												<li><a href="both-left-sidebar.html"><div>Both Left Sidebar</div></a></li>
												<li><a href="blank-page.html"><div>Blank Page</div></a></li>
											</ul>
										</li>
									</ul>
									<ul class="mega-menu-column col-lg-3">
										<li class="mega-menu-title"><a href="#"><div>Miscellaneous</div></a>
											<ul>
												<li><a href="login-register.html"><div>Login/Register</div></a></li>
												<li><a href="login-register-2.html"><div>Login/Register - Style 2</div></a></li>
												<li><a href="404-3.html"><div>404 - HTML5 Video</div></a></li>
											</ul>
										</li>
									</ul>
								</div>
							</li>
							<li class="mega-menu"><a href="#"><div>Portfolio</div></a>
								<div class="mega-menu-content style-2 clearfix">
									<ul class="mega-menu-column col-5">
										<li class="mega-menu-title"><a href="#"><div>Grids</div></a>
											<ul>
												<li><a href="portfolio-1.html"><div>1 Column</div></a></li>
												<li><a href="portfolio-2.html"><div>2 Columns</div></a></li>
												<li><a href="portfolio-3.html"><div>3 Columns</div></a></li>
												<li><a href="portfolio.html"><div>4 Columns</div></a></li>
												<li><a href="portfolio-5.html"><div>5 Columns</div></a></li>
												<li><a href="portfolio-6.html"><div>6 Columns</div></a></li>
											</ul>
										</li>
									</ul>
									<ul class="mega-menu-column col-5">
										<li class="mega-menu-title"><a href="#"><div>Masonry</div></a>
											<ul>
												<li><a href="portfolio-mixed-masonry.html"><div>Mixed Columns</div></a></li>
												<li><a href="portfolio-2-masonry.html"><div>2 Columns</div></a></li>
												<li><a href="portfolio-3-masonry.html"><div>3 Columns</div></a></li>
												<li><a href="portfolio-masonry.html"><div>4 Columns</div></a></li>
												<li><a href="portfolio-5-masonry.html"><div>5 Columns</div></a></li>
												<li><a href="portfolio-6-masonry.html"><div>6 Columns</div></a></li>
											</ul>
										</li>
									</ul>
									<ul class="mega-menu-column col-5">
										<li class="mega-menu-title"><a href="#"><div>Loading Styles</div></a>
											<ul>
												<li><a href="portfolio.html"><div>jQuery Filter</div></a></li>
												<li><a href="portfolio-jpagination.html"><div>jQuery Pagination</div></a></li>
												<li><a href="portfolio-infinity-scroll.html"><div>Infinity Scroll</div></a></li>
												<li><a href="portfolio-ajax.html"><div>AJAX In Page</div></a></li>
												<li><a href="portfolio-ajax-in-modal.html"><div>AJAX In Modal</div></a></li>
												<li><a href="portfolio-filter-styles.html"><div>Filter Styles</div></a></li>
											</ul>
										</li>
									</ul>
									<ul class="mega-menu-column col-5">
										<li class="mega-menu-title"><a href="#"><div>Single Project</div></a>
											<ul>
												<li><a href="portfolio-single-extended.html"><div>Extended Item</div></a></li>
												<li><a href="portfolio-single-fullwidth.html"><div>Parallax Image</div></a></li>
												<li><a href="portfolio-single-gallery-full.html"><div>Slider Gallery</div></a></li>
												<li><a href="portfolio-single-video-fullwidth-left-sidebar.html"><div>HTML5 Video</div></a></li>
												<li><a href="portfolio-single-thumbs-right-sidebar.html"><div>Masonry Thumbs</div></a></li>
												<li><a href="portfolio-single-video-both-sidebar.html"><div>Embed Video</div></a></li>
											</ul>
										</li>
									</ul>
									<ul class="mega-menu-column col-5">
										<li class="mega-menu-title"><a href="#"><div>Layouts</div></a>
											<ul>
												<li><a href="portfolio-nomargin.html"><div>Default</div></a></li>
												<li><a href="portfolio-1-alt-right-sidebar.html"><div>Right Sidebar</div></a></li>
												<li><a href="portfolio-3-left-sidebar.html"><div>Left Sidebar</div></a></li>
												<li><a href="portfolio-2-both-sidebar.html"><div>Both Sidebar</div></a></li>
												<li><a href="portfolio-fullwidth-notitle.html"><div>100% Width</div></a></li>
												<li><a href="portfolio-parallax.html"><div>Parallax</div></a></li>
											</ul>
										</li>
									</ul>
								</div>
							</li>
							<li class="mega-menu"><a href="#"><div>Blog</div></a>
								<div class="mega-menu-content style-2 clearfix">
									<ul class="mega-menu-column col-lg-3">
										<li class="mega-menu-title"><a href="#"><div>Default</div></a>
											<ul>
												<li><a href="blog.html"><div>Right Sidebar</div></a></li>
												<li><a href="blog-left-sidebar.html"><div>Left Sidebar</div></a></li>
												<li><a href="blog-both-sidebar.html"><div>Both Sidebar</div></a></li>
												<li><a href="blog-full-width.html"><div>Full Width</div></a></li>
											</ul>
										</li>
										<li class="mega-menu-title"><a href="#"><div>Timeline</div></a>
											<ul>
												<li><a href="blog-timeline-right-sidebar.html"><div>Right Sidebar</div></a></li>
												<li><a href="blog-timeline-left-sidebar.html"><div>Left Sidebar</div></a></li>
												<li><a href="blog-timeline.html"><div>Full Width</div></a></li>
											</ul>
										</li>
									</ul>
									<ul class="mega-menu-column col-lg-3">
										<li class="mega-menu-title"><a href="#"><div>Masonry</div></a>
											<ul>
												<li><a href="blog-masonry.html"><div>4 Columns</div></a></li>
												<li><a href="blog-masonry-3.html"><div>3 Columns</div></a></li>
												<li><a href="blog-masonry-2.html"><div>2 Columns</div></a></li>
												<li><a href="blog-masonry-full.html"><div>100% Width</div></a></li>
											</ul>
										</li>
										<li class="mega-menu-title"><a href="#"><div>Grid</div></a>
											<ul>
												<li><a href="blog-grid.html"><div>4 Columns</div></a></li>
												<li><a href="blog-grid-3.html"><div>3 Columns</div></a></li>
												<li><a href="blog-grid-2.html"><div>2 Columns</div></a></li>
											</ul>
										</li>
									</ul>
									<ul class="mega-menu-column col-lg-3">
										<li class="mega-menu-title"><a href="#"><div>Small Thumbs</div></a>
											<ul>
												<li><a href="blog-small-left-sidebar.html"><div>Left Sidebar</div></a></li>
												<li><a href="blog-small.html"><div>Right Sidebar</div></a></li>
												<li><a href="blog-small-both-sidebar.html"><div>Both Sidebar</div></a></li>
												<li><a href="blog-small-full-width.html"><div>Full Width</div></a></li>
												<li><a href="blog-small-alt.html"><div>Alternate Layout</div></a></li>
											</ul>
										</li>
										<li class="mega-menu-title"><a href="#"><div>Item Splitting</div></a>
											<ul>
												<li><a href="blog-grid.html"><div>Pagination</div></a></li>
												<li><a href="blog-masonry.html"><div>Infinite Scroll</div></a></li>
											</ul>
										</li>
									</ul>
									<ul class="mega-menu-column col-lg-3">
										<li class="mega-menu-title"><a href="#"><div>Single</div></a>
											<ul>
												<li><a href="blog-single.html"><div>Default Layout</div></a></li>
												<li><a href="blog-single-left-sidebar.html"><div>Left Sidebar</div></a></li>
												<li><a href="blog-single-full.html"><div>Full Width</div></a></li>
												<li><a href="blog-single-small.html"><div>Small Image</div></a></li>
												<li><a href="blog-single-split-right-sidebar.html"><div>Split Layout</div></a></li>
											</ul>
										</li>
										<li class="mega-menu-title"><a href="#"><div>Comments Module</div></a>
											<ul>
												<li><a href="blog-single-left-sidebar.html#comments"><div>Facebook Comments</div></a></li>
												<li><a href="blog-single-small.html#comments"><div>Disqus Comments</div></a></li>
											</ul>
										</li>
									</ul>
								</div>
							</li>
							<li><a href="shop.html"><div>Shop</div></a>
								<ul>
									<li><a href="shop.html"><div>4 Columns</div></a></li>
									<li><a href="shop-3.html"><div>3 Columns</div></a>
										<ul>
											<li><a href="shop-3.html"><div>Full Width</div></a></li>
											<li><a href="shop-3-right-sidebar.html"><div>Right Sidebar</div></a></li>
											<li><a href="shop-3-left-sidebar.html"><div>Left Sidebar</div></a></li>
										</ul>
									</li>
									<li><a href="shop-2.html"><div>2 Columns</div></a>
										<ul>
											<li><a href="shop-2-right-sidebar.html"><div>Right Sidebar</div></a></li>
											<li><a href="shop-2-left-sidebar.html"><div>Left Sidebar</div></a></li>
											<li><a href="shop-2-both-sidebar.html"><div>Both Sidebar</div></a></li>
										</ul>
									</li>
									<li><a href="shop-1.html"><div>1 Columns</div></a>
										<ul>
											<li><a href="shop-1.html"><div>Full Width</div></a></li>
											<li><a href="shop-1-right-sidebar.html"><div>Right Sidebar</div></a></li>
											<li><a href="shop-1-left-sidebar.html"><div>Left Sidebar</div></a></li>
											<li><a href="shop-1-both-sidebar.html"><div>Both Sidebar</div></a></li>
										</ul>
									</li>
									<li><a href="shop-category-parallax.html"><div>Categories - Parallax</div></a></li>
									<li><a href="shop-combination-filter.html"><div>Combination Filter</div></a></li>
									<li><a href="shop-single.html"><div>Single Product</div></a>
										<ul>
											<li><a href="shop-single.html"><div>Full Width</div></a></li>
											<li><a href="shop-single-right-sidebar.html"><div>Right Sidebar</div></a></li>
											<li><a href="shop-single-left-sidebar.html"><div>Left Sidebar</div></a></li>
											<li><a href="shop-single-both-sidebar.html"><div>Both Sidebar</div></a></li>
										</ul>
									</li>
									<li><a href="cart.html"><div>Cart</div></a></li>
									<li><a href="checkout.html"><div>Checkout</div></a></li>
								</ul>
							</li>
							<li class="mega-menu"><a href="#"><div>Shortcodes</div></a>
								<div class="mega-menu-content clearfix">
									<ul class="mega-menu-column col-5">
										<li><a href="animations.html"><div><i class="icon-magic"></i>Animations</div></a></li>
										<li><a href="buttons.html"><div><i class="icon-link"></i>Buttons</div></a></li>
										<li><a href="carousel.html"><div><i class="icon-heart3"></i>Carousel</div></a></li>
										<li><a href="charts.html"><div><i class="icon-bar-chart"></i>Charts</div></a></li>
										<li><a href="clients.html"><div><i class="icon-apple"></i>Clients</div></a></li>
										<li><a href="columns-grids.html"><div><i class="icon-th-large"></i>Columns</div></a></li>
										<li><a href="counters.html"><div><i class="icon-time"></i>Counters</div></a></li>
										<li><a href="component-datatable.html"><div><i class="icon-table"></i>Data Tables</div></a></li>
										<li><a href="component-datepicker.html"><div><i class="icon-calendar3"></i>Date &amp; Time Pickers</div></a></li>
									</ul>
									<ul class="mega-menu-column col-5">
										<li><a href="dividers.html"><div><i class="icon-indent-right"></i>Dividers</div></a></li>
										<li><a href="featured-boxes.html"><div><i class="icon-lightbulb"></i>Icon Boxes</div></a></li>
										<li><a href="gallery.html"><div><i class="icon-picture"></i>Galleries</div></a></li>
										<li><a href="headings-dropcaps.html"><div><i class="icon-pencil2"></i>Heading Styles</div></a></li>
										<li><a href="icon-lists.html"><div><i class="icon-list-alt"></i>Icon Lists</div></a></li>
										<li><a href="labels-badges.html"><div><i class="icon-plus-sign"></i>Labels</div></a></li>
										<li><a href="lightbox.html"><div><i class="icon-resize-full"></i>Lightbox</div></a></li>
										<li><a href="form-elements.html"><div><i class="icon-edit"></i>Form Elements</div></a></li>
										<li><a href="component-uploads.html"><div><i class="icon-line-upload"></i>File Uploads</div></a></li>
									</ul>
									<ul class="mega-menu-column col-5">
										<li><a href="lists-cards.html"><div><i class="icon-th-list"></i>Lists &amp; Cards</div></a></li>
										<li><a href="maps.html"><div><i class="icon-map-marker2"></i>Maps</div></a></li>
										<li><a href="media-embeds.html"><div><i class="icon-play"></i>Media Embeds</div></a></li>
										<li><a href="modal-popovers.html"><div><i class="icon-move"></i>Modal Boxes</div></a></li>
										<li><a href="navigation.html"><div><i class="icon-align-justify2"></i>Navigations</div></a></li>
										<li><a href="pagination-progress.html"><div><i class="icon-cogs"></i>Pagination</div></a></li>
										<li><a href="pie-skills.html"><div><i class="icon-tasks"></i>Pies &amp; Skills</div></a></li>
										<li><a href="component-range-slider.html"><div><i class="icon-line-move"></i>Range Slider</div></a></li>
										<li><a href="component-ratings.html"><div><i class="icon-star3"></i>Star Ratings</div></a></li>
									</ul>
									<ul class="mega-menu-column col-5">
										<li><a href="pricing.html"><div><i class="icon-dollar"></i>Pricing Boxes</div></a></li>
										<li><a href="process-steps.html"><div><i class="icon-thumbs-up"></i>Process Steps</div></a></li>
										<li><a href="promo-boxes.html"><div><i class="icon-rocket"></i>Promo Boxes</div></a></li>
										<li><a href="quotes-blockquotes.html"><div><i class="icon-quote-left"></i>Blockquotes</div></a></li>
										<li><a href="responsive.html"><div><i class="icon-laptop2"></i>Responsive</div></a></li>
										<li><a href="sections.html"><div><i class="icon-folder-open"></i>Sections</div></a></li>
										<li><a href="social-icons.html"><div><i class="icon-facebook2"></i>Social Icons</div></a></li>
										<li><a href="component-select-picker.html"><div><i class="icon-select"></i>Select Picker</div></a></li>
										<li><a href="component-select-box.html"><div><i class="icon-line-columns"></i>Select Boxes</div></a></li>
									</ul>
									<ul class="mega-menu-column col-5">
										<li><a href="style-boxes.html"><div><i class="icon-exclamation-sign"></i>Alert Boxes</div></a></li>
										<li><a href="styled-icons.html"><div><i class="icon-flag2"></i>Styled Icons</div></a></li>
										<li><a href="tables.html"><div><i class="icon-table"></i>Tables</div></a></li>
										<li><a href="tabs.html"><div><i class="icon-star3"></i>Tabs</div></a></li>
										<li><a href="testimonials-twitter.html"><div><i class="icon-user4"></i>Testimonials</div></a></li>
										<li><a href="thumbnails-slider.html"><div><i class="icon-camera3"></i>Thumbnails</div></a></li>
										<li><a href="toggles-accordions.html"><div><i class="icon-ok-circle"></i>Toggles</div></a></li>
										<li><a href="component-radios-switches.html"><div><i class="icon-line-square-check"></i>Radios &amp; Switches</div></a></li>
										<li><a href="component-typeahead.html"><div><i class="icon-type"></i>Input Typeahead</div></a></li>
									</ul>
								</div>
							</li> --}}
						</ul>

						<!-- Top Cart
						============================================= -->
						{{-- <div id="top-cart">
							<a href="#" id="top-cart-trigger"><i class="icon-shopping-cart"></i><span>5</span></a>
							<div class="top-cart-content">
								<div class="top-cart-title">
									<h4>Shopping Cart</h4>
								</div>
								<div class="top-cart-items">
									<div class="top-cart-item clearfix">
										<div class="top-cart-item-image">
											<a href="#"><img src="{{ asset('images/shop/small/1.jpg') }}" alt="Blue Round-Neck Tshirt" /></a>
										</div>
										<div class="top-cart-item-desc">
											<a href="#">Blue Round-Neck Tshirt</a>
											<span class="top-cart-item-price">$19.99</span>
											<span class="top-cart-item-quantity">x 2</span>
										</div>
									</div>
									<div class="top-cart-item clearfix">
										<div class="top-cart-item-image">
											<a href="#"><img src="{{ asset('images/shop/small/6.jpg') }}" alt="Light Blue Denim Dress" /></a>
										</div>
										<div class="top-cart-item-desc">
											<a href="#">Light Blue Denim Dress</a>
											<span class="top-cart-item-price">$24.99</span>
											<span class="top-cart-item-quantity">x 3</span>
										</div>
									</div>
								</div>
								<div class="top-cart-action clearfix">
									<span class="fleft top-checkout-price">$114.95</span>
									<a href="#" class="button button-3d button-small nomargin fright">View Cart</a>
								</div>
							</div>
						</div><!-- #top-cart end --> --}}

						<!-- Top Search
						============================================= -->
						{{-- <div id="top-search">
							<a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
							<form action="search.html" method="get">
								<input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
							</form>
						</div><!-- #top-search end --> --}}

					</nav><!-- #primary-menu end -->

				</div>

			</div>

        </header><!-- #header end -->
        
        <section id="slider" class="slider-element slider-parallax swiper_wrapper customjs canvas-slider canvas-slider-grid full-screen clearfix">

			<div class="slider-parallax-inner">

				<div class="swiper-container swiper-parent">
					<div class="swiper-wrapper">
						<div class="swiper-slide" style="background: url('images/slider/swiper/thumbs/7.jpg') center center; background-size:cover;">
							{{-- <a href="#">
								<div class="overlay">
									<div class="text-overlay">
										<div class="text-overlay-title">
											<h3>Clean Bob Haircut</h3>
										</div>
									</div>
								</div>
								<span class="i-overlay nobg on-hover"><img src="images/icons/play.png" alt="Play"></span>
							</a> --}}
						</div>
						<div class="swiper-slide">
							<div class="swiper-container swiper-nested-1">
								<div class="swiper-wrapper">
									<div class="swiper-slide" style="background: url('images/slider/swiper/thumbs/2.jpg') center center; background-size:cover;">
										{{-- <a href="#">
											<div class="overlay">
												<div class="text-overlay">
													<div class="text-overlay-title">
														<h3>Cute Pink Strip of Color</h3>
													</div>
												</div>
											</div>
											<span class="i-overlay nobg on-hover"><img src="images/icons/image.png" alt="Image"></span>
										</a> --}}
									</div>
									<div class="swiper-slide" style="background: url('images/slider/swiper/thumbs/3.jpg') center center; background-size:cover;">
										{{-- <a href="#">
											<div class="overlay">
												<div class="text-overlay">
													<div class="text-overlay-title">
														<h3>Angled Lob Cut</h3>
													</div>
												</div>
											</div>
											<span class="i-overlay nobg on-hover"><img src="images/icons/image.png" alt="Image"></span>
										</a> --}}
									</div>
									<div class="swiper-slide" style="background: url('images/slider/swiper/thumbs/1.jpg') center center; background-size:cover;">
										{{-- <a href="#">
											<div class="overlay">
												<div class="text-overlay">
													<div class="text-overlay-title">
														<h3>Cute Long</h3>
													</div>
												</div>
											</div>
											<span class="i-overlay nobg on-hover"><img src="images/icons/image.png" alt="Image"></span>
										</a> --}}
									</div>
									<div class="swiper-slide" style="background: url('images/slider/swiper/thumbs/4.jpg') center center; background-size:cover;">
										{{-- <a href="#">
											<div class="overlay">
												<div class="text-overlay">
													<div class="text-overlay-title">
														<h3>High-Low Haircut</h3>
													</div>
												</div>
											</div>
											<span class="i-overlay nobg on-hover"><img src="images/icons/play.png" alt="Play"></span>
										</a> --}}
									</div>
									<div class="swiper-slide" style="background: url('images/slider/swiper/thumbs/5.jpg') center center; background-size:cover;">
										{{-- <a href="#">
											<div class="overlay">
												<div class="text-overlay">
													<div class="text-overlay-title">
														<h3>Textured Bob for Straight Fine Hair</h3>
													</div>
												</div>
											</div>
											<span class="i-overlay nobg on-hover"><img src="images/icons/image.png" alt="Image"></span>
										</a> --}}
									</div>
								</div>
								<div id="sw1-arrow-top" class="slider-arrow-top-sm"><i class="icon-angle-up"></i></div>
								<div id="sw1-arrow-bottom" class="slider-arrow-bottom-sm"><i class="icon-angle-down"></i></div>
							</div>
						</div>
						<div class="swiper-slide" style="background: url('images/slider/swiper/thumbs/13.jpg') center center; background-size:cover;">
							{{-- <a href="#">
								<div class="overlay">
									<div class="text-overlay">
										<div class="text-overlay-title">
											<h3>Medium-to-Long Cut</h3>
										</div>
									</div>
								</div>
								<span class="i-overlay nobg on-hover"><img src="images/icons/play.png" alt="Play"></span>
							</a> --}}
						</div>
						<div class="swiper-slide">
							<div class="swiper-container swiper-nested-2">
								<div class="swiper-wrapper">
									<div class="swiper-slide" style="background: url('images/slider/swiper/thumbs/10.jpg') center center; background-size:cover;">
										{{-- <a href="#">
											<div class="overlay">
												<div class="text-overlay">
													<div class="text-overlay-title">
														<h3>Medium Haircut</h3>
													</div>
												</div>
											</div>
											<span class="i-overlay nobg on-hover"><img src="images/icons/image.png" alt="Image"></span>
										</a> --}}
									</div>
									<div class="swiper-slide" style="background: url('images/slider/swiper/thumbs/14.jpg') center center; background-size:cover;">
										{{-- <a href="#">
											<div class="overlay">
												<div class="text-overlay">
													<div class="text-overlay-title">
														<h3>Chin-Length Rounded</h3>
													</div>
												</div>
											</div>
											<span class="i-overlay nobg on-hover"><img src="images/icons/image.png" alt="Image"></span>
										</a> --}}
									</div>
									<div class="swiper-slide" style="background: url('images/slider/swiper/thumbs/16.jpg') center center; background-size:cover;">
										{{-- <a href="#">
											<div class="overlay">
												<div class="text-overlay">
													<div class="text-overlay-title">
														<h3>Long Blunt Cut</h3>
													</div>
												</div>
											</div>
											<span class="i-overlay nobg on-hover"><img src="images/icons/play.png" alt="Play"></span>
										</a> --}}
									</div>
								</div>
								<div id="sw2-arrow-top" class="slider-arrow-top-sm"><i class="icon-angle-up"></i></div>
								<div id="sw2-arrow-bottom" class="slider-arrow-bottom-sm"><i class="icon-angle-down"></i></div>
							</div>
						</div>
						<div class="swiper-slide" style="background: url('images/slider/swiper/thumbs/12.jpg') center center; background-size:cover;">
							{{-- <a href="#">
								<div class="overlay">
									<div class="text-overlay">
										<div class="text-overlay-title">
											<h3>Short Inverted Rounded</h3>
										</div>
									</div>
								</div>
								<span class="i-overlay nobg on-hover"><img src="images/icons/image.png" alt="Image"></span>
							</a> --}}
						</div>
						<div class="swiper-slide">
							<div class="swiper-container swiper-nested-3">
								<div class="swiper-wrapper">
									<div class="swiper-slide" style="background: url('images/slider/swiper/thumbs/6.jpg') center center; background-size:cover;">
										{{-- <a href="#">
											<div class="overlay">
												<div class="text-overlay">
													<div class="text-overlay-title">
														<h3>Long Layers and Textured Ends</h3>
													</div>
												</div>
											</div>
											<span class="i-overlay nobg on-hover"><img src="images/icons/play.png" alt="Play"></span>
										</a> --}}
									</div>
									<div class="swiper-slide" style="background: url('images/slider/swiper/thumbs/9.jpg') center center; background-size:cover;">
										{{-- <a href="#">
											<div class="overlay">
												<div class="text-overlay">
													<div class="text-overlay-title">
														<h3>Messy Choppy Bob</h3>
													</div>
												</div>
											</div>
											<span class="i-overlay nobg on-hover"><img src="images/icons/image.png" alt="Image"></span>
										</a> --}}
									</div>
									<div class="swiper-slide" style="background: url('images/slider/swiper/thumbs/17.jpg') center center; background-size:cover;">
										{{-- <a href="#">
											<div class="overlay">
												<div class="text-overlay">
													<div class="text-overlay-title">
														<h3>Medium Blunt Haircut</h3>
													</div>
												</div>
											</div>
											<span class="i-overlay nobg on-hover"><img src="images/icons/image.png" alt="Image"></span>
										</a> --}}
									</div>
								</div>
								<div id="sw3-arrow-top" class="slider-arrow-top-sm"><i class="icon-angle-up"></i></div>
								<div id="sw3-arrow-bottom" class="slider-arrow-bottom-sm"><i class="icon-angle-down"></i></div>
							</div>
						</div>
						<div class="swiper-slide" style="background: url('images/slider/swiper/thumbs/11.jpg') center center; background-size:cover;">
							{{-- <a href="#">
								<div class="overlay">
									<div class="text-overlay">
										<div class="text-overlay-title">
											<h3>Chopped Angled Bob</h3>
										</div>
									</div>
								</div>
								<span class="i-overlay nobg on-hover"><img src="images/icons/image.png" alt="Image"></span>
							</a> --}}
						</div>
					</div>
					<div class="slider-arrow-left"><i class="icon-angle-left"></i></div>
					<div class="slider-arrow-right"><i class="icon-angle-right"></i></div>
				</div>

			</div>

		</section>

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="form-widget">

						<div class="form-result"></div>

						<div class="row">
							<div class="col-lg-4 order-lg-1 mb-4">
								<div class="card bg-light topmargin-sm">
									<div class="card-body">
										<h4 class="mb-3 d-block">Your Price</h4>
										<h2 class="car-rent-price h1 t600">10,000 MMK</h2>
										<div class="line line-sm"></div>
										<ul class="iconlist mb-0">
											<li class="h6 pb-1"><i class="icon-line-circle-check"></i> Get the cut that'll suit you best at the comfort of your home. Don't worry, we clean up after the service & leave your place spic & span.</li>
                                            <li class="h6 pb-1"><i class="icon-line-circle-check"></i> Approximate Service Duration - 60 Mins</li>
                                            <li class="h6"><i class="icon-line-circle-check"></i> No need to pay transportation charges</li>
											<li class="h6 pb-1"><i class="icon-line-circle-check"></i> Cancel at Any Time, Free of Charge</li>
											<li class="h6 pb-1"><i class="icon-line-circle-check"></i> Credit Card not required</li>
											<li class="h6 pb-1"><i class="icon-line-circle-check"></i> Pay when you finished</li>
										</ul>
									</div>
								</div>
							</div>

							<div class="col-lg-8">
								<form id="car-rental" class="row" action="include/form.php" method="post" enctype="multipart/form-data">
									<div class="form-process"></div>
									<div class="col-12">
										<label>Select a Service:</label>
										<div class="row car-list btn-group">
											<label class="car-image pr-0 col-6 col-md-3">
												<div class="ml-0">
													<input type="radio" name="car-rental-selected-car" class="required" id="car-rental-cars-creta" autocomplete="off" data-price="30" value="Creta" checked> Hair Cuts
													<img src="{{ asset('images/forms/car/1_400x171.jpg') }}" alt="">
												</div>
											</label>

											<label class="car-image px-0 col-6 col-md-3" style="cursor: not-allowed;opacity: .6;">
												<div>
													<input type="radio" name="car-rental-selected-car" class="required" id="car-rental-cars-honda" autocomplete="off" data-price="35" value="Honda"> Hair Wash
													<img src="{{ asset('images/forms/car/2_400x171.jpg') }}" alt="">
												</div>
											</label>

											<label class="car-image px-0 col-6 col-md-3" style="cursor: not-allowed;opacity: .6;">
												<div class="ml-3 ml-md-2">
													<input type="radio" name="car-rental-selected-car" class="required" id="car-rental-cars-fortuner" autocomplete="off" data-price="52" value="Fortuner"> Face Wash
												<img src="{{ asset('images/forms/car/3_400x171.jpg') }}" alt="">
												</div>
											</label>

											<label class="car-image px-0 col-6 col-md-3" style="cursor: not-allowed;opacity: .6;">
												<div>
													<input type="radio" name="car-rental-selected-car" class="required" id="car-rental-cars-i20" autocomplete="off" data-price="25" value="i20"> Color Hair
												<img src="{{ asset('images/forms/car/4_400x171.jpeg') }}" alt="">
												</div>
											</label>
										</div>
									</div>
									<div class="col-12">
										<div class="row input-daterange">
											<div class="col-md-6 form-group">
												<label for="car-rental-pickup-date">Book Date<small class="text-danger">*</small></label>
												<input type="text" name="car-rental-pickup-date" id="car-rental-pickup-date" class="form-control input-datepicker tleft required" value="" placeholder="Select Book Date">
											</div>
											<div class="col-md-6 form-group">
												<label for="car-rental-dropoff-date">Book Time<small class="text-danger">*</small></label>
												<input type="text" name="car-rental-dropoff-date" id="car-rental-dropoff-date" class="form-control input-datepicker tleft" value="" placeholder="Select Book Time">
											</div>
										</div>
									</div>
									{{-- <div class="col-md-6 form-group">
										<label for="car-rental-pickup-address" class="mb-3">Pickup Location<small class="text-danger">*</small></label><br>
										<div class="btn-group my-tab btn-group-toggle nav" data-toggle="buttons">
											<a href="#tab-pickup-airport" class="btn btn-outline-secondary flex-fill" data-toggle="tab">
												<input type="radio" name="car-rental-pickup-address" id="car-rental-pickup-airport" class="required" value="">Airport
											</a>
											<a href="#tab-pickup-hotel" class="btn btn-outline-secondary flex-fill" data-toggle="tab">
												<input type="radio" name="car-rental-pickup-address" id="car-rental-pickup-hotel" class="required" value="">Hotel
											</a>
										</div>

										<div class="tab-content">
											<div class="tab-pane fade mt-3" id="tab-pickup-airport">
												<label>Flight Number:</label>
												<input type="text" name="car-rental-pickup-flight-number" id="car-rental-pickup-flight-number" class="form-control required" value="" placeholder="Enter Flight Number">
											</div>
											<div class="tab-pane fade mt-3" id="tab-pickup-hotel">
												<label>Hotel Name:</label>
												<input type="text" name="car-rental-pickup-hotel-name" id="car-rental-pickup-hotel-name" class="form-control required" value="" placeholder="Enter Hotel Name">
											</div>
										</div>
									</div> --}}

									{{-- <div class="col-md-6 form-group">
										<label for="car-rental-dropoff-address" class="mb-3">Drop-Off Location<small class="text-danger">*</small></label><br>
										<div class="btn-group my-tab btn-group-toggle nav" data-toggle="buttons">
											<a href="#tab-dropoff-airport" class="btn btn-outline-secondary flex-fill" data-toggle="tab">
												<input type="radio" name="car-rental-dropoff-address" id="car-rental-dropoff-airport" value="Airport">Airport
											</a>
											<a href="#tab-dropoff-hotel" class="btn btn-outline-secondary flex-fill" data-toggle="tab">
												<input type="radio" name="car-rental-dropoff-address" id="car-rental-dropoff-hotel" value="">Hotel
											</a>
										</div>
										<div class="tab-content">
											<div class="tab-pane fade" id="tab-dropoff-airport"></div>
											<div class="tab-pane fade mt-3" id="tab-dropoff-hotel">
												<label>Hotel Name:</label>
												<input type="text" name="car-rental-dropoff-hotel-name" id="car-rental-dropoff-hotel-name" class="form-control required" value="" placeholder="Enter Hotel Name">
											</div>
										</div>
									</div> --}}
									<div class="col-md-6 form-group">
										<label for="car-rental-name">Name<small class="text-danger">*</small></label>
										<input type="text" id="car-rental-name" name="car-rental-name" value="" class="form-control required" placeholder="Enter your Full Name" />
									</div>
									<div class="col-md-6 form-group">
										<label for="car-rental-contact">Contact Number<small class="text-danger">*</small></label>
										<input type="text" name="car-rental-contact" id="car-rental-contact" class="form-control required" value="" placeholder="Enter your contact Number">
									</div>
                                    <div class="col-md-6 form-group">
										<label for="car-rental-name">Email</label>
										<input type="text" id="car-rental-name" name="car-rental-name" value="" class="form-control required" placeholder="Enter your Full Name" />
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="exampleFormControlSelect1">Township<small class="text-danger">*</small></label>
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option>Select Township</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                    <div class="col-12 form-group">
										<label for="car-rental-email">Address<small class="text-danger">*</small></label>
										<input type="email" name="car-rental-email" id="car-rental-email" class="form-control required" value="" placeholder="Enter your Email Address">
                                    </div>

                                    <div class="col-12 form-group">
                                        <label for="exampleFormControlTextarea1">Message</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>

									<div class="col-12 mt-2 mb-3">
										<div class="card p-3 bg-light">
											<div class="car-body">
												<h3 class="mb-2">Book Without Paying</h3>
												<p class="mb-0">Book now and pay your total in your place.</p>
											</div>
										</div>
									</div>
									<div class="col-12 hidden">
										<input type="text" id="car-rental-botcheck" name="car-rental-botcheck" value="" />
									</div>
									<div class="col-12">
										<button type="submit" name="car-rental-submit" class="btn btn-success btn-lg">Book Now</button>
									</div>

									<input type="hidden" name="prefix" value="car-rental-">
									<input type="hidden" name="replyto" value="car-rental-email">
									<input type="hidden" name="autoresponder" value="true">
									<input type="hidden" name="subject" value="New Car Rental Request">
									<input type="hidden" name="ar_title" value="Your Booking">
									<input type="hidden" name="ar_message" value="Dear {car-rental-name},<br><br>Your Car <strong>{car-rental-selected-car}</strong> Booking has been confirmed. Our Driver will pick you up on <strong>{car-rental-pickup-date}</strong> at <strong>{car-rental-pickup-address}</strong> <strong>{car-rental-pickup-hotel-name}</strong>.<br><br>Thank You.">
								</form>
							</div>

						</div>

					</div>

				</div>

			</div>

		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

					<div class="col_half">
						Copyrights &copy; 2020 All Rights Reserved by Hpone.<br>
						<div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
					</div>

					<div class="col_half col_last tright">
						<div class="fright clearfix">
							<a href="#" class="social-icon si-small si-borderless si-facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-twitter">
								<i class="icon-twitter"></i>
								<i class="icon-twitter"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-gplus">
								<i class="icon-gplus"></i>
								<i class="icon-gplus"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-pinterest">
								<i class="icon-pinterest"></i>
								<i class="icon-pinterest"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-vimeo">
								<i class="icon-vimeo"></i>
								<i class="icon-vimeo"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-github">
								<i class="icon-github"></i>
								<i class="icon-github"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-yahoo">
								<i class="icon-yahoo"></i>
								<i class="icon-yahoo"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-linkedin">
								<i class="icon-linkedin"></i>
								<i class="icon-linkedin"></i>
							</a>
						</div>

						<div class="clear"></div>

						<i class="icon-envelope2"></i> info@barberx.com <span class="middot">&middot;</span> <i class="icon-headphones"></i> +91-11-6541-6369 <span class="middot">&middot;</span> <i class="icon-skype2"></i> BarBerX
					</div>

				</div>

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script src="{{ asset('js/jquery.js') }}"></script>
	<script src="{{ asset('js/plugins.js') }}"></script>

	<!-- DatePicker JS -->
	<script src="{{ asset('js/components/datepicker.js') }}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{ asset('js/functions.js') }}"></script>

	<script>
        jQuery(window).on( 'load', function(){
			var swiperParent = new Swiper('.swiper-parent',{
				pagination:{
					clickable: false
				},
				slidesPerView: 4,
				grabCursor: true,
				navigation: {
					prevEl: '.slider-arrow-left',
					nextEl: '.slider-arrow-right'
				}
			});

			var swiperNested1 = new Swiper('.swiper-nested-1',{
				direction: 'vertical',
				pagination:{
					clickable: false
				},
				slidesPerView: 3,
				navigation: {
					prevEl: '#sw1-arrow-top',
					nextEl: '#sw1-arrow-bottom'
				},
				on: {
					init: function() {
						setTimeout( function(){ swiperNested1.update(); }, 500 );
					}
				}
			});

			var swiperNested2 = new Swiper('.swiper-nested-2',{
				direction: 'vertical',
				pagination:{
					clickable: false
				},
				slidesPerView: 2,
				navigation: {
					prevEl: '#sw2-arrow-top',
					nextEl: '#sw2-arrow-bottom'
				},
				on: {
					init: function() {
						setTimeout( function(){ swiperNested2.update(); }, 500 );
					}
				}
			});

			var swiperNested3 = new Swiper('.swiper-nested-3',{
				direction: 'vertical',
				pagination:{
					clickable: false
				},
				slidesPerView: 2,
				navigation: {
					prevEl: '#sw3-arrow-top',
					nextEl: '#sw3-arrow-bottom'
				},
				on: {
					init: function() {
						setTimeout( function(){ swiperNested3.update(); }, 500 );
					}
				}
			});
        });
        
		jQuery(document).ready( function(){

			$('.input-daterange').datepicker({
				autoclose: true,
				startDate: "today",
				todayHighlight: true
			});

			var pricingCAR = 0,
				carValue = $( ".car-rent-price" ),
				cars = $( 'input[name="car-rental-selected-car"]' );


			cars.change(function(){
				pricingCAR = $(this).attr('data-price');
				carValue.html( '$'+pricingCAR );
			});

			$('#car-rental').on( 'formSubmitSuccess', function(){
				carValue.html( '$0' );
			});

		});
	</script>

</body>
</html>