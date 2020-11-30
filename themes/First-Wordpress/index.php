<?php get_header(); ?>


<!-- Banner Slider Section -->
<section class="slider-section">
	<div class="slider-holder owl-carousel position-relative">

		<?php
		$args = array(
			'post_type'  => 'sliders',
			'post_per_page'  => 3,
			'orderby' => 'title',
			'order' => 'ASC'
		);
		$sliders = new WP_Query($args);
		while ($sliders->have_posts()) : $sliders->the_post();
			?>

			<div class="slider-item">

				<?php
					$id_image = get_field('image');
					$image = wp_get_attachment_image_src($id_image, 'slider');
					?>

				<img data-src="<?php echo $image[0]; ?>" alt="">

				<div class="slider-content">
					<h2 class="xs-title text-white mb-3 pb-3 border-b-secondary d-inline-block"> <?php the_field('subtitle'); ?> </h2>
					<h3 class="xl-title  text-white text-capitalize mb-3"> <?php the_title(); ?> </h3>
					<a href="<?php the_field('link'); ?>" class="button-four xs-title">Discover More</a>
				</div>
			</div>
		<?php endwhile;
		wp_reset_postdata(); ?>


	</div>
</section>
<!-- End of Banner Slider Section -->





<!-- About Section -->
<section class="about-section py-80">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-12">
				<div class="img-holder text-right pl-3 position-relative">
					<img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" data-src="<?php echo get_template_directory_uri() ?>/assets/images/about/img-1.jpg" alt="">
					<div class="img-two position-absolute box-shadow-2 bg-white p-3">
						<img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" data-src="<?php echo get_template_directory_uri() ?>/assets/images/about/img-2.jpg" alt="" />
					</div>
					<div class="meta-info ">
						<h2 class="d-flex justify-content-center align-items-center info ls-title button-pri-rounded">Since <br> 1920</h2>
					</div>
				</div>
			</div>
			<!-- Left Image -->
			<div class="col-lg-6 col-12">
				<div class="content">
					<h2 class="xs-title left-border text-uppercase d-inline-block text-dark">Welcome To Mount Everest Sports and Events </h2>
					<h3 class="lg-title mb-4 text-black">Everything you need to your business</h3>
					<p>We do futsal,football, badminton, volleyball, judo, cricket, gym, golf and all sports related ground installation and maintaince.</p>
					<div class="list d-flex mb-4 mt-3 flex-wrap">
						<ul class="list-none mr-md-3">
							<li class="left-two-border">Powerful Product Strategy</li>
							<li class="left-two-border">Experts Team Member</li>
							<li class="left-two-border">Ready for your Services</li>
						</ul>
						<ul class="list-none">
							<li class="left-two-border">Powerful Product Strategy</li>
							<li class="left-two-border">Experts Team Member</li>
							<li class="left-two-border">Ready for your Services</li>
						</ul>
					</div>
					<div class="button-wrap">
						<a href="about.php" class="button-one">More About Us</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End of About Section -->
