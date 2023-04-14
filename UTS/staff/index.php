<?php
session_start();

if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: ../index.php');
    exit();
  }
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Staff Coco.</title>
    <link rel="stylesheet" href="../css/style2.css">
</head>
<body>
    <!-- sidebar -->
    <div class="container">
        <div class="sidebar">
            <div class="header">
                <div class="list-item">
                    <a href="#">
                        <h1 class="logo">Coco.</h1>
                        <span class="description-header">Staff Coco. Petshop</span>
                    </a>
                </div>

                <div class="illustration">
                    <img src="../image/icon-dashboard.png" class="foto">
                </div>
            </div>
            <div class="main">
                <div class="list-item">
                    <a href="#dashboard">
                        <img src="../image/dashboard.png" class="icon">
                        <span class="description-header">Dashboard</span>
                    </a>
                </div>
                <div class="list-item">
                    <a href="../staff/karyawan.php">
                        <img src="../image/team.png" class="icon">
                        <span class="description-header">Karyawan</span>
                    </a>
                </div>
                <div class="list-item">
                    <a href="?logout=true">
                        <img src="../image/logout.png" class="icon">
                        <span class="description-header">Logout</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="main-content">
            <div id="menu-button">
                <input type="checkbox" id="menu-checkbox">
                <label for="menu-checkbox" id="menu-label">
                    <div id="tombol"></div>
                </label>
            </div>
            <!-- dashboard -->
            <div id="dashboard">
                <div class="background"><img src="../image/bgpetshop.jpg" width="100%">
                    <div class="konten">
                        <p class="pr">Halo, kamu login sebagai <b><span style="color: #F58634;"><?php echo $_SESSION['username']; ?></span></b>!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="../js/main.js"></script>
</html>