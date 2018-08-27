<?php include('M-A-P/runtime.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>LBC</title>
	<!-- Bootstrap -->
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- font awesome for icons -->
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- flex slider css -->
	<link href="css/flexslider.css" rel="stylesheet" type="text/css" media="screen">
	<!-- owl slider css -->
	<link href="owl-carousel/assets/owl.carousel.css" rel="stylesheet" type="text/css" media="screen">
	<link href="owl-carousel/assets/owl.theme.default.css" rel="stylesheet" type="text/css" media="screen">
	<!-- jQuery UI -->
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css" media="screen">
	<!--lightbox-->
	<link href="lightbox2/dist/css/lightbox.css" rel="stylesheet">
	<!--Animate CSS-->
	<link href="css/animate.css" rel="stylesheet">
	<!-- jplayer theme -->
	<link rel="stylesheet" type="text/css" href="css/jplayer-theme.css">
	<!-- custom css-->
	<link href="css/LBC.css" rel="stylesheet" type="text/css" media="screen">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="fullcalendar/fullcalendar.css">



</head>
<body data-spy="scroll">
	<!-- Static navbar -->
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

				<a class="navbar-brand" href="home.php">LBC</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav scroll-to navbar-right">
					<li><a href="#home">Home</a>
					</li>

					<li><a href="#alpha">Alpha</a>
					</li>

					<li><a href="#newLBC">New To LBC</a>
					</li>

					<li><a href="#house-groups">Meet With Us</a>
					</li>

					<li><a href="#events">Events</a>
					</li>

					<li><a href="#Information">Information</a>
					</li>

					<li><a href="#about-us">About Us</a>
					</li>

					<li><a href="#contact-us">Contact Us</a>
					</li>
				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
		<!--/.container-fluid -->
	</nav>


	<section id="home">
		<div class="home-inner">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2 text-center">
					<h3>Welcome To</h3>
				    <h3>Loughton Baptist Church</h3>
					
					</div>
</div>
</div>
</div>
</section>
<!--home intro section-->


<section id="alpha" class="about-section">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3 center-title text-center wow fadeInUp">
				<?php perch_content('S2 - Top Bit'); ?>
			</div>
		</div>
		<!--section title-->
		<div class="row">
			<div class="col-md-3 col-sm-6 text-center">
				<?php perch_content('S2 - item 1'); ?>
			</div>
			<!--img-service box-->
			<div class="col-md-3 col-sm-6 text-center">
				<?php perch_content('S2 - item 2'); ?>

			</div>
			<!--img-service box-->
			<div class="col-md-3 col-sm-6 text-center">
				
				<?php perch_content('S2 - item 3'); ?>
				

			</div>
			<!--img-service box-->
			<div class="col-md-3 col-sm-6 text-center">
				<?php perch_content('S2 - item 4'); ?>

			</div>
			<!--img-service box-->
		</div>
	</div>
</section>
<!--about us-->


<section class="opening-hours">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3 center-title text-center wow fadeIn">
				<?php perch_content('S3 - Heading'); ?>
			</div>
		</div>
		<!--section title-->
		<div class="row">
			<div class="col-sm-5 col-sm-offset-1 wow fadeInUp">
				<?php perch_content('S3 - Box 1'); ?>
			</div>
			<div class="col-sm-5 wow fadeInUp">
				<?php perch_content('S3 - Box 2'); ?>
			</div>
		</div>
	</div>
</section>
<!--section opening hours-->

<section class="section-dishes" id="newLBC">
	<div class="container">
		<div class="row wow fadeIn delay1">
			<div class="col-sm-6 col-sm-offset-3 center-title text-center question-below">
				<?php perch_content('S4 - Top'); ?>
				</div>
			</div>
			<div class="panel-group col-sm-4 Tab wow fadeIn delay2" id="accordion1">
				<div class="panel">
					<?php perch_content('S4 - Collapse 1'); ?>
				</div>
				<div class="panel">
					<?php perch_content('S4 - Collapse 2'); ?>
				</div>
				<div class="panel">
					<?php perch_content('S4 - Collapse 3'); ?>
				</div>

			</div>

			<div class="panel-group col-sm-4 Tab wow fadeIn delay2" id="accordion2">

				<div class="panel">
					<?php perch_content('S4 - Collapse 4'); ?>
				</div>
				<div class="panel">
					<?php perch_content('S4 - Collapse 5'); ?>
				</div>
				<div class="panel">
					<?php perch_content('S4 - Collapse 6'); ?>
				</div>

				</div>

				<div class="panel-group col-sm-4 Tab wow fadeIn delay2" id="accordion3">
					<div class="panel">
						<?php perch_content('S4 - Collapse 7'); ?>
					</div>
					<div class="panel">
						<?php perch_content('S4 - Collapse 8'); ?>
					</div>
					<div class="panel">
						<?php perch_content('S4 - Collapse 9'); ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--section dishes-->

	<section class="cta">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center">
					<?php perch_content('S5 - Header and Link'); ?>
				</div>
			</div>
		</div>
	</section>
	<!--call to action-->

	<section class="section-dishes" id="house-groups">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3 center-title text-center wow fadeIn delay1">
					<?php perch_content('S6 - Header'); ?>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-12 wow fadeIn delay2">
					<div class="owl-carousel owl-theme">
						<?php perch_content('S6 - Slider (House Groups)'); ?>
					</div>
				</div>
			</div>

			<div class="row" style="margin-bottom: -55px;">
				<div class="col-sm-6 col-sm-offset-3 center-title text-center activity-title wow fadeIn delay2">
					<?php perch_content('S6 - 2nd Header'); ?>
					</div>
				</div>

				<div class="panel-group col-sm-4 Tab wow fadeIn delay2" id="accardion1">
					<div class="panel">
						<?php perch_content('S6 - Collapse 1'); ?>
					</div>
					<div class="panel">
						<?php perch_content('S6 - Collapse 2'); ?>
					</div>

				</div>

				<div class="panel-group col-sm-4 Tab wow fadeIn delay2" id="accardion2">

					<div class="panel">
						<?php perch_content('S6 - Collapse 3'); ?>
					</div>

					<div class="panel">
						<?php perch_content('S6 - Collapse 4'); ?>
					</div>


				</div>

				<div class="panel-group col-sm-4 Tab wow fadeIn delay2" id="accardion3">
					<div class="panel">
						<?php perch_content('S6 - Collapse 5'); ?>
						</div>
						<div class="panel">
							<?php perch_content('S6 - Collapse 6'); ?>
						</div>

					</div>
				</div>

			</section>



			<section class="cta">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<?php perch_content('S7 - Header and link'); ?>
						</div>
					</div>
				</div>
			</section>
			<!--call to action-->





			<section id="events" class="section-events">
				<div class="container">
					<div class="row">
						<div class="col-sm-6 col-sm-offset-3 center-title text-center">
							<h3>Upcoming events</h3>
							<span class="center-line"></span>

						</div>
					</div>
					<!--section title-->
					<div class="row">
						<div class="col-sm-4 margin-b-30">
							<div class="event-thumb">
								<?php perch_content('S8 - Event 1'); ?>
							</div>
						</div>
						<!--event entry column-->
						<div class="col-sm-4 margin-b-30">
							<div class="event-thumb">
								<?php perch_content('S8 - Event 2'); ?>
							</div>
						</div>
						<!--event entry column-->
						<div class="col-sm-4 margin-b-30">
							<div class="event-thumb">
								<?php perch_content('S8 - Event 3'); ?>
							</div>
						</div>
						<!--event entry column-->
					</div>
				</div>
			</section>
			<!--events-->


			<section class="cta">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<?php perch_content('S9 - Header and link'); ?>
						</div>
					</div>
				</div>
			</section>

			<section id="Information" class="section-info">
				<div class="container">
					<div class="row">
						<div class="col-sm-6 col-sm-offset-3 center-title text-center info-title">
							<h3>Information</h3>
							</div>
						</div>
					</div>

					<div class="container">
						<div class="row">
							<div class="col-md-2 col-md-offset-1  text-center">
								<p class="resizeInfo spaceOutInfo">Sermons</p>
								<span class="center-line"></span>

								<div>
									<a href="sermons.php" target="_blank">
										<button type="button" class="btn btn-yellow btn-sm wow fadeInUp delay">View Sermons<i class="fa fa-angle-right"></i></button>
									</a>
								</div>
							</div>

							<div class="col-md-2 text-center">
								<p class="resizeInfo spaceOutInfo">Newsheets</p>
								<span class="center-line"></span>


								<div>
									<a href="<?php perch_content('S10 - Newsheet'); ?>" download>
										<button type="button" class="btn btn-yellow btn-sm wow fadeInUp delay">Download Newsheet<i class="fa fa-angle-right"></i></button>
									</a>
								</div>

							</div>

							<div class="col-md-2 text-center ">
								<p class="resizeInfo spaceOutInfo">Church Suite</p>
								<span class="center-line"></span>


								<div>
									<a href="https://login.churchsuite.com/" target="_blank">
										<button type="button" class="btn btn-yellow btn-sm wow fadeInUp delay">Go to ChurchSuite<i class="fa fa-angle-right"></i></button>
									</a>
								</div>

							</div>

							<div class="col-md-2 text-center ">
								<p class="resizeInfo spaceOutInfo">Calendar</p>
								<span class="center-line"></span>


								<div>
									<a href="calendar.php" target="_blank">
										<button type="button" class="btn btn-yellow btn-sm wow fadeInUp delay">View Calendar<i class="fa fa-angle-right"></i></button>
									</a>
								</div>
							</div>

							<div class="col-md-2 text-center ">
								<p class="resizeInfo spaceOutInfo">Giving</p>
								<span class="center-line"></span>


								<div>
									<a href="giving.php" target="_blank">
										<button type="button" class="btn btn-yellow btn-sm wow fadeInUp delay">Go to Giving Page<i class="fa fa-angle-right"></i></button>
									</a>
								</div>
							</div>
						</div>

					</div>

				</section>
				<!--events-->

				<section id="about-us" class="our-chefs">
					<div class="container">
						<div class="row">
							<div class="col-sm-6 col-sm-offset-3 center-title text-center">
								<?php perch_content('S11 - Header'); ?>
							</div>
						</div>
						<!--section title-->
						<div class="row">
							<div class="col-sm-4 col-sm-offset-1 margin-b-30">
								<div class="chef-box">
									<?php perch_content('S11 - Person 1'); ?>
								</div>
								<!--chef desc-->
							</div>
							<!--chef column-->
							<div class="col-sm-4 col-sm-offset-2 margin-b-30">
								<div class="chef-box">
									<?php perch_content('S11 - Person 2'); ?>
								</div>
								<!--chef desc-->
							</div>
							<!--chef column-->
						</div>

						<div class="row">
							<div class="col-sm-4 col-sm-offset-1 margin-b-30">
								<div class="chef-box">
									<?php perch_content('S11 - Person 3'); ?>
								</div>
								<!--chef desc-->
							</div>
							<!--chef column-->
							<div class="col-sm-4 col-sm-offset-2 margin-b-30">
								<div class="chef-box">
									<?php perch_content('S11 - Person 4'); ?>
								</div>
							</div>
							<!--chef column-->
						</div>
					</section>
					<!--Chefs section-->


					<section id="contact-us" class="about-section" >
						<div class="container" >
							<div class="row">
								<div class="col-sm-6 col-sm-offset-3 center-title text-center">
									<?php perch_content('S12 - Header'); ?>
								</div>
							</div>
							<!--section title-->
							<div class="row">

								<div class="col-md-6 col-sm-6">
									<div>
										<p class="contact-us">
											Loughton Baptist Church Bradwell Road<br> Loughton
											<br> Milton Keynes<br> MK5 8AJ<br><br> Tel: 01908 232902<br><br> office@loughtonbaptistchurch.org
										</p>
									</div>
								</div>


								<div class="col-md-6 col-sm-6 text-center">

									<div id="map" style="width:100%; height:300px; background-color:grey;">

									</div>

								</div>
								<!-- Maps section -->
							</div>
						</div>
					</section>

					<section id="contact-form" class="about-section">
						<div class="container">

							<div class="row">

								<div class="col-lg-8 col-lg-offset-2">
									<form id="contact-form" method="post" action="contact.php" role="form">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3 center-title text-center">
												<h3>Contact us</h3>
												<span class="center-line"></span>
											</div>
										</div>
										<div class="text-center">
											<p class="contact-us">Fill in all the fields marked with an astrix.<p>
											</div>
											<div class="controls">
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label for="form_name" class="form-contact">Firstname *</label>
															<input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
															<div class="help-block with-errors"></div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label for="form_lastname" class="form-contact">Lastname *</label>
															<input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
															<div class="help-block with-errors"></div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label for="form_email" class="form-contact">Email *</label>
															<input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
															<div class="help-block with-errors"></div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label for="form_phone" class="form-contact">Phone</label>
															<input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Please enter your phone">
															<div class="help-block with-errors"></div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label for="form_message" class="form-contact">Message *</label>
															<textarea id="form_message" name="message" class="form-control" placeholder="Message for us *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
															<div class="help-block with-errors"></div>
														</div>
													</div>
													<div class="col-md-12">
														<input type="submit" class="btn btn-success btn-send" value="Send message">
													</div>
												</div>
											</div>

										</form>
									</div>
								</div>
							</div>
						</section>




						<footer class="footer  text-center">
							<div class="container">
								<div class=" text-center">
									<ul class="list-inline social">
										<li><a href="#"><i class="fa fa-facebook"></i></a>
										</li>
										<li><a href="#"><i class="fa fa-twitter"></i></a>
										</li>
										<li><a href="#"><i class="fa fa-google-plus"></i></a>
										</li>
										<li><a href="#"><i class="fa fa-youtube"></i></a>
										</li>
									</ul>
								</div>
							</div>
							<span>Loughton Baptist Church &copy; 2018</span>
						</footer>

						<!-- jQuery -->
						<script src="js/jquery.min.js"></script>
						<script type="text/javascript" src="js/jquery.jplayer.min.js"></script>
						<script type="text/javascript" src="js/jplayer.playlist.min.js"></script>
						<!-- Bootstrap js-->
						<script src="bootstrap/js/bootstrap.min.js"></script>
						<!--easing plugin for smooth scroll-->
						<script src="js/jquery.easing.1.3.min.js" type="text/javascript"></script>
						<script src="js/jquery.backstretch.min.js" type="text/javascript"></script>
						<!--flex slider plugin-->
						<script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
						<!--owl carousel slider js-->
						<script src="owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
						<!-- jQuery UI -->
						<script type="text/javascript" src="js/jquery-ui.min.js"></script>
						<!--pace plugin-->
						<script src="js/pace.min.js" type="text/javascript"></script>
						<!--on scroll animation-->
						<script src="js/wow.min.js" type="text/javascript"></script>
						<!--popup js-->
						<script src="lightbox2/dist/js/lightbox.min.js" type="text/javascript"></script>
						<!-- calendar -->
						<script src="fullcalendar/lib/moment.min.js"></script>
						<script src="fullcalendar/fullcalendar.js"></script>
						<script type="text/javascript" src="fullcalendar/gcal.js"></script>
						<!-- wow -->
						<script src="js/wow.min.js"></script>
						<script>
						new WOW().init();
						</script>
						<!--restaurant custom js-->
						<script src="js/restaurant-custom.js" type="text/javascript"></script>
						<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJYcq8FfeaeU551a5UVFaHhR1bURU3O2A&callback=initMap"></script>



					</body>
					</html>
