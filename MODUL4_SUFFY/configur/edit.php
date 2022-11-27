<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include("connection.php");
$query = mysqli_query($connect,"SELECT * FROM showroom_suffy_table where id_mobil ='$_GET[id_mobil]'");

$direktorigmbr = "../foto/";
$foto =$_FILES['filefoto']['name'];
// file gambar
move_uploaded_file($_FILES['filefoto']['tmp_name'],$direktorigmbr.$foto);

if(isset($_POST['submit'])) {

  mysqli_query($connect, "UPDATE showroom_suffy_table SET

  nama_mobil = '$_POST[namaMobil]',
  pemilik_mobil = '$_POST[namaPemilik]',
  merk_mobil = '$_POST[merk]',
  tanggal_beli = '$_POST[tanggalBeli]',
  deskripsi = '$_POST[deskripsi]',
  foto_mobil = '$foto',
  status_pembayaran = '$_POST[statuspembayaran]'
  WHERE id_mobil = '$_GET[id_mobil]'");
  
  
  // data berhasil diedit
  echo "BERHASIL DIEDIT";
  echo "<meta http-equiv=refresh content=1;URL='../pages/Myfile.php'>";
}
	

?>  