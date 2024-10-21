
<?= $this->extend('Home/layout-home'); ?>

<?= $this->section('title') ?>
Contact
<?= $this->endSection() ?>

<?= $this->section('Home-css') ?>
<link rel="stylesheet" type="text/css" href="<?= base_url('Home-css/styles/elements_styles.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?= base_url('Home-css/styles/elements_responsive.css'); ?>">
<?= $this->endSection() ?>


<?= $this->section('Home-content'); ?>

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

	<?= $this->endSection(); ?>
	<?= $this->section('Home-scripts') ?>
	<script src="<?= base_url('Home-css/plugins/greensock/TweenMax.min.js'); ?>"></script>
	<script src="<?= base_url('Home-css/plugins/greensock/TimelineMax.min.js'); ?>"></script>
	<script src="<?= base_url('Home-css/plugins/scrollmagic/ScrollMagic.min.js'); ?>"></script>
	<script src="<?= base_url('Home-css/plugins/greensock/animation.gsap.min.js'); ?>"></script>
	<script src="<?= base_url('Home-css/plugins/greensock/ScrollToPlugin.min.js'); ?>"></script>
	<script src="<?= base_url('Home-css/plugins/progressbar/progressbar.min.js'); ?>"></script>
	<script src="<?= base_url('Home-css/plugins/jquery-circle-progress-1.2.2/circle-progress.js'); ?>"></script>
	<script src="<?= base_url('Home-css/plugins/parallax-js-master/parallax.min.js'); ?>"></script>
	<script src="<?= base_url('Home-css/js/elements_custom.js'); ?>"></script>
	<?= $this->endSection(); ?>



