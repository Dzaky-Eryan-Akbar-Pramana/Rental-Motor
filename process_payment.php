<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $nomor_telepon = $_POST['nomor-telepon'];
    $tipe_motor = $_POST['tipe-motor'];
    $tanggal_sewa = $_POST['tanggal-sewa'];
    $lama_sewa = $_POST['lama-sewa'];
    $metode_pembayaran = $_POST['metode-pembayaran'];
    $nomor_kartu = $_POST['nomor-kartu'];
    $total_pembayaran = $_POST['total-pembayaran'];

    // Prepare data to be saved
    $data = $nama . "|" . $alamat . "|" . $nomor_telepon . "|" . $tipe_motor . "|" . $tanggal_sewa . "|" . $lama_sewa . "|" . $metode_pembayaran . "|" . $nomor_kartu . "|" . $total_pembayaran . "\n";

    // Save data to file
    file_put_contents('data.txt', $data, FILE_APPEND);

    // Redirect to the thank you page
    header("Location: thank_you.php");
    exit();
}
?>
