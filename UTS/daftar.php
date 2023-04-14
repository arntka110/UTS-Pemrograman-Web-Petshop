<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun</title>
    <link rel="stylesheet" href="css/daftar.css">
</head>
<body>
    <!-- daftar -->
    <section id="regis">
        <div class="wrapper">
            <div class="title">DAFTAR AKUN</div>
            <form action="" method="post">
                <div class="data-user">
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