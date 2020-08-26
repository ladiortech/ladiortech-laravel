@extends('admin.layout.admin')
@section('content')
	<p class="browserupgrade">
		You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
	</p>
	<nav class="st-nav navbar main-nav navigation fixed-top dark-link" id="main-nav">
		<div class="container">
			<ul class="st-nav-menu nav navbar-nav">
				<li class="st-nav-section nav-item">
					<a href="#main" class="navbar-brand">
						<img src="{!! asset('admin/img/logo.png') !!}" alt="Dashcore" class="logo logo-sticky">
					</a>
				</li>
				<li class="st-nav-section st-nav-primary nav-item">
					<a class="st-root-link nav-link" href="index.html">Home </a>
					<a class="st-root-link item-products st-has-dropdown nav-link" data-dropdown="blocks">Blocks </a>
					<a class="st-root-link item-products st-has-dropdown nav-link" data-dropdown="pages">Pages 
					</a>
					<a class="st-root-link item-company st-has-dropdown nav-link" data-dropdown="components">UI Components </a>
					<a class="st-root-link item-blog st-has-dropdown nav-link" data-dropdown="blog">Blog </a>
					<a class="st-root-link item-shop st-has-dropdown nav-link" href="shop/index.html" data-dropdown="shop">Shop</a>
				</li>
				<li class="st-nav-section st-nav-secondary nav-item">
					<a class="btn btn-rounded btn-outline mr-3 px-3" href="login.html" target="_blank"><i class="fas fa-sign-in-alt d-none d-md-inline mr-md-0 mr-lg-2"></i> <span class="d-md-none d-lg-inline">Login</span> 
					</a>
					<a class="btn btn-rounded btn-solid px-3" href="signup.html" target="_blank"><i class="fas fa-user-plus d-none d-md-inline mr-md-0 mr-lg-2"></i> <span class="d-md-none d-lg-inline">Signup</span>
					</a>
				</li>
				<!-- Mobile Navigation -->
				<li class="st-nav-section st-nav-mobile nav-item">
					<button class="st-root-link navbar-toggler" type="button">
						<span class="icon-bar"></span> 
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="st-popup">
						<div class="st-popup-container">
							<a class="st-popup-close-button">Close</a>
							<div class="st-dropdown-content-group">
								<h4 class="text-uppercase regular">Pages</h4>
								<a class="regular text-primary" href="about.html"><i class="far fa-building mr-2"></i> About </a>
								<a class="regular text-success" href="contact.html"><i class="far fa-envelope mr-2"></i> Contact 
								</a>
								<a class="regular text-warning" href="pricing.html"><i class="fas fa-hand-holding-usd mr-2"></i> Pricing 
								</a>
								<a class="regular text-info" href="faqs.html"><i class="far fa-question-circle mr-2"></i> FAQs
								</a>
							</div>
							<div class="st-dropdown-content-group border-top bw-2">
								<h4 class="text-uppercase regular">Components</h4>
								<div class="row">
									<div class="col mr-4">
										<a target="_blank" href="components/alert.html">Alerts</a> 
										<a target="_blank" href="components/badge.html">Badges</a>
										<a target="_blank" href="components/button.html">Buttons</a> 
										<a target="_blank" href="components/color.html">Colors</a> 
										<a target="_blank" href="components/accordion.html">Accordion</a> 
										<a target="_blank" href="components/cookie-law.html">Cookielaw</a>
									</div>
									<div class="col mr-4">
										<a target="_blank" href="components/overlay.html">Overlay</a> <a target="_blank" href="components/progress.html">Progress</a> 
										<a target="_blank" href="components/lightbox.html">Lightbox</a> 
										<a target="_blank" href="components/tab.html">Tabs</a> 
										<a target="_blank" href="components/tables.html">Tables</a> 
										<a target="_blank" href="components/typography.html">Typography</a>
									</div>
								</div>
							</div>
							<div class="st-dropdown-content-group bg-light b-t">
								<a href="login.html">Sign in <i class="fas fa-arrow-right"></i>
								</a>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
		<div class="st-dropdown-root">
			<div class="st-dropdown-bg">
				<div class="st-alt-bg"></div>
			</div>
			<div class="st-dropdown-arrow"></div>
			<div class="st-dropdown-container">
				<div class="st-dropdown-section" data-dropdown="blocks">
					<div class="st-dropdown-content">
						<div class="st-dropdown-content-group">
							<div class="row">
								<div class="col mr-4">
									<a class="dropdown-item" target="_blank" href="blocks/call-to-action.html">Call to actions</a> 
									<a class="dropdown-item" target="_blank" href="blocks/contact.html">Contact</a> 
									<a class="dropdown-item" target="_blank" href="blocks/counter.html">Counters</a> 
									<a class="dropdown-item" target="_blank" href="blocks/faqs.html">FAQs</a>
								</div>
								<div class="col mr-4">
									<a class="dropdown-item" target="_blank" href="blocks/footer.html">Footers</a> 
									<a class="dropdown-item" target="_blank" href="blocks/form.html">Forms</a> 
									<a class="dropdown-item" target="_blank" href="blocks/navbar.html">Navbar</a> 
									<a class="dropdown-item" target="_blank" href="blocks/navigation.html">Navigation</a>
								</div>
								<div class="col">
									<a class="dropdown-item" target="_blank" href="blocks/pricing.html">Pricing</a> 
									<a class="dropdown-item" target="_blank" href="blocks/slider.html">Sliders</a> 
									<a class="dropdown-item" target="_blank" href="blocks/team.html">Team</a> 
									<a class="dropdown-item" target="_blank" href="blocks/testimonial.html">Testimonials</a>
								</div>
							</div>
						</div>
						<div class="st-dropdown-content-group">
							<h3 class="link-title"><i class="fas fa-long-arrow-alt-right icon"></i> Coming soon</h3>
							<div class="ml-5">
								<span class="dropdown-item text-secondary">Dividers </span>
								<span class="dropdown-item text-secondary">Gallery </span>
								<span class="dropdown-item text-secondary">Screenshots</span>
							</div>
						</div>
					</div>
				</div>
				<div class="st-dropdown-section" data-dropdown="pages">
					<div class="st-dropdown-content">
						<div class="st-dropdown-content-group">
							<div class="mb-4">
								<h3 class="text-darker light text-nowrap">
									<span class="bold regular">Useful pages</span> you'll need
								</h3>
								<p class="text-secondary mt-0">Get a complete design stack</p>
							</div>
							<div class="row">
								<div class="col">
									<ul class="mr-4">
										<li><h4 class="text-uppercase regular">Error</h4></li>
										<li><a target="_blank" href="403.html">403 Error</a></li>
										<li><a target="_blank" href="404.html">404 Error</a></li>
										<li><a target="_blank" href="405.html">405 Error</a></li>
									</ul>
								</div>
								<div class="col">
									<ul class="mr-4">
										<li><h4 class="text-uppercase regular">User</h4></li>
										<li><a target="_blank" href="login.html">Login</a></li>
										<li><a target="_blank" href="register.html">Register</a></li>
										<li><a target="_blank" href="forgot.html">Forgot</a></li>
									</ul>
								</div>
								<div class="col">
									<ul>
										<li><h4 class="text-uppercase regular">Extra</h4></li>
										<li><a target="_blank" href="pricing.html">Pricing</a></li>
										<li><a target="_blank" href="terms.html">Terms</a></li>
										<li><a target="_blank" href="faqs.html">FAQ</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="st-dropdown-content-group">
							<a class="dropdown-item bold" href="about.html"><i class="far fa-building icon"></i> About </a>
							<a class="dropdown-item bold" href="contact.html"><i class="far fa-envelope icon"></i> Contact </a>
							<a class="dropdown-item bold" href="pricing.html"><i class="fas fa-hand-holding-usd icon"></i> Pricing</a>
						</div>
					</div>
				</div>
				<div class="st-dropdown-section" data-dropdown="components">
					<div class="st-dropdown-content">
						<div class="st-dropdown-content-group">
							<a class="dropdown-item" target="_blank" href="components/color.html">
								<div class="media mb-4">
									<i class="fas fa-palette mr-2 bg-primary rounded-circle icon-md text-contrast center-flex"></i>
									<div class="media-body">
										<h3 class="link-title m-0">Colors</h3>
										<p class="m-0 text-secondary">Get to know DashCore color options</p>
									</div>
								</div>
							</a>
							<a class="dropdown-item" target="_blank" href="components/accordion.html">
								<div class="media mb-4">
									<i class="fas fa-bars mr-2 bg-primary rounded-circle icon-md text-contrast center-flex"></i>
									<div class="media-body">
										<h3 class="link-title m-0">Accordion</h3>
										<p class="m-0 text-secondary">Useful accordion elements</p>
									</div>
								</div>
							</a>
							<a class="dropdown-item" target="_blank" href="components/cookie-law.html">
								<div class="media mb-4">
									<i class="fas fa-cookie-bite mr-2 bg-primary rounded-circle icon-md text-contrast center-flex"></i>
									<div class="media-body">
										<h3 class="link-title m-0">CookieLaw</h3>
										<p class="m-0 text-secondary">Comply with the hideous EU Cookie Law</p>
									</div>
								</div>
							</a>
							<h4 class="text-uppercase regular">Huge components list</h4>
							<div class="row">
								<div class="col mr-4">
									<a class="dropdown-item" target="_blank" href="components/alert.html">Alerts</a> 
									<a class="dropdown-item" target="_blank" href="components/badge.html">Badges</a> 
									<a class="dropdown-item" target="_blank" href="components/button.html">Buttons</a>
								</div>
								<div class="col mr-4">
									<a class="dropdown-item" target="_blank" href="components/overlay.html">Overlay</a> 
									<a class="dropdown-item" target="_blank" href="components/progress.html">Progress</a> 
									<a class="dropdown-item" target="_blank" href="components/lightbox.html">Lightbox</a>
								</div>
								<div class="col mr-4">
									<a class="dropdown-item" target="_blank" href="components/tab.html">Tabs</a> <a class="dropdown-item" target="_blank" href="components/tables.html">Tables</a> 
									<a class="dropdown-item" target="_blank" href="components/typography.html">Typography</a>
								</div>
							</div>
						</div>
						<div class="st-dropdown-content-group">
							<a class="dropdown-item" target="_blank" href="components/wizard.html">Wizard <span class="badge badge-pill badge-primary">New</span></a> 
							<span class="dropdown-item d-flex align-items-center text-muted">Timeline <i class="fas fa-ban ml-auto"></i></span> 
							<span class="dropdown-item d-flex align-items-center text-muted">Process <i class="fas fa-ban ml-auto"></i></span>
						</div>
					</div>
				</div>
				<div class="st-dropdown-section" data-dropdown="blog">
					<div class="st-dropdown-content">
						<div class="st-dropdown-content-group">
							<div class="row">
								<div class="col mr-4">
									<h4 class="regular text-uppercase">Full width</h4>
									<a class="dropdown-item" target="_blank" href="blog/blog-post.html">Single post</a> 
									<a class="dropdown-item" target="_blank" href="blog/blog-grid.html">Posts Grid</a>
								</div>
								<div class="col mr-4">
									<h4 class="regular text-uppercase">Sidebar left</h4>
									<a class="dropdown-item" target="_blank" href="blog/blog-post-sidebar-left.html">Single post</a> 
									<a class="dropdown-item" target="_blank" href="blog/blog-grid-sidebar-left.html">Posts Grid</a>
								</div>
								<div class="col mr-4">
									<h4 class="regular text-uppercase">Sidebar right</h4>
									<a class="dropdown-item" target="_blank" href="blog/blog-post-sidebar-right.html">Single post</a> 
									<a class="dropdown-item" target="_blank" href="blog/blog-grid-sidebar-right.html">Posts Grid</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="st-dropdown-section" data-dropdown="shop">
					<div class="st-dropdown-content">
						<div class="st-dropdown-content-group">
							<a class="dropdown-item" target="_blank" href="shop/home.html">
								<div class="media align-items-center">
									<div class="bg-success text-contrast icon-md center-flex rounded-circle mr-3">
										<i class="fas fa-shopping-basket"></i>
									</div>
									<div class="media-body">
										<h3 class="link-title m-0">Home</h3>
										<p class="m-0 text-secondary">Online store home with an outstanding UX</p>
									</div>
								</div>
							</a>
							<a class="dropdown-item" target="_blank" href="shop/cart.html">
								<div class="media align-items-center">
									<div class="bg-info text-contrast icon-md center-flex rounded-circle mr-3">
										<i class="fas fa-shopping-cart"></i>
									</div>
									<div class="media-body">
										<h3 class="link-title m-0">Cart</h3>
										<p class="m-0 text-secondary">Online store shopping cart</p>
									</div>
								</div>
							</a>
						</div>
						<div class="st-dropdown-content-group">
							<h3 class="link-title"><i class="fas fa-money-check-alt icon"></i> Checkout</h3>
							<div class="ml-5">
								<a class="dropdown-item text-secondary" target="_blank" href="shop/checkout-customer.html">Customer <i class="fas fa-angle-right ml-2"></i> </a>
								<a class="dropdown-item text-secondary" target="_blank" href="shop/checkout-shipping.html">Shipping Information <i class="fas fa-angle-right ml-2"></i> </a>
								<a class="dropdown-item text-secondary" target="_blank" href="shop/checkout-payment.html">Payment Methods <i class="fas fa-angle-right ml-2"></i> </a>
								<a class="dropdown-item text-secondary" target="_blank" href="shop/checkout-confirmation.html">Order Review <i class="fas fa-angle-right ml-2"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</nav>
	<main class="overflow-hidden">
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
						<h1 class="bold font-md font-md-lg">DashCore fully integrates with multiple tools, it will make your customization experience a breeze</h1>
						<p class="lead text-muted">From a simple HTML page to a complete module bundler, even a task runner, DashCore comes with ease integration for every need</p>
						<a href="#!" class="btn btn-primary btn-lg btn-rounded bold px-4 mt-4">Join DashCore</a>
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
							<img src="{!! asset('admin/img/integration/steps/plan.svg') !!}" class="mb-3 image-responsive">
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
							<img src="{!! asset('admin/img/integration/steps/payment.svg') !!}" class="mb-3 image-responsive">
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
							<img src="{!! asset('admin/img/integration/steps/work.svg') !!}" class="mb-3 image-responsive">
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
										<p class="text-muted">DashCore tech stack gives you everything your business needs to build robust integrtions</p>
										<figure class="">
											<img src="{!! asset('admin/img/logos/webpack.svg') !!}" class="img-responsive mx-auto" alt="">
										</figure>
									</div>
									<div class="col-md-4 d-flex flex-column justify-content-around">
										<div class="text-center">
											<figure class="mockup"><img src="{!! asset('admin/img/logos/javascript.svg') !!}" alt="">
											</figure>
										</div>
										<div class="text-center">
											<figure class="mockup">
												<img src="{!! asset('admin/img/logos/es6.svg') !!}" alt="">
											</figure>
										</div>
										<div class="text-center">
											<figure class="mockup">
												<img src="{!! asset('admin/img/logos/node-sass.svg') !!}" alt="">
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
								<img src="{!! asset('admin/img/integration/tech-globe.svg') !!}" alt="">
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
							<h2>Extend DashCore</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi ipsum iste iure nihil non obcaecati quasi, sit? Aperiam asperiores atque, commodi debitis fugiat in nemo optio sint velit. Pariatur, sint!</p>
						</div>
						<a href="#" class="btn btn-rounded btn-outline-primary bw-2 mr-3">Know More</a> 
						<a href="#" class="btn btn-rounded btn-primary bw-2 bold text-contrast">Register Account</a>
					</div>
					<div class="col-lg-6">
						<div class="icons-wrapper position-relative">
							<div class="floating icon icon-xl bg-contrast rounded-circle p-3 shadow m-0 absolute d-flex justify-content-center align-items-center" style="left: 100%; top: 30%;" data-aos="fade-left">
								<img src="{!! asset('admin/img/integration/blossom.svg') !!}" class="img-responsive" alt="">
							</div>
							<div class="floating icon icon-xxl bg-contrast rounded-circle p-3 shadow m-0 absolute d-flex justify-content-center align-items-center" style="left: 60%; top: -10%;" data-aos="fade-left">
								<img src="{!! asset('admin/img/integration/dockbit.svg') !!}" class="img-responsive" alt="">
							</div>
							<div class="floating icon icon-xxl bg-contrast rounded-circle p-3 shadow m-0 absolute d-flex justify-content-center align-items-center" style="left: 25%; top: 0%;" data-aos="fade-left">
								<img src="{!! asset('admin/img/integration/zapier.svg') !!}" class="img-responsive" alt="">
							</div>
							<div class="floating icon icon-2xl bg-contrast rounded-circle p-3 shadow m-0 absolute d-flex justify-content-center align-items-center" style="left: 0%; top: 50%;" data-aos="fade-left">
								<img src="{!! asset('admin/img/integration/bitnami.svg') !!}" class="img-responsive" alt="">
							</div>
							<div class="floating icon icon-2xxl bg-contrast rounded-circle p-3 shadow m-0 absolute d-flex justify-content-center align-items-center" style="left: 23%; top: 70%;" data-aos="fade-left">
								<img src="{!! asset('admin/img/integration/slack.svg') !!}" class="img-responsive" alt="">
							</div>
							<div class="floating icon icon-xxl bg-contrast rounded-circle p-3 shadow m-0 absolute d-flex justify-content-center align-items-center" style="left: 65%; top: 44%;" data-aos="fade-left">
								<img src="{!! asset('admin/img/integration/monero.svg') !!}" class="img-responsive" alt="">
							</div>
							<div class="floating icon icon-xl bg-contrast rounded-circle p-3 shadow m-0 absolute d-flex justify-content-center align-items-center" style="left: 95%; top: 83%;" data-aos="fade-left">
								<img src="{!! asset('admin/img/integration/dropbox.svg') !!}" class="img-responsive" alt="">
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
									<img src="https://picsum.photos/500/300?random=1&amp;gravity=south" alt="">
									<div class="description bg-dark text-contrast p-1 p-md-2">
										<p class="bold">Project name</p>
										<p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur ipsum voluptatem nobis labore sit</p>
									</div>
								</a>
							</div>
						</div>
						<div class="col-md-4">
							<div class="project-detail zoom-image overlay overlay-secondary">
								<a href="javascript:;">
									<img src="https://picsum.photos/500/300?random=2&amp;gravity=south" alt="">
									<div class="description bg-dark text-contrast p-1 p-md-2">
										<p class="bold">Project name</p>
										<p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur ipsum voluptatem nobis labore sit</p>
									</div>
								</a>
							</div>
						</div>
						<div class="col-md-4">
							<div class="project-detail zoom-image overlay overlay-secondary">
								<a href="javascript:;">
									<img src="https://picsum.photos/500/300?random=3&amp;gravity=south" alt="">
									<div class="description bg-dark text-contrast p-1 p-md-2">
										<p class="bold">Project name</p>
										<p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur ipsum voluptatem nobis labore sit</p>
									</div>
								</a>
							</div>
						</div>
						<div class="col-md-4">
							<div class="project-detail zoom-image overlay overlay-secondary">
								<a href="javascript:;">
									<img src="https://picsum.photos/500/300?random=4&amp;gravity=south" alt="">
									<div class="description bg-dark text-contrast p-1 p-md-2">
										<p class="bold">Project name</p>
										<p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur ipsum voluptatem nobis labore sit</p>
									</div>
								</a>
							</div>
						</div>
						<div class="col-md-4">
							<div class="project-detail zoom-image overlay overlay-secondary">
								<a href="javascript:;">
									<img src="https://picsum.photos/500/300?random=5&amp;gravity=south" alt="">
									<div class="description bg-dark text-contrast p-1 p-md-2">
										<p class="bold">Project name</p>
										<p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur ipsum voluptatem nobis labore sit</p>
									</div>
								</a>
							</div>
						</div>
						<div class="col-md-4">
							<div class="project-detail zoom-image overlay overlay-secondary">
								<a href="javascript:;">
									<img src="https://picsum.photos/500/300?random=6&amp;gravity=south" alt="">
									<div class="description bg-dark text-contrast p-1 p-md-2">
										<p class="bold">Project name</p>
										<p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur ipsum voluptatem nobis labore sit</p>
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
								<p>We designed DashCore to be able to integrate with additional templates designed by our team</p>
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
								<img src="{!! asset('admin/img/screens/tablet/1.png') !!}" alt="..."></div>
								<div class="front iphone-x">
									<div class="screen">
										<img src="{!! asset('admin/img/screens/app/1.png') !!}" alt="...">
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
							<img src="{!! asset('admin/img/logos/1.png') !!}" alt="" class="img-responsive mx-auto op-7" style="max-height: 60px;">
						</div>
						<div class="col-md-3 col-xs-4 col-6 px-md-5">
							<img src="{!! asset('admin/img/logos/2.png') !!}" alt="" class="img-responsive mx-auto op-7" style="max-height: 60px;">
						</div>
						<div class="col-md-3 col-xs-4 col-6 px-md-5">
							<img src="{!! asset('admin/img/logos/3.png') !!}" alt="" class="img-responsive mx-auto op-7" style="max-height: 60px;">
						</div>
						<div class="col-md-3 col-xs-4 col-6 px-md-5">
							<img src="{!! asset('admin/img/logos/4.png') !!}" alt="" class="img-responsive mx-auto op-7" style="max-height: 60px;">
						</div>
					</div>
				</div>
			</section>
			<section class="section slider-testimonials bg-light">
				<div class="container bring-to-front">
					<div class="section-heading text-center">
						<h2>Our customers have something to say</h2>
						<p class="lead text-muted">They are the best, our customer want to let you know how DashCore is helping them to achieve their goals and how simple is to use it</p>
					</div>
					<div class="card shadow-lg">
						<div class="row no-gutters">
							<div class="col-md-6">
								<!-- Images slider, will fade -->
								<div class="swiper-container h-100" data-sw-effect="fade" data-sw-space-between="0">
									<div class="swiper-wrapper">
										<div class="swiper-slide">
											<figure class="m-0 image-background cover" style="background-image: url({!! asset('admin/img/testimonials/3.jpg') !!}"><img src="{!! asset('admin/img/testimonials/3.jpg') !!}" alt="..." class="img--responsive invisible">
											</figure>
										</div>
										<div class="swiper-slide">
											<figure class="m-0 image-background cover" style="background-image: url({!! asset('admin/img/testimonials/2.jpg') !!}"><img src="{!! asset('admin/img/testimonials/2.jpg') !!}" alt="..." class="img--responsive invisible">
											</figure>
										</div>
										<div class="swiper-slide"><figure class="m-0 image-background cover" style="background-image: url({!! asset('admin/img/testimonials/5.jpg') !!}"><img src="{!! asset('admin/img/testimonials/5.jpg') !!}" alt="..." class="img--responsive invisible">
										</figure>
									</div>
									<div class="swiper-slide">
										<figure class="m-0 image-background cover" style="background-image: url({!! asset('admin/img/testimonials/6.jpg') !!})"><img src="{!! asset('admin/img/testimonials/6.jpg') !!}" alt="..." class="img--responsive invisible">
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
													<img src="{!! asset('admin/img/logos/companies/1.svg') !!}" alt="..." class="img-responsive">
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
													<img src="{!! asset('admin/img/logos/companies/2.svg') !!}" alt="..." class="img-responsive">
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
												<figure class="mockup mb-5"><img src="{!! asset('admin/img/logos/companies/1.svg') !!}" alt="..." class="img-responsive"></figure>
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
													<img src="{!! asset('admin/img/logos/companies/2.svg') !!}" alt="..." class="img-responsive">
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
					<a href="register.html" class="btn btn-primary btn-rounded mt-3 mt-md-0 ml-md-auto">Create DashCore account</a>
				</div>
			</div>
		</section>
		<!-- ./Footer - Simple -->
		<footer class="site-footer section block bg-contrast">
			<div class="container py-4">
				<div class="row align-items-center">
					<div class="col-md-5 text-center text-md-left">
						<nav class="nav justify-content-center justify-content-md-start">
							<a class="nav-item nav-link" href="about.html">About</a> 
							<a class="nav-item nav-link" href="#">Services</a> 
							<a class="nav-item nav-link" href="blog/blog-grid.html">Blog</a>
						</nav>
					</div>
					<div class="col-md-2 text-center">
						<img src="{!! asset('admin/img/logo.png') !!}" alt="" class="logo">
					</div>
					<div class="col-md-5 text-center text-md-right">
						<p class="mt-2 mb-0 text-secondary small">© 2018 5studios. All Rights Reserved</p>
					</div>
				</div>
			</div>
		</footer>
	</main>
@endsection