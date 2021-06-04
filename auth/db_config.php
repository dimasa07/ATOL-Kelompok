<?php

// set default timezone
date_default_timezone_set("Asia/Bangkok");

// Koneksi
$host = "localhost";
$user = "root";
$pass = "";
$db = "db_transportasi";

$mysqli = new mysqli($host, $user, $pass, $db);

if ($mysqli->connect_errno) {
  echo "Koneksi Gagal !". $mysqli->connect_errno;
  die;
} else {
  // Berhasil Konek 
}
?>
