<?php
require 'function.php';


$id = $_GET['id'];

// $query = query("DELETE FROM user WHERE id=$id");

if (hapus($id) > 0) {
    echo " <script>
    alert(' Data Deleted Successfully');
    document.location.href='index.php';
    </script> 
    ";
} else {
    echo "Deletion Fail!!!";
}
