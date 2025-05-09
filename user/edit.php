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
<?php
//mysql_select_db($database_cn, $cn);
		$password = '';
      	$passError = '';

	    $update = '';
	    $updateClass = '';

if(isset($_POST['update'])){

$userid = mysqli_escape_string($conn, $_POST['userid']);      
$fname = mysqli_escape_string($conn, $_POST['fname']);
$email = mysqli_escape_string($conn, $_POST['email']);
$phone = mysqli_escape_string($conn, $_POST['phone']);
$address = mysqli_escape_string($conn, $_POST['address']);
$validID = mysqli_escape_string($conn, $_POST['validID']);
$password = 1;
$repass = 1;

if ($password !== $repass){ 

      $passError = 'The Passwords you entered do not match, please review and try again';
      $passErrorClass = 'alert-danger';

} else{

      //Continue Update



      
      $sql=" UPDATE customers SET fullname='$fname', email='$email', phone='$phone', address='$address', validID='$validID' WHERE userid =".$userid;

     if ($conn->query($sql) === TRUE) {

      $update = 'You have successfully updated your profile. You may have to log out of your account for the chnages to take effect. Thank You.';
      $updateClass = 'alert-success';
}
}
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
        <title>PATHWAYYCRYPTO - Edit Profile</title>

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
							<p class="text-warning mb-0 hover-cursor">Edit Profile</p>
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
				<div class="row row-sm">
					<!-- Col -->
					<div class="col-lg-4">
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="pl-0">
									<div class="main-profile-overview">
										<div class="main-img-user profile-user"><img alt="" src="assets/img/faces/user.png"></div>
										<div class="d-flex justify-content-between mg-b-20">
											<div>
												<h5 class="main-profile-name"><?php echo $_SESSION['fname'];?></h5>
												<p class="main-profile-name-text">Investor</p>
											</div>
										</div>
									</div><!-- main-profile-overview -->
								</div>
							</div>
						</div>
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label tx-13 mg-b-25">
									Conatct
								</div>
								<div class="main-profile-contact-list">
									<div class="media">
										<div class="media-icon bg-warning-transparent text-warning">
											<i class="icon ion-md-phone-portrait"></i>
										</div>
										<div class="media-body">
											<span>Mobile</span>
											<div>
												+<?php echo $_SESSION['phone'];?>
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-icon bg-success-transparent text-success">
											<i class="fas fa-envelope-open-text"></i>
										</div>
										<div class="media-body">
											<span>Email</span>
											<div>
												<?php echo $_SESSION['email'];?>
											</div>
										</div>
									</div>
								</div><!-- main-profile-contact-list -->
							</div>
						</div>
					</div>
					<!-- /Col -->

					<!-- Col -->
					<div class="col-lg-8">
						<div class="card">
							<div class="card-body">
								<div class="mb-4 main-content-label">Personal Information</div>
									<div>
		                                <?php if ( $passError != '' ) : ?>
		                                <div class="alert <?php echo $passErrorClass; ?>">
		                                      <?php echo $passError; ?>
		                                </div>
		                                      <?php endif; ?>
									</div>
		                          	<div>
		                                <?php if ( $update != '' ) : ?>
		                                <div class="alert <?php echo $updateClass; ?>">
		                                      <?php echo $update; ?>
		                                </div>
		                                      <?php endif; ?>
		                          	</div>
								<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="form-horizontal">
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">Full Name</label>
											</div>
											<div class="col-md-9">
												<input type="text" class="form-control" name="fname"  placeholder="User Name" value="<?php echo $_SESSION['fname'];?>">
											</div>
										</div>
									</div>
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">Email</label>
											</div>
											<div class="col-md-9">
												<input type="email" class="form-control" name="email"  placeholder="First Name" value="<?php echo $_SESSION['email'];?>">
											</div>
										</div>
									</div>
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">Phone</label>
											</div>
											<div class="col-md-9">
												<input type="number" class="form-control" name="phone"  placeholder="Last Name" value="<?php echo $_SESSION['phone'];?>">
											</div>
										</div>
									</div>
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">Address</label>
											</div>
											<div class="col-md-9">
												<input type="text" class="form-control" name="address"  placeholder="Address" value="<?php echo $_SESSION['address'];?>">
											</div>
										</div>
									</div>
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">Valid ID No</label>
											</div>
											<div class="col-md-9">
												<input type="text" class="form-control" name="validID"  placeholder="Valid ID Number" value="<?php echo $_SESSION['validID'];?>">
											</div>
										</div>
									</div>
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">Balance</label>
											</div>
											<div class="col-md-9">
												<input type="text" class="form-control" disabled  placeholder="Nick Name" value="<?php echo $_SESSION['balance']?>">
											</div>
										</div>
									</div>
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">Account Level</label>
											</div>
											<div class="col-md-9">
												<input type="text" class="form-control" disabled  placeholder="Designation" value="<?php echo $_SESSION['level'];?>">
											</div>
										</div>
									</div>
									<div class="form-group ">
										<div class="row">
											<div class="col-md-9">
												<input type="hidden" class="form-control" value="<?php echo $_SESSION['userid'];?>" name="userid">
											</div>
										</div>
									</div>
									<div class="mb-4 main-content-label">Contact Info</div>
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">Email<i>(required)</i></label>
											</div>
											<div class="col-md-9">
												<input type="text" class="form-control"  placeholder="Email" value="<?php echo $_SESSION['email'];?>">
											</div>
										</div>
									</div>
									<div class="mb-4 main-content-label">Email Preferences</div>
									<div class="form-group mb-0">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">Verified Users Only</label>
											</div>
											<div class="col-md-9">
												<div class="custom-controls-stacked">
													<label class="ckbox mg-b-10"><input checked="" type="checkbox"><span> Accept to receive post or page notification emails</span></label>
													<label class="ckbox"><input checked="" type="checkbox"><span> Accept to receive email sent to multiple recipients</span></label>
												</div>
											</div>
										</div>
									</div>
							</div>
							<div class="card-footer">
								<button name="update" type="submit" class="btn btn-warning waves-effect waves-light">Update Profile</button>
							</div>
						</form>
						</div>
					</div>
					<!-- /Col -->
				</div>
				<!-- row closed -->
				
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




