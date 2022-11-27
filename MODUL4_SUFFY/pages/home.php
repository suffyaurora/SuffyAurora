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
                    <form class="d-flex" role="submit">
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
<div class="container p-2 vh-100">
<form action ="form.php" method ="POST">
    <div class="row vh-50 align-items-center">
        <div class="col">
            <h1 style="text-align:left">Selamat Datang di Show Room SUFFY AURORA KHAIRUNNISA</h1>
            <p class="fw-light" style="text-align:left"> At lacus vitae nulla sagittis scelerisque nisl. Pellentesque duis cursus vestibulum, facilisi ac, sed faucibus.<p>
            <!-- <a type="submit" href="pages/Myfile.php" class="btn btn-primary" nama="BookNow">Mycar</a> -->
            <div class="d-flex justify-content-start">
                <div class="row">
                    <div class="col">
                        <br><br><img src="foto/logo-ead.png" width="90px" height="25px"/>
                    </div>
                    <div class="col">
                        <br><br><p>SUFFY_1202204316</p>
                    </div>
                </div>
            </div>
           
        </div>
      
        <div class="col">
        <br><br><br><br><br><br><br><img src="foto/mobil.jpg" class="card-img-top" alt="RUSH"><br><br><br><br><br><br><br>
        </div>
</form>
</section>

</body>
</html>
