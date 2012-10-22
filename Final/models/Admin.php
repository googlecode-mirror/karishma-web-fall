<?php
require_once ('/home/n02701310/WWW/Final/inc/functions.php');

class Admin
{
	static function GetAll()
	{
		$conn = GetConnection();
		return $conn->query('SELECT * FROM Admin');
	}
	
	static function Get($id)
	{
		$conn = GetConnection();
		$results = $conn->query("SELECT * FROM Admin WHERE id=$id");
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
		$sql = 	"UPDATE Admin "
			.	"Set Username='$row[Username]',Password='$row[Password]',Last_log='$row[Last_log]' "
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

