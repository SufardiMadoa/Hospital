<?php
    require '../../login1/koneksi.php';
    $id_petugas = $_GET['ID_petugas'];
    $result = mysqli_query($koneksi, "DELETE FROM petugas WHERE ID_petugas='$id_petugas'");
    header('Location: ../home.php');
?>