<?php
session_start();
$sessionValue = isset($_SESSION['isloggedin'])? $_SESSION['$isloggedin'] :false;
$isloggedin=$sessionValue;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auth</title>
</head>
<body>
<main>
    <?php
    if($isloggedin){
        echo'<form action="/logout.php" method="post">
        <button type="submit">logout</button>
    </form>';
    }else{
        echo'<form action="/login.php" method="post">
        <button type="submit">login</button>
    </form>';
    }
     
    ?>
    
    
</main>
</body>
</html>