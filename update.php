<?php
require_once 'config.php';

$name = $_POST['name'];
$age = $_POST['age'];
$email = $_POST['email'];
$id =$_POST['sid'];



// command
$sql = "UPDATE students  SET name ='$name',age ='$age',email = '$email' WHERE id=$id";  


$result = mysqli_query( $conn, $sql );
$row = mysqli_fetch_assoc( $result );



mysqli_query($conn, $sql); 

header("Location: view.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add</title>
    <!-- Latest compiled and minified CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    />

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
    <h2>Updated students List</h2>
    <div class="container">
      <form action="add.html" method="post">
        <div class="form-group">
          <label for="name">name</label>
          <input
            type="text"
            class="form-control"
            placeholder="Enter name"
            id="name"
            name="name"
            value="<?php echo $row['name']; ?>"
          />
        </div>
        <div class="form-group">
          <label for="age">age</label>
          <input
            type="number"
            class="form-control"
            placeholder="Enter age"
            id="age"
            name="age"
            value=" <?php echo $row['age']?>"
          />
        </div>
        <div class="form-group">
          <label for="email">email</label>
          <input
            type="email"
            class="form-control"
            placeholder="Enter email"
            id="email"
            name="email"
            value="<?php echo $row['email']?> "
          />
        </div>
        <button type="submit" class="btn btn-warning">Add more students</button>
      </form>
    </div>
  </body>
</html>