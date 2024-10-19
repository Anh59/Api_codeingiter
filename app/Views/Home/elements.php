<!DOCTYPE html>
<html lang="en">
<head>
<title>Elements</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travelix Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?= base_url('Home-css/styles/bootstrap4/bootstrap.min.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?= base_url('Home-css/plugins/font-awesome-4.7.0/css/font-awesome.min.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?= base_url('Home-css/styles/elements_styles.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?= base_url('Home-css/styles/elements_responsive.css'); ?>">
</head>

<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">

		<!-- Top Bar -->

		<div class="top_bar">
			<div class="container">
				<div class="row">
					<div class="col d-flex flex-row">
						<div class="phone">+45 345 3324 56789</div>
						<div class="social">
							<ul class="social_list">
								<li class="social_list_item"><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
								<li class="social_list_item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li class="social_list_item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li class="social_list_item"><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
								<li class="social_list_item"><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
								<li class="social_list_item"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							</ul>
						</div>
						<div class="user_box ml-auto">
							<div class="user_box_login user_box_link"><a href="#">login</a></div>
							<div class="user_box_register user_box_link"><a href="#">register</a></div>
						</div>
					</div>
				</div>
			</div>		
		</div>

		<!-- Main Navigation -->

		<nav class="main_nav">
			<div class="container">
				<div class="row">
					<div class="col main_nav_col d-flex flex-row align-items-center justify-content-start">
						<div class="logo_container">
							<div class="logo"><a href="#"><img src="<?= base_url('Home-css/images/logo.png'); ?>" alt="">travelix</a></div>
						</div>
						<div class="main_nav_container ml-auto">
							<ul class="main_nav_list">
								<li class="main_nav_item"><a href="index.html">home</a></li>
								<li class="main_nav_item"><a href="about.html">about us</a></li>
								<li class="main_nav_item"><a href="offers.html">offers</a></li>
								<li class="main_nav_item"><a href="blog.html">news</a></li>
								<li class="main_nav_item"><a href="contact.html">contact</a></li>
							</ul>
						</div>
						<div class="content_search ml-lg-0 ml-auto">
							<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							width="17px" height="17px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
								<g>
									<g>
										<g>
											<path class="mag_glass" fill="#FFFFFF" d="M78.438,216.78c0,57.906,22.55,112.343,63.493,153.287c40.945,40.944,95.383,63.494,153.287,63.494
											s112.344-22.55,153.287-63.494C489.451,329.123,512,274.686,512,216.78c0-57.904-22.549-112.342-63.494-153.286
											C407.563,22.549,353.124,0,295.219,0c-57.904,0-112.342,22.549-153.287,63.494C100.988,104.438,78.439,158.876,78.438,216.78z
											M119.804,216.78c0-96.725,78.69-175.416,175.415-175.416s175.418,78.691,175.418,175.416
											c0,96.725-78.691,175.416-175.416,175.416C198.495,392.195,119.804,313.505,119.804,216.78z"/>
										</g>
									</g>
									<g>
										<g>
											<path class="mag_glass" fill="#FFFFFF" d="M6.057,505.942c4.038,4.039,9.332,6.058,14.625,6.058s10.587-2.019,14.625-6.058L171.268,369.98
											c8.076-8.076,8.076-21.172,0-29.248c-8.076-8.078-21.172-8.078-29.249,0L6.057,476.693
											C-2.019,484.77-2.019,497.865,6.057,505.942z"/>
										</g>
									</g>
								</g>
							</svg>
						</div>

						<form id="search_form" class="search_form bez_1">
							<input type="search" class="search_content_input bez_1">
						</form>
						
						<div class="hamburger">
							<i class="fa fa-bars trans_200"></i>
						</div>
					</div>
				</div>
			</div>	
		</nav>

	</header>

	<div class="menu trans_500">
		<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
			<div class="menu_close_container"><div class="menu_close"></div></div>
			<div class="logo menu_logo"><a href="#"><img src="<?= base_url('Home-css/images/logo.png'); ?>" alt=""></a></div>
			<ul>
				<li class="menu_item"><a href="index.html">home</a></li>
				<li class="menu_item"><a href="about.html">about us</a></li>
				<li class="menu_item"><a href="offers.html">offers</a></li>
				<li class="menu_item"><a href="blog.html">news</a></li>
				<li class="menu_item"><a href="contact.html">contact</a></li>
			</ul>
		</div>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="<?= base_url('Home-css/images/elements_background.jpg'); ?>"></div>
		<div class="home_content">
			<div class="home_title">elements</div>
		</div>
	</div>

	<!-- Elements -->

	<div class="elements">
		<div class="container">
			<div class="row">
				<div class="col">
					
					<!-- Buttons -->
					<div class="buttons">
						<div class="row">
							<div class="col">
								<div class="elements_title">Buttons</div>
								<div class="buttons_container">
									<div class="button"><div class="button_bcg"></div><a href="#">see more<span></span><span></span><span></span></a></div>
									<div class="button button_color_1 trans_200"><a href="#">see more<span></span><span></span><span></span></a></div>
									<div class="button button_color_2 trans_200"><a href="#">see more<span></span><span></span><span></span></a></div>
									<div class="button button_line_1 trans_200"><a href="#" class="trans_200">see more<span></span><span></span><span></span></a></div>
								</div>
							</div>
						</div>
					</div>

					<!-- Progress Bars and Accordions -->

					<div class="pbars_accordions">
						<div class="row">
							<div class="col-lg-12">
								<div class="elements_title">Progress Bars & Accordions</div>
							</div>
						</div>

						<div class="row pbars_accordions_container">

							<!-- Progress Bars & Accordions -->

							<div class="col-lg-7">
								
								<!-- Progress Bars -->
								<div class="elements_progress_bars">

									<div class="pbar_container">
										<ul class="progress_bar_container col_12 clearfix">
											<li class="pb_item clearfix">
												<div class="pb_item_title">
													<h4>Trips</h4>
												</div>
												<div class="pb_item_content">
													<div id="skill_1_pbar" class="skill_bars" data-perc="0.72" data-color="#31124b"></div>
												</div>
											</li>
											<li class="pb_item clearfix">
												<div class="pb_item_title">
													<h4>Travels</h4>
												</div>
												<div class="pb_item_content">
													<div id="skill_2_pbar" class="skill_bars" data-perc="0.89" data-color="#a95ce4"></div>
												</div>
											</li>
											<li class="pb_item clearfix">
												<div class="pb_item_title">
													<h4>Hotels</h4>
												</div>
												<div class="pb_item_content">
													<div id="skill_3_pbar" class="skill_bars" data-perc="0.32" data-color="#fa6f1b"></div>
												</div>
											</li>
											<li class="pb_item clearfix">
												<div class="pb_item_title">
													<h4>Cruises</h4>
												</div>
												<div class="pb_item_content">
													<div id="skill_4_pbar" class="skill_bars" data-perc="0.92" data-color="#fa9e1b"></div>
												</div>
											</li>
										</ul>
									</div>

								</div>
							</div>

							<div class="col-lg-5">

								<!-- Accordions -->
								<div class="elements_accordions">

									<div class="accordion_container">
										<div class="accordion d-flex flex-row align-items-center active"><div>Aenean nec ipsum aliquet, pharetra magna id, interdum</div></div>
										<div class="accordion_panel">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec. Proin bibendum, augue faucibus.</p>
										</div>
									</div>

									<div class="accordion_container">
										<div class="accordion d-flex flex-row align-items-center"><div>Aenean nec ipsum aliquet, pharetra magna id, interdum</div></div>
										<div class="accordion_panel">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec. Proin bibendum, augue faucibus.</p>
										</div>
									</div>

									<div class="accordion_container">
										<div class="accordion d-flex flex-row align-items-center"><div>Aenean nec ipsum aliquet, pharetra magna id, interdum</div></div>
										<div class="accordion_panel">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec. Proin bibendum, augue faucibus.</p>
										</div>
									</div>

								</div>
							</div>

						</div>
					</div>
					
					<!-- Milestones -->

					<div class="milestones">
						<div class="row">
							<div class="col-lg-12">
								<div class="elements_title">Milestones</div>
							</div>
						</div>
						<div class="row milestones_container">
							
							<!-- Milestone -->
							<div class="col-lg-3 milestone_col">
								<div class="milestone text-center">
									<div class="milestone_icon"><img src="<?= base_url('Home-css/images/milestone_1.png'); ?>" alt=""></div>
									<div class="milestone_counter" data-end-value="255">0</div>
									<div class="milestone_text">Clients</div>
								</div>
							</div>

							<!-- Milestone -->
							<div class="col-lg-3 milestone_col">
								<div class="milestone text-center">
									<div class="milestone_icon"><img src="<?= base_url('Home-css/images/milestone_2.png'); ?>" alt=""></div>
									<div class="milestone_counter" data-end-value="1176">0</div>
									<div class="milestone_text">Projects</div>
								</div>
							</div>

							<!-- Milestone -->
							<div class="col-lg-3 milestone_col">
								<div class="milestone text-center">
									<div class="milestone_icon"><img src="<?= base_url('Home-css/images/milestone_3.png'); ?>" alt=""></div>
									<div class="milestone_counter" data-end-value="39">0</div>
									<div class="milestone_text">Countries</div>
								</div>
							</div>

							<!-- Milestone -->
							<div class="col-lg-3 milestone_col">
								<div class="milestone text-center">
									<div class="milestone_icon"><img src="<?= base_url('Home-css/images/milestone_4.png'); ?>" alt=""></div>
									<div class="milestone_counter" data-end-value="127">0</div>
									<div class="milestone_text">Coffees</div>
								</div>
							</div>

						</div>
					</div>
					
					<!-- Loaders -->

					<div class="elements_section loaders">
						<div class="elements_title">Loaders</div>
						<div class="row elements_loaders_container">
							<div class="col-lg-3 loader_col">
								<!-- Loader -->
								<div class="circle loader" data-value="0.75">
									<strong><i></i></strong>
									<span>Hard work</span>
								</div>
							</div>
							<div class="col-lg-3 loader_col">
								<!-- Loader -->
								<div class="circle loader" data-value="0.83">
									<strong><i></i></strong>
									<span>Creativity</span>
								</div>
							</div>
							<div class="col-lg-3 loader_col">
								<div class="circle loader" data-value="0.25">
									<strong><i></i></strong>
									<span>Good luck</span>
								</div>
							</div>
							<div class="col-lg-3 loader_col">
								<div class="circle loader" data-value="0.95">
									<strong><i></i></strong>
									<span>Developement</span>
								</div>
							</div>
						</div>
					</div>

					<!-- Icon Boxes -->

					<div class="icon_boxes">
						<div class="row">
							<div class="col">
								<div class="elements_title">Icon Boxes</div>
							</div>
						</div>

						<div class="row icon_boxes_container">

							<div class="col-lg-4 icon_box text-left d-flex flex-column align-items-start justify-content-start">
								<div class="icon_container d-flex flex-column justify-content-end">
									<div><img src="<?= base_url('Home-css/images/icon_1.png'); ?>" alt=""></div>
								</div>
								<h3>Cruises</h3>
								<p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
							</div>

							<div class="col-lg-4 icon_box text-left d-flex flex-column align-items-start justify-content-start">
								<div class="icon_container d-flex flex-column justify-content-end">
									<div><img src="<?= base_url('Home-css/images/icon_2.png'); ?>" alt=""></div>
								</div>
								<h3>Flights</h3>
								<p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
							</div>

							<div class="col-lg-4 icon_box text-left d-flex flex-column align-items-start justify-content-start">
								<div class="icon_container d-flex flex-column justify-content-end">
									<div><img src="<?= base_url('Home-css/images/icon_3.png'); ?>" alt=""></div>
								</div>
								<h3>Activities</h3>
								<p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
							</div>

						</div>
					</div>

				</div>
			</div>
		</div>	
	</div>

	<!-- Footer -->

	<footer class="footer"></footer>
		<div class="container">
			<div class="row">

				<!-- Footer Column -->
				<div class="col-lg-3 footer_column">
					<div class="footer_col">
						<div class="footer_content footer_about">
							<div class="logo_container footer_logo">
								<div class="logo"><a href="#"><img src="<?= base_url('Home-css/images/logo.png'); ?>" alt="">travelix</a></div>
							</div>
							<p class="footer_about_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis vu lputate eros, iaculis consequat nisl. Nunc et suscipit urna. Integer eleme ntum orci eu vehicula pretium.</p>
							<ul class="footer_social_list">
								<li class="footer_social_item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
								<li class="footer_social_item"><a href="#"><i class="fa fa-facebook-f"></i></a></li>
								<li class="footer_social_item"><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li class="footer_social_item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li class="footer_social_item"><a href="#"><i class="fa fa-behance"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Footer Column -->
				<div class="col-lg-3 footer_column">
					<div class="footer_col">
						<div class="footer_title">blog posts</div>
						<div class="footer_content footer_blog">
							
							<!-- Footer blog item -->
							<div class="footer_blog_item clearfix">
								<div class="footer_blog_image"><img src="<?= base_url('Home-css/images/footer_blog_1.jpg'); ?>" alt="https://unsplash.com/@avidenov"></div>
								<div class="footer_blog_content">
									<div class="footer_blog_title"><a href="blog.html">Travel with us this year</a></div>
									<div class="footer_blog_date">Nov 29, 2017</div>
								</div>
							</div>
							
							<!-- Footer blog item -->
							<div class="footer_blog_item clearfix">
								<div class="footer_blog_image"><img src="<?= base_url('Home-css/images/footer_blog_2.jpg'); ?>" alt="https://unsplash.com/@deannaritchie"></div>
								<div class="footer_blog_content">
									<div class="footer_blog_title"><a href="blog.html">New destinations for you</a></div>
									<div class="footer_blog_date">Nov 29, 2017</div>
								</div>
							</div>

							<!-- Footer blog item -->
							<div class="footer_blog_item clearfix">
								<div class="footer_blog_image"><img src="<?= base_url('Home-css/images/footer_blog_3.jpg'); ?>" alt="https://unsplash.com/@bergeryap87"></div>
								<div class="footer_blog_content">
									<div class="footer_blog_title"><a href="blog.html">Travel with us this year</a></div>
									<div class="footer_blog_date">Nov 29, 2017</div>
								</div>
							</div>

						</div>
					</div>
				</div>

				<!-- Footer Column -->
				<div class="col-lg-3 footer_column">
					<div class="footer_col">
						<div class="footer_title">tags</div>
						<div class="footer_content footer_tags">
							<ul class="tags_list clearfix">
								<li class="tag_item"><a href="#">design</a></li>
								<li class="tag_item"><a href="#">fashion</a></li>
								<li class="tag_item"><a href="#">music</a></li>
								<li class="tag_item"><a href="#">video</a></li>
								<li class="tag_item"><a href="#">party</a></li>
								<li class="tag_item"><a href="#">photography</a></li>
								<li class="tag_item"><a href="#">adventure</a></li>
								<li class="tag_item"><a href="#">travel</a></li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Footer Column -->
				<div class="col-lg-3 footer_column">
					<div class="footer_col">
						<div class="footer_title">contact info</div>
						<div class="footer_content footer_contact">
							<ul class="contact_info_list">
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="<?= base_url('Home-css/images/placeholder.svg'); ?>" alt=""></div></div>
									<div class="contact_info_text">4127 Raoul Wallenber 45b-c Gibraltar</div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="<?= base_url('Home-css/images/phone-call.svg'); ?>" alt=""></div></div>
									<div class="contact_info_text">2556-808-8613</div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="<?= base_url('Home-css/images/message.svg'); ?>" alt=""></div></div>
									<div class="contact_info_text"><a href="mailto:contactme@gmail.com?Subject=Hello" target="_top">contactme@gmail.com</a></div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="<?= base_url('Home-css/images/planet-earth.svg'); ?>" alt=""></div></div>
									<div class="contact_info_text"><a href="https://colorlib.com">www.colorlib.com</a></div>
								</li>
							</ul>
						</div>
					</div>
				</div>

			</div>
		</div>
	</footer>

	<!-- Copyright -->

	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 order-lg-1 order-2  ">
					<div class="copyright_content d-flex flex-row align-items-center">
						<div><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
					</div>
				</div>
				<div class="col-lg-9 order-lg-2 order-1">
					<div class="footer_nav_container d-flex flex-row align-items-center justify-content-lg-end">
						<div class="footer_nav">
							<ul class="footer_nav_list">
								<li class="footer_nav_item"><a href="index.html">home</a></li>
								<li class="footer_nav_item"><a href="about.html">about us</a></li>
								<li class="footer_nav_item"><a href="offers.html">offers</a></li>
								<li class="footer_nav_item"><a href="blog.html">news</a></li>
								<li class="footer_nav_item"><a href="#">contact</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>

<script src="<?= base_url('Home-css/js/jquery-3.2.1.min.js'); ?>"></script>
<script src="<?= base_url('Home-css/styles/bootstrap4/popper.js'); ?>"></script>
<script src="<?= base_url('Home-css/styles/bootstrap4/bootstrap.min.js'); ?>"></script>
<script src="<?= base_url('Home-css/plugins/greensock/TweenMax.min.js'); ?>"></script>
<script src="<?= base_url('Home-css/plugins/greensock/TimelineMax.min.js'); ?>"></script>
<script src="<?= base_url('Home-css/plugins/scrollmagic/ScrollMagic.min.js'); ?>"></script>
<script src="<?= base_url('Home-css/plugins/greensock/animation.gsap.min.js'); ?>"></script>
<script src="<?= base_url('Home-css/plugins/greensock/ScrollToPlugin.min.js'); ?>"></script>
<script src="<?= base_url('Home-css/plugins/progressbar/progressbar.min.js'); ?>"></script>
<script src="<?= base_url('Home-css/plugins/jquery-circle-progress-1.2.2/circle-progress.js'); ?>"></script>
<script src="<?= base_url('Home-css/plugins/parallax-js-master/parallax.min.js'); ?>"></script>
<script src="<?= base_url('Home-css/js/elements_custom.js'); ?>"></script>

</body>

</html>