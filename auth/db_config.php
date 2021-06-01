<?php
// set default bahasa
if(!isset($_SESSION['lang'])){
	$_SESSION['lang'] = "indonesia";
}

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
} else {
  // Berhasil Konek 
}
?>
