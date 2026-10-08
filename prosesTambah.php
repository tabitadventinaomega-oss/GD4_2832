<?php
session_start();

$nama = $_POST["namaKonser"];
$kategori = $_POST["pilihKategori"];
$harga = $_POST["harga"];

$folderTujuan = "bukti_bayar/";
        $namaFile = basename($_FILES["buktiBayar"]["name"]);
        $alamatFile = $folderTujuan . $namaFile;

        if(move_uploaded_file($_FILES["buktiBayar"]["tmp_name"], $alamatFile)){
            $tambahUpload = "Bukti pembayaran berhasil diupload.";
        }else{
            $tambahUpload = "Gagal upload bukti pembayaran.";
        }

$tiketBaru = [
            "nama" => $nama,
            "kategori" => $kategori,
            "harga" => $harga,
            "bukti" => $alamatFile
        ];
$_SESSION["daftarWar"][] = $tiketBaru;

header("Location: dashboard.php");
exit;
?>
