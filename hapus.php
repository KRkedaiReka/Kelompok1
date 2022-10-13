<?php
include "connect.php";
$user_id = $_POST['id'];
mysqli_query($connect,"delete from pengguna where id_user = '$user_id'");
header("location:index.php");
?>