<?php 


try{

$tns = " 
(DESCRIPTION =
    (ADDRESS_LIST =  (ADDRESS = (PROTOCOL = TCP)(HOST =localhost)(PORT = 1521)))
    (CONNECT_DATA = (SERVICE_NAME = sys) )
  )";
$user = 'tiketbus';
$pass = 'oracle';
	$conn = new PDO("oci:dbname=".$tns,$user,$pass);

	// if($conn)
	// {
	// 	echo "sukses konek sebagai user ali";
	// }
	// else
	// {
	// 	echo "error";
	// }
}

catch(PDOException $e){
    echo ($e->getMessage());
}

 ?>