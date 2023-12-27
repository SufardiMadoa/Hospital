
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
        <main>
            <div class="ubah1" id="home">
                <div class="slider">
                    <div class="slides">
                        <input type="radio" name="radio-btn" id="radio1">
                        <input type="radio" name="radio-btn" id="radio2">
                        <input type="radio" name="radio-btn" id="radio3">
                        <input type="radio" name="radio-btn" id="radio4">
        
                        <div class="slide first">
                            <img src="satu.jpg" alt="">
                        </div>
                        <div class="slide">
                            <img src="3.jpg" alt="">
                        </div>
                        <div class="slide">
                            <img src="4.jpg" alt="">
                        </div>
                        <div class="slide">
                            <img src="6.jpg" alt="">
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
            <div class="artikel">
                <div class="artikel-1">
                    <div class="card">
                        <img src="5.jpg" alt="" style="width: 250px;">
                            <article>
                                <h1>Pelayanan 24 Jam</h1>
                                <p>Pelayanan 7 hari dalam seminggu dengan dokter umum dan perawatan yang profesional 
                                    didukung oleh dokter spesialis yang dapat dihubungi setiap waktu.
                                </p>
                                <span>ADMIN</span>
                            </article>
                        </div>
                    </div>

                <div class="artikel-2">
                    <div class="card">
                        <img src="2.jpg" alt="" style="width: 250px;">
                            <article>
                                <h1>Laboratorium</h1>
                                <p>Dilengkapi dengan peralatan mutakhir dan didukung oleh staf yang terdiri dari para 
                                    dokter dan Analis yang profesional dan sangat berpengalaman.
                                </p>
                                <span>ADMIN</span>
                            </article>
                    </div>
                </div>

                <div class="artikel-3">
                    <div class="card">
                        <img src="8.jpg" alt="" style="width: 250px;">
                            <article>
                                <h1>Tenaga Medis</h1>
                                <p>Kami didukung oleh tenaga medis yang terlatih dan memiliki sertifikat penanggulangan 
                                    pasien Gawat Darurat (PPGD), Advance Cardiac Life Support (ACLS), Advance Trauma Life Support(ATLS)
                                </p>
                                <span>ADMIN</span>
                            </article>
                    </div>
                </div>

                <div class="artikel-4">
                    <div class="card">
                        <img src="9.jpg" alt="" style="width: 250px;">
                            <article>
                                <h1>Unit UGD</h1>
                                <p>Instalasi Gawat Darurat melayani kegawatdaruratan medik baik kasus trauma maupun non 
                                    trauma, termasuk resusitasi secara optimal dan profesional.
                                </p>
                                <span>ADMIN</span>
                            </article>
                    </div>
                </div>                
            </div>
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
                </div>
    <style>
       
    </style>
  <?php 
  require '../login1/koneksi.php';
  $kataKunci = isset($_POST['keyword']) ? $_POST['keyword'] : '';

  // Periksa apakah keyword pencarian telah diberikan
  if (isset($_POST['cari'])) {
    // Query SELECT untuk mencari data berdasarkan kata kunci
    $query = "SELECT * FROM pasien WHERE Nama LIKE '%$kataKunci%'";

    // Eksekusi query
    $result = mysqli_query($koneksi, $query);

    // Periksa apakah query berhasil dieksekusi
    if ($result) {
      // Periksa apakah ada baris data yang ditemukan
      if (mysqli_num_rows($result) > 0) {
        echo "<div class='hasil'>";
        echo "<div class='search-results'>";
        echo "<h2>Hasil Pencarian</h2>";
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
      } else {
        // Tampilkan pesan jika data tidak ditemukan
        echo "<div class='hasil'>";
        echo "<div class='search-results'>";
        echo "<p>Data tidak ditemukan.</p>";
        echo "</div>";
        echo "</div>";
      }
    } else {
      echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
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

                <div class="content2">
                    <h2>PENAWARAN SPESIAL</h2>
                    <div class="penawaran">
                        
                            <div class="p1"><img src="p2.jpg" alt=""></div>
                            <div class="p2"><img src="p3.jpeg" alt=""></div>
                            <div class="p3"><img src="p4.jpeg" alt=""></div>
                            <div class="p4"><img src="p5.jpg" alt=""></div>

                    </div>
                    <div class="selengkapnya1">
                        <h4>SELENGKAPNYA  <i class="fa-solid fa-angle-right" style="color: #ffffff;"></i></h4>
                    </div>
                </div>
                <div class="content3">
                    <h2>BERITA TERBARU</h2>
                    <div class="berita">
                        
                            <div class="b1"><iframe width="560" height="315" src="https://www.youtube.com/embed/6ZjlKBPhMRg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
                            <div class="b2"><iframe width="560" height="315" src="https://www.youtube.com/embed/CFN8v8najeU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
                            <div class="b3"><iframe width="560" height="315" src="https://www.youtube.com/embed/n54ZiRH3fi0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
                            <div class="b4"><iframe width="560" height="315" src="https://www.youtube.com/embed/515HEJhtQ2Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>

                    </div>
                    <div class="selengkapnya1">
                        <h4>SELENGKAPNYA  <i class="fa-solid fa-angle-right" style="color: #ffffff;"></i></h4>
                    </div>
                </div>
            </div>
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
        
    </script>
</body>
</html>