<?php

include("../configur/connection.php");

if(isset($_POST['daftar'])) {
    $email = $_POST['email'];
    $nama = $_POST['nama'];
    $noHp = $_POST['no_hp'];
    $password1 = $_POST['password'];
    $password2 = $_POST['password2'];

    // mengecek di dalam database
    $cek_user = mysqli_query($connect,"SELECT * FROM user_suffy WHERE email = '$email'");
    $cek_login = mysqli_num_rows($cek_user);

    // mengecek ada di dalam database atau tidak
    if ($cek_login > 0) {
        echo "<script>
            alert ('email telah terdaftar');
            window.location = 'registrasi.php';
            </script>";
    } else {
        if ($password1 != $password2) {
            echo "<script>
            alert ('kata sandi yang anda masukkan tidak sesuai');
            window.location = 'registrasi.php';
            </script>";
        } else {
            mysqli_query($connect, "INSERT INTO user_suffy VALUES('','$nama','$email','$password1','$noHp')");
            echo "<script>
            alert ('data berhasil disimpan');
            window.location = 'login.php';
            </script>";
        }
    }
}
?>

<!doctype html>
<html lang="en">
<head >
    <title> Halaman Registrasi </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">      
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</head>
<body>
<section>
<div class="container">
<form action ="" method ="POST">
    <div class="row vh-50 align-items-center">
        <div class="col">
            <div class="d-flex justify-content-start">
                <div class="row mt-5">
                <img src="../foto/register2.jpg" class="card-img-top" alt="" width="90px" height="600px">
                </div>
            </div>
        </div>
        <div class="col">
            <h1 style="text-align:left">Registrasi</h1>    
        <form action ="" method="POST">
            <!-- email -->
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" >
            </div>
            <!-- nama -->
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="nama" name="nama">
            </div>
            <!-- nomor hp -->
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nomor Handphone</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="nomorhp" name="no_hp">
            </div>
            <!-- password -->
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Kata Sandi</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            </div>
            <!-- confirm pass -->
            <div class="mb-3">
                <label for="exampleInputPassword2" class="form-label">Konfirmasi Kata Sandi</label>
                <input type="password" class="form-control" id="exampleInputPassword2" name="password2">
            </div>

            
            
            <button type="submit" class="btn btn-primary" value = "daftar" a href="login.php" name= "daftar">Daftar</button><br>
            <br><p class="fw-light" style="text-align:left"> Anda sudah punya akun? <a href="login.php">login</a><p>
            </form>
    </div>
</form>
</div>
</section>

</body>
</html>
