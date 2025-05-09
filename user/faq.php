<?php 
    session_start();
    $msg = '';
    $mgsClass = '';
    include ("../connect.php");
    if(!isset($_SESSION['userid'])){
            header("location:signin.php");
            exit();
        }
        $userid=$_SESSION['userid'];
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
        <title>PATHWAYYCRYPTO - FAQs</title>

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
							<p class="text-warning mb-0 hover-cursor">FAQ - Frequently Answered Questions</p>
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

				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-body">
								<h4 class="font-weight-semibold tx-15">What do I need to start Investing?</h4>
								<p class="text-muted mb-0 tx-13">First and foremost, what you need to do is have an account with us by clicking <a href="user/signup.php">HERE</a> Secondly, you will select an investment plan and make a deposit of $500 through the payment system.</p>
							</div>
							<div class="card-body ">
								<h4 class="font-weight-semibold tx-15">What Is The Minimum Amount For Withdrawal?</h4>
								<p class="text-muted mb-0 tx-13">The minimum withdrawal amount is $0.10 for PerfectMoney, Payeer/ $2 for Bitcoin Cash, LTC & ETH/ $5 and $10 for Bitcoin.</p>
							</div>
							<div class="card-body">
								<h4 class="font-weight-semibold tx-15">Are Withdrawals Instant Or Manual?</h4>
								<p class="text-muted mb-0 tx-13">All withdrawal request are processed by our Back Office Department within 24 hours, however the time required for the funds to be transferred to your account will depend on the day you issue a request, as withdrawals dont take place on weekends.</p>
							</div>
							<div class="card-body ">
								<h4 class="font-weight-semibold tx-15">Can I Receive A Referral Commission Without Making A Deposit?</h4>
								<p class="text-muted mb-0 tx-13">Yes, you can get a referral commission without making a personal deposit.</p>
							</div>
							<div class="card-body">
								<h4 class="font-weight-semibold tx-15">How Many Times Can A User Make Deposits Into Their Account?</h4>
								<p class="text-muted mb-0 tx-13">A user can make deposits into his or her accounts as frequently as they want. There is no limitations on the number of deposits that a user can make into their investment account.</p>
							</div>
							<div class="card-body ">
								<h4 class="font-weight-semibold tx-15">Which Payment Methods Can I Use To Make A Deposit?</h4>
								<p class="text-muted mb-0 tx-13">  We accept: PerfectMoney, Payeer, Bitcoin, Bitcoin Cash, Litecoin and Ethereum.</p>
							</div>
						</div>
					</div>
				</div>
				<!-- row closed -->
				
				</div>
				<!-- Container closed -->

			</div>
			<!-- main-content closed -->

			<!-- Right-sidebar-->
			<?php include('footer.php')?>

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




