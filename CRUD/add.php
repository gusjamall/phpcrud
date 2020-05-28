<?php
require "function.php";

if (isset($_POST["add"])) {

    if (tambah($_POST) > 0) {
        echo " <script>
        alert(' Data Successfully Added');
        document.location.href='index.php';
        </script> 
        ";
    } else {
        echo " - Fail to Update Data !";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Member</title>
</head>

<body>
    <h1>Add Member</h1>
    <form action="" method="POST">
        <ul>
            <li>
                <label for="id"> ID :<input type="text" name="id" autofocus required></label>
            </li>
            <li>
                <label for="name">Name : <input type="text" name="name" required></label>
            </li>
            <li>
                <label for="level">Level : <input type="text" name="level" required></label>
            </li>
            <li>
                <label for="email">Email : <input type="text" name="email" required></label>
            </li>
            <li>
                <label for="image">Image : <input type="text" name="image" required></label>
            </li>
            <li><button type="submit" name="add">Save</button></li>
        </ul>
    </form>
</body>

</html>