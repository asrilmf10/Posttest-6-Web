<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .h-list a.register {
            background-color: #00ABE0;
            color: white;
        }
        .h-list a.register:hover {
            color: black;
        }
        .h-list a.home {
            background-color: #00DEFF;
            color: black;
        }
        .h-list a.home:hover {
            color: white;
        }
        .regis {
            border: 2px solid;
            border-radius: 25px;
            width: 450px;
            margin-top: 15px;
            margin-left: 375px;
            margin-bottom: 10px;
            padding: 10px 25px 10px 25px;
        }
        .n-logo {
            padding: 15px;
        }
        h3 {
            text-align: center;
            padding-bottom: 2.5px;
        }
        label {
            font-size: larger;
        }
        .form-regis {
            width: 100%;
            height: 25px;
            margin: 2.5px 0px 5px;
        }
        .btn-send {
            width: 75px;
            height: 35px;
            margin-top: 4.5px;
            margin-left: 190px;
            font-size: 20px;
            border-style: none;
            border-radius: 25px;
            background-color: #00ABE0;
            color: black;
        }
        .btn-send:hover {
            background-color: #00DEFF;
            color: white;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="h-list">
                <a class="home" href="index.php">Beranda</a>
                <a class="register" href="register.php">Daftar</a>
                <a class="profil" href="akun.php">Profil</a>
                <a onclick="tentang()" class="aboutMe" href="aboutMe.php">Tentang Saya</a>
                <a class="menu-resep" href="resep.php">Daftar Resep</a>
                <a href="buat.php">Buat Resep</a>
        </div>
    </div>
    <div class="navbar">
        <div class="n-logo">
            <p class="logo">MariMasak</p>
            <p class="teks">Kumpulan Resep Masakan Indonesia</p>
        </div>
    </div>
    <div class="main">
        <div class="regis">
            <form action="akun.php" method="post">
                <label><h3>Daftar Akun</h3></label>

                <label for="">Nama</label><br>
                <input type="text" name="nama" class="form-regis"><br>

                <label for="">Email</label><br>
                <input type="email" name="email" class="form-regis"><br>

                <label for="">Password</label><br>
                <input type="password" name="pword" class="form-regis"><br>

                <input type="submit" name="submit" class="btn-send" value="Daftar">
            </form>
        </div>
    </div>
    <div class="footer">
        <div class="f-teks">
            <p>@Copyright 2022 - by Asril M.F</p>
        </div>
    </div>
</body>
</html>