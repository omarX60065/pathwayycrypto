<?php 
    session_start();
	$msg = '';
  	$mgsClass = '';

  //check for submit
  if(filter_has_var(INPUT_POST, 'request')) {
    $fname = htmlspecialchars($_POST['fname']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
  
    //Check Required Fields
    if(!empty($email) && !empty($fname) && !empty($message)){
      //Passed
      //Recipient Email
      $toEmail = 'support@PATHWAYYCRYPTO.COM';
      $subject = 'Contact Request From '.$fname;
      $body = '<h2>Contact Request</h2>
      <h4>Full Name</h4><p>'.$fname.'</p>
      <h4>Email</h4><p>'.$email.'</p>
      <h4>Message</h4><p>'.$message.'</p>';

      //Email Headers 
      $headers = "MIME-Version:1.0" ."\r\n";
      $headers .= "Content-Type:text/html; charset=UTF-8" ."\r\n";

      //Additional Headers
      $headers .= "From :" .$fname. "<" .$email.">" ."\r\n";


      if(mail($toEmail, $subject, $body, $headers)){
        //Email Sent
        $msg = "Your Email has been sent. Expect a reply soon.";
        $msgClass = "alert-success";
      } else{
        //Email not Sent
        $msg = "Oops Your Email was not sent. Wait a few minutes and try again.";
        $msgClass = "alert-danger";
      }
      
    } else{
      //Failed
      $msg = "Please fill in all fields.";
      $msgClass = "alert-danger";
    }
  }

  if(!isset($_SESSION['userid'])){
            header("location:../login.php");
            exit();
        }
  
?>
<!DOCTYPE html>
<html lang="en">
	
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="Author" content="Vortex">

		<!-- Title -->
        <title>PATHWAYYCRYPTO - Contact</title>

        <!--- Internal Sweet-Alert css-->
		<link href="assets/plugins/sweet-alert/sweetalert.css" rel="stylesheet">

		<?php include('header.php') ?>
				<!-- container -->
				<div class="container-fluid">

					<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="left-content">
						<div class="d-flex">
							<i class="mdi mdi-home text-muted hover-cursor"></i>
							<p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</p>
							<p class="text-warning mb-0 hover-cursor">Contact Request</p>
						</div>
					</div>
				</div>
				<!-- /breadcrumb -->

				<!-- row  -->
				<div class="row">
					<div class="col-xl-12 col-md-12 col-lg-12">
						<div class=" overflow-hidden bg-transparent card-crypto-scroll shadow-none">
							<div class="js-conveyor-example">
								<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com" rel="noopener" target="_blank"><span class="blue-text">Ticker Tape</span></a> by PATHWAYYCRYPTO</div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
  {
  "symbols": [
    {
      "proName": "BITSTAMP:BTCUSD",
      "title": "BTC/USD"
    },
    {
      "proName": "BITSTAMP:ETHUSD",
      "title": "ETH/USD"
    },
    {
      "description": "",
      "proName": "FTX:DOGEUSD"
    },
    {
      "description": "",
      "proName": "BINANCE:XRPUSDT"
    },
    {
      "description": "",
      "proName": "BINANCE:BCHUSDT"
    },
    {
      "description": "LTC/USD",
      "proName": "BITFINEX:LTCUSD"
    },
    {
      "description": "TRON/UD",
      "proName": "BITFINEX:TRXUSD"
    },
    {
      "description": "BSV/USD",
      "proName": "BITTREX:BSVUSD"
    }
  ],
  "showSymbolLogo": true,
  "colorTheme": "dark",
  "isTransparent": false,
  "displayMode": "adaptive",
  "locale": "en"
}
  </script>
</div>
<!-- TradingView Widget END -->            
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->

				
					
					

				<!-- row opened -->
				<div class="row row-sm">
					<div class="col-xl-12">
						<div class="card">
							<div class="card-header pb-0">
								<div class="d-flex justify-content-between">
									<h4 class="card-title mg-b-0">Contact Request</h4>
									<i class="mdi mdi-dots-horizontal text-gray"></i>
								</div>
							</div>
							<div class="card-body">
								<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
									<div class="form-field col-md-6">
					                    <?php if ( $msg != '' ) : ?>
					                      <div class="alert <?php echo $msgClass; ?>">
					                        <?php echo $msg; ?>
					                      </div>
					                    <?php endif; ?>
					                </div>
									<div class="row row-sm">
										<div class="col-sm-6">
											<div class="form-group">
												<label class="form-label">Full Name</label>
													<input class="form-control"  value="<?php echo $_SESSION['fname'] ?>" required name="fname" type="text">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="form-label">Email</label>
													<input class="form-control" value="<?php echo $_SESSION['email'] ?>" required name="email" type="email">
											</div>
										</div>
									</div>
									<div class="row row-sm">
										<div class="col-sm-8">
											<div class="form-group">
												<label class="form-label">Message </label>
													<textarea class="form-control" placeholder="Enter Wallet" required name="message" rows="5" type="text"></textarea>
											</div>
										</div>
									</div>
									<div class="col-sm-6 col-md-3">
										<button name="request" class="btn btn-warning btn-block">Request</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<!--/div-->
				</div>

				<!-- row -->
				<div class="row row-sm row-deck">
					<div class="col-xl-4 col-lg-12">
						<div class="card overflow-hidden ">
							<div class="card-header pb-0">
								<div class="d-flex justify-content-between">
									<h4 class="card-title mg-b-10">Market Info</h4>
									<i class="mdi mdi-dots-horizontal text-gray"></i>
								</div>
							</div>
							<div class="card-body p-0">
								<div class="">
									<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/cryptocurrencies/prices-all/" rel="noopener" target="_blank"><span class="blue-text">Cryptocurrency Markets</span></a> by PATHWAYYCRYPTO</div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
  {
  "width": "420",
  "height": "520",
  "defaultColumn": "overview",
  "screener_type": "crypto_mkt",
  "displayCurrency": "USD",
  "colorTheme": "dark",
  "locale": "en"
}
  </script>
</div>
<!-- TradingView Widget END -->
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-8 col-lg-12">
						<div class="card card-bitcoin">
							<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div id="tradingview_3c213"></div>
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/BTCUSD/?exchange=BITFINEX" rel="noopener" target="_blank"><span class="blue-text">BTCUSD Chart</span></a> by PATHWAYYCRYPTO</div>
  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  <script type="text/javascript">
  new TradingView.widget(
  {
  "width": 850,
  "height": 610,
  "symbol": "BITFINEX:BTCUSD",
  "interval": "D",
  "timezone": "Etc/UTC",
  "theme": "dark",
  "style": "1",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "allow_symbol_change": true,
  "container_id": "tradingview_3c213"
}
  );
  </script>
</div>
<!-- TradingView Widget END -->
						</div>
					</div>
				</div>
				<!-- /row  -->

				<!-- row -->
				<div class="row row-sm">
					<div class="col-md-12 col-xl-4 col-lg-12">
						<div class="card overflow-hidden recent-operations-card">
							<div class="card-body p-0">
								<div class="p-3 pb-0">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-10">BTCUSD Timeline</h4>
										<i class="mdi mdi-dots-horizontal text-gray"></i>
									</div>
									<p class="tx-12 tx-gray-500 mb-0">The timeline lets you scan through important updates on bitcoin since its inception from PATHWAYYCRYPTO</p>
								</div>
								<div class="transcation-scroll">
									<ul class="list-unstyled mg-b-0 mt-2">
										<!-- TradingView Widget BEGIN -->
											<div class="tradingview-widget-container">
											  <div class="tradingview-widget-container__widget"></div>
											  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/BTCUSD/history-timeline/" rel="noopener" target="_blank"><span class="blue-text">BTCUSD</span></a> History by PATHWAYYCRYPTO</div>
											  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-timeline.js" async>
											  {
											  "symbol": "BITSTAMP:BTCUSD",
											  "colorTheme": "dark",
											  "isTransparent": false,
											  "largeChartUrl": "",
											  "displayMode": "regular",
											  "width": 420,
											  "height": 830,
											  "locale": "en"
											}
											  </script>
											</div>
<!-- TradingView Widget END -->
									</ul>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-8 col-lg-12">
						<div class="row row-sm">
							<div class="col-lg-6">
								<div class="card">
									<div class="card-body text-center crypto-buy-sell">
										<script type="text/javascript" src="currency.js"></script><div class="coinmarketcap-currency-widget" data-currencyid="1839" data-base="USD" data-secondary="" data-ticker="true" data-rank="true" data-marketcap="true" data-volume="true" data-statsticker="true" data-stats="USD"></div>
										
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="card">
									<div class="card-body text-center">
										<script type="text/javascript" src="currency.js"></script><div class="coinmarketcap-currency-widget" data-currencyid="2" data-base="USD" data-secondary="" data-ticker="true" data-rank="true" data-marketcap="true" data-volume="true" data-statsticker="true" data-stats="USD"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="row row-sm">
							<div class="col-lg-6">
								<div class="card">
									<div class="card-body text-center crypto-buy-sell">
										<script type="text/javascript" src="currency.js"></script><div class="coinmarketcap-currency-widget" data-currencyid="74" data-base="USD" data-secondary="" data-ticker="true" data-rank="true" data-marketcap="true" data-volume="true" data-statsticker="true" data-stats="USD"></div>
										
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="card">
									<div class="card-body text-center">
										<script type="text/javascript" src="currency.js"></script><div class="coinmarketcap-currency-widget" data-currencyid="512" data-base="USD" data-secondary="" data-ticker="true" data-rank="true" data-marketcap="true" data-volume="true" data-statsticker="true" data-stats="USD"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- row -->

				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="card overflow-hidden">
							<div class="card-body">
								<div class="">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-10">Crypto currencies marketing values</h4>
										<i class="mdi mdi-dots-horizontal text-gray"></i>
									</div>
								</div>
								<div class="table-responsive market-values">
									<table class="table table-bordered table-hover table-striped text-nowrap mb-0 tx-13" >
										<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/cryptocurrencies/prices-all/" rel="noopener" target="_blank"><span class="blue-text">Cryptocurrency Markets</span></a> by PATHWAYYCRYPTO</div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
  {
  "width": "125	0",
  "height": "600",
  "defaultColumn": "overview",
  "screener_type": "crypto_mkt",
  "displayCurrency": "USD",
  "colorTheme": "dark",
  "locale": "en"
}
  </script>
</div>
<!-- TradingView Widget END -->
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->


				</div>
				<!-- Container closed -->

			</div>
			<!-- main-content closed -->

			<!-- Right-sidebar-->
			<div class="sidebar sidebar-right sidebar-animate">
				<div class="p-3">
					<a href="#" class="text-right float-right" data-toggle="sidebar-right" data-target=".sidebar-right"><i class="fe fe-x"></i></a>
				</div>
				<div class="tab-menu-heading border-0 card-header">
					<div class="card-title mb-0">SUB MENU</div>
					<div class="card-options ml-auto">
						<a href="#" class="sidebar-remove"><i class="fe fe-x"></i></a>
					</div>
				</div>
				<div class="tabs-menu ">
					<!-- Tabs -->
					<ul class="nav panel-tabs">
						<li class=""><a href="#tab" class="active show" data-toggle="tab">Profile</a></li>
						<li class=""><a href="#tab1" data-toggle="tab" class="">Deposits</a></li>
					</ul>
				</div>
				<div class="panel-body tabs-menu-body side-tab-body p-0 border-0 ">
					<div class="tab-content">
						<div class="tab-pane active" id="tab">
							<div class="card-body p-0">
								<div class="header-user text-center mt-4">
									<span class="avatar avatar-xxl brround mx-auto"><img src="assets/img/faces/user-white.png" alt="Profile-img" class="avatar avatar-xxl brround"></span>
									<div class=" text-center font-weight-semibold user mt-3 h6 mb-0"><?php echo $_SESSION['fname'] ?></div>
									<span class="text-muted"><?php echo $_SESSION['level'] ?> Trading Portfolio</span>
								</div>
								<a class="dropdown-item  border-top" href="#">
									<i class="dropdown-icon fe fe-edit mr-2"></i> Edit Profile
								</a>
								<a class="dropdown-item border-top" href="signup.php">
									<i class="dropdown-icon  fas fa-sort-amount-up mr-2"></i> Add Another Account
								</a>
								<a class="dropdown-item  border-top" href="contact.php">
									<i class="dropdown-icon fe fe-mail mr-2"></i> Contact Us
								</a>
								<a class="dropdown-item  border-top" href="faq.php">
									<i class="dropdown-icon fe fe-help-circle mr-2"></i> Need Help?
								</a>
								<div class="card-body border-top border-bottom">
									<div class="row">
										<div class="col-4 text-center">
											<a class="" href="#"><i class="dropdown-icon mdi  mdi-message-outline fs-20 m-0 leading-tight"></i></a>
											<div>Inbox</div>
										</div>
										<div class="col-4 text-center">
											<a class="" href="#"><i class="dropdown-icon fas fa-sort-amount-up fs-20 m-0 leading-tight"></i></a>
											<div>Account Upgrade</div>
										</div>
										<div class="col-4 text-center">
											<a class="" href="logout.php"><i class="dropdown-icon mdi mdi-logout-variant fs-20 m-0 leading-tight"></i></a>
											<div>Sign out</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Right-sidebar-closed -->
			
			<!-- Footer opened -->
			<div class="main-footer ht-40">
				<div class="container-fluid pd-t-0-f ht-100p">
					<span>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved. This site was made with <i style="color:#009f4d;" class="fab fa-soundcloud" aria-hidden="true"></i> by <span style="color:#009f4d;" >VORTEX</span></span>
				</div>
			</div>
			<!-- Footer closed -->
		</div>
		<!--End Page -->

		<!-- Back-to-top -->
		<a href="#top" id="back-to-top"><i class="la la-chevron-up"></i></a>

		<!-- Jquery js-->
		<script src="assets/plugins/jquery/jquery.min.js"></script>

		<!-- Bootstrap js-->
		<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

		<!-- Ionicons js-->
		<script src="assets/plugins/ionicons/ionicons.js"></script>

		<!-- Moment js -->
		<script src="assets/plugins/moment/moment.js"></script>

		<!-- P-scroll js -->
		<script src="assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="assets/plugins/perfect-scrollbar/p-scroll.js"></script>

		<!-- Rating js-->
		<script src="assets/plugins/rating/jquery.rating-stars.js"></script>
		<script src="assets/plugins/rating/jquery.barrating.js"></script>

		<!-- Custom Scroll bar Js-->
		<script src="assets/plugins/mscrollbar/jquery.mCustomScrollbar.concat.min.js"></script>

		<!-- eva-icons js -->
		<script src="assets/js/eva-icons.min.js"></script>

		<!-- Sidebar js -->
		<script src="assets/plugins/side-menu/sidemenu.js"></script>

		<!-- Right-sidebar js -->
		<script src="assets/plugins/sidebar/sidebar.js"></script>
		<script src="assets/plugins/sidebar/sidebar-custom.js"></script>

		<!-- Sticky js-->
		<script src="assets/js/sticky.js"></script>

		
		<!-- Datepicker js -->
        <script src="assets/plugins/jquery-ui/ui/widgets/datepicker.js"></script>

		<!--Chart bundle min js -->
		<script src="assets/plugins/chart.js/Chart.bundle.min.js"></script>
		<script src="assets/plugins/raphael/raphael.min.js"></script>
		<script src="assets/plugins/peity/jquery.peity.min.js"></script>

		<!-- JQuery sparkline js -->
		<script src="assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

		<!-- Sampledata js -->
		<script src="assets/js/chart.flot.sampledata.js"></script>

		<!-- Internal Modal js-->
		<script src="assets/js/modal.js"></script>

		<!-- Perfect-scrollbar js -->
		<script src="assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="assets/plugins/perfect-scrollbar/p-scroll.js"></script>

		<!-- Internal  Flot js-->
		<script src="assets/plugins/jquery.flot/jquery.flot.js"></script>
		<script src="assets/plugins/jquery.flot/jquery.flot.pie.js"></script>
		<script src="assets/plugins/jquery.flot/jquery.flot.categories.js"></script>
		<script src="assets/js/dashboard.sampledata.js"></script>
		<script src="assets/js/chart.flot.sampledata.js"></script>

		<!-- Internal Newsticker js-->
		<script src="assets/plugins/newsticker/jquery.jConveyorTicker.js"></script>
        <script src="assets/js/newsticker.js"></script>

		<!-- Internal Nice-select js-->
		<script src="assets/plugins/jquery-nice-select/js/jquery.nice-select.js"></script>
        <script src="assets/plugins/jquery-nice-select/js/nice-select.js"></script>


		<!-- Internal Sweet-Alert js-->
		<script src="assets/plugins/sweet-alert/sweetalert.min.js"></script>
		<script src="assets/plugins/sweet-alert/jquery.sweet-alert.js"></script>

		<!-- index js -->
		<script src="assets/js/dashboard.js"></script>


		<!-- Custom js-->
		<script src="assets/js/custom.js"></script>

        <!-- Switcher js -->
		<script src="assets/switcher/js/switcher.js"></script>


		<?php include('ft-translate.php'); ?>

		
    </body>
</html>




