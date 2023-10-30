<?php 
session_start();
if (isset($_SESSION['username'])){
  header('Location:admin/index.php');  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Fadly Store - Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Fadly Store Cara Tercepat Dan Termudah Untuk Pembelian Diamond Mobile Legends.">
    <meta name="robots" content="index,nofollow">
    <meta name="author" content="Empe Shop">
    <meta name="keywords"
        content="diamond ml murah, top up ml murah, diamond mobile legend murah, Fadly Store">
    <meta name="language" content="ID">
    <meta name="coverage" content="Worldwide">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/alertify.min.js"></script>
    <link rel="stylesheet" href="css/alertify.min.css" />
    <link rel="stylesheet"
        href="css/themes/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css"
        href="css/dataTables.bootstrap4.min.css" />
    <script type="text/javascript"
        src="js/jquery.dataTables.min.js">
    </script>
    
    <script type="text/javascript"
        src="js/dataTables.bootstrap4.min.js">
    </script>
    <link rel="stylesheet" href="css/style.css">

</head>
<header>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light shadow-sm bg-custom">
        <div class="container">
            <a class="navbar-brand" href="#">
                 <img src="image/logostore.jpg" width="50px"> 
                <strong style="color: #fff;">Oxy Game Store</strong>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span style="color:#fff !important ; " class="navbar-toggler-icon" > <i class="fas fa-bars color-primary2" style="font-size: 26px;"></i></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="mr-auto"></div>
                <ul class="navbar-nav" >
                    <li class="nav-item" >
                        <a class="nav-link  active" href="Pages/HomePage.php" ><i class="fas fa-home"></i> Home</a >
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<body>
  
<div class="d-flex justify-content-center mt-5">
    <div class="card text-center mt-5">
        <div class="card-header">
            <h1>Login</h1>
        </div>
        <div class="card-body d-flex justify-content-center">


        <form method="POST" action="controler/dologin.php">
            
            <div class="input-group mb-3">
            <div class="input-group-text">
            <label for="username" style="width: 75px;">Username</label>
            </div>
            <input name="username" type="text" class="form-control-sm"  style="width: 200px;">
            </div>

            <div class="input-group mb-3">
            <div class="input-group-text">
            <label for="password" style="width: 75px;">Password</label>
            </div>
            <input name="password" type="password" class="form-control-sm" style="width: 200px;">
            </div>


            <button type="submit" class="btn btn-primary btn-sm mt-3">Login</button>
            
            </form>
        </div>
    </div>
</div>
    
    
</body>

</html>

