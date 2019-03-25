<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Office Details</title>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/main.css">
<style type="text/css">
body{ font: 14px sans-serif; }
.wrapper{ width: 350px; padding: 20px; }
</style>
</head>
<body class="signup">
<div class="wrapper1">
<h2>Office Details</h2>
<p>Please fill the details</p>
<div class="form-group <?php echo (!empty($id_err)) ? 'has-error' : ''; ?>">
	<label>Staff ID</label>
	<input type="text" name="sid" class="form-control" value="<?php echo $id; ?>">
	<span class="help-block"><?php echo $id_err; ?></span>
	</div>
<h3>Bill 1 details </h3>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
	<div class="form-group <?php echo (!empty($id_err)) ? 'has-error' : ''; ?>">
	<label>Consumer ID</label>
	<input type="text" name="cid1" class="form-control" value="<?php echo $id; ?>">
		<span class="help-block"><?php echo $userphone_err; ?></span>
	</div>
<div class="form-group <?php echo (!empty($id_err)) ? 'has-error' : ''; ?>">
	<label>Bill ID</label>
	<input type="text" name="bid1" class="form-control" value="<?php echo $id; ?>">
	<span class="help-block"><?php echo $id_err; ?></span>
	</div>

	<div class="form-group <?php echo (!empty($id_err)) ? 'has-error' : ''; ?>">
		<label>Amount</label>
		<input type="text" name="amount1" class="form-control" value="<?php echo $id; ?>">
		<span class="help-block"><?php echo $id_err; ?></span>
		</div>

			<div class="form-group <?php echo (!empty($id_err)) ? 'has-error' : ''; ?>">
				<label>Units</label>
				<input type="text" name="unit1" class="form-control" value="<?php echo $id; ?>">
				<span class="help-block"><?php echo $id_err; ?></span>
				</div>

	<!--2-->
<h3>Bill 2 details </h3>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
	<div class="form-group <?php echo (!empty($id_err)) ? 'has-error' : ''; ?>">
	<label>Consumer ID</label>
	<input type="text" name="cid2" class="form-control" value="<?php echo $id; ?>">
		<span class="help-block"><?php echo $userphone_err; ?></span>
	</div>
<div class="form-group <?php echo (!empty($id_err)) ? 'has-error' : ''; ?>">
	<label>Bill ID</label>
	<input type="text" name="bid2" class="form-control" value="<?php echo $id; ?>">
	<span class="help-block"><?php echo $id_err; ?></span>
	</div>

	<div class="form-group <?php echo (!empty($id_err)) ? 'has-error' : ''; ?>">
		<label>Amount</label>
		<input type="text" name="amount2" class="form-control" value="<?php echo $id; ?>">
		<span class="help-block"><?php echo $id_err; ?></span>
		</div>

			<div class="form-group <?php echo (!empty($id_err)) ? 'has-error' : ''; ?>">
				<label>Units</label>
				<input type="text" name="unit2" class="form-control" value="<?php echo $id; ?>">
				<span class="help-block"><?php echo $id_err; ?></span>
				</div>

<div class="form-group">
<input type="submit" class="btn btn-primary" value="Submit">
<input type="reset" align="center" class="btn btn-danger" value="Reset">
</div>
</form>
</div>

</body>
</html>
