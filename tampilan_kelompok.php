<?php
  include ('database.php');
  
   if (isset($_GET['id'] ))
   {

    $kelompok_id =$_GET['id'];
    $sql = "select matakuliah.matakuliah_nama ,kelompok.jadwal_nama from kelompok inner join matakuliah on kelompok.matakuliah_id=matakuliah.matakuliah_id where kelompok.jadwal_id='$kelompok_id'";
    $sql1=mysql_query($sql);
     while ($row=mysql_fetch_assoc($sql1)) {
      $matakuliah=$row['matakuliah_nama'];
      $kelompok=$row['jadwal_nama'];
    }

    $user ="SELECT user.nim,user.nama,user.no_telepon FROM kelompok join jadwal_user join user on kelompok.jadwal_id=jadwal_user.jadwal_id and jadwal_user.username=user.username where kelompok.jadwal_id='$kelompok_id'";
    $user1=mysql_query($user);
  }
  else
  {
    echo "id tidak dapat diterima";
  }
  
    
?>


<!DOCTYPE html>
<!--
Template Name: Academic Education V2
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html>
<head>
<title>LEI </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="clear"> 
    <!-- ################################################################################################ -->
    <nav>
      <ul>
        <li><a href="daftarpeminjam.php">mendaftar sebagai peminjam</a></li>
        <li><a href="#">Login Peminjam</a></li>
        <li><a href="#">Login Aslab</a></li>
        <li><a href="#">Login Kalab</a></li>
      </ul>
    </nav>
    <!-- ################################################################################################ --> 
  </div>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h1><a href="admin.html">Laboratorium Elektronika Industri</a></h1>
      <p>Teknik Elektro,Universitas Andalas</p>
    </div>
>
    <!-- ################################################################################################ --> 
  </header>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <div class="rounded">
    <nav id="mainav" class="clear"> 
      <!-- ################################################################################################ -->
      <ul class="clear">
        <li class="active"><a href="admin.html">Home</a></li>
        <li><a class="drop" href="#">Inventaris</a>
          <ul>
            <li><a href="perkakas.php">Perkakas</a></li>
            <li><a href="komponen.php">Komponen</a></li>
            <li><a href="ATK.php">ATK</a></li>
            <li><a href="buku.php">Buku</a></li>
            <li><a href="peminjaman.php">Peminjaman</a></li>
            <li><a href="konfirmasi.php">Konfirmasi Peminjaman</a></li>
          </ul>
        </li>
        <li><a class="drop" href="#">Praktikum</a>
          <ul>
            <li><a href="pendaftaranpraktikum.php">Pendaftaran</a></li>
            <li><a href="kelompok.php">Kelompok</a></li>
            <li><a href="tampilnilai.php">Nilai</a></li>
            <li><a href="nilai.php">Input Nilai</a></li>
          </ul>
        </li>
        <li><a class="drop" href="#">Laporan</a>
          <ul>
            <li><a href="lpraktikum.php">Laporan Praktikum</a></li>
            <li><a href="linventaris.php">Laporan Inventaris</a></li>
            <li><a href="lpeminjaman.php">Laporan Peminjaman</a></li>
          </ul>
        </li>        
        <li><a href="#">Profil</a></li>
      </ul>
      <!-- ################################################################################################ --> 
    </nav>
  </div>
</div>


    </div>
  </div>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <div class="rounded">
    <main class="container clear"> 
      <!-- main body --> 
        <center>
         <table>
            <tr>
              <td>Matakuliah : </td> 
              <td><?php echo $matakuliah ?> </td>
            </tr>
            <tr>
              <td>Kelompok   : </td> 
              <td><?php echo $kelompok ?></td>
            </tr>
         </table>
          <table>
           <tr>
             <th>NIM</th>
             <th>Nama</th>
             <th>Telepon</th> 
           </tr>
           <?php
           while ($row=mysql_fetch_assoc($user1)) {
              echo "<tr>";
              echo "<td>".$row["nim"]."</td>";
              echo "<td>".$row["nama"]."</td>";
              echo "<td>".$row["no_telepon"]."</td>";
              echo "</tr>";
            }
           ?>
          </table>
        </center>      
      <!-- / main body -->
      <div class="clear"></div>
    </main>
  </div>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row4">
  <div class="rounded">
    <footer id="footer" class="clear"> 
      <!-- ################################################################################################ -->
      <div class="one_third first">
        <figure class="center"><img class="btmspace-15" src="images/demo/worldmap.png" alt="">
          <figcaption><a href="https://www.google.co.id/maps/place/Universitas+Andalas/@-0.914518,100.459528,17z/data=!3m1!4b1!4m2!3m1!1s0x2fd4b7969c6d51df:0xe826014ce459af90">Find Us With Google Maps &raquo;</a></figcaption>
        </figure>
      </div>
      <div class="one_third">
        <address>
        Laboratorium Elektronika Industri <br>
        Teknik Elektro<br>
        Universitas Andalas<br>
        <br>
        </address>
      </div>
      <div class="one_third">
        <p class="nospace btmspace-10">Stay Up to Date With What's Happening</p>
        <ul class="faico clear">
          <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a class="faicon-rss" href="#http://laboratoriumelektronikaindustri.blogspot.com/"><i class="fa fa-rss"></i></a></li>
        </ul>

      </div>
      <!-- ################################################################################################ --> 
    </footer>
  </div>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2015 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    <!-- ################################################################################################ --> 
  </div>
</div>
<!-- JAVASCRIPTS --> 
<script src="layout/scripts/jquery.min.js"></script> 
<script src="layout/scripts/jquery.fitvids.min.js"></script> 
<script src="layout/scripts/jquery.mobilemenu.js"></script> 
<script src="layout/scripts/tabslet/jquery.tabslet.min.js"></script>
</body>
</html>