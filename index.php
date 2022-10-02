<!DOCTYPE html>
<html lang="en">
<head>
	<?php include "./Gen/link_css.php"; ?>
</head>
<body>
	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->
	
	<!-- header -->
	<?php include "./Gen/menu.php"; ?>
	<!-- end header -->
	
	<!-- search area -->
	<div class="search-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="close-btn"><i class="fas fa-window-close"></i></span>
					<div class="search-bar">
						<div class="search-bar-tablecell">
							<h3>Search For:</h3>
							<input type="text" placeholder="Keywords">
							<button type="submit">Search <i class="fas fa-search"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end search area -->

	<!-- home page slider -->
	<div class="homepage-slider">
		<!-- single home slider -->
		<div class="single-homepage-slider homepage-bg-1">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg-7 offset-lg-1 offset-xl-0">
						<div class="hero-text">
							<div class="hero-text-tablecell">
								<p class="subtitle">Fresh & Great</p>
								<h1>Delicious Everyday</h1>
								<div class="hero-btns">
									<a href="./shop.php" class="boxed-btn">Product Collection</a>
									<a href="./contact.php" class="bordered-btn">Contact Us</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- single home slider -->
		<div class="single-homepage-slider homepage-bg-2">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 offset-lg-1 text-center">
						<div class="hero-text">
							<div class="hero-text-tablecell">
								<p class="subtitle">Fresh Everyday</p>
								<h1>Food Is Always Fresh And Delicious</h1>
								<div class="hero-btns">
									<a href="./shop.php" class="boxed-btn">Visit Shop</a>
									<a href="./contact.php" class="bordered-btn">Contact Us</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- single home slider -->
		<div class="single-homepage-slider homepage-bg-3">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 offset-lg-1 text-right">
						<div class="hero-text">
							<div class="hero-text-tablecell">
								<p class="subtitle">Mega Sale Going On!</p>
								<h1>Get Octorber Discount</h1>
								<div class="hero-btns">
									<a href="./shop.php" class="boxed-btn">Visit Shop</a>
									<a href="./contact.php" class="bordered-btn">Contact Us</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end home page slider -->

	<!-- features list section -->
	<div class="list-section pt-80 pb-80">
		<div class="container">

			<div class="row">
				<div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-shipping-fast"></i>
						</div>
						<div class="content">
							<h3>Free Shipping</h3>
							<p>When order over $75</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-phone-volume"></i>
						</div>
						<div class="content">
							<h3>24/7 Support</h3>
							<p>Get support all day</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="list-box d-flex justify-content-start align-items-center">
						<div class="list-icon">
							<i class="fas fa-sync"></i>
						</div>
						<div class="content">
							<h3>Refund</h3>
							<p>Get refund within 3 days!</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="list-box d-flex justify-content-start align-items-center">
						<div class="list-icon">
							<i class="fa fa-heart"></i>
						</div>
						<div class="content">
							<h3>Interested</h3>
							<p>We're always beside you</p>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- end features list section -->

	<!-- product section -->
	<div class="product-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3><span class="orange-text">Our</span> Products</h3>
						<p>Thank you for visiting us restaurant. We're glad that you found what you were looking for. 
							It is our goal that you are always happy with what you bought from us. We look forward to seeing you again. Have a great day.</p>
					</div>
				</div>
			</div>
			<?php include "./Gen/product.php"; ?>
		</div>
	</div>
	<!-- end product section -->

	<!-- cart banner section -->
	<section class="cart-banner pt-100 pb-100">
    	<div class="container">
        	<div class="row clearfix">
            	<!--Image Column-->
            	<div class="image-column col-lg-6">
                	<div class="image">
                    	<div class="price-box">
                        	<div class="inner-price">
                                <span class="price">
                                    <strong>30%</strong> <br> off per kg
                                </span>
                            </div>
                        </div>
                    	<img src="assets/img/a.png" alt="">
                    </div>
                </div>
                <!--Content Column-->
                <div class="content-column col-lg-6">
					<h3><span class="orange-text">Deal</span> of the month</h3>
                    <h4>Hikan Strwaberry</h4>
                    <div class="text">Anyone less important to deny us, usually the smallest, 
						run away from anything like that! Blessed are those who cause the least trouble. 
						Where do they blame joy when they see all these inborn errors</div>
                    <!--Countdown Timer-->
                    <div class="time-counter">
						<div class="time-countdown clearfix" data-countdown="2022/10/01">
							<div class="counter-column">
								<div class="inner">
									<span class="count">00</span>Days</div>
							</div> 
							<div class="counter-column">
								<div class="inner">
									<span class="count">00</span>Hours
								</div>
							</div>  
							<div class="counter-column">
								<div class="inner"><span class="count">59</span>Mins</div>
							</div>  
							<div class="counter-column"><div class="inner"><span class="count">59</span>Secs</div>
							</div>
						</div>
					</div>
                	<a href="cart.html" class="cart-btn mt-3"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end cart banner section -->

	<!-- testimonail-section -->
	<div class="testimonail-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1 text-center">
					<div class="testimonial-sliders">
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="assets/img/avaters/linh.png" alt="">
							</div>
							<div class="client-meta">
								<h3>Quang Linh<span>Full-stack</span></h3>
								<p class="testimonial-body">
									"It's easy to find BonBon Restaurant due to its convenient location. If you look through the guests' reviews, staff members are energetic at this place. Fine service is something guests like here."
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="assets/img/avaters/phuong.png" alt="">
							</div>
							<div class="client-meta">
								<h3>Bich Phuong<span>Font-end</span></h3>
								<p class="testimonial-body">
									"You may be surprised by low prices at this spot. As most reviewers remark, the atmosphere is comfortable. The average rating of this restaurant on Google is 4.5."
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="assets/img/avaters/tho.png" alt="">
							</div>
							<div class="client-meta">
								<h3>Truong Tho<span>Back-end</span></h3>
								<p class="testimonial-body">
									"Unlike several other Sherlock themed attractions, BonBon's restaurant has retained its original charm and has the same feel as seen on screen. The owners have not made any additions to make the place feel touristy."
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end testimonail-section -->
	
	<!-- advertisement section -->
	<div class="abt-section mb-150">
		<div class="container-x">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<div class="abt-bg">
						<a href="https://www.youtube.com/watch?v=GlrxcuEDyF8" class="video-play-btn popup-youtube"><i class="fas fa-play"></i></a>
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="abt-text">
						<p class="top-sub">Since Year 2001</p>
						<h2>We are <span class="orange-text">BonBon</span></h2>
						<p>The Café features special items on its menu. When the show started to gain popularity, the “Great Detective” wrap was introduced. It combined the sharp taste of cheddar with chili sauce, hinting at Linh's personality. As the show became more famous, BonBon's created a fan competition for creating a sandwich in honor of Quang Linh.</p>
						<p>The winning recipe features roasted vegetables, brie cheese and sour cream, suggesting Linh’s generally warm and supportive personality, but with a hint of adventure.</p>
						<a href="./about.php" class="boxed-btn mt-4">Know more</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end advertisement section -->
	
	<!-- shop banner -->
	<section class="shop-banner">
    	<div class="container">
        	<h3>October sale is on! <br> with big <span class="orange-text">Discount...</span></h3>
            <div class="sale-percent"><span>Sale! <br> Upto</span>50% <span>off</span></div>
            <a href="./shop.php" class="cart-btn btn-lg">Shop Now</a>
        </div>
    </section>
	<!-- end shop banner -->

	<!-- latest news -->
	<div class="latest-news pt-150 pb-150">
		<div class="container">

			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3><span class="orange-text">Our</span> News</h3>
						<p>Reviewing a great experience is a way to show how much you appreciate the restaurant and the restaurant that serves you. When they receive your positive review, they will feel more motivated to uphold their excellent service standards.</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<a href="./single-news.php"><div class="latest-news-bg news-bg-1"></div></a>
						<div class="news-text-box">
							<h3><a href="./single-news.php">Visiting BonBon restaurant. Are there any amenities ?</a></h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Admin</span>
								<span class="date"><i class="fas fa-calendar"></i> 5 September, 2022</span>
							</p>
							<p class="excerpt">BonBon's location must be said to be extremely expensive. Located in a busy roundabout area. 
								This location is not only suitable for customers to eat at the restaurant.</p>
							<a href="./single-news.php" class="read-more-btn">Read more <i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<a href="./single-news.php"><div class="latest-news-bg news-bg-2"></div></a>
						<div class="news-text-box">
							<h3><a href="./single-news.php">Review of BonBon restaurant products.</a></h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Admin</span>
								<span class="date"><i class="fas fa-calendar"></i> 12 September, 2022</span>
							</p>
							<p class="excerpt">Once you leave the restaurant, you can't go back in. 
								Because the staff wants to make sure other customers in line get their orders in time. 
								We forgot to spread 3 straws so we had to ask the staff to come pick it up for us.</p>
							<a href="./single-news.php" class="read-more-btn">Read more <i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
					<div class="single-latest-news">
						<a href="./single-news.php"><div class="latest-news-bg news-bg-3"></div></a>
						<div class="news-text-box">
							<h3><a href="./single-news.php">Challenge to eat all dishes at BonBon restaurant.</a></h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Admin</span>
								<span class="date"><i class="fas fa-calendar"></i> 25 September, 2022</span>
							</p>
							<p class="excerpt">BonBon's ketchup is nothing to complain about. 
								But the staff must have been in a hurry, so they only gave ketchup, not chili sauce. About space: Spacious and airy. About Wi-Fi: strong signal.</p>
							<a href="./single-news.php" class="read-more-btn">Read more <i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 text-center">
					<a href="news.html" class="boxed-btn">More News</a>
				</div>
			</div>
		</div>
	</div>
	<!-- end latest news -->

	<!-- logo carousel -->
	<?php include "./Gen/logo.php"; ?>
	<!-- end logo carousel -->

	<!-- footer -->
	<?php include "./Gen/footer.php"; ?>
	<!-- end footer -->
	<?php include "./Gen/link_js.php"; ?>
</body>
</html>