<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bus Assist | Konfirmasi Tiket</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
      tr:hover{background-color:#f5f5f5}
      /*td{height: 50px;}*/
    </style>
  </head>
  <body>

  <!-- Navbar -->
 <nav style="height: 80px;" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <div class="navbar-brand ">
          <img style="width: 70px; margin-top: -10px;" src="image/logo11.png">
        </div>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav" >
          <li>
            <marquee><h1 style="margin-right: 100px; margin-top: 10px;" class="navbar-brand ">Ticketing Online Bus</h1></marquee>
          </li>
        </ul>

         <ul class="nav navbar-nav navbar-right">
          <li style="margin-top: 30px;"><a href="index.php" class="page-scroll"> Home </a></li>
          <li style="margin-top: 30px;"><a href="?page=cek" class="page-scroll"> Cari Tiket </a></li>
          <li style="margin-top: 30px;"><a href="#" class="page-scroll"> Cara Pemesanan </a></li>
          <li style="margin-top: 30px;"><a href="galery-bus.php" class="page-scroll"> Gallery Bus </a></li>
         </ul>
      </div>
    </div>
  </nav>
<!-- Akhir Navbar -->


<!-- Awal Carousel -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div style="margin-top: 5%;" class="carousel-inner" role="listbox">
    <div class="item active ">
      <img style="background-size: cover; width: 53.5%; float: center; margin-left: 22%; " src="image/carousel1.jpg" alt="...">
      <div class="carousel-caption">
        <!-- ISI CAPTION -->
      </div>
    </div>

    <div class="item">
      <img style="background-size: cover; width: 45%; margin-left: 22%;" src="image/carousel2.jpg" alt="...">
      <div class="carousel-caption">
        <!-- ISI CAPTION -->
      </div>
    </div>
    
    <div class="item">
      <img style="background-size: cover; width: 50%; margin-left: 22%;" src="image/carousel3.jpg" alt="...">
      <div class="carousel-caption">
        <!-- ISI CAPTION -->
      </div>
    </div>
  </div> <!-- Akhir div Wrapper -->

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- Akhir Controls -->
<!-- Akhir Carousel -->


  <!-- Halaman Isi Form -->
<div class="container-fluid">
<div class="row">
  <div class="col-sm-12">
    <h1 class="text-center">Data Customer</h1>
    <hr style="width: 30%;">
    
  </div>
  
</div>

<div style="margin-top: 50px;" class="row">
    <div class="col-sm-8 col-sm-offset-2">
      <table style="margin-bottom: 80px;" class="table table-bordered text-center">
        <tr>
          <td><B>KTP</B></td>
          <td><B>Nama</B></td>
          <td><B>Alamat</B></td>
          <td><B>No Telepon</B></td>
          <td><B>Jenis Kelamin</B></td>
          <td></td>
        </tr>
      
    </div>
  </div>

  <?php 

   if (isset($_POST['simpan'])) {
    # code...
    $query = "INSERT INTO customer VALUES('$_POST[no_ktp]','$_POST[nama]','$_POST[alamat]','$_POST[no_tlp]','$_POST[jeniskelamin]')";
  $data = $conn->prepare($query); //menyiapkan query
  $data->execute(); //menjalankan perintah query
  
  }
  ?>


  <?php
      try {
         // set error mode
         $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        
         // jalankan query
         $result = $conn->query('SELECT * FROM customer');
        
         // tampilkan data
         while($row = $result->fetch()) {
          ?>
          <tr>
              <td><?php echo $row[0]; ?></td>
              <td><?php echo $row[1]; ?></td>
              <td><?php echo $row[2]; ?></td>
              <td><?php echo $row[3]; ?></td>
              <td><?php echo $row[4]; ?></td>
              <td><a href="parse.php">a</a></td>
          </tr>
  <?php

     // echo "$row[0] $row[1] $row[2] $row[3] $row[4]";    
     // echo "<br />";
        } //tutup while

 
   // hapus koneksi
   $conn = null;
    } //tutup try
  
   catch (PDOException $e) {
   // tampilkan pesan kesalahan jika koneksi gagal
   print "Koneksi atau query bermasalah: " . $e->getMessage() . "<br/>";
   die();
  }
?>
  
</table>
    
  </div>
  
</div>


 

</div>
<!-- Akhir Halaman Isi Form -->



<!-- Footer -->
    <div style="margin-top: 50px;" class="container-fluid">
          <div class="row">
             <div class="col-sm-12" style="background-color:#22313F; color:white; text-align: center; font-family:  Arial, Helvetica, sans-serif; margin-top:">
               <a href="#"><img style="margin-top: 20px;" class="image" border="0" title="#" src="image/fb.png" width="40px" height="40px" ></a>
               <a href="#"><img style="margin-top: 20px;"  class="image" border="0" title="#" src="image/ig.png" width="33px" height="33px"></a>
               <a href="#"><img style="margin-top: 20px;"  class="image" border="0" title="#" src="image/gp.png" width="35px" height="35px"></a>
               <a href="#"><img style="margin-top: 20px;"  class="image" border="0" title="#" src="image/tw.png" width="33px" height="33px"></a>
               <a href="#"><img style="margin-top: 20px;"  class="image" border="0" title="#" src="image/ln.png" width="33px" height="33px"></a>
      <br>
      <p>Contact one of us</p>
     
    <hr style="background-color: #4E4E4E; width: 30%;">
      <p>Copyright &copy; 2017 alirodhi</p>
        </div> 

        

        </div>

  </div>
<!-- Akhir Footer -->



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>

