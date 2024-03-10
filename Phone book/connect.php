<?php
$localhost = 'localhost';
$username = 'root';
$password ='root';
$dbname = 'phone_book';
$conn=mysqli_connect($localhost,$username,$password,$dbname);
if($conn){
    echo"Connection Established";
}
else{
    die("Connection failed".mysqli_connect_error());
}