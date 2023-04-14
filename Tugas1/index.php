<?php
session_start();

if( isset($_POST["login"]) ){
    $username = $_POST["username"];
    $password = $_POST["pass"];

    if( $_POST["username"] == "ariantika" && $_POST["pass"] == "110"){
        $_SESSION['berhasil'] = $username;
        header("Location: beranda.php");
        exit;
    }else if( $_POST["username"] == "putut" && $_POST["pass"] == "123"){
            $_SESSION['berhasil'] = $username;
            header("Location: beranda.php");
            exit;
    }else{
        echo "<script>alert('Username atau password salah!')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Coco.</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <!-- login -->
    <section id="masuk">
        <div class="wrapper">
            <div class="title">LOGIN</div>
            <form action="" method="post">
                <div class="data-user">
                    <div class="input-box">
                        <span class="details">Username</span>
                        <input type="text" placeholder="Masukkan username" name="username" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Password</span>
                        <input type="password" placeholder="Masukkan password" name="pass" required>
                    </div>
                    <div class="button">
                        <input type="submit" name="login" value="LOGIN">
                    </div>
                </div>
            </form>
            <p class="daftarakun">Belum punya akun? <a href="daftar.php">Daftar</a></p>
        </div>
    </section>
</body>
</html>