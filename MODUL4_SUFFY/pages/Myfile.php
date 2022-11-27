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
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    <a class="nav-link" href="Myfile.php">MyCar</a>
                </div>
            </div>
        </div>
    </nav>
<!-- END NAVBAR  -->
<div class="container mt-5">
    <b><br><h2 style="text-align:left">My Show Room</h2></b>
    <p class="fw-light" style="text-align:left">List Show Room Suffy - 1202204316</p>
<?php
    //untuk membuat dan mengurutkan data terkecil ke terbsar dari showroom
    $query="SELECT * FROM showroom_suffy_table ORDER BY id_mobil ASC";
    $show = mysqli_query($connect,$query);
    
    while ($data = mysqli_fetch_array($show)) {
?>
    <div class="row">
        <div class="col">
            <div class="card mb-3" style="width: 20rem;">
                <img src="../foto/<?php echo $data['foto_mobil']; ?>" class="card-img-top" style="width: 20rem;">
                    <div class="card-body">
                    <h5 class="card-title"><?php echo $data['nama_mobil']; ?></h5>
                    <p class="card-text"><?php echo $data['deskripsi']; ?></p>
                    <a href="../pages/ItemDetail.php? id_mobil=<?php echo $data['id_mobil'];?>" class="btn btn-primary">Detail</a>
                    <a href="../configur/delete.php?id_mobil=<?php echo $data['id_mobil'];?>" class="btn btn-danger">Delete</a>
                    </div>  
            </div>
        </div>
    </div>
<?php } ?>

<?php

    $jumlahmobil = mysqli_query($connect, "SELECT * FROM showroom_suffy_table");
    $nambahmobil = mysqli_num_rows ($jumlahmobil);

?>
    <div class="container">
        <p>Jumlah Mobil : <?php echo "$nambahmobil" ?> </p>
    </div>
</body>
</html>