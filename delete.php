<?php
// get data
$id =$_GET['sid'];
echo $id;


require_once 'config.php';
// command
$delete = "DELETE FROM students where id =$id";


mysqli_query($conn,$delete);

header("Location:view.php")
?>