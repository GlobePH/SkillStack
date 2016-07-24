<?php
include 'classes.php';
  $email = null;
  $password = null;
  $accounts = array();
  $lessons = array();
  $blocks = array();
  $industries = array();
  $fields = array();
  $mentors = array();
  $reply = "";
  $loggedin = false;

  function test_input($data) {
     			$data = trim($data);
     			$data = stripslashes($data);
     			$data = htmlspecialchars($data);
     			return $data;
  }

  function verify($email, $password) {
  	global $accounts;

  	for($i = 0; $i<count($accounts); $i++)
  	{
  		$temp_email = $accounts[$i]->getEmail();
  		$temp_pass = $accounts[$i]->getPassword();
  		if(strcmp($temp_email, $email) == 0 && strcmp($temp_pass, $password) == 0)
  		{
  			return true;
  		}

  	}

  	return false;
  }

  function loadAll(){
  	if(isset($_SESSION["email"]))
  	{
  		global $email;
  		$email = $_SESSION["email"];
  	}
    loadAccounts();
  	loadMentors();
  	loadLessons();
  	loadBlocks();
  	loadIndustries();
  }


  function loadAccounts(){
  	global $accounts;
  	$accounts = null;
  	$connect= new DBConnection();
  	$connect = $connect->getInstance();

  	$sql = "SELECT * FROM account_table";
  	$result = $connect->query($sql);

  	if($result->num_rows > 0){
  		while($row = $result->fetch_assoc()){
  			$temp_acc = new account($row['id'], $row['password'], $row['full_name'], $row['email'], $row['profile_pic'],$row['university'],$row['degree'],$row['year_lvl']);
  			$accounts[count($accounts)] = $temp_acc;
  		}
  	}
  	$connect->close();
  }

  function loadMentors(){
  	global $mentors;
  	$mentors = null;
  	$connect= new DBConnection();
  	$connect = $connect->getInstance();

  	$sql = "SELECT * FROM mentor_table";
  	$result = $connect->query($sql);

  	if($result->num_rows > 0){
  		while($row = $result->fetch_assoc()){
  			$temp_mentor = new mentor($row['id'], $row['full_name'], $row['password'], $row['email'], $row['job'],$row['description'],$row['profile_pic']);
  			$mentors[count($mentors)] = $temp_mentor;
  		}
  	}
  	$connect->close();
  }

  function loadLessons(){
    global $lessons;
    $lessons = null;
    $connect= new DBConnection();
    $connect = $connect->getInstance();

    $sql = "SELECT * FROM lesson_table";
    $result = $connect->query($sql);

    if($result->num_rows > 0){
      while($row = $result->fetch_assoc()){
        $temp_lesson = new lesson($row['id'], $row['block_id'], $row['title'], $row['description'], $row['video_id'], $row['is_completed']);
        $lessons[count($lessons)] = $temp_lesson;
      }
    }
    $connect->close();
  }

  function loadBLocks(){
    global $blocks;
    $blocks = null;
    $connect= new DBConnection();
    $connect = $connect->getInstance();

    $sql = "SELECT * FROM block_table";
    $result = $connect->query($sql);

    if($result->num_rows > 0){
      while($row = $result->fetch_assoc()){
        $temp_block = new block($row['id'], $row['industry_id'], $row['title'], $row['description'], $row['lesson_no'], $row['mentor_id'], $row['is_completed'], $row['block_image']);
        $blocks[count($blocks)] = $temp_block;
      }
    }
    $connect->close();
  }

  function loadIndustries(){
    global $industries;
    $industries = null;
    $connect= new DBConnection();
    $connect = $connect->getInstance();

    $sql = "SELECT * FROM industry_table";
    $result = $connect->query($sql);

    if($result->num_rows > 0){
      while($row = $result->fetch_assoc()){
        $temp_industry = new industry($row['id'], $row['title'], $row['description'], $row['block_no'], $row['industry_image']);
        $industries[count($industries)] = $temp_industry;
      }
    }
    $connect->close();
  }

  function createAccount($pw, $fn, $em, $pic, $univ, $deg, $yr){
  	$connect = new DBConnection();
  	$connect = $connect->getInstance();

  	$sql = "INSERT INTO account_table(password, full_name, email, profile_pic, university, degree, year_lvl) VALUES ('$pw', '$fn', '$em', '$pic','$univ', '$deg', '$yr')";

  	if ($connect->query($sql) !== TRUE) {
      	echo "Error: " . $sql . "<br>" . $connect->error;
      }
      else loadAll();

      $connect->close();
  }

  function createBlock($industry_id, $title, $description, $lesson_no, $mentor_id, $is_completed, $block_image){
  	$connect = new DBConnection();
  	$connect = $connect->getInstance();

  	$sql = "INSERT INTO block_table(industry_id, title, description, lesson_no, mentor_id, is_completed, block_image) VALUES ('$industry_id', '$title', '$description', '$lesson_no', '$mentor_id','$is_completed','$block_image')";

  	if ($connect->query($sql) !== TRUE) {
      	echo "Error: " . $sql . "<br>" . $connect->error;
      }
      else loadAll();

      $connect->close();
  }

  function createLesson($block_id, $title, $description, $video_id, $is_completed){
  	$connect = new DBConnection();
  	$connect = $connect->getInstance();

  	$sql = "INSERT INTO lesson_table(block_id, title, description, video_id, is_completed) VALUES ('$block_id', '$title', '$description', '$video_id', '$is_completed')";

  	if ($connect->query($sql) !== TRUE) {
      	echo "Error: " . $sql . "<br>" . $connect->error;
      }
      else loadAll();

      $connect->close();
  }

  function createMentor($full_name, $password, $email, $job, $description, $profile_pic){
  	$connect = new DBConnection();
  	$connect = $connect->getInstance();

  	$sql = "INSERT INTO mentor_table(full_name, password, email, job, description, profile_pic) VALUES ('$full_name', '$password', '$email', '$job','$description','$profile_pic')";


  	if ($connect->query($sql) !== TRUE) {
      	echo "Error: " . $sql . "<br>" . $connect->error;
      }
      else loadAll();

      $connect->close();
  }


    function getAccount($email){
    	$connect= new DBConnection();
    	$connect = $connect->getInstance();

    	$sql = "SELECT account FROM account_table WHERE email =". $email . "";
      $result = $connect->query($sql);
      if($result->num_rows >0){
        $row = $result->fetch_assoc();
        $temp_acc = new account($row['id'],$row['password'],$row['full_name'],$row['email'],$row['profile_pic'],$row['university'],$row['degree'],$row['year_lvl']);
      }
    	if ($connect->query($sql) !== TRUE) {
        			echo "ERROR: Could not able to execute $sql. " . mysqli_error($connect);
        }
        $connect->close();
    }

    function getAccountByEmail($email)
    {
    	global $accounts;

    	$acc = null;

    	for($i = 0; $i<count($accounts); $i++)
    	{
    		$temp_email = $accounts[$i]->getEmail();
    		if($email == $temp_email)
    		{
    			$acc = $accounts[$i];
    		}
    	}
    }
      function getAccountById($id)
      {
        global $accounts;

        $acc = null;

        for($i = 0; $i<count($accounts); $i++)
        {
          $temp_id = $accounts[$i]->getAccId();
          if($id == $temp_id)
          {
            $acc = $accounts[$i];
          }

        }

    	return $acc;
    }
    function getIndustrybyId($id)
    {
      global $industries;

      $acc = null;

      for($i = 0; $i<count($industries); $i++)
      {
        $temp_id = $industries[$i]->getIndustryId();
        if($id == $temp_id)
        {
          $acc = $industries[$i];
        }

      }

    return $acc;
  }

    function emailExists($email)
    {
    	global $accounts;

    	for($i = 0; $i<count($accounts); $i++)
    	{
    		$temp_email = $accounts[$i]->getEmail();
    		if(strcmp($temp_email, $email) == 0)
    		{
    			return true;
    		}
    	}

    	return false;
    }

    function populateIndustry()
    {
      global $industries;
      $temp = null;
      echo "<div class=\"row\" style=\"padding-top: 30px;\">";
      for($i=1; $i<=count($industries); $i++){
          $temp = $industries[$i-1];

        if($i%4==0){
          echo "<div class=\"row\">";
        }

        echo "<div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12\">
        <a href=\"modules.php?link=" .$temp->getIndustryId()."\">
          <div class=\"thumbnail\" id=\"industryItem\">
              <img src=\"images/".$temp->getIndustryImage()."\" class=\"invert\" width=\"96\" height=\"96\">
              <div class=\"caption\">
                <h4 style=\"text-align: center;\">". $temp->getTitle()."</h4>
                <p style=\"text-align: center;\">". $temp->getBlockNo()." Modules</p>
              </div>
            </div>
            </a>
        </div>";
        if($i%4 == 0){
          echo "</div>";
        }
      }
    }

    function getBlocks($industry_id)
    {
      $connect= new DBConnection();
    	$connect = $connect->getInstance();
      $sortedblocks = array();
    	$sql = "SELECT * FROM block_table WHERE industry_id =". $industry_id . "";
      $result = $connect->query($sql);
      if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
          $temp_block = new block($row['id'], $row['industry_id'], $row['title'], $row['description'], $row['lesson_no'], $row['mentor_id'],$row['is_completed'], $row['block_image']);
          $sortedblocks[count($sortedblocks)] = $temp_block;
        }
      }
    	if ($connect->query($sql) != TRUE) {
        			echo "ERROR: Could not able to execute $sql. " . mysqli_error($connect);
        }
        $connect->close();
        return $sortedblocks;

    }

  function getLessons($block_id){
    global $lessons;
    $sorted_lessons = array();
    for($i=0; $i<count($lessons);$i++){
      if ($lessons[$i]->getBlockId()==$block_id){
        $sorted_lessons[count($sorted_lessons)] = $lessons[$i];
      }
    }
    return $sorted_lessons;
  }

    function getMentorById($id)
    {

      global $mentors;
      $mentor = null;
      for($i=0; $i<count($mentors);$i++){

        if ($mentors[$i]->getMentorId()==$id){
          $mentor = $mentors[$i];
        }
      }
      return $mentor;
      }

      function getLessonById($id)
      {

        global $lessons;
        $lesson = null;
        for($i=0; $i<count($lessons);$i++){

          if ($lessons[$i]->getLessonId()==$id){
            $lesson = $lessons[$i];
          }
        }
        return $lesson;
        }
      function getBlockById($id)
      {
        global $blocks;
        $block = null;
        for($i=0; $i<count($blocks);$i++){
          if ($blocks[$i]->getBlockId()==$id){
            $block = $blocks[$i];
          }
        }
        return $block;
        }




    function populateBlocks($industry, $blocks){

      echo "<div class=\"row\">
          <div class=\"col-xs-12 col-md-12 col-lg-12\">
          <h1 class=\"industryText\" align=\"center\">".$industry->getTitle()."</h1>
          </div>
        </div>";
        echo "<div class=\"row\" style=\"padding-top: 30px;\">";
        for($i=1; $i<=count($blocks); $i++){
            $temp = $blocks[$i-1];
            if($i%4==0){
              echo "<div class=\"row\">";
            }
            echo "<div class=\"col-lg-3 col-md-4 col-sm-6 col-xs-12\">

            <a href=\"modulePage.php?link=" .$temp->getBlockId()."\">
            <div class=\"thumbnail\" id=\"moduleItem\">
                <img src=\"images/".$temp->getBlockImage()."\" class=\"invert\" width=\"90\" height=\"90\">
                <div class=\"caption\">
                  <h5 style=\"text-align: center;\">".$temp->getTitle()."</h4>
                  <p style=\"text-align: center;\">".$temp->getLessonNo()."</p>
                </div>
              </div>
              </a>
          </div>";
          if($i%4==0){
            echo "</div>";
          }
      }
    }

    function populateModulePage($block,$lessons){
        	$mentor = getMentorById($block->getMentorId());
          echo "<p style=\"font-size: 48px; margin-bottom: 0px;\">".$block->getTitle()."</p>
          <p style=\"font-size: 16px;\">2/3 Completed</p>
          <img class=\"mentorImage\" src=\"images/".$mentor->getProfilePic()."\">
          <p style=\"font-size: 16px;\">Guided by ".$mentor->getName()."</p>
          <hr>
          <p style=\"font-size: 16px\">".$block->getDescription()."</p>
          <hr>";
          for($i=1; $i<=count($lessons); $i++){
            $temp = $lessons[$i-1];
              echo "<a id=\"lessonLink\" href=\"lessonPage.php?link=" .$temp->getLessonId()."\"> <div>
                <p class=\"lessonItem\" align=\"left\">Lesson ".$i." - " .$temp->getTitle().
                "<img src=\"images/green-circle.png\" height=\"24\" width=\"24\" align=\"right\">
                </p>
              </div>
              </a>
              <hr>";
          }
    }




?>
