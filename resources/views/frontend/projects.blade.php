<!doctype html>
<html lang="zxx">
    
<!-- Mirrored from templates.envytheme.com/peru/default/projects.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Aug 2020 08:58:10 GMT -->
    @include('frontend.layout.head')

    <body>
		<!-- Start Preloader Area -->
		<div class="preloader">
			<div class="lds-ripple">
				<div></div>
				<div></div>
			</div>
		</div>
        <!-- End Preloader Area -->

		<!-- Start Navbar Area -->
		@include('frontend.layout.navbar')
		<!-- End Navbar Area -->

		<!-- Start Page Title Area -->
		<div class="page-title-area item-bg-1">
			<div class="container">
				<div class="page-title-content">
					<h2>Projects</h2>
					<ul>
						<li>
							<a href="{{url('/')}}">
								Home 
								<i class="fa fa-chevron-right"></i>
							</a>
						</li>
						<li>Projects</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Page Title Area -->

		<!--  Start Project Area -->
		<div class="project-area pt-100 pb-70">
			<div class="container">
				<div class="sorting-menu">
					<ul> 
						<li class="filter active" data-filter="all">All</li>
						<li class="filter" data-filter=".1">Business</li>
						<li class="filter" data-filter=".2">Development</li>
						<li class="filter" data-filter=".3">Finance</li>
						<li class="filter" data-filter=".4">Growth</li>
						<li class="filter" data-filter=".5">Marketing</li>
					</ul>
				</div>
				<!-- /.sorting-menu -->
				<div id="Container" class="row">
					<div class="single-portfolio-item col-lg-4 col-sm-6 1 5 mix">
						<div class="portfolio-inner">
							<img class="portfolio-img" src="assets/img/project/1.jpg" alt="portfolio-img">
							<div class="portfolio-hover">
								<div class="hover-text">
									<a href="portfolio-details.html">
										<h4>Business Management</h4>
										<span>business</span>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="single-portfolio-item col-lg-4 col-sm-6 2 3 mix">
						<div class="portfolio-inner">
							<img class="portfolio-img" src="assets/img/project/2.jpg" alt="portfolio-img">
							<div class="portfolio-hover">
								<div class="hover-text">
									<a href="portfolio-details.html">
										<h4>Fund Management</h4>
										<span>business</span>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="single-portfolio-item col-lg-4 col-sm-6 3 5 mix">
						<div class="portfolio-inner">
							<img class="portfolio-img" src="assets/img/project/3.jpg" alt="portfolio-img">
							<div class="portfolio-hover">
								<div class="hover-text">
									<a href="portfolio-details.html">
										<h4>Data Analytics</h4>
										<span>business</span>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="single-portfolio-item col-lg-4 col-sm-6 4 1 mix">
						<div class="portfolio-inner">
							<img class="portfolio-img" src="assets/img/project/4.jpg" alt="portfolio-img">
							<div class="portfolio-hover">
								<div class="hover-text">
									<a href="portfolio-details.html">
										<h4>Revenue Growth</h4>
										<span>business</span>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="single-portfolio-item col-lg-4 col-sm-6 5 2 mix">
						<div class="portfolio-inner">
							<img class="portfolio-img" src="assets/img/project/5.jpg" alt="portfolio-img">
							<div class="portfolio-hover">
								<div class="hover-text">
									<a href="portfolio-details.html">
										<h4>Market Expansion</h4>
										<span>business</span>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="single-portfolio-item col-lg-4 col-sm-6 1 3 mix">
						<div class="portfolio-inner">
							<img class="portfolio-img" src="assets/img/project/6.jpg" alt="portfolio-img">
							<div class="portfolio-hover">
								<div class="hover-text">
									<a href="portfolio-details.html">
										<h4>Construction</h4>
										<span>business</span>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="single-portfolio-item col-lg-4 col-sm-6 3 1 mix">
						<div class="portfolio-inner">
							<img class="portfolio-img" src="assets/img/project/7.jpg" alt="portfolio-img">
							<div class="portfolio-hover">
								<div class="hover-text">
									<a href="portfolio-details.html">
										<h4>Audit and Evaluation</h4>
										<span>business</span>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="single-portfolio-item col-lg-4 col-sm-6 1 2 3 mix">
						<div class="portfolio-inner">
							<img class="portfolio-img" src="assets/img/project/8.jpg" alt="portfolio-img">
							<div class="portfolio-hover">
								<div class="hover-text">
									<a href="portfolio-details.html">
										<h4>Consumer Products</h4>
										<span>business</span>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="single-portfolio-item col-lg-4 col-sm-6 1 5 3 mix">
						<div class="portfolio-inner">
							<img class="portfolio-img" src="assets/img/project/9.jpg" alt="portfolio-img">
							<div class="portfolio-hover">
								<div class="hover-text">
									<a href="portfolio-details.html">
										<h4>Digital Analysis</h4>
										<span>business</span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--  End Project Area -->

		<!-- Start Best Service Area -->
		<section class="best-services-area ptb-100">
			<div class="container">
				<div class="section-title">
					<span>What We do</span>
					<h2>Our Best Services</h2>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="tabs-area">
							<ul class="nav nav-pills d-sm-flex d-block text-center justify-content-between pt-15" id="pills-tab" role="tablist">
								<li class="nav-item">
									<i class="flaticon-steering-wheel"></i>
									<a class="nav-link active" id="pills-1-tab" data-toggle="pill" href="#pills-1" role="tab" aria-controls="pills-1" aria-selected="true">
										<i class="flaticon-pie-chart"></i>
										Best Consulting
									</a>
								</li>

								<li class="nav-item">
									<a class="nav-link" id="pills-2-tab" data-toggle="pill" href="#pills-2" role="tab" aria-controls="pills-2" aria-selected="false">
										<i class="flaticon-hand"></i>
										Market Growth
									</a>
								</li>

								<li class="nav-item">
									<i class="flaticon-tracking"></i>
									<a class="nav-link" id="pills-3-tab" data-toggle="pill" href="#pills-3" role="tab" aria-controls="pills-3" aria-selected="false">
										<i class="flaticon-strategy"></i>
										Saving Strategy
									</a>
								</li>

								<li class="nav-item">
									<a class="nav-link" id="pills-4-tab" data-toggle="pill" href="#pills-4" role="tab" aria-controls="pills-4" aria-selected="false">
										<i class="flaticon-consultant"></i>
										Consultant
									</a>
								</li>

								<li class="nav-item">
									<i class="flaticon-van"></i>
									<a class="nav-link" id="pills-5-tab" data-toggle="pill" href="#pills-5" role="tab" aria-controls="pills-5" aria-selected="false">
										<i class="flaticon-interview"></i>
										Best service
									</a>
								</li>
							</ul>
						</div>    

						<div class="tab-content" id="pills-tabContent">
							<div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab">
								<div class="row align-items-center">
									<div class="col-lg-4">
										<div class="best-service-img">
											<img src="assets/img/best-service/4.jpg" alt="Service">
										</div>
									</div>

									<div class="col-lg-8">
										<div class="best-service-area">
											<h3>Solution For Your Financial  help</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
											<ul>
												<li>
													<i class="flaticon-check-mark"></i>
													SME Finance Investment Service
												</li>
												<li>
													<i class="flaticon-check-mark"></i>
													SME Finance Advisory Finance
												</li>
												<li>
													<i class="flaticon-check-mark"></i>
													Global SME Finance Facility
												</li>
											</ul>
											<a class="default-btn" href="#">Discover More</a>
										</div>
									</div>
								</div>
							</div>

							<div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab">
								<div class="row align-items-center">
									<div class="col-lg-8">
										<div class="best-service-area">
											<h3>Solution For Your Finanacial help</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
											<ul>
												<li>
													<i class="flaticon-check-mark"></i>
													SME Finance Investment Service
												</li>
												<li>
													<i class="flaticon-check-mark"></i>
													SME Finance Advisory Finance
												</li>
												<li>
													<i class="flaticon-check-mark"></i>
													Global SME Finance Facility
												</li>
											</ul>
											<a class="default-btn" href="#">Discover More</a>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="best-service-img">
											<img src="assets/img/best-service/3.jpg" alt="Service">
										</div>
									</div>
								</div>
							</div>

							<div class="tab-pane fade" id="pills-3" role="tabpanel" aria-labelledby="pills-3-tab">
								<div class="row align-items-center">
									<div class="col-lg-4">
										<div class="best-service-img">
											<img src="assets/img/best-service/1.jpg" alt="Service">
										</div>
									</div>

									<div class="col-lg-8">
										<div class="best-service-area">
											<h3>Solution For Your Finanacial help</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
											<ul>
												<li>
													<i class="flaticon-check-mark"></i>
													SME Finance Investment Service
												</li>
												<li>
													<i class="flaticon-check-mark"></i>
													SME Finance Advisory Finance
												</li>
												<li>
													<i class="flaticon-check-mark"></i>
													Global SME Finance Facility
												</li>
											</ul>
											<a class="default-btn" href="#">Discover More</a>
										</div>
									</div>
								</div>
							</div>

							<div class="tab-pane fade" id="pills-4" role="tabpanel" aria-labelledby="pills-4-tab">
								<div class="row align-items-center">
									<div class="col-lg-8">
										<div class="best-service-area">
											<h3>Solution For Your Finanacial help</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
											<ul>
												<li>
													<i class="flaticon-check-mark"></i>
													SME Finance Investment Service
												</li>
												<li>
													<i class="flaticon-check-mark"></i>
													SME Finance Advisory Finance
												</li>
												<li>
													<i class="flaticon-check-mark"></i>
													Global SME Finance Facility
												</li>
											</ul>
											<a class="default-btn" href="#">Discover More</a>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="best-service-img">
											<img src="assets/img/best-service/2.jpg" alt="Service">
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="pills-5" role="tabpanel" aria-labelledby="pills-5-tab">
								<div class="row align-items-center">
									<div class="col-lg-4">
										<div class="best-service-img">
											<img src="assets/img/best-service/1.jpg" alt="Service">
										</div>
									</div>
									<div class="col-lg-8">
										<div class="best-service-area">
											<h3>Solution For Your Finanacial help</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
											<ul>
												<li>
													<i class="flaticon-check-mark"></i>
													SME Finance Investment Service
												</li>
												<li>
													<i class="flaticon-check-mark"></i>
													SME Finance Advisory Finance
												</li>
												<li>
													<i class="flaticon-check-mark"></i>
													Global SME Finance Facility
												</li>
											</ul>
											<a class="default-btn" href="#">Discover More</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</section>
		<!-- End Best Service Area -->

		<!-- Start Choose Area -->
		<section class="choose-area ptb-100">
			<div class="container-fluid">
				<div class="section-title">
					<span>Why Choose Us</span>
					<h2>We can give the best facilities for business</h2>
				</div>
				<div class="row align-items-center">
					<div class="col-lg-7 pl-0">
						<div class="choose-bg-area">
							<div class="row">
								<div class="col-lg-6 col-md-6 pr-0">
									<div class="single-box choose-1">
										<i class="flaticon-shield"></i>
										<h3>Top Security</h3>
										<p>Lorem ipsum dolor sit amet, consect adipiscing elit, sed do eiusmod tempor incididunt labore.</p>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 pl-0">
									<div class="single-box choose-2">
										<i class="flaticon-development"></i>
										<h3>Revenue Growth</h3>
										<p>Lorem ipsum dolor sit amet, consect adipiscing elit, sed do eiusmod tempor incididunt labore.</p>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 pr-0">
									<div class="single-box choose-3">
										<i class="flaticon-content"></i>
										<h3>Risk Manage</h3>
										<p>Lorem ipsum dolor sit amet, consect adipiscing elit, sed do eiusmod tempor incididunt labore.</p>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 pl-0">
									<div class="single-box choose-4">
										<i class="flaticon-help"></i>
										<h3>Fast Support</h3>
										<p>Lorem ipsum dolor sit amet, consect adipiscing elit, sed do eiusmod tempor incididunt labore.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-5 pr-0">
						<div class="choose-img">
							<img src="assets/img/choose-img.jpg" alt="">
							<div class="video-wrap">
								<div class="video-btn-wrap">
									<a href="play-video.html" class="video-btn"  data-ilb2-video='{"controls":"controls", "autoplay":false, "sources":[{"src":"assets/img/business.mp4", "type":"video/mp4"}]}' data-imagelightbox="video">
										<i class="fa fa-play"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Choose Area -->

		<!-- Start Footer Top Area -->
		@include('frontend.layout.footer')
		<!-- End Footer Top Area -->

		
		<!-- End Footer Bottom Area -->

		<!-- Start Go Top Area -->
		<div class="go-top">
			<i class="fa fa-angle-double-up"></i>
			<i class="fa fa-angle-double-up"></i>
		</div>
		<!-- End Go Top Area -->

        
        <!-- Jquery Slim JS -->
       @include('frontend.layout.scripts')
    </body>

<!-- Mirrored from templates.envytheme.com/peru/default/projects.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Aug 2020 08:58:13 GMT -->
</html>