<?php 
include ("../connect.php");
 session_start();
$errors = array();

//if user click continue button in forgot password form
    if(isset($_POST['check-email'])){
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $check_email = "SELECT * FROM customers WHERE email='$email'";
        $run_sql = mysqli_query($conn, $check_email);
        if(mysqli_num_rows($run_sql) > 0){
            $code = rand(999999, 111111);
            $insert_code = "UPDATE customers SET code = $code WHERE email = '$email'";
            $run_query =  mysqli_query($conn, $insert_code);

            if($run_query){
		            	 //Send Email
		        $to = $email;
		        $subject = "Password Reset Code";
		        $message = "Your password reset code is $code";
		        $headers = "From : support@PATHWAYYCRYPTO.com \r\n";
		        $headers .= "MIME-Version: 1.0" . "\r\n";
		        $headers .= "Content-type:text/html;charset=utf-8" . "\r\n";

		        mail($to,$subject,$message,$headers);

                if($run_query){
                    $info = "We've sent a password reset otp to your email - $email";
                    $_SESSION['info'] = $info;
                    $_SESSION['email'] = $email;
                    header('location: reset-code.php');
                    exit();
                }else{
                    $errors['otp-error'] = "Failed while sending code!";
                }
            }else{
                $errors['db-error'] = "Something went wrong!";
            }
        }else{
            $errors['email'] = "This email address does not exist in our database!";
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
        <title>PATHWAYYCRYPTO - Forgot Password</title>

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


    </head>
	<body class="main-body">

		<!-- Loader -->
		<div id="global-loader" class="light-loader">
			<img src="assets/img/loaders/loader.svg" class="loader-img" alt="Loader">
		</div>
        <!-- /Loader -->


        
		<!-- Main-signin-wrapper -->
		<div class="my-auto page">
			<div class="main-signin-wrapper">
				<div class="main-card-signin forgot-password d-md-flex wd-100p">
					<div class="wd-md-50p  page-signin-style p-md-5 p-4 text-white d-none d-md-block ">
						<div class="my-auto authentication-pages">
							<div>
								<img src="assets/img/brand/logo3.png" class="m-0 mb-4" alt="logo">
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
					<div class="p-5 wd-md-50p">
						<div class="main-signin-header">
							<h2>Forgot Password!</h2>
							<h4>Please Enter Your Email</h4>
							<?php
		                        if(count($errors) > 0){
		                            ?>
		                            <div class="alert alert-danger text-center">
		                                <?php 
		                                    foreach($errors as $error){
		                                        echo $error;
		                                    }
		                                ?>
		                            </div>
		                            <?php
		                        }
		                    ?>
							<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
								<div class="form-group">
									<label>Email</label>
										<input class="form-control" name="email" placeholder="Enter your email" type="text">
								</div>
								<button  name="check-email" class="btn btn-main-primary btn-block">Continue</button>
							</form>
						</div>
						<div class="main-signup-footer mg-t-10">
							<p>Forget it, <a href="signin.php"> Send me back</a> to the sign in screen.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Main-signin-wrapper -->


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

		
		<!-- Custom js -->
		<script src="assets/js/custom.js"></script>

        <!-- Switcher js -->
		<script src="assets/switcher/js/switcher.js"></script>

	</body>

</html>
