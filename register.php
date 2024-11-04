<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beli Tiket</title>
    <link rel="icon" href="./files/logo.png">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>
<body class="register-body">

    <nav>
        <img src="./files/logo.png" class="logo" alt="Logo" title="Wanderlust">
        <ul class="navbar">
            <li>
                <a href="./index.html">Beranda</a>
                <a href="./index.html#locations">Lokasi</a>
                <a href="./index.html#package">Galeri</a>
                <a href="./about.html">Tentang Kami</a>
                <a href="./contact.html">Kontak</a>
            </li>
        </ul>
    </nav>

    <section class="registration">
        <div class="register-form">
            <h1>Beli <span>Tiket</span></h1>
            <h3>Harga Tiket Per Orang Rp5000,00-</h3>
            <form action="koneksi.php" method="post" onsubmit="return validateform()">
                <label for="name">Nama Pengunjung</label>
                <input type="text" name="nama" placeholder="Nama Pengunjung" id="name" required>
                
                <label for="email">Email ID</label>
                <input type="email" name="emailp" placeholder="Email ID" id="email" required>
                
                <label for="phonenum">Nomor Telepon</label>
                <input type="tel" name="nomorp" placeholder="Nomor Telepon" id="phonenum" required pattern="[0-9]{10,}">
                
                <label for="jmltiket">Jumlah Tiket</label>
                <input type="number" name="jmltiket" placeholder="Jumlah Tiket" id="jmltiket" required min="1">
                
                <label for="kunjungan">Tanggal Berangkat</label>
                <input type="datetime-local" name="kunjungan" id="kunjungan" required>
                
                <br><br>
                <input type="submit" value="Beli Tiket" class="submitbtn">
            </form>
        </div>
    </section>

    <!-- Footer -->
    <section class="footer">
        <div class="foot">
            <div class="footer-content">
                <div class="footlinks">
                    <h4>Lintasan</h4>
                    <ul>
                        <li><a href="./register.html">Beli Tiket</a></li>
                        <li><a href="./about.html">Tentang Kami</a></li>
                        <li><a href="./contact.html">Kontak</a></li>
                    </ul>
                </div>
                <div class="footlinks">
                    <h4>Social Media</h4>
                    <div class="social">
                        <a href="https://www.instagram.com/tresnafaa" target="_blank"><i class='bx bxl-facebook'></i></a>
                        <a href="https://www.instagram.com/tresnafaa" target="_blank"><i class='bx bxl-instagram' ></i></a>
                        <a href="https://www.instagram.com/tresnafaa" target="_blank"><i class='bx bxl-twitter' ></i></a>
                        <a href="https://www.instagram.com/tresnafaa" target="_blank"><i class='bx bxl-youtube' ></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="end">
            <p>Copyright © 2024 Wanderlust Pemrograman Website.<br>Kelompok 8</p>
        </div>
    </section>

    <!-- Javascript -->
    <script>
        function validateform(){ 
            var tel = document.getElementById("phonenum").value;  

            if(tel.length < 10){  
                alert("Phone number must be of at least 10 digits!");  
                return false;  
            } else if(isNaN(tel)){
                alert("Phone number should not include characters!");
                return false;
            }
            return true;
        }  
    </script>

</body>
</html>
