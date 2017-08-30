<?php
include './koneksi.php';

$id = $_GET['id'];
$qu= $conn->prepare("SELECT * FROM BUS WHERE ID_BUS=:IDNYA");
$qu->bindParam(":IDNYA",$id);
$qu->execute();
$data = $qu->fetch(PDO::FETCH_ASSOC);
echo $data['ID_BUS']."_".$data['NAMA_BUS'];

?>