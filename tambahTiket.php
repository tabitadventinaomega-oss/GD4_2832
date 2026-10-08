<!DOCTYPE html>
<html lang="id">
    <head><title>Tambah Tiket - ByteWar</title></head>
    <body>
        <h1>Form Tambah Tiket</h1>

        <form action="prosesTambah.php" method="post" enctype="multipart/form-data">
            <p>
                <label>Nama Konser:</label><br>
                <select name="namaKonser" required>
                    <option value="Coldplay">Coldplay - Music of The Spheres</option>
                    <option value="Dewa 19">Dewa 19 Reunion Show</option>
                    <option value="NCT Dream">NCT Dream World Tour</option>
                </select>
            </p>
            <p>
                <label>Kategori:</label><br>
                <select name="pilihKategori" required>
                    <option value="Festival">Festival</option>
                    <option value="VVIP">VIP</option>
                    <option value="Reguler">Reguler</option>
                </select>
            </p>
            <p>
                <label>Harga:</label><br>
                <input type="number" name="harga" required>
            </p>
            <p>
                <label>Bukti Pembayaran:</label><br>
                <input type="file" name="buktiBayar" accept=".jpg,.jpeg,.png" required>
            </p>
            <button type="submit">Tambah Tiket</button>
        </form>
    </body>
</html>