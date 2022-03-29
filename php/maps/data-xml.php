<?php
header('Content-type: text/xml');
header('Pragma: public');
header('Cache-control: private');

include dirname( dirname(__DIR__ . PHP_EOL) . PHP_EOL)."\php\GlobalFun.php";

echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>";
echo "<markers>";
$sql="select * from tb_tanaman";
$query=mysqli_query($conn,$sql) or die(mysqli_error($conn));
while ($data=mysqli_fetch_array($query)) {
	echo "<marker id_pariwisata='".$data['id_tanaman']."' nama_pariwisata='".$data['nama_tanaman']."' lokasi='".$data['lokasi_tanaman']."'/>";
}
echo "</markers>";
?>