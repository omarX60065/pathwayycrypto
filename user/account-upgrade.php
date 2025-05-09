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
        <title>Pathway Crypto - Account Upgrade</title>

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
							<p class="text-warning mb-0 hover-cursor">Account Upgrade</p>
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
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com" rel="noopener" target="_blank"><span class="blue-text">Ticker Tape</span></a> by Pathway Crypto</div>
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
					<div class="col-sm-6 col-lg-6 col-xl-3">
						<div class="card pricing-card">
							<div class="card-body text-center">
								<div class="card-category">BASIC</div>
								<div class="display-5 my-4">$500</div>
								<ul class="list-unstyled leading-loose">
									<li><strong>Begin Your</strong> Journey</li>
									<li><i class="fe fe-check text-success mr-2"></i>500 - $2,999 USD</li>
									<li><i class="fe fe-check text-success mr-2"></i>24/7 Customer ServiceProfessional Chart</li>
									<li><i class="fe fe-check text-success mr-2"></i>Professional Chart</li>
									<li><i class="fe fe-check text-success mr-2"></i>Trading Alerts</li>
									<li><i class="fe fe-check text-success mr-2"></i>Trading Central (Basic)</li>
									<li><i class="fe fe-check text-success mr-2"></i>A Personal Coach</li>
									<li><i class="fe fe-check text-success mr-2"></i>$1,000 USD Bonus</li>
									<li><i class="fe fe-x text-danger mr-2"></i>SMS & Email Alerts</li>
									<li><i class="fe fe-x text-danger mr-2"></i>Live Trading With Expert</li>
									<li><i class="fe fe-x text-danger mr-2"></i>Financial Expert Decision</li>
									<li><i class="fe fe-x text-danger mr-2"></i>Research Website</li>
								</ul>
								<div class="text-center mt-6">
									<a class="btn btn-success btn-block" href="#">UPGRADE</a>
								</div>
							</div>
						</div>
					</div><!-- col-end -->
					<div class="col-sm-6 col-lg-6 col-xl-3">
						<div class="card pricing-card">
							<div class="card-body text-center">
								<div class="card-category">GOLD</div>
								<div class="display-5 my-4">$3000</div>
								<ul class="list-unstyled leading-loose">
									<li><strong>Stay In</strong> Touch</li>
									<li><i class="fe fe-check text-success mr-2"></i>$3,000 - $9,999 USD</li>
									<li><i class="fe fe-check text-success mr-2"></i>24/7 Customer ServiceProfessional Chart</li>
									<li><i class="fe fe-check text-success mr-2"></i>Professional Chart</li>
									<li><i class="fe fe-check text-success mr-2"></i>Trading Alerts</li>
									<li><i class="fe fe-check text-success mr-2"></i>Trading Central (Basic)</li>
									<li><i class="fe fe-check text-success mr-2"></i>A Personal Coach</li>
									<li><i class="fe fe-check text-success mr-2"></i>$1,000 USD Bonus</li>
									<li><i class="fe fe-check text-success mr-2"></i>SMS & Email Alerts</li>
									<li><i class="fe fe-x text-danger mr-2"></i>Live Trading With Expert</li>
									<li><i class="fe fe-x text-danger mr-2"></i>Financial Expert Decision</li>
									<li><i class="fe fe-x text-danger mr-2"></i>Research Website</li>
								</ul>
								<div class="text-center mt-6">
									<a class="btn btn-success btn-block" data-target="#modaldemo1" data-toggle="modal" href="#">UPGRADE</a>
								</div>
								<!-- Small modal -->
									<div class="modal" id="modaldemo1">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h6 class="modal-title">Gold Level</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
												</div>
												<div class="modal-body">
													<p style="color:white;">To upgrade your Pathway Crypto trading account to Gold Level, please contact our Live Chat Agent or send an email to <a style="color:#ffa93d;" href="mailto:support@PATHWAYYCRYPTO.net">support@PATHWAYYCRYPTO.net,</a> to recieve the appropriate payment details. Alternatively, you can also contact your Account Manager to help you with this upgrade.</p>
												</div>
												<div class="modal-footer justify-content-center">
													<button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
												</div>
											</div>
										</div>
									</div>
								<!-- End Small Modal -->
							</div>
						</div>
					</div><!-- col-end -->
					<div class="col-sm-6 col-lg-6 col-xl-3">
						<div class="card pricing-card ">
							<div class="card-status bg-success"></div>
							<div class="card-body text-center">
								<div class="card-category">PREMIUM</div>
								<div class="display-5 my-4">$10,000</div>
								<ul class="list-unstyled leading-loose">
									<li><strong>Get The</strong> Most!</li>
									<li><i class="fe fe-check text-success mr-2"></i>$10,000 - $49,999 USD</li>
									<li><i class="fe fe-check text-success mr-2"></i>24/7 Customer ServiceProfessional Chart</li>
									<li><i class="fe fe-check text-success mr-2"></i>Professional Chart</li>
									<li><i class="fe fe-check text-success mr-2"></i>Trading Alerts</li>
									<li><i class="fe fe-check text-success mr-2"></i>Trading Central (Basic)</li>
									<li><i class="fe fe-check text-success mr-2"></i>A Personal Coach</li>
									<li><i class="fe fe-check text-success mr-2"></i>$1,000 USD Bonus</li>
									<li><i class="fe fe-check text-success mr-2"></i>SMS & Email Alerts</li>
									<li><i class="fe fe-check text-success mr-2"></i>Live Trading With Expert</li>
									<li><i class="fe fe-check text-success mr-2"></i>Financial Expert Decision</li>
									<li><i class="fe fe-x text-danger mr-2"></i>Research Website</li>
								</ul>
								<div class="text-center mt-6">
									<a class="btn btn-success btn-block" data-target="#modaldemo2" data-toggle="modal" href="#">UPGRADE</a>
								</div>
								<!-- Small modal -->
									<div class="modal" id="modaldemo2">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h6 class="modal-title">Premium Level</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
												</div>
												<div class="modal-body">
													<p style="color:white;">To upgrade your Pathway Crypto trading account to Premium Level, please contact our Live Chat Agent or send an email to <a style="color:#ffa93d;" href="mailto:support@PATHWAYYCRYPTO.net">support@PATHWAYYCRYPTO.net,</a> to recieve the appropriate payment details. Alternatively, you can also contact your Account Manager to help you with this upgrade.</p>
												</div>
												<div class="modal-footer justify-content-center">
													<button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
												</div>
											</div>
										</div>
									</div>
								<!-- End Small Modal -->
							</div>
						</div>
					</div><!-- col-end -->
					<div class="col-sm-6 col-lg-6 col-xl-3">
						<div class="card pricing-card ">
							<div class="card-body text-center">
								<div class="card-category">PLATINUM</div>
								<div class="display-5 my-4">$50,000</div>
								<ul class="list-unstyled leading-loose">
									<li><strong>Welcome </strong>Legend!</li>
									<li><i class="fe fe-check text-success mr-2"></i>$50,000 - upwards</li>
									<li><i class="fe fe-check text-success mr-2"></i>24/7 Customer ServiceProfessional Chart</li>
									<li><i class="fe fe-check text-success mr-2"></i>Professional Chart</li>
									<li><i class="fe fe-check text-success mr-2"></i>Trading Alerts</li>
									<li><i class="fe fe-check text-success mr-2"></i>Trading Central (Basic)</li>
									<li><i class="fe fe-check text-success mr-2"></i>A Personal Coach</li>
									<li><i class="fe fe-check text-success mr-2"></i>$1,000 USD Bonus</li>
									<li><i class="fe fe-check text-success mr-2"></i>SMS & Email Alerts</li>
									<li><i class="fe fe-check text-success mr-2"></i>Live Trading With Expert</li>
									<li><i class="fe fe-check text-success mr-2"></i>Financial Expert Decision</li>
									<li><i class="fe fe-check text-success mr-2"></i>Research Website</li>
								</ul>
								<div class="text-center mt-6">
									<a class="btn btn-success btn-block" data-target="#modaldemo3" data-toggle="modal" href="#">UPGRADE</a>
								</div>
								<!-- Small modal -->
									<div class="modal" id="modaldemo3">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h6 class="modal-title">Platinum Level</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
												</div>
												<div class="modal-body">
													<p style="color:white;">To upgrade your Pathway Crypto trading account to Platinum Level, please contact our Live Chat Agent or send an email to <a style="color:#ffa93d;" href="mailto:support@PATHWAYYCRYPTO.net">support@PATHWAYYCRYPTO.net,</a> to recieve the appropriate payment details. Alternatively, you can also contact your Account Manager to help you with this upgrade.</p>
												</div>
												<div class="modal-footer justify-content-center">
													<button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
												</div>
											</div>
										</div>
									</div>
								<!-- End Small Modal -->
							</div>
						</div>
					</div><!-- col-end -->
				</div>
				<!-- /row -->
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
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/cryptocurrencies/prices-all/" rel="noopener" target="_blank"><span class="blue-text">Cryptocurrency Markets</span></a> by Pathway Crypto</div>
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
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/BTCUSD/?exchange=BITFINEX" rel="noopener" target="_blank"><span class="blue-text">BTCUSD Chart</span></a> by Pathway Crypto</div>
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
									<p class="tx-12 tx-gray-500 mb-0">The timeline lets you scan through important updates on bitcoin since its inception from Trading view</p>
								</div>
								<div class="transcation-scroll">
									<ul class="list-unstyled mg-b-0 mt-2">
										<!-- TradingView Widget BEGIN -->
											<div class="tradingview-widget-container">
											  <div class="tradingview-widget-container__widget"></div>
											  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/BTCUSD/history-timeline/" rel="noopener" target="_blank"><span class="blue-text">BTCUSD</span></a> History by Pathway Crypto</div>
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
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/cryptocurrencies/prices-all/" rel="noopener" target="_blank"><span class="blue-text">Cryptocurrency Markets</span></a> by Pathway Crypto</div>
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




