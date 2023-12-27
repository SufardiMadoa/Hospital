<?php 
include('koneksi.php');
session_start();
if (isset($_SESSION['username'])){
        header ('location : ./welcome.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/cc5db5fcb8.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://kit.fontawesome.com/cc5db5fcb8.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="layar1">
        <div class="buble1"></div>
        <div class="buble1"></div>
        <div class="buble1"></div>
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
                    <img src="1.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="1.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="1.jpg" alt="">
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
        <div class="Form-login">
            <div class="form">
            <form action="login.php" method="post">
                <div class="teks">
                    <h1>Selamat datang</h1>
                    <h4>silahkan masukkan username dan pasword anda</h4>
                    <h4 style="color:red; margin-bottom:15px;">
                    <?php 
                    if (isset($_COOKIE["message"])){
                        echo $_COOKIE["message"];
                    }
                    ?></h4>

                </div>
                <div class="input">
                    <input type="text" name="username" id="username" placeholder="Username">
                    <input type="password" name="Password" id="password" placeholder="Password"> <br>
                    
                </div>
                <button>LOGIN</button>
                <div class="tengahkan"><i class="fa-regular fa-headset"></i>
                    <i class="fa-brands fa-instagram"></i><i class="fa-duotone fa-user-headset" style="--fa-primary-color: #000000; --fa-secondary-color: #000000;"></i>
                    <p><input type="checkbox">ingat nama pengguna</p>
                    <p><i class="fa-solid fa-headset"></i>Lupa nama pengguna atau kata sandi anda ?</p>
                    <br>
                    <p><i class="fa-duotone fa-user-headset"></i>Cookies must be enabled in your web browser</p>
                </div>
                
            </form>
        </div>
        </div>
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
</body>
</html>