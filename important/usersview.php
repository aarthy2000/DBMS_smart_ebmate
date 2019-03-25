<?php
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

require_once('config.php');
$sql="select * from users";
$stmt = $pdo->prepare($sql);
if($stmt->execute())
{
while($row = $stmt->fetch()) {
    echo "<br>";
    echo $row['username'];
  echo " - ";
    echo $row['name'];
}
}
?>
