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
    <title>Menu Admin Coco.</title>
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
                        <span class="description-header">Admin Coco. Petshop</span>
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
                    <a href="#product">
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
            <!-- menu admin CRUD -->
            <section id="product">
                <div class="wrapper">
                    <div class="title">Edit Data Produk</div>
                    <form action="" method="post">
                        <div class="data-produk">
                            <div class="input-box">
                                <span class="details">Nama Produk</span>
                                <input type="text" placeholder="Masukkan nama produk" name="nmproduk" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Jumlah Produk</span>
                                <input type="text" placeholder="Masukkan jumlah produk" name="jumlahproduk" required>
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
<script src="../js/produk.js"></script>
</html>