<html>
<head>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/main.css">
</head>
<body class="wrapper1" align="center">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
<div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
          <label>Consumer ID</label>
          <input type="text" name="id" class="form-control" value="<?php echo $username; ?>">
          <span class="help-block"><?php echo $username_err; ?></span>
      </div>
      <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Enter the billID to check deadline</label>
                <input type="text" name="bid" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>

      <div class="form-group">
      <input type="submit" class="btn btn-primary" value="Submit">
      </div>
      <a href="home1.php">Back</a>
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
$query1="select checkdaysLeft(:billid)";
$query = "SELECT * FROM bill where consumerID like :username";
if($stmt=$pdo->prepare($query))
{
  $stmt->bindParam(":username",$param_username,PDO::PARAM_STR);
  $param_username = trim($_POST["id"]);
}
if($stmt2=$pdo->prepare($query1))
{
  $stmt2->bindParam(":billid",$param_name,PDO::PARAM_INT);
  $param_name = trim($_POST["bid"]);
}

echo '<table border="1" cellspacing="2" cellpadding="2" class="table table-hover">
      <tr>
      <td> <font face="Arial">BilL No</font> </td>
          <td> <font face="Arial">Billed Units</font> </td>
          <td> <font face="Arial">Amount</font> </td>

      </tr>';

if ($stmt->execute()) {
    while ($row = $stmt->fetch()) {
      $field3name = $row["billID"];
        $field1name = $row["units"];
        $field2name = $row["amount"];

        echo '<tr>
                  <td>'.$field3name.'</td>
                  <td>'.$field1name.'</td>
                  <td>'.$field2name.'</td>

              </tr>';
    }

}
if($stmt2->execute())
{
  $value=$stmt2->fetch();
  echo '<p>Days left : <input type="text" class="form-control" value='.$value[0].'></input></p>';
}
?>
</body>
</html>
