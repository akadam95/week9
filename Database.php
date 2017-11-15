<?php

class Database {

private static $dsn = 'mysql:host=sql2.njit.edu;dbname=ak985';
private static $username = 'ak985';
private static $password = 'XwA5ITTI';

private static $db;
private function _construct() {}
public static function getDB (){

  if(!isset(self::$db)){
  
  try {
        self::$db = new PDO(self::$dsn,self::$username,self::$password);
	      echo "Connected successfully";  
    }catch(PDOException $e)
      {
    	  echo "Connection failed: " . $e->getMessage();
        exit();
      }
    }
    return self::$db;
    }
}
 
?>