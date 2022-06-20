<?php
include 'db.php';

    $id = $_GET['updateid'];
    $sql ="SELECT * FROM `note` where `sno`=$id";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);
    $title = $row['title'];
    $description = $row['description'];






if(isset($_POST['update'])){
    $title = trim($_POST['title']);
    $description = trim($_POST['description']);

    $sql= "UPDATE `note` SET `sno` = '$id', `title` = '$title', `description` = '$description' WHERE `note`.`sno` = $id";
    $result = mysqli_query($con,$sql);
   if($result){

    //echo "updated";
    header('location:display.php');
   }
   else{
    die(mysqli_error($con));
   }
    


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
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit" >Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="container my-5">
<h3>Update Note</h3>
<form action="" method="post">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Title</label>
  <input type="text" class="form-control" id="title" name="title" value=  "<?php echo $title;  ?>" placeholder="Enter the note">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Note Description</label>
  <textarea class="form-control" id="description" name="description" rows="3" placeholder="Describe the note briefly"><?php  echo "$description"; ?></textarea>
</div>
<button class="btn btn-primary" type="submit" name="update">update Note</button>

</form>

</div>
 
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>