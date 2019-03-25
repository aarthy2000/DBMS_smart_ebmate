<?php
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);
$id=$id_err="";
$servername = "localhost";
$username = "ebms";
$password = "maha*98";
$dbname = "ebms";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Calculate</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/main.css">
        <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
</style>
    </head>
    <body>
      <body class="signup">
      <div class="wrapper1">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

      <h2>ConsumerID </h2>
      <p>Enter the registered consumerID</p>
      <div class="form-group <?php echo (!empty($id_err)) ? 'has-error' : ''; ?>">
        <label>ConsumerID</label>

        <input type="text" name="id" class="form-control" value="<?php echo $id; ?>">
        <span class="help-block"><?php echo $id_err; ?></span>
        </div>
        <P> <a hreaf="search.php">Find my consumerID </a></p>
        <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Submit">
      </div>
      </form>
        <?php
        require_once 'config.php';
        try {
            $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // execute the stored procedure
            $result=$_POST["id"];
            $sql = "CALL GetDetails(:result)"; //string
            if($stmt=$pdo->prepare($sql))
            {
            $stmt->bindParam(":result", $param_result, PDO::PARAM_STR);
            $param_result=$_POST["id"];

            $q = $pdo->query($stmt);
            //$q->setFetchMode(PDO::FETCH_ASSOC);
          }
        } catch (PDOException $e) {
            die("Error occurred:" . $e->getMessage());
        }
        ?>
        <table class="signup">
            <tr>
                <th>ConsumerID</th>
                <th>Units</th>
                <th>Billed Amount</th>
            </tr>
            <?php while ($r = $q->fetch()): ?>
                <tr>
                    <td><?php echo $r['consumerID'] ?></td>
                    <td><?php echo $r['units'] ?>
                    </td>
                    <td><?php echo $r['amount'] ?>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>
    </body>
</html>
