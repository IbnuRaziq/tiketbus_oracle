<?php 
	include "koneksi.php";

	if (isset($_GET['simpan'])) {
		# code...
		$query = "INSERT INTO customer VALUES('$_GET[no_ktp]','$_GET[nama]','$_GET[alamat]','$_GET[no_tlp]','$_GET[jeniskelamin]')";
	$data = $conn->prepare($query); //menyiapkan query
	$data->execute(); //menjalankan perintah query
	
	}

	

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 <table border="1">

	<tbody>

	<?php
try {
   // buat koneksi dengan database
  
  
   // set error mode
   $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
  
   // jalankan query
   $result = $conn->query('SELECT * FROM customer');
  
   // tampilkan data
   while($row = $result->fetch()) {
   	?>
   		<tr>
   			<td>KTP</td>
			<td>:</td>
   			<td><?php echo $row[0]; ?></td></tr>

   			<tr>
   				<td>Nama</td>
				<td>:</td>
				<td><?php echo $row[1]; ?></td>
   			</tr>

   			<tr>
   				<td>Alamat</td>
				<td>:</td>
				<td><?php echo $row[2]; ?></td>
   			</tr>

   			<tr>
   				<td>Telepon</td>
				<td>:</td>
   				</td><td><?php echo $row[3]; ?></td>
   			</tr>

   			<tr>
   				<td>Jenis</td>
				<td>:</td>
   				<td><?php echo $row[4]; ?></td>
   			</tr>

            <td><a href="form-edit.php?xyz=<?php echo $row[0] ?>">edit</a></td>
   	
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
			
	</tbody>
</table>
 </body>
 </html>