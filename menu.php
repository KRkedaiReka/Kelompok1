<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Cinema Booking Site</title>
      <link rel="stylesheet" href="sty.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<?php

    include "connect.php";
    $username = $_GET['id'];
    $data = mysqli_query($connect,"select * from pengguna where id_user='$username'");
    while($d = mysqli_fetch_array($data)){
?>
<body>
<div class="wrapper">
         <div class="title-text">
            <div class="title signup">
               Edit Profile Form
            </div>
         </div>
         <div class="form-container">
            <div class="form-inner">
               <form action="edit.php" method="POST" class="signup">
                    <div class="field">
                        <input type="hidden" name="id" value="<?php echo $d['id_user']; ?>">
                        <input type="text" name="inputnama" placeholder="Nama" value="<?php echo $d['nama']; ?>">
                    </div>
                    <div class="field">
                        <input type="email" name="inputemail" placeholder="E-Mail" value="<?php echo $d['email']; ?>">
                    </div>
                    <div class="field">
                        <input type="number" name="inputnohp" placeholder="Nomor HP" value="<?php echo $d['no_hp']; ?>">
                    </div>
                    <div class="field">
                        <input type="password" name="inputpwd" placeholder="Password" value="<?php echo $d['pin']; ?>">
                    </div>
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" value="Update Profiles">
                  </div>
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input action="hapus.php" type="submit" value="Delete Profiles">
                  </div>
               </form>
            </div>
         </div>
      </div>

<?php } ?>
</body>