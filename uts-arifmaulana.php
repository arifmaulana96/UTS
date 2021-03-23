<!DOCTYPE html>
<html>
    <head>
        <title>UTS</title>
    </head>
    <body>
        <form method="POST" action="simpan.php">
            <table>
                <u><b>Form Input</u></b><br>
                <tr><td>Nama Wilayah</td><td>
                        <select name="nama_wilayah">
                            <option value="DKI Jakarta">DKI Jakarta</option>
                            <option value="Jawa Barat">Jawa Barat</option>
                            <option value="Banten">Banten</option>
                            <option value="Jawa Tengah">Jawa Tengah</option>
                        </select>
                <tr><td>Jumlah Positif</td><td><input type="text" name="jmlh_positif"></td></tr>
                <tr><td>Jumlah Dirawat</td><td><input type="text" name="jmlh_dirawat"></td></tr>
                <tr><td>Jumlah Sembuh</td><td><input type="text" name="jmlh_sembuh"></td></tr>
                <tr><td>Jumlah Meninggal</td><td><input type="text" name="jmlh_meninggal"></td></tr>
                <tr><td>Nama Operator</td><td><input type="text" name="nama"></td></tr>
                <tr><td>Nim Mahasiswa</td><td><input type="text" name="nim"></td></tr>
                <tr><td colspan="2"><button type="submit" value="submit">Simpan & Tampilkan</button></td></tr>
            </table>
        </form>
    </body>
</html>