<?php
//import file config untuk koneksi ke database
require('db_config.php');

$username=$_POST['username'];
$fullname=$_POST['fullname'];
$password=$_POST['password'];
$password2=$_POST['confirm_password'];

//form validasi
if($username == "" || $fullname == "" || $password == "" || $password2 == "" ){
    header("location:register.php?pesan=gagal");
    //Menghentikan proses kebawah
    die;
}

//Jika form password dan ulangi password berbeda
if ($password != $password2){
    header("location:register.php?pesan=password");

    //Menghentikan proses kebawah
    die;
}

//cek username
$data = mysqli_query($mysqli,"select * from user where username='$username'");
$cek = mysqli_num_rows($data);

//Jika username sudah terdaftar makan kembali ke form pendaftaran
if($cek > 0){
    header("location:register.php?pesan=username");
    //Menghentikan proses kebawah
    die;
}


//Membuat MD5 Password
$password_new = md5($password);

// insert data ke database
$result = mysqli_query($mysqli,
    "INSERT INTO `user` (`username`,`fullname`, `password`) VALUES ('$username','$fullname', '$password_new');");

if ($result) {
    //Jika berhasil
    header("location:login.php?pesan=sukses_register");
    exit;
} else {
    echo "Error: "  . "<br>" .  mysqli_error($mysqli);
}


