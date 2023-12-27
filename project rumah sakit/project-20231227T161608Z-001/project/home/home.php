
<?php
    require '../login1/koneksi.php';
    $petugas = mysqli_query($koneksi, "SELECT * FROM petugas");
    $pasien = mysqli_query($koneksi, "SELECT * FROM Pasien");
    $dokter = mysqli_query($koneksi, "SELECT * FROM Dokter");
    $ruang = mysqli_query($koneksi, "SELECT * FROM Ruangan");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                    <form action="home.php" method="POST">
                        <input type="search" name="keyword" placeholder="search your id...">
                        <button name="cari"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>

                </div>
            </div>
            <div class="kanan">
                <div class="home">
                    <i class="fa-solid fa-house" id="ihome" style="cursor: pointer;"></i>
                </div>
                <div class="notif"><a href=""><i class="fa-solid fa-bell"></i></a></div>
                <div class="setting"><a href=""><i class="fa-solid fa-gear"></i></a></div>
                <a href="../login1/logout.php"><div class="logout">
                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                </div></a>
            </div>
        </div>
            
            
    </header>
    <div class="body">
        
          <!-- isi identitas dll -->
          
        <aside>
            <div class="listtable">
                <div class="kotakatas">
                    <div class="profil">
                        <div class="isiprofil2">
                            <i class="fa-regular fa-circle-user"></i>
                        </div>
                        <div class="isiprofil2">
                            <p></p>
                           
                        </div>
                    </div> 
                    
                    <h4><i class="fa-solid fa-chevron-down"> </i> TABLE</h4>
                    <br>
                    <div class="nametable">
                    <div class="table"><a href="#" id="Petugas"> <p><i class="fa-solid fa-clipboard-user"></i>Petugas</p></a></div>
                    <div class="table"><a href="#" id="Pasien"> <p><i class="fa-solid fa-user-injured"></i>Pasien</p></a></div> 
                    <div class="table"><a href="#" id="Dokter"> <p><i class="fa-solid fa-user-doctor"></i>Dokter</p></a></div> 
                    <div class="table"><a href="#" id="Ruang"> <p><i class="fa-solid fa-bed"></i>Ruangan</p></a></div> 
                     </div>
                     <div class="diagram">
                        <img src="diagram1.png" alt="">
                     </div>
                </div>
            </div>
        </aside>
<!-- halaman beranda -->
        <main>
            <div class="ubah1" id="home">
                <div class="slider">
                    <div class="slides">
                        <input type="radio" name="radio-btn" id="radio1">
                        <input type="radio" name="radio-btn" id="radio2">
                        <input type="radio" name="radio-btn" id="radio3">
                        <input type="radio" name="radio-btn" id="radio4">
        
                        <div class="slide first">
                            <img src="1.jpg" alt="">
                        </div>
                        <div class="slide">
                            <img src="2.jpg" alt="">
                        </div>
                        <div class="slide">
                            <img src="3.jpg" alt="">
                        </div>
                        <div class="slide">
                            <img src="4.jpg" alt="">
                        </div>
        
        
                        <div class="navigation-auto">
                            <div class="auto-btn1"></div>
                            <div class="auto-btn2"></div>
                            <div class="auto-btn3"></div>
                            <div class="auto-btn4"></div>
                        </div>
                    </div>
                    
                    <div class="navigation-manual">
                        <label for="radio1" class="manual-btn"></label>
                        <label for="radio2" class="manual-btn"></label>
                        <label for="radio3" class="manual-btn"></label>
                        <label for="radio4" class="manual-btn"></label>
                    </div>
                </div>
                <div class="content1">
                    <div class="cardkes">
                        <div class="tooth">
                            <h1><i class="fa-solid fa-tooth" style="color: #ffffff;"></i></h1>
                            <p>7 makanan yang mengancam kesehatan gigi</p>
                            <form action="">
                                <button>lihat..</button>
                            </form>
                        </div>
                        <div class="suhu">
                            <h1><i class="fa-solid fa-temperature-low" style="color: #ffffff;"></i></h1>
                            <p>Berapa Suhu Normal ?</p>
                            <form action="">
                                <button>lihat..</button>
                            </form>
                        </div>
                        <div class="plaster">
                            <h1><iconify-icon icon="solar:adhesive-plaster-outline" style="color: white;" width="30" height="30"></iconify-icon></h1>
                            <p>Pertolongan pertama pada luka bakar </p>
                            <form action="">
                                <button>lihat..</button>
                            </form>
                        </div>
                        <div class="virus">
                            <h1><i class="fa-solid fa-virus-covid" style="color: #ffffff;"></i></h1>
                            <p>6 cara sederhana cegah <br> penyebaran virus corona</p>
                            <form action="">
                                <button>lihat..</button>
                            </form>
                        </div>
                    </div>
                    <head>

                    <?php 
