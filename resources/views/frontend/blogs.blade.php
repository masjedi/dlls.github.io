<!doctype html>
<html lang="zxx">
    
<!-- Mirrored from templates.envytheme.com/peru/default/blog-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Aug 2020 08:58:13 GMT -->
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
					<h2>Blog Grid</h2>
					<ul>
						<li>
							<a href="{{url('blogs')}}">
								Home 
								<i class="fa fa-chevron-right"></i>
							</a>
						</li>
						<li>Blog Grid</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Page Title Area -->

		<!-- Start Blog Area -->
        <section class="blog-area blog-page ptb-100">
			<div class="container">
				<div class="section-title">
					<span>News</span>
					<h2>Latest News</h2>
				</div>

				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="single-blog-post">
							<div class="post-image">
								<a href="#">
									<img src="assets/img/blog/1.jpg" alt="image">
								</a>
							</div>
							<div class="post-content">
								<div class="date">
									<i class="fa fa-calendar"></i> 
									<span>12 September 2019</span>
								</div>
								<h3>
									<a href="#">Successful Growth In Business 2019</a>
								</h3>
								<p>Luis ipsum suspendisse ultrices. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
								<a href="blog-details.html" class="default-btn">Read More</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="single-blog-post">
							<div class="post-image">
								<a href="#">
									<img src="assets/img/blog/2.jpg" alt="image">
								</a>
							</div>
							<div class="post-content">
								<div class="date">
									<i class="fa fa-calendar"></i> 
									<span>13 October 2019</span>
								</div>
								<h3>
									<a href="#">Achieving Best Business Awards</a>
								</h3>
								<p>Luis ipsum suspendisse ultrices. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
								<a href="blog-details.html" class="default-btn">Read More</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="single-blog-post">
							<div class="post-image">
								<a href="#">
									<img src="assets/img/blog/3.jpg" alt="image">
								</a>
							</div>
							<div class="post-content">
								<div class="date">
									<i class="fa fa-calendar"></i> 
									<span>14 November 2019</span>
								</div>
								<h3>
									<a href="#">Seminar for Best Marketing Strategy</a>
								</h3>
								<p>Luis ipsum suspendisse ultrices. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
								<a href="blog-details.html" class="default-btn">Read More</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="single-blog-post">
							<div class="post-image">
								<a href="#">
									<img src="assets/img/blog/4.jpg" alt="image">
								</a>
							</div>
							<div class="post-content">
								<div class="date">
									<i class="fa fa-calendar"></i> 
									<span>14 November 2019</span>
								</div>
								<h3>
									<a href="#">Seminar for Business Development</a>
								</h3>
								<p>Luis ipsum suspendisse ultrices. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
								<a href="blog-details.html" class="default-btn">Read More</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="single-blog-post">
							<div class="post-image">
								<a href="#">
									<img src="assets/img/blog/5.jpg" alt="image">
								</a>
							</div>
							<div class="post-content">
								<div class="date">
									<i class="fa fa-calendar"></i> 
									<span>14 November 2019</span>
								</div>
								<h3>
									<a href="#">10 Strategies to Manage Financial Forecast</a>
								</h3>
								<p>Luis ipsum suspendisse ultrices. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
								<a href="blog-details.html" class="default-btn">Read More</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="single-blog-post">
							<div class="post-image">
								<a href="#">
									<img src="assets/img/blog/6.jpg" alt="image">
								</a>
							</div>
							<div class="post-content">
								<div class="date">
									<i class="fa fa-calendar"></i> 
									<span>14 November 2019</span>
								</div>
								<h3>
									<a href="#">Tips for Achieving Success in Your Business</a>
								</h3>
								<p>Luis ipsum suspendisse ultrices. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
								<a href="blog-details.html" class="default-btn">Read More</a>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="pagenavigation-area">
							<nav aria-label="Page navigation example text-center">
								<ul class="pagination">
									<li class="page-item">
										<a class="page-link page-links" href="#">
											<i class="fa fa-angle-double-left"></i>
										</a>
									</li>
									<li class="page-item active">
										<a class="page-link" href="#">1</a>
									</li>
									<li class="page-item">
										<a class="page-link" href="#">2</a>
									</li>
									<li class="page-item">
										<a class="page-link" href="#">3</a>
									</li>
									<li class="page-item">
										<a class="page-link" href="#">
											<i class="fa fa-angle-double-right"></i>
										</a>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Blog Area -->

		<!-- Start Footer Top Area -->
		@include('frontend.layout.footer')
		<!-- End Footer Top Area -->

		<!-- Start Footer Bottom Area -->
		
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

<!-- Mirrored from templates.envytheme.com/peru/default/blog-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Aug 2020 08:58:16 GMT -->
</html>