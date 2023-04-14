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
    <title>Menu Karyawan Coco.</title>
    <link rel="stylesheet" href="../css/style2.css">
    <link rel="stylesheet" href="../css/produkadmin.css">
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
                    <a href="../staff/index.php">
                        <img src="../image/dashboard.png" class="icon">
                        <span class="description-header">Dashboard</span>
                    </a>
                </div>
                <div class="list-item">
                    <a href="#karyawan">
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
            <!-- menu staff CRUD -->
            <section id="karyawan">
                <div class="wrapper">
                    <div class="title">Edit Data Karyawan</div>
                    <form action="" method="post">
                        <div class="data-produk">
                            <div class="input-box">
                                <span class="details">Nama Karyawan</span>
                                <input type="text" placeholder="Masukkan nama karyawan" name="karyawan" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Jabatan</span>
                                <input type="text" placeholder="Masukkan jabatan karyawan" name="jabatan" required>
                            </div>
                            <div class="button">
                                <button class="btn-tambah" onclick="tambah()">Tambah (+)</button>
                            </div>
                            <br>
                            <table id="tabel"></table>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>
</body>
<script src="../js/main.js"></script>
<script src="../js/karyawan.js"></script>
</html>