<?php 
 include 'database.php';



if (isset($_GET['id'])) 	
{

	$username=$_GET['id'];
	$sql1 = "select user.KRS, user.username ,user.nim,user.nama,user.email,user.no_telepon,role.role_nama,status.status_nama from user,role,status where user.role_id=role.role_id and user.status_id=status.status_id and username='$username'";
	$result = mysql_query($sql1);
	if ($result)
	{
		$row= mysql_fetch_assoc($result);
		$username = $row['username'];
		$nim = $row['nim'];
		$nama = $row['nama'];
		$email = $row['email'];
		$no_telepon = $row['no_telepon'];
	    $status_nama=$row['status_nama'];
	    $gambar="<img src=\"".$row['KRS']."\" ' width='200px' height='200px'/>"; 
	}
	else
	{
		echo "gagal";
	}
}
else
{
	echo "nilai tidak di dapat" ;
}
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
				<a class="brand" href="index.html"><span>Laboratorium Elektronika Industri</span></a>
								
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
								<li><a href="login.html"><i class="halflings-icon off"></i> Logout</a></li>
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
						<li><a href="index.html"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>	
						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Praktikum</span><span class="label label-important"> 4 </span></a>
							<ul>
								<li><a class="submenu" href="praktikan.php"><i class="icon-file-alt"></i><span class="hidden-tablet"> praktikan</span></a></li>
								<li><a class="submenu" href="jadwal.php"><i class="icon-file-alt"></i><span class="hidden-tablet"> jadwal</span></a></li>
								<li><a class="submenu" href="kelompok.php"><i class="icon-file-alt"></i><span class="hidden-tablet"> kelompok</span></a></li>
								<li><a class="submenu" href="matakuliah.php"><i class="icon-file-alt"></i><span class="hidden-tablet"> matakuliah</span></a></li>
							</ul>	
						</li>
						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Inventaris </span><span class="label label-important"> 6 </span></a>
							<ul>
								<li><a class="submenu" href="perkakas.php"><i class="icon-file-alt"></i><span class="hidden-tablet"> Perkakas </span></a></li>
								<li><a class="submenu" href="komponen.php"><i class="icon-file-alt"></i><span class="hidden-tablet"> komponen </span></a></li>
								<li><a class="submenu" href="buku.php"><i class="icon-file-alt"></i><span class="hidden-tablet"> buku </span></a></li>
								<li><a class="submenu" href="ATK.php"><i class="icon-file-alt"></i><span class="hidden-tablet"> Alat Tulis Kantor </span></a></li>
								<li><a class="submenu" href="jenis_peralatan.php"><i class="icon-file-alt"></i><span class="hidden-tablet"> Jenis_peralatan </span></a></li>
								<li><a class="submenu" href="peminjam.php"><i class="icon-file-alt"></i><span class="hidden-tablet"> peminjam </span></a></li>
							</ul>	
						</li>
						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Administrasi  </span><span class="label label-important"> 2 </span></a>
							<ul>
								<li><a class="submenu" href="role.php"><i class="icon-file-alt"></i><span class="hidden-tablet"> Role </span></a></li>
								<li><a class="submenu" href="status.php"><i class="icon-file-alt"></i><span class="hidden-tablet"> Status </span></a></li>

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
					<a href="index.html">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Dashboard</a></li>
			</ul>




			<h1>
				<?php echo $nama?>
			</h1>
		


        <div style="float: left">
			<table>
				<tr>
					<td>Username</td>
					<td>:</td>
					<td> <?php echo $username ?> </td>
				</tr>
				<tr>
					<td>NIM</td>
					<td>:</td>					
					<td><?php echo $nim ?></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><?php echo $nama ?></td>
				</tr>
				<tr>
					<td>E-mail</td>
					<td>:</td>
					<td><?php echo $email ?></td>
				</tr>
				<tr>
					<td>No Telepon </td>
					<td>:</td>
					<td><?php echo $no_telepon ?> </td>
				</tr>
				<tr>
					<td> Status </td>
					<td>:</td>
					<td><?php echo $status_nama ?> </td>
				</tr>

                <tr> <td>   <a class="btn btn-primary"  href='praktikan.php?id=<?php echo $username?>'>Delete</a> 
	                		<a class="btn btn-primary"  href='aktivasiprak.php?id=<?php echo $username?>'>Aktifkan</a> 
	                		<a class="btn btn-primary"  href='nonaktivasiprak.php?id=<?php echo $username?>'>Non-aktif</a> 

                </td></tr>
        </table>
         </div>
         <div style="float: right" >
            <?php echo $gambar ?>   
        </div>

                
               
			

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
	
	<footer>

		<p>
			<span style="text-align:left;float:left">&copy; 2013 <a href="http://jiji262.github.io/Bootstrap_Metro_Dashboard/" alt="Bootstrap_Metro_Dashboard">Bootstrap Metro Dashboard</a></span>
			
		</p>

	</footer>
	
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
