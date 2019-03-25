<!DOCTYPE html>
<html lang="en">
<head>
	<title>Smart EB mate</title>


      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body>


  <nav class="navbar navbar-expand-lg fixed-top ">
	  <a class="navbar-brand" href="#">Home</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse " id="navbarSupportedContent">
	    <ul class="navbar-nav mr-4">

	      <li class="nav-item">
	        <a class="nav-link" data-value="about" href="#about">About</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link " data-value="services" href="#">Services</a>
	      </li>

	      <li class="nav-item">
	        <a class="nav-link " href="welcome.php">
	        Logout</a>

	    </ul>

	  </div>
</nav>

<!-- header -->
<header class="header ">
  <div class="overlay"></div>
   <div class="container">
   	  <div class="description ">
  	<h1 class="about">
  		Smart Electricity Bill Mate


  	</h1>
  </div>
   </div>

</header>

<!-- about section -->
<div class="about" id="about">
	<div class="container">
	  <h1 class="text-center">About EB Mate</h1>
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-12">
				<img src="images/expense1.jpeg" class="img-fluid">
				
			</div>
			<div class="col-lg-8 col-md-8 col-sm-12 desc">


				<p>
				  Electricity bill contributes to a major part of the expenses of a household.<br>
					 The Electricity Bill Mate aims to cut down  the expenses of Electricity bill by suggesting possible ways to optimise the consumption of sources.
				</p>
			</div>
		</div>
	</div>
</div>




<a href="paidbill.php" class="btn btn-warning" align="center"><p> The days are counting..Check if you have paid the bills </p></a>
<div class="blog" id="services">
	<div class="container">
	<h1 class="text-center">Our Services</h1>
		<div class="row">
			<div class="col-md-4 col-lg-4 col-sm-12">
				<div class="card">
					<div class="card-img">
						<img src="images/bill.jpeg" class="img-fluid">
					</div>

					<div class="card-body">
					<h4 class="card-title">Calculate Bill</h4>
						<p class="card-text">

							Calculate the bill amount to be paid
						</p>
					</div>
					<div class="card-footer">
						<a href="print_check.php" class="card-link">Caculate</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-lg-4 col-sm-12">
				<div class="card">
					<div class="card-img">
						<img src="images/expense2.jpeg" class="img-fluid">
					</div>

					<div class="card-body">
					   <h4 class="card-title">Estimate cost reduction</h4>
						<p class="card-text">
							Estimate how much you would save if an efficient schedule is followed
						</p>
					</div>
					<div class="card-footer">
						<a href="estimate.php" class="card-link">Estimate</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-lg-4 col-sm-12">
				<div class="card">
					<div class="card-img">
						<img src="images/eb2.jpeg" class="img-fluid">
					</div>

					<div class="card-body">
					<h4 class="card-title">Enter appliance details</h4>
						<p class="card-text">

						Tell us in detail about your appliances so that we can get to know about your appliances better
						</p>
					</div>
					<div class="card-footer">
						<a href="appliance.php" class="card-link">Enter</a>
					</div>
				</div>
			</div>


		</div>
	</div> <!--end of container that is holding all these -->
</div><!--end og blog>


<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src='js/main.js'></script>

</body>
</html>
