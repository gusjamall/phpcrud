<?php $member = [
    [
        "Nama" => "Nusaibah",
        "NoPel" => "00001",
        "Level" => "Platinum",
        "Email" => "Biba@gmail.com",
        "gambar" => "Biba.jpg"
    ],
    [
        "Nama" => "Sofhia",
        "NoPel" => "00002",
        "Level" => "Gold",
        "Email" => "Sofhia@gmail.com",
        "gambar" => "Sofhi.jpg"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>Data Pelanggan</title>
</head>

<body>
    <h1>Data Pelanggan</h1>
    <?php foreach ($member as $mem) { ?>
        <ul>
            <li>
                <img src="img/<?= $mem["gambar"]; ?>">
                <!-- <img src="img/"> -->
            </li>
            <li>Nama : <?php echo $mem["Nama"]; ?></li>
            <li>Nomor Pelanggan : <?php echo $mem["NoPel"]; ?></li>
            <li>Level : <?php echo $mem["Level"]; ?></li>
            <li>Email : <?php echo $mem["Email"]; ?></li>
        </ul>
    <?php } ?>
</body>

</html>