<?php
require_once 'config.php';

$name = $_POST['name'];
$age = $_POST['age'];
$email = $_POST['email'];



// command
$sql = "INSERT INTO students ( name,age,email) values('$name','$age','$email')";  




mysqli_query($conn, $sql); 

header("Location: view.php");
?>
