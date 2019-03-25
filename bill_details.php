<?php
// Include config file
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

require_once "config.php";

// Define variables and initialize with empty values
$id = $id_err = "";
$userphone_err = "";
//$empty_err="";
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST")
{

	// Prepare an insert statement
	$sql = "INSERT INTO bill (amount,billID,units,consumerID,staffID) VALUES (:amount,:bid,:unit,:cid,:id)";

	if($stmt = $pdo->prepare($sql))
	{

		// Bind variables to the prepared statement as parameters
		$stmt->bindParam(":id", $id, PDO::PARAM_INT);
		$stmt->bindParam(":bid", $param_bid, PDO::PARAM_INT);
		$stmt->bindParam(":unit", $param_unit, PDO::PARAM_INT);
		$stmt->bindParam(":cid", $param_cid, PDO::PARAM_STR);
		$stmt->bindParam(":amount",$param_amount,PDO::PARAM_INT);

		// Set parameters
		$param_id = trim($_POST["id"]);
		$param_cid = trim($_POST["cid1"]);
		$param_bid = trim($_POST["bid1"]);
		$param_unit=trim($_POST["unit1"]);
		$param_amount=trim($_POST["amount1"]);
		if($stmt->execute())
		{
			// Redirect to welcome1 page
			//header("location: welcome1.html");
		}
		else
		{
			echo "Something went wrong. Please try again later.";
		}
		unset($stmt);
	}
	//for the second range
	$sql = "INSERT INTO bill (amount,billID,units,consumerID,staffID) VALUES (:amount,:bid,:unit,:cid,:id)";

	if($stmt = $pdo->prepare($sql))
	{
		// Bind variables to the prepared statement as parameters

		// Bind variables to the prepared statement as parameters
		$stmt->bindParam(":id", $id, PDO::PARAM_INT);
		//$stmt->bindParam(":id", $param_id, PDO::PARAM_INT);
		$stmt->bindParam(":bid", $param_bid, PDO::PARAM_INT);
		$stmt->bindParam(":unit", $param_unit, PDO::PARAM_INT);
		$stmt->bindParam(":cid", $param_cid, PDO::PARAM_STR);
		$stmt->bindParam(":amount",$param_amount,PDO::PARAM_INT);

		// Set parameters
		$param_id = trim($_POST["id"]);
		$param_cid = trim($_POST["cid2"]);
		$param_bid = trim($_POST["bid2"]);
		$param_unit=trim($_POST["unit2"]);
			$param_amount=trim($_POST["amount2"]);
		if($stmt->execute())
		{
			// Redirect to welcome1 page
			//header("location: welcome1.html");
		}
		else
		{
			echo "Something went wrong. Please try again later.";
		}
		unset($stmt);
	}
/*	$sql = "INSERT INTO offices (locID,phone,location) VALUES (:id,:phone,:location)";

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

	$stmt->bindParam(":location", $param_location, PDO::PARAM_STR);
	if($stmt = $pdo->prepare($sql))
	{
		// Bind variables to the prepared statement as parameters
		$stmt->bindParam(":id", $param_id, PDO::PARAM_INT);
		//$stmt->bindParam(":pincode", $param_pincode, PDO::PARAM_INT);
		$stmt->bindParam(":phone", $param_phone, PDO::PARAM_INT);


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
		*/


	header("location: welcome1.html");
	// Close connection
	unset($pdo);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Billing Details</title>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/main.css">
<style type="text/css">
body{ font: 14px sans-serif; }
.wrapper{ width: 350px; padding: 20px; }
</style>
</head>
<body class="signup">
<div class="wrapper1">
<h2>Bill Details</h2>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
<p>Please fill the details</p>
<div class="form-group <?php echo (!empty($id_err)) ? 'has-error' : ''; ?>">
	<label>Staff ID</label>
	<input type="text" name="id" class="form-control" value="<?php echo $id; ?>">
	<span class="help-block"><?php echo $id_err; ?></span>
	</div>
<h3>Bill 1 details </h3>

	<div class="form-group <?php echo (!empty($id_err)) ? 'has-error' : ''; ?>">
	<label>Consumer ID</label>
	<input type="text" name="cid1" class="form-control" value="<?php echo $id; ?>">
		<span class="help-block"><?php echo $userphone_err; ?></span>
	</div>
<div class="form-group <?php echo (!empty($id_err)) ? 'has-error' : ''; ?>">
	<label>Bill ID</label>
	<input type="text" name="bid1" class="form-control" value="<?php echo $id; ?>">
	<span class="help-block"><?php echo $id_err; ?></span>
	</div>

	<div class="form-group <?php echo (!empty($id_err)) ? 'has-error' : ''; ?>">
		<label>Amount</label>
		<input type="text" name="amount1" class="form-control" value="<?php echo $id; ?>">
		<span class="help-block"><?php echo $id_err; ?></span>
		</div>

			<div class="form-group <?php echo (!empty($id_err)) ? 'has-error' : ''; ?>">
				<label>Units</label>
				<input type="text" name="unit1" class="form-control" value="<?php echo $id; ?>">
				<span class="help-block"><?php echo $id_err; ?></span>
				</div>

	<!--2-->
<h3>Bill 2 details </h3>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
	<div class="form-group <?php echo (!empty($id_err)) ? 'has-error' : ''; ?>">
	<label>Consumer ID</label>
	<input type="text" name="cid2" class="form-control" value="<?php echo $id; ?>">
		<span class="help-block"><?php echo $userphone_err; ?></span>
	</div>
<div class="form-group <?php echo (!empty($id_err)) ? 'has-error' : ''; ?>">
	<label>Bill ID</label>
	<input type="text" name="bid2" class="form-control" value="<?php echo $id; ?>">
	<span class="help-block"><?php echo $id_err; ?></span>
	</div>

	<div class="form-group <?php echo (!empty($id_err)) ? 'has-error' : ''; ?>">
		<label>Amount</label>
		<input type="text" name="amount2" class="form-control" value="<?php echo $id; ?>">
		<span class="help-block"><?php echo $id_err; ?></span>
		</div>

			<div class="form-group <?php echo (!empty($id_err)) ? 'has-error' : ''; ?>">
				<label>Units</label>
				<input type="text" name="unit2" class="form-control" value="<?php echo $id; ?>">
				<span class="help-block"><?php echo $id_err; ?></span>
				</div>

<div class="form-group">
<input type="submit" class="btn btn-primary" value="Submit">
<input type="reset" align="center" class="btn btn-danger" value="Reset">
</div>
</form>
</div>

</body>
</html>
