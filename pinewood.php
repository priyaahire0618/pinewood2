<!DOCTYPE html>
<html lang="en">

<head>
	<title>32 Pinewood Drive</title>
	<meta charset="UTF-8">
	<meta name="description" content="32 Pinewood Drive">
	<meta name="keywords" content="PINEWOOD, unica, creative, html">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->

	<link rel="stylesheet" type="text/css" href="../public/css/pine.css">
	<script src="../public/js/pine.js"></script>
</head>

<body>
	<div class="header-section1">
		<!--Carousel Wrapper-->
		<section id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
			<!--Indicators-->
			<ol class="carousel-indicators">
				<li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example-2" data-slide-to="1"></li>
				<li data-target="#carousel-example-2" data-slide-to="2"></li>
			</ol>
			<!--/.Indicators-->
			<!--Slides-->
			<div class="carousel-inner" role="listbox">
				<div class="carousel-item active">
					<div class="view">
						<img class="d-block w-100" src="../public/images/3.jpg" alt="First slide">
						<div class="mask rgba-black-light"></div>
					</div>
				</div>
				<div class="carousel-item">
					<!--Mask color-->
					<div class="view">
						<img class="d-block w-100" src="../public/images/2.jpg" alt="Second slide">
						<div class="mask rgba-black-strong"></div>
					</div>

				</div>
				<div class="carousel-item">
					<!--Mask color-->
					<div class="view">
						<img class="d-block w-100" src="../public/images/1.jpg" alt="Third slide">
						<div class="mask rgba-black-slight"></div>
					</div>
				</div>
			</div>
			<!--/.Slides-->
			<!--Controls-->
			<a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
			<!--/.Controls-->
		</section>
		<!--/.Carousel Wrapper-->
		<div class="container ">


			<nav id="hamburger" class="navbar navbar-expand-lg navbar-light fixed-top">
				<div class=" container">
					<a href="#" class="navbar-brand">
						<img src="../public/images/logo.png" height="88" alt="CoolBrand">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse"
						data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
						aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse">

						<div class="navbar-nav flex-fill" style="padding-left:35px" id="header1">
							<div><a class="nav-item nav-link nav-pad" href="../view/pinewood.php">
									HOME </a>
							</div>
							<div><a class="nav-item nav-link" href="../view/about.php">ABOUT US</a></div>
							<div><a class="nav-item nav-link" href="../view/Blog.php">BLOG</a></div>
							<div><a class="nav-item nav-link" href="../view/construction.php">SITE UPDATES</a></div>
							<div><a class="nav-item nav-link" href="../view/Contact.php">CONTACT</a> </div>
						</div>
					</div>
					<button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
						Enquiry Now
					</button>
				</div>
			</nav>
		</div>


		<!-- Enquiry Modal start -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
			aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-body">
						<form name="enquiry" action="register.php" method="post" onsubmit="return validateForm()">
							<div class="form-group">
								<!-- left unspecified, .bmd-form-group will be automatically added (inspect the code) -->
								<div class="row">
									<div class="col-md-1"></div>
									<label for="formGroupExampleInput" class="bmd-label-floating col-md-9"> Name :
									</label>
								</div>
								<div class="row">
									<div class="col-md-1"></div>
									<input type="text" placeholder="Amit shinde" class="form-control col-md-9"
										id="formGroupExampleInput" name="name" required *>
								</div>

							</div>
							<div class="form-group bmd-form-group">
								<!-- manually specified -->
								<div class="row">
									<div class="col-md-1"></div>
									<label for="formGroupExampleInput2" class="bmd-label-floating col-md-9">Email :
									</label>
								</div>
								<div class="row">
									<div class="col-md-1"></div>
									<input type="email" placeholder=" abc@gmail.com" required *
										class="form-control col-md-9" id="formGroupExampleInput2" name="email">
								</div>
							</div>
							<div class="form-group">
								<!-- left unspecified, .bmd-form-group will be automatically added (inspect the code) -->
								<div class="row">
									<div class="col-md-1"></div>
									<label for="formGroupExampleInput" class="bmd-label-floating col-md-9">Phone :
									</label>
								</div>
								<div class="row">
									<div class="col-md-1"></div>
									<input type="tel" placeholder="+91  " required * class="form-control col-md-9"
										id="formGroupExampleInput" pattern="[0-9]{10}" name="phone">
								</div>

							</div>
							<div class="form-group">
								<!-- left unspecified, .bmd-form-group will be automatically added (inspect the code) -->
								<div class="row">
									<div class="col-md-1"></div>

									<select class="browser-default custom-select" name="intrested">
										<option selected>Intressed in</option>
										<option>1 BHK</option>
										<option>2 BHK</option>
										<option>3 BHK</option>
									</select>
								</div>
							</div>
							<hr>
							<button type="submit" value="Submit" class="btn btn-primary">Submit</button>
						</form>
					</div>
				</div> -->
			</div>
		</div>
	</div>
	<!--Enquiry Model ends here-->
	</div>

	<!-- Priject USP Start -->

	<div class="container_main">
		<nav class="d-none d-md-block navbar navbar-expand-sm bg-dark">
			<ul class="navbar-nav" style="padding-left: 250px;">
				<li class="nav-item">
					<a class="nav-link" href="#projectUsp">Project USP</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#gallery">Gallery</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#constructUpd">Contruction Updates</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#amenities">Amenities</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#location">Location</a>
				</li>
			</ul>
		</nav>
	</div>

	<a id="projectUsp"></a>
	<section class="section-color top-padding-45 bottom-padding-45 section-bottom-shadow uspro">
		<div class="container projectUsp">
			<div class="row count-container count-second-color" style="color:#424242; margin-top:5%;">
				<div class="col-xs-12 col-md-12 col-lg-12 text-center">
					<h5 class="subtitle-margin">32 Pinewood Drive</h5>
					<h1 class="">Project USP<span class="special-color">.</span></h1>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="container margin-top-30" style="margin-bottom:8%;">
			<div class="row">
				<div class="col-xs-12 col-md-12 col-lg-12">
					<p class="usp" align="center" style="font-size:30px;color:#3E3D3D;line-height:40px;">
						Take a step back, Take your time, Take it easy.

						Go slow

						Live today, Live your way, Live better

						Go slow
					</p>
				</div>

				<div class="clearfix"></div>
				<div class="row row-usp">
					<div class="col-xs-12 col-sm-6 col-md-6">
						<img src="../public/images/1.jpg" style="border:#E5E2E2 1px solid; width:75%;height:260px;"
							class="img-responsive img-usp lazy" />
					</div>
					<div class="col-xs-12 col-sm-6 ">
						<h3 class="text-center">32 Pinewood Drive<span class="special-color">.</span></h3>
						<div class="title-separator-primary2" style="height: 2px"></div>
						<div class="description-usp"></div>
						<p class="negative-margin ecocity">Located near P3 Hinjewadi, at
							Bhoirwadi, 32
							Pinewood
							Drive is
							a home that will take you away from the hustle bustle and put you back in the center of
							a
							beautiful life! Amazing access, next door to offices, schools, conveniences,
							entertainment
							and to nature&rsquo;s getaways. 32 Pinewood Drive, a home that lets you go slow.
						</p>
						<br />

					</div>
				</div>
			</div>
	</section>

	<!-- section Gallery start -->

	<div class="clearfix"></div>
	</div>
	<a id="gallery"></a>
	<section class="section-light top-padding-45 section-both-shadow bottom-padding-45"
		style="z-index:90; background-color:#fff;">
		<div class="container floorPlan" style="margin-top:50px;">
			<div class="row">
				<div class="col-xs-12 col-lg-12 text-center">
					<h5 class="subtitle-margin">32 Pinewood Drive</h5>
					<h1 class="">Gallery<span class="special-color">.</span></h1>
				</div>
				<div class="col-xs-8 col-xs-offset-2 col-sm-offset-4 col-sm-4">
					<div class="title-separator-primary2" style="margin-left: 520px;top: -46px;height: 2px;"></div>
				</div>
			</div>
		</div>

		<div class="container">


			<div class="row text-center text-lg-left">

				<div class="col-lg-3 col-md-4 col-6">
					<a href="../public/images/1.jpg" class="d-block mb-4 h-100">
						<img class="img-fluid img-thumbnail" src="../public/images/1.jpg" alt="">
					</a>
				</div>
				<div class="col-lg-3 col-md-4 col-6">
					<a href="../public/images/2.jpg" class="d-block mb-4 h-100">
						<img class="img-fluid img-thumbnail" src="../public/images/2.jpg" alt="">
					</a>
				</div>
				<div class="col-lg-3 col-md-4 col-6">
					<a href="../public/images/3.jpg" class="d-block mb-4 h-100">
						<img class="img-fluid img-thumbnail" src="../public/images/3.jpg" alt="">
					</a>
				</div>
				<div class="col-lg-3 col-md-4 col-6">
					<a href="../public/images/4.jpg" class="d-block mb-4 h-100">
						<img class="img-fluid img-thumbnail" src="../public/images/4.jpg" alt="">
					</a>
				</div>
				<div class="col-lg-3 col-md-4 col-6">
					<a href="../public/images/5.jpg" class="d-block mb-4 h-100">
						<img class="img-fluid img-thumbnail" src="../public/images/5.jpg" alt="">
					</a>
				</div>
				<div class="col-lg-3 col-md-4 col-6">
					<a href="../public/images/6.jpg" class="d-block mb-4 h-100">
						<img class="img-fluid img-thumbnail" src="../public/images/6.jpg" alt="">
					</a>
				</div>


			</div>

		</div>
		<!-- /.container -->
	</section>

	<!-- Amenities section start -->
	<a id="amenities"></a>
	<section class="neighbourhood top-padding-45 section-both-shadow bottom-padding-45">
		<div class="amenities" style="margin-bottom:25px;">
			<div class="row">
				<div class="col-xs-12 col-md-12 col-sm-offset-3 col-sm-6 text-center">
					<h5 class="subtitle-margin">&nbsp;</h5>
					<h1 class=""><span class="special-color">Amenities</span></h1>
				</div>
				<div class="col-xs-8 col-md-12 col-xs-offset-2 col-sm-offset-4 col-sm-4">
					<div class="title-separator-primary2" style="margin-left: 590px;top: -46px;height: 2px;"></div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row text-center text-lg-left">
				<div class="col-lg-3 col-md-4 col-6 text-center">
					<div class="mrtop">
						<img class="img-fluid" src="../public/images/club1.png" class="lazy" />
						<p>Club House</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 col-6 text-center">
					<div class="mrtop">
						<img class="img-fluid" src="../public/images/yoga.png" />
						<p>Yoga</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 col-6 text-center">
					<div class="mrtop">
						<img class="img-fluid" src="../public/images/lawn.png" />
						<p>Lawn</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 col-6 text-center">
					<div class="mrtop">
						<img class="img-fluid" src="../public/images/swimming.png" />
						<p>Swimming Pool</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 col-6 text-center">
					<div class="mrtop">
						<img class="img-fluid" src="../public/images/play.png" />
						<p>Kids Play Area</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 col-6 text-center">
					<div class="mrtop">
						<img class="img-fluid" src="../public/images/deck.png" />
						<p>Deck Area</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 col-6 text-center">
					<div class="mrtop">
						<img class="img-fluid" src="../public/images/bask.png" />
						<p>Basketball Court</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 col-6 text-center">
					<div class="mrtop">
						<img class="img-fluid" src="../public/images/bar.png" />
						<p>Barbeque</p>
					</div>
				</div>

			</div>

		</div>
	</section>
	<!-- blog start -->
	<section id="constructUpd" class="section-dark">

		<div class="container" style="margin-top:35px;">
			<div class="row">
				<div class="col-xs-12 col-lg-12 text-center">
					<h5 class="subtitle-margin">32 Pinewood Drive</h5>
					<h1 class="" style="font: size 15%;">Construction Update<span class="special-color">.</span></h1>
				</div>
				<div class="col-xs-8 col-xs-offset-2 col-sm-offset-4 col-sm-4">
					<div class="title-separator-primary2" style="margin-left: 520px;top: -46px;height: 2px;"></div>
				</div>
			</div>
		</div>
		<div class="container margin-top-60">
			<div class="row">
				<div class="col-sm-6" style="width: 100%;">
					<!--<style>img{ height:50% !important;}</style>-->
					<article class="masonry-grid-item masonry-grid-item-big zoom-cont">
						<figure>
							<a href="#" title="zoom"><img src='../public/images/construct2.jpg' width="360" height="270"
									data-src="https://www.namratagroup.com/site-updates/wp-content/uploads/2019/06/June1932PinewoodDrive1-360x270.jpg"
									class="lazy wp-post-image" alt="32 Pinewood Drive"
									data-srcset="https://www.namratagroup.com/site-updates/wp-content/uploads/2019/06/June1932PinewoodDrive1-360x270.jpg 360w, https://www.namratagroup.com/site-updates/wp-content/uploads/2019/06/June1932PinewoodDrive1-300x225.jpg 300w, https://www.namratagroup.com/site-updates/wp-content/uploads/2019/06/June1932PinewoodDrive1-768x576.jpg 768w, https://www.namratagroup.com/site-updates/wp-content/uploads/2019/06/June1932PinewoodDrive1-1024x768.jpg 1024w, https://www.namratagroup.com/site-updates/wp-content/uploads/2019/06/June1932PinewoodDrive1.jpg 1440w"
									sizes="(max-width: 360px) 100vw, 360px" /></a>
						</figure>
						<div class="blog-grid2-post-content">
							<a href="#" class="blog-grid1-title" title="blog">
								<h4>32 Pinewood Drive Construction Updates May 2019</h4>
							</a>
							<div class="blog-grid2-separator"></div>
							<p>&nbsp; &nbsp;</p>
							<div class="blog-grid2-bottom">
								<div class="blog-grid1-author pull-left"> <a href="#"><i class="fa fa-user"></i>
										Admin</a> </div>
								<div class="blog-grid1-date pull-right"><i class="fa fa-calendar-o"></i>Tuesday
									28th
									May, 2019</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</article>

				</div>
				<!--<style>img{ height:50% !important;}</style>-->
				<div class="col-sm-6" style="width: 100%;">
					<article class="masonry-grid-item masonry-grid-item-big zoom-cont">
						<figure>
							<a href="#" title="zoom"><img src='../public/images/construct1.jpg' width="360" height="270"
									data-src="" class="lazy wp-post-image" alt=""
									data-srcset="https://www.namratagroup.com/site-updates/wp-content/uploads/2019/02/20190115_170648-360x270.jpg 360w, https://www.namratagroup.com/site-updates/wp-content/uploads/2019/02/20190115_170648-300x225.jpg 300w, https://www.namratagroup.com/site-updates/wp-content/uploads/2019/02/20190115_170648-768x576.jpg 768w, https://www.namratagroup.com/site-updates/wp-content/uploads/2019/02/20190115_170648-1024x768.jpg 1024w"
									sizes="(max-width: 360px) 100vw, 360px" /></a>
						</figure>
						<div class="blog-grid2-post-content">
							<a href="#" class="blog-grid1-title" title="blog">
								<h4>32 Pinewood Drive Construction Updates February 2019</h4>
							</a>
							<div class="blog-grid2-separator"></div>
							<p>&nbsp; &nbsp;</p>
							<div class="blog-grid2-bottom">
								<div class="blog-grid1-author pull-left"> <a href="#"><i class="fa fa-user"></i>
										Admin</a> </div>
								<div class="blog-grid1-date pull-right"><i class="fa fa-calendar-o"></i>Friday
									8th
									February, 2019</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</article>
				</div>
			</div>
		</div>


	</section>
	<!--blog end-->

	<!-- Location -->
	<div id="location" class="map">
		<div class="map_container">
			<h2 class="text-center" style="padding-bottom:30px">Location</h2>
			<div class="title-separator-primary2" style="top: -35px; height: 2px;"></div>
			<div class="container">
				<iframe
					src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d60507.77889533231!2d73.68317!3d18.585929!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x48d804381fd1bcc4!2s32+Pinewood+Drive!5e0!3m2!1sen!2sus!4v1564802608628!5m2!1sen!2sus"
					width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
	<!-- end Location -->

	<!-- footer start -->
	<footer id="myFooter">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<h5>32 Pinewood Drive Location.</h5>
					<div class="textwidget">
						<address style="margin-top: 14px;"><i class="fa fa-map-marker"></i><span> Phase 3,
							</span><br>
							<span class="nxtln">Hinjewadi, Rajiv Gandhi Infotech park,</span><br>
							<span class="nxtln"> Hinjewadi, Pune</span><br>
							<span class="nxtln"> Maharastra- 411033</span>
						</address>
					</div>
				</div>


				<div class="col-sm-3">
					<h5>Contact Us</h5>
					<ul style="line-height: 1.3;">
						<p><span><i class="fa fa-envelope fa-sm"></i><a href="#" title="email">
									imaginehomeland@gmail.com</a></span></p>
						<p><span><i class="fa fa-phone"></i> (+91) 9850161144</span></p>
						<p><span><i class="fa fa-phone"></i> (+91) 9850581144</span></p>
						<p><span><i class="fa fa-phone"></i> (+91) 9923081144</span></p>
					</ul>
				</div>
				<div class="col-sm-3">
					<h5>Authorized Channel Partner</h5>
					<ul style="line-height: 1.3" ;>
						<!-- <li><a href="#">Marketing Partner</a></li> -->
						<li><a>Imagine Homeland</a></li>
						<li><a> Office No.
								107</a><br>
							<span class="nxtln"> 1st Floor, Wisteria Fortune</span><br>
							<span class="nxtln"> Murunji Road, Pune - 411033</span>
							<p></p>
						</li>
						<li><a>MAHA RERA A52100013889</a></li>
						<li><a href="#"></a></li>
					</ul>
				</div>
				<div class="col-sm-2">
					<h5>Follow Us</h5>
					<div class="social-networks">
						<a href="#" class="twitter" style="font-size:20px;"><i class="fa fa-twitter"></i></a>
						<a href="#" class="facebook" style="font-size:20px;"><i class="fa fa-facebook"></i></a>
						<a href="#" class="google" style="font-size:20px;"><i class="fa fa-google-plus"></i></a>
					</div>
					<a href="../view/Contact.php" class="btn btn-info" role="button">Contact Us</a>
				</div>
			</div>
		</div>
		<div class="footer-copyright">
			<p>Copyright © 2019 32 PinewoodDrive </p>
		</div>
	</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



</body>

</html>