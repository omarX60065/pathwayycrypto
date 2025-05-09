<?php 
    session_start();
    include('../connect.php');
    if(!isset($_SESSION['userid'])){
            header("location:signin.php");
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
        <title>PATHWAYYCRYPTO - Deposits</title>

<?php include('header.php'); ?>

				<!-- container -->
				<div class="container-fluid">

					<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="left-content">
						<div class="d-flex">
							<i class="mdi mdi-home text-muted hover-cursor"></i>
							<p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</p>
							<p class="text-warning mb-0 hover-cursor">Deposits</p>
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

				<div class="row">
					<div class="col-sm-4">
						<div class="card custom-card">
							<div class="card-body ht-100p">
								<div>
									<div class="carousel slide" data-ride="carousel" id="carouselExample3">
										<ol class="carousel-indicators">
											<li class="active" data-slide-to="0" data-target="#carouselExample3"></li>
											<li data-slide-to="1" data-target="#carouselExample3"></li>
										</ol>
										<div class="carousel-inner">
											<div class="carousel-item active">
												<img alt="img" class="d-block w-100" src="assets/img/photos/bitcoin.jpg">
											</div>
											<div class="carousel-item">
												<img alt="img" class="d-block w-100" src="assets/img/photos/ethereum.jpg">
											</div>
										</div>

									</div>
									<br>
										<h2 class="card-title mb-3">What to do next?</h2>
								<p class="card-text">1)Please send the money equivalent in any of your desired cryptocurrency to the respective wallets below. (Make sure to send enough to cover any coin transaction fees!) You will need to intiate the payment using your software or online wallet and copy/paste any of the addresses you choose and payment amount into it. We will email you when all funds have been received.
									<br><br>
								2)After sending payment, review the status of your transaction on this page. Once the payment is confirmed several times in the block chain, the payment will be completed, and we will receive confirmation on our end and credit your account immediately. The confirmation process usually takes 10-45 minutes but varies based on the coin's target block time and number of block confirms required.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="card">
							<img class="card-img-top w-100" src="assets/img/photos/bitcoin-logo.jpg" alt="">
							<div class="card-body">
								<h4 class="card-title mb-3">Bitcoin Address</h4>
								<p class="card-text">Please note that your deposit is with the wallet address provided by PATHWAYYCRYPTO trading Platform, do not invest to any copied wallet address or bank details provided by any account manager or third party other than that provided by PATHWAYYCRYPTO, hence your deposit is invalid.</p>
								<a class="modal-effect btn btn-outline-warning btn-block" data-effect="effect-just-me" data-toggle="modal" href="#modaldemo8">View Wallet</a>
							</div>
						 </div>
					</div>
					<!-- Modal effects -->
						<div class="modal" id="modaldemo8">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content modal-content-demo">
									<div class="modal-header">
										<h6 class="modal-title">Bitcoin Address</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
									</div>
									<div class="modal-body">
										<?php
										   $sql= 'SELECT * from wallets where userid = 1 ';
										    $result = $conn->query($sql);
										    while ($rows = mysqli_fetch_assoc($result)){
										    	
										?>
										<h6><?php echo $rows['address']; }?></h6>
									</div>
									<div class="modal-footer">
										<button class="btn ripple btn-warning" data-dismiss="modal" type="button">Close</button>
									</div>
								</div>
							</div>
						</div>
					<!-- End Modal effects-->
					<div class="col-sm-4">
						<div class="card">
							<img class="card-img-top w-100" src="assets/img/photos/ethereum-logo.JPG" alt="">
							<div class="card-body">
								<h4 class="card-title mb-3">Ethereum Address</h4>
								<p class="card-text">Please note that your deposit is with the wallet address provided by PATHWAYYCRYPTO trading Platform, do not invest to any copied wallet address or bank details provided by any account manager or third party other than that provided by PATHWAYYCRYPTO, hence your deposit is invalid.</p>
								<a class="modal-effect btn btn-outline-warning btn-block" data-effect="effect-just-me" data-toggle="modal" href="#modaldemo9">View Wallet</a>
							</div>
						 </div>
					</div>
					<!-- Modal effects -->
						<div class="modal" id="modaldemo9">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content modal-content-demo">
									<div class="modal-header">
										<h6 class="modal-title">Ethereum Address</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
									</div>
									<div class="modal-body">
										<?php
										   $sql= 'SELECT * from wallets where userid = 2 ';
										    $result = $conn->query($sql);
										    while ($rows = mysqli_fetch_assoc($result)){
										    	
										?>
										<h6><?php echo $rows['address']; }?></</h6>
									</div>
									<div class="modal-footer">
										<button class="btn ripple btn-warning" data-dismiss="modal" type="button">Close</button>
									</div>
								</div>
							</div>
						</div>
					<!-- End Modal effects-->
					<div class="col-sm-4">
						<div class="card">
							<img class="card-img-top w-100" src="assets/img/photos/bnb-bnb-logo.png" alt="">
							<div class="card-body">
								<h4 class="card-title mb-3">BNB Address</h4>
								<p class="card-text">Please note that your deposit is with the wallet address provided by PATHWAYYCRYPTO trading Platform, do not invest to any copied wallet address or bank details provided by any account manager or third party other than that provided by PATHWAYYCRYPTO, hence your deposit is invalid.</p>
								<a class="modal-effect btn btn-outline-warning btn-block" data-effect="effect-just-me" data-toggle="modal" href="#modaldemo9">View Wallet</a>
							</div>
						 </div>
					</div>
					<!-- Modal effects -->
					<div class="modal" id="modaldemo9">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content modal-content-demo">
									<div class="modal-header">
										<h6 class="modal-title">BNB Address</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
									</div>
									<div class="modal-body">
										<?php
										   $sql= 'SELECT * from wallets where userid = 3 ';
										    $result = $conn->query($sql);
										    while ($rows = mysqli_fetch_assoc($result)){
										    	
										?>
										<h6><?php echo $rows['address']; }?></</h6>
									</div>
									<div class="modal-footer">
										<button class="btn ripple btn-warning" data-dismiss="modal" type="button">Close</button>
									</div>
								</div>
							</div>
						</div>
					 
					 <!-- End Modal effects-->
					<div class="col-sm-4">
						<div class="card">
							<img class="card-img-top w-100" src="assets/img/photos/USDT.png" alt="">
							<div class="card-body">
								<h4 class="card-title mb-3">USDT(trc 20) Address</h4>
								<p class="card-text">Please note that your deposit is with the wallet address provided by PATHWAYYCRYPTO trading Platform, do not invest to any copied wallet address or bank details provided by any account manager or third party other than that provided by PATHWAYYCRYPTO, hence your deposit is invalid.</p>
								<a class="modal-effect btn btn-outline-warning btn-block" data-effect="effect-just-me" data-toggle="modal" href="#modaldemo9">View Wallet</a>
							</div>
						 </div>
					</div>
					<!-- Modal effects -->
						<div class="modal" id="modaldemo9">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content modal-content-demo">
									<div class="modal-header">
										<h6 class="modal-title">USDT(TRC 20) Address</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
									</div>
									<div class="modal-body">
										<?php
										   $sql= 'SELECT * from wallets where userid = 5 ';
										    $result = $conn->query($sql);
										    while ($rows = mysqli_fetch_assoc($result)){
										    	
										?>
										<h6><?php echo $rows['address']; }?></</h6>
									</div>
									<div class="modal-footer">
										<button class="btn ripple btn-warning" data-dismiss="modal" type="button">Close</button>
									</div>
								</div>
							</div>
						</div>
					<!-- End Modal effects-->
					 <!-- End Modal effects-->
					<div class="col-sm-4">
						<div class="card">
							<img class="card-img-top w-100" src="assets/img/photos/TRUMP.png" alt="">
							<div class="card-body">
								<h4 class="card-title mb-3">Trump Address</h4>
								<p class="card-text">Please note that your deposit is with the wallet address provided by PATHWAYYCRYPTO trading Platform, do not invest to any copied wallet address or bank details provided by any account manager or third party other than that provided by PATHWAYYCRYPTO, hence your deposit is invalid.</p>
								<a class="modal-effect btn btn-outline-warning btn-block" data-effect="effect-just-me" data-toggle="modal" href="#modaldemo9">View Wallet</a>
							</div>
						 </div>
					</div>
					<!-- Modal effects -->
						<div class="modal" id="modaldemo9">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content modal-content-demo">
									<div class="modal-header">
										<h6 class="modal-title">Trump Address</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
									</div>
									<div class="modal-body">
										<?php
										   $sql= 'SELECT * from wallets where userid = 4 ';
										    $result = $conn->query($sql);
										    while ($rows = mysqli_fetch_assoc($result)){
										    	
										?>
										<h6><?php echo $rows['address']; }?></</h6>
									</div>
									<div class="modal-footer">
										<button class="btn ripple btn-warning" data-dismiss="modal" type="button">Close</button>
									</div>
								</div>
							</div>
						</div>
					<!-- End Modal effects-->
					<div class="col-sm-4">
						<div class="card">
							<img class="card-img-top w-100" src="assets/img/photos/tron-trx-logo.png" alt="">
							<div class="card-body">
								<h4 class="card-title mb-3">Tron Address</h4>
								<p class="card-text">Please note that your deposit is with the wallet address provided by PATHWAYYCRYPTO trading Platform, do not invest to any copied wallet address or bank details provided by any account manager or third party other than that provided by PATHWAYYCRYPTO, hence your deposit is invalid.</p>
								<a class="modal-effect btn btn-outline-warning btn-block" data-effect="effect-just-me" data-toggle="modal" href="#modaldemo9">View Wallet</a>
							</div>
						 </div>
					</div>
					<!-- Modal effects -->
						<div class="modal" id="modaldemo9">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content modal-content-demo">
									<div class="modal-header">
										<h6 class="modal-title">Tron Address</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
									</div>
									<div class="modal-body">
										<?php
										   $sql= 'SELECT * from wallets where userid = 6 ';
										    $result = $conn->query($sql);
										    while ($rows = mysqli_fetch_assoc($result)){
										    	
										?>
										<h6><?php echo $rows['address']; }?></</h6>
									</div>
									<div class="modal-footer">
										<button class="btn ripple btn-warning" data-dismiss="modal" type="button">Close</button>
									</div>
								</div>
							</div>
						</div>
					<!-- End Modal effects-->
					<div class="col-sm-4">
						<div class="card">
							<img class="card-img-top w-100" src="assets/img/photos/Solana.png" alt="">
							<div class="card-body">
								<h4 class="card-title mb-3">Solana Address</h4>
								<p class="card-text">Please note that your deposit is with the wallet address provided by PATHWAYYCRYPTO trading Platform, do not invest to any copied wallet address or bank details provided by any account manager or third party other than that provided by PATHWAYYCRYPTO, hence your deposit is invalid.</p>
								<a class="modal-effect btn btn-outline-warning btn-block" data-effect="effect-just-me" data-toggle="modal" href="#modaldemo9">View Wallet</a>
							</div>
						 </div>
					</div>
					<!-- Modal effects -->
						<div class="modal" id="modaldemo9">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content modal-content-demo">
									<div class="modal-header">
										<h6 class="modal-title">Solana Address</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
									</div>
									<div class="modal-body">
										<?php
										   $sql= 'SELECT * from wallets where userid = 7 ';
										    $result = $conn->query($sql);
										    while ($rows = mysqli_fetch_assoc($result)){
										    	
										?>
										<h6><?php echo $rows['address']; }?></</h6>
									</div>
									<div class="modal-footer">
										<button class="btn ripple btn-warning" data-dismiss="modal" type="button">Close</button>
									</div>
								</div>
							</div>
						</div>
					<!-- End Modal effects-->
					<div class="col-sm-4">
						<div class="card">
							<img class="card-img-top w-100" src="assets/img/photos/pepe-pepe-logo.png" alt="">
							<div class="card-body">
								<h4 class="card-title mb-3">PEPE Address</h4>
								<p class="card-text">Please note that your deposit is with the wallet address provided by PATHWAYYCRYPTO trading Platform, do not invest to any copied wallet address or bank details provided by any account manager or third party other than that provided by PATHWAYYCRYPTO, hence your deposit is invalid.</p>
								<a class="modal-effect btn btn-outline-warning btn-block" data-effect="effect-just-me" data-toggle="modal" href="#modaldemo9">View Wallet</a>
							</div>
						 </div>
					</div>
					<!-- Modal effects -->
						<div class="modal" id="modaldemo9">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content modal-content-demo">
									<div class="modal-header">
										<h6 class="modal-title">PEPE Address</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
									</div>
									<div class="modal-body">
										<?php
										   $sql= 'SELECT * from wallets where userid = 8 ';
										    $result = $conn->query($sql);
										    while ($rows = mysqli_fetch_assoc($result)){
										    	
										?>
										<h6><?php echo $rows['address']; }?></</h6>
									</div>
									<div class="modal-footer">
										<button class="btn ripple btn-warning" data-dismiss="modal" type="button">Close</button>
									</div>
								</div>
							</div>
						</div>
					<!-- End Modal effects-->
					 
				</div>

				<!-- row -->
				<div class="row row-sm">
					<div class="col-xl-4 col-lg-6 col-md-12">
						<div class="card crypto crypt-warning overflow-hidden">
							<script type="text/javascript" src="currency.js"></script>
							<div class="coinmarketcap-currency-widget" data-currencyid="1" data-base="USD" data-secondary="" data-ticker="true" data-rank="false" data-marketcap="true" data-volume="true" data-statsticker="true" data-stats="USD">
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-lg-6 col-md-12">
						<div class="card crypto crypt-danger overflow-hidden">
							<script type="text/javascript" src="currency.js"></script>
							<div class="coinmarketcap-currency-widget" data-currencyid="1027" data-base="USD" data-secondary="" data-ticker="true" data-rank="false" data-marketcap="true" data-volume="true" data-statsticker="true" data-stats="USD">
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-lg-12 col-md-12">
						<div class="card crypto  crypt-success overflow-hidden">
							<script type="text/javascript" src="currency.js"></script>
							<div class="coinmarketcap-currency-widget" data-currencyid="52" data-base="USD" data-secondary="" data-ticker="true" data-rank="false" data-marketcap="true" data-volume="true" data-statsticker="true" data-stats="USD"></div>
						</div>
					</div>
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

		<!-- index js -->
		<script src="assets/js/dashboard.js"></script>


		<!-- Custom js-->
		<script src="assets/js/custom.js"></script>

        <!-- Switcher js -->
		<script src="assets/switcher/js/switcher.js"></script>

		<?php include('ft-translate.php'); ?>

    </body>
</html>




