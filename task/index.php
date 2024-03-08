<?php
   
    session_start();

    
    if (isset($_POST['logout'])) {
       
        session_destroy();
        header("Location: ".$_SERVER['PHP_SELF']);
        exit;
    }

    if (isset($_POST['login'])) {
        
        $_SESSION['loggedin'] = true;
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
    </style>
</head>
<body>

<?php
    
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
        echo '<h1>Welcome! Great to see you, buddy!<br><br><h1> ';
        echo '<br><br><form method="post"><input type="submit" name="logout" value="Logout"></form>';
     
    

      
    } else {
     
        echo'<form method="post"><input type="submit" name="login" value="Login"></form>';
    }
?>
 <br>



</body>
</html>
