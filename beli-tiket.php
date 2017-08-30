<div class="container">

<h2 style="margin-top: 90px" class="text-center">Tiket Pesanan Anda</h2>
<table style="margin-top: 50px" class="table table-bordered text-center">
				<tr>
					<td><B>No</B></td>
					<td><B>Nama Bus</B></td>
					<td><B>Kelas</B></td>
					<td><B>Tujuan</B></td>
					<td><B>Tanggal Keberangkatan</B></td>
					<td><B>Jam Keberangkatan</B></td>
					<td><B>Harga Tiket</B></td>
				</tr>
			
		</div>
		
	</div>
	

<?php
try {
   // buat koneksi dengan database
  
   // set error mode
   $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
  
   // jalankan query
   $result = $conn->query('SELECT * FROM bus');
  
   // tampilkan data
   $row = $result->fetch()
   	?>
   		<tr>
   			<td><?php echo $row[0]; ?></td>
   			<td><?php echo $row[1]; ?></td>
   			<td><?php echo $row[2]; ?></td>
   			<td><?php echo $row[3]; ?></td>
   			<td><?php echo $row[4]; ?></td>
   			<td><?php echo $row[5]; ?></td>
   			<td><?php echo $row[6]; ?></td>
   			
   		</tr>
         
   	<?php

     // echo "$row[0] $row[1] $row[2] $row[3] $row[4]";    
     // echo "<br />";
   

 
   // hapus koneksi
   $conn = null;
}
catch (PDOException $e) {
   // tampilkan pesan kesalahan jika koneksi gagal
   print "Koneksi atau query bermasalah: " . $e->getMessage() . "<br/>";
   die();
}

	
    
?>
</table>

	<div style="margin-top: 50px;" class="panel panel-default col-sm-8 col-sm-offset-2">
  		<div class="panel-heading text-center"><h4>Isikan Biodata Anda</h4></div>
  			<div class="panel-body">
  				<form class="form" action="konfirmasi-tiket.php" method="post">

					<input class="form-control" type="hidden" value="<?php echo $_GET['id_bus'] ?>" name="id_bus"> 

					<div class="form-group col-sm-8 col-sm-offset-2">
							<label>No KTP :</label>
							<input class="form-control" type="text" name="no_ktp" placeholder="No KTP"> 
					</div>

					<div class="form-group col-sm-8 col-sm-offset-2">
							<label>Nama :</label>
							<input class="form-control" type="text" name="nama" id="nama" placeholder="Nama Lengkap"> 
					</div>

					<div class="form-group col-sm-8 col-sm-offset-2">
							<label>Alamat :</label>
							<input class="form-control" type="text" name="alamat" id="alamat" placeholder="Alamat"> 
					</div>

					<div class="form-group col-sm-8 col-sm-offset-2">
							<label>No Telp :</label>
							<input class="form-control" type="text" name="no_tlp" id="no_tlp" placeholder="No Telepon"> 
					</div>

					<div class="form-group col-sm-8 col-sm-offset-2">
							<label>Jenis Kelamin</label>
							<input class="form-control" type="text" name="jeniskelamin" id="jk" placeholder="Pria / Wanita"> 
					</div>

					


					<!-- <div class="form-group col-sm-8 col-sm-offset-2 form-inline">
						  <label>Jumlah Tiket :</label>
						  
								<select name="unit" class="form-control" id="unit">
								  <?php for($i=1; $i<10; $i++): ?>
								  <option value="<?php echo $i;?>"><?php echo $i;?></option>
								  <?php endfor; ?>
								</select>

							<input class="form-control" type="text" name="jeniskelamin" placeholder="Total Bayar"> 
					</div> -->
					
					
					<div class="form-group col-sm-8 col-sm-offset-2">
							<button type="submit" name="simpan" class="btn btn-success btn-block">Lanjutkan Transaksi</button>
					</div>

				</form>
   				 
  			</div>
  			
	</div>
</div>

