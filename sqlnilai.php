<?php
include ('database.php');

if (isset($_POST['jadwal_id']))
{
	echo "nilai masuk";
	$x=0;
	while ($x < $_POST['counter']) {
		
	$nilai='nilai'.$x;
	$nilai1=$_POST[$nilai];
	
	$jadwal_id1=$_POST['jadwal_id'];	
	$modul1=$_POST['modul'];	
	$jenisnilai1=$_POST['jenisnilai'];

	$username='username'.$x;
	$username1=$_POST[$username];

	$query="insert into nilai_matakuliah values ('','$username1',$jadwal_id1,$modul1,'$jenisnilai1',$nilai1)";
	$sql=mysql_query($query);

	$x++;

	if($query)
        {
            echo "sukses";        
        }
         else {
             $y = mysql_error();
             echo "$y";
        }	
	 if ($sql ){
                    header("location:nilai.php?");
                    }else{
                    header("location:nilai.php?");
                    }
	}

	
}
else
{
 echo "nilai tidak masuk";
}
?>