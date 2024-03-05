<?php
// get data
$id =$_GET['sid'];
echo $id;


require_once 'config.php';
// command
$delete = "DELETE FROM students where id =$id";


mysqli_query($conn,$delete);
echo "Delete successfully";
header("Location:view.php")
?>