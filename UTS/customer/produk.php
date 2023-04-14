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
    <title>Produk CoCo</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/produk.css">
</head>
<body>

    <!-- navbar -->
    <nav>
        <div class="luar">
            <div class="logo"><a href="beranda.php">CoCo.</a></div>
            <div class="menu">
                <ul>
                    <li><a href="index.php">Tentang Kami</a></li>
                    <li><a href="layanan.php">Layanan</a></li>
                    <li><a href="produk.php">Produk</a></li>
                    <li><a href="?logout=true" class="btn-merah">Log Out</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Carousel -->
    <section id="carousel">
        <div class="wrapper">
            <div class="slide">
                <span id="slide-1"></span>
                <span id="slide-2"></span>
                <span id="slide-3"></span>

                <div class="img">
                    <img src="../image/Pet-Lovers.jpeg">
                    <img src="../image/pet-random.jpeg">
                    <img src="../image/pet-foods.jpeg">
                </div>
            </div>    
            <div class="slide2">
                <a href="#slide-1">1</a>
                <a href="#slide-2">2</a>
                <a href="#slide-3">3</a>
            </div>
        </div>
    </section>

    <section id="card">
    <h2 class="title-produk">Produk CoCo Pet Shop</h2>
        <div class="produk">
            <div class="gambar">
                <img src="../image/1.png">
                <h3>Pedigree for Dog Adult 2.6kg</h3>
                <p>Harga Rp235.000,00</p>
                <a href="https://www.whatsapp.com/?lang=id">Beli Sekarang</a>
            </div>
            <div class="gambar">
                <img src="../image/2.png">
                <h3>Royal Canin Golden Retriever for Dog Adult 1.5kg</h3>
                <p>Harga Rp245.000,00</p>
                <a href="https://www.whatsapp.com/?lang=id">Beli Sekarang</a>
            </div>
            <div class="gambar">
                <img src="../image/3.png">
                <h3>Royal Canin Medium for Dog Adult 1.5kg</h3>
                <p>Harga Rp205.000,00</p>
                <a href="https://www.whatsapp.com/?lang=id">Beli Sekarang</a>
            </div>
            <div class="gambar">
                <img src="../image/4.png">
                <h3>Snack Pet 35gr</h3>
                <p>Harga Rp25.000,00</p>
                <a href="https://www.whatsapp.com/?lang=id">Beli Sekarang</a>
            </div>
            <div class="gambar">
                <img src="../image/5.png">
                <h3>Whiskas for Cat Adult 1+ 1.2kg</h3>
                <p>Harga Rp120.000,00</p>
                <a href="https://www.whatsapp.com/?lang=id">Beli Sekarang</a>
            </div>
            <div class="gambar">
                <img src="../image/6.png">
                <h3>Whiskas Tuna for Cat Adult 80gr</h3>
                <p>Harga Rp65.000,00</p>
                <a href="https://www.whatsapp.com/?lang=id">Beli Sekarang</a>
            </div>
            <div class="gambar">
                <img src="../image/7.png">
                <h3>Whiskas Catmilk 200ml</h3>
                <p>Harga Rp50.000,00</p>
                <a href="https://www.whatsapp.com/?lang=id">Beli Sekarang</a>
            </div>
            <div class="gambar">
                <img src="../image/8.png">
                <h3>Kalung Hewan 1pcs</h3>
                <p>Harga Rp30.000,00</p>
                <a href="https://www.whatsapp.com/?lang=id">Beli Sekarang</a>
            </div>
            <div class="gambar">
                <img src="../image/9.png">
                <h3>Mangkuk Makan Hewan 1pcs</h3>
                <p>Harga Rp40.000,00</p>
                <a href="https://www.whatsapp.com/?lang=id">Beli Sekarang</a>
            </div>
        </div>
        
    </section>

    <!-- footer -->
    <footer>
        <div class="luar">
            <div class="footer">
                <div class="footer-section">
                    <div class="kontak">
                        <h3>Mari Berkolaborasi!</h3>
                        <p class="daftar">Kami membuka kesempatan untuk berkolaborasi dengan segala pihak, <br> demi merevolusi teknologi kesehatan <br> hewan di Indonesia dan Asia Tenggara!</p>
                        <a href=""><img src="../image/daftar.png"></a>
                    </div>
                </div>
                <div class="footer-section">
                    <div class="alamat">
                        <h3>CoCo HQ</h3>
                        <h5>PT CoCo Solusi Digital</h5>
                        <p><img src="../image/icons8-place-marker-16.png"> Jl. Jakarta II Blok AA3, Loa Bakung, Samarinda, Kalimantan Timur</p>
                        <p><img src="../image/icons8-phone-16.png"> +62 5312 3456 7891</p>
                    </div>
                </div>
                <div class="footer-section">
                    <div class="sosmed">
                        <h3>Sosial Media</h3>
                        <a href="https://www.whatsapp.com/?lang=id"><img src="../image/icons8-whatsapp-48.png"></a>
                        <a href="https://www.instagram.com/instagram/"><img src="../image/icons8-instagram-48.png"></a>
                        <a href="https://www.facebook.com/"><img src="../image/icons8-facebook-48.png"></a>
                    </div>
                </div>
            </div>
            <div id="copyright">
                <div class="luar">
                    &copy; 2023. <b>CoCo Pet Shop</b> All Rights Reserved.
                </div>
            </div>
        </div>
    </footer>
</body>
</html>