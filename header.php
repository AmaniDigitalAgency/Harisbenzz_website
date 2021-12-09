<?php include "includes/dbh.inc.php"; include "includes/fetch_data.inc.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Haris Benzz</title>
	<link rel="stylesheet" href="fonts/stylesheet.css" />
	<link rel="stylesheet" href="css/font-awesome.min.css" /> 
	<link href="css/style.css" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<!-- page wrapper -->

<body class="boxed_wrapper">
	<!-- .preloader -->
	<!---div class="preloader"></div----->
	<!-- /.preloader -->
	<!-- Main Header -->
	<header class="main-header header-style-one header-main">
		<div class="outer-container">
			<div class="outer-box px-5">
				<div class="row">
					<div class="col-lg-2 md-display-none">
						<img src="images/small-logo.png" class="log-img" style="height: 35px;" alt="">
					</div>
					<div class="col-lg-9 col-md-12 col-sm-12 md-display-none">
						<nav class="nav-menu">
							<ul>
								<li><a href="./">Home  </a>
								</li>
								<li><a class="after" href="#"> Properties   </a>
									<ul class="dropdown">
										<li><a href="listings"> Our Listings </a>
										</li>
										<li><a href="recent-sales"> Recent Sales  </a>
										</li>
										<li><a href="new-developments"> New Development  </a>
										</li>
										<li><a href="interactive-map"> Interactive Map  </a>
										</li>
									</ul>
								</li>
								<li><a class="after" href="#"> Buyers  </a>
									<ul class="dropdown">
									<li><a href="buy-with-us"> Buy With Us </a>
										</li>
										<li><a href="neighborhood-guides"> Neighbourhood Guides  </a>
										</li>
										<!-- <li><a href="search"> Search MLS  </a>
										</li> -->
									</ul>
								</li>
								<li><a class="after" href="#"> Sellers   </a>
									<ul class="dropdown">
									<li><a href="list-with-us"> List With Us </a>
										</li>
										<li><a href="concierge"> Concierge</a>
										</li>
										<li><a href="marketing"> Marketing </a>
										</li>
										<li><a href="our-numbers"> Our Numbers </a>
										</li>
										<!-- <li><a href="local-exposure"> Local Exposure </a>
										</li>
										<li><a href="global-exposure"> Global Exposure </a>
										</li>
										<li><a href="online-presence"> An Online Presence </a>
										</li>
										<li><a href="press"> Press </a>
										</li>
										<li><a href="industriy-recognition"> Industry Recognition </a>
										</li> -->
									</ul>
								</li>
								<li><a class="after" href="#"> About Us </a>
									<ul class="dropdown">
										<li><a href="harisbenzz-group"> About Haris Benzz </a>
										</li>
										<li><a href="our-team"> Our Team </a>
										</li>
										<li><a href="our-offices"> Our Offices </a>
										</li>
										<li><a href="testimonials"> What Our Clients Are Saying </a>
										</li>
									</ul>
								</li>
								<li class="after"><a href="in-the-media"> In The Media </a> 
								</li>
								<li class="after"><a href="blog">Blog </a> 
								</li>
								<li class="after"><a href="contact">Contact Us </a> 
								</li>
							</ul>
						</nav>
					</div>
					<div class="col-lg-1 small-nav">
						<div class="pull-rights nav-toggler">
							<button class="nav-btn"> <span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--Sticky Header-->
		<div class="sticky-header">
			<div class="container clearfix">
				<figure class="logo-box">
					<a href="./">
						<img src="images/small-logo.png" style="height: 35px;" alt="">
					</a>
				</figure>
				<div class="menu-area">
					<nav class="main-menu navbar-expand-lg">
						<div class="navbar-header">
							<!-- Toggle Button -->
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="navbar-collapse collapse clearfix">
							<ul class="navigation clearfix">
								<li class="current dropdown"><a href="listings"> Properties </a>
									<ul>
										<li><a href="listings"> Our Listings </a>
										</li>
										<li><a href="recent-sales"> Recent Sales  </a>
										</li>
										<li><a href="new-developments"> New Development  </a>
										</li>
										<li><a href="interactive-map"> Interactive Map  </a>
										</li>
									</ul>
								</li>
								<li class="dropdown"><a href="javascript:void(0)"> Buyers </a>
									<ul>
										<li><a href="buy-with-us"> Buy With Us </a>
										</li>
										<li><a href="neighborhood-guides"> Neighbourhood Guides  </a>
										</li>
										<!-- <li><a href="search"> Search MLS  </a>
										</li> -->
									</ul>
								</li>
								<li class="dropdown"><a href="javascript:void(0)"> Sellers</a>
									<ul>
										<li><a href="list-with-us"> List With Us </a>
										</li>
										<li><a href="concierge"> Concierge</a>
										</li>
										<li><a href="marketing"> Marketing </a>
										</li>
										<li><a href="our-numbers"> Our Numbers </a>
										</li>
										<!-- <li><a href="local-exposure"> Local Exposure </a>
										</li>
										<li><a href="global-exposure"> Global Exposure </a>
										</li>
										<li><a href="online-presence"> An Online Presence </a>
										</li>
										<li><a href="press"> Press </a>
										</li>
										<li><a href="industriy-recognition"> Industry Recognition </a>
										</li> -->
									</ul>
								</li>
								<li class="dropdown">
									<a href="javascript:void(0)"> About Us </a>
									<ul>
										<li><a href="harisbenzz-group"> About Haris Benzz </a>
										</li>
										<li><a href="our-team"> Our Team </a>
										</li>
										<li><a href="our-offices"> Our Offices </a>
										</li>
										<li><a href="testimonials"> What Our Clients Are Saying </a>
										</li>
									</ul>
								</li>
								<li class=""><a href="in-the-media"> In The Media </a> 
								</li>
								<li class=""><a href="blog">Blog </a> 
								</li>
								<li class=""><a href="contact">Contact Us </a> 
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
		<!-- sticky-header end -->
	</header>
	<div class="form-back-drop"></div>
	<!-- Hidden Bar -->
	<section class="hidden-bar">
		<div class="inner-box">
			<div class="cross-icon"><span class="fa fa-times"></span>
			</div>
			<!-- logo -->
			<div class="logo-box centred">
				<a href="javascript:void(0)">
					<figure>
						<img src="images/logo.png" alt="">
					</figure>
				</a>
			</div>
			<!-- side menu -->
			<div class="side-menu">
				<ul class="clearfix">
					<li class="current dropdown"><a href="javascript:void(0)"> Properties </a>
						<ul>
							<li><a href="listings"> Our Listings </a>
										</li>
										<li><a href="recent-sales"> Recent Sales  </a>
										</li>
										<li><a href="new-developments"> New Development  </a>
										</li>
										<li><a href="interactive-map"> Interactive Map  </a>
										</li>
						</ul>
					</li>
					<li class="dropdown"><a href="javascript:void(0)"> Buyers </a>
						<ul>
						<li><a href="buy-with-us"> Buy With Us </a>
										</li>
										<li><a href="neighborhood-guides"> Neighbourhood Guides  </a>
										</li>
										<!-- <li><a href="search"> Search MLS  </a>
										</li> -->
						</ul>
					</li>
					<li class="dropdown"><a href="javascript:void(0)"> Sellers </a>
						<ul>
							<li><a href="list-with-us"> List With Us </a>
										</li>
										<li><a href="concierge"> Concierge</a>
										</li>
										<li><a href="marketing"> Marketing </a>
										</li>
										<li><a href="our-numbers"> Our Numbers </a>
										</li>
										<!-- <li><a href="local-exposure"> Local Exposure </a>
										</li>
										<li><a href="global-exposure"> Global Exposure </a>
										</li>
										<li><a href="online-presence"> An Online Presence </a>
										</li>
										<li><a href="press"> Press </a>
										</li>
										<li><a href="industriy-recognition"> Industry Recognition </a>
										</li> -->
						</ul>
					</li>
					<li class="dropdown"><a href="javascript:void(0)"> About Us </a>
						<ul>
						<li><a href="harisbenzz-group"> About Haris Benzz </a>
										</li>
										<li><a href="our-team"> Our Team </a>
										</li>
										<li><a href="our-offices"> Our Offices </a>
										</li>
										<li><a href="testimonials"> What Our Clients Are Saying </a>
										</li>
						</ul>
					</li>
					<li class=""><a href="in-the-media"> In The Media </a> 
								</li>
								<li class=""><a href="blog">Blog </a> 
								</li>
								<li class=""><a href="contact">Contact Us </a> 
								</li>
				</ul>
			</div>
			<ul class="social-links">
				<li><a href="https://www.facebook.com/harisbenzz">Facebook</a>
				</li>
				<li><a href="https://twitter.com/HarisBenzz">Twitter</a>
				</li>
				<li><a href="javascript:void(0)">Instagram</a>
				</li>
			</ul>
		</div>
	</section>