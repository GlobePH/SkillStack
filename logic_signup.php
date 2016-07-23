<?php

include 'functions.php';

loadAll();

/* Variables */
$full_name = $email = $password = $university = $degree = $year_lvl = "";
$fnErr = $emErr= $pwErr =  $univErr = $degErr = $yrErr = "";
$isErr = false;
$greeting = "";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	if (empty($_POST["full_name"])) {
     	$fnErr = "Full name is required";
     	$isErr = true;
   	} else {
     	$full_name = test_input($_POST["full_name"]);
     		// check if name only contains letters and whitespace
     	if (!preg_match("/^[a-zA-Z ]*$/", $full_name)) {
       		$fnErr = "Only letters and white space allowed";
       		$isErr = true;
     	}
   	}

    if (empty($_POST["email"])) {
        $emErr = "Email is required";
        $isErr = true;
      } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emErr = "Invalid email format";
            $isErr = true;
        }
        if(emailExists($email) == true){
          $emErr = "Email already exists";
          $isErr = true;
        }
      }

    if (empty($_POST["password"])) {
        $pwErr = "Password is required";
        $isErr = true;
      } else {
        $password = test_input($_POST["password"]);
          // check if name only contains letters and whitespace
        if (preg_match("/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/", $password)) {
            $pwErr = "Password does not meet the requirements";
            $isErr = true;
            echo "password does not meet req";
        }
      }

    if (empty($_POST["university"])) {
        $univErr = "University is required";
        $isErr = true;
      } else {
        $university = test_input($_POST["university"]);
          // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $university)) {
            $univErr = "Only letters and white space allowed";
            $isErr = true;
        }
      }

      if (empty($_POST["degree"])) {
          $degErr = "Degree is required";
          $isErr = true;
        } else {
          $degree = test_input($_POST["degree"]);
            // check if name only contains letters and whitespace
          if (!preg_match("/^[A-Z'-]+$/", $degree)) {
              $degErr = "Only letters and white space allowed";
              $isErr = true;
          }
        }

    if($isErr == false)
    {
      createAccount($password, $full_name, $email, "default_pic.jpg", $university, $degree, 1);
      $greeting = "Hi " . $full_name . "! Your account has been created.";
      header('Refresh: 1; URL=index.php');

    }

}

?>
