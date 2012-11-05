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
                $row2 = EscapeRow($row, $conn);
                $sql =  "UPDATE Users"
                        .       "Set id='$row2[id]',FirstName='$row2[FirstName]',LastName='$row2[LastName]',Email='$row2[Email]',OrderId='$row2[OrderId]' "
                        .       "WHERE id=$row2[id] ";
                echo $sql;
                $conn->query($sql);
                $error = $conn->error;
                $conn->close();
                
                return $error != '' ? array('Server Error' => $error) : true;           
        }
        
        static function Delete()
        {
        }
        
        static function Validate($row)
        {
                $results = array();
                if(!is_numeric($row['id'])) $results['id'] = 'Keyword id needs to be a number';
                if(empty($row['id'])) $results['id'] = 'Keyword is required';
                if(empty($row['FirstName'])) $results['FirstName'] = 'FirstName is required';
                if(empty($row['LastName'])) $results['LastName'] = 'LastName is required';
                
                return count($results) > 0 ? $results : true;
        }
}
