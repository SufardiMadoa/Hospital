<?php
    require '../../login1/koneksi.php';
    $id_pasien = $_GET['ID_Pasien'];
    $result = mysqli_query($koneksi, "DELETE FROM pasien WHERE ID_Pasien='$id_pasien'");
    header('Location: ../home.php');
?>