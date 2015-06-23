<?php
include "database.php";

$id = $_POST['peralatan_id'];
$nama = $_POST['nama'];
$jenis = $_POST['jenis_p'];
$total = $_POST['total'];

$query = mysql_query ("INSERT INTO peralatan (peralatan_id, peralatan_nama, jenis_peralatan_id, total) VALUES ('$id','$nama','$jenis','$total')");

if ($query)
{
	header("location:inputkomponen.php?pesan=1&isi=Berhasil Menambahkan Aslab");
}
else
{
	echo "gagal";
}

?>