<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">   
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>MyBooking</title>
</head>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<body>

<?php
    if (isset($_POST["BookNow"])) {
        $dataMobil = $_POST["BookNow"];
        if ($dataMobil == "toyotarush") {
            $image = "toyotarush.jpg";
        } elseif ($dataMobil == "toyotaayla") {
            $image = "toyotaayla.jpg";
        } elseif ($dataMobil == "hondabrio") {
            $image = "hondabrio.jpg";
        }
    } else {
        $dataMobil = "Jenis Mobil";
        $image = "toyotarush.jpg";
    }
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
<div class="container">
<form action ="MyBooking.php" method ="POST">
    <div class="row">
        <div class="col">
            <div class="d-flex align-items:center">
            <img src="toyotarush.jpg" class="card-img-top" alt="RUSH">
        </div>
        </div>
        <div class="col">
<!-- form -->
    <b><br><h2 style="text-align:center">Rent your car now!</h2></br></b>
<form action ="MyBooking.php" method="POST">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Name</label>
        <input type="email" class="form-control"  value="Aurora_1202204316" id ="Nama" name="Nama">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Book Date</label>
        <input type="date" class="form-control"  placeholder="dd/mm/yyyy" id ="BookDate" name="BookDate">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Start Time</label>
        <input type="time" class="form-control"  placeholder="Nomor Hp " id ="start time" name="start time">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Duration (days)</label>
        <textarea class="form-control" id="Duration" name="Duration" rows="3"></textarea>
    </div>

    <label for="exampleFormControlInput1" class="form-label">Car Type </label>
    <?php
        if (empty($_GET["image"])) {
        ?>
            <div class="form-group">
                <select class="form-select" name="TipeMobil" value="TipeMobil" id="TipeMobil">
                    <option selected>Choose...</option>
                    <option value="RUSH">toyota rush</option>
                    <option value="AYLA">toyota ayla</option>
                    <option value="BRIO">honda brio</option>
                </select>
            </div>
        <?php } else { ?>
            <div>
                <select class="form-select" name="TipeMobil" id="TipeMobil">
                <option >Choose...</option>
                <option <?php if ($dataMobil == "toyotarush") {echo "selected";} ?> value="RUSH">Toyota Rush</option>
                <option <?php if ($dataMobil  == "toyotaayla") {echo "selected";} ?> value="AYLA">Toyota Ayla</option>
                <option <?php if ($dataMobil == "hondabrio") {echo "selected";} ?> value="BRIO">Honda Brio</option>
                </select>
            </div>
        <?php } ?>

        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
        <input type="number" class="form-control"  value="Number"  id ="Number" name="Number">
        </div>
    <div class="form-group">
            <br><label for="exampleFormControlInput1" class="form-label">Add Service(s)</label><br>
            <div class="form-check" >
            <input class="form-check-input" type="checkbox" value="Health" id="service" name ="service">
            <label class="form-check-label" for="flexCheckDefault">
                Health Protocol /Rp25.000
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="checkbox" value="Driver" id="driver" name="driver" >
            <label class="form-check-label" for="flexCheckChecked">
                Driver/ Rp100.000
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="checkbox" value="Fuel" id="flexCheckChecked" >
            <label class="form-check-label" for="flexCheckChecked">
                Fuel Filled / Rp 250.000
            </label>
            </div>
        </label>
      <br><div class="d-grid"><button type="submit" class="btn btn-success " data-bs-toggle="modal" data-bs-target="#exampleModal">
        Book
      </button>
        </div>
    </div>
</div>
</form>
<!-- footer -->
<footer class ="bg-light text-center fixed-bottom">
    <br><p class ="text-center"> Created by Suffy _1202204316 </p>
</footer>
</body>
</html>