<?PHP
	include('database.php');

	$NIM = $_POST['NIM'];
	$Nama = $_POST['Nama'];
	$Alamat = $_POST['Alamat'];
	$NoHP = $_POST['NoHP'];
	$Email = $_POST['Email'];
	$Password = $_POST['Password'];
	


	$sql = mysql_query("insert into praktikan values('$NIM', '$Nama', '$Alamat','$NoHP','$Email','$Password')");
	
	if ($sql){
	header("location:pendaftaranpraktikum.php");
	}else{
	header("location:jpiket.php?pesan=1&isi=Gagal Menambahkan jadwal karena ".mysql_error());
	}
	
?>