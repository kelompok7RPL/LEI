<?php

  include ('database.php');

 if (isset($_POST['username'] ))
{
	$username =$_POST['username'];
	$password=$_POST['password'];
	$nama=$_POST['Nama'];
	$email=$_POST['email'];
	$no_telepon=$_POST['no_telepon'];

	$sql=" update user set  password='$password',nim='$nim',nama='$nama', email='$email', no_telepon='$no_telepon' where username='$username'  " ;
	$sql1=mysql_query($sql);

	 if ($sql ){
                    header("location:kalab.php?pesan=1&isi");
                    }else{
                    header("location:kalab.php?pesan=1&isi");
                    }

}

?>