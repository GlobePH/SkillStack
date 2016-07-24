<?php
	session_start();
	include 'logic_signup.php';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width = device-width, initial-scale = 1">
		<title>Sign up for SkillStack.ph</title>
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel = "stylesheet" type = "text/css" href = "css/style.css">
	</head>
	<body>
		<? include 'header.php'; ?>
		<div class="container" id="registerPage">
			<div class="row">
  				<div class="col-xs-12 col-md-12 col-lg-12">
					<h1 class="welcomeText">Sign up for SkillStack.ph</h1>
  				</div>
  			</div>
  			<div class="row" align="center">
				<form method = "POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  					<div class="col-xs-12 col-md-12 col-lg-12">
  						<div class="thumbnail" id="registerContainer" align="center">
							<div class="input-group-md">
	              				<label id="errorMsg"><?php echo $fnErr; ?></label>
								<input type="text" class="form-control" placeholder="Full name" id="full_name" name="full_name">
	              				<label id="errorMsg"><?php echo $emErr; ?></label>
								<input type="text" class="form-control" placeholder="Email" id="email" name="email">
	              				<label id="errorMsg"><?php echo $pwErr; ?></label>
	  							<input type="password" class="form-control" placeholder="Password" id="password" name="password">
	                			<label id="errorMsg"><?php echo $univErr; ?></label>
								<input type="text" class="form-control" placeholder="University" id="university" name="university">
	              				<label id="errorMsg"><?php echo $degErr; ?></label>
								<input type="text" class="form-control" placeholder="Degree Program" id="degree" name="degree">
							</div>
						<button type="submit" value="SignUp" class="btn btn-block" style="margin-top: 15px;">Sign Up</button>
						<a href="index.php" class="signup"><button type="button" class="btn btn-block" style="margin-top: 15px;">Cancel</button></a>
					</div>
  				</div>
				</form>
  			</div>
		</div>
	</body>
</html>
