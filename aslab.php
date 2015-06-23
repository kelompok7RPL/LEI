<?php
	include 'database.php';
	
if(isset($_GET['pesan']))
	{
		echo"$_GET[isi]";
	}
	
 if (isset($_GET['id'] ))
{
	$username =$_GET['id'];
	$sql = "DELETE FROM user WHERE username = '$username' ";

	if(mysql_query($sql)){
		$sql_message = 'Data berhasil dihapus';
	}else
	{
		$sql_message = 'Data gagal dihapus';
	}
}


	$result = mysql_query ('select user.username ,user.nim,user.nama,user.email,user.no_telepon,role.role_nama,status.status_nama from user,role,status where user.role_id=role.role_id and user.status_id=status.status_id and user.role_id=1 ');
	if (! $result)
	{
		echo "query gagal" ;
	}
	else
	{
?>
	

<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Admin LEI</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="css/style-responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="css/ie9.css" rel="stylesheet">
	<![endif]-->
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- end: Favicon -->
	
		
		
		
</head>

<body>
		<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="#.html"><span>Laboratorium Elektronika Industri</span></a>
								
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">

						<!-- start: User Dropdown -->
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white user"></i> Dennis Ji
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
 									<span>Account Settings</span>
								</li>
								<li><a href="#"><i class="halflings-icon user"></i> Profile</a></li>
								<li><a href="login.php"><i class="halflings-icon off"></i> Logout</a></li>
							</ul>
						</li>
						<!-- end: User Dropdown -->
					</ul>
				</div>
				<!-- end: Header Menu -->
				
			</div>
		</div>
	</div>
	<!-- start: Header -->
	
		<div class="container-fluid-full">
		<div class="row-fluid">
				
			<!-- start: Main Menu -->
			<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="admin.html"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>	
						<li>
							<a class="dropmenu" href="#"><i class="icon-star"></i><span class="hidden-tablet"> Praktikum</span></a>
							<ul>
								<li><a class="submenu" href="praktikan.php"><i class="icon-user"></i><span class="hidden-tablet"> Praktikan</span></a></li>
								<li><a class="submenu" href="jadwal.php"><i class="icon-time"></i><span class="hidden-tablet"> Jadwal</span></a></li>
								<li><a class="submenu" href="adminkelompok.php"><i class="icon-group"></i><span class="hidden-tablet"> Kelompok</span></a></li>
							</ul>	
						</li>
						<li>
							<a class="dropmenu" href="#"><i class="icon-briefcase"></i><span class="hidden-tablet"> Inventaris </span></a>
							<ul>
								<li><a class="submenu" href="inputperkakas.php"><i class="icon-wrench"></i><span class="hidden-tablet"> Perkakas </span></a></li>
								<li><a class="submenu" href="inputkomponen.php"><i class="icon-cog"></i><span class="hidden-tablet"> Komponen </span></a></li>
								<li><a class="submenu" href="inputbuku.php"><i class="icon-book"></i><span class="hidden-tablet"> Buku </span></a></li>
								<li><a class="submenu" href="inputATK.php"><i class="icon-pencil"></i><span class="hidden-tablet"> Alat Tulis Kantor </span></a></li>
								<li><a class="submenu" href="Peminjam.php"><i class="icon-user"></i><span class="hidden-tablet"> Peminjam </span></a></li>
							</ul>	
						</li>
						<li><a class="dropmenu" href="#"><i class="icon-file"></i><span class="hidden-tablet">Laporan</span></a>
							<ul>
								<li><a class="submenu" href="lpraktikum1.php"><i class="icon-star"></i><span class="hidden-tablet"> Praktikum </span></a></li>
								<li><a class="submenu" href="linventaris.php"><i class="icon-briefcase"></i><span class="hidden-tablet"> Inventaris </span></a></li>
								<li><a class="submenu" href="lpeminjaman1.php"><i class="icon-user"></i><span class="hidden-tablet"> Peminjaman </span></a></li>
							</ul>
						</li>
						<li>
							<a class="dropmenu" href="#"><i class="icon-user"></i><span class="hidden-tablet"> Pengurus  </span></a>
							<ul>
								<li><a class="submenu" href="aslab.php"><i class="icon-user"></i><span class="hidden-tablet"> Aslab </span></a></li>
								<li><a class="submenu" href="kalab.php"><i class="icon-user"></i><span class="hidden-tablet"> Kalab </span></a></li>

							</ul>	
						</li>

				</div>
			</div>
			<!-- end: Main Menu -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<!-- start: Content -->
				<div id="content" class="span10">
				
				
				<ul class="breadcrumb">
					<li>
						<i class="icon-home"></i>
						<a href="admin.html">Home</a> 
						<i class="icon-angle-right"></i>
					</li>
					<li>
					<i class="icon-user"></i>
					<a href="#">Aslab</a></li>
				</ul>

				<!-- judul -->
				<center>
				<H1> Daftar Asisten Laboratorium</H1></center>
				
				<!-- akhir judul -->
				<a href='tambahaslab.php's><button type="submit" class="btn btn-success icon-plus"> Tambah Data Aslab</button></a><br><br>
				 
				<!-- tabel -->
				<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Aslab</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
						</div>
					</div>
					<div class="box-content">
					
				<table class="table table-striped table-bordered bootstrap-datatable datatable">
							<thead>
				
								<th style="text-align:center">Username</th>
								<th style="text-align:center">NIM</th>
								<th style="text-align:center">Nama</th>
								<th style="text-align:center">E-mail</th>
								<th style="text-align:center">No Telepon</th>					
								<th style="text-align:center">Status</th>
								<th style="text-align:center">Keterangan</th>
								<th style="text-align:center">Aksi</th>
							</thead><tbody>

				<?php
                    while($row = mysql_fetch_assoc($result))
                    {
                            echo "<tr>";
                            echo "	<td>".$row["username"]."</td>";
                            echo "	<td>".$row["nim"]."</td>";
                            echo "	<td>".$row["nama"]."</td>"; 
                            echo "	<td>".$row["email"]."</td>";
                            echo "	<td>".$row["no_telepon"]."</td>";

                            echo "	<td style='text-align:center'>".$row["status_nama"]."</td>"  ;                                             
                            echo "	<td style='text-align:center'>"; 
							?>
							<a onclick="return confirm('Apakah anda yakin?')" href='aslab.php?id=<?PHP echo $row['username']?>'><button type='submit' class='btn btn-danger icon-trash'> Delete</button></a>
							<?PHP
							
							echo "<a class='btn btn-primary icon-edit' href='updateaslab.php?id=".$row['username']."'> Update</a></td>";
							echo "	<td style='text-align:center'>"; 
							echo "<a class='btn btn-success icon-ok' href='aktivasiaslab.php?id=".$row['username']."'> Aktif</a>";
							echo "<a class='btn btn-warning icon-remove' href='nonaktivasiaslab.php?id=".$row['username']."'> NonAktif</a></td>";
                            echo "</tr>";
                    }
                    //echo "</table>";	

                    }
                    ?>

							</tbody>
					  </table>            
					</div>
				<!-- akhir tabel -->

			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>
	
	<div class="clearfix"></div>
	
	<!-- start: JavaScript-->

		<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/jquery-migrate-1.0.0.min.js"></script>
	
		<script src="js/jquery-ui-1.10.0.custom.min.js"></script>
	
		<script src="js/jquery.ui.touch-punch.js"></script>
	
		<script src="js/modernizr.js"></script>
	
		<script src="js/bootstrap.min.js"></script>
	
		<script src="js/jquery.cookie.js"></script>
	
		<script src='js/fullcalendar.min.js'></script>
	
		<script src='js/jquery.dataTables.min.js'></script>

		<script src="js/excanvas.js"></script>
	<script src="js/jquery.flot.js"></script>
	<script src="js/jquery.flot.pie.js"></script>
	<script src="js/jquery.flot.stack.js"></script>
	<script src="js/jquery.flot.resize.min.js"></script>
	
		<script src="js/jquery.chosen.min.js"></script>
	
		<script src="js/jquery.uniform.min.js"></script>
		
		<script src="js/jquery.cleditor.min.js"></script>
	
		<script src="js/jquery.noty.js"></script>
	
		<script src="js/jquery.elfinder.min.js"></script>
	
		<script src="js/jquery.raty.min.js"></script>
	
		<script src="js/jquery.iphone.toggle.js"></script>
	
		<script src="js/jquery.uploadify-3.1.min.js"></script>
	
		<script src="js/jquery.gritter.min.js"></script>
	
		<script src="js/jquery.imagesloaded.js"></script>
	
		<script src="js/jquery.masonry.min.js"></script>
	
		<script src="js/jquery.knob.modified.js"></script>
	
		<script src="js/jquery.sparkline.min.js"></script>
	
		<script src="js/counter.js"></script>
	
		<script src="js/retina.js"></script>

		<script src="js/custom.js"></script>
	<!-- end: JavaScript-->
	
</body>
</html>
