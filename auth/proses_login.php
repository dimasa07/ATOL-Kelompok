<?php
session_start();

// apabila login sebagai admin
if(!empty($_GET['status'])){
	if($_GET['status']=="admin"){
		$_SESSION['name']="Admin";
		$_SESSION['username']="admin";
		$_SESSION['status']="admin";
	//}else if($_GET['status']=="user"){
		//$_SESSION['name']="User";
		//$_SESSION['username']="user";
		//$_SESSION['status']="user";
	//}
	header("location:../index.php");
		exit;
	}
}

//import file config untuk koneksi ke database
require('db_config.php');

$username=$_POST['username'];
$password=$_POST['password'];

// jika username atau password tidak di isi
if($username == "" || $password == ""){
    header("location:login.php?pesan=gagal");
    //Menghentikan proses kebawah
    exit;
}
//Mengubah password menjadi MD5
$password_new = md5($password);

// Cari data ke dalam db dengan username dan password yang sama
$data = mysqli_query($mysqli,"select * from user where username='$username' and password='$password_new'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek > 0){
	$res = mysqli_fetch_assoc($data);
	$_SESSION['name'] = $res['fullname'];
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "user";
    header("location:../index.php");
}else{
    header("location:login.php?pesan=tidak_cocok");
}
?>