<?php
//cek button    
    include 'koneksi.php';
 
    $nama_wilayah		= $_POST['nama_wilayah'];
    $jmlh_positif		= $_POST['jmlh_positif'];
    $jmlh_dirawat		= $_POST['jmlh_dirawat'];
    $jmlh_sembuh		= $_POST['jmlh_sembuh'];
    $jmlh_meninggal		= $_POST['jmlh_meninggal'];
    $nama 				= $_POST['nama'];
    $nim 				= $_POST['nim'];
	
	$input    ="INSERT INTO ujian(nama_wilayah,jmlh_positif,jmlh_dirawat,jmlh_sembuh,jmlh_meninggal,nama,nim) VALUES ('$nama_wilayah','$jmlh_positif','$jmlh_dirawat','$jmlh_sembuh','$jmlh_meninggal','$nama','$nim')";
   mysqli_query($koneksi, $input);
//Tutup koneksi engine MySQL

    header("location:tampil.php");

?>
