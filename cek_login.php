<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'connect.php';
 
// menangkap data yang dikirim dari form login
$username = $_POST['inputid'];
$password = $_POST['inputpin'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($connect,"select * from pengguna where username='$username' and pin='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['pin'] = $password;
    
$sql = mysqli_query($connect,"select id_user from pengguna where username='$username'");
$d = mysqli_fetch_array($sql);
$id = $d['id_user'];
	header("location:book.php?id=$id");
}else{
    $error_message = "Incorrect Email or Password!!!";
	header("location:index.php?pesan=gagal");
}
?>