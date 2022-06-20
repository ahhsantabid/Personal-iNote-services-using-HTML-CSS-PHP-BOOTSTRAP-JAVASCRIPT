<?php
include 'db.php';
$error ="";

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM register WHERE email= '$email' && password = '$password' ";
    $result = mysqli_query($con,$sql);
    $fetch = mysqli_fetch_array($result);
    $row= mysqli_num_rows($result);
    if($row==1){

         $username=$fetch['username'];
         session_start();
         $_SESSION['username'] = $username;
         header("location:display.php");

    }
    else{
        $error= "Invalid email/password";
    }


}




?>






<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
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
      
    </div>
  </div>
</nav>


  </div>
  <div class="container" >
  <h3 class="my-4">Please Login Here!</h3>
  <hr>
  <form class="row g-3 needs-validation" novalidate action="" method="POST">
  <p style = "color:red">
  <?php if(isset($error)){
     echo $error; } ?></p>
     <p style = "color:green">
  <?php if(isset($success)){
     echo $success; } ?></p>

<div class="">
    <label for="validationCustomUsername" class="form-label">Email</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="email" class="form-control" id="email" name="email" aria-describedby="inputGroupPrepend" placeholder="Enter your email" value="<?php if($error){ echo $email; }   ?>" >

      <div class="invalid-feedback">
        Please enter a vaild email.
      </div>
    </div>
  </div>
  <div class="">
    <label for="validationCustom02" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Enter the password">
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  
 
      
 
  
  <div class="col-12">
    <button class="btn btn-primary" type="submit" name="submit">Login</button>
    <br>
    <p class="my-4"> Create Account? <a href="registration.php">Click here</a></p>
  </div>
</form>

  </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
   
</body>
</html>