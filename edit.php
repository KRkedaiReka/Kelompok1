<?php

    include "connect.php";
    $user_id = $_POST['id'];
    $nama = $_POST['inputnama'];
    $email =  $_POST['inputemail'];
    $no_hp =  $_POST['inputnohp'];
    $password =  $_POST['inputpwd'];

    mysqli_query($connect,"update pengguna set nama='$nama', email='$email', no_hp='$no_hp', pin='$password' where id_user = $user_id");
    header("location:book.php?id=$user_id");
?>
