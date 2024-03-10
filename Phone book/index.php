<?php
require "./connect.php";

// Fetch contacts from the database
$sql = "SELECT * FROM contacts";
$result = mysqli_query($conn, $sql);
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phone Book</title>
</head>
<body>
    <section>
        <h2>Phone Book</h2>
        <a href="add_contact.php">Add New Contact</a>
        
        <ul>
            <?php foreach ($rows as $contact) : ?>
                <li>
                    <?php echo "{$contact['first_name']} {$contact['middle_name']} {$contact['last_name']} {$contact['phone_number']}"; ?>
                    
                    <form action="edit_contact.php" method="post" style="display: inline;">
                        <input type="hidden" name="id" value="<?php echo $contact['id']; ?>">
                        <button type="submit">Edit</button>
                    </form>
                    
                    <form action="delete_contact.php" method="post" style="display: inline;">
                        <input type="hidden" name="id" value="<?php echo $contact['id']; ?>">
                        <button type="submit">Delete</button>
                    </form>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>
</body>
</html>