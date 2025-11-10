<?php
$host = 'localhost';
$user = "Arta"
$pass = "";
$db = "dtb_percobaan";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
