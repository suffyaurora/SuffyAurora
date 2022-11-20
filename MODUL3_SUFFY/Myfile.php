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
        <b><br><h2 style="text-align:left">My Show Room</h2></b>
        <p class="fw-light" style="text-align:left">List Show Room SUFFY - 1202204316</p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card" style="width: 30rem;">
                    <div class="row">
                        <div class="col">
                        <img src="mobil11.jpg" class="card-img-top" style="width: 30rem;">
                          <div class="card-body">
                            <h5 class="card-title">BMW I4</h5>
                            <p class="card-text">The first all-electric Gran Coupé, the BMW i4 delivers outstanding dynamics with a high level of comfort...</p>
                            <a href="#" class="btn btn-primary">Detail</a>
                            <button type="button" class="btn btn-danger">Delete</button>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 30rem;">
                    <div class="row">
                        <div class="col">
                        <img src="mobil2.jpg" class="card-img-top"  height="270px" width="30px">
                          <div class="card-body">
                            <h5 class="card-title">Mobil 2</h5>
                            <p class="card-text">The first all-electric Gran Coupé, the BMW i4 delivers outstanding dynamics with a high level of comfort...</p>
                            <a href="#" class="btn btn-primary">Detail</a>
                            <button type="button" class="btn btn-danger">Delete</button> 
                        </div>
                        </div>           
                    </div>
                </div>
            </div>

    <div class="container">
            <div class="col">
                <div class="card" style="width: 30rem;">
                    <div class="row">
                        <div class="col">
                            <img src="mobil3.jpg" class="card-img-top" alt="mobil3" />
                            <div class="card-body">
                                <h5 class="card-title">Mobil 3</h5>
                                <p class="card-text">The first all-electric Gran Coupé, the BMW i4 delivers outstanding dynamics with a high level of comfort...</p>
                                <a href="#" class="btn btn-primary">Detail</a>
                                <button type="button" class="btn btn-danger">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <div class="col">
    <br><br><p>Jumlah Mobil: 3</p>
    </div>
