<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Appliances entry</title>
    <link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/main.css">
    <style type="text/css">
#img{
float:center;
}


  body{ font: 14px sans-serif; }
.wrapper{
text-align:center;
}
        .h1{  text-align:center; }
    </style>
</head>
<body class="wrapper">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
<h3>Thank You for the details!!!!</h3>
<br>
Finalise and generate the billAmount. <br>

<img src="images/eb2.jpeg" id="img">
<br>
<input type="submit" class="btn btn-blue" value="Generate">
<a href="staff_index.html">Back</a>

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
$query='call CBillCheckerFinal()';
$query1='call checkData()';
if($stmt=$pdo->prepare($query))
{
    $stmt->execute();

}
unset($stmt);
if($stmt1=$pdo->prepare($query1))
{
    $stmt1->execute();

}
unset($stmt1);
?>


</body>
</html>
