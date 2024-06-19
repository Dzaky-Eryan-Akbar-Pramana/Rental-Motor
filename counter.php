<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Counter Data Penyewaan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Data Penyewaan Motor</h1>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Nomor Telepon</th>
            <th>Tipe Motor</th>
            <th>Tanggal Sewa</th>
            <th>Lama Sewa (hari)</th>
            <th>Metode Pembayaran</th>
            <th>Nomor Kartu/Kode Pembayaran</th>
            <th>Total Pembayaran (IDR)</th>
        </tr>
        <?php
        if (file_exists('data.txt')) {
            $file = fopen('data.txt', 'r');
            while (($line = fgets($file)) !== false) {
                $data = explode('|', trim($line));
                echo "<tr>";
                foreach ($data as $value) {
                    echo "<td>" . htmlspecialchars($value) . "</td>";
                }
                echo "</tr>";
            }
            fclose($file);
        } else {
            echo "<tr><td colspan='9'>No data available</td></tr>";
        }
        ?>
    </table>
</body>
</html>
