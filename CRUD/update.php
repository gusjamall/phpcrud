<?php
require "function.php";

$id = $_GET['id'];
$query = query("SELECT * FROM user WHERE id=$id");

if (isset($_POST["update"])) {
    if (update($_POST) > 0) {
        echo " <script>
        alert(' Data Successfully Updated !');
        document.location.href='index.php';
        </script>
        ";
    } else {
        echo " - Data Update fail !!! ";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Member</title>
</head>

<body>
    <h1>Update Member</h1>
    <form action="" method="POST">
        <ul>
            <input type="hidden" name="nomor" value="<?= $query['nomor']; ?>">

            <li>
                <label for="id"> ID :<input type="text" name="id" autofocus required value="<?= $query['id']; ?>"></label>
            </li>
            <li>
                <label for="name">Name : <input type="text" name="name" required value="<?= $query['name']; ?>"></label>
            </li>
            <li>
                <label for="level">Level : <input type="text" name="level" required value="<?= $query['level']; ?>"></label>
            </li>
            <li>
                <label for="email">Email : <input type="text" name="email" required value="<?= $query['email']; ?>"></label>
            </li>
            <li>
                <label for="image">Image : <input type="text" name="image" required value="<?= $query['image']; ?>"></label>
            </li>
            <br>
            <button type="submit" name="update">Save Change</button>
            <br>
            <a href="index.php">Cancel</a>
        </ul>
    </form>
</body>

</html>