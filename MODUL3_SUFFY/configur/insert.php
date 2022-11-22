<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include("..\configur\connection.php");
if(isset($POST["submit"])) {
  $namaMobil = $_POST['namaMobil'];
    $namaPemilik = $_POST['namaPemilik'];
    $merk = $_POST['merk'];
    $tanggalBeli = $_POST['tanggalBeli'];
    $deskripsi = $_POST['deskripsi'];
    $statuspembayaran = $_POST['statuspembayaran'];

    $query = mysqli_query($connect,"INSERT INTO showroom_suffy_table(namaMobil, namaPemilik, merk, tanggalBeli, deskripsi, statuspembayaran) 
    VALUE ('$namaMobil', '$namaPemilik', '$merk', '$tanggalBeli', '$deskripsi', null, '$statuspembayaran')");
                  // $result = mysqli_query($connect, $query_value);
    if($query_value) {
      echo "<script>alert('Data telah ditambahkan')</script>";
      echo "<meta http-equiv='refresh' content='1 url=../Myfile.php'>";
    } else {
      echo "<script>alert('Gagal ditambahkan')</script>";
      echo "<meta http-equiv='refresh' content='1 url=../Myfile.php'>";
    }
}
	

    // $foto = $_FILES["filefoto"]["namaMobil"];

   