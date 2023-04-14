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
    <title>Tentang Kami - CoCo.</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/beranda.css">
</head>
<body>

    <!-- navbar -->
    <nav>
        <div class="luar">
            <div class="logo"><a href="beranda.php">CoCo.</a></div>
            <div class="menu">
                <ul>
                    <li><a href="#tentang">Tentang Kami</a></li>
                    <li><a href="layanan.php">Layanan</a></li>
                    <li><a href="produk.php">Produk</a></li>
                    <li><a href="?logout=true" class="btn-merah">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- beranda -->
    <div id="beranda">
        <div class="background"><img src="../image/bgpetshop.jpg" width="100%">
            <div class="konten">
                <p class="pr">Halo, <?php echo $_SESSION['username']; ?>!</p>
                <p class="pr">TENTANG KAMI</p>
                <h1><span style="color: #F58634;">Mewujudkan</span> Kesejahteraan Hewan</h1>
                <p class="pr">Sebagai Mitra Resmi Perhimpunan Dokter Hewan Indonesia (PDHI), kami 
                berkomitmen menjalankan <br> visi mewujudkan kesejahteraan manusia melalui kesehatan hewan.</p>
                <div class="button">
                    <a href="#tentang">Pelajari Lebih Lanjut</a>
                </div>
            </div>
        </div>
    </div>

    <!-- menu tentang kami -->
    <section id="tentang">
        <div class="kolom">
            <p><b>PT COCO SOLUSI DIGITAL</b></p>
            <h2><span style="color: #F58634;">Solusi</span> Kesehatan Hewan</h2>
            <p>Kami percaya bahwa setiap hewan memiliki kesempatan yang sama untuk mendapatkan pelayanan
            kesehatan yang terbaik, demi mewujudkan kesejahteraan hewan. Karena bagi mereka, kitalah
            seumur hidupnya.</p>
            <p>Oleh karena itu, CoCo hadir sebagai sebuah platform Tele Advice yang menghubungkan pet
            owner dengan dokter hewan terpercaya untuk solusi kesehatan hewan demi kesejahteraan dan kesehatan
            hewan kesayangannya. Dalam mencapai visi tersebut, CoCo telah bekerja sama dengan Perhimpunan
            Dokter Hewan Indonesia untuk mendapatkan perlindungan hukum dan quality assurance demi menyediakan
            layanan Tele Advice yang aman dan terpercaya.</p>
            <h3><img src="../image/icons8-checkmark-30.png" class="ikon">DOKTER HEWAN TERPERCAYA</h3>
            <p>Kami hanya berkolaborasi dengan dokter hewan berlisensi di bawah naungan Perhimpunan Dokter Hewan Indonesia.</p>
            <h3><img src="../image/icons8-checkmark-30.png" class="ikon">PELAYANAN CEPAT</h3>
            <p>Kami menghubungkan Anda dengan dokter hewan terpercaya dengan cepat untuk solusi kesehatan hewan kesayangan Anda.</p>
            <h3><img src="../image/icons8-checkmark-30.png" class="ikon">SOLUSI TERBAIK</h3>
            <p>Dapatkan solusi terbaik khusus untuk hewan kesayangan Anda dari dokter hewan terpercaya.</p>
        </div>
        <div class="foto">
            <img src="../image/dokter-hewan.jpg" width="100%">
            <img src="../image/pet-grooming.jpg" width="100%">
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
                        <a href="daftar.php"><img src="../image/daftar.png"></a>
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