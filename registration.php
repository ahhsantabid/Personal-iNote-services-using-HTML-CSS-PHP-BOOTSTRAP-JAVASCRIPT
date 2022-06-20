<?php
include 'db.php';
$error ="";
//$username_error="";

if(isset($_POST['submit'])){
    $username =  mysqli_real_escape_string($con,$_POST['username']);
    $password = mysqli_real_escape_string($con,$_POST['password']);
    $confirmpassword = mysqli_real_escape_string($con,  $_POST['confirmpassword']);
    $email = mysqli_real_escape_string($con,  $_POST['email']);
    $phone = mysqli_real_escape_string($con,  $_POST['phone']);
    //$gender = mysqli_real_escape_string($con,  $_POST['gender']);
    //$city = mysqli_real_escape_string($con,  $_POST['city']);


if(empty(trim($_POST['username']))){
    $error= "*username can not be blank";
} 
elseif(empty(trim($_POST['email']))){
    $error= "*Email can not be blank";

}
elseif(empty(trim($_POST['password']))){
    $error= "*Password can not be blank";

}

elseif($password != $confirmpassword){
    $error= "*Password doesnot match";

}

elseif(strlen($username)<3 || strlen($username)>30){
        $error ="username name should be between 4-30 charecters";
}

elseif(strlen($password)<5){
    $error ="password should be more the 5 letter";
}
elseif(strlen($phone)>11  && strlen($phone)<11 ){
  $error = "Phone number should be exectly 11 digit";
}
elseif(empty($_POST['phone'])){
  $error= "*Phone number is blank";
}

else{
    $sql = "SELECT * FROM `register` WHERE email='$email'|| phone='$phone' ";
    $result = mysqli_query($con,$sql);
    $row =mysqli_fetch_array($result);
    if($row>0){
        $error = "Email/Phone already exist";
        //$error = "phone already exist";

    }
    else{ 
   //$pass = md5($password);
    $sql = "INSERT INTO `register` ( `username`, `password`, `email`, `phone`) VALUES ( '$username', '$password', '$email', '$phone')";
    $result = mysqli_query($con,$sql);
    if($result){
        
        //$success = "successfully done register!";
        header("location:login.php");
    }
  }
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
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit" >Search</button>
      </form>
    </div>
  </div>
</nav>


  </div>
  <div class="container" >
  <h3 class="my-4">Please Register Here!</h3>
  <hr>
  <form class="row g-3 needs-validation" novalidate action="" method="POST">
  <p style = "color:red">
  <?php if(isset($error)){
     echo $error; } ?></p>
     <p style = "color:green">
  <?php if(isset($success)){
     echo $success; } ?></p>

  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">User Name</label>
    <input type="text" class="form-control" id="username" name="username" placeholder="Enter the username" value="<?php if($error){ echo $username; }  ?>">
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Enter the password" value="<?php if($error){ echo $password; }  ?>">
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" placeholder="Enter the confirm password" required>
  </div>
  <div class="col-md-4">
    <label for="validationCustomUsername" class="form-label">Email</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="email" class="form-control" id="email" name="email" aria-describedby="inputGroupPrepend" placeholder="Enter your email" value="<?php if($error){ echo $email; }  ?>" >

      <div class="invalid-feedback">
        Please enter a vaild email.
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">Phone</label>
    <input type="contact" class="form-control" id="phone" name="phone" placeholder="+8801#########" value="<?php if($error){ echo $phone; }   ?>">
    <div class="invalid-feedback">
      Please provide a valid Number.
    </div>
  </div>
  
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit" name="submit">Register</button>
    <p class="my-4">Already have account? <a href="login.php">click here</a></p>
  </div>
</form>

  </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
   
</body>
</html>

