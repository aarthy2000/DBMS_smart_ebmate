/*
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

require_once('config.php');
$sql="select * from bill where consumerID like :username";
if($stmt = $pdo->prepare($sql))
{
$stmt->bindParam(":username",$param_username,PDO::PARAM_STR);
$param_username=$_POST["id"];
$stmt->execute();
}
*/
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>View bill</title>
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

<h2>Find my bill details </h2>
<p>Enter the registered consumerID</p>
<P><a href="search.php">find my consumerID</a></p>
<div class="form-group <?php echo (!empty($id_err)) ? 'has-error' : ''; ?>">
	<label>ConsumerID</label>
	<input type="text" name="id" class="form-control" value="<?php echo $id; ?>">
	<span class="help-block"><?php echo $id_err; ?></span>
	</div>
  <div class="form-group">
  <input type="submit" class="btn btn-primary" value="Submit">
</div>
</form>
<div class="wrapper1">


<table class="signup">
    <tr>
        <th>ConsumerID</th>
        <th>Units</th>
        <th>Billed Amount</th>
    </tr>
    <?php
      $sql="select * from bill where consumerID like :username";
      if($stmt = $pdo->prepare($sql))
      {
      $stmt->bindParam(":username",$param_username,PDO::PARAM_STR);
      $param_username=$_POST["id"];
      $stmt->execute();
      }
    ?>
    <?php while ($r = $stmt->fetch()) ?>
        <tr>
            <td><?php echo $r['consumerID'] ?></td>
            <td><?php echo $r['units'] ?>
            </td>
            <td><?php echo $r['amount'] ?>
            </td>
        </tr>
    <?php endwhile; ?>
</table>
</div>
</body>
</html>
