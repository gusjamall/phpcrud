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

    <ul>
        <li><img src="img/<?= $query["image"]; ?>" alt=""></li>
        <li><?= $query["name"]; ?></li>
        <li><?= $query["id"]; ?></li>
        <li><?= $query["email"]; ?></li>
        <li><?= $query["level"] ?></li>
        <li>
            <a href="update.php?id=<?= $id ?>">Update</a> |
            <a href="index.php">Cancel</a> |
            <a href="delete.php?id=<?= $id ?>" onclick="return confirm('hapus ga?')" ;>Delete</a>
        </li>
        </li>
    </ul>
</body>

</html>