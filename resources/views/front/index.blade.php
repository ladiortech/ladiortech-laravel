@extends('front.layout.admin')
@section('content')
	<!-- Integration Heading -->
	<header class="header integrations-header section">
		<div class="shapes-container">
			<div class="shape shape-circle shape-circle-1" data-aos="fade-down" data-aos-delay="200">
				<div>
				</div>
			</div>
			<div class="shape shape-circle shape-circle-2" data-aos="zoom-in" data-aos-delay="300">
				<div></div>
			</div>
			<div class="shape shape-square shape-square-1" data-aos="flip-right" data-aos-delay="400">
				<div></div>
			</div>
			<div class="shape shape-square shape-square-2" data-aos="flip-left" data-aos-delay="400">
				<div></div>
			</div>
			<div class="shape shape-square shape-square-3" data-aos="flip-left" data-aos-delay="200">
				<div></div>
			</div>
			<div class="shape shape-ring shape-ring-1">
				<div></div>
			</div>
			<div class="shape shape-ring shape-ring-2">
				<div></div>
			</div>
			<div class="shape pattern pattern-dots">
				<div></div>
			</div>
			<div class="static-shape background-shape-main">
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-10 mx-auto text-center">
					<h1 class="bold font-md font-md-lg">Ladior Tech fully integrates with multiple tools, it will make your customization experience a breeze</h1>
					<p class="lead text-muted">From a simple HTML page to a complete module bundler, even a task runner, Ladior Tech comes with ease integration for every need</p>
					<a href="#!" class="btn btn-primary btn-lg btn-rounded bold px-4 mt-4">Join Ladior Tech</a>
				</div>
			</div>
		</div>
		<div class="bubbles-wrap">
			<div class="bubbles-container">
			</div>
		</div>
	</header>
	<!-- ./How it works -->
	<section id="features" class="section how-it-works">
		<div class="shapes-container">
			<div class="shape shape-ring" data-aos="fade-right">
				<div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="section-heading text-center">
				<h2 class="bold">How it Works?</h2>
				<p class="lead text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, nulla, voluptates. Architecto eum minima necessitatibus quo reiciendis!</p>
			</div>
			<div class="row gap-y text-center text-md-left">
				<div class="col-md-4 py-4 text-center">
					<div class="shapes-figure shapes-container">
						<div class="shape shape-circle center-x">
						</div>
					</div>
					<figure class="mockup mb-4">
						<img src="{!! asset('front/img/integration/steps/plan.svg') !!}" class="mb-3 image-responsive">
					</figure>
					<h5 class="bold">Choose a plan</h5>
					<p class="text-muted">Ab ad aliquam assumenda beatae commodi distinctio dolore dolorum earum error et, exercitationem</p>
				</div>
				<div class="col-md-4 py-4 text-center">
					<div class="shapes-figure shapes-container">
						<div class="shape shape-circle center-x">
						</div>
					</div>
					<figure class="mockup mb-4">
						<img src="{!! asset('front/img/integration/steps/payment.svg') !!}" class="mb-3 image-responsive">
					</figure>
					<h5 class="bold">Payment method</h5>
					<p class="text-muted">Blanditiis cumque, eius error est et exercitationem, explicabo hic natus nobis odit porro quia</p>
				</div>
				<div class="col-md-4 py-4 text-center">
					<div class="shapes-figure shapes-container">
						<div class="shape shape-circle center-x">
						</div>
					</div>
					<figure class="mockup mb-4">
						<img src="{!! asset('front/img/integration/steps/work.svg') !!}" class="mb-3 image-responsive">
					</figure>
					<h5 class="bold">Let&#39;s work</h5>
					<p class="text-muted">A animi aperiam cupiditate eum incidunt, magni mollitia nam nemo non officia omnis, quasi quisquam</p>
				</div>
			</div>
		</div>
	</section>
	<section class="section built-tech">
		<div class="container">
			<div class="shapes-container">
				<div class="shape shape-circle" data-aos="fade-up">
					<div>
					</div>
				</div>
			</div>
			<div class="row gap-y">
				<div class="col-md-6 col-lg-7">
					<div class="card shadow border-0">
						<div class="card-body">
							<div class="row">
								<div class="col-md-8 b-md-r">
									<span class="badge badge-primary badge-pill bold px-4 py-2">Better tech</span>
									<h2 class="mt-3"><span class="bold">Industry leading</span> technology stack</h2>
									<p class="text-muted">Ladior Tech tech stack gives you everything your business needs to build robust integrtions</p>
									<figure class="">
										<img src="{!! asset('front/img/logos/webpack.svg') !!}" class="img-responsive mx-auto" alt="">
									</figure>
								</div>
								<div class="col-md-4 d-flex flex-column justify-content-around">
									<div class="text-center">
										<figure class="mockup"><img src="{!! asset('front/img/logos/javascript.svg') !!}" alt="">
										</figure>
									</div>
									<div class="text-center">
										<figure class="mockup">
											<img src="{!! asset('front/img/logos/es6.svg') !!}" alt="">
										</figure>
									</div>
									<div class="text-center">
										<figure class="mockup">
											<img src="{!! asset('front/img/logos/node-sass.svg') !!}" alt="">
										</figure>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-5">
					<div class="shapes-container">
						<div class="shape shape-ring shape-ring-1" data-aos="fade-up">
							<div>
							</div>
						</div>
					</div>
					<div class="section-heading">
						<figure class="mockup ml-0">
							<img src="{!! asset('front/img/integration/tech-globe.svg') !!}" alt="">
						</figure>
						<h2 class="my-3 font-md"><span class="bold">A complete technology stack</span> awaits for you</h2>
						<p class="text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum blanditiis pariatur excepturi provident molestias, ea non! Nesciunt impedit quo blanditiis.</p>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="media pb-3">
								<div class="bg-light p-3 rounded d-flex align-items-center justify-content-center mr-3">
									<i data-feather="activity" class="stroke-primary"></i>
								</div>
								<div class="media-body">
									<h5>Activity</h5>
									<p>Get instant insight</p>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="media pb-3">
								<div class="bg-light p-3 rounded d-flex align-items-center justify-content-center mr-3">
									<i data-feather="upload-cloud" class="stroke-primary"></i>
								</div>
								<div class="media-body">
									<h5>Deploy</h5>
									<p>Deploy your project</p>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="media pb-3">
								<div class="bg-light p-3 rounded d-flex align-items-center justify-content-center mr-3">
									<i data-feather="zap" class="stroke-primary"></i>
								</div>
								<div class="media-body">
									<h5>Fast</h5>
									<p>Development lighting fast</p>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="media pb-3">
								<div class="bg-light p-3 rounded d-flex align-items-center justify-content-center mr-3">
									<i data-feather="hexagon" class="stroke-primary"></i>
								</div>
								<div class="media-body">
									<h5>Technology</h5>
									<p>Ultimate technology</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Extend Core -->
	<section class="section extending-core border-top bg-light edge bottom-right">
		<div class="shapes-container">
			<div class="shape shape-circle">
				<div></div>
			</div>
		</div>
		<div class="container pb-9">
			<div class="row gap-y align-items-center">
				<div class="col-lg-6">
					<div class="section-heading">
						<p class="text-primary bold small text-uppercase">enterprise integration</p>
						<h2>Extend Ladior Tech</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi ipsum iste iure nihil non obcaecati quasi, sit? Aperiam asperiores atque, commodi debitis fugiat in nemo optio sint velit. Pariatur, sint!</p>
					</div>
					<a href="#" class="btn btn-rounded btn-outline-primary bw-2 mr-3">Know More</a> 
					<a href="#" class="btn btn-rounded btn-primary bw-2 bold text-contrast">Register Account</a>
				</div>
				<div class="col-lg-6">
					<div class="icons-wrapper position-relative">
						<div class="floating icon icon-xl bg-contrast rounded-circle p-3 shadow m-0 absolute d-flex justify-content-center align-items-center" style="left: 100%; top: 30%;" data-aos="fade-left">
							<img src="{!! asset('front/img/integration/blossom.svg') !!}" class="img-responsive" alt="">
						</div>
						<div class="floating icon icon-xxl bg-contrast rounded-circle p-3 shadow m-0 absolute d-flex justify-content-center align-items-center" style="left: 60%; top: -10%;" data-aos="fade-left">
							<img src="{!! asset('front/img/integration/dockbit.svg') !!}" class="img-responsive" alt="">
						</div>
						<div class="floating icon icon-xxl bg-contrast rounded-circle p-3 shadow m-0 absolute d-flex justify-content-center align-items-center" style="left: 25%; top: 0%;" data-aos="fade-left">
							<img src="{!! asset('front/img/integration/zapier.svg') !!}" class="img-responsive" alt="">
						</div>
						<div class="floating icon icon-2xl bg-contrast rounded-circle p-3 shadow m-0 absolute d-flex justify-content-center align-items-center" style="left: 0%; top: 50%;" data-aos="fade-left">
							<img src="{!! asset('front/img/integration/bitnami.svg') !!}" class="img-responsive" alt="">
						</div>
						<div class="floating icon icon-2xxl bg-contrast rounded-circle p-3 shadow m-0 absolute d-flex justify-content-center align-items-center" style="left: 23%; top: 70%;" data-aos="fade-left">
							<img src="{!! asset('front/img/integration/slack.svg') !!}" class="img-responsive" alt="">
						</div>
						<div class="floating icon icon-xxl bg-contrast rounded-circle p-3 shadow m-0 absolute d-flex justify-content-center align-items-center" style="left: 65%; top: 44%;" data-aos="fade-left">
							<img src="{!! asset('front/img/integration/monero.svg') !!}" class="img-responsive" alt="">
						</div>
						<div class="floating icon icon-xl bg-contrast rounded-circle p-3 shadow m-0 absolute d-flex justify-content-center align-items-center" style="left: 95%; top: 83%;" data-aos="fade-left">
							<img src="{!! asset('front/img/integration/dropbox.svg') !!}" class="img-responsive" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section bg-contrast edge bottom-right latest-projects">
		<div class="container bring-to-front pt-0">
			<div class="shadow-lg bg-contrast rounded">
				<div class="bg-contrast rounded-bottom p-4">
					<p class="bold lead my-0">Latest projects</p>
					<p class="text-muted my-0">Take a look at our latest projects, those customer have trust in our services to bring their business to the next level</p>
				</div>
				<div class="row no-gutters">
					<div class="col-md-4">
						<div class="project-detail zoom-image overlay overlay-secondary">
							<a href="javascript:;">
								<img width="190px" src="{!! asset('front/img/jain_super_market.png') !!}" alt="jain_super_market">
								<div class="description bg-dark text-contrast p-1 p-md-2">
									<p class="text-muted">Jain Super Bazar and willing to increase no of super markets.we provide all grossary items, fruits, vegetables, dairy&bakeris, ayurvedic products.</p>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="project-detail zoom-image overlay overlay-secondary">
							<a href="javascript:;">
								<img src="{!! asset('front/img/theme1.png') !!}" alt="theme1">
								<div class="description bg-dark text-contrast p-1 p-md-2">
									<p class="text-muted">Theme Blue has been family run since the beginning. We take pride in quality of the jewelry we provide, and are proud to place our family name upon it.</p>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="project-detail zoom-image overlay overlay-secondary">
							<a href="javascript:;">
								<img src="{!! asset('front/img/theme2.png') !!}" alt="theme2">
								<div class="description bg-dark text-contrast p-1 p-md-2">
									<p class="text-muted">Gold theme has been family run since the beginning. We take pride in quality of the jewelry we provide, and are proud to place our family name upon it.</p>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="project-detail zoom-image overlay overlay-secondary">
							<a href="javascript:;">
								<img src="{!! asset('front/img/theme3.png') !!}" alt="theme3">
								<div class="description bg-dark text-contrast p-1 p-md-2">
									<p class="text-muted">Platinum Days has been family run since the beginning. We take pride in quality of the jewelry we provide, and are proud to place our family name upon it.</p>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="project-detail zoom-image overlay overlay-secondary">
							<a href="javascript:;">
								<img src="{!! asset('front/img/theme4.png') !!}" alt="theme4">
								<div class="description bg-dark text-contrast p-1 p-md-2">
									<p class="text-muted">Theme paris Trading has been family run since the beginning. We take pride in quality of the jewelry we provide, and are proud to place our family name upon it.</p>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="project-detail zoom-image overlay overlay-secondary">
							<a href="javascript:;">
								<img src="{!! asset('front/img/theme5.png') !!}" alt="theme5">
								<div class="description bg-dark text-contrast p-1 p-md-2">
									<p class="text-muted">The Solitaire has been family run since the beginning. We take pride in quality of the jewelry we provide, and are proud to place our family name upon it.</p>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section">
		<div class="container bring-to-front">
			<div class="row gap-y align-items-center justify-content-between">
				<div class="col-md-6 order-md-last">
					<div class="mb-5">
						<p class="text-primary bold">Fill in the form</p>
						<h2>Your success is our success</h2>
						<p class="lead text-muted">If you're looking to be part of the most suitable template, just fill in the form, we're sure we can build great things together
						</p>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="d-flex align-items-center">
								<div class="icon-md bg-primary p-2 rounded-circle center-flex mr-3">
									<i data-feather="check" class="stroke-contrast"></i>
								</div>
								<p class="text-primary">Service integrations</p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="d-flex align-items-center">
								<div class="icon-md bg-primary p-2 rounded-circle center-flex mr-3">
									<i data-feather="check" class="stroke-contrast"></i>
								</div>
								<p class="text-primary">Partners integration</p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="d-flex align-items-center">
								<div class="icon-md bg-primary p-2 rounded-circle center-flex mr-3">
									<i data-feather="check" class="stroke-contrast"></i>
								</div>
								<p class="text-primary">Right technology</p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="d-flex align-items-center">
								<div class="icon-md bg-primary p-2 rounded-circle center-flex mr-3">
									<i data-feather="check" class="stroke-contrast"></i>
								</div>
								<p class="text-primary">Get discovered</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-5" data-aos="fade-right">
					<div class="card shadow-lg">
						<img src="https://picsum.photos/500/300?random=&amp;gravity=south" alt="..." class="card-img-top">
						<div class="card-body">
							<form class="form">
								<div class="form-group">
									<label for="name">Name</label> 
									<input type="text" class="form-control" id="name" placeholder="Name">
								</div>
								<div class="form-group">
									<label for="email">Email</label> 
									<input type="email" class="form-control" id="email" placeholder="Email">
								</div>
								<div class="form-group">
									<label for="company">Company</label> 
									<input type="text" class="form-control" id="company" placeholder="Company">
								</div>
								<div class="form-group mt-5">
									<button class="btn btn-rounded btn-primary btn-block btn-lg text-center" type="submit">Send my application</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Why Choose Us -->
	<section class="section why-choose-us">
		<div class="shapes-container">
			<div class="pattern pattern-dots"></div>
		</div>
		<div class="container pb-8 bring-to-front">
			<div class="row gap-y">
				<div class="col-md-6">
					<div class="mb-5">
						<h2 class="heading-line">Ease external tools integration</h2>
						<p class="text-muted lead">Easely integrates with another templates of our own creation.</p>
					</div>
					<div class="media pb-3">
						<div class="bg-light p-3 rounded d-flex align-items-center justify-content-center mr-3">
							<i data-feather="box" class="stroke-primary"></i>
						</div>
						<div class="media-body">
							<h5>Integrations</h5>
							<p>We designed Ladior Tech to be able to integrate with additional templates designed by our team</p>
						</div>
					</div>
					<div class="media">
						<div class="bg-light p-3 rounded d-flex align-items-center justify-content-center mr-3">
							<i data-feather="layers" class="stroke-primary"></i>
						</div>
						<div class="media-body">
							<h5>Components</h5>
							<p>All its components share a core styling, this will allow to share multiple components where you need</p>
						</div>
					</div>
					<hr class="my-5">
					<div class="text-center text-md-left">
						<a href="#!" class="btn btn-primary btn-rounded">Know More</a>
					</div>
				</div>
				<div class="col-md-6">
					<div class="rotated-mockups device-twin">
						<div class="browser absolute shadow-lg">
							<img src="{!! asset('front/img/screens/tablet/1.png') !!}" alt="..."></div>
							<div class="front iphone-x">
								<div class="screen">
									<img src="{!! asset('front/img/screens/app/1.png') !!}" alt="...">
								</div>
								<div class="notch"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- ./Brands -->
		<section class="section bg-light edge top-left">
			<div class="container bring-to-front">
				<div class="row gap-y">
					<div class="col-md-3 col-xs-4 col-6 px-md-5">
						<img src="{!! asset('front/img/logos/1.png') !!}" alt="" class="img-responsive mx-auto op-7" style="max-height: 60px;">
					</div>
					<div class="col-md-3 col-xs-4 col-6 px-md-5">
						<img src="{!! asset('front/img/logos/2.png') !!}" alt="" class="img-responsive mx-auto op-7" style="max-height: 60px;">
					</div>
					<div class="col-md-3 col-xs-4 col-6 px-md-5">
						<img src="{!! asset('front/img/logos/3.png') !!}" alt="" class="img-responsive mx-auto op-7" style="max-height: 60px;">
					</div>
					<div class="col-md-3 col-xs-4 col-6 px-md-5">
						<img src="{!! asset('front/img/logos/4.png') !!}" alt="" class="img-responsive mx-auto op-7" style="max-height: 60px;">
					</div>
				</div>
			</div>
		</section>
		<section class="section slider-testimonials bg-light">
			<div class="container bring-to-front">
				<div class="section-heading text-center">
					<h2>Our customers have something to say</h2>
					<p class="lead text-muted">They are the best, our customer want to let you know how Ladior Tech is helping them to achieve their goals and how simple is to use it</p>
				</div>
				<div class="card shadow-lg">
					<div class="row no-gutters">
						<div class="col-md-6">
							<!-- Images slider, will fade -->
							<div class="swiper-container h-100" data-sw-effect="fade" data-sw-space-between="0">
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<figure class="m-0 image-background cover" style="background-image: url({!! asset('front/img/testimonials/3.jpg') !!}"><img src="{!! asset('front/img/testimonials/3.jpg') !!}" alt="..." class="img--responsive invisible">
										</figure>
									</div>
									<div class="swiper-slide">
										<figure class="m-0 image-background cover" style="background-image: url({!! asset('front/img/testimonials/2.jpg') !!}"><img src="{!! asset('front/img/testimonials/2.jpg') !!}" alt="..." class="img--responsive invisible">
										</figure>
									</div>
									<div class="swiper-slide"><figure class="m-0 image-background cover" style="background-image: url({!! asset('front/img/testimonials/5.jpg') !!}"><img src="{!! asset('front/img/testimonials/5.jpg') !!}" alt="..." class="img--responsive invisible">
									</figure>
								</div>
								<div class="swiper-slide">
									<figure class="m-0 image-background cover" style="background-image: url({!! asset('front/img/testimonials/6.jpg') !!})"><img src="{!! asset('front/img/testimonials/6.jpg') !!}" alt="..." class="img--responsive invisible">
									</figure>
								</div>
							</div>
							<div class="divider">
								<div></div>
							</div>
						</div>
						<!-- Prev button -->
						<div class="swiper-button swiper-button-prev shadow">
							<i data-feather="arrow-left"></i>
						</div>
					</div>
					<div class="col-md-6"><!-- Testimonials slider, will slide -->
						<div class="swiper-container h-100">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<div class="card-body h-100 d-flex flex-column justify-content-center">
										<blockquote class="blockquote text-center mb-0">
											<figure class="mockup mb-5">
												<img src="{!! asset('front/img/logos/companies/1.svg') !!}" alt="..." class="img-responsive">
											</figure>
											<p class="mb-5 mb-md-6">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque, quas sunt enim tempore minima tenetur voluptatem provident. Incidunt accusantium.</p>
											<footer class="blockquote-footer">
												<span class="h6 text-uppercase">Jane Doe</span>
											</footer>
										</blockquote>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="card-body h-100 d-flex flex-column justify-content-center">
										<blockquote class="blockquote text-center mb-0">
											<figure class="mockup mb-5">
												<img src="{!! asset('front/img/logos/companies/2.svg') !!}" alt="..." class="img-responsive">
											</figure>
											<p class="mb-5 mb-md-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo harum eaque voluptatibus est obcaecati exercitationem maxime illo nihil voluptatem.</p>
											<footer class="blockquote-footer">
												<span class="h6 text-uppercase">John Doe</span>
											</footer>
										</blockquote>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="card-body h-100 d-flex flex-column justify-content-center">
										<blockquote class="blockquote text-center mb-0">
											<figure class="mockup mb-5"><img src="{!! asset('front/img/logos/companies/1.svg') !!}" alt="..." class="img-responsive"></figure>
											<p class="mb-5 mb-md-6">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque, quas sunt enim tempore minima tenetur voluptatem provident. Incidunt accusantium.</p>
											<footer class="blockquote-footer">
												<span class="h6 text-uppercase">Mauro</span>
											</footer>
										</blockquote>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="card-body h-100 d-flex flex-column justify-content-center">
										<blockquote class="blockquote text-center mb-0">
											<figure class="mockup mb-5">
												<img src="{!! asset('front/img/logos/companies/2.svg') !!}" alt="..." class="img-responsive">
											</figure>
											<p class="mb-5 mb-md-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo harum eaque voluptatibus est obcaecati exercitationem maxime illo nihil voluptatem.</p>
											<footer class="blockquote-footer">
												<span class="h6 text-uppercase">5studios team</span>
											</footer>
										</blockquote>
									</div>
								</div>
							</div>
						</div>
						<!-- Next button -->
						<div class="swiper-button swiper-button-next shadow">
							<i data-feather="arrow-right"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ./CTA - Create Account -->
	<section class="section bg-contrast edge top-left">
		<div class="container pt-5">
			<div class="d-flex align-items-center flex-column flex-md-row">
				<div class="text-center text-md-left">
					<p class="light mb-0 text-primary lead">Ready to get started?</p>
					<h2 class="mt-0">Create an account now</h2>
				</div>
				<a href="/" class="btn btn-primary btn-rounded mt-3 mt-md-0 ml-md-auto">Create Ladior Tech account</a>
			</div>
		</div>
	</section>
		
@endsection