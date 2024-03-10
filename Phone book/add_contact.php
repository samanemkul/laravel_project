<?php
require "./connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST['first_name'];
    $mname = $_POST['middle_name'];
    $lname = $_POST['last_name'];
    $num = $_POST['phone_number'];

    $sql = "INSERT INTO contacts (first_name, middle_name, last_name, phone_number) VALUES ('$fname', '$mname', '$lname', '$num')";
    mysqli_query($conn, $sql);

    header('location:index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Contact</title>
</head>
<body>
    <section>
        <h2>Add New Contact</h2>
        <form action="" method="post">
            <label>First Name</label> <input type="text" name="first_name" required>
            <label>Middle Name</label><input type="text" name="middle_name">
            <label>Last Name</label><input type="text" name="last_name">
            <label>Phone Number</label><input type="number" name="phone_number" required>
            <button type="submit">Add Contact</button>
        </form> 
    </section>
</body>
</html>
