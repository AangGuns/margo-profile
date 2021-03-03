<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MARGO ROSOK</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;700&display=swap" rel="stylesheet"> 
</head>
<body>
    <!-- Header Section -->
    <header>
        <div class="navbar">
            <div class="navbar-container">
                <a href="/" id="navbar-logo">
                    <i></i>MARGO ROSOK
                </a>
                <div class="navbar-toggle" id="mobile-menu">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
                <ul class="navbar-menu">
                    <li class="navbar-item">
                        <a href="/" class="navbar-links">Beranda</a>
                    </li>
                    <li class="navbar-item">
                        <a href="#tentang" class="navbar-links">Tentang</a>
                    </li>
                    <li class="navbar-item">
                        <a href="#barang" class="navbar-links">Barang</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    @yield('content')

    <!-- Footer Section -->
    <footer>
        <div class="footer-container">
            <div class="footer-links">
                <div class="footer-link--wrapper">
                    <div class="footer-link--items">
                        <h2>Tentang Kami</h2>
                        <a href="/">Alur Kerja</a>
                        <a href="/">Testimoni</a>
                        <a href="/">Investasi</a>
                        <a href="/">Terms of Services</a>
                    </div>
                    <div class="footer-link--items">
                        <h2>Kontak</h2>
                        <a href="/">SMS</a>
                        <a href="/">WhatsApp</a>
                        <a href="/">Lokasi</a>
                        <a href="/">Sponsor</a>
                   </div>
                </div>
                <div class="footer-link--wrapper">
                    <div class="footer-link--items">
                        <h2>Dokumentasi</h2>
                        <a href="/">Foto</a>
                        <a href="/">Video</a>
                        <a href="/">Artikel</a>
                    </div>
                    <div class="footer-link--items">
                        <h2>Sosial Media</h2>
                        <a href="/">Instagram</a>
                        <a href="/">Facebook</a>
                        <a href="/">Youtube</a>
                        <a href="/">Twitter</a>
                    </div>
                </div>
            </div>
            <div class="social-media">
                <div class="social-media--wrap">
                    <div class="footer-logo">
                        <a href="/" id="footer-logo">MARGO ROSOK</a>
                    </div>
                    <p class="website-right">© MARGO ROSOK 2021. All rights reserved</p>
                    <div class="social-icons">
                        <a href="/" class="social-icon--link" target="_blank">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="/" class="social-icon--link" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="/" class="social-icon--link" target="_blank">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="/" class="social-icon--link" target="_blank">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="/" class="social-icon--link" target="_blank">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="app.js"></script>
</body>
</html>