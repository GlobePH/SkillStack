<?php
	session_start();
	include 'functions.php';
	loadAll();
	if(!isset($_GET['link'])){
		echo "<h1 align=\"center\">No module selected.</h1>";
		header('Refresh: 2; URL=industry.php');
		exit;
	}
	else{
		$industry_id = $_GET['link'];

		$industry = getIndustrybyId($industry_id);

		$modules = getBlocks($industry_id);
	}

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width = device-width, initial-scale = 1">
		<title>SkillStack.ph</title>
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel = "stylesheet" type = "text/css" href = "css/style.css">
	</head>
	<body>
    <?php include 'headerHome.php'; ?>
		<div class="container" id="modulePage">
			<?php echo populateBlocks($industry, $modules) ?>
		</div>
	</body>
</html>
