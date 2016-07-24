<?php

session_start();
include 'functions.php';
loadAll();
$loggedin = false;
$loginErr ="Sign in.";
if(isset($_SESSION["email"])){
	$loggedIn_account = getAccountByEmail($_SESSION["email"]);
	header("Location: industry.php");
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$loggedin = false;
	if(!empty($_POST["email"])){
     	$email = test_input($_POST["email"]);
     	$loggedin = true;
 	}
 	else if($loggedin == false){
 		$loginErr = "Username or Password field is empty.";
 	}
 	if(!empty($_POST["password"])){
 		$password = test_input($_POST["password"]);
 	}
	if($loggedin == true){
 		if(verify($email, $password)){
			$_SESSION["email"] = test_input($_POST["email"]);
			header('Refresh: 2; URL = industry.php');
		}
		else if($loggedin == false){
			$reply = "";
		}
		else{
			 $loginErr = "Username does not exist or password is wrong";
		}
	}
}

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width = device-width, initial-scale = 1">
		<title>Welcome to SkillStack.ph</title>
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel = "stylesheet" type = "text/css" href = "css/style.css">
	</head>
	<body>
		<?php include 'header.php'; ?>
		<div class="container" id="loginPage">
			<div class="row" align="right">
  				<div class="col-xs-12 col-md-12 col-lg-12">
					<h1 class="welcomeText">Welcome to SkillStack.ph</h1>
  				</div>
  			</div>
  			<div class="row">
  				<div class="col-xs-12 col-md-12 col-lg-12">
  					<span class="pull-right">
  						<div class="thumbnail" id="loginContainer">
							<form method = "POST" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
								<div class="input-group-md">
									<label><?php echo $loginErr; ?></label>
  									<input type="text" class="form-control" id="email" name="email" placeholder="Email">
  									<input type="password" class="form-control" id="password" name="password" placeholder="Password" style="margin-top: 10px;">
								</div>
								<input type="submit" class="btn btn-block" style="margin-top: 10px;" value="Login">
							</form>
						</div>
						<div class="thumbnail" id="loginContainer" align="center">
							<b style="font-size: 14px;">New to SkillStack.ph?</b>
							<a href="signup.php" class="signup"><button type="button" class="btn btn-block" style="margin-top: 10px;">Sign Up</button></a>
						</div>
					</span>
  				</div>
  			</div>
		</div>
	</body>
</html>
