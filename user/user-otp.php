<?php
include('../connect.php');
$errors = array();
session_start();


//if user click verification code submit button
    if(isset($_POST['check'])){
        $otp_code = mysqli_real_escape_string($conn, $_POST['otp']);
        $check_code = "SELECT * FROM customers WHERE code = $otp_code";
        $code_res = mysqli_query($conn, $check_code);
        if(mysqli_num_rows($code_res) > 0){
            $fetch_data = mysqli_fetch_assoc($code_res);
            $fetch_code = $fetch_data['code'];
            $email = $fetch_data['email'];
            $name = $fetch_data['fullname'];
            $code = 0;
            $status = 'verified';
            $update_otp = "UPDATE customers SET code = $code, verified = '$status' WHERE code = $fetch_code";
            $update_res = mysqli_query($conn, $update_otp);
            if($update_res){
            	$subject = "Welcome Message";
	            $message = "Hi There, Welcome $name to PATHWAYYCRYPTO 

	            \r\n \r\n We're excited and humbled to have you on board. 

	            \r\n \r\n We realize that a lot of individuals are working hard to create a better future for themselves, so we decided to build PATHWAYYCRYPTO to propel you towards that goal.

	            \r\n \r\n By offering you quality access to the global crypto investment markets, we provide the opportunity to play on a level playing field with the world and are committed to keeping expanding our listed assets. Our business principle is to maintain a passion for exceeding customer expectations and building long-term, mutually beneficial relationships with our users, partners, and employees of PATHWAYYCRYPTO.

	            \r\n \r\n With this passion, we are constantly enhancing our technology to ensure that you have the best state-of-the-art tools available at your fingertips and to ensure you have a choice in finding tools that will help you meet your trading, risk management, and asset allocation goals.

	            \r\n \r\n One important piece that PATHWAYYCRYPTO adds on is the human experience. We understand how daunting financial investments can be, especially with our hard-earned money.

	            \r\n \r\nHence, our team will be with you every step of the way, providing services that can help make your journey easier.

	            \r\n \r\nWith PATHWAYYCRYPTO, You Are Never Alone. Our promise is unwavering —we always put our users first —whether it’s deciding which features to build, keeping your cash and securities protected, or offering products that allow everyone to participate in and benefit from the financial system.

	            \r\n \r\nOnce again, we’d like to welcome you to the community of talented individuals who are looking to day-trade, invest for the short term, and/or build long-term wealth. 

	            \r\n \r\nThank you $name for Trading. \r\PATHWAYYCRYPTO TEAM 2021";

	            $sender = "From: support@PATHWAYYCRYPTO.com";
	            if(mail($email, $subject, $message, $sender)){
                $_SESSION['name'] = $name;
                $_SESSION['email'] = $email;
                $_SESSION['userid'] = $userid;
                header('location: index.php');
                exit();
            }else{
                $errors['otp-error'] = "Failed while updating code!";
            }
        }else{
            $errors['otp-error'] = "You've entered an incorrect code!";
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
        <title>PATHWAYYCRYPTO - USER OTP</title>

        <!-- Favicon -->
        <link rel="icon" href="assets/img/brand/favicon.png" type="image/x-icon"/>

		<!-- Icons css -->
		<link href="assets/css/icons.html" rel="stylesheet">

		<!---Fontawesome css-->
		<link href="assets/plugins/fontawesome-free/css/all.min.css" rel="stylesheet">

		<!---Ionicons css-->
		<link href="assets/plugins/ionicons/css/ionicons.min.css" rel="stylesheet">

		<!---Typicons css-->
		<link href="assets/plugins/typicons.font/typicons.css" rel="stylesheet">

		<!---Feather css-->
		<link href="assets/plugins/feather/feather.css" rel="stylesheet">

		<!---Falg-icons css-->
        <link href="assets/plugins/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">

		
		<!---Style css-->
		<link href="assets/css/style.css" rel="stylesheet">
		<link href="assets/css/style-dark.css" rel="stylesheet">

        <!-- skin css-->
        <link href="assets/css/skin-modes.css" rel="stylesheet">

		<!--- Animations css-->
		<link href="assets/css/animate.css" rel="stylesheet">

        <!-- Switcher css -->
		<link href="assets/switcher/css/switcher.css" rel="stylesheet">
		<link rel="stylesheet" href="assets/switcher/demo.css">

		<!-- Internal TelephoneInput css-->
		<link rel="stylesheet" href="assets/plugins/telephoneinput/telephoneinput.css">


    </head>
	<body class="main-body">

		<!-- Loader -->
		<div id="global-loader" class="light-loader">
			<img src="assets/img/loaders/loader.svg" class="loader-img" alt="Loader">
		</div>
        <!-- /Loader -->


        
		<!-- main-signin-wrapper -->
		<div class="my-auto page page-h">
			<div class="main-signin-wrapper">
				<div class="main-card-signin d-md-flex wd-100p">
				<div class="wd-md-50p login d-none d-md-block page-signin-style p-5 text-white" >
					<div class="my-auto authentication-pages">
						<div>
							<img src="assets/img/brand/logo2.png" class="m-0 mb-4" alt="logo">
							<h5 class="mb-4">We make it easy for you in the crypto trading industry</h5>
							<p class="mb-5">Get Unlimited Profits with no risk. Do More, Get More.
							We offer a vast range of opportunities and
							investment pricing plans.
							We grant access to all the major cryptocurrency trading platforms in the world.
							PATHWAYYCRYPTO - one of the best cryptocurrency brokers on the market for traders all around the world.</p>
							<a href="../about.php" class="btn btn-danger">Learn More</a>
						</div>
					</div>
				</div>
				<div class="sign-up-body wd-md-50p">
					<div class="main-signin-header">
						<h2>Account Verification</h2>
						 <div>
                            <?php 
			                    if(isset($_SESSION['info'])){
			                        ?>
			                        <div class="alert alert-success text-center">
			                            <?php echo $_SESSION['info']; ?>
			                        </div>
			                        <?php
			                    }
			                    ?>
			                    <?php
			                    if(count($errors) > 0){
			                        ?>
			                        <div class="alert alert-danger text-center">
			                            <?php
			                            foreach($errors as $showerror){
			                                echo $showerror;
			                            }
			                            ?>
			                        </div>
			                        <?php
			                    }
		                    ?>
                    </div>
						<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
							<div class="form-group">
									<input class="form-control" placeholder="Enter Code" type="text" name="otp">
							</div>
							<button  name="check" class="btn btn-main-primary btn-block">Submit</button>
						</form>
					</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /main-signin-wrapper -->


		<!-- JQuery min js -->
		<script src="assets/plugins/jquery/jquery.min.js"></script>

		<!-- Bootstrap Bundle js -->
		<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

		<!-- Ionicons js -->
		<script src="assets/plugins/ionicons/ionicons.js"></script>

		<!-- Moment js -->
		<script src="assets/plugins/moment/moment.js"></script>

		<!-- eva-icons js -->
		<script src="assets/js/eva-icons.min.js"></script>

		<!-- Rating js-->
		<script src="assets/plugins/rating/jquery.rating-stars.js"></script>
		<script src="assets/plugins/rating/jquery.barrating.js"></script>

		<!-- Internal TelephoneInput js-->
		<script src="assets/plugins/telephoneinput/telephoneinput.js"></script>
		<script src="assets/plugins/telephoneinput/inttelephoneinput.js"></script>

		
		<!-- Custom js -->
		<script src="assets/js/custom.js"></script>

        <!-- Switcher js -->
		<script src="assets/switcher/js/switcher.js"></script>

	</body>
</html>
