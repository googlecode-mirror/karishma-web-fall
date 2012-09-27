<?php
require_once('password.php');
   function GetConnection()
   {
   global $password;
   $conn=new mysqli('localhost','n02701310',$password,'n02701310_db');
   return $conn;
           }
?>