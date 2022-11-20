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
    include("configur/connection.php");
?>

<body>

<!-- NAVBAR -->

<nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="height: 64px;">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav  gap-2">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    <a class="nav-link" href="booking.php">MyCar</a>
                </div>
            </div>
        </div>
    </nav>
<!-- END NAVBAR  -->

<div class="container">
        <b><br><h2 style="text-align:left">BMW I4</h2></b>
        <p class="fw-light" style="text-align:left">Detail Mobil BMW i4</p>
</div>

<section>
<div class="container">
<form action ="MyBooking.php" method ="POST">
    <div class="row">
        <div class="col">
            <div class="d-flex align-items:center">
            <img src="mobil11.jpg" class="card-img-top" alt="mobil">
        </div>
        </div>
        <div class="col">
<!-- form -->
<div class="container">
<form action ="MyBooking.php" method="POST">
    <div class="mb-3">
        <b><label for="exampleFormControlInput1" class="form-label">Nama Mobil</label></b>
        <input type="email" class="form-control"  value="BMW i4"  id ="Nama" name="Nama">
    </div>
    <div class="mb-3">
        <b><label for="exampleFormControlInput1" class="form-label">Nama Pemilik </label></b>
        <input type="email" class="form-control"  value="Nama - NIM"  id ="Nama" name="Nama">
    </div>
    <div class="mb-3">
        <b><label for="exampleFormControlInput1" class="form-label">Merk</label></b>
        <input type="email" class="form-control"  value="BMW" id ="start time" name="start time">
    </div>
    <div class="mb-3">
        <b><label for="exampleFormControlInput1" class="form-label">Tanggal Beli</label></b>
        <input type="date" class="form-control"  value="BMW" id ="start time" name="start time">
    </div>
    <div class="mb-3">
        <b><label for="exampleFormControlTextarea1" class="form-label">Duration (days)</label></b>
        <textarea class="form-control" id="Duration" name="Duration" rows="3">The first all-electric Gran Coupé, the BMW i4 delivers outstanding dynamics with a high level of comfort and the ideal qualities to make it your daily driver.The five-door model comes equipped with fifth-generation BMW eDrive technology for sporty performance figures – reaching up to 340 hp.With a long range of up to 591 kilometres* and five spacious full-sized seats, it is the perfect companion for any journey.</textarea>
    </div>

    <div class="mb-3">
        <b><label for="exampleFormControlInput1" class="form-label">Foto</label></b>
        <input type="file" class="form-control"  value="BMW" id ="start time" name="start time">
    </div>

    <div class="mb-3">
        <b><label for="exampleFormControlInput1" class="form-label">Status Pembayaran</label></b>
    <div class="mb-3">  
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
    <label class="form-check-label" for="inlineRadio1">Lunas</label>
    </div>
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
    <label class="form-check-label" for="inlineRadio2">Belum Lunas</label>
    </div>
    <div class="mb-3">
    <br><a type="submit" href="#" class="btn btn-primary" nama="BookNow">Edit</a>
    </div>
    </div>
</form>