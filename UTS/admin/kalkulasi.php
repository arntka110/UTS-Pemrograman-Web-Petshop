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
    <title>Menu Owner Coco.</title>
    <link rel="stylesheet" href="../css/style2.css">
    <link rel="stylesheet" href="../css/kalkulasi.css">
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
                    <a href="../admin/index.php">
                        <img src="../image/dashboard.png" class="icon">
                        <span class="description-header">Dashboard</span>
                    </a>
                </div>
                <div class="list-item">
                    <a href="../admin/produk.php">
                        <img src="../image/product.png" class="icon">
                        <span class="description-header">Produk</span>
                    </a>
                </div>
                <div class="list-item">
                    <a href="../admin/kalkulasi.php">
                        <img src="../image/kalkulasi.png" class="icon">
                        <span class="description-header">Kalkulasi Produk</span>
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
            <!-- menu owner -->
            <section id="kalkulasi">
                <div class="wrapper">
                    <div class="title">Kalkulasi Jumlah Produk</div>
                    <form action="" method="post">
                        <div class="jumlah-produk">
                            <div class="input-box">
                                <span class="details">Nama Produk</span>
                                <input type="text" placeholder="Masukkan nama produk" id="produk" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Jumlah Produk Lama</span>
                                <input type="number" placeholder="Masukkan jumlah produk lama" id="jmlproduk1" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Jumlah Produk Baru</span>
                                <input type="number" placeholder="Masukkan jumlah produk baru" id="jmlproduk2" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Pilih Operator</span>
                                <br>
                                <select name="" id="operator">
                                    <option value="+">+</option>
                                    <option value="-">-</option>
                                    <option value="*">*</option>
                                    <option value="/">/</option>
                                </select>
                            </div>
                            <div class="button">
                                <button type="button" onclick="hitung()">Hitung</button>
                            </div>
                            <br>
                            <div class="input-box">
                                <span class="details">Hasil Kalkulasi</span>
                                <input type="number" id="hasil" placeholder="0">
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>
</body>
<script src="../js/main.js"></script>
<script src="../js/kalkulasi.js"></script>
</html>