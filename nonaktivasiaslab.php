 <?php
                    include 'database.php';

                    if (isset($_GET['id']) )
                    { 

                            $username = $_GET['id'];      
                        
                            

                            $sql="update user set status_id=0 where username='$username'";
                            $res=mysql_query($sql) or die (mysql_error());

                            if ($res ){
                            header("location:aslab.php?pesan=1&isi");
                            }else{
                            header("location:aslab.php?pesan=1&isi");
                            }


                            
                 }
                 else
                 {
                    echo "";
                 }

    ?>