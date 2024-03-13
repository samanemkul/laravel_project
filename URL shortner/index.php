<?php
require "./connect.php";
$sql = "SELECT * FROM url_short";
$result = mysqli_query($conn, $sql);
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC)
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
            <form action="search.php" method="post">
                <h1>URL shortner</h1>
                <label for="">Enter a URL to shorten:</label><br>
                <input type="text" name="long_url" id="">
                <br>
                <button type="submit">Shorten the URL</button>
                <button type="submit">Cancel</button>
            </form>
        </section>
    </main>
    
</body>
</html>