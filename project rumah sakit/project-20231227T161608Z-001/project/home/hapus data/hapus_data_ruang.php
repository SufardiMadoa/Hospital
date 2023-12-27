<?php
    require '../../login1/koneksi.php';
    $id_ruang = $_GET['ID_Ruang'];
    $result = mysqli_query($koneksi, "DELETE FROM ruangan WHERE ID_Ruang='$id_ruang'");
    header('Location: ../home.php');
?>