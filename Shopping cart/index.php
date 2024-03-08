<?php
session_start();
$shopping_list = $_SESSION['manjan']??[];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do the shopping</title>
</head>
<body>
    <main>
        <h1>Lets go shopping</h1>
        <section>
            <form action="/add_to_cart.php" method="post">
                <input type="text"name="Shopping">
                <button type="Submit">Add to cart</button>
            </form>
        </section>
        <!-- list to display -->
        <section>
            <h1>Shopping list here</h1>
            <ul>
                
                <?php
                foreach($shopping_list as $value){
                    echo"<li>{$value}</li>";
                }
                ?>
            </ul>
        </section>
    </main>
</body>
</html>