require '../login1/koneksi.php';
$kataKunci = isset($_POST['keyword']) ? $_POST['keyword'] : '';

// Periksa apakah keyword pencarian telah diberikan
if (isset($_POST['cari'])) {
  // Query SELECT untuk mencari data berdasarkan kata kunci
  $ptgs = "SELECT * FROM petugas WHERE Nama LIKE '%$kataKunci%' OR ID_petugas LIKE '%$kataKunci%'";
  $query = "SELECT * FROM pasien WHERE Nama LIKE '%$kataKunci%'OR ID_Pasien LIKE '%$kataKunci%' OR ID_Dokter LIKE '%$kataKunci%'";
  $Dr = "SELECT * FROM dokter WHERE Nama LIKE '%$kataKunci%' OR ID_Dokter LIKE '%$kataKunci%' OR Poli LIKE '%$kataKunci%'";
  $Rngn = "SELECT * FROM ruangan WHERE ID_Ruang LIKE '%$kataKunci%' OR Nama_Ruang LIKE '%$kataKunci%'";
  // Eksekusi query
  $result = mysqli_query($koneksi, $query);
  $petugas = mysqli_query($koneksi, $ptgs);
  $dokter = mysqli_query($koneksi, $Dr);
  $ruangan = mysqli_query($koneksi, $Rngn);
  // Periksa apakah query berhasil dieksekusi
  if ($result) {
    // Periksa apakah ada baris data yang ditemukan
    if (mysqli_num_rows($result) > 0) {
      echo "<div class='hasil'>";
      echo "<div class='search-results'>";
      echo "<h2>Hasil Pencarian Pasien</h2>";
      // Looping untuk mengambil data
      while ($row = mysqli_fetch_assoc($result)) {
        // Akses data dengan menggunakan nama kolom
        $id = $row['ID_Pasien'];
        $id_D = $row['ID_Dokter'];
        $nama = $row['Nama'];
        $alamat = $row['Alamat'];
        $tgl = $row['Tgl'];
        $keluhan = $row['Keluhan'];

        // Tampilkan data
        echo "<table>";
        echo "<tr>";
        echo "<td>ID </td><td> $id</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>ID Dokter </td><td> $id_D</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Nama </td><td> $nama</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Alamat</td> <td>$alamat</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Tanggal Kunjungan </td><td> $tgl</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Keluhan </td><td> $keluhan</td>";
        echo "</tr>";
        echo "<hr>";
        echo "</table>";
      }
      echo "</div>";
      echo "</div>";
    }
  } 
  
  // Periksa apakah query petugas berhasil dieksekusi
  if ($petugas) {
    // Periksa apakah ada baris data yang ditemukan
    if (mysqli_num_rows($petugas) > 0) {
      echo "<div class='hasil'>";
      echo "<div class='search-results'>";
      echo "<h2>Hasil Pencarian Petugas</h2>";
      // Looping untuk mengambil data
      while ($row = mysqli_fetch_assoc($petugas)) {
        // Akses data dengan menggunakan nama kolom
        $id = $row['ID_petugas'];
        $nama = $row['Nama'];
        $alamat = $row['Alamat'];
        $hp = $row['No_tlp'];

        // Tampilkan data
        echo "<table>";
        echo "<tr>";
        echo "<td>ID </td><td> $id</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Nama Petugas </td><td> $nama</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Alamat Petugas </td><td> $alamat</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>No Telepon</td> <td>$hp</td>";
        echo "</tr>";
        echo "<hr>";
        echo "</table>";
      }
      echo "</div>";
      echo "</div>";
    }
  }
  
  // Periksa apakah query dokter berhasil dieksekusi
  if ($dokter) {
    // Periksa apakah ada baris data yang ditemukan
    if (mysqli_num_rows($dokter) > 0) {
      echo "<div class='hasil'>";
      echo "<div class='search-results'>";
      echo "<h2>Hasil Pencarian Dokter</h2>";
      // Looping untuk mengambil data
      while ($row = mysqli_fetch_assoc($dokter)) {
        // Akses data dengan menggunakan nama kolom
        $id = $row['ID_Dokter'];
        $nama = $row['Nama'];
        $alamat = $row['Alamat'];
        $poli = $row['Poli'];

        // Tampilkan data
        echo "<table>";
        echo "<tr>";
        echo "<td>ID </td><td> $id</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Nama Dokter </td><td> $nama</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Alamat Dokter </td><td> $alamat</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Poli</td> <td>$poli</td>";
        echo "</tr>";
        echo "<hr>";
        echo "</table>";
      }
      echo "</div>";
      echo "</div>";
    }
  }
  
  // Periksa apakah query ruangan berhasil dieksekusi
  if ($ruangan) {
    // Periksa apakah ada baris data yang ditemukan
    if (mysqli_num_rows($ruangan) > 0) {
      echo "<div class='hasil'>";
      echo "<div class='search-results'>";
      echo "<h2>Hasil Pencarian Ruangan</h2>";
      // Looping untuk mengambil data
      while ($row = mysqli_fetch_assoc($ruangan)) {
        // Akses data dengan menggunakan nama kolom
        $id = $row['ID_Ruang'];
        $nama = $row['Nama_Ruang'];

        // Tampilkan data
        echo "<table>";
        echo "<tr>";
        echo "<td>ID Ruangan </td><td> $id</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Nama Ruangan </td><td> $nama</td>";
        echo "</tr>";
        echo "<hr>";
        echo "</table>";
      }
      echo "</div>";
      echo "</div>";
    }
  }

  // Tampilkan pesan jika tidak ada data yang ditemukan
  if (mysqli_num_rows($result) <= 0 && mysqli_num_rows($petugas) <= 0 && mysqli_num_rows($dokter) <= 0 && mysqli_num_rows($ruangan) <= 0) {
    echo "<div class='hasil'>";
    echo "<div class='search-results'>";
    echo "<p>Data tidak ditemukan.</p>";
    echo "</div>";
    echo "</div>";
  }
} 
?>

