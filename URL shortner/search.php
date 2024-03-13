<?php
require "./connect.php";
if($_SERVER['REQUEST_METHOD']=='POST'){
    $long =$_POST['long_url'];
    
    $sql = "INSERT into url_short (long_url) VALUES ('$long')";
    $short_url=substr(md5($url.mt_rand()),0,8);
$ssql="SELECT * FROM url WHERE long_url='$long'";
    mysqli_query($conn,$sql);
    header('location:index.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<main>
        <section>
            <form action="index.php" method="post">
                <h1>URL longer</h1>
                <label for="">Enter a URL to long:</label><br>
                <input type="text" name="short_url" id="">
                <br>
                <button type="submit">Long the URL</button>
                <button type="submit">Cancel</button>
            </form>
        </section>
    </main>
</body>
</html>