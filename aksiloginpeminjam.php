<?php
   session_start(); 		
	include 'database.php'; 		
	$username=$_POST['username']; 	
	$password=$_POST['password']; 	
	$role_id=$_POST['role_id'];
 


	$username = mysql_real_escape_string($username);
	$password = mysql_real_escape_string($password);
	
	$query=mysql_query("select * from user where username='$username' and password='$password' and role_id='$role_id'");	
	$xxx=mysql_num_rows($query);	 
	if($xxx==TRUE){ 		
		$_SESSION['login']=TRUE;
		$_SESSION['username']=$username; 
		header("location:coba.php");     
	}else{   				
		echo "gagal login";
	}
 
?>
