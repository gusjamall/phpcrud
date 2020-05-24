<!DOCTYPE html>
<html lang="en">

<head>
    <title>Array</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;

            float: left;
            margin: 4px;
        }

        .clear {
            clear: both;
        }
    </style>
</head>

<body>
    <?php $angka = [1, 2, 3, 4, 5, 6, 7, 9]; ?>
    <?php for ($i = 0; $i < count($angka); $i++) { ?>

        <div class="kotak"><?php echo $angka[$i]; ?></div>
    <?php } ?>

    <div class="clear"></div>
    <?php foreach ($angka as $ang) { ?>
        <div class="kotak"><?php echo $ang; ?></div>
    <?php } ?>

</body>

</html>