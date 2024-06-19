<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pembayaran</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="hal2.css">
    <link rel="stylesheet" href="footer.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito|Poppins" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Prosto+One" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3b161c540c.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="form.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Noto+Serif:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Pembayaran Penyewaan Motor</h1>
        <form action="process_payment.php" method="post">
            <fieldset>
                <legend>Detail Penyewa</legend>
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required>

                <label for="alamat">Alamat:</label>
                <input type="text" id="alamat" name="alamat" required>

                <label for="nomor-telepon">Nomor Telepon:</label>
                <input type="tel" id="nomor-telepon" name="nomor-telepon" required>
            </fieldset>

            <fieldset>
                <legend>Detail Motor</legend>
                <label for="tipe-motor">Tipe Motor:</label>
                <input type="text" id="tipe-motor" name="tipe-motor" required>

                <label for="tanggal-sewa">Tanggal Sewa:</label>
                <input type="date" id="tanggal-sewa" name="tanggal-sewa" required>

                <label for="lama-sewa">Lama Sewa (hari):</label>
                <input type="number" id="lama-sewa" name="lama-sewa" min="1" required>
            </fieldset>

            <fieldset>
                <legend>Informasi Pembayaran</legend>
                <label for="metode-pembayaran">Metode Pembayaran:</label>
                <select id="metode-pembayaran" name="metode-pembayaran" required>
                    <option value="transfer-bank">Transfer Bank</option>
                    <option value="kartu-kredit">Kartu Kredit</option>
                    <option value="e-wallet">E-Wallet</option>
                </select>

                <label for="nomor-kartu">Nomor Kartu/Kode Pembayaran:</label>
                <input type="text" id="nomor-kartu" name="nomor-kartu" required>

                <label for="total-pembayaran">Total Pembayaran (IDR):</label>
                <input type="number" id="total-pembayaran" name="total-pembayaran" required>
            </fieldset>

            <button type="submit">Bayar Sekarang</button>
        </form>
    </div>

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
</html>
