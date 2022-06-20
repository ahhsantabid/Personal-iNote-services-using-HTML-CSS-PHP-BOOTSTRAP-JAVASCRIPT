<?php
$server = 'localhost';
$username = 'root';
$password = '';
$dbname = 'inote';

$con = mysqli_connect($server,$username,$password,$dbname);
if($con==false){
   die('mysqli_error($con)');
}
else{
    //echo "connected successfully";
}

?>
