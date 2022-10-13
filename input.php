<?php
include "connect.php";
$username = $_POST['inputid'];
$nama = $_POST['inputnama'];
$email =  $_POST['inputemail'];
$no_hp =  $_POST['inputnohp'];
$password =  $_POST['inputpwd'];

$sql = "INSERT INTO pengguna_1 (username, nama, email, no_hp, pin) VALUES ('$username', '$nama', '$email', '$no_hp', '$password')";
$data = mysqli_query($connect,"select id_user from pengguna_1 where username='$username'");
$d = mysqli_fetch_array($data);
$id = $d['id_user'];

if (mysqli_query($connect,$sql)){
    header("location:book.php?id=$id");
}
else {
    echo "gagal terhubung";
}
?>