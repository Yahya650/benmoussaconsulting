@extends('v1.web.layouts.default')

@section('title','Contactez-nous')
@section('content')
    
	<!-- Page Title Section -->
	<section class="page-title" style="background-image: url(/web/images/main-slider/image-1.png)"> 
		<div class="auto-container">
			<div class="content">
				<div class="text">prendre contact avec :</div>
				<h1> Coach Benmoussa</h1>
			</div>
			<div class="breadcrumb-outer">
				<ul class="page-breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li>Contact</li>
				</ul>
			</div>
		</div>
	</section>
	<!-- End Page Title Section -->
	
	<!-- Map Section -->
	<section class="contact-map-section">
		<div class="auto-container">
			<div class="clearfix">
				<div class="map-box">
					<h4>Informations sur l'emplacement</h4>
					<ul class="contact-list">
						<li>
							<span class="icon flaticon-telephone"></span>
							0 Rue Rouissi, Residence Oasis Imm A Appt N2,<br> Casablanca 20390
							<a href="#" class="direction">Get Direction</a>
						</li>
						<li>
							<span class="icon flaticon-email-1"></span>
							<a href="mailto:info@companyname.com">info@companyname.com</a>
						</li>
						<li>
							<span class="icon flaticon-clock"></span>
							Friday-Sunday: 8:00am-6pm
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="outer-container">
			<!-- Map Boxed -->
			<div class="map-boxed">
				<!--Map Outer-->
				<div class="map-outer">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13298.048282612528!2d-7.6432226!3d33.5660515!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda7d3b53e753bbd%3A0x88efca26303ba445!2sCabinet%20de%20Coaching%20BenMoussa!5e0!3m2!1sen!2sma!4v1697561681669!5m2!1sen!2sma" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
			</div>
		</div>
	</section>
	<!-- End Map Section -->
	
	<!-- Contact Form Section -->
	<section class="contact-form-section">
		<div class="auto-container">
			<div class="row clearfix">
			
				<!-- Image Column -->
				<div class="image-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="image">
							<img src="assets/images/resource/contact-1.jpg" alt="" />
						</div>
						<div class="image-two">
							<img src="assets/images/resource/contact-2.jpg" alt="" />
						</div>
					</div>
				</div>
				
				<!-- Form Column -->
				<div class="form-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="sec-title">
							<div class="title color-three">Get In Touch</div>
							<h2>Make Custom Request</h2>
						</div>
						
						<!-- Contact Form -->
						<div class="contact-form">
							<form method="post" action="blog.html">
								<div class="row clearfix">
								
									<!-- Form Group -->
									<div class="form-group col-lg-6 col-md-6 col-sm-12">
										<span class="icon flaticon-user-4"></span>
										<input type="text" name="username" placeholder="Enter Name" required>
									</div>
									
									<!-- Form Group -->
									<div class="form-group col-lg-6 col-md-6 col-sm-12">
										<span class="icon flaticon-envelope"></span>
										<input type="email" name="email" placeholder="E-Mail Address" required>
									</div>
									
									<!--Form Group-->
									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<span class="icon flaticon-notebook"></span>
										<select name="country" class="custom-select-box">
											<option>Select Subject</option>
											<option>Subject 01</option>
											<option>Subject 02</option>
											<option>Subject 03</option>
											<option>Subject 04</option>
										</select>
									</div>
									
									<!-- Form Group -->
									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<span class="icon flaticon-pen"></span>
										<textarea name="message" placeholder="Message"></textarea>
									</div>
									
									<!-- Form Group -->
									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<button class="theme-btn btn-style-three" type="submit" name="submit-form"><span class="txt">Get a quote</span></button>
									</div>
									
								</div>
							</form>
								
						</div>
						<!-- eND Contact Form -->
						
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Contact Form Section -->
	
@endsection
