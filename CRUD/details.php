<?php

require "function.php";

$id = $_GET['id'];

$query = query("SELECT * FROM user WHERE id=$id");
// var_dump($query);

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>User Details</title>
</head>

<body>

    <h1>User Details</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Image</th>
            <th>Nama</th>
            <th>ID</th>
            <th>Email</th>
            <th>Level</th>
            <th>Action</th>
        </tr>
        <tr>
            <td><img src="img/<?= $query["image"]; ?>" alt=""></td>
            <td><?= $query["name"]; ?></td>
            <td><?= $query["id"]; ?></td>
            <td><?= $query["email"]; ?></td>
            <td><?= $query["level"] ?></td>
            <td><a href="">Save</a> |
                <a href="index.php">Cancel</a> |
                <a href="">Delete</a>
            </td>
        </tr>
    </table>

</body>

</html>