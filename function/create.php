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

// Create data
$cek = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM users WHERE username='$username'"));

if ($cek > 0) {
  header('location:../create.php?pesan=duplikat');
} elseif (empty($username && $name && $jk && $ttl && $address && $email && $no_telp)) {
  header('location:../create.php?pesan=gagal');
} else {
  mysqli_query($conn, "INSERT INTO users VALUES('$id' ,'$username' ,'$name' ,'$jk' ,'$ttl' , '$address' , '$email' , '$no_telp')");
  header("location:../index.php?pesan=success");
}