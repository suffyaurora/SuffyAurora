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
  $imgsrc = ["toyotarush.jpg", "toyotaayla.jpg", "hondabrio.jpg"];
?> 

<!-- NAVBAR -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="height: 64px;">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav  gap-2">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    <a class="nav-link" href="booking.php">Booking</a>
                </div>
            </div>
        </div>
    </nav>
<!-- END NAVBAR  -->


<section>
    <br><h1 style="text-align:center">WELCOME TO EAD RENT</h1></br>
    <p style="text-align:center">find your best deal, here!!
    </p>
</section>
<!-- JENIS MOBIL -->
<div class="container ">
        
<div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="row">
                        <div class="col">
                        <img src=<?=$img_src[0]?> class="card-img-top" alt="RUSH">
                          <div class="card-body">
                            <h5 class="card-title">Toyota Rush</h5>
                            <p class="card-text">Rp. 200000/day</p>
                          </div>
                          <ul style="text-align:center" class="list-group list-group-flush">
                            <li class="list-group-item">7 Kursi</li>
                            <li class="list-group-item">1500 CC</li>
                            <li class="list-group-item">Manual</li>
                            <li class="list-group-item"></li>
                          </ul>
                          <form action="Booking.php" method="POST">
                          <div class="d-flex justify-content-center">
                          <button  type="submit" href="#" class="btn btn-primary " value="RUSH" nama="BookNow">Book Now</a>
                          </div>
                          </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="row">
                        <div class="col">
                        <img src=<?=$img_src[1]?> class="card-img-top" alt="AYLA">
                          <div class="card-body">
                            <h5 class="card-title">Toyota Ayla</h5>
                            <p class="card-text">Rp. 150000/day</p>
                          </div>
                          <ul style="text-align:center" class="list-group list-group-flush">
                            <li class="list-group-item">5 Kursi</li>
                            <li class="list-group-item">1200 CC</li>
                            <li class="list-group-item">Manual</li>
                            <li class="list-group-item"></li>
                          </ul>
                          <form action="Booking.php" method="POST">
                          <div class="d-flex justify-content-center">
                          <button type="submit" href="#" class="btn btn-primary" value="AYLA" nama="BookNow">Book Now</a>
                          </div>
                          </form>
                        </div>           
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="col">
                    <div class="row">
                        <div class="col">
                        <img src=<?=$img_src[2]?> class="card-img-top" alt="BRIO">
                          <div class="card-body">
                            <h5 class="card-title">Honda Brio</h5>
                            <p class="card-text">Rp. 150000/day</p>
                          </div>
                          <ul style="text-align:center" class="list-group list-group-flush">
                            <li class="list-group-item">5 Kursi</li>
                            <li class="list-group-item">1200 CC </li>
                            <li class="list-group-item">Automatic</li>
                            <li class="list-group-item"></li>
                          </ul>
                          <form action="Booking.php" method="POST">
                          <div class="d-flex justify-content-center">
                          <button type="submit" href="#" class="btn btn-primary" value="BRIO" nama="BookNow">Book Now</a>
                          </div>
                          </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
<!-- footer -->
<footer class ="bg-light text-center fixed-bottom">
  <br><p class ="text-center"> Suffy _1202204316 </p>
</footer>
</body>
</html>
