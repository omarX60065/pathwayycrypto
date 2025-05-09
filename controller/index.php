<?php
    session_start();
    include("../connect.php")
 ?>

<?php
       // $_SESSION['userid'];
        if(!isset($_SESSION['admin_userid'])){
            header("location:login.php");
            exit();
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>PATHWAYYCRYPTO - Admin Dashboard</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="../assets1/img/ico.png" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="../assets1/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../assets1/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="../assets1/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets1/css/atlantis.min.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="../assets1/css/demo.css">
</head>
<body data-background-color="light">
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="light">
				
				<a href="index.php" class="logo">
					
				<!--<img src="../assets1/img/logo.png" alt="" class="navbar-brand">-->
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i style="color:black;" class="icon-menu"></i>
					</span>
				</button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i style="color:black;" class="icon-menu"></i>
					</button>
				</div>
				<button class="topbar-toggler more"><span class="btn-label" style="font-size:15px;"><i class="fas fa-sign-out-alt"></i><a style="color:blue;" href="logout.php"></a></span></button>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="light">
				
				<div class="container-fluid">
					<div class="collapse" id="search-nav">
					</div>
					<ul class="navbar-nav topbr-nav ml-md-auto align-items-center">
						<button class="btn btn-primary btn-sm"><span style="font-size:15px;"><i style="color:white;" class="fas fa-sign-out-alt"></i><a style="color:#fff; text-decoration: none;" href="logout.php"> LOGOUT</a></span></button>
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>

		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2" data-background-color="light">
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="../assets1/img/user.png" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									<?php echo $_SESSION['admin_fname'];?>
									<span class="user-level">Administrator</span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample">
								<ul class="nav">
									<li>
										<a href="profile.php">
											<span class="link-collapse">My Profile</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav nav-primary">
						<li class="nav-item active">
							<a href="index.php" >
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
							</a>
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Menu</h4>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#base">
								<i class="fas fa-users"></i>
								<p>User Management</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="base">
								<ul class="nav nav-collapse">
									<li>
										<a href="view-customers.php">
											<i class="fas fa-users"></i><span>View Customers</span>
										</a>
									</li>
									<li>
										<a href="edit-customers.php">
											<i class="fas fa-user-edit"></i><span>Edit Customers</span>
										</a>
									</li>
									<li>
										<a href="delete-customers.php">
											<i class="fas fa-user-times"></i><span>Delete Customers</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a href="deposit.php"><i class="fas fa-money-bill-alt"></i>
							<p>Deposits</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="earnings.php"><i class="fas fa-credit-card"></i>
							<p>Earnings Management</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="withdrawal-request.php"><i class="fas fa-sign-out-alt"></i>
							<p>Withdrawal Request</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="wallet-update.php"><i class="fas fa-wallet"></i>
							<p>Update Wallet Address</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="customer-earnings.php"><i class="fas fa-credit-card"></i>
							<p>Customer Earnings</p>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->

		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="mt-2 mb-4">
						<h2 class="text-black pb-2">Welcome back, <?php echo $_SESSION['admin_fname'];?></h2>
						<h5 class="text-black op-7 mb-4">Yesterday I was clever, so I wanted to change the world. Today I am wise, so I am changing myself.</h5>
					</div>
					<!-- Card Start -->
					<div class="row">
						<div class="col-sm-6 col-md-3">
							<div class="card card-stats card-round">
								<div class="card-body">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="flaticon-users text-primary"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">Customers</p>
												<h4 class="card-title"><?php
														$sql = "SELECT count('customer_id') FROM customers";
														$result = $conn->query($sql);
														$row=mysqli_fetch_array($result);
														echo "$row[0]";


													 ?></h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="card card-stats card-round">
								<div class="card-body">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="fab fa-bitcoin text-primary"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">Total Deposits</p>
												<h4 class="card-title"><?php
														$sql = "SELECT count('amount') FROM deposits";
														$result = $conn->query($sql);
														$row=mysqli_fetch_array($result);
														echo "$row[0]";


													 ?></h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="fas fa-money-bill-alt text-primary"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">Withdrawals</p>
												<h4 class="card-title"><?php
														$sql = "SELECT count('number') FROM withdrawals";
														$result = $conn->query($sql);
														$row=mysqli_fetch_array($result);
														echo "$row[0]";


													 ?></h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="flaticon-interface-6 text-primary"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">Banks</p>
												<h4 class="card-title"><?php
														$sql = "SELECT count('userid') FROM bank_names";
														$result = $conn->query($sql);
														$row=mysqli_fetch_array($result);
														echo "$row[0]";


													 ?></h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Card End -->
				</div>
			</div>
			<footer class="footer">
				<div class="container-fluid">
					<div class="copyright ml-auto">
						<p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved. <br>This site was made with <i style="color:#009f4d;" class="fab fa-soundcloud text-success" aria-hidden="true"></i> by <span style="color:#009f4d;">VORTEX</span></p>
					</div>				
				</div>
			</footer>
		</div>
		
		<!-- Custom template | don't include it in your project! -->
		<!-- End Custom template -->
	</div>
	<!--   Core JS Files   -->
	<script src="../assets1/js/core/jquery.3.2.1.min.js"></script>
	<script src="../assets1/js/core/popper.min.js"></script>
	<script src="../assets1/js/core/bootstrap.min.js"></script>

	<!-- jQuery UI -->
	<script src="../assets1/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="../assets1/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

	<!-- jQuery Scrollbar -->
	<script src="../assets1/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


	<!-- Chart JS -->
	<script src="../assets1/js/plugin/chart.js/chart.min.js"></script>

	<!-- jQuery Sparkline -->
	<script src="../assets1/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

	<!-- Chart Circle -->
	<script src="../assets1/js/plugin/chart-circle/circles.min.js"></script>

	<!-- Datatables -->
	<script src="../assets1/js/plugin/datatables/datatables.min.js"></script>

	<!-- Bootstrap Notify -->
	<script src="../assets1/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

	<!-- jQuery Vector Maps -->
	<script src="../assets1/js/plugin/jqvmap/jquery.vmap.min.js"></script>
	<script src="../assets1/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

	<!-- Sweet Alert -->
	<script src="assets1/js/plugin/sweetalert/sweetalert.min.js"></script>

	<!-- Atlantis JS -->
	<script src="../assets1/js/atlantis.min.js"></script>

	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="assets1/js/setting-demo.js"></script>
	<script src="assets1/js/demo.js"></script>
	<script>
		$('#lineChart').sparkline([102,109,120,99,110,105,115], {
			type: 'line',
			height: '70',
			width: '100%',
			lineWidth: '2',
			lineColor: 'rgba(255, 255, 255, .5)',
			fillColor: 'rgba(255, 255, 255, .15)'
		});

		$('#lineChart2').sparkline([99,125,122,105,110,124,115], {
			type: 'line',
			height: '70',
			width: '100%',
			lineWidth: '2',
			lineColor: 'rgba(255, 255, 255, .5)',
			fillColor: 'rgba(255, 255, 255, .15)'
		});

		$('#lineChart3').sparkline([105,103,123,100,95,105,115], {
			type: 'line',
			height: '70',
			width: '100%',
			lineWidth: '2',
			lineColor: 'rgba(255, 255, 255, .5)',
			fillColor: 'rgba(255, 255, 255, .15)'
		});
	</script>
</body>
</html>