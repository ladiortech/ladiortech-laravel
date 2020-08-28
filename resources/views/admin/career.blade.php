@extends('admin.layout.front')
@section('title','Career -')
@section('style')
<style type="text/css">
	.openings a{
		color: black;
	    text-decoration: none;
	    cursor: pointer;
	    font-weight: bold;
	}
	.openings li{
		list-style: none;
		padding-top: 25px;
	}
	.responsibility{
		font-weight: bold;
		font-size: 14px;
	}
	.job-headings{
	        border: #dad9d9 1px solid;
    background-color: #ecebeb;
    font-size: 20px;
    height: 50px;
    text-align: center;
    margin: auto;
    padding: 10px;
	}
</style>
@endsection
@section('content')
<header class="page header text-contrast overlay gradient gradient-purple-blue alpha-8 image-background cover" style="background-image: url('{!! asset('admin/img/bg/waves.jpg') !!}')">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h1 class="display-4 text-contrast mb-4">Career</h1>
			</div>
		</div>
	</div>
</header>
<section class="section">
	<div class="container">
		<p>Why work for us? Because we’ve got free beer. Nay, just kidding! But we do have a very stimulating work environment to offer. Complete with state-of-the-art infrastructure and modern amenities, the work space has a Zen about it that is conducive to idea sharing and growing collectively as a team.
		</p>
		<p>We’re always on the lookout for great brains and young spirits to join our way of working. 
		</p>
		<p>You should be pro-active, autonomous and curious. But above all, you must be in love with the innovative and the out-of-the-box. What’s in it for you? Challenging projects, being part of the decision making process, an awesome team, lively and youthful environment and personal as well as lateral growth opportunities.</p>
		
		
		<p>Who all are not invited?</p>
		<ul>
			<li>The Non-passionate-about-work-only-wants-to-have-fun guy</li>
			<li>The Non-obsessed-with-quality-bad-design-will-do guy</li>
			<li>The Not-a-team-player-just-me-me-me guy</li>
			<li>The Doesn’t-like-fast-paced-growth-stick-in-the-mud guy</p></li>
		</ul>
		<h2 style="padding-top: 10px;">Current Openings</h2>
		<div class="openings" style="padding: 15px;">
			<ul>
				<div class="row">
					<div class="col-md-6 col-sm-3">
						<li>
							<div class="job-headings">
								<a  data-toggle="collapse" href="#bde" role="button" aria-expanded="false" aria-controls="bde">
									<i class="fa fa-plus" aria-hidden="true"></i>      BDE
								</a>
							</div>
								<div class="collapse" id="bde">
									<div class="card card-body">
										<ul>
											<li> > Experience : 6 Months - 3 Years</li>
											<li> > Salary : As Per Industry Standards</li>
											<li> > Job Location : Ahmedabad</li>
											<li> > Qualification : Any</li>
											<li class="responsibility">JOB RESPONSIBILITIES</li>
											<li> > Proven working experience as a business development in IT field executive or a relevant role Proven sales track record</li>
											<li> > Experience in customer support is a plus</li>
											<li> > Proficiency in MS Office</li>
											<li> > Proficiency in English</li>
											<li> > Market knowledge</li>
											<li> > Communication and negotiation skills</li>
											<li> > Ability to build report</li>
											<li> > Time management and planning skills</li>
											<li> > Excellent client servicing skills</li>
											<li> > Computer proficiency</li>
											<li> > Ability to interact with varied cultures</li>
											<li> > Energetic, Confident, and Motivated & Self- driven</li>
										</ul>
									</div>
								</div>
						</li>		
					</div>
					<div class="col-md-6 col-sm-3">
						<li>
							<div class="job-headings">
								<a class="" data-toggle="collapse" href="#phpDeveloper" role="button" aria-expanded="false" aria-controls="phpDeveloper">
								    <i class="fa fa-plus" aria-hidden="true"></i>      PHP DEVELOPER
								</a>
							</div>
								<div class="collapse" id="phpDeveloper">
								  <div class="card card-body">
								  	<ul>
								  		<li> > Experience : 6 Months - 3 Years</li>
								  		<li> > Salary : As Per Industry Standards</li>
								  		<li> > Job Location : Ahmedabad</li>
								  		<li> > Qualification : BE / B.Tech / MCA / M.Tech</li>
								    	<li class="responsibility">JOB RESPONSIBILITIES</li>
								    	<li> > Strong Knowledge of Core PHP</li>
								    	<li> > Good knowledge of PHP web frameworks like Wordpress, Laravel, Codeigniter, Magento</li>
								    	<li> > Understanding the fully synchronous behavior of PHP
								    	Understanding of MVC design patterns</li>
								    	<li> > Basic understanding of front-end technologies, such as JavaScript, HTML5, Ajax,CSS3, Bootstrap</li>
								    	<li> > Knowledge of object oriented PHP programming</li>
								    	<li> > Creating database schemas that represent and support business processes</li>
								    	<li> > Familiarity with SQL/NoSQL databases and their declarative query languages</li>
								    	<li> > Proficient understanding of code versioning tools, such as Git. Or Bit Bucket Knowlege of Angular CLI or Angular JS is an advantageous</li>
								    	
								    </ul>
								  </div>
								</div>
						</li>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-sm-3">
						<li>
							<div class="job-headings">
								<a class="" data-toggle="collapse" href="#androidDeveloper" role="button" aria-expanded="false" aria-controls="androidDeveloper">
								    <i class="fa fa-plus" aria-hidden="true"></i>       DEVELOPER
								</a>
							</div>
								<div class="collapse" id="androidDeveloper">
								  <div class="card card-body">
								  	<ul>
								  		<li> > Experience : 6 Months - 3 Years</li>
								  		<li> > Salary : As Per Industry Standards</li>
								  		<li> > Job Location : Ahmedabad</li>
								  		<li> > Qualification : BE / B.Tech / MCA / M.Tech</li>
								    	<li class="responsibility">JOB RESPONSIBILITIES</li>
								    	<li> > Proven working experience in Android development.</li>
								    	<li> > Experience with Android SDK,SQlite, Android Studio, Eclipse, Fragments,Basic knowledge of Google Map V2.</li>
								    	<li> > Experience working with remote data via REST and JSON.</li>
								    	<li> > Strong knowledge of Android UI design principles, patterns, and best practices.</li>
								    	<li> > Experience with third-party libraries and APIs.</li>
								    	<li> > Design, build, and maintain high performance, reusable, and reliableJava code.</li>
								    	<li> > Ensure the best possible performance, quality, and responsiveness of the application.</li>
								    	<li> > Identify and correct bottlenecks and fix bugs.</li>
								    	<li> > Help maintain code quality,organization, and automatization.</li>
								    	<li> > Self-motivated, hardworking,innovative, and proactive in finding solutions.</li>
								    	<li> > Good written, communication and analytical skills.</li>
								    </ul>
								  </div>
								</div>
						</li>
					</div>
					<div class="col-md-6 col-sm-3">
						<li>
							<div class="job-headings">
								<a class="" data-toggle="collapse" href="#iosDeveloper" role="button" aria-expanded="false" aria-controls="iosDeveloper">
								    <i class="fa fa-plus" aria-hidden="true"></i>      IOS DEVELOPER
								</a>
							</div>
								<div class="collapse" id="iosDeveloper">
								  <div class="card card-body">
								  	<ul>
								  		<li> > Experience : 6 Months - 3 Years</li>
								  		<li> > Salary : As Per Industry Standards</li>
								  		<li> > Job Location : Ahmedabad</li>
								  		<li> > Qualification : BE / B.Tech / MCA / M.Tech</li>
								    	<li class="responsibility">JOB RESPONSIBILITIES</li>
								    	<li> > Strong knowledge of iOS SDK and how to deal with different screen sizes</li>
								    	<li> > Strong knowledge of iOS UI design principles, patterns, and best practices</li>
								    	<li> > Good experience in iOS design and development.</li>
								    	<li> > A deep familiarity with Objective-C, Cocoa Touch and Swift development.</li>
								    	<li> > Solid understanding of the full mobile development life cycle.</li>
								    	<li> > Extensive hands-on experience in creating custom UI controls, designing protocols, implementing interfaces, and performance optimization</li>
								    	<li> > Must be familiar with RESTful APIs to connect Mobile (iOS) applications to back-end services</li>
								    	<li> > Experience with third-party libraries and APIs
								    	Worked on Social networking API's like Facebook SDK, Twitter API, LinkedIn SDK</li>
								    	<li> > Experience in developing mobile apps with Push Notifications</li>
								    	<li> > Experience of submitting apps to Apple</li>
								    	<li> > Knowledge of code versioning tools such as SVN, Git.
								    	iOS development using Objective C/Swift</li>
								    </ul>
								  </div>
								</div>
						</li>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-sm-3">
						<li>
							<div class="job-headings">
								<a class="" data-toggle="collapse" href="#graphicDeveloper" role="button" aria-expanded="false" aria-controls="graphicDeveloper">
								    <i class="fa fa-plus" aria-hidden="true"></i>      GRAPHICS DESIGNER
								</a>
							</div>
								<div class="collapse" id="graphicDeveloper">
								  <div class="card card-body">
								  	<ul>
								  		<li> > Experience : 6 Months - 3 Years</li>
								  		<li> > Salary : As Per Industry Standards</li>
								  		<li> > Job Location : Ahmedabad</li>
								  		<li> > Qualification : Any</li>
								    	<li class="responsibility">JOB RESPONSIBILITIES</li>
								    	<li> > >Determine the scope of project and meet clients to understand their design requirements</li>
								    	<li> > Advise clients on strategies to reach a particular audience</li>
								    	<li> > Determine the message the design should portray</li>
								    	<li> > Create images that identify a product and convey a message to audience</li>
								    	<li> > Develop graphics for product illustrations, logos, ppts, every stationery designs and websites/mobile app layouts</li>
								    	<li> > Select colors, images, text style, and layout</li>
								    	<li> > Incorporate changes recommended by the clients into the final design</li>
								    	<li> > Have strong knowledge on Photoshop, AI, Corel Draw, Adobe XD</li>
								    </ul>
								  </div>
								</div>
						</li>
					</div>
					<div class="col-md-6 col-sm-3">
						<li>
							<div class="job-headings">
								<a class="" data-toggle="collapse" href="#digitalAnalysis" role="button" aria-expanded="false" aria-controls="digitalAnalysis">
								    <i class="fa fa-plus" aria-hidden="true"></i>      DIGITAL ANALYTICS
								</a>
							</div>
								<div class="collapse" id="digitalAnalysis">
								  <div class="card card-body">
								  	<ul>
								  		<li> > Experience : 6 Months - 3 Years</li>
								  		<li> > Salary : As Per Industry Standards</li>
								  		<li> > Job Location : Ahmedabad</li>
								  		<li> > Qualification : BE / B.Tech / MCA / M.Tech</li>
								    	<li class="responsibility">JOB RESPONSIBILITIES</li>
								    	<li> > Communicating over the phone and email with the client.</li>
								    	<li> > Understanding the Business needs, translating it scope format.</li>
								    	<li> > Give recommendation based on the clients needs and propose a cost effective solution.</li>
								    	<li> > Probing the customer to understand the requirements.</li>
								    	<li> > Closing more sales leads to Happy Customers.</li>
								    	<li> > Wire-framing and prototyping skills is a must.</li>
								    	<li> > Requirement Analysis and writing a detailed scope is a must thing one should have experience with.</li>
								    	<li> > planning, execution and optimization of online marketing efforts.</li>
								    	<li> > Design various plans for improving digital presence of our clients</li>
								    	<li> > The promotion of products and services through digital channels</li>
								    </ul>
								  </div>
								</div>
						</li>
					</div>
				</div>
			</ul>	
		</div>

		<div class="resume">
			<h3>Send Resume  on Email : ladiortech@gmail.com</h3>
			<p>Contact: +91 9173 117 665</p>
		</div>
	</div>
</section>

@endsection