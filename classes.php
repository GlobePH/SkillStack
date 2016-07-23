<?php

class account
{
	public $account_id;
	public $username;
	public $password;
	public $name;
	public $email;
  public $profile_pic;
	public $university;
  public $degree;
  public $year_lvl;

	function __construct($account_id, $username, $password, $name, $email, $university, $degree, $year_lvl)
	{
		$this->account_id = $account_id;
		$this->username = $username;
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

	function getUsername()
	{
		return $this->username;
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
  public $stack_id;
  public $title;
  public $description;
  public $lesson_no;
  public $mentor_id;
  public $is_completed;

  function __construct($block_id, $stack_id, $title, $description, $lesson_no, $mentor_id, $is_completed)
  {
    $this->block_id = $block_id;
    $this->stack_id = $stack_id;
    $this->title = $title;
    $this->description= $description;
    $this->lesson_no = $lesson_no;
    $this->mentor_id = $mentor_id;
    $this->is_completed = $is_completed;
  }

  function setBlockId($input)
	{
		$this->block_id = $input;
	}

	function getBlockId()
	{
		return $this->block_id;
	}

  function setStackId($input)
	{
		$this->stack_id = $input;
	}

	function getStackId()
	{
		return $this->stack_id;
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

  function setLessonNo()
  {
    return $this->lesson_no;
  }
  function setMentorid($input)
  {
    $this->mentor_id = $input;
  }

  function getMentorid()
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
}

class field
{
  public $field_id;
  public $title;
  public $description;
  public $stack_no;
  public $block_image;

  function __construct($field_id, $title, $description, $stack_no, $block_image)
  {
    $this->field_id = $field_id;
    $this->title = $title;
    $this->description= $description;
    $this->stack_no = $stack_no;
    $this->block_image = $block_image;
  }

  function setFieldId($input)
  {
    $this->field_id = $input;
  }

  function getFieldId()
  {
    return $this->field_id;
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

  function setStackNo($input)
  {
    $this->stack_no = $input;
  }

  function getStackNo()
  {
    return $this->stack_no;
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
    $this->block_id = $block_id;]
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

class mentor_id
{
  public $mentor_id;
  public $name;
  public $username;
  public $password;
  public $email;
  public $job;
  public $description;
  public $profile_pic;

  function __construct($mentor_id, $name, $username, $password, $email, $job, $description, $profile_pic)
  {
    $this->mentor_id = $mentor_id;
    $this->name = $name;
    $this->username = $username;
    $this->password = $password;
    $this->email = $email;
    $this->job= $job;
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
  function setUsername($input)
  {
    $this->username = $input;
  }
  function getUsername()
  {
    return $this->username;
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
  function setProfilePic()
  {
    return $this->profile_pic;
  }
}

class stack
{
  public $stack_id;
  public $title;
  public $description;
  public $block_no;
  public $stack_image;
  public $is_completed;
  public $field_id;

  function __construct($stack_id, $title, $description, $block_no, $stack_image, $is_completed, $field_id)
  {
    $this->stack_id = $stack_id;
    $this->title = $title;
    $this->description= $description;
    $this->stack_no = $stack_no;
    $this->block_image = $block_image;
    $this->is_completed = $is_completed;
    $this->field_id = $field_id;
  }

  function setStackId($input)
  {
    $this->stack_id = $input;
  }

  function getStackId()
  {
    return $this->stack_id;
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

  function setStackImage($input)
  {
    $this->stack_image = $input;
  }

  function getStackImage()
  {
    return $this->stack_image;
  }

  function setIsCompleted($input)
  {
    $this->$is_completed = $input;
  }

  function getIsCompleted()
  {
    return $this->is_completed;
  }

  function setFieldId($input)
  {
    $this->field_id = $input;
  }

  function getFieldId()
  {
    return $this->field_id;
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
      $this->password = "";
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


 ?>
