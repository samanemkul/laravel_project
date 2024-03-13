<?php
require "./connect.php";
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $title = $_POST['title'];
    $amount = $_POST['amount'];
    $sql ="INSERT into expenses (title, amount ) VALUES('$title','$amount')";
    mysqli_query($conn,$sql);
    header('location:index.php');
}