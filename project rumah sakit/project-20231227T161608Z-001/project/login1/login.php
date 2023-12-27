
<?php
// session_start();

include('koneksi.php');
// Mendapatkan data dari form login
$username = $_POST['username'];
$password = $_POST['Password'];


// Melakukan query ke database


// Melakukan query ke database
$query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
$result = mysqli_query($koneksi, $query);

if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    $role = $row['role'];

    // Cek peran (role) pengguna
    if ($role == 0) {
        // Redirect ke halaman pengguna (user)
        header("Location: ../user/home.php");
    } elseif ($role == 1) {
        // Redirect ke halaman admin
        header("Location: ../home/home.php");
    } else {
        echo "Peran pengguna tidak valid";
    }
} else {
    echo "Username atau password salah";
}

mysqli_close($koneksi);
?>


    // Login gagal, tampilkan pesan error
    $error = 'Username atau password salah!';






// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     // Proses form login
//     $conn = koneksi();
//     $username = $_POST['username'];
//     $password = $_POST['Password'];

//     // Lakukan validasi login
//     $stmt = $conn->prepare('SELECT *  FROM login WHERE username =?');
//     $stmt->bind_param('s', $username);
//     $stmt->execute();
//     $result = $stmt->get_result();

//     if ($result->num_rows === 1) {
//         $user = $result->fetch_assoc();
//         if (password_verify($password, $user['password'])) {
//             // Login berhasil, set session user
//             $_SESSION['user'] = [
//                 'username' => $user['username'],
//                 'jabatan' => $user['jabatan']
//             ];
//             // Redirect ke halaman yang sesuai
//             if ($user['jabatan'] === 'admin') {
//                 header('Location: home/home.php');
//                 exit();
//             } elseif ($user['jabatan'] === 'user') {
//                 header('Location: user.php');
//                 exit();
//             }
//         }
//     }

//     // Login gagal, tampilkan pesan error
//    else $error = 'Username atau password salah!';
// }
?>
