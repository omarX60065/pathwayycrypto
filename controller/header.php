	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="../assets1/img/ico.png">

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
					<img src="../assets1/img/logo.png" alt="" class="navbar-brand">
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i style="color:blue;" class="icon-menu"></i>
					</span>
				</button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i style="color:blue;" class="icon-menu"></i>
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
						<button class="btn btn-primary btn-sm"><span style="font-size:15px;"><i class="fas fa-sign-out-alt"></i><a style="color:#fff; text-decoration: none;" href="logout.php">LOGOUT</a></span></button>
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
							<img src="../assets1/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
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
							<a data-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
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
							<p>Earnings</p>
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
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->