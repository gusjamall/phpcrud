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

    <a href="add.php">Add User</a>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>#</th>
            <th>Action</th>
            <th>Image</th>
            <th>Name</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($hasil as $has) { ?>
            <tr>
                <td><?= $i; ?>.</td>
                <td>
                    <a href="details.php?id=<?= $has["id"]; ?>">Details</a>

                </td>
                <td><img src="img/<?= $has["image"]; ?>"></td>
                <td><?= $has["name"] ?></td>
            </tr>
            <?php $i++; ?>
        <?php } ?>
    </table>

</body>

</html>