<?php

require 'function.php';

$hasil = query("SELECT * FROM user");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pelanggan</title>
</head>

<body>

    <h1>Data Pelanggan</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>#</th>
            <th>Action</th>
            <th>Image</th>
            <th>ID</th>
            <th>Name</th>
            <th>Level</th>
            <th>Email</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($hasil as $has) { ?>
            <tr>
                <td><?= $i; ?>.</td>
                <td>
                    <a href="">Edit </a> /
                    <a href=""> Delete</a>
                </td>
                <td><img src="img/<?= $has["image"]; ?>"></td>
                <td><?= $has["id"]; ?></td>
                <td><?= $has["name"] ?></td>
                <td><?= $has["level"] ?></td>
                <td><?= $has["email"] ?></td>
            </tr>
            <?php $i++; ?>
        <?php } ?>
    </table>

</body>

</html>