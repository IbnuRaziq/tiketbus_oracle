<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "mencobajoin";

$konek = new mysqli($host, $user, $password, $db);

if($konek->connect_error){
  die("konek failed : " . $konek->connect_error);
}
else{
  echo "KONEK SUKSES";
}


    $query="
        SELECT tbl_nama.nama_depan, tbl_nama.nama_belakang, tbl_kota.nama_kota 
        FROM tbl_nama
        JOIN tbl_kota ON tbl_kota.id_nama = tbl_nama.id
    ";

    $result = mysqli_query($konek, $query);

    
?> 

   <table border="1">
      <tr>
         <td>Nama Depan</td>
         <td>Nama Belakang</td>
         <td>Kota</td>
       </tr>
       <?php
          if (mysqli_num_rows($result) > 0) {
            while($data=mysqli_fetch_array($result)){
       ?>
       <tr>
         <td><?php echo $data['nama_depan'];?></td>
         <td><?php echo $data['nama_belakang'];?></td>
         <td><?php echo $data['nama_kota'];?></td>
       </tr>
       <?php } } ?>
    </table> 