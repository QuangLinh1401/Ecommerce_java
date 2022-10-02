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
	<!-- end search arewa -->

	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg-13">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Thank you for trusting us !</p>
						<h1>Order Success!</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->
	<!-- error section -->
	<div class="full-height-section error-section">
		<div class="full-height-tablecell">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 offset-lg-2 text-center">
						<div class="error-text">
							<i class="far fa-sad-cry"></i>
							<h1>Your order has been processed successfully !</h1>
							<p>Please check your email to track your order.</p>
							<a href="./index.php" class="boxed-btn">Back to Home</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end error section -->

	<!-- logo carousel -->
	<?php include "./Gen/logo.php"; ?>
	<!-- end logo carousel -->

	<!-- footer -->
	<?php include "./Gen/footer.php"; ?>
	<!-- end footer -->
	<?php include "./Gen/link_js.php"; ?>

</body>
</html>