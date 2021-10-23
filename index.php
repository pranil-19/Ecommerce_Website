<?php
	$page_title = "Online Shopping site in India: Shop Online for Clothes";
	include_once('includes/header_a.php');
?>

	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>
		<!-- The slideshow -->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="assets/my_img/carousel1st.jpg" alt="First slide">
				<div class="jumbotron">
					<div class="container">
						<div class="carousel-caption">
							<h1>Reviews</h1>
							<p>Hi, Welcome to Our Cloth Review Service!</p>
						</div>
					</div>
				</div>
			</div>
			<div class="item">
				<img src="assets/my_img/carousel2nd.jpg" alt="Second slide">
				<div class="jumbotron">
					<div class="container">
						<div class="carousel-caption">
							<h1>Rate Clothes</h1>
							<p>Create an account to review your favorite clothes</p>
							<p><a class="btn btn-lg btn-info" href="registration.php" role="button">Sign-Up</a></p>
						</div>
					</div>
				</div>
			</div>
			<div class="item">
				<img src="assets/my_img/carousel3rd.jpg" alt="Third slide">
				<div class="jumbotron">
					<div class="container">
						<div class="carousel-caption">
							<h1>Read Reviews</h1>
							<!-- <p>Browse all of our reviews and find out more about what others thought of your favorite clothes!</p> -->
							<p>!!Browse reviews and find out your interestings!!</p>
							<p><a class="btn btn-lg btn-info" href="reviews.php" role="button">View Reviews &raquo;</a></p>
						</div>
					</div>
				</div>
			</div>
			<!-- Left and right controls  -->
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="icon-prev" aria-hidden="true"></span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="icon-next" aria-hidden="true"></span>
			</a>
		</div>
	</div><!-- /.carousel -->



	<div class="container-fluid">
		<!-- Example row of columns -->
		<div class="row">
			<div class="col-md-4">
				<h2>CREATE ACCOUNT</h2>
				<p>Sign up for an account in order to add a review to your favorite cloth!</p>
				<p><a class="btn btn-primary" href="registration.php" role="button">SIGN-UP &raquo;</a></p>
			</div>
			<div class="col-md-4">
				<h2>LIST CLOTHES</h2>
				<p>Browse our extensive list of cloth along with their ratings, price, and even reviews!</p>
				<p><a class="btn btn-primary" href="clothes.php" role="button">LIST CLOTHES &raquo;</a></p>
			</div>
			<div class="col-md-4">
				<h2>LIST REVIEWS</h2>
				<p>Browse reviews and find out your interestings!</p>
				<p><a class="btn btn-primary" href="reviews.php" role="button">VIEW REVIEWS &raquo;</a></p>
			</div>
		</div>

	</div> <!-- /container -->


<?php
	include_once('includes/footer.php');