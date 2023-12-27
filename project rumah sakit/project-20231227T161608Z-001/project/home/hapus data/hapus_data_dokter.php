<?php
    require '../../login1/koneksi.php';
    $id_dokter = $_GET['ID_Dokter'];
    $result = mysqli_query($koneksi, "DELETE FROM dokter WHERE ID_Dokter='$id_dokter'");
    header('Location: ../home.php');
?>