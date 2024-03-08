<?php
//to get the connection string
require"./connect.php";
$data = $_POST['momo'];
echo $data;
$sql = "insert into momos (name) values ('$data')";
mysqli_query($conn,$sql);
header('location:/');
