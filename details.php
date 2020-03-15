<?php 
  include 'config.php';
  include 'action.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/font-awesome.min.css" />
    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css" />
    <!-- <link type="text/css" rel="stylesheet" media="screen" href="./assets/css/styles.css"/> -->
    <title>Crud App</title>
</head>
<body>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <!-- Brand -->
        <a class="navbar-brand" href="#">CRUD APP</a>
        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
            </ul>
        </div>
        <form class="form-inline" action="/action_page.php">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-primary" type="submit">Search</button>
        </form>
    </nav>
    <div class="container">
        <div class="row justify-content-center mt-3">
        <h2 class="text-danger">all available informations a bout:(<?= $vname;?>)</h2>
            <div class="col-md-6 mt-3 bg-info p-4 rounded">
            <div class="text-center">
                    <img src="<?= $vphoto;?>" alt="" width="200">
                </div>
                <h3 class="bg-danger p-2 rounded text-center text-light mt-3">ID : <?= $vid ; ?></h3>
                <h4 class="bg-danger p-2 rounded text-center text-light mt-3">NAME : <?= $vname ; ?></h4>
                <h4 class="bg-danger p-2 rounded text-center text-light mt-3">Email : <?= $vemail ; ?></h4>
                <h4 class="bg-danger p-2 rounded text-center text-light mt-3">Phone : <?= $vphone ; ?></h4>
                

            </div>
        </div>
    </div>


    <script src="./assets/js/jquery-3.3.1.js"></script>
    <script src="./assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
</body>

</html>