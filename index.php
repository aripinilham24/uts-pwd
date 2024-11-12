<!-- nama   : M. Aripin Ilham -->
<!-- kelas  : TI23B -->
<!-- npm    : 2023310060 -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bioskop</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="contentIndex">
        <div class="header">
            <h1>CINEMA BINA INSANI 21</h1>
        </div>
        <form action="prosesIndex.php" method="post">
            <div class="flex-form">
                <div class="form">
                    <label for="kodeTiket">Kode Tiket</label>
                    <select name="kodeTiket" id="kodeTiket">
                        <?php
                        $kodeTiket = ["TRM", "MID", "TMM", "TWM"];
                        for ($i = 0; $i < count($kodeTiket); $i++) {
                            echo "<option value='$kodeTiket[$i]'>$kodeTiket[$i]</option>";
                        }
                        ?>
                    </select>

                    <label for="waktu">Waktu</label>
                    <select name="waktu" id="waktu">
                        <?php
                        $waktu = ["12.30", "13.15", "15.15", "16.15"];
                        for ($i = 0; $i < count($waktu);$i++) {
                            echo "<option value='$waktu[$i]'>$waktu[$i]</option>";
                        }
                        ?>
                    </select>

                    <label for="hari">Hari</label>
                    <select name="hari" id="hari">
                        <?php
                        $hari = ["Senin-Kamis", "Jumat", "Sabtu-Minggu"];
                        for ($i = 0; $i < count($hari); $i++) {
                            echo "<option value='$hari[$i]'>$hari[$i]</option>";
                        }
                        ?>
                    </select>

                    <label for="jumlahBeli">Jumlah Beli</label>
                    <input type="number" name="jumlahBeli" id="jumlahBeli" required>
                </div>

                <div class="img">
                    <img src="img/download.jpeg" alt="">
                </div>
            </div>
            <div class="button">
                <button type="submit">Simpan</button>
                <button type="reset">Batal</button>
            </div>
        </form>
    </div>
</body>

</html>