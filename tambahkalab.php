 <?php
                    include 'database.php';

                    if (isset($_POST['username']) )
                    { 

                            $username = $_POST['username'];
                            $password = $_POST['password'];
                            $nama = $_POST['Nama'];
                            $email = $_POST['email'];
                            $no_telepon = $_POST['no_telepon']; 
                            $role_id = $_POST['role_id'];   

                            $sql1 = " INSERT INTO user 
                                            (username,
                                            password,
                                            nama,
                                            email,
                                            no_telepon,
                                            role_id) 
                                            values 
                                            ('$username',
                                            '$password',
                                            '$nama',
                                            '$email',
                                            '$no_telepon',
                                            '$role_id'
                                            )" ;
                            
                            $res=mysql_query($sql1) or die (mysql_error());
                            if ($res ){
                            header("location:kalab.php?pesan=1&isi");
                            }else{
                            header("location:kalab.php?pesan=1&isi");
                            }
                                                                                      
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
				<a class="brand" href="admin.html"><span>Laboratorium Elektronika Industri</span></a>
								
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
					<a href="kalab.php">Kalab</a>
					<i class="icon-angle-right"></i>
				</li>
				<li>
					<i class="icon-plus"></i>
					<a href="#">Tambah Data Kalab</a>
				</li>
			</ul>
			
			<center>
				<H1> Tambah Data Kalab</H1>
				</center><br>
			<!-- form -->
			 <center>         
	            <form action='tambahkalab.php'  method='POST' >
	               <table>
	                  <tr>
	                    <td> Username</td>
	                    <td><input type="text" name="username" placeholder="Username Baru" required ></td>
	                  </tr>
	                  <tr>
	                    <td> Password</td>
	                    <td><input type="password" name="password" required ></td>
	                  </tr>
	                  </tr>
	                  <tr>
	                    <td> Nama</td>
	                    <td><input type="text" name="Nama" Placeholder="Nama Lengkap Anda"required ></td>
	                  </tr>
	                  <tr>
	                    <td> E-mail</td>
	                    <td><input type="email" name="email" placeholder="E-mail" required ></td>
	                  </tr>
	                  <tr>
	                    <td> No HP </td>
	                    <td><input type="text" name="no_telepon" placeholder="Nomor Handphone" required ></td>
	                  </tr>
					  <tr>
					  <td><a href="kalab.php"><button type="submit" class="btn btn-success icon-plus" align="left"> Input</button></a></td>
					  </tr>
	                  <input type='hidden' name='role_id' value='3'>
	            </table>
								
	             
	          </form>

        </center>

			<!-- akhir form -->



			
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
