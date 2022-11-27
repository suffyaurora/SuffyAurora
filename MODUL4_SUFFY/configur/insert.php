<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include("connection.php");

if(isset($_POST["submit"])) {
  
  $direktorigmbr = "../foto/";
  $foto =$_FILES['filefoto']['name'];

  mysqli_query($connect, "INSERT INTO showroom_suffy_table SET
  nama_mobil = '$_POST[namaMobil]',
  pemilik_mobil = '$_POST[namaPemilik]',
  merk_mobil = '$_POST[merk]',
  tanggal_beli = '$_POST[tanggalBeli]',
  deskripsi = '$_POST[deskripsi]',
  foto_mobil = '$foto',
  status_pembayaran = '$_POST[statuspembayaran]'");
  // file gambar
  move_uploaded_file($_FILES['filefoto']['tmp_name'],$direktorigmbr.$foto);
  // data berhasil ditambahkan
  echo "BERHASIL DITAMBAHKAN";
  echo "<meta http-equiv=refresh content=1;URL='../pages/Myfile.php'>";
}
	

?>  