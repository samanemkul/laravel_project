<?php
$localhost = 'localhost';
$username = 'root';
$password = 'root';
$dbname = 'expense_tracker';
$conn = mysqli_connect($localhost,$username,$password,$dbname);
if($conn){
    echo"Connection Established";
}
else{
    echo"Connection error".mysqli_connect_error();
}