<?php
	$hostmysql = "localhost";
	$username = "root";
	$password = "";
	$db = "lei";

			
	$koneksi = mysql_connect($hostmysql, $username, $password); //melakukan koneksi ke host
	if (!$koneksi)
	{ //jika konesi ke database gagal maka munculkan pesan error
		echo "Couldn't connect to host $host because <b> ".mysql_error()."</b>";
	}
	else
	{//sebaliknya jika koneksi berhasil
		$select_db = mysql_select_db($db);//melakukan pemilihan database berdasarkan value dari $db
		if (!$select_db){//jika pemilihan database gagal maka munculkan pesan error
			echo "Couldn't select database $db because <b>".mysql_error()."</b>";
		}
	}
?>