<!-- Service Seciton -->
<section class="service-section py-5 bg-section">
	<div class="container">
		<header class="section-header text-center mb-5">
			<h2 class="section-title font-weight-bold xs-title text-uppercase left-border d-inline-block">OUR SERVICES</h2>
			<h3 class="lg-title text-black">Quality services</h3>
		</header>
		<div class="wrapper">
			<div class="row">
				<!-- col -->
				<div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-3">
					<div class="holder position-relative bg-white">
						<div class="meta-icon bg-main text-white d-inline-block">
							<i class="fas fa-expand"></i>
						</div>
						<img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" data-src="<?php echo get_template_directory_uri() ?>/assets/images/services/img-1.webp" alt="">
						<div class="text position-absolute">
							<img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" data-src="<?php echo get_template_directory_uri() ?>/assets/images/services/import.png" alt="">
							<div class="content">
								<a href="service-detail.php" class="d-block title ls-title text-capitalize text-white mb-2">turf import</a>
								<a href="service-detail.php" class="xs-title button text-white">View Service <i class="fas fa-arrow-right ml-2"></i></a>
							</div>
						</div>
					</div>
				</div>
				<!-- col -->
				<div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-3">
					<div class="holder position-relative bg-white">
						<div class="meta-icon bg-main text-white d-inline-block">
							<i class="fas fa-expand"></i>
						</div>
						<img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" data-src="<?php echo get_template_directory_uri() ?>/assets/images/services/img-2.jpg" alt="">
						<div class="text position-absolute">
							<img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" data-src="<?php echo get_template_directory_uri() ?>/assets/images/services/engineer.png" alt="">
							<div class="content">
								<a href="service-detail.php" class="d-block title ls-title text-capitalize text-white mb-2">granules production & sales</a>
								<a href="service-detail.php" class="xs-title button text-white">View Service <i class="fas fa-arrow-right ml-2"></i></a>
							</div>
						</div>
					</div>
				</div>
				<!-- col -->
				<div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-3">
					<div class="holder position-relative bg-white">
						<div class="meta-icon bg-main text-white d-inline-block">
							<i class="fas fa-expand"></i>
						</div>
						<img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" data-src="<?php echo get_template_directory_uri() ?>/assets/images/services/img-3.jpg" alt="">
						<div class="text position-absolute">
							<img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" data-src="<?php echo get_template_directory_uri() ?>/assets/images/services/contruction.png" alt="">
							<div class="content">
								<a href="service-detail.php" class="d-block title ls-title text-capitalize text-white mb-2">All sports floor construction</a>
								<a href="service-detail.php" class="xs-title button text-white">View Service <i class="fas fa-arrow-right ml-2"></i></a>
							</div>
						</div>
					</div>
				</div>
				<!-- col -->
				<div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-3">
					<div class="holder position-relative bg-white">
						<div class="meta-icon bg-main text-white d-inline-block">
							<i class="fas fa-expand"></i>
						</div>
						<img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" data-src="<?php echo get_template_directory_uri() ?>/assets/images/services/img-4.jpg" alt="">
						<div class="text position-absolute">
							<img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" data-src="<?php echo get_template_directory_uri() ?>/assets/images/services/2516720.png" alt="">
							<div class="content">
								<a href="service-detail.php" class="d-block title ls-title text-capitalize text-white mb-2">Hybrid grass import and installation </a>
								<a href="service-detail.php" class="xs-title button text-white">View Service <i class="fas fa-arrow-right ml-2"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="btn-wrapper text-center mt-4">
				<a href="service-list.php" class="d-inline-block button-one">View all</a>
			</div>
		</div>
	</div>
