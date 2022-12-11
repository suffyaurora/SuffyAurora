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
<!-- NAVBAR -->

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav me-auto mb-lg-0">
            <a class="nav-link active" href="">Home</a>
            <a class="nav-link" href="{{ route('showroom.create') }}">MyCar</a>
        </div>
                    <ul class="nav navbar-nav navbar-right">
            <li><a href="form.php" class="btn btn-light btn-outline-primary" style="margin-right:50px">Add Car</a></li>
            <div class="dropdown">
                <button class="btn btn-light btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="margin-right:50px">
                    Suffy
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="">Profil</a></li>
                    <li><a class="dropdown-item" href="">Log Out</a></li>
                </ul>
                </div>
            </ul>
            </li>

                    </div>
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
            <a type="submit" href="form.php" class="btn btn-primary" nama="BookNow">Mycar</a>
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
        <br><br><br><br><br><br><br><img src="../foto/mobil.jpg" class="card-img-top" alt="RUSH"><br><br><br><br><br><br><br>
        </div>
</form>
</section>

</body>
</html>
