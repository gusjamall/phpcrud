<?php

function koneksi()
{
    return mysqli_connect("localhost", "root", "", "pelanggan");
}

function query($string)
{
    //declare global variable
    $connect = koneksi();
    // global $connect;

    //query db
    $hasil = mysqli_query($connect, $string);
    //prepare free baskom

    if (mysqli_num_rows($hasil) == 1) {
        return mysqli_fetch_assoc($hasil);
    }

    $baskom = [];
    //start looping the data using fetch associate
    while ($data = mysqli_fetch_assoc($hasil)) {
        //put each array to basket 
        $baskom[] = $data;
    }

    return $baskom;
}

function tambah($string)
{
    $connect = koneksi();
    $id = htmlspecialchars($string['id']);
    $name = htmlspecialchars($string['name']);
    $level = htmlspecialchars($string['level']);
    $email = htmlspecialchars($string['email']);
    $image = htmlspecialchars($string['image']);


    $query = ("INSERT INTO user VALUES (null,'$id','$name','$level','$email','$image')");


    if (!mysqli_query($connect, $query)) {
        echo "Error found>> " . mysqli_error($connect);
    }
    return mysqli_affected_rows($connect);
}

function hapus($string)
{
    $connect = koneksi();

    $query = ("DELETE FROM user WHERE id=$string");

    mysqli_query($connect, $query);

    return mysqli_affected_rows($connect);
}

function update($string)
{
    $connect = koneksi();
    $nomor = $string['nomor'];
    $id = htmlspecialchars($string['id']);
    $name = htmlspecialchars($string['name']);
    $level = htmlspecialchars($string['level']);
    $email = htmlspecialchars($string['email']);
    $image = htmlspecialchars($string['image']);

    $query = "UPDATE user SET id='$id', name='$name', level='$level' , email='$email',image='$image' where nomor='$nomor'";

    // mysqli_query($connect, $query);
    if (!mysqli_query($connect, $query)) {
        echo "Error found>> " . mysqli_error($connect);
    }
    return mysqli_affected_rows($connect);
    // UPDATE `user` SET `level` = 'Gold' WHERE `user`.`nomor` = 9;

}
