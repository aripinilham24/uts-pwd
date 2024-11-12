<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output</title>
    <link rel="stylesheet" href="css/styleOutput.css">
</head>
<body>
    <div class="contentOutput">
        <header>
            <h1>STRUKTUR PEMBAYARAN</h1>
            <h1>CINEMA BINA INSANI 21</h1>
        </header>
        <hr>
        <div class="outputform">
            <?php
            $kodeFilm = $_POST["kodeTiket"];
            $hari = $_POST["hari"];
            $jumlahBeli = $_POST["jumlahBeli"];
            $waktu = $_POST["waktu"];

            if($kodeFilm == "TRM") {
                $namaFilm = "Transformers The Last Knight";
            }
            elseif($kodeFilm == "MID") {
                $namaFilm = "Mission Impossible - Dead Reckoning Part One";
            }
            elseif($kodeFilm == "TMM") {
                $namaFilm = "The Mummy";
            }
            elseif($kodeFilm == "TWM") {
                $namaFilm = "Wonder Women";
            }

            if($hari == "Senin-Kamis") {
                $harga = 40000;
            }
            elseif($hari=="Jumat") {
                $harga = 50000;
            }
            elseif($hari == "Sabtu-Minggu") {
                $harga = 60000;
            }

            function hitungBayar($harga,$jumlahBeli) {
                $totalBayar = $harga * $jumlahBeli;
                return $totalBayar;
            }

            $totalBayar = hitungBayar($harga, $jumlahBeli);

            echo "<div>
            <span class='label'>Kode Film</span>
            <span class='output'>$kodeFilm<span>
            </div>";

            echo "<div>
            <span class='label'>Nama Film</span>
            <span class='output'>$namaFilm<span>
            </div>";

            echo "<div>
            <span class='label'>Harga</span>
            <span class='output'>Rp. ".number_format($harga,2,",",".")."<span>
            </div>";

            echo "<div>
            <span class='label'>Waktu</span>
            <span class='output'>$waktu<span>
            </div>";

            echo "<div>
            <span class='label'>Hari</span>
            <span class='output'>$hari<span>
            </div>";

            echo "<div>
            <span class='label'>Total Bayar</span>
            <span class='output'>Rp. ".number_format($totalBayar,2,",",".")."<span>
            </div>";
            ?>
        </div>
        <hr>
        <h1>Terima Kasih</h1>
        <hr>
        <a href="index.php">Input Lagi >>>> </a>
    </div>
</body>
</html>