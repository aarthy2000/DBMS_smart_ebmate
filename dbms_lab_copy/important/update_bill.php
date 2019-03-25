<?php
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);
$id=$id_err="";
$servername = "localhost";
$username = "ebms";
$password = "maha*98";
$dbname = "ebms";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE bill SET units=1000  WHERE billID=211";
    if($stmt=$conn->prepare($sql)){
    $stmt->bindParam(":id1", $param_name, PDO::PARAM_STR);
    $stmt->bindParam(":id", $param_username, PDO::PARAM_STR);
    // Prepare statement
    $param_username = trim($_POST["id"]);
    $param_name = trim($_POST["id1"]);
    if($stmt = $conn->prepare($sql))
    {
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
    // execute the query
    $stmt->execute();
}
    // echo a message to say the UPDATE succeeded
    echo $stmt->rowCount() . " records UPDATED successfully";
    }
  }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Update Bill</title>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/main.css">
<style type="text/css">
body{ font: 14px sans-serif; }
.wrapper{ width: 350px; padding: 20px; }
</style>
</head>
<body class="signup">
<div class="wrapper1">
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

<h2>Update bill</h2>
<p></p>
<div class="form-group <?php echo (!empty($id_err)) ? 'has-error' : ''; ?>">
	<label>Bill ID</label>
	<input type="text" name="id" class="form-control" value="<?php echo $id; ?>">
	<span class="help-block"><?php echo $id_err; ?></span>
	</div>

<div class="form-group <?php echo (!empty($id_err)) ? 'has-error' : ''; ?>">
	<label>units</label>
	<input type="text" name="id1" class="form-control" value="<?php echo $id; ?>">
	<span class="help-block"><?php echo $id_err; ?></span>
	</div>
  <div class="form-group">
  <input type="submit" class="btn btn-primary" value="Submit">
</div>
</form>
</body>
</html>
