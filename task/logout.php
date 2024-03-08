<?php
    session_start();
   if(isset($_SESSION['logout'])){
    echo"Great to see you";
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
    <form action="" method="post" class="form">
    
        <button type="Submit">Login</button>
    </form>
    <form action="" method="post" class="form">
    
        <button type="Submit">Logout</button>
    </form>
</body>
</html>