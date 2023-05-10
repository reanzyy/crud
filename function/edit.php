<?php

require 'connect.php';

$id = $_POST['id'];
$username = $_POST['username'];
$name = $_POST['name'];
$jk = $_POST['jk'];
$ttl = $_POST['ttl'];
$address = $_POST['address'];
$email = $_POST['email'];
$no_telp = $_POST['no_telp'];

// Update Data

$cek = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM users WHERE username='$username'"));

if ($cek > 0) {
    header('location:../index.php?pesan=duplikat');
} elseif (empty($id && $name && $jk && $ttl && $address && $email && $no_telp)) {
    header('location:../index.php?pesan=failed');
} else {
    mysqli_query($conn, "UPDATE users SET name='$name' , jk='$jk', ttl='$ttl', address='$address',
email='$email', no_telp='$no_telp' WHERE id='$id' ");
    header("location:../index.php?pesan=edit");
}


// header('location:../index.php');