<?php
if (!isset($_GET["Nama"])) {
    header("location:getpost.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>

    <ul>
        <li><img src="img/<?= $_GET["gambar"] ?>"></li>
        <li><?= $_GET["Nama"]; ?></li>
        <li><?= $_GET["NoPel"]; ?></li>
        <li><?= $_GET["Email"]; ?></li>
        <li><?= $_GET["Level"]; ?></li>

    </ul>
    <br>

    <a href="getpost.php">Return</a>
</body>

</html>