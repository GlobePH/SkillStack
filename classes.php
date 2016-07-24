<?php

class account
{
	public $account_id;
	public $password;
	public $name;
	public $email;
  public $profile_pic;
	public $university;
  public $degree;
  public $year_lvl;

	function __construct($account_id, $password, $name, $email, $profile_pic, $university, $degree, $year_lvl)
	{
		$this->account_id = $account_id;
		$this->password = $password;
		$this->name = $name;
		$this->email = $email;
    $this->profile_pic = $profile_pic;
    $this->university = $university;
    $this->degree = $degree;
    $this->year_lvl = $year_lvl;
	}

	function setYearLvl($input)
	{
		$this->year_lvl = $input;
	}

	function getYearLvl()
	{
		return $this->year_lvl;
	}

	function setPassword($pw)
	{
		$this->password = $pw;
	}

		function setEmail($em)
		{
			$this->email = $em;
		}


	function getPassword()
	{
		return $this->password;
	}

	function getProfilePic()
	{
		return $this->profile_pic;
	}

	function getName()
	{
		return $this->name;
	}
  function setName($input)
  {
    $this->name = $input;
  }

	function getEmail()
	{
		return $this->email;
	}

	function getAccId()
	{
		return $this->account_id;
	}
}

class block
{
  public $block_id;
  public $industry_id;
  public $title;
  public $description;
  public $lesson_no;
  public $mentor_id;
  public $is_completed;
	public $block_image;
  function __construct($block_id, $industry_id, $title, $description, $lesson_no, $mentor_id, $is_completed, $block_image)
  {
    $this->block_id = $block_id;
    $this->industry_id = $industry_id;
    $this->title = $title;
    $this->description= $description;
    $this->lesson_no = $lesson_no;
    $this->mentor_id = $mentor_id;
    $this->is_completed = $is_completed;
		$this->block_image = $block_image;
  }

  function setBlockId($input)
	{
		$this->block_id = $input;
	}

	function getBlockId()
	{
		return $this->block_id;
	}

  function setIndustryId($input)
	{
		$this->industry_id = $input;
	}

	function getIndustryId()
	{
		return $this->industry_id;
	}

  function setTitle($input)
	{
		$this->title = $input;
	}

	function getTitle()
	{
		return $this->title;
	}

  function setDescription($input)
  {
    $this->description = $input;
  }

  function getDescription()
  {
    return $this->description;
  }

  function setLessonNo($input)
  {
    $this->lesson_no = $input;
  }

  function getLessonNo()
  {
    return $this->lesson_no;
  }
  function setMentorId($input)
  {
    $this->mentor_id = $input;
  }

  function getMentorId()
  {
    return $this->mentor_id;
  }

  function setIsCompleted($input)
  {
    $this->is_completed = $input;
  }

  function getIsCompleted()
  {
    return $this->is_completed;
  }
	function setBlockImage($input)
	{
		$this->block_image = $input;
	}

	function getBlockImage()
	{
		return $this->block_image;
	}
}

class lesson
{
  public $lesson_id;
  public $block_id;
  public $is_completed;
  public $title;
  public $video_id;
  public $description;

  function __construct($lesson_id, $block_id, $is_completed, $title, $video_id, $description)
  {
    $this->lesson_id = $lesson_id;
    $this->block_id = $block_id;
    $this->is_completed = $is_completed;
    $this->title = $title;
    $this->video_id = $video_id;
    $this->description= $description;
  }

  function setLessonId($input)
  {
    $this->lesson_id = $input;
  }
  function getLessonId()
  {
    return $this->lesson_id;
  }
  function setBlockId($input)
  {
    $this->block_id = $input;
  }
  function getBlockId()
  {
    return $this->block_id;
  }
  function setIsCompleted()
  {
    $this->is_completed = $input;
  }
  function getIsCompleted()
  {
    return $this->is_completed;
  }
  function setTitle($input)
  {
    $this->title = $input;
  }
  function getTitle()
  {
    return $this->title;
  }
  function setVideoId($input)
  {
    $this->video_id = $input;
  }
  function getVideoId()
  {
    return $this->video_id;
  }
  function setDescription($input)
  {
    $this->description = $input;
  }
  function getDescription()
  {
    return $this->description;
  }
}

class mentor
{
  public $mentor_id;
  public $name;
  public $password;
  public $email;
  public $job;
  public $description;
  public $profile_pic;

  function __construct($mentor_id, $name, $password, $email, $job, $description, $profile_pic)
  {
    $this->mentor_id = $mentor_id;
    $this->name = $name;
    $this->password = $password;
    $this->email = $email;
    $this->job= $job;
		$this->description = $description;
		$this->profile_pic = $profile_pic;
  }

  function setMentorId($input)
  {
    $this->mentor_id = $input;
  }
  function getMentorId()
  {
    return $this->mentor_id;
  }
  function setName($input)
  {
    $this->name = $input;
  }
  function getName()
  {
    return $this->name;
  }
  function setPassword($input)
  {
    $this->password = $input;
  }
  function getPassword()
  {
    return $this->password;
  }
  function setEmail($input)
  {
    $this->email= $input;
  }
  function getEmail()
  {
    return $this->email;
  }
  function setDescription($input)
  {
    $this->description = $input;
  }
  function getDescription()
  {
    return $this->description;
  }
  function setProfilePic($input)
  {
    $this->profile_pic = $input;
  }
  function getProfilePic()
  {
    return $this->profile_pic;
  }
}

class industry
{
  public $industry_id;
  public $title;
  public $description;
  public $block_no;
  public $industry_image;
  public $is_completed;

  function __construct($industry_id, $title, $description, $block_no, $industry_image)
  {
    $this->industry_id = $industry_id;
    $this->title = $title;
    $this->description= $description;
    $this->block_no = $block_no;
    $this->industry_image = $industry_image;
  }

  function setIndustryId($input)
  {
    $this->industry_id = $input;
  }

  function getIndustryId()
  {
    return $this->industry_id;
  }

  function setTitle($input)
  {
    $this->title = $input;
  }

  function getTitle()
  {
    return $this->title;
  }

  function setDescription($input)
  {
    $this->description = $input;
  }

  function getDescription()
  {
    return $this->description;
  }

  function setBlockNo($input)
  {
    $this->block_no = $input;
  }

  function getBlockNo()
  {
    return $this->block_no;
  }

  function setIndustryImage($input)
  {
    $this->industry_image = $input;
  }

  function getIndustryImage()
  {
    return $this->industry_image;
  }

}

class DBConnection
{
  private $servername;
  private	$dbuser;
  private	$password;
  private	$dbName;
  private $conn;

  function __construct()
  {
      $this->servername = "localhost";
      $this->dbuser = "root";
      $this->password = "root";
      $this->dbName = "skillstack";
      $this->conn = new mysqli($this->servername, $this->dbuser, $this->password, $this->dbName);
  }

  function getInstance()
  {
          /* Connect */
    if($this->conn->connect_error){
      die("Connection failed: " . $conn->connect_error);

    }

    else return $this->conn;
  }
}


 ?>
