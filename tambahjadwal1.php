<?php

  include ('database.php');

 if (isset($_POST['matakuliah_id'] ))
{
	$jadwal_nama=$_POST['jadwal_nama'];
	$jadwal_hari=$_POST['jadwal_hari'];
	$jadwal_jam=$_POST['jadwal_jam'];
	echo $matakuliah_id=$_POST['matakuliah_id'];


	 echo $sql=" insert into kelompok values ('','$jadwal_nama',$matakuliah_id,'$jadwal_hari','$jadwal_jam') " ;
	$sql1=mysql_query($sql);

	 if ($sql ){
                    header("location:jadwal.php?pesan=1&isi=Berhasil update Aslab");
                    }else{
                    header("location:jadwal.php?pesan=1&isi=gagal update Aslab");
                    }

}
else
{
	echo "gagal masuk";
}

?>