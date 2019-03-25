<html>
<head>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/main.css">
</head>
<body class="wrapper" align="center">
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
<div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
          <label>Consumer ID</label>
          <input type="text" name="id" class="form-control" value="<?php echo $username; ?>">
          <span class="help-block"><?php echo $username_err; ?></span>
      </div>
      <div class="form-group">
      <input type="submit" class="btn btn-primary" value="Submit">
      </div>
      <a href="home1.php" class="btn btn-danger">Back</a>
</form>
<?php


define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'ebms');
define('DB_PASSWORD', 'maha*98');
define('DB_NAME', 'ebms');
$pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
// Set the PDO error mode to exception
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo_enabled = 0;
$query1= "SELECT  I.name,ideal_wh,wattage,workingHours from ideal_appliances I inner join appliance A on A.name=I.name where consumerID like :username";
$query = "SELECT maximumAppliance(:username) as result";
if($stmt=$pdo->prepare($query1))
{
  $stmt->bindParam(":username",$param_username,PDO::PARAM_STR);
  $param_username = trim($_POST["id"]);
}
if($stmt2=$pdo->prepare($query))
{
  $stmt2->bindParam(":username",$param_username,PDO::PARAM_STR);
  $param_username = trim($_POST["id"]);
}


echo '<table border="1" cellspacing="2" cellpadding="2" class="table table-hover">
      <tr>
          <td> <font face="Arial">Name </font> </td>
          <td> <font face="Arial">Ideal WorkingHours </font> </td>
          <td> <font face="Arial"> Wattage</font> </td>
          <td> <font face="Arial">working Hours </font> </td>


      </tr>';

if ($stmt->execute()) {
    while ($row = $stmt->fetch()) {
        $field1name = $row["name"];
        $field2name = $row["ideal_wh"];
        $field3name = $row["wattage"];
        $field4name = $row["workingHours"];


        echo '<tr>
                  <td>'.$field1name.'</td>
                  <td>'.$field2name.'</td>
                  <td>'.$field3name.'</td>
                  <td>'.$field4name.'</td>


              </tr>';
    }
if($stmt2->execute())
{
$value=$stmt2->fetch();
echo '<p>You can save <input type="text" class="form-control" value='.$value[0].'></input></p>';
}
}
?>
</body>
</html>
