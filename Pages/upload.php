<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OxyGameStore - Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index,nofollow">
    <meta name="language" content="ID">
    <meta name="coverage" content="Worldwide">
    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/alertify.min.js"></script>
    <link rel="stylesheet" href="../css/alertify.min.css" />
    <link rel="stylesheet"
        href="../css/themes/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css"
        href="../css/dataTables.bootstrap4.min.css" />
    <script type="text/javascript"
        src="../js/jquery.dataTables.min.js">
    </script>
    
    <script type="text/javascript"
        src="../js/dataTables.bootstrap4.min.js">
    </script>
    <link rel="stylesheet" href="../css/style.css">
</head>
<header>
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm bg-custom">
        <div class="container">
            <a class="navbar-brand" href="#">
                 <img src="../image/logostore.jpg" width="50px"> 
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
                        <a class="nav-link  active" href="HomePage.php" ><i class="fas fa-home"></i> Home</a >
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<body>
    <center>
    <h1>Silahkan Upload Bukti Pembayaran</h1>
    <h4>BANK BCA - 5211706512 a/n OxyGameStore</h4>
    <br>
    <h4>BANK BNI - 0907553773 a/n OxyGameStore</h4>
    <br><br><br>
        <?php
        $bukti=$_GET['bukti'];
        ?>
        <form action="../controler/doUpload.php?bukti=<?=$bukti;?>" method="POST" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="submit" name="bupload" value="Konfirmasi">
        </form>

        <?php 
        require_once '../db/db.php';

        $tampil = mysqli_query($conn, "SELECT * FROM tb_transaksi");
        while($data = mysqli_fetch_array($tampil)){
        ?>

        <?php } ?>
    </center>

</body>
</html>