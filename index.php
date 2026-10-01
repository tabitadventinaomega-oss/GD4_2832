<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <title>TiketWar</title>
    </head>
    <body>
        <?php
        $daftarKonser = [
            [
            "nama" => "Coldplay - Music of the Spheres",
            "tanggal" => "2026-03-15",
            "kategori" => "Festival",
            "harga" => 1500000
            ],
            [
                "nama" => "Dewa 19 Reunion Show",
                "tanggal" => "2026-04-02",
                "kategori"=> "VIP",
                "harga" => 2500000
            ],
            [
                "nama" => "NCT Dream World Tour",
                "tanggal" => "2026-05-20",
                "kategori" => "Reguler",
                "harga" => 900000
            ],
        ];
        ?>

        <p>Konser terdekat: <?php echo $daftarKonser[0]["nama"]; ?></p>
        <p>Tanggal: <?php echo $daftarKonser[0]["tanggal"]; ?></p>

        <?php
        $hargaAsli = $daftarKonser[0]["harga"];
        $persenDiskon = 20;
        $hargaSetelahDiskon = $hargaAsli - ($hargaAsli * $persenDiskon / 100);
        $tiketMasihAda = $daftarKonser[0]["harga"]>0;
        ?>

        <p>Harga asli: Rp<?php echo $hargaAsli; ?></p>
        <p>Setelah diskon <?php echo $persenDiskon; ?>%: Rp<?php echo $hargaSetelahDiskon; ?></p>

        <?php
        $sisaTiket = $daftarKonser[0]["harga"] > 0 ? 15 : 0;
        if ($sisaTiket > 10) {
            $statusTiket = "Masih Banyak";
        } elseif ($sisaTiket > 0) {
            $statusTiket = "Sisa Dikit, Buruan!";
        } else {
            $statusTiket = "Sold  Out";
        }

        $kategori = $daftarKonser[0]["kategori"];
        switch ($kategori) {
            case "Festival": $badge = "Festival Pass"; break;
            case "VIP": $badge = "VIP Access"; break;
            case "Reguler": $badge = "Reguler"; break;
            default: $badge = "Kategori tidak dikenal";
        }
        ?>
        <p>Status: <?php echo $statusTiket; ?></p>
        <p>Kategori: <?php echo $badge; ?></p>

        <?php
        $namaKonser = "Coldplay - Music of the Spheres";
        $hargaTiket = 1500000;
        $sisaTiket = 25;
        $sudahSoldOut= false;
        $kategoriTiket = "Festival";
        ?>


        <p>Konser: <?php echo $namaKonser; ?></p>
        <p>Harga: Rp<?php echo $hargaTiket; ?></p>
        <p>Sisa Tiket: <?php echo $sisaTiket; ?></p>
        <p>Kategori Tiket: <?php echo $kategoriTiket; ?></p>

        <?php
        echo "Selamat datang di ByteWar - war tiket konser paling gercep";
        ?>
    </body>
</html>