<?php

// $hostname ="localhost";
// $user ="root";
// $password ="";
// $db_name = "modul3";

// $connect =mysqli_connect($hostname,$user,$password,$db_name) or die (mysqli_error($connect));

include "../configur/connection.php";

if(isset($_POST["login"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
// untuk menampilkan email yang sudah di daftar
    $hasil = mysqli_query($connect, "SELECT * FROM user_suffy WHERE email = '$email'");
    if(mysqli_num_rows($hasil) === 1){
        $row = mysqli_fetch_assoc($hasil);
        if($password == $row["password"]){
            header("Location: home2.php");
            exit;
        }
    }

    $error = true;
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
            <h1 style="text-align:left">Login</h1>    
        <form>
            <!-- ketika masukkan foto/password yang salah -->
            <?php if(isset($error)): ?>
                <p style="color:red;">Email / Password Salah!</p>
            <?php endif; ?>
            <!-- email -->
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
            </div>
            <!-- password -->
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Kata Sandi</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            </div>
            
            <button type="submit" class="btn btn-primary" name="login">Login</button><br>
            <br><p class="fw-light" style="text-align:left"> Anda belum punya akun? <a href="registrasi.php">Daftar</a><p>
            </form>
    </div>
</form>
</div>
</section>

</body>
</html>
