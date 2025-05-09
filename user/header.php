<!-- Favicon -->
		<link rel="icon" href="assets/img/brand/favicon.png" type="image/x-icon"/>

		<!-- Icons css -->
		<link href="assets/plugins/icons/icons.css" rel="stylesheet">

		<!--  Right-sidemenu css -->
		<link href="assets/plugins/sidebar/sidebar.css" rel="stylesheet">

		<!--- Animations css-->
		<link href="assets/css/animate.css" rel="stylesheet">

		<!--  Custom Scroll bar-->
		<link href="assets/plugins/custom-scroll/jquery.mCustomScrollbar.css" rel="stylesheet"/>

		<!--  Left-Sidebar css -->
		<link href="assets/css/sidemenu.css" rel="stylesheet">

		<!-- Select2 css -->
		<link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet">
		
		<!-- Internal Chart-Morris css-->
        <link href="assets/plugins/morris.js/morris.css" rel="stylesheet">

		<!-- Internal Nice-select css  -->
		<link href="assets/plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet"/>

		<!-- Internal News-Ticker css-->
		<link href="assets/plugins/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">

		<!-- Jquery-countdown css-->
		<link href="assets/plugins/jquery-countdown/countdown.css" rel="stylesheet">

		<!-- Internal News-Ticker css-->
        <link href="assets/plugins/newsticker/jquery.jConveyorTicker.css" rel="stylesheet" />


		<!-- style css-->
		<link href="assets/css/style.css" rel="stylesheet">

		<!-- skin css-->
		<link href="assets/css/skin-modes.css" rel="stylesheet">

		<!-- dark-theme css-->
		<link href="assets/css/style-dark.css" rel="stylesheet">

        <!-- Switcher css -->
		<link href="assets/switcher/css/switcher.css" rel="stylesheet">
		<link rel="stylesheet" href="assets/switcher/demo.css">

		<script src="http://translate.google.com/translate_a/element.js?cb=loadGoogleTranslate"></script>

		<style>
			.goog-te-banner-frame.skiptranslate, .goog-te-gadget-simple img{
				display: none !important;
			}
			.goog-tooltip {
				display: none !important;
			}
			.goog-tooltip:hover {
				display: none !important;
			}
			.goog-text-highlight {
				background-color: transparent !important;
				border: none !important;
				box-shadow: none !important;
			}
			
		</style>

	</head>
	<body class="main-body app sidebar-mini dark-theme">

		<!-- Loader -->
		<div id="global-loader" class="dark-loader">
			<img src="assets/img/loaders/loader.svg" class="loader-img" alt="Loader">
		</div>
		<!-- /Loader -->		

		<!-- Page -->
		<div class="page">

			<!-- main-sidebar opened -->
		<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
		<aside class="app-sidebar sidebar-scroll ">
			<div class="main-sidebar-header">
				<a class=" desktop-logo logo-light" href="index.php"><img src="assets/img/brand/logo3.png" class="main-logo" alt="logo"></a>
				<a class=" desktop-logo logo-dark" href="index.php"><img src="assets/img/brand/logo3.png" class="main-logo dark-theme" alt="logo"></a>
				<a class="logo-icon mobile-logo icon-light" href="index.php"><img src="assets/img/brand/favicon.png" class="logo-icon" alt="logo"></a>
				<a class="logo-icon mobile-logo icon-dark" href="index.php"><img src="assets/img/brand/favicon.png" class="logo-icon dark-theme" alt="logo"></a>
			</div>
			<div class="main-sidebar-body circle-animation ">

				<ul class="side-menu circle">
					<li><h3 class="">Dashboard</h3></li>
					<li class="slide">
						<a class="side-menu__item" href="index.php"><i class="side-menu__icon ti-desktop"></i><span class="side-menu__label">Dashboard</span></a>
					</li>
					<li><h3>MENU </h3></li>
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon cf cf-btc-alt  menu-icons"></i><span class="side-menu__label">Deposits</span><i class="angle fe fe-chevron-down"></i></a>
						<ul class="slide-menu">
							<li><a class="slide-item" href="deposits.php">Make a Deposit</a></li>
							<li><a class="slide-item" href="deposits-history.php">Deposit History</a></li>
						</ul>
					</li>
					<li class="slide">
						<a class="side-menu__item" href="earnings.php"><i class="side-menu__icon fas fa-history"></i><span class="side-menu__label">Earning History</span></a>
					</li>
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fas fa-money-check-alt  menu-icons"></i><span class="side-menu__label">Withdrawals</span><i class="angle fe fe-chevron-down"></i></a>
						<ul class="slide-menu">
							<li><a class="slide-item" href="withdrawal-request.php">Wallet Withdrawal</a></li>
							<li><a class="slide-item" href="bank-withdrawal.php">Bank Withdrawal</a></li>
							<li><a class="slide-item" href="withdrawal-history.php">Withdrawal History</a></li>
							<li><a class="slide-item" href="approved-withdrawal-history.php">Approved Withdrawal History</a></li>
						</ul>
					</li>
					<li class="slide">
						<a class="side-menu__item" href="account-upgrade.php"><i class="side-menu__icon fas fa-sort-amount-up"></i><span class="side-menu__label">Upgrade Account</span></a>
					</li>
					<li class="slide">
						<a class="side-menu__item" href="edit.php"><i class="side-menu__icon fas fa-user-edit"></i><span class="side-menu__label">Edit Account</span></a>
					</li>
				</ul>
			</div>
		</aside>
		<!-- main-sidebar -->

			<!-- main-content -->
			<div class="main-content app-content">

				<!-- main-header -->
			<div class="main-header sticky side-header nav nav-item">
				<div class="container-fluid">
					<div class="main-header-left ">
						<div class="app-sidebar__toggle mobile-toggle" data-toggle="sidebar">
							<a class="open-toggle" href="#"><i class="header-icons" data-eva="menu-outline"></i></a>
							<a class="close-toggle" href="#"><i class="header-icons" data-eva="close-outline"></i></a>
						</div>
					</div>
					<div class="main-header-center">
						<div class="responsive-logo">
							<a href="index.php">
                                <img src="assets/img/brand/logo3.png" class="mobile-logo" alt="logo">
                                <img style="margin-left:30px;" src="assets/img/brand/logo2.png" class="dark-mobile-logo" alt="logo">
                            </a>
						</div>
					</div>
					<div class="main-header-right">
						<div class="nav nav-item  navbar-nav-right ml-auto">
							<form class="navbar-form nav-item my-auto d-lg-none" role="search">
								<div class="input-group nav-item my-auto">
									<input type="text" class="form-control" placeholder="Search">
									<span class="input-group-btn">
										<button type="reset" class="btn btn-default">
											<i class="ti-close"></i>
										</button>
										<button type="submit" class="btn btn-default nav-link">
											<i class="ti-search"></i>
										</button>
									</span>
								</div>
							</form>
							<div class="nav-item full-screen fullscreen-button">
								<a class="new nav-link full-screen-link" href="#"><i class="ti-fullscreen"></i></span></a>
							</div>
							<div class="dropdown  nav-item main-header-message ">
								<a class="new nav-link" href="#" ><i class="ti-headphone"></i></i><span class=" pulse"></span></a>
								<div class="dropdown-menu dropdown-menu-arrow animated fadeInUp ">
									<div class="main-dropdown-header  d-sm-none">
										<a class="main-header-arrow" href="#"><i class="icon ion-md-arrow-back"></i></a>
									</div>
									<div class="menu-header-content text-center d-flex">
										<div class="">
											<h6 class="menu-header-title text-white mb-0">Contact Us</h6>
										</div>
									</div>
									<div class="main-message-list chat-scroll">
										<a href="#" class="p-3 d-flex border-bottom">
											<div class="  drop-img  cover-image  " data-image-src="assets/img/faces/support.jpg">
												<span class="avatar-status bg-teal"></span>
											</div>

											<div class="wd-90p">
												<div class="d-flex">
													<h5 class="mb-1 name">Send Us a Contact Request</h5>												</div>
												<p class="mb-0 desc">We reply in less than 24hours</p>
											</div>
										</a>
									</div>
									<div class="text-center dropdown-footer">
										<a href="contact.php">CONTINUE</a>
									</div>
								</div>
							</div>
							<button class="navbar-toggler navresponsive-toggler d-sm-none" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
								aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon fe fe-more-vertical "></span>
							</button>
							<div class="dropdown main-profile-menu nav nav-item nav-link">
								<a class="profile-user" href="#"><img alt="" src="assets/img/faces/user.png"></a>
								<div class="dropdown-menu dropdown-menu-arrow animated fadeInUp">
									<div class="main-header-profile header-img">
										<div class="main-img-user" style="background-color:black;"><img alt="" src="assets/img/faces/user-white.png"></div>
										<h6><?php echo $_SESSION['fname'] ?></h6><span><?php echo $_SESSION['level'] ?> Trading Portfolio</span>
									</div>
									<a class="dropdown-item" href="edit.php"><i class="far fa-user"></i> My Profile</a>
									<a class="dropdown-item" href="account-upgrade.php"><i class="fas fa-sort-amount-up"></i> Upgrade Account</a>
									<a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out-alt"></i> Sign Out</a>
								</div>
							</div>
							<div class="dropdown main-header-message right-toggle">
								<a class="nav-link " data-toggle="sidebar-right" data-target=".sidebar-right">
									<i class="ti-menu tx-20 bg-transparent"></i>
								</a>
							</div>
							<!--/search-right-->
							<ul class="header-search mx-lg-4">
								<div class="w3hny-search">
									<!-- -----------------------------------------------------------Google Translate API------------------------------------------>                            
									<div id='google_translate_element'/>
									<!-- -----------------------------------------------------------Google Translate API------------------------------------------>    
								</div>
							</ul>
							<!--//search-right-->	
						</div>
					</div>
				</div>
			</div>
			<!-- /main-header -->

				<!-- mobile-header -->
			<div class="responsive main-header collapse" id="navbarSupportedContent-4">
				<div class="mb-1 navbar navbar-expand-lg  nav nav-item  navbar-nav-right responsive-navbar navbar-dark d-sm-none ">
					<div class="navbar-collapse">
						<div class="d-flex order-lg-2 ml-auto">
							<div class="d-md-flex">
								<div class="nav-item full-screen fullscreen-button">
									<a class="new nav-link full-screen-link" href="#"><i class="ti-fullscreen"></i></span></a>
								</div>
							</div>
							<div class="dropdown  nav-item main-header-message ">
								<a class="new nav-link" href="#" ><i class="ti-headphone"></i></i><span class=" pulse"></span></a>
								<div class="dropdown-menu dropdown-menu-arrow animated fadeInUp ">
									<div class="main-dropdown-header  d-sm-none">
										<a class="main-header-arrow" href="#"><i class="icon ion-md-arrow-back"></i></a>
									</div>
									<div class="menu-header-content text-center d-flex">
										<div class="">
											<h6 class="menu-header-title text-white mb-0">Contact Us</h6>
										</div>
									</div>
									<div class="main-message-list chat-scroll">
										<a href="#" class="p-3 d-flex border-bottom">
											<div class="  drop-img  cover-image  " data-image-src="assets/img/faces/support.jpg">
												<span class="avatar-status bg-teal"></span>
											</div>

											<div class="wd-90p">
												<div class="d-flex">
													<h5 class="mb-1 name">Send Us a Contact Request</h5>												</div>
												<p class="mb-0 desc">We reply in less than 24hours</p>
											</div>
										</a>
									</div>
									<div class="text-center dropdown-footer">
										<a href="contact.php">CONTINUE</a>
									</div>
								</div>
							</div>
							<div class="dropdown main-profile-menu nav nav-item nav-link">
								<a class="profile-user" href="#"><img alt="" src="assets/img/faces/user.png"></a>
								<div class="dropdown-menu dropdown-menu-arrow animated fadeInUp">
									<div class="main-header-profile header-img">
										<div class="main-img-user" style="background-color:black;"><img alt="" src="assets/img/faces/user-white.png"></div>
										<h6><?php echo $_SESSION['fname'] ?></h6><span><?php echo $_SESSION['level'] ?> Trading Portfolio</span>
									</div>
									<a class="dropdown-item" href="edit.php"><i class="far fa-edit"></i> Edit Profile</a>
									<a class="dropdown-item" href="account-upgrade.php"><i class="fas fa-sort-amount-up"></i> Upgrade Account</a>
									<a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out-alt"></i> Sign Out</a>
								</div>
							</div>
							<div class="dropdown main-header-message right-toggle">
								<a class="nav-link " data-toggle="sidebar-right" data-target=".sidebar-right">
									<i class="ti-menu tx-20 bg-transparent"></i>
								</a>
							</div>
							<!--/search-right-->
							<ul class="header-search mx-lg-4">
								<div class="w3hny-search">
									<!-- -----------------------------------------------------------Google Translate API------------------------------------------>                            
									<div id='google_translate_element'/>
									<!-- -----------------------------------------------------------Google Translate API------------------------------------------>    
								</div>
							</ul>
							<!--//search-right-->
						</div>
					</div>
				</div>
			</div>
			<!-- mobile-header -->