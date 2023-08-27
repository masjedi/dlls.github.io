<!doctype html>
<html lang="zxx">
    
<!-- Mirrored from templates.envytheme.com/peru/default/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Aug 2020 08:58:26 GMT -->
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
					<h2>Contact Us</h2>
					<ul>
						<li>
							<a href="{{url('/')}}">
								Home 
								<i class="fa fa-chevron-right"></i>
							</a>
						</li>
						<li>Contact Us</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Page Title Area -->

		<!-- Start Contact Box Area -->
		<section class="contact-box pt-100 pb-70">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="single-contact-box">
							<i class="fa fa-map-marker"></i>
							<div class="content-title">
								<h3>Address</h3>
								<p>32 st Kilda Road, Melbourne VIC, 3004 Australia</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="single-contact-box">
							<i class="fa fa-envelope"></i>
							<div class="content-title">
								<h3>Email</h3>
								<a href="#">hello@peru.com</a>
								<a href="#">fax@peru.com</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
						<div class="single-contact-box">
							<i class="fa fa-phone"></i>
							<div class="content-title">
								<h3>Phone</h3>
								<a href="#">+123(456)123</a>
								<a href="#">+123(456)123</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Contact Box Area -->
		
		<!-- Start Contact Area -->
		<section class="contact-area pb-100">
			<div class="container">
				<div class="section-title">
					<h2>Drop us a message for any query</h2>
					<p>If you have an idea, we would love to hear about it.</p>
				</div>

				<div class="row align-items-center">
					<div class="col-lg-6">
						<div class="contact-form">
							<form id="contactForm">
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Your Name">
											<div class="help-block with-errors"></div>
										</div>
									</div>

									<div class="col-lg-12">
										<div class="form-group">
											<input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Your Email">
											<div class="help-block with-errors"></div>
										</div>
									</div>

									<div class="col-lg-12">
										<div class="form-group">
											<input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Your Phone">
											<div class="help-block with-errors"></div>
										</div>
									</div>

									<div class="col-lg-12">
										<div class="form-group">
											<input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="Your Subject">
											<div class="help-block with-errors"></div>
										</div>
									</div>

									<div class="col-lg-12">
										<div class="form-group">
											<textarea name="message" class="form-control" id="message" cols="30" rows="5" required data-error="Write your message" placeholder="Your Message"></textarea>
											<div class="help-block with-errors"></div>
										</div>
									</div>

									<div class="col-lg-12">
										<button type="submit" class="default-btn btn-two">
											<span class="label">Send Message</span>
											<i class='bx bx-plus'></i>
										</button>
										<div id="msgSubmit" class="h3 text-center hidden"></div>
										<div class="clearfix"></div>
									</div>
								</div>
							</form>
						</div>
					</div>

					<div class="col-lg-6">
						<div id="map"></div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Contact Area -->

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

<!-- Mirrored from templates.envytheme.com/peru/default/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Aug 2020 08:58:26 GMT -->
</html>