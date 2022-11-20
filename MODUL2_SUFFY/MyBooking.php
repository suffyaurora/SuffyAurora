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
<b><br><h4 style="text-align:center">Thank You AURORA_1202204316 For Reserving</h4></br></b>
<p style="text-align:center">please double check your reservation details></p>

<?php
  $BookingNumber = $_POST[""];
  $name = $_POST["Nama"];
  $checkin = $_POST["BookDate"];
  $checkout = $_POST["Duration"];
  $tipemobil = $_POST["TipeMobil"];
  $number = $_POST["Number"];
  $service = $_POST["service"];
  $price = $_POST["price"];
?>

<div class ="container">
    <!-- tabel -->
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Booking Number</th>
          <th scope="col">Name</th>
          <th scope="col">Check In</th>
          <th scope="col">Check Out</th>
          <th scope="col">Car Type</th>
          <th scope="col">Phone Number</th>
          <th scope="col">Service</th>
          <th scope="col">Total Price</th>
        </tr>
      </thead>
      <tbody>
        <tr class="table-secondary">
          <th scope="row">1</th>
          <td><?php rand()?></td>
          <td><?php echo $name ?></td>
          <td><?php echo $checkin?></td>
          <td><?php echo $checkout?></td>
          <td><?php echo $tipemobil?></td>
          <td><?php echo $number ?></td>
          <td><?php echo $service ?></td>
          <td><?php echo $price?> </td>
        </tr>
      </tbody>
    </table>
<!-- footer -->
<footer class ="bg-light text-center fixed-bottom">
  <br><p class ="text-center"> Created by Suffy _1202204316 </p>
</footer>
</body>
</html>
