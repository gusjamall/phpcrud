<?php

//connect to db
$connect = mysqli_connect("localhost", "root", "", "pelanggan");

function query($string)
{
    //declare global variable
    global $connect;
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
    global $connect;
    $id = htmlspecialchars($string['id']);
    $name = htmlspecialchars($string['name']);
    $level = htmlspecialchars($string['level']);
    $email = htmlspecialchars($string['email']);
    $image = htmlspecialchars($string['image']);


    $query = ("INSERT INTO user VALUES (null,'$id','$name','$level','$email','$image')");


    // mysqli_query($connect, $query);
    // echo mysqli_error($connect);

    if (!mysqli_query($connect, $query)) {
        echo "Error found>> " . mysqli_error($connect);
    }
    return mysqli_affected_rows($connect);
}

function hapus()
{
    global $connect;
}
