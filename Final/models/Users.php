<?php
require_once ('/home/n02701310/WWW/Final/Final/inc/functions.php');

class Users
{
	static function GetAll()
	{
		$conn = GetConnection();
		return $conn->query('SELECT * FROM Users');
	}
	
	static function Get($id)
	{
		$conn = GetConnection();
		$results = $conn->query("SELECT * FROM Users WHERE id=$id");
		$row = $results->fetch_assoc();
		$conn->close();
		return $row;
	}

	static function Insert()
	{
	}
	
	static function Update($row)
	{
		$conn = GetConnection();
		$sql = 	"UPDATE Users "
			.	"Set UserId='$row[UserId]',FirstName='$row[FirstName]',LastName='$row[LastName]',Email='$row[Email]',OrderId=$row[OrderId]', "
			.	"WHERE id=$row[id] ";
		//echo $sql;
		$conn->query($sql);
		$error = $conn->error;
		$conn->close();
		
		return $error != '' ? array('Server Error' => $error) : true;		
	}
	
	static function Delete()
	{
	}
}

