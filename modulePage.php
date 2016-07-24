<?php
	session_start();
	include 'functions.php';
	include 'errorHandler.php';
	loadAll();
	if(!isset($_GET['link'])){
		echo "<h1 align=\"center\">No module selected.</h1>";
		header('Refresh: 2; URL=industry.php');
		exit;
	}
	else{
		$block_id = $_GET['link'];
		$block = getBlockbyId($block_id);
		$lessons = getLessons($block_id);
	}

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
		<div class="container" id="modulePage" style="padding-top: 120px;" align="center">
			<div class="jumbotron">
			<?php echo populateModulePage($block,$lessons) ?>
			</div>;
		</div>
	</body>
</html>
