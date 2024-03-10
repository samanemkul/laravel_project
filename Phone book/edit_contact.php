<?php
require "./connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $id = $_POST['id'];
    $sql = "SELECT * FROM contacts WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $contact = mysqli_fetch_assoc($result);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
    $id = $_POST['id'];
    $fname = $_POST['first_name'];
    $mname = $_POST['middle_name'];
    $lname = $_POST['last_name'];
    $num = $_POST['phone_number'];

    $sql = "UPDATE contacts SET first_name='$fname', middle_name='$mname', last_name='$lname', phone_number='$num' WHERE id=$id";
    mysqli_query($conn, $sql);

    header('location:index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Contact</title>
</head>
<body>
    <section>
        <h2>Edit Contact</h2>
        <form action="" method="post">
            <input type="hidden" name="id" value="<?php echo $contact['id']; ?>">
            <label>First Name</label> <input type="text" name="first_name" value="<?php echo $contact['first_name']; ?>" required>
            <label>Middle Name</label><input type="text" name="middle_name" value="<?php echo $contact['middle_name']; ?>">
            <label>Last Name</label><input type="text" name="last_name" value="<?php echo $contact['last_name']; ?>">
            <label>Phone Number</label><input type="number" name="phone_number" value="<?php echo $contact['phone_number']; ?>" required>
            <button type="submit" name="update">Update Contact</button>
        </form> 
    </section>
</body>
</html>
