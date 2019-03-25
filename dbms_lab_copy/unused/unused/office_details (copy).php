<?php
// Include config file

require_once "config.php";

// Define variables and initialize with empty values
$id = $id_err = "";
$userphone_err = "";
//$empty_err="";
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	// Validate userphone
	if(empty(trim($_POST["id1"])))
	{
		$userphone_err = "Atleast one Field must be filled";
		echo $userphone_err;
	}
		// Check input errors before inserting in database
	//if(empty($id_err)){

	// Prepare an insert statement
	$sql = "INSERT INTO offices (locID,phone,location) VALUES (:id,:phone,:location)";

	if($stmt = $pdo->prepare($sql))
	{
		// Bind variables to the prepared statement as parameters
		$stmt->bindParam(":id", $param_id, PDO::PARAM_INT);
		//$stmt->bindParam(":pincode", $param_pincode, PDO::PARAM_INT);
		$stmt->bindParam(":phone", $param_phone, PDO::PARAM_INT);
		$stmt->bindParam(":location", $param_location, PDO::PARAM_STR);


		// Set parameters
		$param_id = trim($_POST["id1"]);
		$param_phone = trim($_POST["phone1"]);
		$param_location = trim($_POST["location1"]);
		//$param_pincode=trim($_POST["pincode1"]);
		if($stmt->execute())
		{
			// Redirect to welcome1 page
			//header("location: welcome1.html");
		}
		else
		{
			echo "Something went wrong. Please try again later.";
		}
	}
	//for the second range
	$sql = "INSERT INTO offices (locID,phone,location) VALUES (:id,:phone,:location)";

	if($stmt = $pdo->prepare($sql))
	{
		// Bind variables to the prepared statement as parameters
		$stmt->bindParam(":id", $param_id, PDO::PARAM_INT);
	//	$stmt->bindParam(":pincode", $param_pincode, PDO::PARAM_INT);
		$stmt->bindParam(":phone", $param_phone, PDO::PARAM_INT);
		$stmt->bindParam(":location", $param_location, PDO::PARAM_STR);


		// Set parameters
		$param_id = trim($_POST["id2"]);
		$param_phone = trim($_POST["phone2"]);
		$param_location = trim($_POST["location2"]);
		//$param_pincode=trim($_POST["pincode2"]);

		// Attempt to execute the prepared statement
		if($stmt->execute())
		{
			// Redirect to welcome1 page
			//header("location: welcome1.html");
		}
		else
		{
			echo "Something went wrong. Please try again later.";
		}
	}
	$sql = "INSERT INTO offices (locID,phone,location) VALUES (:id,:phone,:location)";

	if($stmt = $pdo->prepare($sql))
	{
		// Bind variables to the prepared statement as parameters
		$stmt->bindParam(":id", $param_id, PDO::PARAM_INT);
		//$stmt->bindParam(":pincode", $param_pincode, PDO::PARAM_INT);
		$stmt->bindParam(":phone", $param_phone, PDO::PARAM_INT);
		$stmt->bindParam(":location", $param_location, PDO::PARAM_STR);


		// Set parameters
		$param_id = trim($_POST["id3"]);
		$param_phone = trim($_POST["phone3"]);
		$param_location = trim($_POST["location3"]);
		//$param_pincode=trim($_POST["pincode3"]);
		if($stmt->execute())
		{
			// Redirect to welcome1 page
			//header("location: welcome1.html");
		}
		else
		{
			echo "Something went wrong. Please try again later.";
		}
	}
	//$sql = "INSERT INTO offices (locID,phone,location) VALUES (:id,:phone,:location)";
/*
	if($stmt = $pdo->prepare($sql))
	{
		// Bind variables to the prepared statement as parameters
		$stmt->bindParam(":id", $param_id, PDO::PARAM_INT);
		$stmt->bindParam(":pincode", $param_pincode, PDO::PARAM_INT);
		$stmt->bindParam(":phone", $param_phone, PDO::PARAM_STR);
		$stmt->bindParam(":location", $param_location, PDO::PARAM_STR);


		// Set parameters
		$param_id = trim($_POST["id4"]);
		$param_phone = trim($_POST["phone4"]);
		$param_location = trim($_POST["location4"]);
		$param_pincode=trim($_POST["pincode4"]);
		if($stmt->execute())
		{
			// Redirect to welcome1 page
			//header("location: welcome1.html");
		}
		else
		{
			echo "Something went wrong. Please try again later.";
		}

		// Close statement
		unset($stmt);*/
	}

	header("location: welcome1.html");
	// Close connection
	unset($pdo);


