<?php
require"./connect.php";
// fetch
$sql= "select * from momos";
mysqli_query($conn,$sql);
$result = mysqli_query($conn,$sql);
// echo "<pre>";
// var_dump($result);
// echo "</pre>";

$row = mysqli_fetch_all($result,MYSQLI_ASSOC);
// $row = mysqli_fetch_assoc($result);


?>

</ul>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section>
    <form action="add_momo.php"method="post">
        <input type="text" name="momo">
        <button type="submit">Add</button>
    </form> 
    </section>
    <ul>
<?php
foreach ($row as $value) {
echo "<li>{$value['name']}</li>";
}

?>
</body>
</html>