</section>
<!-- End of Service Section -->
<!-- Portfolio Section -->
<section class="portfolio-section py-5">
	<div class="container">
		<header class="section-header text-center mb-4">
			<h2 class="section-title font-weight-bold xs-title text-uppercase left-border d-inline-block">OUR latest work</h2>
			<h3 class="lg-title text-black">Portfolio</h3>
		</header>
		<div class="row">
			<div class="col-12 text-center mb-5">
				<ul class="portfolio-filter list-none">
					<li class="button-two mb-2 xs-title active" data-filter="*">All Projects</li>
					<li class="button-two mb-2 xs-title" data-filter=".design">Design</li>
					<li class="button-two mb-2 xs-title" data-filter=".market">Marketing</li>
					<li class="button-two mb-2 xs-title" data-filter=".develop">Development</li>
					<li class="button-two mb-2 xs-title" data-filter=".brand">Branding</li>
				</ul>
			</div>
			<div class="col-12">
				<div id="porfolio" class="row portfolio-holder">
					<div class="col-lg-4 col-sm-6 portfolio-item design">
						<div class="portfolio-single">
							<div class="img"><img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" data-src="<?php echo get_template_directory_uri() ?>/assets/images/portfolios/port-3.jpg" alt=""></div>
							<div class="portfolio-content">
								<div class="portfolio-text">
									<a href="projects-detail.php">
										<h2 class="ls-title mb-0">Artboard Focus</h2>
									</a>
									<h3 class="p-cat xs-title">Design</h3>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6 portfolio-item brand market">
						<div class="portfolio-single">
							<div class="img"><img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" data-src="<?php echo get_template_directory_uri() ?>/assets/images/portfolios/port-1.jpg" alt=""></div>
							<div class="portfolio-content">
								<div class="portfolio-text">
									<a href="projects-detail.php">
										<h2 class="ls-title mb-0">Jonas Blue Alerm</h2>
									</a>
									<h3 class="p-cat xs-title">Development</h3>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6 portfolio-item design">
						<div class="portfolio-single">
							<div class="img"><img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" data-src="<?php echo get_template_directory_uri() ?>/assets/images/portfolios/port-2.jpg" alt=""></div>
							<div class="portfolio-content">
								<div class="portfolio-text">
									<a href="projects-detail.php">
										<h2 class="ls-title mb-0">Mincaup Juice</h2>
									</a>
									<h3 class="p-cat xs-title">Branding</h3>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6 portfolio-item brand market">
						<div class="portfolio-single">
							<div class="img"><img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" data-src="<?php echo get_template_directory_uri() ?>/assets/images/portfolios/port-4.jpg" alt=""></div>
							<div class="portfolio-content">
								<div class="portfolio-text">
									<a href="projects-detail.php">
										<h2 class="ls-title mb-0">Ledana Mazda</h2>
									</a>
									<h3 class="p-cat xs-title">Design</h3>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6 portfolio-item develop brand">
						<div class="portfolio-single">
							<div class="img"><img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" data-src="<?php echo get_template_directory_uri() ?>/assets/images/portfolios/port-5.jpg" alt=""></div>
							<div class="portfolio-content">
								<div class="portfolio-text">
									<a href="projects-detail.php">
										<h2 class="ls-title mb-0">Roboto bluren</h2>
									</a>
									<h3 class="p-cat xs-title">Development</h3>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6 portfolio-item market">
						<div class="portfolio-single">
							<div class="img"><img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" data-src="<?php echo get_template_directory_uri() ?>/assets/images/portfolios/port-6.jpg" alt=""></div>
							<div class="portfolio-content">
								<div class="portfolio-text">
									<a href="projects-detail.php">
										<h2 class="ls-title mb-0">Under waterden</h2>
									</a>
									<h3 class="p-cat xs-title">Branding</h3>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6 portfolio-item design">
						<div class="portfolio-single">
							<div class="img"><img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" data-src="<?php echo get_template_directory_uri() ?>/assets/images/portfolios/port-3.jpg" alt=""></div>
							<div class="portfolio-content">
								<div class="portfolio-text">
									<a href="projects-detail.php">
										<h2 class="ls-title mb-0">Dignissimos wisi</h2>
									</a>
									<h3 class="p-cat xs-title">Design</h3>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6 portfolio-item brand market">
						<div class="portfolio-single">
							<div class="img"><img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" data-src="<?php echo get_template_directory_uri() ?>/assets/images/portfolios/port-5.jpg" alt=""></div>
							<div class="portfolio-content">
								<div class="portfolio-text">
									<a href="projects-detail.php">
										<h2 class="ls-title mb-0">Kildren Parpest</h2>
									</a>
									<h3 class="p-cat xs-title">Marketing</h3>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6 portfolio-item brand">
						<div class="portfolio-single">
							<div class="img"><img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" data-src="<?php echo get_template_directory_uri() ?>/assets/images/portfolios/port-2.jpg" alt=""></div>
							<div class="portfolio-content">
								<div class="portfolio-text">
									<a href="projects-detail.php">
										<h2 class="ls-title mb-0">Giminy Braveran</h2>
									</a>
									<h3 class="p-cat xs-title">Branding</h3>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End of Portfolio Section -->
