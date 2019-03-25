<?php
// Include config file

require_once "config.php";

// Define variables and initialize with empty values
$id = $val1 = $val2 = $val3= "";
$username_err = "";
//$empty_err="";
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST")
{

	// Validate username
	if(empty(trim($_POST["id"])))
	{
		$username_err = "Please enter a consumer ID";
		echo $username_err;
	}
	//if id was not empty
	else
	{
		// Prepare a select statement
		$sql = "SELECT username FROM users WHERE username = :id";
		//prepare sql stmt
		if($stmt = $pdo->prepare($sql))
		{
			// Bind variables to the prepared statement as parameters
			$stmt->bindParam(":id", $param_id, PDO::PARAM_STR);

			// Set parameters
			$param_id = trim($_POST["id"]);
			//echo $param_id;

			// Attempt to execute the prepared statement
			if($stmt->execute())
			{
				if($stmt->rowCount() == 0)
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






	// Check input errors before inserting in database
	//if(empty($id_err)){

	// Prepare an insert statement
	$sql = "INSERT INTO appliance  (consumerID,name,workingHours,count) VALUES (:id,:name,:hours,:count)";

	if($stmt = $pdo->prepare($sql))
	{
		// Bind variables to the prepared statement as parameters
		$stmt->bindParam(":id", $param_id, PDO::PARAM_STR);
		$stmt->bindParam(":count", $param_count, PDO::PARAM_INT);
		$stmt->bindParam(":name", $param_name, PDO::PARAM_STR);
		$stmt->bindParam(":hours", $param_hours, PDO::PARAM_INT);


		// Set parameters
		$param_id = trim($_POST["id"]);
		$param_name = trim($_POST["name"]);
		$param_hours = trim($_POST["hours"]);
		$param_count=trim($_POST["count"]);
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
	/*for the second range
	$sql = "INSERT INTO appliance  (consumerID,name,workingHours,count) VALUES (:id,:name,:hours,:count)";

	if($stmt = $pdo->prepare($sql))
	{
		// Bind variables to the prepared statement as parameters
		$stmt->bindParam(":id", $param_id, PDO::PARAM_STR);
		$stmt->bindParam(":count", $param_count, PDO::PARAM_INT);
		$stmt->bindParam(":name", $param_name, PDO::PARAM_STR);
		$stmt->bindParam(":hours", $param_hours, PDO::PARAM_INT);


		// Set parameters
		$param_id = trim($_POST["id"]);
		$param_name = trim($_POST["name2"]);
		$param_hours = trim($_POST["hours2"]);
		$param_count=trim($_POST["count2"]);

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
	}*/
	/*
	$sql = "INSERT INTO appliance  (consumerID,name,workingHours,count) VALUES (:id,:name,:hours,:count)";

	if($stmt = $pdo->prepare($sql))
	{
		// Bind variables to the prepared statement as parameters
		$stmt->bindParam(":id", $param_id, PDO::PARAM_STR);
		$stmt->bindParam(":count", $param_count, PDO::PARAM_INT);
		$stmt->bindParam(":name", $param_name, PDO::PARAM_STR);
		$stmt->bindParam(":hours", $param_hours, PDO::PARAM_INT);


		// Set parameters
		$param_id = trim($_POST["id"]);
		$param_name = trim($_POST["name3"]);
		$param_hours = trim($_POST["hours3"]);
		$param_count=trim($_POST["count3"]);
		if($stmt->execute())
		{
			// Redirect to welcome1 page
			//header("location: welcome1.html");
		}
		else
		{
			echo "Something went wrong. Please try again later.";
		}
	}*/
	/*
	$sql = "INSERT INTO appliance  (consumerID,name,workingHours,count) VALUES (:id,:name,:hours,:count)";

	if($stmt = $pdo->prepare($sql))
	{
		// Bind variables to the prepared statement as parameters
		$stmt->bindParam(":id", $param_id, PDO::PARAM_STR);
		$stmt->bindParam(":count", $param_count, PDO::PARAM_INT);
		$stmt->bindParam(":name", $param_name, PDO::PARAM_STR);
		$stmt->bindParam(":hours", $param_hours, PDO::PARAM_INT);


		// Set parameters
		$param_id = trim($_POST["id"]);
		$param_name = trim($_POST["name4"]);
		$param_hours = trim($_POST["hours4"]);
		$param_count=trim($_POST["count4"]);
		if($stmt->execute())
		{
			// Redirect to welcome1 page
			//header("location: welcome1.html");
		}
		else
		{
			echo "Something went wrong. Please try again later.";
		}
*/
		// Close statement
		unset($stmt);

	header("location: welcome1.html");
	// Close connection
	unset($pdo);

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Appliance entry</title>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/main.css">
<style type="text/css">
body{ font: 14px sans-serif; }
.wrapper{ width: 350px; padding: 20px; }
</style>
</head>
<body class="signup">
<div class="wrapper1">
<h2>Appliance</h2>
<p>Please fill this form</p>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
<div class="form-group <?php echo (!empty($id_err)) ? 'has-error' : ''; ?>">

<label>Consumer ID</label>
<input type="text" name="id" class="form-control" value="<?php echo $id; ?>">
<span class="help-block"><?php echo $username_err; ?></span>
</div>
<p> <a href="search.php">Find my consumerID </a></p>
<p> Appliance 1 </p>
<div class="form-group <?php echo (!empty($id_err)) ? 'has-error' : ''; ?>">
<label>Appliance</label>
<input type="text" name="name" class="form-control" value="<?php echo $id; ?>">
<span class="help-block"><?php echo $id_err; ?></span>
</div>
<div class="form-group <?php echo (!empty($id_err)) ? 'has-error' : ''; ?>">
<label>hours</label>
<input type="text" name="hours" class="form-control" value="<?php echo $id; ?>">
<span class="help-block"><?php echo $id_err; ?></span>
</div>
<div class="form-group <?php echo (!empty($id_err)) ? 'has-error' : ''; ?>">
<label>count</label>
<input type="text" name="count" class="form-control" value="<?php echo $id; ?>">
<span class="help-block"><?php echo $id_err; ?></span>
</div>



<div class="form-group">
<input type="submit" class="btn btn-primary" value="Submit">
<input type="reset" align="center" class="btn btn-danger" value="Reset">
</div>
<a href="home.html" class="btn btn-danger">Back</a>
</form>
</div>

</body>
</html>
