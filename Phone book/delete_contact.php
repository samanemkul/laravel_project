<?php
require "./connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $id = $_POST['id'];
    $sql = "SELECT * FROM contacts WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $contact = mysqli_fetch_assoc($result);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['confirm_delete'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM contacts WHERE id = $id";
    mysqli_query($conn, $sql);

    header('location:index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Contact</title>
</head>
<body>
    <section>
        <h2>Delete Contact</h2>
        <p>Are you sure you want to delete the contact below?</p>
        <ul>
            <li><?php echo "{$contact['first_name']} {$contact['middle_name']} {$contact['last_name']} {$contact['phone_number']}"; ?></li>
        </ul>
        <form action="" method="post">
            <input type="hidden" name="id" value="<?php echo $contact['id']; ?>">
            <button type="submit" name="confirm_delete">Yes, Delete</button>
            <a href="index.php">Cancel</a>
        </form>
    </section>
</body>
</html>