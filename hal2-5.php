<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="hal2.css">
    <link rel="stylesheet" href="footer.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito|Poppins" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Prosto+One" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3b161c540c.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Noto+Serif:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
</head>

<body>
    <nav>
        <div class="logo">
            RENTAL MOTOR YOGYAKARTA
        </div>
        <div class="toggle-bars">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>

        <div class="nav">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
    </nav>
    <section id="hero2">
        <div class="hero-image">
            <div class="hero-text">
                <h1 style="font-size:50px">Rental Motor Kawasaki Ninja ZX25R</h1>
                <p style="font-size: 14px;">nyewa atau gue gaplok pala lo</p>
            </div>
        </div>
    </section>

    <div class="outter">

        <div class="left">
            <img src="https://asset.kompas.com/crops/UJTsvpXxcx9DxKH9ld0oOWd2LeQ=/0x0:900x600/1200x800/data/photo/2017/11/14/240642257.jpg" alt="">
           
        </div>
        <div class="right">
            <div class="lr1">
                <!-- <input type="text" placeholder="cari..." style="padding: 8px 5px; border-radius: 5px; border: 2px grey;">
                <button>cari</button> -->
                <!-- <br> -->
                <h2 style="text-align: center;" width="">FORM PENYEWAAN</h2>
                <form name="myForm" action="#" onsubmit="return validateForm()" method="post">

                    <div class="pe">
                        <p> Jasa rental Motor Honda CRF 150 L nomor 1 di Kota Yogyakarta dengan pelayanan yang sangat memuaskan.
                            Fasilitas : 2 Helm, Jas Hujan. Siap melayani antar jemput kendaraan di terminal, stasiun, bandara dll.
                        </p>
                        <p>     Monggo, kalo minat silahkan datang langsung ke Rental Motor 3R, Rental Motor Daerah Istimewa Yogyakarta.
                            di Jl. Kapas No.9, Semaki, Kec. Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55166. Dijamin harga terjangkau, berkualitas, aman dan nyaman serta
                            dengan persyaratan rental motor yang mudah.</p>
                        <p>Kami mengucapkan terima kasih kepada para calon Pelanggan dan pelanggan setia kami yang selalu
                            mempercayakan kami sebagai partner dalam pelayanan jasa rental motor Daerah Istimewa Yogyakarta. Semoga kedepannya kami
                            bisa menjadi yang lebih baik lagi.</p>
                        </div>
            </div>
                
                <div class="form" style="display: flex; flex-direction: column; width: 300px; gap: 10px;">
                   
                    <button type="Pembayaran" value="Pembayaran" style="text-decoration: none; color: #666;"><a href="sistem pembeayaran.php">Pembayaran</button>
                </form>
                </div>  
            <h3 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Unit sewa terlaris bosku 😎🤙</h3>
        </div>

    </div>


    
    <!-- <div class="info">
        <h1>Navigation bar with css Flexbox</h1>
      </div> -->

    <footer class="footer">
        <div class="container row">
            <div class="footer-col">
                <h4>company</h4>
                <ul>
                    <li><a href="#">about us</a></li>
                    <li><a href="#">our services</a></li>
                    <li><a href="#">privacy policy</a></li>
                    <li><a href="#">visit website</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>get help</h4>
                <ul>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">shipping</a></li>
                    <li><a href="#">returns</a></li>
                    <li><a href="#">order status</a></li>
                    <li><a href="#">payment options</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>online shop</h4>
                <ul>
                    <li><a href="#">download</a></li>
                    <li><a href="#">changelog</a></li>
                    <li><a href="#">github</a></li>
                    <li><a href="#">all version</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <img src="https://fkip.uad.ac.id/wp-content/uploads/Logo-UAD-Berwarna.png" alt="">
                <h4 id="pe">follow us</h4>
                <div class="social-links">
                    <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/rizurbae/"><i class="fa-brands fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </footer>
</body>

<script>
    function validateForm() {
  let x = document.forms["myForm"]["fname"].value;
  if (x == "") {
    alert("Masukin Nama dan Alamat dulu Boss");
    return true;
  }
}
</script>

</html>