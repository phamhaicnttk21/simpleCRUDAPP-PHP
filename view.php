<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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
    <div class="container">
        <h2>Students lists</h2>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>name</th>
        <th>age</th>
        <th>email</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
        <?php
    require_once 'config.php';

    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];

    $viewSQL = 'SELECT * FROM students ';

    $result=mysqli_query($conn,$viewSQL);


    // loop the table and print out the screen
    while($r = mysqli_fetch_assoc($result)){
        
        ?>
        <tr>
        <td><?php echo $r['name']?></td>
        <td><?php echo $r['age']?></td>
        <td><?php echo $r['email']?></td>
        <td>
       <a href="edit.php?sid=<?php echo $r['id']?>" class="btn btn-primary">Edit</a>
    </td>

        <td>
       <a  href="delete.php?sid=<?php echo $r['id']?>" class="btn btn-danger">Delete</a>
    </td>
      </tr>
      <tr>
      
    <?php
    }
    ?>

    
     </tbody>
  </table>
    
      
      
   
    </div>



</body>
</html>
