<!DOCTYPE HTMl>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ghar Sewa</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	
	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<!-- <div id="page">\ -->
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-xs-2">
							<div id="colorlib-logo"><a href="index.php"><img src="images/main_logo.png "/></a></div>
						</div>
						<div class="col-xs-10 text-right menu-1">
							<ul>
								<li><a href="index.php">Home</a></li>
								<li class="has-dropdown active">
									<a href="Services.php">Our Services</a>
									<ul class="dropdown">
										<li><a href="Services.php" style="color:white;">Plumber</a></li>
										<li><a href="Services.php">Beautician</a></li>
										<li><a href="Services.php">Electrician</a></li>
										<li><a href="Services.php">Baby Sitter</a></li>
									</ul>
								</li>
								<li><a href="blog.php">Blog</a></li>
				
								<li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>  Search by Location</a></li>
								<li><a href="login/index.php"><i class="fa fa-user-circle" aria-hidden="true"></i>   log in</a></li>

							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		

		<aside id="colorlib-hero">
				<div class="flexslider">
					<ul class="slides">
						<li style="background-image: url(images/house_hold.jpg);">
							<div class="overlay"></div>
							
						<li style="background-image: url(images/plumberi.jpg); width: 1920px;">
							<div class="overlay"></div>
							<div class="container-fluid">
								
					</ul>
				</div>
			</aside>
		
		

	  
		
		<div class="container">
				<div class="row">
		
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
						<h2><span>Plumber</span></h2>
						<!-- <p>Welcome the best in you. A makeover is the rebranding of a human being!</p> -->
					</div>
				</div>
				<aside>
					<div class="row">
						<div class="col-md-12 ftco-animate">
						<div class="carousel-team owl-carousel">
						<?php
						include "connect.php";
							$sql = "SELECT *FROM `adminclient` WHERE occupation = 'Plumber'";
							$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        ?>
        			<div class="product-entry">
										<a href="enquiryform.php?id=<?php echo $row['id']; ?>"><div class="product-img" style="background-image: url(<?php echo $row['imagepath']; ?>);">
											
										</div></a>
										<div class="desc">
											<h3><a href="enquiryform.php?id=<?php echo $row['id']; ?>"><?php echo $row['username']; ?></a></h3>

											
										</div>
									</div>
        <?php
    }
} else {
    echo "0 results";
}
						?>		
								
					</div>   	
				</aside>
			</div>
	
			

			<div class="container">
					<div class="row">
			
						<div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
							<br><br><br>
							<h2><span>Electrician</span></h2>
							<!-- <p>Welcome the best in you. A makeover is the rebranding of a human being!</p> -->
						</div>
						
					</div>
					<aside>
						<div class="row">
							<div class="col-md-12 ftco-animate">
							<div class="carousel-team owl-carousel">
									<?php
						include "connect.php";
							$sql = "SELECT *FROM `adminclient` WHERE occupation = 'Electrician'";
							$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        ?>
        			<div class="product-entry">
										<a href="enquiryform.php?id=<?php echo $row['id']; ?>"><div class="product-img" style="background-image: url(<?php echo $row['imagepath']; ?>);">
											
										</div></a>
										<div class="desc">
											<h3><a href="enquiryform.php?id=<?php echo $row['id']; ?>"><?php echo $row['username']; ?></a></h3>

											
										</div>
									</div>
        <?php
    }
} else {
    echo "0 results";
}
						?>	
									
									
									<!-- <div class="product-entry">
										<a href="enquiryform.php"><div class="product-img" style="background-image: url(images/electrician5.jpg);">
											
										</div></a>
										<div class="desc">
											<h3><a href="enquiryform.php">Electrician</a></h3>
											
										</div>
									</div> -->
						</div>   	
					</aside>
				</div>
	
				
				<div class="container">
						<div class="row">
				
							<div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
								<br><br><br>
								<h2><span>Beautician</span></h2>
								<!-- <p>Welcome the best in you. A makeover is the rebranding of a human being!</p> -->
							</div>
						</div>
						<aside>
							<div class="row">
								<div class="col-md-12 ftco-animate">
								<div class="carousel-team owl-carousel">
										<!-- <div class="col-md-3 text-center"> -->
										<div class="product-entry">
											<a href="enquiryform.php"><div class="product-img" style="background-image: url(images/beautician1.jpg);">
											
											</div></a>
											<div class="desc">
												<h3><a href="enquiryform.php">ABC Beauty parlour</a></h3>
												<!-- <p class="price"><span>$300.00</span></p> -->
											</div>
										</div>
										<!-- </div> -->
										<!-- <div class="col-md-3 text-center"> -->
										<div class="product-entry">
											<div class="product-img" style="background-image: url(images/beautician2.jpg);">
												
											</div>
											<div class="desc">
												<h3><a href="enquiryform.php">Rama Beauty parlour</a></h3>
												<!-- <p class="price"><span>$300.00</span></p> -->
											</div>
										</div>
										<!-- </div> -->
										<!-- <div class="col-md-3 text-center"> -->
										<div class="product-entry">
											<div class="product-img" style="background-image: url(images/beautician3.jpg);">
												
											</div>
											<div class="desc">
												<h3><a href="enquiryform.php">Divan BEauty and Uisex</a></h3>
												<!-- <p class="price"><span>$300.00</span></p> -->
											</div>
										</div>
										<!-- </div> -->
										<!-- <div class="col-md-3 text-center"> -->
										<div class="product-entry">
											<div class="product-img" style="background-image: url(images/beautician4.jpg);">
												
											</div>
											<div class="desc">
												<h3><a href="enquiryform.php">Beautician</a></h3>
												<!-- <p class="price"><span>$300.00</span></p> -->
											</div>
										</div>
										<!-- </div> -->
				
										<!-- <div class="col-md-3 text-center"> -->
										<div class="product-entry">
											<div class="product-img" style="background-image: url(images/beautician5.jpg);">
												
											</div>
											<div class="desc">
												<h3><a href="enquiryform.php">Shalam Beauty Care center</a></h3>
												<!-- <p class="price"><span>$300.00</span></p> -->
											</div>
										</div>
							</div>   	<!-- </div> -->
						</aside>
					</div>
	
					
					<div class="container">
							<div class="row">
					
								<div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
										<br><br><br>
									<h2><span>Baby Sitter</span></h2>
									<!-- <p>Welcome the best in you. A makeover is the rebranding of a human being!</p> -->
								</div>
							</div>
							<aside>
								<div class="row">
									<div class="col-md-12 ftco-animate">
									<div class="carousel-team owl-carousel">
											<!-- <div class="col-md-3 text-center"> -->
											<div class="product-entry">
												<div class="product-img" style="background-image: url(images/baby1.jpg);">
												
												</div>
												<div class="desc">
													<h3><a href="enquiryform.php">Baby Sitter</a></h3>
													<!-- <p class="price"><span>$300.00</span></p> -->
												</div>
											</div>
											<!-- </div> -->
											<!-- <div class="col-md-3 text-center"> -->
											<div class="product-entry">
												<div class="product-img" style="background-image: url(images/baby2.png);">
													
												</div>
												<div class="desc">
													<h3><a href="enquiryform.php">Baby Sitter</a></h3>
													<!-- <p class="price"><span>$300.00</span></p> -->
												</div>
											</div>
											<!-- </div> -->
											<!-- <div class="col-md-3 text-center"> -->
											<div class="product-entry">
												<div class="product-img" style="background-image: url(images/baby3.jpg);">
													
												</div>
												<div class="desc">
													<h3><a href="enquiryform.php">Baby Sitter</a></h3>
													<!-- <p class="price"><span>$300.00</span></p> -->
												</div>
											</div>
											<!-- </div> -->
											<!-- <div class="col-md-3 text-center"> -->
											<div class="product-entry">
												<div class="product-img" style="background-image: url(images/baby4.jpg);">
													
												</div>
												<div class="desc">
													<h3><a href="enquiryform.php">Baby Sitter</a></h3>
													<!-- <p class="price"><span>$300.00</span></p> -->
												</div>
											</div>
											<!-- </div> -->
					
											<!-- <div class="col-md-3 text-center"> -->
											<div class="product-entry">
												<div class="product-img" style="background-image: url(images/baby5.jpg);">
													
												</div>
												<div class="desc">
													<h3><a href="enquiryform.php">Baby Sitter</a></h3>
													<!-- <p class="price"><span>$300.00</span></p> -->
												</div>
											</div>
								</div>   	<!-- </div> -->
							</aside>
						</div>
					<br/>
					<br/>
					

				<div id="footer">
				<!-- <footer id="colorlib-footer" role="contentinfo" -->>
					<div class="container">
						<div class="row row-pb-md">
							<div class="col-md-3 colorlib-widget" style="width: 50%">
								<h4 style="color: white; font-weight: 900;">About "Ghar Sewa"</h4>
								<p style="color: white; font-weight: 300;">Full implementation of the latest innovation!
									"Ghar Sewa" has
									now made ease to contact the specialised work person according to the requirement.
								</p>
								<p>
									<ul class="colorlib-social-icons">
										<li><a href="#"><i class="icon-twitter"></i></a></li>
										<li><a href="#"><i class="icon-facebook"></i></a></li>
										<li><a href="#"><i class="icon-linkedin"></i></a></li>
										<li><a href="#"><i class="icon-dribbble"></i></a></li>
									</ul>
								</p>
							</div>
							<div class="col-md-2 colorlib-widget" style="width: 25%">
								<h4 style="color: white; font-weight: 900">Our Clients</h4>
								<p>
									<ul class="colorlib-footer-links">
										<li    style="color: white;"><a href="#" style="color: white; font-weight: 300;">Glow Beauty Parlour</a>
										</li>
										<li     style="color: white;"><a href="#" style="color: white; font-weight: 300;;">Electricity Source
												Private
												Limited</a></li>
										<li    style="color: white;"><a href="#" style="color: white; font-weight: 300;">Furniture Design
												Store</a></li>
										<li    style="color: white;"><a href="#" style="color: white; font-weight: 300;">Repairement and Exchange
												Junction</a></li>
									</ul>
								</p>
							</div>


							
							<div class="col-md-3" style="text-align-last: right ">
							<h4 style="color: white; font-weight: 900 ; padding-right: 30%;">Contact Information</h4>
							<!-- <h4 style="color: white; font-weight: 900 ; ">Contact Information</h4> -->
								<ul class="colorlib-footer-links" style="text-align-last: left; padding-left:55px">
									<li style="color: white; font-weight: 300; color: white;">Kamalpokhari, Kathmandu<br> 100 m from City Centre
									</li>
									<li style="color: white; font-weight: 300;"><a href="mailto:info@findme.com"
											style="color: white;">info@findme.com</a></li>
									<li style=" color: white; font-weight: 300;"><a href="#" style="color: white;">findme.com</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="copy">
						<div class="row">
							<div class="col-md-12 text-center">
								<p>

									<span class="block" style="color: white; font-weight: 300;">
										<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
										Copyright &copy;
										<script>document.write(new Date().getFullYear());</script> All rights reserved
										|Ghar Sewa</span>
								</p>
							</div>
						</div>
					</div>
				</footer>
			


	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</php>