<script>
  // Tampilkan halaman pencarian jika ada hasil yang ditemukan
  var hasilDiv = document.querySelector('.hasil');
  if (hasilDiv && hasilDiv.children.length > 0) {
    hasilDiv.style.display = 'flex';
  }
</script>


<div class="body">
    
    <div class="contenthome">
        
        <div class="diagrams1">
            <div class="kihead"><p>Penggunaan ruangan</p>
                <div class="ruang">
                    <div class="isiruang">
                    </div>
                </div>
                <h3>85%</h3>
                <p>Ruangan terpakai</p>
            </div>
            
        </div>
        <div class="diagrams2">
            <div class="kihead"><p>Pasien Usia 5-10 tahun</p>
                <div class="ruang">
                    <div class="isiruang">
                    </div>
                </div>
                <h3>40%</h3>
                <p>Dirawat Inap</p>
            </div>
            
        </div>
        <div class="diagrams3">
            <div class="kihead"><p>Pasien Luka Berat</p>
                <div class="ruang">
                    <div class="isiruang">
                    </div>
                </div>
                <h3>60%</h3>
                <p>Dirawat Inap</p>
            </div>
        </div>
        <div class="diagrams4">
            <div class="kihead"><p>Penggunaan Kursi Roda</p>
                <div class="ruang">
                    <div class="isiruang">
                    </div>
                </div>
                <h3>50%</h3>
                <p>Kursi terpakai</p>
            </div>
         </div>
    </div>
</div>
</div>
                
        </div>
