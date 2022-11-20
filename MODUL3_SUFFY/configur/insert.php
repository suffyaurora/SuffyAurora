<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include("configur/connection.php")

	// membuat variabel untuk menampung data dari form
    $namaMobil = $_POST['namaMobil'];
    $namaPemilik = $_POST['namaPemilik'];
    $merk = $_POST['merk'];
    $tanggalBeli = $_POST['tanggalBeli'];
    $deskripsi = $_POST['deskripsi'];
    $statuspembayaran = $_POST['statuspembayaran'];

    $foto = $_FILES['foto']['name'];

//mengecek gambar
if($foto != "") {
  $ekstensi_diperbolehkan = array('png','jpg'); 
  $x = explode('.', $foto);
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['foto']['tmp_name'];   
  $angkaacak     = rand(1,999);
  $nama_gambarbaru = $angkaacak.'-'.$foto; 
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
                  //memindah file gambar ke folder gambar
                move_uploaded_file($file_tmp, '../dbimg/'.$nama_gambarbaru); 
                  $query = "INSERT INTO showroom(nama_mobil, pemilik_mobil, merk_mobil, tanggal, deskripsi, foto_mobil, status_pembayaran)
                  VALUE ('$namaMobil', '$namaPemilik', '$merk', '$tanggalBeli', '$deskripsi', '$foto', '$statuspembayaran')";
                  $result = mysqli_query($koneksi, $query);
                  // memeriksa query yang error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {

                    echo "<script>alert('Data berhasil ditambah.');window.location='Myfile.php';</script>";
                  }

} else {
   $query = $query = "INSERT INTO showroom(nama_mobil, pemilik_mobil, merk_mobil, tanggal, deskripsi, foto_mobil, status_pembayaran)
   VALUE ('$namaMobil', '$namaPemilik', '$merk', '$tanggalBeli', '$deskripsi', null, '$statuspembayaran')";
                  $result = mysqli_query($koneksi, $query);
                  // memeriksa query eror
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    
                    echo "<script>alert('Data berhasil ditambah.');window.location='Myfile.php';</script>";
                  }
} 
}