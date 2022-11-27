<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">      
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

<body>

<?php
$connect = mysqli_connect("localhost","root","","modul3");
?>
<!-- NAVBAR -->

<nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="height: 64px;">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav  gap-2">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    <form class="d-flex" role="search">
                    <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
                        <div class="d-flex justify-content-start ">
                        <a type="submit" href="pages/login.php" class="btn btn-primary" nama="BookNow">Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </nav>
<!-- END NAVBAR  -->

<section>
<div class="container mt-4">
    <b><h2 style="text-align:center">Profile</h2></b>
</div>
<div class="container">
<form action ="Myfile.php" method ="POST">
    <div class="row vh-50 align-items-center">
        <div class="col">
            <div class="d-flex justify-content-start">
                <div class="row mt-1">
        <!-- email -->
        <div class="row g-2 align-items-center">
        <div class="col-auto">
            <label for="inputPassword6" class="col-form-label">Email :</label>
        </div>
        <div class="col-auto">
            <input type="email" id="inputEmail" class="form-control"  aria-describedby="passwordHelpInline" placeholder="">
        </div>
        <!-- nama -->
        <div class="row g-2 align-items-center">
        <div class="col-auto">
            <label for="inputNama" class="col-form-label">Nama :</label>
        </div>
        <div class="col-auto">
            <input type="text" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" placeholder="">
        </div>
        <!-- noHp -->
        <div class="row g-2 align-items-center">
        <div class="col-auto">
            <label for="inputPassword6" class="col-form-label">Nomor Handphone :</label>
        </div>
        <div class="col-auto">
            <input type="text" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" placeholder="">
        </div>
        <p>------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
        <!-- password -->
        <div class="row g-1 align-items-center">
        <div class="col-auto">
            <label for="inputPassword6" class="col-form-label">Kata Sandi :</label>
        </div>
        <div class="col-auto">
            <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" placeholder="Kata Sandi">
        </div>
        <!-- konfirmasi password -->
        <div class="row g-2 align-items-center">
        <div class="col-auto">
            <label for="inputPassword6" class="col-form-label"> Konfirmasi Kata Sandi :</label>
        </div>
        <div class="col-auto">
            <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" placeholder="Konfirmasi Kata Sandi">
        </div>
        <!-- warna navbar -->
        <div class="row g-2 align-items-center">
        <div class="col-auto">
            <label for="inputPassword6" class="col-form-label">Warna Navbar :</label>
        </div>
        <div class="col-auto">
            <input type="text" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" placeholder="Blue">
        </div>

  </div>
</div>
</form>
</section>

<section>
    <div class="container mt-3">
    <a  type="submit" href="Myfile.php" class="btn btn-primary" nama="Update">Update</a>
    <div class="d-flex justify-content-start">
                <div class="row mt-3">
                    <div class="col">
                        <br><br><img src="logo-ead.png" width="90px" height="25px"/>
                    </div>
                    <div class="col">
                        <br><br><p>SUFFY_1202204316</p>
                    </div>
                </div>
            </div>
    </div> 
    
</section>
</body>
</html>