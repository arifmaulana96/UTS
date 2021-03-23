<!DOCTYPE html>
<html>
<head>
	<title>Form Input</title>
  <style>
  .link-button{
    text-decoration: none;
    background-color: #eeeeee;
    color: black;
    padding: 2px 6px 2px 6px;
    border: 1px solid #c2c2c2;
    border-radius:2px;
  }
  </style>
</head>
<body>
<h2 align="left">Form Input</h2>
<hr>

<form name="form1" method="post" action="simpan.php">
    <table width="700" border="0" align="left"  >
      <tr>
        <td width="250">Nama Wilayah</td>
        <td width="530">
        	<select name="nm_wilayah" type="text" id="nm_wilayah">
        		<option>-</option>
        		<option>DKI Jakarta</option>
        		<option>Banten</option>
        		<option>Jawa Barat</option>
        		<option>Jawa Tengah</option>
        	</select>
        </td>
      </tr>
      <tr>
        <td>Jumlah Positif</td>
        <td><input size="30" name="jml_positif" type="text" id="jml_positif" required></td>
      </tr>
      <tr>
        <td>Jumlah Dirawat</td>
        <td><input size="40" name="jml_dirawat" type="text" id="jml_dirawat" required></td>
      </tr>
      <tr>
        <td>Jumlah Sembuh</td>
        <td><input size="40" name="jml_sembuh" type="text" id="jml_sembuh" required></td>
      </tr>
      <tr>
        <td>Jumlah Meninggal</td>
        <td><input size="40" name="jml_meninggal" type="text" id="jml_meninggal" required></td>
      </tr>
      <tr>
        <td>Nama Operator</td>
        <td><input size="40" name="nm_operator" type="text" id="nm_operator" required></td>
      </tr>
      <tr>
        <td>Nim Mahasiswa</td>
        <td><input size="40" name="nim" type="text" id="text" required></td>
      </tr>
      <tr>
        <td></td>
        <td><input name="Submit" type="submit" value="Simpan"></td>
      </tr>
      <tr>
        <td></td>
        <td align="left"><a href="tampil.php" class="link-button">Tampilkan</a></br></td>
      </tr>
    </table>
    </form>

</body>
</html>