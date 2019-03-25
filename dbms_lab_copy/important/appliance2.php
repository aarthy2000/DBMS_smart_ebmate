<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/maincodeher.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body class="signup">
    <div class="wrapper1">
        <h2>Appliance</h2>
        <p>Please fill this form</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
<div class="form-group <?php echo (!empty($id_err)) ? 'has-error' : ''; ?>">
                <label>Consumer ID</label>
                <input type="text" name="consumerid" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $id_err; ?></span>
            </div> 
<div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                <label>Appliance Type</label>
		<select>
                	<option value="fan">Fan</option>
			<option value="tubelight">Tubelight</option>
			<option value="ac">AC</option>
			<option value="washingmachine">Washing Machine</option>
			<option value="tv">TV</option>
		</select>
                <span class="help-block"><?php echo $name_err; ?></span>
</div> 
		
<!--<div class="form-group <?php echo (!empty($dob_err)) ? 'has-error' : ''; ?>">
                <label>Date of Birth</label>
                <input type="date" name="dob" class="form-control" value="<?php echo $dob; ?>">
                <span class="help-block"><?php echo $dob_err; ?></span>
            </div> 

<div class="form-group <?php echo (!empty($phnum_err)) ? 'has-error' : ''; ?>">
                <label>Phone number</label>
                <input type="text" name="phnum" class="form-control" value="<?php echo $phnum; ?>">
                <span class="help-block"><?php echo $phnum_err; ?></span>
            </div> 
<div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                <label>E-mail</label>
                <input type="text" name="email" class="form-control" value="<?php echo $email; ?>">
                <span class="help-block"><?php echo $email_err; ?></span>
            </div> 
            <div class="form-group <?php echo (!empty($street_err)) ? 'has-error' : ''; ?>">
                <label>Street</label>
                <input type="text" name="street" class="form-control" value="<?php echo $street; ?>">
                <span class="help-block"><?php echo $street_err; ?></span>
            </div> 
<div class="form-group <?php echo (!empty($city_err)) ? 'has-error' : ''; ?>">
                <label>City</label>
                <input type="text" name="city" class="form-control" value="<?php echo $city; ?>">
                <span class="help-block"><?php echo $city_err; ?></span>
            </div> 
<div class="form-group <?php echo (!empty($state_err)) ? 'has-error' : ''; ?>">
                <label>State</label>
                <input type="text" name="state" class="form-control" value="<?php echo $state; ?>">
                <span class="help-block"><?php echo $state_err; ?></span>
            </div> 
<div class="form-group <?php echo (!empty($pincode_err)) ? 'has-error' : ''; ?>">
                <label>Pin Code</label>
                <input type="text" name="pincode" class="form-control" value="<?php echo $pincode; ?>">
                <span class="help-block"><?php echo $pincode_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
-->
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
            <!--<p>Already have an account? <a href="login.php">Login here</a>.</p>-->
        </form>
    </div>    
</body>
</html>
