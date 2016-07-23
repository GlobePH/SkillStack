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
		<title>Sign up for skillstack.ph</title>
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel = "stylesheet" type = "text/css" href = "css/style.css">
	</head>
	<body>
		<? include 'header.php'; ?>
		<div class="container" id="registerPage">
			<div class="row">
  				<div class="col-xs-12 col-md-12 col-lg-12">
					<h1 class="welcomeText">Sign up for skillstack.ph</h1>
  				</div>
  			</div>
  			<div class="row" align="center">
					<form method = "POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  				<div class="col-xs-12 col-md-12 col-lg-12">
  					<div class="thumbnail" id="registerContainer">
						<div class="input-group-md">
              <label><p id ="error"><?php echo $fnErr; ?></p></label>
							<input type="text" class="form-control" placeholder="Fullname" id="full_name" name="full_name">
              <label><p id ="error"><?php echo $emErr; ?></p></label>
							<input type="text" class="form-control" placeholder="Email" style="margin-top: 10px;" id="email" name="email">
              <label><p id ="error"><?php echo $pwErr; ?></p></label>
  							<input type="password" class="form-control" placeholder="Password" style="margin-top: 10px;" id="password" name="password">
                <label><p id ="error"><?php echo $univErr; ?></p></label>
							<input type="text" class="form-control" placeholder="University" style="margin-top: 10px;" id="university" name="university">
              <label><p id ="error"><?php echo $degErr; ?></p></label>
							<input type="text" class="form-control" placeholder="Degree Program" style="margin-top: 10px;" id="degree" name="degree">
						</div>
						<button type="submit" value="SignUp" class="btn btn-block" style="margin-top: 10px;">Sign Up</button>
						<button type="button" class="btn btn-block" style="margin-top: 10px;">Cancel</button>
					</div>
  				</div>
				</form>
  			</div>
		</div>
	</body>
</html>
