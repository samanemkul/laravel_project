<?php
$localhost='localhost';
$username='root';
$password='root';
$dbname='url';
$conn = mysqli_connect($localhost,$username,$password,$dbname);
if($conn)
{
    echo"Connection successful";
}
else{
    echo"Connection failed";
}
