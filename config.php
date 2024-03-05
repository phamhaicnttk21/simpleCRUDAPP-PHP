<?php
$host = "localhost";
$user ="root";  //username database
$passwd = "mysql";
$db = "crudapp" ;  //password database

// create connection 
$conn = new mysqli($host, $user, $passwd, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
//   echo "Connected successfully";
?>
