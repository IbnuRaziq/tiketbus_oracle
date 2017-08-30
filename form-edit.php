<?php include "koneksi.php"; 

	$query = "SELECT*FROM customer WHERE no_ktp='$_GET[xyz]'";
	$data = $conn->prepare($query);
	$data->execute();

	$person = $data->fetch();

	$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
  
   // jalankan query
   $result = $conn->query('SELECT * FROM customer');

   $row = $result->fetch();

?>

<table border="1">
	<tr>
		<td><?php echo $row[0]; ?></td>
		<td><?php echo $row[1]; ?></td>
		<td><?php echo $row[2]; ?></td>
		<td><?php echo $row[3]; ?></td>
		<td><?php echo $row[4]; ?></td>
	</tr>
</table>
FORM UBAH
<form method="get" action="coba2.php">
	KTP : <input type="number" name="no_ktp" value="<?php echo $row[0]; ?>">
	Nama : <input type="text" name="nama" value="<?php echo $row[1]  ?>">
	Alamat : <input type="text" name="alamat" value="<?php echo $row[2]  ?>">
	No Telp : <input type="text" name="no_tlp" value="<?php echo $row[3]  ?>" >
	Jenis	: <input type="text" name="jeniskelamin" value="<?php echo $row[4]  ?>">
	<button type="submit" name="simpan">simpan</button>

</form>