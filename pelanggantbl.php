<?php

$mysqli = mysqli_connect("localhost", "root", "", "pelanggan");
$query = mysqli_query($mysqli, "SELECT * FROM user");


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
            <th>No.</th>
            <th>Action</th>
            <th>Image</th>
            <th>ID</th>
            <th>Name</th>
            <th>Level</th>
            <th>Email</th>
        </tr>
        <?= $i = 1; ?>
        <?php while ($baris = mysqli_fetch_assoc($query)) { ?>
            <tr>
                <td><?= $i; ?>.</td>
                <td>
                    <a href="">Edit </a> /
                    <a href=""> Delete</a>
                </td>
                <td><img src="img/<?= $baris["image"]; ?>"></td>
                <td><?= $baris["id"]; ?></td>
                <td><?= $baris["name"] ?></td>
                <td><?= $baris["level"] ?></td>
                <td><?= $baris["email"] ?></td>
            </tr>
            <?= $i++; ?>
        <?php } ?>
    </table>

</body>

</html>