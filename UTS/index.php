<?php
session_start();

// Akun pengguna
$akun = array(
    'ariantika' => array(
        'pass' => '110',
        'role' => 'customer'
    ),
    'admin' => array(
        'pass' => 'admin',
        'role' => 'admin'
    ),
    'staff' => array(
        'pass' => 'staff',
        'role' => 'staff'
    
    )
);

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['pass'];
    $role = $_POST['role'];

    if (isset($akun[$username]) && $akun[$username]['pass'] === $password && $akun[$username]['role'] === $role) {
        $_SESSION['username'] = $username;
        $_SESSION['role'] = $role;
        $_SESSION['access'] = true;

        if ($role === 'admin') {
            header('Location: admin/index.php');
        } else if ($role === 'staff') {
            header('Location: staff/index.php');
        } else {
            header('Location: customer/index.php');
        }
        exit();
    } else {
        echo "<script>
            alert('Username atau password salah!');
            document.location.href = 'index.php';
            </script>";
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
    <link rel="stylesheet" href="css/login.css">
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
                    <div class="pilih">
                        <span class="details">Pilih Role</span>
                        <br>
                        <select class="select" name="role">
                            <option value="customer">Customer</option>
                            <option value="admin">Admin</option>
                            <option value="staff">Staff</option>
                        </select>
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