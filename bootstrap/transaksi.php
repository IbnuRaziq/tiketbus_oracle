<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administrasi Toko Buku Bismillah</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Toko Buku Bismillah
                    </a>
                </li>
                <li>
                    <a href="buku.php">Buku</a>
                </li>
                <li>
                    <a href="customer.php">Customer</a>
                </li>
                <li>
                    <a href="transaksi.php">Transaksi</a>
                </li>
				
				 <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">

		<div class="container">
		<h1>FORM TRANSAKSI</h1><br>

	<div class="form-horizontal">
			<div class="form-group">
				<label for="id_transaksi">ID_TRANSAKSI</label>
				<input type="text" class="form-control"name="id_transaksi">
			</div>

			<div class="form-group">
				<label for="tgl_bayar">TGL_BAYAR</label>
				<input type="text" class="form-control " name="tgl_bayar">
			</div>
			
					
		<div class="panel panel-default col-sm-12">
			<div class="panel-heading">
				<b>Form Detail Transaksi</b>
			</div>
			<div class="panel-body">
					<div class="form-horizontal">
			<div class="form-group col-sm-8">
				<label for="id_buku">ID_BUKU</label>
				<input type="text" class="form-control"name="id_buku">
			</div>
			<div class="form-group col-sm-8">
				<label for="harga">HARGA</label>
				<input type="text" class="form-control" name="harga">
			</div>
		
			<div class="form-group col-sm-8">
				<label for="jumlah">JUMLAH</label>
				<input type="text" class="form-control" name="jumlah">
			</div>
			</div>			
		</div>
		<br/>
		

			
		</div>	
		</div>
			<div class="form-group">
				<label for="total_belanja">TOTAL_BELANJA</label>
				<input type="text" class="form-control" name="total_belanja">
			</div>
		
			<button style="margin:20px;"type="submit" class="btn btn-primary">SUBMIT</button>
			<button style="margin:20px;"type="submit" class="btn btn-primary">CETAK STRUK</button>
			 <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>


		</form>		
                       
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
