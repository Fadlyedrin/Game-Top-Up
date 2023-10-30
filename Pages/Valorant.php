<?php 
require_once '../db/db.php';
?>

<html>

<head>
    <title>OxyGameStore - Order</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="OxyGameStore Cara Tercepat Dan Termudah Untuk Pembelian VP Valorant.">
    <meta name="robots" content="index,nofollow">
    <meta name="keywords"
        content="top up vp valorant murah, OxyGameStore">
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
    <nav class="navbar fixed-top navbar-expand-lg navbar-light shadow-sm bg-custom">
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
                        <a class="nav-link  active" href="Homepage.php" ><i class="fas fa-home"></i> Home</a >
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<body>
    <br><br><br><br>
    <div class="container">
        <div class="row mt-2" style="margin:0px">
            <div class="col-md-12 col-sm-12 col-lg-4">
                <div class="text-center text-md-left mb-2">
                    <img src="../image/valorant.jpg" class="img-responsive rounded mb-2" width="280px" height="200px">
                </div>
                <h5 style="color:#fff;background-color: #2e2e2e;padding: 10px;margin-right: 20px;text-align: center;border-radius: 10px;">Valorant</h5>
                <span class="strip-primary"></span>
                <p class="mt-4 pr-4"><h6>Redeem Code</h6><b>Beli Valorant Points hanya dalam hitungan menit! </b>
                    <p>
                    </p>
                    <b><font color="#fff">Top Up Valorant point untuk akunmu di OxyGameStore dijamin termurah dan tercepat !!</font></b>
                    <br/>
                    <br/>
                    <b><font color="#fff"> Cara Order :</font> </b>
                    <br/>
                    <font color="#fff">1. Pilih nominal voucher yang ingin kamu beli</font> <br/>
                    <font color="#fff">2. Pilih nominal yang ingin kamu beli</font><br/>
                    <font color="#fff">3. Lakukan pembayaran melalui BCA, BNI, OVO, Shopee Pay, DANA, GOPAY, dan Link-Aja </font><br/>
                    <font color="#fff">4. Isi nomor whatsapp kamu dengan benar karena kami akan memberikan notifikasi jika pesanan sudah di proses.</font><br/>
                    <font color="#fff">5. Selamat! <i>Redeem Code Valorant Points</i> akan langsung terkirim setelah pembayaran berhasil / mendapatkan notifikasi whatsapp dari kami.
                    </font><br/>
                    <br/>
                    Cara redeem valorant points:
                    <br>
                    1. Login ke Valorant kamu.
                    <br>
                    2. Klik tombol valorant pointsmu di sudut kanan atas.
                    <br>
                    3. Pilih tombol <i>"Riot PIN and Codes"</i> di bagian pilihan pembayaran, <i>"Select Purchase Method"</i>
                    <br>
                    4. Masukkan kode Riot PIN yang sudah di beli dan klik "Submit".
                    <br>
                    5. Valorant points sukses terisi.</font>
                    <br><br>
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-8">
                            <form action="../controler/doBook.php" class="contact-form" id="orderform" method="POST" autocomplete="off">
                                <div class="row">
                                <input type="hidden" name="data" value="-"><div id="note"></div>
                                <input type="hidden" name="zoneid" value="-"><div id="note"></div>
                                    <div class="col-12 mb-3">
                                    <div class="card">
                                            <div class="card-body">
                                            <div class="text-white text-center position-absolute circle-primary" >1</div>
                                            <h5 style="margin-left: 40px; color:#fff;">Pilih nominal</h5>
                                                <hr><div class="mt-4">
                                                    <div class="panel-topup">
                                                        <!-- <input type="radio" id="service0" name="service" value="245"><label onclick="ganti('label_service0')" id="label_service0"  for="service0">375 VP </label><input type="radio" id="service1" name="service" value="246"><label onclick="ganti('label_service1')" id="label_service1"  for="service1">650 VP </label><input type="radio" id="service2" name="service" value="247"><label onclick="ganti('label_service2')" id="label_service2"  for="service2">1350 VP </label><input type="radio" id="service3" name="service" value="248"><label onclick="ganti('label_service3')" id="label_service3"  for="service3">2100 VP </label><input type="radio" id="service4" name="service" value="249"><label onclick="ganti('label_service4')" id="label_service4"  for="service4">3600 VP </label><input type="radio" id="service5" name="service" value="250"><label onclick="ganti('label_service5')" id="label_service5"  for="service5">7500 VP </label>                                        </div> -->
                                                        <?php $sql="SELECT * from tb_product a inner join tb_games b
                                                        on a.id_games = b.id_games where nama_game='valorant'"; ?>
                                                        <?php $result=mysqli_query($conn,$sql); ?>
                                                        <?php if(mysqli_num_rows($result)>0){ ?>
                                                        <?php
                                                        $service = 'service';
                                                        $no=1;                                      
                                                            while($data = mysqli_fetch_array($result)){
                                                        ?>
                                                        <input type="radio" id="service<?php echo $no; ?>" name="service" value="<?php echo $data['id_product']; ?>"><label onclick="ganti('service<?php echo $no; ?>')" id='service<?php echo $no; ?>' for='service<?php echo $no; ?>'><?php echo $data["jumlah_dm"]; ?> VP <?php echo $data["harga"]; ?></label>  
                                                                                 
                                            <?php $no++; } ?>
                                            <?php } ?> </div>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <div class="card">
                                                <div class="card-body">
                                                <div class="text-white text-center position-absolute circle-primary">2</div>
                                                <h5 style="margin-left: 40px;">Pilih metode pembayaran</h5>
                                                    <hr><div class="mt-4">
                                                        <div class="methods">
                                                            <input class="mtdbtn" type="radio" id="method0" name="method" value="TRANSFER BANK BCA">
                                                <label class="mtdlabel" for="method0"><img src="../image/bca.png" class="img-fluid">
                                                <p class="float-right">
                                                        <span class="badge badge-success" id="TRANSFER_BANK_BCA"></span>
                                                    </p>
                                                </label><input class="mtdbtn" type="radio" id="method1" name="method" value="QRIS">
                                                <label class="mtdlabel" for="method1"><img src="../image/qris.png" class="img-fluid">
                                                <p class="float-right">
                                                        <span class="badge badge-success" id="QRIS"></span>
                                                    </p>
                                                </label><input class="mtdbtn" type="radio" id="method3" name="method" value="VA BNI">
                                                <label class="mtdlabel" for="method3"><img src="../image/bni.png" class="img-fluid">
                                                <p class="float-right">
                                                        <span class="badge badge-success" id="VA_BNI"></span>
                                                    </p>
                    
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <div class="card">
                                                <div class="card-body">
                                                <div class="text-white text-center position-absolute circle-primary">3</div>
                                                <h5 style="margin-left: 40px;">Masukan nomor whatsapp</h5>
                                                    <hr><div class="mt-4 mb-4">
                                                        <input type="number" class="form-control" name="nohp" placeholder="08xxxxxxxxx"
                                                            required>
                                                        </div>
                                                     </div>
                                                </div>
                                            </div>
                                        <div class="col-12 mb-3">
                                            <input type="submit" value="Beli Sekarang" id="orderbtn" class="btn btn-original">
                                            <input type="hidden" name="cid" value="3">
                                        </div>
                                        <div id="ordermodal" class="modal fade" tabindex="-1" role="dialog">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <div id="orderdetail"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    </body>
                    <div class="container container-1440">
                        <div class="px-lg-3 pt-3">
                          <div class="row">
                            <div class="col-12">
                              <div class="caption-group caption-group caption-group-lg-left">
                                <div class="sub-caption">Dukungan Pelanggan</div>
                    
                                <div class="caption">
                                  <h2>Hubungi kami</h2>
                                </div>
                              </div>
                    
                              <div class="home-cs-container mt-3">
                      
                                <a class="home-cs-card" href="https://www.instagram.com/oxygaming.store/" target="_blank">
                                  <div class="cs-image">
                                    <img alt="" src="../image/ig.svg">
                                  </div>
                                  <div class="cs-caption">Instagram</div>
                                </a>
                    
                                 <a class="home-cs-card" href="http://wa.me/6281289975343" target="_blank">
                                          <div class="cs-image">
                                              <img alt="" src="../image/wa.svg">
                                          </div>
                                          <div class="cs-caption">Whatsapp</div>
                                        </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                    <div class="home-subscribe-container">
                        <div class="container">
                          <div class="row">
                            <div class="col-12">
                              <div class="caption-group text-center caption-white">
                                  <div class="sub-caption">BERLANGGANAN</div>
                                  <div class="caption">
                                    <h2>Ikuti Kami Sekarang Juga!</h2>
                                  </div>
                              </div>
                    
                              <div class="d-flex justify-content-center subscribe-social-medias mt-4">
                          
                                  <a rel="noreferrer" aria-label="OxyGameStore Instagram Social Media link" href="https://www.instagram.com/oxygaming.store/" target="_blank">
                                  <img alt="" src="../image/ig.svg">
                                  </a>
                    
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>  
                     
                      <div class="border-separator"></div>
                      
                      <div class="container container-1440 mt-4">
                        <div class="px-lg-3">
                          <div class="row">
                            <div class="footer-copyright-row">
                              <div class="d-lg-flex">
                                <div class="footer-cr">
                                © 2021 OxyGameStore . Semua Hak Cipta
                                </div>
                             
                                </div>
                    
                              </div>
                    
                            </div>
                          </div>
                        </div>
                      </div>