<?php $member = [
    ["Nusaibah", "00001", "Platinum"],
    ["Sofhia", "00002", "Gold"]
]; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Data Pelanggan</title>
</head>

<body>
    <H1>Data Pelanggan</H1>

    <?php foreach ($member as $mem) { ?>
        <ul>
            <li> <?php echo $mem[0]; ?></li>
            <li> <?php echo $mem[1]; ?></li>
            <li> <?php echo $mem[2]; ?></li>
        </ul>

    <?php } ?>


</body>

</html>