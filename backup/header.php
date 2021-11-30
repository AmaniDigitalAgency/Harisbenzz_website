<?php 
	include "includes/dbh.inc.php"; 
	include "includes/fetch_data.inc.php"; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><? if(isset($pageTitle)){ echo $pageTitle;}else{ echo activePage()==='index'?'Home':ucwords(str_ireplace('-',' ',activePage()));}?> | HarisBenzz International</title>
	<link rel="stylesheet" href="fonts/stylesheet.css" />
	<link rel="stylesheet" href="css/font-awesome.min.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="css/style.css" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<link rel="icon" href="images/favicon.png" type="image/x-icon">
</head>
<!-- page wrapper -->

<body class="boxed_wrapper">
	<!-- .preloader -->
	<!---div class="preloader"></div----->
	<!-- /.preloader -->
	<!-- Main Header -->
	<header class="main-header header-style-one">
		<div class="outer-container">
			<div class="outer-box clearfix">
				<div class="pull-left logo-box">
					<figure class="logo">
						<a href="./">
							<img src="images/logo.png" style="height: 57px;" alt="">
						</a>
					</figure>
				</div>
				<div class="pull-right nav-toggler">
					<button class="nav-btn"> <span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
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
										<li><a href="listings"> Featured Properties </a>
										</li>
										<li><a href="javascript:void(0)"> Rentals</a>
										</li>
										<li><a href="javascript:void(0)"> Vacation Homes</a>
										</li>
										<li><a href="javascript:void(0)"> For Sale</a>
										</li>
										<li><a href="javascript:void(0)"> Land</a>
										</li>
										<!--<li><a href="javascript:void(0)"> Recent Sales  </a></li>  
                                        <li><a href="javascript:void(0)"> New Development  </a></li>  
                                        <li><a href="javascript:void(0)"> Interactive Map  </a></li> -->
									</ul>
								</li>
								<li class="dropdown"><a href="buy-with-us"> Buyers </a>
									<ul>
										<li><a href="javascript:void(0)"> Buy With Us </a>
										</li>
										<li><a href="javascript:void(0)"> Neighbourhood Guides  </a>
										</li>
										<li><a href="javascript:void(0)"> Search MLS  </a>
										</li>
									</ul>
								</li>
								<li class="dropdown"><a href="javascript:void(0)"> Sellers</a>
									<ul>
										<li><a href="javascript:void(0)"> List With Us </a>
										</li>
										<li><a href="javascript:void(0)"> Concierge</a>
										</li>
										<!--<li><a href="javascript:void(0)"> Marketing </a></li> 
                                        <li><a href="javascript:void(0)"> Our Numbers </a></li> 
                                        <li><a href="javascript:void(0)"> Local Exposure </a></li> 
                                        <li><a href="javascript:void(0)"> Global Exposure </a></li> 
                                        <li><a href="javascript:void(0)"> An Online Presence </a></li> 
                                        <li><a href="javascript:void(0)"> Press </a></li> 
                                        <li><a href="javascript:void(0)"> Industry Recognition </a></li> -->
									</ul>
								</li>
								<li><a href="javascript:void(0)">Our services </a> 
								</li>
								<li class=""><a href="about"> About Us </a>
									<ul>
										<li><a href="javascript:void(0)"> About HarisBenzz </a>
										</li>
										<li><a href="javascript:void(0)"> Our Team </a>
										</li>
										<li><a href="javascript:void(0)"> Our Offices </a>
										</li>
										<li><a href="javascript:void(0)"> What Our Clients Are Saying </a>
										</li>
									</ul>
								</li>
								<li class=""><a href="javascript:void(0)">Blog </a> 
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
							<li><a href="listings"> Featured Properties </a>
							</li>
							<li><a href="javascript:void(0)"> Rentals</a>
							</li>
							<li><a href="javascript:void(0)"> Vacation Homes</a>
							</li>
							<li><a href="javascript:void(0)"> For Sale</a>
							</li>
							<li><a href="javascript:void(0)"> Land</a>
							</li>
						</ul>
					</li>
					<li class="dropdown"><a href="javascript:void(0)"> Buyers </a>
						<ul>
							<li><a href="javascript:void(0)"> Buy With Us </a>
							</li>
							<li><a href="javascript:void(0)"> Neighbourhood Guides  </a>
							</li>
							<li><a href="javascript:void(0)"> Search  </a>
							</li>
						</ul>
					</li>
					<li class="dropdown"><a href="javascript:void(0)"> Sellers </a>
						<ul>
							<li><a href="javascript:void(0)"> Concierge</a>
							</li>
							<li><a href="javascript:void(0)"> Marketing </a>
							</li>
							<li><a href="numbers"> Our Numbers </a>
							</li>
							<li><a href="javascript:void(0)"> Local Exposure </a>
							</li>
							<li><a href="javascript:void(0)"> Global Exposure </a>
							</li>
							<li><a href="javascript:void(0)"> An Online Experience </a>
							</li>
							<li><a href="javascript:void(0)"> Press </a>
							</li>
							<li><a href="javascript:void(0)"> Industry Recognition </a>
							</li>
						</ul>
					</li>
					<li><a href="javascript:void(0)">Our services </a>
					</li>
					<li class="dropdown"><a href="javascript:void(0)"> About Us </a>
						<ul>
							<li><a href="javascript:void(0)"> The HarisBenzz Group </a>
							</li>
							<li><a href="services"> Services </a>
							</li>
							<li><a href="javascript:void(0)"> Our Team </a>
							</li>
							<li><a href="javascript:void(0)"> Our Offices </a>
							</li>
							<li><a href="clients"> What Our Clients Are Saying </a>
							</li>
						</ul>
					</li>
					<li><a href="javascript:void(0)">Blog </a> 
					</li>
					<li><a href="javascript:void(0)">Contact Us </a> 
					</li>
				</ul>
			</div>
			<ul class="social-links">
				<li><a href="javascript:void(0)">Facebook</a>
				</li>
				<li><a href="javascript:void(0)">Linkedin</a>
				</li>
				<li><a href="javascript:void(0)">Twitter</a>
				</li>
				<li><a href="javascript:void(0)">Google +</a>
				</li>
				<li><a href="javascript:void(0)">Instagram</a>
				</li>
			</ul>
		</div>
	</section>