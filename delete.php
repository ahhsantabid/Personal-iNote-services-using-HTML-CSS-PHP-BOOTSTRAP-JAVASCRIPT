<?php
include 'db.php';

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    $sql = "DELETE FROM `note` WHERE `note`.`sno` = $id";
    $result =mysqli_query($con,$sql);
    if($result){
        //echo "deleted";
        header('location:display.php');
    }
    else{
        die(mysqli_error($con));
    }


}



?>