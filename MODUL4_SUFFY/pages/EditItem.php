<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">   
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

<?php
    include("../configur/connection.php");
?>

<body>

<!-- NAVBAR -->

<nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="height: 64px;">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav  gap-2">
                    <a class="nav-link active" aria-current="page" href="pages/home2.php">Home</a>
                    <a class="nav-link" href="Myfile.php">MyCar</a>
                </div>
            </div>
        </div>
    </nav>
<!-- END NAVBAR  -->

<?php

    $id_mobil = $_GET["id_mobil"];
    $query = "SELECT * FROM showroom_suffy_table where id_mobil ='$id_mobil'";
    $show = mysqli_query($connect, $query);
    
    while ($data = mysqli_fetch_array($show)) {
?>

<div class="container">
        <b><br><h2 style="text-align:left">Edit</h2></b>
        <p class="fw-light" style="text-align:left">Ubah detail mobil</p>
</div>

<section>
<div class="container">
<!-- <form action ="../configur/edit.php?id_mobil=<?php echo $data['id_mobil'];?>" method ="POST" enctype="multipart/form-data">> -->
    <div class="row">
        <div class="col">
            <div class="d-flex align-items:center">
            <img src="../foto/<?php echo $data["foto_mobil"];?>" alt="">
        </div>
    </div>
        <div class="col">
<!-- form -->
<div class="container mt-3">

<form action ="../configur/edit.php?id_mobil=<?php echo $data['id_mobil'];?>" method="POST" enctype="multipart/form-data">
<!-- nama mobil -->
<div class="mt-3">
        <b><label for="exampleFormControlInput1" class="form-label">Nama Mobil</label></b>
        <input type="text" class="form-control"  value="<?php echo $data['nama_mobil']; ?>" placeholder="Masukkan ulang Nama Mobil" id ="Nama" name="namaMobil" >
    </div>
<!-- nama pemilik -->
    <div class="mb-3">
        <b><label for="exampleFormControlInput1" class="form-label">Nama Pemilik </label></b>
        <input type="text" class="form-control"  value="<?php echo $data['pemilik_mobil']; ?>" placeholder="Siapa pemiliknya?" id ="Nama" name="namaPemilik" >
    </div>
<!-- merk mobil -->
    <div class="mb-3">
        <b><label for="exampleFormControlInput1" class="form-label">Merk</label></b>
        <input type="text" class="form-control"  value="<?php echo $data['merk_mobil']; ?>" placeholder="Mobil merk apa?" id ="start time" name="merk" >
    </div>
<!-- tgl beli -->
    <div class="mb-3">
        <b><label for="exampleFormControlInput1" class="form-label">Tanggal Beli</label></b>
        <input type="date" class="form-control"  value="<?php echo $data['tanggal_beli']; ?>"  id ="start time" name="tanggalBeli">
    </div>
<!-- deskripsi  -->
    <div class="mb-3">
        <b><label for="exampleFormControlTextarea1" class="form-label">deskripsi</label></b>
        <textarea class="form-control" id="Duration" name="deskripsi" rows="3"> <?php echo $data['deskripsi']; ?></textarea>
    </div>
<!-- masukkan foto -->
    <div class="mb-3">
        <b><label for="exampleFormControlInput1" class="form-label">Foto</label></b>
        <input type="file" class="form-control" name="filefoto">
    </div>
<!-- status pembayaran -->
<div class="mb-3">
        <b><label for="exampleFormControlInput1" class="form-label">Status Pembayaran</label></b>
    </div>
    
    <div class="mb-3">  
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="statuspembayaran" id="inlineRadio1" value="Lunas">
            <label class="form-check-label" for="inlineRadio1">Lunas</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="statuspembayaran" id="inlineRadio2" value="Belum Lunas">
         <label class="form-check-label" for="inlineRadio2">Belum Lunas</label>
        </div>
    </div>
<!-- selesai -->
    <div class="mb-3">
    <br><button type="submit" name="submit" class="btn btn-primary px-4">Selesai</button>
    </div>

</form>

<?php } ?>

</body>
</html>