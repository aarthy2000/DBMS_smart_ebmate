<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'ebms');
define('DB_PASSWORD', 'maha*98');
define('DB_NAME', 'ebms');
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

$id="";
$pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo_enabled = 0;
$query="select email from users where username=:id";
if($stmt=$pdo->prepare($query))
{
  $stmt->bindParam(":id",$param_username,PDO::PARAM_STR);
  $param_username = trim($_POST["id"]);
}
if($stmt->execute())
{
  $row=$stmt->fetch();
  $res=$row[0];
}
$to_email = $res;
$subject = 'Testing PHP Mail';
$message = 'This mail is sent using the PHP mail function';
$headers = 'From: aarthymaha2000@gmail. com';
mail($to_email,$subject,$message,$headers);
?>
<!DOCTYPE HTML>
<html>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/main.css">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

ConsumerID
<input type="text" name="id"><br>
<br>
<input type="submit" class ="btn btn-blue" value="Send">
</form>
</html>
