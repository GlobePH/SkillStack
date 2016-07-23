<?php
	session_start();
	include 'functions.php';
	loadAll();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width = device-width, initial-scale = 1">
		<title>skillstack.ph</title>
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel = "stylesheet" type = "text/css" href = "css/style.css">
	</head>
	<body>
		<?php include 'headerHome.php'; ?>
		<div class="container" id="industryPage">
			<div class="row">
  				<div class="col-xs-12 col-md-12 col-lg-12">
					<h1 class="industryText" align="center">Industries</h1>
  				</div>
  			</div>
  			<?php echo populateIndustry(); ?>
		</div>
	</body>
</html>