<!-- halaman petugas -->
        <div class="ubah2" id="ubah2">
            <div class="headcontent">
                <div class="diagram1">
                    <div class="kihead"><p>Penggunaan ruangan</p>
                        <h3><i class="fa-solid fa-bed"></i>220</h3>
                        <p>Ruangan terpakai</p>
                    </div>
                    <div class="kahead"><h4>85%<i class="fa-solid fa-arrow-up-long"></i></h4></div>
                </div>
                <div class="diagram2">
                    <div class="kihead"><p>Ruangan Tersedia</p>
                        <h3><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 15 15"><path fill="currentColor" d="M0 15h1v-4h13v4h1V4h-1v3H1V0H0v15Z"/><path fill="currentColor" d="M6 6H2V5h4v1Z"/></svg>78</h3>
                        <p>Ruangan terpakai</p>
                    </div>
                    <div class="kahead"><h4>-15%<i class="fa-solid fa-arrow-down-long"></i></i></h4></div>

                </div>
            </div>
            <div class="tablepetugas">
                <table cellspacing="0" collspacing="2" style="padding: 0px 10px 0px 10px; ">
                    <tr>
                        <th>ID Petugas</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Jam_Jaga</th>
                        <th rowspan="1">Opsi</th>
                        <th></th>
                    </tr>
                        <?php
                            while ($ptgs = mysqli_fetch_assoc($petugas)) {
                        ?>
                    <tr>
                        <td><?php echo $ptgs['ID_Petugas']; ?></td>
                        <td><?php echo $ptgs['Nama']; ?></td>
                        <td><?php echo $ptgs['Alamat']; ?></td>
                        <td><?php echo $ptgs['No_tlp']; ?></td>
                        <td><a href="edit_data/edit_petugas.php?ID_Petugas=<?php echo $ptgs['ID_Petugas']; ?>"><i class="fa-regular fa-pen-to-square fa-sm"></i></a> </td>
                        <td> <a href="hapus data/hapus_data_petugas.php?ID_Petugas=<?php echo $ptgs['ID_Petugas']; ?>"><i class="fa-solid fa-trash-can fa-sm" style="color: #ff0f0f;"></i></a></td>
                    </tr>
                        <?php
                            }
                        ?>
                </table>
                <div class="insert" ">
                    <a href="page/frm_petugas.php"><button style="cursor: pointer;">Tambah</button></a>
                </div>
            </div>
        </div>
 <!-- halaman petugas -->
        <div class="ubah3" id="ubah3">
            <div class="headcontent">
                <div class="diagram1">
                    <div class="kihead"><p>Penggunaan ruangan</p>
                        <h3><i class="fa-solid fa-bed"></i>220</h3>
                        <p>Ruangan terpakai</p>
                    </div>
                    <div class="kahead"><h4>85%<i class="fa-solid fa-arrow-up-long"></i></h4></div>
                </div>
                <div class="diagram2">
                    <div class="kihead"><p>Ruangan Tersedia</p>
                        <h3><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 15 15"><path fill="currentColor" d="M0 15h1v-4h13v4h1V4h-1v3H1V0H0v15Z"/><path fill="currentColor" d="M6 6H2V5h4v1Z"/></svg>78</h3>
                        <p>Ruangan terpakai</p>
                    </div>
                    <div class="kahead"><h4>-15%<i class="fa-solid fa-arrow-down-long"></i></i></h4></div>

                </div>
            </div>
            <div class="tablepetugas">
                <table cellspacing="0" collspacing="2" style="padding: 0px 10px 0px 10px; ">
                    <tr>
                        <th>ID pasien</th>
                        <th>ID Dokter</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>TGL Kunjungan</th>
                        <th>Keluhan</th>
                        <th rowspan="1">Opsi</th>
                        <th></th>
                    </tr>
                    <?php
                        while ($Psien = mysqli_fetch_assoc($pasien)) {
                    ?>
                    <tr>
                        <td><?php echo $Psien['ID_Pasien']; ?></td>
                        <td><?php echo $Psien['ID_Dokter']; ?></td>
                        <td><?php echo $Psien['Nama']; ?></td>
                        <td><?php echo $Psien['Alamat']; ?></td>
                        <td><?php echo $Psien['Tgl']; ?></td>
                        <td><?php echo $Psien['Keluhan']; ?></td>
                        <td><a href="edit_data/edit_pasien.php?ID_Pasien=<?php echo $Psien['ID_Pasien']; ?>"><i class="fa-regular fa-pen-to-square fa-sm"></i></a> </td>
                        <td> <a href="hapus data/hapus_data_pasien.php?ID_Pasien=<?php echo $Psien['ID_Pasien']; ?>"><i class="fa-solid fa-trash-can fa-sm" style="color: #ff0f0f;"></i></a></td>
                    </tr>
                    <?php
                        }
                    ?>
                    
                </table>
                <div class="insert" ">
                    <a href="page/frm_pasien.php"><button style="cursor: pointer;">Tambah</button></a>
                </div>
            </div>
        </div>
