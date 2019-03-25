<?php
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

require_once('config.php');
$sql="select * from bill";
$stmt = $pdo->prepare($sql);
if($stmt->execute())
{
while($row = $stmt->fetch()) {
    echo "<br>";
    echo $row['billID'];
  echo "  ";
    echo $row['amount'];
    echo "  ";
    echo $row['consumerID'];
}
}
?>
