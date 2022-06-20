<?php

include 'db.php';
session_start();

if(!isset($_SESSION['username'])){
  header ('location: login.php');
  //exit;
}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">iNote</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact us</a>
        </li>

       
      </ul>
 
      <form class="d-flex" >
        <span  class="my-2" style="color:white "><?php echo "Welcome "  .  $_SESSION['username']; ?></span><hr>
          <a href="login.php" class="btn btn-danger">Logout</a>        
      </form>
    </div>
  </div>
</nav>

<div class="container my-5" >
    <h2>Welcome! <span style="color:orange"><?php echo $_SESSION['username'];?></span> to iNote </h2>

    <table class="table my-5">
  <thead>
    <tr>
      <th scope="col">Sno</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>

  
  <?php
   $sql = "SELECT * FROM `note`";
   $result = mysqli_query($con,$sql);
   while($row = mysqli_fetch_assoc($result)){
    $sno = $row['sno'];
    $title = $row['title'];
    $description = $row['description'];

    echo "<tr>
    <th scope='row'>".$sno."</th>
    <td>".$title."</td>
    <td>".$description."</td>
    <td><button class='btn btn-primary'> <a href='update.php?updateid=".$sno."' class='text-light'> Edit</a></button>
    <button class='btn btn-danger'> <a href='delete.php?deleteid=".$sno."' class='text-light'> Delete</a></button>
    </td>
  </tr>";


   }
   


?>



  </tbody>
</table>

<button class="btn btn-primary"><a href="insert.php" class="text-light"> Add Note</a></button>

</div>