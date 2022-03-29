<?php
	header('Content-Type: application/json; charset=utf8');
	//panggil koneksi.php
	include dirname( dirname(__DIR__ . PHP_EOL) . PHP_EOL)."\php\GlobalFun.php";
	global $conn;
	$sql= "SELECT * FROM tb_tanaman";
	$query=mysqli_query($conn, $sql) or die(mysqli_error($conn));

	$array=array();
	while($data=mysqli_fetch_assoc($query)) $array[]=$data;	
	
	echo json_encode($array);
?>