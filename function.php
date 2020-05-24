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
    $baskom = [];
    //start looping the data using fetch associate
    while ($data = mysqli_fetch_assoc($hasil)) {
        //put each array to basket 
        $baskom[] = $data;
    }

    return $baskom;
}
