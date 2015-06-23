 <?php
                    include 'database.php';

                    if (isset($_POST['username']) )
                    { 

                            $username = $_POST['username'];
                            $password = $_POST['password'];
                            $nim = $_POST['NIM'];
                            $nama = $_POST['Nama'];
                            $email = $_POST['email'];
                            $no_telepon = $_POST['no_telepon']; 
                            $role_id = $_POST['role_id'];
                            $kelompok_id=$_POST['kelompok_id'];

                            $namafolder="gambar"; 
                            $gambar = $namafolder."/".$_FILES["namafile"]["name"];
                            

                                    
                            if (!empty($_FILES["namafile"]["tmp_name"]))
                                {
                                    $jenis_gambar=$_FILES['namafile']['type'];

                                    
                                    if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/x-png")
                                    {           
                                            
                                        if (move_uploaded_file($_FILES['namafile']['tmp_name'], $gambar)) {

                                            echo $kelompok_id;
                                            
                                            echo  $sql1 = " INSERT INTO user 
                                                            (username,
                                                            password,
                                                            nim,
                                                            nama,
                                                            email,
                                                            no_telepon,
                                                            KRS,
                                                            role_id) 
                                                            values 
                                                            ('$username',
                                                            '$password',
                                                            '$nim',
                                                            '$nama',
                                                            '$email',
                                                            '$no_telepon',
                                                            '$gambar',
                                                            '$role_id'
                                                            )" ;
                                             echo  $sql2 = " INSERT INTO jadwal_user 
                                                            (jadwal_id,
                                                            username) 
                                                            values 
                                                            (   
                                                                '$kelompok_id',
                                                                '$username'                                                           
                                                            )" ;
                                            $res=mysql_query($sql1) or die (mysql_error());
                                            $res1=mysql_query($sql2) or die (mysql_error());                                                                                              
                                        } 
                                   } 
                                } 
                            else
                            {
                                echo "foto?";
                            }

                        
                    // if ($sql1 ){
                    // header("location:pendaftaranpraktikum.php?pesan=1&isi=Berhasil Menambahkan Aslab");
                    // }else{
                    // header("location:pendaftaranpraktikum.php?pesan=1&isi=gagal Menambahkan Aslab");
                    // }

                 }
                 else
                 {
                    echo "gagal masuak wooyyy";
                 }

    ?>