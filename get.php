<!DOCTYPE html>
<html lang="en">

<head>
    <title>Daftar Member</title>

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
</head>

<body>
    <h1>Daftar Member</h1>

    <?php foreach ($member as $mem) { ?>
        <ul>
            <li>
                <a href="profile.php?Nama=<?= $mem["Nama"]; ?>&Email=<?= $mem["Email"]; ?>&NoPel=<?= $mem["NoPel"]; ?>&Level=<?= $mem["Level"]; ?>&gambar=<?= $mem["gambar"]; ?>   ">
                    <?= $mem["Nama"]; ?>
                </a>
            </li>

        </ul>
    <?php } ?>

</body>

</html>