<!-- table dokter -->
        <div class="ubah4" id="ubah4">
            <div class="headcontent">
                <div class="diagram1">
                    <div class="kihead"><p>Penggunaan ruangan</p>
                        <h3><i class="fa-solid fa-bed"></i>220</h3>
                        <p>Ruangan terpakai</p>
                    </div>
                    <div class="kahead"><h4>85%<i class="fa-solid fa-arrow-up-long"></i></h4></div>
                </div>
                <div class="diagram2">
                    <div class="kihead"><p>Ruangan Tersedia</p>
                        <h3><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 15 15"><path fill="currentColor" d="M0 15h1v-4h13v4h1V4h-1v3H1V0H0v15Z"/><path fill="currentColor" d="M6 6H2V5h4v1Z"/></svg>78</h3>
                        <p>Ruangan terpakai</p>
                    </div>
                    <div class="kahead"><h4>-15%<i class="fa-solid fa-arrow-down-long"></i></i></h4></div>

                </div>
            </div>
            <div class="tablepetugas">
                <table cellspacing="0" collspacing="2" style="padding: 0px 10px 0px 10px; ">
                    <tr>
                        <th>ID Dokter</th>
                        <th>Nama Dokter</th>
                        <th>Alamat</th>
                        <th>Spesialisasi</th>
                        <th rowspan="1">Opsi</th>
                        <th></th>
                    </tr>
                    <?php
                        while ($Dr = mysqli_fetch_assoc($dokter)) {
                    ?>
                    <tr>
                        <td><?php echo $Dr['ID_Dokter']; ?></td>
                        <td><?php echo $Dr['Nama']; ?></td>
                        <td><?php echo $Dr['Alamat']; ?></td>
                        <td><?php echo $Dr['Poli']; ?></td>
                        <td><a href="edit_data/edit_dokter.php?ID_Dokter=<?php echo $Dr['ID_Dokter']; ?>"><i class="fa-regular fa-pen-to-square fa-sm"></i></a> </td>
                        <td> <a href="hapus data/hapus_data_dokter.php?ID_Dokter=<?php echo $Dr['ID_Dokter']; ?>"><i class="fa-solid fa-trash-can fa-sm" style="color: #ff0f0f;"></i></a></td>
                    </tr>
                    <?php
                        }
                    ?>

                </table>
                <div class="insert" >
                    <a href="page/form_dokter.php"><button style="cursor: pointer;">Tambah</button></a>
                </div>
            </div>
        </div>
<!-- table Ruangan -->
        <div class="ubah5" id="ubah5">
            <div class="headcontent">
                <div class="diagram1">
                    <div class="kihead"><p>Penggunaan ruangan</p>
                        <h3><i class="fa-solid fa-bed"></i>220</h3>
                        <p>Ruangan terpakai</p>
                    </div>
                    <div class="kahead"><h4>85%<i class="fa-solid fa-arrow-up-long"></i></h4></div>
                </div>
                <div class="diagram2">
                    <div class="kihead"><p>Ruangan Tersedia</p>
                        <h3><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 15 15"><path fill="currentColor" d="M0 15h1v-4h13v4h1V4h-1v3H1V0H0v15Z"/><path fill="currentColor" d="M6 6H2V5h4v1Z"/></svg>78</h3>
                        <p>Ruangan terpakai</p>
                    </div>
                    <div class="kahead"><h4>-15%<i class="fa-solid fa-arrow-down-long"></i></i></h4></div>

                </div>
            </div>
            <div class="tablepetugas">
                <table cellspacing="0" collspacing="2" style="padding: 0px 10px 0px 10px; ">
                    <tr>
                        <th>ID Ruangan</th>
                        <th>Nama Ruangan</th>
                        <th>Nama Gedung</th>
                        <th rowspan="1">Opsi</th>
                        <th></th>
                    </tr>
                    <?php
                        while ($rngn = mysqli_fetch_assoc($ruang)) {
                    ?>
                    <tr>
                        <td><?php echo $rngn['ID_Ruang']; ?></td>
                        <td><?php echo $rngn['Nama_Ruang']; ?></td>
                        <td><?php echo $rngn['Nama_Gedung']; ?></td>
                        <td><a href="edit_data/edit_ruang.php?ID_Ruang=<?php echo $rngn['ID_Ruang']; ?>"><i class="fa-regular fa-pen-to-square fa-sm"></i></a> </td>
                        <td> <a href="hapus data/hapus_data_ruang.php?ID_Ruang=<?php echo $rngn['ID_Ruang']; ?>"><i class="fa-solid fa-trash-can fa-sm" style="color: #ff0f0f;"></i></a></td>
                    </tr>
                    <?php
                        }
                    ?>
                </table>
                <div class="insert" >
                    <a href="page/frm_ruang.php"><button style="cursor: pointer;">Tambah</button></a>
                </div>
            </div>
        </div>
