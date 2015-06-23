<?php

  include ('database.php');

 if (isset($_POST['jadwal_id'] ))
{
	$jadwal_id =$_POST['jadwal_id'];
	$jadwal_nama=$_POST['jadwal_nama'];
	$jadwal_hari=$_POST['jadwal_hari'];
	$jadwal_jam=$_POST['jadwal_jam'];


	$sql=" update kelompok set  jadwal_hari='$jadwal_hari',jadwal_jam='$jadwal_jam' where jadwal_id=$jadwal_id  " ;
	$sql1=mysql_query($sql);

	 if ($sql ){
                    header("location:jadwal.php?pesan=1&isi=Berhasil update Aslab");
                    }else{
                    header("location:jadwal.php?pesan=1&isi=gagal update Aslab");
                    }

}

?>