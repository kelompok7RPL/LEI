<?php

  include ('database.php');

 if (isset($_GET['id'] ))
{
	$jadwal_user_id=$_GET['id'];


	 $sql=" delete from jadwal_user where jadwal_user_id=$jadwal_user_id " ;

	 $sql1=mysql_query($sql);

	  if ($sql ){
                    header("location:adminkelompok.php?pesan=1&isi=Berhasil update Aslab");
                    }else{
                    header("location:adminkelompok.php?pesan=1&isi=gagal update Aslab");
                    }

}
else
{
	echo "gagal masuk";
}

?>