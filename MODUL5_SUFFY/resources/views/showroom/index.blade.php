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
<div class="container mt-5">
    <b><br><h2 style="text-align:left">My Show Room</h2></b>
    <p class="fw-light" style="text-align:left">List Show Room Suffy - 1202204316</p>
    @foreach($showrooms as $show)
    <div class="row">
        <div class="col">
            <div class="card mb-3" style="width: 20rem;">
                <img src="foto/{{ $show->image }}" class="card-img-top" style="width: 20rem;">
                    <div class="card-body">
                    <h5 class="card-title">{{ $show->name }}</h5>
                    <p class="card-text">{{ $show->description }}</p>
                    <a href="" class="btn btn-primary">Detail</a>
                    <a href="" class="btn btn-danger">Delete</a>
                    </div>  
            </div>
        </div>
        @endforeach
    </div>
</body>
</html>