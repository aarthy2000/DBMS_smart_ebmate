<?php
// Include config file

require_once "config.php";

// Define variables and initialize with empty values
$id = "";
$username_err = "";
//$empty_err="";
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST")
{

	// Validate username
	if(empty(trim($_POST["id1"])))
	{
		$username_err = "Atleast one Field must be filled";
		echo $username_err;
	}
	//if id was not empty
	/*else
	{
		// Prepare a select statement
		/*$sql = "SELECT username FROM users WHERE username = :id";
		//prepare sql stmt
		if($stmt = $pdo->prepare($sql))
		{
		// Bind variables to the prepared statement as parameters
		$stmt->bindParam(":id", $param_id, PDO::PARAM_INT);

		// Set parameters
		$param_id = trim($_POST["id"]);
		//echo $param_id;

		// Attempt to execute the prepared statement
		if($stmt->execute())
		{
		if($stmt->rowpincode() == 0)
		{
		$username_err = "This consumer ID is not registered. Please register";
		}
		else
		{
		$id = trim($_POST["id"]);
		}
		}
		else
		{
		echo "Oops! Something went wrong. Please try again later.";
		}
		}

		// Close statement
		unset($stmt);
		}

		 */




	// Check input errors before inserting in database
	//if(empty($id_err)){

	// Prepare an insert statement
	$sql = "INSERT INTO staff  (staffID,name,location,pincode) VALUES (:id,:name,:location,:pincode)";

	if($stmt = $pdo->prepare($sql))
	{
		// Bind variables to the prepared statement as parameters
		$stmt->bindParam(":id", $param_id, PDO::PARAM_INT);
		$stmt->bindParam(":pincode", $param_pincode, PDO::PARAM_INT);
		$stmt->bindParam(":name", $param_name, PDO::PARAM_STR);
		$stmt->bindParam(":location", $param_location, PDO::PARAM_STR);


		// Set parameters
		$param_id = trim($_POST["id1"]);
		$param_name = trim($_POST["name1"]);
		$param_location = trim($_POST["location1"]);
		$param_pincode=trim($_POST["pincode1"]);
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
	$sql = "INSERT INTO staff  (staffID,name,location,pincode) VALUES (:id,:name,:location,:pincode)";

	if($stmt = $pdo->prepare($sql))
	{
		// Bind variables to the prepared statement as parameters
		$stmt->bindParam(":id", $param_id, PDO::PARAM_INT);
		$stmt->bindParam(":pincode", $param_pincode, PDO::PARAM_INT);
		$stmt->bindParam(":name", $param_name, PDO::PARAM_STR);
		$stmt->bindParam(":location", $param_location, PDO::PARAM_STR);


		// Set parameters
		$param_id = trim($_POST["id2"]);
		$param_name = trim($_POST["name2"]);
		$param_location = trim($_POST["location2"]);
		$param_pincode=trim($_POST["pincode2"]);

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
	$sql = "INSERT INTO staff (staffID,name,location,pincode) VALUES (:id,:name,:location,:pincode)";

	if($stmt = $pdo->prepare($sql))
	{
		// Bind variables to the prepared statement as parameters
		$stmt->bindParam(":id", $param_id, PDO::PARAM_INT);
		$stmt->bindParam(":pincode", $param_pincode, PDO::PARAM_INT);
		$stmt->bindParam(":name", $param_name, PDO::PARAM_STR);
		$stmt->bindParam(":location", $param_location, PDO::PARAM_STR);


		// Set parameters
		$param_id = trim($_POST["id3"]);
		$param_name = trim($_POST["name3"]);
		$param_location = trim($_POST["location3"]);
		$param_pincode=trim($_POST["pincode3"]);
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
	$sql = "INSERT INTO staff (staffID,name,location,pincode) VALUES (:id,:name,:location,:pincode)";

	if($stmt = $pdo->prepare($sql))
	{
		// Bind variables to the prepared statement as parameters
		$stmt->bindParam(":id", $param_id, PDO::PARAM_INT);
		$stmt->bindParam(":pincode", $param_pincode, PDO::PARAM_INT);
		$stmt->bindParam(":name", $param_name, PDO::PARAM_STR);
		$stmt->bindParam(":location", $param_location, PDO::PARAM_STR);


		// Set parameters
		$param_id = trim($_POST["id4"]);
		$param_name = trim($_POST["name4"]);
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
		unset($stmt);
	}
	//header("location: welcome1.html");
	// Close connection
	unset($pdo);

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Staff Details</title>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/main.css">
<style type="text/css">
body{ font: 14px sans-serif; }
.wrapper{ width: 350px; padding: 20px; }
</style>
</head>
<body class="signup">
<div class="wrapper1">
<h2>Staff Details</h2>
<p>Please fill the details</p>
<h3>staff 1 details </h3>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
	<div class="form-group <?php echo (!empty($id_err)) ? 'has-error' : ''; ?>">
	<label>Staff ID</label>
	<input type="text" name="id1" class="form-control" value="<?php echo $id; ?>">
		<span class="help-block"><?php echo $username_err; ?></span>
	</div>
<div class="form-group <?php echo (!empty($id_err)) ? 'has-error' : ''; ?>">
	<label>Name</label>
	<input type="text" name="name1" class="form-control" value="<?php echo $id; ?>">
	<span class="help-block"><?php echo $id_err; ?></span>
	</div>
<div class="form-group <?php echo (!empty($id_err)) ? 'has-error' : ''; ?>">
	<label>location</label>
	<input type="text" name="location1" class="form-control" value="<?php echo $id; ?>">
	<span class="help-block"><?php echo $id_err; ?></span>
	</div>
<div class="form-group <?php echo (!empty($id_err)) ? 'has-error' : ''; ?>">
<label>pincode</label>
<input type="text" name="pincode1" class="form-control" value="<?php echo $id; ?>">
<span class="help-block"><?php echo $id_err; ?></span>
</div>
<!--2-->
<h3>Staff 2 details</h3>
<div class="form-group <?php echo (!empty($id_err)) ? 'has-error' : ''; ?>">
<label>Staff ID</label>
<input type="text" name="id2" class="form-control" value="<?php echo $id; ?>">
<span class="help-block"><?php echo $username_err; ?></span>
</div>
<div class="form-group <?php echo (!empty($id_err)) ? 'has-error' : ''; ?>">
<label>name</label>
<input type="text" name="name2" class="form-control" value="<?php echo $id; ?>">
<span class="help-block"><?php echo $id_err; ?></span>
</div>
<div class="form-group <?php echo (!empty($id_err)) ? 'has-error' : ''; ?>">
<label>location</label>
<input type="text" name="location2" class="form-control" value="<?php echo $id; ?>">
<span class="help-block"><?php echo $id_err; ?></span>
</div>
<div class="form-group <?php echo (!empty($id_err)) ? 'has-error' : ''; ?>">
<label>pincode</label>
<input type="text" name="pincode2" class="form-control" value="<?php echo $id; ?>">
<span class="help-block"><?php echo $id_err; ?></span>
</div>
<!--3-->
<h3>Staff 3 details</h3>
<div class="form-group <?php echo (!empty($id_err)) ? 'has-error' : ''; ?>">
<label>Staff ID</label>
<input type="text" name="id3" class="form-control" value="<?php echo $id; ?>">
<span class="help-block"><?php echo $username_err; ?></span>
</div>
<div class="form-group <?php echo (!empty($id_err)) ? 'has-error' : ''; ?>">
<label>name</label>
<input type="text" name="name3" class="form-control" value="<?php echo $id; ?>">
<span class="help-block"><?php echo $id_err; ?></span>
</div>
<div class="form-group <?php echo (!empty($id_err)) ? 'has-error' : ''; ?>">
<label>location</label>
<input type="text" name="location3" class="form-control" value="<?php echo $id; ?>">
<span class="help-block"><?php echo $id_err; ?></span>
</div>
<div class="form-group <?php echo (!empty($id_err)) ? 'has-error' : ''; ?>">
<label>pincode</label>
<input type="text" name="pincode3" class="form-control" value="<?php echo $id; ?>">
<span class="help-block"><?php echo $id_err; ?></span>
</div>
<!--4-->
<h3>Staff 4 details</h3>
<div class="form-group <?php echo (!empty($id_err)) ? 'has-error' : ''; ?>">
<label>Staff ID</label>
<input type="text" name="id4" class="form-control" value="<?php echo $id; ?>">
<span class="help-block"><?php echo $username_err; ?></span>
</div>
<div class="form-group <?php echo (!empty($id_err)) ? 'has-error' : ''; ?>">
<label>name</label>
<input type="text" name="name4" class="form-control" value="<?php echo $id; ?>">
<span class="help-block"><?php echo $id_err; ?></span>
</div>
<div class="form-group <?php echo (!empty($id_err)) ? 'has-error' : ''; ?>" >
<label>location</label>
<input type="text" name="location4" class="form-control" value="<?php echo $id; ?>">
<span class="help-block"><?php echo $id_err; ?></span>
</div>
<div class="form-group <?php echo (!empty($id_err)) ? 'has-error' : ''; ?>">
<label>pincode</label>
<input type="text" name="pincode4" class="form-control" value="<?php echo $id; ?>">
<span class="help-block"><?php echo $id_err; ?></span>
</div>
<!--<div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
<label>name Type</label>
<select>
<option value="fan">Fan</option>
<option value="tubelight">Tubelight</option>
<option value="ac">AC</option>
<option value="washingmachine">Washing Machine</option>
<option value="tv">TV</option>
</select>
<span class="help-block"><?php echo $name_err; ?></span>
</div>-->



<div class="form-group">
<input type="submit" class="btn btn-primary" value="Submit">
<input type="reset" align="center" class="btn btn-danger" value="Reset">
</div>
</form>
</div>

</body>
</html>
