<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);
$id=$id_err="";
$servername = "localhost";
$username = "ebms";
$password = "maha*98";
$dbname = "ebms";

try{
    // Set the PDO error mode to exception
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
try{
    $sql = "UPDATE ideal_appliances SET name=:name WHERE name=:id";
    if($stmt = $pdo->prepare($sql)){
        // Bind variables to the prepared statement as parameters
        $stmt->bindParam(":id", $param_id, PDO::PARAM_STR);
    // use exec() because no results are returned
    $param_id = trim($_POST["id"]);

        // Bind variables to the prepared statement as parameters
        $stmt->bindParam(":name", $param_name, PDO::PARAM_STR);
    // use exec() because no results are returned
    $param_name = trim($_POST["name"]);
  }
    $stmt->execute();
    //echo "Records were updated successfully.";
} catch(PDOException $e){
    die("ERROR: Could not  execute $sql. " . $e->getMessage());
}

// Close connection
unset($pdo);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Update ideal_appliances</title>
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

<h2>Update ideal_appliances</h2>

<div class="form-group <?php echo (!empty($id_err)) ? 'has-error' : ''; ?>">
	<label>New name</label>
	<input type="text" name="name" class="form-control" value="<?php echo $id; ?>">
	<span class="help-block"><?php echo $id_err; ?></span>
	</div>
  <div class="form-group <?php echo (!empty($id_err)) ? 'has-error' : ''; ?>">
  	<label>Old name</label>
  	<input type="text" name="id" class="form-control" value="<?php echo $id; ?>">
  	<span class="help-block"><?php echo $id_err; ?></span>
  	</div>
  <div class="form-group">
  <input type="submit" class="btn btn-primary" value="Submit">
</div>
</form>
</body>
</html>