<!-- halaman insert petugas -->
        </main> 
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
    <script>
        var counter =1;
        setInterval(function(){
            document.getElementById('radio'+ counter).checked = true;
            counter++;
            if(counter>4){
                counter=1;
            }
        }, 5000);
    </script>
    <script>
        var ihome = document.getElementById("ihome");
        var ptgs = document.getElementById("Petugas");
        var Psien = document.getElementById("Pasien");
        var Dr = document.getElementById("Dokter");
        var Rngn = document.getElementById("Ruang")



        var ihome = document.getElementById("ihome");
        var beranda = document.getElementById("home");
        var petugas = document.getElementById("ubah2");
        var pasien = document.getElementById("ubah3");
        var dokter = document.getElementById("ubah4");
        var Ruang = document.getElementById("ubah5")
        if (ihome.addEventListener('click', function(){
            beranda.style.display="block";
            pasien.style.display="none";
            dokter.style.display="none";
            Ruang.style.display="none";
            petugas.style.display="none";
        }));
       ptgs.addEventListener('click', function(){
            beranda.style.display="none";
            pasien.style.display="none";
            dokter.style.display="none";
            Ruang.style.display="none";
            petugas.style.display="flex";
        });
        Psien.addEventListener('click', function(){
            beranda.style.display="none";
            petugas.style.display="none";
            dokter.style.display="none";
            Ruang.style.display="none";
            pasien.style.display="flex";
        });
        Dr.addEventListener('click', function(){
            beranda.style.display="none";
            petugas.style.display="none";
            pasien.style.display="none";
            Ruang.style.display="none";
            dokter.style.display="flex";
        });
        Rngn.addEventListener('click', function(){
            beranda.style.display="none";
            petugas.style.display="none";
            pasien.style.display="none";
            dokter.style.display="none";
            Ruang.style.display="flex";
        });
        
//     </script>
// <?php 
//                          require '../login1/koneksi.php';
//                          $kataKunci = isset($_POST['keyword']) ? $_POST['keyword'] : '';
//                         //  $kataKunci = mysqli_real_escape_string($koneksi, $kataKunci);
    
// // Periksa apakah keyword pencarian telah diberikan
// if (isset($_POST['keyword'])) {
//     // Query SELECT untuk mencari data berdasarkan kata kunci
//     $query = "SELECT * FROM pasien WHERE Nama LIKE '%$kataKunci%'";
    
//     // Eksekusi query
//     $result = mysqli_query($koneksi, $query);
    
//     // Periksa apakah query berhasil dieksekusi
//     if ($result) {
//         echo "<script>";
//         echo "var data = '';";
        
//         // Periksa apakah ada baris data yang ditemukan
//         if (mysqli_num_rows($result) > 0) {
//             // Looping untuk mengambil data
//             while ($row = mysqli_fetch_assoc($result)) {
//                 // Akses data dengan menggunakan nama kolom
//                 $id = $row['ID_Pasien'];
//                 $nama = $row['Nama'];
//                 $alamat = $row['Alamat'];
    
//                 // Tambahkan data ke variabel 'data'
//                 echo "data += 'ID: $id, Nama: $nama, Alamat: $alamat\\n';";
//             }
            
//             // Tampilkan data dalam jendela popup jika ada data yang ditemukan
//             echo "alert(data);";
//         } else {
//             // Tampilkan pesan jika data tidak ditemukan
//             echo "alert('Data tidak ditemukan.');";
//         }
        
//         echo "</script>";
//     } else {
//         echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
//     }
// }
//?>
</body>
    <!-- index.php -->
