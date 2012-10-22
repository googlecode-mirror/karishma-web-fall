<?php
require_once ('/home/n02701310/WWW/Final/inc/functions.php');
class Supplier
{
	static function GetAll()
	{
		$conn = GetConnection();
		return $conn->query('SELECT * FROM Supplier');
	}
	
	static function Get($id)
	{
		$conn = GetConnection();
		$results = $conn->query("SELECT * FROM Supplier WHERE id=$id");
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
		$sql = 	"UPDATE Supplier "
			.	"Set FirstName='$row[FirstName]',LastName='$row[LastName]',created_at='$row[created_at]',updated_at='$row[updated_at]',Keyword_id='$row[Keyword_id]' "
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