?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Office Details</title>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/main.css">
<style type="text/css">
body{ font: 14px sans-serif; }
.wrapper{ width: 350px; padding: 20px; }
</style>
</head>
<body class="signup">
<div class="wrapper1">
<h2>Office Details</h2>
<p>Please fill the details</p>
<h3>Office 1 details </h3>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
	<div class="form-group <?php echo (!empty($id_err)) ? 'has-error' : ''; ?>">
	<label>Pincode</label>
	<input type="text" phone="id1" class="form-control" value="<?php echo $id; ?>">
		<span class="help-block"><?php echo $userphone_err; ?></span>
	</div>
<div class="form-group <?php echo (!empty($id_err)) ? 'has-error' : ''; ?>">
	<label>Location</label>
	<input type="text" phone="location1" class="form-control" value="<?php echo $id; ?>">
	<span class="help-block"><?php echo $id_err; ?></span>
	</div>
<div class="form-group <?php echo (!empty($id_err)) ? 'has-error' : ''; ?>">
	<label>Phone Number</label>
	<input type="text" phone="phone1" class="form-control" value="<?php echo $id; ?>">
	<span class="help-block"><?php echo $id_err; ?></span>
	</div>
<!--2-->
<h3>Office 2 details</h3>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
	<div class="form-group <?php echo (!empty($id_err)) ? 'has-error' : ''; ?>">
	<label>Pincode</label>
	<input type="text" phone="id2" class="form-control" value="<?php echo $id; ?>">
		<span class="help-block"><?php echo $userphone_err; ?></span>
	</div>
<div class="form-group <?php echo (!empty($id_err)) ? 'has-error' : ''; ?>">
	<label>Location</label>
	<input type="text" phone="location2" class="form-control" value="<?php echo $id; ?>">
	<span class="help-block"><?php echo $id_err; ?></span>
	</div>
<div class="form-group <?php echo (!empty($id_err)) ? 'has-error' : ''; ?>">
	<label>Phone Number</label>
	<input type="text" phone="phone2" class="form-control" value="<?php echo $id; ?>">
	<span class="help-block"><?php echo $id_err; ?></span>
	</div>
<!--3-->
<h3>Office 3 details</h3>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
	<div class="form-group <?php echo (!empty($id_err)) ? 'has-error' : ''; ?>">
	<label>Pincode</label>
	<input type="text" phone="id3" class="form-control" value="<?php echo $id; ?>">
		<span class="help-block"><?php echo $userphone_err; ?></span>
	</div>
<div class="form-group <?php echo (!empty($id_err)) ? 'has-error' : ''; ?>">
	<label>Location</label>
	<input type="text" phone="location3" class="form-control" value="<?php echo $id; ?>">
	<span class="help-block"><?php echo $id_err; ?></span>
	</div>
<div class="form-group <?php echo (!empty($id_err)) ? 'has-error' : ''; ?>">
	<label>Phone Number</label>
	<input type="text" phone="phone3" class="form-control" value="<?php echo $id; ?>">
	<span class="help-block"><?php echo $id_err; ?></span>
	</div>
<!--<div class="form-group <?//php echo (!empty($phone_err)) ? 'has-error' : ''; ?>">
<label>phone Type</label>
<select>
<option value="fan">Fan</option>
<option value="tubelight">Tubelight</option>
<option value="ac">AC</option>
<option value="washingmachine">Washing Machine</option>
<option value="tv">TV</option>
</select>
<span class="help-block"><?//php echo $phone_err; ?></span>
</div>-->



<div class="form-group">
<input type="submit" class="btn btn-primary" value="Submit">
<input type="reset" align="center" class="btn btn-danger" value="Reset">
</div>
</form>
</div>

</body>
</html>
