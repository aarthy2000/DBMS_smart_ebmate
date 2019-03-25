<html>
<head>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/main.css">
</head>
<body class="wrapper1" align="center">
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
<div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
          <label>Staff ID</label>
          <input type="text" name="id" class="form-control" value="<?php echo $username; ?>">
          <span class="help-block"><?php echo $username_err; ?></span>
      </div>
      <div class="form-group">
      <input type="submit" class="btn btn-primary" value="Submit">
      </div>
</form>
<?php
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'ebms');
define('DB_PASSWORD', 'maha*98');
define('DB_NAME', 'ebms');
$pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
// Set the PDO error mode to exception
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo_enabled = 0;
$query = "SELECT * FROM bill where staffID like :username";
if($stmt=$pdo->prepare($query))
{
  $stmt->bindParam(":username",$param_username,PDO::PARAM_STR);
  $param_username = trim($_POST["id"]);
}


echo '<table border="1" cellspacing="2" cellpadding="2" class="table table-hover">
      <tr>
          <td> <font face="Arial">Billed UNits</font> </td>
          <td> <font face="Arial">Amount</font> </td>

      </tr>';

if ($stmt->execute()) {
    while ($row = $stmt->fetch()) {
        $field1name = $row["units"];
        $field2name = $row["amount"];


        echo '<tr>
                  <td>'.$field1name.'</td>
                  <td>'.$field2name.'</td>

              </tr>';
    }

}
?>
</body>
</html>
