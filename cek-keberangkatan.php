<h2 style="margin-top: 50px;" class="text-center">Jadwal Keberangkatan Bus</h2>


	<div style="margin-top: 50px;" class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<table style="margin-bottom: 80px;" class="table table-bordered text-center">
				<tr>
					<td><B>No</B></td>
					<td><B>Nama Bus</B></td>
					<td><B>Kelas</B></td>
					<td><B>Tujuan</B></td>
					<td><B>Tanggal Keberangkatan</B></td>
					<td><B>Jam Keberangkatan</B></td>
				</tr>
			
		</div>
		
	</div>
	


<?php
try {
   // buat koneksi dengan database
  
  
   // set error mode
   $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
  
   // jalankan query
   $result = $conn->query('SELECT * FROM keberangkatan_bus');
  
   // tampilkan data
   while($row = $result->fetch()) {
   	?>
   		<tr>
   			<td><?php echo $row[0]; ?></td>
   			<td><?php echo $row[1]; ?></td>
   			<td><?php echo $row[2]; ?></td>
   			<td><?php echo $row[3]; ?></td>
   			<td><?php echo $row[4]; ?></td>
   			<td><?php echo $row[5]; ?></td>
   		</tr>
   	<?php

     // echo "$row[0] $row[1] $row[2] $row[3] $row[4]";    
     // echo "<br />";
   }

 
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