<!-- Testimonial Section -->
<section class="testimonial-section bg-main py-5">
	<div class="container">
		<div class="row">
			<div class="col-12 mb-2">
				<header class="section-header mb-0 text-center">
					<h2 class="section-title text-white xs-title text-uppercase left-border d-inline-block">What They Are Saying</h2>
					<h3 class="lg-title text-white mb-1">Clients Love</h3>
				</header>
				<div class="content text-white xs-title d-none">
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa quo sapiente repellat dicta laboriosam delectus distinctio ullam, voluptatum, quas ratione hic dolorum optio, at maiores excepturi nemo odit asperiores nostrum!</p>
					<div class="row mb-4">
						<div class="col-4">
							<img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" data-src="<?php echo get_template_directory_uri() ?>/assets/images/clients/logo_1.png" alt="">
						</div>
						<div class="col-4">
							<img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" data-src="<?php echo get_template_directory_uri() ?>/assets/images/clients/logo_2.png" alt="">
						</div>
						<div class="col-4">
							<img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" data-src="<?php echo get_template_directory_uri() ?>/assets/images/clients/logo_3.png" alt="">
						</div>
					</div>
					<a href="contact.php" class="button-one-sec">Contact Now</a>
				</div>
			</div>
			<!-- Left Side -->
			<div class="col-12">
				<div class="testimonial-slider owl-carousel owl-theme">
					<!-- slider Item -->
					<div class="slider-item text-white">
						<div class="client-img mb-3 text-center">
							<img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" data-src="<?php echo get_template_directory_uri() ?>/assets/images/testimonials/avatar-3.jpg" alt="">
						</div>
						<div class="qoute">
							<img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" data-src="<?php echo get_template_directory_uri() ?>/assets/images/testimonials/quote.png" alt="">
						</div>
						<div class="content xs-title mb-2 text-white text-center">
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque fugiat quos, omnis sapiente, ipsum qui praesentium quia fuga, hic dolorem, quidem! Quas deleniti sit libero ut repellat ab nostrum magnam?</p>
							<div class="client">
								<h2 class="ls-title text-sec text-capitalize">Thomas Muller</h2>
								<h3 class="desig ts-title text-white">CEO of Tech Coderz</h3>
							</div>
						</div>
					</div>
					<!-- slider Item -->
					<div class="slider-item text-white">
						<div class="client-img mb-3 text-center">
							<img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" data-src="<?php echo get_template_directory_uri() ?>/assets/images/testimonials/avatar-4.jpg" alt="">
						</div>
						<div class="qoute">
							<img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" data-src="<?php echo get_template_directory_uri() ?>/assets/images/testimonials/quote.png" alt="">
						</div>
						<div class="content xs-title mb-2 text-white text-center">
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque fugiat quos, omnis sapiente, ipsum qui praesentium quia fuga, hic dolorem, quidem! Quas deleniti sit libero ut repellat ab nostrum magnam?</p>
							<div class="client">
								<h2 class="ls-title text-sec text-capitalize">Lionela Messi</h2>
								<h3 class="desig ts-title text-white">CEO of Tech Coderz</h3>
							</div>
						</div>
					</div>
					<!-- slider Item -->
					<div class="slider-item text-white">
						<div class="client-img mb-3 text-center">
							<img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" data-src="<?php echo get_template_directory_uri() ?>/assets/images/testimonials/avatar-4.jpg" alt="">
						</div>
						<div class="qoute">
							<img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" data-src="<?php echo get_template_directory_uri() ?>/assets/images/testimonials/quote.png" alt="">
						</div>
						<div class="content xs-title mb-2 text-white text-center">
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque fugiat quos, omnis sapiente, ipsum qui praesentium quia fuga, hic dolorem, quidem! Quas deleniti sit libero ut repellat ab nostrum magnam?</p>
							<div class="client">
								<h2 class="ls-title text-sec text-capitalize">Lionela Messi</h2>
								<h3 class="desig ts-title text-white">CEO of Tech Coderz</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End of Testimonial -->


<?php get_footer(); ?>