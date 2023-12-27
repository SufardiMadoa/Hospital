<?php
    require '../../login1/koneksi.php';
    $psien = mysqli_query($koneksi, "SELECT * FROM pasien");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css" media="screen">
        table {font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 11px;}
        input {font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 11px;height: 20px;}
    </style>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/cc5db5fcb8.js" crossorigin="anonymous"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</head>
<body>
    <header>
        <div class="head">
            <div class="kiri">
                
                <div class="image">
                    <img src="logo.png" alt="">
                </div>
                <div class="search">
                    <form action="home.html">
                        <input type="search" placeholder="search your id...">
                        <button><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </div>
            </div>
            <div class="kanan">
                <div class="home">
                   <a href="../home.php"> <i class="fa-solid fa-house" id="ihome" style="cursor: pointer;" ></i></a>
                </div>
                <div class="notif"><a href=""><i class="fa-solid fa-bell"></i></a></div>
                <div class="setting"><a href=""><i class="fa-solid fa-gear"></i></a></div>
                <a href="#"><div class="logout">
                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                </div></a>
            </div>
        </div>
    </header>
<div class="body">
    <div class="Ruangan" style="border:0; padding:0px; width:100%; height:70vh; display: flex; align-items: center; justify-content:space-around;">
        <div class="ruangkiri" style="display: flex;">
         <img src="dokter.png" alt="" style="width: 80%; box-sizing: border-box;">
        </div>
         <div class="ruangkanan" style="border: 1px solid rgba(0, 0, 0, 0.175); box-shadow: 0px 2px 10px 1px;">
             
    <div style="border:0; padding:0px; width:auto; height:auto; display: flex; align-items: center; justify-content: center;">
        <form action="" method="POST" name="form-input-data">
            <table width="760" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr height="46">
                        <td width="10%"> </td>
                        <td width="25%"> </td>
                        <td width="65%"><font color="orange" size="2">Form Input Pasien</font></td>
                </tr>
                <tr height="46">
                    <td> </td>
                    <td>ID Pasien</td>
                    <td><input type="text" name="id_pasien" size="50" maxlength="6" /></td>
                </tr>
                <tr height="46">
                    <td> </td>
                    <td>ID Dokter</td>
                    <td><input type="text" name="id_dokter" size="50" maxlength="6" /></td>
                </tr>
                <tr height="46">
                    <td> </td>
                    <td>Nama</td>
                    <td><input type="text" name="nama" size="50" maxlength="30" /></td>
                </tr>
                <tr height="46">
                    <td> </td>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat" size="50" maxlength="12" /></td>
                </tr>
                <tr height="46">
                    <td> </td>
                    <td>Tanggal Datang </td>
                    <td><input type="date" name="tgl_datang" size="20" maxlength="12" /></td>
                </tr>
                <tr height="46">
                    <td> </td>
                    <td>Keluhan</td>
                    <td><input type="text" name="keluhan" size="50" maxlength="30" /></td>
                </tr>
                <tr height="46">
                    <td> </td>
                    <td> </td>
                    <td><input type="submit" name="submit" value="Submit">   
                        <input type="reset" name="reset" value="Cancel"></td>
                </tr>
            </table>
        </form>
        </div>
        </div>
          <!-- isi identitas dll -->
          
       
    </div>
</div>
    <div class="container"> 
    <!-- ini merupakan footer -->        
    <footer>
        <div class="footer_top">
            <div class="fotkir">
                <img src="logo.png" alt="" style="width: 60px;">
                <h3>Hospital Database</h3>
            </div>
            <div class="fotten">
                <h3>contact</h3>
                <p>Spesialis Saraf</p>
                <p>Spesialis penyakit dalam</p>
                <p>Spesialis Anak </p>
            </div>
            <div class="fotkan">
                <h3>Directori act</h3>
                <p>Petugas</p>
                <p>Pasien</p>
                <p>Dokter </p>
                <p>Ruangan</p>
            </div>
        </div>
        <div class="fotter_bottom">
            <div class="fotleft">
                <p><i class="fa-regular fa-copyright"></i> copyrightByIF-2</p>
            </div>
            <div class="fotright">
                <h3>Follow Us :</h3>
                <p><i class="fa-brands fa-twitter"></i></p>
                <p><i class="fa-brands fa-facebook"></i></p>
                <p><iconify-icon icon="dashicons:whatsapp"></iconify-icon></p>
                <p><iconify-icon icon="formkit:instagram"></iconify-icon></p>
            </div>
        </div>
    </footer> 
       
         
    </div>
    <?php
    require '../../login1/koneksi.php';
    if (isset($_POST['submit'])) {
    $id = $_POST['id_pasien'];
    $id_Dr = $_POST['id_dokter'];
    $nama= $_POST['nama'];
    $alamat=$_POST['alamat'];
    $tgl=$_POST['tgl_datang'];
    $keluhan=$_POST['keluhan'];
    $pasien = mysqli_query($koneksi, "INSERT INTO pasien(ID_Pasien, ID_Dokter, Nama, Alamat, Tgl, Keluhan )VALUES('$id','$id_Dr', '$nama', '$alamat', '$tgl', '$keluhan')");
    header('Location: ../home.php');
    }
?>
</body>
</html>