<?php
require_once ('password.php');
function GetConnection()
{
	global $password;
	$conn = new mysqli('localhost','plotkinm', $password, 'plotkinm_db');
	return $conn;
}
function EscapeRow($row, $conn)
{
	$row2 = array();
	foreach ($row as $key => $value) {
		$row2[$key] = $conn->real_escape_string($value);
	}
	return $row2;
}