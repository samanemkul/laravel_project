<?php
require "./connect.php";
$sql="SELECT * FROM categories";
$result = mysqli_query($conn,$sql);
$rows = mysqli_fetch_all($result,MYSQLI_ASSOC);


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
            <form action="add.php" method="post">
                <h1>Add new</h1>
                <label >Entry type: </label><select name="dropdown"><br>
                    <?php
                    foreach($rows as $value){
                        echo"<option value = '{$value['id']}>{$value['label']}</option>";
                    }
                    ?>
                </select><br>
                <label>Name: </label><input type="text"name="title"><br>
                <label>Amount: </label><input type="text" name="amount"><br>
                <button type="submit">Add expenses</button>
            </form>
        </section>
    </main>
</body>
</html>