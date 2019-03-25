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
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql to delete a record
    $sql = "DELETE FROM offices WHERE locID=:id";
    if($stmt = $pdo->prepare($sql)){
        // Bind variables to the prepared statement as parameters
        $stmt->bindParam(":id", $param_id, PDO::PARAM_STR);
    // use exec() because no results are returned
    $param_id = trim($_POST["id"]);
    $stmt->execute();
  //  echo "Record deleted successfully";
//header("location:welcome1.html");
    }
  }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$pdo = null;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Delete office details</title>
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

<h2>Delete offices</h2>
<p>Please fill the pincode/locID</p>
<div class="form-group <?php echo (!empty($id_err)) ? 'has-error' : ''; ?>">
	<label>Name</label>
	<input type="text" name="id" class="form-control" value="<?php echo $id; ?>">
	<span class="help-block"><?php echo $id_err; ?></span>
	</div>
  <div class="form-group">
  <input type="submit" class="btn btn-primary" value="Submit">
</div>
</form>
</body>
</html>
