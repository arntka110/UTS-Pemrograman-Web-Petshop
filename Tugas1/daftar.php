<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="daftar.css">
</head>
<body>
    <!-- daftar -->
    <section id="regis">
        <div class="wrapper">
            <div class="title">DAFTAR AKUN</div>
            <form action="" method="post">
                <div class="data-user">
                    <div class="judul">Data Diri Pengguna</div>
                    <div class="input-box">
                        <span class="details">Username</span>
                        <input type="text" placeholder="Username" id="dfuser" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Nomor Telepon</span>
                        <input type="text" placeholder="Nomor telepon" id="dftelp" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Alamat Email</span>
                        <input type="email" placeholder="Alamat email" id="dfemail" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Password</span>
                        <input type="password" placeholder="Password" id="dfpass" required>
                    </div>
                    <div class="data-diri" id="dfgender">
                        <input type="radio" name="gender" id="dot-1">
                        <input type="radio" name="gender" id="dot-2">
                        <input type="radio" name="gender" id="dot-3">
                        <span class="gender-title">Jenis Kelamin</span>
                        <div class="category">
                            <label for="dot-1">
                                <span class="dot one"></span>
                                <span class="gender">Laki-Laki</span>
                            </label>
                            <label for="dot-2">
                                <span class="dot two"></span>
                                <span class="gender">Perempuan</span>
                            </label>
                            <label for="dot-3">
                                <span class="dot three"></span>
                                <span class="gender">Rahasia</span>
                            </label>
                        </div>
                    </div>
                    <br>
                    <div class="judul">Data Hewan</div>
                    <div class="input-box" id="dfjenishewan">
                        <span class="details">Jenis Hewan Peliharaan</span>
                        <div class="top">
                            <input class="checkbox" type="checkbox" id="kucing">
                            <label class="check" for="kucing">Kucing</label>
                        </div>
                        <div>
                            <input class="checkbox" type="checkbox" id="anjing">
                            <label class="check" for="anjing">Anjing</label>
                        </div>
                        <div>
                            <input class="checkbox" type="checkbox" id="kelinci">
                            <label class="check" for="kelinci">Kelinci</label>
                        </div>
                        <div>
                            <input class="checkbox" type="checkbox" id="hamster">
                            <label class="check" for="hamster">Hamster</label>
                        </div>
                    </div>
                    <div class="input-box">
                        <span class="details">Umur Hewan</span>
                        <select class="select" name="umurhewan" id="dfumurhewan" required>
                            <option>0-6 bulan</option>
                            <option>7 bulan - 2 tahun</option>
                            <option>3 - 6 tahun</option>
                            <option>7 - 10 tahun</option>
                            <option>11 - 14 tahun</option>
                            <option>15+ tahun</option>
                        </select>
                    </div>
                    <div class="button">
                        <input type="submit" id="daftar" value="DAFTAR">
                    </div>
                </div>
            </form>
            <p class="loginuser">Sudah punya akun? <a href="index.php">Login</a></p>
        </div>
    </section>
</body>
</html>