<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['nama']) && isset($_POST['jumlah']) && isset($_POST['hp'])) {
        $nama = $_POST["nama"];
        $jumlah = $_POST["jumlah"];
        $hp = $_POST["hp"];
        
        // Deteksi jenis pesanan dari URL referer
        $referer = $_SERVER['HTTP_REFERER'];
        if (strpos($referer, 'ayam1') !== false) {
            $jenis_pesanan = "Ayam Geprek";
            $harga_satuan = 20000;
        } elseif (strpos($referer, 'ayam') !== false) {
            $jenis_pesanan = "Ayam sambal ijo";
            $harga_satuan = 15000;
        } else {
            $jenis_pesanan = "Tidak diketahui";
            $harga_satuan = 0;
        }

        // Hitung total harga
        $total_harga = $harga_satuan * $jumlah;

        // Generate HTML dengan styling
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Hasil Pesanan</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    background-color: olive;
                    margin: 0;
                    padding: 20px;
                }
                .result-container {
                    background-color: white;
                    max-width: 500px;
                    margin: 50px auto;
                    padding: 30px;
                    border-radius: 10px;
                    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
                    text-align: center;
                }
                .back-button {
                    display: inline-block;
                    padding: 10px 20px;
                    background-color: #6e6e6e;
                    color: white;
                    text-decoration: none;
                    border-radius: 20px;
                    margin-top: 20px;
                }
                .back-button:hover {
                    background-color: #555555;
                }
            </style>
        </head>
        <body>
            <div class="result-container">
                <h2>Terima kasih <?php echo htmlspecialchars($nama); ?>!</h2>
                <p>Jenis Pesanan: <?php echo $jenis_pesanan; ?></p>
                <p>Jumlah Pesanan: <?php echo htmlspecialchars($jumlah); ?></p>
                <p>Total Harga: Rp<?php echo number_format($total_harga, 0, ',', '.'); ?></p>
                <p>No HP: <?php echo htmlspecialchars($hp); ?></p>
                <a href="../index.php" class="back-button">Kembali ke Home</a>
            </div>
        </body>
        </html>
        <?php
    } else {
        echo "<div style='text-align: center; margin-top: 50px;'>";
        echo "<p>Data tidak lengkap. Silakan isi semua formulir.</p>";
        echo "<a href='javascript:history.back()'>Kembali</a>";
        echo "</div>";
    }
} else {
    echo "<div style='text-align: center; margin-top: 50px;'>";
    echo "<p>Akses tidak valid.</p>";
    echo "<a href='nasi.php'>Kembali ke Menu</a>";
    echo "</div>";
}
?>