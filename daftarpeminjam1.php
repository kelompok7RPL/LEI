<?php
include 'database.php';

	if(isset($_POST['username']))
	{
	  $username=$_POST['username'];
	  $password=$_POST['password'];
	  $nim  = $_POST['NIM'];
	  $nama = $_POST['Nama'];
	  $nama = $_POST['Nama'];
	  $email =  $_POST['email'];
	  $no_telepon = $_POST['no_telepon'];
	  $role_id = $_POST['role_id'];
	  
	  $sql = "INSERT INTO user
					(username, 
					password, 
					nim,
					nama,
					email,
					no_telepon,
					role_id)
				VALUES 
				('$username',
				'$password',
				'$nim',
				'$nama',
				'$email',
				'$no_telepon',
				'$role_id')";
				
	$result = mysql_query( $sql );
		
		
		if($result == true)
		{
		echo "<script language=\"Javascript\">\n";
		echo "window.alert('Selamat, Anda terdaftar sebagai Peminjam');";
		echo "</script>";
		echo'<meta http-equiv="Refresh" content="0; url=index.php" />';
		//header("location:index.php?");
			/*echo "Selamat, Anda terdaftar sebagai Peminjam";
			header("location:index.php?pesan=1&isi=Berhasil terdaftar sebagai Peminjam");*/
		}
		else
		{
		echo "<script language=\"Javascript\">\n";
		echo "window.alert('gagal terdaftar sebagai peminjam');";
		echo "</script>";
		echo'<meta http-equiv="Refresh" content="0; url=index.php" />';
			echo "Maaf, anda tidak bisa mendaftar sebagai peminjam. Silahkan ulangi lagi";
			//header("location:index.php?pesan=1&isi=gagal terdaftar sebagai Peminjam");
		}

	 
	}
	else
	{
		echo "GAGAL MASUK!!";
	}
	








?>